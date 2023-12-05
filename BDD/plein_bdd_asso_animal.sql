-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 déc. 2023 à 11:36
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `asso_animal`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `fk_page_id` int(11) NOT NULL,
  `fk_categorie_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `date_article` datetime NOT NULL,
  `text_article` longtext NOT NULL,
  `title_article` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `fk_page_id`, `fk_categorie_id`, `fk_user_id`, `date_article`, `text_article`, `title_article`, `active`) VALUES
(1, 4, 1, 1, '2023-11-22 15:14:11', '<p>Comment adopter un animal au refuge ?</p>\r\n\r\n<p>Pour adopter un animal au refuge, il vous suffit de suivre les étapes suivantes :</p><p>\r\n\r\nContactez le refuge par téléphone ou par e-mail.</p><p>\r\nPrenez rendez-vous pour venir rencontrer les animaux.</p><p>\r\nRépondez à un questionnaire pour évaluer votre aptitude à adopter un animal.</p><p>\r\nSouscrivez un contrat d\'adoption.</p><p>\r\nPayez les frais d\'adoption.</p><p>\r\nQuels sont les critères d\'adoption ?</p><p>\r\n\r\nLes critères d\'adoption varient d\'un refuge à l\'autre. En général, les refuges exigent que les adoptants :</p><p>\r\n\r\nSoient majeurs.</p><p>\r\nPossèdent un lieu de vie adapté à l\'animal (maison avec jardin pour un chien, appartement spacieux pour un chat).</p><p>\r\nSoient en mesure de subvenir aux besoins de l\'animal (nourriture, soins vétérinaires, éducation).</p><p>\r\nSoient prêts à s\'engager à long terme envers l\'animal.</p><p>\r\nQuels sont les frais d\'adoption ?</p><p>\r\n\r\nLes frais d\'adoption varient d\'un refuge à l\'autre. Ils couvrent généralement les frais vétérinaires effectués par le refuge avant l\'adoption (stérilisation, identification, vaccination).</p><p>\r\n\r\nComment choisir l\'animal qui me convient ?</p><p>\r\n\r\nLorsque vous venez au refuge pour rencontrer les animaux, prenez le temps de les observer et de les caresser. Posez des questions aux bénévoles pour en savoir plus sur leur caractère et leurs besoins.</p><p>\r\n\r\nIl est important de choisir un animal qui vous ressemble et qui s\'adaptera à votre mode de vie. Si vous avez des enfants, par exemple, il est préférable d\'adopter un animal sociable et patient.</p><p>\r\n\r\nComment préparer l\'arrivée de mon animal ?</p><p>\r\n\r\nAvant l\'arrivée de votre animal, il est important de préparer votre logement. Assurez-vous que votre animal aura un endroit confortable où se reposer, ainsi que de l\'eau et de la nourriture.</p><p>\r\n\r\nIl est également important de penser à l\'éducation de votre animal. Entraînez-le à la propreté, à la marche en laisse et aux ordres de base.</p><p>\r\n\r\nQue faire si je ne peux plus garder mon animal ?</p><p>\r\n\r\nSi vous ne pouvez plus garder votre animal, veuillez contacter le refuge où vous l\'avez adopté. Le refuge pourra vous aider à trouver une nouvelle famille pour votre animal.</p><p>\r\n\r\nComment aider le refuge ?</p><p>\r\n\r\nVous pouvez aider le refuge de différentes manières :</p><p>\r\n\r\nFaire un don.</p><p>\r\nDevenir bénévole.</p><p>\r\nPartager l\'information sur le refuge sur les réseaux sociaux.</p><p>\r\nChaque geste, même petit, est important pour aider les animaux du refuge à trouver une famille aimante.</p><p>', 'Questions et réponses', 1),
(2, 2, 1, 1, '2023-11-22 15:18:22', '<p>Asso Animal est un refuge pour animaux sans abri situé en France et en Belgique. Nous sommes une organisation à but non lucratif qui s\'engage à trouver un foyer aimant pour tous les animaux qui nous sont confiés.\r\n</p><p>\r\nNous accueillons des chiens et des chats de tous âges, races et personnalités. Nous nous assurons que tous nos animaux reçoivent les soins vétérinaires dont ils ont besoin, ainsi qu\'une alimentation et un logement de qualité.</p><p>\r\n</p><p>\r\nNous sommes convaincus que tous les animaux méritent une chance de trouver une famille aimante. C\'est pourquoi nous offrons un processus d\'adoption rigoureux qui garantit que nos animaux sont placés dans des foyers adaptés à leurs besoins.\r\n</p><p>\r\n<h3>Notre mission</h3>\r\n<p>\r\nNotre mission est de trouver un foyer aimant pour tous les animaux qui nous sont confiés. Nous nous engageons à fournir des soins de qualité à tous nos animaux et à les préparer au mieux à leur adoption.\r\n</p>\r\n<h3>Nos valeurs</h3>\r\n<p>\r\nAmour: Nous croyons que tous les animaux méritent d\'être aimés et respectés.\r\nResponsabilité: Nous sommes responsables de nos animaux et nous nous engageons à leur fournir les meilleurs soins possibles.\r\nEngagement: Nous sommes engagés à trouver un foyer aimant pour tous les animaux qui nous sont confiés.\r\n<h3>Comment nous aider</h3>\r\n<p>\r\nIl existe de nombreuses façons de nous aider à réaliser notre mission. Vous pouvez faire un don, devenir bénévole ou simplement partager l\'information sur notre refuge avec vos amis et votre famille.\r\n</p><p>\r\nChaque geste, même petit, est important pour aider les animaux du refuge à trouver une famille aimante.\r\n</p><p>\r\n<h3>Merci de votre soutien</h3>\r\n</p><p>\r\nNous vous remercions de votre soutien à notre mission. Grâce à vous, nous pouvons continuer à aider les animaux sans abri à trouver une famille aimante.</p>', 'Qui sommes nous ?', 1),
(3, 3, 1, 1, '2023-11-22 15:25:10', 'Voici nos contacts en France. N\'hésitez pas à nous joindre et à nous rejoindre !', 'Nous contacter', 1),
(4, 5, 2, 1, '2023-11-22 15:27:53', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p>', 'Article 1', 1),
(5, 5, 2, 1, '2023-11-22 15:29:05', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p>', 'Article 2', 0),
(6, 5, 2, 1, '2023-11-22 15:29:06', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p>', 'Article 3', 1),
(7, 5, 2, 1, '2023-11-22 16:20:24', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p><p>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aut sapiente pariatur nobis velit, neque incidunt iste assumenda vel nemo commodi maiores facilis officia aspernatur non et laudantium doloribus sequi ab.\r\n</p>', 'Article 4', 1),
(9, 6, 5, 1, '2023-11-22 16:30:12', '<h3>Faire un don</h3>\r\n<p>\r\nLe don est le moyen le plus simple et le plus efficace d\'aider un refuge pour animaux. Votre don permettra de couvrir les frais de nourriture, de soins vétérinaires, d\'hébergement et de transport des animaux. Vous pouvez faire un don en ligne, par chèque ou par carte de crédit. \r\n</p>\r\n<h3>Devenir bénévole</h3>\r\n<p>\r\nDevenir bénévole est une autre excellente façon d\'aider un refuge pour animaux. Vous pouvez aider à nourrir et à soigner les animaux, à nettoyer les cages, à organiser des événements de collecte de fonds ou à faire du bénévolat dans le cadre d\'autres programmes. \r\n</p>\r\n<h3>Partager l\'information sur le refuge</h3>\r\n<p>\r\nPartager l\'information sur le refuge sur les réseaux sociaux ou avec vos amis et votre famille est un excellent moyen d\'aider à faire connaître le refuge et à trouver des familles adoptives pour les animaux. Vous pouvez également partager des histoires sur les animaux du refuge ou sur le travail du refuge. \r\n</p>\r\n<h3>Adopter un animal</h3>\r\n<p>\r\nL\'adoption est la meilleure façon d\'aider un refuge pour animaux. En adoptant un animal, vous lui donnez une chance de trouver une famille aimante et pour la vie. Les refuges accueillent des animaux de tous âges, races et personnalités. Vous êtes sûr de trouver l\'animal qui vous convient. \r\n</p>\r\n<h3>Votre soutien est important</h3>\r\n<p>\r\nGrâce à votre soutien, nous pouvons continuer à aider les animaux sans abri à trouver une famille aimante. Chaque geste, même petit, est important.</p>', 'Voici ce que vous pouvez faire', 1),
(10, 1, 2, 2, '2023-11-01 11:13:37', '\r\n<p>Nos refuges animaliers accueillent des chiens et des chats abandonnés, perdus ou maltraités. Ils leur offrent un abri, des soins et une éducation pour les préparer à une adoption responsable.<br> \r\nLes refuges animaliers sont des lieux essentiels pour la protection des animaux. Grâce à leur travail, de nombreux chiens et chats trouvent un nouveau foyer et une seconde chance.</p>', 'Nous aider', 1),
(11, 8, 1, 2, '2023-11-28 12:18:59', '<p>J\'ai eu le coup de foudre pour ce  chien ! Merci pour tout !</p>\r\n', '', 0),
(12, 8, 1, 2, '2023-11-28 12:18:59', 'Adopter notre chat chez Asso Animal a été la meilleure décision de ma vie. Il  comble notre maison de ronronnements chaleureux et de moments de bonheur infinis. Mes deux fils sont si heureux !', 'Hélène', 1),
(13, 8, 1, 2, '2023-11-28 12:38:42', 'C\'est incroyable comment un petit être poilu peut changer votre quotidien. Depuis l\'adoption de mon chien, chaque jour devient une aventure joyeuse. Asso Animal fait vraiment un travail exceptionnel en donnant une seconde chance à ces animaux adorables.', 'Karim', 1),
(14, 8, 1, 2, '2023-11-28 12:38:42', 'Soutenir Asso Animal était une évidence. Adopter notre chien non seulement nous a apporté un compagnon fidèle, mais a également contribué à donner une vie meilleure à un être qui en avait besoin. Notre foyer est désormais empli de gratitude et d\'amour, grâce à cette belle initiative.', 'Erica', 1),
(15, 11, 1, 1, '2023-11-28 14:53:02', '<h4>Propriété intellectuelle</h4>\r\n<p>\r\nLes photographies et les textes publiés sur le site web du Asso Animal sont la propriété exclusive du refuge. Toute reproduction, représentation, adaptation, traduction, ou transformation, partielle ou intégrale, de ces éléments est strictement interdite sans l\'autorisation expresse de Asso Animal.\r\n</p><p>\r\nLes dessins et logos figurant sur le site web du refuge d\'animaux de compagnie sont également la propriété exclusive du refuge. Toute reproduction, représentation, ou exploitation, partielle ou intégrale, de ces éléments est strictement interdite sans l\'autorisation expresse du refuge.\r\n</p><p>\r\nL\'ensemble du contenu du site web du refuge d\'animaux de compagnie est protégé par le droit d\'auteur. Toute reproduction, représentation, ou exploitation, partielle ou intégrale, du site web est strictement interdite sans l\'autorisation expresse du refuge.\r\n</p>\r\n<h4>Hyperliens</h4>\r\n<p>\r\nLes liens hypertextes présents sur le site web du refuge d\'animaux de compagnie peuvent renvoyer sur des sites web tiers. Le refuge n\'exerce aucun contrôle sur ces sites web et décline toute responsabilité quant à leur contenu.\r\n</p>\r\n<h4>Modifications</h4>\r\n<p>\r\nAsso Animal se réserve le droit de modifier les mentions légales à tout moment. L\'utilisateur est invité à consulter régulièrement les mentions légales afin de prendre connaissance des modifications éventuelles.\r\n</p>\r\n', 'Mentions légales', 1),
(16, 9, 1, 1, '2023-11-28 14:53:02', '<p>\r\nLe site web du refuge d\'animaux de compagnie utilise des cookies afin de collecter des informations sur la navigation des utilisateurs. Ces informations sont utilisées pour améliorer le contenu du site web et la navigation des utilisateurs.\r\n</p><p>\r\nL\'utilisateur peut s\'opposer à l\'utilisation des cookies en modifiant les paramètres de son navigateur. En effet vous pouvez vider le cache également grâce au raccourci clavier Ctrl + Maj + Suppr<br>\r\nPour un Mac, utilisez Command + Maj + Suppr .</p>', 'Cookies', 1),
(17, 10, 1, 1, '2023-11-28 14:53:02', '<p>Asso Animal s\'engage à protéger la confidentialité des informations personnelles que vous nous fournissez.\r\n</p><p>\r\nNous collectons des informations personnelles lorsque vous utilisez notre site web, par exemple lorsque vous :\r\n<ul>\r\n<li>Visitez notre site web</li>\r\n<li>Vous inscrivez à notre newsletter</li>\r\n<li>Faites un don</li>\r\n<li>Adoptez un animal</li>\r\n</ul>\r\n</p>\r\n<p>Les informations personnelles que nous collectons peuvent inclure :\r\n<ul>\r\n<li>Votre nom</li>\r\n<li>Votre adresse e-mail</li>\r\n<li>Vos informations sur l\'animal que vous adoptez</li>\r\n</ul>\r\n</p><p>\r\nNous utilisons les informations personnelles que nous collectons pour :\r\n<ul>\r\n<li>\r\nVous fournir les services que vous demandez</li>\r\n<li>Vous contacter pour vous informer de nos activités</li>\r\n<li>Améliorer notre site web et nos services</li>\r\n</ul>\r\n</p>\r\n<p>\r\nNous ne partageons vos informations personnelles avec des tiers que dans les cas suivants :\r\n<ul>\r\n<li>Avec votre consentement</li>\r\n<li>Pour nous conformer à une loi ou une réglementation</li>\r\n<li>Pour protéger nos droits ou notre propriété</li>\r\n</ul>\r\n</p>\r\n<h4>Données personnelles</h4>\r\n<p>\r\nLes données personnelles collectées sur le site web de Asso Animal sont destinées à la gestion des relations avec les utilisateurs. Ces données sont conservées pendant une durée de 2 ans après la dernière interaction de l\'utilisateur avec le site web.\r\n</p><p>\r\nL\'utilisateur dispose d\'un droit d\'accès, de rectification, et d\'effacement des données personnelles le concernant. L\'utilisateur peut également demander la limitation du traitement de ses données personnelles ou s\'opposer à leur traitement.\r\n</p><p>\r\nL\'utilisateur peut exercer ses droits en contactant le refuge par mail à l\'adresse suivante : <a href=\"mailto:emailassoanimal@examplemail.org\">emailassoanimal@examplemail.org</a>\r\n</p>\r\n<h4>Sécurité</h4>\r\n<p>\r\nLe refuge d\'animaux de compagnie s\'engage à protéger les données personnelles des utilisateurs. Le refuge met en œuvre des mesures de sécurité techniques et organisationnelles pour protéger les données personnelles contre les risques de perte, de destruction, de modification, ou de divulgation à des tiers non autorisés.</p>', 'Politique de confidentialité', 1),
(18, 5, 3, 2, '2023-11-29 14:45:01', 'article test de paul', 'Article de Paul', 1),
(19, 5, 3, 2, '2023-11-29 14:45:01', 'article test de Paul', 'Article de Paul', 1),
(20, 5, 3, 2, '2023-11-29 14:45:01', 'second article test de Paul', 'Article 2 de Paul', 1);

-- --------------------------------------------------------

--
-- Structure de la table `article_img`
--

CREATE TABLE `article_img` (
  `article_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_img`
--

INSERT INTO `article_img` (`article_id`, `img_id`) VALUES
(2, 3),
(3, 2),
(4, 1),
(4, 4),
(5, 3),
(5, 4),
(6, 4),
(7, 2),
(7, 4),
(9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name_categorie`) VALUES
(1, 'autre'),
(2, 'adoption'),
(3, 'soin'),
(4, 'education'),
(5, 'volontariat');

-- --------------------------------------------------------

--
-- Structure de la table `center`
--

CREATE TABLE `center` (
  `id` int(11) NOT NULL,
  `name_center` varchar(255) NOT NULL,
  `num_way` int(11) NOT NULL,
  `type_way` varchar(255) NOT NULL,
  `name_way` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `center`
--

INSERT INTO `center` (`id`, `name_center`, `num_way`, `type_way`, `name_way`, `zip_code`, `city`) VALUES
(1, 'Le roux', 12, 'rue', 'du roi', 13120, 'Gardanne'),
(2, 'Vertigo', 32, 'avenue', 'Jean-Jean De Jean', 75000, 'Paris'),
(3, 'Carmin', 54, 'place', 'des quatre dauphins', 13190, 'Aix-En-Provence');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `fk_article_id` int(11) NOT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `date_comment` datetime NOT NULL DEFAULT current_timestamp(),
  `text_comment` longtext NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `fk_article_id`, `fk_user_id`, `date_comment`, `text_comment`, `active`) VALUES
(2, 4, 1, '2023-12-01 14:58:54', 'ccc', 0),
(3, 4, 1, '2023-12-01 15:02:09', 'iiikiki', 1),
(4, 4, 1, '2023-12-01 15:03:27', 'àààà', 1),
(5, 4, 1, '2023-12-01 15:41:57', 'aaa', 0),
(6, 18, 1, '2023-12-05 09:28:13', 'comment ça va ?', 0);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231122135428', '2023-11-22 14:54:36', 1579);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `title_event` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `description_event` varchar(255) NOT NULL,
  `location_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `start_date`, `end_date`, `title_event`, `active`, `description_event`, `location_event`) VALUES
(1, '2023-11-24 14:55:15', '2024-11-24 14:55:15', 'Event test', 1, 'Ceci est un test pour vérifier si il affiche l\' événement. ', 'Rue du Chat-qui-Pêche 75012 Paris'),
(2, '2023-11-24 15:48:04', '2023-11-28 15:48:04', 'Event non actif', 1, 'Non actif', '25 Boulevard du rat, Lyon'),
(3, '2023-11-24 15:48:04', '2024-01-30 15:48:04', 'Actif event', 0, 'Actif event pour tester l\'affichage', 'Rue du Chat-qui-Pêche 75012 Paris');

-- --------------------------------------------------------

--
-- Structure de la table `event_user`
--

CREATE TABLE `event_user` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `description_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `path_img`, `description_img`) VALUES
(1, 'bleu-img-1.png', 'bleu'),
(2, 'vert-img-1.png', 'vert'),
(3, 'jaune-img-1.png', 'jaune'),
(4, 'mauve-img-1.png', 'mauve');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:171:\\\"http://127.0.0.1:8000/verify/email?expires=1700665185&signature=BmG7IvizCtdPflx6unfiCeoAVlL8dQ%2BA%2BdzYUQjNW4M%3D&token=%2F9KSWVifOG23yQs2CytqOxZsFVYE0HFIIjbKBTx%2FFik%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:21:\\\"no-reply@assomail.web\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:10:\\\"AssoAnimal\\\";}}s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:15:\\\"cathy@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-11-22 14:59:45', '2023-11-22 14:59:45', NULL),
(2, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":4:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:167:\\\"http://127.0.0.1:8000/verify/email?expires=1700734211&signature=H%2BtCRCHOI%2FRrGPaDsi8zHXqDaCtK4RDyaBa3h4C5DDI%3D&token=NkpvCE4OpyhlMzJ9xlzAdTat3CetIR9MtbaF5A0e62k%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:21:\\\"no-reply@assomail.web\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:10:\\\"AssoAnimal\\\";}}s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:14:\\\"paul@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2023-11-23 10:10:11', '2023-11-23 10:10:11', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `title_page`) VALUES
(1, 'Home'),
(2, 'About'),
(3, 'Contact'),
(4, 'F.A.Q.'),
(5, 'News'),
(6, 'Comment aider'),
(7, 'Evenements'),
(8, 'livre-d-or'),
(9, 'Cookies'),
(10, 'Confidentialité'),
(11, 'Mentions légales');

-- --------------------------------------------------------

--
-- Structure de la table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `fk_type_id` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `is_mobile` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `phone`
--

INSERT INTO `phone` (`id`, `center_id`, `fk_type_id`, `phone_number`, `is_mobile`) VALUES
(1, 3, 3, '072222222', 1),
(2, 3, 2, '0033333333', 0),
(3, 3, 1, '064444444', 1),
(4, 3, 1, '001425630', 0),
(5, 1, 3, '005555555', 0),
(6, 1, 2, '062544444', 1),
(7, 1, 2, '0099999999', 0),
(8, 1, 5, '0011111111', 0),
(9, 1, 5, '0711111111', 1),
(10, 1, 4, '0044444444', 0),
(11, 1, 5, '06211111111', 1),
(12, 2, 3, '0688888888', 1),
(13, 2, 3, '0011111110', 0),
(14, 2, 1, '0024524524', 0),
(15, 2, 4, '0699999999', 1),
(16, 2, 4, '0045345345', 0),
(17, 3, 4, '068888889', 1);

-- --------------------------------------------------------

--
-- Structure de la table `phone_type`
--

CREATE TABLE `phone_type` (
  `id` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `phone_type`
--

INSERT INTO `phone_type` (`id`, `name_type`) VALUES
(1, 'secrétariat'),
(2, 'direction'),
(3, 'adoption'),
(4, 'réservation événement'),
(5, 'don');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `is_verified`, `last_name`, `first_name`) VALUES
(1, 'cathy@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$KW4/NeknCPrcVaA47mcx/.bheXn16pr8KkCpXh0UjR5Gyd7P1M3Xu', 0, 'jules', 'catherine'),
(2, 'paul@gmail.com', '[\"ROLE_ADMIN\"]\r\n', '$2y$13$.eGV1CRP3zSg8Hk7Hp5sdOuUPYD73xTvPH9g4v5.2UaDCWQpYznWu', 0, 'paulo', 'paulopaulo'),
(3, 'perso@gmail.com', '[]', '$2y$13$d8v.aXPloFdBkg9n8PMj1.Rw9ijfwX3CB.bdSkhMSmpG6utp8JTcO', 0, 'ccc', 'yyyy');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66FC695EC8` (`fk_page_id`),
  ADD KEY `IDX_23A0E669D28E534` (`fk_categorie_id`),
  ADD KEY `IDX_23A0E665741EEB9` (`fk_user_id`);

--
-- Index pour la table `article_img`
--
ALTER TABLE `article_img`
  ADD PRIMARY KEY (`article_id`,`img_id`),
  ADD KEY `IDX_29DDEBD67294869C` (`article_id`),
  ADD KEY `IDX_29DDEBD6C06A9F55` (`img_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526C82FA4C0F` (`fk_article_id`),
  ADD KEY `IDX_9474526C5741EEB9` (`fk_user_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`user_id`,`event_id`),
  ADD KEY `IDX_D96CF1FFA76ED395` (`user_id`),
  ADD KEY `IDX_D96CF1FF71F7E88B` (`event_id`);

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_444F97DD5932F377` (`center_id`),
  ADD KEY `IDX_444F97DD3563B1BF` (`fk_type_id`);

--
-- Index pour la table `phone_type`
--
ALTER TABLE `phone_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `phone_type`
--
ALTER TABLE `phone_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E665741EEB9` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_23A0E669D28E534` FOREIGN KEY (`fk_categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_23A0E66FC695EC8` FOREIGN KEY (`fk_page_id`) REFERENCES `page` (`id`);

--
-- Contraintes pour la table `article_img`
--
ALTER TABLE `article_img`
  ADD CONSTRAINT `FK_29DDEBD67294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_29DDEBD6C06A9F55` FOREIGN KEY (`img_id`) REFERENCES `img` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C5741EEB9` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_9474526C82FA4C0F` FOREIGN KEY (`fk_article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `event_user`
--
ALTER TABLE `event_user`
  ADD CONSTRAINT `FK_D96CF1FF71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D96CF1FFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `FK_444F97DD3563B1BF` FOREIGN KEY (`fk_type_id`) REFERENCES `phone_type` (`id`),
  ADD CONSTRAINT `FK_444F97DD5932F377` FOREIGN KEY (`center_id`) REFERENCES `center` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
