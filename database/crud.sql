-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 17:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `crud`
--

DROP TABLE IF EXISTS `crud`;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `phone`, `city`) VALUES
(40, 'Rosath', 'amohapatra7000@gmail.com', '9114950911', 'balasore'),
(42, 'Portatif', 'rachelle@gmail.com', '61001200', 'Parakou'),
(43, 'arpitaaaa', 'amohapatra7000@gmail.com', '9114950911', 'balasore'),
(46, 'Dado', 'dado@gamil.com', '51474641', 'Parakou'),
(48, 'Administrator', 'admin@admin.com', '21033427', 'Cotonou');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
