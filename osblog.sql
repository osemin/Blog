-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2021 at 08:13 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(55) NOT NULL,
  `ust_id` varchar(55) NOT NULL,
  `alt_id` varchar(55) NOT NULL,
  `durum` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `ust_id`, `alt_id`, `durum`) VALUES
(13, 'Test Makalesi 1', '0', '', '1'),
(14, 'Test Makalesi Alt', '13', '1', '1'),
(15, 'Test Makalesi 2', '0', '', '1'),
(16, 'Test Makalesi 2 Alt', '15', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `makale`
--

CREATE TABLE `makale` (
  `makale_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL COMMENT 'kategori_id',
  `baslik` varchar(155) NOT NULL,
  `icerik` varchar(2000) NOT NULL,
  `yazar` varchar(155) NOT NULL,
  `tarih` datetime NOT NULL,
  `yorum` varchar(155) NOT NULL,
  `durum` enum('1','0') NOT NULL DEFAULT '0',
  `sayac` mediumtext NOT NULL,
  `kat_adi` varchar(50) NOT NULL,
  `alt_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makale`
--

INSERT INTO `makale` (`makale_id`, `kat_id`, `baslik`, `icerik`, `yazar`, `tarih`, `yorum`, `durum`, `sayac`, `kat_adi`, `alt_id`) VALUES
(16, 14, 'Pacman Oyunu', '<p>Bu Test Makalesidir.</p>\r\n', 'admin', '2021-01-17 00:00:00', '', '0', '', '', ''),
(17, 16, 'Pacman Oyunu 2', '<p>Bu Bir Test Makalesidir.2</p>\r\n', 'admin', '2021-01-17 00:00:00', '', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resimler`
--

CREATE TABLE `resimler` (
  `rid` int(11) NOT NULL COMMENT 'resim_id',
  `makale_id` varchar(25) NOT NULL,
  `yol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resimler`
--

INSERT INTO `resimler` (`rid`, `makale_id`, `yol`) VALUES
(13, '16', 'resim-6ba14b4fd5f7d41cf19f87fcf676081c-pacman.jpg'),
(14, '17', 'resim-2d658deccecb0ded23f7f35580200d85-pacman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `username` varchar(155) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `mail` varchar(155) NOT NULL,
  `durum` enum('1','0') NOT NULL DEFAULT '1',
  `son_giris` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_adi` varchar(155) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mail` varchar(155) NOT NULL,
  `yetki` varchar(55) NOT NULL,
  `durum` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yoneticiler`
--

INSERT INTO `yoneticiler` (`yonetici_id`, `yonetici_adi`, `password`, `mail`, `yetki`, `durum`) VALUES
(8, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@admin.com', '100', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `makale_id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `yorum` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `makale_id`, `isim`, `email`, `yorum`) VALUES
(1, 4, 'Oguzhan ', 'mail@mail.com', 'asdasdasdasdasdsadasdasdasdasdasd'),
(6, 4, 'Deneme', 'mail@mail.com', 'adasdansdajksdhjaksdka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `makale`
--
ALTER TABLE `makale`
  ADD PRIMARY KEY (`makale_id`);

--
-- Indexes for table `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `makale`
--
ALTER TABLE `makale`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `resimler`
--
ALTER TABLE `resimler`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'resim_id', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
