-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 03:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040065`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `img`, `nama`, `brand`, `warna`, `harga`) VALUES
(1, 'airmaxgrey.png', 'Air Max Axis Thunder Grey', 'Nike', 'White, Blue, Black', 119),
(2, 'jordanuniv.png', 'Jordan 1 Retro High', 'Nike', 'White, Blue, Black', 170),
(4, 'vapormxw.png', 'Air VaporMax Flyknit 2', 'Nike', 'Blue', 190),
(5, 'yeezyboostgrey.png', 'Yeezy Boost 700 Wave Runner', 'Adidas', 'Grey', 300),
(6, 'nmdpyl.png', 'NMD Hu Pharrell Solar Pack Red', 'Adidas', 'Red, Yellow', 250),
(7, 'nmdhmoreo.png', 'Human Race NMD Pharrell Oreo', 'Adidas', 'Black, White', 250),
(8, 'ultrablack.png', 'Ultra Boost 1.0 SNS X Social Status', 'Adidas', 'Black, White', 200),
(9, 'nkbbblak.png', 'Nike Adapt BB Black Pure Platinum (US Charger)', 'Nike', 'Black, White', 350),
(10, 'nkoff.png', 'Air Presto Off-White White (2018)', 'Nike', 'White', 160),
(20, 'yeezyblckrd.png', 'Yeezy Boost 350 V2', 'Adidas', 'Black, Red', 220),
(57, '60af7bc83cebc.png', 'Dreamer 2 J Cole Off Season Red', 'Puma', 'Red, Black', 160),
(58, '60af7d052ad05.png', 'RS-X Toys White', 'Puma', 'White, Red, Blue, Yellow', 170),
(59, '60af829db2a10.png', 'Chuck Taylor All-Star 70s Hi Comme des Garcons PLAY Black', 'Converse', 'Black, White', 180),
(60, '60af83c06b3f7.png', 'Chuck Taylor All-Star 70s Hi Black', 'Converse', 'Black, White', 80),
(61, '60af86563fcc6.png', 'Chuck Taylor All-Star 70s Hi Off-White', 'Converse', 'White, Black', 190),
(62, '60af87bee5e07.png', 'Calibrate Restored Lapis Blue Fizzy Yellow', 'Puma', 'Blue, Yellow', 135);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', '$2y$10$UcEaksa.oheyGFsKHMGhMe0e9cGuslE5eWBmLaf3vhWIgW5VYAN5q'),
(3, 'asd', '$2y$10$9t8Gp3Kzs/XiWerhDT8XaO8GQMh/m9tvYySebyIQOVg6CeYvhAgAO'),
(4, 'nouser', '$2y$10$AZTNs93Vjx3RqiLSp.el2u5dykJKPilj0pwgTkguUrWAcbd2v.z0S'),
(5, 'sur', '$2y$10$FxLRFDY.MYjZ9KjYaHDpjOI69ht7Wb0k5OycBeqfzex1lGRKdjNjq'),
(6, 'surya', '$2y$10$rpm5qHHH4v9Eez58W6NbGeNPGpaoEmc8WIQbPd0SPQRH.Rq/Hunwq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
