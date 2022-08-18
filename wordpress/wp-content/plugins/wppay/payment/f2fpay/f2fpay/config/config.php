<?php
$config = array (
		//签名方式,默认为RSA2(RSA2048)
		'sign_type' => "RSA2",

		//支付宝公钥
		'alipay_public_key' => wppay_get_setting('f2fpay-public-key'),

		//商户私钥
		'merchant_private_key' => wppay_get_setting('f2fpay-private-key'),

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//应用ID
		'app_id' => wppay_get_setting('f2fpay-app-id'),

		//异步通知地址,只有扫码支付预下单可用
		'notify_url' => WPPAY_URL.'/payment/f2fpay/notify_url.php',

		//最大查询重试次数
		'MaxQueryRetry' => "10",

		//查询间隔
		'QueryDuration' => "3"
);