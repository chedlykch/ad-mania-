-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 mai 2021 à 03:22
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

DROP TABLE IF EXISTS `publicite`;
CREATE TABLE IF NOT EXISTS `publicite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `id_article` int(11) NOT NULL DEFAULT '0',
  `prix` decimal(10,0) NOT NULL,
  `id_sponsor` int(11) NOT NULL DEFAULT '0',
  `mail` varchar(30) DEFAULT NULL,
  `paye` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_sponsor` (`id_sponsor`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`id`, `type`, `nom`, `id_article`, `prix`, `id_sponsor`, `mail`, `paye`) VALUES
(12, 'hya', 'aymen', 88, '55', 5, 'aymen.ellouze@gmail.com', 1),
(13, 'normal', 'aaa', 66, '68', 4, 'aymen.ellouze.2000@gmail.com', 0),
(14, 'hya', 'daa', 1, '666', 0, 'jnfa@gjza.caz', 0),
(15, 'oooodz', 'fff', 58, '952', 0, 'zadaz@hzpa.za', 0),
(16, 'hhhtt', 'daz', 55, '55', 0, 'DOOPREf@jjfl.oog', 0),
(17, 'hhhtt', 'daz', 55, '55', 0, 'DOOPREf@jjfl.oog', 0),
(18, 'yui', 'daz', 55, '55', 5, 'dzk5@d50.dza', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

DROP TABLE IF EXISTS `sponsor`;
CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `societe` varchar(30) NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nom`, `societe`, `duree`) VALUES
(5, 'aymouna', '', 4),
(4, 'mod', '0', 4),
(6, 'gg', '077', 7),
(7, 'ff', 'ff', 7),
(8, 'fd', 'negos', 5),
(9, '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
