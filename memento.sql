-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Jul 2015 um 20:21
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `flashcard`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cardpacks`
--

CREATE TABLE IF NOT EXISTS `cardpacks` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `cardpacks`
--

INSERT INTO `cardpacks` (`id`, `title`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'English Words', 'Collection of difficult english word', 1, '2015-07-09 16:16:54', '2015-07-09 16:16:54'),
(2, 'SQL Commands', 'SELECT, INSERT and so on..', 1, '2015-07-09 16:21:01', '2015-07-09 16:21:01');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(10) unsigned NOT NULL,
  `frontside` text COLLATE utf8_unicode_ci NOT NULL,
  `backside` text COLLATE utf8_unicode_ci NOT NULL,
  `cardpack_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_07_05_113218_create_users_table', 1),
('2015_07_05_113551_create_cardpacks_table', 1),
('2015_07_05_113835_create_cards_table', 1),
('2015_07_05_145842_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pasword_resets`
--

CREATE TABLE IF NOT EXISTS `pasword_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Severin', 'Kaderli', 'severin.kaderli@gmail.com', '$2y$10$7iCBZo29UC6E32WsE/PpCuyeerqhlqD3i6z8RJmAP/kq3LCt9eb/y', NULL, '2015-07-09 16:16:39', '2015-07-09 16:16:39');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cardpacks`
--
ALTER TABLE `cardpacks`
  ADD PRIMARY KEY (`id`), ADD KEY `cardpacks_user_id_foreign` (`user_id`);

--
-- Indizes für die Tabelle `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`), ADD KEY `cards_cardpack_id_foreign` (`cardpack_id`);

--
-- Indizes für die Tabelle `pasword_resets`
--
ALTER TABLE `pasword_resets`
  ADD KEY `pasword_resets_email_index` (`email`), ADD KEY `pasword_resets_token_index` (`token`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cardpacks`
--
ALTER TABLE `cardpacks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `cardpacks`
--
ALTER TABLE `cardpacks`
ADD CONSTRAINT `cardpacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `cards`
--
ALTER TABLE `cards`
ADD CONSTRAINT `cards_cardpack_id_foreign` FOREIGN KEY (`cardpack_id`) REFERENCES `cardpacks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
