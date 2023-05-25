-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 18:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `directeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `date_adhesion` date NOT NULL,
  `genre` varchar(8) NOT NULL,
  `tuteur` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `date_de_naissance`, `date_adhesion`, `genre`, `tuteur`) VALUES
(6, 'OUERAOGO', 'Henri ', '2009-09-13', '2023-02-06', 'Masculin', 'Madina'),
(7, 'ZABRE', 'Boureima', '2023-05-17', '2023-02-06', 'masculin', 'chopper'),
(8, 'TAGNABOU', 'Bruno', '2000-12-08', '2023-02-06', 'masculin', 'Dao Razak'),
(9, 'DAO ', 'Razak', '2010-06-12', '2023-02-06', 'masculin', 'Odile'),
(11, 'VEBAMA', 'Wanematou', '2022-12-03', '2023-02-06', 'feminin', 'Henri'),
(13, 'TIENDREBEOGO', 'Pengdwendé Adéline Joceline', '2016-04-05', '2023-02-06', 'feminin', 'Eudes'),
(15, 'SOROGHO', 'Bernard', '1987-05-06', '2023-02-06', 'masculin', 'Kodjo'),
(16, 'SAWADOGO', 'Thérésina', '2023-10-01', '2023-02-06', 'feminin', 'kayouré Kontogsé'),
(18, 'YARO', 'Mahamadou', '2023-05-12', '2023-02-06', 'masculin', 'YARO'),
(26, 'OUERAOGO', 'Madina', '2011-06-13', '2023-02-06', 'masculin', 'Henri'),
(28, 'DABONE', 'Madina', '2013-10-15', '2023-02-06', 'feminin', 'Henri'),
(29, 'KABORE ', 'Sadia', '2023-05-10', '2023-02-06', 'feminin', 'EUDES'),
(30, 'MAIGA', 'Aboubacar', '1999-06-16', '2023-02-06', 'masculin', 'Vebama'),
(31, 'KODJO', 'Justin', '1984-05-09', '2023-02-06', 'masculin', 'Kodjo'),
(32, 'SAWADOGO', 'Tasseré', '1995-10-13', '2023-02-06', 'masculin', 'Zabré'),
(33, 'KABORE', 'YANN', '2011-04-16', '2023-02-06', 'masculin', 'AZAR'),
(34, 'SAWADOGO', 'Edwige', '2009-10-08', '2023-02-06', 'feminin', 'AZAR'),
(37, 'ZABRE', 'Boureima', '2023-05-06', '2023-05-18', 'masculin', 'hxjjdlskzL'),
(38, 'OUERAOGO', 'Safi', '2004-01-14', '2023-02-06', 'feminin', 'Madina'),
(41, 'CISSE', 'Amadou', '2002-02-05', '2023-02-06', 'masculin', 'Dicko'),
(94, 'YELYAORE', 'Eudes', '1992-01-22', '2023-02-06', 'masculin', 'KABORE Sadia');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
