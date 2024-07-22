-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : dim. 11 juin 2023 à 23:24
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(255) NOT NULL,
  `prenom_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `mdp_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `mdp_admin`) VALUES
(1, 'Diarrassouba', 'Imacertificat', 'imacertif@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(1, 'Amateur PHP'),
(2, 'Animateur PHP'),
(3, 'Développeur Web D01'),
(4, 'Développeur Web D02'),
(5, 'Concepteur site Web');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule_et` varchar(255) NOT NULL,
  `email_et` varchar(255) NOT NULL,
  `nom_et` varchar(255) NOT NULL,
  `prenom_et` varchar(255) NOT NULL,
  `mdp_et` varchar(255) NOT NULL,
  `Statut` int(11) NOT NULL,
  `photo_et` varchar(255) NOT NULL,
  `sexe_et` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule_et`, `email_et`, `nom_et`, `prenom_et`, `mdp_et`, `Statut`, `photo_et`, `sexe_et`) VALUES
(2, '21INP00200', 'salima@gmail.com', 'Traore', 'Salimata', '458855', 1, '16862574502022-07-14-21-29-23-5981.jpg', 'Feminin'),
(3, '22INP00100', 'ibrahdiarra40@gmail.com', 'Diarrassouba', 'Ibrah', '4588', 1, '1686218639ib.jpg', 'Masculin'),
(4, '22INP00101', 'itachi@gmail.com', 'Uchiha', 'Itachi', '12345', 2, '1686096385itachi1.jpg', 'Masculin'),
(5, '20INP00100', 'sasuke@gmail.com', 'Uchiha', 'Sasuke', '1234', 1, '1686383956UcSasNi.jpg', 'Masculin'),
(6, '10INP00100', 'shikamaru@gmail.com', 'Nara', 'Shikamaru', '1234', 0, '1686384437NaShiCh.jpg', 'Masculin'),
(7, '45INP00100', 'sakura@gmail.com', 'Haruno', 'Sakura', '1234', 1, '1686513464HuSakCh.jpg', 'Feminin');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `nom_formation` varchar(255) DEFAULT NULL,
  `categorie_formation` varchar(255) NOT NULL,
  `description_forma` text NOT NULL,
  `fichier_forma` varchar(1000) NOT NULL,
  `image_formation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom_formation`, `categorie_formation`, `description_forma`, `fichier_forma`, `image_formation`) VALUES
(2, 'Les fonctions', 'Animateur PHP', 'En PHP, les fonctions permettent d\'organiser et de réutiliser du code. Elles regroupent des instructions dans un bloc logique, prennent éventuellement des paramètres en entrée et peuvent retourner une valeur.\r\n', '1686503575Cours_php.pdf', '1686503575qcmanimateur.jpg'),
(3, 'Les bases du php', 'Amateur PHP', 'Les bases du PHP incluent les éléments suivants :\r\nLe code PHP est généralement inclus dans des balises <?php ?>.\r\nChaque instruction se termine par un point-virgule (;).\r\nVariables : Les variables en PHP commencent par le symbole dollar ($).\r\nVous pouvez leur donner un nom et leur attribuer une valeur, par exemple : $nom = \"John\";\r\nAffichage de contenu : Utilisez la fonction echo pour afficher du contenu à l\'écran, par exemple : echo \"Bonjour !\";\r\n', '1686503629Cours_php.pdf', '1686503629qcmamateur.jpg'),
(4, 'Les Classes en PHP', 'Développeur Web D01', 'En PHP, une classe est une structure qui permet de regrouper des variables (appelées propriétés) et des fonctions (appelées méthodes) liées entre elles. Les classes sont utilisées pour organiser et encapsuler la logique d\'un programme.', '1686503689Cours_php.pdf', '1686503689qcmd01.jpg'),
(5, 'La gestion des fichiers', 'Développeur Web D02', 'En PHP, vous pouvez manipuler des fichiers en effectuant différentes opérations telles que la lecture, l\'écriture, la modification et la suppression de fichiers. Voici quelques opérations de base sur les fichiers en PHP : Ouverture d\'un fichier : Utilisez la fonction fopen() pour ouvrir un fichier. La fonction prend deux paramètres : le nom du fichier et le mode d\'ouverture (lecture, écriture, etc.). Lecture d\'un fichier :Utilisez les fonctions fread() ou fgets() pour lire le contenu d\'un fichier. La fonction fread() lit une quantité spécifiée de données, tandis que fgets() lit une ligne complète.', '1686503729Cours_php.pdf', '1686503729qcmd02.jpg'),
(6, 'PHP et Mysql', 'Concepteur site Web', 'PHP et MySQL sont souvent utilisés ensemble pour développer des applications web. Voici quelques points clés concernant l\'intégration de PHP avec MySQL : Connexion à une base de données MySQL : PHP offre des extensions telles que MySQLi (MySQL Improved) et PDO (PHP Data Objects) pour se connecter à une base de données MySQL. Vous devez fournir les informations de connexion telles que l\'hôte, le nom d\'utilisateur, le mot de passe et le nom de la base de données.\r\nExécution de requêtes SQL : Une fois connecté à la base de données, vous pouvez exécuter des requêtes SQL à l\'aide des fonctions fournies par les extensions MySQLi ou PDO. Récupération des résultats de requête :Vous pouvez récupérer les résultats d\'une requête SELECT à l\'aide des fonctions de récupération fournies par les extensions MySQLi ou PDO.', '1686503752Cours_php.pdf', '1686503752qcmcon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `Matricule` varchar(255) NOT NULL,
  `Niveau` int(11) NOT NULL,
  `Note` int(11) NOT NULL,
  `Statut` int(11) NOT NULL DEFAULT 0,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `Matricule`, `Niveau`, `Note`, `Statut`, `Date`) VALUES
(1, '22INP00100', 5, 16, 1, '2023-06-10 15:42:38'),
(2, '22INP00100', 2, 8, 2, '2023-06-10 15:43:26'),
(6, '21INP00200', 2, 16, 0, '2023-06-10 16:31:06'),
(13, '22INP00100', 1, 8, 0, '2023-06-11 16:57:36'),
(14, '22INP00100', 2, 12, 1, '2023-06-11 18:07:18'),
(15, '22INP00100', 2, 12, 1, '2023-06-11 19:52:44');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `idq` int(3) NOT NULL,
  `libelleQ` text NOT NULL,
  `categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idq`, `libelleQ`, `categorie`) VALUES
(1, '« Type Hinting » a été introduit dans quelle version de PHP?', 1),
(2, 'Parmi les propositions suivantes, laquelle est la meilleure façon pour définir une fonction en PHP?', 2),
(3, 'Une fonction en PHP qui commence par __ (double trait de soulignement) est connue sous le nom d’une _____?', 3),
(4, 'Quelle fonction est utilisée pour supprimer les espaces (ou autres caractères) au début et à la fin d’une chaîne?', 4),
(5, 'Quelle est la durée d’exécution par défaut définie dans « set_time_limit() »?', 5),
(6, 'Lequel des fonctions suivants est valide?', 1),
(7, 'Quelle est la différence entre « echo » et « print »?', 2),
(8, ' La fonction ____________ en PHP Renvoie une liste des en-têtes de réponse envoyés (ou prêts à être envoyés).', 3),
(9, ' Quelle est la différence entre les méthodes GET et POST?', 4),
(10, ' A quoi sert la fonction strpos()?', 5),
(11, 'Lequel des énoncés suivants est correct à propos de NULL?', 1),
(12, 'Laquelle des constantes magiques suivantes de PHP renvoie le nom de la classe?', 2),
(13, 'Lequel des éléments suivants est utilisé pour déclarer une constante?', 3),
(14, 'S’il y a un problème de chargement du fichier, la fonction require() génère un warning, mais le script continue son exécution.', 4),
(15, 'Lequel des éléments suivants est utilisé pour supprimer un cookie?', 5),
(16, 'Laquelle des fonctions PHP suivantes peut être utilisée pour créer une fonction qui accepte un nombre quelconque d’arguments?', 1),
(17, 'Laquelle des méthodes suivantes renvoie une chaîne formatée représentant une date?', 2),
(18, 'Laquelle des fonctions PHP suivantes peut être utilisée pour trouver des fichiers?', 3),
(19, 'Laquelle des fonctions PHP suivantes peut être utilisée pour générer des identifiants uniques?', 4),
(20, 'A quoi sert array_keys()?', 5),
(21, 'Laquelle des fonctions suivantes trie un tableau dans l’ordre inverse?', 1),
(22, 'Laquelle des fonctions suivantes crée un tableau?', 2),
(23, 'L’index des tableaux en PHP commence par la position ___________?', 3),
(24, 'Laquelle des fonctions suivantes vérifie si une valeur spécifique existe dans un tableau?', 4),
(25, 'Quelle fonction retournera « True » si la variable passée en paramètre est un tableau, ou « False » si ce n’est pas le cas?', 5),
(26, 'Quelle fonction permet d’ajouter une valeur à la fin du tableau?', 1),
(27, 'Quelle fonction peut être utilisée pour déplacer le pointeur sur la position précédente du tableau?', 2),
(28, 'Laquelle des fonctions suivantes trie un tableau dans l’ordre inverse?', 3),
(29, 'Quelle fonction « count » renvoie un tableau composé de paires clé/valeur ?', 4),
(30, 'Laquelle des fonctions est utilisée pour trier un tableau par ordre décroissant?', 5),
(31, 'Quelle fonction PHP peut être utilisée pour inclure un fichier dans un script PHP?', 1),
(32, 'Quelle fonction PHP peut être utilisée pour obtenir la longueur d une chaîne de caractères?', 2),
(33, 'Quelle fonction PHP peut être utilisée pour ajouter un élément à la fin d\'un tableau?', 3),
(34, 'Quelle fonction PHP peut être utilisée pour trier un tableau en ordre croissant?', 4),
(35, 'Quelle fonction PHP peut être utilisée pour retourner une sous-chaîne d\'une chaîne de caractères?', 5),
(36, 'Quelle fonction PHP peut être utilisée pour convertir une chaîne de caractères en majuscules?', 1),
(37, 'Quelle fonction PHP peut être utilisée pour convertir une chaîne de caractères en minuscules?', 2),
(38, 'Quelle fonction PHP peut être utilisée pour supprimer les espaces blancs en début et en fin d\'une chaîne de caractères?', 3),
(39, 'Quelle fonction PHP peut être utilisée pour remplacer toutes les occurrences d\'une chaîne dans une autre chaîne?', 4),
(40, 'Quelle fonction PHP peut être utilisée pour obtenir la clé d\'un tableau à partir de sa valeur?', 5),
(41, 'Quelle fonction PHP peut être utilisée pour retourner le nombre d\'éléments dans un tableau?', 1),
(42, 'Quelle fonction PHP peut être utilisée pour vérifier si une variable est un tableau?', 2),
(43, 'Quelle fonction PHP peut être utilisée pour récupérer la valeur maximale d\'un tableau?', 3),
(44, 'Quelle fonction PHP peut être utilisée pour supprimer un élément spécifique d\'un tableau?', 4),
(45, 'Quelle fonction PHP peut être utilisée pour obtenir la date et l\'heure actuelles?', 5),
(46, 'Qu\'est-ce qu\'une classe en PHP ?', 1),
(47, 'Comment déclarer une classe en PHP ?', 2),
(48, 'Comment appeler une méthode d\'une classe en PHP ?', 3),
(49, 'Comment accéder à une propriété d\'une classe en PHP ?', 4),
(50, 'Comment déclarer une méthode dans une classe en PHP ?', 5),
(51, 'Comment déclarer une propriété dans une classe en PHP ?', 1),
(52, 'Comment hériter d\'une classe parent en PHP ?', 2),
(53, 'Comment appeler une méthode de la classe parent à partir d\'une classe enfant en PHP ?', 3),
(54, 'Comment définir une méthode statique dans une classe en PHP ?', 4),
(55, 'Comment appeler une méthode statique d\'une classe en PHP ?', 5),
(56, 'Comment déclarer une constante dans une classe en PHP ?', 1),
(57, 'Comment accéder à une constante dans une classe en PHP ?', 2),
(58, 'Comment déclarer une classe abstraite en PHP ?', 3),
(59, 'Comment déclarer une méthode abstraite dans une classe en PHP ?', 4),
(60, 'Comment se connecte-t-on à une base de données MySQL en PHP ?', 5),
(61, 'Comment exécute-t-on une requête préparée en PHP ?', 1),
(62, 'Comment affiche-t-on les erreurs MySQL en PHP ?', 2),
(63, 'Qu\'est-ce que la fonction mysqli_fetch_array() en PHP ?', 3),
(64, 'Quelle est la fonction PHP utilisée pour échapper les caractères spéciaux dans une chaîne de caractères avant de l\'envoyer à une base de données MySQL ?', 4),
(65, 'Qu\'est-ce que PHP signifie ?', 5),
(66, 'Comment déclarer une variable en PHP ?', 1),
(67, 'Quelle est la fonction utilisée pour afficher du texte dans PHP ?', 2),
(68, 'Comment inclure un fichier PHP dans un autre fichier PHP ?', 3),
(69, 'Comment récupérer la valeur d\'un champ de formulaire en PHP ?', 4),
(70, 'Comment créer une fonction en PHP ?', 5),
(71, 'Comment créer un tableau (array) en PHP ?', 1),
(72, 'Comment afficher la longueur (nombre d\'éléments) d\'un tableau en PHP ?', 2),
(73, 'Comment ajouter un élément à la fin d\'un tableau en PHP ?', 3),
(74, 'Comment parcourir un tableau en PHP ?', 4),
(75, 'Comment vérifier si un champ de formulaire est vide en PHP ?', 5),
(76, 'Comment vérifier si un champ de formulaire contient uniquement des lettres en PHP ?', 1),
(77, 'Comment vérifier si un champ de formulaire contient uniquement des chiffres en PHP ?', 2),
(78, 'Comment vérifier si un champ de formulaire contient une adresse email valide en PHP ?', 3),
(79, 'Comment limiter la longueur d\'un champ de formulaire en PHP ?', 4),
(80, 'Comment afficher une liste d\'erreurs de validation sur une page en PHP ?', 5),
(81, 'Comment empêcher les attaques par injection SQL lors de la soumission d\'un formulaire en PHP ?', 1),
(82, 'Comment rediriger l\'utilisateur vers une autre page après la soumission d\'un formulaire en PHP ?', 2),
(83, 'Quelle méthode HTTP est utilisée pour envoyer les données d\'un formulaire en PHP ?', 3),
(84, 'Comment récupérer la valeur d\'un champ de formulaire dans une page PHP ?', 4),
(85, 'Comment définir une action pour un formulaire dans une page PHP ?', 5),
(86, 'Comment traiter les données d\'un formulaire dans une page PHP ?', 1),
(87, 'Comment afficher les données d\'un formulaire dans une page PHP après leur soumission ?', 2),
(88, 'Comment empêcher la réémission des données d\'un formulaire lors d\'un rafraîchissement de la page en PHP ?', 3),
(89, 'Comment gérer les fichiers téléchargés à partir d\'un formulaire en PHP ?', 4),
(90, 'Comment valider les données d\'un formulaire en PHP ?', 5),
(91, 'Comment ouvrir un fichier en PHP ?', 1),
(92, 'Quel mode d\'ouverture doit-on utiliser pour écrire dans un fichier en PHP ?', 2),
(93, 'Comment lire le contenu d\'un fichier en PHP ?', 3),
(94, 'Comment écrire dans un fichier en PHP ?', 4),
(95, 'Comment fermer un fichier en PHP ?', 5),
(96, 'Comment vérifier si un fichier existe en PHP ?', 1),
(97, 'Comment supprimer un fichier en PHP ?', 2),
(98, 'Comment renommer un fichier en PHP ?', 3),
(99, 'Qu\'est-ce qu\'un cookie en PHP ?', 4),
(100, 'Comment créer un cookie en PHP ?', 5),
(101, 'Comment définir une valeur pour un cookie en PHP ?', 1),
(102, 'Comment supprimer un cookie en PHP ?', 2),
(103, 'Combien de temps un cookie peut-il rester actif ?', 3),
(104, 'Comment accéder aux données d\'un cookie en PHP ?', 4),
(105, 'Peut-on stocker des données sensibles dans un cookie ?', 5),
(106, 'Quelle est l\'utilité de var_dump() en PHP Objet ?', 3);

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `idr` int(3) NOT NULL,
  `idq` int(3) NOT NULL,
  `libeller` text CHARACTER SET utf8mb4 NOT NULL,
  `verite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`idr`, `idq`, `libeller`, `verite`) VALUES
(1, 1, 'PHP 4', 0),
(2, 1, 'PHP 5', 1),
(3, 1, 'PHP 5.3', 0),
(4, 1, 'PHP 6', 0),
(5, 2, 'function { instructions; }', 0),
(6, 2, ' type function_name(parameters) { instructions; }', 0),
(7, 2, 'function_name(parameters) { instructions; }', 0),
(8, 2, 'function function_name(parameters) { instructions; }', 1),
(9, 3, 'Fonction magique', 1),
(10, 3, 'Fonction incorporée', 0),
(11, 3, 'Fonction par défau', 0),
(12, 3, 'Fonction définie par l’utilisateur', 0),
(13, 4, 'trim_str', 0),
(14, 4, 'strip_str', 0),
(15, 4, 'strip', 0),
(16, 4, 'trim', 1),
(17, 5, '20 secondes', 0),
(18, 5, '30 secondes', 1),
(19, 5, '40 secondes', 0),
(20, 5, '35 secondes', 0),
(21, 6, 'function()', 0),
(22, 6, ' $function()', 0),
(23, 6, ' .function()', 0),
(24, 6, '€()', 1),
(25, 7, 'Ils sont pareils.', 0),
(26, 7, '« print » peut prendre plusieurs paramètres, tandis que « echo » ne peut pas', 0),
(27, 7, '« echo » peut prendre plusieurs paramètres, alors que « print » ne peut pas', 1),
(28, 7, '« print » est une fonction, et « echo » n’est pas une fonction', 0),
(29, 8, 'header()', 0),
(30, 8, 'headers_list()', 1),
(31, 8, 'header_sent()', 0),
(32, 8, 'header_send()', 0),
(33, 9, 'GET affiche les valeurs entrées dans un formulaire dans l’URL, contrairement à POST', 1),
(34, 9, 'POST affiche les valeurs saisies dans un formulaire dans l’URL, contrairement à GET.', 0),
(35, 9, 'Il n’y a pas de différence', 0),
(36, 9, 'Il n’y a de différence', 0),
(37, 10, 'Trouver le dernier caractère d’une chaîne', 0),
(38, 10, 'Rechercher un caractère dans une chaîne', 1),
(39, 10, 'Les deux A et B sont vrais.', 0),
(40, 10, 'Localiser la position du premier caractère d’une chaîne', 0),
(41, 11, 'NULL est un type spécial qui n’a qu’une valeur: NULL.', 1),
(42, 11, 'La constante spéciale NULL est mise en majuscule par convention, mais en réalité, elle est insensible à la casse.', 0),
(43, 11, 'NULL est un type générique', 0),
(44, 11, 'Aucune de ces réponses n’est vraie', 0),
(45, 12, '_LINE_', 0),
(46, 12, '_FILE_', 0),
(47, 12, '_FUNCTION_', 0),
(48, 12, ' _CLASS_', 1),
(49, 13, 'const', 0),
(50, 13, 'constant', 0),
(51, 13, 'define', 1),
(52, 13, ' #pragma', 0),
(53, 14, 'Vrai', 0),
(54, 14, 'Faux', 1),
(55, 14, 'Les deux', 0),
(56, 14, 'Autre', 0),
(57, 15, 'La fonction setcookie()', 1),
(58, 15, 'La variable $_COOKIE', 0),
(59, 15, 'La fonction isset()', 0),
(60, 15, 'Aucune de ces réponses n’est vraie.', 0),
(61, 16, 'func_get_argv()', 0),
(62, 16, 'func_get_args()', 1),
(63, 16, 'get_argv()', 0),
(64, 16, 'get_argc()', 0),
(65, 17, 'time()', 0),
(66, 17, 'getdate()', 0),
(67, 17, 'date()', 1),
(68, 17, 'Aucune de ces réponses n’est vraie', 0),
(69, 18, 'get_file()', 0),
(70, 18, 'file()', 0),
(71, 18, 'fold()', 0),
(72, 18, 'glob()', 1),
(73, 19, 'uniqueid()', 1),
(74, 19, ' id()', 0),
(75, 19, 'md5()', 0),
(76, 19, 'mdid()', 0),
(77, 20, 'Compare les clés d’un tableau et retourne les correspondances', 0),
(78, 20, 'Vérifie si la clé spécifiée existe dans le tableau', 0),
(79, 20, 'Renvoie toutes les clés d’un tableau', 1),
(80, 20, 'Les deux A et B sont vrais', 0),
(81, 21, 'rsort()', 1),
(82, 21, 'shuffle()', 0),
(83, 21, 'reset()', 0),
(84, 21, 'sort()', 0),
(85, 22, 'array()', 1),
(86, 22, 'new array()', 0),
(87, 22, 'array[]', 0),
(88, 22, '$array()', 0),
(89, 23, '1', 0),
(90, 23, '2', 0),
(91, 23, '0', 1),
(92, 23, '-1', 0),
(93, 24, 'krsort()', 0),
(94, 24, 'key()', 0),
(95, 24, 'in_array()', 1),
(96, 24, 'extract()', 0),
(97, 25, 'Enter the gungeon', 0),
(98, 25, 'is_array()', 1),
(99, 25, 'do_array()', 0),
(100, 25, 'in_array()', 0),
(101, 26, 'array_unshift()', 0),
(102, 26, 'into_array()', 0),
(103, 26, 'array_end()', 0),
(104, 26, 'array_push()', 1),
(105, 27, 'last()', 0),
(106, 27, 'before()', 0),
(107, 27, 'prev()', 1),
(108, 27, 'previous()', 0),
(109, 28, 'rsort()', 1),
(110, 28, 'shuffle()', 0),
(111, 28, 'reset()', 0),
(112, 28, 'sort()', 0),
(113, 29, 'count()', 0),
(114, 29, 'array_count()', 0),
(115, 29, 'array_count_values()', 1),
(116, 29, 'count_values()', 0),
(117, 30, 'sort()', 0),
(118, 30, 'asort()', 0),
(119, 30, 'rsort()', 1),
(120, 30, 'dsort()', 0),
(121, 31, 'require()', 0),
(122, 31, 'include()', 1),
(123, 31, 'require_once()', 0),
(124, 31, 'include_once()', 0),
(125, 32, 'count()', 0),
(126, 32, 'strlen()', 1),
(127, 32, 'sizeof()', 0),
(128, 32, 'length()', 0),
(129, 33, 'array_push()', 1),
(130, 33, 'array_pop()', 0),
(131, 33, 'array_shift()', 0),
(132, 33, 'array_unshift()', 0),
(133, 34, 'sort()', 1),
(134, 34, 'rsort()', 0),
(135, 34, 'ksort()', 0),
(136, 34, 'usort()', 0),
(137, 35, 'substr()', 1),
(138, 35, 'sub()', 0),
(139, 35, 'string()', 0),
(140, 35, 'slice()', 0),
(141, 36, 'upper()', 0),
(142, 36, 'uppercase()', 0),
(143, 36, 'strtoupper()', 1),
(144, 36, 'toUpper()', 0),
(145, 37, 'lower()', 0),
(146, 37, 'lowercase()', 0),
(147, 37, 'strtolower()', 1),
(148, 37, 'toLower()', 0),
(149, 38, 'trim()', 1),
(150, 38, 'rtrim()', 0),
(151, 38, 'ltrim()', 0),
(152, 38, 'strip()', 0),
(153, 39, 'replace()', 0),
(154, 39, 'str_replace()', 1),
(155, 39, 'substr_replace()', 0),
(156, 39, 'preg_replace()', 0),
(157, 40, 'array_search()', 1),
(158, 40, 'array_key_exists()', 0),
(159, 40, 'in_array()', 0),
(160, 40, 'key()', 0),
(161, 41, 'count()', 1),
(162, 41, 'size()', 0),
(163, 41, 'length()', 0),
(164, 41, 'sizeof()', 0),
(165, 42, 'is_array()', 1),
(166, 42, 'typeof()', 0),
(167, 42, 'gettype()', 0),
(168, 42, 'isArray()', 0),
(169, 43, 'max()', 1),
(170, 43, 'min()', 0),
(171, 43, 'array_max()', 0),
(172, 43, 'array_min()', 0),
(173, 44, 'unset()', 1),
(174, 44, 'delete()', 0),
(175, 44, 'remove()', 0),
(176, 44, 'splice()', 0),
(177, 45, 'time()', 0),
(178, 45, 'date()', 1),
(179, 45, 'datetime()', 0),
(180, 45, 'now()', 0),
(181, 46, 'Un type de données intégré à PHP', 0),
(182, 46, 'Un bloc de code qui peut être réutilisé dans un script PHP', 1),
(183, 46, 'Une structure de données qui stocke des valeurs de types différents', 0),
(184, 46, 'Une méthode permettant d\'exécuter une action sur une variable', 0),
(185, 47, 'class MyClass {}', 1),
(186, 47, 'new MyClass {}', 0),
(187, 47, 'function MyClass {}', 0),
(188, 47, 'declare class MyClass {}', 0),
(189, 48, 'MyClass.method()', 0),
(190, 48, 'MyClass->method()', 1),
(191, 48, 'method(MyClass)', 0),
(192, 48, 'method(MyClass->)', 0),
(193, 49, 'MyClass.property', 0),
(194, 49, 'MyClass->property', 1),
(195, 49, 'property(MyClass)', 0),
(196, 49, 'property(MyClass->)', 0),
(197, 50, 'function myMethod() {}', 1),
(198, 50, 'method myMethod() {}', 0),
(199, 50, 'declare method myMethod() {}', 0),
(200, 50, 'class myMethod() {}', 0),
(201, 51, 'property myProperty;', 0),
(202, 51, 'declare property myProperty;', 1),
(203, 51, 'public $myProperty;', 0),
(204, 51, 'function myProperty() {}', 0),
(205, 52, 'class ChildClass extends ParentClass {}', 1),
(206, 52, 'class ChildClass inherits ParentClass {}', 0),
(207, 52, 'class ChildClass implements ParentClass {}', 0),
(208, 52, 'class ChildClass extends class ParentClass {}', 0),
(209, 53, 'parent::method()', 1),
(210, 53, 'super::method()', 0),
(211, 53, 'base::method()', 0),
(212, 53, 'parent.method()', 0),
(213, 54, 'static function myMethod() {}', 1),
(214, 54, 'method static myMethod() {}', 0),
(215, 54, 'declare static myMethod() {}', 0),
(216, 54, 'class static myMethod() {}', 0),
(217, 55, 'MyClass->myStaticMethod()', 0),
(218, 55, 'MyClass::myStaticMethod()', 1),
(219, 55, 'MyClass.myStaticMethod()', 0),
(220, 55, 'myStaticMethod(MyClass)', 0),
(221, 56, 'const MY_CONST = \"value\";', 1),
(222, 56, 'define MY_CONST \"value\";', 0),
(223, 56, 'static MY_CONST = \"value\";', 0),
(224, 56, 'class MY_CONST = \"value\";', 0),
(225, 57, 'MyClass.MY_CONST', 0),
(226, 57, 'MyClass::MY_CONST', 1),
(227, 57, 'MY_CONST(MyClass)', 0),
(228, 57, 'MY_CONST(MyClass->)', 0),
(229, 58, 'abstract class MyClass {}', 1),
(230, 58, 'class abstract MyClass {}', 0),
(231, 58, 'declare abstract MyClass {}', 0),
(232, 58, 'static class abstract MyClass {}', 0),
(233, 59, 'abstract function myMethod();', 1),
(234, 59, 'function abstract myMethod();', 0),
(235, 59, 'declare abstract myMethod();', 0),
(236, 59, 'class abstract myMethod();', 0),
(237, 60, 'En utilisant la fonction connect()', 0),
(238, 60, 'En utilisant la fonction open()', 0),
(239, 60, 'En utilisant la fonction start()', 0),
(240, 60, 'En utilisant la fonction mysql_connect()', 1),
(241, 61, 'En utilisant la fonction execute()', 1),
(242, 61, 'En utilisant la fonction prepare()', 0),
(243, 61, 'En utilisant la fonction query()', 0),
(244, 61, 'En utilisant la fonction run()', 0),
(245, 62, 'En utilisant la fonction error_reporting()', 0),
(246, 62, 'En utilisant la fonction mysql_error()', 0),
(247, 62, 'En utilisant la fonction mysqli_error()', 1),
(248, 62, 'En utilisant la fonction print_error()', 0),
(249, 63, 'Une fonction qui renvoie une ligne de résultats sous forme de tableau associatif', 1),
(250, 63, 'Une fonction qui renvoie une ligne de résultats sous forme de tableau numérique', 0),
(251, 63, 'Une fonction qui renvoie toutes les lignes de résultats sous forme de tableau associatif', 0),
(252, 63, 'Une fonction qui renvoie toutes les lignes de résultats sous forme de tableau numérique', 0),
(253, 64, 'escape()', 0),
(254, 64, 'addslashes()', 1),
(255, 64, 'sanitize()', 0),
(256, 64, 'clean()', 0),
(257, 65, 'Personal Home Page', 0),
(258, 65, 'PHP Hypertext Preprocessor', 1),
(259, 65, 'Professional Hypertext Preprocessor', 0),
(260, 65, 'Aucune', 0),
(261, 66, 'Var', 0),
(262, 66, 'var $ma_variable;', 0),
(263, 66, '$ma_variable = \"valeur\";', 1),
(264, 66, 'Les deux sont correctes', 0),
(265, 67, 'print()', 0),
(266, 67, 'echo()', 1),
(267, 67, 'Les deux sont correctes.', 1),
(268, 67, 'Les deux ne sont pas correctes.', 0),
(269, 68, 'include \"nom_fichier.php\";', 1),
(270, 68, 'require_once \"nom_fichier.php\";', 0),
(271, 68, 'Les deux sont correctes.', 1),
(272, 68, 'Les deux ne sont pas correctes.', 0),
(273, 69, '$_GET[\'nom_champ\']', 0),
(274, 69, '$_POST[\'nom_champ\']', 0),
(275, 69, 'Les deux sont correctes', 1),
(276, 69, 'Les deux ne sont pas correctes', 0),
(277, 70, 'function ma_fonction() { }', 1),
(278, 70, 'def ma_fonction() { }', 0),
(279, 70, 'Les deux sont correctes', 0),
(280, 70, 'Les deux ne sont pas correctes', 0),
(281, 71, '$mon_tableau = array(\"valeur1\", \"valeur2\", \"valeur3\");', 0),
(282, 71, '$mon_tableau = [\"valeur1\", \"valeur2\", \"valeur3\"];', 0),
(283, 71, 'Les deux sont correctes.', 1),
(284, 71, 'Les deux ne sont pas correctes.', 0),
(285, 72, 'count($mon_tableau);', 1),
(286, 72, 'length($mon_tableau);', 0),
(287, 72, 'size($mon_tableau);', 0),
(288, 72, 'Aucune', 0),
(289, 73, 'array_push($mon_tableau, \"nouvelle_valeur\");', 0),
(290, 73, '$mon_tableau[] = \"nouvelle_valeur\";', 0),
(291, 73, 'Les deux sont correctes.', 1),
(292, 73, 'Les deux ne sont pas correctes.', 0),
(293, 74, 'for ($i=0; $i<count($mon_tableau); $i++) { }', 0),
(294, 74, 'foreach ($mon_tableau as $valeur) { }', 0),
(295, 74, 'Les deux sont correctes.', 1),
(296, 74, 'Aucune', 0),
(297, 75, 'if (empty($_POST[\'nom_champ\'])) { }', 0),
(298, 75, 'if ($_POST[\'nom_champ\'] == \") { }', 0),
(299, 75, 'Les deux sont correctes.', 1),
(300, 75, 'Aucune', 0),
(301, 76, 'if (preg_match(\'/^[a-zA-Z]+$/\', $_POST[\'nom_champ\'])) { }', 1),
(302, 76, '(preg_match(\'/^[a-z]+$/i\', $_POST[\'nom_champ\'])) { }', 0),
(303, 76, 'Les deux sont correctes.', 0),
(304, 76, 'Les deux ne sont pas correctes.', 0),
(305, 77, 'if (preg_match(\'/^[0-9]+$/\', $_POST[\'nom_champ\'])) { }', 1),
(306, 77, '(preg_match(\'/^[0-9]+$/\', $_POST[\'nom_champ\'])) { }', 0),
(307, 77, 'Aucune', 0),
(308, 77, 'Les deux sont correctes', 0),
(309, 78, 'if (filter_var($POST[\'nom_champ\'], FILTER_VALIDATE_EMAIL)) { }', 1),
(310, 78, '(filter_var($POST[\'nom_champ\'], FILTER_VALIDATE_EMAIL)) { }', 0),
(311, 78, 'if (filter_var($POST[\'nom_champ\'], FILTER_VALIDATE_EMAIL))', 0),
(312, 78, 'Aucune', 0),
(313, 79, 'En utilisant la fonction substr() pour extraire une sous-chaîne de la valeur saisie.', 0),
(314, 79, 'En utilisant la fonction strlen() pour obtenir la longueur de la valeur saisie.', 0),
(315, 79, 'En utilisant l\'attribut (maxlength) dans la balise HTML correspondante', 1),
(316, 79, 'Aucune', 0),
(317, 80, 'En stockant les erreurs dans un tableau et en les affichant avec une boucle foreach().', 1),
(318, 80, 'En stockant les erreurs dans une chaîne de caractères et en les affichant avec la fonction echo', 0),
(319, 80, 'Les deux sont correctes', 0),
(320, 80, 'Aucune', 0),
(321, 81, 'En utilisant des requêtes préparées avec PDO ou mysqli pour communiquer avec la base de données', 0),
(322, 81, 'En nettoyant les données saisies en utilisant la fonction mysqli_real_escape_string() ou en les passant par la fonction htmlspecialchars().', 0),
(323, 81, 'Les deux sont correctes.', 1),
(324, 81, 'Aucune', 0),
(325, 82, 'En utilisant la fonction header() pour envoyer une en-tête HTTP de redirection', 1),
(326, 82, 'En utilisant la fonction location.href pour modifier l\'URL de la page en JavaScript.', 0),
(327, 82, 'Les deux sont correctes', 0),
(328, 82, 'Aucune', 0),
(329, 83, 'GET', 0),
(330, 83, 'POST', 1),
(331, 83, 'PUT', 0),
(332, 83, 'Aucune', 0),
(333, 84, 'En utilisant la superglobale $_GET', 0),
(334, 84, 'En utilisant la superglobale $_POST', 1),
(335, 84, 'Les deux sont correctes.', 0),
(336, 84, 'Aucune', 0),
(337, 85, 'En utilisant l\'attribut (method) dans la balise <form>', 0),
(338, 85, 'En utilisant l\'\'attribut (action) dans la balise <form>', 1),
(339, 85, 'Les deux sont correctes', 0),
(340, 85, 'Aucune', 0),
(341, 86, 'En utilisant une condition if pour vérifier si les champs ont été soumis.', 0),
(342, 86, 'En utilisant une boucle foreach pour parcourir les champs de formulaire', 0),
(343, 86, 'En utilisant les superglobales $_POST ou $_GET pour récupérer les valeurs des champs', 1),
(344, 86, 'Aucune', 0),
(345, 87, 'En utilisant la fonction echo pour afficher les valeurs des champs directement', 0),
(346, 87, 'En stockant les valeurs des champs dans des variables et en les affichant ensuite avec la fonction echo', 1),
(347, 87, 'En utilisant une boucle foreach pour parcourir les champs de formulaire et afficher leur valeur', 0),
(348, 87, 'Aucune', 0),
(349, 88, 'En utilisant la fonction header() pour rediriger l\'utilisateur vers une autre page après la soumission du formulaire.', 1),
(350, 88, 'En utilisant la fonction unset() pour supprimer les variables de session contenant les données du formulaire.', 0),
(351, 88, 'En utilisant l\'attribut (autocomplete) avec la valeur (off) dans la balise <form>.', 0),
(352, 88, 'Aucune', 0),
(353, 89, 'La poireEn utilisant la superglobale $_FILES pour récupérer les informations sur le fichier téléchargé', 0),
(354, 89, 'En utilisant la fonction move_uploaded_file() pour déplacer le fichier téléchargé vers un emplacement spécifique sur le serveur', 0),
(355, 89, 'Les deux sont correctes', 1),
(356, 89, 'Aucune', 0),
(357, 90, 'En utilisant des expressions régulières pour vérifier la syntaxe des champs.', 0),
(358, 90, 'En utilisant les fonctions de validation de PHP telles que filter_var() ou ctype_*', 0),
(359, 90, 'En utilisant des bibliothèques de validation externes telles que Respect/Validation.', 0),
(360, 90, 'Toutes les réponses ci-dessus sont correctes', 1),
(361, 91, 'En utilisant la fonction file_open()', 0),
(362, 91, 'En utilisant la fonction fopen()', 1),
(363, 91, 'En utilisant la fonction file_get_contents()', 0),
(364, 91, 'Aucune', 0),
(365, 92, '\"r\"', 0),
(366, 92, '\"w\"', 1),
(367, 92, '\"a\"', 0),
(368, 92, 'Aucune', 0),
(369, 93, 'En utilisant la fonction file_get_contents()', 1),
(370, 93, 'En utilisant la fonction readfile()', 0),
(371, 93, 'En utilisant la fonction fgets()', 0),
(372, 93, 'Aucune', 0),
(373, 94, 'En utilisant la fonction fwrite()', 0),
(374, 94, 'En utilisant la fonction file_put_contents()', 0),
(375, 94, 'Les deux sont correctes', 1),
(376, 94, 'Aucune', 0),
(377, 95, 'En utilisant la fonction fclose()', 1),
(378, 95, 'En utilisant la fonction file_close()', 0),
(379, 95, 'En utilisant la fonction file_end()', 0),
(380, 95, 'Aucune', 0),
(381, 96, 'En utilisant la fonction file_exists()', 0),
(382, 96, 'En utilisant la fonction is_file()', 0),
(383, 96, 'Les deux sont correctes.', 1),
(384, 96, 'Aucune', 0),
(385, 97, 'En utilisant la fonction unlink()', 1),
(386, 97, 'En utilisant la fonction delete_file()', 0),
(387, 97, 'En utilisant la fonction remove_file()', 0),
(388, 97, 'Aucune', 0),
(389, 98, 'En utilisant la fonction rename()', 1),
(390, 98, 'En utilisant la fonction move_file()', 0),
(391, 98, 'En utilisant la fonction rename_file()', 1),
(392, 98, 'Aucunes', 0),
(393, 99, 'Un petit fichier stocké sur le serveur', 0),
(394, 99, 'Un petit fichier stocké sur le client', 1),
(395, 99, 'Un petit fichier stocké sur le routeur', 0),
(396, 99, 'Aucune', 0),
(397, 100, 'En utilisant la fonction setcookie()', 1),
(398, 100, 'En utilisant la fonction createcookie()', 0),
(399, 100, 'En utilisant la fonction newcookie()', 0),
(400, 100, 'Aucune', 0),
(401, 101, 'En passant la valeur comme un argument à la fonction setcookie()', 1),
(402, 101, 'En utilisant la variable $_COOKIE', 0),
(403, 101, 'En utilisant la variable $_SESSION', 0),
(404, 101, 'Aucune', 0),
(405, 102, 'En utilisant la fonction deletecookie()', 0),
(406, 102, 'En utilisant la fonction unsetcookie()', 0),
(407, 102, 'En utilisant la fonction setcookie() avec une date d\'expiration passée', 1),
(408, 102, 'Aucune', 0),
(409, 103, '24 heures', 0),
(410, 103, '1 semaine', 0),
(411, 103, 'Indéfiniment', 1),
(412, 103, 'Aucune', 0),
(413, 104, 'En utilisant la variable $_COOKIE', 1),
(414, 104, 'En utilisant la variable $_SESSION', 0),
(415, 104, 'En utilisant la fonction getcookie()', 0),
(416, 104, 'Aucune', 0),
(417, 105, 'Oui, car elles sont cryptées par défaut', 0),
(418, 105, 'Non, car les cookies sont stockés en clair sur le client', 1),
(419, 105, 'Cela dépend du navigateur utilisé par le client', 0),
(420, 105, 'Aucune', 0),
(421, 106, 'permet de surcharger une classe', 0),
(422, 106, 'sert à émettre une exception', 0),
(423, 106, 'permet de visualiser les attributs d\'une classe', 1),
(424, 106, 'permet de débuguer en créant un dump de la mémoire', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idq`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `idq` (`idq`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `idq` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `idr` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
