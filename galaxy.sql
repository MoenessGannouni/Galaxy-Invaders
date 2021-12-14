-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 déc. 2021 à 20:59
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `galaxy`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_ct` int(11) NOT NULL,
  `Category_Pr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_ct`, `Category_Pr`) VALUES
(2, 'Telescopes'),
(3, 'Jumelles'),
(4, 'Lunettes astro');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `ID_Pr` int(11) NOT NULL,
  `Name_Pr` varchar(100) NOT NULL,
  `Price_Pr` int(11) NOT NULL,
  `Quantity_Pr` int(11) NOT NULL,
  `Image_Pr` varchar(200) NOT NULL,
  `Type_Pr` varchar(100) NOT NULL,
  `Category_Pr` varchar(100) NOT NULL,
  `Description_Pr` text NOT NULL,
  `id_ct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`ID_Pr`, `Name_Pr`, `Price_Pr`, `Quantity_Pr`, `Image_Pr`, `Type_Pr`, `Category_Pr`, `Description_Pr`, `id_ct`) VALUES
(8, 'JumellesKowaGenesis', 1250, 250, 'product-img-2.jpg', 'Kowa', 'Jumelles', 'a', 3),
(9, 'LunetteCelestronAstroMaster', 850, 500, 'product-img-3.jpg', 'Celestron', 'Lunettesastro', 'Lunette Celestron AstroMaster EQ motorisee', 4),
(19, 'Lunette TravelScope 70 AZ Celestron', 69, 200, 'product-img-4.jpg', 'Celestron', 'LunettesAstro', 'Elle se range rapidement dans son sac à dos très pratique et peut ainsi être emportée partout où vous en aurez besoin.', 4),
(20, 'Jumelles BT-120 SF avec oculaires 62° LER 20mm', 1600, 200, 'product-img-5.jpg', 'Ler', 'Jumelles', 'De haute qualite optique avec larges objectifs de 120mmidéal pour l\'observation du ciel étoilé', 3),
(21, 'Télescope StarSense Explorer DX 130AZ', 2500, 60, 'avatar-4.jpg', 'StarSense', 'Telescopes', 'Positionnez votre Smartphone sur le support adapté de cet instrument et le pointage des objets célestes n\'aura jamais été aussi simple', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_ct`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Pr`),
  ADD KEY `cle_etr` (`id_ct`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `ID_Pr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cle_etr` FOREIGN KEY (`id_ct`) REFERENCES `categorie` (`id_ct`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
