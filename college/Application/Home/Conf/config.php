<?php
return array(
	//'DB_SQL_BUILD_CACHE' => true, // sql 缓存
    //'DB_SQL_BUILD_QUEUE' => 'File', // 文件缓存
   // 'DB_SQL_BUILD_LENGTH' => 200, // SQL缓存的队列长度
    'DATA_CACHE_TIME' => 60,
   'DATA_CACHE_TYPE' =>  'File',
   'DATA_CACHE_PREFIX' =>'coll_',
	'LOAD_EXT_CONFIG' => 'html',	// 加载其他自定义配置文件 html.php
    'URL_HTML_SUFFIX'       =>  'html',

      /* 文件上传相关配置 */
  'DOWNLOAD_UPLOAD' => array(
    'mimes' => '', //允许上传的文件MiMe类型
    'maxSize' => 5 * 1024 * 1024, //上传的文件大小限制 (0-不做限制)
    'exts' => 'jpg,gif,png,jpeg,zip,rar,tar,gz,7z,doc,docx,txt,xml', //允许上传的文件后缀
    'autoSub' => true, //自动子目录保存文件
    'subName' => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
    'rootPath' => './Public/', //保存根路径
    'savePath' => '', //保存路径
    'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    'saveExt' => '', //文件保存后缀，空则使用原后缀
    'replace' => false, //存在同名是否覆盖
    'hash' => true, //是否生成hash编码
    'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
  ), //下载模型上传配置（文件上传类配置）

  /* 编辑器图片上传相关配置 */
  'EDITOR_UPLOAD' => array(
    'mimes' => '', //允许上传的文件MiMe类型
    'maxSize' => 2 * 1024 * 1024, //上传的文件大小限制 (0-不做限制)
    'exts' => 'jpg,gif,png,jpeg', //允许上传的文件后缀
    'autoSub' => true, //自动子目录保存文件
    'subName' => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
    'rootPath' => './Uploads/Editor/', //保存根路径
    'savePath' => '', //保存路径
    'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    'saveExt' => '', //文件保存后缀，空则使用原后缀
    'replace' => false, //存在同名是否覆盖
    'hash' => true, //是否生成hash编码
    'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
  ),

    //默认错误跳转对应的模板文件
    //'TMPL_ACTION_ERROR' => 'Public:dispatch_jump',
    //默认成功跳转对应的模板文件
    //'TMPL_ACTION_SUCCESS' => 'Public:dispatch_jump',
);