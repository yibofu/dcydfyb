<?php
if (!defined('THINK_PATH')) exit();
$config	= require '../../config.php';
$curcfg = array(
    'URL_CASE_INSENSITIVE' =>false,
	'DATA_CACHE_TYPE'=>'file', // 数据缓存方式 文件
    'DATA_CACHE_TIME'=>60,   // 数据缓存有效期 10 秒
	'URL_MODEL'=>0,

//	'ALIOSS_CONFIG'          => array(
//		'KEY_ID'             => 'LTAI1MFNp22bfnNS', // 阿里云oss key_id
//		'KEY_SECRET'         => '3VT0MCIDYZezG7ZlTRrPHv6kK0IfKI', // 阿里云oss key_secret
//		'END_POINT'          => 'http://oss-cn-shanghai.aliyuncs.com', // 阿里云oss endpoint
//		'BUCKET'             => 'dcyd'  // bucken 名称
//	),
);

return array_merge($config,$curcfg);
?>