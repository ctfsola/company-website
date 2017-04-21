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
    <link rel="stylesheet" href="/Static/css/nav.css">
    <link rel="stylesheet" href="/Static/css/admitted.css">
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Static/js/nav.js"></script>
    <script>
        $(function() {
            $( "#read-subnav" ).tabs();
            $( "#first-tab" ).tabs();
            $( "#iowa-tab" ).tabs();
            //            激活选项卡
            $('#subnavChange').children().each(function(index) {
                $(this).click(function () {
                    $( "#read-subnav" ).tabs("option", "active", index)
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
<div id="read-subnav">
    <!--banner图-->
    <div class="container-fluid sub-banner">
        <div class="container">
            <img src="/Static/img/banner-5.jpg" class="imgMiddle img-responsive " alt="">
            <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                <h1>
                    入读书院
                </h1>
            </div>
        </div>
    </div>
    <!--副导航-->
    <div  class="sub-navbar container-fluid">
        <div class="container">
            <ul class="row">
                <li class="col-md-3 col-sm-3"><a href="#tab_One">录取准程</a></li>
                <li class="col-md-3 col-sm-3"><a href="#tab_Three">奖助学金</a></li>
                <li class="col-md-3 col-sm-3"><a href="#tab_Four">在线报名</a></li>
                <li class="col-md-3 col-sm-3"><a href="#tab_Five">预约参观</a></li>
            </ul>
        </div>
    </div>
    <!--录取原则-->
    <div class="container-fluid section-one" id="tab_One">
        <div class="container">
            <div class="one-title">
                <h2>录取准则</h2>
            </div>
            <!--正文-->
            <div class="one-content">
                <div class="row contentHeight">
                    <div id="first-tab" class="subnav-Tab col-sm-12">
                        <!--左侧导航-->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <ul class="row">
                                <li><a href="#first-tab1" class="col-md-12 col-sm-12 col-xs-4">录取原则</a></li>
                                <li><a href="#first-tab2" class="col-md-12 col-sm-12 col-xs-4">录取程序</a></li>
                            </ul>
                        </div>
                        <!--右侧内容-->
                        <div id="first-tab1" class="col-md-9 col-sm-9 col-xs-12">
                            <p>
                                <span>录取原则</span><br>
                                在家书院，作为家长合作制的学习团体，招生录取的原则是家长和学校有一致的教育理念。书院秉持传统中国儒家教育理念，强调勤奋、负责和对生命的尊重。<br>
                                书院同时也保留权利，仅招收一定数目的学生。希望申请的学生可以先加入到等候名单中，招生原则是择优录取和先申请先服务。已有家庭成员在校读书的家庭可以获得优先。<br>
                            </p>
                        </div>
                        <div id="first-tab2" class="col-md-9 col-sm-9 col-xs-12">
                            <p>
                                <span>第一步：家长面谈</span><br>
                                教育孩子是家长的权利也是责任，当家长为孩子选择学校，也 就是表示愿意将这份权利和责任与学校共同承担。作为合作者，家长和学校必须在基本的教育理念上不断地努力保持高度的一致，在具体的教育行为上互相支持，才能教导出优秀的孩子。因此与家长面谈， 无论对学校，还是家长，都是做决定的第一步。<br>
                                <span>第二步：填写入学申请表</span><br>
                                <a href="" target="_blank">下载入学申请表pdf版<img src="/Static/img/pdf.jpg" style="width: 32px;height: 32px;"/> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="" target="_blank">下载入学申请表word版<img src="/Static/img/doc.ico" style="width: 32px;height: 32px;"/> </a>&nbsp; &nbsp; 或者点击<a href="" target="_blank">&ldquo;在线报名&rdquo;&nbsp;</a><br />
                                Email:  Cindylien21@gmail.com<br>
                                固定电话:  020-87361432  咨询时间:  8:30—17:30<br>
                                发送报名表后，请通过以上电话联系确认是否已收到，谢谢！<br>
                                <span>第三步：交考试费后参加入学考试</span><br>
                                申请考试费,申请费不能退费，不能转让他人，不可延期到下一年度使用，并且必须在所有入学审批程序展开之前缴纳。 幼儿园：￥200    ||   一年级至十二年级：￥300<br>
                                <span>第四步：学生面试</span><br>
                                <span>第五步：发录取／不录通知</span><br>
                                <span>第六步：缴学费和长期就读保证金</span><br>
                                在家书院旨在教书育人，十年树木，百年树人，品格的塑造和能力的建立都需要相当长一段时间，所以书院优先录取承诺学习三年以上的学生，入学时需缴纳4万元的长期就读保证金。如果学生在校学习未满三年，学习一年者，学费加收50％；学习两年者，学费加收30％。学习三年期满，保证金无息退还，或直接转下一年的学费。<br>
                                <span>第七步：正式入学（发课本、学生手册）</span><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--奖助学金-->
    <div class="container-fluid section-one" id="tab_Three">
        <div class="container">
            <div class="one-title">
                <h2>奖助学金</h2>
            </div>
            <!--正文-->
            <div class="one-content">
                <div class="row contentHeight">
                    <div class="subnav-Tab col-sm-12">
                        <!--左侧导航-->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <ul class="row">
                                <li class="ui-tabs-active"><a class="col-md-12 col-sm-12 col-xs-4">录取原则</a></li>
                            </ul>
                        </div>
                        <!--右侧内容-->
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <p>
                                <span>奖助学金</span><br>
                                目前我们设有多子女家庭助学金<br>
                                同一家庭两个孩子入读书院，享有9折；三个孩子享有85折。<br>
                                你“在家”。如果书院任何学生家庭遇到特殊财务困难，欢迎联络家长委员会，取得特别支持。<br>
                                我们也欢迎热心教育的人士慷慨解囊，为成绩出色的以及有需要的学生提供特别的奖助学金。<br>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--在线报名-->
    <div class="container-fluid section-one" id="tab_Four">
        <div class="container">
            <div class="one-title">
                <h2>在线报名</h2>
            </div>
            <!--正文-->
            <div class="one-content" style="border: 1px solid #c5c5c5;padding: 15px;">
                <div class="row">
                    <div class="col-md-1 col-md-offset-1 col-sm-offset-1 col-sm-1 col-xs-2 text-center">
                        <img src="/Static/img/logo-icon1.png" style="height: 50px;width: 50px" alt="">
                    </div>
                    <p class="col-md-9 col-sm-9 col-xs-8"><span>在家书院入学在线报名申请</span><br>
                        欢迎使用AHA在家书院在线报名系统，在填写报名表之前，请确保您对我们的教育理念和教学方式有详细的了解，您可以从我们的网站上找到相关信息，或者您也可以预约时间到我们学校来了解详情。 预约参观电话：020-87361432
                    </p>
                    <div class="col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-xs-12">
                        <form role="form">
                            <div class="">
                                <p style="border-bottom: 1px solid #333333"><span>学生基本信息</span></p>
                                <p>Basic Information of Student</p>
                            </div>
                            <div class="form-group">
                                <label class="center-block" for="campus">入读校区 Campus *</label>
                                <select class="form-control" name="campus" id="campus">
                                    <option name="0">--请选择--</option>
                                    <option name="1">广州校区</option>
                                    <option name="2">杭州校区</option>
                                    <option name="3">青岛校区</option>
                                    <option name="4">上海校区</option>
                                    <option name="5">重庆校区</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="live">住宿/走读 Resident/Day *</label>
                                <select class="form-control" name="live" id="live">
                                    <option name="0">--请选择--</option>
                                    <option name="1">全寄宿 Resident student</option>
                                    <option name="2">半住宿 周末不住校</option>
                                    <option name="3">走读 Day student</option>
                                    <option name="4">待定 undetermined</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="C-name">中文姓名 Name *</label>
                                <input type="text" class="form-control" id="C-name">
                            </div>
                            <div class="form-group">
                                <label for="E-name">English Name</label>
                                <input type="text" class="form-control" id="E-name">
                            </div>
                            <div class="form-group">
                                <label for="sex">性别 *</label>
                                <select class="form-control" name="sex" id="sex">
                                    <option name="0">男</option>
                                    <option name="1">女</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">出生日期 Birth Date * </label>
                                <input type="date" class="form-control" id="birthdate">
                            </div>
                            <div class="form-group">
                                <label for="place">出生地 Birth Place *</label>
                                <input type="text" class="form-control" id="place">
                            </div>
                            <div class="form-group">
                                <label for="nationality">国籍 Nationality *</label>
                                <input type="text" class="form-control" id="nationality">
                            </div>
                            <div class="form-group">
                                <label for="passport">身份证或护照号码 Passport ID *</label>
                                <input type="number" class="form-control" id="passport">
                            </div>
                            <div class="form-group">
                                <label for="file">上传照片 Upload Photo *</label>
                                <input id="file" type="file" class="form-control">
                                <p class="help-block">请选择小于20M文件进行上传</p>
                            </div>
                            <div class="">
                                <p style="border-bottom: 1px solid #333333"><span>受教育信息</span></p>
                                <p>Eduction Information</p>
                            </div>
                            <div class="form-group">
                                <label for="period">时间段 period</label>
                                <input type="text" class="form-control" id="period">
                            </div>
                            <div class="form-group">
                                <label for="Grade_Period">年级段 Grade Period</label>
                                <input type="text" class="form-control" id="Grade_Period">
                            </div>
                            <div class="form-group">
                                <label for="School_Name">学校名称 School Name</label>
                                <input type="text" class="form-control" id="School_Name">
                            </div>
                            <div class="form-group">
                                <label for="Language">学校用语 Main Teaching Language</label>
                                <input type="text" class="form-control" id="Language">
                            </div>
                            <div class="form-group">
                                <label for="Location">学校所在地 School Location</label>
                                <input type="text" class="form-control" id="Location">
                            </div>
                            <div class="">
                                <p style="border-bottom: 1px solid #333333"><span>家庭信息 Family Information of Student</span></p>
                                <p>法定监护人 Legal Guardians</p>
                            </div>
                            <div class="form-group">
                                <label for="legal_Name">监护人一 姓名 Name *</label>
                                <input type="text" class="form-control" id="legal_Name">
                            </div>
                            <div class="form-group">
                                <label for="Relationship">关系 Relationship *</label>
                                <input type="text" class="form-control" id="Relationship">
                            </div>
                            <div class="form-group">
                                <label for="MobNo">手机号码 Mob No. *</label>
                                <input type="number" class="form-control" id="MobNo">
                            </div>
                            <div class="form-group">
                                <label for="email">电子邮箱 Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="religion">宗教信仰 Religion *</label>
                                <input type="text" class="form-control" id="religion">
                            </div>
                            <div class="form-group">
                                <label for="Employer">工作单位 Employer *</label>
                                <input type="text" class="form-control" id="Employer">
                            </div>
                            <div class="form-group">
                                <label for="legal_Name2">监护人二 姓名 Name *</label>
                                <input type="text" class="form-control" id="legal_Name2">
                            </div>
                            <div class="form-group">
                                <label for="Relationship2">关系 Relationship *</label>
                                <input type="text" class="form-control" id="Relationship2">
                            </div>
                            <div class="form-group">
                                <label for="MobNo2">手机号码 Mob No. *</label>
                                <input type="number" class="form-control" id="MobNo2">
                            </div>
                            <div class="form-group">
                                <label for="email2">电子邮箱 Email *</label>
                                <input type="email" class="form-control" id="email2">
                            </div>
                            <div class="form-group">
                                <label for="Employer2">工作单位 Employer *</label>
                                <input type="text" class="form-control" id="Employer2">
                            </div>
                            <div class="form-group">
                                <label for="Address">家庭地址 Address *</label>
                                <input type="text" class="form-control" id="Address">
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px dashed #cccccc"><label>其它紧急联络人/电话 *</label></p>
                                <p>Extra Emergency Person & Number</p>
                                <input type="text" class="form-control">
                            </div>
                            <div class="">
                                <p style="border-bottom: 1px solid #333333"><span>医疗信息</span></p>
                                <p>Medical Information</p>
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px dashed #cccccc">过敏食品药物 *</p>
                                <p>Allergy Food & Medicine</p>
                                <select name="medicine" class="form-control">
                                    <option name="no">至今从未发现 Never Find</option>
                                    <option name="yes">是的 Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px dashed #cccccc">疾病史 Disease History</p>
                                <p>（如有疾病史，请在下框中输入详细说明）</p>
                                <textarea class="form-control" id="textarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px dashed #cccccc">监护人特别提醒 Special Notes from Guardian</p>
                                <p>（如有特别提醒，请在下框中输入详细说明）</p>
                                <textarea class="form-control" id="textarea2" rows="3"></textarea>
                            </div>
                            <div class="">
                                <p style="border-bottom: 1px solid #333333"><span>家长申明</span></p>
                                <p>
                                    作为孩子的合法监护人，我知道：在家书院并非国家正式注册成立的教育机构，是家长们为了给自己的孩子提供个性化的教育，更好地满足孩子成长的需求而形成的家长互助机构。在家书院无法提供学籍和中国国家承认的毕业证书；同时在家书院也非商业盈利性质的单位，所收学费用于房租、水电、教学设备、教学用具、老师等等各项支出。我在知情的情况下，志愿将孩子送到书院，特以此文本明确表示知情。*
                                </p>
                                <label style="line-height: 50px"><input type="radio">我完全同意以上申明</label>
                            </div>
                            <div class="form-group">
                                <label for="MobNo3">手机 *</label>
                                <input type="number" class="form-control" id="MobNo3">
                            </div>
                            <div class="text-center" style="margin-top: 10px">
                                <button type="submit" class="btn btn-info">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--预约参观-->
    <div class="container-fluid section-one" id="tab_Five">
        <div class="container">
            <div class="one-title">
                <h2>预约参观</h2>
            </div>
            <!--正文-->
            <div class="one-content" style="border: 1px solid #c5c5c5;padding: 15px;">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                        <span>AHA在家书院 【 入学预约参观申请 】</span><br>
                        <p>请至少提前1个工作日提交预约，如有任何疑问请致电020-87361432咨询。</p><br>
                    </div>
                    <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                        <form role="form">
                            <div class="form-group">
                                <label for="campusT">预约校区 *</label>
                                <select class="form-control" name="campus" id="campusT">
                                    <option name="0">--请选择--</option>
                                    <option name="1">广州校区</option>
                                    <option name="2">杭州校区</option>
                                    <option name="3">上海校区</option>
                                    <option name="4">重庆校区</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nameT">访客姓名 *</label>
                                <input type="text" class="form-control" id="nameT">
                            </div>
                            <div class="form-group">
                                <label for="sexT">性别 *</label>
                                <select class="form-control" name="sex" id="sexT">
                                    <option>先生</option>
                                    <option>女士</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dataT">孩子出生日期 *</label>
                                <input type="date" class="form-control" id="dataT">
                            </div>
                            <div class="form-group">
                                <label for="data2T">预约日期 *</label>
                                <input type="date" class="form-control" id="data2T">
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px dashed #cccccc"><label>预约时间 *</label></p>
                                <p>
                                    为了给您安排专门的老师服务，请您准时到达，谢谢！<br>
                                    我们的工作时间是周一至周五，周六日休息。<br>
                                    周一上午、周四和周五下午暂不接受预约。<br>
                                    注意：因广州校区调整，暂时只接受周一、周三下午2：30-3：30时间段的预约申请，敬请谅解。<br>
                                </p>
                                <select class="form-control">
                                    <option>--请选择--</option>
                                    <option>09:00-09:30</option>
                                    <option>09:30-10:00</option>
                                    <option>10:00-10:30</option>
                                    <option>10:30-11:00</option>
                                    <option>11:00-11:30</option>
                                    <option>11:30-12:00</option>
                                    <option>13:00-13:30</option>
                                    <option>13:30-14:00</option>
                                    <option>14:30-15:00 (仅限广州校区)</option>
                                    <option>15:00-15:30 (仅限广州校区)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p style="border-bottom: 1px solid #cccccc"><br></p>
                                <p>您是从哪里了解到在家书院的？ *</p>
                                <label><input type="radio" name="know">朋友介绍&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <label><input type="radio" name="know">网络搜索&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <label><input type="radio" name="know">讲座宣传&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <label><input type="radio" name="know">其他<input type="text"></label>
                            </div>
                            <div class="form-group">
                                <label for="weixinT">微信号</label>
                                <input type="text" class="form-control" id="weixinT">
                            </div>
                            <div class="form-group">
                                <label for="message">留言</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="emailT">E-mail *</label>
                                <input type="email" class="form-control" id="emailT">
                            </div>
                            <div class="form-group">
                                <label for="numberT">手机 *</label>
                                <input type="email" class="form-control" id="numberT">
                            </div>
                            <div class="text-center" style="margin-top: 10px">
                                <button type="submit" class="btn btn-info">提交</button>
                            </div>
                        </form>
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