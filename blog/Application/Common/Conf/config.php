<?php
return array(
	//数据库配置信息
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => '127.0.0.1', // 服务器地址
		'DB_NAME'   => 'qdm179472216_db', // 数据库名
		'DB_USER'   => 'root', // 用户名
		'DB_PWD'    => 'root', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => 'blog_', // 数据库表前缀 
		'DB_CHARSET'=> 'utf8', // 字符集
		//'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
		'SAFECODE'  =>  'Rsd24h1%23Ed#g7dh56AF', // 安全码, 用于前端数据传输
		'URL_CASE_INSENSITIVE' => false,
	// 	'TMPL_EXCEPTION_FILE' => './Index/Home/View/404.html',
	// 	//'ERROR_PAGE' =>'./Index/Home/View/404.html'
	// 'URL_404_REDIRECT'      =>  './Index/Home/View/404.html',

		// 允许访问的模块列表
		'MODULE_ALLOW_LIST'    =>    array('Home','Blogsysemty'),
		'DEFAULT_MODULE'       =>    'Home',  // 默认模块

		// 开启路由
		'URL_ROUTER_ON'   => true, 
		'URL_ROUTE_RULES'=>array(    
			'm'=>'Message/index',
			'a'=>'About/index',
			'n'=>'News/index',
			'na'=>'News/articleview',
		),
);