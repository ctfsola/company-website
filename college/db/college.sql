-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 13 日 18:59
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `college`
--

-- --------------------------------------------------------

--
-- 表的结构 `coll_admin`
--

CREATE TABLE IF NOT EXISTS `coll_admin` (
  `admin_id` tinyint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `admin_name` varchar(20) NOT NULL COMMENT '账号',
  `admin_pwd` varchar(30) NOT NULL COMMENT '密码',
  `power` tinyint(2) NOT NULL COMMENT '权限（1超级管理员2是普通管理员）',
  `register_time` int(11) unsigned DEFAULT '0' COMMENT '注册时间',
  `register_ip` varchar(50) DEFAULT '' COMMENT 'IP地址',
  `login_endtime` int(11) DEFAULT '0' COMMENT '最后添加时间',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `coll_admin`
--

INSERT INTO `coll_admin` (`admin_id`, `admin_name`, `admin_pwd`, `power`, `register_time`, `register_ip`, `login_endtime`) VALUES
(1, '小红', '', 0, 0, '', 0),
(2, '小明', 'e10adc3949ba59abbe56e057f20f88', 2, 0, '', 0),
(3, 'admin', 'e10adc3949ba59abbe56e057f20f88', 1, 1437467745, '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `coll_adv`
--

CREATE TABLE IF NOT EXISTS `coll_adv` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告图编号',
  `img_url` varchar(200) NOT NULL COMMENT '图片地址',
  `ad_name` varchar(50) NOT NULL DEFAULT '' COMMENT '图片名字',
  `ad_link` varchar(200) NOT NULL DEFAULT '' COMMENT '图片链接',
  `ad_desc` varchar(50) NOT NULL DEFAULT '' COMMENT '广告类型描述',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `orders` mediumint(6) unsigned DEFAULT '50' COMMENT '排序',
  `pid` mediumint(11) unsigned NOT NULL DEFAULT '1' COMMENT '广告位置id',
  `thumb_img_url` varchar(255) CHARACTER SET utf8mb4 NOT NULL COMMENT '广告缩略图URL',
  `thumb_link` varchar(255) NOT NULL COMMENT '广告缩略图链接',
  `start_time` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '广告开始时间',
  `end_time` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '广告结束时间',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `link_man` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人',
  `link_email` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人邮箱',
  `link_phone` varchar(60) NOT NULL DEFAULT '' COMMENT '添加人联系电话',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `coll_adv`
--

INSERT INTO `coll_adv` (`ad_id`, `img_url`, `ad_name`, `ad_link`, `ad_desc`, `is_show`, `orders`, `pid`, `thumb_img_url`, `thumb_link`, `start_time`, `end_time`, `click_count`, `link_man`, `link_email`, `link_phone`) VALUES
(2, '/Static/img/lunbo3.jpg', '首页banner轮播图2', '', 'index_banner', 1, 2, 1, '', '', 0, 0, 0, '', '', ''),
(3, '/Static/img/lunbo1.jpg', '首页banner轮播图3', '', 'index_banner', 1, 3, 1, '', '', 0, 0, 0, '', '', ''),
(4, '/Static/img/experience-champions-hero.jpg', '了解学院banner轮播图4', '', 'info_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(5, '/Static/img/banner-4.jpg', '走进学院banner轮播图5', '', 'detail_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(1, '/Static/img/lunbo4.jpg', '首页banner轮播图1', '', 'index_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(6, '/Static/img/banner-5.jpg', '入读学院banner轮播图6', '', 'admitted_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(7, '/Static/img/banner-2.jpg', '书院动态banner轮播图7', '', 'dynamic_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(8, '/Static/img/banner-3.jpg', '分享活动banner轮播图8', '', 'interaction_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(10, '/Static/img/banner-6.jpg', 'AHA旗下网站banner广告图', '', 'website_banner', 1, 1, 1, '', '', 0, 0, 0, '', '', ''),
(11, '', '打卡', '', '', 1, 10, 0, '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `coll_applicant`
--

CREATE TABLE IF NOT EXISTS `coll_applicant` (
  `apply_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '会员id',
  `name` varchar(50) NOT NULL COMMENT '用户名',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `position` varchar(50) NOT NULL DEFAULT '' COMMENT '应聘职位',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱',
  `resume_url` varchar(255) NOT NULL COMMENT '简历url',
  `message` text NOT NULL COMMENT '留言',
  `question_answer` varchar(255) DEFAULT NULL COMMENT '问题答案',
  `points` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员成长值或积分',
  `level` int(2) DEFAULT '1' COMMENT '会员等级',
  `qq` varchar(20) NOT NULL COMMENT 'QQ',
  `mobile` varchar(20) NOT NULL COMMENT '手机号码',
  `mobile_validated` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否验证手机',
  `oauth` varchar(10) DEFAULT '' COMMENT '第三方来源 wx weibo alipay',
  `openid` varchar(100) DEFAULT NULL COMMENT '第三方唯一标识',
  `nickname` varchar(50) DEFAULT NULL COMMENT '第三方返回昵称',
  `reg_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `reg_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '注册ip',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `coll_applicant`
--

INSERT INTO `coll_applicant` (`apply_id`, `name`, `sex`, `position`, `email`, `resume_url`, `message`, `question_answer`, `points`, `level`, `qq`, `mobile`, `mobile_validated`, `oauth`, `openid`, `nickname`, `reg_time`, `reg_ip`, `last_login_time`, `last_ip`) VALUES
(1, '小马', 0, '0', 'wwsk@www.com', '', '', NULL, 0, 1, '', '', 0, '', NULL, NULL, 0, '', 0, ''),
(2, '小明', 0, '0', 'mmm@ww.com', '', '', NULL, 0, 1, '', '', 0, '', NULL, NULL, 0, '', 0, ''),
(3, '小红', 0, '0', 'jdj@1224.com', '', '', NULL, 0, 1, '', '', 0, '', NULL, NULL, 0, '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `coll_article`
--

CREATE TABLE IF NOT EXISTS `coll_article` (
  `news_id` int(60) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '新闻标题',
  `thumb_url` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻缩略图',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻链接',
  `content` text NOT NULL COMMENT '新闻内容',
  `content_id` smallint(50) unsigned NOT NULL DEFAULT '30' COMMENT '内容ID（当content字段为空时）',
  `comment_id` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '评论ID',
  `add_time` int(15) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `start_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `add_man` varchar(50) NOT NULL DEFAULT '' COMMENT '添加人',
  `is_show` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`news_id`),
  KEY `content_id` (`content_id`),
  KEY `thumb_url` (`thumb_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- 表的结构 `coll_article_comment`
--

CREATE TABLE IF NOT EXISTS `coll_article_comment` (
  `comment_id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '电影文章评论表',
  `comment_content` text NOT NULL COMMENT '电影视频评论内容',
  `article_id` mediumint(20) unsigned NOT NULL DEFAULT '0' COMMENT '电影文章id',
  `users_id` mediumint(20) unsigned NOT NULL DEFAULT '0' COMMENT '会员id(0是游客1是会员）',
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='电影文章评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `coll_attention`
--

CREATE TABLE IF NOT EXISTS `coll_attention` (
  `attention_id` tinyint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '会员关注id',
  `usre1_id` tinyint(6) NOT NULL COMMENT '会员id',
  `user1_name` varchar(50) DEFAULT NULL COMMENT '关注的会员名',
  `user2_id` tinyint(6) DEFAULT NULL COMMENT '被关注会员id',
  `user2_name` varchar(255) DEFAULT NULL COMMENT '被关注的会员名',
  `status` tinyint(6) DEFAULT NULL COMMENT '关注状态（1未关注 2已关注）',
  PRIMARY KEY (`attention_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员关注表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `coll_config`
--

CREATE TABLE IF NOT EXISTS `coll_config` (
  `web_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `web_name` varchar(50) NOT NULL DEFAULT '' COMMENT '公司名称',
  `web_keywords` varchar(200) NOT NULL DEFAULT '' COMMENT '关键字',
  `web_description` text NOT NULL COMMENT '描述',
  `web_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '公司logo',
  `web_linkman` varchar(100) NOT NULL DEFAULT '' COMMENT '联系人',
  `web_mobile` varchar(100) NOT NULL DEFAULT '' COMMENT '移动电话',
  `web_phone` varchar(100) NOT NULL DEFAULT '' COMMENT '固定电话',
  `zip_code` mediumint(6) unsigned NOT NULL DEFAULT '0' COMMENT '邮编',
  `web_qq` varchar(100) NOT NULL DEFAULT '' COMMENT 'QQ号码',
  `web_fax` varchar(100) NOT NULL DEFAULT '' COMMENT '传真',
  `web_address` varchar(200) NOT NULL DEFAULT '' COMMENT '公司地址',
  `web_map` text NOT NULL COMMENT '公司地图',
  `web_content` text NOT NULL COMMENT '公司简介',
  `web_copyright` varchar(200) NOT NULL DEFAULT '' COMMENT '公司版权',
  `web_recordnum` char(30) NOT NULL DEFAULT '' COMMENT '公司备案号',
  `web_qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '公司二维码',
  `web_weixin` varchar(255) NOT NULL DEFAULT '' COMMENT '公司微信号',
  PRIMARY KEY (`web_id`),
  KEY `Zip code` (`zip_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站信息配置表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `coll_config`
--

INSERT INTO `coll_config` (`web_id`, `web_name`, `web_keywords`, `web_description`, `web_logo`, `web_linkman`, `web_mobile`, `web_phone`, `zip_code`, `web_qq`, `web_fax`, `web_address`, `web_map`, `web_content`, `web_copyright`, `web_recordnum`, `web_qrcode`, `web_weixin`) VALUES
(1, '在家书院', '在家书院,AHA,AT HOME ACADEMY,在家教育,athomeacademy', '在家书院 AHA AT HOME ACADEMY 在家教育', '/Static/img/logo_03.png', 'lin tearcher', '13560179945', '86-20-87361432 ', 510310, '0', '37579265', '广州市海珠区艺洲路61号琴海居3层', 'http://map.baidu.com/?poiShareId=ead29a39d64eb41cdaeced53&tn=B_NORMAL_MAP&hb=B_SATELLITE_STREET', '\n', 'Copyright 2016 All Rights Reserved.', '粤ICP备123456号', '', ''),
(2, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `coll_job_position`
--

CREATE TABLE IF NOT EXISTS `coll_job_position` (
  `job_id` int(15) unsigned NOT NULL AUTO_INCREMENT COMMENT '职位ID',
  `job_name` varchar(150) NOT NULL DEFAULT '' COMMENT '职位名',
  `require` text NOT NULL COMMENT '岗位要求',
  PRIMARY KEY (`job_id`),
  KEY `job_name` (`job_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `coll_job_position`
--

INSERT INTO `coll_job_position` (`job_id`, `job_name`, `require`) VALUES
(1, '法语老师（1名）', '岗位要求：<br>\n                                                            1、法语专业毕业，有留学经历或法语教学经验者优先；<br>\n                                                            2、有较强的表达能力和沟通能力，上课能旁征博引，工作认真负责，做事细心，性格开朗；<br>\n                                                            3、法语通过专八或者C1以上考试，并TCF等考试的内容者优先。<br>\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(2, '校车司机（2名）', '岗位要求：<br>\r\n                                                            1、持有A2驾照，熟悉广州交通道路；<br>\r\n                                                            2、至少有2年驾驶经验；（有校车经验者优先）；<br>\r\n                                                            3、有责任心，爱护学生/孩童；<br>\r\n                                                            4、做事认真踏实，热爱本职工作。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(3, '仓管人员（1名）', '岗位要求：<br>\r\n                                                            1、做事认真细心，负责仓库分类整理和日常工作安排；<br>\r\n                                                            2、制定仓库管理制度，协调人员严格执行制度；<br>\r\n                                                            3、收集或采购物资。<br>\r\n                                                            4、有仓管经验者优先。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(4, '语文老师（2名）', '岗位职责：<br>\r\n                                                            1、负责5年级至8年级AHA语文教学；<br>\r\n                                                            2、参与书院语文教材编辑工作；<br>\r\n                                                            3、组织活动，积极提高学校中文素养。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1、认同书院理念，不拘泥于公立学校的中文体系；<br>\r\n                                                            2、热爱文学，广泛阅读，乐于分享；<br>\r\n                                                            3、或文或史或哲专业，乐于思辨，对中文教学有自己的思考和看法优先；<br>\r\n                                                            4、具备基本英语听说能力，英语六级以上者优先；<br>\r\n                                                            5、具有硕士研究生及以上学历者优先<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(5, '体育老师(2名，可兼职）', '岗位职责：<br>\r\n                                                            1、负责K3-G4或者G5-12年级体育课；<br>\r\n                                                            2、参与制定书院体育规范及标准；<br>\r\n                                                            3、组织符合年龄段的各项体育活动，积极提高学校体能素质。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1、热爱运动；<br>\r\n                                                            2、熟悉体育规则，具有体育精神；<br>\r\n                                                            3、足球或篮球领域有专长的弟兄优先；<br>\r\n                                                            4、有基本的英语听说能力优先。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(6, '网络技术（3名）', '岗位职责：<br>\r\n                                                            1、 负责书院官方网站建设及后期维护；<br>\r\n                                                            2、 负责书院网络安全，备案信息等；<br>\r\n                                                            3、 优化网络系统，规划调整设备配置，管理书院路由器/防火墙的配置；<br>\r\n                                                            4、 完成领导交付的其它网站建设相关临时性工作。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1、 两年以上网站建设经验，有独立建站能力和经验者优先；<br>\r\n                                                            2、 熟悉网站建设全部流程，能独立完成网站制作的相关专业优秀应届毕业生亦可；<br>\r\n                                                            3、 具备良好的编码习惯及程序设计功底，相关Web开发经验，能够编写易于维护的代码；<br>\r\n                                                            4、 有良好的团队合作意识、创新意识、责任心、进取心与团队合作精神，能尽快适应工作环境。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(7, '财务管理（2名）', '岗位职责：<br>\r\n                                                            1、负责公司日常收支业务；<br>\r\n                                                            2、按公司要求定期提供相应的资金报表；<br>\r\n                                                            3、协助公司活动相关的会务工作；<br>\r\n                                                            4、到银行办理相关业务；<br>\r\n                                                            5、完成领导布置的其他工作。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1、 大专或以上学历，财务相关专业，有会计从业资格证书；<br>\r\n                                                            2、 一年或以上工作经验者优先，<br>\r\n                                                            3、 熟悉运用办公及财务软件。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(8, '人事管理（1名）', ' 岗位职责：<br>\r\n                                                            1、 负责校区人力资源的规划、招聘、以及入职手续等的办理；<br>\r\n                                                            2、 档案管理，劳动合同管理；<br>\r\n                                                            3、 考勤管理；<br>\r\n                                                            4、 员工技能和书院文化培训；<br>\r\n                                                            5、 不断优化书院人事管理制度及其他日常事务管理。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1、人力资源或工商行政管理或文秘相关专业，二本及以上学历优先；<br>\r\n                                                            2、 逻辑清晰，阳光外向，心细，善于观察和沟通；<br>\r\n                                                            3、英语口语表达流利者优先；<br>\r\n                                                            4、熟悉教育培训行业者或有人事管理经验者优先。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(9, '市场营销主管（1名）', '岗位职责：<br>\r\n                                                            1. 建立并带领团队，提高营销技能和素养；<br>\r\n                                                            2. 努力开拓新渠道新市场。<br>\r\n                                                            岗位要求：<br>\r\n                                                            1. 有较丰富的市场运营及管理经验；<br>\r\n                                                            2. 有敏锐的市场嗅觉；<br>\r\n                                                            3. 了解国内基督化学校和基督化教育者优先；<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。'),
(10, '美编（1名）', '熟悉Indesign排版软件，精通PS、CDR等常用设计软件。<br>\r\n                                                            <span>实习生：若干名</span><br>\r\n                                                            勤奋好学，头脑灵活。<br>\r\n                                                            &nbsp;&nbsp;&nbsp;&nbsp;*所有职位均要求为基督徒，品信兼优。薪资：面议。');

-- --------------------------------------------------------

--
-- 表的结构 `coll_media`
--

CREATE TABLE IF NOT EXISTS `coll_media` (
  `media_id` int(15) unsigned NOT NULL AUTO_INCREMENT COMMENT '报道ID',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '报道标题',
  `content` text NOT NULL COMMENT '报道内容',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '媒体报道链接',
  `add_time` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `orders` int(15) unsigned NOT NULL DEFAULT '30' COMMENT '排序',
  `comment_id` int(20) unsigned NOT NULL DEFAULT '0' COMMENT '评论ID',
  PRIMARY KEY (`media_id`),
  KEY `title` (`title`,`add_time`),
  KEY `orders` (`orders`),
  KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='媒体报道表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `coll_media`
--

INSERT INTO `coll_media` (`media_id`, `title`, `content`, `url`, `add_time`, `is_show`, `orders`, `comment_id`) VALUES
(1, '一家三兄妹都在家上学,北大妈妈当“老师”', '除语文外，几乎所有课程都用英文教材；类似的群体，在中国内地已近两万人。新学期伊始，当全国约1.9亿的中小学生被闹钟拽醒，睡眼惺忪地重返校园时，......<br>', '', 0, 1, 30, 0),
(2, '在家上学一样能申请美国名校', '在家上学一样能申请美国名校                                            再过两个月，18岁的 Michael即将踏上美国展开他的大学本科学习。他的录取通知，是今年4月从大洋彼岸的亚特兰大                                            传来的———Michael被全美综合排名前20、素有“南哈佛”美誉的埃默里大学录取了！......', '', 0, 1, 30, 0),
(3, '女子创办书院推“在家教育” 强调文化底蕴培养', '“只有这一条没走过的路，那就试试看吧！” 2001年，陈女士作出了大胆之举———自己在家教8岁、6岁、4岁的三个孩子。既不满国内公办学校，对国际学校 也感到失望，她由此走上了一条中国家长看来并不太常见的“在家教育”之路。......', '', 0, 1, 30, 0),
(4, '女子创办书院推“在家教育” 强调文化底蕴培养', '“只有这一条没走过的路，那就试试看吧！” 2001年，陈女士作出了大胆之举———自己在家教8岁、6岁、4岁的三个孩子。既不满国内公办学校，对国际学校 也感到失望，她由此走上了一条中国家长看来并不太常见的“在家教育”之路。......', '', 0, 1, 30, 0);

-- --------------------------------------------------------

--
-- 表的结构 `coll_media_comment`
--

CREATE TABLE IF NOT EXISTS `coll_media_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '视频评论id',
  `comment_content` text NOT NULL COMMENT '视频评论内容',
  `media_id` int(15) unsigned NOT NULL COMMENT '媒体id',
  `users_id` int(10) unsigned NOT NULL COMMENT '会员id',
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `coll_member_works`
--

CREATE TABLE IF NOT EXISTS `coll_member_works` (
  `works_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '会员作品id',
  `picture` text NOT NULL COMMENT '图片',
  `title` varchar(70) NOT NULL DEFAULT '' COMMENT '标题',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `add_time` mediumint(15) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `work_vote` smallint(100) NOT NULL DEFAULT '0' COMMENT '票数',
  `users_id` int(20) unsigned NOT NULL DEFAULT '0' COMMENT '会员id（外键）',
  PRIMARY KEY (`works_id`),
  UNIQUE KEY `mw_id` (`works_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员作品表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `coll_member_works`
--

INSERT INTO `coll_member_works` (`works_id`, `picture`, `title`, `description`, `add_time`, `work_vote`, `users_id`) VALUES
(1, 'images/pro35.png', '就算世界把你抛弃，也...', '', 16777215, 23, 0),
(2, '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `coll_menu`
--

CREATE TABLE IF NOT EXISTS `coll_menu` (
  `nav_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `nav_name` varchar(50) NOT NULL DEFAULT '' COMMENT '导航名称',
  `nav_url` varchar(200) NOT NULL DEFAULT '' COMMENT '导航地址',
  `controller_name` varchar(30) NOT NULL DEFAULT '' COMMENT '页面控制器名',
  `parent_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '父级导航ID',
  `is_index` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否是首页导航',
  `is_show` tinyint(2) NOT NULL DEFAULT '1' COMMENT '是否显示',
  `orders` tinyint(4) NOT NULL DEFAULT '10' COMMENT '排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='菜单导航表' AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `coll_menu`
--

INSERT INTO `coll_menu` (`nav_id`, `nav_name`, `nav_url`, `controller_name`, `parent_id`, `is_index`, `is_show`, `orders`) VALUES
(1, '了解书院', '/index.php/Home/Info/index', 'Info', 0, 0, 1, 1),
(2, '走进书院', '/index.php/Home/Detail/index', 'detail', 0, 0, 1, 2),
(3, '入读书院', '/index.php/Home/Admitted/index', 'admitted', 0, 0, 1, 3),
(4, '书院动态', '/index.php/Home/Dynamic/index', 'dynamic', 0, 0, 1, 4),
(5, '分享互动', '/index.php/Home/Interaction/index', 'interaction', 0, 0, 1, 5),
(6, 'AHA旗下网站', '/index.php/Home/Website/index', 'website', 0, 0, 1, 6),
(7, '梦想&使命', '/index.php/Home/Info/singlePage', 'Info', 1, 0, 1, 1),
(8, '书院历程', '0', 'info', 1, 1, 1, 2),
(9, '书院校训', '', 'info', 1, 0, 1, 3),
(10, '加入我们', '', 'info', 1, 0, 1, 4),
(11, '日常教学', '', 'detail', 2, 0, 1, 1),
(12, '课外活动', '', 'detail', 2, 0, 1, 2),
(13, '书院规则', '', 'detail', 2, 0, 1, 3),
(14, '学业展示', '', 'detail', 2, 0, 1, 4),
(15, 'AHA毕业生', '', 'detail', 2, 0, 1, 5),
(16, '日程安排xx', '', 'detail', 2, 0, 1, 6),
(17, '录取原则', '', 'admitted', 3, 0, 1, 1),
(18, '录取程序', '', 'admitted', 3, 0, 1, 2),
(19, '奖助学金', '', 'admitted', 3, 0, 1, 3),
(20, '在线报名', '', 'admitted', 3, 0, 1, 4),
(21, '联络书院', '', 'admitted', 3, 0, 1, 5),
(22, '书院新闻', '', 'dynamic', 4, 0, 1, 1),
(23, '书院通告', '', 'dynamic', 4, 0, 1, 2),
(24, '书院相册', '', 'dynamic', 4, 0, 1, 3),
(25, '活动视频', '', 'dynamic', 4, 0, 1, 4),
(26, '家长视角', '', 'dynamic', 4, 0, 1, 5),
(27, '假期营会', '', 'dynamic', 4, 0, 1, 6),
(28, '教师培训', '', 'dynamic', 4, 0, 1, 7),
(29, '学生作品', '', 'interaction', 5, 0, 1, 1),
(30, '教育随想', '', 'interaction', 5, 0, 1, 2),
(31, '教育资讯', '', 'interaction', 5, 0, 1, 3),
(32, '常用下载', '', 'interaction', 5, 0, 1, 4),
(33, 'Emial订阅', '', 'interaction', 5, 0, 1, 5),
(34, '旗下网站介绍', '', 'website', 6, 0, 1, 1),
(35, '学校管理系统', 'https://octomaster.com/auth/login', 'website', 6, 0, 1, 2),
(36, 'BJU出版社中国官网', 'http://www.bjupress.cn/', 'website', 6, 0, 1, 3),
(37, '远程网络学习体系', 'http://www.chuanke.com/s1316621.html', 'website', 6, 0, 1, 4),
(38, '考试评测体系', '', 'website', 6, 0, 1, 5),
(39, 'BJU大学招生', '', 'website', 6, 0, 1, 6),
(40, '媒体报道', '', 'Info', 1, 0, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `coll_news`
--

CREATE TABLE IF NOT EXISTS `coll_news` (
  `news_id` int(60) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '新闻标题',
  `thumb_url` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻缩略图',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻链接',
  `content` text NOT NULL COMMENT '新闻内容',
  `comment_id` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '评论ID',
  `add_time` int(15) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `start_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `add_man` varchar(50) NOT NULL DEFAULT '' COMMENT '添加人',
  `is_show` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`news_id`),
  KEY `thumb_url` (`thumb_url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `coll_news`
--

INSERT INTO `coll_news` (`news_id`, `title`, `thumb_url`, `link`, `content`, `comment_id`, `add_time`, `start_time`, `end_time`, `add_man`, `is_show`) VALUES
(1, '欢迎加入AHA-BJA国际高中部', '/Static/img/BJA2-2-128x96.jpg', '', '在这里，我们将提供中英双母语的教学环境：孩子们将同BJA的优秀学生一同上课，利用BJU的资源展开适合自己的AP学习计划，课后将享受量身定做的英文补习计划，以及，特设的中文辅导课程。在这里，孩子们将有专门的老师辅导日常的学习和生活，将享受当地社区所提供的家庭般的关怀。可以说，我们，将为国际高中部的孩子们提供一个在外的家，一个可以随时回去的地方。', 0, 1465516800, 0, 0, '', 1),
(2, '2016年AHA家庭音乐节', '/Static/img/603570180-128x96.jpg', '', '本届AHA的家庭音乐节将于本周四（3月24日）下午2：45分正式拉开序幕。我们诚邀各位家长前来参加我们的音乐节，一起欣赏孩子们和部分老师的精彩演出。有意前来的家长，请于3月24日上午10点前同各班班主任预约，我们将为您预留好坐席。<br>\r\n                                    AHA期待您的到来！让我们一同见证孩子们的成长！', 0, 1458691200, 0, 0, '', 1),
(3, '在家书院9岁啦', '/Static/img/20160205lkh194540.jpg', '', '18日下午三时许，窗外烟雨蒙蒙略透一丝寒意，伴随下课铃响，在家书院孩子们欢聚一堂，纷纷拿出精心准备的材料，以班级为单位开始蛋糕DIY。今天是什么日子呢？原来我们AHA今天9岁了。<br>', 0, 1458259200, 0, 0, '', 1),
(4, '我们的节日——端午节', '/Static/img/19-128x96.jpg', '', '农历五月初五，是中国的传统节日——端午。对于双语并重的AHA而言，不仅要庆祝西方的感恩节、圣诞节，中国意蕴浓厚的端午节自然也要隆重纪念一番了。', 0, 1435017600, 0, 0, '', 1),
(5, '2015年6月15-19日IOWA TEST', '/Static/img/211.jpg', '', 'IOWA是一系列由美国爱荷华州立大学教育学院所编撰的标准测试，主要测试从幼稚园大班到12年级学生在各领域的学习情况，包括单词、词汇分析、阅读理解能力、听力、英文（语言能力）、数学、社会学和自然科学。\r\n                                    <br>', 0, 1435017600, 0, 0, '', 1),
(6, '喜爱BJU鲍琼斯大学的八条理由', '/Static/img/bju-logo-128x96.png', '', '今天中国的父母对于子女的教育常常很纠结，留学还是不留学？去哪个国家留学？学费会不会成为家庭的经济负担？孩子独自在外学习生活，会不会学坏？将来学成归来会不会成为“海待”？\r\n                                    <br>', 0, 1435017600, 0, 0, '', 1),
(7, '第二届AHA家庭音乐会重磅回归', '/Static/img/528758095-128x96.jpg', '', '君忆否，自去年AHA拉开了家庭音乐会的序幕，这便成为书院的众多传统之一而延续了下来。今年，AHA家庭音乐会在我们的期待之下，终于归来了！\r\n                                    <br>\r\n                                    4月16日的下午4点15分开始，一场音乐的盛宴在书院三楼揭开帷幕。同第一届音乐会不同的是，本届音乐会邀请了大约50名家长前来。台上的孩子们全情投入，台下的家长们也乐在其中。', 0, 1429488000, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `coll_notice`
--

CREATE TABLE IF NOT EXISTS `coll_notice` (
  `notice_id` int(60) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '公告链接',
  `thumb_url` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图URL',
  `type_id` mediumint(50) unsigned NOT NULL DEFAULT '30' COMMENT '文章类型ID（当content字段为空时）',
  `comment_id` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '评论ID',
  `add_time` int(15) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `start_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(15) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `add_man` varchar(50) NOT NULL DEFAULT '' COMMENT '添加人',
  `is_show` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`notice_id`),
  KEY `content_id` (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `coll_notice`
--

INSERT INTO `coll_notice` (`notice_id`, `title`, `content`, `link`, `thumb_url`, `type_id`, `comment_id`, `add_time`, `start_time`, `end_time`, `add_man`, `is_show`) VALUES
(1, '欢迎加入AHA-BJA国际高中部', '在这里，我们将提供中英双母语的教学环境：孩子们将同BJA的优秀学生一同上课，利用BJU的资源展开适合自己的AP学习计划，课后将享受量身定做的英文补习计划，以及，特设的中文辅导课程。在这里，孩子们将有专门的老师辅导日常的学习和生活，将享受当地社区所提供的家庭般的关怀。可以说，我们，将为国际高中部的孩子们提供一个在外的家，一个可以随时回去的地方。', '', '/Static/img/BJA2-2-128x96.jpg', 2, 0, 1465516800, 0, 0, '', 1),
(2, '2016年5月露营周', 'AHA， 或者说“啊哈”(听到大家都这样称呼你，不知道我是否可以把这个作为你的诸多昵称之一)，近来听说你去了巽寮湾露营。故地重游，是否多了些不一样的小故事呢？', '', '/Static/img/p10.jpg', 2, 0, 1465257600, 0, 0, '', 1),
(3, '在家书院英文“冬季学校”（2016年1月18-29日）', '强劲的英文环境 两周的学习中，孩子们每天都将浸泡在英文环境中练习听力和对话。外教和中国老师一起配搭，帮助孩子更快成长。', '', '', 2, 0, 1451865600, 0, 0, '', 1),
(4, '美国大学探秘之旅', '还在学业路上奋斗的你，是否也会偶尔放下手中疾飞的笔，任思绪飞扬，憧憬那看似遥不可及却又近在咫尺的大学校园？听了那么多的大学宣讲课程，你是否想去大洋彼岸亲自揭开她的神秘面纱，一睹芳容，亲见她的丰富多彩？面对扑面而来的大学简介时，你是否会感到迷茫和不知所措？ ', '', '', 2, 0, 1451865600, 0, 0, '', 1),
(5, 'AHA-BJU体系2015年度第五期教师培训开始报名啦', '亲爱的弟兄姊妹，你是否疑惑过现行的教育体制？你是否想成为一个不同的教育者？你是否想同同侪们分享你独特的教育思考？你是否想带领孩子们一起成长？如果你都曾有过这些想法，如果你现在仍在思考这些问题，欢迎你加入我们。', '', '', 2, 0, 1438387200, 0, 0, '', 1),
(6, '2015年夏AHA在家教育家长培训课程', '您是不是打算在家教育孩子，却没有任何头绪和方向，或是苦于找不到好的教材，或是看不见前面的方向，或是找不到志同道合的伙伴，或是有太多的或是……', '', '', 2, 0, 1437350400, 0, 0, '', 1),
(7, '在家书院2015毕业晚会', '学校的持续发展以及学生的健康成长，都离不开专业化的学校管理。 中国缺乏专业校长人才，这次培训班为校长们提供一次非常难得的系统培训， 手把手教您怎样做校长，帮助您建立合乎国际学校标准的学校管理体系。 欢迎现任的学校管理者，以及有意成为校长的教育人士报名参加。', '', '/Static/img/p1.jpg', 2, 0, 1435104000, 0, 0, '', 1),
(8, '欢迎参加在家书院AHA英文夏令营，时间2015年7月13日-8月14日', '全日制国际学校“在家书院”今年暑假照例开办“夏季学校”，让您的孩子体会不一样的英文学习。', '', '', 2, 0, 1435017600, 0, 0, '', 1),
(9, 'AHA讲座通知——留学美国实用常识，大学留学的选择', '本周六3月28日上午10：30分，在家书院邀请美国纽约蓝天教育服务负责人、纽约乃亚克大学招生代表韩梅女士来校，就如何出国留学等问题进行讨论交流。', '', '', 2, 0, 1427241600, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `coll_picture`
--

CREATE TABLE IF NOT EXISTS `coll_picture` (
  `pic_id` int(80) unsigned NOT NULL AUTO_INCREMENT COMMENT '相册ID',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '相册标题',
  `pic_url` varchar(255) NOT NULL DEFAULT '' COMMENT '相册URL',
  `pic_link` varchar(255) NOT NULL DEFAULT '' COMMENT '相册链接',
  `add_time` mediumint(15) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `add_man` varchar(30) NOT NULL DEFAULT '' COMMENT '添加人',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`pic_id`),
  KEY `title` (`title`),
  KEY `pic_link` (`pic_link`),
  KEY `pic_url` (`pic_url`),
  KEY `title_2` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='相册表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `coll_picture`
--

INSERT INTO `coll_picture` (`pic_id`, `title`, `pic_url`, `pic_link`, `add_time`, `add_man`, `is_show`) VALUES
(1, '在家书院2016毕业晚会', '/Static/img/p1.jpg', '', 0, '', 1),
(2, '在家书院9岁啦', '/Static/img/20160205lkh194540.jpg', '', 0, '', 1),
(3, 'AHA STORIES—露营篇10（完结篇）', '/Static/img/p3.jpg', '', 0, '', 1),
(4, '家校联盟的呼声', '/Static/img/p4.jpg', '', 0, '', 1),
(5, 'AHA STORIES—露营篇1', '/Static/img/p5.jpg', '', 0, '', 1),
(6, '2014AHA10月露营周', '/Static/img/p6.jpg', '', 0, '', 1),
(7, 'AHA2014-2015学年开学日', '/Static/img/p7.jpg', '', 0, '', 1),
(8, '在家书院2014毕业晚会', '/Static/img/p8.jpg', '', 0, '', 1),
(9, 'AHA2014-2015学年开学日', '/Static/img/p7.jpg', '', 0, '', 1),
(10, '在家书院2014毕业晚会', '/Static/img/p8.jpg', '', 0, '', 1),
(11, '2014 AHA-The Wilds营会', '/Static/img/p9.jpg', '', 0, '', 1),
(12, '在家书院2014年5月海边露营', '/Static/img/p9.jpg', '', 0, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `coll_question`
--

CREATE TABLE IF NOT EXISTS `coll_question` (
  `question_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '问题id',
  `question_title` varchar(100) DEFAULT NULL COMMENT '题目',
  `member_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`question_id`),
  UNIQUE KEY `pro_id` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='问题表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `coll_video`
--

CREATE TABLE IF NOT EXISTS `coll_video` (
  `video_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '视频id',
  `video_name` varchar(50) NOT NULL COMMENT '视频名称',
  `video_description` varchar(100) NOT NULL COMMENT '视频描述',
  `video_link` varchar(100) NOT NULL COMMENT '视频链接',
  `play_count` mediumint(8) unsigned NOT NULL COMMENT '播放次数',
  `comment` mediumint(8) unsigned NOT NULL COMMENT '评论条数',
  `video_picture` varchar(255) NOT NULL COMMENT '视频图片',
  PRIMARY KEY (`video_id`),
  UNIQUE KEY `video_id` (`video_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='视频表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `coll_video`
--

INSERT INTO `coll_video` (`video_id`, `video_name`, `video_description`, `video_link`, `play_count`, `comment`, `video_picture`) VALUES
(1, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/11.png'),
(2, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/12.png'),
(3, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/13.png'),
(4, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/14.png'),
(5, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/15.png'),
(6, '《巫师3：狂猎》CG预告震撼发布！血染白狼解救少女', '', '', 0, 0, 'images/16.png');

-- --------------------------------------------------------

--
-- 表的结构 `coll_video_comment`
--

CREATE TABLE IF NOT EXISTS `coll_video_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '视频评论id',
  `comment_content` text NOT NULL COMMENT '视频评论内容',
  `video_id` int(10) unsigned NOT NULL COMMENT '视频id',
  `users_id` int(10) unsigned NOT NULL COMMENT '会员id',
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频评论表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
