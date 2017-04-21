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
/*if (extension_loaded('zlib')){
    ob_end_clean();
    ob_start('ob_gzhandler');
}*/
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//define('BIND_MODULE','Admin');
//define('BUILD_CONTROLLER_LIST','Index,User,Article,Adv,Base,Login,Topic,Error,Wechat');
//define('BUILD_MODEL_LIST','Index,User');

// 定义应用目录
define('APP_PATH','./Application/');
//  定义插件目录
define('PLUGIN_PATH','plugins/');
// 开启页面gzip压缩
// ob_end_clean();
// define ( "GZIP_ENABLE", function_exists ( 'ob_gzhandler' ) );
// ob_start ( GZIP_ENABLE ? 'ob_gzhandler' : null );
define('UPLOAD_PATH','Public/uploads/'); // 编辑器图片上传路径
define('WEB_CACHE_TIME',31104000); // web 缓存时间  31104000 360天
define('SITE_URL','http://'.$_SERVER['HTTP_HOST']); // 网站域名
define('HTML_PATH','./Application/Runtime/Html/'); //静态缓存文件目录，HTML_PATH可任意设置，此处设为当前项目下新建的html目录 

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单