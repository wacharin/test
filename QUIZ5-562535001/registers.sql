-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12-log
-- รุ่นของ PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `registers`
--
CREATE DATABASE IF NOT EXISTS `registers` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `registers`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`, `lastname`) VALUES
(1, 'defqewfege', 'eqwgwegew', 'qewfqewfqw', 'qwfqwfqwf'),
(2, 'fdewgfwegwe', 'gewgewgewg', 'ewew', 'ewweweg'),
(3, 'fdewgfwegwe', 'gewgewgewg', 'ewew', 'ewweweg'),
(4, 'wacharin2535', '5121040079', 'wacharin', 'naktubtim'),
(5, 'wacharin2535', '5121040079', 'wacharin', 'naktubtim'),
(6, 'sff', '', '', ''),
(7, 'sss', 'fwfqw', 'wfwf', 'wfwf'),
(8, 'sss', 'fwfqw', 'wfwf', 'wfwf'),
(9, 'sss', 'fwfqw', 'wfwf', 'wfwf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
