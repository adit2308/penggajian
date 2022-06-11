-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absensi`
--

CREATE TABLE `data_absensi` (
  `id_absensi` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `tanpa_keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` int(225) NOT NULL,
  `tj_transport` int(225) NOT NULL,
  `uang_makan` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(1, 'Koki', 3500000, 500000, 500000),
(6, 'Kasir', 3000000, 500000, 500000),
(8, 'Pelayan', 2500000, 350000, 350000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `hak_akses`, `username`, `password`) VALUES
(14, '123', 'Admin', 'Laki-Laki', 'Admin', '2022-06-08', 'Pegawai Tetap', 1, 'admin', 'admin'),
(17, '1358362801', 'Galang', 'Laki-Laki', 'Koki', '2022-05-01', 'Pegawai Tetap', 2, 'galang', 'galang'),
(18, '1358362802', 'Asep', 'Laki-Laki', 'Kasir', '2022-05-01', 'Pegawai Tetap', 2, 'asep', 'asep'),
(19, '1358362803', 'Zeta', 'Perempuan', 'Pelayan', '2022-05-03', 'Pegawai Tetap', 2, 'zeta', 'zeta'),
(20, '1358362804', 'Gilang', 'Laki-Laki', 'Koki', '2022-05-04', 'Pegawai Tetap', 2, 'gilang', 'gilang'),
(21, '1358362805', 'Wali', 'Laki-Laki', 'Pelayan', '2022-05-04', 'Pegawai Tetap', 2, 'wali', 'wali'),
(23, '1358362806', 'Yani', 'Perempuan', 'Pelayan', '2022-05-07', 'Pegawai Tetap', 2, 'yani', 'yani'),
(24, '1358362807', 'Yana', 'Laki-Laki', 'Pelayan', '2022-05-07', 'Pegawai Tetap', 2, 'yana', 'yana'),
(25, '1358362808', 'Yunus', 'Laki-Laki', 'Kasir', '2022-05-07', 'Pegawai Tetap', 2, 'yunus', 'yunus'),
(26, '1358362809', 'Adri', 'Laki-Laki', 'Pelayan', '2022-05-09', 'Pegawai Tetap', 2, 'adri', 'adri'),
(27, '1358362810', 'Hanafi', 'Laki-Laki', 'Pelayan', '2022-05-09', 'Pegawai Tetap', 2, 'hanafi', 'hanafi'),
(28, '1358362811', 'dapa', 'Laki-Laki', 'Pelayan', '2022-05-11', 'Pegawai Tetap', 2, 'dapa', 'dapa'),
(29, '1358362812', 'willy', 'Laki-Laki', 'Koki', '2022-05-10', 'Pegawai Tetap', 2, 'willy', 'willy'),
(30, '1358362813', 'Yudha', 'Laki-Laki', 'Kasir', '2022-05-11', 'Pegawai Tetap', 2, 'yudha', 'yudha'),
(31, '1358362814', 'Ahtar', 'Laki-Laki', 'Pelayan', '2022-05-16', 'Pegawai Tetap', 2, 'ahtar', 'ahtar'),
(32, '1358362815', 'Sony', 'Laki-Laki', 'Pelayan', '2022-05-16', 'Pegawai Tetap', 2, 'sony', 'sony'),
(33, '1358362816', 'Farchan', 'Laki-Laki', 'Koki', '2022-05-16', 'Pegawai Tetap', 2, 'farchan', 'farchan'),
(35, '1358362817', 'alpin', 'Laki-Laki', 'Pelayan', '2022-05-18', 'Pegawai Tetap', 2, 'alpin', 'alpin'),
(36, '1358362818', 'amru', 'Laki-Laki', 'Pelayan', '2022-05-19', 'Pegawai Tetap', 2, 'amru', 'amru'),
(37, '1358362819', 'Julaeha', 'Perempuan', 'Pelayan', '2022-05-19', 'Pegawai Tetap', 2, 'julaeha', 'julaeha'),
(38, '1358362820', 'Turu', 'Laki-Laki', 'Pelayan', '2022-05-20', 'Pegawai Tetap', 2, 'turu', 'turu'),
(39, '1358362821', 'Gina', 'Perempuan', 'Kasir', '2022-05-23', 'Pegawai Tetap', 2, 'gina', 'gina'),
(40, '1358362822', 'Suryani', 'Perempuan', 'Pelayan', '2022-05-23', 'Pegawai Tetap', 2, 'suryani', 'suryani'),
(41, '1358362823', 'Kiara', 'Perempuan', 'Pelayan', '2022-05-25', 'Pegawai Tetap', 2, 'kiara', 'kiara'),
(42, '1358362824', 'Junet', 'Laki-Laki', 'Pelayan', '2022-05-26', 'Pegawai Tetap', 2, 'junet', 'junet');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio1`
--

CREATE TABLE `portfolio1` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio1`
--

INSERT INTO `portfolio1` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`) VALUES
(1, 'NASI AYAM', 'Ayam Goreng Gulai Khas Dapur Galang.', 'Gulai juga disebut sebagai Gule adalah masakan berbahan baku daging ayam, aneka ikan, kambing, sapi, jeroan, atau sayuran seperti nangka muda dan daun singkong, yang diolah dalam kuah bumbu rempah yang bercita rasa gurih.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio2`
--

CREATE TABLE `portfolio2` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio2`
--

INSERT INTO `portfolio2` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`) VALUES
(1, 'NASI DAGING', 'Daging Sapi Olahan Khas Dapoer Galang.', 'Daging sapi olahan khas dapoer Galang yang masak dengan bumbu rahasia.'),
(2, 'NASI COKOT', 'Paket Nasi Khas Dapoer Galang.', 'Nasi yang dicampur dengan berbagai lauk pauk khas dapoer Galang.'),
(3, 'NASI LEMAK', 'Nasi Lemak Khas Dapoer Galang.', 'Nasi lemak adalah jenis makanan khas suku Melayu yang lazim ditemukan di Malaysia di mana hidangan ini dianggap sebagai salah satu hidangan nasionalnya, dan Indonesia, khususnya di Riau, Kepulauan Riau dan Sumatera Utara. Hidangan ini pun dapat ditemukan di Singapura dan Brunei.'),
(4, 'NASI GORENG', 'Nasi Goreng Khas Dapoer Galang.', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.'),
(5, 'NASI RENDANG', 'Daging Rendang Khas Dapoer Galang.', 'Rendang atau randang adalah masakan yang berbahan dasar daging asli Indonesia yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.');

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id_potongan` int(11) NOT NULL,
  `potongan` varchar(225) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id_potongan`, `potongan`, `jml_potongan`) VALUES
(7, 'Tanpa Keterangan', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `team1`
--

CREATE TABLE `team1` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`id_team`, `nama`, `npm`) VALUES
(1, 'Galang Hanafi', '065119164');

-- --------------------------------------------------------

--
-- Table structure for table `team2`
--

CREATE TABLE `team2` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team2`
--

INSERT INTO `team2` (`id_team`, `nama`, `npm`) VALUES
(1, 'Daffa Ksatria Firdaus', '065119168');

-- --------------------------------------------------------

--
-- Table structure for table `team3`
--

CREATE TABLE `team3` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team3`
--

INSERT INTO `team3` (`id_team`, `nama`, `npm`) VALUES
(1, 'Willyman Sopian', '065119175');

-- --------------------------------------------------------

--
-- Table structure for table `team4`
--

CREATE TABLE `team4` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team4`
--

INSERT INTO `team4` (`id_team`, `nama`, `npm`) VALUES
(1, 'Okter Pra Yudha', '065119178');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absensi`
--
ALTER TABLE `data_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD UNIQUE KEY `nama_jabatan` (`nama_jabatan`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio1`
--
ALTER TABLE `portfolio1`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio2`
--
ALTER TABLE `portfolio2`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id_potongan`),
  ADD UNIQUE KEY `potongan` (`potongan`);

--
-- Indexes for table `team1`
--
ALTER TABLE `team1`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team2`
--
ALTER TABLE `team2`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team3`
--
ALTER TABLE `team3`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team4`
--
ALTER TABLE `team4`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absensi`
--
ALTER TABLE `data_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio1`
--
ALTER TABLE `portfolio1`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio2`
--
ALTER TABLE `portfolio2`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team1`
--
ALTER TABLE `team1`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team2`
--
ALTER TABLE `team2`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team3`
--
ALTER TABLE `team3`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team4`
--
ALTER TABLE `team4`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
