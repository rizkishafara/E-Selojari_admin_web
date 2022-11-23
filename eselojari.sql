-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 05:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eselojari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `name`, `password`) VALUES
(1, 'rizki', 'Rizki Shafara', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_brg` char(6) NOT NULL,
  `nm_brg` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `stok_min` int(4) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `satuan`, `harga`, `harga_beli`, `stok`, `stok_min`, `gambar`) VALUES
('B0001', 'Basreng Setan', 'Bungkus', 13000, 11500, 10, 2, 'Basreng_Setan.jpg'),
('B0002', 'Belut Goreng', 'Bungkus', 20000, 18000, 25, 1, 'Belut_Goreng.jpg'),
('G0001', 'Wader Crispy', 'Bungkus', 16000, 14000, 9, 1, 'Wader_Crispy.jpg'),
('K0001', 'Keripik Singkong', 'Bungkus', 9500, 7500, 2, 1, 'Keripik_Singkong.jpg'),
('K0002', 'Keripik Tempe', 'Bungkus', 10000, 8000, 5, 1, 'Keripik_Tempe.jpg'),
('K0003', 'Keripik Kentang', 'Bungkus', 15000, 13000, 20, 2, 'Keripik_Kentang.jpg'),
('K0004', 'Keripik Pisang', 'Bungkus', 11000, 10000, 15, 2, 'Keripik_Pisang.jpg'),
('P0001', 'Peyek Kelor', 'Bungkus', 12000, 10500, 6, 1, 'Peyek_Kelor.jpeg'),
('P0002', 'Peyek Kacang Ijo', 'Bungkus', 10000, 8500, 12, 1, 'Peyek_Kacang_Ijo.jpg'),
('P0003', 'Peyek Kacang Tanah', 'Bungkus', 10000, 8500, 17, 1, 'Peyek_Kacang_Tanah.jpg'),
('P0004', 'Peyek Udang', 'Bungkus', 18000, 15500, 4, 1, 'Peyek_Udang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detailjual`
--

CREATE TABLE `detailjual` (
  `id` int(11) NOT NULL,
  `no_nota` int(11) NOT NULL,
  `kd_brg` varchar(6) NOT NULL,
  `hrg_brg` decimal(12,2) DEFAULT NULL,
  `hrg_beli` decimal(12,2) DEFAULT NULL,
  `jml_brg` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailjual`
--

INSERT INTO `detailjual` (`id`, `no_nota`, `kd_brg`, `hrg_brg`, `hrg_beli`, `jml_brg`) VALUES
(1, 1, 'B0001', '95000.00', '80000.00', 1),
(2, 1, 'H0001', '25000.00', '19000.00', 1),
(3, 2, 'B0001', '95000.00', '80000.00', 1),
(4, 2, 'K0001', '50000.00', '40000.00', 1),
(5, 3, 'K0001', '9500.00', '7500.00', 1),
(6, 4, 'P0001', '12000.00', '10500.00', 1),
(7, 5, 'K0002', '10000.00', '8000.00', 1),
(8, 6, 'P0001', '12000.00', '10500.00', 1),
(9, 7, 'K0001', '9500.00', '7500.00', 1),
(10, 8, 'P0001', '12000.00', '10500.00', 1),
(11, 9, 'P0001', '12000.00', '10500.00', 1),
(12, 10, 'P0001', '12000.00', '10500.00', 1),
(13, 11, 'K0001', '9500.00', '7500.00', 2),
(14, 12, 'K0002', '10000.00', '8000.00', 6),
(15, 13, 'K0001', '9500.00', '7500.00', 1),
(16, 15, 'P0001', '12000.00', '10500.00', 1),
(17, 17, 'P0001', '12000.00', '10500.00', 1),
(18, 19, 'K0001', '9500.00', '7500.00', 1),
(19, 20, 'K0001', '9500.00', '7500.00', 1),
(20, 21, 'P0001', '12000.00', '10500.00', 1),
(21, 22, 'P0001', '12000.00', '10500.00', 1),
(22, 23, 'P0001', '12000.00', '10500.00', 1),
(23, 25, 'P0001', '12000.00', '10500.00', 1),
(24, 26, 'P0001', '12000.00', '10500.00', 1),
(25, 27, 'P0001', '12000.00', '10500.00', 1),
(26, 28, 'K0001', '9500.00', '7500.00', 1),
(27, 29, 'P0001', '12000.00', '10500.00', 1),
(28, 30, 'P0001', '12000.00', '10500.00', 1),
(29, 31, 'P0001', '12000.00', '10500.00', 1),
(30, 32, 'P0001', '12000.00', '10500.00', 1),
(31, 33, 'K0001', '9500.00', '7500.00', 1),
(32, 34, 'K0001', '9500.00', '7500.00', 1),
(33, 34, 'K0002', '10000.00', '8000.00', 1),
(34, 34, 'P0001', '12000.00', '10500.00', 1),
(35, 35, 'K0001', '9500.00', '7500.00', 1),
(36, 35, 'K0002', '10000.00', '8000.00', 1),
(37, 35, 'P0001', '12000.00', '10500.00', 1),
(38, 36, 'K0001', '9500.00', '7500.00', 1),
(39, 36, 'K0002', '10000.00', '8000.00', 1),
(40, 37, 'K0001', '9500.00', '7500.00', 1),
(41, 38, 'B0001', '13000.00', '11500.00', 1),
(42, 38, 'G0001', '16000.00', '14000.00', 1),
(43, 39, 'B0001', '13000.00', '11500.00', 1),
(44, 39, 'K0001', '9500.00', '7500.00', 1),
(45, 40, 'B0001', '13000.00', '11500.00', 1),
(46, 40, 'K0001', '9500.00', '7500.00', 1),
(47, 41, 'B0001', '13000.00', '11500.00', 1),
(48, 41, 'K0001', '9500.00', '7500.00', 1),
(49, 42, 'B0001', '13000.00', '11500.00', 1),
(50, 42, 'K0004', '11000.00', '10000.00', 1),
(51, 43, 'B0001', '13000.00', '11500.00', 1),
(52, 43, 'K0004', '11000.00', '10000.00', 1),
(53, 44, 'P0001', '12000.00', '10500.00', 1),
(54, 44, 'P0002', '10000.00', '8500.00', 1),
(55, 45, 'P0001', '12000.00', '10500.00', 1),
(56, 45, 'P0002', '10000.00', '8500.00', 1),
(57, 45, '', '0.00', '0.00', 0),
(58, 46, 'K0003', '15000.00', '13000.00', 1),
(59, 46, 'K0004', '11000.00', '10000.00', 1),
(60, 47, 'B0001', '13000.00', '11500.00', 1),
(61, 47, 'B0002', '20000.00', '18000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `kd_kons` int(6) NOT NULL,
  `nm_kons` varchar(30) DEFAULT NULL,
  `alm_kons` varchar(50) DEFAULT NULL,
  `kota_kons` varchar(20) DEFAULT NULL,
  `kd_pos` varchar(5) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`kd_kons`, `nm_kons`, `alm_kons`, `kota_kons`, `kd_pos`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Muhammad Juan', 'Jl. Surga', 'Demak', '8983', '08976543678', 'juan99@gmail.com', 'juan', 'a94652aa97c7211ba8954dd15a3cf838'),
(4, 'Rizki Shafara Adiyatma', 'Jl. raya', 'Ungaran', '5234', '0895360622007', 'rizkishafara99@gmail.com', 'rizki', '202cb962ac59075b964b07152d234b70'),
(7, 'Rizki Shafara', 'Ungaran', 'Ungaran', '7263', '0897528936', 'rizkishafara99@gmail.com', 'coba', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(8, 'Test', 'test', 'test', '980', '90890890', 'test', 'test', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `mjual`
--

CREATE TABLE `mjual` (
  `no_nota` int(11) NOT NULL,
  `kd_kons` char(20) DEFAULT NULL,
  `tgl_jual` datetime DEFAULT NULL,
  `subtot` int(12) DEFAULT NULL,
  `ongkir` int(12) DEFAULT NULL,
  `total_biaya` int(12) DEFAULT NULL,
  `pembayaran` int(12) DEFAULT NULL,
  `kembalian` int(12) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `bukti_tf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mjual`
--

INSERT INTO `mjual` (`no_nota`, `kd_kons`, `tgl_jual`, `subtot`, `ongkir`, `total_biaya`, `pembayaran`, `kembalian`, `status`, `bukti_tf`) VALUES
(8, 'test', '2021-07-02 15:44:45', 12000, 13000, 25000, 25000, 0, 0, NULL),
(9, 'test', '2021-07-02 16:47:17', 12000, 11000, 23000, 25000, 2000, 0, NULL),
(10, 'test', '2021-07-02 16:51:04', 12000, 12000, 24000, 25000, 1000, 0, NULL),
(11, 'test', '2021-07-02 16:54:51', 19000, 5000, 24000, 25000, 1000, 0, NULL),
(12, 'test', '2021-07-02 16:56:59', 60000, 12000, 72000, 100000, 28000, 0, NULL),
(13, 'test', '2021-07-02 16:58:33', 9500, 12000, 21500, 25000, 3500, 0, NULL),
(14, '', '2021-07-02 17:00:00', 0, 0, 0, 0, 0, 0, NULL),
(15, 'test', '2021-07-02 17:04:06', 12000, 11000, 23000, 25000, 2000, 0, NULL),
(16, '', '2021-07-02 17:04:18', 0, 0, 0, 0, 0, 0, NULL),
(17, 'test', '2021-07-02 17:07:23', 12000, 6000, 18000, 20000, 2000, 1, ''),
(18, '', '2021-07-02 17:07:44', 0, 0, 0, 0, 0, 0, NULL),
(19, 'test', '2021-07-02 17:15:23', 9500, 46000, 55500, 60000, 4500, 0, NULL),
(20, 'test', '2021-07-02 17:18:45', 9500, 24000, 33500, 35000, 1500, 1, '/9j/4AAQSkZJRgABAQAA'),
(21, 'test', '2021-07-02 17:24:30', 12000, 5000, 17000, 20000, 3000, 1, '/9j/4AAQSkZJRgABAQAA'),
(22, 'test', '2021-07-02 17:31:19', 12000, 6000, 18000, 20000, 2000, 1, '/9j/4AAQSkZJRgABAQAA'),
(23, 'test', '2021-07-02 17:39:53', 12000, 12000, 24000, 25000, 1000, 1, '/9j/4AAQSkZJRgABAQAA'),
(24, 'test', '2021-07-02 17:51:25', 12000, 11000, 23000, 25000, 2000, 0, NULL),
(25, 'test', '2021-07-02 17:53:17', 12000, 3000, 15000, 15000, 0, 0, NULL),
(26, 'test', '2021-07-02 17:57:26', 12000, 8000, 20000, 20000, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(27, 'test', '2021-07-02 18:02:39', 12000, 5000, 17000, 20000, 3000, 1, '/9j/4AAQSkZJRgABAQAA'),
(28, 'test', '2021-07-02 18:04:12', 9500, 5000, 14500, 15000, 500, 1, '/9j/4AAQSkZJRgABAQAA'),
(29, 'test', '2021-07-02 18:10:41', 12000, 6000, 18000, 20000, 2000, 1, '/9j/4AAQSkZJRgABAQAA'),
(30, 'test', '2021-07-02 18:16:11', 12000, 5000, 17000, 20000, 3000, 1, '/9j/4AAQSkZJRgABAQAA'),
(31, 'test', '2021-07-02 18:17:38', 12000, 8000, 20000, 20000, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(32, 'username', '2021-07-02 18:20:50', 12000, 42000, 54000, 60000, 6000, 1, '/9j/4AAQSkZJRgABAQAA'),
(33, 'test', '2021-07-02 18:25:35', 9500, 6000, 15500, 15500, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(34, 'test', '2021-07-03 05:40:52', 31500, 5000, 36500, 40000, 3500, 0, NULL),
(35, 'test', '2021-07-03 05:42:40', 31500, 74000, 105500, 110000, 4500, 0, NULL),
(36, 'test', '2021-07-03 05:46:17', 19500, 3000, 22500, 25000, 2500, 1, '/9j/4AAQSkZJRgABAQAA'),
(37, 'rizki', '2021-07-05 16:17:08', 9500, 5000, 14500, 15000, 500, 0, NULL),
(38, 'rizki', '2021-07-05 16:18:49', 29000, 9000, 38000, 40000, 2000, 0, NULL),
(39, 'test', '2021-07-05 16:21:43', 22500, 8000, 30500, 35000, 4500, 0, NULL),
(40, 'rizki', '2021-07-05 16:23:27', 22500, 6000, 28500, 30000, 1500, 1, '/9j/4AAQSkZJRgABAQAA'),
(41, 'rizki', '2021-07-05 16:25:05', 22500, 6000, 28500, 30000, 1500, 1, '/9j/4AAQSkZJRgABAQAA'),
(42, 'rizki', '2021-07-05 16:29:37', 24000, 16000, 40000, 40000, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(43, 'rizki', '2021-07-05 16:32:30', 24000, 56000, 80000, 80000, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(44, 'rizki', '2021-07-05 16:35:32', 22000, 16000, 38000, 40000, 2000, 1, '/9j/4AAQSkZJRgABAQAA'),
(45, 'rizki', '2021-07-05 16:36:31', 22000, 78000, 100000, 100000, 0, 1, '/9j/4AAQSkZJRgABAQAA'),
(46, 'rizki', '2021-07-09 09:45:46', 26000, 13000, 39000, 40000, 1000, 1, '/9j/4AAQSkZJRgABAQAA'),
(47, 'rizki', '2021-07-11 09:08:02', 33000, 9000, 42000, 45000, 3000, 1, '/9j/4AAQSkZJRgABAQAA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `detailjual`
--
ALTER TABLE `detailjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kd_kons`);

--
-- Indexes for table `mjual`
--
ALTER TABLE `mjual`
  ADD PRIMARY KEY (`no_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detailjual`
--
ALTER TABLE `detailjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `kd_kons` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mjual`
--
ALTER TABLE `mjual`
  MODIFY `no_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
