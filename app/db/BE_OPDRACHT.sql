-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 mei 2024 om 22:32
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `basiskleur1` varchar(10) DEFAULT NULL,
  `basiskleur2` varchar(10) DEFAULT NULL,
  `basiskleur3` varchar(10) DEFAULT NULL,
  `basiskleur4` varchar(10) DEFAULT NULL,
  `telefoonnummer` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `afspraakdatum` datetime DEFAULT NULL,
  `behandeling` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `verzendingstijd` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `afspraak`
--

INSERT INTO `afspraak` (`id`, `basiskleur1`, `basiskleur2`, `basiskleur3`, `basiskleur4`, `telefoonnummer`, `email`, `afspraakdatum`, `behandeling`, `verzendingstijd`) VALUES
(48, '#7a6053', '#543223', '#543223', '#8a114d', '31 6 5151 52 17', '337921@mboutrecht.nl', '2024-05-30 15:15:00', 'een Nagel behandeling ', '2024-05-02 11:26:55'),
(47, '#1a4a91', '#3ee6bc', '#793ee6', '#e6733e', '31 4 4124 14 14', '337920@student.mboutrecht.nl', '2024-05-23 15:30:00', 'Mbo Utrecht behandeling Opdracht', '2024-05-14 00:26:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
