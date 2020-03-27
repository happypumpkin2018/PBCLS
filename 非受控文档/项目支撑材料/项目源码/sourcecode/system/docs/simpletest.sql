-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 10 月 28 日 04:08
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
(3, 1, 1, 0, 0, '2009-10-28 11:11:56', 1, 1),
(4, 1, 2, 0, 0, '2009-10-28 11:11:56', 1, 1),
(5, 1, 3, 0, 0, '2009-10-28 11:11:56', 0, 0),
(2, 1, 0, 1, 0, '2009-10-28 11:11:56', 1, 1),
(6, 1, 0, 0, 1, '2009-10-28 11:11:56', 0, 0),
(3, 1, 0, 1, 0, '2009-10-28 11:11:56', 1, 1),
(3, 1, 0, 0, 1, '2009-10-28 11:11:56', 1, 1),
(3, 2, 2, 0, 0, '2009-10-28 11:11:57', 0, 0),
(3, 3, 0, 0, 1, '2009-10-28 11:11:57', 1, 1);

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
(1, 1, 'XXX', 2, '2009-10-28 11:11:58'),
(2, 1, 'XXX', 3, '2009-10-28 11:11:58'),
(3, 1, 'XXX', 4, '2009-10-28 11:11:58'),
(4, 1, 'XXX', 5, '2009-10-28 11:11:58'),
(5, 1, 'XXX', 6, '2009-10-28 11:11:58'),
(6, 1, 'XXX', 1, '2009-10-28 11:11:58'),
(7, 1, 'XXX', 2, '2009-10-28 11:11:58'),
(8, 1, 'XXX', 3, '2009-10-28 11:11:58'),
(9, 1, 'XXX', 4, '2009-10-28 11:11:58'),
(10, 1, 'XXX', 5, '2009-10-28 11:11:58'),
(11, 2, 'XXX', 2, '2009-10-28 11:11:58'),
(12, 2, 'XXX', 3, '2009-10-28 11:11:58'),
(13, 2, 'XXX', 4, '2009-10-28 11:11:58'),
(14, 2, 'XXX', 5, '2009-10-28 11:11:58'),
(15, 2, 'XXX', 6, '2009-10-28 11:11:58'),
(16, 2, 'XXX', 1, '2009-10-28 11:11:58'),
(17, 2, 'XXX', 2, '2009-10-28 11:11:58'),
(18, 2, 'XXX', 3, '2009-10-28 11:11:58'),
(19, 2, 'XXX', 4, '2009-10-28 11:11:58'),
(20, 2, 'XXX', 5, '2009-10-28 11:11:58'),
(21, 3, 'XXX', 2, '2009-10-28 11:11:58'),
(22, 3, 'XXX', 3, '2009-10-28 11:11:58'),
(23, 3, 'XXX', 4, '2009-10-28 11:11:58'),
(24, 3, 'XXX', 5, '2009-10-28 11:11:58'),
(25, 3, 'XXX', 6, '2009-10-28 11:11:58'),
(26, 3, 'XXX', 1, '2009-10-28 11:11:58'),
(27, 3, 'XXX', 2, '2009-10-28 11:11:58'),
(28, 3, 'XXX', 3, '2009-10-28 11:11:58'),
(29, 3, 'XXX', 4, '2009-10-28 11:11:58'),
(30, 3, 'XXX', 5, '2009-10-28 11:11:58'),
(31, 4, 'XXX', 2, '2009-10-28 11:11:58'),
(32, 4, 'XXX', 3, '2009-10-28 11:11:58'),
(33, 4, 'XXX', 4, '2009-10-28 11:11:58'),
(34, 4, 'XXX', 5, '2009-10-28 11:11:58'),
(35, 4, 'XXX', 6, '2009-10-28 11:11:58'),
(36, 4, 'XXX', 1, '2009-10-28 11:11:58'),
(37, 4, 'XXX', 2, '2009-10-28 11:11:58'),
(38, 4, 'XXX', 3, '2009-10-28 11:11:58'),
(39, 4, 'XXX', 4, '2009-10-28 11:11:58'),
(40, 4, 'XXX', 5, '2009-10-28 11:11:58'),
(41, 5, 'XXX', 2, '2009-10-28 11:11:59'),
(42, 5, 'XXX', 3, '2009-10-28 11:11:59'),
(43, 5, 'XXX', 4, '2009-10-28 11:11:59'),
(44, 5, 'XXX', 5, '2009-10-28 11:11:59'),
(45, 5, 'XXX', 6, '2009-10-28 11:11:59'),
(46, 5, 'XXX', 1, '2009-10-28 11:11:59'),
(47, 5, 'XXX', 2, '2009-10-28 11:11:59'),
(48, 5, 'XXX', 3, '2009-10-28 11:11:59'),
(49, 5, 'XXX', 4, '2009-10-28 11:11:59'),
(50, 5, 'XXX', 5, '2009-10-28 11:11:59'),
(51, 6, 'XXX', 2, '2009-10-28 11:11:59'),
(52, 6, 'XXX', 3, '2009-10-28 11:11:59'),
(53, 6, 'XXX', 4, '2009-10-28 11:11:59'),
(54, 6, 'XXX', 5, '2009-10-28 11:11:59'),
(55, 6, 'XXX', 6, '2009-10-28 11:11:59'),
(56, 6, 'XXX', 1, '2009-10-28 11:11:59'),
(57, 6, 'XXX', 2, '2009-10-28 11:11:59'),
(58, 6, 'XXX', 3, '2009-10-28 11:11:59'),
(59, 6, 'XXX', 4, '2009-10-28 11:11:59'),
(60, 6, 'XXX', 5, '2009-10-28 11:11:59'),
(61, 7, 'XXX', 2, '2009-10-28 11:11:59'),
(62, 7, 'XXX', 3, '2009-10-28 11:11:59'),
(63, 7, 'XXX', 4, '2009-10-28 11:11:59'),
(64, 7, 'XXX', 5, '2009-10-28 11:11:59'),
(65, 7, 'XXX', 6, '2009-10-28 11:11:59'),
(66, 7, 'XXX', 1, '2009-10-28 11:11:59'),
(67, 7, 'XXX', 2, '2009-10-28 11:11:59'),
(68, 7, 'XXX', 3, '2009-10-28 11:11:59'),
(69, 7, 'XXX', 4, '2009-10-28 11:11:59'),
(70, 7, 'XXX', 5, '2009-10-28 11:11:59'),
(71, 8, 'XXX', 2, '2009-10-28 11:11:59'),
(72, 8, 'XXX', 3, '2009-10-28 11:11:59'),
(73, 8, 'XXX', 4, '2009-10-28 11:11:59'),
(74, 8, 'XXX', 5, '2009-10-28 11:11:59'),
(75, 8, 'XXX', 6, '2009-10-28 11:11:59'),
(76, 8, 'XXX', 1, '2009-10-28 11:11:59'),
(77, 8, 'XXX', 2, '2009-10-28 11:11:59'),
(78, 8, 'XXX', 3, '2009-10-28 11:11:59'),
(79, 8, 'XXX', 4, '2009-10-28 11:11:59'),
(80, 8, 'XXX', 5, '2009-10-28 11:11:59'),
(81, 9, 'XXX', 2, '2009-10-28 11:11:59'),
(82, 9, 'XXX', 3, '2009-10-28 11:11:59'),
(83, 9, 'XXX', 4, '2009-10-28 11:11:59'),
(84, 9, 'XXX', 5, '2009-10-28 11:11:59'),
(85, 9, 'XXX', 6, '2009-10-28 11:11:59'),
(86, 9, 'XXX', 1, '2009-10-28 11:11:59'),
(87, 9, 'XXX', 2, '2009-10-28 11:11:59'),
(88, 9, 'XXX', 3, '2009-10-28 11:11:59'),
(89, 9, 'XXX', 4, '2009-10-28 11:11:59'),
(90, 9, 'XXX', 5, '2009-10-28 11:11:59'),
(91, 10, 'XXX', 2, '2009-10-28 11:11:59'),
(92, 10, 'XXX', 3, '2009-10-28 11:12:00'),
(93, 10, 'XXX', 4, '2009-10-28 11:12:00'),
(94, 10, 'XXX', 5, '2009-10-28 11:12:00'),
(95, 10, 'XXX', 6, '2009-10-28 11:12:00'),
(96, 10, 'XXX', 1, '2009-10-28 11:12:00'),
(97, 10, 'XXX', 2, '2009-10-28 11:12:00'),
(98, 10, 'XXX', 3, '2009-10-28 11:12:00'),
(99, 10, 'XXX', 4, '2009-10-28 11:12:00'),
(100, 10, 'XXX', 5, '2009-10-28 11:12:00'),
(101, 11, 'XXX', 2, '2009-10-28 11:12:00'),
(102, 11, 'XXX', 3, '2009-10-28 11:12:00'),
(103, 11, 'XXX', 4, '2009-10-28 11:12:00'),
(104, 11, 'XXX', 5, '2009-10-28 11:12:00'),
(105, 11, 'XXX', 6, '2009-10-28 11:12:00'),
(106, 11, 'XXX', 1, '2009-10-28 11:12:00'),
(107, 11, 'XXX', 2, '2009-10-28 11:12:00'),
(108, 11, 'XXX', 3, '2009-10-28 11:12:00'),
(109, 11, 'XXX', 4, '2009-10-28 11:12:00'),
(110, 11, 'XXX', 5, '2009-10-28 11:12:00'),
(111, 12, 'XXX', 2, '2009-10-28 11:12:00'),
(112, 12, 'XXX', 3, '2009-10-28 11:12:00'),
(113, 12, 'XXX', 4, '2009-10-28 11:12:00'),
(114, 12, 'XXX', 5, '2009-10-28 11:12:00'),
(115, 12, 'XXX', 6, '2009-10-28 11:12:00'),
(116, 12, 'XXX', 1, '2009-10-28 11:12:00'),
(117, 12, 'XXX', 2, '2009-10-28 11:12:00'),
(118, 12, 'XXX', 3, '2009-10-28 11:12:00'),
(119, 12, 'XXX', 4, '2009-10-28 11:12:00'),
(120, 12, 'XXX', 5, '2009-10-28 11:12:00'),
(121, 13, 'XXX', 2, '2009-10-28 11:12:00'),
(122, 13, 'XXX', 3, '2009-10-28 11:12:00'),
(123, 13, 'XXX', 4, '2009-10-28 11:12:00'),
(124, 13, 'XXX', 5, '2009-10-28 11:12:00'),
(125, 13, 'XXX', 6, '2009-10-28 11:12:00'),
(126, 13, 'XXX', 1, '2009-10-28 11:12:00'),
(127, 13, 'XXX', 2, '2009-10-28 11:12:00'),
(128, 13, 'XXX', 3, '2009-10-28 11:12:00'),
(129, 13, 'XXX', 4, '2009-10-28 11:12:00'),
(130, 13, 'XXX', 5, '2009-10-28 11:12:00'),
(131, 14, 'XXX', 2, '2009-10-28 11:12:00'),
(132, 14, 'XXX', 3, '2009-10-28 11:12:00'),
(133, 14, 'XXX', 4, '2009-10-28 11:12:00'),
(134, 14, 'XXX', 5, '2009-10-28 11:12:00'),
(135, 14, 'XXX', 6, '2009-10-28 11:12:00'),
(136, 14, 'XXX', 1, '2009-10-28 11:12:00'),
(137, 14, 'XXX', 2, '2009-10-28 11:12:00'),
(138, 14, 'XXX', 3, '2009-10-28 11:12:00'),
(139, 14, 'XXX', 4, '2009-10-28 11:12:00'),
(140, 14, 'XXX', 5, '2009-10-28 11:12:00'),
(141, 15, 'XXX', 2, '2009-10-28 11:12:00'),
(142, 15, 'XXX', 3, '2009-10-28 11:12:00'),
(143, 15, 'XXX', 4, '2009-10-28 11:12:00'),
(144, 15, 'XXX', 5, '2009-10-28 11:12:01'),
(145, 15, 'XXX', 6, '2009-10-28 11:12:01'),
(146, 15, 'XXX', 1, '2009-10-28 11:12:01'),
(147, 15, 'XXX', 2, '2009-10-28 11:12:01'),
(148, 15, 'XXX', 3, '2009-10-28 11:12:01'),
(149, 15, 'XXX', 4, '2009-10-28 11:12:01'),
(150, 15, 'XXX', 5, '2009-10-28 11:12:01'),
(151, 16, 'XXX', 2, '2009-10-28 11:12:01'),
(152, 16, 'XXX', 3, '2009-10-28 11:12:01'),
(153, 16, 'XXX', 4, '2009-10-28 11:12:01'),
(154, 16, 'XXX', 5, '2009-10-28 11:12:01'),
(155, 16, 'XXX', 6, '2009-10-28 11:12:01'),
(156, 16, 'XXX', 1, '2009-10-28 11:12:01'),
(157, 16, 'XXX', 2, '2009-10-28 11:12:01'),
(158, 16, 'XXX', 3, '2009-10-28 11:12:01'),
(159, 16, 'XXX', 4, '2009-10-28 11:12:01'),
(160, 16, 'XXX', 5, '2009-10-28 11:12:01'),
(161, 17, 'XXX', 2, '2009-10-28 11:12:01'),
(162, 17, 'XXX', 3, '2009-10-28 11:12:01'),
(163, 17, 'XXX', 4, '2009-10-28 11:12:01'),
(164, 17, 'XXX', 5, '2009-10-28 11:12:01'),
(165, 17, 'XXX', 6, '2009-10-28 11:12:01'),
(166, 17, 'XXX', 1, '2009-10-28 11:12:01'),
(167, 17, 'XXX', 2, '2009-10-28 11:12:01'),
(168, 17, 'XXX', 3, '2009-10-28 11:12:01'),
(169, 17, 'XXX', 4, '2009-10-28 11:12:01'),
(170, 17, 'XXX', 5, '2009-10-28 11:12:01'),
(171, 18, 'XXX', 2, '2009-10-28 11:12:01'),
(172, 18, 'XXX', 3, '2009-10-28 11:12:01'),
(173, 18, 'XXX', 4, '2009-10-28 11:12:01'),
(174, 18, 'XXX', 5, '2009-10-28 11:12:01'),
(175, 18, 'XXX', 6, '2009-10-28 11:12:01'),
(176, 18, 'XXX', 1, '2009-10-28 11:12:01'),
(177, 18, 'XXX', 2, '2009-10-28 11:12:01'),
(178, 18, 'XXX', 3, '2009-10-28 11:12:01'),
(179, 18, 'XXX', 4, '2009-10-28 11:12:01'),
(180, 18, 'XXX', 5, '2009-10-28 11:12:01'),
(181, 19, 'XXX', 2, '2009-10-28 11:12:01'),
(182, 19, 'XXX', 3, '2009-10-28 11:12:01'),
(183, 19, 'XXX', 4, '2009-10-28 11:12:01'),
(184, 19, 'XXX', 5, '2009-10-28 11:12:01'),
(185, 19, 'XXX', 6, '2009-10-28 11:12:01'),
(186, 19, 'XXX', 1, '2009-10-28 11:12:01'),
(187, 19, 'XXX', 2, '2009-10-28 11:12:01'),
(188, 19, 'XXX', 3, '2009-10-28 11:12:01'),
(189, 19, 'XXX', 4, '2009-10-28 11:12:01'),
(190, 19, 'XXX', 5, '2009-10-28 11:12:01'),
(191, 20, 'XXX', 2, '2009-10-28 11:12:01'),
(192, 20, 'XXX', 3, '2009-10-28 11:12:01'),
(193, 20, 'XXX', 4, '2009-10-28 11:12:01'),
(194, 20, 'XXX', 5, '2009-10-28 11:12:01'),
(195, 20, 'XXX', 6, '2009-10-28 11:12:01'),
(196, 20, 'XXX', 1, '2009-10-28 11:12:01'),
(197, 20, 'XXX', 2, '2009-10-28 11:12:01'),
(198, 20, 'XXX', 3, '2009-10-28 11:12:02'),
(199, 20, 'XXX', 4, '2009-10-28 11:12:02'),
(200, 20, 'XXX', 5, '2009-10-28 11:12:02');

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
(1, '第1个主题', '11', 2, '2009-10-28 11:11:58', 1, 1, 0, 10),
(2, '第2个主题', '22', 3, '2009-10-28 11:11:58', 2, 1, 0, 10),
(3, '第3个主题', '33', 4, '2009-10-28 11:11:58', 0, 1, 0, 10),
(4, '第4个主题', '44', 5, '2009-10-28 11:11:58', 1, 1, 0, 10),
(5, '第5个主题', '55', 6, '2009-10-28 11:11:59', 2, 1, 0, 10),
(6, '第6个主题', '66', 1, '2009-10-28 11:11:59', 0, 1, 0, 10),
(7, '第7个主题', '77', 2, '2009-10-28 11:11:59', 1, 1, 0, 10),
(8, '第8个主题', '88', 3, '2009-10-28 11:11:59', 2, 1, 0, 10),
(9, '第9个主题', '99', 4, '2009-10-28 11:11:59', 0, 1, 0, 10),
(10, '第10个主题', '1010', 5, '2009-10-28 11:12:00', 1, 1, 0, 10),
(11, '第11个主题', '1111', 6, '2009-10-28 11:12:00', 2, 1, 0, 10),
(12, '第12个主题', '1212', 1, '2009-10-28 11:12:00', 0, 1, 0, 10),
(13, '第13个主题', '1313', 2, '2009-10-28 11:12:00', 1, 1, 0, 10),
(14, '第14个主题', '1414', 3, '2009-10-28 11:12:00', 2, 1, 0, 10),
(15, '第15个主题', '1515', 4, '2009-10-28 11:12:01', 0, 1, 0, 10),
(16, '第16个主题', '1616', 5, '2009-10-28 11:12:01', 1, 1, 0, 10),
(17, '第17个主题', '1717', 6, '2009-10-28 11:12:01', 2, 1, 0, 10),
(18, '第18个主题', '1818', 1, '2009-10-28 11:12:01', 0, 1, 0, 10),
(19, '第19个主题', '1919', 2, '2009-10-28 11:12:01', 1, 1, 0, 10),
(20, '第20个主题', '2020', 3, '2009-10-28 11:12:02', 2, 1, 0, 10);

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
  `foldername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `cases`
--

INSERT INTO `cases` (`uid`, `casename`, `description`, `author`, `email`, `version`, `creationtime`, `uploader`, `uploadtime`, `status`, `instances`, `maxinstances`, `activity`, `startedinstances`, `finishedinstances`, `casetype`, `maxplayer`, `foldername`) VALUES
(1, '简单的测试案例', '', 'PBCLS 小组', 'pbcls@cs.zju.edu.cn', '1.0', '2009-10-27', 1, '2009-10-28 11:11:56', 0, 4, 0, 0, 0, 0, 0, 5, 'simplecase');

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
(1, 1, 2),
(1, 1, 3),
(1, 2, 4),
(1, 3, 5),
(1, 4, 9),
(1, 5, 6),
(1, 5, 7),
(1, 6, 8),
(1, 7, 8),
(1, 8, 9),
(1, 9, 10);

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

INSERT INTO `inputs` (`caseid`, `taskid`, `input`) VALUES
(1, 1, 'docs/???????.doc'),
(1, 2, 'docs/???????.doc'),
(1, 3, 'docs/???????.doc'),
(1, 4, 'docs/???????.doc'),
(1, 5, 'docs/???????.doc'),
(1, 6, 'docs/???????.doc'),
(1, 7, 'docs/???????.doc'),
(1, 8, 'docs/???????.doc'),
(1, 9, 'docs/???????.doc'),
(1, 10, 'docs/???????.doc');

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
(1, 1, 'first instance', 3, 0, '2009-10-28 11:11:56', '2009-10-28 11:39:07', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(2, 1, 'second instance', 4, 0, '2009-10-28 11:11:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(3, 1, 'third instance', 5, 0, '2009-10-28 11:11:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0),
(4, 1, 'forth instance', 6, 0, '2009-10-28 11:11:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0);

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
(4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0),
(4, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0);

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
(1, '第1个消息', 4, 3, '1', '2009-10-28 11:11:57', 0),
(2, '第2个消息', 4, 3, '2', '2009-10-28 11:11:57', 0),
(3, '第3个消息', 4, 3, '3', '2009-10-28 11:11:57', 0),
(4, '第4个消息', 4, 3, '4', '2009-10-28 11:11:57', 0),
(5, '第5个消息', 4, 3, '5', '2009-10-28 11:11:57', 0),
(6, '第6个消息', 4, 3, '6', '2009-10-28 11:11:57', 0),
(7, '第7个消息', 4, 3, '7', '2009-10-28 11:11:57', 0),
(8, '第8个消息', 4, 3, '8', '2009-10-28 11:11:57', 0),
(9, '第9个消息', 4, 3, '9', '2009-10-28 11:11:57', 0),
(10, '第10个消息', 4, 3, '10', '2009-10-28 11:11:57', 0),
(11, '第11个消息', 4, 3, '11', '2009-10-28 11:11:57', 0),
(12, '第12个消息', 4, 3, '12', '2009-10-28 11:11:57', 0),
(13, '第13个消息', 4, 3, '13', '2009-10-28 11:11:57', 0),
(14, '第14个消息', 4, 3, '14', '2009-10-28 11:11:57', 0),
(15, '第15个消息', 4, 3, '15', '2009-10-28 11:11:57', 0),
(16, '第16个消息', 4, 3, '16', '2009-10-28 11:11:57', 0),
(17, '第17个消息', 4, 3, '17', '2009-10-28 11:11:57', 0),
(18, '第18个消息', 4, 3, '18', '2009-10-28 11:11:57', 0),
(19, '第19个消息', 4, 3, '19', '2009-10-28 11:11:57', 0);

-- --------------------------------------------------------

--
-- 表的结构 `newsubmits`
--

CREATE TABLE IF NOT EXISTS `newsubmits` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `instanceid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
(1, 1, 'docs/???????.doc'),
(1, 2, 'docs/pbco.xsd'),
(1, 3, 'docs/????.zip'),
(1, 4, 'docs/simplecase.zip'),
(1, 5, 'docs/????.doc'),
(1, 6, 'docs/????.doc'),
(1, 7, 'docs/?????.doc'),
(1, 8, 'docs/???.zip');

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
(1, 1, 2),
(1, 2, 3),
(1, 3, 4),
(1, 4, 3),
(1, 5, 1),
(1, 6, 3),
(1, 7, 3),
(1, 8, 4),
(1, 9, 5),
(1, 10, 3);

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
(1, 1, '项目经理', 'PM'),
(1, 2, '软件需求工程师', 'SRE'),
(1, 3, '软件开发工程师', 'SDE-1'),
(1, 4, '软件开发工程师', 'SDE-2'),
(1, 5, '软件测试工程师', 'STE');

-- --------------------------------------------------------

--
-- 表的结构 `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(32) NOT NULL,
  `session_last_access` int(10) unsigned DEFAULT NULL,
  `session_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `sessions`
--

INSERT INTO `sessions` (`session_id`, `session_last_access`, `session_data`) VALUES
('bc041f2ff32aee1a9cfb18cd3fc790fc', 1256702844, 'sess_last_access|i:1256702844;sess_ip_address|s:9:"127.0.0.1";sess_useragent|s:50:"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1;";sess_last_regenerated|i:1256702618;user_name|s:4:"user";user_gid|s:1:"2";user_id|s:1:"3";');

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
(1, '1', '需求获取', '', 0, 0, 1, 3, 0, 3, 0, 3),
(1, '10', '项目部署', '', 0, 0, 1, 3, 68, 71, 68, 71),
(1, '2', 'pbco设计', '', 0, 0, 0, 15, 3, 18, 38, 53),
(1, '3', '原型开发', '', 0, 0, 1, 20, 3, 23, 3, 23),
(1, '4', '案例制作', '', 0, 0, 0, 8, 18, 26, 53, 61),
(1, '5', '原型评审', '', 0, 0, 1, 1, 23, 24, 23, 24),
(1, '6', '架构设计', '', 0, 0, 1, 7, 24, 31, 24, 31),
(1, '7', '数据库设计', '', 0, 0, 1, 7, 24, 31, 24, 31),
(1, '8', '系统实现', '', 0, 0, 1, 30, 31, 61, 31, 61),
(1, '9', '测试', '', 0, 0, 1, 7, 61, 68, 61, 68);

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'admin@163.com', NULL, 0, 0, 0, 0),
(2, 'yangcheng', 'c4ca4238a0b923820dcc509a6f75849b', 1, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'yangcheng@163.com', NULL, 0, 0, 0, 0),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'user@163.com', NULL, 0, 0, 0, 0),
(4, 'xupengfey', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'xupengfey@163.com', NULL, 0, 0, 0, 0),
(5, 'cendy', 'd964173dc44da83eeafa3aebbee9a1a0', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'cendy@163.com', NULL, 0, 0, 0, 0),
(6, 'wmc', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'wmc@163.com', NULL, 0, 0, 0, 0);

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
(2, 1, 3, '2009-10-28 11:11:57', 1),
(3, 1, 2, '2009-10-28 11:11:56', 1),
(3, 3, 4, '2009-10-28 11:11:57', 1),
(4, 1, 2, '2009-10-28 11:11:56', 1);
