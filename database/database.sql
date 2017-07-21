-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 10:32 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type_account` tinyint(1) NOT NULL,
  `date_register` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `avatar` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `name`, `sex`, `address`, `phone`, `mail`, `date`, `type_account`, `date_register`, `active`, `key`, `online`, `avatar`) VALUES
(1, 'dinhtruong', '123123', 'dinhtruong', 1, 'Ho Chi Minh, Viet Nam', '23', 'peterdinh018@gmail.com', '2017-04-18', 1, '2017-04-10', 1, 'sgfhnvsdd', 0, 'upload/image/avatar.jpg'),
(2, 'hoangela', 'THUHALFJA', 'Hoang Ela', 0, 'Ho Chi Minh, Viet Nam', '123123', 'hoangela@gmail.com', '2017-05-11', 1, '2017-05-11', 1, '63386ghf1623iaiiibe41036eh87dg50', 0, 'upload/image/16938813_176810759482712_4259596563775470583_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `analytic_clinet`
--

CREATE TABLE IF NOT EXISTS `analytic_clinet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=162 ;

--
-- Dumping data for table `analytic_clinet`
--

INSERT INTO `analytic_clinet` (`id`, `ip`) VALUES
(1, '127.0.0.1'),
(2, '127.0.0.1'),
(3, '127.0.0.1'),
(4, '127.0.0.1'),
(5, '127.0.0.1'),
(6, '127.0.0.1'),
(7, '127.0.0.1'),
(8, '127.0.0.1'),
(9, '127.0.0.1'),
(10, '127.0.0.1'),
(11, '127.0.0.1'),
(12, '127.0.0.1'),
(13, '127.0.0.1'),
(14, '127.0.0.1'),
(15, '127.0.0.1'),
(16, '10.240.1.16'),
(17, '10.240.0.213'),
(18, '10.240.1.30'),
(19, '10.240.1.14'),
(20, '10.240.0.230'),
(21, '10.240.0.230'),
(22, '10.240.0.214'),
(23, '10.240.0.5'),
(24, '10.240.1.30'),
(25, '10.240.1.14'),
(26, '10.240.0.230'),
(27, '10.240.1.12'),
(28, '10.240.0.230'),
(29, '10.240.1.14'),
(30, '10.240.0.5'),
(31, '10.240.1.12'),
(32, '10.240.0.213'),
(33, '10.240.0.240'),
(34, '10.240.0.230'),
(35, '10.240.0.240'),
(36, '10.240.1.12'),
(37, '10.240.0.240'),
(38, '10.240.0.240'),
(39, '10.240.0.5'),
(40, '10.240.0.5'),
(41, '10.240.0.240'),
(42, '10.240.0.230'),
(43, '10.240.0.5'),
(44, '10.240.0.240'),
(45, '10.240.0.240'),
(46, '10.240.0.5'),
(47, '10.240.0.240'),
(48, '10.240.1.14'),
(49, '10.240.1.14'),
(50, '10.240.0.33'),
(51, '10.240.0.33'),
(52, '10.240.0.240'),
(53, '10.240.0.5'),
(54, '10.240.0.33'),
(55, '10.240.1.14'),
(56, '10.240.1.14'),
(57, '10.240.1.12'),
(58, '10.240.0.213'),
(59, '10.240.1.30'),
(60, '10.240.0.33'),
(61, '10.240.1.30'),
(62, '10.240.1.16'),
(63, '10.240.1.14'),
(64, '10.240.0.213'),
(65, '10.240.1.14'),
(66, '10.240.1.16'),
(67, '10.240.1.16'),
(68, '10.240.1.14'),
(69, '10.240.0.230'),
(70, '10.240.0.5'),
(71, '10.240.0.213'),
(72, '10.240.0.214'),
(73, '10.240.1.14'),
(74, '10.240.0.213'),
(75, '10.240.0.214'),
(76, '10.240.1.12'),
(77, '10.240.0.230'),
(78, '10.240.0.213'),
(79, '10.240.1.14'),
(80, '10.240.1.30'),
(81, '10.240.0.240'),
(82, '10.240.0.214'),
(83, '10.240.0.213'),
(84, '10.240.1.14'),
(85, '10.240.1.14'),
(86, '10.240.0.214'),
(87, '10.240.0.213'),
(88, '10.240.1.30'),
(89, '10.240.0.240'),
(90, '10.240.0.214'),
(91, '10.240.1.12'),
(92, '10.240.1.12'),
(93, '10.240.0.240'),
(94, '10.240.0.214'),
(95, '10.240.1.14'),
(96, '10.240.1.12'),
(97, '10.240.0.230'),
(98, '10.240.0.230'),
(99, '10.240.0.240'),
(100, '10.240.1.12'),
(101, '10.240.1.12'),
(102, '10.240.0.5'),
(103, '10.240.0.214'),
(104, '10.240.1.12'),
(105, '10.240.0.214'),
(106, '10.240.1.14'),
(107, '10.240.1.14'),
(108, '10.240.1.30'),
(109, '10.240.0.240'),
(110, '10.240.1.12'),
(111, '10.240.0.240'),
(112, '10.240.0.240'),
(113, '10.240.0.213'),
(114, '10.240.0.214'),
(115, '10.240.1.12'),
(116, '10.240.1.14'),
(117, '10.240.0.213'),
(118, '10.240.0.240'),
(119, '10.240.0.230'),
(120, '10.240.0.213'),
(121, '10.240.1.14'),
(122, '10.240.0.5'),
(123, '10.240.1.12'),
(124, '10.240.0.230'),
(125, '10.240.0.187'),
(126, '10.240.1.60'),
(127, '10.240.0.214'),
(128, '10.240.0.5'),
(129, '10.240.1.31'),
(130, '10.240.1.16'),
(131, '10.240.0.230'),
(132, '10.240.1.30'),
(133, '10.240.1.16'),
(134, '10.240.1.14'),
(135, '10.240.0.214'),
(136, '10.240.0.187'),
(137, '10.240.0.16'),
(138, '10.240.0.214'),
(139, '10.240.1.16'),
(140, '10.240.0.33'),
(141, '10.240.1.20'),
(142, '10.240.0.240'),
(143, '10.240.0.240'),
(144, '10.240.1.16'),
(145, '10.240.0.213'),
(146, '10.240.1.12'),
(147, '10.240.1.14'),
(148, '10.240.0.213'),
(149, '10.240.1.14'),
(150, '10.240.0.214'),
(151, '10.240.1.16'),
(152, '10.240.1.12'),
(153, '10.240.1.30'),
(154, '10.240.0.5'),
(155, '10.240.1.16'),
(156, '10.240.1.16'),
(157, '10.240.1.30'),
(158, '10.240.1.16'),
(159, '10.240.0.240'),
(160, '10.240.0.5'),
(161, '10.240.1.16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unsigned_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `serial` int(11) NOT NULL,
  `show` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unsigned_name` (`unsigned_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `unsigned_name`, `serial`, `show`) VALUES
(1, 'Video', 'video', 1, 1),
(2, 'Image', 'image', 2, 1),
(3, 'Comic', 'comic', 3, 1),
(4, 'Funny', 'funny', 4, 1),
(5, 'Game Show', 'game-show', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `id_post` int(11) NOT NULL,
  `see` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `website`, `content`, `date`, `id_post`, `see`) VALUES
(1, 'van truong', 'dinhtruong@gmail.com', 'abc.com', 'xin chao moi nguoi', '2017-04-28 00:00:00', 1, 1),
(2, 'sdf', 'dinhtruong@gmail.com', 'https://www.youtube.com/watch?v=oQjcJBGIFsA', 'sdf', '2017-07-14 09:20:35', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `count_online`
--

CREATE TABLE IF NOT EXISTS `count_online` (
  `time` int(11) NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `local_page` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `count_online`
--

INSERT INTO `count_online` (`time`, `ip`, `local_page`) VALUES
(1500633097, '10.240.1.16', '/blog_php/basend/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unsigned_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `url_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `highlights` tinyint(1) NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `title`, `unsigned_title`, `excerpt`, `url_image`, `date`, `id_user`, `content`, `id_type`, `view`, `highlights`, `public`) VALUES
(1, 'LETS NOT FALL IN LOVE', 'Lets-Not-Fall-In-Love', 'BIGBANG - ìš°ë¦¬ ì‚¬ëž‘í•˜ì§€ ë§ì•„ìš”', 'upload/image/73fhg-maxresdefault.jpg', '2017-05-11', 1, '<p style="text-align:center"><iframe frameborder="0" height="315px" src="https://www.youtube.com/embed/9jTo6hTZmiQ" width="560px"></iframe></p>\r\n', 1, 19, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
