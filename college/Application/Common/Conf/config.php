<?php
//  加载常量配置文件
//require_once('constant.php');

return array(
	/* 加载公共函数 */
    'LOAD_EXT_FILE' =>'common',
    //'AUTH_CODE' => "TP", //安装完毕之后不要改变，否则所有密码都会出错
    //'URL_CASE_INSENSITIVE' => false, //URL大小写不敏感
    //'LOAD_EXT_CONFIG'=>'db,route', // 加载数据库配置文件
    'LOAD_EXT_CONFIG'=>'db', // 加载数据库配置文件
    //'URL_MODEL'=>2, // 如果需要 隐藏 index.php  打开这行"URL_MODEL"注释 同时在apache环境下 开启 伪静态模块，  如果在nginx 下需要另外配置，参考thinkphp官网手册

    'SESSION_AUTO_START'        => true,
    'SHOW_PAGE_TRACE'           =>1,         //显示调试信息
	//'ERROR_PAGE'=>'/index.php/Home/Tperror/tp404.html', 
	'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
    'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置  默认为html

    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Test','Mobile'),
    // 设置禁止访问的模块列表
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'),
    'URL_MODULE_MAP'       =>    array('test'=>'admin'),//模块映射，原来的Admin模块将不能访问，只能访问test模块
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称    
    
    //'APP_SUB_DOMAIN_DEPLOY'   =>    0, // 开启子域名或者IP配置
    //'APP_SUB_DOMAIN_RULES'    =>    array( 
         //'m.tpshop.com'   => 'Mobile/',  // 手机访问网站
    //),    

    /**
     * coreseek/sphinx全文检索引擎配置
     */
    'SPHINX_HOST'         =>      '127.0.0.1',
    'SPHINX_PORT'         =>      '9312',  
);