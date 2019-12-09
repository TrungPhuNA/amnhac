-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 03:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ita`
--

--
-- Truncate table before insert `provinces`
--

TRUNCATE TABLE `provinces`;
--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `created_at`, `updated_at`, `name`, `english_name`, `level`) VALUES
(1, NULL, NULL, 'Thành phố Hà Nội', NULL, 'Thành phố Trung ương'),
(2, NULL, NULL, 'Tỉnh Hà Giang', NULL, 'Tỉnh'),
(4, NULL, NULL, 'Tỉnh Cao Bằng', NULL, 'Tỉnh'),
(6, NULL, NULL, 'Tỉnh Bắc Kạn', NULL, 'Tỉnh'),
(8, NULL, NULL, 'Tỉnh Tuyên Quang', NULL, 'Tỉnh'),
(10, NULL, NULL, 'Tỉnh Lào Cai', NULL, 'Tỉnh'),
(11, NULL, NULL, 'Tỉnh Điện Biên', NULL, 'Tỉnh'),
(12, NULL, NULL, 'Tỉnh Lai Châu', NULL, 'Tỉnh'),
(14, NULL, NULL, 'Tỉnh Sơn La', NULL, 'Tỉnh'),
(15, NULL, NULL, 'Tỉnh Yên Bái', NULL, 'Tỉnh'),
(17, NULL, NULL, 'Tỉnh Hoà Bình', NULL, 'Tỉnh'),
(19, NULL, NULL, 'Tỉnh Thái Nguyên', NULL, 'Tỉnh'),
(20, NULL, NULL, 'Tỉnh Lạng Sơn', NULL, 'Tỉnh'),
(22, NULL, NULL, 'Tỉnh Quảng Ninh', NULL, 'Tỉnh'),
(24, NULL, NULL, 'Tỉnh Bắc Giang', NULL, 'Tỉnh'),
(25, NULL, NULL, 'Tỉnh Phú Thọ', NULL, 'Tỉnh'),
(26, NULL, NULL, 'Tỉnh Vĩnh Phúc', NULL, 'Tỉnh'),
(27, NULL, NULL, 'Tỉnh Bắc Ninh', NULL, 'Tỉnh'),
(30, NULL, NULL, 'Tỉnh Hải Dương', NULL, 'Tỉnh'),
(31, NULL, NULL, 'Thành phố Hải Phòng', NULL, 'Thành phố Trung ương'),
(33, NULL, NULL, 'Tỉnh Hưng Yên', NULL, 'Tỉnh'),
(34, NULL, NULL, 'Tỉnh Thái Bình', NULL, 'Tỉnh'),
(35, NULL, NULL, 'Tỉnh Hà Nam', NULL, 'Tỉnh'),
(36, NULL, NULL, 'Tỉnh Nam Định', NULL, 'Tỉnh'),
(37, NULL, NULL, 'Tỉnh Ninh Bình', NULL, 'Tỉnh'),
(38, NULL, NULL, 'Tỉnh Thanh Hóa', NULL, 'Tỉnh'),
(40, NULL, NULL, 'Tỉnh Nghệ An', NULL, 'Tỉnh'),
(42, NULL, NULL, 'Tỉnh Hà Tĩnh', NULL, 'Tỉnh'),
(44, NULL, NULL, 'Tỉnh Quảng Bình', NULL, 'Tỉnh'),
(45, NULL, NULL, 'Tỉnh Quảng Trị', NULL, 'Tỉnh'),
(46, NULL, NULL, 'Tỉnh Thừa Thiên Huế', NULL, 'Tỉnh'),
(48, NULL, NULL, 'Thành phố Đà Nẵng', NULL, 'Thành phố Trung ương'),
(49, NULL, NULL, 'Tỉnh Quảng Nam', NULL, 'Tỉnh'),
(51, NULL, NULL, 'Tỉnh Quảng Ngãi', NULL, 'Tỉnh'),
(52, NULL, NULL, 'Tỉnh Bình Định', NULL, 'Tỉnh'),
(54, NULL, NULL, 'Tỉnh Phú Yên', NULL, 'Tỉnh'),
(56, NULL, NULL, 'Tỉnh Khánh Hòa', NULL, 'Tỉnh'),
(58, NULL, NULL, 'Tỉnh Ninh Thuận', NULL, 'Tỉnh'),
(60, NULL, NULL, 'Tỉnh Bình Thuận', NULL, 'Tỉnh'),
(62, NULL, NULL, 'Tỉnh Kon Tum', NULL, 'Tỉnh'),
(64, NULL, NULL, 'Tỉnh Gia Lai', NULL, 'Tỉnh'),
(66, NULL, NULL, 'Tỉnh Đắk Lắk', NULL, 'Tỉnh'),
(67, NULL, NULL, 'Tỉnh Đắk Nông', NULL, 'Tỉnh'),
(68, NULL, NULL, 'Tỉnh Lâm Đồng', NULL, 'Tỉnh'),
(70, NULL, NULL, 'Tỉnh Bình Phước', NULL, 'Tỉnh'),
(72, NULL, NULL, 'Tỉnh Tây Ninh', NULL, 'Tỉnh'),
(74, NULL, NULL, 'Tỉnh Bình Dương', NULL, 'Tỉnh'),
(75, NULL, NULL, 'Tỉnh Đồng Nai', NULL, 'Tỉnh'),
(77, NULL, NULL, 'Tỉnh Bà Rịa - Vũng Tàu', NULL, 'Tỉnh'),
(79, NULL, NULL, 'Thành phố Hồ Chí Minh', NULL, 'Thành phố Trung ương'),
(80, NULL, NULL, 'Tỉnh Long An', NULL, 'Tỉnh'),
(82, NULL, NULL, 'Tỉnh Tiền Giang', NULL, 'Tỉnh'),
(83, NULL, NULL, 'Tỉnh Bến Tre', NULL, 'Tỉnh'),
(84, NULL, NULL, 'Tỉnh Trà Vinh', NULL, 'Tỉnh'),
(86, NULL, NULL, 'Tỉnh Vĩnh Long', NULL, 'Tỉnh'),
(87, NULL, NULL, 'Tỉnh Đồng Tháp', NULL, 'Tỉnh'),
(89, NULL, NULL, 'Tỉnh An Giang', NULL, 'Tỉnh'),
(91, NULL, NULL, 'Tỉnh Kiên Giang', NULL, 'Tỉnh'),
(92, NULL, NULL, 'Thành phố Cần Thơ', NULL, 'Thành phố Trung ương'),
(93, NULL, NULL, 'Tỉnh Hậu Giang', NULL, 'Tỉnh'),
(94, NULL, NULL, 'Tỉnh Sóc Trăng', NULL, 'Tỉnh'),
(95, NULL, NULL, 'Tỉnh Bạc Liêu', NULL, 'Tỉnh'),
(96, NULL, NULL, 'Tỉnh Cà Mau', NULL, 'Tỉnh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
