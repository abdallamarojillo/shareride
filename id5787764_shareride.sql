-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2018 at 08:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5787764_shareride`
--

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `id` int(6) NOT NULL,
  `rider` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`id`, `rider`, `origin`, `destination`, `date`) VALUES
(25, 'James', 'Afya Center', 'Ngong Road', '2018-05-17 19:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `capacity` int(4) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `username`, `email`, `origin`, `destination`, `capacity`, `status`, `date`) VALUES
(7, 'Abdalla', 'marojillo@gmail.com', 'Kiambu', 'Nairobi', 5, 'available', '2018-05-17'),
(8, 'Abdalla', 'marojillo@gmail.com', 'Afya Center', 'Ngong Road', 6, 'available', '2018-05-17'),
(9, 'Abdalla', 'marojillo@gmail.com', 'Mombasa', 'Nairobi', 2, 'available', '2018-05-17'),
(10, 'Abdalla', 'marojillo@gmail.com', 'Malindi', 'Kilifi', 4, 'available', '2018-05-17'),
(11, 'Abdalla', 'marojillo@gmail.com', 'Mwembe Tayari', 'Likoni', 8, 'available', '2018-05-17'),
(12, 'Abdalla', 'marojillo@gmail.com', 'Mambrui', 'Malindi', 10, 'available', '2018-05-17'),
(13, 'Abdalla', 'marojillo@gmail.com', 'Likoni', 'Ferry', 10, 'available', '2018-05-17'),
(14, 'Abdalla', 'marojillo@gmail.com', 'Likoni', 'Mtongwe', 6, 'available', '2018-05-17'),
(15, 'Abdalla', 'marojillo@gmail.com', 'Ngong Road', 'Luthuli Avenue', 2, 'available', '2018-05-17'),
(16, 'Abdalla', 'marojillo@gmail.com', 'Kisii', 'Kisumu', 6, 'available', '2018-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date-registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date-registered`) VALUES
(9, 'Abdalla', 'marojillo@gmail.com', '$2y$12$9Nw2Dhu3gAEm.gZVlvyjROeQEEMVX4GsXm6M3J/3bsvLyaSy0D43i', '2018-05-16 17:51:21'),
(13, 'James', 'sobtms@gmail.com', '$2y$12$NwKaP/z/RGF0ZuVehStYUOt6s42ZXhaU34kqksAI8WukxtK8nWGF.', '2018-05-17 19:42:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
