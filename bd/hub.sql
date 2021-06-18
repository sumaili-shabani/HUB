-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 juin 2021 à 01:34
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hub`
--

-- --------------------------------------------------------

--
-- Structure de la table `compterendu`
--

CREATE TABLE `compterendu` (
  `idcompt` int(11) NOT NULL,
  `titre` varchar(600) DEFAULT NULL,
  `milieu` varchar(300) DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `codeP` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compterendu`
--

INSERT INTO `compterendu` (`idcompt`, `titre`, `milieu`, `jour`, `fichier`, `commentaire`, `id_user`, `codeP`, `created_at`) VALUES
(2, 'Compte rendu sur la descente sur terrain de projet kindu kuku', 'Butembo', '2021-06-11', '765486075.sql', '                                                                <p style=\"text-align: left;\"><b>Notre descende sur terrain&nbsp;</b><span style=\"text-align: left;\"><b>kindu kuku</b></span></p><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>				<br><br><br><br>\r\n							<br><br><br>\r\n							<br><br>\r\n							<br>\r\n							\r\n			', 16, '1485756328', '2021-06-14 17:28:02'),
(5, 'Compte rendu sur la descente sur terrain de projet maisha paye', 'Beni', '2021-06-14', '653685173.zip', '<p><span style=\"font-weight: bolder;\">Cool compte rendu</span></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do&nbsp;<span style=\"font-size: 1rem;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,....</span></p>				\r\n			', 16, '1803977382', '2021-06-14 18:13:13'),
(6, 'Compte rendu sur le projet yetu', 'Goma', '2021-06-14', '310429532.sql', '<p><span style=\"font-weight: bolder;\">Cool compte rendu</span></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do&nbsp;<span style=\"font-size: 1rem;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,....</span></p>				\r\n			', 14, '1036020194', '2021-06-14 18:14:17');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `identrep` int(11) NOT NULL,
  `ceo` int(11) DEFAULT NULL,
  `nom` varchar(700) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `idPays` int(11) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `idv` int(11) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `typeEntrep` varchar(300) DEFAULT NULL,
  `nombreEmploye` varchar(300) DEFAULT NULL,
  `siteweb` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `logo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`identrep`, `ceo`, `nom`, `description`, `idPays`, `idp`, `idv`, `idcat`, `typeEntrep`, `nombreEmploye`, `siteweb`, `facebook`, `twitter`, `linkedin`, `logo`) VALUES
(26, 8, 'Databank drc', '	        			        			        		<p>est une startup qui s\'occupe de la <b>technologie</b> et le <b>numérique</b> actuel</p>	        		        		        	', 1, 19, 19, 5, 'public', '10-50', '', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '588304309.jpg'),
(27, 13, 'Devtech', 'Est une start-up technologique', 1, 19, 19, 4, 'public', '10-50', 'http://devtech.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '1315576333.png'),
(28, 9, 'Neotec', '	        			        			        		le marketing c\'est nous!&nbsp;', 1, 19, 19, 5, 'gouvernementale', '50-100', 'http://whitefondation.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '2136527444.png');

-- --------------------------------------------------------

--
-- Structure de la table `galery`
--

CREATE TABLE `galery` (
  `idgalery` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `galery`
--

INSERT INTO `galery` (`idgalery`, `student_id`, `type`, `fichier`) VALUES
(1, 9, 'photo', '552143348.jpg'),
(2, 9, 'photo', '167159739.jpg'),
(3, 9, 'photo', '1575385227.jpg'),
(7, 9, 'photo', '1677852062.jpg'),
(11, 9, 'video', '1363991008.mp4'),
(13, 9, 'video', '1810327148.mp4');

-- --------------------------------------------------------

--
-- Structure de la table `link_canavas`
--

CREATE TABLE `link_canavas` (
  `idlink` int(11) NOT NULL,
  `titre` varchar(800) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `sujet` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `link_canavas`
--

INSERT INTO `link_canavas` (`idlink`, `titre`, `student_id`, `message`, `sujet`) VALUES
(2, NULL, 9, NULL, 'mon problème est que 2'),
(3, NULL, 9, NULL, 'cool'),
(6, 'solution', 9, NULL, 'solution n1 ok'),
(9, 'solution', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(10, 'proposition de valeur unique', 9, NULL, 'ma proposition pour le moment'),
(11, 'avantage déloyale', 9, NULL, 'avantage n1'),
(12, 'avantage déloyale', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(13, 'proposition de valeur unique', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(14, 'segment de client', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(15, 'indicateur', 9, NULL, '1'),
(17, 'canaux', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(19, 'structure des coûts', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(20, 'sources revenus', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(22, 'Problème', 9, NULL, 'premier problème'),
(23, 'Problème', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(25, 'indicateur', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(26, 'indicateur', 9, NULL, '2'),
(27, 'Problème', 13, NULL, 'Les medias'),
(28, 'Problème', 13, NULL, ' Les  entreprises de  recrutement'),
(29, 'solution', 13, NULL, 'Promouvo ir le  moyen de  vulgarisati on des  informatio ns au sein  de  territoire  national'),
(30, 'solution', 13, NULL, 'Permettre  accès aux  informatio ns des  offres  d’emplois'),
(31, 'proposition de valeur unique', 13, NULL, 'Un suivi adéquat  des candidatures  aux offres  d’emplois  postulées par les  candidats'),
(32, 'proposition de valeur unique', 13, NULL, 'Meilleure gestion  aux informations  diffusées par la  presse '),
(33, 'avantage déloyale', 13, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(34, 'canaux', 13, NULL, 'Réseaux  sociaux, Face à  face,  Services  clientèles'),
(35, 'segment de client', 13, NULL, 'Nous vendons  aux : Médias '),
(36, 'indicateur', 13, NULL, 'Les ordinateurs, Les téléphones'),
(37, 'structure des coûts', 13, NULL, 'La connexion internet, Coût lié au service d’hébergement, Main d’œuvre'),
(38, 'sources revenus', 13, NULL, 'réabonnement mensuel pour  l\'utilisation du produit dans les  entreprises de recrutements et aux  médias '),
(39, 'Problème', 9, NULL, 'Promouvo ir le  moyen de  vulgarisati on des  informatio ns au sein  de  territoire  national');

-- --------------------------------------------------------

--
-- Structure de la table `link_canavas2`
--

CREATE TABLE `link_canavas2` (
  `idlink` int(11) NOT NULL,
  `titre` varchar(800) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `sujet` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `link_canavas2`
--

INSERT INTO `link_canavas2` (`idlink`, `titre`, `student_id`, `message`, `sujet`) VALUES
(1, 'Problème', 9, NULL, 'mon problème est que'),
(5, 'solution', 9, NULL, 'ma solution '),
(7, 'proposition de valeur unique', 9, NULL, 'mon problème est que'),
(8, 'proposition de valeur unique', 9, NULL, 'ma proposition pour le moment'),
(10, 'segment de client', 9, NULL, 'segment 1'),
(11, 'segment de client', 9, NULL, 'segment 2'),
(12, 'avantage déloyale', 9, NULL, 'avantage n1'),
(13, 'indicateur', 9, NULL, 'mon problème est que'),
(14, 'indicateur', 9, NULL, 'indicateur 1'),
(15, 'canaux', 9, NULL, 'canaux 1'),
(16, 'canaux', 9, NULL, 'canaux 2'),
(17, 'structure des coûts', 9, NULL, '100$'),
(18, 'structure des coûts', 9, NULL, '788$ par an'),
(19, 'sources revenus', 9, NULL, 'réabonnement mensuel'),
(20, 'sources revenus', 9, NULL, 'réabonnement mensuel 2'),
(22, 'solution', 9, NULL, 'solution n1 ok'),
(23, 'Problème', 9, NULL, ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES
(25, 'yuma kayanda Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:29:13', 'fa fa-user', 'Nouvelle inscription'),
(28, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(29, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 9, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(31, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription'),
(33, 'Nouvelle tentative de paiement cubaka mulume vient de faire son paiement', 'admin/paiement_pading', 7, '2021-05-29 20:06:34', 'fa fa-money', 'Nouveau de paiement'),
(34, 'Nouvelle tentative de paiement mikah kalume vient de faire son paiement', 'admin/paiement_pading', 7, '2021-06-03 23:37:31', 'fa fa-money', 'Nouveau de paiement'),
(35, 'Bonjour mikah kalume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/2022714497', 13, '2021-06-04 11:00:04', 'fa fa-check', 'Félicitation'),
(36, 'Bonjour cubaka mulume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/473539803', 9, '2021-06-04 11:00:05', 'fa fa-check', 'Félicitation'),
(37, 'Bonjour mikah kalume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/629796011', 13, '2021-06-04 11:00:40', 'fa fa-check', 'Félicitation'),
(39, 'Bonjour wilson vulembere votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/168831750', 8, '2021-06-04 13:01:33', 'fa fa-check', 'Félicitation'),
(43, 'kasumba kipundula Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(44, 'Un compte rendu,  yuma kayanda vient de faire: Compte rendu sur la descente sur terrain de projet maisha paye', 'admin/compterendu', 7, '2021-06-14 18:13:13', 'fa fa-tag', 'Nouveau compte rendu'),
(45, 'Un compte rendu,  dembo apoline vient de faire: Compte rendu sur le projet yetu', 'admin/compterendu', 7, '2021-06-14 18:14:17', 'fa fa-tag', 'Nouveau compte rendu'),
(46, 'madeleine stephanie Vient de rejoindre la plateforme ', 'admin/visiteur', 7, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(47, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(48, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(49, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(50, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(51, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(53, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:32:37', 'fa fa-user', 'Nouvelle inscription'),
(54, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(55, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(56, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(57, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(59, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:32:58', 'fa fa-user', 'Nouvelle inscription'),
(60, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:32:59', 'fa fa-user', 'Nouvelle inscription'),
(61, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-15 11:32:59', 'fa fa-user', 'Nouvelle inscription'),
(62, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:32:59', 'fa fa-user', 'Nouvelle inscription'),
(63, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:32:59', 'fa fa-user', 'Nouvelle inscription'),
(65, 'useni uwonda Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:33:21', 'fa fa-user', 'Nouvelle inscription'),
(67, 'useni uwonda Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-15 11:33:21', 'fa fa-user', 'Nouvelle inscription'),
(68, 'useni uwonda Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:33:21', 'fa fa-user', 'Nouvelle inscription'),
(69, 'useni uwonda Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:33:21', 'fa fa-user', 'Nouvelle inscription'),
(70, 'dembo apoline Vient d\'activer un visiteur ', 'admin/users', 7, '2021-06-18 22:17:46', 'fa fa-group', 'Nouvelle acceptation'),
(72, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-18 22:25:51', 'fa fa-user', 'Nouvelle inscription'),
(74, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-18 22:25:51', 'fa fa-user', 'Nouvelle inscription'),
(75, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-18 22:25:51', 'fa fa-user', 'Nouvelle inscription'),
(76, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-18 22:25:51', 'fa fa-user', 'Nouvelle inscription'),
(78, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-18 22:39:52', 'fa fa-user', 'Nouvelle inscription'),
(79, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-18 22:39:52', 'fa fa-user', 'Nouvelle inscription'),
(80, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-18 22:39:52', 'fa fa-user', 'Nouvelle inscription'),
(81, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-18 22:39:52', 'fa fa-user', 'Nouvelle inscription'),
(82, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-18 22:39:52', 'fa fa-user', 'Nouvelle inscription'),
(85, 'kakese pandamiti Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-18 23:56:49', 'fa fa-user', 'Nouvelle inscription'),
(86, 'kakese pandamiti Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-18 23:56:49', 'fa fa-user', 'Nouvelle inscription'),
(87, 'kakese pandamiti Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-18 23:56:49', 'fa fa-user', 'Nouvelle inscription'),
(88, 'kakese pandamiti Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-18 23:56:49', 'fa fa-user', 'Nouvelle inscription'),
(89, 'kakese pandamiti Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-18 23:56:49', 'fa fa-user', 'Nouvelle inscription'),
(90, 'patrick ponyo Vient de rejoindre la plateforme ', 'admin/visiteur', 7, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(91, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(92, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(93, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 14, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(94, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(95, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `padding_users`
--

CREATE TABLE `padding_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `padding_users`
--

INSERT INTO `padding_users` (`id`, `first_name`, `last_name`, `email`, `image`, `passwords`, `idrole`, `sexe`, `created_at`) VALUES
(8, 'patrick ponyo', NULL, 'patrick@gmail.com', 'icone-user.png', 'e10adc3949ba59abbe56e057f20f883e', 2, NULL, '2021-06-19 00:00:49');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idp` int(11) NOT NULL,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `codeFacture` varchar(300) DEFAULT NULL,
  `etat_paiement` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `etat_paiement`) VALUES
(4, 9, '2021-05-29', 10, 'm-pesa', '56web1001', '2021-06-04 11:00:05', '473539803', 1),
(5, 13, '2021-04-05', 30, 'm-pesa', '233545gtr2w', '2021-06-04 11:00:39', '629796011', 1),
(6, 8, '2021-04-05', 30, 'm-pesa', '233545gtr2w', '2021-06-04 13:01:33', '168831750', 0);

-- --------------------------------------------------------

--
-- Structure de la table `paiement_pading`
--

CREATE TABLE `paiement_pading` (
  `idp` int(11) NOT NULL,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement_pading`
--

INSERT INTO `paiement_pading` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`) VALUES
(2, 8, '2021-04-05', 30, 'm-pesa', '233545gtr2w', '2021-04-05 11:27:40'),
(5, 9, '2021-04-05', 30, 'm-pesa', '233545gtr2w', '2021-04-05 11:27:40');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_compte_rendu`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_compte_rendu` (
`idcompt` int(11)
,`titre` varchar(600)
,`milieu` varchar(300)
,`jour` date
,`fichier` varchar(300)
,`commentaire` text
,`id_user` int(11)
,`codeP` varchar(300)
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`telephone` varchar(300)
,`image` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_entreprise`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_entreprise` (
`identrep` int(11)
,`ceo` int(11)
,`nom` varchar(700)
,`description` text
,`idPays` int(11)
,`idp` int(11)
,`idv` int(11)
,`idcat` int(11)
,`typeEntrep` varchar(300)
,`nombreEmploye` varchar(300)
,`siteweb` varchar(300)
,`facebook` varchar(300)
,`twitter` varchar(300)
,`linkedin` varchar(300)
,`logo` varchar(300)
,`nomcat` varchar(300)
,`nompays` varchar(300)
,`nomp` varchar(300)
,`nomv` varchar(300)
,`image` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`telephone` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_paiement`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_paiement` (
`idp` int(11)
,`idpersonne` int(11)
,`date_paie` date
,`montant` float
,`motif` text
,`token` varchar(300)
,`created_at` datetime
,`codeFacture` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`idrole` int(11)
,`telephone` varchar(300)
,`image` varchar(300)
,`nom` varchar(700)
,`logo` varchar(300)
,`etat_paiement` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_paiement_padding`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_paiement_padding` (
`idp` int(11)
,`idpersonne` int(11)
,`date_paie` date
,`montant` float
,`token` varchar(300)
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
,`telephone` varchar(300)
,`nom` varchar(700)
,`logo` varchar(300)
,`motif` text
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_projet`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_projet` (
`idprojet` int(11)
,`student_id` int(11)
,`nomP` varchar(300)
,`logoP` varchar(300)
,`idee1` text
,`idee2` text
,`idee3` text
,`idee4` text
,`idee5` text
,`produit1` text
,`produit2` text
,`produit3` text
,`produit4` text
,`client1` text
,`client2` text
,`client3` text
,`marche1` text
,`marche2` text
,`concurrence1` text
,`concurrence2` text
,`moyen1` text
,`moyen2` text
,`moyen3` text
,`moyen4` text
,`moyen5` text
,`partenaire1` varchar(30)
,`partenaire2` text
,`partenaire3` text
,`faiblesse1` text
,`faiblesse2` text
,`codeP` varchar(300)
,`fichierzip` varchar(300)
,`created_at` datetime
,`identrep` int(11)
,`ceo` int(11)
,`nom` varchar(700)
,`logoEntreprise` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`telephone` varchar(300)
,`image` varchar(300)
,`email` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_ville`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_ville` (
`idv` int(11)
,`nomv` varchar(300)
,`nomp` varchar(300)
,`created_at` datetime
,`idp` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `idprojet` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `nomP` varchar(300) DEFAULT NULL,
  `logoP` varchar(300) DEFAULT NULL,
  `idee1` text DEFAULT NULL,
  `idee2` text DEFAULT NULL,
  `idee3` text DEFAULT NULL,
  `idee4` text DEFAULT NULL,
  `idee5` text DEFAULT NULL,
  `produit1` text DEFAULT NULL,
  `produit2` text DEFAULT NULL,
  `produit3` text DEFAULT NULL,
  `produit4` text DEFAULT NULL,
  `client1` text DEFAULT NULL,
  `client2` text DEFAULT NULL,
  `client3` text DEFAULT NULL,
  `marche1` text DEFAULT NULL,
  `marche2` text DEFAULT NULL,
  `concurrence1` text DEFAULT NULL,
  `concurrence2` text DEFAULT NULL,
  `moyen1` text DEFAULT NULL,
  `moyen2` text DEFAULT NULL,
  `moyen3` text DEFAULT NULL,
  `moyen4` text DEFAULT NULL,
  `moyen5` text DEFAULT NULL,
  `partenaire1` varchar(30) DEFAULT NULL,
  `partenaire2` text DEFAULT NULL,
  `partenaire3` text DEFAULT NULL,
  `faiblesse1` text DEFAULT NULL,
  `faiblesse2` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `codeP` varchar(300) DEFAULT NULL,
  `fichierzip` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idprojet`, `student_id`, `nomP`, `logoP`, `idee1`, `idee2`, `idee3`, `idee4`, `idee5`, `produit1`, `produit2`, `produit3`, `produit4`, `client1`, `client2`, `client3`, `marche1`, `marche2`, `concurrence1`, `concurrence2`, `moyen1`, `moyen2`, `moyen3`, `moyen4`, `moyen5`, `partenaire1`, `partenaire2`, `partenaire3`, `faiblesse1`, `faiblesse2`, `created_at`, `codeP`, `fichierzip`) VALUES
(2, 9, 'JOB PORTAIL RDC', '37603442.png', '																												Nous savons que la RDC est un pays traversant une situation très <br /><br /><br /><br /><br /><br /><br />\r\ncritique dont 80% de la population congolaise souffre de la pauvreté et 84%<br /><br /><br /><br /><br /><br /><br />\r\nde celle-ci traine dans le chômage ; une chose qui angoisse le cœur et affaiblie <br /><br /><br /><br /><br /><br /><br />\r\nen suite la vie des citoyens de RDC. C’est ainsi que, notre projet intitulé <br /><br /><br /><br /><br /><br /><br />\r\nPATAJOB est venu pour palier contre cette problématique.<br /><br /><br /><br /><br /><br /><br />\r\nPATAJOB est une plateforme web de media et emplois en ligne, dans <br /><br /><br /><br /><br /><br /><br />\r\nle but de promouvoir le moyen de vulgarisation d’informations au sein du <br /><br /><br /><br /><br /><br /><br />\r\nterritoire national ; afin de permettre à la population d’être à la une aux <br /><br /><br /><br /><br /><br /><br />\r\ndifférentes informations et les offres d’emplois publiés par les entreprise pour <br /><br /><br /><br /><br /><br /><br />\r\nafin d’y postier.																					', '																												Notons que la presse et les entreprises de recrutement sont souvent <br /><br /><br /><br /><br /><br /><br />\r\néloignées de différents coins reculés de la ville dont un beau <br /><br /><br /><br /><br /><br /><br />\r\nnombre des gens sont contraints de rater à certaines informations et <br /><br /><br /><br /><br /><br /><br />\r\noffres d’emplois qui sont à la une.<br /><br /><br /><br /><br /><br /><br />\r\nPour des raisons des infrastructures routiers et de l’insécurité dans <br /><br /><br /><br /><br /><br /><br />\r\ncertaines zones du territoire national qui demeurent un sérieux <br /><br /><br /><br /><br /><br /><br />\r\nproblème à la population pour se rendre dans la zone de <br /><br /><br /><br /><br /><br /><br />\r\ndéroulement d’effet et activités ; certains d’entre eux sont contraints <br /><br /><br /><br /><br /><br /><br />\r\nd’y participer.																					', '																																								Réduire le taux de chômage au pourcentage le plus bas possible jamais atteint!																																							', '																												C’est ainsi que, notre idée est concentrée dans la conception d’une <br /><br /><br /><br /><br /><br /><br />\r\nplateforme web des emplois et media en ligne afin de permettre à la <br /><br /><br /><br /><br /><br /><br />\r\npopulation de s’en sortir dans le Cao. D’où la plateforme <br /><br /><br /><br /><br /><br /><br />\r\npermettra :<br /><br /><br /><br /><br /><br /><br />\r\n Aux candidats de postuler en ligne aux différente offres <br /><br /><br /><br /><br /><br /><br />\r\nd’emplois lancées par les entreprises ;<br /><br /><br /><br /><br /><br /><br />\r\n De fournir les informations à la presse en étant dans quel <br /><br /><br /><br /><br /><br /><br />\r\ncoin de la ville à fin de permettre une meilleure succursale <br /><br /><br /><br /><br /><br /><br />\r\ndes informations au sein du territoire national.																					', '																												dans 3 mois plus tard!																																							', '																												PATAJOB offre plusieurs services notamment :<br /><br /><br /><br /><br /><br /><br />\r\n Possibilité de postuler en ligne aux différentes offres <br /><br /><br /><br /><br /><br /><br />\r\nd’emplois ;<br /><br /><br /><br /><br /><br /><br />\r\n Un suivi adéquat et meilleure gestion aux différentes <br /><br /><br /><br /><br /><br /><br />\r\ndemandes d’emplois postulées ;<br /><br /><br /><br /><br /><br /><br />\r\n Sauvegarde et gestion adéquate aux informations publiées.<br /><br /><br /><br /><br /><br /><br />\r\n																					', '																																								 interview direct<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />\r\n Envoie de notifications																																							', '																																								Vue la rareté de cette plateforme sur le marché...																																							', '																																								Oui																																							', '																								Nos clients par excellence sont les entreprises de recrutements, les <br /><br /><br /><br /><br /><br />\r\nentreprises de medias tels que les radios qui sont les <br /><br /><br /><br /><br /><br />\r\nconsommateurs primaires de services qu’offre notre plateforme. <br /><br /><br /><br /><br /><br />\r\nParce que leurs manières de traitement des informations sont <br /><br /><br /><br /><br /><br />\r\nmanuelles causant ainsi une perte des temps considérable dans la <br /><br /><br /><br /><br /><br />\r\npropagation de ses informations.<br /><br /><br /><br /><br /><br />\r\nNous pensons que notre produit sera une solution efficace pour <br /><br /><br /><br /><br /><br />\r\npalier contre cette problématique.																		', '																								Manuelle provoquant ainsi une perte de temps considérable																																							', '																								Oui bien sûre 																																							', '																								Nous voudrions bien que les medias et toute entreprise de <br /><br /><br /><br /><br /><br />\r\nrecrutement exerçant ses activités au sein du territoire national en <br /><br /><br /><br /><br /><br />\r\nbesoin de recrutement des agents pour son bon fonctionnement de <br /><br /><br /><br /><br /><br />\r\nnous accompagner avec leurs mains fortes pourvu que ce projet soit <br /><br /><br /><br /><br /><br />\r\néteint ; car leur implication fera qu’il ait réussite sur notre produit à <br /><br /><br /><br /><br /><br />\r\nfin de permettre la propagation des informations au sein du <br /><br /><br /><br /><br /><br />\r\nterritoire national.																		', '																								plus de 30 millions																																							', '																								A présent nous avons média Congo qui offre la publication des <br /><br /><br /><br /><br /><br />\r\ninformations et des offres d’emplois mais ignore souvent la gestion <br /><br /><br /><br /><br /><br />\r\nde suivi des demandes d’emplois postuler par les candidats, chose <br /><br /><br /><br /><br /><br />\r\ngrave il n’y’a pas possibilité aux candidats de postuler sur la <br /><br /><br /><br /><br /><br />\r\nplateforme. En revanche la candidature se passe dans le courrier <br /><br /><br /><br /><br /><br />\r\nélectronique sous des mails des entreprises des recrutements.<br /><br /><br /><br /><br /><br />\r\nNous avons aussi emplois.cd un portail de job en ligne de <br /><br /><br /><br /><br /><br />\r\npublication des offres d’emplois mais il n’y’a pas un suivi aux candidatures postulées par les candidats en besoin ; pas la <br /><br /><br /><br /><br /><br />\r\npossibilité d’assurance de réponses attendu lors de recrutement <br /><br /><br /><br /><br /><br />\r\nd’embauche.<br /><br /><br /><br /><br /><br />\r\nNotre produit viendra corriger aux insuffisances non garanties par <br /><br /><br /><br /><br /><br />\r\nces plateformes à fin de permettre une meilleure gestion des <br /><br /><br /><br /><br /><br />\r\nemplois et media en ligne.<br /><br /><br /><br /><br /><br />\r\n																		', '																								Interview et notification aux informations à toute cause sur leur demandes d\'emplois																																							', '																								Un ordinateur																																							', '																								Matériel, financière…																																							', '																																								100$																																							', '																								A présent rien comme ressource mais avec le temps je crois que ça ira bien																																							', '																								Locaux, Argent en subvention																																							', NULL, '																								ONEM																																							', '																								Facilitation des travaux  avec cohérence																																							', '																								Manque de relation avec les entreprises en concurrence																																							', '																								Tous les travailleurs sont motivés																																							', '2021-06-03 21:54:35', '1152552015', '1142573317.zip'),
(3, 13, 'PATAJOB', '1213233140.jpg', '				Nous savons que la RDC est un pays traversant une situation très <br />\r\ncritique dont 80% de la population congolaise souffre de la pauvreté et 84%<br />\r\nde celle-ci traine dans le chômage ; une chose qui angoisse le cœur et affaiblie <br />\r\nen suite la vie des citoyens de RDC. C’est ainsi que, notre projet intitulé <br />\r\nPATAJOB est venu pour palier contre cette problématique.<br />\r\nPATAJOB est une plateforme web de media et emplois en ligne, dans <br />\r\nle but de promouvoir le moyen de vulgarisation d’informations au sein du <br />\r\nterritoire national ; afin de permettre à la population d’être à la une aux <br />\r\ndifférentes informations et les offres d’emplois publiés par les entreprise pour <br />\r\nafin d’y postier.			', '				Notons que la presse et les entreprises de recrutement sont souvent <br />\r\néloignées de différents coins reculés de la ville dont un beau <br />\r\nnombre des gens sont contraints de rater à certaines informations et <br />\r\noffres d’emplois qui sont à la une.<br />\r\nPour des raisons des infrastructures routiers et de l’insécurité dans <br />\r\ncertaines zones du territoire national qui demeurent un sérieux <br />\r\nproblème à la population pour se rendre dans la zone de <br />\r\ndéroulement d’effet et activités ; certains d’entre eux sont contraints <br />\r\nd’y participer.			', '				Réduire le chômage			', '				C’est ainsi que, notre idée est concentrée dans la conception d’une <br />\r\nplateforme web des emplois et media en ligne afin de permettre à la <br />\r\npopulation de s’en sortir dans le Cao. D’où la plateforme <br />\r\npermettra :<br />\r\n Aux candidats de postuler en ligne aux différente offres <br />\r\nd’emplois lancées par les entreprises ;<br />\r\n De fournir les informations à la presse en étant dans quel <br />\r\ncoin de la ville à fin de permettre une meilleure succursale <br />\r\ndes informations au sein du territoire national. 			', '				Notons que notre projet à une durée indéterminée car notre <br />\r\npréoccupation est concentrée dans la propagation des informations <br />\r\net publications des offres d’emplois.			', '				PATAJOB offre plusieurs services notamment :<br />\r\n Possibilité de postuler en ligne aux différentes offres <br />\r\nd’emplois ;<br />\r\n Un suivi adéquat et meilleure gestion aux différentes <br />\r\ndemandes d’emplois postulées ;<br />\r\n Sauvegarde et gestion adéquate aux informations publiées.			', '				Interview pour le recrutement en distance			', '				vue la rareté du produit sur le marché!			', '				oui			', '				Nos clients par excellence sont les entreprises de recrutements, les <br />\r\nentreprises de medias tels que les radios qui sont les <br />\r\nconsommateurs primaires de services qu’offre notre plateforme. <br />\r\nParce que leurs manières de traitement des informations sont <br />\r\nmanuelles causant ainsi une perte des temps considérable dans la <br />\r\npropagation de ses informations.<br />\r\nNous pensons que notre produit sera une solution efficace pour <br />\r\npalier contre cette problématique.			', '				Manuelle			', '				oui			', '				Nous voudrions bien que les medias et toute entreprise de <br />\r\nrecrutement exerçant ses activités au sein du territoire national en <br />\r\nbesoin de recrutement des agents pour son bon fonctionnement de <br />\r\nnous accompagner avec leurs mains fortes pourvu que ce projet soit <br />\r\néteint ; car leur implication fera qu’il ait réussite sur notre produit à <br />\r\nfin de permettre la propagation des informations au sein du <br />\r\nterritoire national.			', '				Toute l\'étendue de la rdcongo			', '				A présent nous avons média Congo qui offre la publication des <br />\r\ninformations et des offres d’emplois mais ignore souvent la gestion <br />\r\nde suivi des demandes d’emplois postuler par les candidats, chose <br />\r\ngrave il n’y’a pas possibilité aux candidats de postuler sur la <br />\r\nplateforme. En revanche la candidature se passe dans le courrier <br />\r\nélectronique sous des mails des entreprises des recrutements.<br />\r\nNous avons aussi emplois.cd un portail de job en ligne de <br />\r\npublication des offres d’emplois mais il n’y’a pas un suivi aux candidatures postulées par les candidats en besoin ; pas la <br />\r\npossibilité d’assurance de réponses attendu lors de recrutement <br />\r\nd’embauche.<br />\r\nNotre produit viendra corriger aux insuffisances non garanties par <br />\r\nces plateformes à fin de permettre une meilleure gestion des <br />\r\nemplois et media en ligne.			', '				Suivi adéquat de demande d\'emplois			', '				4 ordinateurs			', '				un financement sous forme de subvention			', '				300$			', '				Aucune ressource à présent			', '				Subvention			', NULL, '				Nous voudrions bien que les medias et toute entreprise de <br />\r\nrecrutement exerçant ses activités au sein du territoire national en <br />\r\nbesoin de recrutement des agents pour son bon fonctionnement de <br />\r\nnous accompagner avec leurs mains fortes pourvu que ce projet soit <br />\r\néteint ; car leur implication fera qu’il ait réussite sur notre produit à <br />\r\nfin de permettre la propagation des informations au sein du <br />\r\nterritoire national.			', '				Développement plus efficace			', '				Manque de relation avec nos concurents			', '				Tout nos travailleurs sont motivés			', '2021-06-03 23:10:56', '1973825270', '1752021480.zip');

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE `province` (
  `idp` int(11) NOT NULL,
  `nomp` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `province`
--

INSERT INTO `province` (`idp`, `nomp`, `created_at`) VALUES
(1, 'Bas-Uele', '2020-07-14 15:02:45'),
(2, 'Équateur', '2020-07-14 15:23:05'),
(3, 'Haut-Katanga', '2020-07-14 15:26:03'),
(4, 'Haut-Lomami', '2020-07-14 15:26:45'),
(5, 'Haut-Uele', '2020-07-14 15:27:02'),
(6, 'Ituri', '2020-07-14 15:27:16'),
(7, 'Kasaï', '2020-07-14 15:27:47'),
(8, 'Kasaï-Central', '2020-07-14 15:27:59'),
(9, 'Kasaï-Oriental', '2020-07-14 15:28:29'),
(10, 'Kinshasa', '2020-07-14 15:28:43'),
(11, 'Kongo-Central', '2020-07-14 15:28:57'),
(12, 'Kwango', '2020-07-14 15:29:08'),
(13, 'Kwilu', '2020-07-14 15:29:20'),
(14, 'Lomami', '2020-07-14 15:29:30'),
(15, 'Lualaba', '2020-07-14 15:29:42'),
(16, 'Mai-Ndombe', '2020-07-14 15:29:52'),
(17, 'Maniema', '2020-07-14 15:30:03'),
(18, 'Mongala', '2020-07-14 15:30:14'),
(19, 'Nord-Kivu', '2020-07-14 15:30:30'),
(20, 'Nord-Ubangi', '2020-07-14 15:30:46'),
(21, 'Sankuru', '2020-07-14 15:31:05'),
(22, 'Sud-Kivu', '2020-07-14 15:31:15'),
(23, 'Sud-Ubangi', '2020-07-14 15:31:27'),
(24, 'Tanganyika', '2020-07-14 15:31:40'),
(25, 'Tshopo', '2020-07-14 15:31:53'),
(26, 'Tshuapa', '2020-07-14 15:32:02');

-- --------------------------------------------------------

--
-- Structure de la table `recupere`
--

CREATE TABLE `recupere` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recupere`
--

INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES
(1, 'sumailiroger681@gmail.com', '425d74164e0b87678446663c72b36f78'),
(2, 'sumailiroger681@gmail.com', 'c6b93ea45c172adcb09c35c92fabd1c1'),
(3, 'sumailiroger681@gmail.com', '00a2177a561f2235d91c949479d44c7d');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES
(1, 'Admin', '2021-04-12 16:10:38'),
(2, 'Coach', '2021-04-12 16:12:38'),
(3, 'Start-up', '2021-04-12 13:54:16');

-- --------------------------------------------------------

--
-- Structure de la table `swot`
--

CREATE TABLE `swot` (
  `idswot` int(11) NOT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `sujet` varchar(800) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `swot`
--

INSERT INTO `swot` (`idswot`, `titre`, `sujet`, `message`, `student_id`) VALUES
(1, 'Forces', 'ma force est la meilleure car tous les membres sont motivés', NULL, 9),
(2, 'Faiblesses', 'ma faiblesse est là', NULL, 9),
(3, 'Opportunités', 'mes opportunités  sont les mêmes', NULL, 9),
(4, 'Menaces', 'menaces', NULL, 9),
(5, 'Faiblesses', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(6, 'Forces', 'mon problème est que', NULL, 9),
(7, 'Forces', 'mon problème est que 2', NULL, 9),
(8, 'Forces', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(9, 'Menaces', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(12, 'Opportunités', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(14, 'Forces', 'Tous les travailleurs sont motivés', NULL, 13),
(15, 'Faiblesses', 'Manque de relation avec les concurrents', NULL, 13),
(16, 'Forces', 'Notre produits est meilleur avec une technologie avancée', NULL, 13),
(17, 'Faiblesses', 'Manque d\'argent pour le déploiement du produit sur le marché', NULL, 13),
(18, 'Menaces', 'La Concurrence avec d\'autres produits sur le marché', NULL, 13),
(19, 'Opportunités', 'Vue la rareté de notre produit sur le marché, toute étendue de la république est notre marché', NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `swot2`
--

CREATE TABLE `swot2` (
  `idswot` int(11) NOT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `sujet` varchar(800) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `swot2`
--

INSERT INTO `swot2` (`idswot`, `titre`, `sujet`, `message`, `student_id`) VALUES
(1, 'Forces', 'ma force est la meilleure car tous les membres sont motivés', NULL, 9),
(2, 'Forces', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(5, 'Faiblesses', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(6, 'Faiblesses', 'mon problème est que', NULL, 9),
(8, 'Menaces', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9),
(9, 'Opportunités', 'ma proposition pour le moment', NULL, 9),
(10, 'Opportunités', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 9);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `idcat` int(11) NOT NULL,
  `nomcat` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_category`
--

INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES
(1, 'Service client ', '2021-03-08 15:46:09'),
(2, 'Marketing', '2021-03-08 15:46:51'),
(3, 'Ingénierie civile en bâtiment', '2020-08-08 15:48:14'),
(4, 'IT soft ware', '2021-03-08 15:48:58'),
(5, 'Entreprise commerciale', '2021-03-08 15:49:25'),
(6, 'Société d\'action à responsabilité limité ', '2021-03-08 15:50:14'),
(7, 'Société à commandite simple', '2021-03-08 15:51:17'),
(10, 'Société Sans but lucratif ', '2021-03-30 11:53:22');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `idinfo` int(11) NOT NULL,
  `nom_site` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text DEFAULT NULL,
  `confidentialite` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `objectif` text DEFAULT NULL,
  `blog` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`, `created_at`) VALUES
(1, 'hub un jour nouveau', '1139782829.png', '+243817883541', '+243970524665', 'RDC Nord-kivu goma quartier  1 km temoin', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info.hub@gmail.com', 'Notre Politique de protection des données personnelles décrit la manière dont #devtech traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site.\r\n#devtech accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n•	« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n•	« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n•	« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n•	« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n•	« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n•	« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n•	« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n•	Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'Développeurs des technologies(#devtech) est une startup qui vise à promouvoir l\'intégrité de la jeunesse en appliquant la technologie afin de permettre  l\'émergence  de la société.', 'la startup devetech vise à apporter des solutions efficaces grâce à la nouvelle  technologie pour palier contre les différents  problèmes que rencontre la société  suite au manquement d\'une meilleure technologie adaptée à leur besoin.', 'Réduire le taux des difficultés que rencontre  la société suite au manquement d\'une  meilleure solution technologique appropriée à leur problématique au pourcentage le plus bas possible jamais atteint!', 'Devetech est une  startup qui vise à promouvoir  l\'intégrité des jeunes en appliquant la technologie  pour permettre l\'avancement de la société.\r\nNotre contribution dans la société est le faite de voir comment la jeunesse progresse  mieux  en contribuant  aux différents aspects qui aident la société  à s\'en sortir dans le Cao.\r\nLa technologie dont nous parlons fera en sorte de contribuer  à l\'émergence de toute la jeunesse et la société en particulier.\r\nNous devons considérer la technologie actuelle comme une arme  efficace pour changer le monde.\r\n \r\n', '2021-05-27 19:52:16');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_pays`
--

CREATE TABLE `tbl_pays` (
  `idPays` int(11) NOT NULL,
  `nompays` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_pays`
--

INSERT INTO `tbl_pays` (`idPays`, `nompays`, `created_at`) VALUES
(1, 'RDC', '2021-03-30 11:25:53');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `full_adresse` text DEFAULT NULL,
  `biographie` text DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `idposte` int(11) DEFAULT 1,
  `debit_event` date DEFAULT NULL,
  `fin_event` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idposte`, `debit_event`, `fin_event`) VALUES
(7, 'sumaili shabani', 'roger patrona', 'sumailiroger681@gmail.com', '1427037866.png', '+243817883541', 'tmk goma avenue mushanganya n°59', 'Développeur et entrepreneur en temps plein!                                                      ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1, '2021-05-03', '2021-06-03'),
(8, 'wilson vulembere', 'Antoine', 'admin@gmail.com', '1754247350.jpg', '+243817883541', 'Quartier office 2', 'développeur de logiciels', '1995-05-26', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-06-03', '2021-07-03'),
(9, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '1729399162.jpg', '0998765432', 'Tmk goma', '                  	Developpeur fullstack                  ', '1000-09-19', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-06-03', '2021-07-03'),
(11, 'strong abdiel', 'strong', 'strong@gmail.com', '1995908381.JPG', '0998765432', 'Office 2', 'Brigadier valant', '1997-05-26', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '1125004339.JPG', '+243810409151', 'Quartier birere', NULL, '1999-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(13, 'mikah kalume', 'sefu', 'mikah@gmail.com', '504914652.jpg', '+243810409151', 'quartier katoyi avenue konde', 'développeur web', '2021-04-13', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', '', '', '', 1, '2021-07-03', '2021-07-03'),
(14, 'dembo apoline', 'pataule', 'apoline345@gmail.com', '343503402.jpg', '+243970963642', 'Goma quartier office', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(15, 'joel tshongo', 'jt', 'joel@gmail.com', '997250263.png', '+243810409151', 'Goma quartier katoyi', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(16, 'yuma kayanda', 'françois yuka', 'yuma@gmail.com', '1280173340.JPG', '+243990084881', 'quartier katoyi Avenue konde', '                  	It <b>never</b> goas <b>slowly</b>!                  ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(18, 'useni uwonda', 'Emanuel', 'useni@gmail.com', '2120437570.jpg', '+243990084881', 'Le gars normal', NULL, '1992-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/', 1, NULL, NULL),
(19, 'madeleine stephanie', 'lola', 'madeleine@gmail.com', '520932141.jpg', '+243990084881', 'My life', NULL, '2021-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, '', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(20, 'kakese pandamiti', NULL, 'kakese@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 3, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(21, 'kakese pandamiti', NULL, 'kakese@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 3, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idv` int(11) NOT NULL,
  `nomv` varchar(300) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idv`, `nomv`, `idp`, `created_at`) VALUES
(1, 'Buta', 1, '2020-07-14 17:11:54'),
(2, 'Mbandaka', 2, '2020-07-14 17:14:00'),
(3, 'Lubumbashi', 3, '2020-07-14 17:14:17'),
(4, 'Kamina', 4, '2020-07-14 17:14:37'),
(5, 'Isiro', 5, '2020-07-14 17:15:00'),
(6, 'Bunia', 6, '2020-07-14 17:15:20'),
(7, 'Luebo', 7, '2020-07-14 17:15:37'),
(8, 'Kananga', 8, '2020-07-14 17:15:58'),
(9, 'Mbuji-Mayi', 9, '2020-07-14 17:16:29'),
(10, 'Kinshasa', 10, '2020-07-14 17:16:52'),
(11, 'Matadi', 11, '2020-07-14 17:17:30'),
(12, 'Kenge', 12, '2020-07-14 17:17:50'),
(13, 'Bandundu', 13, '2020-07-14 17:20:12'),
(14, 'Kabinda', 14, '2020-07-14 17:20:32'),
(15, 'Kolwezi', 15, '2020-07-14 17:20:51'),
(16, 'Inongo', 16, '2020-07-14 17:21:23'),
(17, 'Kindu', 17, '2020-07-14 17:21:41'),
(18, 'Lisala', 18, '2020-07-14 17:22:07'),
(19, 'Goma', 19, '2020-07-14 17:22:32'),
(20, 'Gbadolite', 20, '2020-07-14 17:22:50'),
(21, 'Lusambo', 21, '2020-07-14 17:23:07'),
(22, 'Bukavu', 22, '2020-07-14 17:23:23'),
(23, 'Gemena', 23, '2020-07-14 17:23:42'),
(24, 'Kalemie', 24, '2020-07-14 17:24:02'),
(25, 'Kisangani', 25, '2020-07-14 17:24:22'),
(26, 'Boende', 26, '2020-07-14 17:24:45');

-- --------------------------------------------------------

--
-- Structure de la vue `profile_compte_rendu`
--
DROP TABLE IF EXISTS `profile_compte_rendu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_compte_rendu`  AS SELECT `compterendu`.`idcompt` AS `idcompt`, `compterendu`.`titre` AS `titre`, `compterendu`.`milieu` AS `milieu`, `compterendu`.`jour` AS `jour`, `compterendu`.`fichier` AS `fichier`, `compterendu`.`commentaire` AS `commentaire`, `compterendu`.`id_user` AS `id_user`, `compterendu`.`codeP` AS `codeP`, `compterendu`.`created_at` AS `created_at`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`telephone` AS `telephone`, `users`.`image` AS `image` FROM (`compterendu` join `users` on(`compterendu`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_entreprise`
--
DROP TABLE IF EXISTS `profile_entreprise`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_entreprise`  AS SELECT `entreprise`.`identrep` AS `identrep`, `entreprise`.`ceo` AS `ceo`, `entreprise`.`nom` AS `nom`, `entreprise`.`description` AS `description`, `entreprise`.`idPays` AS `idPays`, `entreprise`.`idp` AS `idp`, `entreprise`.`idv` AS `idv`, `entreprise`.`idcat` AS `idcat`, `entreprise`.`typeEntrep` AS `typeEntrep`, `entreprise`.`nombreEmploye` AS `nombreEmploye`, `entreprise`.`siteweb` AS `siteweb`, `entreprise`.`facebook` AS `facebook`, `entreprise`.`twitter` AS `twitter`, `entreprise`.`linkedin` AS `linkedin`, `entreprise`.`logo` AS `logo`, `tbl_category`.`nomcat` AS `nomcat`, `tbl_pays`.`nompays` AS `nompays`, `province`.`nomp` AS `nomp`, `ville`.`nomv` AS `nomv`, `users`.`image` AS `image`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`telephone` AS `telephone` FROM (((((`entreprise` join `tbl_pays` on(`entreprise`.`idPays` = `tbl_pays`.`idPays`)) join `province` on(`entreprise`.`idp` = `province`.`idp`)) join `ville` on(`entreprise`.`idv` = `ville`.`idv`)) join `users` on(`entreprise`.`ceo` = `users`.`id`)) join `tbl_category` on(`entreprise`.`idcat` = `tbl_category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement`
--
DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement`  AS SELECT `paiement`.`idp` AS `idp`, `paiement`.`idpersonne` AS `idpersonne`, `paiement`.`date_paie` AS `date_paie`, `paiement`.`montant` AS `montant`, `paiement`.`motif` AS `motif`, `paiement`.`token` AS `token`, `paiement`.`created_at` AS `created_at`, `paiement`.`codeFacture` AS `codeFacture`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`idrole` AS `idrole`, `users`.`telephone` AS `telephone`, `users`.`image` AS `image`, `entreprise`.`nom` AS `nom`, `entreprise`.`logo` AS `logo`, `paiement`.`etat_paiement` AS `etat_paiement` FROM ((`paiement` join `users` on(`paiement`.`idpersonne` = `users`.`id`)) join `entreprise` on(`users`.`id` = `entreprise`.`ceo`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement_padding`
--
DROP TABLE IF EXISTS `profile_paiement_padding`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement_padding`  AS SELECT `paiement_pading`.`idp` AS `idp`, `paiement_pading`.`idpersonne` AS `idpersonne`, `paiement_pading`.`date_paie` AS `date_paie`, `paiement_pading`.`montant` AS `montant`, `paiement_pading`.`token` AS `token`, `paiement_pading`.`created_at` AS `created_at`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`image` AS `image`, `users`.`telephone` AS `telephone`, `entreprise`.`nom` AS `nom`, `entreprise`.`logo` AS `logo`, `paiement_pading`.`motif` AS `motif` FROM ((`paiement_pading` join `users` on(`paiement_pading`.`idpersonne` = `users`.`id`)) join `entreprise` on(`paiement_pading`.`idpersonne` = `entreprise`.`ceo`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_projet`
--
DROP TABLE IF EXISTS `profile_projet`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_projet`  AS SELECT `projet`.`idprojet` AS `idprojet`, `projet`.`student_id` AS `student_id`, `projet`.`nomP` AS `nomP`, `projet`.`logoP` AS `logoP`, `projet`.`idee1` AS `idee1`, `projet`.`idee2` AS `idee2`, `projet`.`idee3` AS `idee3`, `projet`.`idee4` AS `idee4`, `projet`.`idee5` AS `idee5`, `projet`.`produit1` AS `produit1`, `projet`.`produit2` AS `produit2`, `projet`.`produit3` AS `produit3`, `projet`.`produit4` AS `produit4`, `projet`.`client1` AS `client1`, `projet`.`client2` AS `client2`, `projet`.`client3` AS `client3`, `projet`.`marche1` AS `marche1`, `projet`.`marche2` AS `marche2`, `projet`.`concurrence1` AS `concurrence1`, `projet`.`concurrence2` AS `concurrence2`, `projet`.`moyen1` AS `moyen1`, `projet`.`moyen2` AS `moyen2`, `projet`.`moyen3` AS `moyen3`, `projet`.`moyen4` AS `moyen4`, `projet`.`moyen5` AS `moyen5`, `projet`.`partenaire1` AS `partenaire1`, `projet`.`partenaire2` AS `partenaire2`, `projet`.`partenaire3` AS `partenaire3`, `projet`.`faiblesse1` AS `faiblesse1`, `projet`.`faiblesse2` AS `faiblesse2`, `projet`.`codeP` AS `codeP`, `projet`.`fichierzip` AS `fichierzip`, `projet`.`created_at` AS `created_at`, `entreprise`.`identrep` AS `identrep`, `entreprise`.`ceo` AS `ceo`, `entreprise`.`nom` AS `nom`, `entreprise`.`logo` AS `logoEntreprise`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`telephone` AS `telephone`, `users`.`image` AS `image`, `users`.`email` AS `email` FROM ((`projet` join `entreprise` on(`projet`.`student_id` = `entreprise`.`ceo`)) join `users` on(`entreprise`.`ceo` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_ville`
--
DROP TABLE IF EXISTS `profile_ville`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_ville`  AS SELECT `ville`.`idv` AS `idv`, `ville`.`nomv` AS `nomv`, `province`.`nomp` AS `nomp`, `ville`.`created_at` AS `created_at`, `ville`.`idp` AS `idp` FROM (`ville` join `province` on(`ville`.`idp` = `province`.`idp`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compterendu`
--
ALTER TABLE `compterendu`
  ADD PRIMARY KEY (`idcompt`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`identrep`),
  ADD KEY `ceo` (`ceo`),
  ADD KEY `idPays` (`idPays`),
  ADD KEY `idp` (`idp`),
  ADD KEY `idv` (`idv`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idgalery`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `link_canavas`
--
ALTER TABLE `link_canavas`
  ADD PRIMARY KEY (`idlink`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `link_canavas2`
--
ALTER TABLE `link_canavas2`
  ADD PRIMARY KEY (`idlink`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `padding_users`
--
ALTER TABLE `padding_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idpersonne` (`idpersonne`);

--
-- Index pour la table `paiement_pading`
--
ALTER TABLE `paiement_pading`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idpersonne` (`idpersonne`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`idprojet`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `recupere`
--
ALTER TABLE `recupere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `swot`
--
ALTER TABLE `swot`
  ADD PRIMARY KEY (`idswot`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `swot2`
--
ALTER TABLE `swot2`
  ADD PRIMARY KEY (`idswot`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`idinfo`);

--
-- Index pour la table `tbl_pays`
--
ALTER TABLE `tbl_pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `idp` (`idp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compterendu`
--
ALTER TABLE `compterendu`
  MODIFY `idcompt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `identrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `galery`
--
ALTER TABLE `galery`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `link_canavas`
--
ALTER TABLE `link_canavas`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `link_canavas2`
--
ALTER TABLE `link_canavas2`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `padding_users`
--
ALTER TABLE `padding_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `paiement_pading`
--
ALTER TABLE `paiement_pading`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `idprojet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `province`
--
ALTER TABLE `province`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `recupere`
--
ALTER TABLE `recupere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `swot`
--
ALTER TABLE `swot`
  MODIFY `idswot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `swot2`
--
ALTER TABLE `swot2`
  MODIFY `idswot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tbl_pays`
--
ALTER TABLE `tbl_pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compterendu`
--
ALTER TABLE `compterendu`
  ADD CONSTRAINT `compterendu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`ceo`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_2` FOREIGN KEY (`idPays`) REFERENCES `tbl_pays` (`idPays`) ON DELETE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_3` FOREIGN KEY (`idp`) REFERENCES `province` (`idp`) ON DELETE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_4` FOREIGN KEY (`idv`) REFERENCES `ville` (`idv`) ON DELETE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_5` FOREIGN KEY (`idcat`) REFERENCES `tbl_category` (`idcat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `link_canavas`
--
ALTER TABLE `link_canavas`
  ADD CONSTRAINT `link_canavas_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `link_canavas2`
--
ALTER TABLE `link_canavas2`
  ADD CONSTRAINT `link_canavas2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `online`
--
ALTER TABLE `online`
  ADD CONSTRAINT `online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `padding_users`
--
ALTER TABLE `padding_users`
  ADD CONSTRAINT `padding_users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paiement_pading`
--
ALTER TABLE `paiement_pading`
  ADD CONSTRAINT `paiement_pading_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `swot`
--
ALTER TABLE `swot`
  ADD CONSTRAINT `swot_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `swot2`
--
ALTER TABLE `swot2`
  ADD CONSTRAINT `swot2_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `province` (`idp`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
