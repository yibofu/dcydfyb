<?php
if (!defined('THINK_PATH')) exit();
$config	= require '../../config.php';
$curcfg = array(
    'URL_CASE_INSENSITIVE' =>false,
	'DATA_CACHE_TYPE'=>'file', // 数据缓存方式 文件
    'DATA_CACHE_TIME'=>60,   // 数据缓存有效期 10 秒
	'URL_MODEL'=>0,

	
);

return array_merge($config,$curcfg);
?>