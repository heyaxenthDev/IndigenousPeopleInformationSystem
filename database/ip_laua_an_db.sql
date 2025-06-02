-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 04:24 PM
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
-- Database: `ip_laua_an_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_token` varchar(255) NOT NULL,
  `email_verified` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `password_token`, `email_verified`, `created_at`) VALUES
(1, 'Hya Cynth', 'Dojillo', '90909090090', 'hyacynth.mulaveintern@gmail.com', '$2y$10$8mn5LkcU1ssnK80zOpjvGe.fbGh11j7C1JV.VRwhYx7dbF4xzOhKG', '', 0, '2025-05-20 03:30:05'),
(2, 'User', 'Test', '90909090090', 'user_test@gmail.com', '$2y$10$1gffhkz3nRud8uru.QBAQOxia7FE1uQHgZI6UDcYhbYs5ixJz5f6a', '', 0, '2025-05-31 15:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `maiden_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `perm_address` varchar(255) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `indigenous_member` varchar(10) DEFAULT NULL,
  `indigenous_specify` varchar(255) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `pwd_specify` varchar(255) DEFAULT NULL,
  `solo_parent` varchar(10) DEFAULT NULL,
  `solo_specify` varchar(255) DEFAULT NULL,
  `ref_name_1` varchar(100) DEFAULT NULL,
  `ref_address_1` varchar(255) DEFAULT NULL,
  `ref_tel_1` varchar(50) DEFAULT NULL,
  `ref_name_2` varchar(100) DEFAULT NULL,
  `ref_address_2` varchar(255) DEFAULT NULL,
  `ref_tel_2` varchar(50) DEFAULT NULL,
  `ref_name_3` varchar(100) DEFAULT NULL,
  `ref_address_3` varchar(255) DEFAULT NULL,
  `ref_tel_3` varchar(50) DEFAULT NULL,
  `id_picture` varchar(255) DEFAULT NULL,
  `gov_id` varchar(100) DEFAULT NULL,
  `gov_id_no` varchar(100) DEFAULT NULL,
  `gov_id_date_place` varchar(100) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `date_accomplished` date DEFAULT NULL,
  `right_thumbmark` varchar(100) DEFAULT NULL,
  `affiant_date` varchar(100) DEFAULT NULL,
  `administering_oath` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `lastname`, `firstname`, `middlename`, `maiden_name`, `dob`, `perm_address`, `zipCode`, `pob`, `street`, `barangay`, `municipality`, `province`, `indigenous_member`, `indigenous_specify`, `pwd`, `pwd_specify`, `solo_parent`, `solo_specify`, `ref_name_1`, `ref_address_1`, `ref_tel_1`, `ref_name_2`, `ref_address_2`, `ref_tel_2`, `ref_name_3`, `ref_address_3`, `ref_tel_3`, `id_picture`, `gov_id`, `gov_id_no`, `gov_id_date_place`, `signature`, `date_accomplished`, `right_thumbmark`, `affiant_date`, `administering_oath`, `created_at`) VALUES
(1, 'Dela Cruz', 'Juan Jose', 'Reyes', '', '1995-12-12', 'Poblacion', '5709', 'Poblacion', 'jashdkjahd', 'Poblacion', 'Lau-an', 'Antique', 'Yes', 'N/A', 'No', '', 'No', '', 'amndmna', 'msndma', '09123456789', 'asdnjasd', 'kdalksdlkajsd', '09123456789', 'skdjakldj', 'sjdhjkashd', '09123456789', '683d7bd846dd0_profile_674162f2abf415.77256848.png', 'asdasd', 'sdads', 'asda', 'Dela Cruz, Juan Jose R.', '2025-06-02', '', 'adaada', 'asdasdasd', '2025-06-02 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `registered_ip`
--

CREATE TABLE `registered_ip` (
  `id` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `contact_no` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_ip`
--

INSERT INTO `registered_ip` (`id`, `last_name`, `first_name`, `middle_name`, `suffix`, `gender`, `age`, `status`, `barangay`, `contact_no`, `email`, `created_at`) VALUES
(1, 'Dela Cruz', 'Juan Jose', 'Reyes', 'N/A', 'Male', 30, 'Married', 'Barangay', '09123456789', 'juandc@gmail.com', '2025-05-21 06:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `maiden_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `place_of_birth` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_number` varchar(50) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `module_number` varchar(50) DEFAULT NULL,
  `school_type` varchar(20) DEFAULT NULL,
  `year_level` varchar(50) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `tribal_membership` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `father_status` varchar(50) DEFAULT NULL,
  `mother_status` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `total_gross_income` decimal(15,2) DEFAULT NULL,
  `siblings` int(11) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `other_assistance` varchar(10) DEFAULT NULL,
  `assistance_specify` varchar(255) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `date_accomplished` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `last_name`, `first_name`, `middle_name`, `maiden_name`, `date_of_birth`, `permanent_address`, `zip_code`, `place_of_birth`, `street`, `barangay`, `municipality`, `province`, `school_name`, `school_number`, `school_address`, `sex`, `citizenship`, `module_number`, `school_type`, `year_level`, `course`, `tribal_membership`, `email`, `disability`, `father_status`, `mother_status`, `address`, `total_gross_income`, `siblings`, `occupation`, `other_assistance`, `assistance_specify`, `signature`, `date_accomplished`, `created_at`) VALUES
(1, 'Dela Cruz', 'Juan Jose', 'Reyes', 'N/A', '1995-01-01', 'sadsad', '5705', 'khsjd', 'jdhajsd', 'asdsa', 'Laua-an', 'Antique', 'UA', '12314', 'Tibiao, Antique', 'Male', 'Filipino', '09123456789', 'Public', '4', 'IS', '65465', 'juandc@gmail.com', 'N/A', 'sadasd', 'asdas', 'adssa', 15000.00, 2, 'asdsad', 'No', '', 'asdasdsa', '2025-05-21', '2025-05-21 10:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'user',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_id`, `email`, `password`, `role`, `date_created`) VALUES
(1, 1, 'juandc@gmail.com', '$2y$10$8xCgaSx6fJF2H5M.8EilW.D58Tpy8uPLCczfl5Z0cqAopUxUnj/q2', 'user', '2025-05-21 06:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_ip`
--
ALTER TABLE `registered_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `ip_id` (`ip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registered_ip`
--
ALTER TABLE `registered_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ip_id`) REFERENCES `registered_ip` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
