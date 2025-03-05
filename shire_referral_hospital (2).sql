-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shire_referral_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients_info`
--

CREATE TABLE `patients_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `case_type` varchar(30) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `appointment_number` varchar(7) NOT NULL,
  `appointment_date` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients_info`
--

INSERT INTO `patients_info` (`id`, `fullname`, `case_type`, `phone`, `appointment_number`, `appointment_date`) VALUES
(1, 'brhanu', 'headeach', '0912345678', '1', '2024-05-01T09:12'),
(2, 'hadis', 'diabetes', '0912345656', '2', '2024-05-14T09:14'),
(3, 'abebe', 'tv', '09786543', '3', '2024-05-23T09:16'),
(4, 'sol', 'comon cold', '09654321122', '4', '2024-05-31T09:19'),
(5, 'dagim', 'headeach', '0987654321', '5', '2024-06-01T09:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'miki', '$2y$10$oDAO1zt0VKWKiOROe7nUnud8V9SYLEUjlfTVCeyY3p9rOBRSDSqPq', '2024-05-29 09:12:26'),
(2, 'solomon', '$2y$10$J2oE4AbJfmQgJ0W9psK/euNP6nw6JjbJ7BN/Nl73zss/qOvL3kEni', '2024-05-29 09:13:57'),
(3, 'tilahun', '$2y$10$CpHjM4Igh82KTHwRFsMIVO4VoeJO7YDbUSid7TkLDYnBDLpOBRwJK', '2024-05-29 09:15:35'),
(4, 'kibrom', '$2y$10$xmljmHQOi79GQkI3XziS5uO82qZY6TxSuGF1EG0rSzUS.mbgHHnL6', '2024-05-29 09:18:31'),
(5, 'selam', '$2y$10$M9MB2oWDrpNk8rJyfSPdPeNxQPxDRhQzhr2ACmSS2puwKACy207DG', '2024-05-29 09:22:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients_info`
--
ALTER TABLE `patients_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appointment_number` (`appointment_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients_info`
--
ALTER TABLE `patients_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
