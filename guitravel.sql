-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Aug 2017 um 07:14
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortname` varchar(10) NOT NULL,
  `flag` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `name_addition` varchar(255) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `plz` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `web` text,
  `birthdate` date DEFAULT NULL,
  `pass_nr` varchar(16) NOT NULL,
  `nationality` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers_travels`
--

CREATE TABLE `customers_travels` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `amount_of_rooms` float DEFAULT NULL,
  `daily_price` float NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `web` text,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`, `rating`, `manager`, `amount_of_rooms`, `daily_price`, `phone`, `email`, `web`, `country_id`) VALUES
(0, 'Schmitzi', 'Bern', 5, 'Daniel Schmitz', 25, 82, '078 927 72 56', 'dani.schmitz@live.de', '', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `hotel_images`
--

CREATE TABLE `hotel_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `picture` blob,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `price` float NOT NULL,
  `guide` varchar(255) DEFAULT NULL,
  `nameGuide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `travels_hotels`
--

CREATE TABLE `travels_hotels` (
  `id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `customers_travels`
--
ALTER TABLE `customers_travels`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `travels_hotels`
--
ALTER TABLE `travels_hotels`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
