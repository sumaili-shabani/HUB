-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 juil. 2021 à 18:03
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

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `show_liste_message` (IN `connected` INT)  SELECT groupe.idgroupe,code_groupe,id_user,groupe.message,groupe.fichier,groupe.created_at, groupe_chat.nom,groupe_chat.image as           logo,groupe_chat.code, users.first_name,users.last_name,users.image, users.id,users.email 
        FROM groupe INNER JOIN groupe_chat ON groupe.code_groupe=groupe_chat.code INNER JOIN users ON groupe.id_user= users.id  WHERE             groupe.message IS NOT null AND groupe_chat.id_users=connected GROUP BY groupe_chat.code DESC  LIMIT 3$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idart` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
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

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `idc` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`idc`, `image`, `description`, `created_at`) VALUES
(1, '1003725166.png', 'Jeune développeur, Développer pour ton avenir et celui de ton pays!', '2021-07-08 15:29:45'),
(2, '1971651013.png', 'Nous somme là pour former la jeunesse afin de changer le monde par la technologie ', '2021-07-08 15:30:59'),
(4, '1977063246.png', 'nous somme là pour vous!\r\nNous sommes là pour vous secourir sur le plan technologique et résoudre vos soucis au problème de la solution technologique', '2021-07-08 16:02:27');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES
(23, 'Actualité', '2021-07-24 11:17:28'),
(24, 'Evènement', '2021-07-24 11:17:43');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcomment` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etape1` text DEFAULT NULL,
  `etape2` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcomment`, `idart`, `etape1`, `etape2`, `created_at`) VALUES
(19, 92, '	                  &amp;lt;div class=&quot;fb-comments&quot; data-href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771&quot; data-width=&quot;&quot; data-numposts=&quot;5&quot;&amp;gt;&amp;lt;/div&amp;gt;\r\n	              ', '&lt;pre class=&quot;prettyprint _3t10 prettyprinted&quot; style=&quot;padding: 12px; border: none; font-family: Menlo, Consolas, Monaco, monospace; margin-bottom: 0px; white-space: pre-wrap; color: rgb(28, 30, 33); font-size: 14px; background-color: rgb(245, 246, 247);&quot;&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;lt;div&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;class&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;fb-comments&quot;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;data-href&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771&quot;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;data-width&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;&quot;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;data-numposts&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;5&quot;&lt;/span&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;gt;&amp;lt;/div&amp;gt;&lt;/span&gt;&lt;/pre&gt;', '2021-07-24 13:43:47'),
(20, 89, '&lt;pre class=&quot;prettyprint _3t10 prettyprinted&quot; style=&quot;padding: 12px; border: none; font-family: Menlo, Consolas, Monaco, monospace; margin-bottom: 0px; white-space: pre-wrap; color: rgb(28, 30, 33); font-size: 14px; background-color: rgb(245, 246, 247);&quot;&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;lt;div&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;id&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;fb-root&quot;&lt;/span&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;gt;&amp;lt;/div&amp;gt;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt;\r\n&lt;/span&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;lt;script&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;async&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;defer&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;crossorigin&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;anonymous&quot;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;src&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;amp;version=v11.0&amp;amp;appId=301499887887474&amp;amp;autoLogAppEvents=1&quot;&lt;/span&gt;&lt;span class=&quot;pln&quot; style=&quot;color: rgb(0, 0, 0);&quot;&gt; &lt;/span&gt;&lt;span class=&quot;atn&quot; style=&quot;color: rgb(102, 0, 102);&quot;&gt;nonce&lt;/span&gt;&lt;span class=&quot;pun&quot; style=&quot;color: rgb(102, 102, 0);&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;atv&quot; style=&quot;color: rgb(0, 136, 0);&quot;&gt;&quot;qRn3KIJD&quot;&lt;/span&gt;&lt;span class=&quot;tag&quot; style=&quot;color: rgb(0, 0, 136);&quot;&gt;&amp;gt;&amp;lt;/script&amp;gt;&lt;/span&gt;&lt;/pre&gt;&lt;div id=&quot;fb-root&quot; class=&quot; fb_reset&quot;&gt;&lt;div style=&quot;position: absolute; top: -10000px; width: 0px; height: 0px;&quot;&gt;&lt;div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n&lt;script async=&quot;&quot; defer=&quot;&quot; crossorigin=&quot;anonymous&quot; src=&quot;https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;amp;version=v11.0&amp;amp;appId=301499887887474&amp;amp;autoLogAppEvents=1&quot; nonce=&quot;qRn3KIJD&quot;&gt;&lt;/script&gt;', '&lt;p&gt;&amp;lt;div class=&quot;fb-comments&quot; data-href=&quot;https://web.facebook.com/Sant%C3%A9-Plus-Asbl-1189030747790120/photos/4298467260179771&quot; data-width=&quot;&quot; data-numposts=&quot;5&quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;br&gt;&lt;/p&gt;', '2021-07-24 13:44:46'),
(21, 91, '	                  dsdsd\r\n	              ', '	                  sdsds\r\n	              ', '2021-07-24 13:45:37');

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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `sujet` varchar(700) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES
(10, 'sifa abeli', 'mikah@gmail.com', 'j\'aimerai savoir les informations sur...', 'coucou', NULL, '2021-05-15 20:20:04'),
(17, 'Dream of drc', 'info.devtech@gmail.com', 'j\'aimerai savoir les informations sur...', '<p>Bonjour les boss!</p>', NULL, '2021-07-18 13:16:54'),
(18, 'Dream of drc', 'info.devtech@gmail.com', 'my life it never goes swolly', '<p>edffefewfww</p>', '1371301887.png', '2021-07-18 13:24:41');

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
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `idf` int(11) NOT NULL,
  `nom` text DEFAULT NULL,
  `date_debit` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
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
  `created_at` datetime DEFAULT current_timestamp(),
  `url` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galery2`
--

INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES
(24, '123179325.png', '2021-07-24 14:12:04', 'https://www.fidbagraphics.com'),
(25, '1706809692.png', '2021-07-24 14:12:43', NULL),
(26, '889254007.png', '2021-07-24 14:13:01', 'https://santeplusrdc.org/'),
(27, '2050847594.png', '2021-07-24 14:13:25', 'https://www.unicef.org/fr'),
(28, '632676992.jpg', '2021-07-24 14:13:55', 'https://dreamofdrc.com/');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idgroupe` int(11) NOT NULL,
  `code_groupe` longtext DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
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
(26, 'e22ddfeca0', 15, NULL, NULL, '2021-06-24 11:57:04'),
(27, 'e22ddfeca0', 13, 'salut!', NULL, '2021-06-24 11:57:20'),
(30, 'f777212d86', 12, '<p>bonjour!</p>', '602018545.jpg', '2021-06-25 08:20:58'),
(31, 'e22ddfeca0', 7, NULL, NULL, '2021-06-25 08:25:19'),
(32, 'e22ddfeca0', 13, '<p>Bonjour les boss!</p>', NULL, '2021-06-25 17:53:49'),
(33, 'e22ddfeca0', 9, NULL, NULL, '2021-06-25 18:49:37'),
(34, '4274c76f6c', 9, NULL, NULL, '2021-07-16 14:59:09'),
(35, '4274c76f6c', 14, NULL, NULL, '2021-07-16 14:59:09'),
(36, '4274c76f6c', 15, NULL, NULL, '2021-07-16 14:59:09'),
(38, '4274c76f6c', 7, '	                  &lt;p&gt;bonjour le monde!&lt;/p&gt;\r\n	              ', NULL, '2021-07-16 15:00:30');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_chat`
--

CREATE TABLE `groupe_chat` (
  `idgroupe` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 0,
  `code` longtext DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe_chat`
--

INSERT INTO `groupe_chat` (`idgroupe`, `nom`, `id_users`, `etat`, `code`, `image`) VALUES
(1, 'hub formation', 7, 0, 'f777212d86', '2102877479.png'),
(2, 'L\'art de pitch', 7, 0, 'e922db8817', '1438449233.png'),
(3, 'aushalange', 7, 0, 'e22ddfeca0', '1630810134.png'),
(8, 'festival amani', 7, 0, '4274c76f6c', '480432152.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscription_formations`
--

CREATE TABLE `inscription_formations` (
  `idinscription` int(11) NOT NULL,
  `nomcomplet` varchar(3000) DEFAULT NULL,
  `email` varchar(3000) DEFAULT NULL,
  `telephone` varchar(3000) DEFAULT NULL,
  `niveau_etude` text DEFAULT NULL,
  `domicile` varchar(3000) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
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
(9, 'seigneur birndwa', 'seigneur@gmail.com', '+243817883541', 'licencié', 'Goma tmk', '2021-07-28 17:06:31', 11, '2021');

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
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `code` longtext DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`idmessage`, `id_user`, `id_recever`, `message`, `created_at`, `code`, `fichier`) VALUES
(4, 7, 9, '	                  ce bon BOSS!\r\n	              ', '2020-10-11 14:02:23', '8f04778c11', NULL),
(5, 9, 7, 'bonjour!', '2021-02-22 15:49:29', '80fb297618', '3f70f9c09c5d9305387866dbe9c98bc00ojTWpeT7wc34q4QIPlyWoQWYfhrjbadyqnOHNoDHYFuQWcc9s7PQYi3PrzFa3pq-tTcerUcVSqDewJjiFuELhZ5zzAyqcQIbEneIw_kEUkDH5rsQIQjnaAS7Zq1Y65g44zRHH91npk=w235-h234.jpg'),
(6, 9, 14, 'ça va?', '2021-02-22 15:49:47', '50454b592b', NULL),
(8, 14, 9, 'ok', '2021-02-22 16:01:11', '5202ec8d8e', NULL),
(9, 7, 9, '	                  &lt;p&gt;&lt;b&gt;maisha paie&lt;/b&gt;&lt;/p&gt;\r\n	              ', '2021-06-19 22:32:50', '09130274de', NULL),
(12, 7, 14, '&lt;p&gt;bonjour!&lt;/p&gt;', '2021-06-19 22:57:23', '63551f8eaf', NULL),
(13, 7, 14, '&lt;p&gt;ça va?&lt;/p&gt;', '2021-06-19 22:57:39', 'd96d7c326c', NULL),
(14, 7, 14, '&lt;p&gt;uhn!&lt;/p&gt;', '2021-06-19 22:57:53', '38cbba6aef', NULL),
(15, 7, 14, '&lt;p&gt;&lt;b&gt;bonjour&lt;/b&gt;&lt;/p&gt;&lt;p&gt;ok&lt;/p&gt;', '2021-06-19 22:58:25', '5cde105c03', '2affd27237a8f384a0c3835af63a7d07belle-fille-se-trouve-dans-parc_8353-5085.jpg'),
(16, 7, 9, '	                  &lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span arial&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; color:#121c42;mso-font-kerning:18.0pt;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 31.5pt;&quot;&gt;HTML&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;line-height: normal; vertical-align: baseline;&quot;&gt;&lt;span inherit&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; mso-bidi-font-family:arial;color:#121c42;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 13pt;&quot;&gt;L\'HTML constitue la base de tous les sites internet. Ce langage de balisage permet de définir la structure d\'une page web et de définir les propriétés du document et de structurer le contenu à l\'aide d\'un système de balise sensiblement identique au XML.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;img src=&quot;data:image/png;base64,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&quot; alt=&quot;&quot; style=&quot;width: 105px;&quot;&gt;&lt;a href=&quot;https://grafikart.fr/tutoriels/html&quot; style=&quot;background-color: rgb(255, 255, 255); font-size: 1rem;&quot;&gt;&lt;span inherit&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;times=&quot;&quot; new=&quot;&quot; roman&quot;;=&quot;&quot; mso-bidi-font-family:arial;mso-fareast-language:fr&quot;=&quot;&quot; style=&quot;font-size: 13pt;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;margin-bottom: 0.0001pt; line-height: normal; vertical-align: baseline;&quot;&gt;&lt;br&gt;&lt;/p&gt;\r\n	              ', '2021-06-20 15:16:39', 'd12f4b9a98', NULL),
(17, 7, 12, '&lt;p&gt;bonjour boss!&lt;/p&gt;', '2021-06-24 11:22:46', '7dc1ce8531', NULL),
(18, 7, 12, '&lt;p&gt;ni sawa?&lt;/p&gt;', '2021-06-24 11:23:02', 'c66b083f1b', NULL),
(19, 7, 14, '&lt;p&gt;bonjour!&lt;/p&gt;', '2021-06-24 11:24:25', 'fd1c3c9917', NULL),
(20, 9, 7, '&lt;p&gt;ok merci!&lt;/p&gt;', '2021-06-27 04:47:33', '52ad6ce073', NULL),
(21, 9, 7, '&lt;p&gt;&lt;b&gt;ce bon! &lt;/b&gt;on se voit demain!&lt;/p&gt;', '2021-06-27 04:48:12', '2b4b5716f3', '623424a04946b81168cccf793c6016b35.jpg'),
(22, 9, 14, '                                            &lt;p&gt;ok merci! ce bon!&lt;/p&gt;\r\n                  \r\n                  ', '2021-06-27 04:49:31', '80e4196cdb', NULL),
(24, 7, 9, '	                  &lt;p&gt;salut boss!&lt;/p&gt;\r\n	              ', '2021-07-16 15:03:39', 'ef4e5a6fdb', NULL),
(25, 9, 7, '&lt;p&gt;cool&lt;/p&gt;', '2021-07-16 15:11:19', 'aa549d03f4', NULL),
(26, 9, 7, '                      &lt;p&gt;plan d\'affaire ok!&lt;/p&gt;\r\n                  ', '2021-07-16 15:11:48', 'aa321f38c3', '1678222ceae53fe96ccbd2c684e86d01banierre-covid.jpg'),
(27, 9, 20, '&lt;p&gt;boss&lt;/p&gt;', '2021-07-16 15:12:16', 'db8d399960', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message_sender`
--

CREATE TABLE `message_sender` (
  `idsms` int(11) NOT NULL,
  `tel` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `etat` varchar(300) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message_sender`
--

INSERT INTO `message_sender` (`idsms`, `tel`, `created_at`, `etat`, `message`) VALUES
(6, '+243970524665', '2021-07-30 10:30:11', 'ok', 'bonjour ce ci est un test de messagerie'),
(7, '+243854543870', '2021-07-30 10:30:11', 'ok', 'bonjour ce ci est un test de messagerie'),
(17, '+243817883541', '2021-07-30 16:47:12', 'faux', 'Bonjour fullstack');

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
(31, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription'),
(33, 'Nouvelle tentative de paiement cubaka mulume vient de faire son paiement', 'admin/paiement_pading', 7, '2021-05-29 20:06:34', 'fa fa-money', 'Nouveau de paiement'),
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
(109, 'Coach dembo apoline Vient de corriger votre busness model canavas dans la colonne:structure des coûts', 'entreprise/canavas', 9, '2021-07-24 09:22:24', 'fa fa-tasks', 'Nouvelle correction');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `id_user`, `created_at`) VALUES
(80, 9, '2021-07-24 08:41:16'),
(92, 7, '2021-07-30 18:00:27');

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
-- Doublure de structure pour la vue `profile_groupe`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_groupe` (
`idgroupe` int(11)
,`code_groupe` longtext
,`id_user` int(11)
,`message` text
,`fichier` varchar(300)
,`created_at` datetime
,`nom` varchar(300)
,`logo` varchar(300)
,`code` longtext
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
(1, 'sumailiroger681@gmail.com', '6b088f69a1478a831c8b1412c117f5e8');

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
(10, 'Société Sans but lucratif ', '2021-03-30 11:53:22'),
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
  `created_at` datetime DEFAULT current_timestamp(),
  `token_sms` text DEFAULT NULL,
  `tel3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`, `created_at`, `token_sms`, `tel3`) VALUES
(1, 'hub un jour nouveau', '1139782829.png', '+243817883541', '+243970524665', 'RDC Nord-kivu goma quartier  1 km temoin', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info.hub@gmail.com', 'Notre Politique de protection des données personnelles décrit la manière dont #devtech traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site.\r\n#devtech accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.\r\n', 'Conditions Générales d\'Utilisation\r\nDéfinitions\r\nLes Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après :\r\n•	« Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ;\r\n•	« Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ;\r\n•	« Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ;\r\n•	« Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ;\r\n•	« Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ;\r\n•	« Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ;\r\n•	« Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé.\r\nLes présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services.\r\nEn naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles.\r\nEn créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet.\r\nNous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme.\r\nArticle 1. Inscription au service\r\n1.1 Conditions d\'inscription à la Plateforme\r\nCertaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles.\r\nVous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle).\r\nAvant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale.\r\nNotre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins.\r\n1.2 Création de compte\r\nVous pourrez créer un compte des deux manières suivantes :\r\n•	Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes. ', 'Développeurs des technologies(#devtech) est une startup qui vise à promouvoir l\'intégrité de la jeunesse en appliquant la technologie afin de permettre  l\'émergence  de la société.', 'la startup devetech vise à apporter des solutions efficaces grâce à la nouvelle  technologie pour palier contre les différents  problèmes que rencontre la société  suite au manquement d\'une meilleure technologie adaptée à leur besoin.', 'Réduire le taux des difficultés que rencontre  la société suite au manquement d\'une  meilleure solution technologique appropriée à leur problématique au pourcentage le plus bas possible jamais atteint!', 'Devetech est une  startup qui vise à promouvoir  l\'intégrité des jeunes en appliquant la technologie  pour permettre l\'avancement de la société.\r\nNotre contribution dans la société est le faite de voir comment la jeunesse progresse  mieux  en contribuant  aux différents aspects qui aident la société  à s\'en sortir dans le Cao.\r\nLa technologie dont nous parlons fera en sorte de contribuer  à l\'émergence de toute la jeunesse et la société en particulier.\r\nNous devons considérer la technologie actuelle comme une arme  efficace pour changer le monde.\r\n \r\n', '2021-05-27 19:52:16', 'oryW1PZCWVP0CGYGhmTigjRzNLit', '+243810409151');

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
-- Structure de la table `tinfo_choix`
--

CREATE TABLE `tinfo_choix` (
  `idtinfo_choix` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
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
  `description` text DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
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
  `description` text DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_service`
--

INSERT INTO `tinfo_service` (`idtinfo_service`, `titre`, `description`, `image`, `created_at`) VALUES
(1, 'TEST DU PRODUIT', 'Pars à la rencontre de ton marché, fait ta preuve de concept et commence à faire grandir ta base d\'utilisateurs.', '2121426135.png', '2021-02-12 18:05:01'),
(2, 'DÉVELOPPEMENT DU PRODUIT', 'On t\'accompagne à définir ton premier produit et on t\'aide à le développer de la meilleure des manières en un minimum de temps.', '1759953702.png', '2021-02-13 08:12:27'),
(3, 'CRÉATION DE LA SOCIÉTÉ', 'Un parcours simplifié pour créer sa société, on se charge de presque tout. Tu choisis tes partenaires, et c\'est parti !', '1232947282.png', '2021-02-13 08:17:06'),
(4, 'STRUCTURATION DE L\'IDÉE', 'Trouver sa proposition de valeur, définir son positionnement, ses cibles, son marché.', '1378855113.png', '2021-02-13 08:27:07'),
(7, 'PRÉPARATION À LA VENTE', 'Prépare ta recherche de clients (outils, argumentaires, etc...), démarche les et signe des contrats.', '1540813419.png', '2021-07-29 09:23:40'),
(8, 'ACCOMPAGNEMENT AU FINANCEMENT', 'On t\'accompagne à estimer tes besoins de financement et on t\'aide à structurer tes dossiers pour les obtenir.', '373405259.png', '2021-07-29 09:24:03');

-- --------------------------------------------------------

--
-- Structure de la table `tinfo_techno`
--

CREATE TABLE `tinfo_techno` (
  `idtinfo_techno` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
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
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tinfo_user`
--

INSERT INTO `tinfo_user` (`idtinfo_user`, `first_name`, `last_name`, `email`, `image`, `telephone`, `poste`, `sexe`, `facebook`, `linkedin`, `twitter`, `created_at`) VALUES
(1, 'sumaili shabani ', 'roger', 'sumailiroger681@gmail.com', '335216998.jpg', '+243817883541', 'Développeur  entrepreneur', 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', '2021-02-13 12:02:45'),
(2, 'Patricia', 'boma', 'patricia@gmail.com', '1555663603.jpg', '+2439978150288', 'Comptable', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-02-13 12:06:10'),
(4, 'mikah kalume', 'kitoko', 'mikah@gmail.com', '1973939049.jpg', '+243823187085', 'Développeur', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-02-13 12:12:20'),
(5, 'wilson vulembere', 'antoine', 'wilson@gmail.com', '1849913068.jpg', '081989152', 'Développeur des logiciels', 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-02-22 11:12:39'),
(7, 'Prisca pilili', 'jolie', 'prisca@gmail.com', '808300046.jpg', '+243810409151', 'Secrétaire', 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', '2021-07-24 14:27:54');

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
(7, 'sumaili shabani', 'roger patrona', 'sumailiroger681@gmail.com', '2072243614.png', '+243817883541', 'tmk goma avenue mushanganya n°59', 'Développeur et entrepreneur en temps plein!                                                      ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1, '2021-05-03', '2021-06-03'),
(8, 'wilson vulembere', 'Antoine', 'admin@gmail.com', '1754247350.jpg', '+243817883541', 'Quartier office 2', 'développeur de logiciels', '1995-05-26', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-06-03', '2021-07-03'),
(9, 'cubaka mulume', 'alpha', 'alpha@gmail.com', '1389563584.jpg', '0998765432', 'Tmk goma', '                  	Developpeur fullstack                  ', '1000-09-19', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-06-03', '2021-07-03'),
(11, 'strong abdiel', 'strong', 'strong@gmail.com', '1995908381.JPG', '0998765432', 'Office 2', 'Brigadier valant', '1997-05-26', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '1125004339.JPG', '+243810409151', 'Quartier birere', NULL, '1999-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(13, 'mikah kalume', 'sefu', 'mikah@gmail.com', '504914652.jpg', '+243810409151', 'quartier katoyi avenue konde', 'développeur web', '2021-04-13', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', '', '', '', 1, '2021-07-03', '2021-07-03'),
(14, 'dembo apoline', 'pataule', 'apoline345@gmail.com', '343503402.jpg', '+243970963642', 'Goma quartier office', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(15, 'joel tshongo', 'jt', 'joel@gmail.com', '997250263.png', '+243810409151', 'Goma quartier katoyi', 'développeur freelance', '1999-12-12', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(16, 'yuma kayanda', 'françois yuka', 'yuma@gmail.com', '1280173340.JPG', '+243990084881', 'quartier katoyi Avenue konde', '                  	It <b>never</b> goas <b>slowly</b>!                  ', '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, '2021-05-03', '2021-06-03'),
(18, 'useni uwonda', 'Emanuel', 'useni@gmail.com', '2120437570.jpg', '+243990084881', 'Le gars normal', NULL, '1992-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/', 1, NULL, NULL),
(19, 'madeleine stephanie', 'lola', 'madeleine@gmail.com', '520932141.jpg', '+243990084881', 'My life', NULL, '2021-06-18', 'e10adc3949ba59abbe56e057f20f883e', 3, '', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL),
(20, 'kakese pandamiti', NULL, 'kakese@gmail.com', 'icone-user.png', NULL, NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', 3, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(21, 's feza fataki', 'sarah', 'feza@gmail.com', 'icone-user.png', '+243827915399', 'my life', NULL, '1999-07-30', 'e10adc3949ba59abbe56e057f20f883e', 3, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1, NULL, NULL);

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
-- Structure de la table `vues`
--

CREATE TABLE `vues` (
  `idv` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `machine` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_article`
--
DROP TABLE IF EXISTS `profile_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_article`  AS SELECT `article`.`idart` AS `idart`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`image` AS `image`, `article`.`created_at` AS `created_at`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nom_cat`, `article`.`code` AS `code` FROM (`article` join `category` on(`article`.`idcat` = `category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_commentaire`
--
DROP TABLE IF EXISTS `profile_commentaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_commentaire`  AS SELECT `commentaire`.`idcomment` AS `idcomment`, `commentaire`.`idart` AS `idart`, `commentaire`.`etape1` AS `etape1`, `commentaire`.`etape2` AS `etape2`, `commentaire`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`image` AS `image`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nomcat` FROM ((`commentaire` join `article` on(`article`.`idart` = `commentaire`.`idart`)) join `category` on(`category`.`idcat` = `article`.`idcat`)) ;

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
-- Structure de la vue `profile_groupe`
--
DROP TABLE IF EXISTS `profile_groupe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_groupe`  AS SELECT `groupe`.`idgroupe` AS `idgroupe`, `groupe`.`code_groupe` AS `code_groupe`, `groupe`.`id_user` AS `id_user`, `groupe`.`message` AS `message`, `groupe`.`fichier` AS `fichier`, `groupe`.`created_at` AS `created_at`, `groupe_chat`.`nom` AS `nom`, `groupe_chat`.`image` AS `logo`, `groupe_chat`.`code` AS `code`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`image` AS `image`, `users`.`id` AS `id`, `users`.`email` AS `email` FROM ((`groupe` join `groupe_chat` on(`groupe`.`code_groupe` = `groupe_chat`.`code`)) join `users` on(`groupe`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_inscription`
--
DROP TABLE IF EXISTS `profile_inscription`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_inscription`  AS SELECT `inscription_formations`.`idinscription` AS `idinscription`, `inscription_formations`.`nomcomplet` AS `nomcomplet`, `inscription_formations`.`email` AS `email`, `inscription_formations`.`telephone` AS `telephone`, `inscription_formations`.`niveau_etude` AS `niveau_etude`, `inscription_formations`.`domicile` AS `domicile`, `inscription_formations`.`annee` AS `annee`, `formations`.`idf` AS `idf`, `inscription_formations`.`created_at` AS `created_at`, `formations`.`nom` AS `nom`, `formations`.`date_debit` AS `date_debit`, `formations`.`date_fin` AS `date_fin`, `formations`.`image` AS `image` FROM (`inscription_formations` join `formations` on(`inscription_formations`.`idf` = `formations`.`idf`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_online`
--
DROP TABLE IF EXISTS `profile_online`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_online`  AS SELECT `online`.`id` AS `reference`, `online`.`id_user` AS `id_user`, `online`.`created_at` AS `created_at`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`image` AS `image` FROM (`online` join `users` on(`online`.`id_user` = `users`.`id`)) ;

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
-- Structure de la vue `profile_user`
--
DROP TABLE IF EXISTS `profile_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_user`  AS SELECT `users`.`id` AS `id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`image` AS `image`, `users`.`telephone` AS `telephone`, `users`.`full_adresse` AS `full_adresse`, `users`.`biographie` AS `biographie`, `users`.`date_nais` AS `date_nais`, `users`.`idrole` AS `idrole`, `users`.`sexe` AS `sexe`, `users`.`facebook` AS `facebook`, `users`.`linkedin` AS `linkedin`, `users`.`twitter` AS `twitter`, `users`.`idposte` AS `idposte`, `users`.`debit_event` AS `debit_event`, `users`.`fin_event` AS `fin_event`, `role`.`nom` AS `nom` FROM (`users` join `role` on(`users`.`idrole` = `role`.`idrole`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_ville`
--
DROP TABLE IF EXISTS `profile_ville`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_ville`  AS SELECT `ville`.`idv` AS `idv`, `ville`.`nomv` AS `nomv`, `province`.`nomp` AS `nomp`, `ville`.`created_at` AS `created_at`, `ville`.`idp` AS `idp` FROM (`ville` join `province` on(`ville`.`idp` = `province`.`idp`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_vue`
--
DROP TABLE IF EXISTS `profile_vue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_vue`  AS SELECT `vues`.`idv` AS `idv`, `vues`.`idart` AS `idart`, `vues`.`machine` AS `machine`, `vues`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`image` AS `image`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat` FROM (`vues` join `article` on(`article`.`idart` = `vues`.`idart`)) ;

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
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `inscription_formations`
--
ALTER TABLE `inscription_formations`
  ADD PRIMARY KEY (`idinscription`),
  ADD KEY `idf` (`idf`);

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
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `compterendu`
--
ALTER TABLE `compterendu`
  MODIFY `idcompt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `identrep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idgroupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `groupe_chat`
--
ALTER TABLE `groupe_chat`
  MODIFY `idgroupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `inscription_formations`
--
ALTER TABLE `inscription_formations`
  MODIFY `idinscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `message_sender`
--
ALTER TABLE `message_sender`
  MODIFY `idsms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT pour la table `tinfo_choix`
--
ALTER TABLE `tinfo_choix`
  MODIFY `idtinfo_choix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tinfo_personnel`
--
ALTER TABLE `tinfo_personnel`
  MODIFY `idtinfo_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tinfo_service`
--
ALTER TABLE `tinfo_service`
  MODIFY `idtinfo_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tinfo_techno`
--
ALTER TABLE `tinfo_techno`
  MODIFY `idtinfo_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tinfo_user`
--
ALTER TABLE `tinfo_user`
  MODIFY `idtinfo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT pour la table `vues`
--
ALTER TABLE `vues`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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

--
-- Contraintes pour la table `vues`
--
ALTER TABLE `vues`
  ADD CONSTRAINT `vues_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
