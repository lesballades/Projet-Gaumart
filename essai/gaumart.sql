-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 déc. 2017 à 15:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gaumart`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(90) NOT NULL,
  `societe` varchar(100) NOT NULL,
  `email` varchar(90) NOT NULL,
  `tel` int(13) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `societe`, `email`, `tel`, `message`) VALUES
(1, 'MICHEL', 'Marie', 'mozartetsinai@gmail.com', 34567789, 'Coucou'),
(2, 'MICHEL', 'Marie', 'mariemichel@blablam', 56565656, 'PROUT'),
(3, 'MICHEL', 'Marie', 'mariemichel@blablam', 56565656, 'PROUT'),
(4, 'MICHEL', 'Ginette', 'ginette', 34343434, 'Ginette'),
(5, 'MICHEL', 'Ginette', 'ginette', 34343434, 'Ginette'),
(6, 'MICHEL', 'Ginette', 'ginette', 34343434, 'Ginette'),
(7, 'MICHEL', 'Ginette', 'ginette', 34343434, 'Ginette'),
(8, 'MICHEL', 'Ginette', 'ginette', 34343434, 'Ginette');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
