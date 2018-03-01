-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 06:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marriageme`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `personal_name` varchar(255) NOT NULL,
  `personal_gender` varchar(55) NOT NULL,
  `personal_age` int(11) NOT NULL,
  `personal_height` varchar(55) NOT NULL,
  `personal_religion` varchar(255) NOT NULL,
  `personal_caste` varchar(255) NOT NULL,
  `personal_marital` varchar(255) NOT NULL,
  `personal_tounge` varchar(255) NOT NULL,
  `personal_occupation` varchar(255) NOT NULL,
  `personal_ann_income` varchar(55) NOT NULL,
  `personal_country` varchar(255) NOT NULL,
  `personal_city` varchar(255) NOT NULL,
  `personal_about` text NOT NULL,
  `personal_image` varchar(255) NOT NULL,
  `edu_HE` varchar(255) NOT NULL,
  `edu_PG` varchar(255) NOT NULL,
  `edu_PG_coll` varchar(255) NOT NULL,
  `edu_UG_deg` varchar(255) NOT NULL,
  `edu_School` varchar(255) NOT NULL,
  `family_mother` varchar(255) NOT NULL,
  `family_father` varchar(255) NOT NULL,
  `family_sisters` int(11) NOT NULL,
  `family_brothers` int(11) NOT NULL,
  `family_income` varchar(55) NOT NULL,
  `family_stay` varchar(55) NOT NULL,
  `family_value` varchar(255) NOT NULL,
  `lifestyle_appearance` varchar(255) NOT NULL,
  `lifestyle_assets` varchar(255) NOT NULL,
  `lifestyle_habits` varchar(255) NOT NULL,
  `lifestyle_language` varchar(255) NOT NULL,
  `lifestyle_bloodgroup` varchar(55) NOT NULL,
  `lifestyle_stay` varchar(255) NOT NULL,
  `partner_age` int(11) NOT NULL,
  `partner_height` varchar(55) NOT NULL,
  `partner_marital` varchar(255) NOT NULL,
  `partner_religion` varchar(255) NOT NULL,
  `partner_caste` varchar(255) NOT NULL,
  `partner_edu` varchar(255) NOT NULL,
  `partner_occupation` varchar(255) NOT NULL,
  `partner_income` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
