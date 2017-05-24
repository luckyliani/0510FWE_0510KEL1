-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2017 pada 23.32
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `umur`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'tuyul', '90', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(10) unsigned NOT NULL,
  `jam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `jam`, `hari`, `jumlah_hari`, `created_at`, `updated_at`) VALUES
(3, '14.00', 'kamis', '14', '2017-05-18 01:03:33', '2017-05-18 01:07:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'a', 'baru belajar ', '2017-05-18 04:22:58', '2017-05-18 04:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_paket` int(10) unsigned NOT NULL,
  `id_kelas` int(10) unsigned NOT NULL,
  `id_jadwal` int(10) unsigned NOT NULL,
  `id_supir` int(10) unsigned NOT NULL,
  `id_mobil` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pengguna_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `id_paket`, `id_kelas`, `id_jadwal`, `id_supir`, `id_mobil`, `created_at`, `updated_at`, `pengguna_id`) VALUES
(2, 'kabir', 'solong', 1, 1, 3, 1, 1, '2017-05-18 16:00:00', '2017-05-19 07:58:58', 2),
(9, 'kawe', 'sdasd', 1, 1, 3, 1, 1, '2017-05-19 18:17:34', '2017-05-19 18:17:34', 18),
(10, 'aa', 'aa', 1, 1, 3, 1, 1, '2017-05-19 18:33:12', '2017-05-19 18:33:12', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_17_130121_create_table_user', 1),
('2017_05_17_130152_create_table_kelas', 2),
('2017_05_17_131006_create_table_jadwal', 3),
('2017_05_17_131053_create_table_rute', 4),
('2017_05_17_131141_create_table_supir', 5),
('2017_05_17_131257_create_table_mobil', 6),
('2017_05_17_131354_create_table_paket', 7),
('2017_05_17_131629_create_table_member', 8),
('2017_05_17_131913_create_table_users', 9),
('2017_05_17_132036_create_table_transaksi', 10),
('2017_05_19_115811_pengguna', 11),
('2017_05_19_115835_admin', 12),
('2017_05_19_120629_add_id', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_transmisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_plat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `jenis_transmisi`, `no_plat`, `created_at`, `updated_at`) VALUES
(1, 'Ayla', 'Otomatis', 'KT 1534 UU', '2017-05-18 04:46:37', '2017-05-18 04:46:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_rute` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`, `id_rute`, `created_at`, `updated_at`) VALUES
(1, 'Premium', '1300000', 1, '2017-05-18 07:11:44', '2017-05-18 07:13:43'),
(2, 'denny', '2001', 2, '2017-05-21 04:39:42', '2017-05-21 04:39:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', '3RNdISM7LpHbHVHEAx6feiMJUwrlNkHZcSanvsUYayz8bOhD8n1hC8rq7O8U', NULL, '2017-05-21 04:15:27'),
(2, 'kabir', '1234', 'member', 'lO3zrQovOhRD11VyqLRJ9iklZlsreabjpDgglFvAOTIJ28SfloDg504vHp7s', '2017-05-18 16:00:00', '2017-05-21 03:45:25'),
(17, '', '', 'member', NULL, '2017-05-19 18:14:14', '2017-05-19 18:14:14'),
(18, '', '', 'member', NULL, '2017-05-19 18:17:34', '2017-05-19 18:17:34'),
(19, '', '', 'member', NULL, '2017-05-19 18:26:21', '2017-05-19 18:26:21'),
(20, '', '', 'member', NULL, '2017-05-19 18:31:21', '2017-05-19 18:31:21'),
(21, '', '', 'member', NULL, '2017-05-19 18:33:12', '2017-05-19 18:33:12'),
(22, 'yuni', '111', 'member', NULL, '2017-05-19 18:54:50', '2017-05-19 18:54:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
`id` int(10) unsigned NOT NULL,
  `start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `start`, `finish`, `created_at`, `updated_at`) VALUES
(1, 'Jl.Aminah Syukur', 'Jl.Kebayoran Baru', '2017-05-18 03:35:41', '2017-05-18 03:35:55'),
(2, 'disini', 'disana', '2017-05-19 02:29:24', '2017-05-19 02:29:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE IF NOT EXISTS `supir` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id`, `nama`, `sim`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Amat', 'A', 'Jl. Gerliya RT.25', '2017-05-18 03:51:12', '2017-05-18 03:51:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id` int(10) unsigned NOT NULL,
  `id_member` int(10) unsigned NOT NULL,
  `id_paket` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_member`, `id_paket`, `created_at`, `updated_at`) VALUES
(3, 2, 1, '2017-05-19 10:41:18', '2017-05-19 10:41:18'),
(4, 2, 1, '2017-05-19 11:14:25', '2017-05-19 11:14:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_member` int(10) unsigned NOT NULL,
  `hak_akses` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD KEY `admin_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`), ADD KEY `member_id_paket_foreign` (`id_paket`), ADD KEY `member_id_kelas_foreign` (`id_kelas`), ADD KEY `member_id_jadwal_foreign` (`id_jadwal`), ADD KEY `member_id_supir_foreign` (`id_supir`), ADD KEY `member_id_mobil_foreign` (`id_mobil`), ADD KEY `member_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id`), ADD KEY `paket_id_rute_foreign` (`id_rute`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id`), ADD KEY `transaksi_id_member_foreign` (`id_member`), ADD KEY `transaksi_id_paket_foreign` (`id_paket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `users_id_member_foreign` (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
ADD CONSTRAINT `member_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `member_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `member_id_mobil_foreign` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `member_id_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `member_id_supir_foreign` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `member_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
ADD CONSTRAINT `paket_id_rute_foreign` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_id_member_foreign` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `transaksi_id_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_id_member_foreign` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
