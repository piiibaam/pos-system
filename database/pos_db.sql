-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2026 at 05:11 PM
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
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Juan Dela Cruz', 'juan@example.com', '0912-345-6789', '2026-09-30 23:09:18'),
(2, 'Maria Santos', 'maria@example.com', '0917-123-4567', '2026-09-30 23:09:18'),
(3, 'Pedro Reyes', 'pedro@example.com', '0920-456-7890', '2026-09-30 23:09:18'),
(4, 'Ana Garcia', 'ana@example.com', '0935-678-9012', '2026-09-30 23:09:18'),
(5, 'Mark Cruz', 'mark@example.com', '0945-789-0123', '2026-09-30 23:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `avatar`, `created_at`) VALUES
(1, 'juan_dela_cruz', '$2y$10$oHdbBwtTqAUlubAlnsFHSOq/xipBPgK0aGT3dq.qDiixOPgojc8a.', 'name test', '1791048925_ba2358beaf9632bed7e0.jpg', '2026-09-30 23:10:01'),
(2, 'maria_santos', '$2y$10$oHdbBwtTqAUlubAlnsFHSOq/xipBPgK0aGT3dq.qDiixOPgojc8a.', 'Maria Santos', NULL, '2026-09-30 23:10:01'),
(3, 'pedro_reyes', '$2y$10$oHdbBwtTqAUlubAlnsFHSOq/xipBPgK0aGT3dq.qDiixOPgojc8a.', 'Pedro Reyes', NULL, '2026-09-30 23:10:01'),
(4, 'ana_garcia', '$2y$10$oHdbBwtTqAUlubAlnsFHSOq/xipBPgK0aGT3dq.qDiixOPgojc8a.', 'Ana Garcia', NULL, '2026-09-30 23:10:01'),
(5, 'mark_cruz', '$2y$10$oHdbBwtTqAUlubAlnsFHSOq/xipBPgK0aGT3dq.qDiixOPgojc8a.', 'Mark Cruz', NULL, '2026-09-30 23:10:01'),
(7, 'test_user', '$2y$10$jHOuRJ6z3GjqyctKlafze.V6gJq4alrMHsY367diJiyp6Cq9Z9U6e', 'Test User', NULL, '2026-10-08 15:09:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
