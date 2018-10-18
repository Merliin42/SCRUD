-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 sep. 2018 à 08:00
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `scrud`
--

-- --------------------------------------------------------

--
-- Structure de la table `videogames`
--

DROP TABLE IF EXISTS `videogames`;
CREATE TABLE IF NOT EXISTS `videogames` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Support` varchar(20) DEFAULT NULL,
  `NoteMetacritic` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `videogames`
--

INSERT INTO `videogames` (`ID`, `Name`, `Support`, `NoteMetacritic`, `Date`) VALUES
(8, 'Hyper Light Drifter', 'Switch', NULL, '2018-09-06'),
(2, 'The Legend Of Zelda : Breath Of The Wild', 'Switch', 97, '2017-03-03'),
(7, 'Goldeneye 007', 'N64', NULL, NULL),
(4, 'Super Mario 64', 'N64', 95, '1996-06-23'),
(6, 'Hyper Light Drifter', 'Windows, OSX', 84, '2016-03-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
