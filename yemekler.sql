-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `yemekler`;
CREATE DATABASE `yemekler` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci */;
USE `yemekler`;

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategoriadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `kategoriler` (`id`, `kategoriadi`) VALUES
(1,	'Fastfood'),
(2,	'Çorbalar'),
(3,	'Tatlılar'),
(5,	'Çiğköfte'),
(6,	'Ekmekçiler');

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `fiyati` decimal(5,2) NOT NULL,
  `firmasi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adresi` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `urunler` (`id`, `adi`, `fiyati`, `firmasi`, `adresi`, `kategori`) VALUES
(1,	'Tavuk Dürüm',	9.00,	'Öncü Döner',	'cadde boyu',	1),
(2,	'Tavuk dürüm, 2 al 1 öde',	14.00,	'Öncü Döner',	'cadde boyu',	1);

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puan` int(11) NOT NULL,
  `yorum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `yorumlar` (`id`, `puan`, `yorum`, `urun_id`) VALUES
(1,	5,	'Çok iyi',	1),
(2,	4,	'ortam güzel',	1),
(3,	1,	'Berbat',	2);

-- 2020-01-26 13:19:44
