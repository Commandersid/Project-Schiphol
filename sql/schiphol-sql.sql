-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 okt 2019 om 09:21
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schiphol`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `ID` int(6) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `geslacht` varchar(1) NOT NULL,
  `geboortedatum` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`ID`, `naam`, `postcode`, `geslacht`, `geboortedatum`, `email`) VALUES
(1, 'John van den Berg', '1098LV', 'M', '1984-10-07', 'jvbd@live.nl'),
(2, 'Celia Hayna', '1999BB', 'V', '1986-05-24', 'ch@gnail.com'),
(3, 'Justin Boom', '2000AA', 'M', '1991-05-03', 'jv@live.nl'),
(4, 'Roemer Gallo', '1999BB', 'M', '1085-05-31', 'rg@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klacht`
--

CREATE TABLE `klacht` (
  `ID` int(6) NOT NULL,
  `ID_gebruiker` int(6) DEFAULT NULL,
  `ID_klachtsoort` int(6) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klacht`
--

INSERT INTO `klacht` (`ID`, `ID_gebruiker`, `ID_klachtsoort`, `postcode`, `datum`, `tijd`) VALUES
(1, NULL, 3, '1098LV', '2009-12-03', '06:12:00'),
(2, NULL, 3, '1098LV', '2019-04-11', '15:12:00'),
(3, NULL, 2, '1098LV', '2019-04-11', '15:13:00'),
(4, NULL, 1, '2000AA', '2019-04-11', '15:26:00'),
(5, NULL, 1, '1999BB', '2012-12-05', '23:00:00'),
(6, NULL, 3, '1099TT', '2018-07-24', '09:56:00'),
(7, NULL, 3, '1098LV', '0000-00-00', '08:59:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klachtsoort`
--

CREATE TABLE `klachtsoort` (
  `ID` int(6) NOT NULL,
  `klachtsoort` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klachtsoort`
--

INSERT INTO `klachtsoort` (`ID`, `klachtsoort`) VALUES
(1, 'milieu'),
(2, 'veiligheid'),
(3, 'geluid');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `postcode`
--

CREATE TABLE `postcode` (
  `postcode` varchar(6) DEFAULT NULL,
  `ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `postcode`
--

INSERT INTO `postcode` (`postcode`, `ID`) VALUES
('1098LV', 1),
('1098XX', 2),
('1098LX', 3),
('1099TT', 4),
('1999BB', 5),
('2000AA', 6);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `klacht`
--
ALTER TABLE `klacht`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_gebruiker` (`ID_gebruiker`);

--
-- Indexen voor tabel `klachtsoort`
--
ALTER TABLE `klachtsoort`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `postcode`
--
ALTER TABLE `postcode`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `klacht`
--
ALTER TABLE `klacht`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `klachtsoort`
--
ALTER TABLE `klachtsoort`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `postcode`
--
ALTER TABLE `postcode`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `klacht`
--
ALTER TABLE `klacht`
  ADD CONSTRAINT `klacht_ibfk_1` FOREIGN KEY (`ID_gebruiker`) REFERENCES `klachtsoort` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
