-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 05:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_alejandro_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_alejandro_bigevents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr13_alejandro_bigevents`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `description`, `image`, `capacity`, `email`, `phone`, `address`, `url`, `type`) VALUES
(1, 'Betthoven, World of the Man and Spark of the Gods', '29 May 2020 * 10 January 2021', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida pulvinar vulputate. Proin pulvinar laoreet dictum. Mauris non ipsum sed nunc luctus sodales.', 'https://www.xlsemanal.com/wp-content/uploads/sites/3/2017/11/conocer-historia-muscia-beethoven-xlsemanal-6-768x506.jpg', 300, 'betthoven@mail.com', '+43 583 83 948', 'Austrian National Library', 'www.betthoven.com', 'music'),
(2, 'German Expressionism', '27 May - 30 August 2020', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida pulvinar vulputate. Proin pulvinar laoreet dictum. Mauris non ipsum sed nunc luctus sodales. ', 'https://cdn.britannica.com/32/2832-004-1D1578A0/The-Scream-casein-cardboard-Edvard-Munch-National-1893.jpg', 35, 'expressionism@mail.com', '+43 583 83 948', 'Leopold Museum', 'www.expressionism.com', 'art'),
(3, 'Sommer Rhapsodie in the Garden', 'not defined', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida pulvinar vulputate. Proin pulvinar laoreet dictum. Mauris non ipsum sed nunc luctus sodales. ', 'https://cdn.britannica.com/42/91642-050-332E5C66/Keukenhof-Gardens-Lisse-Netherlands.jpg', 450, 'rhapsodie@garden.com', '+43 583 83 948', 'Liechstenstein Garden Palace', 'www.rhapsodie.com', 'music'),
(4, 'Wiener Symphoniker / Jordan', 'not defined', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida pulvinar vulputate. Proin pulvinar laoreet dictum. Mauris non ipsum sed nunc luctus sodales. ', 'https://www.kulturforum-hiddingsel.de/files/konzertraum-001.jpg', 200, 'konzert@mail.com', '+43 583 83 948', 'Vienna Konzerthaus', 'www.konzert.com', 'music'),
(5, 'Kiss me, Kate', 'not defined', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur gravida pulvinar vulputate. Proin pulvinar laoreet dictum. Mauris non ipsum sed nunc luctus sodales.', 'https://img.monocle.com/25-25/dsc07069-5f0dbcf571bc1.jpg?w=760&resize=aspectfit', 50, 'kissme@mail.com', '+43 676 6758 631', 'Vienna Volksoper', 'www.kissmekate.com', 'music'),
(7, 'Marathon', 'Tomorrow', 'Run!', 'https://wmimg.azureedge.net/public/img/marathons/dalian-international-marathon/dalian-international-marathon.jpg', 2000, 'marathon@mail.com', 'No phone provided', 'Somewhere', 'www.marathon.com', 'sport'),
(8, 'Interstellar', 'Yesterday, 11:00', 'Come watch the movie with us', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQMHMl9U1z1txXWCBgKbSlwH0tV3wVIsxyd6CQLhR0CkgC8Nagf', 150, 'movies@cinema.com', 'no phone provided', 'falschestrasse 123, 1099', 'www.interstellar.com', 'movie'),
(9, 'Gaming party', 'in 2 days', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque feugiat enim feugiat, feugiat dolor quis, lobortis lacus. Suspendisse id massa nisi.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGRm5daPNFjFYpXLOSzS6mVv2H3zkJ84zhMA&usqp=CAU', 10, 'gaming@mail.com', '+43 588 02 9348', 'Address provided to attendants only', 'www.gaming.com', 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
