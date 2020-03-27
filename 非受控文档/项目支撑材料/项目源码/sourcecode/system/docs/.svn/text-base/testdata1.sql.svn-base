-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 10 月 21 日 08:50
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
-- 表的结构 `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `userid` int(11) NOT NULL,
  `instanceid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `isindicator` tinyint(1) NOT NULL,
  `isobserver` tinyint(1) NOT NULL,
  `applytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ischecked` tinyint(1) NOT NULL,
  `isaccepted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `applications`
--

INSERT INTO `applications` (`userid`, `instanceid`, `roleid`, `isindicator`, `isobserver`, `applytime`, `ischecked`, `isaccepted`) VALUES
(3, 1, 1, 0, 0, '2009-10-21 16:46:36', 1, 1),
(4, 1, 2, 0, 0, '2009-10-21 16:46:37', 1, 1),
(5, 1, 3, 0, 0, '2009-10-21 16:46:36', 0, 0),
(2, 1, 0, 1, 0, '2009-10-21 16:46:37', 1, 1),
(6, 1, 0, 0, 1, '2009-10-21 16:46:36', 0, 0),
(3, 1, 0, 1, 0, '2009-10-21 16:46:36', 1, 1),
(3, 1, 0, 0, 1, '2009-10-21 16:46:36', 1, 1),
(3, 2, 2, 0, 0, '2009-10-21 16:46:37', 0, 0),
(3, 3, 0, 0, 1, '2009-10-21 16:46:37', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bbs_replys`
--

CREATE TABLE IF NOT EXISTS `bbs_replys` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `subjectid` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `authorid` int(11) NOT NULL,
  `submittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=201 ;

--
-- 导出表中的数据 `bbs_replys`
--

INSERT INTO `bbs_replys` (`uid`, `subjectid`, `content`, `authorid`, `submittime`) VALUES
(1, 1, 'XXX', 2, '2009-10-21 16:46:38'),
(2, 1, 'XXX', 3, '2009-10-21 16:46:38'),
(3, 1, 'XXX', 4, '2009-10-21 16:46:38'),
(4, 1, 'XXX', 5, '2009-10-21 16:46:38'),
(5, 1, 'XXX', 6, '2009-10-21 16:46:38'),
(6, 1, 'XXX', 1, '2009-10-21 16:46:38'),
(7, 1, 'XXX', 2, '2009-10-21 16:46:38'),
(8, 1, 'XXX', 3, '2009-10-21 16:46:38'),
(9, 1, 'XXX', 4, '2009-10-21 16:46:38'),
(10, 1, 'XXX', 5, '2009-10-21 16:46:38'),
(11, 2, 'XXX', 2, '2009-10-21 16:46:38'),
(12, 2, 'XXX', 3, '2009-10-21 16:46:38'),
(13, 2, 'XXX', 4, '2009-10-21 16:46:38'),
(14, 2, 'XXX', 5, '2009-10-21 16:46:38'),
(15, 2, 'XXX', 6, '2009-10-21 16:46:38'),
(16, 2, 'XXX', 1, '2009-10-21 16:46:38'),
(17, 2, 'XXX', 2, '2009-10-21 16:46:38'),
(18, 2, 'XXX', 3, '2009-10-21 16:46:38'),
(19, 2, 'XXX', 4, '2009-10-21 16:46:38'),
(20, 2, 'XXX', 5, '2009-10-21 16:46:38'),
(21, 3, 'XXX', 2, '2009-10-21 16:46:38'),
(22, 3, 'XXX', 3, '2009-10-21 16:46:38'),
(23, 3, 'XXX', 4, '2009-10-21 16:46:38'),
(24, 3, 'XXX', 5, '2009-10-21 16:46:38'),
(25, 3, 'XXX', 6, '2009-10-21 16:46:38'),
(26, 3, 'XXX', 1, '2009-10-21 16:46:38'),
(27, 3, 'XXX', 2, '2009-10-21 16:46:38'),
(28, 3, 'XXX', 3, '2009-10-21 16:46:38'),
(29, 3, 'XXX', 4, '2009-10-21 16:46:38'),
(30, 3, 'XXX', 5, '2009-10-21 16:46:38'),
(31, 4, 'XXX', 2, '2009-10-21 16:46:38'),
(32, 4, 'XXX', 3, '2009-10-21 16:46:38'),
(33, 4, 'XXX', 4, '2009-10-21 16:46:38'),
(34, 4, 'XXX', 5, '2009-10-21 16:46:38'),
(35, 4, 'XXX', 6, '2009-10-21 16:46:38'),
(36, 4, 'XXX', 1, '2009-10-21 16:46:38'),
(37, 4, 'XXX', 2, '2009-10-21 16:46:38'),
(38, 4, 'XXX', 3, '2009-10-21 16:46:38'),
(39, 4, 'XXX', 4, '2009-10-21 16:46:38'),
(40, 4, 'XXX', 5, '2009-10-21 16:46:38'),
(41, 5, 'XXX', 2, '2009-10-21 16:46:38'),
(42, 5, 'XXX', 3, '2009-10-21 16:46:38'),
(43, 5, 'XXX', 4, '2009-10-21 16:46:38'),
(44, 5, 'XXX', 5, '2009-10-21 16:46:38'),
(45, 5, 'XXX', 6, '2009-10-21 16:46:38'),
(46, 5, 'XXX', 1, '2009-10-21 16:46:38'),
(47, 5, 'XXX', 2, '2009-10-21 16:46:38'),
(48, 5, 'XXX', 3, '2009-10-21 16:46:39'),
(49, 5, 'XXX', 4, '2009-10-21 16:46:39'),
(50, 5, 'XXX', 5, '2009-10-21 16:46:39'),
(51, 6, 'XXX', 2, '2009-10-21 16:46:39'),
(52, 6, 'XXX', 3, '2009-10-21 16:46:39'),
(53, 6, 'XXX', 4, '2009-10-21 16:46:39'),
(54, 6, 'XXX', 5, '2009-10-21 16:46:39'),
(55, 6, 'XXX', 6, '2009-10-21 16:46:39'),
(56, 6, 'XXX', 1, '2009-10-21 16:46:39'),
(57, 6, 'XXX', 2, '2009-10-21 16:46:39'),
(58, 6, 'XXX', 3, '2009-10-21 16:46:39'),
(59, 6, 'XXX', 4, '2009-10-21 16:46:39'),
(60, 6, 'XXX', 5, '2009-10-21 16:46:39'),
(61, 7, 'XXX', 2, '2009-10-21 16:46:39'),
(62, 7, 'XXX', 3, '2009-10-21 16:46:39'),
(63, 7, 'XXX', 4, '2009-10-21 16:46:39'),
(64, 7, 'XXX', 5, '2009-10-21 16:46:39'),
(65, 7, 'XXX', 6, '2009-10-21 16:46:39'),
(66, 7, 'XXX', 1, '2009-10-21 16:46:39'),
(67, 7, 'XXX', 2, '2009-10-21 16:46:39'),
(68, 7, 'XXX', 3, '2009-10-21 16:46:39'),
(69, 7, 'XXX', 4, '2009-10-21 16:46:39'),
(70, 7, 'XXX', 5, '2009-10-21 16:46:39'),
(71, 8, 'XXX', 2, '2009-10-21 16:46:39'),
(72, 8, 'XXX', 3, '2009-10-21 16:46:39'),
(73, 8, 'XXX', 4, '2009-10-21 16:46:39'),
(74, 8, 'XXX', 5, '2009-10-21 16:46:39'),
(75, 8, 'XXX', 6, '2009-10-21 16:46:39'),
(76, 8, 'XXX', 1, '2009-10-21 16:46:39'),
(77, 8, 'XXX', 2, '2009-10-21 16:46:39'),
(78, 8, 'XXX', 3, '2009-10-21 16:46:39'),
(79, 8, 'XXX', 4, '2009-10-21 16:46:39'),
(80, 8, 'XXX', 5, '2009-10-21 16:46:39'),
(81, 9, 'XXX', 2, '2009-10-21 16:46:39'),
(82, 9, 'XXX', 3, '2009-10-21 16:46:39'),
(83, 9, 'XXX', 4, '2009-10-21 16:46:39'),
(84, 9, 'XXX', 5, '2009-10-21 16:46:39'),
(85, 9, 'XXX', 6, '2009-10-21 16:46:39'),
(86, 9, 'XXX', 1, '2009-10-21 16:46:39'),
(87, 9, 'XXX', 2, '2009-10-21 16:46:39'),
(88, 9, 'XXX', 3, '2009-10-21 16:46:39'),
(89, 9, 'XXX', 4, '2009-10-21 16:46:39'),
(90, 9, 'XXX', 5, '2009-10-21 16:46:39'),
(91, 10, 'XXX', 2, '2009-10-21 16:46:39'),
(92, 10, 'XXX', 3, '2009-10-21 16:46:39'),
(93, 10, 'XXX', 4, '2009-10-21 16:46:39'),
(94, 10, 'XXX', 5, '2009-10-21 16:46:39'),
(95, 10, 'XXX', 6, '2009-10-21 16:46:39'),
(96, 10, 'XXX', 1, '2009-10-21 16:46:39'),
(97, 10, 'XXX', 2, '2009-10-21 16:46:39'),
(98, 10, 'XXX', 3, '2009-10-21 16:46:39'),
(99, 10, 'XXX', 4, '2009-10-21 16:46:40'),
(100, 10, 'XXX', 5, '2009-10-21 16:46:40'),
(101, 11, 'XXX', 2, '2009-10-21 16:46:40'),
(102, 11, 'XXX', 3, '2009-10-21 16:46:40'),
(103, 11, 'XXX', 4, '2009-10-21 16:46:40'),
(104, 11, 'XXX', 5, '2009-10-21 16:46:40'),
(105, 11, 'XXX', 6, '2009-10-21 16:46:40'),
(106, 11, 'XXX', 1, '2009-10-21 16:46:40'),
(107, 11, 'XXX', 2, '2009-10-21 16:46:40'),
(108, 11, 'XXX', 3, '2009-10-21 16:46:40'),
(109, 11, 'XXX', 4, '2009-10-21 16:46:40'),
(110, 11, 'XXX', 5, '2009-10-21 16:46:40'),
(111, 12, 'XXX', 2, '2009-10-21 16:46:40'),
(112, 12, 'XXX', 3, '2009-10-21 16:46:40'),
(113, 12, 'XXX', 4, '2009-10-21 16:46:40'),
(114, 12, 'XXX', 5, '2009-10-21 16:46:40'),
(115, 12, 'XXX', 6, '2009-10-21 16:46:40'),
(116, 12, 'XXX', 1, '2009-10-21 16:46:40'),
(117, 12, 'XXX', 2, '2009-10-21 16:46:40'),
(118, 12, 'XXX', 3, '2009-10-21 16:46:40'),
(119, 12, 'XXX', 4, '2009-10-21 16:46:40'),
(120, 12, 'XXX', 5, '2009-10-21 16:46:40'),
(121, 13, 'XXX', 2, '2009-10-21 16:46:40'),
(122, 13, 'XXX', 3, '2009-10-21 16:46:40'),
(123, 13, 'XXX', 4, '2009-10-21 16:46:40'),
(124, 13, 'XXX', 5, '2009-10-21 16:46:40'),
(125, 13, 'XXX', 6, '2009-10-21 16:46:40'),
(126, 13, 'XXX', 1, '2009-10-21 16:46:40'),
(127, 13, 'XXX', 2, '2009-10-21 16:46:40'),
(128, 13, 'XXX', 3, '2009-10-21 16:46:40'),
(129, 13, 'XXX', 4, '2009-10-21 16:46:40'),
(130, 13, 'XXX', 5, '2009-10-21 16:46:40'),
(131, 14, 'XXX', 2, '2009-10-21 16:46:40'),
(132, 14, 'XXX', 3, '2009-10-21 16:46:40'),
(133, 14, 'XXX', 4, '2009-10-21 16:46:40'),
(134, 14, 'XXX', 5, '2009-10-21 16:46:40'),
(135, 14, 'XXX', 6, '2009-10-21 16:46:40'),
(136, 14, 'XXX', 1, '2009-10-21 16:46:40'),
(137, 14, 'XXX', 2, '2009-10-21 16:46:40'),
(138, 14, 'XXX', 3, '2009-10-21 16:46:40'),
(139, 14, 'XXX', 4, '2009-10-21 16:46:40'),
(140, 14, 'XXX', 5, '2009-10-21 16:46:40'),
(141, 15, 'XXX', 2, '2009-10-21 16:46:40'),
(142, 15, 'XXX', 3, '2009-10-21 16:46:40'),
(143, 15, 'XXX', 4, '2009-10-21 16:46:40'),
(144, 15, 'XXX', 5, '2009-10-21 16:46:41'),
(145, 15, 'XXX', 6, '2009-10-21 16:46:41'),
(146, 15, 'XXX', 1, '2009-10-21 16:46:41'),
(147, 15, 'XXX', 2, '2009-10-21 16:46:41'),
(148, 15, 'XXX', 3, '2009-10-21 16:46:41'),
(149, 15, 'XXX', 4, '2009-10-21 16:46:41'),
(150, 15, 'XXX', 5, '2009-10-21 16:46:41'),
(151, 16, 'XXX', 2, '2009-10-21 16:46:41'),
(152, 16, 'XXX', 3, '2009-10-21 16:46:41'),
(153, 16, 'XXX', 4, '2009-10-21 16:46:41'),
(154, 16, 'XXX', 5, '2009-10-21 16:46:41'),
(155, 16, 'XXX', 6, '2009-10-21 16:46:41'),
(156, 16, 'XXX', 1, '2009-10-21 16:46:41'),
(157, 16, 'XXX', 2, '2009-10-21 16:46:41'),
(158, 16, 'XXX', 3, '2009-10-21 16:46:41'),
(159, 16, 'XXX', 4, '2009-10-21 16:46:41'),
(160, 16, 'XXX', 5, '2009-10-21 16:46:41'),
(161, 17, 'XXX', 2, '2009-10-21 16:46:41'),
(162, 17, 'XXX', 3, '2009-10-21 16:46:41'),
(163, 17, 'XXX', 4, '2009-10-21 16:46:41'),
(164, 17, 'XXX', 5, '2009-10-21 16:46:41'),
(165, 17, 'XXX', 6, '2009-10-21 16:46:41'),
(166, 17, 'XXX', 1, '2009-10-21 16:46:41'),
(167, 17, 'XXX', 2, '2009-10-21 16:46:41'),
(168, 17, 'XXX', 3, '2009-10-21 16:46:41'),
(169, 17, 'XXX', 4, '2009-10-21 16:46:41'),
(170, 17, 'XXX', 5, '2009-10-21 16:46:41'),
(171, 18, 'XXX', 2, '2009-10-21 16:46:41'),
(172, 18, 'XXX', 3, '2009-10-21 16:46:41'),
(173, 18, 'XXX', 4, '2009-10-21 16:46:41'),
(174, 18, 'XXX', 5, '2009-10-21 16:46:41'),
(175, 18, 'XXX', 6, '2009-10-21 16:46:41'),
(176, 18, 'XXX', 1, '2009-10-21 16:46:41'),
(177, 18, 'XXX', 2, '2009-10-21 16:46:41'),
(178, 18, 'XXX', 3, '2009-10-21 16:46:41'),
(179, 18, 'XXX', 4, '2009-10-21 16:46:41'),
(180, 18, 'XXX', 5, '2009-10-21 16:46:41'),
(181, 19, 'XXX', 2, '2009-10-21 16:46:42'),
(182, 19, 'XXX', 3, '2009-10-21 16:46:42'),
(183, 19, 'XXX', 4, '2009-10-21 16:46:42'),
(184, 19, 'XXX', 5, '2009-10-21 16:46:42'),
(185, 19, 'XXX', 6, '2009-10-21 16:46:42'),
(186, 19, 'XXX', 1, '2009-10-21 16:46:42'),
(187, 19, 'XXX', 2, '2009-10-21 16:46:42'),
(188, 19, 'XXX', 3, '2009-10-21 16:46:42'),
(189, 19, 'XXX', 4, '2009-10-21 16:46:42'),
(190, 19, 'XXX', 5, '2009-10-21 16:46:42'),
(191, 20, 'XXX', 2, '2009-10-21 16:46:42'),
(192, 20, 'XXX', 3, '2009-10-21 16:46:42'),
(193, 20, 'XXX', 4, '2009-10-21 16:46:42'),
(194, 20, 'XXX', 5, '2009-10-21 16:46:42'),
(195, 20, 'XXX', 6, '2009-10-21 16:46:42'),
(196, 20, 'XXX', 1, '2009-10-21 16:46:42'),
(197, 20, 'XXX', 2, '2009-10-21 16:46:42'),
(198, 20, 'XXX', 3, '2009-10-21 16:46:42'),
(199, 20, 'XXX', 4, '2009-10-21 16:46:42'),
(200, 20, 'XXX', 5, '2009-10-21 16:46:42');

-- --------------------------------------------------------

--
-- 表的结构 `bbs_subjects`
--

CREATE TABLE IF NOT EXISTS `bbs_subjects` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `authorid` int(11) NOT NULL,
  `submittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` int(11) NOT NULL COMMENT '0(system·)1(case)2(instance)3(user)',
  `typeid` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `replys` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- 导出表中的数据 `bbs_subjects`
--

INSERT INTO `bbs_subjects` (`uid`, `title`, `content`, `authorid`, `submittime`, `type`, `typeid`, `clicks`, `replys`) VALUES
(1, '第1个主题', '11', 2, '2009-10-21 16:46:38', 1, 1, 0, 10),
(2, '第2个主题', '22', 3, '2009-10-21 16:46:38', 2, 1, 0, 10),
(3, '第3个主题', '33', 4, '2009-10-21 16:46:38', 0, 1, 0, 10),
(4, '第4个主题', '44', 5, '2009-10-21 16:46:38', 1, 1, 0, 10),
(5, '第5个主题', '55', 6, '2009-10-21 16:46:39', 2, 1, 0, 10),
(6, '第6个主题', '66', 1, '2009-10-21 16:46:39', 0, 1, 0, 10),
(7, '第7个主题', '77', 2, '2009-10-21 16:46:39', 1, 1, 0, 10),
(8, '第8个主题', '88', 3, '2009-10-21 16:46:39', 2, 1, 0, 10),
(9, '第9个主题', '99', 4, '2009-10-21 16:46:39', 0, 1, 0, 10),
(10, '第10个主题', '1010', 5, '2009-10-21 16:46:40', 1, 1, 0, 10),
(11, '第11个主题', '1111', 6, '2009-10-21 16:46:40', 2, 1, 0, 10),
(12, '第12个主题', '1212', 1, '2009-10-21 16:46:40', 0, 1, 0, 10),
(13, '第13个主题', '1313', 2, '2009-10-21 16:46:40', 1, 1, 0, 10),
(14, '第14个主题', '1414', 3, '2009-10-21 16:46:40', 2, 1, 0, 10),
(15, '第15个主题', '1515', 4, '2009-10-21 16:46:41', 0, 1, 0, 10),
(16, '第16个主题', '1616', 5, '2009-10-21 16:46:41', 1, 1, 0, 10),
(17, '第17个主题', '1717', 6, '2009-10-21 16:46:41', 2, 1, 0, 10),
(18, '第18个主题', '1818', 1, '2009-10-21 16:46:41', 0, 1, 0, 10),
(19, '第19个主题', '1919', 2, '2009-10-21 16:46:42', 1, 1, 0, 10),
(20, '第20个主题', '2020', 3, '2009-10-21 16:46:42', 2, 1, 0, 10);

-- --------------------------------------------------------

--
-- 表的结构 `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `casename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creationtime` date DEFAULT NULL,
  `uploader` int(10) NOT NULL DEFAULT '1',
  `uploadtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT 'OPEN or CLOSED',
  `instances` int(10) NOT NULL COMMENT 'The numbers of instance about the case',
  `maxinstances` int(10) NOT NULL,
  `activity` int(10) unsigned NOT NULL,
  `startedinstances` int(11) NOT NULL,
  `finishedinstances` int(10) unsigned NOT NULL COMMENT 'the number of finished instances',
  `casetype` tinyint(1) NOT NULL COMMENT '0==self_study;1==teach',
  `maxplayer` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `cases`
--

INSERT INTO `cases` (`uid`, `casename`, `description`, `author`, `email`, `version`, `creationtime`, `uploader`, `uploadtime`, `status`, `instances`, `maxinstances`, `activity`, `startedinstances`, `finishedinstances`, `casetype`, `maxplayer`) VALUES
(1, '需求规格说明书 II', '这个案例是一个需求分析阶段的任务,特点是有父任务 ', 'PBCLS 小组', 'pbcls@cs.zju.edu.cn', '1.0', '2009-10-07', 1, '2009-10-21 16:46:36', 0, 4, 0, 0, 0, 0, 0, 5);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `dependencies`
--

INSERT INTO `dependencies` (`caseid`, `predecessorid`, `successorid`) VALUES
(1, 3, 4),
(1, 3, 5),
(1, 4, 6),
(1, 4, 7),
(1, 4, 9),
(1, 4, 10),
(1, 4, 13),
(1, 5, 10),
(1, 5, 13),
(1, 7, 8),
(1, 8, 14),
(1, 10, 11),
(1, 10, 12),
(1, 12, 14);

-- --------------------------------------------------------

--
-- 表的结构 `inputs`
--

CREATE TABLE IF NOT EXISTS `inputs` (
  `caseid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

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
  `creationtime` datetime NOT NULL,
  `starttime` datetime NOT NULL,
  `finishtime` datetime NOT NULL,
  `progress` tinyint(4) DEFAULT '0',
  `isstarted` tinyint(1) NOT NULL,
  `isfinished` tinyint(1) NOT NULL,
  `acceptindicator` tinyint(1) NOT NULL,
  `acceptobserver` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `instances`
--

INSERT INTO `instances` (`uid`, `caseid`, `instancename`, `creatorid`, `status`, `creationtime`, `starttime`, `finishtime`, `progress`, `isstarted`, `isfinished`, `acceptindicator`, `acceptobserver`) VALUES
(1, 1, 'first instance', 3, 0, '2009-10-21 16:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(2, 1, 'second instance', 4, 0, '2009-10-21 16:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(3, 1, 'third instance', 5, 0, '2009-10-21 16:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(4, 1, 'forth instance', 6, 0, '2009-10-21 16:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `instance_role`
--

INSERT INTO `instance_role` (`instanceid`, `roleid`, `actorid`, `status`) VALUES
(1, 1, 3, 0),
(1, 2, 4, 0),
(1, 3, 0, 0),
(1, 4, 0, 0),
(1, 5, 0, 0),
(2, 1, 0, 0),
(2, 2, 0, 0),
(2, 3, 0, 0),
(2, 4, 0, 0),
(2, 5, 0, 0),
(3, 1, 0, 0),
(3, 2, 0, 0),
(3, 3, 0, 0),
(3, 4, 0, 0),
(3, 5, 0, 0),
(4, 1, 0, 0),
(4, 2, 0, 0),
(4, 3, 0, 0),
(4, 4, 0, 0),
(4, 5, 0, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `instance_task`
--

INSERT INTO `instance_task` (`instanceid`, `taskid`, `starttime`, `finishtime`, `isready`, `isstarted`, `isfinished`, `denies`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(1, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(2, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(3, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0);

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
  `isreaded` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `messages`
--

INSERT INTO `messages` (`uid`, `title`, `from`, `to`, `body`, `sendtime`, `isreaded`) VALUES
(1, '第1个消息', 4, 3, '1', '2009-10-21 16:46:37', 0),
(2, '第2个消息', 4, 3, '2', '2009-10-21 16:46:37', 0),
(3, '第3个消息', 4, 3, '3', '2009-10-21 16:46:37', 0),
(4, '第4个消息', 4, 3, '4', '2009-10-21 16:46:37', 0),
(5, '第5个消息', 4, 3, '5', '2009-10-21 16:46:37', 0),
(6, '第6个消息', 4, 3, '6', '2009-10-21 16:46:37', 0),
(7, '第7个消息', 4, 3, '7', '2009-10-21 16:46:37', 0),
(8, '第8个消息', 4, 3, '8', '2009-10-21 16:46:37', 0),
(9, '第9个消息', 4, 3, '9', '2009-10-21 16:46:37', 0),
(10, '第10个消息', 4, 3, '10', '2009-10-21 16:46:37', 0),
(11, '第11个消息', 4, 3, '11', '2009-10-21 16:46:37', 0),
(12, '第12个消息', 4, 3, '12', '2009-10-21 16:46:37', 0),
(13, '第13个消息', 4, 3, '13', '2009-10-21 16:46:37', 0),
(14, '第14个消息', 4, 3, '14', '2009-10-21 16:46:37', 0),
(15, '第15个消息', 4, 3, '15', '2009-10-21 16:46:37', 0),
(16, '第16个消息', 4, 3, '16', '2009-10-21 16:46:37', 0),
(17, '第17个消息', 4, 3, '17', '2009-10-21 16:46:37', 0),
(18, '第18个消息', 4, 3, '18', '2009-10-21 16:46:37', 0),
(19, '第19个消息', 4, 3, '19', '2009-10-21 16:46:37', 0);

-- --------------------------------------------------------

--
-- 表的结构 `newsubmits`
--

CREATE TABLE IF NOT EXISTS `newsubmits` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `instanceid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ischecked` tinyint(1) NOT NULL,
  `isaccepted` tinyint(1) NOT NULL,
  `submittime` datetime NOT NULL,
  `accepttime` datetime NOT NULL,
  `uploader` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- 导出表中的数据 `outputs`
--

INSERT INTO `outputs` (`caseid`, `taskid`, `output`) VALUES
(1, 4, 'docs/???.doc'),
(1, 5, 'docs/????.doc'),
(1, 6, 'docs/????.doc'),
(1, 7, 'docs/???.doc'),
(1, 8, 'docs/????.doc'),
(1, 9, 'docs/????.doc'),
(1, 10, 'docs/????.doc'),
(1, 11, 'docs/??????.doc'),
(1, 12, 'docs/???.doc'),
(1, 13, 'docs/????.doc'),
(1, 14, 'docs/???????.doc');

-- --------------------------------------------------------

--
-- 表的结构 `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `caseid` int(11) NOT NULL,
  `childid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  PRIMARY KEY (`caseid`,`childid`,`parentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `relations`
--

INSERT INTO `relations` (`caseid`, `childid`, `parentid`) VALUES
(1, 2, 1),
(1, 3, 2),
(1, 4, 2),
(1, 5, 2),
(1, 6, 1),
(1, 7, 6),
(1, 8, 6),
(1, 9, 1),
(1, 10, 9),
(1, 11, 9),
(1, 12, 9),
(1, 13, 9),
(1, 14, 1);

-- --------------------------------------------------------

--
-- 表的结构 `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `caseid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `resourceid` int(11) NOT NULL,
  PRIMARY KEY (`caseid`,`taskid`,`resourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `resources`
--

INSERT INTO `resources` (`caseid`, `taskid`, `resourceid`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 3),
(1, 1, 4),
(1, 1, 5),
(1, 2, 1),
(1, 2, 2),
(1, 2, 3),
(1, 3, 1),
(1, 4, 2),
(1, 5, 3),
(1, 6, 4),
(1, 6, 5),
(1, 7, 4),
(1, 8, 5),
(1, 9, 2),
(1, 9, 3),
(1, 9, 4),
(1, 9, 5),
(1, 10, 2),
(1, 11, 3),
(1, 12, 4),
(1, 13, 5),
(1, 14, 2);

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `caseid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rolename` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 导出表中的数据 `roles`
--

INSERT INTO `roles` (`caseid`, `roleid`, `role`, `rolename`) VALUES
(1, 1, '项目经理', '杨枨'),
(1, 2, '项目小组成员', '徐鹏飞'),
(1, 3, '项目小组成员', '王朝成'),
(1, 4, '项目小组成员', '王明成'),
(1, 5, '项目小组成员', '翁世南');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 导出表中的数据 `tasks`
--

INSERT INTO `tasks` (`caseid`, `taskid`, `taskname`, `description`, `isparent`, `ismilestone`, `iscritical`, `duration`, `earlystart`, `earlyfinish`, `latestart`, `latefinish`) VALUES
(1, '1', '需求获取与整理', '', 1, 0, 1, 23, 0, 23, 0, 23),
(1, '10', '网站地图', '', 0, 0, 0, 5, 3, 8, 8, 13),
(1, '11', '用户界面框架', '', 0, 0, 0, 10, 8, 18, 13, 23),
(1, '12', '建立时序图', '', 0, 0, 0, 3, 8, 11, 15, 18),
(1, '13', '处理流图', '', 0, 0, 0, 5, 3, 8, 18, 23),
(1, '14', '需求规格说明书', '', 0, 0, 1, 5, 18, 23, 18, 23),
(1, '2', '愿景与范围', '', 1, 0, 0, 3, 0, 3, 20, 23),
(1, '3', '项目引入', '', 0, 0, 1, 2, 0, 2, 0, 2),
(1, '4', '环境图', '', 0, 0, 1, 1, 2, 3, 2, 3),
(1, '5', '约束条件', '', 0, 0, 0, 1, 2, 3, 7, 8),
(1, '6', '按用户分类的用例', '', 1, 0, 0, 15, 3, 18, 8, 23),
(1, '7', '用例图', '', 0, 0, 1, 5, 3, 8, 3, 8),
(1, '8', '用例场景', '', 0, 0, 1, 10, 8, 18, 8, 18),
(1, '9', '用户界面', '', 1, 0, 0, 15, 3, 18, 8, 23);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `groupid` int(10) NOT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `registertime` datetime NOT NULL,
  `interests` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qq` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `homepage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unreadedmessages` int(10) unsigned NOT NULL,
  `finisheds` int(10) unsigned NOT NULL,
  `ongoings` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `groupid`, `sex`, `registertime`, `interests`, `signature`, `qq`, `msn`, `email`, `homepage`, `unreadedmessages`, `finisheds`, `ongoings`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'admin@163.com', NULL, 0, 0, 0, 0),
(2, 'yangcheng', 'c4ca4238a0b923820dcc509a6f75849b', 1, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'yangcheng@163.com', NULL, 0, 0, 0, 0),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'user@163.com', NULL, 0, 0, 0, 0),
(4, 'xupengfey', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'xupengfey@163.com', NULL, 0, 0, 0, 0),
(5, 'cendy', 'd964173dc44da83eeafa3aebbee9a1a0', 2, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'cendy@163.com', NULL, 0, 0, 0, 0),
(6, 'wmc', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-21 16:46:36', NULL, NULL, NULL, NULL, 'wmc@163.com', NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user_instance`
--

CREATE TABLE IF NOT EXISTS `user_instance` (
  `userid` int(11) NOT NULL,
  `instanceid` int(11) NOT NULL,
  `rolegroup` int(11) NOT NULL COMMENT '1==pm,2==nomal player,3==indicator,4==observer',
  `accepttime` datetime NOT NULL,
  `isvalid` tinyint(1) NOT NULL,
  PRIMARY KEY (`userid`,`instanceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- 导出表中的数据 `user_instance`
--

INSERT INTO `user_instance` (`userid`, `instanceid`, `rolegroup`, `accepttime`, `isvalid`) VALUES
(2, 1, 3, '2009-10-21 16:46:37', 1),
(3, 1, 2, '2009-10-21 16:46:37', 1),
(3, 3, 4, '2009-10-21 16:46:37', 1),
(4, 1, 2, '2009-10-21 16:46:37', 1);
