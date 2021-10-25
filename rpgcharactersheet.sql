-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 09:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpgcharactersheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `char_id` int(10) UNSIGNED NOT NULL,
  `char_name` varchar(50) NOT NULL,
  `char_hp` int(11) NOT NULL,
  `char_mp` int(11) NOT NULL,
  `physical_trait` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `social_trait` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `mental_trait` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `phys_skill_athletics` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `phys_skill_stealth` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `phys_skill_hand2hand` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `social_skill_spy` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `social_skill_speach` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `social_skill_network` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `mental_skill_tech` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `mental_skill_science` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `mental_skill_medicine` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `char_user_id` int(10) UNSIGNED NOT NULL,
  `char_gender_id` int(10) UNSIGNED NOT NULL,
  `char_race_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`char_id`, `char_name`, `char_hp`, `char_mp`, `physical_trait`, `social_trait`, `mental_trait`, `phys_skill_athletics`, `phys_skill_stealth`, `phys_skill_hand2hand`, `social_skill_spy`, `social_skill_speach`, `social_skill_network`, `mental_skill_tech`, `mental_skill_science`, `mental_skill_medicine`, `char_user_id`, `char_gender_id`, `char_race_id`) VALUES
(6, 'Devin', 10, 4, 5, 3, 4, 3, 2, 5, 0, 2, 1, 0, 0, 4, 1, 1, 8),
(7, 'Gronk', 12, 0, 5, 1, 1, 3, 1, 4, 0, 0, 0, 0, 0, 0, 1, 2, 9),
(8, 'TeacherTester', 67, 45, 5, 7, 3, 2, 6, 3, 6, 8, 0, 0, 2, 0, 2, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `char_gender`
--

CREATE TABLE `char_gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `char_gender`
--

INSERT INTO `char_gender` (`id`, `name`) VALUES
(2, 'Female'),
(1, 'Male'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `char_race`
--

CREATE TABLE `char_race` (
  `race_id` int(10) UNSIGNED NOT NULL,
  `race_name` varchar(50) NOT NULL,
  `race_skin_color` varchar(50) NOT NULL,
  `race_hair_color` varchar(50) NOT NULL,
  `race_max_age` int(11) NOT NULL,
  `race_max_height` int(11) NOT NULL,
  `race_description` varchar(800) NOT NULL,
  `race_phys_mod` int(11) UNSIGNED NOT NULL,
  `race_char_mod` int(11) UNSIGNED NOT NULL,
  `race_int_mod` int(11) UNSIGNED NOT NULL,
  `race_char_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `char_race`
--

INSERT INTO `char_race` (`race_id`, `race_name`, `race_skin_color`, `race_hair_color`, `race_max_age`, `race_max_height`, `race_description`, `race_phys_mod`, `race_char_mod`, `race_int_mod`, `race_char_id`) VALUES
(8, 'Human', 'Tan', 'Dark shaved', 110, 7, 'Average Person no modifiers', 0, 0, 0, 0),
(9, 'Orc', 'Green', 'Dark Green', 80, 9, 'Strong Green mean dumb not vary social', 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Ryan Johnson', 'r.johnson5719@student.nu.edu', '5050DogMerlin'),
(2, 'Esmaeil Atashpaz-Gargari', 'Egargari@nu.edu', 'prof');

-- --------------------------------------------------------

--
-- Table structure for table `workarround`
--

CREATE TABLE `workarround` (
  `hold_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`),
  ADD KEY `char_user_id` (`char_user_id`),
  ADD KEY `char_gender_id` (`char_gender_id`),
  ADD KEY `characters_ibfk_3` (`char_race_id`);

--
-- Indexes for table `char_gender`
--
ALTER TABLE `char_gender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `char_race`
--
ALTER TABLE `char_race`
  ADD PRIMARY KEY (`race_id`),
  ADD UNIQUE KEY `race_name` (`race_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `char_gender`
--
ALTER TABLE `char_gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `char_race`
--
ALTER TABLE `char_race`
  MODIFY `race_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`char_user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `characters_ibfk_2` FOREIGN KEY (`char_gender_id`) REFERENCES `char_gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `characters_ibfk_3` FOREIGN KEY (`char_race_id`) REFERENCES `char_race` (`race_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
