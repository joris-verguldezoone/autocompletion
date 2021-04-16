-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 avr. 2021 à 09:33
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
  `img` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `autocompletion_hardware`
--

INSERT INTO `autocompletion_hardware` (`id`, `mot`, `img`) VALUES
(1, 'carte graphique', 'https://www.config-gamer.fr/media/k2/items/cache/39914761c311579146fa544e4327b866_M.jpg'),
(2, 'processeur', 'https://www.cowcotland.com/images/news/2020/01/penurie-processeur-cpu-intel-annee-2020.jpg'),
(3, 'disque de stockage', 'https://media.ldlc.com/r1600/ld/products/00/05/29/53/LD0005295349_2_0005295627_0005295656.jpg'),
(4, 'hdd', 'https://www.cdiscount.com/pdt2/8/0/6/1/700x700/sea8719706002806/rw/seagate-disque-dur-interne-barracuda-3to-5.jpg'),
(5, 'ssd', 'https://images-na.ssl-images-amazon.com/images/I/61U7T1koQqL._AC_SY450_.jpg'),
(6, 'nvme', 'https://media.ldlc.com/r1600/ld/products/00/04/91/58/LD0004915828_2.jpg'),
(7, 'ram', 'https://dinaninformatique.6temflex.com/wp-content/uploads/sites/2220/2018/04/shutterstock_182981177.jpg'),
(8, 'alimentation', 'https://media.materiel.net/r550/products/MN0005310999_1.jpg'),
(9, 'carte mere', 'https://www.cdiscount.com/pdt2/g/p/l/1/300x300/mpgx570gamingpl/rw/msi-carte-mere-mpg-x570-gaming-plus-am4.jpg'),
(10, 'ventirad', 'https://www.topachat.com/boutique/img/in/in1010/in10100051/in1010005102@2x.jpg'),
(11, 'watercooling', 'https://images-na.ssl-images-amazon.com/images/I/61f39Itf8gL._AC_SX425_.jpg'),
(12, 'boîtié pc', 'https://www.cybertek.fr/images_produits/4a7c5400-4ca1-4363-8d10-b93637e81e63.jpg'),
(13, 'fréquence', 'https://i.ytimg.com/vi/2-dfgyx1TQc/maxresdefault.jpg'),
(14, 'coeur', 'https://lecrabeinfo.net/app/uploads/2013/03/le-role-des-processeurs-et-de-leurs-coeurs-5695118229495.jpg'),
(15, 'cuda', 'https://blog.octo.com/wp-content/uploads/2013/01/Archi-Kepler.png'),
(16, 'thread', 'https://nyu-cds.github.io/python-gpu/fig/02-threadmapping.png'),
(17, 'mhz', 'https://img.tfd.com/cde/MHZ.GIF'),
(18, 'gravure', 'https://www.cowcotland.com/images/news/2018/10/process-gravure-tsmc-7nm-5nm.jpg'),
(19, 'refroidissement', 'https://i.ytimg.com/vi/Dk3V64ZSsEI/maxresdefault.jpg'),
(20, 'overclocking', 'https://q5r8g8c5.rocketcdn.me/wp-content/uploads/2015/01/Overclocking-troll.jpg'),
(21, 'overclock', 'https://i.ytimg.com/vi/qLGM_kHf_tU/maxresdefault.jpg'),
(22, 'tension', 'https://www.manutan.fr/img/S/GRP/ST/AIG3023332.jpg'),
(23, 'socket', 'https://upload.wikimedia.org/wikipedia/commons/6/67/Socket_1151_closed_01.jpg'),
(24, 'modulaire', 'https://media.materiel.net/cms/materiel_net/Guides_d_achat/Guide-alimentations/guide-alimentation-cables.jpg'),
(25, 'non-modulaire', 'https://www.monsieurcyberman.com/30506/alimentation-modulaire-atx-pc-silverstone-sst-st75f-750w-power-supply.jpg'),
(29, 'clavier', 'https://bv-prd-fbi-fr-media.s3.amazonaws.com/pub/media/catalog/product/cache/ef4a54899b4f9d060853d6e60ec5e0f4/8/7/87870ab997e78b5b5a8ce7065ef7a69634214075_400004694.jpg'),
(27, 'ray tracing', 'https://tt-hardware.com/wp-content/uploads/2020/11/Ray-tracing_ext.jpg'),
(28, 'pci-e', 'https://www.malekal.com/wp-content/uploads/Pci_Express_Slot.jpg'),
(30, 'souris', 'https://www.rueducommerce.fr/medias/7d31a6025bd93798896e038fd8cd33ee/p_1000x1000/souris-gaming-rgb-advance-gta-230-led-5-modes-3200-dpi.jpg'),
(31, 'ecran bureau', 'https://www.cdiscount.com/pdt2/4/9/7/1/700x700/lg3700810025497/rw/ecran-17-pouces-pour-pc-bureau-toute-marque-hp-del.jpg'),
(32, 'ecran gamer', 'https://www.cdiscount.com/pdt2/0/4/9/1/700x700/9s63ea21t049/rw/ecran-pc-gamer-incurve-msi-optix-mag241cvsfr-2.jpg'),
(33, 'ecran', 'https://image.darty.com/informatique/accessoire_bureau/ecran_plat/hp_22_es_s1710204333292A_160139732.jpg'),
(34, 'pc monté', 'https://www.topachat.com/boutique/img/in/in1010/in10107609/04.jpg'),
(35, 'pc portable', 'https://image.darty.com/informatique/ordinateur_portable-portable/portable/asus_s501uaej142i5_6_1_56_s1810194600916A_162748425.jpg'),
(36, 'tour par minute', 'https://www.cdiscount.com/pdt2/3/1/0/1/700x700/auc5393178934310/rw/dur-ssd-interne-2280-m-2-m2-nvme-pcie-a-semi-condu.jpg'),
(37, 'rgb', 'https://images-na.ssl-images-amazon.com/images/I/61b5KqbgJzL._AC_SX425_.jpg'),
(38, 'custom', 'https://staticr1.blastingcdn.com/media/photogallery/2017/7/24/660x290/b_1200x675/pin-by-kamil-sqad-on-graphic-cards-gpu-pinterest-pinterestcom_1462837.jpg'),
(39, 'x3 fan', 'https://www.tomshardware.fr/content/uploads/sites/3/2020/09/inno3d-c.jpg'),
(40, 'x2 fan', 'https://www.cowcotland.com/images/news/2019/08/inno3d-1.jpg'),
(41, 'mémoire pc', 'https://www.monpcsurmesure.fr/img/visuels/mini/Corsair-vengeance-blu.jpg'),
(42, 'périphérique pc', 'http://bacstmg.fr/cours/informatique/res/peripheriques.jpg'),
(43, '1440p', 'https://e1.pngegg.com/pngimages/624/411/png-clipart-video-formats-icon-1440p-thumbnail.png'),
(44, 'smart access memory', 'https://i.ytimg.com/vi/Kmp_rW4cl38/maxresdefault.jpg'),
(45, 'vram', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/SEC_VRAM.jpg'),
(46, 'résolution', 'https://www.synopi.com/wp-content/uploads/2019/07/video-resolution.png'),
(47, 'garantie', 'https://www.undefipourlavie.com/wp-content/uploads/2016/04/GARANTIE_SATISFACTION-300x300.jpg'),
(48, 'chipset', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Pentium_E2220_with_Intel_i945GC_Chipset.jpg'),
(49, 'comet lake', 'https://m.media-amazon.com/images/I/61ZY21ATOuL._AC_SS450_.jpg'),
(50, 'tiger lake', 'https://q5r8g8c5.rocketcdn.me/wp-content/uploads/2020/09/tiger-Lake-une.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
