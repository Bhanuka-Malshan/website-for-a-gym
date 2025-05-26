-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 06:16 AM
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
-- Database: `underground_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `feedbackID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`, `feedbackID`) VALUES
('Kavi', 'ka@gmail.com', '0', 1),
('jay', 'Jay@gmail.com', 'this is vwrry good\r\n', 2),
('shehan', 'she@gmail.com', 'We Are Passionate About Creating A Fitness Community That Is Inclusive, Encouraging And Empowering For Everyone.\n\nWe Are Dedicated To Providing A Space That You Feel Welcomed At Each And Every Time You Visit, And We Pass No Judgement On Whether Thatâ€™s', 3),
('Sharon', 'Sh@gmail.com', 'We Are Passionate About Creating A Fitness Community That Is Inclusive, Encouraging And Empowering For Everyone.\n\nWe Are Dedicated To Providing A Space That You Feel Welcomed At Each And Every Time You Visit, And We Pass No Judgement On Whether Thatâ€™s Once A Fortnight Or Five Days Week. Weâ€™re Just Here To Help You Reach Your Goals!\n\nWe Believe The Latest Equipment, A Continually Refreshed Offering With Accredited And Passionate Trainers And Coaches Help To Support And Encourage You To Reach Your Health And Fitness Goals.\n\nStep Inside A Underground Fitness Gym Today To See And Feel The Difference For Yourself.\nWe Are Passionate About Creating A Fitness Community That Is Inclusive, Encouraging And Empowering For Everyone.\n\nWe Are Dedicated To Providing A Space That You Feel Welcomed At Each And Every Time You Visit, And We Pass No Judgement On Whether Thatâ€™s Once A Fortnight Or Five Days Week. Weâ€™re Just Here To Help You Reach Your Goals!\n\nWe Believe The Latest Equipment, A Continually Refreshed Offering With Accredited And Passionate Trainers And Coaches Help To Support And Encourage You To Reach Your Health And Fitness Goals.\n\nStep Inside A Underground Fitness Gym Today To See And Feel The Difference For Yourself.\nWe Are Passionate About Creating A Fitness Community That Is Inclusive, Encouraging And Empowering For Everyone.\n\nWe Are Dedicated To Providing A Space That You Feel Welcomed At Each And Every Time You Visit, And We Pass No Judgement On Whether Thatâ€™s Once A Fortnight Or Five Days Week. Weâ€™re Just Here To Help You Reach Your Goals!\n\nWe Believe The Latest Equipment, A Continually Refreshed Offering With Accredited And Passionate Trainers And Coaches Help To Support And Encourage You To Reach Your Health And Fitness Goals.\n\nStep Inside A Underground Fitness Gym Today To See And Feel The Difference For Yourself.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` char(15) NOT NULL,
  `client_ID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`name`, `email`, `contact_no`, `client_ID`) VALUES
('Kavishka', 'ka@gmail.com', '766239520', 21);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNo` int(12) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `AgeRange` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `EmailAdd` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SMS` enum('Yes','No','','') NOT NULL,
  `EmailNotification` enum('Yes','No','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`FirstName`, `LastName`, `Address`, `ContactNo`, `Occupation`, `Gender`, `AgeRange`, `DOB`, `NIC`, `EmailAdd`, `Password`, `SMS`, `EmailNotification`) VALUES
('Kavshalya', 'Milakshi', 'No. 785, Wattala, Sri Lanka', 741254785, 'Student', 'female', 'Less than 20', '2023-07-04', '123456789123', 'ma@gmail.com', '$2y$10$cvjl73Tt.qYhgBKDn087Mu2BlV.JeDXEyOHI4RdgEDIR6FVocUh1.', 'Yes', 'No'),
('Jayasinghe', 'Kasun', 'No. 85/A, kandana, Sri Lanka', 766235852, 'Marketing Officer', 'male', '20 - 30', '2016-07-20', '200024875965', 'jay@hotmail.com', '$2y$10$C8b/ntml3zPufIsZFmXKUOYnvscxok.k1YC.7Xfpsl3rewvrfX76e', 'No', 'Yes'),
('bhanuka', 'Malshan', 'Sirisewana,kandakepulpatha,baduluoya,badulla', 716348237, 'Student', 'male', '20 - 30', '2023-07-06', '891110548V', 'kavi20@gmail.com', '$2y$10$mEXJ/BIkfUFak9gyCXhCKOPgFkSSCwgtXtWaC0ixzCrxigTXI0EwK', 'No', 'Yes'),
('Gihan', 'Pramod', '602/4,belawana,Avissawella', 769988353, 'lowyer', 'male', '30 - 40', '1999-02-16', '990473625V', 'gihanpramod971@gmail.com', '$2y$10$NmTE0SI0MSh199ZkL7mZVOwMgmngzxeeZzARfRBeLxzcj/toxg09.', 'Yes', 'Yes'),
('Kavishka', 'Jayasinghe', 'No. 24, Malabe, Sri Lanka', 784512963, 'Student', 'male', '20 - 30', '2023-07-10', '991110548V', 'kavi@gmail.com', '$2y$10$kkyYWsLq0OJsJ4Mz7OTbWeAxUYtStemairDCWdMt7O5Rn5EzrgFIC', 'Yes', 'Yes'),
('Bhanuka', 'Malshan', 'No. 785, Badulla, Sri Lanka', 741254785, 'Student', 'male', '20 - 30', '2023-07-05', '99944558V', 'ba@gmail.com', '$2y$10$2359zKuBrdiqcQP9RlxtWOn8a3AZPANnIeHbkzzJ7Q2guWnv4IlVq', 'Yes', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `client_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
