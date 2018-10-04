-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Tem 2017, 11:08:46
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogsite`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `saysira` int(11) NOT NULL,
  `sayadi` text COLLATE utf8_turkish_ci NOT NULL,
  `sayicerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`saysira`, `sayadi`, `sayicerik`) VALUES
(1, 'Hakkında', 'Bu alanı yönetim panelinden değiştirebilirsiniz...'),
(3, 'Yazar Hakkında', 'Adem YILMAZ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `ssira` int(11) NOT NULL,
  `sadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `saciklama` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sanahtar` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`ssira`, `sadi`, `saciklama`, `sanahtar`) VALUES
(1, 'blogsitem', 'adem\' in bloğu', 'adem.blog');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `ksira` int(11) NOT NULL,
  `kadi` text COLLATE utf8_turkish_ci NOT NULL,
  `ksifre` text COLLATE utf8_turkish_ci NOT NULL,
  `kmail` text COLLATE utf8_turkish_ci NOT NULL,
  `krutbe` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`ksira`, `kadi`, `ksifre`, `kmail`, `krutbe`) VALUES
(1, 'adem', '8b372a2d003dc7c6e3ca4c4420c88ea9', 'adem2817@gmail.com', 'yonetici'),
(4, 'adem', '827ccb0eea8a706c4c34a16891f84e7b', 'adem@hotmail.com', 'Yonetici'),
(3, 'mehmet', 'mehmet', 'mehmet@hotmail.com', 'yonetici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `isira` int(11) NOT NULL,
  `ibaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`isira`, `ibaslik`, `icerik`) VALUES
(1, 'Bu ilk blogsitem in ilk yazısıdır', 'blogsitem sitesini Başarılı bir şekilde kullanıyorsunuz'),
(2, 'Bu ikinci yazı', 'bu yazı ikinci yazının içeriğidir...');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`saysira`);

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`ssira`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`ksira`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`isira`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `saysira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `ssira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `ksira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `isira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
