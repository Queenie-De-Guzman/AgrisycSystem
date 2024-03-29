-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2024 at 02:57 AM
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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL,
  `sender` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `recipient` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `user_id` int NOT NULL,
  `id` int NOT NULL,
  `names` varchar(225) NOT NULL,
  `region` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `province` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `barangay` varchar(225) NOT NULL,
  `cans` int NOT NULL,
  `varia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date DEFAULT NULL,
  `act` text NOT NULL,
  `area` varchar(225) NOT NULL,
  `typhoonname` text NOT NULL,
  `typhoon` varchar(225) NOT NULL,
  `heavy_rains` varchar(225) NOT NULL,
  `total_damages` int NOT NULL,
  `cans_damages` int NOT NULL,
  `HA` text NOT NULL,
  `disease` text NOT NULL,
  `list` text NOT NULL,
  `per` text NOT NULL,
  `standing_crop` int NOT NULL,
  `planted` text NOT NULL,
  `transplate_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `production` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Harvested` text NOT NULL,
  `expected_volumn` int NOT NULL,
  `Local` text NOT NULL,
  `per_kg` text NOT NULL,
  `php_per_kg` text NOT NULL,
  `Cold` text NOT NULL,
  `perkg` text NOT NULL,
  `phpper_kg` text NOT NULL,
  `OTHERS` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`user_id`, `id`, `names`, `region`, `province`, `city`, `barangay`, `cans`, `varia`, `date`, `act`, `area`, `typhoonname`, `typhoon`, `heavy_rains`, `total_damages`, `cans_damages`, `HA`, `disease`, `list`, `per`, `standing_crop`, `planted`, `transplate_date`, `expected_date`, `production`, `Harvested`, `expected_volumn`, `Local`, `per_kg`, `php_per_kg`, `Cold`, `perkg`, `phpper_kg`, `OTHERS`, `created_at`) VALUES
(36, 59, 'De Guzman YUan ', '17', '1751', '175103', '175103003', 3000, 'yellow', '0002-02-22', '0002-02-22', '9000', 'LOLI', '9000', '222', 222, 222, '22', 'ON', 'MisManagement', '', 2222, '0002-02-22', '0002-02-22', '0000-00-00', '222', '222', 22, 'ON', '344', '3000', 'ON', '20', 'SAN MIGUEL', '', NULL),
(36, 61, 'De Guzman YUan ', 'MIMAROPA', 'Marinduque', 'Buenavista', 'Bagtingon', 56, 'yellow', '0324-12-31', '0022-02-22', '222', '222', '222', '2222', 222, 22222, '22', 'ON', 'Harabas', '', 222, '0002-02-22', '0022-02-02', '0000-00-00', '2222', '222', 22, 'ON', '222', '22', 'ON', '222', '222', '', NULL),
(36, 62, 'wwww', 'MIMAROPA', 'Occidental Mindoro', 'Magsaysay', 'Gapasan', 122, '22', '2024-04-05', '2024-03-30', '111', '222', '22', '2222', 222, 222, '222', 'ON', 'Drought', '', 222, '0002-02-22', '0002-02-22', '0000-00-00', '222', '222', 222, 'ON', '22', '22222', 'ON', '222', '22222', '2222', NULL);

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
(35, 'OrientalMindoro@gmail.com', 'ORMIN', '$2y$10$ZfDSn5BV/VcCZr4lG7xKIO.pcdie9P5xZlh.YzOUFqeRVRS5NTtTe', '$2y$10$vMjOJIB6cihwKPkZBf04qO9nY56ID5lSgdzoeu3oB3mKHwhFOOcc.', 'user', '0000-00-00 00:00:00'),
(36, 'OccidentalMindoro@gmail.com', 'Occi', '$2y$10$73ztIumd1MM8xboeQo9hz.D41tp3XZewhCEO7qWeoZzX4sZc96WDu', '$2y$10$VCu9.7pUmeTZtf9i6CtRs.rQrS1ptkjnok4GwiChVy7/vsBQJATeq', 'user', '0000-00-00 00:00:00'),
(37, 'Marinduque@gmail.com', 'Marinduque', '$2y$10$riUEA15delz6lgZokVBCwupNQ3AtHY2DZKFt3s1aILHOjWspwSPHS', '$2y$10$RO7TQwKYP8qUnB5yIB4gTukQ6HALo25ooz77LtUGvPH3PasR.Fd0u', 'user', '0000-00-00 00:00:00'),
(38, 'Romblon@gmail.com', 'Romblon', '$2y$10$7HhPVXmZHq9XP3OwYVSdu.MVpUMrR9oodABHOCaAUElyxq5K4aEfq', '$2y$10$i7PH.XVIyjGvjs6v/.4isu86aeCyWwr9fwARrZoJz7imBCtCoIz0m', 'user', '0000-00-00 00:00:00'),
(39, 'Palawan@gmail.com', 'Palawan', '$2y$10$Wh/B9t0vyJqS4.QrQQeuKeIh.5/J76a3mSENS6LvtLZc0.iizwmEq', '$2y$10$7yN4phSYP.LvYOZ3TcMwf.TRUdGCjQW3VFvXd2uSJal1uJesly0/O', 'user', '0000-00-00 00:00:00'),
(40, 'MimaropaRegion@gmail.com', 'Region', '$2y$10$sUdaH/ASy5/HLD8xouj2ZePGmOmY5aL3wCiYbolFI5rAf4DZBBeqi', '$2y$10$HKTWUXtxFNi9q2bFKJDgb.DOmeMMy91q9.mywrxrXB5JmnQz0vCsm', 'Admin', '0000-00-00 00:00:00');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
