-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 07 avr. 2020 à 21:50
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
-- Base de données :  `basedd`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(254) NOT NULL,
  `Prenom` varchar(254) NOT NULL,
  `Date de naissance` date NOT NULL,
  `Lieu de Résidence` varchar(254) NOT NULL,
  `Genre` varchar(254) NOT NULL,
  `Profession` varchar(254) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Groupe Sanguin` varchar(254) NOT NULL,
  `Électrophorèse` varchar(254) NOT NULL,
  `Maladie Génétique` varchar(254) NOT NULL,
  `Allergies` varchar(254) NOT NULL,
  `Sérelogie` varchar(254) NOT NULL,
  `Date de la dernière visite` date NOT NULL,
  `Médecin traitant` varchar(254) NOT NULL,
  `Email du médecin` varchar(254) NOT NULL,
  `Téléphone du médécin` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
