-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2021 at 05:43 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeanywhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `original` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `original`, `thumb`, `regdate`) VALUES
(1, '600314df9d795-original.jpg', '600314df9d795-thumb.jpg', '2021-01-16 17:42:20'),
(2, '600317f496be3-original.jpg', '600317f496be3-thumb.jpg', '2021-01-16 17:44:42'),
(3, '600318524740e-original.png', '600318524740e-thumb.png', '2021-01-16 17:46:15'),
(4, '6003191995f81-original.png', '6003191995f81-thumb.png', '2021-01-16 17:49:35'),
(5, '6003198156602-original.jpg', '6003198156602-thumb.jpg', '2021-01-16 17:51:19'),
(6, '600319f409bba-original.jpg', '600319f409bba-thumb.jpg', '2021-01-16 17:53:11'),
(8, '600442b1def42-original.png', '600442b1def42-thumb.png', '2021-01-17 14:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `produkter`
--

CREATE TABLE `produkter` (
  `id` int(10) UNSIGNED NOT NULL,
  `regdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `produktnamn` varchar(255) NOT NULL,
  `produktbeskrivning` varchar(1000) NOT NULL,
  `produktpris` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkter`
--

INSERT INTO `produkter` (`id`, `regdate`, `produktnamn`, `produktbeskrivning`, `produktpris`) VALUES
(1, '2021-01-16 17:26:48', 'Återanvändbar tops', 'LastSwab är ett återanvändbart, klimatsmart alternativ till bomullstops.\r\n \r\nLastSwab kommer i två varianter - standard och make-up. Standard används för att rengöra öronen medan make-up är din partner in crime vid bland annat eyelinerapplikation! \r\n\r\nDet medföljande fodralet är majsbaserat och därmed nedbrytbart. Den nätta designen gör att LastSwab är mycket resevänlig.\r\n\r\nEn LastSwab håller i upp till 1000 användningar och hjälper till att bekämpa de stora mängderna plast som hittas i haven efter engångsprodukter likt tops. \r\n\r\nRengörs enkelt med tvål och vatten.', 120),
(2, '2021-01-16 17:44:26', 'Bambusugrör - Flerpack', 'Sugrör gjorda i papper med motiv av bambu. ', 80),
(3, '2021-01-16 17:46:02', 'Tandborste av bambu', 'Lyxig färgmarkerad tandborste i hållbart bambu. Levereras med fodral.', 85),
(4, '2021-01-16 17:49:19', 'OrganiCup Menskopp - Vit', 'Menskoppen är din bästa vän en gång i månaden. \r\nKan användas flera gånger om, i upp till fem år.\r\nRengörs med tillhörande rengöringmedel eller kokas i 3 minuter.\r\n', 150),
(5, '2021-01-16 17:51:05', 'Tvättbara bomullsrondeller', 'Hållbara bomullsrondeller att använda för exempelvis sminkborttagning. \r\nKan tvättas i tvättmaskin i 60 grader, för att sedan vara som nya.', 150),
(6, '2021-01-16 17:52:57', 'Ihopfällbart metallsugrör', 'Metallsugrör med praktisk förpackning. Sugröret är rostfritt och kan vikas ihop för enkel transportering.', 80),
(8, '2021-01-17 14:59:06', 'Återanvändbar fruktpåse', '', 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `regdate`) VALUES
(1, 'admin@reternal.se', 'adminpassword', '2021-01-15 13:06:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkter`
--
ALTER TABLE `produkter`
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
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produkter`
--
ALTER TABLE `produkter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
