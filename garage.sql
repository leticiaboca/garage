-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 feb 2021 om 11:22
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `autokenteken` varchar(8) NOT NULL,
  `automerk` varchar(15) NOT NULL,
  `autotype` varchar(15) NOT NULL,
  `autokmstand` int(11) NOT NULL,
  `klantid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('1ASZX', 'tesla', 'model x', 0, 1),
('2-TR-106', 'Opel', 'Corsa', 89797, 1),
('6-vtr-98', 'bmw', 'M5', 100000, 0),
('95-RP-LR', 'Fiat', 'Doblo', 212767, 3),
('HV-GB-23', 'Jaguar', 'XJ6', 102307, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klantid` int(11) NOT NULL,
  `klantnaam` varchar(25) NOT NULL,
  `klantadres` varchar(25) NOT NULL,
  `klantpostcode` varchar(6) NOT NULL,
  `klantplaats` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Eijeriks, Anjo', 'Dijkwal 146b', '3015CC', 'Rotterdam'),
(2, 'Poenai, V', 'Schipholstraat 23', '3223HB', 'Rotterdam'),
(3, 'Pijpers, Elly', 'brintaweg 343', '3029BN', 'Rotterdam'),
(10, 'Kumlu, Ghengis', 'Kanarie 5', '4123BD', 'Zevenkamp'),
(11, 'Jeroen Festen', 'Vesting 54', '2219JV', 'Nesselande'),
(12, 'Lucie Stoopendaal', 'Stoopstraat 34', '3097LC', 'Rotterdam'),
(13, 'Peter Scheurwater', 'Scheurrak 54', '2020PS', 'Gouda'),
(14, 'Sariska Jahani', 'Jalaan 87b', '3023SJ', 'Capelle aan den IJss'),
(15, 'Ã–mer Eryigit', 'Erieplein 98', '3021OE', 'Rotterdam'),
(17, 'P. van Velsen', 'Velsweg 122', '2020PV', 'Leiderdorp'),
(18, 'Linda de Mol', 'Molsingel 202', '1010LM', 'Hilversum'),
(19, 'Sophia Jukema', 'Jukeboxweg 87', '2012SJ', 'Heerenveen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`autokenteken`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
