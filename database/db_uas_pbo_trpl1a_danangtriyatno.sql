-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2026 at 12:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_trpl1a_danangtriyatno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `ukt_nominal` int NOT NULL,
  `jenis_pembayaran` enum('Mandiri','BidikMisi','Prestasi') NOT NULL,
  `golongan_ukt` int DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` int DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `ukt_nominal`, `jenis_pembayaran`, `golongan_ukt`, `nama_wali`, `nomor_kip`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk`) VALUES
(1, 'Ahmad Fauzi', '202301001', 4, 5000000, 'mandiri', 4, 'Budi Santoso', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', '202301002', 4, 6500000, 'mandiri', 5, 'Rahmat Hidayat', NULL, NULL, NULL, NULL),
(3, 'Budi Wijaya', '202202015', 6, 5000000, 'mandiri', 4, 'Hartono Wijaya', NULL, NULL, NULL, NULL),
(4, 'Citra Lestari', '202401003', 2, 8000000, 'mandiri', 6, 'Ahmad subarjo', NULL, NULL, NULL, NULL),
(5, 'Dedi Kurniawan', '202103045', 8, 3500000, 'mandiri', 3, 'Suryadi', NULL, NULL, NULL, NULL),
(6, 'Eka Putri', '202302089', 4, 5000000, 'mandiri', 4, 'Supriatna', NULL, NULL, NULL, NULL),
(7, 'Fajar Nugraha', '202403012', 2, 6500000, 'mandiri', 5, 'Wawan Setiawan', NULL, NULL, NULL, NULL),
(8, 'Gita Permata', '202201122', 6, 8000000, 'mandiri', 6, 'Hendra Permana', NULL, NULL, NULL, NULL),
(9, 'Hendra Saputra', '202501005', 1, 3500000, 'mandiri', 3, 'Joko Saputra', NULL, NULL, NULL, NULL),
(10, 'Indah Sari', '202301050', 4, 0, 'bidikmisi', 1, 'Mulyono', 'KIP-2023-99812', 9500000, NULL, NULL),
(11, 'Joko Susilo', '202203077', 6, 0, 'bidikmisi', 1, 'Slamet Susilo', 'KIP-2022-77123', 9500000, NULL, NULL),
(12, 'Kevin Sanjaya', '202402034', 2, 0, 'bidikmisi', 1, 'Agus Sanjaya', 'KIP-2024-11456', 10000000, NULL, NULL),
(13, 'Larasati Putri', '202304011', 4, 0, 'bidikmisi', 1, 'Bambang', 'KIP-2023-55612', 9500000, NULL, NULL),
(14, 'Muhammad Rizky', '202101099', 8, 0, 'bidikmisi', 2, 'Abdurrahman', 'KIP-2021-00234', 8500000, NULL, NULL),
(15, 'Nadia Utami', '202401088', 2, 0, 'bidikmisi', 1, 'Hermawan', 'KIP-2024-88341', 10000000, NULL, NULL),
(16, 'Oki Rahman', '202502011', 1, 0, 'bidikmisi', 1, 'Dadang Rahman', 'KIP-2025-11223', 10000000, NULL, NULL),
(17, 'Putri Amelia', '202204056', 6, 0, 'bidikmisi', 1, 'Cecep', 'KIP-2022-44567', 9500000, NULL, NULL),
(18, 'Rian Hidayat', '202301100', 4, 1500000, 'prestasi', 2, 'Syarif Hidayat', NULL, NULL, 'Djarum Foundation', '3.50'),
(19, 'Sinta Dewi', '202202150', 6, 2000000, 'prestasi', 2, 'Gunawan Dewi', NULL, NULL, 'Yayasan Toyota', '3.30'),
(20, 'Taufik Hidayat', '202403111', 2, 0, 'prestasi', 1, 'Lukman Hidayat', NULL, NULL, 'Bank Indonesia', '3.60'),
(21, 'Utami Rizki', '202302222', 4, 2500000, 'prestasi', 3, 'Anwar Rizki', NULL, NULL, 'Kemenpora', '3.40'),
(22, 'Vino Bastian', '202104001', 8, 1500000, 'prestasi', 2, 'Bastian Steel', NULL, NULL, 'Djarum Foundation', '3.50'),
(23, 'Wulan Guritno', '202401055', 2, 0, 'prestasi', 1, 'Guritno', NULL, NULL, 'Beasiswa Unggulan', '3.75'),
(24, 'Xavier Putra', '202503044', 1, 2000000, 'prestasi', 2, 'Roni Putra', NULL, NULL, 'BCA Finance', '3.40'),
(25, 'Yanti Susanti', '202201067', 6, 1500000, 'prestasi', 2, 'Edi Susanto', NULL, NULL, 'Pertamina Foundation', '3.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
