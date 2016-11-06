-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2016 at 12:18 AM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `random_quote`
--

CREATE TABLE IF NOT EXISTS `random_quote` (
`id` int(11) NOT NULL,
  `quote` varchar(500) NOT NULL,
  `author` varchar(64) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `random_quote`
--

INSERT INTO `random_quote` (`id`, `quote`, `author`, `time`) VALUES
(1, 'Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.\r\n', 'Thomas Edison', 1473811200),
(2, 'The greatest test of courage on earth is to bear defeat without losing heart.\r\n', 'Robert Ingersoll\r\n', 1476471587),
(3, 'For a successful technology, reality must take precedence over public relations, for Nature cannot be fooled.', 'Richard Feynman', 1476473477),
(4, 'Somewhere, something incredible is waiting to be known.', 'Carl Sagan', 1476473588),
(5, 'Give to every human being every right that you claim for yourself.', 'Robert Ingersoll', 1476473693),
(6, 'Anyone who has never made a mistake has never tried anything new.', 'Albert Einstein', 1476473803);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `random_quote`
--
ALTER TABLE `random_quote`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `random_quote`
--
ALTER TABLE `random_quote`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
