-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 03 2014 г., 20:51
-- Версия сервера: 5.5.33-log
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `brief`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `subject` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  `text` varchar(255) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `readed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `type`, `subject`, `url`, `text`, `created`, `readed`) VALUES
(1, 1, 'pop-up', 'Created new ticket by admin', '/support/answer/index/1', 'tyjtyj', '2013-12-25 08:57:54', '2013-12-25 08:57:57'),
(2, 1, 'pop-up', 'Ticket #1 answered by admin', '/support/answer/index/1', 'ghumktyjhuy', '2013-12-25 08:58:07', '2013-12-25 08:58:34'),
(3, 1, 'pop-up', 'Ticket #1 answered by admin', '/support/answer/index/1', 'ftghnfh', '2013-12-25 08:58:32', '2013-12-25 08:58:34'),
(4, 1, 'pop-up', 'Ticket #1 answered by admin', '/support/answer/index/1', 'gyjhtyjhr', '2013-12-25 08:58:52', '2013-12-25 08:58:53'),
(5, 1, 'popup', 'New request', '/manager/manager/view/2', '', '2013-12-27 04:12:11', '2013-12-27 04:12:26'),
(6, 5, 'popup', 'New request', '/manager/manager/view/2', '', '2013-12-27 04:12:11', '0000-00-00 00:00:00'),
(7, 1, 'popup', 'New request', '/manager/manager/view/3', '', '2013-12-27 04:21:12', '2013-12-27 04:24:25'),
(8, 5, 'popup', 'New request', '/manager/manager/view/3', '', '2013-12-27 04:21:12', '0000-00-00 00:00:00'),
(9, 1, 'popup', 'New request for logo', '/manager/manager/view/8', '', '2013-12-27 04:29:56', '2013-12-27 04:35:07'),
(10, 5, 'popup', 'New request for logo', '/manager/manager/view/8', '', '2013-12-27 04:29:56', '0000-00-00 00:00:00'),
(11, 1, 'popup', 'New request for sito', '/manager/manager/view/9', '', '2013-12-27 04:30:55', '2013-12-27 04:44:43'),
(12, 5, 'popup', 'New request for sito', '/manager/manager/view/9', '', '2013-12-27 04:30:55', '0000-00-00 00:00:00'),
(13, 1, 'popup', 'New request for brand_book', '/manager/manager/view/10', '', '2013-12-27 05:00:07', '2013-12-27 05:00:19'),
(14, 5, 'popup', 'New request for brand_book', '/manager/manager/view/10', '', '2013-12-27 05:00:07', '0000-00-00 00:00:00'),
(15, 1, 'popup', 'New request for app', '/manager/manager/view/11', '', '2013-12-27 05:35:07', '2013-12-27 05:47:28'),
(16, 5, 'popup', 'New request for app', '/manager/manager/view/11', '', '2013-12-27 05:35:07', '0000-00-00 00:00:00'),
(17, 1, 'popup', 'New request for app', '/manager/manager/view/12', '', '2013-12-27 05:36:31', '2013-12-27 05:47:27'),
(18, 5, 'popup', 'New request for app', '/manager/manager/view/12', '', '2013-12-27 05:36:31', '0000-00-00 00:00:00'),
(19, 1, 'popup', 'New request for app', '/manager/manager/view/13', '', '2013-12-27 05:44:02', '2013-12-27 05:47:30'),
(20, 5, 'popup', 'New request for app', '/manager/manager/view/13', '', '2013-12-27 05:44:02', '0000-00-00 00:00:00'),
(21, 1, 'popup', 'New request for app', '/manager/manager/view/14', '', '2013-12-27 05:44:56', '2013-12-27 05:47:30'),
(22, 5, 'popup', 'New request for app', '/manager/manager/view/14', '', '2013-12-27 05:44:56', '0000-00-00 00:00:00'),
(23, 1, 'popup', 'New request for app', '/manager/manager/view/15', '', '2013-12-27 05:45:20', '2013-12-27 05:47:31'),
(24, 5, 'popup', 'New request for app', '/manager/manager/view/15', '', '2013-12-27 05:45:20', '0000-00-00 00:00:00'),
(25, 1, 'popup', 'New request for app', '/manager/manager/view/16', '', '2013-12-27 05:46:09', '2013-12-27 05:47:32'),
(26, 5, 'popup', 'New request for app', '/manager/manager/view/16', '', '2013-12-27 05:46:09', '0000-00-00 00:00:00'),
(27, 1, 'popup', 'New request for app', '/manager/manager/view/17', '', '2013-12-27 05:46:49', '2013-12-27 05:47:33'),
(28, 5, 'popup', 'New request for app', '/manager/manager/view/17', '', '2013-12-27 05:46:49', '0000-00-00 00:00:00'),
(29, 1, 'popup', 'New request for app', '/manager/manager/view/18', '', '2013-12-27 05:59:40', '2013-12-27 07:19:50'),
(30, 5, 'popup', 'New request for app', '/manager/manager/view/18', '', '2013-12-27 05:59:40', '0000-00-00 00:00:00'),
(31, 1, 'popup', 'New request for app', '/manager/manager/view/19', '', '2013-12-27 07:16:05', '2013-12-27 07:19:51'),
(32, 5, 'popup', 'New request for app', '/manager/manager/view/19', '', '2013-12-27 07:16:05', '0000-00-00 00:00:00'),
(33, 1, 'popup', 'New request for app', '/manager/manager/view/20', '', '2013-12-27 07:23:51', '2013-12-27 07:23:59'),
(34, 5, 'popup', 'New request for app', '/manager/manager/view/20', '', '2013-12-27 07:23:51', '0000-00-00 00:00:00'),
(35, 1, 'popup', 'New request for app', '/manager/manager/view/21', '', '2013-12-27 07:27:07', '2013-12-27 07:33:03'),
(36, 5, 'popup', 'New request for app', '/manager/manager/view/21', '', '2013-12-27 07:27:07', '0000-00-00 00:00:00'),
(37, 1, 'popup', 'New request for app', '/manager/manager/view/22', '', '2013-12-27 07:28:02', '2013-12-27 07:33:02'),
(38, 5, 'popup', 'New request for app', '/manager/manager/view/22', '', '2013-12-27 07:28:02', '0000-00-00 00:00:00'),
(39, 1, 'popup', 'Ticket #1 answered by admin', '/support/answer/index/1', 'оргорекрокено', '2013-12-27 10:10:02', '2013-12-27 10:10:59'),
(40, 1, 'popup', 'Ticket #1 answered by admin', '/support/answer/index/1', 'еагнркегн', '2013-12-27 10:10:12', '2013-12-27 10:10:57'),
(41, 1, 'popup', 'Ticket #1 answered by admin', '/support/answer/index/1', 'пглен', '2013-12-27 10:10:15', '2013-12-27 10:10:56'),
(42, 1, 'popup', 'Ticket #1 answered by admin', '/support/answer/index/1', 'гншднекегокег', '2013-12-27 10:10:19', '2013-12-27 10:11:00'),
(43, 1, 'popup', 'Ticket #1 answered by admin', '/support/answer/index/1', 'нгленш', '2013-12-27 10:10:28', '2013-12-27 10:10:54'),
(44, 1, 'popup', 'Created new ticket by admin', '/support/answer/index/2', 'апорьао', '2013-12-30 04:31:59', '2013-12-30 04:32:02'),
(45, 1, 'popup', 'Ticket #2 answered by admin', '/support/answer/index/2', 'пнорапо', '2013-12-30 04:32:28', '2013-12-30 04:32:34'),
(46, 1, 'popup', 'Ticket #2 answered by admin', '/support/answer/index/2', 'опополгнлнрш', '2013-12-30 04:32:33', '2013-12-30 04:32:35'),
(47, 1, 'popup', 'Ticket #2 closed by  admin', '', '', '2013-12-30 04:32:41', '2013-12-30 04:33:16'),
(48, 1, 'popup', 'New request for logo', '/manager/manager/view/29', '', '2013-12-30 09:28:38', '2014-01-04 02:30:23'),
(49, 5, 'popup', 'New request for logo', '/manager/manager/view/29', '', '2013-12-30 09:28:38', '0000-00-00 00:00:00'),
(50, 1, 'popup', 'New request for logo', '/manager/manager/view/30', '', '2013-12-30 09:31:49', '2014-01-04 02:30:22'),
(51, 5, 'popup', 'New request for logo', '/manager/manager/view/30', '', '2013-12-30 09:31:49', '0000-00-00 00:00:00'),
(52, 1, 'popup', 'New request for logo', '/manager/manager/view/31', '', '2013-12-30 09:32:25', '2014-01-04 02:30:21'),
(53, 5, 'popup', 'New request for logo', '/manager/manager/view/31', '', '2013-12-30 09:32:25', '0000-00-00 00:00:00'),
(54, 1, 'popup', 'New request for logo', '/manager/manager/view/32', '', '2013-12-30 09:37:35', '2014-01-04 02:30:20'),
(55, 5, 'popup', 'New request for logo', '/manager/manager/view/32', '', '2013-12-30 09:37:35', '0000-00-00 00:00:00'),
(56, 1, 'popup', 'New request for sito', '/manager/manager/view/33', '', '2013-12-30 09:41:44', '2014-01-04 02:30:20'),
(57, 5, 'popup', 'New request for sito', '/manager/manager/view/33', '', '2013-12-30 09:41:44', '0000-00-00 00:00:00'),
(58, 1, 'popup', 'New request for sito', '/manager/manager/view/34', '', '2013-12-30 09:42:50', '2014-01-04 02:30:19'),
(59, 5, 'popup', 'New request for sito', '/manager/manager/view/34', '', '2013-12-30 09:42:50', '0000-00-00 00:00:00'),
(60, 1, 'popup', 'New request for logo', '/manager/manager/view/35', '', '2013-12-30 09:46:56', '2014-01-04 02:30:18'),
(61, 5, 'popup', 'New request for logo', '/manager/manager/view/35', '', '2013-12-30 09:46:56', '0000-00-00 00:00:00'),
(62, 1, 'popup', 'New request for app', '/manager/manager/view/36', '', '2013-12-30 09:48:34', '2014-01-04 02:30:17'),
(63, 5, 'popup', 'New request for app', '/manager/manager/view/36', '', '2013-12-30 09:48:34', '0000-00-00 00:00:00'),
(64, 1, 'popup', 'New request for logo', '/manager/manager/view/37', '', '2013-12-30 09:48:52', '2014-01-04 02:30:24'),
(65, 5, 'popup', 'New request for logo', '/manager/manager/view/37', '', '2013-12-30 09:48:52', '0000-00-00 00:00:00'),
(66, 1, 'popup', 'New request for logo', '/manager/manager/view/38', '', '2013-12-30 09:49:01', '2014-01-04 02:30:25'),
(67, 5, 'popup', 'New request for logo', '/manager/manager/view/38', '', '2013-12-30 09:49:01', '0000-00-00 00:00:00'),
(68, 1, 'popup', 'New request for sito', '/manager/manager/view/39', '', '2013-12-30 09:49:30', '2014-01-04 02:30:25'),
(69, 5, 'popup', 'New request for sito', '/manager/manager/view/39', '', '2013-12-30 09:49:30', '0000-00-00 00:00:00'),
(70, 1, 'popup', 'New request for sito', '/manager/manager/view/40', '', '2013-12-30 09:49:34', '2014-01-04 02:30:26'),
(71, 5, 'popup', 'New request for sito', '/manager/manager/view/40', '', '2013-12-30 09:49:34', '0000-00-00 00:00:00'),
(72, 1, 'popup', 'New request for sito', '/manager/manager/view/41', '', '2013-12-30 09:49:51', '2014-01-04 02:30:27'),
(73, 5, 'popup', 'New request for sito', '/manager/manager/view/41', '', '2013-12-30 09:49:51', '0000-00-00 00:00:00'),
(74, 1, 'popup', 'Created new ticket by admin', '/support/answer/index/3', 'каенркенр', '2014-01-16 05:18:39', '0000-00-00 00:00:00'),
(75, 1, 'popup', 'New request for logo', '/manager/manager/view/43', '', '2014-01-24 08:49:47', '0000-00-00 00:00:00'),
(76, 5, 'popup', 'New request for logo', '/manager/manager/view/43', '', '2014-01-24 08:49:47', '0000-00-00 00:00:00'),
(77, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:42:54', '0000-00-00 00:00:00'),
(78, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:42:54', '0000-00-00 00:00:00'),
(79, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:46:53', '0000-00-00 00:00:00'),
(80, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:46:53', '0000-00-00 00:00:00'),
(81, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:47:33', '0000-00-00 00:00:00'),
(82, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:47:33', '0000-00-00 00:00:00'),
(83, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:49:41', '0000-00-00 00:00:00'),
(84, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:49:41', '0000-00-00 00:00:00'),
(85, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:51:34', '0000-00-00 00:00:00'),
(86, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:51:34', '0000-00-00 00:00:00'),
(87, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:51:56', '0000-00-00 00:00:00'),
(88, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:51:56', '0000-00-00 00:00:00'),
(89, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:08', '0000-00-00 00:00:00'),
(90, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:08', '0000-00-00 00:00:00'),
(91, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:27', '0000-00-00 00:00:00'),
(92, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:27', '0000-00-00 00:00:00'),
(93, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:40', '0000-00-00 00:00:00'),
(94, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:40', '0000-00-00 00:00:00'),
(95, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:54', '0000-00-00 00:00:00'),
(96, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:52:54', '0000-00-00 00:00:00'),
(97, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:53:26', '0000-00-00 00:00:00'),
(98, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:53:26', '0000-00-00 00:00:00'),
(99, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:53:38', '0000-00-00 00:00:00'),
(100, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:53:38', '0000-00-00 00:00:00'),
(101, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:54:23', '0000-00-00 00:00:00'),
(102, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:54:23', '0000-00-00 00:00:00'),
(103, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:54:33', '0000-00-00 00:00:00'),
(104, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:54:33', '0000-00-00 00:00:00'),
(105, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:55:56', '0000-00-00 00:00:00'),
(106, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 09:55:56', '0000-00-00 00:00:00'),
(107, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:03:01', '0000-00-00 00:00:00'),
(108, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:03:01', '0000-00-00 00:00:00'),
(109, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:03:22', '0000-00-00 00:00:00'),
(110, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:03:22', '0000-00-00 00:00:00'),
(111, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:18:40', '0000-00-00 00:00:00'),
(112, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:18:40', '0000-00-00 00:00:00'),
(113, 1, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:20:34', '0000-00-00 00:00:00'),
(114, 5, 'email', 'prices changed', '', 'new prices', '2014-01-24 10:20:34', '0000-00-00 00:00:00'),
(115, 1, 'popup', 'New request for sito', '/manager/manager/view/44', '', '2014-01-27 09:55:27', '0000-00-00 00:00:00'),
(116, 5, 'popup', 'New request for sito', '/manager/manager/view/44', '', '2014-01-27 09:55:27', '0000-00-00 00:00:00'),
(117, 1, 'email', 'prices changed', '', 'new prices', '2014-01-27 09:57:56', '0000-00-00 00:00:00'),
(118, 5, 'email', 'prices changed', '', 'new prices', '2014-01-27 09:57:56', '0000-00-00 00:00:00'),
(119, 1, 'email', 'prices changed', '', 'new prices', '2014-01-27 10:25:31', '0000-00-00 00:00:00'),
(120, 5, 'email', 'prices changed', '', 'new prices', '2014-01-27 10:25:31', '0000-00-00 00:00:00'),
(121, 1, 'email', 'prices changed', '', 'new prices', '2014-01-28 03:04:51', '0000-00-00 00:00:00'),
(122, 5, 'email', 'prices changed', '', 'new prices', '2014-01-28 03:04:51', '0000-00-00 00:00:00'),
(123, 1, 'popup', 'New request for ', '/manager/manager/view/45', '', '2014-01-29 08:08:56', '0000-00-00 00:00:00'),
(124, 5, 'popup', 'New request for ', '/manager/manager/view/45', '', '2014-01-29 08:08:56', '0000-00-00 00:00:00'),
(125, 1, 'popup', 'New request for app', '/manager/manager/view/46', '', '2014-01-29 08:19:20', '0000-00-00 00:00:00'),
(126, 5, 'popup', 'New request for app', '/manager/manager/view/46', '', '2014-01-29 08:19:20', '0000-00-00 00:00:00'),
(127, 1, 'popup', 'New request for ', '/manager/manager/view/47', '', '2014-01-29 08:19:59', '0000-00-00 00:00:00'),
(128, 5, 'popup', 'New request for ', '/manager/manager/view/47', '', '2014-01-29 08:19:59', '0000-00-00 00:00:00'),
(129, 1, 'popup', 'New request for ', '/manager/manager/view/48', '', '2014-01-29 08:26:46', '0000-00-00 00:00:00'),
(130, 5, 'popup', 'New request for ', '/manager/manager/view/48', '', '2014-01-29 08:26:46', '0000-00-00 00:00:00'),
(131, 1, 'popup', 'New request for sito', '/manager/manager/view/49', '', '2014-02-03 10:14:04', '0000-00-00 00:00:00'),
(132, 5, 'popup', 'New request for sito', '/manager/manager/view/49', '', '2014-02-03 10:14:04', '0000-00-00 00:00:00'),
(133, 1, 'email', 'prices changed', '', 'new prices', '2014-02-03 10:14:58', '0000-00-00 00:00:00'),
(134, 5, 'email', 'prices changed', '', 'new prices', '2014-02-03 10:14:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dir` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `system` enum('TRUE','FALSE') DEFAULT 'FALSE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `uri` (`dir`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `modules`
--

INSERT INTO `modules` (`id`, `dir`, `name`, `description`, `system`) VALUES
(1, 'system', 'System', 'System functions', 'TRUE'),
(3, 'support', 'Support', 'Support module', 'FALSE'),
(12, 'request', 'Request', 'Request module', 'FALSE'),
(29, 'managment', 'Managment', 'Managment module', 'FALSE'),
(30, 'msg', 'Msg', 'Messager', 'TRUE'),
(32, 'manager', 'Manager', 'Managers module', 'FALSE');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `request_id` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_scope` varchar(150) DEFAULT NULL,
  `company_products` varchar(150) DEFAULT NULL,
  `company_logo` varchar(50) DEFAULT NULL,
  `company_style` varchar(50) DEFAULT NULL,
  `company_slogan` varchar(150) DEFAULT NULL,
  `target_audience` varchar(1000) DEFAULT NULL,
  `audience_ages` varchar(500) DEFAULT NULL,
  `audience_genders` varchar(500) DEFAULT NULL,
  `audience_locations` varchar(150) DEFAULT NULL,
  `competitors` varchar(2000) DEFAULT NULL,
  `site_types` varchar(2000) DEFAULT NULL,
  `navigation` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `request_id`, `created`, `updated`, `status`, `company_name`, `company_scope`, `company_products`, `company_logo`, `company_style`, `company_slogan`, `target_audience`, `audience_ages`, `audience_genders`, `audience_locations`, `competitors`, `site_types`, `navigation`) VALUES
(1, 43, '0000-00-00 00:00:00', '2014-02-03 10:31:55', 'new', 'е6гшен', 'гокегноке', 'гнокго', 'no', 'no', 'no', 'a:0:{}', 'a:2:{i:0;s:3:"all";i:1;s:5:"25-30";}', 'N;', 'a:1:{i:0;s:5:"Italy";}', 'a:0:{}', 'N;', 'a:6:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:9:"Main page";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:8:"About us";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:13:"About company";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:14:"About company2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";s:1:"0";s:5:"title";s:8:"About us";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:4;s:5:"title";s:9:"About us2";}}'),
(2, 44, '2014-01-27 09:55:27', '2014-01-31 03:28:17', 'new', 'rfthr', 'terhrth', 'rthrth', 'no', 'no', 'no', 'a:0:{}', 'N;', 'N;', 'a:1:{i:0;s:5:"Italy";}', 'a:0:{}', 'N;', 'a:14:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:16:"вапркепр";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:14:"Abікапвп";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:13:"керкерy";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:19:"керкеркpany2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";i:1;s:5:"title";s:14:"керкерк";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:4;s:5:"title";s:3:"9.0";}i:6;a:3:{s:6:"IDmenu";i:6;s:8:"IDparent";i:4;s:5:"title";s:3:"9.0";}i:7;a:3:{s:6:"IDmenu";i:7;s:8:"IDparent";s:1:"0";s:5:"title";s:9:"dftgbdftg";}i:8;a:3:{s:6:"IDmenu";i:8;s:8:"IDparent";i:7;s:5:"title";s:9:"rtfhrtgh2";}i:9;a:3:{s:6:"IDmenu";i:9;s:8:"IDparent";i:8;s:5:"title";s:12:"керкер";}i:10;a:3:{s:6:"IDmenu";i:10;s:8:"IDparent";i:8;s:5:"title";s:12:"керкер";}i:11;a:3:{s:6:"IDmenu";i:11;s:8:"IDparent";s:1:"0";s:5:"title";s:12:"керкер";}i:12;a:3:{s:6:"IDmenu";i:12;s:8:"IDparent";s:1:"0";s:5:"title";s:16:"керкерке";}i:13;a:3:{s:6:"IDmenu";i:13;s:8:"IDparent";i:12;s:5:"title";s:16:"керкерке";}}'),
(3, 45, '2014-01-29 08:08:55', '0000-00-00 00:00:00', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a:10:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:14:"Главная";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:19:"О компании";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:21:"О компании 2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";i:3;s:5:"title";s:3:"222";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:3;s:5:"title";s:5:"33333";}i:6;a:3:{s:6:"IDmenu";i:6;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:7;a:3:{s:6:"IDmenu";i:7;s:8:"IDparent";i:6;s:5:"title";s:15:"Про нас 2";}i:8;a:3:{s:6:"IDmenu";i:8;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}i:9;a:3:{s:6:"IDmenu";i:9;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}}'),
(4, 46, '2014-01-29 08:19:20', '0000-00-00 00:00:00', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a:10:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:14:"Главная";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:19:"О компании";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:21:"О компании 2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";i:3;s:5:"title";s:3:"222";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:3;s:5:"title";s:5:"33333";}i:6;a:3:{s:6:"IDmenu";i:6;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:7;a:3:{s:6:"IDmenu";i:7;s:8:"IDparent";i:6;s:5:"title";s:15:"Про нас 2";}i:8;a:3:{s:6:"IDmenu";i:8;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}i:9;a:3:{s:6:"IDmenu";i:9;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}}'),
(5, 47, '2014-01-29 08:19:59', '0000-00-00 00:00:00', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a:10:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:14:"Главная";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:19:"О компании";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:21:"О компании 2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";i:3;s:5:"title";s:3:"222";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:3;s:5:"title";s:5:"33333";}i:6;a:3:{s:6:"IDmenu";i:6;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:7;a:3:{s:6:"IDmenu";i:7;s:8:"IDparent";i:6;s:5:"title";s:15:"Про нас 2";}i:8;a:3:{s:6:"IDmenu";i:8;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}i:9;a:3:{s:6:"IDmenu";i:9;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}}'),
(6, 48, '2014-01-29 08:26:46', '0000-00-00 00:00:00', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a:10:{i:0;a:3:{s:6:"IDmenu";i:0;s:8:"IDparent";s:1:"0";s:5:"title";s:14:"Главная";}i:1;a:3:{s:6:"IDmenu";i:1;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:2;a:3:{s:6:"IDmenu";i:2;s:8:"IDparent";i:1;s:5:"title";s:19:"О компании";}i:3;a:3:{s:6:"IDmenu";i:3;s:8:"IDparent";i:1;s:5:"title";s:21:"О компании 2";}i:4;a:3:{s:6:"IDmenu";i:4;s:8:"IDparent";i:3;s:5:"title";s:3:"222";}i:5;a:3:{s:6:"IDmenu";i:5;s:8:"IDparent";i:3;s:5:"title";s:5:"33333";}i:6;a:3:{s:6:"IDmenu";i:6;s:8:"IDparent";s:1:"0";s:5:"title";s:13:"Про нас";}i:7;a:3:{s:6:"IDmenu";i:7;s:8:"IDparent";i:6;s:5:"title";s:15:"Про нас 2";}i:8;a:3:{s:6:"IDmenu";i:8;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}i:9;a:3:{s:6:"IDmenu";i:9;s:8:"IDparent";i:7;s:5:"title";s:4:"3333";}}'),
(7, 49, '2014-02-03 10:14:03', '0000-00-00 00:00:00', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `project_values`
--

CREATE TABLE IF NOT EXISTS `project_values` (
  `id` varchar(1024) DEFAULT NULL,
  `target_audiences` varchar(1024) DEFAULT NULL,
  `audience_ages` varchar(1024) DEFAULT NULL,
  `audience_genders` varchar(1024) DEFAULT NULL,
  `audience_occupations` varchar(1024) DEFAULT NULL,
  `audience_profits` varchar(1024) DEFAULT NULL,
  `audience_locations` varchar(1024) DEFAULT NULL,
  `site_types` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project_values`
--

INSERT INTO `project_values` (`id`, `target_audiences`, `audience_ages`, `audience_genders`, `audience_occupations`, `audience_profits`, `audience_locations`, `site_types`) VALUES
('1', 'a:10:{i:0;a:2:{s:2:"id";i:0;s:5:"value";s:8:"Students";}i:1;a:2:{s:2:"id";i:1;s:5:"value";s:11:"Businessman";}i:2;a:2:{s:2:"id";i:2;s:5:"value";s:5:"Heads";}i:3;a:2:{s:2:"id";i:3;s:5:"value";s:10:"Specialist";}i:4;a:2:{s:2:"id";i:4;s:5:"value";s:9:"Employees";}i:5;a:2:{s:2:"id";i:5;s:5:"value";s:5:"Labor";}i:6;a:2:{s:2:"id";i:6;s:5:"value";s:10:"Housewives";}i:7;a:2:{s:2:"id";i:7;s:5:"value";s:10:"Pensioners";}i:8;a:2:{s:2:"id";i:8;s:5:"value";s:8:"Children";}i:9;a:2:{s:2:"id";i:9;s:5:"value";s:6:"Others";}}', 'a:8:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:3:"all";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:4:"0-14";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:5:"15-18";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:5:"19-24";}i:4;a:2:{s:2:"id";i:5;s:5:"value";s:5:"25-30";}i:5;a:2:{s:2:"id";i:6;s:5:"value";s:5:"31-45";}i:6;a:2:{s:2:"id";i:7;s:5:"value";s:5:"45-60";}i:7;a:2:{s:2:"id";i:8;s:5:"value";s:5:"60-80";}}', 'a:3:{i:0;a:2:{s:2:"id";i:0;s:5:"value";s:4:"both";}i:1;a:2:{s:2:"id";i:1;s:5:"value";s:4:"male";}i:2;a:2:{s:2:"id";i:2;s:5:"value";s:6:"female";}}', NULL, NULL, 'a:5:{i:0;a:2:{s:2:"id";i:0;s:5:"value";s:7:"England";}i:1;a:2:{s:2:"id";i:1;s:5:"value";s:7:"Germany";}i:2;a:2:{s:2:"id";i:2;s:5:"value";s:6:"Poland";}i:3;a:2:{s:2:"id";i:3;s:5:"value";s:6:"Russia";}i:4;a:2:{s:2:"id";i:4;s:5:"value";s:7:"Ukraine";}}', 'a:10:{i:0;a:2:{s:2:"id";i:0;s:5:"value";s:4:"News";}i:1;a:2:{s:2:"id";i:1;s:5:"value";s:7:"Emailer";}i:2;a:2:{s:2:"id";i:2;s:5:"value";s:7:"Catalog";}i:3;a:2:{s:2:"id";i:3;s:5:"value";s:11:"Shop module";}i:4;a:2:{s:2:"id";i:4;s:5:"value";s:6:"Search";}i:5;a:2:{s:2:"id";i:5;s:5:"value";s:3:"FAQ";}i:6;a:2:{s:2:"id";i:6;s:5:"value";s:12:"Promo-blocks";}i:7;a:2:{s:2:"id";i:7;s:5:"value";s:18:"Users registration";}i:8;a:2:{s:2:"id";i:8;s:5:"value";s:14:"Access control";}i:9;a:2:{s:2:"id";i:9;s:5:"value";s:13:"Feedback form";}}');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `checked` varchar(50) DEFAULT 'FALSE',
  `hash` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `type_features` varchar(150) DEFAULT NULL,
  `hosting` varchar(50) DEFAULT NULL,
  `old_site` varchar(50) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `services` varchar(50) DEFAULT NULL,
  `pages_count` varchar(50) DEFAULT NULL,
  `tasks` text,
  `functions` text,
  `devices` varchar(150) DEFAULT NULL,
  `style` varchar(50) DEFAULT NULL,
  `colors` varchar(150) DEFAULT NULL,
  `like_sites` varchar(350) DEFAULT NULL,
  `dislike_sites` varchar(350) DEFAULT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `client_sec_name` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_phone` varchar(50) DEFAULT NULL,
  `design_price` int(10) DEFAULT NULL,
  `dev_price` int(10) DEFAULT NULL,
  `total_price` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `created`, `updated`, `status`, `checked`, `hash`, `type`, `type_features`, `hosting`, `old_site`, `budget`, `category`, `services`, `pages_count`, `tasks`, `functions`, `devices`, `style`, `colors`, `like_sites`, `dislike_sites`, `client_name`, `client_sec_name`, `client_email`, `client_phone`, `design_price`, `dev_price`, `total_price`) VALUES
(1, '2013-12-27 03:22:15', '2013-12-27 05:03:54', 'active', 'FALSE', 'e8bb1574fe31ba65797a7b665b70ed58', 'logo', 'N;', 'yes', 'werfwetger', '500-700', 'общение', 'сервисы', '7 - 12', 'eghrthrtyjty', 'rtfhdtyrfg gjndf.tgjsebklrsergbservj aselrgj dr;exfnkxfl ;yidto dfnl ;gaehrgth; skzailgnrt&#039;mht', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'общение', 'a:3:{i:0;s:1:"4";i:1;s:1:"5";i:2;s:2:"10";}', 'a:5:{i:0;s:0:"";i:1;s:14:"dty yjfkfyujky";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:16:"dfdfrn tlghkrjtg";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'dtgh rtfht', 'dt yujhdtyjh', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(2, '2013-12-27 04:12:11', '2013-12-27 04:12:31', 'active', 'FALSE', 'b262c8daa568de4ac098f072be47676e', 'sito', 'N;', 'no', '', '1500-2000', 'персональный', 'сервисы', '12 - 20', 'Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt.', 'Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.\n\nNulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.\n\nProin eget tortor risus. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:1:"3";i:1;s:1:"4";}', 'a:5:{i:0;s:21:"http://kohana/request";i:1;s:21:"http://kohana/request";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:21:"http://kohana/request";i:3;s:0:"";i:4;s:0:"";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(3, '2013-12-27 04:21:12', '2013-12-27 04:35:32', 'active', 'FALSE', 'a1ded24bf57addac96ba39618fa98e27', 'logo', 'N;', 'no', '', '500-700', 'товары', 'сервисы', '12 - 20', 'http://kohana/request', 'http://kohana/request', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"3";i:1;s:1:"9";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'tyjhe', 'tyjrherthyjk', 'admin@mail.com', '44 (076) 4353434', NULL, NULL, NULL),
(4, '2013-12-27 04:28:06', '2013-12-27 04:28:06', 'new', 'FALSE', '49239b7fe3c11198cc8d1875c5962b5c', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.\n\nNulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'a:1:{i:0;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"31";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Westside', '', 'it-lutsk@ukr.net', '38093554433', NULL, NULL, NULL),
(5, '2013-12-27 04:28:19', '2013-12-27 04:28:19', 'new', 'FALSE', '0d01e4de7d54883442c3b4a0eab63da1', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.\n\nNulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'a:1:{i:0;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"31";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Westside', '', 'it-lutsk@ukr.net', '38093554433', NULL, NULL, NULL),
(6, '2013-12-27 04:29:03', '2013-12-27 04:29:03', 'new', 'FALSE', '35b6b13b3570983b4e2e0ce0893ba56c', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.\n\nNulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'a:1:{i:0;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"31";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Westside', '', 'it-lutsk@ukr.net', '38093554433', NULL, NULL, NULL),
(7, '2013-12-27 04:29:27', '2013-12-27 04:29:27', 'new', 'FALSE', '928e892197be836c5a13af5314933019', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.\n\nNulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'a:1:{i:0;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"31";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Westside', '', 'it-lutsk@ukr.net', '38093554433', NULL, NULL, NULL),
(8, '2013-12-27 04:29:56', '2013-12-27 04:29:56', 'new', 'FALSE', '06fdb8efe9936e2169dbc17b1d81dd8b', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.\n\nNulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'a:1:{i:0;s:6:"tablet";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"31";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Westside', '', 'it-lutsk@ukr.net', '38093554433', NULL, NULL, NULL),
(9, '2013-12-27 04:30:55', '2013-12-27 04:30:55', 'new', 'FALSE', 'ae69af434cf40dfca6677f23e8222293', 'sito', 'N;', 'no', '', '500-700', 'персональный', 'сервисы', '5 - 7', 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt.', 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt.', 'a:1:{i:0;s:8:"standart";}', 'бизнес', 'a:2:{i:0;s:1:"3";i:1;s:1:"7";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(10, '2013-12-27 05:00:07', '2013-12-27 05:00:24', 'active', 'FALSE', 'ab85c3ce9f962503e22f24f7e52f5030', 'brand_book', 'N;', 'no', 'http://kohana/request', '500-700', 'персональный', 'сервисы', '12 - 20', 'Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat.\n\nCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.\n\nVestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'a:3:{i:0;s:8:"standart";i:1;s:6:"tablet";i:2;s:6:"mobile";}', 'общение', 'a:2:{i:0;s:1:"2";i:1;s:2:"11";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'Bill', 'Gates', 'westside@mail.com', '44 (076) 4353434', NULL, NULL, NULL),
(11, '2013-12-27 05:35:07', '2013-12-27 05:35:07', 'new', 'FALSE', '7499075025a55c1c92b1aefc7116c93d', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:5:{i:0;s:0:"";i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(12, '2013-12-27 05:36:31', '2013-12-27 05:36:31', 'pending', 'FALSE', 'a184a5ccef8ece54a48ef96bda2035c0', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:5:{i:0;s:0:"";i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(13, '2013-12-27 05:44:01', '2013-12-27 05:44:01', 'new', 'FALSE', 'b0b6459486d662537418eaaf05434496', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:5:{i:0;s:0:"";i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(14, '2013-12-27 05:44:56', '2013-12-27 05:44:56', 'complete', 'FALSE', '59d6f5f546f42e6f4eb4ffc4dc985411', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:5:{i:0;s:0:"";i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(15, '2013-12-27 05:45:20', '2013-12-27 05:45:20', 'new', 'FALSE', '4e941f4caa27fd2623298addf60181d6', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:5:{i:0;s:0:"";i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(16, '2013-12-27 05:46:09', '2013-12-27 05:46:09', 'pending', 'FALSE', '2f509bc88ede41f9ce751d575c5a92a8', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(17, '2013-12-27 05:46:49', '2013-12-27 05:46:49', 'new', 'FALSE', 'b32ec8a54895c29da0802e812ff04e92', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(18, '2013-12-27 05:59:40', '2013-12-27 05:59:40', 'active', 'FALSE', 'a24bcb0c40e2b800bb14ab9133ccffc3', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(19, '2013-12-27 07:16:05', '2013-12-27 07:16:05', 'new', 'FALSE', '86fe622ba0031e9a78846c0a0a6a561c', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(20, '2013-12-27 07:23:51', '2013-12-27 07:23:51', 'complete', 'FALSE', '6a8e014424064ab95e3a11a080d407eb', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(21, '2013-12-27 07:27:07', '2013-12-27 07:27:07', 'new', 'FALSE', '635fa66e3d1990130a468bf7c5502d96', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(22, '2013-12-27 07:28:02', '2013-12-27 07:28:02', 'new', 'FALSE', '7469d715488ea806f331e8c89bb9517b', 'app', 'a:1:{i:0;s:11:"app_android";}', 'no', '', '500-700', 'общение', 'сервисы', '12 - 20', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'foreach ($array[&#039;like&#039;] as $key=&gt;$value)\n            {\n                if ($value === &#039;&#039;)\n                {\n                    unset($array[$key]);\n                }\n            }', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:2:{i:1;s:4:"dghr";i:2;s:12:"rfthrthrthrt";}', 'a:2:{i:3;s:12:"rtyjhrthrtjh";i:4;s:12:"tyjhnrtjhrjh";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '44 (076) 4353434345', NULL, NULL, NULL),
(23, '2013-12-30 09:22:42', '2013-12-30 09:22:42', 'complete', 'FALSE', 'be948086961c45542f0810213ca4e9a6', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(24, '2013-12-30 09:24:09', '2013-12-30 09:24:09', 'new', 'FALSE', '1a8d6aadabe8863b258a5882e7869afd', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(25, '2013-12-30 09:25:30', '2013-12-30 09:25:30', 'new', 'FALSE', '767d6edef561655c742281c1f258ffe0', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(26, '2013-12-30 09:27:29', '2013-12-30 09:27:29', 'new', 'FALSE', '4d40370d5af650435e550e1830217965', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(27, '2013-12-30 09:28:15', '2013-12-30 09:28:15', 'complete', 'FALSE', '28ac8c8058cad9d1856639fb3f79a8f5', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(28, '2013-12-30 09:28:18', '2013-12-30 09:28:18', 'new', 'FALSE', '11300387d85050a0a9f4c2708b81a97d', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(29, '2013-12-30 09:28:38', '2013-12-30 09:28:38', 'new', 'FALSE', '2fac535d8c48c21e3b0f772be5b37a22', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(30, '2013-12-30 09:31:49', '2013-12-30 09:31:49', 'pending', 'FALSE', 'a02c0625a6a5572d1b165d2114f88c04', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(31, '2013-12-30 09:32:25', '2013-12-30 09:32:25', 'new', 'FALSE', 'be53faa2d73b4e0ed8da80eee42bb93e', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(32, '2013-12-30 09:37:35', '2013-12-30 09:37:35', 'new', 'FALSE', '38f814beb30eb69f7ac1fb7df2f3c97a', 'logo', 'N;', 'no', 'чапрапноргно', '500-700', 'бизнес', 'сервисы', '12 - 20', 'канолавгно', 'кгоканголнго', 'a:1:{i:0;s:6:"tablet";}', 'творчество', 'a:3:{i:0;s:1:"3";i:1;s:1:"5";i:2;s:2:"11";}', 'a:2:{i:0;s:22:"гоанголагно";i:1;s:20:"англаплагл";}', 'a:1:{i:2;s:26:"глканглокангл";}', 'вагноагно', 'агновено', 'westside@mail.com', '+38(050)111-11-11', NULL, NULL, NULL),
(33, '2013-12-30 09:41:44', '2013-12-30 09:41:44', 'new', 'FALSE', '436d9ffa709aba9eb71b53e6e9df8a94', 'sito', 'N;', 'no', '', '300-500', 'общение', 'сервисы', '7 - 12', 'RFYHJUYJ', 'YTJYUJ', 'a:2:{i:0;s:6:"tablet";i:1;s:6:"mobile";}', 'общение', 'a:2:{i:0;s:2:"11";i:1;s:2:"12";}', 'a:1:{i:1;s:8:"GUJRFTGH";}', 'a:2:{i:3;s:3:"UYJ";i:4;s:10:"tyujyujkuy";}', 'rthrhy', 'tgyjrtyj', 'westside@mail.com', '546547465633456', NULL, NULL, NULL),
(34, '2013-12-30 09:42:50', '2013-12-30 09:42:50', 'active', 'FALSE', 'd253380739683f8bc69d1ebcbca531d6', 'sito', 'N;', 'no', '', '300-500', 'общение', 'сервисы', '7 - 12', 'RFYHJUYJ', 'YTJYUJ', 'a:2:{i:0;s:6:"tablet";i:1;s:6:"mobile";}', 'общение', 'a:2:{i:0;s:2:"11";i:1;s:2:"12";}', 'a:1:{i:1;s:8:"GUJRFTGH";}', 'a:2:{i:3;s:3:"UYJ";i:4;s:10:"tyujyujkuy";}', 'rthrhy', 'tgyjrtyj', 'westside@mail.com', '546547465633456', NULL, NULL, NULL),
(35, '2013-12-30 09:46:56', '2013-12-30 09:46:56', 'new', 'FALSE', '11687a7b9ee703904df55521d06cf022', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'wrfgtrfhg', 'rfhyftg', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:1:{i:3;s:10:"ftgbhrtfgy";}', 'a:0:{}', 'fgdgh', 'fthdrgf', 'westside@mail.com', '45634523424', NULL, NULL, NULL),
(36, '2013-12-30 09:48:34', '2013-12-30 09:48:34', 'new', 'FALSE', 'e60b392b50bbb00c5906cda932e67444', 'app', 'a:1:{i:0;s:7:"app_ios";}', 'no', '', '100-300', 'общение', 'сервисы', '7 - 12', 'dfhftgh', 'fthdfrthdftjhftjhfrtjh', 'a:2:{i:0;s:6:"tablet";i:1;s:6:"mobile";}', 'бизнес', 'a:2:{i:0;s:2:"17";i:1;s:2:"18";}', 'a:1:{i:1;s:5:"tyujh";}', 'a:1:{i:2;s:11:"rfturftuyhr";}', 'gyjf', 'fthfth', 'admin@mail.com', '44 (076) 4353434', NULL, NULL, NULL),
(37, '2013-12-30 09:48:52', '2013-12-30 09:48:52', 'pending', 'FALSE', '28a2d9f55e9c13bb41d7905a371ce06c', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'wrfgtrfhg', 'rfhyftg', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:1:{i:3;s:10:"ftgbhrtfgy";}', 'a:0:{}', 'fgdgh', 'fthdrgf', 'westside@mail.com', '45634523424', NULL, NULL, NULL),
(38, '2013-12-30 09:49:01', '2013-12-30 09:49:01', 'new', 'FALSE', '1403c8b9f69efa66428a330f454c6b2a', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '7 - 12', 'wrfgtrfhg', 'rfhyftg', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:2:"16";i:1;s:2:"17";}', 'a:1:{i:3;s:10:"ftgbhrtfgy";}', 'a:0:{}', 'fgdgh', 'fthdrgf', 'westside@mail.com', '45634523424', NULL, NULL, NULL),
(39, '2013-12-30 09:49:30', '2013-12-30 09:49:30', 'new', 'FALSE', '8e67418639e32ed7cd71d9cab7be695e', 'sito', 'N;', 'no', '', '700-1000', 'бизнес', 'сервисы', '1 - 5', 'yhrfth', 'rtfjhrhert', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'онлайн', 'a:3:{i:0;s:2:"18";i:1;s:2:"22";i:2;s:2:"24";}', 'a:1:{i:1;s:9:"eryhedryg";}', 'a:1:{i:1;s:6:"yhergy";}', 'fgdgh', 'fthdrgf', 'westside@mail.com', '45634523424', NULL, NULL, NULL),
(40, '2013-12-30 09:49:34', '2013-12-30 09:49:34', 'active', 'FALSE', 'd774c86ad34b99e2567d22ebafc0b766', 'sito', 'N;', 'no', '', '300-500', 'общение', 'сервисы', '7 - 12', 'RFYHJUYJ', 'YTJYUJ', 'a:2:{i:0;s:6:"tablet";i:1;s:6:"mobile";}', 'общение', 'a:2:{i:0;s:2:"11";i:1;s:2:"12";}', 'a:1:{i:1;s:8:"GUJRFTGH";}', 'a:2:{i:3;s:3:"UYJ";i:4;s:10:"tyujyujkuy";}', 'rthrhy', 'tgyjrtyj', 'westside@mail.com', '546547465633456', NULL, NULL, NULL),
(41, '2013-12-30 09:49:51', '2013-12-30 09:49:51', 'new', 'FALSE', 'a7661001ed9cbf0b298458aaa2cb21d3', 'sito', 'N;', 'no', '', '700-1000', 'бизнес', 'сервисы', '1 - 5', 'yhrfth', 'rtfjhrhert', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'онлайн', 'a:3:{i:0;s:2:"18";i:1;s:2:"22";i:2;s:2:"24";}', 'a:1:{i:1;s:9:"eryhedryg";}', 'a:1:{i:1;s:6:"yhergy";}', 'fgdgh', 'fthdrgf', 'westside@mail.com', '45634523424', 500, 150, 1200),
(42, '2014-01-24 08:47:12', '2014-01-24 08:47:12', 'new', 'FALSE', 'f6f1e6c0275186063b4bc4dc0901c1a5', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '5 - 7', 'dgdrged', 'ghfghfthrf', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:1:"2";i:1;s:1:"3";}', 'a:3:{i:0;s:8:"fyjhrfth";i:1;s:21:"http://kohana/request";i:2;s:21:"http://kohana/request";}', 'a:2:{i:0;s:21:"http://kohana/request";i:1;s:21:"http://kohana/request";}', 'New', 'Brief', 'westside@mail.com', '+38(050)111-11-11', 550, 700, 1800),
(43, '2014-01-24 08:49:47', '2014-01-24 08:49:47', 'new', 'FALSE', 'fe5d91108d3eb23a3e0228ff24e24898', 'logo', 'N;', 'no', '', '500-700', 'общение', 'сервисы', '5 - 7', 'dgdrged', 'ghfghfthrf', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'бизнес', 'a:2:{i:0;s:1:"2";i:1;s:1:"3";}', 'a:3:{i:0;s:8:"fyjhrfth";i:1;s:21:"http://kohana/request";i:2;s:21:"http://kohana/request";}', 'a:2:{i:0;s:21:"http://kohana/request";i:1;s:21:"http://kohana/request";}', 'New', 'Brief', 'westside@mail.com', '+38(050)111-11-11', 750, 600, 2200),
(44, '2014-01-27 09:55:27', '2014-01-27 09:55:27', 'new', 'FALSE', '7e40d980c2e83e7e6724334238453d88', 'sito', 'N;', 'no', '', '500-700', 'бизнес', 'сервисы', '5 - 7', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt.\n\nDonec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat.', 'a:2:{i:0;s:8:"standart";i:1;s:6:"tablet";}', 'творчество', 'a:5:{i:0;s:1:"2";i:1;s:1:"3";i:2;s:1:"4";i:3;s:2:"10";i:4;s:2:"11";}', 'a:1:{i:0;s:21:"http://kohana/request";}', 'a:2:{i:2;s:21:"http://kohana/request";i:3;s:21:"http://kohana/request";}', 'Roman', 'Kovalchuk', 'westside@mail.com', '+38(050)111-11-11', 700, 566, 1800),
(45, '2014-01-29 08:08:55', '2014-01-29 08:08:55', 'new', 'FALSE', 'a8477e032b7ef0675d10ab7e6d37b3ac', NULL, 'N;', NULL, '', NULL, NULL, NULL, NULL, '', '', 'N;', NULL, 'N;', 'a:0:{}', 'a:0:{}', '', '', '', '', NULL, NULL, NULL),
(46, '2014-01-29 08:19:20', '2014-01-29 08:19:20', 'new', 'FALSE', '81bafc83067677c3da5514d08ff31efe', 'app', 'N;', NULL, '', NULL, NULL, NULL, NULL, '', '', 'N;', NULL, 'N;', 'a:0:{}', 'a:0:{}', '', '', 'westside@mail.com', '', NULL, NULL, NULL),
(47, '2014-01-29 08:19:59', '2014-01-29 08:19:59', 'new', 'FALSE', '16506414c27fc2cc23b1c4fb233f367d', NULL, 'N;', NULL, '', NULL, NULL, NULL, NULL, '', '', 'N;', NULL, 'N;', 'a:0:{}', 'a:0:{}', '', '', 'westside@mail.com', '', NULL, NULL, NULL),
(48, '2014-01-29 08:26:46', '2014-01-29 08:26:46', 'new', 'FALSE', '54176c56b47344f28f4d59f8427c5d09', NULL, 'N;', NULL, '', NULL, NULL, NULL, NULL, '', '', 'N;', NULL, 'N;', 'a:0:{}', 'a:0:{}', '', '', 'westside@mail.com', '', NULL, NULL, NULL),
(49, '2014-02-03 10:14:03', '2014-02-03 10:14:03', 'new', 'FALSE', '8571e6b5b410c0c984b82391e89b80bd', 'sito', 'N;', 'no', 'http://goox.com', '200-400', 'Products', 'Card of the site', '20 or more', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit.\n\nProin eget tortor risus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus.', 'a:2:{i:0;s:7:"Desktop";i:1;s:6:"Tablet";}', 'Designed in the Web 2', 'a:3:{i:0;s:1:"3";i:1;s:1:"4";i:2;s:1:"5";}', 'a:1:{i:0;s:21:"http://kohana/request";}', 'a:3:{i:0;s:21:"http://kohana/request";i:1;s:21:"http://kohana/request";i:2;s:21:"http://kohana/request";}', 'Bill', 'Gates', 'microsoft@mail.com', '44 (076) 4353434345', 300, 450, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `request_info`
--

CREATE TABLE IF NOT EXISTS `request_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `request_id` int(10) unsigned NOT NULL,
  `remote_addr` int(10) DEFAULT NULL,
  `remote_host` varchar(50) DEFAULT NULL,
  `user_agent` varchar(250) DEFAULT NULL,
  `refferer` varchar(250) DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL,
  `browser_version` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `platform_version` varchar(50) DEFAULT NULL,
  `platform_description` varchar(50) DEFAULT NULL,
  `mobile_device` varchar(50) DEFAULT NULL,
  `device_name` varchar(50) DEFAULT NULL,
  `device_maker` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `request_info`
--

INSERT INTO `request_info` (`id`, `request_id`, `remote_addr`, `remote_host`, `user_agent`, `refferer`, `browser`, `browser_version`, `platform`, `platform_version`, `platform_description`, `mobile_device`, `device_name`, `device_maker`) VALUES
(1, 29, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', NULL, '0', 'unknown', 'unknown'),
(2, 30, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', NULL, '0', 'unknown', 'unknown'),
(3, 31, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(4, 32, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(5, 33, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko', 'http://kohana/request', 'Default Browser', '0.0', 'unknown', 'unknown', 'unknown', '0', 'unknown', 'unknown'),
(6, 34, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko', 'http://kohana/request', 'Default Browser', '0.0', 'unknown', 'unknown', 'unknown', '0', 'unknown', 'unknown'),
(7, 35, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(8, 36, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(9, 37, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 OPR/18.0.1284.68', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(10, 38, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 OPR/18.0.1284.68', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(11, 39, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 OPR/18.0.1284.68', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(12, 40, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 'http://kohana/request', 'Default Browser', '0.0', 'unknown', 'unknown', 'unknown', '0', 'unknown', 'unknown'),
(13, 41, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 OPR/18.0.1284.68', 'http://kohana/request', 'Chrome', '31.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(14, 45, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1797.2 Safari/537.36', 'http://kohana/request', 'Chrome', '0.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(15, 46, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1797.2 Safari/537.36', 'http://kohana/request', 'Chrome', '0.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(16, 47, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1797.2 Safari/537.36', 'http://kohana/request', 'Chrome', '0.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(17, 48, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1797.2 Safari/537.36', 'http://kohana/request', 'Chrome', '0.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown'),
(18, 49, 2130706433, NULL, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1809.0 Safari/537.36', 'http://kohana/request', 'Chrome', '0.0', 'Win7', '6.1', 'Windows 7', '0', 'unknown', 'unknown');

-- --------------------------------------------------------

--
-- Структура таблицы `request_values`
--

CREATE TABLE IF NOT EXISTS `request_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `types` varchar(1024) DEFAULT NULL,
  `budgets` varchar(1024) DEFAULT NULL,
  `categories` varchar(1024) DEFAULT NULL,
  `services` varchar(1024) DEFAULT NULL,
  `pages_counts` varchar(1024) DEFAULT NULL,
  `devices` varchar(1024) DEFAULT NULL,
  `styles` varchar(1024) DEFAULT NULL,
  `statuses` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `request_values`
--

INSERT INTO `request_values` (`id`, `types`, `budgets`, `categories`, `services`, `pages_counts`, `devices`, `styles`, `statuses`) VALUES
(1, 'a:5:{i:0;a:4:{s:2:"id";i:1;s:4:"name";s:4:"Sito";s:5:"value";s:4:"sito";s:8:"features";N;}i:1;a:4:{s:2:"id";i:2;s:4:"name";s:3:"App";s:5:"value";s:3:"app";s:8:"features";a:2:{i:0;a:2:{s:4:"name";s:3:"iOS";s:5:"value";s:7:"app_ios";}i:1;a:2:{s:4:"name";s:7:"Android";s:5:"value";s:11:"app_android";}}}i:2;a:4:{s:2:"id";i:3;s:4:"name";s:4:"Logo";s:5:"value";s:4:"logo";s:8:"features";N;}i:3;a:4:{s:2:"id";i:4;s:4:"name";s:10:"Brand book";s:5:"value";s:10:"brand_book";s:8:"features";N;}i:4;a:4:{s:2:"id";i:5;s:4:"name";s:2:"PR";s:5:"value";s:2:"pr";s:8:"features";N;}}', 'a:4:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:7:"100-200";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:7:"200-400";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:8:"400-1000";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:13:"1000 and more";}}', 'a:7:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:8:"Personal";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:8:"Products";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:13:"Communication";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:8:"Business";}i:4;a:2:{s:2:"id";i:5;s:5:"value";s:10:"Creativity";}i:5;a:2:{s:2:"id";i:6;s:5:"value";s:7:"Society";}i:6;a:2:{s:2:"id";i:7;s:5:"value";s:8:"Services";}}', 'a:7:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:9:"Inform me";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:16:"Card of the site";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:18:"Blog Portal - Shop";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:3:"CRM";}i:4;a:2:{s:2:"id";i:5;s:5:"value";s:12:"Landing page";}i:5;a:2:{s:2:"id";i:6;s:5:"value";s:10:"Promo site";}i:5;a:2:{s:2:"id";i:7;s:5:"value";s:4:"Shop";}}', 'a:5:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:3:"1-5";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:3:"5-7";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:4:"7-12";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:5:"12-20";}i:4;a:2:{s:2:"id";i:5;s:5:"value";s:10:"20 or more";}}', 'a:3:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:7:"Desktop";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:6:"Tablet";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:6:"Mobile";}}', 'a:7:{i:0;a:2:{s:2:"id";i:1;s:5:"value";s:10:"Minimalism";}i:1;a:2:{s:2:"id";i:2;s:5:"value";s:18:"Information design";}i:2;a:2:{s:2:"id";i:3;s:5:"value";s:13:"Style Affairs";}i:3;a:2:{s:2:"id";i:4;s:5:"value";s:21:"Designed in the Web 2";}i:4;a:2:{s:2:"id";i:5;s:5:"value";s:9:"Promostil";}i:5;a:2:{s:2:"id";i:6;s:5:"value";s:27:"Designed in the style flash";}i:6;a:2:{s:2:"id";i:7;s:5:"value";s:8:"Creative";}}', 'a:4:{i:0;s:3:"new";i:1;s:6:"active";i:2;s:7:"pending";i:3;s:8:"complete";}');

-- --------------------------------------------------------

--
-- Структура таблицы `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_id` int(10) unsigned NOT NULL,
  `value` varchar(32) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Дамп данных таблицы `rights`
--

INSERT INTO `rights` (`id`, `module_id`, `value`, `description`) VALUES
(1, 3, 'allowed', 'View support'),
(2, 3, 'show_all', 'Show all'),
(3, 3, 'show_own', 'Show_own'),
(4, 1, 'allowed', 'View system pages'),
(8, 12, 'allowed', 'Send request'),
(22, 29, 'allowed', 'Access to module managment'),
(23, 29, 'show_all', 'Show all users'),
(29, 1, 'modules', 'Install modules'),
(30, 1, 'profile', 'View own profile'),
(31, 30, 'allowed', 'Access to messager'),
(33, 32, 'allowed', 'Access to module managers'),
(34, 12, 'set_dev_price', 'Can set dev price'),
(35, 12, 'set_design_price', 'Can set design price'),
(36, 12, 'set_total_price', 'Can set total price'),
(37, 12, 'check_brief', 'Can check brief');

-- --------------------------------------------------------

--
-- Структура таблицы `rights_roles`
--

CREATE TABLE IF NOT EXISTS `rights_roles` (
  `right_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`right_id`,`role_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rights_roles`
--

INSERT INTO `rights_roles` (`right_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(8, 1),
(22, 1),
(30, 1),
(31, 1),
(2, 2),
(3, 2),
(22, 2),
(23, 2),
(29, 2),
(31, 2),
(33, 2),
(34, 2),
(35, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'manager', 'Manager user'),
(4, 'block', 'Banned user'),
(5, 'designer', 'Designer user');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(5, 1),
(7, 1),
(13, 1),
(1, 2),
(1, 3),
(5, 3),
(1, 4),
(6, 4),
(1, 5),
(7, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_id` int(2) NOT NULL,
  `priority_id` int(2) NOT NULL,
  `status_id` int(2) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `type_id`, `priority_id`, `status_id`, `subject`, `description`, `created`, `updated`) VALUES
(1, 1, 3, 2, 1, '87ik8uj', '', '2013-12-25 08:57:54', '2013-12-27 10:10:28'),
(2, 1, 3, 2, 3, 'аоао', '', '2013-12-30 04:31:59', '2013-12-30 04:32:41'),
(3, 1, 3, 2, 1, 'кегнркегнрке', '', '2014-01-16 05:18:39', '2014-01-16 05:18:39');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets_answers`
--

CREATE TABLE IF NOT EXISTS `tickets_answers` (
  `ticket_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tickets_answers`
--

INSERT INTO `tickets_answers` (`ticket_id`, `answer_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(2, 10),
(2, 11),
(2, 12),
(3, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_answers`
--

CREATE TABLE IF NOT EXISTS `ticket_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `ticket_answers`
--

INSERT INTO `ticket_answers` (`id`, `user_id`, `description`, `created`) VALUES
(1, 1, 'tyjtyj', '2013-12-25 08:57:54'),
(2, 1, 'ghumktyjhuy', '2013-12-25 08:58:07'),
(3, 1, 'ftghnfh', '2013-12-25 08:58:32'),
(4, 1, 'gyjhtyjhr', '2013-12-25 08:58:52'),
(5, 1, 'оргорекрокено', '2013-12-27 10:10:02'),
(6, 1, 'еагнркегн', '2013-12-27 10:10:12'),
(7, 1, 'пглен', '2013-12-27 10:10:15'),
(8, 1, 'гншднекегокег', '2013-12-27 10:10:19'),
(9, 1, 'нгленш', '2013-12-27 10:10:28'),
(10, 1, 'апорьао', '2013-12-30 04:31:59'),
(11, 1, 'пнорапо', '2013-12-30 04:32:28'),
(12, 1, 'опополгнлнрш', '2013-12-30 04:32:33'),
(13, 1, 'каенркенр', '2014-01-16 05:18:39');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_files`
--

CREATE TABLE IF NOT EXISTS `ticket_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `url` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_priorities`
--

CREATE TABLE IF NOT EXISTS `ticket_priorities` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `ticket_priorities`
--

INSERT INTO `ticket_priorities` (`id`, `value`) VALUES
(1, 'Низкий'),
(2, 'Нормальный'),
(3, 'Высокий');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_statuses`
--

CREATE TABLE IF NOT EXISTS `ticket_statuses` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `ticket_statuses`
--

INSERT INTO `ticket_statuses` (`id`, `value`) VALUES
(1, 'открыт'),
(2, 'есть ответ'),
(3, 'закрыт');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_types`
--

CREATE TABLE IF NOT EXISTS `ticket_types` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `ticket_types`
--

INSERT INTO `ticket_types` (`id`, `value`) VALUES
(1, 'Баг'),
(2, 'Пожелания'),
(3, 'Вопрос');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `phone`, `logins`, `last_login`) VALUES
(1, 'admin@mail.com', 'admin', 'd1599e2c7f53d62209184c3ea34661860b8ad216afc927897892de526bd2030e', 's:19:"44 (076) 4353434345";', 35, 1391416170),
(5, 'manager@mail.com', 'manager', '1b28d7c86fd93feeb1483b883588a62d5f7facedd6415cfa178b6536f6a37350', 's:17:"+38(050)111-11-11";', 1, 1390580459),
(6, 'block@user.com', 'block', 'e61c2b820efcbbd4b955fcad24598fb5a5ae405c72b12dfb317f4be73c1cdad9', 's:13:"3457834644335";', 0, NULL),
(7, 'designer@mail.com', 'designer', '96e1651b4ed47295fb37e0894eef8b12dff193de300b3b126fb958956b33ddd4', 's:11:"38093554433";', 0, NULL),
(13, 'westside@mail.com', 'user', '9a407bfcf19b23b9a8e25e3ece35732059069a10840c2aed0c545b130cc51687', 's:11:"38093554433";', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_modules`
--

CREATE TABLE IF NOT EXISTS `users_modules` (
  `user_id` int(10) unsigned NOT NULL,
  `module_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`module_id`),
  KEY `module_id` (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_modules`
--

INSERT INTO `users_modules` (`user_id`, `module_id`) VALUES
(1, 3),
(5, 3),
(13, 3),
(1, 12),
(5, 12),
(13, 12),
(1, 29),
(5, 29),
(1, 32);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `widgets`
--

INSERT INTO `widgets` (`id`, `module_id`, `class_name`, `method_name`, `name`, `description`) VALUES
(1, 3, 'Controller_Support_Widget', 'base_info', 'Support', 'Show count of your ticket answers'),
(2, 3, 'Controller_Support_Widget', 'last_answer', 'Last answer', 'Show last answer in support module'),
(3, 10, 'Controller_Manager_Widget', 'new_projects', 'New projects', 'Show count of new projects'),
(5, 32, 'Controller_Manager_Widget', 'new_projects', 'New projects', 'Show count of new projects');

-- --------------------------------------------------------

--
-- Структура таблицы `widgets_users`
--

CREATE TABLE IF NOT EXISTS `widgets_users` (
  `widget_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `widgets_users`
--

INSERT INTO `widgets_users` (`widget_id`, `user_id`, `position`) VALUES
(3, 13, ''),
(2, 13, ''),
(1, 1, ''),
(2, 1, ''),
(5, 1, ''),
(1, 5, ''),
(2, 5, '');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rights_roles`
--
ALTER TABLE `rights_roles`
  ADD CONSTRAINT `FK_rights_roles_rights` FOREIGN KEY (`right_id`) REFERENCES `rights` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_rights_roles_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users_modules`
--
ALTER TABLE `users_modules`
  ADD CONSTRAINT `FK_users_modules_modules` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_users_modules_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
