<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>在家书院 AT HOME ACADEMY</title>
    <!--CSS-->
    <link rel="stylesheet" href="/Public/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/nav.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/information.css">
    <!--jquery-->
    <script src="/Public/bower_components/jquery/dist/jquery.min.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Application/Home/View/Static/js/nav.js"></script>
    <script>
        $(function () {
            $('.aoneClick').click(function () {
                $("html,body").animate({scrollTop:$("#one").offset().top}, 500);
            });
            $('.atwoClick').click(function () {
                $("html,body").animate({scrollTop:$("#two").offset().top}, 500);
            });
            $('.athreeClick').click(function () {
                $("html,body").animate({scrollTop:$("#three").offset().top}, 500);
            });
            $('.afourClick').click(function () {
                $("html,body").animate({scrollTop:$("#four").offset().top}, 500);
            });
        });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div ng-controller="indexCtrl" style="position: relative">
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
        <!--banner图-->
        <div class="container-fluid sub-banner">
            <div class="container">
                <img src="/Static/img/experience-champions-hero.jpg" class="imgMiddle img-responsive " alt="">
                <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                    <h1 class="">
                        了解书院
                    </h1>
                </div>
            </div>
        </div>
        <!--副导航-->
        <div  class="sub-navbar container-fluid">
            <div class="container">
                <ul class="row" id="row_nav">
                    <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$vo): ?><li class="col-md-3 col-sm-3"><a class="aoneClick"><?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; ?>
                    <!-- <li class="col-md-3 col-sm-3"><a class="atwoClick">媒体报道</a></li>
                    <li class="col-md-3 col-sm-3"><a class="athreeClick">书院校训</a></li>
                    <li class="col-md-3 col-sm-3"><a class="afourClick">加入我们</a></li> -->
                </ul>
                <script>
                    $('#row_nav li:eq(1)').children('a').addClass('atwoClick');
                    $('#row_nav li:eq(2)').children('a').addClass('athreeClick');
                    $('#row_nav li:eq(3)').children('a').addClass('afourClick');
                </script>
            </div>
        </div>
        <div>
            <!--内容一-->
            <div class="section-one container-fluid" id="one">
                <div class="container">
                    <!--标题-->
                    <div class="one-title">
                        <h2>梦想<span>&</span>使命</h2>
                    </div>
                    <!--正文-->
                    <div class="one-content row">
                        <div class="col-sm-3">
                            <img class="img-responsive imgauto"  src="/Static/img/dream.jpg" alt="梦想">
                        </div>
                        <div class="col-sm-9">
                            <p>
                                <span>在基础教育阶段推进学术教育</span><br>
                                学术是教育的本质。不是只有教授才能做研究，任何以独立的心进行的理性探究，都是一种学术。学术的精神就是真正的素质教育。<br>
                                <span>探索研究中国特色的国际教育</span><br>
                                随着互联网的发展，国与国之间的交流和贸易越来越频繁，教育的必然趋势就是国际化。但与此同时，保留自己民族的语言、自己国家的文化、自己独特的思维方式也是教育的重要使命。书院自创办以来，一直秉持双母语特色，从未放弃教导学生中国传统文化和价值观，今后也将一直以此为使命，培养热爱祖国、以中华民族为自豪的中国下一代，帮助世界了解中国，也帮助国人更好地了解世界。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--内容二-->
            <div class="section-two container-fluid" id="two">
                <div class=" container">
                    <!--标题-->
                    <div class="two-title">
                        媒体报道
                    </div>
                    <!--正文-->
                    <div class="two-content">
                        <div class="row">
                            <div class="col-sm-3 two-contentRight">
                                <a  href="">
                                    <img class="img-responsive imgauto" src="/Static/img/meiti1.png" alt="媒体报道">
                                </a>
                                <a href="">
                                    <h3><?php echo ($media_data[0]['title']); ?></h3><br>
                                    <p>
                                        <?php echo ($media_data[0]['content']); ?><br>
                                        <span><?php echo (date("Y-m-d",$media_data[0]['add_time'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-offset-1 col-sm-8">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 two-contentRight">
                                        <a  class="col-sm-9" href="">
                                            <h3><?php echo ($media_data[1]['title']); ?></h3><br>
                                            <p>
                                                <?php echo ($media_data[1]['content']); ?><br>
                                                <span><?php echo (date("Y-m-d",$media_data[1]['add_time'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                            </p>
                                        </a>
                                        <a class="col-sm-3" href="">
                                            <img class="img-responsive imgauto" src="/Static/img/meiti2.jpg" alt="媒体报道">
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 two-contentRight">
                                        <a class="col-sm-9" href="">
                                            <h3><?php echo ($media_data[2]['title']); ?></h3><br>
                                            <p>
                                               <?php echo ($media_data[2]['content']); ?><br>
                                                <span>$media_data[2]['add_time']|date="Y-m-d",###}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                            </p>
                                        </a>
                                        <a class="col-sm-3" href="">
                                            <img class="img-responsive imgauto" src="/Static/img/meiti3.jpg" alt="媒体报道">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--内容三-->
            <div class="section-three container-fluid" id="three">
                <div class="container">
                    <!--标题-->
                    <div class="three-title">
                        书院校训
                    </div>
                    <!--正文-->
                    <div class="one-content row">
                        <p class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            以真爱传递真理<br>
                            在家书院的使命是帮助学生从小建立良好的品格和行为习惯，发展出清晰的理性思辨能力，使得他们有一可以实践自己生命独特的价值。<br>
                            为此，书院全体老师每日所做的就是：<br>
                            活出真理，传讲真理；<br>
                            身教重于言教，老师们日日以真理为标杆，活出美好的见证。<br>
                            接纳的爱和清晰的管教；<br>
                            建立像家一样的学校环境，让孩子可以感受到完全的爱和接纳，同时设定界限，清除污秽，教导和训练学生从小形成优秀的品格和良好的习惯。<br>
                            高标准、严要求的教学；<br>
                            以高学术标准和严格的要求引导和装备学生成为终生不辍的学习者，教导学生独立思考精神并以追寻之心不断去更深地探求真理。<br>
                        </p>
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <img class="img-responsive imgauto" src="/Static/img/hository1.png" >
                        </div>
                    </div>
                </div>
            </div>
            <!--内容四-->
            <div class="section-four container-fluid" id="four">
                <div class="container">
                    <!--标题-->
                    <div class="two-title">
                        加入我们
                    </div>
                    <!--正文-->
                    <div class="one-content row">
                        <!--正文介绍信息-->
                        <p class="col-md-12 col-sm-12" >
                            <span>应聘职位</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;亲爱的弟兄姊妹，您是否也对真理教育常怀感动？是否期待和享受与孩子们一起成长的过程？是否愿意成为一名与众不同的教育工作者……如果您的答案是肯定的，欢迎加入在家书院，让我们一路同行。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;在这里，我们是一群开拓者，走在教育的第一线；在这里，我们是一群勇于尝试者，敢于突破传统教育体制的樊篱。在这里，我们尝试中英双母语教育，兼得东西文化的精髓；在这里，我们仰望公义、真理和爱，造就不一样的新人。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;在家书院（AHA）是一所K3-G12中英双母语学校，自2007年建校以来，已走过9个春秋，送走6届毕业生到美国高校。详情可见于学校官网(www.athomeacademy.org)。<br>
                        </p>
                        <!--应聘信息-->
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <!--应聘职位-->
                                <div class="col-md-6 col-sm-6" style="margin-top: 18px">
                                    <div id="carousel-example-generic" class="carousel" data-ride="carousel">
                                        <div class="row">
                                            <!--左按钮-->
                                            <a class="col-md-1 col-sm-1 col-xs-1 text-center" style="padding: 0" href="#carousel-example-generic" role="button" data-slide="prev">
                                                <!--左边图标-->
                                                <span class="glyphicon glyphicon-chevron-left img-btn" ></span>
                                            </a>
                                            <!--文字内容-->
                                            <div class="col-md-10 col-sm-10 col-xs-10 p-bg">
                                                <div class="carousel-inner" role="listbox" id="listboxitem">
                                                    <?php if(is_array($job_data)): foreach($job_data as $key=>$vo): ?><div class="item">
                                                            <p>
                                                                <span><?php echo ($vo["job_name"]); ?></span><br>
                                                                <?php echo ($vo["require"]); ?>
                                                            </p>
                                                        </div><?php endforeach; endif; ?>
                                                <script>
                                                        $('#listboxitem div:eq(0)').addClass('active');
                                                </script>
                                         <!--            <div class="item">
                                             <p>
                                                 <span>校车司机（2名）</span><br>
                                                 岗位要求：<br>
                                                 1、持有A2驾照，熟悉广州交通道路；<br>
                                                 2、至少有2年驾驶经验；（有校车经验者优先）；<br>
                                                 3、有责任心，爱护学生/孩童；<br>
                                                 4、做事认真踏实，热爱本职工作。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>仓管人员（1名）</span><br>
                                                 岗位要求：<br>
                                                 1、做事认真细心，负责仓库分类整理和日常工作安排；<br>
                                                 2、制定仓库管理制度，协调人员严格执行制度；<br>
                                                 3、收集或采购物资。<br>
                                                 4、有仓管经验者优先。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>语文老师（2名）</span><br>
                                                 岗位职责：<br>
                                                 1、负责5年级至8年级AHA语文教学；<br>
                                                 2、参与书院语文教材编辑工作；<br>
                                                 3、组织活动，积极提高学校中文素养。<br>
                                                 岗位要求：<br>
                                                 1、认同书院理念，不拘泥于公立学校的中文体系；<br>
                                                 2、热爱文学，广泛阅读，乐于分享；<br>
                                                 3、或文或史或哲专业，乐于思辨，对中文教学有自己的思考和看法优先；<br>
                                                 4、具备基本英语听说能力，英语六级以上者优先；<br>
                                                 5、具有硕士研究生及以上学历者优先<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>体育老师(2名，可兼职）</span><br>
                                                 岗位职责：<br>
                                                 1、负责K3-G4或者G5-12年级体育课；<br>
                                                 2、参与制定书院体育规范及标准；<br>
                                                 3、组织符合年龄段的各项体育活动，积极提高学校体能素质。<br>
                                                 岗位要求：<br>
                                                 1、热爱运动；<br>
                                                 2、熟悉体育规则，具有体育精神；<br>
                                                 3、足球或篮球领域有专长的弟兄优先；<br>
                                                 4、有基本的英语听说能力优先。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>网络技术（3名）</span><br>
                                                 岗位职责：<br>
                                                 1、 负责书院官方网站建设及后期维护；<br>
                                                 2、 负责书院网络安全，备案信息等；<br>
                                                 3、 优化网络系统，规划调整设备配置，管理书院路由器/防火墙的配置；<br>
                                                 4、 完成领导交付的其它网站建设相关临时性工作。<br>
                                                 岗位要求：<br>
                                                 1、 两年以上网站建设经验，有独立建站能力和经验者优先；<br>
                                                 2、 熟悉网站建设全部流程，能独立完成网站制作的相关专业优秀应届毕业生亦可；<br>
                                                 3、 具备良好的编码习惯及程序设计功底，相关Web开发经验，能够编写易于维护的代码；<br>
                                                 4、 有良好的团队合作意识、创新意识、责任心、进取心与团队合作精神，能尽快适应工作环境。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>财务管理（2名）</span><br>
                                                 岗位职责：<br>
                                                 1、负责公司日常收支业务；<br>
                                                 2、按公司要求定期提供相应的资金报表；<br>
                                                 3、协助公司活动相关的会务工作；<br>
                                                 4、到银行办理相关业务；<br>
                                                 5、完成领导布置的其他工作。<br>
                                                 岗位要求：<br>
                                                 1、 大专或以上学历，财务相关专业，有会计从业资格证书；<br>
                                                 2、 一年或以上工作经验者优先，<br>
                                                 3、 熟悉运用办公及财务软件。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>人事管理（1名）</span><br>
                                                 岗位职责：<br>
                                                 1、 负责校区人力资源的规划、招聘、以及入职手续等的办理；<br>
                                                 2、 档案管理，劳动合同管理；<br>
                                                 3、 考勤管理；<br>
                                                 4、 员工技能和书院文化培训；<br>
                                                 5、 不断优化书院人事管理制度及其他日常事务管理。<br>
                                                 岗位要求：<br>
                                                 1、人力资源或工商行政管理或文秘相关专业，二本及以上学历优先；<br>
                                                 2、 逻辑清晰，阳光外向，心细，善于观察和沟通；<br>
                                                 3、英语口语表达流利者优先；<br>
                                                 4、熟悉教育培训行业者或有人事管理经验者优先。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>市场营销主管（1名）</span><br>
                                                 岗位职责：<br>
                                                 1. 建立并带领团队，提高营销技能和素养；<br>
                                                 2. 努力开拓新渠道新市场。<br>
                                                 岗位要求：<br>
                                                 1. 有较丰富的市场运营及管理经验；<br>
                                                 2. 有敏锐的市场嗅觉；<br>
                                                 3. 了解国内基督化学校和基督化教育者优先；<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div>
                                         <div class="item">
                                             <p>
                                                 <span>美编（1名）</span><br>
                                                 熟悉Indesign排版软件，精通PS、CDR等常用设计软件。<br>
                                                 <span>实习生：若干名</span><br>
                                                 勤奋好学，头脑灵活。<br>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。
                                             </p>
                                         </div> -->
                                                </div>
                                            </div>
                                            <!--右按钮-->
                                            <a class="col-md-1 col-sm-1 col-xs-1 text-center" style="padding: 0" href="#carousel-example-generic" role="button" data-slide="next">
                                                <!--左边图标-->
                                                <span class="glyphicon glyphicon-chevron-right img-btn" ></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--表格填写-->
                                <div class="col-md-6 col-sm-6" style="margin-top: 18px;padding-top:15px;padding-bottom:15px;background: #edebeb">
                                    <div class="col-md-12 col-sm-12">
                                        <form role="form" action="" method="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="center-block" for="selsectjob">岗位应聘*</label>
                                                <input id="selsectjob" list="jobselect" class="form-control">
                                                <datalist id="jobselect">

                                                    <?php if(is_array($job_data)): foreach($job_data as $key=>$vo): ?><option name="<?php echo ($vo["job_id"]); ?>"><?php echo ($vo["job_name"]); ?></option><?php endforeach; endif; ?>
                                                    <!-- <option name="2">   体育老师   </option>
                                                    <option name="3">   网络技术   </option>
                                                    <option name="4">   财务管理   </option>
                                                    <option name="5">   人事管理   </option>
                                                    <option name="6">   市场营销主管   </option>
                                                    <option name="7">   美编   </option>
                                                    <option name="8">   司机/校车司机   </option>
                                                    <option name="9">   实习生   </option>
                                                    <option name="10">   仓管人员   </option>
                                                    <option name="11">   法语老师   </option> -->
                                                </datalist>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">姓名*</label>
                                                <input type="text" class="form-control" id="exampleInputName" placeholder="输入姓名">
                                            </div>
                                            <div class="form-group">
                                                <label class="center-block" for="sex">性别*</label>
                                                <select class="form-control" name="sex" id="sex">
                                                    <option name="0">男</option>
                                                    <option name="1">女</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email*</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="输入e-mail">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputphone">手机号码*</label>
                                                <input type="number" class="form-control" id="exampleInputphone" placeholder="输入手机号码">
                                            </div>

                                            <div class="form-group">
                                                <label for="textarea">留言</label>
                                                <textarea class="form-control" id="textarea" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="file">简历上传*</label>
                                                <input id="file" type="file" class="form-control" name="resume" multiple="true">
                                                <p class="help-block">请选择小于20M文件进行上传</p>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" id="submit" class="btn btn-info form-control">提交</button>
                                            </div>
                                        </form>
                                    </div>
                                    <script type="text/javascript">
                                        $(function(){
                                            //按钮单击时执行
                                            $("#submit").click(function(){
                                                var job  = $('#jobselect').val();
                                                var name = $('#exampleInputName').val();
                                                var sex  = $('#sex').val(); 
                                                var email  = $('#exampleInputEmail1').val(); 
                                                var phone  = $('#exampleInputphone').val(); 
                                                var mes  = $('#textarea').val(); 

                                               /* var obj = {"job":job,"name":name,"sex":sex,"email":email,"phone":phone,"mes":mes}
                                                var str = JOIN.stringify(obj);*/
                                                  //Ajax调用处理
                                                $.ajax({
                                                   type: "POST",
                                                   /*url: "/index.php/Home/Info/upload",*/
                                                   url:"<?php echo U('Home/Info/upload',array('job'=>job,'name'=>name));?>",
                                                   /*data: "d="+str,*/
                                                   dataType:'json',
                                                   success: function(res){
                                                            /*$("#myDiv").html('<h2>'+data+'</h2>');*/
                                                            alert(res);

                                                      }
                                                    error:function(error){
                                                        alert(error);
                                                    }
                                                });

                                             });


                                        });
                                    </script> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--脚部-->
        <div class="sub-footer container-fluid">
    <div class="container">
        <div class="row">
            <p class="col-xs-6 col-sm-6 text-left">
                地址: <?php echo ($web_config['web_address']); ?>&nbsp;&nbsp;<a href="<?php echo ($web_config['web_map']); ?>" target="_blank">点击查看地图</a><br>邮编:<?php echo ($web_config['zip_code']); ?>&nbsp;&nbsp;固话:<?php echo ($web_config['web_phone']); ?> 传真:<?php echo ($web_config['web_fax']); ?><br>
            </p>
            <p class="col-xs-6 col-sm-5 text-right">
                在家书院&nbsp;&nbsp;At Home Academy<br><?php echo ($web_config['web_copyright']); ?>
            </p>
            <div class="col-sm-1 text-right hidden-xs">
                <img src="/Static/img/bottomlogo.gif" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>
    </div>

</body>
</html>