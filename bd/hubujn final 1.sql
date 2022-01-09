-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 09 jan. 2022 à 11:24
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hubujn`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idart` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` text,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  `code` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `code`) VALUES
(84, 'MEET YOUR INVESTORS – FINANCEMENT STARTUPS – ÉDITION 2021', '	                  &lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Mi-mars, toute l’équipe de l’incubateur IONIS 361 a eu la joie de pouvoir accueillir l’événement phare de l’incubateur sur le financement :&amp;nbsp;&lt;font color=&quot;#4c4c4c&quot; face=&quot;Open Sans, sans-serif&quot;&gt;&lt;span style=&quot;background-color: rgb(245, 245, 245);&quot;&gt;&lt;b&gt;Meet Your Investors&lt;/b&gt;.&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;LE CONCEPT&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Meet Your Investors s’adresse à tous les entrepreneurs et startups accompagnés par l’incubateur&amp;nbsp;&lt;a href=&quot;https://www.ionis361.com/&quot; style=&quot;&quot;&gt;IONIS 361&lt;/a&gt;&amp;nbsp;en recherches de financements.&amp;nbsp;&lt;a href=&quot;https://actu.ionis-group.com/meet-your-investors-day/&quot; style=&quot;&quot;&gt;Chaque année&lt;/a&gt;, cet événement est un véritable tremplin pour ces dernières qui ont l’opportunité de rencontrer, sur quelques jours, tous les acteurs en financement, dilutif et non dilutif. Pour beaucoup, il marque le début de leur roadshow ou donne un coup d’accélérateur à leur phase de levée de fonds.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Durant 3 jours consécutifs, des rendez-vous de 20 minutes s’enchainent entre investisseurs et startups. Un rythme effréné où chaque entrepreneur répète son pitch inlassablement, où chaque intervenant dispense ses conseils.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pas de perte de temps, les rendez-vous sont personnalisés en fonction des différentes théories d’investissement et stratégies de financement.&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;MEET YOUR INVESTORS C’EST :&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;aligncenter wp-image-690 size-large&quot; src=&quot;https://wp.ionis-group.com/ionis361/wp-content/uploads/sites/12/2021/04/3-jours-de-rencontres-2-1024x410.png&quot; alt=&quot;Meet Your Investors en chiffres - financement&quot; width=&quot;640&quot; height=&quot;256&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; clear: both; margin: 20px 0px; width: 726.75px;&quot;&gt;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;L’OBJECTIF :&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pour les entrepreneurs, l’objectif est double. Trouver des solutions adaptées à leurs besoins et convaincre les investisseurs de continuer l’aventure à leurs côtés.&lt;br&gt;Les acteurs en financement rencontrent de nouvelles jeunes pousses, découvrent de nouveaux projets et sélectionnent ceux qui les ont convaincus.&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;ET APRÈS ?&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Un premier contact entre les startups et investisseurs a été créé mais cela va plus loin !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les entreprises en recherche de financement non-dilutif savent maintenant vers qui se tourner. Elles ont pu déposer dossiers et autres candidatures. De nombreuses startups entrant en roadshow ont débuté un parcours avec les fonds d’investissements intéressés. Les pitchs et négociations se poursuivent.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Nous ne doutons pas de pouvoir vous compter de belles « success stories » très prochainement !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;A la joie de cet événement en présentiel, s’ajoute le constat satisfaisant que les startups traversent vaillamment et brillamment cette crise sans précédent. La mobilisation des acteurs en financement prouve un vrai attrait pour les startups, une continuité dans le soutient et l’envie de les accompagner dans cette aventure !&lt;/p&gt;\r\n                          \r\n	              ', '', '2021-07-24 12:15:23', '1679915681.png', 'texte', 23, NULL),
(85, 'OPEN ISEG : LES GRANDS GAGNANTS !', '	                  &lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Mi-mars, toute l’équipe de l’incubateur IONIS 361 a eu la joie de pouvoir accueillir l’événement phare de l’incubateur sur le financement :&amp;nbsp;&lt;font color=&quot;#4c4c4c&quot; face=&quot;Open Sans, sans-serif&quot;&gt;&lt;span style=&quot;background-color: rgb(245, 245, 245);&quot;&gt;&lt;b&gt;Meet Your Investors&lt;/b&gt;.&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;LE CONCEPT&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Meet Your Investors s’adresse à tous les entrepreneurs et startups accompagnés par l’incubateur&amp;nbsp;&lt;a href=&quot;https://www.ionis361.com/&quot; style=&quot;&quot;&gt;IONIS 361&lt;/a&gt;&amp;nbsp;en recherches de financements.&amp;nbsp;&lt;a href=&quot;https://actu.ionis-group.com/meet-your-investors-day/&quot; style=&quot;&quot;&gt;Chaque année&lt;/a&gt;, cet événement est un véritable tremplin pour ces dernières qui ont l’opportunité de rencontrer, sur quelques jours, tous les acteurs en financement, dilutif et non dilutif. Pour beaucoup, il marque le début de leur roadshow ou donne un coup d’accélérateur à leur phase de levée de fonds.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Durant 3 jours consécutifs, des rendez-vous de 20 minutes s’enchainent entre investisseurs et startups. Un rythme effréné où chaque entrepreneur répète son pitch inlassablement, où chaque intervenant dispense ses conseils.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pas de perte de temps, les rendez-vous sont personnalisés en fonction des différentes théories d’investissement et stratégies de financement.&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;MEET YOUR INVESTORS C’EST :&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;aligncenter wp-image-690 size-large&quot; src=&quot;https://wp.ionis-group.com/ionis361/wp-content/uploads/sites/12/2021/04/3-jours-de-rencontres-2-1024x410.png&quot; alt=&quot;Meet Your Investors en chiffres - financement&quot; width=&quot;640&quot; height=&quot;256&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; clear: both; margin: 20px 0px; width: 726.75px;&quot;&gt;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;L’OBJECTIF :&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pour les entrepreneurs, l’objectif est double. Trouver des solutions adaptées à leurs besoins et convaincre les investisseurs de continuer l’aventure à leurs côtés.&lt;br&gt;Les acteurs en financement rencontrent de nouvelles jeunes pousses, découvrent de nouveaux projets et sélectionnent ceux qui les ont convaincus.&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;ET APRÈS ?&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Un premier contact entre les startups et investisseurs a été créé mais cela va plus loin !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les entreprises en recherche de financement non-dilutif savent maintenant vers qui se tourner. Elles ont pu déposer dossiers et autres candidatures. De nombreuses startups entrant en roadshow ont débuté un parcours avec les fonds d’investissements intéressés. Les pitchs et négociations se poursuivent.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Nous ne doutons pas de pouvoir vous compter de belles « success stories » très prochainement !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;A la joie de cet événement en présentiel, s’ajoute le constat satisfaisant que les startups traversent vaillamment et brillamment cette crise sans précédent. La mobilisation des acteurs en financement prouve un vrai attrait pour les startups, une continuité dans le soutient et l’envie de les accompagner dans cette aventure !&lt;/p&gt;\r\n                          \r\n	              ', '', '2021-07-24 12:19:52', '1784485231.jpg', 'texte', 23, NULL),
(86, 'CONSEILS D’EXPERTS BOOSTCAMP #1', '&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Mi-juin, l’association Les Déterminés et l’incubateur IONIS 361 ont lancé le programme de formation intensive à l’entrepreneuriat le Boostcamp pour partager leurs conseils en création d’entreprise&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Chaque jour, les porteurs de projet sélectionnés participent à des&amp;nbsp;workshops, des rencontres avec des entrepreneurs inspirants et un accompagnement personnalisé par les startups manager IONIS 361.&lt;br&gt;Tout au long de la première semaine du Boostcamp, nous avons pu découvrir les «&amp;nbsp;good tips&amp;nbsp;» de nos experts&amp;nbsp;en création et développement d’entreprises. Nous avons décidé de vous partager leurs meilleurs conseils !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Design Thinking&lt;/p&gt;&lt;figure id=&quot;attachment_655&quot; aria-describedby=&quot;caption-attachment-655&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 404px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-655&quot; title=&quot;design-thinking&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/06/ux-indonesia-pqzRfBhd9r0-unsplash-1024x683.jpg&quot; alt=&quot;conseils en design thinking&quot; width=&quot;404&quot; height=&quot;269&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 404px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-655&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;boostcamp – design thinking&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;L’expérience utilisateur est au centre de toutes les préoccupations, et pour cause ! Si cette dernière est négative, elle ne conduira pas l’utilisateur à renouveler l’expérience, justement.&lt;br&gt;C’est pourquoi, le rôle du designer est essentiel. Pour garantir la meilleure expérience possible, il ne faut pas se reposer sur ses lauriers.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les points clés du design thinking : curiosité, empathie, créativité, prototyper, tester, faire des erreurs et recommencer. Les enfants sont des experts dans ce domaine !&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;L’expérience utilisateur est importante mais l’utilisateur dans tout ça ? Il est et doit rester la priorité de toute entreprise. Connaître ses utilisateurs est essentiel et ces derniers peuvent évoluer.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Poser son persona sur papier pour toujours garder en tête le profil pour qui l’on réalise son produit.&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Conseils de Jonathan Scanzi – co-fondateur&amp;nbsp;&lt;a href=&quot;https://evolt.io/&quot; style=&quot;&quot;&gt;Evolt&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Analyse du marché&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;42% des entreprises ne survivent pas à cause de l’absence de marché pour le produit ou le service qu’elles ont créé. Ce chiffre à lui seul révèle l’importance des études de marché.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;L’analyse du marche n’est jamais une étape simple mais elle est pourtant primordiale pour avancer dans son projet.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les erreurs à ne pas commettre :&lt;br&gt;sous estimer l’importance de l’étude de marché et de la concurrence&lt;br&gt;ne pas analyser la réglementation liée à son marché&lt;br&gt;vouloir tout faire seul ou à l’inverse tout déléguer&lt;br&gt;ne pas challenger les informations récoltées et leur durabilité. Il faut prendre du recul !&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Conseils de Walid Lacidi – co-fondateur&amp;nbsp;&lt;a href=&quot;http://www.posity.fr/&quot; style=&quot;&quot;&gt;Posity&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Business Model&lt;/p&gt;&lt;figure id=&quot;attachment_659&quot; aria-describedby=&quot;caption-attachment-659&quot; class=&quot;wp-caption aligncenter&quot; style=&quot;margin-right: auto; margin-bottom: 1.5em; margin-left: auto; clear: both; max-width: 100%; width: 499px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-659&quot; title=&quot;business-model&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/06/boostcamp-BM-1024x682.jpg&quot; alt=&quot;business model conseils sur sa construction&quot; width=&quot;499&quot; height=&quot;332&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 499px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-659&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;boostcamp – business model&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Tout entrepreneur, en devenir ou expérimenté, a affaire à cette notion de business model. Terme barbare aux oreilles de certains, le business model est le plan de route d’un projet. Le concept de Business Model Canva, désormais célèbre, permet de poser sur papier les éléments principaux du projet et d’y voir plus clair. On pourrait penser que le business model canva est simplement un tableau à remplir au début du projet, et pourtant, notre expert nous démontre le contraire.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les secrets d’un bon business model :&lt;br&gt;on peut avoir la meilleur idée du monde mais se planter si le marché n’est pas prêt&lt;br&gt;le marché est très mouvant, ne restez pas figer sur un business model si la réaction du marché ou de la concurrence n’est pas bonne&lt;br&gt;il faut être agile et évoluer en fonction de ces facteurs externes&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Conseils de Julien Bellot – co-fondateur&amp;nbsp;&lt;a href=&quot;https://www.innovation-gravity.com/&quot; style=&quot;&quot;&gt;Gravity&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Prototypage&lt;/p&gt;&lt;figure id=&quot;attachment_658&quot; aria-describedby=&quot;caption-attachment-658&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 270px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-658&quot; title=&quot;codage&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/06/boostcamp_nocode.jpg&quot; alt=&quot;codage&quot; width=&quot;270&quot; height=&quot;406&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 270px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-658&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;boostcamp – nocode&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Si vous avez un côté perfectionniste, vous devez vous dire que jamais vous n’oseriez présenter votre solution avant qu’elle ne soit parfaitement finalisée. Pourtant, cela prend du temps et coûte souvent beaucoup d’argent.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;De plus, il est extrêmement risqué d’investir dans une solution finale avant même d’avoir tester son idée IRL.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pour cela, nous avons la solution : le prototypage low code / no-code.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Le no-code permet de diviser par 10 le temps de travail et le budget : idéal pour tester son idée !&lt;br&gt;La clef : lier des outils existants entre eux. Ça ne sert à rien de réinventer la roue !&lt;br&gt;Les points de vigilance : la propriété et la scalabilité&lt;/p&gt;&lt;/blockquote&gt;\r\n                          ', '', '2021-07-24 12:21:56', '536851561.png', 'texte', 23, NULL),
(87, 'EST-IL POSSIBLE DE LEVER DES FONDS EN TEMPS DE CRISE ?', '&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;purLa crise engendrée par la COVID-19 a mis un gros coup de frein aux levées de fonds dans l’écosystème start-ups. Alors que l’année commençait bien avec près de 600 millions d’euros levés en janvier, les chiffres ont rapidement dégringolé.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;2020 vs 2019&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Après un mois de février bien moins prometteur que celui de janvier avec 355 millions d’euros levés, c’est un véritable effondrement en mars.&lt;br&gt;L’écosystème français n’aura réussi à lever seulement 177 millions d’euros, dont 115 millions recensés sur la première semaine.&lt;br&gt;En comparaison, les start-ups françaises avaient levé 364 millions d’euros sur la même période en 2019. Une chute vertigineuse de près de 51%.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Le mois d’avril redonne un peu d’espoir avec 294 millions d’euros levés. Bien que ce chiffre soit en hausse significative comparé au mois de mars, il est important de noter la différence avec l’année précédente. En effet, en avril 2019, les jeunes pousses françaises avaient levé 118 millions d’euros de plus qu’en avril 2020, soit 28,6% de plus.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les quinze premiers jours de mai sont représentatifs de la reprise économique progressive. 23 start-ups ont réussi à lever 221 millions d’euros. Un joli score qu’il faut, en partie, attribuer à Back Market avec une opération de 110 millions d’euros. Le reste du mois semble prometteur, de quoi remonter le moral des entrepreneurs et investisseurs.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les secteurs de prédilection&lt;br&gt;Les start-ups ayant levé des fonds ces 3 derniers mois sont toutes issues d’univers différents mais il est impossible de ne pas relever les 3 secteurs les plus représentés.&lt;br&gt;La GreenTech arrive en tête de liste suivi des secteurs de l’AssurTech et la DeepTech.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Le comportement des fonds&lt;/p&gt;&lt;figure id=&quot;attachment_648&quot; aria-describedby=&quot;caption-attachment-648&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 459px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-648&quot; title=&quot;pitch-levee-de-fonds&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/05/fundraising.png&quot; alt=&quot;&quot; width=&quot;459&quot; height=&quot;258&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 459px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-648&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;Photo by Austin Distel on Unsplash&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Dans ce contexte de crise, les fonds d’investissements et business angels ont axé leurs priorités sur leur portefeuille déjà existant. Leur rôle étant de sécuriser les entreprises qu’ils accompagnent déjà afin de leur permettre de faire face à cette crise. Par conséquent, ils n’ont pas souhaité miser sur de nouvelles pousses.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Il faut toutefois noter que les tours de table qui ont été bouclés durant cette période, ont, pour la plupart, débuté bien avant la crise du coronovirus.&lt;br&gt;Mais les chiffres encourageants du mois de mai nous démontre le soutient des investisseurs aux jeunes pousses !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Lever des fonds&amp;nbsp;: compliqué mais pas impossible&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les investisseurs recommencent à faire confiance et à parier sur de nouvelles pousses tout en restant prudents. Les sommes investies sont assez faibles pour de nombreuses start-ups, mais il est important de noter que la majorité des levées sont en seed ou en série A, ce qui est plutôt encourageant pour les jeunes entreprises !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;En ces temps difficile, il ne faut pas oublier que les start-ups sont synonymes d’agilité et d’adaptabilité. Ces jeunes entreprises innovantes évoluent au quotidien dans des environnements incertains. Elles trouvent des solutions et continuent à avancer.&lt;/p&gt;\r\n                          ', '', '2021-07-24 12:23:36', '223343569.jpg', 'texte', 24, NULL),
(88, 'OBJECTIF SORTIE DE CRISE', '&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Dans quelques jours, la France quittera progressivement le confinement pour reprendre ses activités. Bien que se profile une reprise modérée, il est essentiel pour une entreprise de prévoir la sortie de crise afin de relancer son activité dès que possible dans les meilleures conditions qu’il soit.&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;&lt;b&gt;PROTÉGER SES SALARIÉS&lt;/b&gt;&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Le retour au bureau, ne sera pas aussi simple « qu’avant ». Toute entreprise doit se conformer au protocole national assurant la santé et la sécurité des salariés. S’il est important de reprendre du service, il est également important de prendre en compte les situations et contraintes personnelles de ses salariés afin de les protéger tout en proposant des solutions adaptées aux employés bloqués à la maison pour garder leurs enfants par exemple.&lt;/p&gt;&lt;figure id=&quot;attachment_636&quot; aria-describedby=&quot;caption-attachment-636&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 383px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-636&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/05/team.png&quot; alt=&quot;communiquer sur la crise&quot; width=&quot;383&quot; height=&quot;255&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 383px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-636&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Après presque deux mois loin des yeux, il est essentiel de maintenir (ou, dans le pire des cas, recréer) une cohésion entre les salariés. En effet, les réunions virtuelles laissent peu de place à des échanges plus personnels. Il est pourtant essentiel du créer du lien entre ses équipes. Avec le retour d’une partie des équipes en présentiel, il est important de ne pas faire de différenciation en continuant visioconférences.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les mois à venir restent imprévisibles, il n’est toutefois pas exclu de pouvoir très prochainement se réunir. Vous pouvez, dès à présent, organiser des séminaires, en France, ou même de façon virtuelle grâce aux nouveaux outils déployés durant cette période de confinement.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;&lt;b&gt;COMMUNIQUER&lt;/b&gt;&lt;/h3&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Bien qu’il y est des zones de flou, cette période incertaine ne doit pas pousser les entreprises à faire de la rétention d’informations. Il est essentiel d’être transparent avec ses salariés afin qu’eux même puisse s’organiser et être productif.&lt;br&gt;En réalité, les impliquer dans l’organisation de la sortie de crise peut être un excellent moyen de récupérer de bonnes idées à mettre en place, au plus près du terrain !&lt;/p&gt;&lt;figure id=&quot;attachment_637&quot; aria-describedby=&quot;caption-attachment-637&quot; class=&quot;wp-caption aligncenter&quot; style=&quot;margin-right: auto; margin-bottom: 1.5em; margin-left: auto; clear: both; max-width: 100%; width: 311px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-637&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/05/communication.png&quot; alt=&quot;bulle communication&quot; width=&quot;311&quot; height=&quot;207&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 311px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-637&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;La communication interne et tout autant essentielle que la communication externe. Vous allez pouvoir recommencer à livrer vos clients&amp;nbsp;? Vous allez pouvoir recommencer à vous approvisionner chez vos fournisseurs ? Vos consommateurs vont pouvoir compter sur vous&amp;nbsp;«&amp;nbsp;comme avant&amp;nbsp;» ? Informez-les&amp;nbsp;!&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Plus vous anticiper, moins les délais seront importants et plus tôt votre activité pourra repartir.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;h3 style=&quot;margin-top: 20px; margin-bottom: 10px; line-height: 30px; clear: both;&quot;&gt;&lt;b&gt;LA REPRISE COMMERCIALE&lt;/b&gt;&lt;/h3&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;Faire le bilan&lt;/h4&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Venons-en au cœur du business, la partie financière.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Tout d’abord, il est essentiel de regarder en face l’ampleur des dégâts causés par la crise en dressant un bilan financier de cette période.&lt;br&gt;Bien que l’exercice soit douloureux, n’oubliez pas de tenir compte des reports de charges, des aides proposées par l’Etat et les régions pour sauver votre trésorerie.&amp;nbsp;&lt;a href=&quot;https://www.ionis361.com/blogs/2020/03/covid-19-mesures-de-soutien-focus-entrepreneur-2/&quot; style=&quot;&quot;&gt;(vous les trouverez dans cet article)&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Nous allons sortir de la période de confinement, cependant, l’avenir est plus incertain que jamais. Afin d’essayer de prévoir l’imprévisible, il est important de dresser trois scenarii possibles :&lt;/p&gt;&lt;ul style=&quot;margin-bottom: 40px; padding-left: 40px; list-style: none;&quot;&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;un optimiste avec une sortie de crise et un retour à la normale dès cet été,&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;un neutre en prenant comme base cet automne,&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;un pessimiste en se basant sur une sortie de crise en 2021.&lt;/li&gt;&lt;/ul&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;Développer de nouveaux projets&lt;/h4&gt;&lt;figure id=&quot;attachment_641&quot; aria-describedby=&quot;caption-attachment-641&quot; class=&quot;wp-caption alignleft&quot; style=&quot;display: inline; margin-right: 1.5em; margin-bottom: 1.5em; float: left; max-width: 100%; width: 245px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-641&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/05/Sans-titre.png&quot; alt=&quot;après crise&quot; width=&quot;245&quot; height=&quot;284&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 245px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-641&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Durant cette période de confinement, vous avez peut-être réorganisé votre activité, voir pivoté. Encore une fois, il est important de faire un bilan de ce qui a été fait. Vous devez également décider quelles activités doivent continuer et celles qui doivent s’arrêter. En fonction de cela, la charge de travail sera réorganisée, ce qui impactera également vos salariés.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Profitez de cette période pour relire les projets trainant sur un bout de papier et que vous n’avez jamais eu le temps de mettre en place. Définissez une feuille de route après avoir analyser ces projets dormants. C’est peut-être le bon moment pour les lancer !&lt;/p&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;Trouver des financements&lt;/h4&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Bien entendu, ces projets nécessiteront des financements. Les aides financières misent en place durant la crise ont beaucoup fait parler d’elles. Résultat, on a peu vu les appels à projets et différents concours. Mais ces derniers ne sont pas en arrêt pour autant. Renseignez-vous et commencer dès à présent les démarches, ce qui vous fera gagner un temps précieux par la suite. (&lt;a href=&quot;https://www.bpifrance.fr/A-la-une/Appels-a-projets-concours&quot; style=&quot;&quot;&gt;trouver les appels à projets&lt;/a&gt;)&lt;/p&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;Garder le contact&lt;/h4&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Cette période difficile a l’avantage d’avoir mis en valeur de belles choses, notamment les principes de solidarité et d’entraide. N’hésitez pas à garder le contact avec vos clients et fournisseurs, simplement pour prendre de leurs nouvelles, sans forcément parler business et offres commerciales. Ces échanges vous permettront de renforcer les liens pour un avenir plus serein.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;Cette préparation à la sortie de crise vous permettra de parer à toute éventualité et de faire face au futurs challenges qui se présenteront à vous avec assurance et confiance.&lt;/b&gt;&lt;/p&gt;&lt;div&gt;&lt;em&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;&lt;br&gt;&lt;/strong&gt;&lt;/em&gt;&lt;/div&gt;\r\n                          ', '', '2021-07-24 12:25:07', '1020954389.png', 'texte', 24, NULL);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `code`) VALUES
(89, 'COVID-19 : LES STARTUPS IONIS 361 SE MOBILISENT', '&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;La situation exceptionnelle que nous vivons à fait émerger de belles initiatives d’entraide et de solidarité. De nombreuses entreprises prennent des mesures pour apporter leur soutien à l’effort international face à lutte contre le coronavirus.&lt;br&gt;&lt;font color=&quot;#333333&quot; face=&quot;Arial, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 18px; background-color: rgb(245, 245, 245);&quot;&gt;&lt;b&gt;Nos start-ups se mobilisent et innovent pour proposer leurs services gratuitement ou même développer de nouvelles solutions. Retrouvez les histoires de ces jeunes pousses qui font leur maximum pour aider au quotidien des français, qu’ils soient sur le front ou confinés chez eux.&lt;/b&gt;&lt;/span&gt;&lt;/font&gt;&lt;/h4&gt;&lt;h1 style=&quot;margin: 20px 0px 10px; line-height: 44px; clear: both;&quot;&gt;DÉVELOPPER DE NOUVELLES PRATIQUES&lt;/h1&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Eiffo Analytics&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les fondateurs de cette startup, spécialisée dans l’analyse de données, ont rejoint un groupe de travail afin d’aider, à leur échelle, dans la lutte contre le coronavirus :&amp;nbsp;&lt;b&gt;Data Against Covid&lt;/b&gt;.&lt;br&gt;Cette initiative permet la collaboration entre fonctionnaires et citoyens engagés. Grâce à leurs échanges avec des médecins, des soignants et le Ministère de la Santé, Santé Publique France a pu mettre à disposition du grand public un tableau sur lequel on peut savoir combien de personnes sont en réanimation, décédées, hospitalisées et rétablies, département par département.&lt;/p&gt;&lt;figure id=&quot;attachment_631&quot; aria-describedby=&quot;caption-attachment-631&quot; class=&quot;wp-caption alignleft&quot; style=&quot;display: inline; margin-right: 1.5em; margin-bottom: 1.5em; float: left; max-width: 100%; width: 298px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-631 &quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/entraide.png&quot; alt=&quot;&quot; width=&quot;298&quot; height=&quot;199&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 298px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-631&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Cette initiative permet de soulager la Direction Générale de la Santé et fournit au gouvernement des chiffres et données repris dans plusieurs allocutions du Président de la République et du Premier Ministre.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Le collectif ne s’arrête pas là et travaille déjà sur un autre projet pouvant aider à grande échelle les hôpitaux et leurs patients : une plateforme qui comptabilise les lits disponibles dans les hôpitaux, et qui communique ces informations aux autres hôpitaux et aux SAMU, leur permettant de mieux anticiper et d’offrir de meilleurs soins.&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Givair&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;a href=&quot;https://givair.com/&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; style=&quot;&quot;&gt;Givair&lt;/a&gt;&amp;nbsp;a mis en place le premier dispositif portable pour mesurer la qualité de l’air. Dans le cadre de la lutte contre la propagation de l’épidémie de Covid-19, la start-up se mobilise pour palier la baisse des stocks de certains équipements et contribuer à la protection de tous. Givair met à disposition son imprimante 3D pour fabriquer des visières de protection et des masques alternatifs. La start-up donne les visières de protection et masques à toutes les personnes qui pourraient être en contact étroit avec des porteurs du virus. Si vous êtes dans cette situation, vous pouvez contacter&amp;nbsp;&lt;a id=&quot;ember14120&quot; class=&quot;feed-shared-text-view__email ember-view&quot; href=&quot;mailto:m.rivillo@givair.com&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; style=&quot;&quot;&gt;m.rivillo@givair.com&lt;/a&gt;&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;Raive&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Raive propose des expériences et produits inédits à gagner et cela pour la bonne cause ! Cette start-up soutient des projets associatifs en France au travers de sa plateforme de collecte de dons. Pour chaque expérience et produit, les dons sont, en partie, reversé à une association.&lt;br&gt;Pour supporter l’effort national, Raive se mobilise en partenariat avec des entrepreneurs dans le but de collecter des dons pour venir en aide aux personnes les plus vulnérables. Pour leur première campagne, 100% des donations seront reversées à la Fondation de France. Pour faire en savoir plus et si vous souhaitez apporter votre contribution, cliquez-ici :&amp;nbsp;&lt;a href=&quot;https://raive.fr/&quot; style=&quot;&quot;&gt;raive.fr&lt;/a&gt;&lt;/p&gt;&lt;h1 style=&quot;margin: 20px 0px 10px; line-height: 44px; clear: both;&quot;&gt;SE FORMER EN LIGNER&lt;/h1&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Meet in Class&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Meet in Class, la startup spécialisée dans le soutien scolaire grâce à des cours en distanciel, permet, durant cette période, de suivre les cours de son programme scolaire en ligne.&lt;br&gt;De plus, l’entreprise s’implique pour accompagner les élèves en difficulté. En confinement, la continuité pédagogique à distance a créé d’autant plus d’inégalités entre les élèves ayant les moyens matériels et humains d’être accompagnés et ceux livrés à eux même.&lt;br&gt;Meet in Class profite des vacances de Pâques pour aider ces élèves à rattraper une partie de leur retard, grâce à l’implication des professeurs partenaires. La start-up constitue de petits groupes d’élèves et met à disposition ses outils pour le bon déroulement des cours dans cette démarche de cours solidaires. Pour en bénéficier, rendez-vous sur leur site :&amp;nbsp;&lt;a href=&quot;https://www.meetinclass.com/&quot; style=&quot;&quot;&gt;meetinclass.com&lt;/a&gt;&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Pipplet&lt;/b&gt;&lt;/h2&gt;&lt;figure id=&quot;attachment_628&quot; aria-describedby=&quot;caption-attachment-628&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 376px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-628&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/work.png&quot; alt=&quot;&quot; width=&quot;376&quot; height=&quot;250&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 376px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-628&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pipplet a développé une certification permettant aux entreprises d’évaluer le niveau en langues de leurs candidats en ligne. Afin d’aider les étudiants postulant aux admissions des écoles, la start-up a décidé d’ouvrir cette certification aux particuliers.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Ils peuvent désormais s’auto-tester et décrypter les points sur lesquels s’améliorer, si besoin.&lt;br&gt;Vous souhaitez connaitre votre niveau en langue étrangère ? C’est par ici :&amp;nbsp;&lt;a class=&quot;c-link&quot; href=&quot;http://www.pipplet.com/&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; aria-describedby=&quot;slack-kit-tooltip&quot; style=&quot;&quot;&gt;pipplet.com&lt;/a&gt;&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;BizzConnect&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;BizzConnect est une solution permettant d’organiser des webinaires et rendez-vous qualifiés à distance. Ces événements en ligne sont l’occasion de réunir des personnes n’étant pas sur la même zone géographique et pouvant partager leurs expériences, réunir des équipes sans qu’elles n’aient à traverser la France grâce à la visioconférence, ou encore pouvoir assister à l’intervention d’un expert, et échanger avec lui, que nous n’aurions pu rencontrer en présentiel. Pour découvrir toutes les possibilités que vous offre la solution BizzConnect, cliquez-ici :&amp;nbsp;&lt;a href=&quot;https://bizzconnect.io/&quot; style=&quot;&quot;&gt;bizzconnect.io&lt;/a&gt;&lt;/p&gt;&lt;h1 style=&quot;margin: 20px 0px 10px; line-height: 44px; clear: both;&quot;&gt;DES SOLUTIONS POUR SOUTENIR LES ENTREPRISES…&lt;/h1&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;Divin&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Divin est une plateforme numérique collaborative de mise en relation entre des producteurs, restaurateurs et consommateurs. Certains des partenaires restaurateurs de la startup se proposent d’être un&amp;nbsp;»point relais&amp;nbsp;» pour les producteurs qui ont des clients en centreville de Montpellier. Ces restaurateurs donnent gratuitement accès à leurs locaux (fermés durant cette période) avec chambres froides et réfrégirateurs pour assurer la livraison de paniers malain.&lt;br&gt;Grâce aux bénévoles de l’association, la distribution est assurée, gratuitement, en respectant toutes les consignes d’hygiène et de sécurité.&lt;br&gt;Pour retrouver les produits disponibles et les tarifs, rendez-vous sur&amp;nbsp;&lt;a href=&quot;https://www.facebook.com/DIVIN34&quot; style=&quot;&quot;&gt;la page Facebook de DIVIN&lt;/a&gt;, par sms au 06 87 31 92 63 ou 06 80 71 88 63, ou encore par mail à l’adresse suivante : divincmalin@gmail.com. Les paiements sont réalisés par espèces, chèques ou via les appli Lydia et Pumpkin.&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Freeckly&lt;/b&gt;&lt;/h2&gt;&lt;figure id=&quot;attachment_632&quot; aria-describedby=&quot;caption-attachment-632&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 383px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-632 &quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/shop1.png&quot; alt=&quot;&quot; width=&quot;383&quot; height=&quot;255&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 383px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-632&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Freeckly propose une solution de gestion des invendus, en ligne, pour les petites marques, détaillants et revendeurs touchés par la fermeture de leurs boutiques. Leur objectif est d’aider ces entreprises à écouler leur stock durant cette période de crise grâce à un concept de vente innovant et inédit. Dans un second temps, Freeckly développe sa solution pour les aider à se relever plus rapidement et facilement de cette crise en optimisant les opérations de déstockage, évitant la destruction de produits et en leur permettant touchant de nouveaux clients.&lt;br&gt;Toutes les infos et les contacts ici :&amp;nbsp;&lt;a href=&quot;http://pro.freeckly.com/&quot; style=&quot;&quot;&gt;freeckly.com&lt;/a&gt;&lt;/p&gt;&lt;h1 style=&quot;margin: 20px 0px 10px; line-height: 44px; clear: both;&quot;&gt;ET POUR AIDER LES PARTICULIERS&lt;/h1&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;Youggy&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Youggy, c’est la plateforme du bénévolat 2.0. La start-up met en relation des associations avec des bénévoles souhaitant apporter leur contribution. Face à cette crise sanitaire, il est important de penser à ceux qui sont pourtant parfois oublier. Youggy a lancé deux grandes collectes solidaires sur Paris et Lyon. L’objectif : collecter un grand nombre de produits d’hygiène et les redistribuer aux personnes en grande précarité.&lt;br&gt;Le défi a été relevé avec succès et l’initiative a permis de lutter contre le manque d’accès à des produits d’hygiène d’un grand nombre de sans-abris.&lt;br&gt;Pour se tenir informer des campagnes solidaires, c’est par ici :&amp;nbsp;&lt;a href=&quot;https://www.youggy.com/&quot; style=&quot;&quot;&gt;youggy.com&lt;/a&gt;&lt;/p&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;&lt;b&gt;Servicoo&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Servicoo, le réseau qui rend service, vous permet d’échanger de l’argent, au niveau national ou international, grâce à sa crypto-monnaie, les Servicoins au sein de la Servichain. Dans ces moments où la solidarité est essentielle, Servicoo décide de supprimer tous les frais liés à l’achat de servicoins sur sa plateforme.&lt;br&gt;La start-up met également à disposition un service de dépannage informatique à distance et totalement gratuit grâce à la mobilisation de ses consultants. Pour les contacter, c’est par ici :&amp;nbsp;&lt;a href=&quot;https://www.servicoo.com/&quot; style=&quot;&quot;&gt;servicoo.com&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Nous sommes tous solidaires face à cette crise !&lt;/p&gt;\r\n                          ', '', '2021-07-24 12:27:15', '1493827397.png', 'texte', 24, NULL),
(90, 'COMPRENDRE SA CIBLE COMMERCIALE', '&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;figure id=&quot;attachment_619&quot; aria-describedby=&quot;caption-attachment-619&quot; class=&quot;wp-caption alignleft&quot; style=&quot;display: inline; margin-right: 1.5em; margin-bottom: 1.5em; float: left; max-width: 100%; width: 3166px;&quot;&gt;&lt;a href=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/cible-commerciale-1.jpg&quot; style=&quot;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-619 size-full&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/cible-commerciale-1.jpg&quot; alt=&quot;&quot; width=&quot;3166&quot; height=&quot;1385&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 766.75px; margin: 20px auto;&quot;&gt;&lt;/a&gt;&lt;figcaption id=&quot;caption-attachment-619&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;Je fais quoi&amp;nbsp;? Pour qui&amp;nbsp;? Comment&amp;nbsp;? Je communique où&amp;nbsp;? Je dis quoi&amp;nbsp;?&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;De nombreuses startups sont victimes du syndrome : «&amp;nbsp;Je fais parce que&amp;nbsp;&lt;b&gt;JE&lt;/b&gt;&amp;nbsp;pense que…&amp;nbsp;» sur au moins une&amp;nbsp;; généralement plusieurs de ces questions.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Ce mode de pensée contre-productif résulte de l’absence de réponse à la question clef :&amp;nbsp;&lt;b&gt;Qui est ma cible&amp;nbsp;?&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Vous allez me répondre : «&amp;nbsp;je sais qui est ma cible&amp;nbsp;», probablement ! Mais le savez-vous vraiment&amp;nbsp;? Plus important, comprenez-vous bien le sous-jacent de cette question&amp;nbsp;?&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Imaginons…&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Aujourd’hui vous proposez une offre de coaching commercial, qui est votre cible&amp;nbsp;?&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Les start-ups&amp;nbsp;? Les commerciaux&amp;nbsp;? Ceux qui cherchent à se perfectionner&amp;nbsp;? Ceux qui n’ont aucune notion commerciale&amp;nbsp;? Ceux à la recherche de formation groupée&amp;nbsp;? Ceux à la recherche de formation personnalisée&amp;nbsp;? Ou les très nombreuses autres réponses possibles et toutes potentiellement bonnes.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;La question de la cible si elle est bien abordée vous permet de répondre à toutes les questions importantes sur l’offre que vous proposez&amp;nbsp;:&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;1/ Qui est ma cible précise&lt;/b&gt;&amp;nbsp;(je fais du coaching personnalisé pour startup avec peu d’XP commerciale).&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;2/ Où trouver cette cible précise&lt;/b&gt;&amp;nbsp;(LinkedIn, incubateur, programme d’accompagnement… etc).&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;3/ A quelles problématiques précises de cette cible je réponds&lt;/b&gt;&amp;nbsp;(besoin d’automatisation, copywriting, closing, créer un argumentaire commercial… etc).&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;4/ Quelle valeur-ajoutée je créé pour cette cible précise&lt;/b&gt;&amp;nbsp;(gain de temps, gain d’argent, gain de confiance, road map commerciale précise… etc).&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;5/ Quels sont mes concurrents sur cette cible précise&lt;/b&gt;&amp;nbsp;(compréhension du marché, compréhension de l’offre de marché existante, définis mon pricing, mes points-forts, mon potentiel de business).&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Et finalement TOUS LES ÉLÉMENTS nécessaires à la construction d’un argumentaire commercial.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pour vous aider dans cette analyse, appuyez vous sur la célèbre «&amp;nbsp;Carte de l’empathie&amp;nbsp;»&lt;/p&gt;&lt;figure id=&quot;attachment_621&quot; aria-describedby=&quot;caption-attachment-621&quot; class=&quot;wp-caption aligncenter&quot; style=&quot;margin-right: auto; margin-bottom: 1.5em; margin-left: auto; clear: both; max-width: 100%; width: 800px;&quot;&gt;&lt;a href=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/empathie-map-1.jpg&quot; style=&quot;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-621 size-full&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/empathie-map-1.jpg&quot; alt=&quot;&quot; width=&quot;800&quot; height=&quot;517&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 766.75px; margin: 20px auto;&quot;&gt;&lt;/a&gt;&lt;figcaption id=&quot;caption-attachment-621&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&lt;b&gt;//////////////////////////&amp;nbsp; &amp;nbsp;Points importants&amp;nbsp; &amp;nbsp; /////////////////////////&lt;/b&gt;&lt;/span&gt;&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;1/ Plus vous entrez dans le détail, mieux c’est.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;2/ Vous n’êtes pas obligé d’avoir des réponses pour chacune des questions.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;3/ C’est un travail continu et non “one-shot”.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Pour comprendre réellement ce qui se passe dans la tête de votre cible, le meilleur moyen reste d’échanger directement avec vos clients potentiels. Vous ne saurez pas ce qu’ils veulent (ou ne veulent pas) tant que vous ne les aurez pas interviewés. Vous constaterez que votre discours commercial se construira naturellement.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Essayez de vous entretenir avec une diversité de clients potentiels, dans des secteurs d’activité différents. L’exercice fera naturellement apparaître votre cible précise et comment s’adresser à elle.&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;N’oubliez jamais : « Ce que l’on conçoit bien s’énonce clairement, et les mots pour le dire arrivent aisément » Nicolas Boileau.&lt;/p&gt;&lt;/blockquote&gt;&lt;/h4&gt;\r\n                          ', '', '2021-07-24 12:29:58', '874470780.jpg', 'texte', 23, NULL),
(91, 'LA PROSPECTION EN TEMPS DE CRISE, SE PRÉPARER POUR REBONDIR À LA REPRISE !', '&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;font color=&quot;#4c4c4c&quot; face=&quot;Open Sans, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 16px; background-color: rgb(245, 245, 245); border-style: initial; border-color: initial; border-image: initial; height: auto; width: 726.75px;&quot;&gt;&lt;b&gt;&lt;img loading=&quot;lazy&quot; class=&quot;size-large wp-image-608 aligncenter&quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/prospection_commerciale_alliance_connexion-1100x550-1024x512.png&quot; alt=&quot;&quot; width=&quot;640&quot; height=&quot;320&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; clear: both; margin: 20px 0px; width: 726.75px;&quot;&gt;&lt;/b&gt;&lt;/span&gt;&lt;/font&gt;Romain Hévin, coach en business development, aide les entreprises à améliorer leur processus commercial. Découvrez ses conseils pour améliorer votre impact commercial et rebondir après la crise !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;La prospection commerciale est un élément clé dans la stratégie commerciale d’une entreprise, d’une startup! Elle permet d’évangéliser le marché, d’avoir de nouvelles références, de générer du CA, de tester son pitch commercial mais aussi d’en apprendre plus sur la concurrence. En temps de crise ou de période d’activité&amp;nbsp; j’ai souvent remarqué qu’il y’avait deux écoles :&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;1. Ceux qui prospectaient pendant la crise&lt;/b&gt;&lt;br&gt;&lt;b&gt;2. Ceux qui préparaient la prospection et la reprise&lt;/b&gt;&lt;/p&gt;&lt;figure id=&quot;attachment_613&quot; aria-describedby=&quot;caption-attachment-613&quot; class=&quot;wp-caption alignright&quot; style=&quot;display: inline; margin-bottom: 1.5em; margin-left: 1.5em; float: right; max-width: 100%; width: 256px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-613 &quot; src=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/04/engagement_illustration.png&quot; alt=&quot;&quot; width=&quot;256&quot; height=&quot;256&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 256px; margin: 20px auto;&quot;&gt;&lt;figcaption id=&quot;caption-attachment-613&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Je suis plutôt de la deuxième école. Pourquoi ? Vous devez tout d’abord échanger, rassurer, aider vos clients! Ce qui peut vous demander déjà pas mal de temps et d’investissement ! La prospection en tant de crise peut être mal vue, mal perçue, mal comprise.&amp;nbsp; Alors si vous souhaitez quand même prospecter je vous conseille d’aller piocher dans les comptes que vous nurterez actuellement et d’avoir une approche ultra personnalisée (Customer Centric Selling). C’est probablement le moment de réactiver des prospects sur lesquels vous n’avez pas eu de réponse où avec qui vous n’avez pas beaucoup échangé.&lt;br&gt;De mon point de vue : oubliez la prospection à froid !&lt;/p&gt;&lt;blockquote style=&quot;margin-bottom: 10px; border-left: 5px solid rgb(247, 79, 52); padding: 10px 20px; quotes: &amp;quot;&amp;quot; &amp;quot;&amp;quot;; line-height: 22px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Appliquez plutôt ce doux adage: “L’art d’être tantôt très audacieux et tantôt très prudent est l’art de réussir.”&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Je vous propose dans ce temps de crise (de pause) une To-Do-List pour améliorer votre impact commercial :&lt;/p&gt;&lt;ul style=&quot;margin-bottom: 40px; padding-left: 40px; list-style: none; text-align: justify;&quot;&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Vérifiez que vous avez le bon ICP et le bon Buyer Persona. Et priorisez vos cibles (choisissez par exemple un ou deux secteurs où vous allez lancer une séquence de prospection dynamique et ciblée dès la reprise ou un peu en amont)&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Construisez des Use Cases par secteur d’activité sur vos clients existants (Ils auront probablement plus de temps pour vous aider en répondant à une «&amp;nbsp;interview&amp;nbsp;» par exemple). Cela vous donnera d’excellents verbatims !&amp;nbsp;&lt;b&gt;Votre client : c’est votre Ambassadeur auprès de vos futurs prospects !&lt;/b&gt;&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Travaillez votre pitch téléphonique en faisant des simulations avec vos équipes. Retravaillez l’accroche ou l’effet wahou par exemple. Cela permet de garder le fighting spirit et surtout consolide le «&amp;nbsp;TeamSpirit&amp;nbsp;» au sein de l’équipe!&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Requalifiez, priorisez et triez votre pipeline dans votre CRM. Vérifiez vos BestCases avec vos clients et sécurisez vos Commit ! Ne passez pas à côté d’une affaire ! Chaque affaires est précieuses !&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Travaillez sur vos propositions commerciales et leurs formats.&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Travaillez votre profil Linkedin pour qu’il ait plus d’impact et n’hésitez pas à publier du contenu sur votre entreprise une fois par semaine.&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Je pense qu’en ces temps difficiles, vous devez améliorer votre approche commerciale en général mais aussi booster votre équipe !&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Optimisez, retravaillez, testez et soyez patients, la reprise va arriver bien plus vite que prévue et comme je le répète souvent à mes clients : «&amp;nbsp;95 pour cent de préparation POUR 5 pour cent d’action !&amp;nbsp;»&lt;br&gt;Je finirais également sur une formule d’Aimé Jacquet en 1998 «&amp;nbsp;&amp;nbsp;Muscle ton jeu Robert , si tu muscles pas ton jeu, fais attention, je t’assure, tu vas voir, tu vas avoir des déconvenues parce que t’es trop gentil.&amp;nbsp;»&lt;/p&gt;&lt;/h4&gt;\r\n                          ', '', '2021-07-24 12:31:47', '4762193.png', 'texte', 24, NULL),
(92, 'LA COMMUNICATION DE CRISE', '&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Gérez la crise, ne la subissez pas&amp;nbsp;!&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;«&amp;nbsp;Les crises se suivent et ne se ressemblent pas. Elles sont pourtant toutes surmontables&amp;nbsp;»&amp;nbsp;affirme SILNICKI, expert en communication de crise. En cette période de crise inconnue et inédite, il est primordial de communiquer afin d’entretenir le contact avec sa communauté. Le confinement fait des réseaux sociaux un élément central de l’information et de l’échange. Mais quels messages doit-on transmettre lorsque l’on est entrepreneur&amp;nbsp;?&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Vous traversez une crise si la&lt;b&gt;&amp;nbsp;&lt;/b&gt;situation menace les intérêts stratégiques de votre business. Plus vos intérêts vitaux sont menacés, plus la crise est grave.&amp;nbsp;Pour sortir de cette situation instable, il vous faut adopter une gouvernance&amp;nbsp;spécifique pour laquelle une communication de situation de crise pertinente est essentielle.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;a href=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/03/com-de-crise-1.jpg&quot; style=&quot;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone wp-image-600 size-full&quot; title=&quot;communication-crise&quot; src=&quot;https://wp.ionis-group.com/ionis361/wp-content/uploads/sites/12/2020/03/com-de-crise-1.jpg&quot; alt=&quot;communication&quot; width=&quot;776&quot; height=&quot;272&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: inline-block; width: 726.75px; margin: 20px 0px;&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;/h4&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;– Les indispensables –&lt;/h2&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;1/ Ne vous précipitez pas !&lt;/b&gt;&amp;nbsp;Analysez la situation et observez la façon dont elle est gérée chez vos semblables et vos concurrents.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;2/ Mesurez l’impact de la crise sur votre marché.&lt;/b&gt;&amp;nbsp;Quelle sera la durée de ses effets, dans combien de temps vont-ils heurter l’entreprise ? A quel point sont-ils préjudiciables ?&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;3/ Mettez en place un plan de communication de crise concret&lt;/b&gt;&amp;nbsp;: établissez un discours cohérent et mettez en œuvre des actions pertinentes, en créant des contenus adaptés au message que vous avez choisi de défendre. Votre communication de crise doit respecter deux règles :&lt;/p&gt;&lt;ul style=&quot;margin-bottom: 40px; padding-left: 40px; list-style: none;&quot;&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Montrer la volonté de votre entreprise à résoudre les problèmes qu’elle rencontre.&lt;/li&gt;&lt;li style=&quot;line-height: 24px; padding-bottom: 5px;&quot;&gt;Répondre aux problématiques spécifiques qui sont nées de cette crise, qui sont propres à chaque start-up&lt;/li&gt;&lt;/ul&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;4/ Rapprochez-vous de votre communauté&lt;/b&gt;. Tant que le message est pertinent, il soudera vos liens avec celle-ci. Annoncez sincèrement votre empathie. Par exemple, rappelez que le bien-être de la population est la priorité malgré les difficultés que vous rencontrez.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;5/ Choisissez minutieusement vos canaux de diffusion&lt;/b&gt;&amp;nbsp;en fonction pour partager un message pertinent et atteindre votre audience.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;6/ Proposez des outils de réponse basés sur des faits concrets :&lt;/b&gt;&amp;nbsp;par exemple, faites-en sorte que vos missions encore réalisables en temps de crise continuent d’être assurées.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;7/ Communiquez auprès de TOUT le monde :&lt;/b&gt;&amp;nbsp;clients, collaborateurs, investisseurs, partenaires, fournisseurs, prestataires, pairs, etc.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;8/ Soyez transparents&lt;/b&gt;&amp;nbsp;dans votre communication interne comme externe, et acceptez de reconnaître que votre entreprise soit en difficulté. Surtout, n’entrez pas dans une démarche de déni.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&lt;b&gt;9/ Entretenez cette stratégie de communication même une fois la crise passée&lt;/b&gt;, pour assurer la reconstruction et le maintien de votre business.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;/h4&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;– Les erreurs à éviter –&lt;/h2&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;figure id=&quot;attachment_604&quot; aria-describedby=&quot;caption-attachment-604&quot; class=&quot;wp-caption alignleft&quot; style=&quot;display: inline; margin-right: 1.5em; margin-bottom: 1.5em; float: left; max-width: 100%; width: 198px;&quot;&gt;&lt;a href=&quot;https://wp-ionis-group.ecole-ingenierie.org/ionis361/wp-content/uploads/sites/12/2020/03/Diapositive1.jpg&quot; style=&quot;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;wp-image-604 size-medium&quot; src=&quot;https://wp.ionis-group.com/ionis361/wp-content/uploads/sites/12/2020/03/Diapositive1-198x300.jpg&quot; alt=&quot;communiquer en temps de crise&quot; width=&quot;198&quot; height=&quot;300&quot; style=&quot;border: 0px; height: auto; max-width: 100%; display: block; width: 198px; margin: 20px auto;&quot;&gt;&lt;/a&gt;&lt;figcaption id=&quot;caption-attachment-604&quot; class=&quot;wp-caption-text&quot; style=&quot;margin: 0.8075em 0px;&quot;&gt;–&lt;/figcaption&gt;&lt;/figure&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;1/ Réagir trop tard&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;2/ Ne pas communiquer&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;3/ Accuser la situation plutôt que la résoudre&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;4/ Négliger la communication avec vos collaborateurs&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;5/ Attendre que la crise passe sans agir&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;6/ Instrumentaliser la crise&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;/h4&gt;&lt;h2 style=&quot;margin-top: 30px; margin-bottom: 30px; line-height: 36px; clear: both; margin-right: 40px;&quot;&gt;– En Bref –&lt;/h2&gt;&lt;h4 style=&quot;margin-bottom: 10px; line-height: 24px; clear: both; margin-top: 10px;&quot;&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Dans un contexte de communication de crise, la difficulté réside dans le fait que les informations doivent être diffusées rapidement alors que vous ne disposez que de très peu de données disponibles.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Il&amp;nbsp;vous faut trouver l’équilibre&amp;nbsp;: ne pas communiquer trop vite, ni trop tard, mais donner des réponses aux inquiétudes de vos clients, partenaires, investisseurs…&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Il ne faut surtout pas négliger la communication d’après-crise&amp;nbsp;: il est important d’évaluer la manière dont vous l’avez gérée.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 30px; line-height: 28px; margin-right: 40px;&quot;&gt;Vous pouvez clore symboliquement la crise en communiquant en rétrospective sur son impact sur votre business, la façon dont vous êtes parvenu à la surmonter ou sur l’avenir qui s’annonce, qu’il soit prometteur ou compliqué.&lt;/p&gt;&lt;/h4&gt;\r\n                          ', '', '2021-07-24 12:34:50', '107085667.jpg', 'texte', 23, NULL);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`, `code`) VALUES
(93, 'A la découverte de l’incubateur « Un Jour Nouveau » de Goma', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;L’incubateur&amp;nbsp; «&amp;nbsp;Un Jour Nouveau&amp;nbsp;» est une pépinière des projets innovants et une source d’impact social à l’Est de la République Démocratique du Congo. Situé à Goma, le Hub UJN accompagne les entrepreneurs dans le développement de leurs projets et propose un espace de travail. Il propose également, au delà du coaching, un espace de coworking très confortable.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;Dans un entretien avec le média en ligne Congo Sauti,&amp;nbsp; Bernard Malaba Tshienda, Hub Manager de l’incubateur Un Jour Nouveau et Directeur Général Délégué de la Holding UJN a répondu aux questions, passant en revue les objectifs et les missions de cet incubateur.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7986&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/2.jpg&quot; alt=&quot;&quot; width=&quot;1024&quot; height=&quot;683&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/2.jpg 1024w, http://unjournouveau.org/wp-content/uploads/2021/06/2-300x200.jpg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/2-768x512.jpg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/2-800x534.jpg 800w&quot; sizes=&quot;(max-width: 1024px) 100vw, 1024px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;Congo Sauti (C.S) : Monsieur Bernard Malaba Tshienda bonjour, vous êtes le Hub Manager de l’incubateur Un jour nouveau, dites-nous depuis quand existe ce Hub et quelle a été la motivation première de mettre en place cet espace pour les entrepreneurs, d’où est venue l’idée ?&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM: “&lt;a href=&quot;https://congosauti.com/2021/06/21/rdc-a-la-decouverte-de-lincubateur-un-jour-nouveau-de-goma/&quot; style=&quot;color: rgb(253, 184, 19); outline: 0px;&quot;&gt;Les visionnaires d’ Un Jour Nouveau&lt;/a&gt;&amp;nbsp;ont eu l’idée de créer un incubateur suite aux demandes répétées des bénéficiaires de nos nombreux programmes qui s’articulent autour de nos trois piliers :&amp;nbsp;&lt;strong style=&quot;font-weight: bold;&quot;&gt;Genre et Protection, Education et Entrepreneuriat&lt;/strong&gt;&amp;nbsp;&lt;strong style=&quot;font-weight: bold;&quot;&gt;Social.&amp;nbsp;&lt;/strong&gt;&amp;nbsp;Ils souhaitaient trouver un prolongement aux curriculums qui leur étaient proposés, tous basés sur le Leadership transformationnel et la masculinité positive. L’entrepreneuriat est l’une des solutions concrètes au chômage des jeunes et des femmes, mais aussi des hommes qui n’ont que le désirs de pouvoir s’occuper de leurs familles. Les jeunes qui fréquentent le Centre Scolaire UJN sont également exposés à l’entrepreneuriat et des idées innovantes germent déjà chez certains d’entre eux !L’autre opportunité qui a justifié la mise en place de l’incubateur est notre partenariat avec l’organisation ECI ( Eastern Congo Initiative de la star de cinéma américaine Ben Affleck). Il&amp;nbsp; nous confie depuis 3 ans&amp;nbsp; la responsabilité d’identifier, sélectionner, former et encadrer chaque année une trentaine de jeunes de la ville de Goma pour leur permettre de lutter contre le chômage des populations vulnérables (jeunes et femmes)”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7987&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/3.jpg&quot; alt=&quot;&quot; width=&quot;1024&quot; height=&quot;683&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/3.jpg 1024w, http://unjournouveau.org/wp-content/uploads/2021/06/3-300x200.jpg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/3-768x512.jpg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/3-800x534.jpg 800w&quot; sizes=&quot;(max-width: 1024px) 100vw, 1024px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;C.S : Depuis la création de ce Hub, au moins combien de jeunes sont passés par ici et comment ça se passe avec les jeunes porteurs d’idée de création d’entreprise surtout?&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM : “A ce jour plusieurs entrepreneurs sont passés par nos différents programmes et actuellement 43 sont&amp;nbsp; dans notre incubateur, soit dans les espaces de coworking ou soit dans des bureaux dédiés. C’est à eux qu’il faudrait demander comment ça se passe mais de notre côté nous sommes extrêmement satisfaits de l’enthousiasme avec lequel ces jeunes ont rallié notre projet de Hub”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7988&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/4.jpeg&quot; alt=&quot;&quot; width=&quot;1024&quot; height=&quot;683&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/4.jpeg 1024w, http://unjournouveau.org/wp-content/uploads/2021/06/4-300x200.jpeg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/4-768x512.jpeg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/4-800x534.jpeg 800w&quot; sizes=&quot;(max-width: 1024px) 100vw, 1024px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS: Et l’incubation, comment ça se fait ici ?&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM : “Nous proposons un espace de travail stimulant avec une connexion internet de qualité ( même si nous devons&amp;nbsp; probablement rajouter des mégas devant le nombre croissant de startups !), des formations de haut niveau pour le renforcement des capacités de ces chefs d’entreprise en herbe, des séances de coaching personnalisées et les contacts avec les acteurs principaux de l’écosystème entrepreneurial du Nord Kivu ( réseautage). Nous avons reçu des ministres nationaux, de Conseiller Spécial du Président en charge du Numérique, le président de RAN ( Réseau des Acteurs du Numérique), la cellule de coordination du programme PADMPME avec à sa tête le Coordonnateur National, le Directeur Provincial du FPI, le DG de l’ANAPI et tant d’autres personnalités venues inspirer nos porteurs de projet”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7989&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/5.jpg&quot; alt=&quot;&quot; width=&quot;960&quot; height=&quot;720&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/5.jpg 960w, http://unjournouveau.org/wp-content/uploads/2021/06/5-300x225.jpg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/5-768x576.jpg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/5-800x600.jpg 800w&quot; sizes=&quot;(max-width: 960px) 100vw, 960px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS : Parlez-vous de vos succès&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM: “Plutôt que de vous&amp;nbsp; parler de « succès » je vous partage ma satisfaction d’avoir pu mettre en place un espace dans lequel nos jeunes se sentent bien et apprennent dans de bonnes conditions. Les voir régulièrement dans les espaces de réunion entrain de tirer des plans sur la comète me remplit de bonheur car je me dis qu’un avenir est possible pour eux… Mais plus simplement, voir les projets évolués, les chiffres d’affaires augmentés, assister à la création d’emplois, nous fait penser que nous avançons dans la bonne direction”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7990&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/6.jpg&quot; alt=&quot;&quot; width=&quot;1024&quot; height=&quot;683&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/6.jpg 1024w, http://unjournouveau.org/wp-content/uploads/2021/06/6-300x200.jpg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/6-768x512.jpg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/6-800x534.jpg 800w&quot; sizes=&quot;(max-width: 1024px) 100vw, 1024px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS : Quelles sont les difficultés que vous rencontrez,&amp;nbsp; surtout que vous êtes un jeune Hub ?&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM : “Le business model d’un incubateur exige dans les deux premières années de bien contrôler les coûts de fonctionnement sous peine de rentrer dans le mur. La conséquence est que nous avons une petite équipe et nous travaillons tous beaucoup… mais il est essentiel que nous ayons le contrôle, nous nous reposerons plus tard ! Et puis je dois avouer&amp;nbsp; qu’il n’est pas toujours aisé de travailler avec des entrepreneurs, ils ont parfois l’impression qu’on s’ingère un peu trop dans leurs activités et qu’ils ne sont pas totalement libres. Nous essayons de les convaincre que c’est précisément cette « redevabilité » qui les fera avancer. C’est tout un débat j’en conviens”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS: quelles sont vos projections d’ici 5 ans ?&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM : “Nous sommes en train de viser un autre bâtiment car nous sommes à l’étroit présentement, nous allons également lancer une académie pour former nos jeunes aux nouveaux métiers du numérique avec la possibilité d’obtenir rapidement un emploi ou la possibilité de créer leurs entreprises innovantes après la formation d’une année. Puis nous allons dupliquer notre modèle dans d’autres villes du Grand Kivu, la première étape étant la ville de Beni où UJN est déjà présent à travers ses programmes humanitaires qui&amp;nbsp; méritent qu’on se penche sur l’émergence économique avec tous les acteurs concernés.&amp;nbsp; J’ai eu l’occasion d’y séjourner au mois de mars dernier et j’ ai rencontré beaucoup d’entrepreneurs motivés ! C’est l’une des grandes priorités du couple NTOTO, nos visionnaires”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;img loading=&quot;lazy&quot; class=&quot;alignnone size-full wp-image-7991&quot; src=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/7.jpg&quot; alt=&quot;&quot; width=&quot;1024&quot; height=&quot;768&quot; srcset=&quot;http://unjournouveau.org/wp-content/uploads/2021/06/7.jpg 1024w, http://unjournouveau.org/wp-content/uploads/2021/06/7-300x225.jpg 300w, http://unjournouveau.org/wp-content/uploads/2021/06/7-768x576.jpg 768w, http://unjournouveau.org/wp-content/uploads/2021/06/7-800x600.jpg 800w&quot; sizes=&quot;(max-width: 1024px) 100vw, 1024px&quot; style=&quot;border: 0px; margin: 5px 20px 0px 0px; max-width: 100%; height: auto;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS : Quelles sont les conditions pour intégrer le réseau de l’incubateur “Un Jour Nouveau”?&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;BM : “Avoir d’abord un projet entrepreneurial que nous allons faire passer par plusieurs filtres pour savoir s’l est rentable et viable avant de tester son business model et rédiger un plan d’affaires en bonne&amp;nbsp; forme. Viendront ensuite l’incubation et l’accélération une fois que le projet est capable de générer une traction intéressante, gage du potentiel du projet”.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;strong style=&quot;font-weight: bold;&quot;&gt;CS : Monsieur Bernard Malaba Tshienda, nous vous remercions.&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 1.8; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;&quot;&gt;&lt;em&gt;Les propos recueillis par Jonas Kalonda, publié le 21 Juin 2021 sur&amp;nbsp;&lt;a href=&quot;https://congosauti.com/2021/06/21/rdc-a-la-decouverte-de-lincubateur-un-jour-nouveau-de-goma/&quot; style=&quot;color: rgb(253, 184, 19); outline: 0px;&quot;&gt;Congo Sauti.&lt;/a&gt;&amp;nbsp;&lt;/em&gt;&lt;/p&gt;\r\n                          ', '', '2021-09-20 17:00:24', '983947676.jpg', 'texte', 23, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `idc` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`idc`, `image`, `description`, `created_at`) VALUES
(1, '1003725166.png', 'Nous amenons les entreprises à aller au-delà de leurs limites', '2021-07-08 15:29:45'),
(2, '1971651013.png', 'Nous boostons les entreprises', '2021-07-08 15:30:59'),
(4, '1977063246.png', 'Nous sommes acteurs dans l\'innovation', '2021-07-08 16:02:27');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES
(23, 'Publications', '2021-07-24 11:17:28'),
(24, 'Nouvelles ', '2021-07-24 11:17:43');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcomment` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etape1` text,
  `etape2` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcomment`, `idart`, `etape1`, `etape2`, `created_at`) VALUES
(19, 92, '<div class=\"fb-comments\" data-href=\"https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771\" data-width=\"\" data-numposts=\"5\"></div>', '<div class=\"fb-comments\" data-href=\"https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771\" data-width=\"\" data-numposts=\"5\"></div>', '2021-07-24 13:43:47'),
(20, 89, '<div id=\"fb-root\"></div>\r\n<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v11.0&appId=301499887887474&autoLogAppEvents=1\" nonce=\"qRn3KIJD\"></script>', '<div class=\"fb-comments\" data-href=\"https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771\" data-width=\"\" data-numposts=\"5\"></div>', '2021-07-24 13:44:46'),
(21, 93, '<div id=\"fb-root\"></div>\r\n<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0&appId=301499887887474&autoLogAppEvents=1\" nonce=\"9oTe1oLa\"></script>', '<div class=\"fb-comments\" data-href=\"https://web.facebook.com/HUBunjournouveau/photos/pcb.374423491025273/374423264358629\" data-width=\"\" data-numposts=\"5\"></div>', '2021-09-21 11:46:23');

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
  `commentaire` text,
  `id_user` int(11) DEFAULT NULL,
  `codeP` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
-- Structure de la table `conference`
--

CREATE TABLE `conference` (
  `idconference` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `date_debit` date DEFAULT NULL,
  `heure_debit` time DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conference`
--

INSERT INTO `conference` (`idconference`, `nom`, `date_debit`, `heure_debit`, `date_fin`, `heure_fin`, `created_at`, `id_user`) VALUES
(1, 'formation entrepreneuriat niveau 1', '2021-09-14', '13:19:00', '2021-09-14', '14:20:00', '2021-09-14 13:18:55', 7),
(2, 'formation entrepreneuriat niveau 2', '2021-09-14', '13:19:00', '2021-09-14', '14:20:00', '2021-09-14 13:19:16', 7),
(6, 'conférence de l\'agent', '2021-09-15', '14:19:00', '2021-09-15', '15:20:00', '2021-09-14 13:20:00', 7),
(8, 'Hackathon sur la programmation web avancé ', '2021-09-15', '16:10:00', '2021-09-15', '17:20:00', '2021-09-15 10:05:29', 7),
(9, 'Communication et pitch', '2021-09-15', '12:20:00', '2021-09-15', '13:20:00', '2021-09-15 11:15:43', 14),
(10, 'Health-malamu : chef de projet sante ', '2021-09-15', '11:23:00', '2021-09-16', '12:23:00', '2021-09-15 11:23:27', 14),
(11, 'Communication et pitch', '2021-09-20', '15:17:00', '2021-09-20', '16:17:00', '2021-09-20 15:17:56', 7);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `sujet` varchar(700) DEFAULT NULL,
  `message` text,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES
(10, 'sifa abeli', 'mikah@gmail.com', 'j\'aimerai savoir les informations sur...', 'coucou', NULL, '2021-05-15 20:20:04'),
(17, 'Dream of drc', 'info.devtech@gmail.com', 'j\'aimerai savoir les informations sur...', '<p>Bonjour les boss!</p>', NULL, '2021-07-18 13:16:54'),
(19, 'Dream of drc', 'info.devtech@gmail.com', 'j\'aimerai savoir les informations sur...', 'bonjour ', NULL, '2021-08-21 11:05:01'),
(21, 'kasumba kipindula bertin', 'info.devtech@gmail.com', 'j\'aimerai savoir les informations sur...', 'cool', '2125552943.txt', '2021-08-21 11:18:38'),
(22, 'Dream of drc', 'info.devtech@gmail.com', 'demande d\'information', 'cool', NULL, '2021-08-21 11:28:28');

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `iddepense` int(11) NOT NULL,
  `type` varchar(300) DEFAULT NULL,
  `nomPer` varchar(300) DEFAULT NULL,
  `libelle` text,
  `motif` text,
  `jour` date DEFAULT NULL,
  `montant_lettre` varchar(300) DEFAULT NULL,
  `montant_nombre` int(11) DEFAULT NULL,
  `mois` varchar(300) DEFAULT NULL,
  `annee` varchar(300) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `etat_validation` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `depense`
--

INSERT INTO `depense` (`iddepense`, `type`, `nomPer`, `libelle`, `motif`, `jour`, `montant_lettre`, `montant_nombre`, `mois`, `annee`, `id_user`, `etat_validation`, `created_at`) VALUES
(1, 'entree', 'prince mangala', 'libellé acquisition', 'acquisition de frais', '2021-08-10', 'Vinght dollars', 20, 'August', '2021', 22, 1, '2021-08-10 14:18:00'),
(2, 'entree', 'Grace kilumbu PATRICK', 'libellé 1', 'motif 1', '2021-08-10', 'Quarante-cinq dollars', 45, 'August', '2021', 22, 1, '2021-08-10 14:26:38'),
(3, 'entree', 'prince mangala', 'Cool', 'ok', '2021-08-11', 'Vinght-cinq dollars', 122, 'August', '2021', 22, 1, '2021-08-11 17:49:40'),
(5, 'sortie', 'Grace kilumbu', 'cool', 'cool', '2021-08-11', 'Vinght-cinq dollars', 5, 'January', '2022', 23, 0, '2021-08-11 17:56:00'),
(7, 'entree', 'kimbwanga mputu leonard', 'cool', 'cool', '2021-08-11', 'Cinq dollard', 5, 'August', '2021', 23, 1, '2021-08-11 18:20:59'),
(8, 'entree', 'patrick ponyo', 'Entré', 'Evaluation entré', '2021-08-13', 'septante dollars', 70, 'August', '2021', 22, 1, '2021-08-13 00:57:29'),
(9, 'sortie', 'Grace kilumbu', 'sortie', 'sortie', '2021-08-13', 'Vint dollars', 20, 'August', '2021', 22, 1, '2021-08-13 01:40:44'),
(10, 'sortie', 'Grace kilumbu', 'gdgdfgdfgdgd', 'fggdgdfgdf', '2021-08-20', 'Vinght-cinq dollars', 20, 'August', '2021', 22, 1, '2021-08-20 16:49:34');

-- --------------------------------------------------------

--
-- Structure de la table `edition`
--

CREATE TABLE `edition` (
  `idedition` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `edition`
--

INSERT INTO `edition` (`idedition`, `nom`, `created_at`) VALUES
(5, 'Edition 2020-2021', '2021-11-14 21:54:24'),
(6, 'Edition 2021-2022', '2021-11-14 21:54:36');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `identrep` int(11) NOT NULL,
  `ceo` int(11) DEFAULT NULL,
  `nom` varchar(700) DEFAULT NULL,
  `description` text,
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
(28, 9, 'Neotec', '	        			        			        		le marketing c\'est nous!&nbsp;', 1, 19, 19, 5, 'gouvernementale', '50-100', 'http://whitefondation.org/', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '2136527444.png');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idformation` int(11) NOT NULL,
  `idedition` int(11) DEFAULT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idformation`, `idedition`, `nom`, `description`, `image`, `created_at`) VALUES
(2, 5, 'Communication et pitch', 'C\'est une formation de communication...', '1856049239.png', '2021-11-14 22:37:22'),
(4, 5, 'Hackathon sur la programmation web avancé ', 'C\'est une formation de', '1665301844.png', '2021-11-14 23:03:19'),
(5, 6, 'video', 'c\'est une formation', '539974420.jpg', '2021-11-14 23:03:53');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `idf` int(11) NOT NULL,
  `nom` text,
  `date_debit` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `fin_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`idf`, `nom`, `date_debit`, `date_fin`, `image`, `description`, `created_at`, `fin_inscription`) VALUES
(7, 'pie tshibanda', '2021-07-27', '2021-09-27', '260927238.png', '&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          ', '2021-07-27 14:15:46', '2021-08-27'),
(8, 'OK Health-malamu : chef de projet sante ', '2021-07-27', '2021-08-27', '1028267778.png', '	                  ok', '2021-07-27 14:19:39', '2021-07-30'),
(10, 'video', '2021-07-27', '2021-10-27', '1945871878.PNG', '	                  Bonjour les gards\r\n	              ', '2021-07-27 14:23:29', '2021-09-27'),
(11, 'programmation fonctionnel pro-moderne', '2021-07-27', '2021-09-27', '594779713.webp', '&lt;div style=&quot;text-align: center; &quot;&gt;&lt;b&gt;venez-y nombreux apprendre le code...&lt;/b&gt;&lt;/div&gt;&lt;div&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          ', '2021-07-27 14:28:11', '2021-08-27');

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
-- Structure de la table `galery2`
--

CREATE TABLE `galery2` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galery2`
--

INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES
(29, '1551686677.png', '2021-09-13 08:28:15', NULL),
(34, '1751425939.jpg', '2021-09-16 14:14:42', 'https://amanifestival.com/fr/'),
(35, '1270875512.jpg', '2021-09-16 14:14:43', 'https://www.bizcongo.com/rubrique-entreprise/orange-rdc'),
(36, '527814649.png', '2021-09-16 14:14:43', 'https://www1.undp.org/content/undp/fr/home.html'),
(37, '645797706.jpg', '2021-09-16 14:23:10', 'https://ulpgl.net/'),
(38, '1956310950.jpg', '2021-11-02 11:18:38', 'http://www.smico.net/');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idgroupe` int(11) NOT NULL,
  `code_groupe` varchar(300) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `message` text,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`idgroupe`, `code_groupe`, `id_user`, `message`, `fichier`, `created_at`) VALUES
(5, 'f777212d86', 9, NULL, NULL, '2021-06-22 06:04:30'),
(6, 'f777212d86', 14, NULL, NULL, '2021-06-22 06:04:31'),
(9, 'e922db8817', 9, NULL, NULL, '2021-06-22 09:22:38'),
(10, 'e922db8817', 14, NULL, NULL, '2021-06-22 09:22:38'),
(11, 'f777212d86', 12, '<p>salut!</p>', NULL, '2021-06-22 09:44:16'),
(12, 'f777212d86', 7, '<p>ça va?</p>', '646284706.png', '2021-06-22 09:51:47'),
(13, 'f777212d86', 11, '<p>oui boss!</p>', NULL, '2021-06-22 09:52:04'),
(14, 'f777212d86', 9, '<p><b>ok les gars! </b>ce bon</p>', NULL, '2021-06-22 09:53:29'),
(15, 'f777212d86', 15, 'ok', NULL, '2021-06-22 10:01:31'),
(16, 'f777212d86', 20, NULL, NULL, '2021-06-22 10:01:50'),
(18, 'f777212d86', 9, 'bonjour uku', NULL, '2021-06-22 10:01:50'),
(19, 'f777212d86', 20, '	                  	                  &lt;p&gt;ce bon les boss!&lt;/p&gt;\r\n	              \r\n	              ', NULL, '2021-06-22 10:09:45'),
(20, 'e22ddfeca0', 12, NULL, NULL, '2021-06-24 11:54:57'),
(24, 'e22ddfeca0', 9, NULL, NULL, '2021-06-24 11:57:04'),
(25, 'e22ddfeca0', 14, NULL, NULL, '2021-06-24 11:57:04'),
(27, 'e22ddfeca0', 13, '                                        salut ni sawa?', NULL, '2021-06-24 11:57:20'),
(30, 'f777212d86', 12, '<p>bonjour!</p>', '602018545.jpg', '2021-06-25 08:20:58'),
(31, 'e22ddfeca0', 7, NULL, NULL, '2021-06-25 08:25:19'),
(33, 'e22ddfeca0', 9, NULL, NULL, '2021-06-25 18:49:37'),
(34, '4274c76f6c', 9, NULL, NULL, '2021-07-16 14:59:09'),
(35, '4274c76f6c', 14, NULL, NULL, '2021-07-16 14:59:09'),
(36, '4274c76f6c', 15, NULL, NULL, '2021-07-16 14:59:09'),
(38, '4274c76f6c', 7, '	                  &lt;p&gt;bonjour le monde!&lt;/p&gt;\r\n	              ', NULL, '2021-07-16 15:00:30'),
(40, 'f777212d86', 9, NULL, NULL, '2021-08-04 23:15:33'),
(41, 'f777212d86', 7, '<p>Bonsoir</p>', NULL, '2021-08-04 23:17:12'),
(42, 'f777212d86', 22, NULL, NULL, '2021-08-07 12:02:21'),
(45, 'f777212d86', 7, '<p>Bonjour ici!</p>', NULL, '2021-08-07 13:11:57'),
(46, 'f777212d86', 22, '                    &lt;p&gt;Bonjour les gars!&lt;/p&gt;\r\n                ', NULL, '2021-08-07 13:46:39'),
(48, 'f777212d86', 22, '<p>oui Bonjour</p>', '791410659.txt', '2021-08-07 13:49:12'),
(49, 'e22ddfeca0', 13, '                    &lt;p&gt;Bonjour le gars&lt;/p&gt;\r\n                ', NULL, '2021-08-07 14:31:37'),
(50, 'e22ddfeca0', 7, '<p>Oui bonjour ni sawa?<br></p>', NULL, '2021-08-07 14:33:50'),
(51, 'e22ddfeca0', 13, '<p>ndiyo!</p>', '1439983703.txt', '2021-08-07 14:46:38'),
(52, '4274c76f6c', 14, '                    &lt;p&gt;oui bonjour boss!&lt;/p&gt;\r\n                ', NULL, '2021-08-09 19:51:45'),
(53, '4274c76f6c', 14, '<p>oui ok</p>', '900061170.txt', '2021-08-09 19:52:05');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_chat`
--

CREATE TABLE `groupe_chat` (
  `idgroupe` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT '0',
  `code` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe_chat`
--

INSERT INTO `groupe_chat` (`idgroupe`, `nom`, `id_users`, `etat`, `code`, `image`) VALUES
(1, 'hub formation', 22, 0, 'f777212d86', '2102877479.png'),
(2, 'L\'art de pitch', 7, 0, 'e922db8817', '1438449233.png'),
(3, 'aushalange', 7, 0, 'e22ddfeca0', '1630810134.png'),
(8, 'festival amani', 7, 0, '4274c76f6c', '480432152.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`idg`, `image`, `created_at`) VALUES
(25, '2074972032.jpg', '2021-09-20 20:00:21'),
(26, '1198459739.png', '2021-09-20 20:00:21'),
(27, '1057962979.png', '2021-09-20 20:00:21'),
(28, '874649230.png', '2021-09-20 20:00:21'),
(29, '210166666.png', '2021-09-20 20:00:21'),
(30, '1869082402.png', '2021-09-20 20:00:21'),
(31, '744286483.png', '2021-09-20 20:00:21'),
(32, '1444967669.png', '2021-09-20 20:00:21'),
(33, '1019696881.png', '2021-09-20 20:00:21'),
(34, '646373829.png', '2021-09-20 20:00:21'),
(35, '1482238609.jpg', '2021-09-20 20:01:14'),
(36, '1634911349.jpg', '2021-09-20 20:01:14'),
(37, '66840553.jpg', '2021-09-20 20:01:14'),
(39, '1292435135.jpg', '2021-09-20 20:01:14'),
(40, '1116782129.png', '2021-09-20 20:01:14'),
(41, '1591988505.png', '2021-09-20 20:01:14'),
(42, '1913711095.png', '2021-09-20 20:01:14'),
(43, '574061231.png', '2021-09-20 20:01:14'),
(44, '440102635.jpg', '2021-09-20 20:01:15'),
(45, '218982168.png', '2021-09-20 20:01:15');

-- --------------------------------------------------------

--
-- Structure de la table `images2`
--

CREATE TABLE `images2` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images2`
--

INSERT INTO `images2` (`idg`, `image`, `created_at`) VALUES
(24, '1977184801.png', '2021-09-20 21:54:50'),
(25, '828252420.jpg', '2021-09-20 21:54:50'),
(26, '187350836.png', '2021-09-20 21:54:50'),
(27, '30154559.png', '2021-09-20 21:54:50'),
(28, '1591663679.png', '2021-09-20 21:54:50'),
(29, '436319273.png', '2021-09-20 21:54:50'),
(30, '1418330690.png', '2021-09-20 21:54:50'),
(31, '217460077.png', '2021-09-20 21:54:50'),
(32, '1980250224.png', '2021-09-20 21:54:50'),
(33, '2101799948.png', '2021-09-20 21:54:50'),
(34, '1549179010.jpg', '2021-09-20 21:54:51'),
(35, '119038708.png', '2021-09-20 21:54:51'),
(36, '1902048963.png', '2021-09-20 21:54:51'),
(37, '1178873119.png', '2021-09-20 21:54:51'),
(38, '1902088119.jpg', '2021-09-20 21:54:51'),
(39, '11920788.jpg', '2021-09-20 21:54:51'),
(40, '1604510356.jpg', '2021-09-20 21:54:51');

-- --------------------------------------------------------

--
-- Structure de la table `inscription_formations`
--

CREATE TABLE `inscription_formations` (
  `idinscription` int(11) NOT NULL,
  `nomcomplet` varchar(3000) DEFAULT NULL,
  `email` varchar(3000) DEFAULT NULL,
  `telephone` varchar(3000) DEFAULT NULL,
  `niveau_etude` text,
  `domicile` varchar(3000) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `idf` int(11) DEFAULT NULL,
  `annee` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription_formations`
--

INSERT INTO `inscription_formations` (`idinscription`, `nomcomplet`, `email`, `telephone`, `niveau_etude`, `domicile`, `created_at`, `idf`, `annee`) VALUES
(1, 'yuma kayanda', 'yuma@gmail.com', '+243817883541', 'licencié', 'Quartier katoyi', '2021-07-27 15:47:28', 11, '2020'),
(2, 'patrick kakese', 'kakese@gmail.com', '+243977525214', 'licencié', 'Quartier himbi', '2021-07-27 16:04:19', 11, '2020'),
(3, 'patrick kakese', 'kakese@gmail.com', '+243977525214', 'licencié', 'Quartier himbi', '2021-07-27 16:04:19', 10, '2020'),
(4, 'sefu kakese', 'sefu@gmail.com', '+243977525214', 'licencié', 'Quartier himbi', '2021-07-27 16:04:19', 11, '2020'),
(5, 'jeremie bashonga boss', 'jeremie11@gmail.com', '+243970524665', 'licencié', 'Quartier keshero', '2021-07-27 16:04:19', 11, '2021'),
(7, 'patrona boss', 'patrona@gmail.com', '+243810409151', 'licencié', 'Goma tmk', '2021-07-28 16:29:58', 8, '2021'),
(9, 'seigneur birndwa', 'seigneur@gmail.com', '+243817883541', 'licencié', 'Goma tmk', '2021-07-28 17:06:31', 11, '2021'),
(10, 'seigneur birndwa', 'seigneur@gmail.com', '+243810409151', 'licencié', 'Goma tmk', '2021-08-21 18:26:28', 10, ''),
(13, 'patrona boss', 'info.devtech@gmail.com', '+243810409151', 'licencié', 'Quartier keshero', '2021-08-21 18:35:38', 10, ''),
(14, 'patrona boss', 'sumailiroger681@gmail.com', '+243810409151', 'licencié', 'Goma tmk', '2021-08-21 18:46:11', 10, ''),
(15, '', '', '', '', '', '2021-08-22 10:36:51', 11, '');

-- --------------------------------------------------------

--
-- Structure de la table `invite`
--

CREATE TABLE `invite` (
  `idinvite` int(11) NOT NULL,
  `idconference` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invite`
--

INSERT INTO `invite` (`idinvite`, `idconference`, `id_user`, `created_at`, `link`) VALUES
(8, 6, 7, '2021-09-14 21:55:03', NULL),
(11, 9, 7, '2021-09-15 11:49:34', NULL),
(15, 1, 22, '2021-09-15 12:15:50', NULL),
(16, 1, 13, '2021-09-15 12:20:39', NULL),
(17, 6, 13, '2021-09-16 14:47:37', NULL),
(18, 10, 13, '2021-09-19 12:01:51', NULL),
(19, 11, 16, '2021-09-20 15:19:21', NULL),
(20, 11, 11, '2021-09-20 15:19:21', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `link_canavas`
--

CREATE TABLE `link_canavas` (
  `idlink` int(11) NOT NULL,
  `titre` varchar(800) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `message` text,
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
  `message` text,
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
(19, 'sources revenus', 9, NULL, 'réabonnement mensuel'),
(20, 'sources revenus', 9, NULL, 'réabonnement mensuel 2'),
(22, 'solution', 9, NULL, 'solution n1 ok'),
(29, 'Problème', 9, NULL, 'mon problème est que je suis cool'),
(30, 'avantage déloyale', 9, NULL, 'avantage n1'),
(32, 'structure des coûts', 9, NULL, '788$ par an');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `idmessage` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_recever` int(11) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(300) DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES
(4, 7, 9, '	                  ce bon BOSS!\r\n	              ', '2020-10-11 14:02:23', '8f04778c11', NULL),
(5, 9, 7, 'bonjour!', '2021-02-22 15:49:29', '80fb297618', '3f70f9c09c5d9305387866dbe9c98bc00ojTWpeT7wc34q4QIPlyWoQWYfhrjbadyqnOHNoDHYFuQWcc9s7PQYi3PrzFa3pq-tTcerUcVSqDewJjiFuELhZ5zzAyqcQIbEneIw_kEUkDH5rsQIQjnaAS7Zq1Y65g44zRHH91npk=w235-h234.jpg'),
(8, 14, 9, 'ok', '2021-02-22 16:01:11', '5202ec8d8e', NULL),
(9, 7, 9, '	                  &lt;p&gt;&lt;b&gt;maisha paie&lt;/b&gt;&lt;/p&gt;\r\n	              ', '2021-06-19 22:32:50', '09130274de', NULL),
(14, 7, 14, '&lt;p&gt;uhn!&lt;/p&gt;', '2021-06-19 22:57:53', '38cbba6aef', NULL),
(15, 7, 14, '&lt;p&gt;&lt;b&gt;bonjour&lt;/b&gt;&lt;/p&gt;&lt;p&gt;ok&lt;/p&gt;', '2021-06-19 22:58:25', '5cde105c03', '2affd27237a8f384a0c3835af63a7d07belle-fille-se-trouve-dans-parc_8353-5085.jpg'),
(16, 7, 9, '	                  &lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; color:#121c42;mso-font-kerning:18.0pt;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 31.5pt;&quot;&gt;HTML&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;line-height: normal; vertical-align: baseline;&quot;&gt;&lt;span inherit&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; mso-bidi-font-family:arial;color:#121c42;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 13pt;&quot;&gt;L\'HTML constitue la base de tous les sites internet. Ce langage de balisage permet de définir la structure d\'une page web et de définir les propriétés du document et de structurer le contenu à l\'aide d\'un système de balise sensiblement identique au XML.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;img src=&quot;data:image/png;base64,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&quot; alt=&quot;&quot; style=&quot;width: 105px;&quot;&gt;&lt;a href=&quot;https://grafikart.fr/tutoriels/html&quot; style=&quot;background-color: rgb(255, 255, 255); font-size: 1rem;&quot;&gt;&lt;span inherit&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; mso-bidi-font-family:arial;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 13pt;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;br&gt;&lt;/p&gt;\r\n	              ', '2021-06-20 15:16:39', 'd12f4b9a98', NULL),
(17, 7, 12, '&lt;p&gt;bonjour boss!&lt;/p&gt;', '2021-06-24 11:22:46', '7dc1ce8531', NULL),
(18, 7, 12, '&lt;p&gt;ni sawa?&lt;/p&gt;', '2021-06-24 11:23:02', 'c66b083f1b', NULL),
(19, 7, 14, '&lt;p&gt;bonjour!&lt;/p&gt;', '2021-06-24 11:24:25', 'fd1c3c9917', NULL),
(22, 9, 14, '                                            &lt;p&gt;ok merci! ce bon!&lt;/p&gt;\r\n                  \r\n                  ', '2021-06-27 04:49:31', '80e4196cdb', NULL),
(24, 7, 9, '	                  &lt;p&gt;salut boss!&lt;/p&gt;\r\n	              ', '2021-07-16 15:03:39', 'ef4e5a6fdb', NULL),
(26, 9, 7, '                      &lt;p&gt;plan d\'affaire ok!&lt;/p&gt;\r\n                  ', '2021-07-16 15:11:48', 'aa321f38c3', '1678222ceae53fe96ccbd2c684e86d01banierre-covid.jpg'),
(27, 9, 20, '&lt;p&gt;boss&lt;/p&gt;', '2021-07-16 15:12:16', 'db8d399960', NULL),
(28, 7, 22, '&lt;p&gt;Bonsoir!&lt;/p&gt;', '2021-08-04 23:16:14', 'ba7bece6a9', NULL),
(30, 7, 22, '&lt;p&gt;ça va?&lt;br&gt;&lt;/p&gt;', '2021-08-04 23:16:29', '48b0055a59', NULL),
(31, 7, 13, '&lt;p&gt;Bonjour&lt;/p&gt;', '2021-08-04 23:16:47', 'd4689d324d', NULL),
(32, 7, 13, '&lt;p&gt;ça va?&lt;/p&gt;', '2021-08-04 23:16:58', '60a7fa2835', NULL),
(36, 22, 12, '&lt;p&gt;Salut!&lt;/p&gt;', '2021-08-07 12:40:09', 'e13d78e725', NULL),
(37, 22, 9, '&lt;p&gt;Ce comment?&lt;/p&gt;', '2021-08-07 13:00:05', '63859eb8ba', NULL),
(38, 22, 9, '                      &lt;p&gt;ça va boss?&lt;/p&gt;\r\n                  ', '2021-08-07 13:00:49', 'd42b20cb65', '145be1aa998739b3a9173fcc06a73f1cafiabora.txt'),
(39, 22, 12, '&lt;p&gt;Bonjour!&lt;/p&gt;', '2021-08-07 13:04:40', 'efe91a8833', NULL),
(40, 22, 15, '&lt;p&gt;Bonjour ici!&lt;/p&gt;', '2021-08-07 13:20:34', 'b513a02dd2', NULL),
(41, 13, 7, '                      oui bonjour coach ça va?', '2021-08-07 14:18:08', 'd73fabc6e6', NULL),
(45, 14, 15, '&lt;p&gt;Bonjour!&lt;/p&gt;', '2021-08-09 19:37:47', '8fea7e1510', NULL),
(46, 9, 22, '                      &lt;p&gt;ok boss&lt;/p&gt;\r\n                  ', '2021-08-24 09:37:18', '8750eea576', NULL),
(47, 7, 23, '&lt;p&gt;bonjour&lt;/p&gt;', '2021-09-20 15:28:36', '1f940324c5', NULL),
(48, 9, 7, '&lt;p&gt;Bonjour&lt;/p&gt;', '2021-10-28 15:48:51', 'cbef16ecb9', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message_sender`
--

CREATE TABLE `message_sender` (
  `idsms` int(11) NOT NULL,
  `tel` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `etat` varchar(300) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message_sender`
--

INSERT INTO `message_sender` (`idsms`, `tel`, `created_at`, `etat`, `message`) VALUES
(6, '+243970524665', '2021-07-30 10:30:11', 'ok', 'bonjour ce ci est un test de messagerie'),
(7, '+243854543870', '2021-07-30 10:30:11', 'ok', 'bonjour ce ci est un test de messagerie'),
(17, '+243817883541', '2021-07-30 16:47:12', 'faux', 'Bonjour fullstack'),
(18, '+243817883541', '2021-08-20 10:24:26', 'ok', 'Bonjour ceci est un test de message'),
(21, '+243817883541', '2021-08-20 13:52:07', 'ok', 'Bonjour boss!'),
(22, '+243817883541', '2021-08-20 14:15:11', 'ok', 'Bonjour kaka!'),
(23, '+243817883541', '2021-08-20 14:17:26', 'ok', 'Bonjour kaka!'),
(24, '+243998957572', '2021-08-20 17:06:29', 'ok', 'bonjour ceci est test de message!'),
(25, '+243970524665', '2021-08-20 17:16:08', 'ok', 'vous pouvez maintenant vous connecter?'),
(26, '+243978451020', '2021-08-27 17:50:41', 'ok', 'salut ceci est un exemple de texte messagerie'),
(27, '+243970267037', '2021-08-27 17:50:43', 'ok', 'salut ceci est un exemple de texte messagerie'),
(28, '+243970524665', '2021-09-14 19:25:05', 'ok', 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence votre lien: entreprise/joinmetting/https://getbootstrap.com/docs/4.0/components/modal/'),
(29, '+243817883541', '2021-09-14 19:25:07', 'ok', 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence votre lien: admin/joinmetting/https://getbootstrap.com/docs/4.0/components/modal/'),
(30, '+243995598891', '2021-09-15 10:31:48', 'ok', 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence votre lien: user/joinmetting/https://meet.jit.si/FzPegMWzfxO0qfhKsZ3w0ZxFbYBqqM'),
(31, '+243817883541', '2021-09-15 10:34:44', 'ok', 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence votre lien: admin/joinmetting/FzPegMWzfxO0qfhKsZ3w0ZxFbYBqqM'),
(32, '+243817883541', '2021-10-28 15:59:32', 'ok', 'Ce ci est message de text');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `idmodule` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text,
  `fichier` varchar(300) DEFAULT NULL,
  `annee` varchar(300) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `code` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `logoImage` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`idmodule`, `titre`, `description`, `fichier`, `annee`, `id_user`, `code`, `created_at`, `logoImage`) VALUES
(1, 'Développement des applications web avec nodejs', 'All the content and graphics published in this e-book are the property of Tutorials Point (I) Pvt. Ltd. The user of this e-book is prohibited to reuse, retain, copy, distribute or republish any contents or a part of contents of this e-book in any manner without written consent of the publisher.\r\nWe strive to update the contents of our website and tutorials as timely and as precisely as possible, however, the contents may contain inaccuracies or errors. Tutorials Point (I) Pvt. Ltd. provides no guarantee regarding the accuracy, timeliness or completeness of our website or its contents including this tutorial. If you discover any errors on our website or in this tutorial, please notify us at contact@tutorialspoint.com', '199091676.pdf', '2021', 7, '567300860-2021', '2021-08-13 19:06:41', '2131242362.js_logo'),
(3, 'React native developpement', 'To be able to follow this tutorial, you should be familiar with React and have solid JavaScript knowledge. Even if you do not have previous experience with React, you should be able to follow it. In this tutorial, we will explain some fundamental React concepts.', '2032995056.pdf', '2021', 7, '103750246-2021', '2021-08-13 19:08:29', '1822804771.png'),
(4, 'Développement des applications web avec angular', 'For better understanding of React Native concepts, we will borrow a few lines from the official documentation –\r\nReact Native lets you build mobile apps using only JavaScript. It uses the same design as React, letting you compose a rich mobile UI from declarative components. With React Native, you don\'t build a mobile web app, an HTML5 app, or a hybrid app; you build a real mobile app that\'s indistinguishable from an app built using Objective-C or Java. React Native uses the same fundamental UI building blocks as regular iOS and Android apps. You just put those building blocks together using JavaScript and React.', '1087289205.pdf', '2021', 7, '1795031456-2021', '2021-08-14 16:30:43', '1789090128.png'),
(5, 'Développement des applications mobiles react redux', 'For better understanding of React Native concepts, we will borrow a few lines from the official documentation –\r\nReact Native lets you build mobile apps using only JavaScript. It uses the same design as React, letting you compose a rich mobile UI from declarative components. With React Native, you don\'t build a mobile web app, an HTML5 app, or a hybrid app; you build a real mobile app that\'s indistinguishable from an app built using Objective-C or Java. React Native uses the same fundamental UI building blocks as regular iOS and Android apps. You just put those building blocks together using JavaScript and React.', '', '2021', 7, '670272371-2021', '2021-08-14 16:31:34', '1818147132.png'),
(6, 'Flexbox', 'Step1: Install create-react-native-app\r\nAfter installing NodeJS and NPM successfully in your system you can proceed with installation of create-react-native-app (globally as shown below).\r\nC:\\Users\\Tutorialspoint> npm install -g create-react-native-app\r\nStep2: Create project\r\nBrowse through required folder and create a new react native project as shown below.\r\nC:\\Users\\Tutorialspoint>cd Desktop\r\nC:\\Users\\Tutorialspoint\\Desktop>create-react-native-app MyReactNative\r\nAfter executing the above command, a folder with specifies name is created with the following contents.', '1781544474.pdf', '2021', 7, '1292358948-2021', '2021-08-14 16:32:47', '1204160968.jpg'),
(7, 'Devenir pro en nodejs', 'Step3: NodeJS Python Jdk8\r\nMake sure you have Python NodeJS and jdk8 installed in your system if not, install them. In addition to these it is recommended to install latest version of yarn to avoid certain issues.\r\nStep4: Install React Native CLI\r\nYou can install react native command line interface on npm, using the install -g react-native-cli command as shown below.', '1680083422.pdf', '2021', 16, '1694136940-2021', '2021-08-14 16:48:40', '402225721.js_logo'),
(8, 'MERISE', 'meilleur cour d\'analyse informatique pour la conception', '1056909136.pdf', '2021', 16, '888941941-2021', '2021-08-15 13:12:32', '433628848.jpg'),
(9, 'Digital Marketing', 'le digital marketing', '1545907701.pptx', '2021', 14, '1702427581-2021', '2021-08-15 17:17:22', '1457793353.jpg'),
(10, 'modulen 1', 'sfdfgfgdfgdfgdfgd', '1423471097.xlsx', '2021', 16, '561795079-2021', '2021-08-20 17:26:04', '1226865353.png');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `apropos` text,
  `financement` text,
  `carierre` text,
  `partenariat` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `apropos_text` text,
  `don` text,
  `structure` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`idnews`, `apropos`, `financement`, `carierre`, `partenariat`, `created_at`, `apropos_text`, `don`, `structure`) VALUES
(6, '																																																																																										<p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">SERVICES\r\nPROPOSES PAR LE HUB UJN<br>\r\n</span></b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold;mso-bidi-font-style:italic\">Le Hub UJN est un\r\nincubateur qui encadre et aide à structurer des projets entrepreneuriaux en\r\nleur offrant un espace de travail motivant, des formations pour le renforcement\r\ndes capacités, du coaching, mentorat et réseautage, mais aussi des financements\r\npour le développement des projets matures ;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Un espace\r\nconvivial pour l’hébergement de STARTUps <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">mise à\r\ndisposition des ressources matérielles et outils disponibles dans les locaux<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">accès aux\r\nformations et compétences d’experts<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">accompagnement\r\npersonnalisé<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"> <i>(business model, business plan, lean\r\ncanvas, brevets, propriété intellectuelle, structuration juridique, levée de\r\nfonds)</i><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">mise en\r\nrelation <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:72.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level2 lfo1;\r\ntab-stops:list 72.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">avec d’autres\r\nentrepreneurs soutenus dans la structure <o:p></o:p></span></p><p class=\"MsoNormal\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:72.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level2 lfo1;\r\ntab-stops:list 72.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">avec un réseau\r\nd’investisseurs, partenaires ou clients potentiels.</span></p><p class=\"MsoNormal\"><b><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LA VISION<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">CRÉER<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo1;\r\ntab-stops:22.5pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Un\r\nenvironnement protégé où les petites entreprises déjà existantes pourront\r\ngrandir et s’épanouir<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo1;\r\ntab-stops:22.5pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Un\r\nespace où l’écosystème des start-ups pourra se présenter au monde, se\r\nrencontrer et discuter des challenges mais aussi interagir avec les acteurs\r\nextérieurs tels que les institutions gouvernementales, les associations\r\nd’entreprises et les organisations donatrices, mais aussi avec des institutions\r\nfinancières et des Business Angels .<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-18.0pt;mso-list:l1 level1 lfo1;\r\ntab-stops:22.5pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Un\r\nespace où les investisseurs locaux aussi bien qu’internationaux pourront\r\nrencontrer des entreprises congolaises prometteuses recherchant des fonds pour\r\nleur développement/ expansion/ croissance.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LA MISSION<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">DONNER<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2;\r\ntab-stops:22.5pt list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\">•</span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">L’accès\r\nà un environnement de travail stable à un prix abordable avec une connexion\r\ninternet fiable<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2;\r\ntab-stops:22.5pt list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\">•</span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">L’accès\r\naux programmes de formation aussi bien pour les entrepreneurs que pour les\r\ngestionnaires d’incubateurs<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2;\r\ntab-stops:22.5pt list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\">•</span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">L’accès\r\naux mentors provenant de divers secteurs d’activités qui se rendent disponible\r\nafin de partager leur expérience avec la prochaine génération de dirigeants\r\nd’entreprise<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-18.0pt;mso-list:l0 level1 lfo2;\r\ntab-stops:22.5pt list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\">•</span><!--[endif]--><span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">L’accès\r\naux startups à des fonds pour leur développement<o:p></o:p></span></p>																														<h1 class=\"heading-91\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-weight: 400; font-family: \" gothamrounded=\"\" book\",=\"\" sans-serif;=\"\" font-size:=\"\" 23px;=\"\" line-height:=\"\" 40px;=\"\" width:=\"\" 363.703px;=\"\" padding-right:=\"\" 0px;=\"\" padding-left:=\"\" 10px;=\"\" border-radius:=\"\" background-color:=\"\" rgb(229,=\"\" 114,=\"\" 0);=\"\" color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" background-clip:=\"\" padding-box;\"=\"\"></h1>																																																																											', '																																										<p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">SECTEURS\r\nD’ACTIVITÉ<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Nous avons défini des secteurs d’activités dans\r\nlesquels les start-ups que nous encadrons doivent évoluer :<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">start-ups évoluant dans le <b>domaine technologique</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">entreprises dans la <b>petite industrie et\r\nl\'artisanat</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">les entrepreneurs évoluant dans le <b>secteur agricole\r\net la transformation alimentaire</b> <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">les entreprises de <b>service à création de valeur\r\nlocale</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">startups évoluant dans les secteurs des mines et des\r\nmatières premières<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">LES\r\nETAPES<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">STAGE 1</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US\">SELECTION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Cette étape\r\nconsiste en la réception des candidatures et de leurs traitements. <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"> </span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">STAGE 2</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\"\">PRE-INCUBATION<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Cette étape\r\nconsiste en la validation du Business Model de la Start-up à travers le lean\r\nmodel canvas<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:18.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"> </span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">STAGE 3</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US\">INCUBATION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Cette étape\r\nconsistera en la création du MVP et de la génération de  la traction. Le document de base sera le\r\nBusiness plan<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"> </span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l3 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">STAGE 4</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US\">ACCELERATION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Cette étape\r\nconsistera en la consolidation de l’entreprise et en la génération de flux\r\nfinanciers. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">DOMAINES\r\nD’ACTIVITE PRINCIPAUX RECENSES<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l1 level1 lfo6;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\"\">AGRI-BUSINESS<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l1 level1 lfo6;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\"\">PETITE TRANSFORMATION<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l1 level1 lfo6;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\"\">MINES<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l1 level1 lfo6;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\"\">SERVICES<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l1 level1 lfo6;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\"\">FIN TECH / E-COMMERCE<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\"> </span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">PROCESSUS\r\nDE SELECTION</span></b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">Premier\r\ncontact avec la start-up</span></b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l4 level1 lfo3;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Arial\",\"sans-serif\";mso-fareast-font-family:Arial;\r\nmso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Visite Spontanée<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l4 level1 lfo3;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Arial\",\"sans-serif\";mso-fareast-font-family:Arial;\r\nmso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Site internet<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l4 level1 lfo3;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Arial\",\"sans-serif\";mso-fareast-font-family:Arial;\r\nmso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Recommandations<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l4 level1 lfo3;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Arial\",\"sans-serif\";mso-fareast-font-family:Arial;\r\nmso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Repérage<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l4 level1 lfo3;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Arial\",\"sans-serif\";mso-fareast-font-family:Arial;\r\nmso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Appels à projet<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">Check-list start-up</span></b><span style=\"font-size:\r\n12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:EN-US\">Pré-selection</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">Interview\r\nde la start –up par le Panel</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">Communication\r\nde la décision du Panel</span></b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">Intégration\r\nde la start-up dans le stage défini</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\"\">L’outil\r\nde gestion de la relation entrepreneur (ERM)<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Pour faciliter la gestion de la relation et le\r\npartage des documents entre les entrepreneurs, les mentors et les gestionnaires\r\nd’incubateurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">Celui-ci nous permet : <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Mise en place\r\nd’un formulaire pour l’appel à candidature<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Accès aux\r\nprofils des entrepreneurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Suivi en temps\r\nréel de l’évolution de la start-up<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Edition du\r\nlean canvas dynamique par les entrepreneurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Planification\r\net reporting des séances de coaching<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Analyse des\r\nmetrics<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Production de\r\nrapport d’ activité<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Animation de\r\nla communauté en ligne<o:p></o:p></span></p>																																			', '																																																						<p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LES\r\nPRINCIPALES LACUNES DE L’ÉCOSYSTÈME ENTREPRENEURIAL CONGOLAIS QUE LE HUB UJN\r\nADRESSE</span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">L’accès à un environnement de travail stable à des\r\nprix abordables avec une connexion internet fiable<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">L’accès aux programmes de formations pour les\r\nentrepreneurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">L’accès aux mentors provenant de divers secteurs\r\nd’activités qui se rendent disponibles afin de partager leur expérience avec la\r\nprochaine génération de dirigeants d’entreprises<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">L’existence d’un environnement protégé où les\r\npetites entreprises déjà existantes pourront grandir et s’épanouir<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:Wingdings;mso-fareast-font-family:Wingdings;\r\nmso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">L’existence d’un espace où l’écosystème des\r\nstart-ups pourra se présenter au monde, se rencontrer et discuter des\r\nchallenges rencontrés mais aussi interagir avec les acteurs extérieurs tels que\r\nles institutions gouvernementales, les associations d’entreprises et les organisations\r\ndonatrices. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span style=\"font-size:12.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:=\"\" fr;mso-fareast-language:en-us;mso-bidi-language:ar-sa;mso-bidi-font-weight:=\"\" bold\"=\"\">L’existence d’un espace où les investisseurs locaux aussi bien\r\nqu’internationaux pourront rencontrer les entreprises congolaises prometteuses\r\nrecherchant des fonds pour leur développement/ expansion/ croissance</span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><br></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">SECTEURS\r\nD’ACTIVITÉ<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Nous avons défini des secteurs d’activités dans\r\nlesquels les start-ups que nous encadrons doivent évoluer :<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l7 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">start-ups évoluant dans le <b>domaine technologique</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l7 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">entreprises dans la <b>petite industrie et\r\nl\'artisanat</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l7 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">les entrepreneurs évoluant dans le <b>secteur agricole\r\net la transformation alimentaire</b> <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l7 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">les entreprises de <b>service à création de valeur\r\nlocale</b><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l7 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">startups évoluant dans les secteurs des mines et des\r\nmatières premières<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LES\r\nETAPES<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">STAGE 1</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-ansi-language:en-us\"=\"\">SELECTION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Cette étape\r\nconsiste en la réception des candidatures et de leurs traitements. <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"> </span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">STAGE 2</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">PRE-INCUBATION<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Cette étape\r\nconsiste en la validation du Business Model de la Start-up à travers le lean\r\nmodel canvas<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:18.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"> </span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">STAGE 3</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-ansi-language:en-us\"=\"\">INCUBATION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Cette étape\r\nconsistera en la création du MVP et de la génération de  la traction. Le document de base sera le\r\nBusiness plan<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"> </span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l5 level1 lfo4\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">v<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">STAGE 4</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-ansi-language:en-us\"=\"\">ACCELERATION<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Cette étape\r\nconsistera en la consolidation de l’entreprise et en la génération de flux\r\nfinanciers. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">PROCESSUS\r\nDE SELECTION</span></b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Premier\r\ncontact avec la start-up</span></b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l6 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" arial\",\"sans-serif\";mso-fareast-font-family:arial;=\"\" mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Visite Spontanée<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l6 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" arial\",\"sans-serif\";mso-fareast-font-family:arial;=\"\" mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Site internet<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l6 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" arial\",\"sans-serif\";mso-fareast-font-family:arial;=\"\" mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Recommandations<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l6 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" arial\",\"sans-serif\";mso-fareast-font-family:arial;=\"\" mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Repérage<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l6 level1 lfo5;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" arial\",\"sans-serif\";mso-fareast-font-family:arial;=\"\" mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">      </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Appels à projet<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo6\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">Check-list start-up</span></b><span style=\"font-size:\r\n12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo6\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><b>Pré-sélection</b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo6\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Interview\r\nde la start –up par le Panel</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo6\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Communication\r\nde la décision du Panel</span></b><span style=\"font-size:12.0pt;line-height:\r\n107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:8.0pt;mso-add-space:\r\nauto;text-indent:-18.0pt;line-height:107%;mso-list:l2 level1 lfo6\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Intégration\r\nde la start-up dans le stage défini</span></b><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:=\"\" bold\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">L’outil\r\nde gestion de la relation entrepreneur (ERM)<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Pour faciliter la gestion de la relation et le\r\npartage des documents entre les entrepreneurs, les mentors et les gestionnaires\r\nd’incubateurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Celui-ci nous permet : <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Mise en place\r\nd’un formulaire pour l’appel à candidature<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Accès aux\r\nprofils des entrepreneurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Suivi en temps\r\nréel de l’évolution de la start-up<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Edition du\r\nlean canvas dynamique par les entrepreneurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Planification\r\net reporting des séances de coaching<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Analyse des\r\nmetrics<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Production de\r\nrapport d’ activité<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo7;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Animation de\r\nla communauté en ligne<br><o:p></o:p></span></p>																														', '																																																																		<p><b><span style=\"font-size:12.0pt;line-height:115%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:calibri;=\"\" mso-fareast-theme-font:minor-latin;mso-ansi-language:fr;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\">DEVENEZ partenaire du HUB UJN : proposition de\r\nfinancement - rubriques</span></b></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:8.0pt;margin-left:57.0pt;mso-add-space:auto;text-indent:-18.0pt;\r\nline-height:107%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Participation aux charges opérationnelles mensuelles\r\n( loyer ) pour pérenniser le projet <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:8.0pt;margin-left:57.0pt;mso-add-space:auto;text-indent:-18.0pt;\r\nline-height:107%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Mise à disposition d’une connexion 4G permanente\r\ndans les espaces de coworking <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:8.0pt;margin-left:57.0pt;mso-add-space:auto;text-indent:-18.0pt;\r\nline-height:107%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Participation à la Soirée de Gala annuelle en tant\r\nque sponsor PLATINE exclusif du secteur<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:8.0pt;margin-left:57.0pt;mso-add-space:auto;text-indent:-18.0pt;\r\nline-height:107%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Prise en charge de un ou plusieurs apprenants boursiers\r\ndu programme Cryptnail<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-top:0cm;margin-right:0cm;\r\nmargin-bottom:8.0pt;margin-left:57.0pt;mso-add-space:auto;text-indent:-18.0pt;\r\nline-height:107%;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Partenaire du Centre d’Excellence par la fourniture\r\nde 10 laptops pour les formations <o:p></o:p></span></p>\r\n\r\n<p>            <span style=\"text-indent: -18pt; font-size: 12pt; line-height: 107%; font-family: Wingdings;\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">  </span></span><span style=\"text-indent: -18pt; font-size: 12pt; line-height: 107%; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;\"=\"\">Mise à disposition de formateurs de pour des\r\nformations thématiques ponctuelles</span><b><span style=\"font-size:12.0pt;line-height:115%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:calibri;=\"\" mso-fareast-theme-font:minor-latin;mso-ansi-language:fr;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\"> </span></b></p><p><img src=\"data:image/png;base64,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niVDu01c5bMPu+0mrNuyvUCo0zdfCBAgQIAAAQIECBDIBV43r4AXAOUqPhO4e4E3zSvgBUB3b/22WrgoAHpbndUuAQIECBAgQIAAAQIECBAgQIDAdAEB0HQzNQgQIECAAAECBAgQIECAAAECixIQAC3qcuksAQIECBAgQIAAAQIECBAgQGC6gABoupkaBAgQIECAAAECBAgQIECAAIFFCQiAFnW5dJYAAQIECBAgQIAAAQIECBAgMF1AADTdTA0CBAgQIECAAAECBAgQIECAwKIEBECLulw6S4AAAQIECBAgQIAAAQIECBCYLiAAmm6mBgECBAgQIECAAAECBAgQIEBgUQICoEVdLp0lQIAAAQIECBAgQIAAAQIECEwXEABNN1ODAAECBAgQIECAAAECBAgQILAoAQHQoi6XzhIgQIAAAQIECBAgQIAAAQIEpgsIgKabqUGAAAECBAgQIECAAAECBAgQWJSAAGhRl0tnCRAgQIAAAQIECBAgQIAAAQLTBQRA083UIECAAAECBAgQIECAAAECBAgsSkAAtKjLpbMECBAgQIAAAQIECBAgQIAAgekCAqDpZmoQIECAAAECBAgQIECAAAECBBYlIABa1OXSWQIECBAgQIAAAQIECBAgQIDAdAEB0HQzNQgQIECAAAECBAgQIECAAAECixIQAC3qcuksAQIECBAgQIAAAQIECBAgQGC6gABoupkaBAgQIECAAAECBAgQIECAAIFFCbQB0POfrMN///D74fc/+4E/DMwBc8AcMAfMAXPAHDAHzAFzwBwwB8wBc8AceEBzIAZA3736Y1h989v/Cv/zm1+Ff/zpd/4wMAfMAXPAHDAHzAFzwBwwB8wBc8AcMAfMAXPgAc2BP//nT8P//9+/wmpR65Z0lgABAgQIECBAgAABAgQIECBAYLLAvwG1fjut5OpOwQAAAABJRU5ErkJggg==\" data-filename=\"image.png\" style=\"width: 645.45px; height: 221.312px;\"><b><span style=\"font-size:12.0pt;line-height:115%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:calibri;=\"\" mso-fareast-theme-font:minor-latin;mso-ansi-language:fr;mso-fareast-language:=\"\" en-us;mso-bidi-language:ar-sa\"=\"\"><br></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:8.0pt;line-height:107%\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\">SOYEZ partenaire des événements du HUB UJN<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\">Hackathons </span><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\">Open Creative Events</span><span style=\"font-size:\r\n12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:bold\">Cessions de\r\nformation/Conférences pour startups et entrepreneurs <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\">Crowdfunding nights</span><span style=\"font-size:\r\n12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\">Workshops/séminaires/pitch nights</span><span style=\"font-size:12.0pt;line-height:107%;font-family:\"Times New Roman\",\"serif\";\r\nmso-bidi-font-weight:bold\"><o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-fareast-font-family:\r\n\"Times New Roman\";mso-bidi-font-weight:bold\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\">Concours</span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\"><br></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\"><br></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;\r\nmargin-left:36.0pt;text-indent:-18.0pt;line-height:107%;mso-list:l0 level1 lfo1;\r\ntab-stops:list 36.0pt\"><span lang=\"EN-US\" style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-ansi-language:EN-US;\r\nmso-bidi-font-weight:bold\"><br></span><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\"Times New Roman\",\"serif\";mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p>																																																							', '2021-08-20 10:54:12', '																																																																																																																		<h4 class=\"separator_off\" style=\"line-height: 1.3; margin-right: 0px; margin-bottom: 20px; margin-left: 0px;\"><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">HUB\r\nUJN est une plateforme pour Startups. <o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Située dans le quartier Katindo juste derrière\r\nl’UNIGOM, elle a pour vocation de réunir l’écosystème entrepreneurial de Goma\r\nsous un même toit. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">Le HUB UJN sera un microcosme bouillonnant composé\r\nen permanence d’entrepreneurs et visiteurs intéressés par l’espace de\r\ncoworking.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LA\r\nVISION&nbsp;: </span></b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">CRÉER<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Un\r\nenvironnement protégé où les petites entreprises déjà existantes pourront\r\ngrandir et s’épanouir<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Un espace où\r\nl’écosystème des start-ups pourra se présenter au monde, se rencontrer et\r\ndiscuter des challenges mais aussi interagir avec les acteurs extérieurs tels\r\nque les institutions gouvernementales, les associations d’entreprises et les\r\norganisations donatrices, mais aussi avec des institutions financières et des\r\nBusiness Angels .<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Un espace où\r\nles investisseurs locaux aussi bien qu’internationaux pourront rencontrer des\r\nentreprises congolaises prometteuses recherchant des fonds pour leur\r\ndéveloppement/ expansion/ croissance.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">LA\r\nMISSION&nbsp;: </span></b><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">DONNER<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">L’accès à un\r\nenvironnement de travail stable à un prix abordable avec une connexion internet\r\nfiable<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">L’accès aux\r\nprogrammes de formation aussi bien pour les entrepreneurs que pour les\r\ngestionnaires d’incubateurs<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">L’accès aux\r\nmentors provenant de divers secteurs d’activités qui se rendent disponible afin\r\nde partager leur expérience avec la prochaine génération de dirigeants\r\nd’entreprise<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">L’accès aux\r\nstartups à des fonds pour leur développement<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><b><span lang=\"EN-GB\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-gb\"=\"\">SERVICES OFFERTS<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Un espace\r\ndédié afin de travailler dans les meilleures conditions (internet, électricité,\r\ncalme)<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">un cycle\r\ncomplet de programmes de formation: pré-incubation, incubation et accélération<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Opportunités\r\nde réseautage et d’affaires – une place pour rencontrer investisseurs,\r\npartenaires et clients potentiels<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 36pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;\r\nline-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\";mso-bidi-font-weight:bold\"=\"\">•<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-bidi-font-weight:bold\"=\"\">Opportunités\r\nde Coaching et de Mentorat<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><b><span lang=\"EN-GB\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-gb\"=\"\">COÛTS POUR LES ENTREPRENEURS<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpFirst\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;\r\nmso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings;mso-ansi-language:\r\nEN-US;mso-bidi-font-weight:bold\">Ø<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">FRAIS PAYÉS PAR LES ENTREPRENEURS<o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" courier=\"\" new\";mso-fareast-font-family:=\"\" \"courier=\"\" new\";mso-bidi-font-weight:bold\"=\"\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp; </span></span><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">50$ - Pré-incubation/mois</span></b><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:\" courier=\"\" new\";mso-fareast-font-family:=\"\" \"courier=\"\" new\";mso-bidi-font-weight:bold\"=\"\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp; </span></span><b><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\">75$ - Incubation /mois </span></b><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 12pt; letter-spacing: -0.03em; line-height: 107%;\" courier=\"\" new\";mso-fareast-font-family:=\"\" \"courier=\"\" new\";mso-bidi-font-weight:bold\"=\"\">o<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"EN-US\" style=\"line-height: 107%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-ansi-language:en-us\"=\"\"><span style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 12pt; letter-spacing: -0.03em;\"><b>150$ - </b></span><font color=\"#212121\" face=\"Arial, Helvetica, sans-serif\"><span style=\"font-size: 16px; letter-spacing: -0.69px;\"><b>Accélération</b></span></font><span style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 12pt; letter-spacing: -0.03em;\"><b>&nbsp;/mois</b></span></span><b style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em;\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">ü<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Ces\r\nfrais sont payés par la start-up incubée<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">ü<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Ces\r\nfrais sont minimes en comparaison des services fournis à la start-up\r\n(hébergement avec connexion internet, formations, coaching et mentorat)<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">ü<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Ils\r\nconstituent de sa part un engagement envers le programme dans lequel elle est\r\nimpliquée. <o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin: 0cm 0cm 8pt 72pt; text-indent: -18pt; line-height: 107%;\"><!--[if !supportLists]--><span style=\"font-size:12.0pt;line-height:107%;font-family:Wingdings;mso-fareast-font-family:\r\nWingdings;mso-bidi-font-family:Wingdings;mso-bidi-font-weight:bold\">ü<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Certaines\r\nstart-ups répondant à des critères prédéfinis seront exemptés de ces frais et\r\nse verront attribuer une bourse<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><b><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\"><br></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><b><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Un Jour Nouveau<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; text-align: justify; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Un Jour Nouveau est une Association Sans But Lucratif déterminée à mettre\r\nﬁn au cycle de violence, de pauvreté, et d’inégalités favorisé par l’ignorance,\r\nla mauvaise gouvernance, et l’absence d’opportunités.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; text-align: justify; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Un Jour Nouveau à le souci de mettre à la disposition de tous un ensemble\r\nde ressources pouvant leur permettre d’exploiter leurs potentiels naturels,\r\nd’accroître leur connaissance sur des matières diversifiées, et d’atteindre\r\nainsi le développement intellectuel, moral et spirituel indispensable à l’épanouissement\r\nde tout être humain.&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Camille et Esther\r\nNTOTO, les Fondateurs,&nbsp; ont résolus, il y a de cela près de 15 ans, de\r\nmettre sur pied Un Jour Nouveau pour composer une nouvelle histoire pour les\r\npeuples et les nations.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">L’Association\r\npartage la vision d’atteindre tous les hommes, les femmes et les enfants sans\r\ndistinction de races, ethnies, nationalités ou classes sociales.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">MISSION&nbsp;:\r\naider chaque individu à découvrir, développer et déployer son Potentiel<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">VISION&nbsp;: un\r\nCongo paisible et prospère où chaque individu fait partie de la solution&nbsp;!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><b><u><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Hub UJN</span></u></b><b><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Le Hub UJN est un\r\nincubateur qui encadre et aide à structurer des projets entrepreneuriaux en\r\nleur offrant un espace de travail motivant, des formations pour le renforcement\r\ndes capacités, du coaching, mentorat et réseautage, mais aussi des financements\r\npour le développement des projets matures ; Le HUB UJN propose donc des\r\nservices pour soutenir les créateurs ou les entrepreneurs en vue d’aider ces\r\nderniers à transformer une idée innovante en entreprise performante.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">&nbsp;Pour rappel,\r\nl’incubateur est un dispositif de soutien pour porteurs de projets , qui\r\ncombine la mise en place d’un espace de travail à un programme de formation et\r\nd’accompagnement pour la maturation de leurs idées de projets, leur\r\nstructuration, la mobilisation des ressources financières et le renforcement de\r\nleurs capacités techniques pour leur mise en œuvre.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Pour qui ?<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Pour toute\r\npersonne souhaitant créer une société ou confirmer son choix d’entreprendre, et\r\nsouhaitant acquérir les compétences nécessaires à la réalisation de son projet.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Les points forts<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Approche très\r\nopérationnelle et pragmatique de la création d’entreprise innovante<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Formation en lien\r\nétroit avec les acteurs de la création d’entreprise – Accompagnement et suivi\r\npersonnalisé ;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">CRYPTNAIL&nbsp;:\r\nL’Académie du Code d’UJN<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Tous les jeunes ne\r\nsont pas forcément destinés à travailler à leur compte. Il existe des cerveaux\r\nfaits pour résoudre les problèmes des entreprises.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Le HUB UJN offre,\r\ndans ses services, des solutions à des situations déterminées dans les\r\nentreprises via des études de cas et des séances de brainstorming soumis à une\r\néquipe de projet constituée de jeunes congolais.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Ainsi, de jeunes\r\ndéveloppeurs coachés par Le HUB UJN créent des applications pouvant\r\n&nbsp;résoudre certains problèmes qui se posent dans la société congolaise.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-left: 18pt; line-height: normal;\"><span style=\"font-size: 12pt; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" letter-spacing:=\"\" -0.35pt;\"=\"\">Ce service permet,\r\nd’un côté, de faciliter le processus de recrutement pour les entreprises et de\r\nl’autre, de réduire le taux de chômage de la population congolaise!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; font-weight: 700;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"color: rgb(33, 33, 33); font-family: Arial, Helvetica, sans-serif; font-size: 23px; letter-spacing: -0.03em; margin-bottom: 8pt; line-height: 107%;\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-bidi-font-weight:bold\"=\"\">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</p></h4>																																																																																															', '																																																																																																												<div class=\"wpb_column vc_column_container vc_col-sm-8\" style=\"width: 806.656px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"vc_column-inner\" style=\"padding-left: 15px; padding-right: 15px; width: 806.656px;\"><div class=\"wpb_wrapper\"><h2 class=\"vc_custom_heading\" style=\"font-weight: 700; line-height: 48px; color: rgb(56, 56, 56); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 42px; letter-spacing: -0.03em;\">Un Don pour une solution</h2><p class=\"vc_custom_heading\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.8; color: rgb(56, 56, 56);\">Chaque jour “Un Jour Nouveau” répond aux questions spécifiques des communautés congolaises pour rendre la vie meilleure pour tous. Votre don en faveur d’une action peut transformer la vie d’une personne et faire d’elle une solution pour plusieurs.</p></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-4\" style=\"width: 403.328px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"vc_column-inner hide-on-mobile\" style=\"padding-left: 15px; padding-right: 15px; width: 403.328px;\"><div class=\"wpb_wrapper\"></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-4\" style=\"width: 403.328px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"vc_column-inner hide-on-mobile\" style=\"padding-left: 15px; padding-right: 15px; width: 403.328px;\"><div class=\"wpb_wrapper\"></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-8\" style=\"width: 806.656px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left; color: rgb(38, 38, 38); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"vc_column-inner vc_custom_1626692897636\" style=\"padding-left: 15px; padding-right: 15px; width: 806.656px; padding-bottom: 10px !important;\"><div class=\"wpb_wrapper\"><p class=\"vc_custom_heading\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 2px; color: rgb(56, 56, 56); font-size: 16px;\">Vous pouvez utiliser l’une des voies suivantes pour faire un don :</p><div class=\"vc_gutenberg wpb_content_element \" style=\"margin-bottom: 0px;\"><div class=\"wpb_wrapper\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.8;\"> </p><div class=\"wp-block-columns\" style=\"display: flex; margin-bottom: 1.75em; flex-wrap: nowrap;\"><div class=\"wp-block-column\" style=\"flex-grow: 1; min-width: 0px; word-break: break-word; overflow-wrap: break-word; flex-basis: 0px;\"><h6 style=\"line-height: 26px; color: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 14px;\"><strong style=\"font-weight: bold;\">Pour la République Démocratique du Congo</strong><br>Raw Bank<br>05100051720100729470145<br>SWIFT CODE: RAWBCDKI</h6><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.8;\">Airtel Money: +243 992 136 135<br>M-PESA: +243 813 536 820</p></div><div class=\"wp-block-column\" style=\"flex-grow: 1; min-width: 0px; word-break: break-word; overflow-wrap: break-word; flex-basis: 0px; margin-left: 2em;\"><h6 style=\"line-height: 26px; color: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 14px;\"><strong style=\"font-weight: bold;\">Pour la Belgique:</strong><br>IBAN: BE09 3630 8139 4457<br>BIC:BBRUBEBB</h6></div></div></div></div></div></div></div>																																																																																																					', '												<p><img src=\"data:image/png;base64,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');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES
(25, 'yuma kayanda Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:29:13', 'fa fa-user', 'Nouvelle inscription'),
(28, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(31, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription'),
(33, 'Nouvelle tentative de paiement cubaka mulume vient de faire son paiement', 'admin/paiement_pading', 7, '2021-05-29 20:06:34', 'fa fa-money', 'Nouveau de paiement'),
(35, 'Bonjour mikah kalume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/2022714497', 13, '2021-06-04 11:00:04', 'fa fa-check', 'Félicitation'),
(36, 'Bonjour cubaka mulume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/473539803', 9, '2021-06-04 11:00:05', 'fa fa-check', 'Félicitation'),
(39, 'Bonjour wilson vulembere votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/168831750', 8, '2021-06-04 13:01:33', 'fa fa-check', 'Félicitation'),
(43, 'kasumba kipundula Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(44, 'Un compte rendu,  yuma kayanda vient de faire: Compte rendu sur la descente sur terrain de projet maisha paye', 'admin/compterendu', 7, '2021-06-14 18:13:13', 'fa fa-tag', 'Nouveau compte rendu'),
(46, 'madeleine stephanie Vient de rejoindre la plateforme ', 'admin/visiteur', 7, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(47, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(48, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(50, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(51, 'madeleine stephanie Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:31:48', 'fa fa-user', 'Nouvelle inscription'),
(53, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:32:37', 'fa fa-user', 'Nouvelle inscription'),
(54, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(56, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 15, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(57, 'kika lula Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-15 11:32:38', 'fa fa-user', 'Nouvelle inscription'),
(59, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 11, '2021-06-15 11:32:58', 'fa fa-user', 'Nouvelle inscription'),
(60, 'jolie piana Vient de rejoindre la plateforme ', 'user/visiteur', 12, '2021-06-15 11:32:59', 'fa fa-user', 'Nouvelle inscription'),
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
(95, 'patrick ponyo Vient de rejoindre la plateforme ', 'user/visiteur', 16, '2021-06-19 00:00:49', 'fa fa-user', 'Nouvelle inscription'),
(96, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'user/chat_admin2/12/e22ddfeca0', 12, '2021-06-24 11:54:57', 'fa fa-comment', 'Nouveau groupe'),
(97, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'admin/chat_admin2/7/e22ddfeca0', 7, '2021-06-24 11:54:57', 'fa fa-comment', 'Nouveau groupe'),
(98, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'entreprise/chat_admin2/9/e22ddfeca0', 9, '2021-06-24 11:57:04', 'fa fa-comment', 'Nouveau groupe'),
(99, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'user/chat_admin2/14/e22ddfeca0', 14, '2021-06-24 11:57:04', 'fa fa-comment', 'Nouveau groupe'),
(100, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'user/chat_admin2/15/e22ddfeca0', 15, '2021-06-24 11:57:04', 'fa fa-comment', 'Nouveau groupe'),
(101, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'entreprise/chat_admin2/13/e22ddfeca0', 13, '2021-06-24 11:57:20', 'fa fa-comment', 'Nouveau groupe'),
(102, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'entreprise/chat_admin2/9/e22ddfeca0', 9, '2021-06-25 18:49:37', 'fa fa-comment', 'Nouveau groupe'),
(103, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'entreprise/chat_admin2/9/4274c76f6c', 9, '2021-07-16 14:59:09', 'fa fa-comment', 'Nouveau groupe'),
(104, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'user/chat_admin2/14/4274c76f6c', 14, '2021-07-16 14:59:09', 'fa fa-comment', 'Nouveau groupe'),
(105, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'user/chat_admin2/15/4274c76f6c', 15, '2021-07-16 14:59:09', 'fa fa-comment', 'Nouveau groupe'),
(109, 'Coach dembo apoline Vient de corriger votre busness model canavas dans la colonne:structure des coûts', 'entreprise/canavas', 9, '2021-07-24 09:22:24', 'fa fa-tasks', 'Nouvelle correction'),
(130, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'entreprise/chat_admin2/9/f777212d86', 9, '2021-08-04 23:15:34', 'fa fa-comment', 'Nouveau groupe'),
(134, 'Bonjour mikah kalume votre paiement a été invalidé suite à une cause valide. prière de vérifier la cause d\'invalidité de votre paiement au près de l\'administrateur du système ????', 'entreprise/facturePaiement/282744183', 13, '2021-08-05 00:17:57', 'fa fa-close', 'Désolé votre paiement a été invalide'),
(135, 'Bonjour mikah kalume votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/1908273699', 13, '2021-08-05 00:18:10', 'fa fa-check', 'Félicitation'),
(136, 'Nouvelle tentative de paiement mikah kalume vient de faire son paiement', 'admin/paiement_pading', 7, '2021-08-05 00:21:25', 'fa fa-money', 'Nouveau de paiement'),
(139, 'Bonjour cubaka mulume votre paiement a été invalidé suite à une cause valide. prière de vérifier la cause d\'invalidité de votre paiement au près de l\'administrateur du système ????', 'entreprise/facturePaiement/-paiementlocal', 9, '2021-08-05 01:22:39', 'fa fa-close', 'Désolé votre paiement a été invalide'),
(142, 'Nouvelle tentative de paiement mikah kalume vient de faire son paiement', 'comptable/paiement_pading/12', 22, '2021-08-05 10:30:07', 'fa fa-money', 'Nouveau de paiement'),
(144, 'Bonjour wilson vulembere votre paiement a été validé avec succès ????', 'entreprise/facturePaiement/485615596', 8, '2021-08-05 10:30:43', 'fa fa-check', 'Félicitation'),
(147, 'Nouvelle tentative de paiement mikah kalume vient de faire son paiement', 'comptable/paiement_pading/123456', 22, '2021-08-05 10:31:22', 'fa fa-money', 'Nouveau de paiement'),
(149, 'sumaili shabani Vient de nous ajouter dans un groupe ', 'comptable/chat_admin2/22/f777212d86', 22, '2021-08-07 12:02:21', 'fa fa-comment', 'Nouveau groupe'),
(150, 'wilson vulembere vient de payer 30$', 'admin/paiement_normale', 7, '2021-08-07 14:00:29', 'fa fa-bell', 'nouveau paiement'),
(151, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 8, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(152, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 9, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(154, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 18, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(155, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 19, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(156, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 20, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(157, 'Bonjour!  sumaili shabani vient d\'ajouter un module Devenir pro en nodejs', 'entreprise/module/1694136940-2021', 21, '2021-08-14 16:48:41', 'fa fa-book', 'Vous avez peut être raté un module'),
(158, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 8, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(159, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 9, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(160, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 13, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(161, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 18, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(162, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 19, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(163, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 20, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(164, 'Bonjour!  yuma kayanda vient d\'ajouter un module MERISE', 'entreprise/module/888941941-2021', 21, '2021-08-15 13:12:33', 'fa fa-book', 'Vous avez peut être raté un module'),
(165, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 8, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(166, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 9, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(168, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 18, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(169, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 19, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(170, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 20, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(171, 'Bonjour!  dembo apoline vient d\'ajouter un module Digital Marketing', 'entreprise/module/1702427581-2021', 21, '2021-08-15 17:17:22', 'fa fa-book', 'Vous avez peut être raté un module'),
(172, 'cubaka mulume vient de payer 10$', 'admin/paiement_normale', 7, '2021-08-20 16:41:55', 'fa fa-bell', 'nouveau paiement'),
(173, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 8, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(174, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 9, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(176, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 18, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(177, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 19, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(178, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 20, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(179, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 21, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(180, 'Bonjour!  Lucien ujn vient d\'ajouter un module modulen 1', 'entreprise/module/561795079-2021', 24, '2021-08-20 17:26:04', 'fa fa-book', 'Vous avez peut être raté un module'),
(181, 'patrona boss vient d\'ajouter un module ', 'admin/inscri_formation/', 7, '2021-08-21 18:35:38', 'fa fa-compass', 'Nouvelle inscription à la formation'),
(183, ' vient d\'ajouter un module ', 'admin/inscri_formation/', 7, '2021-08-22 10:36:52', 'fa fa-compass', 'Nouvelle inscription à la formation'),
(184, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'entreprise/joinmetting/https://getbootstrap.com/docs/4.0/components/modal/', 24, '2021-09-14 19:25:03', 'fa fa-video', 'Bonjour  patrona  vous venez d\'être sélectionné(e) dans une conférence'),
(186, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://getbootstrap.com/docs/4.0/components/modal/', 12, '2021-09-14 19:29:56', 'fa fa-video', 'Bonjour  kasumba kipundula vous venez d\'être sélectionné(e) dans une conférence'),
(187, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://meet.jit.si/CHlNjzWxlGzFTnIhxDUujD5Gu8hHbi', 14, '2021-09-14 20:42:04', 'fa fa-video', 'Bonjour  dembo apoline vous venez d\'être sélectionné(e) dans une conférence'),
(188, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://meet.jit.si/CHlNjzWxlGzFTnIhxDUujD5Gu8hHbi', 12, '2021-09-14 20:42:04', 'fa fa-video', 'Bonjour  kasumba kipundula vous venez d\'être sélectionné(e) dans une conférence'),
(192, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://meet.jit.si/FzPegMWzfxO0qfhKsZ3w0ZxFbYBqqM', 15, '2021-09-15 10:31:46', 'fa fa-video', 'Bonjour  Benit vous venez d\'être sélectionné(e) dans une conférence'),
(198, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'comptable/joinmetting/https://meet.jit.si/FzPegMWzfxO0qfhKsZ3w0ZxFbYBqqM', 22, '2021-09-15 12:15:50', 'fa fa-video', 'Bonjour  Comptable joel vous venez d\'être sélectionné(e) dans une conférence'),
(199, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'entreprise/joinmetting/https://meet.jit.si/FzPegMWzfxO0qfhKsZ3w0ZxFbYBqqM', 13, '2021-09-15 12:20:39', 'fa fa-video', 'Bonjour  mikah kalume vous venez d\'être sélectionné(e) dans une conférence'),
(200, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'entreprise/joinmetting/https://meet.jit.si/0SbVQksXUCw047z5gjTIitmkigZsv2', 13, '2021-09-16 14:47:37', 'fa fa-video', 'Bonjour  mikah kalume vous venez d\'être sélectionné(e) dans une conférence'),
(201, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'entreprise/joinmetting/https://meet.jit.si/nFt7B6VuXRdjN7M4PBmDoJ56A4ayfV', 13, '2021-09-19 12:01:51', 'fa fa-video', 'Bonjour  mikah kalume vous venez d\'être sélectionné(e) dans une conférence'),
(202, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://meet.jit.si/3VCth5VJMEdE23bToXoNTtYsv4HfYg', 16, '2021-09-20 15:19:21', 'fa fa-video', 'Bonjour  Lucien ujn vous venez d\'être sélectionné(e) dans une conférence'),
(203, 'sumaili shabani Vient de vous ajouter pour faire part dans une conférence', 'user/joinmetting/https://meet.jit.si/3VCth5VJMEdE23bToXoNTtYsv4HfYg', 11, '2021-09-20 15:19:21', 'fa fa-video', 'Bonjour  strong abdiel vous venez d\'être sélectionné(e) dans une conférence'),
(204, 'Coach dembo apoline Vient de corriger votre busness model canavas dans la colonne:solution', 'entreprise/canavas', 9, '2022-01-08 11:33:12', 'fa fa-tasks', 'Nouvelle correction');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES
(99, 22, '2021-08-04 13:27:35'),
(115, 23, '2021-08-11 17:52:08'),
(123, 16, '2022-01-08 11:46:09');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
  `motif` text,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `codeFacture` varchar(300) DEFAULT NULL,
  `etat_paiement` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`, `codeFacture`, `etat_paiement`) VALUES
(1, 13, '2021-08-05', 30, 'airtel money', '12', '2021-08-05 10:30:31', '91555635', 1),
(2, 8, '2021-07-14', 30, 'm-pesa', '233545gtr2w', '2021-07-14 10:30:43', '485615596', 1),
(3, 13, '2021-08-05', 12, 'airtel money', 'Gty234', '2021-08-05 10:30:43', '1289236296', 1),
(4, 9, '2021-08-07', 25, 'paiement loyer', '510d3371a1c8c786c553adf0f3a26dc2', '2021-08-07 11:58:19', 'cfa0860e83a4c3a763a7e62d825349f7', 1),
(5, 8, '2021-08-07', 30, 'paiement chaise', '510d3371a1c8c786c553adf0f3a26dc2', '2021-08-07 14:00:29', 'a8c88a0055f636e4a163a5e3d16adab7', 1),
(6, 9, '2021-08-20', 10, 'paiement incubation', 'b0e4f7e89442b09ac387d14196881808', '2021-08-20 16:41:55', '2723d092b63885e0d7c260cc007e8b9d', 0);

-- --------------------------------------------------------

--
-- Structure de la table `paiement_pading`
--

CREATE TABLE `paiement_pading` (
  `idp` int(11) NOT NULL,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement_pading`
--

INSERT INTO `paiement_pading` (`idp`, `idpersonne`, `date_paie`, `montant`, `motif`, `token`, `created_at`) VALUES
(5, 9, '2021-04-05', 30, 'm-pesa', '233545gtr2w', '2021-04-05 11:27:40');

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `idp` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`idp`, `id_user`, `jour`, `created_at`) VALUES
(62, 9, '2021-11-11', '2021-11-12 10:47:59'),
(63, 8, '2021-11-12', '2021-11-12 10:47:59'),
(64, 9, '2021-11-12', '2021-11-12 12:45:37'),
(66, 8, '2021-11-15', '2021-11-15 15:39:32'),
(67, 9, '2021-11-22', '2021-11-22 15:24:50'),
(68, 8, '2021-11-22', '2021-11-22 15:25:35');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_article`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_article` (
`idart` int(11)
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`idcat` int(11)
,`nom_cat` varchar(300)
,`code` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_commentaire`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_commentaire` (
`idcomment` int(11)
,`idart` int(11)
,`etape1` text
,`etape2` text
,`created_at` datetime
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`image` varchar(300)
,`type` varchar(300)
,`idcat` int(11)
,`nomcat` varchar(300)
);

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
-- Doublure de structure pour la vue `profile_conference`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_conference` (
`idconference` int(11)
,`nom` varchar(300)
,`date_debit` date
,`heure_debit` time
,`date_fin` date
,`heure_fin` time
,`id_user` int(11)
,`created_at` datetime
,`telephone` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
,`email` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_depense`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_depense` (
`iddepense` int(11)
,`type` varchar(300)
,`nomPer` varchar(300)
,`libelle` text
,`motif` text
,`jour` date
,`montant_lettre` varchar(300)
,`montant_nombre` int(11)
,`mois` varchar(300)
,`annee` varchar(300)
,`id_user` int(11)
,`etat_validation` int(11)
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
,`telephone` varchar(300)
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
-- Doublure de structure pour la vue `profile_formation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_formation` (
`idformation` int(11)
,`idedition` int(11)
,`nom` varchar(300)
,`description` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`edition` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_groupe`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_groupe` (
`idgroupe` int(11)
,`code_groupe` varchar(300)
,`id_user` int(11)
,`message` text
,`fichier` varchar(300)
,`created_at` datetime
,`nom` varchar(300)
,`logo` varchar(300)
,`code` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
,`id` int(11)
,`email` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_inscription`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_inscription` (
`idinscription` int(11)
,`nomcomplet` varchar(3000)
,`email` varchar(3000)
,`telephone` varchar(3000)
,`niveau_etude` text
,`domicile` varchar(3000)
,`annee` varchar(300)
,`idf` int(11)
,`created_at` datetime
,`nom` text
,`date_debit` date
,`date_fin` date
,`image` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_invite`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_invite` (
`idinvite` int(11)
,`idconference` int(11)
,`id_user` int(11)
,`link` varchar(300)
,`nom` varchar(300)
,`date_debit` date
,`heure_debit` time
,`date_fin` date
,`heure_fin` time
,`id` int(11)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`image` varchar(300)
,`telephone` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_module`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_module` (
`idmodule` int(11)
,`titre` varchar(300)
,`description` text
,`fichier` varchar(300)
,`annee` varchar(300)
,`id_user` int(11)
,`code` varchar(300)
,`logoImage` varchar(300)
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`telephone` varchar(300)
,`email` varchar(300)
,`image` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_online`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_online` (
`reference` int(11)
,`id_user` int(11)
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
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
-- Doublure de structure pour la vue `profile_presence`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_presence` (
`idp` int(11)
,`id_user` int(11)
,`jour` date
,`created_at` datetime
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`telephone` varchar(300)
,`image` varchar(300)
,`sexe` varchar(30)
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
-- Doublure de structure pour la vue `profile_question`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_question` (
`created_at` datetime
,`idq` int(11)
,`nomq` text
,`idr` int(11)
,`nomr` varchar(300)
,`token` varchar(300)
,`active` int(11)
,`idformation` int(11)
,`idedition` int(11)
,`nom_formation` varchar(300)
,`nom_edition` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_reponse`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_reponse` (
`idrep` int(11)
,`idq` int(11)
,`valeur` varchar(300)
,`created_at` datetime
,`nomq` text
,`idr` int(11)
,`nomr` varchar(300)
,`token` varchar(300)
,`active` int(11)
,`idformation` int(11)
,`idedition` int(11)
,`nom_formation` varchar(300)
,`nom_edition` varchar(300)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`image` varchar(300)
,`telephone` varchar(300)
,`id_user` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_rubrique`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_rubrique` (
`idr` int(11)
,`nomr` varchar(300)
,`token` varchar(300)
,`active` int(11)
,`idformation` int(11)
,`idedition` int(11)
,`nom_formation` varchar(300)
,`nom_edition` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_user`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_user` (
`id` int(11)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`image` varchar(300)
,`telephone` varchar(300)
,`full_adresse` text
,`biographie` text
,`date_nais` date
,`idrole` int(11)
,`sexe` varchar(30)
,`facebook` varchar(900)
,`linkedin` varchar(900)
,`twitter` varchar(900)
,`idposte` int(11)
,`debit_event` date
,`fin_event` date
,`nom` varchar(300)
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
-- Doublure de structure pour la vue `profile_vue`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_vue` (
`idv` int(11)
,`idart` int(11)
,`machine` varchar(20)
,`created_at` datetime
,`nom` varchar(300)
,`image` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`idcat` int(11)
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
  `idee1` text,
  `idee2` text,
  `idee3` text,
  `idee4` text,
  `idee5` text,
  `produit1` text,
  `produit2` text,
  `produit3` text,
  `produit4` text,
  `client1` text,
  `client2` text,
  `client3` text,
  `marche1` text,
  `marche2` text,
  `concurrence1` text,
  `concurrence2` text,
  `moyen1` text,
  `moyen2` text,
  `moyen3` text,
  `moyen4` text,
  `moyen5` text,
  `partenaire1` varchar(30) DEFAULT NULL,
  `partenaire2` text,
  `partenaire3` text,
  `faiblesse1` text,
  `faiblesse2` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `idq` int(11) NOT NULL,
  `nomq` text,
  `idr` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`idq`, `nomq`, `idr`, `created_at`) VALUES
(1, 'Comment avez-vous compris le pitch?', 1, '2021-11-15 20:37:06'),
(2, 'Comment avez-vous compris les gestions pour la présentation  de projet?', 1, '2021-11-15 20:37:06'),
(4, 'Comment avez-vous compris le gestion respiratoire pour la présentation de projet?', 1, '2021-11-15 20:43:01'),
(5, 'Comment avez-vous compris la manière de la présentation de projet?', 1, '2021-11-15 20:43:55'),
(6, 'Comment avez-vous compris la manière de la présentation de projet selon h zouckeberge?', 1, '2021-11-15 20:48:05');

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
(1, 'sumailiroger681@gmail.com', '6b088f69a1478a831c8b1412c117f5e8');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idrep` int(11) NOT NULL,
  `valeur` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `idq` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idrep`, `valeur`, `created_at`, `idq`, `id_user`) VALUES
(1, 'très bien', '2021-11-22 15:58:59', 6, 9),
(2, 'bien', '2021-11-22 16:03:39', 5, 9),
(3, 'très bien', '2021-11-22 16:03:44', 4, 9),
(4, 'très bien', '2021-11-22 16:05:31', 1, 9),
(5, 'bien', '2021-11-22 16:05:35', 2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES
(1, 'Admin', '2021-04-12 16:10:38'),
(2, 'Coach', '2021-04-12 16:12:38'),
(3, 'Start-up', '2021-04-12 13:54:16'),
(4, 'comptable', '2021-08-04 13:13:46');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `idr` int(11) NOT NULL,
  `nomr` varchar(300) DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `idformation` int(11) DEFAULT NULL,
  `idedition` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`idr`, `nomr`, `token`, `idformation`, `idedition`, `active`) VALUES
(1, 'chapitre 1', '0817883541', 2, 5, 1),
(3, 'Hackathon', '346WCommu231', 4, 5, 0),
(4, 'Chapitre 2', '65hackaton2341', 2, 5, 0),
(5, 'chapitre 3', '456dfdf', 2, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `swot`
--

CREATE TABLE `swot` (
  `idswot` int(11) NOT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `sujet` varchar(800) DEFAULT NULL,
  `message` text,
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
  `message` text,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `swot2`
--

INSERT INTO `swot2` (`idswot`, `titre`, `sujet`, `message`, `student_id`) VALUES
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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_category`
--

INSERT INTO `tbl_category` (`idcat`, `nomcat`, `created_at`) VALUES
(5, 'Etablissement ', '2021-03-08 15:49:25'),
(6, 'Société d\'action à responsabilité limité ', '2021-03-08 15:50:14'),
(7, 'Société en commandite simple', '2021-03-08 15:51:17'),
(10, 'Association Sans but lucratif ', '2021-03-30 11:53:22'),
(12, 'Société par action simplifiée', '2021-07-24 14:18:11');

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
  `adresse` text,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text,
  `confidentialite` text,
  `description` text,
  `mission` text,
  `objectif` text,
  `blog` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `token_sms` text,
  `tel3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`, `created_at`, `token_sms`, `tel3`) VALUES
(1, 'hub un jour nouveau', '1139782829.png', '+243818472003', '+243998957572', 'Nous sommes situés dans le quartier Katindo juste derrière l’UNIGOM, aux 136 et 138 avenue La Frontière, commune de Goma.', 'https://web.facebook.com/HUBunjournouveau', 'https://twitter.com/HubUjn', 'https://linkedin.com/', 'info@hub-ujn.org', 'Notre Politique de protection des données personnelles décrit la manière dont #Hub_UJN traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site.\r\n#Hub_UJN accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n•	« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n•	« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n•	« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n•	« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n•	« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n•	« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n•	« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n•	Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'Le Hub UJN est un incubateur qui encadre et aide à structurer des projets entrepreneuriaux en leur offrant un espace de travail motivant, des formations pour le renforcement des capacités, du coaching, mentorat et réseautage, mais aussi des financements pour le développement des projets matures ; Le HUB UJN propose donc des services pour soutenir les créateurs ou les entrepreneurs en vue d’aider ces derniers à transformer une idée innovante en entreprise performante.', 'aider chaque individu à découvrir, développer et déployer son Potentiel ', 'un Congo paisible et prospère où chaque individu fait partie de la solution !', 'Le Hub UJN est un incubateur qui encadre et aide à structurer des projets entrepreneuriaux en leur offrant un espace de travail motivant, des formations pour le renforcement des capacités, du coaching, mentorat et réseautage, mais aussi des financements pour le développement des projets matures ; Le HUB UJN propose donc des services pour soutenir les créateurs ou les entrepreneurs en vue d’aider ces derniers à transformer une idée innovante en entreprise performante.\r\n Pour rappel, l’incubateur est un dispositif de soutien pour porteurs de projets , qui combine la mise en place d’un espace de travail à un programme de formation et d’accompagnement pour la maturation de leurs idées de projets, leur structuration, la mobilisation des ressources financières et le renforcement de leurs capacités techniques pour leur mise en œuvre.\r\nPour qui ?\r\nPour toute personne souhaitant créer une société ou confirmer son choix d’entreprendre, et souhaitant acquérir les compétences nécessaires à la réalisation de son projet.\r\nLes points forts\r\nApproche très opérationnelle et pragmatique de la création d’entreprise innovante\r\n', '2021-05-27 19:52:16', 'EbvEus65ofuFw0lYAEPHTjCj6ZGf', '+243810409151');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_pays`
--

CREATE TABLE `tbl_pays` (
  `idPays` int(11) NOT NULL,
  `nompays` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_pays`
--

INSERT INTO `tbl_pays` (`idPays`, `nompays`, `created_at`) VALUES
(1, 'RDC', '2021-03-30 11:25:53');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_choix`
--

CREATE TABLE `tinfo_choix` (
  `idtinfo_choix` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_choix`
--

INSERT INTO `tinfo_choix` (`idtinfo_choix`, `titre`, `description`, `icone`, `created_at`) VALUES
(1, 'Des meilleurs solutions adaptées à tous vos problèmes', '1. Nous proposons une solution utilisant une technologie simple et efficace\r\n2. une solution efficace et durable\r\n', 'fa-tty', '2021-02-13 09:00:06'),
(2, 'Avec nous le client est roi', '1. Nous prenons avec considération les problèmes des clients, nous les résolvons avec sincérité pour afin les rendre heureux.\r\n2. Résoudre correctement et sans ambiguïté les divers problèmes des clients et notre priorité. ', 'fa-binoculars', '2021-02-13 09:06:37'),
(3, 'Promouvoir le développement de la jeunesse ', 'Nous formons les jeunes en les donnant les notions de base en informatique générale, quelque soit en génie logiciel, en entrepreneuriat, digital marketing? juste pour contribuer à l\'émergence de la technologie. ', 'fa-plug', '2021-02-13 09:15:46'),
(4, 'intermédiaires entre créateurs d’entreprise et étudiants', 'En effet, pour favoriser le renforcement des compétences, les incubateurs rapprochent des créateurs d’entreprises ET des étudiants qui se sont spécialisés dans des domaines tels que le design, la communication, le développement et plus globalement le numérique. “Ces synergies permettent aux créateurs de compter sur les énergies et la compétence des étudiants, quand ces derniers en profitent pour mettre en application leur formation et renforcer leur carnet d’adresses. C’est du win-win”, affirme Guillaume Bardèche. ', 'fa-twitch', '2021-02-13 09:20:20');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_personnel`
--

CREATE TABLE `tinfo_personnel` (
  `idtinfo_personnel` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_personnel`
--

INSERT INTO `tinfo_personnel` (`idtinfo_personnel`, `titre`, `description`, `icone`, `created_at`) VALUES
(1, 'DIRECTEURS DE HUB', 'Des professionnels de l\'innovation avec un réseau long comme le bras pour t\'aider à développer ton projet dans les meilleures conditions.', 'fa-tag', '2021-02-12 15:17:44'),
(2, 'PRODUCT MANAGER', 'Le gardien de ton produit, il va t\'aider à le développer, et s\'assurer de son bon fonctionnement mais aussi faire attention à ce qu\'il corresponde bien aux besoins de tes utilisateurs.', 'fa-hacker-news', '2021-02-12 15:29:30'),
(3, 'STARTUPS MANAGER', 'Ton guide tout au long de ton incubation, il t\'aidera à affiner ta proposition de valeur et à structurer ton parcours pour accéder vite et bien au marché.', 'fa-wechat', '2021-02-12 15:36:30');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_service`
--

CREATE TABLE `tinfo_service` (
  `idtinfo_service` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_service`
--

INSERT INTO `tinfo_service` (`idtinfo_service`, `titre`, `description`, `image`, `created_at`) VALUES
(1, 'TEST DU PRODUIT', 'Pars à la rencontre de ton marché, fait ta preuve de concept et commence à faire grandir ta base d\'utilisateurs.', '2121426135.png', '2021-02-12 18:05:01'),
(2, 'DÉVELOPPEMENT DU PRODUIT', 'On t\'accompagne à définir ton premier produit et on t\'aide à le développer de la meilleure des manières en un minimum de temps.', '1759953702.png', '2021-02-13 08:12:27'),
(3, 'CRÉATION DE LA SOCIÉTÉ', 'Un parcours simplifié pour créer sa société, on se charge de presque tout avec le GUCE. Tu choisis tes partenaires, et c\'est parti !', '1232947282.png', '2021-02-13 08:17:06'),
(4, 'STRUCTURATION DE L\'IDÉE', 'Trouver sa proposition de valeur, définir son positionnement, ses cibles, son marché.', '1378855113.png', '2021-02-13 08:27:07'),
(7, 'PRÉPARATION À LA VENTE', 'Prépare ta recherche de clients (outils, argumentaires, etc...), démarche-les et signe des contrats.', '1540813419.png', '2021-07-29 09:23:40'),
(8, 'ACCOMPAGNEMENT AU FINANCEMENT', 'On t\'accompagne à estimer tes besoins de financement et on t\'aide à structurer tes dossiers pour les obtenir.', '373405259.png', '2021-07-29 09:24:03');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_techno`
--

CREATE TABLE `tinfo_techno` (
  `idtinfo_techno` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_techno`
--

INSERT INTO `tinfo_techno` (`idtinfo_techno`, `titre`, `icone`, `created_at`) VALUES
(1, 'Développement des applications web avec vuejs', 'fa-twitch', '2021-02-13 09:50:56'),
(2, 'Développement des applications web avec reactjs', 'fa-yelp', '2021-02-13 09:51:36'),
(3, 'Développement des applications web avec laravel', 'fa-code', '2021-02-13 09:52:00'),
(4, 'Développement des applications web avec codeigniter', 'fa-dribbble', '2021-02-13 09:52:45'),
(5, 'Développement des applications mobiles gros plateformes avec react native', 'fa-android', '2021-02-13 09:54:48'),
(6, 'Développement des applications modernes sous diverses gestions: E-commerce, university management...', 'fa-windows', '2021-02-13 09:56:53');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_user`
--

CREATE TABLE `tinfo_user` (
  `idtinfo_user` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `poste` varchar(300) DEFAULT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `bio` text,
  `cv` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_user`
--

INSERT INTO `tinfo_user` (`idtinfo_user`, `first_name`, `last_name`, `email`, `image`, `telephone`, `poste`, `sexe`, `facebook`, `linkedin`, `twitter`, `created_at`, `bio`, `cv`) VALUES
(1, 'Chantal', 'Agisha', 'chanty@gmail.com', '791468289.jpg', '+243976626364', 'Réceptionniste', 'F', '', '', '', '2021-02-13 12:02:45', '', NULL),
(2, 'Othniel', 'pilipili', 'pilipili@gmail.com', '862731065.png', '+447441446825', 'Responsable académie d\'innovation cryptnail', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-02-13 12:06:10', NULL, NULL),
(4, 'Lucien', 'Azmayawa', 'luciena@unjournouveau.org', '724672421.jpg', '+243998957572', 'coach en entrepreneuriat ', 'M', 'https://www.facebook.com/lucien.azmayawa/', '', '', '2021-02-13 12:12:20', 'Lucien est Coach et Formateur en Entrepreneuriat au sein de l’incubateur UN JOUR NOUVEAU depuis presque 2 ans.\r\n\r\nAssistant du Hub Manager, il est aussi entrepreneur fondateur de la plate-forme Jusqu’à ce que CA MARCHE qui intervient dans le coaching en Développement personnel et la Motivation, Fondateur de la startup BAMBINOBOSS.COM, Co-fondateur et Directeur chez FIRST CHOICE,… Lucien a accompagné plusieurs entrepreneurs dans la création et le développement de leurs entreprises au sein de Un Jour Nouveau depuis presque 5 ans.', '621005403.pdf'),
(5, 'Alain', 'Sanzimwami', 'alains@unjournouveau.org', '389187686.jpg', '+243990224415', 'Coach chargé des affaires juridiques', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-02-22 11:12:39', NULL, NULL),
(7, 'Bernard Malaba', 'Tshienda', 'bernardm@unjournouveau.org', '1503791236.jpg', '+243818472003', 'Directeur général délégué et Hub Manager', 'M', 'https://web.facebook.com/bernard.m.tshienda  ', 'https://www.linkedin.com/in/bernard-malaba-tshienda-3905575a/  ', 'https://twitter.com/bmtshienda', '2021-07-24 14:27:54', 'Bernard Malaba Tshienda\r\nDirecteur Général Délégué Holding Un Jour Nouveau SASU et Hub Manager de l\'incubateur Hub UJN.\r\n\r\nT h e E s s e n c e o f L e a d e r s h i p“A true leader has the confidence to stand alone, the courage tomake tough decisions, and the compassion to listen to the needs ofothers.He does not set out to be a leader but becomes one by the quality ofhis actions andthe integrity of his intent.In the end, leaders are much like eagles ... they don’t flock; you findthem one at a time. ”Unknown author', '853610796.pdf'),
(8, 'Christian', 'wasso', 'christanw@unjournouveau.org', '373537655.jpg', '+243973002162', 'coach chargé du numérique', 'M', '', '', '', '2021-09-13 08:18:41', NULL, NULL),
(9, 'Aboubakar', 'wandyo', 'abou@gmail.com', '90972002.jpg', '+243995765039', 'Logisticien', 'M', '', '', '', '2021-09-13 08:20:49', NULL, NULL),
(10, 'Ma fille', 'soeur', 'madeleine@gmail.com', '1725750167.jpg', '+243810409151', 'coach mentor', 'F', '', '', '', '2021-09-13 08:21:37', NULL, NULL),
(11, 'Maggu', 'Rachel', 'maggur@unjournouveau.org', '535577186.png', '+243856458236', 'Responsable Académie de leadership', 'F', '', '', '', '2021-09-13 08:22:38', NULL, NULL),
(12, 'Augustin  Kambale', 'Malikwisha', 'alisawa@gmail.com', '1757010520.png', '+243990630777', 'Responsable adjoint de l\'académie leadership ', 'M', '', '', '', '2021-09-13 08:23:21', '', NULL),
(13, 'Bertin ', 'Akilimali', 'bertin2batender@gmail.com', '1678875816.png', '+243976278627', 'ASSISTANT COMPTABLE ET FINANCIER', '', 'https://www.facebook.com/bertin.batenderana', 'https://www.linkedin.com/in/bertin-akilimali-279b50157/', 'https://twitter.com/BertinAkilimali', '2021-09-16 16:25:36', 'Bertin AKILIMALI BATENDERANA travaille à la HOLDING UN JOUR NOUVEAU SASU Goma depuis près d’un an en tant que Comptable des Startups et Assistant Financier. Il intervient dans toutes matières d’ordre financier et comptable au sein de cette institution afin d’aider les Startups y œuvrant de booster leurs finances ainsi que d’avoir une situation comptable qui soit à jour.', '784772872.pdf'),
(14, 'Merveille  Nantamya', 'Lunjwire', 'merveillelunjwire@gmail.com', '110543412.png', '+243 991 169 208', 'Réceptionniste ', 'F', '', '', '', '2021-09-16 16:31:40', NULL, NULL);

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
  `full_adresse` text,
  `biographie` text,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `idposte` int(11) DEFAULT '1',
  `debit_event` date DEFAULT NULL,
  `fin_event` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idposte`, `debit_event`, `fin_event`) VALUES
(7, 'sumaili shabani', 'roger patrona', 'sumailiroger681@gmail.com', '2072243614.png', '+243817883541', 'tmk goma avenue mushanganya n°59', 'Développeur et entrepreneur en temps plein!                                                      ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1, '2021-05-03', '2021-06-03'),
(8, 'wilson vulembere', 'Antoine', 'admin@gmail.com', '1754247350.jpg', '+243817883541', 'Quartier office 2', 'développeur de logiciels', '1995-05-26', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-07-03', '2021-08-02'),
(9, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '1389563584.jpg', '0998765432', 'Tmk goma', '                  	Developpeur fullstack                  ', '1000-09-19', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-06-03', '2021-06-03'),
(11, 'strong abdiel', 'strong', 'strong@gmail.com', '1995908381.JPG', '0998765432', 'Office 2', 'Brigadier valant', '1997-05-26', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '1125004339.JPG', '+243810409151', 'Quartier birere', NULL, '1999-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(13, 'mikah kalume', 'kitoko', 'mikah@gmail.com', '504914652.jpg', '+243810409151', 'quartier katoyi avenue konde', '                  	développeur web                  ', '2021-04-13', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-10-01', '2021-10-31'),
(14, 'dembo apoline', 'pataule', 'apoline345@gmail.com', '343503402.jpg', '+243970963642', 'Goma quartier office', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(15, 'Benit', 'Bahati', 'joel@gmail.com', '997250263.png', '+243995598891', 'Goma quartier katoyi', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(16, 'Lucien ujn', 'coach', 'yuma@gmail.com', '1737092042.jpg', '+243998957572', 'quartier katoyi Avenue konde', 'My life, It <b>never</b> goas <b>slowly</b>!                                    ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(18, 'useni uwonda', 'Emanuel', 'useni@gmail.com', '2120437570.jpg', '+243990084881', 'Le gars normal', NULL, '1992-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/', 1, NULL, NULL),
(19, 'madeleine stephanie', 'lola', 'madeleine@gmail.com', '520932141.jpg', '+243990084881', 'My life', NULL, '2021-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, '', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(20, 'kakese pandamiti', NULL, 'kakese@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 3, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(21, 's feza fataki', 'sarah', 'feza@gmail.com', 'icone-user.png', '+243827915399', 'my life', NULL, '1999-07-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(22, 'Comptable joel', 'jonathan', 'comptable@gmail.com', '135174722.jpg', '+243970267037', 'Comptable financier', 'Financier', '2021-08-04', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(23, 'Comptable jenvier', 'jeremie', 'comptable_jenvier@gmail.com', 'icone-user.png', '+243978451020', 'Compte principal', '                  	LA finance ce mois                  ', '1995-08-11', 'e10adc3949ba59abbe56e057f20f883e', 4, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(24, 'patrona ', 'shabani sumaili', 'patrona@gmail.com', 'icone-user.png', '+243970524665', 'Dream', NULL, '1998-08-20', 'e10adc3949ba59abbe56e057f20f883e', 3, '', '', '', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idv` int(11) NOT NULL,
  `nomv` varchar(300) DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
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
-- Structure de la table `vues`
--

CREATE TABLE `vues` (
  `idv` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `machine` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vues`
--

INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES
(1, 91, '169.159.215.20', '2021-08-21 15:55:33'),
(2, 85, '169.159.215.20', '2021-08-21 15:55:44'),
(3, 89, '169.159.215.20', '2021-08-21 15:58:59'),
(4, NULL, '169.159.215.20', '2021-08-21 16:09:42');

-- --------------------------------------------------------

--
-- Structure de la vue `profile_article`
--
DROP TABLE IF EXISTS `profile_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_article`  AS  select `article`.`idart` AS `idart`,`article`.`nom` AS `nom`,`article`.`description` AS `description`,`article`.`lien` AS `lien`,`article`.`type` AS `type`,`article`.`image` AS `image`,`article`.`created_at` AS `created_at`,`article`.`idcat` AS `idcat`,`category`.`nom` AS `nom_cat`,`article`.`code` AS `code` from (`article` join `category` on((`article`.`idcat` = `category`.`idcat`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_commentaire`
--
DROP TABLE IF EXISTS `profile_commentaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_commentaire`  AS  select `commentaire`.`idcomment` AS `idcomment`,`commentaire`.`idart` AS `idart`,`commentaire`.`etape1` AS `etape1`,`commentaire`.`etape2` AS `etape2`,`commentaire`.`created_at` AS `created_at`,`article`.`nom` AS `nom`,`article`.`description` AS `description`,`article`.`lien` AS `lien`,`article`.`image` AS `image`,`article`.`type` AS `type`,`article`.`idcat` AS `idcat`,`category`.`nom` AS `nomcat` from ((`commentaire` join `article` on((`article`.`idart` = `commentaire`.`idart`))) join `category` on((`category`.`idcat` = `article`.`idcat`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_compte_rendu`
--
DROP TABLE IF EXISTS `profile_compte_rendu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_compte_rendu`  AS  select `compterendu`.`idcompt` AS `idcompt`,`compterendu`.`titre` AS `titre`,`compterendu`.`milieu` AS `milieu`,`compterendu`.`jour` AS `jour`,`compterendu`.`fichier` AS `fichier`,`compterendu`.`commentaire` AS `commentaire`,`compterendu`.`id_user` AS `id_user`,`compterendu`.`codeP` AS `codeP`,`compterendu`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image` from (`compterendu` join `users` on((`compterendu`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_conference`
--
DROP TABLE IF EXISTS `profile_conference`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_conference`  AS  select `conference`.`idconference` AS `idconference`,`conference`.`nom` AS `nom`,`conference`.`date_debit` AS `date_debit`,`conference`.`heure_debit` AS `heure_debit`,`conference`.`date_fin` AS `date_fin`,`conference`.`heure_fin` AS `heure_fin`,`conference`.`id_user` AS `id_user`,`conference`.`created_at` AS `created_at`,`users`.`telephone` AS `telephone`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`email` AS `email` from (`conference` join `users` on((`conference`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_depense`
--
DROP TABLE IF EXISTS `profile_depense`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_depense`  AS  select `depense`.`iddepense` AS `iddepense`,`depense`.`type` AS `type`,`depense`.`nomPer` AS `nomPer`,`depense`.`libelle` AS `libelle`,`depense`.`motif` AS `motif`,`depense`.`jour` AS `jour`,`depense`.`montant_lettre` AS `montant_lettre`,`depense`.`montant_nombre` AS `montant_nombre`,`depense`.`mois` AS `mois`,`depense`.`annee` AS `annee`,`depense`.`id_user` AS `id_user`,`depense`.`etat_validation` AS `etat_validation`,`depense`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone` from (`depense` join `users` on((`depense`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_entreprise`
--
DROP TABLE IF EXISTS `profile_entreprise`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_entreprise`  AS  select `entreprise`.`identrep` AS `identrep`,`entreprise`.`ceo` AS `ceo`,`entreprise`.`nom` AS `nom`,`entreprise`.`description` AS `description`,`entreprise`.`idPays` AS `idPays`,`entreprise`.`idp` AS `idp`,`entreprise`.`idv` AS `idv`,`entreprise`.`idcat` AS `idcat`,`entreprise`.`typeEntrep` AS `typeEntrep`,`entreprise`.`nombreEmploye` AS `nombreEmploye`,`entreprise`.`siteweb` AS `siteweb`,`entreprise`.`facebook` AS `facebook`,`entreprise`.`twitter` AS `twitter`,`entreprise`.`linkedin` AS `linkedin`,`entreprise`.`logo` AS `logo`,`tbl_category`.`nomcat` AS `nomcat`,`tbl_pays`.`nompays` AS `nompays`,`province`.`nomp` AS `nomp`,`ville`.`nomv` AS `nomv`,`users`.`image` AS `image`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone` from (((((`entreprise` join `tbl_pays` on((`entreprise`.`idPays` = `tbl_pays`.`idPays`))) join `province` on((`entreprise`.`idp` = `province`.`idp`))) join `ville` on((`entreprise`.`idv` = `ville`.`idv`))) join `users` on((`entreprise`.`ceo` = `users`.`id`))) join `tbl_category` on((`entreprise`.`idcat` = `tbl_category`.`idcat`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_formation`
--
DROP TABLE IF EXISTS `profile_formation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_formation`  AS  select `formation`.`idformation` AS `idformation`,`formation`.`idedition` AS `idedition`,`formation`.`nom` AS `nom`,`formation`.`description` AS `description`,`formation`.`image` AS `image`,`formation`.`created_at` AS `created_at`,`edition`.`nom` AS `edition` from (`formation` join `edition` on((`formation`.`idedition` = `edition`.`idedition`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_groupe`
--
DROP TABLE IF EXISTS `profile_groupe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_groupe`  AS  select `groupe`.`idgroupe` AS `idgroupe`,`groupe`.`code_groupe` AS `code_groupe`,`groupe`.`id_user` AS `id_user`,`groupe`.`message` AS `message`,`groupe`.`fichier` AS `fichier`,`groupe`.`created_at` AS `created_at`,`groupe_chat`.`nom` AS `nom`,`groupe_chat`.`image` AS `logo`,`groupe_chat`.`code` AS `code`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`id` AS `id`,`users`.`email` AS `email` from ((`groupe` join `groupe_chat` on((`groupe`.`code_groupe` = `groupe_chat`.`code`))) join `users` on((`groupe`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_inscription`
--
DROP TABLE IF EXISTS `profile_inscription`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_inscription`  AS  select `inscription_formations`.`idinscription` AS `idinscription`,`inscription_formations`.`nomcomplet` AS `nomcomplet`,`inscription_formations`.`email` AS `email`,`inscription_formations`.`telephone` AS `telephone`,`inscription_formations`.`niveau_etude` AS `niveau_etude`,`inscription_formations`.`domicile` AS `domicile`,`inscription_formations`.`annee` AS `annee`,`formations`.`idf` AS `idf`,`inscription_formations`.`created_at` AS `created_at`,`formations`.`nom` AS `nom`,`formations`.`date_debit` AS `date_debit`,`formations`.`date_fin` AS `date_fin`,`formations`.`image` AS `image` from (`inscription_formations` join `formations` on((`inscription_formations`.`idf` = `formations`.`idf`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_invite`
--
DROP TABLE IF EXISTS `profile_invite`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_invite`  AS  select `invite`.`idinvite` AS `idinvite`,`invite`.`idconference` AS `idconference`,`invite`.`id_user` AS `id_user`,`invite`.`link` AS `link`,`conference`.`nom` AS `nom`,`conference`.`date_debit` AS `date_debit`,`conference`.`heure_debit` AS `heure_debit`,`conference`.`date_fin` AS `date_fin`,`conference`.`heure_fin` AS `heure_fin`,`users`.`id` AS `id`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone` from ((`invite` join `conference` on((`invite`.`idconference` = `conference`.`idconference`))) join `users` on((`invite`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_module`
--
DROP TABLE IF EXISTS `profile_module`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_module`  AS  select `module`.`idmodule` AS `idmodule`,`module`.`titre` AS `titre`,`module`.`description` AS `description`,`module`.`fichier` AS `fichier`,`module`.`annee` AS `annee`,`module`.`id_user` AS `id_user`,`module`.`code` AS `code`,`module`.`logoImage` AS `logoImage`,`module`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`telephone` AS `telephone`,`users`.`email` AS `email`,`users`.`image` AS `image` from (`module` join `users` on((`module`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_online`
--
DROP TABLE IF EXISTS `profile_online`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_online`  AS  select `online`.`id` AS `reference`,`online`.`id_user` AS `id_user`,`online`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image` from (`online` join `users` on((`online`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement`
--
DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement`  AS  select `paiement`.`idp` AS `idp`,`paiement`.`idpersonne` AS `idpersonne`,`paiement`.`date_paie` AS `date_paie`,`paiement`.`montant` AS `montant`,`paiement`.`motif` AS `motif`,`paiement`.`token` AS `token`,`paiement`.`created_at` AS `created_at`,`paiement`.`codeFacture` AS `codeFacture`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`idrole` AS `idrole`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`paiement`.`etat_paiement` AS `etat_paiement` from ((`paiement` join `users` on((`paiement`.`idpersonne` = `users`.`id`))) join `entreprise` on((`users`.`id` = `entreprise`.`ceo`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement_padding`
--
DROP TABLE IF EXISTS `profile_paiement_padding`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement_padding`  AS  select `paiement_pading`.`idp` AS `idp`,`paiement_pading`.`idpersonne` AS `idpersonne`,`paiement_pading`.`date_paie` AS `date_paie`,`paiement_pading`.`montant` AS `montant`,`paiement_pading`.`token` AS `token`,`paiement_pading`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logo`,`paiement_pading`.`motif` AS `motif` from ((`paiement_pading` join `users` on((`paiement_pading`.`idpersonne` = `users`.`id`))) join `entreprise` on((`paiement_pading`.`idpersonne` = `entreprise`.`ceo`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_presence`
--
DROP TABLE IF EXISTS `profile_presence`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_presence`  AS  select `presence`.`idp` AS `idp`,`presence`.`id_user` AS `id_user`,`presence`.`jour` AS `jour`,`presence`.`created_at` AS `created_at`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image`,`users`.`sexe` AS `sexe` from (`presence` join `users` on((`presence`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_projet`
--
DROP TABLE IF EXISTS `profile_projet`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_projet`  AS  select `projet`.`idprojet` AS `idprojet`,`projet`.`student_id` AS `student_id`,`projet`.`nomP` AS `nomP`,`projet`.`logoP` AS `logoP`,`projet`.`idee1` AS `idee1`,`projet`.`idee2` AS `idee2`,`projet`.`idee3` AS `idee3`,`projet`.`idee4` AS `idee4`,`projet`.`idee5` AS `idee5`,`projet`.`produit1` AS `produit1`,`projet`.`produit2` AS `produit2`,`projet`.`produit3` AS `produit3`,`projet`.`produit4` AS `produit4`,`projet`.`client1` AS `client1`,`projet`.`client2` AS `client2`,`projet`.`client3` AS `client3`,`projet`.`marche1` AS `marche1`,`projet`.`marche2` AS `marche2`,`projet`.`concurrence1` AS `concurrence1`,`projet`.`concurrence2` AS `concurrence2`,`projet`.`moyen1` AS `moyen1`,`projet`.`moyen2` AS `moyen2`,`projet`.`moyen3` AS `moyen3`,`projet`.`moyen4` AS `moyen4`,`projet`.`moyen5` AS `moyen5`,`projet`.`partenaire1` AS `partenaire1`,`projet`.`partenaire2` AS `partenaire2`,`projet`.`partenaire3` AS `partenaire3`,`projet`.`faiblesse1` AS `faiblesse1`,`projet`.`faiblesse2` AS `faiblesse2`,`projet`.`codeP` AS `codeP`,`projet`.`fichierzip` AS `fichierzip`,`projet`.`created_at` AS `created_at`,`entreprise`.`identrep` AS `identrep`,`entreprise`.`ceo` AS `ceo`,`entreprise`.`nom` AS `nom`,`entreprise`.`logo` AS `logoEntreprise`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`telephone` AS `telephone`,`users`.`image` AS `image`,`users`.`email` AS `email` from ((`projet` join `entreprise` on((`projet`.`student_id` = `entreprise`.`ceo`))) join `users` on((`entreprise`.`ceo` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_question`
--
DROP TABLE IF EXISTS `profile_question`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_question`  AS  select `question`.`created_at` AS `created_at`,`question`.`idq` AS `idq`,`question`.`nomq` AS `nomq`,`question`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from (((`question` join `rubrique` on((`question`.`idr` = `rubrique`.`idr`))) join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_reponse`
--
DROP TABLE IF EXISTS `profile_reponse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_reponse`  AS  select `reponse`.`idrep` AS `idrep`,`reponse`.`idq` AS `idq`,`reponse`.`valeur` AS `valeur`,`reponse`.`created_at` AS `created_at`,`question`.`nomq` AS `nomq`,`question`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`reponse`.`id_user` AS `id_user` from (((((`reponse` join `question` on((`reponse`.`idq` = `question`.`idq`))) join `rubrique` on((`question`.`idr` = `rubrique`.`idr`))) join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`))) join `users` on((`reponse`.`id_user` = `users`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_rubrique`
--
DROP TABLE IF EXISTS `profile_rubrique`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_rubrique`  AS  select `rubrique`.`idr` AS `idr`,`rubrique`.`nomr` AS `nomr`,`rubrique`.`token` AS `token`,`rubrique`.`active` AS `active`,`rubrique`.`idformation` AS `idformation`,`rubrique`.`idedition` AS `idedition`,`formation`.`nom` AS `nom_formation`,`edition`.`nom` AS `nom_edition` from ((`rubrique` join `formation` on((`formation`.`idformation` = `rubrique`.`idformation`))) join `edition` on((`edition`.`idedition` = `rubrique`.`idedition`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_user`
--
DROP TABLE IF EXISTS `profile_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_user`  AS  select `users`.`id` AS `id`,`users`.`first_name` AS `first_name`,`users`.`last_name` AS `last_name`,`users`.`email` AS `email`,`users`.`image` AS `image`,`users`.`telephone` AS `telephone`,`users`.`full_adresse` AS `full_adresse`,`users`.`biographie` AS `biographie`,`users`.`date_nais` AS `date_nais`,`users`.`idrole` AS `idrole`,`users`.`sexe` AS `sexe`,`users`.`facebook` AS `facebook`,`users`.`linkedin` AS `linkedin`,`users`.`twitter` AS `twitter`,`users`.`idposte` AS `idposte`,`users`.`debit_event` AS `debit_event`,`users`.`fin_event` AS `fin_event`,`role`.`nom` AS `nom` from (`users` join `role` on((`users`.`idrole` = `role`.`idrole`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_ville`
--
DROP TABLE IF EXISTS `profile_ville`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_ville`  AS  select `ville`.`idv` AS `idv`,`ville`.`nomv` AS `nomv`,`province`.`nomp` AS `nomp`,`ville`.`created_at` AS `created_at`,`ville`.`idp` AS `idp` from (`ville` join `province` on((`ville`.`idp` = `province`.`idp`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_vue`
--
DROP TABLE IF EXISTS `profile_vue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_vue`  AS  select `vues`.`idv` AS `idv`,`vues`.`idart` AS `idart`,`vues`.`machine` AS `machine`,`vues`.`created_at` AS `created_at`,`article`.`nom` AS `nom`,`article`.`image` AS `image`,`article`.`description` AS `description`,`article`.`lien` AS `lien`,`article`.`type` AS `type`,`article`.`idcat` AS `idcat` from (`vues` join `article` on((`article`.`idart` = `vues`.`idart`))) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idart`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`idc`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `idart` (`idart`);

--
-- Index pour la table `compterendu`
--
ALTER TABLE `compterendu`
  ADD PRIMARY KEY (`idcompt`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`idconference`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`iddepense`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `edition`
--
ALTER TABLE `edition`
  ADD PRIMARY KEY (`idedition`);

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
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idformation`),
  ADD KEY `idedition` (`idedition`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`idf`);

--
-- Index pour la table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idgalery`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `galery2`
--
ALTER TABLE `galery2`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idgroupe`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `groupe_chat`
--
ALTER TABLE `groupe_chat`
  ADD PRIMARY KEY (`idgroupe`),
  ADD UNIQUE KEY `unique_personne_par_groupe` (`code`,`id_users`) USING HASH,
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `images2`
--
ALTER TABLE `images2`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `inscription_formations`
--
ALTER TABLE `inscription_formations`
  ADD PRIMARY KEY (`idinscription`),
  ADD KEY `idf` (`idf`);

--
-- Index pour la table `invite`
--
ALTER TABLE `invite`
  ADD PRIMARY KEY (`idinvite`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `idconference` (`idconference`);

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
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_recever` (`id_recever`);

--
-- Index pour la table `message_sender`
--
ALTER TABLE `message_sender`
  ADD PRIMARY KEY (`idsms`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`idmodule`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`);

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
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `id_user` (`id_user`);

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
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idq`),
  ADD KEY `idr` (`idr`);

--
-- Index pour la table `recupere`
--
ALTER TABLE `recupere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idrep`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `idq` (`idq`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `idformation` (`idformation`),
  ADD KEY `idedition` (`idedition`);

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
-- Index pour la table `tinfo_choix`
--
ALTER TABLE `tinfo_choix`
  ADD PRIMARY KEY (`idtinfo_choix`);

--
-- Index pour la table `tinfo_personnel`
--
ALTER TABLE `tinfo_personnel`
  ADD PRIMARY KEY (`idtinfo_personnel`);

--
-- Index pour la table `tinfo_service`
--
ALTER TABLE `tinfo_service`
  ADD PRIMARY KEY (`idtinfo_service`);

--
-- Index pour la table `tinfo_techno`
--
ALTER TABLE `tinfo_techno`
  ADD PRIMARY KEY (`idtinfo_techno`);

--
-- Index pour la table `tinfo_user`
--
ALTER TABLE `tinfo_user`
  ADD PRIMARY KEY (`idtinfo_user`);

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
-- Index pour la table `vues`
--
ALTER TABLE `vues`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `idart` (`idart`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `compterendu`
--
ALTER TABLE `compterendu`
  MODIFY `idcompt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `conference`
--
ALTER TABLE `conference`
  MODIFY `idconference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `depense`
--
ALTER TABLE `depense`
  MODIFY `iddepense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `edition`
--
ALTER TABLE `edition`
  MODIFY `idedition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `identrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idformation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `galery`
--
ALTER TABLE `galery`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `galery2`
--
ALTER TABLE `galery2`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idgroupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `groupe_chat`
--
ALTER TABLE `groupe_chat`
  MODIFY `idgroupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `images2`
--
ALTER TABLE `images2`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `inscription_formations`
--
ALTER TABLE `inscription_formations`
  MODIFY `idinscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `invite`
--
ALTER TABLE `invite`
  MODIFY `idinvite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `link_canavas`
--
ALTER TABLE `link_canavas`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `link_canavas2`
--
ALTER TABLE `link_canavas2`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `message_sender`
--
ALTER TABLE `message_sender`
  MODIFY `idsms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `idmodule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

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
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `presence`
--
ALTER TABLE `presence`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `idprojet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `province`
--
ALTER TABLE `province`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `idq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recupere`
--
ALTER TABLE `recupere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `idrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `swot`
--
ALTER TABLE `swot`
  MODIFY `idswot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `swot2`
--
ALTER TABLE `swot2`
  MODIFY `idswot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_pays`
--
ALTER TABLE `tbl_pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tinfo_choix`
--
ALTER TABLE `tinfo_choix`
  MODIFY `idtinfo_choix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tinfo_personnel`
--
ALTER TABLE `tinfo_personnel`
  MODIFY `idtinfo_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tinfo_service`
--
ALTER TABLE `tinfo_service`
  MODIFY `idtinfo_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tinfo_techno`
--
ALTER TABLE `tinfo_techno`
  MODIFY `idtinfo_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tinfo_user`
--
ALTER TABLE `tinfo_user`
  MODIFY `idtinfo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `vues`
--
ALTER TABLE `vues`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;

--
-- Contraintes pour la table `compterendu`
--
ALTER TABLE `compterendu`
  ADD CONSTRAINT `compterendu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `conference`
--
ALTER TABLE `conference`
  ADD CONSTRAINT `conference_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `depense`
--
ALTER TABLE `depense`
  ADD CONSTRAINT `depense_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`idedition`) REFERENCES `edition` (`idedition`) ON DELETE CASCADE;

--
-- Contraintes pour la table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `groupe_chat`
--
ALTER TABLE `groupe_chat`
  ADD CONSTRAINT `groupe_chat_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscription_formations`
--
ALTER TABLE `inscription_formations`
  ADD CONSTRAINT `inscription_formations_ibfk_1` FOREIGN KEY (`idf`) REFERENCES `formations` (`idf`) ON DELETE CASCADE;

--
-- Contraintes pour la table `invite`
--
ALTER TABLE `invite`
  ADD CONSTRAINT `invite_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invite_ibfk_2` FOREIGN KEY (`idconference`) REFERENCES `conference` (`idconference`) ON DELETE CASCADE;

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
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_recever`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `presence_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`idr`) REFERENCES `rubrique` (`idr`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`idq`) REFERENCES `question` (`idq`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD CONSTRAINT `rubrique_ibfk_1` FOREIGN KEY (`idformation`) REFERENCES `formation` (`idformation`) ON DELETE CASCADE,
  ADD CONSTRAINT `rubrique_ibfk_2` FOREIGN KEY (`idedition`) REFERENCES `edition` (`idedition`) ON DELETE CASCADE;

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

--
-- Contraintes pour la table `vues`
--
ALTER TABLE `vues`
  ADD CONSTRAINT `vues_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
