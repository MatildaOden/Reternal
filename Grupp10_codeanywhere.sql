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
(1, '2021-01-16 17:26:48', '??teranv??ndbar tops', 'LastSwab ??r ett ??teranv??ndbart, klimatsmart alternativ till bomullstops.\r\n \r\nLastSwab kommer i tv?? varianter - standard och make-up. Standard anv??nds f??r att reng??ra ??ronen medan make-up ??r din partner in crime vid bland annat eyelinerapplikation! \r\n\r\nDet medf??ljande fodralet ??r majsbaserat och d??rmed nedbrytbart. Den n??tta designen g??r att LastSwab ??r mycket resev??nlig.\r\n\r\nEn LastSwab h??ller i upp till 1000 anv??ndningar och hj??lper till att bek??mpa de stora m??ngderna plast som hittas i haven efter eng??ngsprodukter likt tops. \r\n\r\nReng??rs enkelt med tv??l och vatten.', 120),
(2, '2021-01-16 17:44:26', 'Bambusugr??r - Flerpack', 'Sugr??r gjorda i papper med motiv av bambu. ', 80),
(3, '2021-01-16 17:46:02', 'Tandborste av bambu', 'Lyxig f??rgmarkerad tandborste i h??llbart bambu. Levereras med fodral.', 85),
(4, '2021-01-16 17:49:19', 'OrganiCup Menskopp - Vit', 'Menskoppen ??r din b??sta v??n en g??ng i m??naden. \r\nKan anv??ndas flera g??nger om, i upp till fem ??r.\r\nReng??rs med tillh??rande reng??ringmedel eller kokas i 3 minuter.\r\n', 150),
(5, '2021-01-16 17:51:05', 'Tv??ttbara bomullsrondeller', 'H??llbara bomullsrondeller att anv??nda f??r exempelvis sminkborttagning. \r\nKan tv??ttas i tv??ttmaskin i 60 grader, f??r att sedan vara som nya.', 150),
(6, '2021-01-16 17:52:57', 'Ihopf??llbart metallsugr??r', 'Metallsugr??r med praktisk f??rpackning. Sugr??ret ??r rostfritt och kan vikas ihop f??r enkel transportering.', 80),
(8, '2021-01-17 14:59:06', '??teranv??ndbar fruktp??se', '', 120);

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
