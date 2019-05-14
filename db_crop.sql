-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2019 pada 14.16
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_crop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_component`
--

CREATE TABLE IF NOT EXISTS `tb_component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `tb_component`
--

INSERT INTO `tb_component` (`id`, `type`, `name`, `action`) VALUES
(5, 'Keyboard', 'btnBookingKeyQ', '51'),
(6, 'Keyboard', 'btnBookingKeyW', '57'),
(7, 'Keyboard', 'btnBookingKeyE', '45'),
(8, 'Keyboard', 'btnBookingKeyR', '52'),
(9, 'Keyboard', 'btnBookingKeyT', '54'),
(10, 'Keyboard', 'btnBookingKeyY', '59'),
(11, 'Keyboard', 'btnBookingKeyU', '55'),
(12, 'Keyboard', 'btnBookingKeyI', '49'),
(13, 'Keyboard', 'btnBookingKeyO', '4F'),
(14, 'Keyboard', 'btnBookingKeyP', '50'),
(15, 'Keyboard', 'btnBookingKeyA', '41'),
(16, 'Keyboard', 'btnBookingKeyS', '53'),
(17, 'Keyboard', 'btnBookingKeyD', '44'),
(18, 'Keyboard', 'btnBookingKeyF', '46'),
(19, 'Keyboard', 'btnBookingKeyG', '47'),
(20, 'Keyboard', 'btnBookingKeyH', '48'),
(21, 'Keyboard', 'btnBookingKeyJ', '4A'),
(22, 'Keyboard', 'btnBookingKeyK', '4B'),
(23, 'Keyboard', 'btnBookingKeyL', '4C'),
(24, 'Keyboard', 'btnBookingKeyZ', '5A'),
(25, 'Keyboard', 'btnBookingKeyX', '58'),
(26, 'Keyboard', 'btnBookingKeyC', '43'),
(27, 'Keyboard', 'btnBookingKeyV', '56'),
(28, 'Keyboard', 'btnBookingKeyB', '42'),
(29, 'Keyboard', 'btnBookingKeyN', '4E'),
(30, 'Keyboard', 'btnBookingKeyM', '4D'),
(31, 'Keyboard', 'btnBookingKey1', '31'),
(32, 'Keyboard', 'btnBookingKey2', '32'),
(33, 'Keyboard', 'btnBookingKey3', '33'),
(34, 'Keyboard', 'btnBookingKey4', '34'),
(35, 'Keyboard', 'btnBookingKey5', '35'),
(36, 'Keyboard', 'btnBookingKey6', '36'),
(37, 'Keyboard', 'btnBookingKey7', '37'),
(38, 'Keyboard', 'btnBookingKey8', '38'),
(39, 'Keyboard', 'btnBookingKey9', '39'),
(40, 'Keyboard', 'btnBookingKey0', '30'),
(41, 'Keyboard', 'btnBookingKeyBackspace', '08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_xml`
--

CREATE TABLE IF NOT EXISTS `tb_xml` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `param` varchar(5) NOT NULL,
  `val_x` varchar(20) NOT NULL,
  `val_y` varchar(20) NOT NULL,
  `val_w` varchar(20) NOT NULL,
  `val_h` varchar(20) NOT NULL,
  `action` varchar(255) NOT NULL,
  `datas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data untuk tabel `tb_xml`
--

INSERT INTO `tb_xml` (`id`, `type`, `name`, `description`, `param`, `val_x`, `val_y`, `val_w`, `val_h`, `action`, `datas`) VALUES
(50, '', '', '', 'x_y', '0', '0', '2460', '3001', '', ''),
(51, '', '', '', 'x_y', '0', '0', '2460', '3001', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
