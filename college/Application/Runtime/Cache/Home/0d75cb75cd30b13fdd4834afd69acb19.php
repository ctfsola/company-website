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
    <link rel="stylesheet" href="/Application/Home/View/Static/css/enter.css">
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Application/Home/View/Static/js/nav.js"></script>
    <script>
        $(function() {
            $( "#nav-tab11" ).tabs();
            $( "#subnav-tab1" ).tabs();
            $( "#subnav-tab2" ).tabs();
            $( "#subnav-tab3" ).tabs();
            $( "#subnav-tab4" ).tabs();
            $( "#subnav-tab5" ).tabs();
//            激活选项卡
            $('#subnavChange').children().each(function(index) {
                $(this).click(function () {
                    $( "#nav-tab11" ).tabs("option", "active", index)
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
<div>
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
            <img src="/Static/img/banner-4.jpg" class="imgMiddle img-responsive " alt="">
            <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                <h1>
                    走进书院
                </h1>
            </div>
        </div>
    </div>
    <div id="nav-tab11">
        <!--副导航-->
        <div class="sub-navbar container-fluid">
            <div class="container">
                <ul class="row">
                    <li class="col-md-2 col-sm-2 active" ><a href="#tab_one">日常教学</a></li>
                    <li class="col-md-2 col-sm-2"><a href="#tab_two">课外活动</a></li>
                    <li class="col-md-2 col-sm-2"><a href="#tab_three">书院规则</a></li>
                    <li class="col-md-2 col-sm-2"><a href="#tab_four">学业展示</a></li>
                    <li class="col-md-2 col-sm-2"><a href="#tab_six">日程安排</a></li>
                    <li class="col-md-2 col-sm-2"><a href="#tab_five">AHA毕业生</a></li>
                </ul>
            </div>
        </div>
        <!----------------1日常教学--------------->
        <div class="container-fluid tab_one" id="tab_one" >
            <div class=" container">
                <!--标题-->
                <div class="go-title">
                    日常教学
                </div>
                <!--页面内容-->
                <div id="subnav-tab1" class="subnav-Tab contentHeight row">
                    <!--左侧导航-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul>
                            <li><a href="#tab_one_1" class="col-md-12 col-sm-12 col-xs-3">学期设置</a></li>
                            <li><a href="#tab_one_2" class="col-md-12 col-sm-12 col-xs-3">教学原则</a></li>
                            <li><a href="#tab_one_3" class="col-md-12 col-sm-12 col-xs-3">日程安排</a></li>
                            <li><a href="#tab_one_4" class="col-md-12 col-sm-12 col-xs-3">年级教学</a></li>
                        </ul>
                    </div>
                    <!--右侧内容-->
                    <div id="tab_one_1" class="col-md-9 col-sm-9 col-xs-12">
                        <span>学期设置</span>
                        <p>每个学年分成两个学期，与中国公立教育体系的放假时间基本一致。 每个学期分成三个学段，每个学段大约为6周，两个学段中间设有活动周。第一个活动周是露营周，第二个活动周为排练周，准备春季音乐会和圣诞音乐会。 第一个学段和第二个学段末会发出简易的成绩报告单，第三个学段末将会综合前两个学段的分数，合成本学期的总成绩单。</p>
                    </div>
                    <div id="tab_one_2" class="col-md-9 col-sm-9 col-xs-12">
                        <span>教学原则</span>
                        <p>
                            小班教学<br>
                            根据年龄分班的小班教学制度。小班教学可以保障学生在得到老师足够的关注的同时，又能与同伴之间互相讨论和学习。<br><br>
                            灵活的学科走班制<br>
                            根据需要，经两名老师和家长同意，学生可以在个别学科上降级或升级。每个学生的才能很不一样，灵活的走班制可以更好地帮助学生发展特长，弥补短处。<br><br>
                            自学<br>
                            如果自学被认定为某名学生在某门学科上的最佳学习方案，在两名老师和家长的同意下，学生可以在该学科上课期间在图书馆自习。强烈自我驱动力之下，自学会是最有效率的学习方式，现代网络也为每一位愿意自学的学生提供了足够的资源。这种自学方式非常适合优秀的学生，使得他们不被学校开设的课目所限制，可以自由地学习感兴趣的课目。</p>
                    </div>
                    <div id="tab_one_3" class="col-md-9 col-sm-9 col-xs-12">
                        <span>日程安排</span>
                        <p>
                            以下是在家书院广州总校区2014年秋季课表。很高兴今年有更多的国内、外老师带着服侍的心志加入我们的团队。这些老师有些是从事很多年教学经验的，有些是非常富有活力的，有些是非常有创新精神的。相信在新的学年中，孩子们很快会适应并且喜欢上他们。<br><br>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>AHA广州广州总校老师：</thead>
                                <tbody>
                                <tr class="info">
                                    <td>
                                        中国老师:
                                    </td>
                                    <td>
                                        美国老师：
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ms.Daniela 校长助理，六年级班主任
                                    </td>
                                    <td>
                                        Ms. Cindy Dickinson&nbsp;学监，教师培训师
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Ms.Phoebe 幼儿园小班班主任
                                    </td>
                                    <td>
                                        Mr. Tim&nbsp;&nbsp;校长助理，英文老师&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ms.Alice 幼儿园中班班主任
                                    </td>
                                    <td>
                                        Ms. Teata 幼儿部英文老师
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Ms. Rainnie&nbsp;小学一年级班主任
                                    </td>
                                    <td>
                                        Ms. Allison 幼儿部英文老师
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ms. Winnie&nbsp;小学二年级班主任
                                    </td>
                                    <td>
                                        Ms. Jessica&nbsp;&nbsp;小学部英文老师&nbsp;
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Ms.Mamin 小学三年级班主任
                                    </td>
                                    <td>
                                        Ms.Tiffany 小学部英文老师，中学部体育老师
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mr. Davy &nbsp;小学四年级班主任
                                    </td>
                                    <td>
                                        Mr. Nathan 中学部历史老师
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Ms.Linda &nbsp;ESL英文强化班班主任
                                    </td>
                                    <td>
                                        Mr.Mike 中学部科学老师
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ms. Lotus&nbsp;小学语文教研组主任, 中文老师
                                    </td>
                                    <td>
                                        Ms.Nicole 中学部文学老师
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        Ms.Daisy 八年级班主任，中文老师
                                    </td>
                                    <td>
                                        Mr. Steve 教学项目推广人
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ms.Alicia 七年级班主任，英文老师
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                Daily Schedule 每日课程时间安排:
                                </thead>
                                <tbody>
                                <tr  class="active">
                                    <td>
                                        08:00 &#8211; 08:15
                                    </td>
                                    <td>
                                        早点名和早操
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        08:15 &#8211; 08:45
                                    </td>
                                    <td>
                                        世界观
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        09:00 &#8211; 09:40
                                    </td>
                                    <td>
                                        第一节课
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        09:45 &#8211; 10:25
                                    </td>
                                    <td>
                                        第二节课
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        10:45 &#8211; 11:25
                                    </td>
                                    <td>
                                        第三节课
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11:30 &#8211; 12:10
                                    </td>
                                    <td>
                                        第四节课
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        午餐时段
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        13:00 &#8211; 13:40
                                    </td>
                                    <td>
                                        第五节课
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        13:45 &#8211; 14:25
                                    </td>
                                    <td>
                                        第六节课
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        14:45 &#8211; 15:25
                                    </td>
                                    <td>
                                        第七节课
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        15:30 &#8211; 16:10
                                    </td>
                                    <td>
                                        第八节课
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        After School 课后时段
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        16:20 &#8211; 17:30
                                    </td>
                                    <td>
                                        课外活动
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        17:30 &#8211; 18:30
                                    </td>
                                    <td>
                                        晚自习第一时段
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        晚餐时段
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        19:00 &#8211; 21:00
                                    </td>
                                    <td>
                                        晚自习第二时段
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            全周总课时：45节<br>
                            研究表明，学业上的 成功和出席率有着密切的联系。任何理由的缺席都会影响孩子的进步。父母请确保孩子准时到校上课。除非学生生病，学校强烈反对缺席和早退。家长对学校的重视直接影响孩子对学业的态度，尤其当学生在课业上碰到困难时，影响将更大。
                        </p>
                    </div>
                    <div id="tab_one_4" class="col-md-9 col-sm-9 col-xs-12">
                        <span>年级教学</span>
                        <p>
                            1-4年级教学目标：<br>
                            学习品格，建立良好的行为习惯。<br>
                            学习核心科目，发展基本学习技能。<br>
                            进一步加强“看字发音”技巧，建立英文阅读能力和习惯。<br>
                            建立流畅的中文阅读能力和表达能力。<br>
                            建立对自然科学的兴趣。<br>
                            学习和实践基本生活技能。<br>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tbody>
                                <tr class="info">
                                    <th>
                                        科目
                                    </th>
                                    <th>
                                        每周课时
                                    </th>
                                    <th>
                                        教学语言
                                    </th>
                                    <th>
                                        一至四年级
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        世界观
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        品格故事
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        词汇拼写&amp;语法和写作
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        阅读
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU教材
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        人文历史
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文英文/中文
                                    </td>
                                    <td>
                                        BJU教材
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        科学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU教材
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        书院自编语文教材，水平等同于人教版同年级水平
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        数学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        美国小学数学教材
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        艺术
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        绘画
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        音乐
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        音乐欣赏／乐理／合唱
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        体育
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        中国国家标准
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        周总课时：45课时&nbsp;&nbsp;&nbsp; 40分钟／课时
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            5-6年级教学目标：<br>
                            学习东西方经典，形成正确的思维模式。<br>
                            学习核心科目，进一步发展学习技能，开始累积知识。<br>
                            发展英文阅读习惯，学习写作技巧。<br>
                            大量阅读中文儿童文学作品，学习写作。<br>
                            学习和实践基本生活技能。<br>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tbody>
                                <tr class="info">
                                    <th>
                                        科目
                                    </th>
                                    <th>
                                        每周课时
                                    </th>
                                    <th>
                                        教学语言
                                    </th>
                                    <th>
                                        四至六年级
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        世界观
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        学习东西方经典
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        语法写作&amp;词汇
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        英文文学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU文学教材和名著导读
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        人文历史
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU人文历史教材
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        科学
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU科学教材4－6年级
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        书院自编语文教材，水平等同于人教版同年级水平
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        数学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        中国和美国小学数学
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        艺术
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        音乐
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        音乐欣赏／乐理／合唱
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        体育
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        网球和游泳
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        周总课时：45课时&nbsp;&nbsp;&nbsp; 40分钟／课时
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4">
                                        每学年要求完成36小时社区服务工作。
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            7-8年级教学目标：<br>
                            学习东西方经典，用于实际生活思考。<br>
                            系统学习科学。<br>
                            享受英文阅读，提高写作技巧。<br>
                            大量阅读东西方文学作品。<br>
                            服务并学习。<br>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tbody>
                                <tr class="info">
                                    <th>
                                        科目
                                    </th>
                                    <th>
                                        每周课时
                                    </th>
                                    <th>
                                        教学语言
                                    </th>
                                    <th>
                                        七至八年级
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        世界观
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        学习东西方经典
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        语法写作&amp;词汇
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        英文文学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU文学教材和名著导读
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        人文历史
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU人文历史教材
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        科学
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        两年完成三门BJU科学的学习
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        书院自编语文教材，水平等同于人教版同年级水平
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        数学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        BJU数学
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        艺术
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        绘画
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        音乐
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        音乐欣赏／乐理／合唱
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        体育
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        网球和游泳
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        周总课时：45课时&nbsp;&nbsp;&nbsp; 40分钟／课时
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4">
                                        每学年要求完成54小时社区服务工作。
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            9-12年级教学目标：<br>
                            高中是通往更高教育的关键阶段，和以往小学和中学阶段的学习很不同，学生需要学习成为一个更负责人的人。书院会将高中阶段的学生视为年轻的成年人，将更多的权利赋予他们，权利同时代表的也是责任。<br>
                            高中学分制<br>
                            书院高中包含九年级到十二年级，采取美国体系的学分制。高中课程被设计来准备学生能够达到美国高中毕业的水平并且进入大学学习。每位学生必须休满至少25个学分和完成25个以上的学分才能高中毕业。在主要的科目上，成功修完一年可以得到1个学分，在世界观、艺术和体育上，修完一年可以得到半个学分。成功修完一年课程的含义是GPA要在1.0以上。（平均60分以上）<br>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tbody>
                                <tr class="info">
                                    <td colspan="4">
                                        高中学分要求：
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        英文：
                                    </td>
                                    <td>
                                        4学分
                                    </td>
                                    <td>
                                        中文：
                                    </td>
                                    <td>
                                        4学分
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        数学：
                                    </td>
                                    <td>
                                        3学分
                                    </td>
                                    <td>
                                        历史和人文：
                                    </td>
                                    <td>
                                        3学分
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        科学：
                                    </td>
                                    <td>
                                        4学分
                                    </td>
                                    <td>
                                        艺术：
                                    </td>
                                    <td>
                                        2学分
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        体育：
                                    </td>
                                    <td>
                                        2学分
                                    </td>
                                    <td>
                                        选修：
                                    </td>
                                    <td>
                                        3学分
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        总计：25学分
                                    </td>
                                </tr>
                                <tr  class="active">
                                    <td colspan="4">
                                        完成216小时以上的社区服务
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tbody>
                                <tr class="info">
                                    <td colspan="3">
                                        GPA计算方法:
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        100分制
                                    </th>
                                    <th>
                                        字母分制
                                    </th>
                                    <th>
                                        GPA
                                    </th>
                                </tr>
                                <tr class="active">
                                    <td>
                                        97 &#8211; 100
                                    </td>
                                    <td>
                                        A+
                                    </td>
                                    <td>
                                        4.0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        93 &#8211; 96
                                    </td>
                                    <td>
                                        A
                                    </td>
                                    <td>
                                        4.0
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        90 &#8211; 92
                                    </td>
                                    <td>
                                        A-
                                    </td>
                                    <td>
                                        3.7
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        87 &#8211; 89
                                    </td>
                                    <td>
                                        B+
                                    </td>
                                    <td>
                                        3.3
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        83 &#8211; 86
                                    </td>
                                    <td>
                                        B
                                    </td>
                                    <td>
                                        3.0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        80 &#8211; 82
                                    </td>
                                    <td>
                                        B-
                                    </td>
                                    <td>
                                        2.7
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        77 &#8211; 79
                                    </td>
                                    <td>
                                        C+
                                    </td>
                                    <td>
                                        2.3
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        73 &#8211; 76
                                    </td>
                                    <td>
                                        C
                                    </td>
                                    <td>
                                        2.0
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        70 &#8211; 72
                                    </td>
                                    <td>
                                        C-
                                    </td>
                                    <td>
                                        2.0
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        67 &#8211; 69
                                    </td>
                                    <td>
                                        D+
                                    </td>
                                    <td>
                                        1.3
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        63 &#8211; 66
                                    </td>
                                    <td>
                                        D
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        60 &#8211; 62
                                    </td>
                                    <td>
                                        D-
                                    </td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td colspan="3">
                                        60分以下为不及格，不能获得学分
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            GPA加权方法：<br>
                            我们深知难的课程需要学生付出加倍的努力，所以书院采用权重学分法。加权的方法是：<br>
                            荣誉课程 GPA x 1.2<br>
                            AP课程 GPA + 1<br>
                            学生注册加入书院高中后，我们开始为学生累积成绩报告单。从其他来源获得的学分，经过书院认证后，可以被累加在一起，成为最终成绩报告单的一部分。<br>
                            在学术界，成绩单被视为是神圣的。未加盖公章的成绩单是不正式的。<br>
                            为了维护成绩单的完整性，必须有以下两道保障。<br>
                            1、正式的成绩单通常由一个学校寄往另一所学校。当由学生转交时，必须是完好封口的。<br>
                            2、正式的成绩单应由学校官员签名，并盖有学校公章。<br>
                            AP课程介绍：<br>
                            AP课程就是美国大学先修课程，把34门大学一二年级的基础课程挪到高中来供高中生选修，参加课程并通过考试的学生可以获得大学学分，更重要的是获得全新的学习体验，提前进入大学水平的学习。AP体系是美国教育精神的完美体现，很好地展现了美国高学术水准的那一面。<br>
                            AHA开设的AP课程：AP世界历史，英文，AP统计，AP微积分，AP计算机，AP化学，AP物理，AP生物<br>
                        </p>
                        <div class="table-responsive">
                            <table class="table  table-condensed">
                                <tbody>
                                <tr class="info">
                                    <th>
                                        科目
                                    </th>
                                    <th>
                                        每周课时
                                    </th>
                                    <th >
                                        教学语言
                                    </th>
                                    <th>
                                        九到十年级
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        世界观
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        学习东西方经典
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        词汇、语法、阅读理解、写作
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        英文文学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU文学课本和Sonlight读物
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        人文历史
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        BJU人文历史教材
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        科学
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        英文
                                    </td>
                                    <td>
                                        在2年内学习3门科学课程，其中1门可能为AP
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        中文
                                    </td>
                                    <td>
                                        2年中国现代作家研读，中国历史和文化，中国古代经典
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        数学
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        新加坡中学数学，美国高中数学代数 2
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        音乐或艺术
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        音乐绘画
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        体育
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        英文/中文
                                    </td>
                                    <td>
                                        中国国家标准
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4">
                                        周总课时：45课时&nbsp;&nbsp;&nbsp; 40分钟／课时
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------2课外活动---------------->
        <div class="container-fluid tab_two" id="tab_two">
            <div class="container">
                <!--标题-->
                <div class="go-title">
                    课外活动
                </div>
                <!--正文-->
                <div id="subnav-tab2" class="subnav-Tab contentHeight row">
                    <!--左侧导航-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul>
                            <li><a href="#tab_two_1" class="col-md-12 col-sm-12 col-xs-3">书院乐队</a></li>
                            <li><a href="#tab_two_2" class="col-md-12 col-sm-12 col-xs-3">运动社团</a></li>
                            <li><a href="#tab_two_3" class="col-md-12 col-sm-12 col-xs-3">实习服务</a></li>
                            <li><a href="#tab_two_4" class="col-md-12 col-sm-12 col-xs-3">露营游学</a></li>
                        </ul>
                    </div>
                    <!--右侧内容-->
                    <div id="tab_two_1" class="col-md-9 col-sm-9 col-xs-12">
                        <span>书院乐队</span>
                        <p>
                            书院多年设有乐队，在春季和圣诞音乐会和其他的一些场合做表演。<br>
                            书院每年举办春季音乐会和圣诞音乐会。对于学生来说这是非常
                            好的机会学习如何举办一场大型的表演。学生们是整场演出的主办人，他
                            们决定演出的每一个细节，从主题的选定、剧本的挑选、节目的排练到场
                            景设计制作、服装设计制作、音乐、会场布置、宣传品印刷、慈善拍卖等
                            等都由学生主办，老师仅仅作为监护人和帮助者。<br><br>
                        </p>
                        <img class="img-responsive" src="/Static/img/activity1.jpg" alt="">
                    </div>
                    <div id="tab_two_2" class="col-md-9 col-sm-9 col-xs-12">
                        <span>运动&社团</span>
                        <p>
                            书院网球队每周设有常规的训练，亦有机会与其他青少年队进行比赛。<br>

                            书院蓝球队每周设有常规的训练，亦有机会与其他青少年队进行比赛。<br>

                            书院对于达到学业和行为标准的学生赋予“荣誉会”会籍。具体的加入资格在每个学期的开学初宣布。<br>

                            书院很骄傲有自己的辩论队，具体活动时间将在开学初宣布。<br>

                            为了鼓励国际交流和锻炼英文沟通能力，书院设有电子笔友项目，把书院学生和国际学生结对。这个项目为学生提供了经常性的机会锻炼英文写作技巧，同时可以与不同文化的学生进行交往。<br>
                        </p>
                    </div>
                    <div id="tab_two_3" class="col-md-9 col-sm-9 col-xs-12">
                        <span>实习&服务</span>
                        <p>
                            所有4年级以上的学生，书院提供校内实习工作的机会，帮助学生发展服务精神和工作技能。这些工作包含老师助理，图书馆员，年鉴制作，修理维护等等。<br>
                            书院希望能在社区作光作盐，因此对外进行社区服务工作，内容包含英语角，组织社区圣诞会等。书院同时也是国际慈善组织每年举办的国际美食节慈善活动中积极的一员。<br><br>
                        </p>
                        <img class="img-responsive" src="/Static/img/activity2.jpg" alt="">
                    </div>
                    <div id="tab_two_4" class="col-md-9 col-sm-9 col-xs-12">
                        <span>露营&游学</span>
                        <p>
                            书院每年两次举办4天3夜的露营活动。学生住在帐篷里，并自己煮饭和做一切杂务工作。书院希望学生能够多亲近大自然，并且有机会练习生活技能。露营同时也是最好的团契时间，学生和老师们有机会彼此分享生命。<br>
                            书院在假期组织学生进行国际游学活动，使得学生有机会拜访不同的国家和学校。<br><br>
                        </p>
                        <img class="img-responsive" src="/Static/img/activity.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!----------------3书院规则------------>
        <div  class="container-fluid tab_three" id="tab_three">
            <div class=" container">
                <!--标题-->
                <div class="go-title">
                    书院规则
                </div>
                <!--正文-->
                <div id="subnav-tab3" class="subnav-Tab contentHeight row">
                    <!--左侧导航-->
                    <ul class="col-md-3 col-sm-3 col-xs-12">
                        <li><a href="#tab_three_1" class="col-md-12 col-sm-12 col-xs-4">基本规则</a></li>
                        <li><a href="#tab_three_2" class="col-md-12 col-sm-12 col-xs-4">考勤规则</a></li>
                        <li><a href="#tab_three_3" class="col-md-12 col-sm-12 col-xs-4">着装规则</a></li>
                        <li><a href="#tab_three_4" class="col-md-12 col-sm-12 col-xs-4">课堂规则</a></li>
                        <li><a href="#tab_three_5" class="col-md-12 col-sm-12 col-xs-4">其他规则</a></li>
                        <li><a href="#tab_three_6" class="col-md-12 col-sm-12 col-xs-4">奖惩规则</a></li>
                    </ul>
                    <!--右侧内容-->
                    <div id="tab_three_1" class="col-md-9 col-sm-9 col-xs-12">
                        <span>基本规则</span>
                        <p>
                            对待学校：<br>
                            加入书院，就是“在家”的成员，无论在校期间还是离开学校之后，都应对学校和老师保持尊重和感恩。<br>
                            对待老师:<br>
                            早晨见到老师，微笑躬身问候早安；一日中间相 遇，点头致意；楼道等窄处相遇，侧身容老师先过；看见老师有需要帮 助，主动施以援手；人前人后，对老师冠以尊称，在姓或名前加称Mr／ Mrs／Miss；任何情况，始终对老师保持恭敬的语气；任何不敬或辱骂老师的言语都是绝对不可接受的；若有其他人对老师出言不逊，应当予以阻 止或转身离开，不应视若无睹。<br>
                            对待同学:<br>
                            尊重其他同学，尊重彼此不同的背景、个性和习惯。这种尊重表现在言语礼 貌、态度柔和、提供力所能及的帮助，在生气时保持冷静，避免粗鲁的、 侮辱性的或嘲笑性的言词，避免不合适的肢体接触。<br>
                            对待家长:<br>
                            对待自己的父母，任何时候当保持恭敬和体谅，言语柔和，态度尊重，不耐烦是不合宜的。 对待其他同学的家长，态度礼貌恭敬，不得在背后做任何负面议论。<br>
                        </p>
                    </div>
                    <div id="tab_three_2" class="col-md-9 col-sm-9 col-xs-12">
                        <span>考勤规则</span>
                        <p>
                            学生必须在每个上学日准时到校上课。<br>
                            如果学生当日生病无法到校，应由家长在上课前打电话或者发短信通知学校，请假三日以 上，必须提供医生证明。愈后回校，填写请假单。非必要，应尽量避免请 事假。如实属需要，须家长提前出面填写请假申请单。不按请假程序请 假，视作旷课处理。<br>
                        </p>
                    </div>
                    <div id="tab_three_3" class="col-md-9 col-sm-9 col-xs-12">
                        <span>着装规则</span>
                        <p>
                            所有学生，每日应穿着校服回校，无论校内校外，以正确方式穿着校服。<br>
                            男生头发保持自然和干净，不烫发、不染发、不剪奇怪的发型、长度以不遮住眉毛、耳朵和不触及衣领为限。不留胡须，不刺青，不打耳环鼻环等，不戴帽子。<br>
                            女生头发保持自然和干净，不烫发、不染发、不剪奇怪的发型，不化妆，不抹香水，不戴耳环，手镯和夸张的项链，不涂指甲油，不戴帽子。<br>
                            无论校内校外，学生着装应以大方、朴素、得体为原则。<br>
                        </p>
                    </div>
                    <div id="tab_three_4" class="col-md-9 col-sm-9 col-xs-12">
                        <span>课堂规则</span>
                        <p>
                            课前、课中和课后 ：<br>
                            按照各科老师不同的要求，在上课前准备好课本、笔记本、文具、字典、草稿纸等上课所需用品。<br>
                            上课铃响结束前，安静坐在自己的位置上等候老师开始上课。<br>
                            上课时目光始终注视老师，专心听讲，随时作出反应，与老师保持良好互动。<br>
                            上课时不经允许不离开位置，双脚着地，不翘椅子，身体尽量坐正坐直，不斜靠在椅背上，不做重复性的小动作，不发出噪音。<br>
                            上课期间不允许任何饮食。<br>
                            下课结束时，抄录当天作业要求，请老师签名。<br>
                            完成作业：<br>
                            学生有责任明确当天的作业和要求，按照规定的时间和要求，认真、工整地完成作业，并及时上交老师。<br>
                            学生有责任独立完成作业，不允许抄袭行为。<br>
                            学生有义务随时将自己的课本、资料、书包、文具、课桌椅、柜子保持干净和整洁。<br>
                            学生有义务爱护使用学校用品和设备，随时保持教室和学校的环境干净和整齐。<br>
                            学生使用任何物品，遵守物归原处的原则，如离开位置时将椅子放回。<br>
                        </p>
                    </div>
                    <div id="tab_three_5" class="col-md-9 col-sm-9 col-xs-12">
                        <span>其他规则</span>
                        <p>
                            男女交往:<br>
                            男女生应当从内心尊重异性，尊重不同的性别带来的不同习惯、不同感受、不同需要和不同的行为模式。谈及异性时，总是以尊重的方式进行，避免浏览任何对异性不尊重的读物和网页。<br>
                            男生应当主动为女生提供一些服务，如搬重物、开门等，女生应表示感谢，而非觉得理所应当，并为男生做一些男性不擅长的小事。<br>
                            异性应当避免在封闭的空间单独相处，并且避免肢体上不合适的接触。<br>
                            学生在书院求学期间，以学业为重，发展友情为主，在校内校外都不得交往男女朋友，如有违反，立即进入留校察看阶段，两周之内若无法更正，请主动离开学校。<br>
                        </p>
                    </div>
                    <div id="tab_three_6" class="col-md-9 col-sm-9 col-xs-12">
                        <span>奖惩规则</span>
                        <p>
                            对于努力严格约束自己，学习努力的学生，学校设有各种类型的嘉奖，包含获得一些特权和学期末的奖章。<br>
                            对于疏忽或者故意违反学校校规的行为，学校将根据具体情况予以惩戒，以帮助学生行走正道。常规惩戒可能包含：离堂、留堂、罚站、罚青蛙跳、罚抄书、罚背书、劳动等。<br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!----------------4学业展示--------------->
        <div class="container-fluid tab_four" id="tab_four">
            <div class=" container">
                <!--标题-->
                <div class="go-title">
                    学业展示
                </div>
                <!--正文-->
                <div id="subnav-tab4" class="subnav-Tab contentHeight row">
                    <!--左侧导航-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul>
                            <li><a href="#tab_four_1" class="col-md-12 col-sm-12 col-xs-3">SAT学业</a></li>
                            <li><a href="#tab_four_2" class="col-md-12 col-sm-12 col-xs-3">AP学业</a></li>
                            <li><a href="#tab_four_3" class="col-md-12 col-sm-12 col-xs-3">托福学业</a></li>
                            <li><a href="#tab_four_4" class="col-md-12 col-sm-12 col-xs-3">其他学业</a></li>
                        </ul>
                    </div>
                    <!--右侧内容-->
                    <div id="tab_four_1" class="col-md-9 col-sm-9 col-xs-12">
                        <span>SAT学业</span>
                        <p>
                            SAT考试介绍：全称Scholastic Assessment Test，中文名称为学术能力评估测试。由美国大学委员会（College Board）主办，SAT成绩是世界各国高中生申请美国名校学习及奖学金的重要参考，SAT的考试分为两个部分，第一个是通用考试—-推理测验(Reasoning　Test)，包括阅读、写作和数学，被称为SAT1。 第二个是单科考试—–专项测验(Subject　Tests)，有数学、物理、化学、生物、外语等，被称为SAT2。 SAT1主要测验考生的写作、阅读和数学能力，每部分满分是800分，总分是2400分;SAT2则是通过对单科的考查，更详尽的了解申请者的单科能力。每科满分为800分，三门总分2400，美国名校SAT2有竞争力的分数约在2100+ (三门)。。。。。。<br>
                            <a href="http://baike.baidu.com/view/95395.htm" target="_blank">&lt;点击查看SAT详情&gt;</a><br>
                            <a href="http://www.wang-shang.com/resource/4881.html" target="_blank">&lt;点击查看SAT1和SAT2的区别&gt;</a><br>
                            书院历届学生SAT学业记录：<br>
                            16岁的PSL学生Mary连恩乐参加SAT考试，取得2180的高分。阅读：710，数学：800，写作：670<br>
                            17岁的PSL学生Bill柳雨淮第二次参加SAT考试，取得2050的高分。阅读：680，数学：730，写作：640<br>
                            PSL同学报考SAT2考试：<br>
                            Mary连恩乐：   数学  800分   生物  790分   化学  790分<br>
                            Bill柳雨淮：   数学  750分   物理  770分   美国历史  650分<br>
                            Andrew连濡恩：   数学  800分   物理  760分<br>
                            Lee杨宁枫：   数学  770分<br>
                            Kevin李 凯：   数学  650分<br>
                            Bob张会园：   数学  630分<br>
                            Michael连沐恩被美国埃默里大学Emory University录取，埃默里大学建于1836年，近一个世纪以来素享有“ 南哈佛 ” 的美誉。素有南方长春藤之称, 并名列以斯坦佛大学领衔的九大“新常春藤”名校之列。<br>
                            17岁的Bill柳雨淮首次参加SAT考试，取得2010的高分。<br>
                            PSL应届毕业生Michael连沐恩参加美国大学入学SAT考试，取得2010分。<br>
                            Scarlet，17岁，参加SAT考试取得1935分,并于当年7月顺利被美国AAG高中录取。<br>
                            Sergey，18岁，参加SAT考试取得1960分<br>
                        </p>
                    </div>
                    <div id="tab_four_2" class="col-md-9 col-sm-9 col-xs-12">
                        <span>AP学业</span>
                        <p>
                            从2007年3月创校至今，虽然是私立学校，但是在家书院的学生们在学业上同样是非常优秀的，就像所有的父母都会为自己的孩子自豪一样，我们也非常为我们的学生自豪，看到他们在信仰根基以及品格上不断地成长，在学业上也不落后，我们真的是非常地感恩，感谢神如此眷顾保守我们。<br>
                            AP考试介绍：全称Advanced Placement，中文名称为大学预修课程。AP课程及考试始于1955年，由美国大学理事会（College Board）主办，在高中阶段开设的具有大学水平的课程，共有22个门类、37个学科。该项考试的目的在于，使高中学生提前接触大学课程，完成一些美国大学的学分课程及考试。AP课程及考试可以为高中生起到减免大学学分、降低大学教育成本、缩短大学教育时间的目的，同时AP考试成绩可以作为申请大学的一个重要筹码，AP采取的是5分制，3分以上的成绩为大多数的大学接受，可以在今后上大学时折抵多至一学年的大学学分。少数顶尖大学要求4分或5分才能折抵大学学分。。。。。。<br>
                            <a href="http://baike.baidu.com/item/AP/2760808" target="_blank">&lt;点击查看AP详情&gt;</a><br>
                            书院历届学生AP学业记录：<br>
                            PSL同学报考AP考试,5月报考，7月成绩查询结果：<br>
                            Mary连恩乐：      统计学  5分       生物  5分<br>
                            Bill柳雨淮：         统计学  4分       计算机科学  4分<br>
                            Andrew连濡恩：   统计学  4分       计算机科学  5分<br>
                            书院首批3位学生参加美国大学预修学分AP考试<br>
                            Michael连沐恩：   微积分BC  4分<br>
                            Mary连恩乐：   化学  4分<br>
                            Bill柳雨淮：   世界史  5分<br>
                        </p>
                    </div>
                    <div id="tab_four_3" class="col-md-9 col-sm-9 col-xs-12">
                        <span>托福学业</span>
                        <p>
                            从2007年3月创校至今，虽然是私立学校，但是在家书院的学生们在学业上同样是非常优秀的，就像所有的父母都会为自己的孩子自豪一样，我们也非常为我们的学生自豪，看到他们在信仰根基以及品格上不断地成长，在学业上也不落后，我们真的是非常地感恩，感谢神如此眷顾保守我们。<br>
                            托福TOEFL考试介绍：TOEFL（The Test of English as a Foreign Language，简称TOEFL）是由美国教育测验服务社（ETS）举办的英语能力考试，全名为“检定非英语为母语者的英语能力考试”，中文音译为“托福”,新托福满分是120分。TOEFL是出国留学(美国、加拿大)的必备考试成绩，美国和加拿大已有超过2,400所大学和学院承认这项考试成绩，规定了申请者的最低TOEFL录取分数线。。。。。。。<br>
                            <a href="http://baike.baidu.com/view/1324.htm" target="_blank">&lt;点击查看托福TOEFL详情&gt;</a><br>
                            <a href="http://baike.baidu.com/view/131138.htm" target="_blank">&lt;点击查看新托福详情&gt;</a><br>
                            书院历届学生托福TOEFL学业记录：<br>
                            Michael连沐恩，参加托福考试取得107分<br>
                            Bill柳雨淮，16岁，参加托福考试取得109分<br>
                            Sergey，18岁，参加托福考试取得114的高分<br>
                        </p>
                    </div>
                    <div id="tab_four_4" class="col-md-9 col-sm-9 col-xs-12">
                        <span>其他学业</span>
                        <p>
                            书院历届学生其他学业记录：<br>
                            暂无记录 <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!----------------6日程安排---------------->
        <div class="container-fluid tab_six" id="tab_six">
            <div class=" container">
                <!--标题-->
                <div class="go-title">
                    日程安排
                </div>
                <!--正文-->
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <img class="img-responsive" src="/Static/img/2016-2017-Calendar-1-1.jpg" alt="">
                    <img class="img-responsive" src="/Static/img/2016-2017-Calendar-2-1.jpg" alt="">
                </div>
            </div>
        </div>
        <!----------------5AHA毕业生---------------->
        <div class="container-fluid tab_five" id="tab_five">
            <div class=" container">
                <!--标题-->
                <div class="go-title">
                    AHA毕业生
                </div>
                <!--正文-->
                <div id="subnav-tab5" class="subnav-Tab  contentHeight row">
                    <!--左侧导航-->
                    <ul class="col-md-3 col-sm-3 col-xs-12">
                        <li><a href="#tab_five_1" class="col-md-12 col-sm-12 col-xs-4">AHA毕业生</a></li>
                    </ul>
                    <!--右侧内容-->
                    <div id="tab_five_1" class="col-md-9 col-sm-9 col-xs-12">
                        <div class="one-content row">
                            <h3 class="col-sm-12">祝福在家书院第三届毕业生（三）</h3><br>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/G31-128x96.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    在耐心的等待和审慎的衡量之后，本校第三届的毕业生都已经确认好他们将要赴美就读的大学。Andrew Lien
                                    最终选择了和他的哥哥（也是本校第一个毕业生 Michael Lien）同一个学校 Emory University就读
                                    Andrew 并取得每年4万多美元的奖学金......<br>
                                    <span>2014-02-21&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </div>
                        <div class="one-content row">
                            <h3 class="col-sm-12">在家书院2013届毕业生—Bill柳雨淮，美国维吉尼亚大学</h3><br>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/61-128x961.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    在家书院2013届毕业生—Bill柳雨淮，被美国的4所大学录取，最终他选择了排名第24的维吉尼亚大学 University of Virginia ......
                                    <br>
                                    <span>2013-08-29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </div>
                        <div class="one-content row">
                            <h3 class="col-sm-12">在家书院2012届毕业生—Michael，美国埃默里大学</h3><br>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/Michael128-963.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    在家书院2012届毕业生—Michael，被美国埃默里大学录取，埃默里大学全美综合排名前20、素有“南哈佛”美誉......
                                    <br>
                                    <span>2013-08-29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=""></div>
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