-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 avr. 2020 à 16:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `charrette`
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
(1, '1917', 'April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.', 'Action', '../assets/video/1917.mp4', '../assets/mini/1917.jpg', 0, '2019-01-01'),
(2, 'Avengers : Infinity Wars', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'Action', '../assets/video/avengers.mp4', '../assets/video/avengers.jpg', 0, '2018-01-01'),
(3, 'Mad Max', 'Max Rockatansky, a former highway patrol officer known across the post apocalyptic wasteland of Australia as Mad Max, has his V8 Interceptor stolen by Immortan Joe\'s warlord son, Scrotus. Max goes on a bloody crusade to take it back.', 'Action', '../assets/video/mad-max.mp4', '../assets/mini/mad-max.jpg', 0, '2015-01-01'),
(4, 'Kingsman', 'A spy organisation recruits a promising street kid into the agency\'s training program, while a global threat emerges from a twisted tech genius.', 'Action', '../assets/video/kingsman.mp4', '../assets/mini/kingsman.jpg', 0, '2014-01-01'),
(5, 'Ready Player One', 'When the creator of a virtual reality called the OASIS dies, he makes a posthumous challenge to all OASIS users to find his Easter Egg, which will give the finder his fortune and control of his world.', 'Action', '../assets/video/ready-player-one.mp4', '../assets/mini/ready-player-one.jpg', 0, '2018-01-01'),
(6, 'Skyfall', 'James Bond\'s loyalty to M is tested when her past comes back to haunt her. When MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', 'Action', '../assets/video/skyfall.mp4', '../assets/mini/skyfall.jpg', 0, '2012-01-01'),
(7, 'Kick Ass', 'Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a superhero, even though he has no powers, training or meaningful reason to do so.', 'Action', '../assets/video/kick-ass.mp4', '../assets/mini/kick-ass.jpg', 0, '2010-01-01'),
(8, 'Matrix', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', 'Action', '../assets/video/matrix.mp4', '../assets/mini/matrix.jpg', 0, '1999-01-01'),
(9, 'Intouchables', 'After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.', 'Comedy', '../assets/video/intouchables.mp4', '../assets/mini/intouchables.jpg', 0, '2011-01-01'),
(10, 'Deadpool', 'A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.', 'Comedy', '../assets/video/deadpool.mp4', '../assets/mini/deadpool.jpg', 0, '2016-01-01'),
(11, 'SuperBad', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.', 'Comedy', '../assets/video/superbad.mp4', '../assets/mini/superbad.jpg', 0, '2007-01-01'),
(12, 'Zombieland', 'A shy student trying to reach his family in Ohio, a gun-toting tough guy trying to find the last Twinkie, and a pair of sisters trying to get to an amusement park join forces to travel across a zombie-filled America.', 'Comedy', '../assets/video/zombieland.mp4', '../assets/mini/zombieland.jpg', 0, '2009-01-01'),
(13, 'Bridesmaids', 'Competition between the maid of honor and a bridesmaid, over who is the bride\'s best friend, threatens to upend the life of an out-of-work pastry chef.', 'Comedy', '../assets/video/bridesmaids.mp4', '../assets/mini/bridesmaids.jpg', 0, '2011-01-01'),
(14, 'The Big Lebowski', 'Jeff \"The Dude\" Lebowski, mistaken for a millionaire of the same name, seeks restitution for his ruined rug and enlists his bowling buddies to help get it.', 'Comedy', '../assets/video/big-lebowski.mp4', '../assets/mini/big-lebowski.jpg', 0, '1998-01-01'),
(15, 'Little Miss Sunshine', 'A family determined to get their young daughter into the finals of a beauty pageant take a cross-country trip in their VW bus.', 'Comedy', '../assets/video/little-miss-sunshine.mp4', '../assets/mini/little-miss-sunshine.jpg', 0, '2006-01-01'),
(16, 'Zoolander', 'At the end of his career, a clueless fashion model is brainwashed to kill the Prime Minister of Malaysia.', 'Comedy', '../assets/video/zoolander.mp4', '../assets/mini/zoolander.jpg', 0, '2001-01-01'),
(17, 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 'SF', '../assets/video/interstellar.mp4', '../assets/mini/interstellar.jpg', 0, '2014-01-01'),
(18, 'Harry Potter and the Sorcerer\'s Stone', 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.', 'SF', '../assets/video/harry-potter.mp4', '../assets/mini/harry-potter.jpg', 0, '2001-01-01'),
(19, 'Hunger Games', 'Katniss Everdeen voluntarily takes her younger sister\'s place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death.', 'SF', '../assets/video/hunger-games.mp4', '../assets/mini/hunger-games.jpg', 0, '2012-01-01'),
(20, 'Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 'SF', '../assets/video/inception.mp4', '../assets/mini/inception.jpg', 0, '2010-01-01'),
(21, 'Avatar', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'SF', '../assets/video/avatar.mp4', '../assets/mini/avatar.jpg', 0, '2009-01-01'),
(22, 'Jurassic Park', 'A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park\'s cloned dinosaurs to run loose.', 'SF', '../assets/video/jurassic-park.mp4', '../assets/mini/jurassic-park.jpg', 0, '1973-01-01'),
(23, 'The Fifth Element', 'In the colorful future, a cab driver unwittingly becomes the central figure in the search for a legendary cosmic weapon to keep Evil and Mr. Zorg at bay.', 'SF', '../assets/video/fifth-element.mp4', '../assets/mini/fifth-element.jpg', 0, '1997-01-01'),
(24, 'Back to the Future', 'Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.', 'SF', '../assets/video/back-to-the-future.mp4', '../assets/mini/back-to-the-future.jpg', 0, '1985-01-01'),
(25, 'Inside Out', 'After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.', 'animation', '../assets/video/inside-out.mp4', '../assets/mini/inside-out.jpg', 0, '2015-06-19'),
(26, 'The Lion King', 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.', 'animation', '../assets/video/the-lion-king.mp4', '../assets/mini/the-lion-king.jpg', 0, '2019-07-17'),
(27, 'Finding Nemo', 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.', 'animation', '../assets/video/finding-nemo.mp4', '../assets/mini/finding-nemo.jpg', 0, '2003-05-30'),
(28, 'Moana', 'In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches Moana\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.', 'animation', '../assets/video/moana.mp4', '..assets/mini/moana.jpg', 0, '2016-11-23'),
(29, 'Peter Pan', 'Wendy and her brothers are whisked away to the magical world of Neverland with the hero of their stories, Peter Pan.', 'animation', '../assets/video/peter-pan.mp4', '../assets/mini/peter-pan.jpg', 0, '1953-02-05'),
(30, 'The Incredibles', 'A family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world.', 'animation', '../assets/video/the-incredibles.mp4', '../assets/mini/the-incredibles.jpg', 0, '2004-10-27'),
(31, 'Wall-E', 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.', 'animation', '../assets/video/wall-e.mp4', '../assets/mini/wall-e.jpg', 0, '2008-06-23'),
(32, 'Frozen', 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.', 'animation', '../assets/video/frozen.mp4', '../assets/mini/frozen.jpg', 0, '2013-11-19'),
(33, 'The Invisible Man', 'When Cecilia\'s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.', 'horror', '../assets/video/the-invisible-man.mp4', '../assets/mini/the-invisible-man.jpg', 0, '2020-02-28'),
(34, 'The Texas Chainsaw Massacre', 'After picking up a traumatized young hitchhiker, five friends find themselves stalked and hunted by a deformed chainsaw-wielding loon and his family of equally psychopathic killers.', 'horror', '../assets/video/the-texas-chainsaw-massacre.mp4', '../assets/mini/the-texas-chainsaw-massacre.jpg', 0, '1974-10-11'),
(35, 'The Platform', 'A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.', 'horror', '../assets/video/the-platform.mp4', '../assets/mini/the-platform.jpg', 0, '2019-09-06'),
(36, 'Midsommar', 'A couple travels to Sweden to visit a rural hometown\'s fabled mid-summer festival. What begins as an idyllic retreat quickly devolves into an increasingly violent and bizarre competition at the hands of a pagan cult.', 'horror', '../assets/video/midsommar.mp4', '../assets/mini/midsommar.jpg', 0, '2019-07-03'),
(37, 'Paranormal Activity', 'After moving into a suburban home, a couple becomes increasingly disturbed by a nightly demonic presence.', 'horror', '../assets/video/paranormal-activity.mp4', '../assets/mini/paranormal-activity.jpg', 0, '2009-09-25'),
(38, 'The Shining', 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', 'horror', '../assets/video/the-shining.mp4', '../assets/mini/the-shining.jpg', 0, '1980-05-23'),
(39, 'Jaws', 'When a killer shark unleashes chaos on a beach community, it\'s up to a local sheriff, a marine biologist, and an old seafarer to hunt the beast down.', 'horror', '../assets/video/jaws.mp4', '../assets/mini/jaws.jpg', 0, '1975-06-20'),
(40, 'The Exorcist', 'When a 12 year-old girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her.', 'horror', '../assets/video/the-exorcist.mp4', '../assets/mini/the-exorcist.jpg', 0, '1973-12-26'),
(41, 'I Am Not Your Negro', 'Writer James Baldwin tells the story of race in modern America with his unfinished novel, Remember This House.', 'documentary', '../assets/video/i-am-not-your-negro.mp4', '../assets/mini/i-am-not-your-negro.jpg', 0, '2016-09-10'),
(42, 'Fahrenheit 9/11', 'Michael Moore\'s view on what happened to the United States after September 11, and how the Bush Administration allegedly used the tragic event to push forward its agenda for unjust wars in Afghanistan and Iraq.', 'documentary', '../assets/video/fahrenheit-911.mp4', '../assets/mini/fahrenheit-911.jpg', 0, '2004-05-17'),
(43, 'Hearts of Darkness: A Filmmaker\'s Apocalypse', 'Documentary that chronicles how Francis Ford Coppola\'s Apocalypse Now (1979) was plagued by extraordinary script, shooting, budget, and casting problems, nearly destroying the life and career of the celebrated director.', 'documentary', '../assets/video/hearts-of-darkness.mp4', '../assets/mini/hearts-of-darkness.jpg', 0, '1991-11-27'),
(44, 'Cowspiracy: The Sustainability Secret', 'Follow the shocking, yet humorous, journey of an aspiring environmentalist, as he daringly seeks to find the real solution to the most pressing environmental issues and true path to sustainability.', 'documentary', '../assets/video/cowspiracy.mp4', '../assets/mini/cowspiracy.jpg', 0, '2014-06-26'),
(45, 'A Plastic Ocean', 'It begins when journalist Craig Leeson, searching for the elusive blue whale, discovers plastic waste in what should be pristine ocean. In this adventure documentary, Craig teams up with free diver Tanya Streeter and an international team of scientists and researchers, and they travel to twenty locations around the world over the next four years to explore the fragile state of our oceans, uncover alarming truths about plastic pollution, and reveal working solutions that can be put into immediate effect.', 'documentary', '../assets/video/a-plastic-ocean.mp4', '../assets/mini/a-plastic-ocean.jpg', 0, '2016-09-01'),
(46, 'League of Legends: Origins', 'In League of Legends Origins, Academy Award nominated Director, Leslie Iwerks explores the history of the community that has made League of Legends one of the most-played PC game in history and one of the fastest growing sports in the world. Told by the fans who lived it, the players that popularized it, and the visionaries who made it, Iwerks captures the highs and lows of making a global phenomenon.', 'documentary', '../assets/video/league-of-legends-origins.mp4', '../assets/mini/league-of-legends-origins.jpg', 0, '2019-10-16'),
(47, 'The Creative Brain', 'Neuroscientist David Eagleman taps into the creative process of various innovators while exploring brain-bending, risk-taking ways to spark creativity.', 'documentary', '../assets/video/the-creative-brain.mp4', '../assets/mini/the-creative-brain.jpg', 0, '2019-04-25'),
(48, 'Pedal the World', 'Young millennial German fueled by wanderlust and a lack of real world responsibilities travels the globe by bike, peddling across 22 countries and over 20,000 kms to find meaning in life. Leverages power of social media and parental support to overcome obstacles.', 'documentary', '../assets/video/pedal-the-world.mp4', '../assets/mini/pedal-the-world.jpg', 0, '2015-10-29');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
