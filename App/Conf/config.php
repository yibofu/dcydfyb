<?php
if (!defined('THINK_PATH')) exit();
$config	= require '../config.php';
$curcfg = array(
	'alipay_config'=>array(
        'partner' =>'2088711587487712', 
		'key'=>'hcpxir6t63azob1ro4hy63e5x4e5wftx',
		'sign_type'=>strtoupper('MD5'),
		'input_charset'=> strtolower('utf-8'),
		'cacert'=> getcwd().'\\cacert.pem',
		'transport'=> 'http',
      ),
   
	 'alipay'   =>array(	 
		 'seller_email'=>'pay@tapotiexie.com',		 
		 'notify_url'=>'http://www.youlunchaxun.com:83/Pay/notifyurl', 		 
		 'return_url'=>'http://www.youlunchaxun.com:83/Pay/returnurl',		 
		 'successpage'=>'Order/myorder?ordtype=payed',   		 
		 'errorpage'=>'Order/myorder?ordtype=unpay', 
	 ),
	 
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
		'/^problem$/' => 'Problem/index',
		'/^problem\/(\d+)$/' => 'Problem/index?p=:1',
		'/^blog$/' => 'Blog/index',
		'/^blog\/(\d+)$/' => 'Blog/index?p=:1',
		'/^industry$/' => 'Industry/index',
		'/^industry\/(\d+)$/' => 'Industry/index?p=:1',
		'jfzn' => 'Confirm/jfzn',
	 	'djcn' => 'Confirm/djcn',
		'about' => 'Html/about',
		//'free' => 'Free/index',
		'/^yt$/' => 'Line/index?name=yt',
		'/^yt\/(\d+)$/' => 'Line/index?name=yt&p=:1',
		'/^om$/' => 'Line/index?name=om',
		'/^om\/(\d+)$/' => 'Line/index?name=om&p=:1',
	 	'/^lg$/' => 'Index/redirect_url',
		 '/^line\/(\d+)$/' => 'Line/info?id=:1',
	),
);

return array_merge($config,$curcfg);
?>