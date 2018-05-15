-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 May 2018, 20:15:49
-- Sunucu sürümü: 10.1.28-MariaDB
-- PHP Sürümü: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `flight` varchar(100) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `hour` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `car` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `infos`
--

INSERT INTO `infos` (`id`, `username`, `city`, `flight`, `day`, `month`, `year`, `hour`, `seat`, `car`) VALUES
(75, '', 'Barcelona', 'Atlas Jet', 16, 'September', 2021, '14:00', 'B2', 'Yes'),
(78, '', 'Aydin', 'Onur Air', 5, 'July', 2021, '10:00', 'A3', 'No'),
(79, '', 'Aydin', 'Onur Air', 6, 'May', 2022, '12:00', 'B1', 'Yes'),
(84, '', 'Aydin', 'Lufthansa', 5, 'May', 2021, '12:00', 'A3', 'No'),
(86, '', 'Aydin', 'Onur Air', 3, 'July', 2019, '10:00', 'A3', 'No'),
(87, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(88, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(89, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(90, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(91, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(92, '', 'Aydin', 'Atlas Jet', 9, 'March', 2019, '11:00', 'A3', 'Yes'),
(93, '', 'Mugla', 'Atlas Jet', 3, 'April', 2022, '13:00', 'A3', 'No'),
(94, '', 'Mugla', 'Atlas Jet', 3, 'April', 2022, '13:00', 'A3', 'No'),
(98, 'umutcanberkhasret', 'Antalya', 'Atlas Jet', 5, 'June', 2021, '11:00', 'A3', 'No'),
(99, 'umutcanberkhasret', 'Denizli', 'Onur Air', 3, 'March', 2020, '10:00', 'A3', 'No');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
