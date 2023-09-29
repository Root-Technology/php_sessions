-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 29 sep. 2023 à 20:31
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `olympus`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment_id_user` int(255) DEFAULT NULL,
  `comment_post_id` int(50) DEFAULT NULL,
  `comment` varchar(2500) DEFAULT NULL,
  `CommentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment_id_user`, `comment_post_id`, `comment`, `CommentTime`) VALUES
(1, 1, 11, 'Belle post', '2023-09-12 19:04:51'),
(2, 2, 10, 'tamam tamam', '2023-09-12 19:05:00'),
(3, 1, 9, 'jaime cette anime', '2023-09-12 19:05:09'),
(4, 1, 11, 'sadasda', '2023-09-12 19:12:08'),
(5, 2, 3, 'asdasdasda', '2023-09-12 19:12:17'),
(6, 2, 11, 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nhttps://www.youtube.com/watch?v=eH-9o00quMY&ab_channel=Hollow', '2023-09-12 19:14:41'),
(7, 1, 10, 'oka boka', '2023-09-12 19:25:09');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_user_like` int(11) DEFAULT NULL,
  `id_post_like` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_like`, `id_user_like`, `id_post_like`, `createdAt`) VALUES
(1, 1, 28, '2023-09-29 20:27:53'),
(2, 1, 28, '2023-09-29 20:28:11'),
(3, 1, 28, '2023-09-29 20:28:12'),
(4, 1, 28, '2023-09-29 20:28:14'),
(5, 1, 27, '2023-09-29 20:29:30'),
(6, 1, 26, '2023-09-29 20:29:33');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `post_description` varchar(1000) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_video` varchar(255) DEFAULT NULL,
  `post_yt` varchar(255) DEFAULT NULL,
  `post_id_user` int(11) DEFAULT NULL,
  `repost_user_id` int(11) DEFAULT NULL,
  `id_post_repost` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `post_description`, `post_image`, `post_video`, `post_yt`, `post_id_user`, `repost_user_id`, `id_post_repost`, `createdAt`) VALUES
(3, 'Starfield is an upcoming action role-playing game developed by Bethesda Game Studios and published by Bethesda Softworks. It was formally announced during Bethesda\'s E3 presentation in 2018. ', '64e67994eeb32.jpeg', '', '', 1, NULL, NULL, '2023-08-23 21:26:44'),
(4, 'One Piece Gear 5 episode will come out on Sunday, August 6, 2023, at 9:30 am JST. It will be available to stream on the global streaming platform, Crunchyroll. Given below are the release date and time for One Piece 1071, for different time zones around the world: Pacific Standard Time: 7 pm, Saturday, August 5.\r\nhttps://www.sportskeeda.com/anime/countdown-luffy-s-gear-5-debut-one-piece-1071\r\n', '', '64e67ac41a941.mp4', '', 1, NULL, NULL, '2023-08-23 21:31:48'),
(8, 'asmongold on his new house\r\nhttps://www.youtube.com/watch?v=10M5BW6hwVM&ab_channel=AsmongoldTV', '', '', '10M5BW6hwVM&ab_channel=AsmongoldTV', 2, NULL, NULL, '2023-08-23 21:40:39'),
(9, 'awdasdasda', '64e67d2fc20ea.jpg', '', '', 2, NULL, NULL, '2023-08-23 21:42:07'),
(10, 'asdad', '64e67deae00cb.jpeg', '64e67deae0204.mp4', '', 1, NULL, NULL, '2023-08-23 21:45:14'),
(11, 'ewtwetwet wetwet', '', '', '', 1, NULL, NULL, '2023-09-04 20:26:23'),
(12, 'awdasdasda', '64e67d2fc20ea.jpg', '', '', 1, NULL, NULL, '2023-09-18 20:40:43'),
(13, 'asmongold on his new house\r\nhttps://www.youtube.com/watch?v=10M5BW6hwVM&ab_channel=AsmongoldTV', '', '', '10M5BW6hwVM&ab_channel=AsmongoldTV', 1, NULL, NULL, '2023-09-18 20:41:33'),
(14, 'sadasdasdasdasd', '', '', '', 2, NULL, NULL, '2023-09-26 19:22:58'),
(22, 'sadasdasdasdasd', '', '', '', 2, 1, 14, '2023-09-26 19:43:43'),
(23, 'sadasdasdasdasd', '', '', '', 2, 3, 14, '2023-09-26 19:44:12'),
(24, 'sadasdasdasdasd', '', '', '', 2, 2, 14, '2023-09-26 19:44:34'),
(25, 'sadasdasdasdasd', '', '', '', 2, 1, 14, '2023-09-26 20:00:22'),
(26, 'asdsdsada', '', '', '', 1, NULL, NULL, '2023-09-26 20:00:30'),
(27, 'asdsdsada', '', '', '', 1, 1, 26, '2023-09-26 20:00:33'),
(28, 'asdsdsada', '', '', '', 1, 1, 27, '2023-09-26 20:00:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `last_name`, `email`, `profile_image`, `password`, `birthday`, `gender`, `about`, `website`, `phone`, `created_at`) VALUES
(1, 'Nelsoniiiii', 'Root', 'franckyulquiorra@gmail.com', '64cec72f5a740.png', '$2y$10$XRicMORtuln.aLyDaVabUewvQptv/cUN9CpoKlLQRmRqi3bAl/rNe', '2023-08-01', 'Male', 'asdasd asdasd', 'ww.root.com', '+905488894886', '2023-08-01 18:50:50'),
(2, 'Daniel', 'Kif', 'franckyulquiorra12@gmail.com', NULL, '$2y$10$FaqPrOfcFwJWhE/oeJMD5uRXistUzUVB8uF1DdyxdLEO5vV.F3A/2', '21/08/1995', 'Female', NULL, NULL, NULL, '2023-08-01 18:57:17'),
(3, 'Ulquiorra', 'Mukadi', 'franckyulquiorra112@gmail.com', NULL, '$2y$10$FaqPrOfcFwJWhE/oeJMD5uRXistUzUVB8uF1DdyxdLEO5vV.F3A/2', '21/08/1995', 'Male', NULL, NULL, NULL, '2023-08-01 18:57:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
