-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2024 at 01:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrisync`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `user_id` int NOT NULL,
  `id` int NOT NULL,
  `names` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `cans` int NOT NULL,
  `date` datetime NOT NULL,
  `area` varchar(225) NOT NULL,
  `typhoon` varchar(225) NOT NULL,
  `heavy_rains` varchar(225) NOT NULL,
  `total_damages` int NOT NULL,
  `cans_damages` int NOT NULL,
  `standing_crop` int NOT NULL,
  `transplate_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `expected_area` varchar(225) NOT NULL,
  `expected_volumn` int NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`user_id`, `id`, `names`, `location`, `cans`, `date`, `area`, `typhoon`, `heavy_rains`, `total_damages`, `cans_damages`, `standing_crop`, `transplate_date`, `expected_date`, `expected_area`, `expected_volumn`, `created_at`) VALUES
(2, 1, 'e', '11', 11, '2345-11-11 00:00:00', '11', '11', '112', 21, 222, 222, '0022-02-22', '0002-02-22', '222', 222, '0000-00-00 00:00:00'),
(2, 2, 'e', '11', 11, '2345-11-11 00:00:00', '11', '11', '112', 21, 222, 222, '0022-02-22', '0002-02-22', '222', 222, '0000-00-00 00:00:00'),
(2, 3, '2222', '222', 2222, '2222-02-22 00:00:00', '2222', '222', '222', 222, 222, 0, '0222-02-22', '2222-02-22', '222', 222, '0000-00-00 00:00:00'),
(2, 4, '2222', '222', 2222, '2222-02-22 00:00:00', '2222', '222', '222', 222, 222, 0, '0222-02-22', '2222-02-22', '222', 222, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Province` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re_password` varchar(100) NOT NULL,
  `usertype` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `Province`, `password`, `re_password`, `usertype`, `created_at`) VALUES
(2, 'mukwini@gmail.com', '', '$2y$10$EdwNA8fnM2NuujvJM9i/HuQnwdA8yCmLpOzSVWGsFlnkC9ZmhmsmK', '$2y$10$MWO1DXVzyb1l2SC0nS17xOEvbbX.d9fa8X3xAwCIN0H1KbKzwOc56', 'user', '0000-00-00 00:00:00'),
(3, 'mimaropa@gmail.com', 'Oriental Mindoro', '$2y$10$3ZwM7kwhb5Z8AfClcVBldulFdpj1Kf2rbJ6QDPMf80R7UNU9j3aW2', '$2y$10$x1cCnOF.IdDDDQpzH1JH.OBv2F/eLMsK/68.gT8mQEXMuZxFKiQ76', 'user', '0000-00-00 00:00:00'),
(4, 'occidentalmindoro@gmail.com', 'Occidental Mindoro', '$2y$10$UKcGgUKZJpWXXYbKp5Jofuo3H1O7LfR.K49R38NWoGNFDivaAblmW', '$2y$10$vOvD5dumlVoE.v5jAv8kH./QpSE6rywq0xcek07u4JZJfCBe9cgLq', 'user', '0000-00-00 00:00:00'),
(5, 'queenie@gmail.com', 'victoria', '1234567890', '1234567890', 'Admin\r\n', '0000-00-00 00:00:00'),
(6, '1234@gmail.com', '12', '$2y$10$cnoq6jphfr5usqhASHvKmu.FgMFjS5sC6k2Q65ZKqwrXrCKIO6GLK', '$2y$10$FoAxsvNpZN6rrJnug0a7tuS1nAO04rTZ.j2BqSzVjtmff/6fDF38y', 'Admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
