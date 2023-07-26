-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 06:30 AM
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
-- Database: `itera_qurban`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `token`, `last_login`) VALUES
(1, 'admin', '$2y$10$5OGSttwvHPWdfaNQ.GsUYOxZ3Norqmf5YyYPBq7NBki/oEdDiaghe', 'Albab Jannatul Firdaus', 'albab.119140097@student.itera.ac.id', '1cd59df70e001fe403247d1faa5a22ae', '2023-05-13 04:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `dataqurban`
--

CREATE TABLE `dataqurban` (
  `id_dataqurban` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) NOT NULL,
  `jumlah` double NOT NULL DEFAULT 0,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_pemesanan` int(5) UNSIGNED NOT NULL,
  `id_pendaftaran` int(5) UNSIGNED NOT NULL,
  `id_user` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) UNSIGNED NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_galeri`, `gambar_galeri`, `created_at`, `updated_at`) VALUES
(1, 'Hewan Qurban datang', '1689969223_8752a01b562a1444a7eb.jpg', '2023-07-21 19:53:43', '2023-07-21 19:53:43'),
(3, 'Hewan Qurban disembelih', '1689969381_883c6a925a3813738f6b.jpg', '2023-07-21 19:56:21', '2023-07-21 19:56:21'),
(4, 'Pembagian Daging', '1689970205_7b2244557c1b99947e61.jpg', '2023-07-21 20:10:05', '2023-07-21 20:10:05'),
(5, 'Cincang', '1689970241_552c6cbb90149788473c.jpg', '2023-07-21 20:10:41', '2023-07-21 20:10:41'),
(6, 'Jagal', '1689970289_385b7ef8d554a53de07f.jpg', '2023-07-21 20:11:29', '2023-07-21 20:11:29'),
(7, 'Pemotongan', '1689970686_12a7981fba9df177c0c4.jpg', '2023-07-21 20:18:06', '2023-07-21 20:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-05-13-041829', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1683951896, 1),
(2, '2023-05-31-023644', 'App\\Database\\Migrations\\ModifyColumnTokenAdmin', 'default', 'App', 1685500762, 2),
(3, '2023-05-31-024912', 'App\\Database\\Migrations\\ModifyColumnEmailAdmin', 'default', 'App', 1685501397, 3),
(4, '2023-06-03-041641', 'App\\Database\\Migrations\\User', 'default', 'App', 1685767007, 4),
(5, '2023-06-08-061955', 'App\\Database\\Migrations\\Tabungan', 'default', 'App', 1686281584, 5),
(6, '2023-07-12-125305', 'App\\Database\\Migrations\\Pemesanan', 'default', 'App', 1689167571, 6),
(7, '2023-07-13-143843', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1689259453, 7),
(8, '2023-07-13-152622', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1689262013, 8),
(9, '2023-07-15-141148', 'App\\Database\\Migrations\\Tabungan', 'default', 'App', 1689430421, 9),
(10, '2023-07-19-181037', 'App\\Database\\Migrations\\Dataqurban', 'default', 'App', 1689790493, 10),
(11, '2023-07-20-135852', 'App\\Database\\Migrations\\Penerima', 'default', 'App', 1689861673, 11),
(12, '2023-07-21-191943', 'App\\Database\\Migrations\\Galeri', 'default', 'App', 1689967229, 12),
(13, '2023-07-23-172901', 'App\\Database\\Migrations\\Dataqurban', 'default', 'App', 1690133365, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email_pemesan` varchar(255) NOT NULL,
  `alamat_pemesan` varchar(255) NOT NULL,
  `instansi_pemesan` varchar(255) NOT NULL,
  `paket_pemesan` varchar(255) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `no_telepon`, `email_pemesan`, `alamat_pemesan`, `instansi_pemesan`, `paket_pemesan`, `bukti_transfer`, `tanggal_transfer`, `created_at`, `updated_at`) VALUES
(6, 'Albab', '0876345333', 'albab@gmail.com', 'Lampung', 'UIN LAMPUNG', 'A. Rp. 2.500.000,-', '1689427331_d7c199841d40bedbd8f2.jpg', '2023-07-12', NULL, '2023-07-15 13:22:11'),
(13, 'Albab Jannatul Firdaus', '0862672427', 'albab@gmail.com', 'Bandar Lampung', 'PSW', 'B. Rp. 3.000.000,-', '1689402048_6c23f5cabb6702af44a2.jpg', '2023-07-15', '2023-07-15 06:20:48', '2023-07-15 06:20:48'),
(15, 'Bayu', '08465879765', 'bayu@gmail.com', 'Bandung', 'ITB', 'A. Rp. 2.500.000,-', '1689860955_355f30ac950b9a272e16.png', '2023-07-20', '2023-07-20 13:49:15', '2023-07-20 13:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(5) UNSIGNED NOT NULL,
  `nama_pendaftar` varchar(255) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `email_pendaftar` varchar(255) NOT NULL,
  `alamat_pendaftar` varchar(255) NOT NULL,
  `instansi_pendaftar` varchar(255) NOT NULL,
  `jenis_qurban` varchar(255) NOT NULL,
  `bukti_gambar` varchar(255) NOT NULL,
  `tanggal_antar` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama_pendaftar`, `no_tlpn`, `email_pendaftar`, `alamat_pendaftar`, `instansi_pendaftar`, `jenis_qurban`, `bukti_gambar`, `tanggal_antar`, `created_at`, `updated_at`) VALUES
(1, 'Albab', '0828528725578', 'Albab@gmail.com', 'Sukarame', 'ITERA', 'Domba', '1689427394_76ea81e524003ca77c5d.jpg', '2023-07-11', '2023-07-13 15:43:54', '2023-07-15 13:23:14'),
(8, 'Pillio', '02782626', 'pil@gmail.com', 'Sukarame', 'ITERA', 'Domba', '1689427724_beab7f7dda0999f13b1d.png', '2023-07-04', '2023-07-15 13:28:44', '2023-07-15 13:28:44'),
(9, 'Hasto', '092782582', 'hasto@gmail.com', 'Bandung', 'SALMAN ITB', 'Sapi', '1689966571_fc4e3986406b2e1184c8.png', '2023-07-22', '2023-07-21 19:09:31', '2023-07-21 19:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` int(10) UNSIGNED NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `instansi_penerima` varchar(255) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama_penerima`, `instansi_penerima`, `alamat_penerima`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Jono', 'Eksternal', 'Depan ITERA', 'Warga Lokal', NULL, NULL),
(2, 'Budi', 'Dosen', 'Way Huwi', 'Dosen IF', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(11) UNSIGNED NOT NULL,
  `username_user` varchar(25) NOT NULL,
  `besar_tabungan` varchar(255) NOT NULL,
  `bukti_tabungan` varchar(255) NOT NULL,
  `tgl_tabungan` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `username_user`, `besar_tabungan`, `bukti_tabungan`, `tgl_tabungan`, `created_at`, `updated_at`) VALUES
(1, 'albabjannatul', '333', '1689439364_324cff9c5ace0ddf0eb2.jpg', '2023-07-15', NULL, NULL),
(3, 'albabjannatul', '500000', '1689753347_1b1e1c99db8f858f1dd2.png', '0000-00-00', NULL, NULL),
(4, 'albabjannatul', '10000', '1689754029_8927a2c9a1f470926b48.jpg', '2023-07-19', NULL, NULL),
(6, 'firdaus', '500000', '1689765328_c77dad82e49816404e04.jpg', '2023-07-19', NULL, NULL),
(7, 'firdaus', '50000', '1689788077_e5f61e81769319a777b0.png', '2023-07-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) UNSIGNED NOT NULL,
  `username_user` varchar(25) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `no_user` int(25) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `target_qurban` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `nama_user`, `email_user`, `no_user`, `alamat_user`, `instansi`, `target_qurban`, `token`, `last_login`) VALUES
(1, 'albabjannatul', '$2y$10$911WVxqaWFiI/OTPHPct/OAfK0g7DGm/Y9G4bwsO3UGElgV6EouN.', 'Albab Jannatul', 'babaljafir@gmail.com', 2147483647, 'Sukarame Bandar Lampung', 'ITERA', 'Rp 3 Juta', '', '2023-06-03 04:45:57'),
(4, 'firdaus', '$2y$10$4KMnGv2YPnWWtGOoj.Bw/eTT/oOh7pK3.kOJM9caA/t4PLelA/zZi', 'Surga Firdaus', 'firdaus@gmail.com', 2147483647, 'Bandar Lampung', 'ITERA', 'B. Rp. 3.000.000,-', NULL, '2023-07-19 11:13:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `dataqurban`
--
ALTER TABLE `dataqurban`
  ADD PRIMARY KEY (`id_dataqurban`),
  ADD KEY `dataqurban_id_pemesanan_foreign` (`id_pemesanan`),
  ADD KEY `dataqurban_id_pendaftaran_foreign` (`id_pendaftaran`),
  ADD KEY `dataqurban_id_user_foreign` (`id_user`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `tabungan_username_foreign` (`username_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dataqurban`
--
ALTER TABLE `dataqurban`
  MODIFY `id_dataqurban` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id_penerima` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataqurban`
--
ALTER TABLE `dataqurban`
  ADD CONSTRAINT `dataqurban_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `dataqurban_id_pendaftaran_foreign` FOREIGN KEY (`id_pendaftaran`) REFERENCES `pendaftaran` (`id_pendaftaran`),
  ADD CONSTRAINT `dataqurban_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `tabungan_username_foreign` FOREIGN KEY (`username_user`) REFERENCES `user` (`username_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
