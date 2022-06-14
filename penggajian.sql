-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 04:26 PM
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

--
-- Dumping data for table `data_absensi`
--

INSERT INTO `data_absensi` (`id_absensi`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `nama_jabatan`, `tanpa_keterangan`) VALUES
(342, '012022', '1358362809', 'Adri', 'Laki-Laki', 'Dokter', 3),
(343, '012022', '1358362814', 'Ahtar', 'Laki-Laki', 'Dokter', 2),
(344, '012022', '1358362817', 'Alpin', 'Laki-Laki', 'Perekam Medis', 3),
(345, '012022', '1358362818', 'Amru', 'Laki-Laki', 'Ahli Gizi', 4),
(346, '012022', '234234', 'asdfawef', 'Laki-Laki', 'Cleaning Service', 4),
(347, '012022', '1358362802', 'Asep', 'Laki-Laki', 'Apoteker', 2),
(348, '012022', '23434235', 'asfdwaef', 'Perempuan', 'Ahli Gizi', 3),
(349, '012022', '1358362811', 'Dapa', 'Laki-Laki', 'Ahli Gizi', 4),
(350, '012022', '1358362816', 'Farchan', 'Laki-Laki', 'Ahli Gizi', 3),
(351, '012022', '1358362801', 'Galang', 'Laki-Laki', 'Dokter', 0),
(352, '012022', '1358362804', 'Gilang', 'Laki-Laki', 'Radiografer', 0),
(353, '012022', '1358362821', 'Gina', 'Perempuan', 'Cleaning Service', 3),
(354, '012022', '1358362810', 'Hanafi', 'Laki-Laki', 'Perekam Medis', 0),
(355, '012022', '1358362819', 'Julaeha', 'Perempuan', 'Cleaning Service', 4),
(356, '012022', '1358362824', 'Junet', 'Laki-Laki', 'Perawat', 0),
(357, '012022', '1358362823', 'Kiara', 'Perempuan', 'Apoteker', 0),
(358, '012022', '54635', 'safwf', 'Laki-Laki', 'Radiografer', 0),
(359, '012022', '324234', 'sdafawf', 'Laki-Laki', 'Cleaning Service', 0),
(360, '012022', '43242', 'sdfaswf', 'Laki-Laki', 'Perekam Medis', 4),
(361, '012022', '1358362815', 'Sony', 'Laki-Laki', 'Apoteker', 4),
(362, '012022', '1358362822', 'Suryani', 'Perempuan', 'Dokter', 0),
(363, '012022', '1358362820', 'Turu', 'Laki-Laki', 'Apoteker', 0),
(364, '012022', '1358362805', 'Wali', 'Laki-Laki', 'Cleaning Service', 3),
(365, '012022', '1358362812', 'Willy', 'Laki-Laki', 'Apoteker', 0),
(366, '012022', '1358362807', 'Yana', 'Laki-Laki', 'Perekam Medis', 0),
(367, '012022', '1358362806', 'Yani', 'Perempuan', 'Cleaning Service', 4),
(368, '012022', '1358362813', 'Yudha', 'Laki-Laki', 'Radiografer', 4),
(369, '012022', '1358362808', 'Yunus', 'Laki-Laki', 'Cleaning Service', 0),
(370, '012022', '1358362803', 'Zeta', 'Perempuan', 'Ahli Gizi', 0),
(371, '022022', '1358362809', 'Adri', 'Laki-Laki', 'Dokter', 3),
(372, '022022', '1358362814', 'Ahtar', 'Laki-Laki', 'Dokter', 0),
(373, '022022', '1358362817', 'Alpin', 'Laki-Laki', 'Perekam Medis', 0),
(374, '022022', '1358362818', 'Amru', 'Laki-Laki', 'Ahli Gizi', 0),
(375, '022022', '234234', 'asdfawef', 'Laki-Laki', 'Cleaning Service', 2),
(376, '022022', '1358362802', 'Asep', 'Laki-Laki', 'Apoteker', 0),
(377, '022022', '23434235', 'asfdwaef', 'Perempuan', 'Ahli Gizi', 0),
(378, '022022', '1358362811', 'Dapa', 'Laki-Laki', 'Ahli Gizi', 0),
(379, '022022', '1358362816', 'Farchan', 'Laki-Laki', 'Ahli Gizi', 3),
(380, '022022', '1358362801', 'Galang', 'Laki-Laki', 'Dokter', 0),
(381, '022022', '1358362804', 'Gilang', 'Laki-Laki', 'Radiografer', 3),
(382, '022022', '1358362821', 'Gina', 'Perempuan', 'Cleaning Service', 0),
(383, '022022', '1358362810', 'Hanafi', 'Laki-Laki', 'Perekam Medis', 3),
(384, '022022', '1358362819', 'Julaeha', 'Perempuan', 'Cleaning Service', 3),
(385, '022022', '1358362824', 'Junet', 'Laki-Laki', 'Perawat', 0),
(386, '022022', '1358362823', 'Kiara', 'Perempuan', 'Apoteker', 0),
(387, '022022', '54635', 'safwf', 'Laki-Laki', 'Radiografer', 0),
(388, '022022', '324234', 'sdafawf', 'Laki-Laki', 'Cleaning Service', 3),
(389, '022022', '43242', 'sdfaswf', 'Laki-Laki', 'Perekam Medis', 0),
(390, '022022', '1358362815', 'Sony', 'Laki-Laki', 'Apoteker', 0),
(391, '022022', '1358362822', 'Suryani', 'Perempuan', 'Dokter', 2),
(392, '022022', '1358362820', 'Turu', 'Laki-Laki', 'Apoteker', 0),
(393, '022022', '1358362805', 'Wali', 'Laki-Laki', 'Cleaning Service', 0),
(394, '022022', '1358362812', 'Willy', 'Laki-Laki', 'Apoteker', 0),
(395, '022022', '1358362807', 'Yana', 'Laki-Laki', 'Perekam Medis', 0),
(396, '022022', '1358362806', 'Yani', 'Perempuan', 'Cleaning Service', 0),
(397, '022022', '1358362813', 'Yudha', 'Laki-Laki', 'Radiografer', 0),
(398, '022022', '1358362808', 'Yunus', 'Laki-Laki', 'Cleaning Service', 0),
(399, '022022', '1358362803', 'Zeta', 'Perempuan', 'Ahli Gizi', 0),
(400, '062022', '1358362809', 'Adri', 'Laki-Laki', 'Dokter', 1),
(401, '062022', '1358362814', 'Ahtar', 'Laki-Laki', 'Dokter', 0),
(402, '062022', '1358362817', 'Alpin', 'Laki-Laki', 'Perekam Medis', 3),
(403, '062022', '1358362818', 'Amru', 'Laki-Laki', 'Ahli Gizi', 4),
(404, '062022', '234234', 'asdfawef', 'Laki-Laki', 'Cleaning Service', 0),
(405, '062022', '1358362802', 'Asep', 'Laki-Laki', 'Apoteker', 4),
(406, '062022', '23434235', 'asfdwaef', 'Perempuan', 'Ahli Gizi', 4),
(407, '062022', '1358362811', 'Dapa', 'Laki-Laki', 'Ahli Gizi', 0),
(408, '062022', '1358362816', 'Farchan', 'Laki-Laki', 'Ahli Gizi', 0),
(409, '062022', '1358362801', 'Galang', 'Laki-Laki', 'Dokter', 0),
(410, '062022', '1358362804', 'Gilang', 'Laki-Laki', 'Radiografer', 0),
(411, '062022', '1358362821', 'Gina', 'Perempuan', 'Cleaning Service', 0),
(412, '062022', '1358362810', 'Hanafi', 'Laki-Laki', 'Perekam Medis', 0),
(413, '062022', '1358362819', 'Julaeha', 'Perempuan', 'Cleaning Service', 0),
(414, '062022', '1358362824', 'Junet', 'Laki-Laki', 'Perawat', 0),
(415, '062022', '1358362823', 'Kiara', 'Perempuan', 'Apoteker', 0),
(416, '062022', '54635', 'safwf', 'Laki-Laki', 'Radiografer', 0),
(417, '062022', '324234', 'sdafawf', 'Laki-Laki', 'Cleaning Service', 0),
(418, '062022', '43242', 'sdfaswf', 'Laki-Laki', 'Perekam Medis', 0),
(419, '062022', '1358362815', 'Sony', 'Laki-Laki', 'Apoteker', 0),
(420, '062022', '1358362822', 'Suryani', 'Perempuan', 'Dokter', 0),
(421, '062022', '1358362820', 'Turu', 'Laki-Laki', 'Apoteker', 0),
(422, '062022', '1358362805', 'Wali', 'Laki-Laki', 'Cleaning Service', 0),
(423, '062022', '1358362812', 'Willy', 'Laki-Laki', 'Apoteker', 0),
(424, '062022', '1358362807', 'Yana', 'Laki-Laki', 'Perekam Medis', 0),
(425, '062022', '1358362806', 'Yani', 'Perempuan', 'Cleaning Service', 0),
(426, '062022', '1358362813', 'Yudha', 'Laki-Laki', 'Radiografer', 0),
(427, '062022', '1358362808', 'Yunus', 'Laki-Laki', 'Cleaning Service', 0),
(428, '062022', '1358362803', 'Zeta', 'Perempuan', 'Ahli Gizi', 0),
(429, '032022', '1358362809', 'Adri', 'Laki-Laki', 'Dokter', 3),
(430, '032022', '1358362814', 'Ahtar', 'Laki-Laki', 'Dokter', 3),
(431, '032022', '1358362817', 'Alpin', 'Laki-Laki', 'Perekam Medis', 4),
(432, '032022', '1358362818', 'Amru', 'Laki-Laki', 'Ahli Gizi', 0),
(433, '032022', '234234', 'asdfawef', 'Laki-Laki', 'Cleaning Service', 0),
(434, '032022', '1358362802', 'Asep', 'Laki-Laki', 'Apoteker', 0),
(435, '032022', '23434235', 'asfdwaef', 'Perempuan', 'Ahli Gizi', 0),
(436, '032022', '1358362811', 'Dapa', 'Laki-Laki', 'Ahli Gizi', 0),
(437, '032022', '1358362816', 'Farchan', 'Laki-Laki', 'Ahli Gizi', 0),
(438, '032022', '1358362801', 'Galang', 'Laki-Laki', 'Dokter', 0),
(439, '032022', '1358362804', 'Gilang', 'Laki-Laki', 'Radiografer', 0),
(440, '032022', '1358362821', 'Gina', 'Perempuan', 'Cleaning Service', 0),
(441, '032022', '1358362810', 'Hanafi', 'Laki-Laki', 'Perekam Medis', 0),
(442, '032022', '1358362819', 'Julaeha', 'Perempuan', 'Cleaning Service', 0),
(443, '032022', '1358362824', 'Junet', 'Laki-Laki', 'Perawat', 0),
(444, '032022', '1358362823', 'Kiara', 'Perempuan', 'Apoteker', 0),
(445, '032022', '54635', 'safwf', 'Laki-Laki', 'Radiografer', 0),
(446, '032022', '324234', 'sdafawf', 'Laki-Laki', 'Cleaning Service', 0),
(447, '032022', '43242', 'sdfaswf', 'Laki-Laki', 'Perekam Medis', 0),
(448, '032022', '1358362815', 'Sony', 'Laki-Laki', 'Apoteker', 0),
(449, '032022', '1358362822', 'Suryani', 'Perempuan', 'Dokter', 0),
(450, '032022', '1358362820', 'Turu', 'Laki-Laki', 'Apoteker', 0),
(451, '032022', '1358362805', 'Wali', 'Laki-Laki', 'Cleaning Service', 0),
(452, '032022', '1358362812', 'Willy', 'Laki-Laki', 'Apoteker', 0),
(453, '032022', '1358362807', 'Yana', 'Laki-Laki', 'Perekam Medis', 0),
(454, '032022', '1358362806', 'Yani', 'Perempuan', 'Cleaning Service', 0),
(455, '032022', '1358362813', 'Yudha', 'Laki-Laki', 'Radiografer', 0),
(456, '032022', '1358362808', 'Yunus', 'Laki-Laki', 'Cleaning Service', 0),
(457, '032022', '1358362803', 'Zeta', 'Perempuan', 'Ahli Gizi', 0);

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
(1, 'Apoteker', 3500000, 500000, 500000),
(6, 'Perawat', 3000000, 500000, 500000),
(8, 'Ahli Gizi', 2500000, 350000, 350000),
(12, 'Radiografer', 4000000, 250000, 250000),
(13, 'Perekam Medis', 3400000, 250000, 250000),
(14, 'Cleaning Service', 3000000, 250000, 250000),
(15, 'Dokter', 5000000, 300000, 300000);

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
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `hak_akses`, `username`, `password`, `photo`) VALUES
(14, '123', 'Admin', 'Laki-Laki', 'Admin', '2022-06-08', 'Pegawai Tetap', 1, 'admin', 'admin', 'w.jpg'),
(17, '1358362801', 'Galang', 'Laki-Laki', 'Dokter', '2022-05-01', 'Pegawai Tetap', 2, 'galang', 'galang', '065119153.jpg'),
(18, '1358362802', 'Asep', 'Laki-Laki', 'Apoteker', '2022-05-01', 'Pegawai Tetap', 2, 'asep', 'asep', '065119158.JPG'),
(19, '1358362803', 'Zeta', 'Perempuan', 'Ahli Gizi', '2022-05-03', 'Pegawai Tetap', 2, 'zeta', 'zeta', '065119178.jpg'),
(20, '1358362804', 'Gilang', 'Laki-Laki', 'Radiografer', '2022-05-04', 'Pegawai Tetap', 2, 'gilang', 'gilang', '065119175.jpg'),
(21, '1358362805', 'Wali', 'Laki-Laki', 'Cleaning Service', '2022-05-04', 'Pegawai Tetap', 2, 'wali', 'wali', '065119168.jpg'),
(23, '1358362806', 'Yani', 'Perempuan', 'Cleaning Service', '2022-05-07', 'Pegawai Tetap', 2, 'yani', 'yani', '065119175.jpg'),
(24, '1358362807', 'Yana', 'Laki-Laki', 'Perekam Medis', '2022-05-07', 'Pegawai Tetap', 2, 'yana', 'yana', '065119164.png'),
(25, '1358362808', 'Yunus', 'Laki-Laki', 'Cleaning Service', '2022-05-07', 'Pegawai Tetap', 2, 'yunus', 'yunus', '065119178.jpg'),
(26, '1358362809', 'Adri', 'Laki-Laki', 'Dokter', '2022-05-09', 'Pegawai Tetap', 2, 'adri', 'adri', '065119158.JPG'),
(27, '1358362810', 'Hanafi', 'Laki-Laki', 'Perekam Medis', '2022-05-09', 'Pegawai Tetap', 2, 'hanafi', 'hanafi', '065119164.png'),
(28, '1358362811', 'Dapa', 'Laki-Laki', 'Ahli Gizi', '2022-05-11', 'Pegawai Tetap', 2, 'dapa', 'dapa', '065119168.jpg'),
(29, '1358362812', 'Willy', 'Laki-Laki', 'Apoteker', '2022-05-10', 'Pegawai Tetap', 2, 'willy', 'willy', '065119175.jpg'),
(30, '1358362813', 'Yudha', 'Laki-Laki', 'Radiografer', '2022-05-11', 'Pegawai Tetap', 2, 'yudha', 'yudha', '065119178.jpg'),
(31, '1358362814', 'Ahtar', 'Laki-Laki', 'Dokter', '2022-05-16', 'Pegawai Tetap', 2, 'ahtar', 'ahtar', '065119153.jpg'),
(32, '1358362815', 'Sony', 'Laki-Laki', 'Apoteker', '2022-05-16', 'Pegawai Tetap', 2, 'sony', 'sony', '065119153.jpg'),
(33, '1358362816', 'Farchan', 'Laki-Laki', 'Ahli Gizi', '2022-05-16', 'Pegawai Tetap', 2, 'farchan', 'farchan', '065119158.JPG'),
(35, '1358362817', 'Alpin', 'Laki-Laki', 'Perekam Medis', '2022-05-18', 'Pegawai Tetap', 2, 'alpin', 'alpin', '065119175.jpg'),
(36, '1358362818', 'Amru', 'Laki-Laki', 'Ahli Gizi', '2022-05-19', 'Pegawai Tetap', 2, 'amru', 'amru', '065119164.png'),
(37, '1358362819', 'Julaeha', 'Perempuan', 'Cleaning Service', '2022-05-19', 'Pegawai Tetap', 2, 'julaeha', 'julaeha', '065119168.jpg'),
(38, '1358362820', 'Turu', 'Laki-Laki', 'Apoteker', '2022-05-20', 'Pegawai Tetap', 2, 'turu', 'turu', '065119158.JPG'),
(39, '1358362821', 'Gina', 'Perempuan', 'Cleaning Service', '2022-05-23', 'Pegawai Tetap', 2, 'gina', 'gina', '065119164.png'),
(40, '1358362822', 'Suryani', 'Perempuan', 'Dokter', '2022-05-23', 'Pegawai Tetap', 2, 'suryani', 'suryani', '065119175.jpg'),
(41, '1358362823', 'Kiara', 'Perempuan', 'Apoteker', '2022-05-25', 'Pegawai Tetap', 2, 'kiara', 'kiara', '065119178.jpg'),
(42, '1358362824', 'Junet', 'Laki-Laki', 'Perawat', '2022-05-26', 'Pegawai Tetap', 2, 'junet', 'junet', '065119153.jpg'),
(45, '324234', 'sdafawf', 'Laki-Laki', 'Cleaning Service', '2022-06-13', 'Pegawai Tetap', 2, 'afwaf', 'aswfw', '065119153.jpg'),
(46, '234234', 'asdfawef', 'Laki-Laki', 'Cleaning Service', '2022-06-14', 'Pegawai Tetap', 2, 'asfwf3432', 'gawegw', '065119158.JPG'),
(47, '43242', 'sdfaswf', 'Laki-Laki', 'Perekam Medis', '2022-06-13', 'Pegawai Tetap', 2, 'safwef', 'wafewag', '065119164.png'),
(48, '54635', 'safwf', 'Laki-Laki', 'Radiografer', '2022-06-13', 'Pegawai Tetap', 2, 'sdafwaf', 'waefwaef', '065119175.jpg'),
(49, '23434235', 'asfdwaef', 'Perempuan', 'Ahli Gizi', '2022-06-13', 'Pegawai Tetap', 2, 'sdfasf342352', 'wagweagw5325', '065119168.jpg');

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
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `nama_portfolio`, `deskripsi`) VALUES
(1, 'Fasilitas Pelayanan', 'Lebih dari 5 fasilitas. Didukung oleh para ahli dibidangnya demi memberikan anda layanan kesehatan yang baik dan profesional.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio1`
--

CREATE TABLE `portfolio1` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio1`
--

INSERT INTO `portfolio1` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Medical Check Up', 'Memonitor Kondisi Kesehatan Anda.', 'Medical Check Up Rumah Sakit Jakarta siap membantu untuk memonitor kondisi kesehatan anda dari waktu ke waktu, mendeteksi dini berbagai penyakit seperti diabetes mellitus, penyakit jantung koroner, stroke, kanker, dll. Serta memberi anjuran untuk pencegahan dan tindak lanjut penanganan berbagai penyakit.', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio2`
--

CREATE TABLE `portfolio2` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio2`
--

INSERT INTO `portfolio2` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Laboratorium', 'Cepat dan Akurat.', 'Laboratorium RS Jakarta merupakan unit pelayanan diagnostik dengan pelayanan selama 24 jam dan didukung oleh tenaga profesional berupa dokter dan paramedis yang berpengalaman di bidangnya. Hasil laporan laboratorium dapat diperoleh dengan cepat dan akurat, sehingga memudahkan pasien dalam menjalankan pemeriksaan.', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio3`
--

CREATE TABLE `portfolio3` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio3`
--

INSERT INTO `portfolio3` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Farmasi', 'Obat-obatan dan Alat Kesehatan', 'Dalam memberikan pelayanan terbaik, Rumah Sakit Jakarta dilengkapi instalasi farmasi yang beroperasi selama 24 jam, sehingga dapat memudahkan pasien mendapatkan obat-obatan dan alat kesehatan yang dibutuhkan.', '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio4`
--

CREATE TABLE `portfolio4` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio4`
--

INSERT INTO `portfolio4` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Hemodialisasi', 'Pelayanan Cuci Darah', 'Unit Hemodialisa merupakan salah satu unit pelayanan RS Jakarta yang diperuntukkan bagi penderita gagal ginjal dalam melakukan cuci darah yang didukung kerjasama tim yang beranggotakan dokter umum yang bersertifikat HD, dokter penyakit dalam, dokter nefrologi, serta perawat yang terampil, mahir dan bersertifikat.', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio5`
--

CREATE TABLE `portfolio5` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` varchar(300) NOT NULL DEFAULT '0',
  `content` varchar(1000) NOT NULL DEFAULT '0',
  `photo` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio5`
--

INSERT INTO `portfolio5` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Rawat Inap', 'Pelayanan untuk Observasi, dan Lain-lain.', 'Pelayanan terhadap pasien yang masuk ke rumah sakit dengan menggunakan tempat tidur untuk keperluan observasi, diagnosis, terapi, rehabilitasi medik dan penunjang medik lainnya.', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio6`
--

CREATE TABLE `portfolio6` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` varchar(300) NOT NULL DEFAULT '0',
  `content` varchar(1000) NOT NULL DEFAULT '0',
  `photo` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio6`
--

INSERT INTO `portfolio6` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Radiologi', 'Menggunakan Teknologi Canggih', 'Keunggulan berupa kapasitas yang cukup tinggi yaitu 500 mA drngan 150 Kv dan ditopang dengan adanya alat khusus organ-organ yang panjang (long view) hingga kami dapat memperlihatkan gambaran tulang belakang dari vertebra cervical hingga vertebra coccygis atau memperlihatkan gambaran dari alat gerak bawah dari hip join hingga sendi.', '12.png');

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
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Galang Hanafi', '065119164', 'g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team2`
--

CREATE TABLE `team2` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team2`
--

INSERT INTO `team2` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Daffa Ksatria Firdaus', '065119168', 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team3`
--

CREATE TABLE `team3` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team3`
--

INSERT INTO `team3` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Willyman Sopian', '065119175', 'w.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team4`
--

CREATE TABLE `team4` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team4`
--

INSERT INTO `team4` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Okter Pra Yudha', '065119178', 'y.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team5`
--

CREATE TABLE `team5` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team5`
--

INSERT INTO `team5` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Muchammad Amru Al-Chakim', '065119167', 'a.jpg');

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
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

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
-- Indexes for table `portfolio3`
--
ALTER TABLE `portfolio3`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio4`
--
ALTER TABLE `portfolio4`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio5`
--
ALTER TABLE `portfolio5`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio6`
--
ALTER TABLE `portfolio6`
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
-- Indexes for table `team5`
--
ALTER TABLE `team5`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absensi`
--
ALTER TABLE `data_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `portfolio3`
--
ALTER TABLE `portfolio3`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio4`
--
ALTER TABLE `portfolio4`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio5`
--
ALTER TABLE `portfolio5`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio6`
--
ALTER TABLE `portfolio6`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- AUTO_INCREMENT for table `team5`
--
ALTER TABLE `team5`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
