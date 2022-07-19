-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 07:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalportfoliosl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `surname`, `phone`, `email`, `address`) VALUES
(1, 'Orges', 'Jasharaj', '+383 49 381 508', 'jasharajorges@gmail.com', 'Suhareke, Kosovo');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pdescription1` varchar(500) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `aid`, `pname`, `pdescription`, `pdescription1`, `pimage`) VALUES
(1, 1, 'Traveling Website', 'A website for an traveling agency', 'https://github.com/OrgesJasharaj/TravelingProject', 'images/travel.png'),
(2, 1, 'Architecture', 'A website for architecture', 'https://github.com/OrgesJasharaj/archwebsite', 'images/arch.png'),
(3, 1, 'E-commerce Website', 'An e-commerce website', 'https://github.com/OrgesJasharaj/ecomm', 'images/ecom1.png'),
(4, 1, 'E-commerce second website', 'An e-commerce website', 'https://github.com/OrgesJasharaj/ecomm2', 'images/ecom2.png'),
(5, 1, 'Movie Night Website', 'A website about movies', 'https://github.com/OrgesJasharaj/MovieNight', 'images/movie.png'),
(6, 1, 'Restaurant Website', 'A website for a restaurant', 'https://github.com/OrgesJasharaj/websitedemo', 'images/food.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `aid` (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
