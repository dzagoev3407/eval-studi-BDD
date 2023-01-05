-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 05 jan. 2023 à 15:12
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `nom_cinema` varchar(255) NOT NULL,
  `nom` varchar(155) NOT NULL,
  `prenom` varchar(155) NOT NULL,
  `nom_film` varchar(100) NOT NULL,
  `num_place` int(11) NOT NULL,
  `tarif` varchar(34) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom_cinema`, `nom`, `prenom`, `nom_film`, `num_place`, `tarif`, `email`) VALUES
(1, 'Cinéma Régain', 'Bonnefoy', 'Kévin', 'Spiderman No-Way Home', 108, '7,50€', 'kevin.bonnefoy8407@outlook.fr'),
(2, 'Cinéma 7 nefs', 'Grand', 'Bobby', 'Creed II', 105, '7,50€', 'boby3407'),
(4, 'Cinéma Régain', 'Ricard', 'Yves', 'Rambo', 19, '9,50€', 'ricardo@gmail.com'),
(6, 'Gaumont - Montpellier', 'Pastis', 'Marcel', 'Ronaldo : Le film', 123, '9,50€', 'pastismarcel@gmail.com'),
(7, 'Gaumont - Montpellier', 'Pastis', 'Marcel', 'Ronaldo : Le film', 62, '9,50€', 'pastismarcel@gmail.com'),
(11, 'Cinéma Gaumont - Montpellier', 'Dupont', 'Jean', 'Spiderman No-Way Home', 161, '7,50€', 'dupontjean34@orange.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
