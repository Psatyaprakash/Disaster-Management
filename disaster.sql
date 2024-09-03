-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 08:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `dob` int(11) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `pass` tinytext DEFAULT NULL,
  `organisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `dob`, `gender`, `phone`, `address`, `image`, `pass`, `organisation`) VALUES
(1, 'Prakash', 'prakash@gmail.com', 2023, 'male', 2147483647, 'silicon valley', '1694018066Little_Box_Guy_Gift-49b956e9-6743-36fe-a1b2-1c25f74f4487.jpg', 'prakash', 0),
(2, 'Subho', 'subho@gmail.com', 2023, 'male', 2147483647, 'silicon valley', '1694018133orsrc36182.jpg', 'subho', 0),
(3, 'Sonalika', 'sonalika@gmail.com', 2023, 'male', 2147483647, 'silicon valley', '1694018230orsrc23839.jpg', 'sonalika', 0);

-- --------------------------------------------------------

--
-- Table structure for table `collaborators`
--

CREATE TABLE `collaborators` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `organisation` enum('Private Companies','Government Bodies','International Committees','Indivisual') NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `comp_name` varchar(10) NOT NULL,
  `comp_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collaborators`
--

INSERT INTO `collaborators` (`id`, `name`, `gender`, `dob`, `email`, `pass`, `phone`, `organisation`, `address`, `image`, `comp_name`, `comp_link`) VALUES
(1, 'Sandy', 'male', '2023-09-01', 'sandy@gmail.com', 'sandy', 2147483647, 'Indivisual', '1234valley', '1694017030Lion_king-d9c1239f-f332-464b-bbfe-476d6f2f955a.jpg', '', ''),
(2, 'Sundar', 'male', '2023-09-01', 'sundar@gmail.com', 'sundar', 1111111111, 'International Committees', '1234valley', '1694017756orsrc25907.jpg', '', ''),
(3, 'Tony', 'male', '2023-09-01', 'tony@stark.industries', 'tony', 2147483647, 'Private Companies', '1234valley', '1694017880orsrc31734.jpg', '', ''),
(4, 'O. Aggarwal', 'male', '2023-07-05', 'aggarwal@gmail.com', 'aggarwal', 1137, 'Indivisual', '1234valley', '1694023820Lamborghini_Huracan-62c2b455-d748-3bf9-9f32-32384c0ab134.jpg', '-name', '-link'),
(5, 'chinmay', 'male', '2023-08-27', 'cbhatta@gmail.com', 'cbhatta', 1142, 'Private Companies', '1234valley', '1694024007Green_Mist-2b20cc28-aa5a-32fc-9170-e1ba12cac092.jpg', 'sistum', 'www.sistum.com'),
(6, 'Aman', 'male', '2023-08-28', 'aman@boat.com', 'aman', 0, 'Private Companies', '1234valley', '1694024635orsrc12849.jpg', 'Boat', 'www.boat.com'),
(7, 'Virat', 'male', '2023-08-01', 'virat@global.com', 'virat', 2147483647, 'Government Bodies', '1234valley', '1694024716orsrc12849.jpg', 'Nike', 'www.nike.com'),
(8, 'swati', 'female', '2023-09-07', 'as@gmail.com', 'as', 1210, 'Private Companies', 'silicon valley', '1694065533Green_Mist-2b20cc28-aa5a-32fc-9170-e1ba12cac092.jpg', 'silicon', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(10) DEFAULT NULL,
  `disease_affected` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `disease_affected`) VALUES
(1, 'mental_iss', 100),
(2, 'd2', 50),
(3, 'd3', 93);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(10) DEFAULT NULL,
  `d_email` text DEFAULT NULL,
  `d_dob` int(11) DEFAULT NULL,
  `d_gender` enum('male','female') DEFAULT NULL,
  `d_phone` int(11) DEFAULT NULL,
  `d_address` text DEFAULT NULL,
  `d_image` text DEFAULT NULL,
  `d_password` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(10) DEFAULT NULL,
  `p_email` text DEFAULT NULL,
  `p_dob` int(11) DEFAULT NULL,
  `p_gender` enum('male','female') DEFAULT NULL,
  `p_phone` int(11) DEFAULT NULL,
  `p_address` text DEFAULT NULL,
  `p_image` text DEFAULT NULL,
  `p_password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_email`, `p_dob`, `p_gender`, `p_phone`, `p_address`, `p_image`, `p_password`) VALUES
(1, 'pat1', 'pat1@gmail.com', 2023, 'male', 212, 'jokers', '1694119844', 'pat1');

-- --------------------------------------------------------

--
-- Table structure for table `patient_diseases`
--

CREATE TABLE `patient_diseases` (
  `sl_no` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `disease_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_diseases`
--

INSERT INTO `patient_diseases` (`sl_no`, `p_id`, `disease_id`) VALUES
(NULL, 1, 1),
(NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE `update` (
  `dis_name` varchar(10) NOT NULL,
  `dis_place` varchar(20) NOT NULL,
  `dis_link` text NOT NULL,
  `news` text NOT NULL,
  `news_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `update`
--

INSERT INTO `update` (`dis_name`, `dis_place`, `dis_link`, `news`, `news_link`) VALUES
('Fani', 'Odisha', 'fani.com', '', ''),
('Cyclone', 'Odisha', 'cyclone.com', '', ''),
('flood', 'Odisha', 'flood.com', '', ''),
('slood', 'Odisha', 'ascfa.com', '', ''),
('', '', '', '', ''),
('cyline', 'maha', 'ecf', '', ''),
('', '', '', 'According to national climate office there is a high chance of cylconic storm in Bengal coast', '1.com'),
('', '', '', 'State govt of Maharastra have confirmed to supply foods to flooded regions ', '2'),
('', '', '', 'We are here trying to help the peoples in flooded regions', '3'),
('', '', '', 'Modern technologies are being developed by different groups of engineers accross the country', '4');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `dob` int(11) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `pass` tinytext DEFAULT NULL,
  `organisation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `email`, `dob`, `gender`, `phone`, `address`, `image`, `pass`, `organisation`) VALUES
(1, 'Subhojeet', 'subho@gmail.com', 2023, 'male', 2147483647, '1234valley', '1694016515Cyclone.webp', 'subho', 0),
(2, 'Subhojeet', 'subho@gmail.com', 2023, 'male', 2147483647, '1234valley', '1694016708Cyclone.webp', '', 0),
(3, 'Swati', 'swati@gmail.com', 2023, 'female', 2147483647, '1234valley', '1694016784', 'swati', 0),
(4, 'prakash', 'prakash@gmail.com', 2023, 'male', 2147483647, '1234valley', '1694016831Cyclone.webp', 'prakash', 0),
(5, 'Sonalika', '', 2023, 'male', 0, '', '1694018154', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_id` (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
