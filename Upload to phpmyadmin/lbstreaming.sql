-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 09. Okt 2019 um 15:06
-- Server-Version: 10.1.41-MariaDB-0+deb9u1
-- PHP-Version: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lbstreaming`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `autodj_instances`
--

CREATE TABLE `autodj_instances` (
  `id` int(255) NOT NULL,
  `Stream_Port` varchar(255) NOT NULL,
  `Stream_Passwort` varchar(255) NOT NULL,
  `Stream_Titel` varchar(255) NOT NULL,
  `Stream_URL` varchar(255) NOT NULL,
  `Musikrichtung` varchar(255) NOT NULL,
  `playlist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shoutcast_instances`
--

CREATE TABLE `shoutcast_instances` (
  `id` int(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `adminpw` varchar(255) NOT NULL,
  `streampw` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `autodj_instances`
--
ALTER TABLE `autodj_instances`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shoutcast_instances`
--
ALTER TABLE `shoutcast_instances`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `autodj_instances`
--
ALTER TABLE `autodj_instances`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1727;

--
-- AUTO_INCREMENT für Tabelle `shoutcast_instances`
--
ALTER TABLE `shoutcast_instances`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4456;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
