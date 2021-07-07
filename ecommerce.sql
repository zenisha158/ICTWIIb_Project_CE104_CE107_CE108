-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 07:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_id`, `password`) VALUES
(1, 'devansh', 'abc@gmail.com', 'devansh123456'),
(2, 'jayshah', 'def@gmail.com', 'jayshah1234'),
(3, 'zenisha', 'zenish@gmail.com', 'zenisha1234'),
(4, 'harrybhai', 'harry@gmail.com', 'harry1234'),
(5, 'barakobama', 'barakobama@gmail.com', 'barakobama1234'),
(6, 'golushah', 'shahgolu566@gmail.com', 'golushah1234'),
(7, 'devanshshah', 'shahgolu566@gmail.com', 'devanshshah12'),
(8, 'jackson', 'shahgolu566@gmail.com', 'jackson1234'),
(9, 'elonmusk', 'shahgolu566@gmail.com', 'elonmusk1234'),
(10, 'jeffbezoz', 'shahgolu566@gmail.com', 'jeffbezoz1234'),
(11, 'seeta', 'shahgolu566@gmail.com', 'seeta1234'),
(12, 'manav', 'manavshah9890@gmail.com', 'manav1234'),
(13, 'devpatel', 'manavshah9890@gmail.com', 'devpatel1234'),
(14, 'narendra', 'manavshah9890@gmail.com', 'narendra1234'),
(15, 'sachin', 'manavshah9890@gmail.com', 'sachin1234'),
(16, 'virat', 'manavshah9890@gmail.com', 'virat1234'),
(17, 'dhoni', 'manavshah9890@gmail.com', 'dhoni1234');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
