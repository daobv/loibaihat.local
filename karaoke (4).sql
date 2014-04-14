-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 08:47 PM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karaoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE IF NOT EXISTS `singer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `writer` varchar(255) DEFAULT NULL,
  `singer` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `lyric` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  `sing` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `name`, `writer`, `singer`, `type`, `lyric`, `image`, `sing`) VALUES
(2, 'Ngàn Nỗi Nhớ Gửi Đến Em', 'The men', 'The men', 'Nhạc Trẻ', 'Ngày đầu tiên ta mới yêu nhau \r\nSay đắm ngọt ngào trong vòng tay êm đềm \r\nMình trao nhau bao nụ hôn ngất ngây \r\nKhiến trái tim anh hạnh phúc nhường nào\r\n\r\nMột cảm giác cứ mãi lướt trong anh \r\nTừ khi anh biết yêu em lần đầu \r\nLà nỗi nhớ anh xếp trong yêu thương \r\nLà tình yêu chôn sâu trong trái tim\r\n\r\nMột ngàn nỗi nhớ qua bao nhiêu ngày qua anh vẫn giữ mãi trong lòng \r\nViết tên em trên những trang nhật ký \r\nMột ngàn yêu thương anh sẽ giành trao em \r\nNguyện trao hết trái tim này \r\nNgười yêu ơi em có biết không \r\n\r\nHãy cùng anh đến một nơi thật xa nơi đó có thiên đường \r\nNơi hai ta sẽ luôn được bình yên \r\nHãy nắm tay anh thật chặt, giữ mãi yêu thương \r\nNguyện cầu bên nhau không bao giờ cách xa ...', 'images/1370490890179.jpg', 0),
(3, 'Anh Nhớ Mùa Đông Ấy ', 'The Men', 'The Men', 'Nhạc Trẻ', 'Anh nhớ mùa đông ấy khi đôi mình vẫn yêu', 'imges/13863_rGds.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE IF NOT EXISTS `writer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
