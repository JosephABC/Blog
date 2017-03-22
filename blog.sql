-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 04:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `title` text NOT NULL,
  `post` varchar(65000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `author`, `time`, `title`, `post`) VALUES
(8, 2, '0000-00-00 00:00:00', 'hello', 'hello r'),
(9, 12, '0000-00-00 00:00:00', 'hello 2', 'hello 3'),
(10, 14, '0000-00-00 00:00:00', 'hello 4', 'hello 4'),
(11, 14, '0000-00-00 00:00:00', 'hello 5', 'hello 5'),
(25, 2, '0000-00-00 00:00:00', 'asdas', 'asdasd'),
(26, 2, '0000-00-00 00:00:00', 'hello', 'hello hello hello\r\nthis is a new post'),
(27, 2, '0000-00-00 00:00:00', 'dsda', 'Writing an academic essay means fashioning a coherent set of ideas into an argument. Because essays are essen'),
(28, 2, '0000-00-00 00:00:00', 'asdfads', 'asdfads'),
(29, 2, '0000-00-00 00:00:00', 'asdfasd', 'asdfads'),
(30, 2, '0000-00-00 00:00:00', 'asdfadsf', 'asdfasdfa'),
(31, 2, '0000-00-00 00:00:00', 'adfasdf', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uid`, `pwd`) VALUES
(2, 'Joseph Ang', 'abc', '1234'),
(12, 'hello', 'hello', 'hello'),
(13, 'joseph', 'hello2', 'hello2'),
(14, 'hello', 'hello3', 'hello3'),
(15, 'Guest', 'Guest', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
