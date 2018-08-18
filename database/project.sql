-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 07:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` int(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `categoryName` varchar(90) NOT NULL,
  `propertyName` varchar(30) NOT NULL,
  `damage` varchar(30) NOT NULL,
  `status` enum('Unknown','In_Progress','Complete','') NOT NULL,
  `approval` enum('No','Yes') NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `category`, `categoryName`, `propertyName`, `damage`, `status`, `approval`, `day`) VALUES
(1, 'hostel', 'maringo 28/2', 'chair', 'broken', 'Unknown', 'No', '2018-08-15 10:53:41'),
(2, 'hostel', 'maringo28/2', 'door', 'paint', 'Unknown', 'No', '2018-08-15 15:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Emp_id` varchar(15) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `empName` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `emp_status` enum('ASSIGNED','PENDING') NOT NULL,
  `Email` varchar(100) NOT NULL,
  `jobAssigned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Emp_id`, `empName`, `phone`, `emp_status`, `Email`, `jobAssigned`) VALUES
('SP13/00820/15', 'Elvis Mutende', '', 'ASSIGNED', 'elvimutende@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pwd` varchar(70) NOT NULL,
  `day` date NOT NULL,
  `token` varchar(12) NOT NULL,
  `tokenexpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `pwd`, `day`, `token`, `tokenexpire`) VALUES
(1, 'jossy', 'jossy@gmail.com', '$2y$10$hfBCRacDQaqynHDnrZb/YOCJovCM6H7Jh', '2018-08-07', '', '0000-00-00 00:00:00'),
(2, 'ok', 'ok@gmail.com', '$2y$10$pRMypxlkiftNBKbuDit/beVMPW1ENtSkgtFsb3Aj63T35D2yGVUKS', '2018-08-07', '', '0000-00-00 00:00:00'),
(3, 'james', 'james@gmail.com', '$2y$10$A97eTPpfYugr2rdcMPk5IOrNXWEfIQ3.anWIiO/nQicLswIuYSW16', '2018-08-09', '', '0000-00-00 00:00:00'),
(4, '', '', '', '0000-00-00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_ID` int(11) NOT NULL,
  `material_name` varchar(70) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dept_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_ID`, `material_name`, `Quantity`, `Dept_name`) VALUES
(71, 'spana', 43, 'mechanical'),
(73, 'spana', 10, 'carpentry,joinery & locksmith'),
(74, 'spana', 10, 'electrical and refrigeration'),
(75, 'spana', 23, 'welding & fabrication'),
(76, 'gloves', 10, 'mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(30) NOT NULL,
  `message` text NOT NULL,
  `notify_status` enum('0','1') NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `Dept_name` varchar(100) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `Quantity` double NOT NULL,
  `emp_assign` varchar(100) NOT NULL,
  `repair_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`Dept_name`, `material_name`, `Quantity`, `emp_assign`, `repair_date`) VALUES
('Dept_name', 'mtrl', 10, 'SP13/00820/15', '2018-08-08'),
('Dept_name', 'mtrl', 10, 'SP13/00820/15', '2018-08-08'),
('Dept_name', 'mtrl', 8, 'SP13/00820/15', '2018-08-08'),
('', 'mtrl', 5, 'SP13/00820/15', '2018-08-08'),
('', 'mtrl', 4, 'SP13/00820/15', '2018-08-08'),
('mechanical', 'mtrl', 3, 'SP13/00820/15', '2018-08-08'),
('mechanical', 'gloves', 10, 'SP13/00820/15', '2018-08-08'),
('mechanical', 'spana', 8, 'SP13/00820/15', '2018-08-09'),
('mechanical', 'spana', 12, 'SP13/00820/15', '2018-08-09'),
('mechanical', 'spana', 2, 'dfghjksdfghj', '2018-08-09'),
('mechanical', 'spana', 5, 'edrftgjuyhtg', '2018-08-09'),
('mechanical', 'gloves', 10, 'SP13/00820/15', '2018-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `id` int(30) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(70) NOT NULL,
  `day` date NOT NULL,
  `token` varchar(10) NOT NULL,
  `tokenexpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`id`, `name`, `email`, `pwd`, `day`, `token`, `tokenexpire`) VALUES
(1, 'stela', 'sty@gmail.com', '$2y$10$U/.twdrNXUvnW7yRYU7clOwH5ujQy0oyNZxTSB', '0000-00-00', '', '0000-00-00 00:00:00'),
(2, 'claris', 'cla@gmail.com', '$2y$10$/BcXa/GjT9N57WW8PAI2/.oRZAx/F67s4KwLKg', '0000-00-00', '', '0000-00-00 00:00:00'),
(3, 'josie', 'josie@gmail.com', '$2y$10$mxLUwU6Ckyc/Raf2KdlZ2uwG0riuWF/pSNeXBxRX6QRcwuiS9PD5K', '0000-00-00', '', '0000-00-00 00:00:00'),
(4, 'jojo', 'joo@gmail.com', '$2y$10$ag3Q5SmqTLW8SO9Rjznam.hEPpncgFLZNG/x4B/zzqH5GKBqtiXv2', '0000-00-00', '', '0000-00-00 00:00:00'),
(5, 'hhh', 'hhh@gmail.com', '$2y$10$Avve1TPojftauolbtXWGqedH4vlq9DK/5OuAB02rgmQRiiGO2fjgi', '0000-00-00', '', '0000-00-00 00:00:00');

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
  `day` date NOT NULL,
  `token` varchar(12) NOT NULL,
  `tokenexpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regno`, `email`, `pwd`, `day`, `token`, `tokenexpire`) VALUES
(1, 'kok', 's13/09876/12', 'kok@gmail.com', '$2y$10$gr.IEDR9w5cbajZtg2Lmj.IFpL7uQELMBx8mYPGiErM6rFv1v0g5i', '2018-08-14', '', '0000-00-00 00:00:00'),
(2, 'Elvis Mutende', 'SP13/00820/15', 'elvismutende@gmail.com', '$2y$10$tdVuU4mPz5gvk53px/z4pO5K7/FTYQIryZLn/2booT7yLkDe2GOx.', '2018-08-14', 'mwl7y3uzfvoc', '2018-08-14 23:19:45');

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
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
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
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `material_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storekeeper`
--
ALTER TABLE `storekeeper`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
