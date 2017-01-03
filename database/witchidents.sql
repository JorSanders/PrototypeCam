-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jan 2017 om 13:37
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `witchidents`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`Id`, `Name`, `Description`) VALUES
(1, 'sanitair', 'alles wat met wc ofzo te maken heeft'),
(2, 'test', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incident`
--

CREATE TABLE `incident` (
  `Id` int(11) NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Description` text,
  `CategoryId` int(11) DEFAULT NULL,
  `DateMentioned` date DEFAULT NULL,
  `DateFinished` date DEFAULT NULL,
  `PriorityId` int(11) DEFAULT NULL,
  `Archived` int(1) NOT NULL DEFAULT '0',
  `Deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `incident`
--

INSERT INTO `incident` (`Id`, `Title`, `Description`, `CategoryId`, `DateMentioned`, `DateFinished`, `PriorityId`, `Archived`, `Deleted`) VALUES
(1, 'wc kapot', 'spoelt niet door', 1, '2016-12-07', NULL, 1, 1, 0),
(2, 'lamp', NULL, NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incident_user`
--

CREATE TABLE `incident_user` (
  `Id` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL,
  `ResponsibilityId` int(11) DEFAULT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `incident_user`
--

INSERT INTO `incident_user` (`Id`, `IncidentId`, `ResponsibilityId`, `UserId`) VALUES
(1, 1, NULL, 3),
(2, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `linked_incidents`
--

CREATE TABLE `linked_incidents` (
  `Id` int(11) NOT NULL,
  `LinkNumber` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `location`
--

CREATE TABLE `location` (
  `Id` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL,
  `TypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `location`
--

INSERT INTO `location` (`Id`, `IncidentId`, `TypeId`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `location_type`
--

CREATE TABLE `location_type` (
  `Id` int(11) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `location_type`
--

INSERT INTO `location_type` (`Id`, `Type`, `Description`) VALUES
(1, 'omschrijving', 'bij het management'),
(2, 'omschrijving', 'kamer 4.30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `photo_incident`
--

CREATE TABLE `photo_incident` (
  `Id` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL,
  `FileLocation` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `photo_incident`
--

INSERT INTO `photo_incident` (`Id`, `IncidentId`, `FileLocation`) VALUES
(1, 1, 'www.pagina.com'),
(2, 1, 'www.pagina1.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `priority`
--

CREATE TABLE `priority` (
  `Id` int(11) NOT NULL,
  `Description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `priority`
--

INSERT INTO `priority` (`Id`, `Description`) VALUES
(1, 'hoog');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `responsibility`
--

CREATE TABLE `responsibility` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status`
--

CREATE TABLE `status` (
  `Id` int(11) NOT NULL,
  `IncidentId` int(11) NOT NULL,
  `NameId` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `status`
--

INSERT INTO `status` (`Id`, `IncidentId`, `NameId`, `Date`) VALUES
(1, 1, 1, '2016-12-15'),
(2, 1, 2, '2016-12-20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status_name`
--

CREATE TABLE `status_name` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `status_name`
--

INSERT INTO `status_name` (`Id`, `Name`) VALUES
(1, 'bezig'),
(2, 'klaar');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Prefix` varchar(35) NOT NULL,
  `Surname` varchar(35) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`Id`, `Firstname`, `Prefix`, `Surname`, `Email`, `Password`) VALUES
(1, 'Jor', '', 'Sanders', 'jorsanders@hotmail.com', 'geheim'),
(2, 'Lennard', '', 'Peerenboom', 'L.Peerenboom@hotmail.com', 'geheim'),
(3, 'Marit', '', 'Besseling', 'M.Besseling@hotmail.com', 'geheim');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_role`
--

CREATE TABLE `user_role` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `IncidentId` (`IncidentId`);

--
-- Indexen voor tabel `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PriorityId` (`PriorityId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexen voor tabel `incident_user`
--
ALTER TABLE `incident_user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IncidentId` (`IncidentId`),
  ADD KEY `ResponsibilityId` (`ResponsibilityId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexen voor tabel `linked_incidents`
--
ALTER TABLE `linked_incidents`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IncidentId` (`IncidentId`);

--
-- Indexen voor tabel `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TypeId` (`TypeId`),
  ADD KEY `IncidentId` (`IncidentId`);

--
-- Indexen voor tabel `location_type`
--
ALTER TABLE `location_type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `photo_incident`
--
ALTER TABLE `photo_incident`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IncidentId` (`IncidentId`);

--
-- Indexen voor tabel `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `responsibility`
--
ALTER TABLE `responsibility`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IncidentId` (`IncidentId`),
  ADD KEY `NameId` (`NameId`);

--
-- Indexen voor tabel `status_name`
--
ALTER TABLE `status_name`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `RoleId` (`RoleId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `incident`
--
ALTER TABLE `incident`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `incident_user`
--
ALTER TABLE `incident_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `linked_incidents`
--
ALTER TABLE `linked_incidents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `location`
--
ALTER TABLE `location`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `location_type`
--
ALTER TABLE `location_type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `photo_incident`
--
ALTER TABLE `photo_incident`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `priority`
--
ALTER TABLE `priority`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `responsibility`
--
ALTER TABLE `responsibility`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `status_name`
--
ALTER TABLE `status_name`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Beperkingen voor tabel `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `incident_ibfk_2` FOREIGN KEY (`PriorityId`) REFERENCES `priority` (`Id`),
  ADD CONSTRAINT `incident_ibfk_3` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);

--
-- Beperkingen voor tabel `incident_user`
--
ALTER TABLE `incident_user`
  ADD CONSTRAINT `incident_user_ibfk_1` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`),
  ADD CONSTRAINT `incident_user_ibfk_2` FOREIGN KEY (`ResponsibilityId`) REFERENCES `responsibility` (`Id`),
  ADD CONSTRAINT `incident_user_ibfk_3` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Beperkingen voor tabel `linked_incidents`
--
ALTER TABLE `linked_incidents`
  ADD CONSTRAINT `linked_incidents_ibfk_1` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`);

--
-- Beperkingen voor tabel `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`TypeId`) REFERENCES `location_type` (`Id`);

--
-- Beperkingen voor tabel `photo_incident`
--
ALTER TABLE `photo_incident`
  ADD CONSTRAINT `photo_incident_ibfk_1` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`);

--
-- Beperkingen voor tabel `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`NameId`) REFERENCES `status_name` (`Id`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`IncidentId`) REFERENCES `incident` (`Id`);

--
-- Beperkingen voor tabel `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`RoleId`) REFERENCES `role` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
