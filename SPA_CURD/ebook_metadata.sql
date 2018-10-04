-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 08:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs230`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook_metadata`
--

CREATE TABLE `ebook_metadata` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Creator` text NOT NULL,
  `Title` text NOT NULL,
  `Type` text NOT NULL,
  `Identifier` varchar(13) NOT NULL,
  `Date` date NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Description` varchar(25000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_metadata`
--

INSERT INTO `ebook_metadata` (`ID`, `Creator`, `Title`, `Type`, `Identifier`, `Date`, `Language`, `Description`) VALUES
(1, 'Clare Mackintosh', 'Let Me Lie', 'Fiction', '9780751564891', '2018-03-01', 'en-us', 'Tightly-plotted, tense and affecting, Let Me Lie will keep you guessing until the very last line. No one writes a twist like Clare Mackintosh\' PAULA HAWKINS'),
(10, 'Eloisa James', 'Midsummer Delights', 'Romance', '9780062837813', '2018-02-06', 'EN-US', 'Elias Hempleworth-Gray has only one thing only of value his title, Earl of Leyton. Determined to leave England and the scandal of his gambler father behind, Elias hopes to turn around his fortunes and come back to claim the lady he loves, Miss Penelope White. But Penny has other plans for the man she has loved all her life...plans that include a masquerade, a stolen kiss and a lost shoe.'),
(11, 'Peter Frankopan', 'The Silk Roads', 'History', '9781408839966', '2015-08-27', 'EN-US', 'For centuries, fame and fortune were to be found in the west, in the New World of the Americas. Today, it is the east which calls out to those in search of riches and adventure. Sweeping right across Central Asia and deep into China and India, a region that once took centre stage is again rising to dominate global politics, commerce and culture.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
