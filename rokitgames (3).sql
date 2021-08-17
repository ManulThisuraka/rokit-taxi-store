-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 07:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rokitgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtournaments`
--

CREATE TABLE `addtournaments` (
  `tournamentid` int(10) NOT NULL,
  `gamename` varchar(30) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtournaments`
--

INSERT INTO `addtournaments` (`tournamentid`, `gamename`, `date`, `time`) VALUES
(5, 'Rainbow6 PC 2v2 Halloween tour', '2020-10-31', '13:30:00'),
(6, 'Spirit Legends FR Spirits Cup ', '2020-10-30', '13:00:00'),
(7, 'Hilltop Masters Series Qualifi', '2020-11-01', '17:00:00'),
(8, 'OAK Plus - Valorant - Online A', '2020-11-30', '17:00:00'),
(12, 'Neww', '2020-10-24', '23:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `g_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `description` text NOT NULL,
  `company` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`g_id`, `name`, `price`, `description`, `company`) VALUES
(7, 'Sea Of Thives', 12, 'Sea of Thieves is a 2018 action-adventure game developed by Rare and published by Xbox Game Studios. The player assumes the role of a pirate who completes voyages from different trading companies in order to become the ultimate pirate legend.', 'Rare'),
(8, 'Rainbow Six Siege', 10, 'Tom Clancy\'s Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on December 1, 2015; the game is also set to be released for PlayStation 5 and Xbox Series X/S in 2020.', 'Ubisoft'),
(9, 'Apex Legends', 0, 'Apex Legends is a free-to-play first-person shooter battle royale game developed by Respawn Entertainment and published by Electronic Arts. It was released for Microsoft Windows, PlayStation 4, and Xbox One on February 4, 2019, without any prior announcement or marketing.', 'Respawn Entertainmen');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(20) NOT NULL,
  `par` text NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `par`, `image`) VALUES
(18, 'RAINBOW SIX SIEGE - ', 'This season, enjoy the Shadow Legacy Battle Pass, offering one Free track and one Premium track until October 19th.\r\n\r\nWith Class of Zero, the Program summons a familiar face that is certain to bring back old memories. Rainbow Operators are now learning new techniques from the best in the Game: the one and only Sam Fisher!\r\n\r\nGet rewarded for your playtime on a Battle Pass that includes 70 tiers and two tracks for a total of 94 rewards. Earn exclusive items including themed content, Mission Blacksmith sets and more! Get started as soon as the Battle Pass begins and progress through it by simply playing the game. Finishing a game or winning a round will give you Battle Points which will move you through the tiers. You can also earn Battle Points through Challenges.\r\n\r\nPREMIUM BUNDLE\r\n\r\n- Immediately unlock the first 12 tiers - Rewards on each tier\r\n- Vigil and Sledge’s themed gear\r\n- Melusi’ Blacksmith uniform\r\n- Ace’s Blacksmith Bundle\r\n\r\n# YEAR PASS OWNERS\r\n## GET IT FOR 1680 R6 CREDITS\r\n\r\nPREMIUM TRACK\r\n\r\n- Rewards on each tier\r\n- Ace’s Blacksmith Bundle\r\n\r\n# YEAR PASS OWNERS\r\n## GET IT FOR 840 R6 CREDITS\r\n\r\nGEAR UP', 'news.png'),
(19, 'ANNO 1800 - Land of ', 'Welcome to our new region: Enbesa. Explore the beautiful savannahand coastal lines. Work with Emperor Ketema to make the land florish. Master the new gameplay mechanics such as the irrigations canals and the new research feature. Out October 22nd 2020.', 'news2.png'),
(20, 'For Honor - Hallowee', 'This Halloween, be careful where you step out… Enjoy the Halloween event \"Monsters of the Otherworld\"! Discover two limited-time game modes, Endless March & Spooky Slashers, and get rid of the killer monsters!', 'news4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `tornamentsid` int(20) NOT NULL,
  `gamename` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userid` int(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userID` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userID`, `email`, `username`, `password`) VALUES
(60, 'manulthisuraka@gmail.com', 'root', 'root'),
(75, 'banda@gmail.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtournaments`
--
ALTER TABLE `addtournaments`
  ADD PRIMARY KEY (`tournamentid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tornamentsid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtournaments`
--
ALTER TABLE `addtournaments`
  MODIFY `tournamentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `g_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `tornamentsid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
