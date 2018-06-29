-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2018 at 04:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Sports'),
(4, 'Misc'),
(5, 'Exam');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `cmnt_body` text CHARACTER SET utf8 NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `cmnt_body`, `user`) VALUES
(54, 1, 'Nice post ', 'adam15'),
(55, 1, 'It is a Very Bad post', 'Rafsan35'),
(62, 11, 'I\'m', 'Rafsan35'),
(63, 11, 'no', 'Rafsan35');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(2, 1, ' the greatest war movie ever ? and the ones I can\'t bear', 'or a long time now, my wife has refused to watch a war movie with me. This is because I cannot stop grinding my teeth with annoyance at major historical mistakes, or harrumphing over errors of period detail. She only made an exception when Valkyrie came out, with Tom Cruise playing Count Claus Schenk von Stauffenberg. Such a folly of miscasting was bound to be a hoot, and we were not disappointed, especially when Cruise saluted in that downward cutaway style as if he were still in Top Gun. But I was soon grinding away again when the director and screenwriter felt compelled to improve on history, by making it look as if the 20 July plot to blow up Hitler had still very nearly succeeded.', 'shakil', 'movie', '2018-05-30 06:27:26'),
(3, 1, 'How the right is defending Roseanne Barr\'s racist tweets ', 'At least you can say the Roseanne reboot lasted longer than most members of the Trump administration. Only a couple of months after the premiere aired to one of the biggest TV audiences in years, the revived sitcom has been cancelled, following racist tweets by its eponymous star.\r\nRoseanne cancelled: ABC scraps sitcom after star\'s \'abhorrent\' tweets\r\nRead more\r\n\r\nWhen the reboot of Roseanne was announced, most wrote it off as 90s nostalgia by a TV industry out of fresh ideas. But it was quickly claimed as a political victory by conservatives who saw the show’s portrayal of white working-class Trump-supporting America as a form of mainstream validation. Roseanne is far more than just a sitcom for a lot of Trump supporters – the show, along with its controversial star, is a symbol of what they stand for. Its cancellation comes as a blow to conservatives who had felt vindicated by the show’s huge viewing figures. ', 'tipu', 'life', '2018-05-30 06:28:53'),
(4, 1, 'Italy at risk of new financial crisis in wake of coalition\'s collapse ', 'Italy risks careening into a new financial crisis after the Bank of Italy said the country’s leaders could not “disregard” financial constraints and its commitments to Brussels.\r\n\r\nMarkets around the world were also shaken with the Dow Jones industrial average in New York falling almost 400 points, or 1.58% on Tuesday as investors shifted money into the safe haven of US bonds, putting pressure on bank shares.\r\n\r\nStock markets in Asia also dropped sharply at the opening of trade on Wednesday. The Nikkei in Tokyo was off 1.3% while the ASX200 in Sydney fell 0.6%. The Kospi index in Seoul was down 1.57%.', 'Labib', 'fun', '2018-05-30 06:28:53'),
(12, 3, ' à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¦à¦¾à¦®à¦¿ à¦«à§à¦Ÿà¦¬à¦²à¦¾à¦° à¦¹à§à¦¯à¦¾à¦°à¦¿ à¦•à§‡à¦¨!', 'à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¦à¦¾à¦®à¦¿ à¦«à§à¦Ÿà¦¬à¦² à¦¤à¦¾à¦°à¦•à¦¾ à¦•à§‡? à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾ à¦•à¦¿à¦‚à¦¬à¦¾ à¦¬à¦¾à¦°à§à¦¸à§‡à¦²à§‹à¦¨à¦¾à¦° à¦ªà§à¦°à¦¤à¦¿ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à§à¦°à§à¦¬à¦²à¦¤à¦¾ à¦¥à§‡à¦•à§‡ à¦¥à¦¾à¦•à¦²à§‡ à¦¹à§Ÿà¦¤à§‹ à¦¬à¦²à¦¬à§‡à¦¨ à¦²à¦¿à¦“à¦¨à§‡à¦² à¦®à§‡à¦¸à¦¿à¦° à¦¨à¦¾à¦®, à¦°à¦¿à§Ÿà¦¾à¦² à¦®à¦¾à¦¦à§à¦°à¦¿à¦¦ à¦•à¦¿à¦‚à¦¬à¦¾ à¦ªà¦°à§à¦¤à§à¦—à¦¾à¦² à¦¸à¦®à¦°à§à¦¥à¦• à¦¹à§Ÿà§‡ à¦¥à¦¾à¦•à¦²à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦®à¦¤à§‡ à¦•à§à¦°à¦¿à¦¸à§à¦Ÿà¦¿à§Ÿà¦¾à¦¨à§‹ à¦°à§‹à¦¨à¦¾à¦²à¦¦à§‹à¦‡ à¦¹à¦¬à§‡à¦¨ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¦à¦¾à¦®à¦¿ à¦«à§à¦Ÿà¦¬à¦²à¦¾à¦°à¥¤ à¦¬à§à¦°à¦¾à¦œà¦¿à¦² à¦¸à¦®à¦°à§à¦¥à¦•à§‡à¦°à¦¾ à¦¯à§‡à¦®à¦¨ à¦¬à¦²à¦¬à§‡à¦¨ à¦¨à§‡à¦‡à¦®à¦¾à¦°à§‡à¦° à¦•à¦¥à¦¾à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦¸à¦¿à¦†à¦‡à¦‡à¦à¦¸ à¦«à§à¦Ÿà¦¬à¦² à¦…à¦¬à¦œà¦¾à¦°à¦­à§‡à¦Ÿà¦°à¦¿ à¦¨à¦¾à¦®à¦• à¦à¦•à¦Ÿà¦¾ à¦¸à§à¦‡à¦¸ à¦«à§à¦Ÿà¦¬à¦² à¦œà¦°à¦¿à¦ª à¦¬à¦¿à¦·à§Ÿà¦• à¦¸à¦‚à¦¸à§à¦¥à¦¾ à¦¤à¦¾à¦¦à§‡à¦° à¦à¦²à¦—à¦°à¦¿à¦¦à¦®à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦ªà§à¦°à¦®à¦¾à¦£ à¦•à¦°à§‡à¦›à§‡ à¦à¦¦à§‡à¦° à¦•à§‡à¦‰à¦‡ à¦¨à¦¨, à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¦à¦¾à¦®à¦¿ à¦–à§‡à¦²à§‹à§Ÿà¦¾à§œ à¦à¦–à¦¨ à¦Ÿà¦Ÿà§‡à¦¨à¦¹à¦¾à¦® à¦¹à¦Ÿà¦¸à§à¦ªà¦¾à¦°à§‡à¦° à¦•à§‡à¦¨à¥¤\r\n\r\nà¦¤à¦¾à¦à¦°à¦¾ à¦à¦²à¦—à¦°à¦¿à¦¦à¦®à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦ªà§à¦°à¦®à¦¾à¦£ à¦•à¦°à§‡à¦›à§‡à¦¨ à¦•à§‡à¦¨à§‡à¦° à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦¬à¦¾à¦œà¦¾à¦°à¦®à§‚à¦²à§à¦¯ à§¨à§¦à§§.à§¨ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹à¥¤ à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿ à¦“ à¦¤à§ƒà¦¤à§€à§Ÿ à¦¸à§à¦¥à¦¾à¦¨à§‡ à¦°à§Ÿà§‡à¦›à§‡à¦¨ à¦¯à¦¥à¦¾à¦•à§à¦°à¦®à§‡ à¦ªà§à¦¯à¦¾à¦°à¦¿à¦¸ à¦¸à§‡à¦‡à¦¨à§à¦Ÿ à¦œà¦¾à¦°à§à¦®à§‡à¦‡à§Ÿà§‡à¦° à¦†à¦•à§à¦°à¦®à¦£à¦­à¦¾à¦—à§‡à¦° à¦¦à§à¦‡ à¦–à§‡à¦²à§‹à§Ÿà¦¾à§œ - à¦¬à§à¦°à¦¾à¦œà¦¿à¦²à§‡à¦° à¦¤à¦¾à¦°à¦•à¦¾ à¦¨à§‡à¦‡à¦®à¦¾à¦° (à§§à§¯à§«.à§­ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹) à¦“ à¦«à§à¦°à¦¾à¦¨à§à¦¸à§‡à¦° à¦‰à¦¦à§€à§Ÿà¦®à¦¾à¦¨ à¦¤à¦¾à¦°à¦•à¦¾ à¦¸à§à¦Ÿà§à¦°à¦¾à¦‡à¦•à¦¾à¦° à¦•à¦¿à¦²à¦¿à§Ÿà¦¾à¦¨ à¦à¦®à¦¬à¦¾à¦ªà§à¦ªà§‡ (à§§à§®à§¬.à§« à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹)à¥¤ à¦à¦®à¦¬à¦¾à¦ªà§à¦ªà§‡à¦° à¦ªà¦°à§‡à¦‡ à¦†à¦›à§‡à¦¨ à¦®à§‡à¦¸à¦¿, à¦œà¦°à¦¿à¦ªà§‡ à¦¯à¦¾à¦° à¦¦à¦¾à¦® à¦à¦¸à§‡à¦›à§‡ à§§à§®à§ª.à§¨ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹à¥¤\r\n\r\nà¦¤à¦¾à¦²à¦¿à¦•à¦¾à§Ÿ à¦•à§à¦°à¦¿à¦¸à§à¦Ÿà¦¿à§Ÿà¦¾à¦¨à§‹ à¦°à§‹à¦¨à¦¾à¦²à¦¦à§‹à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨ à¦¬à§‡à¦¶ à¦ªà§‡à¦›à¦¨à§‡à¥¤ à¦œà¦°à¦¿à¦ªà§‡ à¦¤à¦¾à¦à¦° à¦¦à¦¾à¦® à§§à§¦à§©.à§ª à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹ à¦†à¦¸à¦¾à¦° à¦•à¦¾à¦°à¦£à§‡ à¦à¦‡ à¦¤à¦¾à¦²à¦¿à¦•à¦¾à¦° à§¨à§ª à¦¤à¦® à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨à§‡ à¦°à§Ÿà§‡à¦›à§‡à¦¨ à¦¤à¦¿à¦¨à¦¿à¥¤\r\n\r\nà¦à¦‡ à¦¤à¦¾à¦²à¦¿à¦•à¦¾à¦° à¦¶à§€à¦°à§à¦· à¦¦à¦¶ à¦¸à§à¦¥à¦¾à¦¨à§‡ à¦†à¦°à¦“ à¦°à§Ÿà§‡à¦›à§‡à¦¨ - à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¾à¦¦ à¦¸à¦¾à¦²à¦¾à¦¹ (à§§à§­à§§.à§© à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹), à¦¡à§‡à¦²à§‡ à¦†à¦²à§€ (à§§à§­à§§ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹), à¦•à§‡à¦­à¦¿à¦¨ à¦¡à§‡ à¦¬à§à¦°à§à¦‡à¦¨à¦¿à§Ÿà¦¾ (à§§à§¬à§­.à§¨ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹), à¦†à¦¤à§‹à§Ÿà¦¾à¦ à¦—à§à¦°à¦¿à¦œà¦®à¦¾à¦¨ (à§§à§¬à§ª.à§« à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹), à¦ªà¦¾à¦“à¦²à§‹ à¦¦à¦¿à¦¬à¦¾à¦²à¦¾ (à§§à§¬à§ª.à§¨ à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹) à¦“ à¦°à§‹à¦®à§‡à¦²à§ à¦²à§à¦•à¦¾à¦•à§ (à§§à§¬à§©.à§ª à¦®à¦¿à¦²à¦¿à§Ÿà¦¨ à¦‡à¦‰à¦°à§‹)à¥¤', 'Rafsan Jany Antor', 'sajxanscj ascsdc', '2018-06-05 09:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `rply`
--

CREATE TABLE `rply` (
  `id` int(11) NOT NULL,
  `cmnt_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rply_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rply`
--

INSERT INTO `rply` (`id`, `cmnt_id`, `author`, `rply_body`) VALUES
(79, 54, 'Rafsan35', 'its a bad post'),
(80, 54, 'adam15', 'who the hell are you man ???'),
(81, 54, 'Rafsan35', 'Tor Bap !!!'),
(82, 55, 'adam15', 'Ok sir , sorry for my mistake '),
(83, 54, 'Rafsan35', '123'),
(84, 55, 'Rafsan35', '\r\n][]['),
(85, 55, 'Rafsan35', 'd'),
(86, 55, 'Rafsan35', 'dfgfdg'),
(87, 55, 'Rafsan35', 'sefsdf'),
(88, 62, 'Rafsan35', 'you\'r'),
(89, 62, 'Rafsan35', 'very bad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `email`, `password`) VALUES
(34, 'Rafsan Jany', 'Antor', '../uploads/5b1e2e22ed7c41.jpg', 'antor.ru.cse@gmail.com', '123'),
(35, 'adam', 'ros', '../uploads/5b1e2e7674698index.jpeg', 'adam@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rply`
--
ALTER TABLE `rply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rply`
--
ALTER TABLE `rply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
