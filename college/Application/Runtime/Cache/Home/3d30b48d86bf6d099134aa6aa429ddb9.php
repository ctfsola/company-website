<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>在家书院 AT HOME ACADEMY</title>
    <!--CSS-->
    <link rel="stylesheet" href="/Public/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/nav.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/under.css">
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Application/Home/View/Static/js/nav.js"></script>
    <script>
        $(function() {
            $( "#under-subnav" ).tabs();
            $( "#iowa-tab" ).tabs();
            $( "#enrolment-tab" ).tabs();
            $('#press').click(function () {
                window.open('http://www.bjupress.cn/','_blank');
            });
            $('#teach').click(function () {
                window.open('http://www.chuanke.com/s1316621.html','_blank');
                    });
            $('#apply').click(function () {
                window.open('http://www.bju.edu/admission/apply/','_blank');
            });
            //            激活选项卡
            $('#subnavChange').children().each(function(index) {
                $(this).click(function () {
                    $( "#under-subnav" ).tabs("option", "active", index)
                });
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
<div id="under-subnav">
    <!--banner图-->
    <div class="container-fluid sub-banner">
        <div class="container">
            <img src="/Application/Home/View/Static/img/banner-6.jpg" class="imgMiddle img-responsive " alt="">
            <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                <h1>
                    旗下网站
                </h1>
            </div>
        </div>
    </div>
    <!--副导航-->
    <div  class="sub-navbar container-fluid">
        <div class="container">
            <ul class="row">
                <!--<li class="col-md-2 col-sm-2"><a href="#under_One">旗下网站介绍</a></li>-->
                <!--<li class="col-md-2 col-sm-2"><a href="#under_Two">学校管理系统</a></li>-->
                <li class="col-md-3 col-sm-3"><a href="#under_Four">考试评测体系</a></li>
                <li class="col-md-3 col-sm-3"><a href="#under_Five">BJU大学招生</a></li>
                <li class="col-md-3 col-sm-3"><a id="press">BJU出版社</a></li>
                <li class="col-md-3 col-sm-3"><a id="teach">网络学习体系</a></li>
            </ul>
        </div>
    </div>
    <!--旗下网站介绍-->
    <!--<div class="container-fluid section-one" id="under_One">-->
        <!--<div class="container">-->

        <!--</div>-->
    <!--</div>-->
    <!--学校管理系统-->
    <!--<div class="container-fluid section-one" id="under_Two">-->
        <!--<div class="container">-->

        <!--</div>-->
    <!--</div>-->
    <!--考试评测体系-->
    <div class="container-fluid section-one section-six" id="under_Four">
        <div class="container">
            <!--正文-->
            <div class="one-content">
                <div class="row">
                    <div class="col-sm-12">
                        <img  src="/Application/Home/View/Static/img/banner_top.jpg" class="img-responsive" alt="">
                    </div>
                    <div id="iowa-tab" class="subnav-Tab col-sm-12">
                        <!--左侧导航-->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <ul class="row">
                                <li><a href="#iowa-tab1" class="col-md-12 col-sm-12 col-xs-4">考试简介</a></li>
                                <li><a href="#iowa-tab2" class="col-md-12 col-sm-12 col-xs-4">学测报告</a></li>
                                <li><a href="#iowa-tab3" class="col-md-12 col-sm-12 col-xs-4">学测报名</a></li>
                            </ul>
                        </div>
                        <!--右侧内容-->
                        <div id="iowa-tab1" class="col-md-9 col-sm-9 col-xs-12">
                            <img src="/Application/Home/View/Static/img/home_intro.gif" class="img-responsive" alt="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <br>
                                    <img src="/Application/Home/View/Static/img/title_intro.gif" alt="">
                                </div>
                                <p class="col-md-9 col-sm-9">
                                    Iowa是一系列由美国爱荷华州立大学教育学院所编撰的标准测试，主要测试从幼儿园大班到12年级学生在各领域的学习情况，包括单词、词汇分析、阅读理解能力、听力、英文（语言能力）、数学、社会学和自然科学。Iowa Tests被美国当地学校普遍使用，用于评估每位学生在每学年的学习成绩，按年级分为ITBS和ITED，另有能力测试CogAT。<br><br>
                                    ITBS：Iowa Tests of Basic Skills 爱荷华基本技能测试 <br>
                                    适用于幼儿园大班至8年级学生，旨在考察学生的知识掌握情况，可以帮助老师及家长了解学生需要加强的领域 <br><br>
                                    ITED： Iowa Tests of Educational Development 爱荷华教育发展能力测试 <br>
                                    适用于9年级至 12年级学生，旨在评估学生在各领域的技能，尤其是解决问题的的能力和对文本的评判性分析能力。<br><br>
                                    CogAT： Cognitive Abilities Test 认知能力测试 <br>
                                    旨在评估学生在语言、图形、数学方面的推理能力，常被称为“能力测试”，这项分值与ITBS对比，常常可以看出一个学生的努力程度，帮助判断学生的学术潜力。 <br><br>
                                    参加Iowa Tests（＋Cognitive能力测试）之后，每个孩子会获得一份完整而详尽的评测报告，在对比全美同年级学生的大背景中，对孩子的知识和能力作出细致的分析，有助于您和孩子面对现实，看到存在的问题，为未来的学习作出相应的调整。<br>
                                </p>
                                <div class="col-md-3 col-sm-3">
                                    <img src="/Application/Home/View/Static/img/pic1_1.jpg" class="img-responsive" alt="" style="margin-bottom: 10px">
                                    <img src="/Application/Home/View/Static/img/pic1_2.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="iowa-tab2" class="col-md-9 col-sm-9 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <br>
                                    <img src="/Application/Home/View/Static/img/title_report.jpg" alt="">
                                </div>
                                <p class="col-md-9 col-sm-9">
                                    参加Iowa学测，最重要的目的是获得一份客观、详尽的学测报告。<br><br>
                                    教育既是艺术，也是科学，冷静客观地定期面对现实，可以帮助我们在教育的路上走得更清醒，更稳健。最大的问题永远是不面对问题。<br><br>
                                    Iowa考试将我们的学生摆在全美同年级学生的大背景下，在知识和能力的各个方面作出清晰客观的评价，其报告的权威、公正和客观性已经被全美教育工作者普遍接受，是各学校教学的重要反映指标。<br><br>
                                    怎样正确解读学测报告呢？Iowa学测，作为美国学生每年参加的最重要的测试，自然也反映了美国的教育理念。我们中国家长不要单纯地将学测看为考试，分数越高越好，这样学测的意义就不大了，甚至还会因为家长的过于紧张，对孩子未来的学习产生反面的效应。我们需要学习美国的观念，严谨、认真但冷静地看待学测报告。<br><br>
                                    首先，学测将各项知识点的评分分开，所以可以清晰看见孩子知识的分布状况，未来有意识加强，或者知道在未来会顺理成章的上升；再则，通过知识和能力的对比，也可以知道孩子是否已经够努力，还是大有潜力可挖。<br>
                                </p>
                                <div class="col-md-3 col-sm-3">
                                    <img src="/Application/Home/View/Static/img/pic2_1.jpg" class="img-responsive" alt="" style="margin-top: 10px;margin-bottom: 10px">
                                    <img src="/Application/Home/View/Static/img/pic2_2.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <img src="/Application/Home/View/Static/img/report2.gif" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="iowa-tab3" class="col-md-9 col-sm-9 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <br><img src="/Application/Home/View/Static/img/title_baoming.gif" alt="">
                                </div>
                                <p class="col-md-9 col-sm-9">
                                    目前在中国，只有外国人学校引进Iowa考试，作为学生每年必须参加的考试。此次，在家书院将Iowa考试引进中国，目标为所有自主教育的家庭提供服务，也是因应中国教育不断国际化之后的需求。<br><br>
                                    Iowa测试每年参加一次就可以了，您可以选择参加春季或者秋季，书院固定日期的考试。由于考试内容较多， 为了避免学生过于疲劳，影响测试的客观性，考试需要分两天进行。<br><br>
                                    2014 春季的考试时间为：<br>
                                    小学一至三年级（书院LLC年级）：5月26日——30日（每天考试几小节，主要是考虑到时间如果安排太紧，会影响低年级学生的正常发挥）<br>
                                    小学四年级至高中二年级（书院MLC及以上年级）：5月28日-29日（28日全天，29日上午）<br><br>
                                    考试对象：在家书院提供的是1－11年级（小学一年级到高二）的Iowa学测，附加CogAT能力测试。<br><br>
                                    考试费用：USD 80 （RMB 500）<br><br>
                                    目前暂时不接受自选时间单独报名，如果您不能在书院统一的时间参加考试，可以组成五人以上学生，参加小组测试，费用为160美金（RMB1000元），十人以上，费用为100美金（RMB 600元）。<br><br>
                                    联系方式：<br>
                                    考试部主任：郑老师 Mr.Jolon  18911402732     020-37579265（办公电话）<br>
                                    Email：   jolonzheng@athomeacademy.org <br><br>
                                    地址：五羊新城寺右南二街一巷19号,临近五羊邨地铁站A出口，广兴华花园（愈生医院对面）<br>
                                </p>
                                <div class="col-md-3 col-sm-3">
                                    <img src="/Application/Home/View/Static/img/pic3_1.jpg" class="img-responsive" alt="" style="margin-bottom: 10px;margin-top: 10px">
                                    <img src="/Application/Home/View/Static/img/pic3_2.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BJU大学招生-->
    <div class="container-fluid section-one section-six" id="under_Five">
        <div class="container">
            <div class="row">
                <div id="enrolment-tab" class="subnav-Tab col-sm-12">
                    <!--左侧导航-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul class="row">
                            <li><a href="#enrolment-tab1" class="col-md-12 col-sm-12 col-xs-3">海报A</a></li>
                            <li><a href="#enrolment-tab2" class="col-md-12 col-sm-12 col-xs-3">海报B</a></li>
                            <li><a href="#enrolment-tab3" class="col-md-12 col-sm-12 col-xs-3">视频短片</a></li>
                            <li><a id="apply" class="col-md-12 col-sm-12 col-xs-3">BJU大学</a></li>
                        </ul>
                    </div>
                    <!--右侧内容-->
                    <div id="enrolment-tab1" class="col-md-9 col-sm-9 col-xs-12">
                        <img src="/Application/Home/View/Static/img/BJU-brochureA.jpg" class="img-responsive" alt="海报A">
                    </div>
                    <div id="enrolment-tab2" class="col-md-9 col-sm-9 col-xs-12">
                        <img src="/Application/Home/View/Static/img/BJU-brochureB.jpg" class="img-responsive" alt="海报B">
                    </div>
                    <div id="enrolment-tab3" class="col-md-9 col-sm-9 col-xs-12">
                        <div class="embed-responsive embed-responsive-4by3">
                            <embed class="embed-responsive-item" align="middle" allowfullscreen="true" quality="high" name="BJU短片" src="http://player.youku.com/player.php/sid/XNjM0MTk4Mjky/v.swf" style="visibility: visible" title="视频" type="application/x-shockwave-flash">
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

</body>
</html>