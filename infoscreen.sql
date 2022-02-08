-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 08. 02 2022 kl. 22:19:59
-- Serverversion: 10.4.16-MariaDB
-- PHP-version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoscreen`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `src` varchar(300) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `news`
--

INSERT INTO `news` (`id`, `title`, `src`, `body`) VALUES
(1, 'Overskrift', 'https://unsplash.it/400/300', 'Bacon ipsum dolor amet meatloaf doner burgdoggen spare ribs chicken leberkas hamburger, boudin landjaeger shank. Short loin ham hock fatback jowl cupim, pork loin ground round. Filet mignon meatloaf swine brisket pig drumstick kielbasa shoulder andouille pork belly chuck shankle prosciutto. Salami andouille alcatra bresaola. Chicken alcatra short ribs pancetta jowl tail picanha. Boudin sausage pork chop chuck leberkas, biltong beef swine beef ribs ground round prosciutto chislic. Bacon drumstick pork loin burgdoggen salami shankle filet mignon.'),
(2, 'Overskrift', 'https://unsplash.it/500/300', 'Bacon ipsum dolor amet meatloaf doner burgdoggen spare ribs chicken leberkas hamburger, boudin landjaeger shank. Short loin ham hock fatback jowl cupim, pork loin ground round. Filet mignon meatloaf swine brisket pig drumstick kielbasa shoulder andouille pork belly chuck shankle prosciutto. Salami andouille alcatra bresaola. Chicken alcatra short ribs pancetta jowl tail picanha. Boudin sausage pork chop chuck leberkas, biltong beef swine beef ribs ground round prosciutto chislic. Bacon drumstick pork loin burgdoggen salami shankle filet mignon.');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
