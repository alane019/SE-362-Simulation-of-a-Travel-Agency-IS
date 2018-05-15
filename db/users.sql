-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 May 2018, 20:14:28
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
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(2, 'berkezircan', 'Berk', 'Ezircan', 'Berkezircan@gmail.com', 'e9cd512e56bb4137cad4d7fadee536be', '2018-04-24 00:00:00', 'assests/images/profile-pics/head_emerald.jpg'),
(3, 'berkabi', 'Alper', 'Ezircan', 'Alperezircan@gmail.com', 'da7c06b43447124ea861f10eccd7136e', '2018-04-24 00:00:00', 'assests/images/profile-pics/head_emerald.jpg'),
(4, 'deneme', 'Deneme', 'Deneme', 'Deneme@gmail.com', '8f10d078b2799206cfe914b32cc6a5e9', '2018-04-24 00:00:00', 'assests/images/profile-pics/head_emerald.jpg'),
(6, 'efeuruk', 'Ersoyefe', 'Uruk', 'Efeuruk1@gmail.com', 'd8fb1cb572a2f611217ef0da5e9b6557', '2018-04-28 00:00:00', 'assests/images/profile-pics/head_emerald.jpg'),
(7, 'ipek1', 'Ipek', 'Tekin', 'Ipektekin@gmail.com', '2dfa3eaf8de191e38548c583cecfb033', '2018-05-12 00:00:00', 'assests/images/profile-pics/head_emerald.jpg'),
(8, 'umutcanberkhasret', 'Umutcanberk', 'Hasret', 'Umuthasret@gmail.com', '30f55ef54a70a6ae7a450df5c9909c0c', '2018-05-15 00:00:00', 'assests/images/profile-pics/head_emerald.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
