-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 03:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_si23`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_si23`
--

CREATE TABLE `mahasiswa_si23` (
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Agama` varchar(25) NOT NULL,
  `Asal_Sekolah` varchar(50) NOT NULL,
  `No_WA` int(16) NOT NULL,
  `Hobi` varchar(50) NOT NULL,
  `Golongan_Darah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa_si23`
--

INSERT INTO `mahasiswa_si23` (`Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `Agama`, `Asal_Sekolah`, `No_WA`, `Hobi`, `Golongan_Darah`) VALUES
('I Gede', 'kadjisad', '2023-03-03', 'Pria', 'Jl. Parigi 7 No.77, Malalayang Satu, Kec. Malalayang, Kota Manado, Sulawesi Utara', 'Hindu', 'asdasw', 2147483647, 'game', 'O+'),
('ida bagus', 'jarkarta', '2023-04-07', 'Pria', 'saddas', 'Hindu', 'aasadas', 401245, 'game', 'O+'),
('ida bagus d', 'jarkarta', '2023-03-29', 'Pria', 'saddas', 'Kristen', 'aasadas', 401245, 'game', 'O-'),
('ida bagus d', 'jarkarta', '2023-04-25', 'Pria', 'saddas', 'Kristen', 'aasadas', 401245, 'asas', 'O+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
