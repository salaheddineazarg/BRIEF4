-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 nov. 2022 à 23:04
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `plytech`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'salaheddineazarag@gamil.com', 'salah123');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_c` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_c`, `name`) VALUES
(11, 'PLAYSTATIONS'),
(12, 'XBOX'),
(13, 'PC GAMER'),
(14, 'ACCESSIORES');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `id_c` int(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `prix`, `id_c`, `image`) VALUES
(6, 'PS4', 'playstation 4', 5000, 11, NULL),
(7, 'PS5', 'playstation 5', 5000, 11, NULL),
(8, 'XBOX_BLACK', 'XBOX BLACK', 4000, 12, NULL),
(9, 'XBOX_WHITE', 'XBOX WHITE', 4000, 12, NULL),
(11, 'PC GAMER_SOLO', 'PGS WHITE', 10000, 13, NULL),
(12, 'PC GAMER_COMP', 'PGC BLACK', 10000, 13, NULL),
(13, 'CONTROLLER', 'CONTROLLER_WHITE', 70.55, 14, NULL),
(14, 'CONTROLLER', 'CONTROLLER_BLACK', 70.55, 14, NULL),
(17, 'ss', 'sss', 4, 12, 'sssss'),
(18, 'll', 'sss', 4, 12, 'sssss'),
(19, 'llalal', 'sss', 4, 12, 'sssss'),
(20, 'llalal', 'sss', 4, 12, 'sssss'),
(21, 'llalal', 'sss', 4, 12, 'sssss'),
(22, 'sqlqh', 'just test', 9, 12, '6373f0349c535.jpg'),
(23, 'sqlqh', 'just test', 9, 12, '6374a33f195e9.jpg'),
(24, 'salah', 'just test', 334, 12, '6374a366253cc.jpg'),
(25, 'alae l gay', 'this ', 2121, 12, '6374eaabbe19c.jpg'),
(26, '', 'pp', 11, 12, '63750edf4acd3.jpg'),
(27, 'ee', 'ee', 11, 12, '63750f53078ca.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cfk` (`id_c`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_c` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_cfk` FOREIGN KEY (`id_c`) REFERENCES `category` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
