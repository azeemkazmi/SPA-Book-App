-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 03:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook_metadata`
--

CREATE TABLE `ebook_metadata` (
  `id` int(11) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `identifier` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `language` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook_metadata`
--

INSERT INTO `ebook_metadata` (`id`, `creator`, `title`, `type`, `identifier`, `date`, `language`, `description`) VALUES
(12, 'Julianne MacLean', 'A Curve in the Road', 'Romance', 'B079R8DY6F', '2017-03-07', 'English', 'Abbie MacIntyre is living the dream in the picture.'),
(13, 'Tom Clavin', 'Wild Bill', 'History', '1250173795', '2016-05-10', 'English', 'In July 1865, \"Wild Bill\" Hickok shot and killed Davis.'),
(14, 'Gordon S. Wood ', 'Empire of Liberty', 'History', '465736SDY', '2015-11-10', 'English', 'A History of the Early Republic	'),
(15, 'Kerry Fisher ', 'After the Lie', 'Drama', 'B01BAWSUNK', '2019-01-01', 'English', 'A gripping novel about love, loss and family secrets '),
(16, 'Kamran Aslam', 'Chronicles of Malangi', 'Fantasy', 'K41BSHAH', '2016-07-03', 'Urdu', 'An impressive Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ebook_metadata`
--
ALTER TABLE `ebook_metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
