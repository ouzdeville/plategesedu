-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 14 août 2020 à 16:53
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plategesedu`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `code` varchar(15) NOT NULL,
  `profil` varchar(15) NOT NULL,
  `Login` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `email`, `tel`, `code`, `profil`, `Login`, `Password`) VALUES
(1, 'MBAYE', 'Madame', 'mbayeessa@gmail.com', '77', '12', 'Secretaire ', 'mbaye', '123');

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `ID_MAT` int(15) NOT NULL,
  `Code_UE` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `ID_NIV` int(15) NOT NULL,
  `ID_PROMO` int(12) NOT NULL,
  `Code_promo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `emploidutemps`
--

CREATE TABLE `emploidutemps` (
  `ID_EMP` int(11) NOT NULL,
  `NIVEAU` char(30) DEFAULT NULL,
  `DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emploidutemps`
--

INSERT INTO `emploidutemps` (`ID_EMP`, `NIVEAU`, `DATE`) VALUES
(1, 'Licence 2', '2017-01-15'),
(2, 'Licence 3', '2018-01-15'),
(3, 'Licence 1', '2020-02-18'),
(4, 'Master 1', '2020-02-03'),
(5, 'Master 2', '2020-02-29');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL,
  `PRENOM` char(50) DEFAULT NULL,
  `LOGIN` char(50) DEFAULT NULL,
  `PASSWORD` char(75) DEFAULT NULL,
  `NIVEAU` char(30) DEFAULT NULL,
  `ADRESSE` char(20) DEFAULT NULL,
  `TEL` decimal(50,0) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `NIVEAU`, `ADRESSE`, `TEL`, `code`) VALUES
(0, 'DIOP', 'Maty', 'mdiop', '123', 'Licence 2', 'Foire', '767247378', '12'),
(1, 'NIANG', 'Fatou', 'niang', '123', 'Master 1', 'Parcelle Assainie', '771325412', '6'),
(2, 'THIOUNE', 'Papa Maguatte', 'thioune', '123', 'Licence 3', 'Reubeusse', '771052143', '11'),
(3, 'DIOP', 'Mouhamadou H', 'diop', '123', 'Licence 1', '50', '771483761', '4');

-- --------------------------------------------------------

--
-- Structure de la table `etudiantpromo`
--

CREATE TABLE `etudiantpromo` (
  `ID_ETUPRO` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `IDPROMO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiantpromo`
--

INSERT INTO `etudiantpromo` (`ID_ETUPRO`, `ID`, `IDPROMO`) VALUES
(1, 3, 1),
(2, 2, 2017);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `ID_EVE` int(11) NOT NULL,
  `ID_MPRO` int(11) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `TYPE` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`ID_EVE`, `ID_MPRO`, `DATE`, `TYPE`) VALUES
(1, 1, '2020-02-28', 'Devoir'),
(2, 1, '2020-03-15', 'Examen');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `ID_INF` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `GENRE` text DEFAULT NULL,
  `CONTENU` text DEFAULT NULL,
  `FILE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `matierepromo`
--

CREATE TABLE `matierepromo` (
  `ID_MPRO` int(11) NOT NULL,
  `ID_MAT` int(11) NOT NULL,
  `ID_PROF` int(11) NOT NULL,
  `ID_SEMESTRE` int(11) DEFAULT NULL,
  `CODE` int(11) DEFAULT NULL,
  `ID_PROMO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matierepromo`
--

INSERT INTO `matierepromo` (`ID_MPRO`, `ID_MAT`, `ID_PROF`, `ID_SEMESTRE`, `CODE`, `ID_PROMO`) VALUES
(1, 2, 3, 1, 2, 1),
(3, 1, 5, 2, 4, 4),
(4, 5, 4, 1, 6, 3),
(5, 4, 1, 2, 6, 2),
(6, 7, 6, 2, 5, 2),
(7, 5, 1, 1, 2, 2),
(8, 1, 2, 2, 12, 3),
(9, 10, 4, 1, 10, 4),
(10, 11, 1, 2, 14, 3);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `ID_MAT` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`ID_MAT`, `NOM`) VALUES
(1, 'JAVA'),
(2, 'Algorithme'),
(3, 'Physique'),
(4, 'Python'),
(5, 'Developpement web'),
(6, 'Cryptographie'),
(7, 'Systeme Linux'),
(8, 'Infographie'),
(9, 'Teleinformatique'),
(10, 'Physique'),
(11, 'Système Android');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `ID_NIV` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL,
  `FILIERE` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`ID_NIV`, `NOM`, `FILIERE`) VALUES
(1, 'Licence 1', 'INFORMATIQUE'),
(2, 'Master 1', 'SEUCRITE WEB'),
(3, 'Licence 2', 'SECURITE'),
(4, 'Licence 3', 'MARKTING DIGITAL'),
(5, 'Licence 2', 'INFORMATIQUE'),
(6, 'Master 1', 'INFORMATIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `ID_NOT` int(11) NOT NULL,
  `ID_ETUPRO` int(11) NOT NULL,
  `ID_EVE` int(11) NOT NULL,
  `ID_MPRO` int(11) NOT NULL,
  `VALEUR` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`ID_NOT`, `ID_ETUPRO`, `ID_EVE`, `ID_MPRO`, `VALEUR`) VALUES
(1, 1, 1, 1, 14),
(2, 1, 2, 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `ID_PROF` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL,
  `PRONOM` char(50) DEFAULT NULL,
  `LOGIN` char(50) DEFAULT NULL,
  `PASSWORD` char(75) DEFAULT NULL,
  `TEL` decimal(50,0) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`ID_PROF`, `NOM`, `PRONOM`, `LOGIN`, `PASSWORD`, `TEL`, `code`) VALUES
(1, 'NDIAYE', 'Ousmane', 'ndiaye', '123', '776359893', '12'),
(2, 'SOW', 'Demba', 'sow', '123', '77', '4'),
(3, 'DIAW', 'Mame Abdou Aziz', 'diaw', '123', '772303092', '2'),
(4, 'FAYE', 'Koromak', 'faye', '123', '77', '16'),
(5, 'FALL', 'Cherif', 'fall', '123', '77', '11'),
(6, 'BABOU', 'Ahmadou Bamba', 'babou', '123', '77', '10');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `ID_PROMO` int(11) NOT NULL,
  `ID_EMP` int(11) DEFAULT NULL,
  `ANNEE` varchar(25) DEFAULT NULL,
  `ID_NIV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`ID_PROMO`, `ID_EMP`, `ANNEE`, `ID_NIV`) VALUES
(1, 1, '2019-2020', 1),
(2, 2, '2019-2020', 2),
(3, 1, '2019-2020', 3),
(4, 1, '2019-2020', 4),
(5, 2, '2019-2020', 1),
(6, 1, '2019-2020', 6),
(7, 4, '2019-2020', 2),
(8, 5, '2019-2020', 6),
(2017, 1, '2019-2020', 5);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `ID_REC` int(11) NOT NULL,
  `ID_NOT` int(11) NOT NULL,
  `MOTIF` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`ID_REC`, `ID_NOT`, `MOTIF`) VALUES
(1, 1, 'Bonjour Monsieur vous ne pensez pas que je dois avoir plus de 14.\r\nMerci de revoir ma copie');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `ID_SEMESTRE` int(11) NOT NULL,
  `SEMESTRE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`ID_SEMESTRE`, `SEMESTRE`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

CREATE TABLE `ue` (
  `ID_UE` int(11) NOT NULL,
  `CODE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ue`
--

INSERT INTO `ue` (`ID_UE`, `CODE`) VALUES
(1, 2),
(2, 4),
(3, 4),
(4, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`ID_MAT`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`ID_NIV`);

--
-- Index pour la table `emploidutemps`
--
ALTER TABLE `emploidutemps`
  ADD PRIMARY KEY (`ID_EMP`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `etudiantpromo`
--
ALTER TABLE `etudiantpromo`
  ADD PRIMARY KEY (`ID_ETUPRO`),
  ADD KEY `FK_APPARTENANCE` (`IDPROMO`),
  ADD KEY `FK_INSCRIPTION` (`ID`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`ID_EVE`),
  ADD KEY `FK_ASSOCIATION_9` (`ID_MPRO`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`ID_INF`),
  ADD KEY `FK_ACCES` (`ID`);

--
-- Index pour la table `matierepromo`
--
ALTER TABLE `matierepromo`
  ADD PRIMARY KEY (`ID_MPRO`),
  ADD KEY `FK_ENSEIGNER` (`ID_PROF`),
  ADD KEY `FK_EQUIVALENCE` (`ID_MAT`),
  ADD KEY `FK_LIAISON` (`ID_SEMESTRE`),
  ADD KEY `indeProm` (`ID_PROMO`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`ID_MAT`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`ID_NIV`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`ID_NOT`),
  ADD KEY `FK_ASSOCIATION_10` (`ID_MPRO`),
  ADD KEY `FK_ASSOCIATION_11` (`ID_EVE`),
  ADD KEY `FK_AVOIR` (`ID_ETUPRO`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`ID_PROF`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_PROMO`),
  ADD KEY `FK_ASSOCIER` (`ID_EMP`),
  ADD KEY `idexNiv` (`ID_NIV`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`ID_REC`),
  ADD KEY `FK_POSSIBILTE_DE_RECLAMMER` (`ID_NOT`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`ID_SEMESTRE`);

--
-- Index pour la table `ue`
--
ALTER TABLE `ue`
  ADD PRIMARY KEY (`ID_UE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `appartenir`
--
ALTER TABLE `appartenir`
  MODIFY `ID_MAT` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `ID_NIV` int(15) NOT NULL AUTO_INCREMENT;

ALTER TABLE `etudiant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `etudiantpromo`
  MODIFY `ID_ETUPRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  ALTER TABLE `evaluation`
  MODIFY `ID_EVE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
  ALTER TABLE `matierepromo`
  MODIFY `id_MPRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  
  ALTER TABLE `matieres`
  MODIFY `id_MAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
  
  ALTER TABLE `niveau`
  MODIFY `id_NIV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
  
  ALTER TABLE `notes`
  MODIFY `id_NOT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
  ALTER TABLE `profs`
  MODIFY `id_PROF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
  
  ALTER TABLE `promo`
  MODIFY `id_PROMO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  
  ALTER TABLE `reclamation`
  MODIFY `id_REC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  
  ALTER TABLE `semestre`
  MODIFY `id_SEMESTRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiantpromo`
--
ALTER TABLE `etudiantpromo`
  ADD CONSTRAINT `FK_APPARTENANCE` FOREIGN KEY (`IDPROMO`) REFERENCES `promo` (`ID_PROMO`),
  ADD CONSTRAINT `FK_INSCRIPTION` FOREIGN KEY (`ID`) REFERENCES `etudiant` (`ID`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `FK_ASSOCIATION_9` FOREIGN KEY (`ID_MPRO`) REFERENCES `matierepromo` (`ID_MPRO`);

--
-- Contraintes pour la table `informations`
--
ALTER TABLE `informations`
  ADD CONSTRAINT `FK_ACCES` FOREIGN KEY (`ID`) REFERENCES `etudiant` (`ID`);

--
-- Contraintes pour la table `matierepromo`
--
ALTER TABLE `matierepromo`
  ADD CONSTRAINT `FK_ENSEIGNER` FOREIGN KEY (`ID_PROF`) REFERENCES `profs` (`ID_PROF`),
  ADD CONSTRAINT `FK_EQUIVALENCE` FOREIGN KEY (`ID_MAT`) REFERENCES `matieres` (`ID_MAT`),
  ADD CONSTRAINT `FK_LIAISON` FOREIGN KEY (`ID_SEMESTRE`) REFERENCES `semestre` (`ID_SEMESTRE`),
  ADD CONSTRAINT `matierepromo_ibfk_1` FOREIGN KEY (`ID_PROMO`) REFERENCES `promo` (`ID_PROMO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `FK_ASSOCIATION_10` FOREIGN KEY (`ID_MPRO`) REFERENCES `matierepromo` (`ID_MPRO`),
  ADD CONSTRAINT `FK_ASSOCIATION_11` FOREIGN KEY (`ID_EVE`) REFERENCES `evaluation` (`ID_EVE`),
  ADD CONSTRAINT `FK_AVOIR` FOREIGN KEY (`ID_ETUPRO`) REFERENCES `etudiantpromo` (`ID_ETUPRO`);

--
-- Contraintes pour la table `promo`
--

 ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`ID_NIV`) REFERENCES `niveau` (`ID_NIV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_POSSIBILTE_DE_RECLAMMER` FOREIGN KEY (`ID_NOT`) REFERENCES `notes` (`ID_NOT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
