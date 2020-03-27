-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 10 月 01 日 15:19
-- 服务器版本: 5.1.30
-- PHP 版本: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pbcls`
--

-- --------------------------------------------------------

--
-- 表的结构 `applycations`
--

CREATE TABLE IF NOT EXISTS `applycations` (
  `userid` int(11) NOT NULL,
  `instanceid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `isindicator` tinyint(1) NOT NULL,
  `isobserver` tinyint(1) NOT NULL,
  `applytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isaccepted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `applycations`
--


-- --------------------------------------------------------

--
-- 表的结构 `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `casename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `author` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creationtime` date DEFAULT NULL,
  `uploader` int(10) NOT NULL,
  `uploadtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL COMMENT 'OPEN or CLOSED',
  `instances` int(10) NOT NULL COMMENT 'The numbers of instance about the case',
  `maxinstances` int(10) NOT NULL,
  `activity` int(10) unsigned NOT NULL,
  `startedinstances` int(11) NOT NULL,
  `finishedinstances` int(10) unsigned NOT NULL COMMENT 'the number of finished instances',
  `casetype` tinyint(1) NOT NULL COMMENT 'value: 0、1。 0 means FOR TEACHING; 1 means FOR SELF-TRAINING。',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `cases`
--

INSERT INTO `cases` (`uid`, `casename`, `description`, `author`, `email`, `version`, `creationtime`, `uploader`, `uploadtime`, `status`, `instances`, `maxinstances`, `activity`, `startedinstances`, `finishedinstances`, `casetype`) VALUES
(1, 'Teaching Assistance ', '"Teaching Assistance System  for Software Engineering"  is special  for a \nteacher,  a  curriculum.  It  can  effectively  provide  many  cross-curriculum \nresources  sharing  and  controlling.  Its main  users  are  teachers who  instruct \nproject  management,  requirements  engineering  and  related  courses  and  \nstudents who select  the course, as well as  friends  that are  interested. As a \nresult,  the  single  management  for  users  is  easy.  Its  function  is  to  serve \nteachers and students convenience in education and learning process.  It also \nkeeps a record of the course  from the beginning, which may be not available \nfor all websites. ', 'PBCLS Group', 'pbcls@cs.zju.edu.cn', NULL, '2009-09-22', 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cotent` text COLLATE utf8_unicode_ci NOT NULL,
  `author` int(10) unsigned NOT NULL,
  `caseid` int(11) NOT NULL,
  `instanceid` int(11) NOT NULL,
  `posttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `comments`
--


-- --------------------------------------------------------

--
-- 表的结构 `dependencies`
--

CREATE TABLE IF NOT EXISTS `dependencies` (
  `caseid` int(11) NOT NULL,
  `predecessorid` int(11) NOT NULL,
  `successorid` int(11) NOT NULL,
  PRIMARY KEY (`caseid`,`predecessorid`,`successorid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `dependencies`
--


-- --------------------------------------------------------

--
-- 表的结构 `inputs`
--

CREATE TABLE IF NOT EXISTS `inputs` (
  `caseid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `input` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `inputs`
--


-- --------------------------------------------------------

--
-- 表的结构 `instances`
--

CREATE TABLE IF NOT EXISTS `instances` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caseid` int(10) unsigned NOT NULL,
  `instancename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creatorid` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `creationtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `finishtime` datetime NOT NULL,
  `progress` tinyint(4) DEFAULT NULL,
  `isfinished` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `instances`
--

INSERT INTO `instances` (`uid`, `caseid`, `instancename`, `creatorid`, `status`, `creationtime`, `finishtime`, `progress`, `isfinished`) VALUES
(1, 1, 'test instance1', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 1, 'test instance1', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `instance_role`
--

CREATE TABLE IF NOT EXISTS `instance_role` (
  `instanceid` int(10) unsigned NOT NULL,
  `roleid` int(10) unsigned NOT NULL,
  `actorid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'the uid of the actor, 0 means AI。',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' open | closed',
  PRIMARY KEY (`instanceid`,`roleid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `instance_role`
--


-- --------------------------------------------------------

--
-- 表的结构 `instance_task`
--

CREATE TABLE IF NOT EXISTS `instance_task` (
  `instanceid` int(10) unsigned NOT NULL,
  `taskid` int(10) unsigned NOT NULL,
  `starttime` datetime NOT NULL,
  `finishtime` datetime NOT NULL,
  `isready` tinyint(1) NOT NULL,
  `isstarted` tinyint(1) NOT NULL,
  `isfinished` tinyint(1) NOT NULL,
  `denies` int(11) NOT NULL,
  PRIMARY KEY (`instanceid`,`taskid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `instance_task`
--


-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `from` int(10) unsigned NOT NULL,
  `to` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `readed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `messages`
--


-- --------------------------------------------------------

--
-- 表的结构 `newsubmits`
--

CREATE TABLE IF NOT EXISTS `newsubmits` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `instanceid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ischecked` tinyint(1) NOT NULL,
  `isaccepted` tinyint(1) NOT NULL,
  `submittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acceptime` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `newsubmits`
--


-- --------------------------------------------------------

--
-- 表的结构 `outputs`
--

CREATE TABLE IF NOT EXISTS `outputs` (
  `caseid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `output` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `outputs`
--


-- --------------------------------------------------------

--
-- 表的结构 `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `caseid` int(11) NOT NULL,
  `childid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  PRIMARY KEY (`caseid`,`childid`,`parentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `relations`
--


-- --------------------------------------------------------

--
-- 表的结构 `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `caseid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `resourceid` int(11) NOT NULL,
  PRIMARY KEY (`caseid`,`taskid`,`resourceid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `resources`
--


-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `caseid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rolename` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `roles`
--

INSERT INTO `roles` (`caseid`, `roleid`, `role`, `rolename`) VALUES
(0, 0, 'PROJECT_MANAGER', 'PM'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 1'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 2'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 3'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 4'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 5'),
(0, 0, 'PROJECT_MANAGER', 'PM'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 1'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 2'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 3'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 4'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 5'),
(0, 0, 'PROJECT_MANAGER', 'PM'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 1'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 2'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 3'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 4'),
(0, 0, 'SOFTWARE_DEVELOPER', 'SD 5');

-- --------------------------------------------------------

--
-- 表的结构 `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `caseid` int(10) unsigned NOT NULL,
  `taskid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taskname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `isparent` tinyint(1) NOT NULL,
  `ismilestone` tinyint(1) NOT NULL,
  `iscritical` tinyint(1) NOT NULL,
  `duration` int(10) unsigned NOT NULL,
  `earlystart` int(10) NOT NULL,
  `earlyfinish` int(10) NOT NULL,
  `latestart` int(10) NOT NULL,
  `latefinish` int(10) NOT NULL,
  PRIMARY KEY (`caseid`,`taskid`),
  KEY `caseid` (`caseid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `tasks`
--

INSERT INTO `tasks` (`caseid`, `taskid`, `taskname`, `description`, `isparent`, `ismilestone`, `iscritical`, `duration`, `earlystart`, `earlyfinish`, `latestart`, `latefinish`) VALUES
(1, '1', 'Initializating', '', 1, 0, 0, 19, 0, 0, 0, 0),
(1, '2', 'Select project manager', '', 0, 0, 0, 0, 0, 0, 0, 0),
(1, '3', 'Form project team', '', 0, 0, 0, 0, 0, 0, 0, 0),
(1, '4', 'Analyse project feasibility', '', 0, 0, 0, 1, 0, 0, 0, 0),
(1, '5', 'Finish Feasibility Analysis Report', '', 0, 0, 0, 0, 0, 0, 0, 0),
(1, '6', 'Develop project charter', '', 0, 0, 0, 0, 0, 0, 0, 0),
(1, '7', 'Finish Project Charter', '', 0, 1, 0, 0, 0, 0, 0, 0),
(1, '8', 'Planning', '', 1, 0, 0, 25, 0, 0, 0, 0),
(1, '9', 'Develop scope statement', '', 0, 0, 0, 2, 0, 0, 0, 0),
(1, '10', 'Create WBS', '', 0, 0, 0, 2, 0, 0, 0, 0),
(1, '11', 'Initialize the requirement plan', '', 0, 0, 0, 3, 0, 0, 0, 0),
(1, '12', 'Refine requirement plan', '', 0, 0, 0, 10, 0, 0, 0, 0),
(1, '13', 'Evaluate the requirement plan', '', 0, 0, 0, 3, 0, 0, 0, 0),
(1, '14', 'Finish Requirement Engineering Plan', '', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `groupid` int(10) NOT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `registertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logins` int(10) unsigned NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `interests` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qq` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msn` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `homepage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unreadedmessages` int(10) unsigned NOT NULL,
  `finisheds` int(10) unsigned NOT NULL,
  `ongoings` int(10) unsigned NOT NULL,
  `experiencevalue` int(10) unsigned NOT NULL,
  `level` tinyint(4) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `groupid`, `sex`, `registertime`, `logins`, `lastlogintime`, `interests`, `signature`, `qq`, `msn`, `email`, `homepage`, `unreadedmessages`, `finisheds`, `ongoings`, `experiencevalue`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, 0, 0),
(2, 'xupengfey', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', NULL, 2, 0, 0, 0, 0),
(3, 'cendy', 'd964173dc44da83eeafa3aebbee9a1a0', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user_instance`
--

CREATE TABLE IF NOT EXISTS `user_instance` (
  `userid` int(11) NOT NULL,
  `instanceid` int(11) NOT NULL,
  `rolegroup` int(11) NOT NULL,
  `acceptime` datetime NOT NULL,
  `isvalid` tinyint(1) NOT NULL,
  PRIMARY KEY (`userid`,`instanceid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `user_instance`
--

