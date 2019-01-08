-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 08 Janvier 2019 à 15:24
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `nbClient` int(11) DEFAULT NULL,
  `nbProduit` int(11) DEFAULT NULL,
  `texte` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panierProduit`
--

CREATE TABLE `panierProduit` (
  `userId` int(11) NOT NULL,
  `produitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panierProduit`
--

INSERT INTO `panierProduit` (`userId`, `produitID`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `nbProduit` int(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `taille` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`nbProduit`, `nom`, `description`, `prix`, `photo`, `taille`) VALUES
(1, 'Mr Cenz', 'Technique : Peinture aérosol sur toile', 500, 'visage.jpg', '60*60cm'),
(2, 'la femme moderne assise endormie', 'Technique : Huile ou acrylique', 500, '10665-DSC_0002.JPG', '100*100cm'),
(3, 'Symphonie en jaune', 'peinture abstraite technique mixte: coulures collage encre de chine ', 400, '11328-IMG_2153_1.jpg', '80*80cm'),
(4, 'Julien Lenotre', 'Lampe angulaire', 2200, 'rattanachai-singtrangarn-1054936-unsplash.jpg', '115*80cm'),
(5, 'Fred Boutet', 'Abstract 10 2018', 1000, 'abstract-art-artistic-990824.jpg', '100*100*3cm'),
(6, 'Stoz', 'WW45H 2018', 660, 'photo-1467840125074-ab6ec13ef683.jpeg', '102*40*20cm'),
(7, 'Milburn-Foster', 'Men fighting 2017', 3400, '428484_1_original.webp', '130*97*2cm'),
(8, 'Marie Tissot', 'La colombe 2018', 4600, 'abstract-art-board-889839.jpg', '54*73*2cm'),
(9, 'Roland Ferrari', 'Bleu 2018', 1000, '413107_1_original.jpg', '92*73cm'),
(10, 'Tic', 'The laughing heart 2018', 1450, 'rey.jpg', '130*80*1cm');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `nmClient` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `passw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`nmClient`, `nom`, `prenom`, `email`, `passw`) VALUES
(1, 'test', 'test', 'test@test.fr', 'aze'),
(2, 'qsd', 'qsd', 'aze@aze.fr', 'qsd'),
(3, 'testnom', 'testprenom', 'test@test.test', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD KEY `nbProduit` (`nbProduit`),
  ADD KEY `nbClient` (`nbClient`);

--
-- Index pour la table `panierProduit`
--
ALTER TABLE `panierProduit`
  ADD KEY `userId` (`userId`),
  ADD KEY `produitID` (`produitID`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`nbProduit`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nmClient`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `nbProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `nmClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`nbClient`) REFERENCES `users` (`nmClient`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`nbProduit`) REFERENCES `produit` (`nbProduit`);

--
-- Contraintes pour la table `panierProduit`
--
ALTER TABLE `panierProduit`
  ADD CONSTRAINT `panierProduit_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`nmClient`),
  ADD CONSTRAINT `panierProduit_ibfk_2` FOREIGN KEY (`produitID`) REFERENCES `produit` (`nbProduit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
