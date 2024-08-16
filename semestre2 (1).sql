-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 août 2024 à 14:12
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `semestre2`
--

-- --------------------------------------------------------

--
-- Structure de la table `artdette`
--

DROP TABLE IF EXISTS `artdette`;
CREATE TABLE
IF NOT EXISTS `artdette`
(
  `idDette` int NOT NULL,
  `idArticle` int NOT NULL,
  `qte` int NOT NULL,
  `prix` decimal
(10,2) NOT NULL,
  KEY `idDette`
(`idDette`),
  KEY `idArticle`
(`idArticle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `artdette`
--

INSERT INTO `artdette` (`
idDette`,
`idArticle
`, `qte`, `prix`) VALUES
(1, 1, 5, 3000.00),
(2, 2, 10, 4500.00),
(3, 3, 15, 5000.00),
(4, 4, 20, 4000.00);

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE
IF NOT EXISTS `article`
(
  `idar` int NOT NULL AUTO_INCREMENT,
  `refar` varchar
(100) NOT NULL,
  `libar` varchar
(100) NOT NULL,
  `prixU` decimal
(10,2) NOT NULL,
  `qteStock` int NOT NULL,
  PRIMARY KEY
(`idar`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`
idar`,
`refar
`, `libar`, `prixU`, `qteStock`) VALUES
(1, 'ART001', 'Riz', 400.00, 100),
(2, 'ART002', 'Savon', 250.00, 60),
(3, 'ART003', 'Huile', 1300.00, 120),
(4, 'ART004', 'Sucre', 600.00, 80);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE
IF NOT EXISTS `client`
(
  `idcl` int NOT NULL AUTO_INCREMENT,
  `nomcl` varchar
(100) NOT NULL,
  `prenomcl` varchar
(100) NOT NULL,
  `telephone` varchar
(15) NOT NULL,
  `email` varchar
(100) NOT NULL,
  `adresse` text NOT NULL,
  `sexe` char
(1) NOT NULL,
  `photo` blob NOT NULL,
  `categorie` enum
('Solvable','Non Solvable','Fidele','Nouveau') NOT NULL,
  PRIMARY KEY
(`idcl`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`
idcl`,
`nomcl
`, `prenomcl`, `telephone`, `email`, `adresse`, `sexe`, `photo`, `categorie`) VALUES
(1, 'Thiam', 'Astou', '77 140 17 58', 'astouthiam@gmail.com', 'Kaolack', 'F', '', 'Solvable'),
(2, 'Diop', 'Asse', '78 488 32 06', 'assediop@gmail.com', 'Dakar', 'M', '', 'Non Solvable'),
(7, 'Fall', 'Aminata', '77 620 73 93', 'aminatafall@gmail.com', 'Nioro du Rip', 'F', '', 'Fidele'),
(8, 'Diop', 'Baba', '77 915 65 30', 'babadiop@Gmail.com', 'Passy', 'M', '', 'Nouveau');

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

DROP TABLE IF EXISTS `depot`;
CREATE TABLE
IF NOT EXISTS `depot`
(
  `iddep` int NOT NULL AUTO_INCREMENT,
  `numerodep` varchar
(100) NOT NULL,
  `montantdep` decimal
(10,2) NOT NULL,
  `datedep` date NOT NULL,
  `idClient` int NOT NULL,
  PRIMARY KEY
(`iddep`),
  KEY `idClient`
(`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `depot`
--

INSERT INTO `depot` (`
iddep`,
`numerodep
`, `montantdep`, `datedep`, `idClient`) VALUES
(1, 'DEP001', 60000.00, '2024-08-11', 1),
(2, 'DEP002', 80000.00, '2024-06-06', 2),
(3, 'DEP003', 40000.00, '2024-05-12', 3),
(4, 'DEP004', 75000.00, '2024-04-20', 4);

-- --------------------------------------------------------

--
-- Structure de la table `dette`
--

DROP TABLE IF EXISTS `dette`;
CREATE TABLE
IF NOT EXISTS `dette`
(
  `iddet` int NOT NULL AUTO_INCREMENT,
  `numerodet` varchar
(100) NOT NULL,
  `datedet` date NOT NULL,
  `montantdet` decimal
(10,0) NOT NULL,
  `idClient` int NOT NULL,
  PRIMARY KEY
(`iddet`),
  KEY `idClient`
(`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dette`
--

INSERT INTO `dette` (`
iddet`,
`numerodet
`, `datedet`, `montantdet`, `idClient`) VALUES
(1, 'DET001', '2024-08-02', 20000, 1),
(2, 'DET002', '2024-08-18', 35000, 2),
(3, 'DET003', '2024-08-21', 25000, 3),
(4, 'DET004', '2024-08-13', 15000, 4),
(5, 'DET006', '2024-08-12', 56780, 1);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE
IF NOT EXISTS `paiement`
(
  `idpaie` int NOT NULL AUTO_INCREMENT,
  `numeropaie` varchar
(100) NOT NULL,
  `datepaie` date NOT NULL,
  `montantpaie` decimal
(10,2) NOT NULL,
  `idDette` int NOT NULL,
  PRIMARY KEY
(`idpaie`),
  KEY `idDette`
(`idDette`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`
idpaie`,
`numeropaie
`, `datepaie`, `montantpaie`, `idDette`) VALUES
(1, 'PAIE001', '2024-02-06', 4500.00, 1),
(2, 'PAIE002', '2024-03-12', 25000.00, 2),
(3, 'PAIE003', '2024-04-22', 3000.00, 3),
(4, 'PAIE004', '2024-08-21', 35000.00, 4);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE
IF NOT EXISTS `profile`
(
  `idprof` int NOT NULL AUTO_INCREMENT,
  `libprof` varchar
(100) NOT NULL,
  PRIMARY KEY
(`idprof`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`
idprof`,
`libprof
`) VALUES
(1, 'Vendeur'),
(2, 'Enseignant');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE
IF NOT EXISTS `users`
(
  `idu` int NOT NULL AUTO_INCREMENT,
  `nomu` varchar
(100) NOT NULL,
  `prenomu` varchar
(100) NOT NULL,
  `login` varchar
(100) NOT NULL,
  `mdp` varchar
(150) NOT NULL,
  `idProfile` int NOT NULL,
  PRIMARY KEY
(`idu`),
  KEY `idProfile`
(`idProfile`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`
idu`,
`nomu
`, `prenomu`, `login`, `mdp`, `idProfile`) VALUES
(1, 'Diop', 'Madieume', '', 'password', 1),
(2, 'Niass', 'Aliou', '', 'password', 2),
(3, 'Fall', 'Amina', '', 'password', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
