<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
	// define('APP_PATH','./Application/');

	// 默认绑定Home模块


// define('BIND_MODULE', 'Blogsysemty');

define ('APP_PATH', './Application/');
	
define ('RUNTIME_PATH', './Runtime/');


// 定义运行时目录
//define('RUNTIME_PATH','./Runtime/');
/* $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile)/i";
if(($ua == '' || preg_match($uachar, $ua))&& !strpos(strtolower($_SERVER['REQUEST_URI']),'wap'))
{ */
	
/* }else{
    // 定义应用目录
	define('APP_PATH','./Wap/');

	// 默认绑定Home模块
	define('BIND_MODULE', 'Home');
} */
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP/ThinkPHP.php';


// 亲^_^ 后面不需要任何代码了 就是如此简单