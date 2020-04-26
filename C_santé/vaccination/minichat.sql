-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 avr. 2020 à 00:25
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdonnée`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(254) DEFAULT NULL,
  `message` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`) VALUES
(163, 'tanwin', 'gloooo'),
(164, 'lobs', 'regard'),
(165, 'dodo', 'name'),
(166, 'dodo', 'name');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
