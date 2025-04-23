-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 avr. 2025 à 18:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_website`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `naissance` varchar(20) DEFAULT NULL,
  `activite` varchar(50) DEFAULT NULL,
  `qualifications` text DEFAULT NULL,
  `semaine` varchar(10) DEFAULT NULL,
  `motivations` text DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `nom`, `prenom`, `naissance`, `activite`, `qualifications`, `semaine`, `motivations`, `date_inscription`) VALUES
(1, 'NASCIMENTO', '', '', '', '', '2', 'Motivé!', '2025-04-10'),
(2, 'ARTHUR', '', '', '', '', '1', 'j\'ai soif d\'apprendre!!!!!!', '2025-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `numcomp` int(11) NOT NULL,
  `libellecomp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`numcomp`, `libellecomp`) VALUES
(1, 'HTML 5'),
(2, 'CSS 3'),
(3, 'PHP'),
(4, 'MySQL'),
(5, 'HTML 5'),
(6, 'CSS 3'),
(7, 'HTML 5'),
(8, 'CSS 3'),
(9, 'PHP'),
(10, 'HTML 5'),
(11, 'CSS 3'),
(12, 'PHP'),
(13, 'PHP');

-- --------------------------------------------------------

--
-- Structure de la table `form3`
--

CREATE TABLE `form3` (
  `id` int(7) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `liked` varchar(30) NOT NULL,
  `motivations` varchar(125) NOT NULL,
  `mylevel` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `codlang` varchar(10) NOT NULL,
  `libellelang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`codlang`, `libellelang`) VALUES
('allemand', 'Allemand'),
('anglais', 'Anglais'),
('espagnol', 'Espagnol'),
('français', 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `maitriser`
--

CREATE TABLE `maitriser` (
  `id` int(11) NOT NULL,
  `numcomp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `maitriser`
--

INSERT INTO `maitriser` (`id`, `numcomp`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(3, 1),
(3, 2),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(5, 3),
(6, 4),
(14, 10),
(14, 11),
(14, 12),
(15, 13);

-- --------------------------------------------------------

--
-- Structure de la table `parler`
--

CREATE TABLE `parler` (
  `id` int(11) NOT NULL,
  `codlang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parler`
--

INSERT INTO `parler` (`id`, `codlang`) VALUES
(1, 'anglais'),
(1, 'français'),
(2, 'français'),
(3, 'allemand'),
(4, 'anglais'),
(5, 'allemand'),
(6, 'allemand'),
(6, 'anglais'),
(6, 'espagnol'),
(6, 'français'),
(14, 'allemand'),
(14, 'espagnol'),
(14, 'français'),
(15, 'anglais'),
(15, 'français');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `age`) VALUES
(1, 'NASCIMENTO', 'Zachario Blimond', 20),
(2, 'SAMBA', 'laobey salfou', 45),
(3, 'AGOSSOU', 'Igor', 17),
(4, 'ADJOVI', 'miguel', 14),
(5, 'QUENUM', 'maëlla', 16),
(6, 'DOMINGO', 'josias', 21),
(14, 'ADEGOUN', 'Marcel', 21),
(15, 'zz', 'zz', 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`numcomp`);

--
-- Index pour la table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`codlang`);

--
-- Index pour la table `maitriser`
--
ALTER TABLE `maitriser`
  ADD PRIMARY KEY (`id`,`numcomp`),
  ADD KEY `numcomp` (`numcomp`);

--
-- Index pour la table `parler`
--
ALTER TABLE `parler`
  ADD PRIMARY KEY (`id`,`codlang`),
  ADD KEY `codlang` (`codlang`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `numcomp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `form3`
--
ALTER TABLE `form3`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `maitriser`
--
ALTER TABLE `maitriser`
  ADD CONSTRAINT `maitriser_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maitriser_ibfk_2` FOREIGN KEY (`numcomp`) REFERENCES `competences` (`numcomp`) ON DELETE CASCADE;

--
-- Contraintes pour la table `parler`
--
ALTER TABLE `parler`
  ADD CONSTRAINT `parler_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parler_ibfk_2` FOREIGN KEY (`codlang`) REFERENCES `langues` (`codlang`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
