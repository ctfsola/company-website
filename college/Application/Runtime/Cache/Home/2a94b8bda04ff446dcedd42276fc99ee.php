<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>在家书院 AT HOME ACADEMY</title>
    <!--CSS-->
    <link rel="stylesheet" href="/Public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Static/css/mystyle.css">
    <!--jquery-->
    <script src="/Public/bower_components/jquery/dist/jquery.min.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Static/js/nav.js"></script>
    <!--兼容性-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div ng-controller="indexCtrl">
    <!--头部-->
    <header>
        <div class="nav-top">
            <div class="container">
                <!--左边列表-->
                <ul class="col-md-6 col-sm-5">
                    <li><a href="http://www.octomaster.com">Octomaster</a></li>
                    <li><a href="http://www.chuanke.com/s1316621.html" target="_blank">DLO</a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2253083725&site=qq&menu=yes">QQ留言</a></li>
                    <li><a>校长信箱</a></li>
                </ul>

                <!--中英文切换-->
                <div class="btn-group col-md-2 col-sm-3" data-toggle="buttons">
                    <label class="btn btn-primary qieHan">
                        <input type="radio" name="options" id="option1">中文
                    </label>
                    <label class="btn btn-primary active qieHan">
                        <input type="radio" name="options" id="option2">English
                    </label>
                </div>

                <!--右边搜索栏-->
                <div class="form-group search-box col-md-3 col-sm-3">
                    <div class="input-group input-group1">
                        <input class="form-control form-control1" type="search" placeholder="全站搜索">
                        <div class="input-group-addon ">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <!--左侧边导航栏按钮-->
            <div class="menu-espanso">
                <div id="menu" class="menu"></div>
                <span class="linee linea1"></span>
                <span class="linee linea2"></span>
                <span class="linee linea3"></span>
                <div class="voci-menu">
                    <ul class="sub-navAll1">
                        <?php if(is_array($menu)): foreach($menu as $key=>$vo): ?><a href="<?php echo ($vo["nav_url"]); ?>"><li class="leftNavLi"><?php echo ($vo["nav_name"]); ?></li></a><?php endforeach; endif; ?>
                        <!-- <a href="<?php echo U('Home/Detail/index');?>"><li class="leftNavLi">走进书院</li></a>
                        <a href="<?php echo U('Home/Admitted/index');?>"><li class="leftNavLi">入读书院</li></a>
                        <a href="<?php echo U('Home/Dynamic/index');?>"><li class="leftNavLi">书院动态</li></a>
                        <a href="<?php echo U('Home/Interaction/index');?>"><li class="leftNavLi">分享互动</li></a>
                        <a href="<?php echo U('Home/Website/index');?>"><li class="leftNavLi">AHA旗下活动</li></a> -->
                    </ul>       
                    <ul class="sub-navAll2">
                         <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$vo): ?><a href="<?php echo ($vo["nav_url"]); ?>"><li class="leftNavLi atwoClick"><?php echo ($vo["nav_name"]); ?></li></a><?php endforeach; endif; ?>
                        <!-- <a href="#"><li class="leftNavLi atwoClick">媒体报道</li></a> -->
                    </ul>         
                </div>
            </div>
            <!--右侧边搜索按钮-->
            <span type="button" id="searchBtn" class="navSearchBtn glyphicon glyphicon-search"></span>
            <div class="searchLan">
                <div class="form-group searchLan11">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="全站搜索">
                        <div class="input-group-addon ">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <!--头部logo-->
                <a class="logo" href="<?php echo U('Home/Index/index');?>">
                    <img src="<?php echo ($web_config['web_logo']); ?>">
                </a>
                <?php $nav_top1 = array_slice($menu_top,0,3); $nav_top2 = array_slice($menu_top,3); ?>
                <div class="nav-listBox">
                    <ul class="nav-list1">
                        <?php if(is_array($nav_top1)): foreach($nav_top1 as $k=>$vo): ?><li>
                                <a href="<?php echo ($vo); ?>"><?php echo ($k); ?></a>
                            </li><?php endforeach; endif; ?>
                        <script>
                        $('.nav-list1').first().addClass('text-center');
                        </script>
                        <!-- <li>
                            <a href="<?php echo U('Home/Detail/index');?>">走进书院</a>
                        </li>
                         -->
                    </ul>
                    <ul class="nav-list2">
                        <?php if(is_array($nav_top2)): foreach($nav_top2 as $k=>$vo): ?><li class="text-center">
                                <a href="<?php echo ($vo); ?>"><?php echo ($k); ?></a>
                            </li><?php endforeach; endif; ?>
                        <!-- 
                        <li>
                            <a href="<?php echo U('Home/Website/index');?>">AHA旗下网站</a>
                        </li> 
                        -->
                    </ul>
                </div>

            </div>
        </nav>
    </header>
   
    <!--轮播-->
    <div class="lunbo">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php if(is_array($adv_data)): foreach($adv_data as $key=>$vo): ?><div class="item banner_lunbo_pic">
                        <img src="<?php echo ($vo["img_url"]); ?>" style="width: 100%" alt="...">
                    </div><?php endforeach; endif; ?>
                <script>$('.banner_lunbo_pic').first().addClass('active');</script>
            </div>
        </div>
    </div>
    <!--中间模块-->
    <div class="subnav-section-wrap">
        <!--点击列表切换------动态和更新------>
        <div class="section">
            <div class="tabBox container">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="pull-left">
                        <span  style="font-size: 26px;line-height: 60px;color: #0A2B66;margin-left: 15px">ACADEMY<span style="color: #8d2000"> & </span>Today</span>
                    </li>
                    <li class="pull-right">
                        <a href="#zjgx" data-toggle="tab">最近更新</a>
                    </li>
                    <li class="active pull-right">
                        <a href="#dongTai" data-toggle="tab">动态</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane  in active" id="dongTai">
                   
                        <div class="main">
                            <div class="mo">
                                <?php if(is_array($notice_1)): foreach($notice_1 as $key=>$vo): ?><img src="<?php echo ($vo["thumb_url"]); ?>" class="biglink pull">
                                    <div class="bd">
                                        <h2 class="category">动态</h2>
                                        <p class="epsilon">
                                        <a href="<?php echo ($vo["link"]); ?>" class="a1"><?php echo (mb_substr($vo["content"],0,50,'utf-8')); ?>
                                            ...... </a></p>
                                        <p><?php echo (date("Y-m-d",$vo['add_time'])); ?></p>
                                    </div><?php endforeach; endif; ?>
                                </a>

                            </div>
                        </div>
                        <div class="aside">
                            <ul class="link-list list-unstyled">
                                 <?php if(is_array($notice_3)): foreach($notice_3 as $key=>$vo): ?><li>
                                    <div class="epsilon">
                                        <a href="<?php echo ($vo["link"]); ?>" class="a1">
                                            <h4><?php echo ($vo["title"]); ?></h4>
                                            <span class="f-size14"><?php echo (mb_substr($vo["content"],0,50,'utf-8')); ?>.....<br><?php echo (date("Y-m-d",$vo["add_time"])); ?></span>
                                        </a>
                                    </div>
                                </li><?php endforeach; endif; ?>
                                <!-- 
                                <li>
                                    <div class="epsilon">
                                        <a href="" class="a1">
                                            <h4>在家书院英文“冬季学校”（2016年1月18-29日）</h4>
                                            <span class="f-size14">全日制国际学校“在家书院”今年寒假照例开办“冬季学校”，让您的 ...... <br>2016-01-04</span>
                                        </a>
                                    </div>
                                </li> -->
                            </ul>
                            <p class="align-right"><a href="<?php echo U('Home/Dynamic/index');?>" class="btn btn-plain">更多消息<span
                                    class="glyphicon glyphicon-chevron-right"></span></a>
                            </p>
                        </div>
                   
                    </div>
                    <div class="tab-pane " id="zjgx">
                        <div class="main">
                            <div class="mo">
                            <?php if(is_array($latest_1)): foreach($latest_1 as $key=>$vo): ?><img src="<?php echo ($vo["thumb_url"]); ?>" class="biglink pull">
                                <div class="bd">
                                    <h2 class="category">最近更新</h2>
                                    <p class="epsilon"><a href="<?php echo ($vo["link"]); ?>" class="a1"><?php echo (mb_substr($vo["content"],0,50,'utf-8')); ?>
                                        ...... </a></p>
                                    <p><?php echo (date("Y-m-d",$vo['add_time'])); ?></p>
                                </div><?php endforeach; endif; ?>
                                </a>
                            </div>
                        </div>
                        <div class="aside">
                            <ul class="link-list list-unstyled">
                                <?php if(is_array($latest_3)): foreach($latest_3 as $key=>$vo): ?><li>
                                    <div class="epsilon">
                                        <a href="<?php echo ($vo["link"]); ?>" class="a1">
                                            <h4><?php echo ($vo["title"]); ?></h4>
                                            <span class="f-size14"> <?php echo (mb_substr($vo["content"],0,50,'utf-8')); ?>.....<br><?php echo (date("Y-m-d",$vo["add_time"])); ?></span>
                                        </a>
                                    </div>
                                </li><?php endforeach; endif; ?>
                                
                            </ul>
                            <p class="align-right"><a href="<?php echo U('Home/Dynamic/index');?>" class="btn btn-plain">更多消息<span
                                    class="glyphicon glyphicon-chevron-right"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---书院新闻和书院相册模块------>
        <div class="section-alt">
            <div class="container">
                <div class="lc gr">
                    <div class="">
                        <!----左边---书院新闻---已完成--->
                        <div class="upcoming-events section-light col-lg-4 col-md-4">
                            <h2>书院新闻</h2>
                            <ul class="event-list">
                            <?php if(is_array($news_3)): foreach($news_3 as $key=>$vo): $month = date("m",$vo['add_time']); $mon = mon_to_en($month); ?>
                                
                                <li class="h-event mo">   
                                    <time class="pull dt-start calendar"><?php echo ($mon); ?> <span class="day"><?php echo (date("d",$vo["add_time"])); ?></span></time>
                                    <div class="bd">
                                        <h4 class="epsilon p-name mgTop0">
                                            <a href="<?php echo ($vo["link"]); ?>" class="a1"><?php echo ($vo["title"]); ?></a>
                                        </h4>
                                        <p class="f-size14">
                                            <a href="<?php echo ($vo["link"]); ?>" class="a1"><?php echo (mb_substr($vo["content"],0,50,'utf-8')); ?>......</a>
                                        </p><?php echo (date("Y-m-d",$vo["add_time"])); ?>
                                    </div>
                                </li><?php endforeach; endif; ?>
                            </ul>
                            <p class="btn-contain flr"><a href="<?php echo U('Home/Dynamic/index');?>" class="a1 btn btn-plain">在家书院更多动态</a></p>
                        </div>
                        <!----右边---书院相册-->
                        <div class="spotlight-on col-lg-8 col-md-8">
                            <h2>书院相册</h2>
                            <div class="ulBox">
                                <ul class="list-inline col-md-12" id="pic_list">
                                    <?php if(is_array($index_pic)): foreach($index_pic as $key=>$vo): ?><li class=" col-md-6 col-sm-6">
                                            <div class="thumbnail">
                                                <h4 class="text-center imgTextColor1">
                                                    <?php echo ($vo["title"]); ?>
                                                </h4>
                                                <img src="<?php echo ($vo["pic_url"]); ?>" alt="<?php echo ($vo["title"]); ?>" class="pic-size"></div>
                                        </li><?php endforeach; endif; ?>
                                    <!-- <li class=" col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                            <h4 class="text-center imgTextColor2">
                                                AHA STORIES—露营篇
                                            </h4>
                                            <img src="/Static/img/xc2.jpg" class="pic-size pic-size2"></div>
                                    </li>
                                    <li class=" col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                            <h4 class="text-center imgTextColor3">
                                                在家书院9岁啦
                                            </h4>
                                            <img src="/Static/img/xc3.jpg" class="pic-size"></div>
                                    </li>
                                    <li class=" col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                            <h4 class="text-center imgTextColor4">
                                                在家书院2015毕业晚会
                                            </h4>
                                            <img src="/Static/img/xc4.jpg" class="pic-size"></div>
                                    </li> -->
                                </ul>
                            </div>
                            <script>
                                var picwidth1  = $('#pic_list li').eq(0).children().children('img').width();
                                var picheight1 = $('#pic_list li').eq(0).children().children('img').height();
                                var picwidth2  = $('#pic_list li').eq(1).children().children('img').width();
                                var picheight2  = $('#pic_list li').eq(1).children().children('img').height();
                                var picwidth   = picwidth1>picwidth2?picwidth1:picwidth2;                     
                                var picheight  = picheight1>picheight2?picheight1:picheight2;                     
                                $('#pic_list li').eq(0).children().children('h4').addClass('imgTextColor1');
                                $('#pic_list li').eq(1).children().children('h4').addClass('imgTextColor2');
                                $('#pic_list li:eq(2)').children().children('h4').addClass('imgTextColor3');
                                $('#pic_list li:eq(3)').children().children('h4').addClass('imgTextColor4');
                                $('#pic_list li').children().children('img').width(picwidth).height(picheight);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------脚部------已完成----->
        <footer>
        <div class="container">
            <div class="clearfix">
                <!----脚部上方导航条---->
                <div class="footer-top">
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">了解书院</h4>
                        <p class="footer-list-item">梦想&使命</p>
                        <p class="footer-list-item">书院历程</p>
                        <p class="footer-list-item">书院校训</p>
                        <p class="footer-list-item">加入我们</p>
                    </div>
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">走进书院</h4>
                        <p class="footer-list-item">日常教学</p>
                        <p class="footer-list-item">课外活动</p>
                        <p class="footer-list-item">书院规则</p>
                        <p class="footer-list-item">学业展示</p>
                        <p class="footer-list-item">AHA毕业生</p>
                        <p class="footer-list-item">日程安排xx</p>
                    </div>
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">入读书院</h4>
                        <p class="footer-list-item">录取原则</p>
                        <p class="footer-list-item">录取程序</p>
                        <p class="footer-list-item">奖助学金</p>
                        <p class="footer-list-item">在线报名</p>
                        <p class="footer-list-item">联络书院</p>
                    </div>
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">书院动态</h4>
                        <p class="footer-list-item">书院新闻</p>
                        <p class="footer-list-item">书院通告</p>
                        <p class="footer-list-item">书院相册</p>
                        <p class="footer-list-item">活动视频</p>
                        <p class="footer-list-item">家长视角</p>
                        <p class="footer-list-item">假期营会</p>
                        <p class="footer-list-item">教师培训</p>
                    </div>
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">分享互动</h4>
                        <p class="footer-list-item">学生作品</p>
                        <p class="footer-list-item">教育随想</p>
                        <p class="footer-list-item">教育资讯</p>
                        <p class="footer-list-item">常用下载</p>
                        <p class="footer-list-item">Emial订阅</p>
                    </div>
                    <div class="fl col-sm-2">
                        <h4 class="footer-list-title">AHA旗下网站</h4>
                        <p class="footer-list-item">旗下网站介绍</p>
                        <p class="footer-list-item">学校管理系统</p>
                        <p class="footer-list-item">BJU出版社中国官网</p>
                        <p class="footer-list-item">远程网络学习体系</p>
                        <p class="footer-list-item">考试评测体系</p>
                        <p class="footer-list-item">BJU大学招生</p>
                    </div>
                </div>
                <!--脚部下方地址邮编-->
                <div class="footer-bottom">
                    <div class="fl left">
                        <span class="footer-span">地址: <?php echo ($web_config['web_address']); ?><a href="<?php echo ($web_config['web_map']); ?>" target="_blank"> 点击查看地图 </a><br>
                            邮编:<?php echo ($web_config['zip_code']); ?>  固话:<?php echo ($web_config['web_phone']); ?> 传真:<?php echo ($web_config['web_fax']); ?></span>
                    </div>
                    <div class="fl text-right pull-right"><span
                            class="footer-span pull-right">在家书院  At Home Academy.<br><?php echo ($web_config['web_copyright']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>