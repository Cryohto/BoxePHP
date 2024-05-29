-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 mai 2024 à 02:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boxe`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE `arbitre` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `arbitre`
--

INSERT INTO `arbitre` (`ID`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'AZDAZDA', 'ZDADAZD', 'ADAZAZD'),
(2, 'azdazdad', 'azdazd', 'azdad'),
(3, 'AAA', 'AAAAAAA', 'AAAAAAAAAAAAAA'),
(4, 'ra', 'ra', 'ra'),
(5, 'z', 'z', 'z'),
(6, 'oooooooooo', 'aaaaa', 'oooooo');

-- --------------------------------------------------------

--
-- Structure de la table `boxeur`
--

CREATE TABLE `boxeur` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Nationalite` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Poids` int(11) NOT NULL,
  `Taille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `boxeur`
--

INSERT INTO `boxeur` (`ID`, `Nom`, `Prenom`, `Nationalite`, `Sexe`, `Categorie`, `Poids`, `Taille`) VALUES
(1, 'azdadazd', 'azdada', 'azdazdazd', 'Homme', 'poids lourd Homme', 33, 102),
(2, 'Yasin', 'LeConquerant', 'France', 'Homme', 'poids lourd Homme', 110, 200),
(3, 'zdaazd', 'zadazd', 'dzaazd', 'Homme', 'poids moyen Homme', 30, 100),
(4, 'z', 'z', 'z', 'Homme', 'poids léger Homme', 60, 100);

-- --------------------------------------------------------

--
-- Structure de la table `juge`
--

CREATE TABLE `juge` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `juge`
--

INSERT INTO `juge` (`ID`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'azdazdaz', 'dazdazdazd', 'azdadaz'),
(2, 'zz', 'zz', 'zz'),
(3, 'zz', 'zz', 'zz'),
(4, 'za', 'zz', 'zz'),
(5, 'z', 'z', 'z'),
(6, 'z', 'z', 'z');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(5, 'yasin', '$2y$10$MWOkmOnxHucF2g6e.OBnlOc0J6WPCSGgsoDS7wH/RZLPYFCQp7vcu'),
(6, 'yasin2', '$2y$10$PKBk/qFzICCgX1gApx7ijemiJtYSbI2/kqmn0ZJBgQHgLS.NX4AXC'),
(7, 'yasin', '$2y$10$uTOMQclFbajVkzwaqD/7Q..gS.PN2.QWIkIcJeDcZaW4rllSTsb6O'),
(8, 'sam', '$2y$10$4ZIszYYDXE10IK5EnAPO9eyEzAW27KtJLfpcSXw9v8NjuuCydch5W'),
(9, 'Max', '$2y$10$b.OAZKvZI8f2ilSPjVBU4OGo2wRquhcsqkIkNAod0hWGsdDJuvAYq'),
(10, 'maxx', '$2y$10$HSizOafPymK5EcNJrku6oebvlGHWwx.WylmiqTrFmphhGcpYKWsJa'),
(11, 'do', '$2y$10$4ejhEb1Juh.g0qvkarskJuxiA8P2OeiLZlQT4eJNC1ttO/whD.Ayq'),
(12, 'yasin', '$2y$10$81mEyC2gj5Dzd3UHek.GAuu9GmZac8X9pzFzIlVLI1Y9azsLBlNjO');

-- --------------------------------------------------------

--
-- Structure de la table `matches`
--

CREATE TABLE `matches` (
  `nommatch` varchar(255) NOT NULL,
  `boxeur1` int(255) NOT NULL,
  `boxeur2` int(255) NOT NULL,
  `arbitre` int(255) NOT NULL,
  `juge` int(255) NOT NULL,
  `ring` int(255) NOT NULL,
  `resultat` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ring`
--

CREATE TABLE `ring` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `longueur` int(11) NOT NULL,
  `largeur` int(11) NOT NULL,
  `hauteur` int(11) NOT NULL,
  `couleur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ring`
--

INSERT INTO `ring` (`ID`, `nom`, `longueur`, `largeur`, `hauteur`, `couleur`) VALUES
(1, 'azdad', 11, 11, 22, 'rouge'),
(2, 'z', 0, 0, 2, 'rouge');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arbitre`
--
ALTER TABLE `arbitre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `boxeur`
--
ALTER TABLE `boxeur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `juge`
--
ALTER TABLE `juge`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ring`
--
ALTER TABLE `ring`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arbitre`
--
ALTER TABLE `arbitre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `boxeur`
--
ALTER TABLE `boxeur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `juge`
--
ALTER TABLE `juge`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ring`
--
ALTER TABLE `ring`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
