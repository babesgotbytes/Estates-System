-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 01:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `id` int(30) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`id`, `name`, `email`, `pwd`, `day`) VALUES
(1, 'stela', 'sty@gmail.com', '$2y$10$U/.twdrNXUvnW7yRYU7clOwH5ujQy0oyNZxTSB', '0000-00-00'),
(2, 'claris', 'cla@gmail.com', '$2y$10$/BcXa/GjT9N57WW8PAI2/.oRZAx/F67s4KwLKg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `name` varchar(55) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(65) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usr_nm` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usr_nm`, `email`, `pwd`, `day`) VALUES
(1, 'asd', 'vb@gmail.com', '$2y$10$JKyquWfmxGf/GT1kMU5U2u9Fm8i6B.CenouZm81JKqjhMg.29Uipa', '2018-06-25'),
(2, 'bnm', 'bnm@gmail.com', '$2y$10$Z/iW/VILf1t7j/GcQah7LuFEw2wp9.3mqEIQM087hmrjpsipR48fu', '2018-06-25'),
(3, 'ty', 'ty@gmail.com', '$2y$10$xOLi3ZoR95H.p7hNWOeLTeS/jviwE387HkosDQfQhyX.T63B5xbzO', '0000-00-00'),
(4, 'jo', 'jo@gmail.com', '$2y$10$hxSKLVxCiYmzF91vKJbuRO7gCzYdGk1o8m.ufxSddnPP7fgakvx8y', '0000-00-00'),
(5, 'hj', 'hj@gmail.com', '$2y$10$mTUDpJhdshKUGFhIiwmGSesPDKR7Esq4nQefm1c07bEWcccy7WBxy', '0000-00-00'),
(6, 'jos', 'jos@gmail.com', '$2y$10$duJknSa1SQCjsXmI2Xim0OznRhv5HYdEVVuwlFHoMzgejf7I4b9pS', '0000-00-00'),
(7, 'cla', 'cla@gmail.com', '$2y$10$vkj0JcUvaviSManUAnXagOnbpt4Z4CDqoKBfsYJozABjqEf01OFmy', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storekeeper`
--
ALTER TABLE `storekeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storekeeper`
--
ALTER TABLE `storekeeper`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
