-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 27, 2022 at 03:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_dilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_dilan_table`
--

CREATE TABLE `showroom_dilan_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_dilan_table`
--

INSERT INTO `showroom_dilan_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(2134703901, 'Brio', 'Dilan', 'as', '1111-11-11', '12', 'The Mandalorian S01E2 1080p WebRip-DRAYS.mkv_snapshot_07.30_[2022.05.30_18.01.29].jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users_dilan`
--

CREATE TABLE `users_dilan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_dilan`
--

INSERT INTO `users_dilan` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1960653444, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', 'Telkom University', '085606155865'),
(330506827, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', 'Telkom University', '085606155865'),
(819281773, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', 'Telkom University', '085606155865'),
(607790568, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', 'Telkom University', '085606155865'),
(1327335758, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', 'Telkom University', '085606155865'),
(2146547057, 'Rahman Dilan Syaukanie', 'syaukanie.dilan@gmail.com', '123', '085606155865');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
