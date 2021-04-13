-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 13 avr. 2021 à 09:31
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `autocompletion_hardware`
--

DROP TABLE IF EXISTS `autocompletion_hardware`;
CREATE TABLE IF NOT EXISTS `autocompletion_hardware` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mot` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `autocompletion_hardware`
--

INSERT INTO `autocompletion_hardware` (`id`, `mot`) VALUES
(1, 'carte graphique'),
(2, 'processeur'),
(3, 'disque de stockage'),
(4, 'hdd'),
(5, 'ssd'),
(6, 'nvme'),
(7, 'ram'),
(8, 'alimentation'),
(9, 'carte mere'),
(10, 'ventirad'),
(11, 'watercooling'),
(12, 'boîtié pc'),
(13, 'fréquence'),
(14, 'coeur'),
(15, 'cuda'),
(16, 'thread'),
(17, 'mhz'),
(18, 'gravure'),
(19, 'refroidissement'),
(20, 'overclocking'),
(21, 'overclock'),
(22, 'tension'),
(23, 'socket'),
(24, 'modulaire'),
(25, 'non-modulaire'),
(29, 'clavier'),
(27, 'ray tracing'),
(28, 'pci-e'),
(30, 'souris'),
(31, 'ecran bureau'),
(32, 'ecran gamer'),
(33, 'ecran'),
(34, 'pc monté'),
(35, 'pc portable'),
(36, 'tour par minute'),
(37, 'rgb'),
(38, 'custom'),
(39, 'x3 fan'),
(40, 'x2 fan'),
(41, 'mémoire pc'),
(42, 'périphérique pc'),
(43, '1440p'),
(44, 'smart access memory'),
(45, 'vram'),
(46, 'résolution'),
(47, 'garantie'),
(48, 'chipset'),
(49, 'comet lake'),
(50, 'tiger lake');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
