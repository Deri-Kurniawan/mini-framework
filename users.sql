-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 02:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(11, 'Kyra Haley Sr.'),
(12, 'Rylan Baumbach'),
(15, 'Nina Rosenbaum'),
(16, 'Michaela Greenfelder Sr.'),
(17, 'Rebekah Brekke'),
(18, 'Andreane Aufderhar'),
(19, 'Prof. Robyn Larson PhD'),
(20, 'Ms. Karianne Steuber Jr.'),
(21, 'Anne Koelpin'),
(22, 'Magnolia Turner'),
(23, 'Idell Tromp'),
(24, 'Kenyon Flatley'),
(25, 'Ms. Eloisa Schoen V'),
(26, 'Bertrand Lehner'),
(27, 'Lucius Senger'),
(28, 'Tomasa Keebler II'),
(29, 'Eryn Wiza'),
(30, 'Freddy Hilll'),
(31, 'Susan Brakus'),
(32, 'Imogene Fahey'),
(33, 'Gilda Cummings'),
(34, 'Tamara Stoltenberg'),
(35, 'Jaylen Rosenbaum'),
(36, 'Ms. Lolita Zieme'),
(37, 'Easter Glover'),
(38, 'Daniella Yost'),
(39, 'Lula Mertz'),
(40, 'Mckayla Feest'),
(41, 'Mr. Royal Dicki DDS'),
(42, 'Prof. Fletcher Jakubowski DDS'),
(43, 'Corrine Koepp'),
(44, 'Ardella Homenick'),
(45, 'Prof. Maureen Buckridge Sr.'),
(46, 'Juvenal Lemke'),
(47, 'Shanon Kozey III'),
(48, 'Jennings Walker'),
(49, 'Arlo Wintheiser'),
(50, 'Miss Herminia Casper'),
(51, 'Mr. Barney Quigley'),
(52, 'Ms. Amiya Spinka'),
(53, 'Aliyah Leuschke'),
(54, 'Constantin Littel'),
(55, 'Boris Stiedemann'),
(56, 'Marcellus Lind'),
(57, 'Brody O\'Kon'),
(58, 'Rosa Mraz'),
(59, 'Mrs. Melyssa Lynch II'),
(60, 'Hardy Rowe'),
(61, 'Zoey Abshire'),
(62, 'Kara Gleason'),
(63, 'Amber Lueilwitz'),
(64, 'Roselyn Grant'),
(65, 'Mr. Cleve Harber MD'),
(66, 'Dr. Derick Greenholt V'),
(67, 'Damon Mohr'),
(68, 'Monty Gibson'),
(69, 'Shirley Strosin'),
(70, 'Mr. Ralph Bins'),
(71, 'Caleigh Hegmann Sr.'),
(72, 'Emmanuelle Bradtke'),
(73, 'Johnathan Rempel'),
(74, 'Alverta Kub'),
(75, 'Aurelie Stokes'),
(76, 'Prof. Omer Larkin Sr.'),
(77, 'Dorris Robel III'),
(78, 'Valentina Schimmel'),
(79, 'Janiya Bruen'),
(80, 'Prof. Turner Kling DVM'),
(81, 'Burley Klein'),
(82, 'Jennings Kulas V'),
(83, 'Karolann Leffler'),
(84, 'Mr. Adan Kreiger V'),
(85, 'Ferne Davis'),
(86, 'Janis Conroy'),
(87, 'Dr. Juwan Sanford'),
(88, 'Prof. Nathanial Torphy DVM'),
(89, 'Dr. Paxton Morar V'),
(90, 'Vida Ritchie MD'),
(91, 'Millie Dietrich'),
(92, 'Eloise Fritsch'),
(93, 'Berry Waelchi'),
(94, 'Austyn Bins II'),
(95, 'Theo Roberts'),
(96, 'Jed Reinger'),
(97, 'Murray Rohan'),
(98, 'Santino Fadel'),
(99, 'Elvie Gibson I'),
(100, 'Jennings Macejkovic'),
(101, 'Deri Kurniawan'),
(103, 'Imasnurani'),
(104, 'Sudirman'),
(105, 'john lenon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
