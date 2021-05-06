-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 07 mai 2020 à 16:39
-- Version du serveur :  8.0.18
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
-- Base de données :  `2tak hardware`
--
CREATE DATABASE IF NOT EXISTS `2tak hardware` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `2tak hardware`;

-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

DROP TABLE IF EXISTS `alimentation`;
CREATE TABLE IF NOT EXISTS `alimentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` text NOT NULL,
  `Puissance` int(11) NOT NULL,
  `Rendement` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `boitier`
--

DROP TABLE IF EXISTS `boitier`;
CREATE TABLE IF NOT EXISTS `boitier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` int(11) NOT NULL,
  `Format` int(11) NOT NULL,
  `Port_usb` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carte_graphique`
--

DROP TABLE IF EXISTS `carte_graphique`;
CREATE TABLE IF NOT EXISTS `carte_graphique` (
  `id` int(11) NOT NULL,
  `Marque` text NOT NULL,
  `Memoire` int(11) NOT NULL,
  `Type_memoire` text NOT NULL,
  `Prix` float NOT NULL,
  `Modele` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `carte_mere`
--

DROP TABLE IF EXISTS `carte_mere`;
CREATE TABLE IF NOT EXISTS `carte_mere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` text NOT NULL,
  `Chipset` text NOT NULL,
  `Format` text NOT NULL,
  `Carte_wifi` tinyint(1) NOT NULL,
  `Multi_gpu` tinyint(1) NOT NULL,
  `Usb` text NOT NULL,
  `Connecteur` text NOT NULL,
  `Led` tinyint(1) NOT NULL,
  `Prix` float NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `casque`
--

DROP TABLE IF EXISTS `casque`;
CREATE TABLE IF NOT EXISTS `casque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Prix` double NOT NULL,
  `SansFil` text NOT NULL,
  `Usb` text NOT NULL,
  `Marque` text NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clavier`
--

DROP TABLE IF EXISTS `clavier`;
CREATE TABLE IF NOT EXISTS `clavier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Switch` text NOT NULL,
  `Modele` text NOT NULL,
  `Marque` text NOT NULL,
  `Retroeclairage` text NOT NULL,
  `Connexion` text NOT NULL,
  `Prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecran`
--

DROP TABLE IF EXISTS `ecran`;
CREATE TABLE IF NOT EXISTS `ecran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` text NOT NULL,
  `Taille` text NOT NULL,
  `Frequence` int(11) NOT NULL,
  `Dalle` text NOT NULL,
  `TempsDeReaction` int(11) NOT NULL,
  `Resolution` text NOT NULL,
  `Compatibilité` text NOT NULL,
  `Modele` text NOT NULL,
  `Prix` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecran`
--

INSERT INTO `ecran` (`id`, `Marque`, `Taille`, `Frequence`, `Dalle`, `TempsDeReaction`, `Resolution`, `Compatibilité`, `Modele`, `Prix`) VALUES
(1, 'MSI', '24', 144, 'incurvée', 1, '1920 x 1080', 'Adaptive Sync', 'Optix MAG241CV', 200),
(2, 'AOC', '27', 144, 'Full HD', 1, '1920 x 1080', 'Adaptive Sync', '27G2U', 250),
(3, 'Acer', '23.6', 75, 'TFT TN', 1, '1920 x 1080', 'FreeSync', 'KG241Qbmiix', 120);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Identifiant` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Mot_de_passe` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Rang` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Inscrit',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`Id`, `Identifiant`, `Email`, `Mot_de_passe`, `Rang`) VALUES
(1, 'Adrien', 'tic66@hotmail.com', '142429', 'Administrateur'),
(2, 'Admin', 'tic66@hotmail.com', '142429', 'Administrateur'),
(3, 'Dylan', 'Dylan@subaquatique.fr', 'Azerty1234', 'Administrateur'),
(4, 'Vivian', 'Vivian@subaquatique.fr', '1234', 'Inscrit'),
(5, 'Victime', 'Victime@subaquatique.fr', '1234', 'Inscrit'),
(6, 'Teo', 'Teo@subaquatique.fr', 'JetaimeAdriensansH', 'Inscrit'),
(7, 'Ludo', 'Ludovic@Victime.fr', 'GTX10603G', 'Inscrit'),
(8, 'test', 'test@test.com', 'test', 'Inscrit'),
(9, 'Maxime', 'Victimiselavictime@BDSMMaster.fr', 'Dominateur', 'Inscrit');

-- --------------------------------------------------------

--
-- Structure de la table `micro`
--

DROP TABLE IF EXISTS `micro`;
CREATE TABLE IF NOT EXISTS `micro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Prix` double NOT NULL,
  `Marque` text NOT NULL,
  `Utilisation` text NOT NULL,
  `Directivite` text NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `processeur`
--

DROP TABLE IF EXISTS `processeur`;
CREATE TABLE IF NOT EXISTS `processeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` text NOT NULL,
  `Socket` text NOT NULL,
  `Nbr_coeur` int(11) NOT NULL,
  `Frequence` float NOT NULL,
  `PrixUnitaireHT` float NOT NULL,
  `Modele` text NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `processeur`
--

INSERT INTO `processeur` (`id`, `Marque`, `Socket`, `Nbr_coeur`, `Frequence`, `PrixUnitaireHT`, `Modele`, `Quantite`) VALUES
(1, 'Intel', 'LGA 1151', 4, 4.2, 220, 'i5-7600K', 1),
(2, 'Intel', 'LGA 1151', 4, 4.2, 220, 'i5-7600K', 5);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Famille` text NOT NULL,
  `Marque` text NOT NULL,
  `Modele` text NOT NULL,
  `Format` text NOT NULL,
  `Processeur` text NOT NULL,
  `Carte_graphique` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Description` text NOT NULL,
  `PrixUnitaireHT` double NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `Famille`, `Marque`, `Modele`, `Format`, `Processeur`, `Carte_graphique`, `Description`, `PrixUnitaireHT`, `Quantite`) VALUES
(1, 'Tour', 'Asus', 'ROG Huracan (G21CN-FR102T)', 'Tour Gamer', 'Intel Core i7 8700', 'NVIDIA GeForce GTX1060 6GB', 'PC de bureau Gamer - Intel Core i7-8700 Hexa Core 3.2 GHz - 8 Go DDR4 - SSD 128 Go - HDD 1 To - Nvidia GeForce GTX 1060 - Windows 10', 1299.99, 1),
(2, 'Tour', 'HP', 'Pavilion Gaming 690-0117nf (6ZM33EA)', 'Tour Gamer', 'Intel Core i5-9400F', 'NVidia GeForce GTX 1660 6GB GDDR5', 'PC de bureau - Intel Core i5-9400F Hexa Core 2.9 GHz - 8 Go DDR4 - SSD 128 Go - HDD 1 To - NVidia GeForce GTX 1660 - Windows 10 - Clavier et Souris inclus', 799.99, 1),
(3, 'Tour', 'HP', 'Pavilion TP01-0070nf', 'Tour Bureautique', 'Intel Core i5 9400', 'Intel HD 630', 'PC de bureau - Intel Core i5-9400 Hexa Core 2.9 GHz - 8 Go DDR4 - SSD 128 Go / HDD 1 To - Windows 10 - Clavier et Souris inclus', 500, 1),
(4, 'Tour', 'Apple', 'iMac Pro 27 pouces Rétina 5K', 'PC Tout en un', 'Intel Xeon W', 'AMD Radeon Pro Vega 56', 'PC All-in-One 27\'\' Retina 5K (5120 x 2880) - Intel Xeon W Octo-Core 3.2 GHz - 32 Go DDR4 - SSD 1 To - AMD Radeon Pro Vega 56 - MacOSs', 5000, 1),
(5, 'Tour', 'Apple', 'iMac 27 pouces Rétina 5K 2019', 'PC Tout en un', 'Intel Core i5', 'AMD Radeon Pro 570X', 'PC All-in-One 27\'\' Retina 5K (5120 x 2880) - Intel Core i5 Hexa 3 GHz - 8 Go DDR4 - Fusion Drive 1 To - AMD Radeon Pro 570X - MacOS - Clavier et Souris inclus', 1800, 1),
(6, 'Tour', 'MSI', 'Aegis 3 (8RC-011FR)', 'Tour Gamer', 'Intel Core i7 8700', 'MSI GTX 1060 6GT OCV1 GDDR5', 'PC de bureau Gamer - Intel Core i7-8700 Hexa-Core 3.2 GHz - 8 Go DDR4 - SSD 256 Go - HDD 2 To - MSI GTX 1060 - Windows 10', 999.99, 2),
(8, 'Tour', 'MSI', 'Trident A (9SD-664EU)', 'Tour Gamer', 'Intel Core i7-9700F', 'MSI GeForce RTX 2070 Ventus', 'PC de bureau Gamer - Intel Core i7-9700F Octa Core 3 GHz - 16 Go DDR4 - SSD 512 Go - HDD 2 To - Nvidia GeForce RTX 2070 Super Ventus - Windows 10', 1699.99, 3),
(11, 'Laptop', 'Asus', 'VivoBook 15 (F555QA-DM396T)', 'PC Portable', 'AMD A12-9720P', 'Chipset AMD', 'PC Portable 15.6\'\' Full HD (1920 x 1080) - AMD A12-9720P Quad Core 2.7 GHz - 4 Go DDR4 - SSD 128 Go - HDD 1 To - 2.03 Kg - Windows 10', 399.99, 5),
(12, 'Laptop', 'Apple', 'MacBook Pro 16 Touch Bar 1 To Argent (2019)', 'PC Portable', 'Intel Core i9', 'AMD Radeon Pro 5500M', 'PC Portable 16\'\' Retina (3072 x 1920) - Intel Core i9 Octo Core 2.3 GHz - 16 Go DDR4 - SSD 1 To - AMD Radeon Pro 5500M - 2.0 Kg - MacOS', 3200, 3),
(13, 'Laptop', 'MSI', 'GE75 8RE-068XFR Raider RGB', 'PC Portable Gamer', 'Intel Core i7', 'Nvidia GeForce GTX 1060', 'PC Portable Gamer 17.3\'\' Full HD (1920 x 1080) 144 Hz - Intel Core i7-8750H Hexa Core 2.2 GHz - 16 Go DDR4 - SSD 256 Go - HDD 1 To - Nvidia GeForce GTX 1060 - 2.61 Kg - Sans Windows', 1149.99, 2),
(14, 'Laptop', 'Asus', 'TUF Gaming (505DD-AL062T)', 'PC Portable Gamer', 'AMD Ryzen 5 3550H', 'Nvidia GeForce GTX 1050', 'PC Portable Gamer 15.6\'\' Full HD (1920 x 1080) 120 Hz - AMD Ryzen 5 3550H Quad Core 2.1 GHz - 8 Go DDR4 - SSD 512 Go - Nvidia GeForce GTX 1050 - 2.2 Kg - Windows 10', 689.99, 10);

-- --------------------------------------------------------

--
-- Structure de la table `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` text NOT NULL,
  `Type_ddr` int(11) NOT NULL,
  `Frequence` int(11) NOT NULL,
  `Latence` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `refroidissement`
--

DROP TABLE IF EXISTS `refroidissement`;
CREATE TABLE IF NOT EXISTS `refroidissement` (
  `id` int(11) NOT NULL,
  `Marque` text NOT NULL,
  `Watercooling` text NOT NULL,
  `Ventirad` text NOT NULL,
  `Ventilateur` text NOT NULL,
  `Prix` int(11) NOT NULL,
  `Modele` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `souris`
--

DROP TABLE IF EXISTS `souris`;
CREATE TABLE IF NOT EXISTS `souris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Connexion` text NOT NULL,
  `Prix` int(11) NOT NULL,
  `Capteur` text NOT NULL,
  `Marque` text NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stockage`
--

DROP TABLE IF EXISTS `stockage`;
CREATE TABLE IF NOT EXISTS `stockage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type_disque` text NOT NULL,
  `Marque` text NOT NULL,
  `Capacité` int(11) NOT NULL,
  `Vitesse` text NOT NULL,
  `Prix` float NOT NULL,
  `Modele` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
