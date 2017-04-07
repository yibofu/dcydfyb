<?php
return array(
	 'DB_RW_SEPARATE'=>true,
	 'DEFAULT_TIMEZONE'=>'PRC', //设置时区
	 'DB_TYPE'   => 'mysql', // 数据库类型

	 'DB_HOST'   => 'localhost', // 服务器地址
	 //'DB_HOST'   => '182.254.154.82', // 服务器地址
	 'DB_NAME'   => 'dcyd', // 数据库名
	 'DB_USER'   => 'root', // 用户名
	 'DB_PWD'    => 'root', // 密码


	 'DB_PORT'   => 3306, // 端口
	 'DB_PREFIX' => 'dcyd_', // 数据库表前缀
	 'DB_FIELDS_CACHE'=>true,
	 'DB_SQL_BUILD_CACHE'=>true,
	 'URL_HTML_SUFFIX'=>'html',
	 'ERROR_MESSAGE'=>false,
	 'SHOW_ERROR_MSG'=>false,
	 'TAIL_STR'		=>	'lypt', 			//默认加密连接的字串
	 'SESSION_OPTIONS'         =>  array(
        'name'                =>  'dcyd',                    //设置session名
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
	 );
?>
