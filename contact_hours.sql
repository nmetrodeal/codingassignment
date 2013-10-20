-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 21. Okt 2013 um 00:33
-- Server Version: 5.5.28
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `coding_assignment`
--
CREATE DATABASE `coding_assignment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coding_assignment`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_contacts`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`contact_id`, `firstname`, `lastname`, `address`, `city`, `state`, `zip`) VALUES
(1, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(2, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(3, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(4, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(5, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(6, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(7, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(8, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(9, 'nico', 'muralla', '217-D Concepcion St. Santolan', 'Pasig', 'Metro Manila', '1610'),
(10, 'asdasd', 'asdas', 'asdasd', 'asdasd', 'sd', 'asdasd'),
(11, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'adsasd'),
(12, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd'),
(13, 'asdasdlacksdjclan', 'sinjdfcosdfbhva', 'sifubhsoifvush', 'psdfbhvspidfuvh', 'psdufbhsvpidfuvhb', 'psubpviduf'),
(14, 'asdasdadasdasd', 'asdasd', 'asdadsasdasdasdasd', 'asdad', 'dasdaa', 'asdasd'),
(15, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'sdfdfsf', 'sdfsdf'),
(16, 'asdasdasdasdasd', 'asdasdadasd', 'asdasdasd', 'asdasdas', 'asdasdasd', 'asdasdasd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
