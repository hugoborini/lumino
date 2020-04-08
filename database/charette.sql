-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 08 avr. 2020 à 18:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `charette`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `path_film` varchar(255) NOT NULL,
  `path_mini` varchar(255) NOT NULL,
  `like_film` int(11) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `title`, `description`, `category`, `path_film`, `path_mini`, `like_film`, `release_date`) VALUES
(1, '1917', 'April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.', 'Action', '../assets/video/1917', '../assets/mini/1917', 0, '2019-01-01'),
(2, 'Avengers : Infinity Wars', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'Action', '../assets/video/avengers', '../assets/video/avengers', 0, '2018-01-01'),
(3, 'Mad Max', 'Max Rockatansky, a former highway patrol officer known across the post apocalyptic wasteland of Australia as Mad Max, has his V8 Interceptor stolen by Immortan Joe\'s warlord son, Scrotus. Max goes on a bloody crusade to take it back.', 'Action', '../assets/video/mad-max', '../assets/mini/mad-max', 0, '2015-01-01'),
(4, 'Kingsman', 'A spy organisation recruits a promising street kid into the agency\'s training program, while a global threat emerges from a twisted tech genius.', 'Action', '../assets/video/kingsman', '../assets/mini/kingsman', 0, '2014-01-01'),
(5, 'Ready Player One', 'When the creator of a virtual reality called the OASIS dies, he makes a posthumous challenge to all OASIS users to find his Easter Egg, which will give the finder his fortune and control of his world.', 'Action', '../assets/video/kingsman', '../assets/mini/kingsman', 0, '2018-01-01'),
(6, 'Skyfall', 'James Bond\'s loyalty to M is tested when her past comes back to haunt her. When MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', 'Action', '../assets/video/skyfall', '../assets/mini/skyfall', 0, '2012-01-01'),
(7, 'Kick Ass', 'Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a superhero, even though he has no powers, training or meaningful reason to do so.', 'Action', '../assets/video/kick-ass', '../assets/mini/kick-ass', 0, '2010-01-01'),
(8, 'Matrix', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', 'Action', '../assets/video/matrix', '../assets/mini/matrix', 0, '1999-01-01'),
(9, 'Intouchables', 'After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.', 'Comedy', '../assets/video/intouchables', '../assets/mini/intouchables', 0, '2011-01-01'),
(10, 'Deadpool', 'A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.', 'Comedy', '../assets/video/deadpool', '../assets/mini/deadpool', 0, '2016-01-01'),
(11, 'SuperBad', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.', 'Comedy', '../assets/video/superbad', '../assets/mini/superbad', 0, '2007-01-01'),
(12, 'Zombieland', 'A shy student trying to reach his family in Ohio, a gun-toting tough guy trying to find the last Twinkie, and a pair of sisters trying to get to an amusement park join forces to travel across a zombie-filled America.', 'Comedy', '../assets/video/zombieland', '../assets/mini/zombieland', 0, '2009-01-01'),
(13, 'Bridesmaids', 'Competition between the maid of honor and a bridesmaid, over who is the bride\'s best friend, threatens to upend the life of an out-of-work pastry chef.', 'Comedy', '../assets/video/bridesmaids', '../assets/mini/bridesmaids', 0, '2011-01-01'),
(14, 'The Big Lebowski', 'Jeff \"The Dude\" Lebowski, mistaken for a millionaire of the same name, seeks restitution for his ruined rug and enlists his bowling buddies to help get it.', 'Comedy', '../assets/video/big-lebowski', '../assets/mini/big-lebowski', 0, '1998-01-01'),
(15, 'Little Miss Sunshine', 'A family determined to get their young daughter into the finals of a beauty pageant take a cross-country trip in their VW bus.', 'Comedy', '../assets/video/little-miss-sunshine', '../assets/mini/little-miss-sunshine', 0, '2006-01-01'),
(16, 'Zoolander', 'At the end of his career, a clueless fashion model is brainwashed to kill the Prime Minister of Malaysia.', 'Comedy', '../assets/video/zoolander', '../assets/mini/zoolander', 0, '2001-01-01'),
(17, 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 'SF', '../assets/video/interstellar', '../assets/mini/interstellar', 0, '2014-01-01'),
(18, 'Harry Potter and the Sorcerer\'s Stone', 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.', 'SF', '../assets/video/harry-potter', '../assets/mini/harry-potter', 0, '2001-01-01'),
(19, 'Hunger Games', 'Katniss Everdeen voluntarily takes her younger sister\'s place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death.', 'SF', '../assets/video/hunger-games', '../assets/mini/hunger-games', 0, '2012-01-01'),
(20, 'Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'SF', '../assets/video/inception', '../assets/mini/inception', 0, '2010-01-01'),
(21, 'Avatar', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'SF', '../assets/video/avatar', '../assets/mini/avatar', 0, '2009-01-01'),
(22, 'Jurassic Park', 'A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park\'s cloned dinosaurs to run loose.', 'SF', '../assets/video/jurassic-park', '../assets/mini/jurassic-park', 0, '1973-01-01'),
(23, 'The Fifth Element', 'In the colorful future, a cab driver unwittingly becomes the central figure in the search for a legendary cosmic weapon to keep Evil and Mr. Zorg at bay.', 'SF', '../assets/video/fifth-element', '../assets/mini/fifth-element', 0, '1997-01-01'),
(24, 'Back to the Future', 'Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.', 'SF', '../assets/video/back-to-the-future', '../assets/mini/back-to-the-future', 0, '1985-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
