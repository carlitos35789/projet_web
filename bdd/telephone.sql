-- Adminer 4.8.1 MySQL 8.0.21 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `co_bancaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `etat`;
CREATE TABLE `etat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `facture`;
CREATE TABLE `facture` (
  `client_id` int NOT NULL,
  `telephone_id` int NOT NULL,
  `prix_rachat` float NOT NULL,
  PRIMARY KEY (`client_id`),
  KEY `telephone_id` (`telephone_id`),
  CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`telephone_id`) REFERENCES `telephone` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `marque`;
CREATE TABLE `marque` (
  `id` int NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `modele`;
CREATE TABLE `modele` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `prix_origine` float NOT NULL,
  `os_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `os_id` (`os_id`),
  CONSTRAINT `modele_ibfk_1` FOREIGN KEY (`os_id`) REFERENCES `os` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `os`;
CREATE TABLE `os` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `telephone`;
CREATE TABLE `telephone` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modele_id` int NOT NULL,
  `os_id` int NOT NULL,
  `marque_id` int NOT NULL,
  `prix_origine` float NOT NULL,
  `etat_id` int NOT NULL,
  `status_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `modele_id` (`modele_id`),
  KEY `os_id` (`os_id`),
  KEY `marque_id` (`marque_id`),
  KEY `etat_id` (`etat_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `telephone_ibfk_1` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`id`),
  CONSTRAINT `telephone_ibfk_2` FOREIGN KEY (`os_id`) REFERENCES `os` (`id`),
  CONSTRAINT `telephone_ibfk_3` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`),
  CONSTRAINT `telephone_ibfk_4` FOREIGN KEY (`etat_id`) REFERENCES `etat` (`id`),
  CONSTRAINT `telephone_ibfk_5` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2022-02-22 13:19:40