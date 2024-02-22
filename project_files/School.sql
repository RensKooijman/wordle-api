-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2024 at 11:08 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `account_id` int(20) NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

DROP TABLE IF EXISTS `leaderboard`;
CREATE TABLE `leaderboard` (
  `leaderboard_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
CREATE TABLE `words` (
  `word_id` int(11) NOT NULL,
  `words` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`word_id`, `words`) VALUES
(1, 'penis'),
(2, 'hello'),
(4, 'apple'),
(5, 'table'),
(7, 'knife'),
(8, 'house'),
(9, 'mouse'),
(10, 'plant'),
(11, 'phone'),
(12, 'drink'),
(13, 'happy'),
(14, 'tiger'),
(15, 'zebra'),
(16, 'chair'),
(17, 'cloud'),
(18, 'robot'),
(19, 'swirl'),
(20, 'laser'),
(21, 'frost'),
(22, 'demon'),
(23, 'magic'),
(24, 'grape'),
(25, 'ocean'),
(26, 'sword'),
(27, 'tulip'),
(28, 'dream'),
(29, 'space'),
(30, 'fairy'),
(31, 'chess'),
(32, 'flame'),
(34, 'music'),
(35, 'sunny'),
(37, 'lucky'),
(38, 'smart'),
(39, 'piano'),
(40, 'smile'),
(41, 'jolly'),
(42, 'grace'),
(43, 'crane'),
(44, 'beach'),
(45, 'shell'),
(46, 'dance'),
(47, 'party'),
(48, 'merry'),
(49, 'globe'),
(50, 'earth'),
(53, 'peace'),
(54, 'amber'),
(55, 'flute'),
(56, 'swift'),
(58, 'forge'),
(59, 'pouch'),
(60, 'jewel'),
(62, 'grain'),
(63, 'spark'),
(65, 'quill'),
(66, 'glove'),
(67, 'stork'),
(68, 'mirth'),
(69, 'hymns'),
(70, 'whale'),
(71, 'crown'),
(74, 'oasis'),
(76, 'haste'),
(78, 'lunar'),
(79, 'royal'),
(81, 'lyric'),
(82, 'blend'),
(83, 'sweep'),
(85, 'vegan'),
(86, 'fresh'),
(87, 'flint'),
(88, 'juice'),
(89, 'smirk'),
(91, 'shiny'),
(92, 'bloom'),
(94, 'pluck'),
(96, 'shine'),
(99, 'sweet'),
(102, 'giant'),
(103, 'chirp'),
(104, 'creek'),
(105, 'hoard'),
(106, 'tower'),
(107, 'noble'),
(108, 'wisps'),
(111, 'swoop'),
(112, 'darts'),
(116, 'vivid'),
(118, 'pride'),
(119, 'sworn'),
(121, 'swarm'),
(125, 'shrub'),
(127, 'drift'),
(132, 'prize'),
(137, 'spire'),
(156, 'arise'),
(160, 'river'),
(174, 'wrist'),
(177, 'crisp'),
(179, 'drown'),
(183, 'juicy'),
(207, 'charm'),
(234, 'rover'),
(248, 'shrub'),
(254, 'quark'),
(255, 'vexed'),
(256, 'jazzy'),
(257, 'crypt'),
(258, 'pyxes'),
(259, 'mizen'),
(260, 'brisk'),
(261, 'plush'),
(262, 'fjord'),
(263, 'zappy'),
(264, 'glyph'),
(265, 'khaki'),
(266, 'knurl'),
(267, 'wrung'),
(268, 'zilch'),
(270, 'joust'),
(271, 'gauzy'),
(272, 'fable'),
(273, 'quiff'),
(274, 'blini'),
(275, 'quash'),
(276, 'buxom'),
(277, 'pyxie'),
(278, 'cymol'),
(279, 'blitz'),
(280, 'vixen'),
(281, 'cozyx'),
(282, 'pique'),
(283, 'whizg'),
(284, 'quell'),
(289, 'scamp'),
(291, 'waltz'),
(292, 'quart'),
(293, 'flair'),
(294, 'gleam'),
(296, 'jaunt'),
(297, 'latch'),
(298, 'moose'),
(299, 'nudge'),
(300, 'overt'),
(302, 'quake'),
(303, 'rampy'),
(304, 'saute'),
(305, 'theme'),
(306, 'usurp'),
(308, 'wharf'),
(309, 'xenon'),
(310, 'yield'),
(311, 'zesty'),
(326, 'query'),
(328, 'token'),
(329, 'unity'),
(331, 'whisk'),
(332, 'xerox'),
(338, 'quirk'),
(364, 'quell'),
(372, 'frown'),
(373, 'bevel'),
(374, 'lurch'),
(375, 'cleft'),
(376, 'douse'),
(377, 'foamy'),
(378, 'girth'),
(379, 'havoc'),
(380, 'infix'),
(382, 'knead'),
(383, 'loamy'),
(384, 'moxie'),
(385, 'novel'),
(386, 'perky'),
(388, 'ravel'),
(390, 'tonic'),
(391, 'unzip'),
(393, 'whisk'),
(395, 'yield');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`leaderboard_id`),
  ADD KEY `id` (`account_id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `leaderboard_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `Accounts_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `leaderboard` (`leaderboard_id`);

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `id` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
