<?php

use Google\Site_Kit_Dependencies\Google\Service\Adsense\Payment;

class WPPAY {
	
	private		$ip;
	public		$post_id;
	public		$user_id;
	
	public function __construct($post_id, $user_id){
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->post_id = $post_id;
		$this->user_id = $user_id?$user_id:0;
	}

	public function check_paid($order_num){

		global $wpdb, $wppay_table_name;

		$wppay_check = $wpdb->get_var($wpdb->prepare("SELECT id FROM $wppay_table_name
										WHERE	post_id = %d
										AND     order_status = 1
										AND		order_num = %s", $this->post_id, $order_num));
			

		$wppay_check = intval($wppay_check);

		return $wppay_check && $wppay_check > 0;
	}
	
	public function is_paid(){
		global $wpdb, $wppay_table_name;

		if( isset($_COOKIE['wppay_'.$this->post_id]) ){
			$order_num = $this->get_key($_COOKIE['wppay_'.$this->post_id]);
			$wppay_check = $wpdb->get_var($wpdb->prepare("SELECT id FROM $wppay_table_name
										WHERE	post_id = %d
										AND     order_status = 1
										AND		order_num = %s", $this->post_id, $order_num));
			$wppay_check = intval($wppay_check);

			return $wppay_check && $wppay_check > 0;
		}
		
		if($this->user_id){
			// user is logged in	
			$wppay_check = $wpdb->get_var($wpdb->prepare("SELECT id FROM $wppay_table_name
											WHERE   post_id = %d
											AND     order_status = 1
											AND		user_id = %d", $this->post_id, $this->user_id));
			if(!$wppay_check){
				if(wppay_get_setting('pay-ip')){
					$wppay_check = $wpdb->get_var($wpdb->prepare("SELECT id FROM $wppay_table_name
													WHERE	post_id = %d
													AND     order_status = 1
													AND		ip_address = %s
													AND		user_id = %d", $this->post_id, $this->ip, 0));
				}else{
					$wppay_check = 0;
				}
			}
		} else{
			// user not logged in, check by ip address
			if(wppay_get_setting('pay-ip')){
				$wppay_check = $wpdb->get_var($wpdb->prepare("SELECT id FROM $wppay_table_name
												WHERE	post_id = %d
												AND     order_status = 1
												AND		ip_address = %s
												AND		user_id = %d", $this->post_id, $this->ip, 0));
			}else{
				$wppay_check = 0;
			}
		}

		$wppay_check = intval($wppay_check);

		return $wppay_check && $wppay_check > 0;
	}
	
	public function add($order_num,$post_price){
		date_default_timezone_set('Asia/Shanghai');
		
		global $wpdb, $wppay_table_name;
		
		$result = $wpdb->insert($wppay_table_name, array(
			'order_num' => $order_num,
			'post_id' => $this->post_id,
			'post_price' => $post_price,
			'user_id' => $this->user_id,
			'order_time' => date("Y-m-d H:i:s"),
			'ip_address' => $this->ip), array('%s', '%d', '%s', '%d', '%s', '%s'));

		if($result){
	    	return true;
	    }
	    return false;
	}

	
	public function f2fpayQr($out_trade_no,$price){
		require_once WPPAY_PATH.'/payment/f2fpay/f2fpay/model/builder/AlipayTradePrecreateContentBuilder.php';
		require_once WPPAY_PATH.'/payment/f2fpay/f2fpay/service/AlipayTradeService.php';
		$outTradeNo = $out_trade_no;
		$totalAmount = $price;
		$subject = get_bloginfo('name').'????????????';
		$body = $subject;
		$operatorId = "wppay";

		$providerId = ""; //?????????pid,??????????????????????????????????????????
		$extendParams = new ExtendParams();
		$extendParams->setSysServiceProviderId($providerId);
		$extendParamsArr = $extendParams->getExtendParams();

		$timeExpress = "5m";
		$goodsDetailList = array();

		$goods1 = new GoodsDetail();
		$goods1->setGoodsId($out_trade_no);
		$goods1->setGoodsName($subject);
		$goods1->setPrice($price*100);
		$goods1->setQuantity(1);
		$goods1Arr = $goods1->getGoodsDetail();

		$goodsDetailList = array($goods1Arr);

		$appAuthToken = "";//?????????????????????

		$qrPayRequestBuilder = new AlipayTradePrecreateContentBuilder();
		$qrPayRequestBuilder->setOutTradeNo($outTradeNo);
		$qrPayRequestBuilder->setTotalAmount($totalAmount);
		$qrPayRequestBuilder->setTimeExpress($timeExpress);
		$qrPayRequestBuilder->setSubject($subject);
		$qrPayRequestBuilder->setBody($body);
		$qrPayRequestBuilder->setUndiscountableAmount($undiscountableAmount);
		$qrPayRequestBuilder->setExtendParams($extendParamsArr);
		$qrPayRequestBuilder->setGoodsDetailList($goodsDetailList);
		$qrPayRequestBuilder->setStoreId($storeId);
		$qrPayRequestBuilder->setOperatorId($operatorId);
		$qrPayRequestBuilder->setAlipayStoreId($alipayStoreId);

		$qrPayRequestBuilder->setAppAuthToken($appAuthToken);

		$qrPay = new AlipayTradeService($config);
		$qrPayResult = $qrPay->qrPay($qrPayRequestBuilder);
		return $qrPayResult;
	}

	public function youzan_token(){

		require_once WPPAY_PATH.'/payment/youzan/lib/YZTokenClient.php';
		$url = "https://open.youzan.com/oauth/token";
		$data = array("client_id" => wppay_get_setting('youzan-client-id'),"client_secret" => wppay_get_setting('youzan-client-secret'),"grant_type"=>'silent',"kdt_id"=>wppay_get_setting('youzan-shop-id'));
		$result = $this->curl_post($url,$data);
		$resultArray = json_decode($result,true);
		if(isset($resultArray['error_description'])){
			
		}else{
			return $resultArray['access_token'];
		}
		return false;
	}

	public function youzan_qr($out_trade_no,$price,$token){
		require_once WPPAY_PATH.'/payment/youzan/lib/YZTokenClient.php';
		$client = new YZTokenClient($token);
		$method = 'youzan.pay.qrcode.create'; //????????????api??????
		$api_version = '3.0.0'; //????????????api?????????
		$my_params = array('qr_name' => $out_trade_no,
		    'qr_price' => $price*100,
		    'qr_source' => $out_trade_no,
		    'qr_type' => 'QR_TYPE_NOLIMIT');
		$my_files = array();
		$qr = $client->post($method, $api_version, $my_params, $my_files);
		return $qr;
	}

	public function curl_post($url = '', $postData = ''){
		if(function_exists('curl_init')){
			$ch = curl_init();								//?????????curl
			curl_setopt($ch, CURLOPT_URL, $url);			//???????????????url	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	//?????????????????????????????????????????????
			curl_setopt($ch, CURLOPT_POST, true);			//??????post????????????
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);//??????post??????
			curl_setopt($ch, CURLOPT_TIMEOUT, 30); 			//??????cURL???????????????????????????
			
			//https?????? ??????????????????host
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}else{
			wp_die("???????????????curl?????????????????????????????????????????????????????????curl?????????????????????");
		}
	}

	public function get_key($key){
		return str_replace( md5(wppay_get_setting('pay-key')), '', base64_decode($key) );
	}

	public function set_key($order_num){
		return base64_encode($order_num.md5(wppay_get_setting('pay-key')));
	}


}

?>