-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 04:53 AM
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
-- Database: `countries`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`, `country_id`) VALUES
(6, 'Atlanta', 1),
(11, 'Lome', 16),
(12, 'Sao_Paulo', 11),
(13, 'Rio_de_Janeiro', 11),
(14, 'Brasilia', 11),
(15, 'Buenos_Aires', 19),
(16, 'Cordoba', 19),
(17, 'Rosario', 19),
(18, 'Paris', 4),
(19, 'Lyon', 4),
(20, 'Marseille', 4),
(21, 'London', 12),
(22, 'Birmingham', 12),
(23, 'Manchester', 12),
(24, 'Athens', 5),
(25, 'Thessaloniki', 5),
(26, 'Patras', 5),
(27, 'Moscow', 6),
(28, 'Saint_Petersburg', 6),
(29, 'Novosibirsk', 6),
(30, 'Lagos', 13),
(31, 'Abuja', 13),
(32, 'Kano', 13),
(33, 'Pretoria', 18),
(34, 'Johnannesburg', 18),
(35, 'Cape_Town', 18),
(36, 'Toronto', 2),
(37, 'Montreal', 2),
(38, 'Vancouver', 2),
(39, 'New_York_City', 3),
(40, 'Los_Angeles', 3),
(41, 'Chicago', 3),
(42, 'Mexico_City', 17),
(43, 'Guadalajara', 17),
(48, 'Monterrey', 17),
(50, 'Cairo', 7),
(51, 'Alexandria', 7),
(52, 'Giza', 7),
(53, 'Tokyo', 8),
(54, 'Yokohama', 8),
(55, 'Osaka', 8),
(56, 'Beijing', 9),
(57, 'Shanghai', 9),
(59, 'Delhi', 14),
(60, 'Mumbai', 14),
(61, 'Kolkata', 14),
(62, 'Sydney', 10),
(63, 'Melbourne', 10),
(64, 'Brisbane', 10),
(65, 'Auckland', 15),
(66, 'Wellington', 15),
(67, 'Christchurch', 15);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`) VALUES
(1, 'United States'),
(2, 'Canada '),
(3, 'United States'),
(4, 'France'),
(5, 'Greece'),
(6, 'Russia'),
(7, 'Egypt'),
(8, 'Japan'),
(9, 'China'),
(10, 'Australia '),
(11, 'Brazil'),
(12, 'England'),
(13, 'Nigeria'),
(14, 'India'),
(15, 'New Zealand'),
(16, 'Togo'),
(17, 'Mexico'),
(18, 'South Africa'),
(19, 'Argentina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
