-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 07:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prog`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`id`, `email`, `message`) VALUES
(1, 'saad-alhuwaymil@hotmail.com', 'message'),
(2, 'lujain456700@gmail.com', 'مبروك لجين '),
(3, 'lujain456700@gmail.com', 'مبرررررررررررروك '),
(4, 'rwishd17@gmail.com', 'صباح الخير '),
(5, 'dhawaibrahim99@icloud.com', 'صباح الخير'),
(6, 'lljjjnn1424@gmail.com', 'تم القبول'),
(7, 'lljjjnn1424@gmail.com', 'تم القبول'),
(8, 'lujain456700@gmail.com', 'jhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `canel`
--

CREATE TABLE `canel` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canel`
--

INSERT INTO `canel` (`id`, `email`, `message`) VALUES
(1, 'lujain456700@gmail.com', 'لخصوص لم يتم اتباع السياسه');

-- --------------------------------------------------------

--
-- Table structure for table `ordrs`
--

CREATE TABLE `ordrs` (
  `id` int(11) NOT NULL,
  `job_id` int(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `u_phone` varchar(50) NOT NULL,
  `gander` varchar(30) NOT NULL,
  `prgram_name` varchar(30) NOT NULL,
  `target_group` varchar(30) NOT NULL,
  `specialisation` varchar(70) NOT NULL,
  `pxecuting_party` varchar(40) NOT NULL,
  `place_of_pxecuting` varchar(20) NOT NULL,
  `day_program` int(5) NOT NULL,
  `date_start` date NOT NULL,
  `date_done` date NOT NULL,
  `traning_method` varchar(40) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `stat_order` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordrs`
--

INSERT INTO `ordrs` (`id`, `job_id`, `full_name`, `u_email`, `password`, `u_phone`, `gander`, `prgram_name`, `target_group`, `specialisation`, `pxecuting_party`, `place_of_pxecuting`, `day_program`, `date_start`, `date_done`, `traning_method`, `details`, `stat_order`) VALUES
(1, 111, 'Lujain Hussain AL Ramadan', 'lljjjnn1424@gmail.com', '000000', '99999', 'female', 'تقنية', 'طالبات', 'برمجة', 'الادارة', 'mkk', 2, '2023-02-08', '2023-02-09', 'online', 'hh', ''),
(2, 1020, 'n', 'saad-alhuwaymil@hotmail.com', '12344', '0555555', 'female', 'design', 'tetsher', 'It', 'Riyadh', 'mo', 5, '2023-02-09', '2023-02-13', 'attendance', 'Test ', ''),
(3, 1020, 'n', 'dhawaibrahim99@icloud.com', '12344', '0555555', 'female', 'design', 'tetsher', 'It', 'Riyadh', 'mo', 1, '2023-02-09', '2023-02-09', 'attendance', 'nnnnnnnnnnnnnnnnnnnnnn', ''),
(4, 102099, 'n', 'lujain456700@gmail.com', '999', '0555555', 'female', 'design', 'tetsher', 'It', 'Riyadh', 'mo', 1, '2023-02-09', '2023-02-09', 'attendance', 'السلام', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `position`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'dfpjgopfdjopd@lfmdfpgdfp.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canel`
--
ALTER TABLE `canel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordrs`
--
ALTER TABLE `ordrs`
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
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `canel`
--
ALTER TABLE `canel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordrs`
--
ALTER TABLE `ordrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
