-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 10 月 29 日 05:45
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=206 ;

--
-- 导出表中的数据 `bbs_replys`
--

INSERT INTO `bbs_replys` (`uid`, `subjectid`, `content`, `authorid`, `submittime`) VALUES
(2, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(3, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(4, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(6, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(7, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(8, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(9, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(10, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(11, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(12, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(13, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(14, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(15, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(16, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(17, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(18, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(19, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(20, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(21, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(22, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(23, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(24, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(25, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(26, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(27, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(28, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(29, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(30, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(31, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(32, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(33, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(34, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(35, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(36, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(37, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(38, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(39, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(40, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(41, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(42, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(43, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(44, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(45, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(46, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(47, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(48, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(49, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(50, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(51, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(52, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(53, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(54, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(55, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(56, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(57, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(58, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(59, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(60, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(61, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(62, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(63, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(64, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(65, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(66, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(67, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(68, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(69, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(70, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(71, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(72, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(73, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(74, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(75, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(76, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(77, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(78, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(79, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(80, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(81, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(82, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(83, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(84, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(85, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(86, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(87, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(88, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(89, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(90, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(91, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(92, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(93, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(94, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(95, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(96, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(97, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(98, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(99, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(100, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(101, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(102, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(103, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(104, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(105, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(106, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(107, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(108, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(109, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(110, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(111, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(112, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(113, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(114, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(115, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(116, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(117, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(118, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(119, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(120, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(121, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(122, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(123, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(124, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(125, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(126, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(127, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(128, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(129, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(130, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(131, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(132, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(133, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(134, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(135, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(136, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(137, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(138, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(139, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(140, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(141, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(142, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(143, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(144, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(145, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(146, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(147, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(148, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(149, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(150, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(151, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(152, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(153, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(154, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(155, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(156, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(157, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(158, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(159, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(160, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(161, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(162, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(163, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(164, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(165, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(166, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(167, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(168, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(169, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(170, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(171, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(172, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(173, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(174, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(175, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(176, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(177, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(178, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(179, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(180, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(181, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(182, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(183, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(184, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(185, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(186, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(187, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(188, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(189, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(190, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(191, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(192, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(193, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(194, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(195, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(196, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(197, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(198, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(199, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(200, 2, 'XXX1', 3, '2009-10-29 12:07:13'),
(203, 2, 'XXX1', 3, '2009-10-29 12:07:13');

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
  `caseid` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `replys` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- 导出表中的数据 `bbs_subjects`
--

INSERT INTO `bbs_subjects` (`uid`, `title`, `content`, `authorid`, `submittime`, `caseid`, `clicks`, `replys`) VALUES
(1, '第1个主题', '11', 2, '2009-10-29 12:29:13', 1, 55, 9),
(2, '第2个主题', '22', 3, '2009-10-29 12:10:19', 1, 15, 10),
(3, '第3个主题', '33', 4, '2009-10-28 11:11:58', 1, 0, 10),
(4, '第4个主题', '44', 5, '2009-10-29 11:07:57', 1, 2, 10),
(5, '第5个主题', '55', 6, '2009-10-28 11:11:59', 1, 0, 10),
(6, '第6个主题', '66', 1, '2009-10-28 11:11:59', 1, 0, 10),
(7, '第7个主题', '77', 2, '2009-10-28 11:11:59', 1, 0, 10),
(9, '第9个主题', '99', 4, '2009-10-28 11:11:59', 1, 0, 10),
(10, '第10个主题', '1010', 5, '2009-10-28 11:12:00', 1, 0, 10),
(11, '第11个主题', '1111', 6, '2009-10-28 11:12:00', 1, 0, 10),
(12, '第12个主题', '1212', 1, '2009-10-28 11:12:00', 1, 0, 10),
(13, '第13个主题', '1313', 2, '2009-10-28 11:12:00', 1, 0, 10),
(14, '第14个主题', '1414', 3, '2009-10-28 11:12:00', 1, 0, 10),
(15, '第15个主题', '1515', 4, '2009-10-28 11:12:01', 1, 0, 10),
(16, '第16个主题', '1616', 5, '2009-10-28 11:12:01', 1, 0, 10),
(17, '第17个主题', '1717', 6, '2009-10-28 11:12:01', 1, 0, 10),
(18, '第18个主题', '1818', 1, '2009-10-28 11:12:01', 1, 0, 10),
(19, '第19个主题', '1919', 2, '2009-10-28 11:12:01', 1, 0, 10),
(20, '第20个主题', '2020', 3, '2009-10-29 12:15:03', 1, 1, 10),
(23, '241', '124', 3, '2009-10-28 21:26:44', 1, 0, 0),
(24, '简单', ' 213', 3, '2009-10-28 22:35:35', 1, 0, 0),
(27, '', 'XXX', 3, '2009-10-29 11:07:45', 1, 0, 0),
(28, '', '23414', 3, '2009-10-29 11:11:15', 1, 0, 0),
(29, '', '你好', 3, '2009-10-29 11:19:29', 1, 0, 0),
(30, '24124', '1234124', 3, '2009-10-29 12:14:51', 1, 0, 0),
(31, '1234', '1', 3, '2009-10-29 12:18:58', 1, 0, 0);

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
(1, '第1个消息', 4, 3, '1', '2009-10-28 13:43:01', 1),
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
('8de3bf72045666cb229650d3db90084c', 1256790553, 'sess_last_access|i:1256790553;sess_ip_address|s:9:"127.0.0.1";sess_useragent|s:50:"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1;";sess_last_regenerated|i:1256790442;user_name|s:4:"user";user_gid|s:1:"2";user_id|s:1:"3";');

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
(2, 'yangcheng', 'c4ca4238a0b923820dcc509a6f75849b', 1, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'yangcheng@163.com', NULL, 0, 0, 0, 1),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'user@163.com', NULL, 0, 0, 0, 1),
(4, 'xupengfey', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'xupengfey@163.com', NULL, 0, 0, 0, 0),
(5, 'cendy', 'd964173dc44da83eeafa3aebbee9a1a0', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'cendy@163.com', NULL, 0, 0, 0, 0),
(6, 'wmc', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL, '2009-10-28 11:11:56', NULL, NULL, NULL, NULL, 'wmc@163.com', NULL, 0, 0, 0, 1);

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
