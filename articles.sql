-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 03:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Body` varchar(300) NOT NULL,
  `Likes` int(20) NOT NULL,
  `Featured` tinyint(1) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `Title`, `Author`, `Body`, `Likes`, `Featured`, `image`) VALUES
(8, 'AI Translation', 'By John P. Mello Jr.', 'Spotify is opening up foreign language markets to its podcasters through artificial intelligence. The company on Monday announced a pilot program called Voice Translation for podcasts that not only translates a podcast from one language to another but will retain the podcaster’s voice as it does it.', 0, 0, 'featured.jpg'),
(9, 'Microsoft Copilot', 'By Rob Enderle', 'Microsoft recently announced that Copilot, the company’s implementation of generative AI, will be coming soon to Windows and Office 365. While Microsoft is already using generative AI in its Bing search engine, its introduction to Microsoft’s core productivity tools promises to redefine how we inter', 0, 0, 'industry1.jpeg'),
(10, 'Apple Virtual Launch', 'By Rob Enderle', 'I’ve been disappointed in almost all the launch events I’ve seen since we mainly moved to virtual events. Most aren’t that different than in-person events where the speaker(s) get up on stage and pontificate.', 0, 0, 'industry2.jpeg'),
(11, 'AnkerWork B600', 'By Jack M. Germain', 'The AnkerWork B600 Video Bar is a powerful all-in-one conferencing device that is probably more suited for a business conference room than a work-from-home office. AnkerWork tries to thread the needle in stitching together features that either user category finds attractive.', 0, 0, 'technical1.jpeg'),
(12, 'Passwordless World', 'By John P. Mello Jr.', 'Google hammered another nail in the coffin for passwords Tuesday when it announced it’s making passkeys the default login method for its personal accounts.', 0, 1, 'technical2.jpeg'),
(13, 'Generative AI', 'By Ryan Ries', 'Generative AI produces outputs with increasing similarity to human-generated content — and with exponentially greater efficiency.', 0, 0, 'career1.jpeg'),
(14, 'Worried About AI', 'By John P. Mello Jr.', 'Artificial intelligence concerns more Americans than it excites, although few think the technology will have a significant impact on their jobs, according to a pair of studies released Monday by a Washington, D.C. think tank.', 0, 0, 'career2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
