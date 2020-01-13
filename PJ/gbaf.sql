-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 13 jan. 2020 à 21:19
-- Version du serveur :  10.3.21-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kdomaine_gbaf`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

CREATE TABLE `actors` (
  `id_partner` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `link` text COLLATE utf8_bin NOT NULL,
  `actor_like` int(11) NOT NULL,
  `actor_dislike` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `actors`
--

INSERT INTO `actors` (`id_partner`, `logo`, `title`, `description`, `link`, `actor_like`, `actor_dislike`) VALUES
(2, 'https://anthonykondek.com/work/gbaf/images/logo_acteur2.png', 'Protectpeople', '<p><strong>Protectpeople finance la solidarité nationale.<br />\r\nNous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.</strong></p>\r\n\r\n<p>Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.<br />\r\nProectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.<br />\r\nNous garantissons un accès aux soins et une retraite.<br />\r\nChaque année, nous collectons et répartissons 300 milliards d’euros.</p>\r\n<ul>Notre mission est double :</ul>\r\n<li>sociale : nous garantissons la fiabilité des données sociales ;</li>\r\n<li>économique : nous apportons une contribution aux activités économiques.</li>\r\n\r\n\r\n\r\n\r\n', '#', 7, 2),
(1, 'https://anthonykondek.com/work/gbaf/images/logo_acteur1.png', 'Formation&co', '<p>Formation&co est une association française présente sur tout le territoire.<br />\r\nNous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.</p>\r\n<ul>Notre proposition :</ul>\r\n<li>un financement jusqu’à 30 000€ ;</li>\r\n<li>un suivi personnalisé et gratuit ;</li>\r\n<li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>\r\n<p>Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.<br />\r\nVous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.</p>', '\r\n#', 16, 6),
(3, 'https://anthonykondek.com/work/gbaf/images/logo_acteur3.png', 'DSA France', '<p><strong>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.\r\nNous accompagnons les entreprises dans les étapes clés de leur évolution.\r\nNotre philosophie : s’adapter à chaque entreprise.\r\nNous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises.</strong></p>\r\n', '#', 6, 9),
(4, 'https://anthonykondek.com/work/gbaf/images/logo_acteur4.png', 'CDE', '<p><strong>La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.<br /> \r\nSon président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.</strong></p>\r\n', '#', 8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `vote_like` int(255) NOT NULL,
  `vote_dislike` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `id_actor`, `firstname`, `date`, `text`, `vote_like`, `vote_dislike`) VALUES
(1, 2, 'Pascal', '2019-12-27', 'Bonjour, je suis ton mentor !', 1, 0),
(2, 3, 'Anthony', '2019-12-28', 'Hate d\'etre en 2020 !', 1, 0),
(3, 1, 'Django', '2019-12-29', 'C\'est cool d\'apprendre avec OC !', 1, 0),
(4, 2, 'Adrien', '2020-01-10', 'Hello moi c\'est Adrien', 0, 1),
(5, 3, 'Christopher', '2020-01-01', 'Je suis un pirate !', 1, 0),
(6, 3, 'Joe', '2020-01-02', 'Moi c\'est Joe!', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `question` varchar(255) COLLATE utf8_bin NOT NULL,
  `answer` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `firstname`, `username`, `password`, `question`, `answer`, `created_at`) VALUES
(1, 'Kondek', 'Anthony', 'demo', 'openclassrooms', 'Quel est le nom de mon parcours OC ?', 'Fullstack', '0000-00-00'),
(2, 'Gaubiac', 'Pascal', 'pascal', 'openclassrooms', 'Qui suis-je?', 'Je suis un super mentor !', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id_partner`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actors`
--
ALTER TABLE `actors`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
