-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 04:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Texts` varchar(255) NOT NULL,
  `Image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Texts`, `Image`) VALUES
(152, 'Elcid', 'Hello I am elcid', 'Elcid.jpg'),
(154, 'Elcid', 'This are my works\r\n', 'Miranda_II_Elcid_BSCS3A_Exercise2.jpg,Miranda_II_Hector_Elcid_BSCS3A_Exercise4.jpg,Miranda_II_HectorElcid_BSCS3A_Exercise_3.jpg,Miranda_II_HectorElcid_Exercise_3(1).jpg'),
(156, 'Elcid', 'this are my anime pictures', 'animes-like-kakegurui.jpg,images.jpg'),
(157, 'Elcid', 'Hello guys', ''),
(158, 'Elcid', 'Heeello', ''),
(161, 'algem', 'Hello Guys I am Algem', ''),
(163, 'Algem', 'This is my pets', 'd41586-020-01430-5_17977552.jpg,dog-puppy-on-garden-royalty-free-image-1586966191.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
