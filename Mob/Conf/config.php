<?php
if (!defined('THINK_PATH')) exit();
$config	= require '../../config.php';
$curcfg = array(
	//'HTTP_CACHE_CONTROL'    =>  'no-store, no-cache, must-revalidate', 
    //'URL_CASE_INSENSITIVE' =>false,
	//'DATA_CACHE_TYPE'=>'file', // 数据缓存方式 文件
    //'DATA_CACHE_TIME'=>10,   // 数据缓存有效期 10 秒
	//'APP_GROUP_LIST' => 'Home,User',
	//'DEFAULT_GROUP'  => 'Home',
	'URL_MODEL'=>3,
    'RedisIp'=>'127.0.0.1',
	'Auth'=>'9HnVmSem2UC9yZua',
	'DBselect'=>3,
	'SESSION_OPTIONS'         =>  array(
        'name'                =>  'ddkd',                    //设置session名
        'expire'              =>  24*3600*3,                      //SESSION保存3天
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
);

return array_merge($config,$curcfg);
?>