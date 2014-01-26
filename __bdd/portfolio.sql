-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 26 Janvier 2014 à 22:00
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `about`
--

INSERT INTO `about` (`id`, `description`, `active`) VALUES
(1, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis metus, pulvinar a orci in, rutrum suscipit lectus. Proin vel facilisis ante. Morbi rhoncus ultricies rhoncus. Mauris viverra, dolor vel tincidunt facilisis, ipsum justo tincidunt neque, lobortis ornare tellus dui at eros. Fusce tincidunt felis magna, sit amet dignissim justo aliquet in. Praesent aliquet tortor vitae fringilla varius. Integer imperdiet nisi a enim sodales, sed eleifend tortor pretium. Curabitur fringilla vel dui eu egestas. Aenean sed rutrum dolor. In feugiat libero lorem, ut egestas velit vestibulum id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse rutrum placerat dolor. Cras vel quam eget erat fringilla commodo. Suspendisse potenti. In suscipit justo a nisi fringilla, eu tincidunt dui malesuada.\r\n\r\nI', 1),
(2, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis metus, pulvinar a orci in, rutrum suscipit lectus. Proin vel facilisis ante. Morbi rhoncus ultricies rhoncus. Mauris viverra, dolor vel tincidunt facilisis, ipsum justo tincidunt neque, lobortis ornare tellus dui at eros. Fusce tincidunt felis magna, sit amet dignissim justo aliquet in. Praesent aliquet tortor vitae fringilla varius. Integer imperdiet nisi a enim sodales, sed eleifend tortor pretium. Curabitur fringilla vel dui eu egestas. Aenean sed rutrum dolor. In feugiat libero lorem, ut egestas velit vestibulum id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse rutrum placerat dolor. Cras vel quam eget erat fringilla commodo. Suspendisse potenti. In suscipit justo a nisi fringilla, eu tincidunt dui malesuada.\r\n\r\nI', 0);

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_B5F1AFE5A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `description`, `active`) VALUES
(1, 2, 'activité 1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_730876ADA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `school`, `description`, `startdate`, `enddate`, `active`) VALUES
(1, 2, 'miage', 'miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage miage ', '2012-09-01', '2014-01-31', 1),
(2, 2, 'IGA', 'iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga iga ', '2014-01-01', '2014-01-31', 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `iscurrent` tinyint(1) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_82020E70A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_5C93B3A4A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `skill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_D5311670A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) DEFAULT NULL,
  `about_id` int(11) DEFAULT NULL,
  `cv_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9D087DB59` (`about_id`),
  UNIQUE KEY `UNIQ_1483A5E9CFE419E2` (`cv_id`),
  UNIQUE KEY `UNIQ_1483A5E93DA5256D` (`image_id`),
  KEY `IDX_1483A5E98BAC62AF` (`city_id`),
  KEY `IDX_1483A5E95FB14BA7` (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `city_id`, `about_id`, `cv_id`, `level_id`, `image_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `firstname`, `lastname`, `birthday`, `address`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'lsa', 'lsa', 'lsa@lsa.com', 'lsa@lsa.com', 1, 'm9z7wgf0o9wwwco880wooswkss0kggo', 'EgiNwBsyeyorYQRQOkqD4VnBq3jLGh1JPQQoGsjNrxGG9cqNWasDgtsn0boJmgjGDWkMwctp/1hwD+Knjnm/jQ==', '2014-01-26 16:21:51', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'lsa first', 'lsa last', NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, 'user1', 'user1', 'user1@lsa.com', 'user1@lsa.com', 1, 'ib4jc8lhh08c0s404kk0o80csk8oscc', 'zfJsBktNL6HrmXkiVBlaKKFPpRYOpEIynzo9rMgxKjK0S596xYG1mrNCGNQoxdZ/YAHU7udGSPyKHUH4w+SaFA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'user1 first', 'user1 last', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, 'user2', 'user2', 'user2@lsa.com', 'user2@lsa.com', 1, 'og5sz2v1bjko8ook48gokss4swgssww', '7INZZMJ9DAxrDt7C3eUb+y0hF6aJSRRMpoadAW/TXXmgZv49BmkObd7tQj//NuXmUBGukp1KEnnqpFIhQ8nNAQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'user2 first', 'user2 last', NULL, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `FK_B5F1AFE5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `FK_730876ADA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `FK_82020E70A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `FK_5C93B3A4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `FK_D5311670A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E93DA5256D` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `FK_1483A5E95FB14BA7` FOREIGN KEY (`level_id`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `FK_1483A5E98BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `FK_1483A5E9CFE419E2` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`id`),
  ADD CONSTRAINT `FK_1483A5E9D087DB59` FOREIGN KEY (`about_id`) REFERENCES `about` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
