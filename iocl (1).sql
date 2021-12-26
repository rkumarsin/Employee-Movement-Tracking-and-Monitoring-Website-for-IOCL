-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 20, 2021 at 01:40 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iocl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `password`) VALUES
(1, 'bhagya_123', 'ioclpw1234'),
(2, 'mrinmoy_123', 'ioclpw1234'),
(3, 'debo_123', 'ioclpw1234'),
(4, 'rohit_123', 'ioclpw1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee_record`
--

DROP TABLE IF EXISTS `employee_record`;
CREATE TABLE IF NOT EXISTS `employee_record` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1757 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee_record`
--

INSERT INTO `employee_record` (`id`, `name`, `password`, `dept`, `designation`) VALUES
(1750, 'Ram Verma', 'ram456', 'health-sector', 'manager'),
(1751, 'Rohit Mishra', 'abcdef', 'refinery', 'officer'),
(1752, 'Bini Medhi', 'abcdef', 'health-sector', 'manager'),
(1753, 'Pori Borah', 'abcdef', 'health-sector', 'officer'),
(1754, 'Reeta Saikia', 'reeta987', 'management', 'officer'),
(1755, 'Karan Sharma', 'abcdef', 'health-sector', 'officer'),
(1756, 'Veer Kumar', 'abcdef', 'refinery', 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `timestamp1` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `block` varchar(10) NOT NULL,
  `office_room` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `emp_id`, `date1`, `timestamp1`, `type`, `block`, `office_room`) VALUES
(1, 1750, '2021/08/12', '2021-08-12 07:39:54', 'ENTRY', '1st Block', 'Room No 2'),
(2, 1750, '2021/08/12', '2021-08-12 08:39:54', 'EXIT', '1st Block', 'Room No 2'),
(3, 1750, '2021/08/12', '2021-08-12 18:56:55', 'ENTRY', '2nd Block', 'Room No 1'),
(4, 1750, '2021/08/12', '2021-08-12 18:59:18', 'EXIT', '2nd Block', 'Room No 1'),
(5, 1750, '2021/08/12', '2021-08-12 18:59:51', 'ENTRY', '1st Block', 'Room No 1'),
(6, 1750, '2021/08/12', '2021-08-12 19:01:24', 'EXIT', '1st Block', 'Room No 1'),
(7, 1750, '2021/08/12', '2021-08-12 19:03:59', 'ENTRY', '1st Block', 'Room No 1'),
(8, 1750, '2021/08/12', '2021-08-12 19:04:45', 'EXIT', '1st Block', 'Room No 1'),
(9, 1751, '2021/08/12', '2021-08-12 19:06:57', 'ENTRY', '2nd Block', 'Room No 3'),
(10, 1751, '2021/08/12', '2021-08-12 19:07:09', 'EXIT', '2nd Block', 'Room No 3'),
(11, 1751, '2021/08/12', '2021-08-12 19:09:59', 'ENTRY', '3rd Block', 'Room No 2'),
(12, 1751, '2021/08/12', '2021-08-12 19:10:17', 'EXIT', '3rd Block', 'Room No 2'),
(13, 1750, '2021/08/13', '2021-08-13 10:00:47', 'ENTRY', '1st Block', 'Room No 1'),
(14, 1750, '2021/08/13', '2021-08-13 14:04:00', 'EXIT', '1st Block', 'Room No 1'),
(73, 1751, '2021/08/20', '2021-08-20 10:40:28', 'ENTRY', '2nd Block', 'Room No 3'),
(72, 1751, '2021/08/19', '2021-08-19 18:34:57', 'EXIT', '2nd Block', 'Room No 3'),
(17, 1750, '2021/08/13', '2021-08-13 15:08:13', 'ENTRY', '1st Block', 'Room No 1'),
(18, 1751, '2021/08/13', '2021-08-13 15:10:41', 'ENTRY', '1st Block', 'Room No 2'),
(19, 1751, '2021/08/13', '2021-08-13 15:13:31', 'EXIT', '1st Block', 'Room No 2'),
(20, 1750, '2021/08/13', '2021-08-13 17:41:51', 'EXIT', '1st Block', 'Room No 1'),
(69, 1751, '2021/08/19', '2021-08-19 10:34:10', 'ENTRY', '2nd Block', 'Room No 3'),
(70, 1751, '2021/08/19', '2021-08-19 14:34:26', 'EXIT', '2nd Block', 'Room No 3'),
(24, 1752, '2021/08/13', '2021-08-13 16:20:06', 'ENTRY', '1st Block', 'Room No 1'),
(26, 1752, '2021/08/13', '2021-08-13 17:07:06', 'EXIT', '1st Block', 'Room No 1'),
(27, 1752, '2021/08/13', '2021-08-13 17:11:41', 'ENTRY', '1st Block', 'Room No 1'),
(28, 1752, '2021/08/13', '2021-08-13 17:26:32', 'EXIT', '1st Block', 'Room No 1'),
(74, 1751, '2021/08/20', '2021-08-20 14:30:40', 'EXIT', '2nd Block', 'Room No 3'),
(71, 1751, '2021/08/19', '2021-08-19 15:34:43', 'ENTRY', '2nd Block', 'Room No 3'),
(32, 1753, '2021/08/13', '2021-08-13 10:43:49', 'ENTRY', '1st Block', 'Room No 3'),
(33, 1750, '2021/08/13', '2021-08-13 17:48:47', 'ENTRY', '1st Block', 'Room No 1'),
(34, 1750, '2021/08/13', '2021-08-13 18:49:16', 'EXIT', '1st Block', 'Room No 1'),
(35, 1753, '2021/08/13', '2021-08-13 19:08:43', 'EXIT', '1st Block', 'Room No 3'),
(36, 1753, '2021/08/13', '2021-08-13 19:09:46', 'ENTRY', '2nd Block', 'Room No 3'),
(37, 1753, '2021/08/13', '2021-08-13 19:10:14', 'EXIT', '2nd Block', 'Room No 3'),
(38, 1753, '2021/08/13', '2021-08-13 19:22:08', 'ENTRY', '3rd Block', 'Room No 1'),
(39, 1753, '2021/08/13', '2021-08-13 19:23:44', 'EXIT', '3rd Block', 'Room No 1'),
(41, 1750, '2021/08/15', '2021-08-15 22:36:49', 'ENTRY', '2nd Block', 'Room No 1'),
(42, 1750, '2021/08/15', '2021-08-15 22:37:13', 'EXIT', '2nd Block', 'Room No 1'),
(76, 1751, '2021/08/20', '2021-08-20 18:41:09', 'EXIT', '2nd Block', 'Room No 3'),
(75, 1751, '2021/08/20', '2021-08-20 15:40:57', 'ENTRY', '2nd Block', 'Room No 3'),
(45, 1750, '2021/08/19', '2021-08-19 10:34:22', 'ENTRY', '1st Block', 'Room No 1'),
(46, 1750, '2021/08/19', '2021-08-19 13:37:53', 'EXIT', '1st Block', 'Room No 1'),
(68, 1750, '2021/08/20', '2021-08-20 18:42:40', 'EXIT', '1st Block', 'Room No 1'),
(67, 1750, '2021/08/20', '2021-08-20 17:58:45', 'ENTRY', '1st Block', 'Room No 1'),
(66, 1750, '2021/08/20', '2021-08-20 17:28:35', 'EXIT', '1st Block', 'Room No 1'),
(49, 1750, '2021/08/19', '2021-08-19 14:47:57', 'ENTRY', '1st Block', 'Room No 1'),
(65, 1750, '2021/08/20', '2021-08-20 15:28:02', 'ENTRY', '1st Block', 'Room No 1'),
(64, 1750, '2021/08/20', '2021-08-20 14:27:50', 'EXIT', '1st Block', 'Room No 1'),
(52, 1750, '2021/08/19', '2021-08-19 17:09:13', 'EXIT', '1st Block', 'Room No 1'),
(53, 1752, '2021/08/19', '2021-08-19 18:10:12', 'ENTRY', '2nd Block', 'Room No 3'),
(54, 1752, '2021/08/19', '2021-08-19 18:10:34', 'EXIT', '2nd Block', 'Room No 3'),
(55, 1750, '2021/08/19', '2021-08-19 17:55:06', 'ENTRY', '1st Block', 'Room No 1'),
(56, 1750, '2021/08/19', '2021-08-19 19:35:55', 'EXIT', '1st Block', 'Room No 1'),
(57, 1752, '2021/08/20', '2021-08-20 16:40:58', 'ENTRY', '2nd Block', 'Room No 3'),
(58, 1753, '2021/08/20', '2021-08-20 16:42:04', 'ENTRY', '1st Block', 'Room No 2'),
(59, 1754, '2021/08/20', '2021-08-20 16:42:48', 'ENTRY', '3rd Block', 'Room No 3'),
(60, 1755, '2021/08/20', '2021-08-20 16:43:35', 'ENTRY', '3rd Block', 'Room No 1'),
(61, 1756, '2021/08/20', '2021-08-20 10:43:49', 'ENTRY', '1st Block', 'Room No 1'),
(62, 1750, '2021/08/20', '2021-08-20 10:16:59', 'ENTRY', '1st Block', 'Room No 1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
