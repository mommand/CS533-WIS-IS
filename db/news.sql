-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 15, 2021 at 01:13 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Sport'),
(2, 'Medical'),
(3, 'Economics'),
(4, 'Political'),
(5, 'Entainments'),
(6, 'Tech');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `p_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `p_date`, `category`, `image`, `body`) VALUES
(1, 'Map bubble With Machine Learning Techniques Module 2', '2021-03-15 00:00:00', 6, NULL, '									zsdfadf adf ad fa sfd adf asd fa df asd fa sdf as dfasdf'),
(3, 'Fulham players deserved this result - Parker', '2021-03-08 00:00:00', 1, NULL, '				Fulham boss Scott Parker said he is \"very, very proud\" of his players following a crucial win at Premier League champions Liverpool, which put the Cottagers level on points with fourth-bottom Brighton.\r\n\r\nUnited, who have now gone 22 league away games unbeaten - including 14 wins - stunned City with a fast start and were ahead after a penalty was awarded inside the first 30 seconds when Gabriel Jesus fouled the impressive Antony Martial.\r\n\r\nBruno Fernandes scored from the spot despite City keeper Ederson getting a strong hand on the ball, then United fashioned the win with a mixture of solid defence and constant menace on the break.\r\n\r\n'),
(4, 'Chief football writer at Etihad Stadium', '2021-03-08 00:00:00', 1, NULL, 'Rodri almost equalised just after the break when his shot glanced off the angle of post and bar, but United effectively sealed the win - condemning City to their first loss since a 2-0 defeat at Tottenham on 21 November - when the outstanding Luke Shaw, who had earlier missed a chance to double United lead, led a counter-attack, exchanging passes with Marcus Rashford before beating Ederson with a low shot'),
(5, 'Apple News1', '2021-03-07 00:00:00', 4, 'uploads/footbal.jpg', '							Apple News is a mobile app and news aggregator developed by Apple Inc., for its iOS, iPadOS, watchOS, and macOS operating systems. The iOS version was launched with the release of iOS 9. It is the successor to the Newsstand app included in previous versions of iOS.\r\n						\"\r\n						\"\r\n						'),
(6, 'Map bubble', '2021-03-13 00:00:00', 2, 'uploads/Screen Shot 2021-02-23 at 3.58.04 PM.png', 'Apple News is a mobile app and news aggregator developed by Apple Inc., for its iOS, iPadOS, watchOS, and macOS operating systems. The iOS version was launched with the release of iOS 9. It is the successor to the Newsstand app included in previous versions of iOS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Ziaullah Momand', 'mommand.csf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Momand', 'mommand.csf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'ahmad Ali', 'ahmad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
