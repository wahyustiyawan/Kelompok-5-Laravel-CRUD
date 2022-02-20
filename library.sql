-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 06:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `idbuku` varchar(50) NOT NULL,
  `NamaBuku` varchar(50) NOT NULL,
  `NamaPengarang` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`idbuku`, `NamaBuku`, `NamaPengarang`, `Kategori`, `qty`, `Image`) VALUES
('IDN001', 'Jatuh dan Cinta', 'Boy Chandra 1', 'Inspiratif', 13, 'cover1.jpg'),
('IDN002', 'Seperti Hujan Deras', 'Boy Chandra', 'Novel', 13, 'cover2.jpg'),
('IDN003', 'Sebuah Usaha Melupakan', 'Boy Chandra', 'Saintek', 6, 'cover3.jpg'),
('IDN004', 'Senja Hujan Cerita', 'Boy Chandra', 'Novel', 10, 'cover4.jpg'),
('IDN007', 'Belajar Goblok', 'Dodi Mawardi', 'Inspiratif', 6, 'IDN007'),
('IDN008', 'The Hobbit', 'J.R.R Tolkien', 'Fiksi', 5, 'IDN008'),
('IDN009', 'Daun Yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 'Romantis', 2, 'IDN009'),
('IDN010', 'Trauma', 'Boy Chandra', 'Fiksi', 1, 'IDN010');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
