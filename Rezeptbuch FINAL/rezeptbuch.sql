-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Jan 2019 um 19:41
-- Server-Version: 10.1.36-MariaDB
-- PHP-Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rezeptbuch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `einkaufsliste`
--

CREATE TABLE `einkaufsliste` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `einkaufsliste`
--

INSERT INTO `einkaufsliste` (`ID`, `Name`) VALUES
(3, 'HÃ¤nchenfilet'),
(4, 'rote Chillischote'),
(5, 'Knoblauchzehen'),
(6, 'OlivenÃ¶l'),
(7, 'Zwiebel'),
(8, 'Paprika'),
(9, 'KNORR Tomato al Gusto All'),
(10, '200 ml KNORR GemÃ¼se Bouillon'),
(11, 'Mais'),
(12, 'Pfeffer');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte`
--

CREATE TABLE `rezepte` (
  `ID` int(11) NOT NULL,
  `namerecipe` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient1` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient2` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient3` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient4` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient5` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient6` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient7` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient8` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient9` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `ingredient10` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `preparation` varchar(1000) COLLATE utf8_german2_ci DEFAULT NULL,
  `cathegory1` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `cathegory2` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `cathegory3` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `difficulty` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `amount` varchar(30) COLLATE utf8_german2_ci NOT NULL,
  `source` varchar(30) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`ID`, `namerecipe`, `ingredient1`, `ingredient2`, `ingredient3`, `ingredient4`, `ingredient5`, `ingredient6`, `ingredient7`, `ingredient8`, `ingredient9`, `ingredient10`, `preparation`, `cathegory1`, `cathegory2`, `cathegory3`, `difficulty`, `time`, `amount`, `source`) VALUES
(43, 'Pikante Tomatensuppe mit Chill', 'HÃ¤nchenfilet', 'rote Chillischote', 'Knoblauchzehen', 'OlivenÃ¶l', 'Zwiebel', 'Paprika', 'KNORR Tomato al Gusto All', '200 ml KNORR GemÃ¼se Bouillon', 'Mais', 'Pfeffer', 'HÃ¤hnchenfilet waschen, trocke', '', 'Hauptspeise', '', 'Einfach', '30min', '3 Portionen', 'Knorr');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zutaten`
--

CREATE TABLE `zutaten` (
  `id` int(11) NOT NULL,
  `zutat` varchar(100) COLLATE utf8_bin NOT NULL,
  `kategorie` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `zutaten`
--

INSERT INTO `zutaten` (`id`, `zutat`, `kategorie`) VALUES
(1, 'gurke', 'gemuese'),
(2, 'tomate', 'gemuese'),
(3, 'blattsalat', 'gemuese'),
(4, 'zuchini', 'gemuese'),
(5, 'zwiebel', 'gemuese');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `einkaufsliste`
--
ALTER TABLE `einkaufsliste`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `einkaufsliste`
--
ALTER TABLE `einkaufsliste`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT für Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
