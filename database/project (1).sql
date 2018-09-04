-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 02:44 PM
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
  `status` enum('Unknown','In_Progress','Complete') NOT NULL,
  `approval` enum('No','Yes') NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `category`, `categoryName`, `propertyName`, `damage`, `status`, `approval`, `day`) VALUES
(1, 'lecture_hall', 'asertugijl', 'dsdftgyuhjkl', 'stolen', 'Unknown', 'No', '2018-08-08 17:22:19'),
(2, 'lecture_hall', 'dsfghjkl;', 'sdftgyujkol', 'broken', 'Unknown', 'No', '2018-08-08 20:37:51'),
(3, 'lecture_hall', 'dtfyguhijklp', 'szdxcvgbhjmn,.', 'broken', 'Unknown', 'No', '2018-08-08 20:38:34'),
(4, 'office', 'xcvbnm,', 'uiop[', 'broken', 'Unknown', 'No', '2018-08-08 21:17:06'),
(5, 'games_sector', 'pavy', 'latrine', 'blocked', 'Unknown', 'No', '2018-08-14 00:30:04'),
(6, 'lecture_hall', 'T1', 'Whiteboard', 'repair', 'Unknown', 'No', '2018-08-14 00:32:57'),
(7, 'office', 'sueu maringo office', 'window', 'broken', 'Unknown', 'No', '2018-08-14 00:42:21'),
(8, 'games_sector', 'lower pavilion', 'goalpost', 'broken', 'Unknown', 'No', '2018-08-14 00:45:10'),
(9, 'hostel', 'Maringo 30/1', 'door', 'broken', 'Unknown', 'No', '2018-08-15 19:49:08'),
(10, 'office', 'Ft1', 'floor', 'cracked', 'Unknown', 'No', '2018-08-15 19:53:53'),
(11, 'anycategory', 'sdefrgt', 't78iop', 'blocked', 'Unknown', 'No', '2018-08-15 20:05:24'),
(12, 'office', 'sience', 'chair', 'replace', 'Unknown', 'No', '2018-08-15 20:07:14'),
(13, 'office', 'xcfvgbhnjmk', ' ftgyhjkl', 'broken', 'Unknown', 'No', '2018-08-31 19:56:45'),
(14, 'hostel', 'newhostel', 'window', 'spoilt', 'Unknown', 'No', '2018-09-03 01:00:56'),
(15, 'office', 'ujkujm', 'hjmyujmyhn', 'leaking', 'Unknown', 'No', '2018-09-03 06:45:18'),
(16, 'games_sector', 'uj89uiok', 'gyujhk', 'cracked', 'Unknown', 'No', '2018-09-03 06:46:27'),
(17, 'hostel', 'taton-nb 24/2', 'door', 'broken', 'Unknown', 'No', '2018-09-03 18:33:53'),
(18, 'anycategory', 'mine', 'urs', 'leaking', 'Unknown', 'No', '2018-09-04 03:18:57'),
(19, 'office', 'guyy', 'bbby', 'stolen', 'Unknown', 'No', '2018-09-04 03:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empID` int(12) NOT NULL,
  `empName` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `emp_status` enum('ASSIGNED','PENDING') NOT NULL DEFAULT 'PENDING',
  `email` varchar(60) NOT NULL,
  `jobAssigned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empID`, `empName`, `phone`, `emp_status`, `email`, `jobAssigned`) VALUES
(12, 'Lameck', '07457889', 'ASSIGNED', 'lameck@gmail.com', 'asertugijl dsdftgyuhjkl stolen'),
(13, 'Felix', '07238990', 'PENDING', 'felix@gmail.com', 'asertugijl dsdftgyuhjkl stolen'),
(14, 'Joshua', '0712345678', 'PENDING', 'joshua@gmail.com', 'guyy bbby stolen'),
(15, 'Ogendo', '0714456789', 'PENDING', 'ogendo@gmail.com', 'newhostel window spoilt'),
(16, 'Michael odhis', '070126687000', 'PENDING', 'odhis@gmail.com', 'asertugijl dsdftgyuhjkl stolen'),
(17, 'josephine', '0702646220', 'PENDING', 'jose@gmail.com', 'asertugijl dsdftgyuhjkl stolen'),
(18, 'kevin', '12340002', 'PENDING', 'kevin@gmail.com', 'asertugijl dsdftgyuhjkl stolen');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pwd` varchar(70) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `email`, `pwd`, `day`) VALUES
(3, 'johny', 'johny@gmail.com', '$2y$10$7RfnB7zxQ6g5ZOoYZxVKnOryIB8B1PJ79rs4hy2iKfU.PTQfKsrFC', '2018-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_ID` int(11) NOT NULL,
  `material_name` varchar(70) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dept_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_ID`, `material_name`, `Quantity`, `Dept_name`) VALUES
(0, 'spana', 133, 'signwriting,glazing,painting & decoration');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Id` int(30) NOT NULL,
  `message` text NOT NULL,
  `notify_status` enum('0','1') NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `message`, `notify_status`, `day`) VALUES
(1, 'THis is notidfication', '1', '2018-08-12 07:00:00'),
(2, 'THis is another notidfication', '1', '2018-08-12 07:00:00'),
(3, 'Notication 3', '1', '2018-08-12 07:00:00'),
(4, 'Notification 4', '1', '2018-08-12 07:00:00'),
(5, 'hello brendah', '1', '2018-08-14 00:46:30'),
(6, 'hello brendah', '1', '2018-08-14 00:48:27'),
(7, 'The window of sueu maringo office in the office is broken', '1', '2018-08-14 00:47:15'),
(8, 'The goalpost of lower pavilion is broken', '1', '2018-08-15 20:04:07'),
(9, 'The door of Maringo 30/1 is broken', '1', '2018-08-15 19:56:34'),
(10, 'The floor of Ft1 is cracked', '1', '2018-08-15 19:56:25'),
(11, 'The t78iop of sdefrgt is blocked', '1', '2018-09-03 03:14:07'),
(12, 'The chair of sience is replace', '1', '2018-08-15 20:07:46'),
(13, 'The  ftgyhjkl of xcfvgbhnjmk is broken', '1', '2018-09-03 20:51:34'),
(14, 'The window of newhostel is spoilt', '1', '2018-09-03 21:11:17'),
(15, 'The hjmyujmyhn of ujkujm is leaking', '1', '2018-09-04 11:08:48'),
(16, 'The gyujhk of uj89uiok is cracked', '1', '2018-09-03 20:52:18'),
(17, 'The door of taton-nb 24/2 is broken', '1', '2018-09-04 04:31:18'),
(18, 'The urs of mine is leaking', '1', '2018-09-04 03:40:43'),
(19, 'The bbby of guyy is stolen', '1', '2018-09-04 03:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `Dept_name` varchar(100) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `Quantity` double NOT NULL,
  `emp_assign` int(12) NOT NULL,
  `repair_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `id` int(30) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(70) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`id`, `name`, `email`, `pwd`, `day`) VALUES
(1, 'stela', 'sty@gmail.com', '$2y$10$U/.twdrNXUvnW7yRYU7clOwH5ujQy0oyNZxTSB', '0000-00-00 00:00:00'),
(2, 'claris', 'cla@gmail.com', '$2y$10$/BcXa/GjT9N57WW8PAI2/.oRZAx/F67s4KwLKg', '0000-00-00 00:00:00'),
(3, 'bresh', 'b@gmail.com', '$2y$10$qUxmK/SqMoLGzblSlJ4vyuhU9lgQ8yIJPaIMY6', '0000-00-00 00:00:00'),
(4, 'leah', 'leah@gmail.com', '$2y$10$tGzOojzFfhKMEAhg75nfre9kW8EewZYE5gizU2Cix5RenYgKrQRtG', '0000-00-00 00:00:00'),
(5, 'josephine', 'josie@gmail.com', '$2y$10$9GECLEoapiICq3u5c4Bi5uz26T/0r1kVlS98qumVjEUDFFCOzltcy', '0000-00-00 00:00:00'),
(6, 'cindy', 'cindy@gmail.com', '$2y$10$ADNoR667Znb8kwd2uKMJAeCrW8Vt637VaeIPK4PbOqhFSRtcV6VGG', '0000-00-00 00:00:00'),
(7, 'Franc', 'Franc@gmail.com', '$2y$10$H4Z1kukk6BO.Y6Kn35kWG.OG749eO/Snk3O0KqEF0QEB.bk6aoBdu', '0000-00-00 00:00:00'),
(8, 'Ndar', 'ndar@gmail.com', '$2y$10$ueMyabKLF643qy/w2eVOneOh9auEDNJauTdB/CsRdHt9HBW1fKg.i', '0000-00-00 00:00:00'),
(9, 'ouma', 'ouma@gmail.com', '$2y$10$PlSaozvMCm.YlESk6vnQXODuxxxn9tNng8ULKqNnhPxo8jKATnfpW', '0000-00-00 00:00:00'),
(10, 'machage', 'machage@gmail.com', '$2y$10$GwubMPgpKZsW86YHngbdseZeAWyvo1.B.zsdxWozKqjm/DcEBmuti', '0000-00-00 00:00:00'),
(11, 'bre', 'bre@gmail.com', '$2y$10$Dcn.W9KL34SNK9rrst2IbuQDJzwe/owu4AOjvnNLgap819VBvb3ZO', '0000-00-00 00:00:00'),
(12, 'Opiyo', 'opiyo@gmail.com', '$2y$10$urpP.RrmXFYJK3hxNkdyB.dtzsJreS0FBcmY7wY/FdjAfnBEKyAD.', '0000-00-00 00:00:00'),
(13, 'Marry', 'marry@gmail.com', '$2y$10$wNK.3CsJL9RGdrONrY5nLurc.UOVN5zjc7R1MyVxzM8ukH5sA3t5i', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper_notice`
--

CREATE TABLE `storekeeper_notice` (
  `Id` int(30) NOT NULL,
  `message` text NOT NULL,
  `notify_status` enum('0','1') NOT NULL,
  `day` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storekeeper_notice`
--

INSERT INTO `storekeeper_notice` (`Id`, `message`, `notify_status`, `day`) VALUES
(1, 'GiveLamecksome materials', '0', '2018-08-31 20:27:42.594073'),
(2, 'GiveLamecksome materials', '0', '2018-08-31 20:30:15.819549'),
(3, 'GiveLamecksome materials', '0', '2018-08-31 20:30:48.551078'),
(4, 'GiveLamecksome materials', '0', '2018-08-31 20:32:08.676955'),
(5, 'GiveLamecksome materials', '0', '2018-08-31 20:32:32.882026');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `name` varchar(55) NOT NULL,
  `regNo` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(70) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regNo`, `email`, `pwd`, `day`) VALUES
(1, 'brendah', '', 'br@gmail.com', '$2y$10$Rh2scdcBTM.oUfYgmCKAO.Jt1gaeXYQSRUGg85', '0000-00-00'),
(2, 'alex', '', 'al@gmail.com', '$2y$10$/CQpX8pWq6cY6usQkqGIKOsUnXNr6ou6nbUFvB', '0000-00-00'),
(3, 'josephine', '', 'jos@gmail.com', '$2y$10$AqrJUNEggX3cYZTPGaLLlOqc46H6ShTraufZRj', '0000-00-00'),
(4, 'ajos', '', 'jos@gmail.com', '$2y$10$HI0zi2dTqF0AfE76LcQvsu0ZS5GATbk/9NEo8Y', '0000-00-00'),
(5, 'mara', 'S33', 'ma@gmail.com', '$2y$10$/.E5QGHJ4y6HeTfK/3YN3uXeyDobFZ6LvEdnUR', '0000-00-00'),
(7, 'elvis', 'elvis', 'elvis@gmail.com', '$2y$10$rC8QWWTGcwUXzhyf8rSPauyk5H9bJNfeZjrEjx', '0000-00-00'),
(8, 'lil', 's13', 'lil@gmail.com', '$2y$10$kVZ773JUn5LURV96tIRu4.dCXa.JM7deTuP8S3', '0000-00-00'),
(9, 'ondiek', 's13/09725/15', 'ondiek@gmail.com', '$2y$10$wm4r4mbcFDqe/iZqvR2sp.nLp7LEgQRSR.vC1nP4dcgBKkdNPfXKG', '2018-07-30'),
(10, 'awino', 'S1234', 'ondiekbrendah@gmail.com', '$2y$10$8byZZvPFqjc4jxBbL4ffMeWm8CEzSuivsJ43DSnyNBZj10kfP3.Oa', '2018-08-06'),
(11, 'khalid', 'dddfjfofj', 'joseee@gmail.com', '$2y$10$8Czdn2CidlV2M1Wd3mWGSuXdplj1sfuUal5crjFubavBA5F.QaRA2', '2018-09-04');

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

-- --------------------------------------------------------

--
-- Table structure for table `workstatus`
--

CREATE TABLE `workstatus` (
  `Id` int(50) NOT NULL,
  `jobDescription` varchar(100) NOT NULL,
  `Work_status` enum('Unknown','Inprogress','Complete') NOT NULL,
  `Done_by` varchar(50) NOT NULL,
  `empID` varchar(30) NOT NULL,
  `Day` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workstatus`
--

INSERT INTO `workstatus` (`Id`, `jobDescription`, `Work_status`, `Done_by`, `empID`, `Day`) VALUES
(41, 'T1 Whiteboard repair', 'Complete', '12', '12', '2018-08-17 20:31:34'),
(42, 'sueu maringo office window broken', 'Inprogress', 'Felix', '13', '2018-08-17 20:59:11'),
(43, 'dtfyguhijklp szdxcvgbhjmn,. broken', 'Inprogress', 'Felix', '13', '2018-08-29 18:12:55'),
(44, 'asertugijl dsdftgyuhjkl stolen', 'Complete', 'Lameck', '12', '2018-08-29 18:19:10'),
(45, 'Ft1 floor cracked', 'Inprogress', 'Michael odhis', '16', '2018-08-31 12:54:24'),
(46, 'sience chair replace', 'Inprogress', 'Ogendo', '15', '2018-08-31 12:55:48'),
(47, 'sience chair replace', 'Inprogress', 'Ogendo', '15', '2018-08-31 14:52:35'),
(48, 'sience chair replace', 'Inprogress', 'josephine', '17', '2018-08-31 14:54:49'),
(49, 'asertugijl dsdftgyuhjkl stolen', 'Inprogress', 'Michael odhis', '16', '2018-09-02 18:02:48');

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
  ADD PRIMARY KEY (`empID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `storekeeper`
--
ALTER TABLE `storekeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storekeeper_notice`
--
ALTER TABLE `storekeeper_notice`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `workstatus`
--
ALTER TABLE `workstatus`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `empID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `storekeeper`
--
ALTER TABLE `storekeeper`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `storekeeper_notice`
--
ALTER TABLE `storekeeper_notice`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workstatus`
--
ALTER TABLE `workstatus`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
