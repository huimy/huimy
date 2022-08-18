<?php
/* *
 * 功能：彩虹易支付异步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 */

require_once("lib/epay.config.php");
require_once("lib/EpayCore.class.php");

//计算得出通知验证结果
$epay = new EpayCore($epay_config);
$verify_result = $epay->verifyNotify();

if($verify_result) {//验证成功

	//商户订单号
	$out_trade_no = $_GET['out_trade_no'];

	//彩虹易支付交易号
	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式
	$type = $_GET['type'];

	//支付金额
	$money = $_GET['money'];

	if ($_GET['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
		//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
		//如果有做过处理，不执行商户的业务程序
	}

	require_once('../../../../../wp-config.php');

if(version_compare(phpversion(), '7.0.0') >= 0){
	$json = file_get_contents('php://input');
}else{
	$json = $GLOBALS['HTTP_RAW_POST_DATA'];
}

				if($jsondata['test'] != "true"){
				$jsondata = json_decode($json, true);  
				$imsg = json_decode(urldecode($jsondata['msg']),true);
						$amount = $wpdb->escape($imsg['full_order_info']['orders']['0']['payment']);
						$title = $wpdb->escape($imsg['full_order_info']['orders']['0']['title']);
						$id = $wpdb->escape($jsondata['id']);
						global $wpdb, $wppay_table_name;
						$order=$wpdb->get_row("select * from $wppay_table_name where order_num='".$title."'");
						if($order){
							if(!$order->order_status){
								$wpdb->query("UPDATE $wppay_table_name SET order_pay_num = '".$id."',order_status=1 WHERE order_num = '".$title."'");
								echo '{"code":0,"msg":"success"}';
							}
						}
						echo "success";
					}else{
						echo"fail";
					}
	
}
else {
	//验证失败
	echo "fail";
}
?>

