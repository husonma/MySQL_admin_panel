-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newlds`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` char(255) NOT NULL,
  `author_age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_age`) VALUES
(2, 'Franz Kafka', 26);

-- --------------------------------------------------------

--
-- Table structure for table `author_writes`
--

CREATE TABLE `author_writes` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` char(255) NOT NULL,
  `genre` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `genre`) VALUES
(2, 'book1', 'distopia');

-- --------------------------------------------------------

--
-- Table structure for table `book_barrow`
--

CREATE TABLE `book_barrow` (
  `book_id` int(11) NOT NULL,
  `member_uid` char(255) NOT NULL,
  `barrow_id` int(11) NOT NULL,
  `barrow_bdate` date DEFAULT NULL,
  `barrow_rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarian_id` int(11) NOT NULL,
  `librarian_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `librarian_name`) VALUES
(2, 'Ali Veli'),
(5, 'Yusuf');

-- --------------------------------------------------------

--
-- Table structure for table `member_register`
--

CREATE TABLE `member_register` (
  `member_uid` int(255) NOT NULL,
  `member_type` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `librarian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_register`
--

INSERT INTO `member_register` (`member_uid`, `member_type`, `member_name`, `librarian_id`) VALUES
(1, 'student', 'Hüseyin ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `author_writes`
--
ALTER TABLE `author_writes`
  ADD PRIMARY KEY (`book_id`,`author_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_barrow`
--
ALTER TABLE `book_barrow`
  ADD PRIMARY KEY (`barrow_id`),
  ADD KEY `member_uid` (`member_uid`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarian_id`);

--
-- Indexes for table `member_register`
--
ALTER TABLE `member_register`
  ADD PRIMARY KEY (`member_uid`),
  ADD KEY `librarian_id` (`librarian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_barrow`
--
ALTER TABLE `book_barrow`
  MODIFY `barrow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `librarian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_register`
--
ALTER TABLE `member_register`
  MODIFY `member_uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_writes`
--
ALTER TABLE `author_writes`
  ADD CONSTRAINT `author_writes_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `author_writes_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `member_register`
--
ALTER TABLE `member_register`
  ADD CONSTRAINT `member_register_ibfk_1` FOREIGN KEY (`librarian_id`) REFERENCES `librarian` (`librarian_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
