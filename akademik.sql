-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2024 at 03:16 PM
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int NOT NULL,
  `nidn` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`, `alamat`) VALUES
(15, '111111', 'Saputra', 'Bogor'),
(19, '202020', 'Dayat', 'Jakarta'),
(21, '4040', 'Mamat', 'Sragen');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nim` char(9) DEFAULT NULL,
  `program_studi` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `program_studi`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `foto`) VALUES
(1, '2202049', 'D3 Teknik Informatika', 'Achmad Choerul Ramdhani', 'Cilacap', '2004-10-10', 'Laki-Laki', 'Islam', 'Jl.Tongkol Sikampuh Kroya', NULL),
(4, '2202050', 'D3 Teknik Informatika', 'Agus Salim', 'Bandung', '2003-05-15', 'Laki-Laki', 'Islam', 'Jl. Peta Selatan No. 10, Jakarta', NULL),
(5, '2202051', 'D3 Teknik Informatika', 'Dewi Kartika', 'Surabaya', '2003-08-22', 'Perempuan', 'Kristen', 'Jl. Gajah Mada No. 5, Yogyakarta', NULL),
(6, '2202052', 'D3 Teknik Informatika', 'Budi Santoso', 'Solo', '2003-11-30', 'Laki-Laki', 'Hindu', 'Jl. Merdeka No. 20, Semarang', NULL),
(7, '2202053', 'D3 Teknik Informatika', 'Eka Putri', 'Medan', '2004-02-18', 'Perempuan', 'Buddha', 'Jl. Sudirman No. 3, Medan', NULL),
(8, '2202054', 'D3 Teknik Informatika', 'Ferry Susanto', 'Makassar', '2004-04-25', 'Laki-Laki', 'Kristen', 'Jl. Gatot Subroto No. 7, Makassar', NULL),
(9, '2202055', 'D3 Teknik Informatika', 'Lia Fitriani', 'Padang', '2004-07-03', 'Perempuan', 'Islam', 'Jl. Diponegoro No. 15, Padang', NULL),
(10, '2202056', 'D3 Teknik Informatika', 'Joko Wibowo', 'Malang', '2004-09-20', 'Laki-Laki', 'Islam', 'Jl. Soekarno-Hatta No. 30, Malang', NULL),
(11, '2202057', 'D3 Teknik Informatika', 'Rina Nurhayati', 'Banjarmasin', '2004-12-10', 'Perempuan', 'Kristen', 'Jl. Imam Bonjol No. 8, Banjarmasin', NULL),
(12, '2202058', 'D3 Teknik Informatika', 'Hendra Gunawan', 'Denpasar', '2005-03-05', 'Laki-Laki', 'Hindu', 'Jl. Hayam Wuruk No. 2, Denpasar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int NOT NULL,
  `kode_mk` varchar(30) DEFAULT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `jumlah_sks` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `kode_mk`, `nama_mk`, `semester`, `jumlah_sks`) VALUES
(1, '1010', 'Pemrogramman Web 1', '8 (Delapan)', '2'),
(4, '1020', 'Pemrogramman Web 2', '6 (Enam)', '3'),
(5, '1030', 'Sistem Operasi', '7 (Tujuh)', '4'),
(6, '1040', 'Pemrograman Berorientasi Objek', '5 (Lima)', '3'),
(7, '1050', 'Jaringan Komputer', '8 (Delapan)', '4'),
(8, '1060', 'Pemrograman Database', '4 (Empat)', '2'),
(9, '1070', 'Analisis dan Desain Sistem Informasi', '3 (Tiga)', '2'),
(10, '1080', 'Keamanan Informasi', '2 (Dua)', '3'),
(11, '1090', 'Manajemen Proyek TI', '1 (Satu)', '3'),
(12, '1100', 'Pengembangan Aplikasi Mobile', '5 (Lima)', '3');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int NOT NULL,
  `kode_matkul` varchar(15) NOT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  `id_mhs` int DEFAULT NULL,
  `id_dsn` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode_matkul`, `nama_matkul`, `id_mhs`, `id_dsn`) VALUES
(1, '10', 'Pemrograman Web 2', 1, 15),
(2, '11', 'Rekayasa Perangkat Lunak', 2, 19),
(3, '12', 'Jaringan Komputer', 29, 21);

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int NOT NULL,
  `nim` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tempat_lahir` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`) VALUES
(1, '101010', 'Achmad', 'Cilacap', '2023-08-19', 'Laki-laki', 'Islam', 'Cilacap'),
(2, '202020', 'Choerul', 'Cilacap', '2023-08-09', 'Laki-laki', 'Islam', 'Cilacap'),
(29, '404040', 'Budi', 'Yogyakarta', '2023-09-01', 'Laki-Laki', 'Islam', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(10, 'irul', '$2y$10$CzgYeGV3tRAXXycaPMkQ2OElHOu.M3yXYB9StW0H5eCSZffGmben2'),
(22, 'choerul', '$2y$10$WdvwU/7OwEDmrOWGV5r2Ru04ZZ3VGSLO4ZUFVIWkms4ZEX6yWsUN.'),
(23, 'achmad', '$2y$10$/UthFWLD/F8.BLzKRjo3yuE23f/avMzwFn0Hrmkt8YEvd/q4doQ3W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_matkul_mhs` (`id_mhs`),
  ADD KEY `Fk_matkul_dsn` (`id_dsn`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `Fk_matkul_dsn` FOREIGN KEY (`id_dsn`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `FK_matkul_mhs` FOREIGN KEY (`id_mhs`) REFERENCES `mhs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
