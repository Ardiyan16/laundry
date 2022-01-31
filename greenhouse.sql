-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 04:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasiltanams`
--

CREATE TABLE `hasiltanams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rangkaian` int(11) NOT NULL,
  `jumlah_panen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tgl_panen` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasiltanams`
--

INSERT INTO `hasiltanams` (`id`, `id_rangkaian`, `jumlah_panen`, `id_pegawai`, `tgl_panen`, `created_at`, `updated_at`) VALUES
(1, 2, '125 buah', 1, '2022-01-02', '2021-12-31 20:42:22', '2022-01-01 03:48:05'),
(3, 3, '100 buah', 4, '2022-01-05', '2022-01-01 04:28:52', '2022-01-01 04:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_29_091934_create_penjadwalans_table', 2),
(6, '2021_12_29_234612_create_pegawais_table', 3),
(7, '2021_12_30_133113_create_rangkaians_table', 4),
(8, '2021_12_31_215921_create_hasiltanams_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama`, `alamat`, `no_telp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Bawik Ardiyan Ramadhan', 'Jl Raya Puger Desa Grenden Dusun Kapuran', '082132881252', 'ardiyanramadhan4@gmail.com', 'pegawai1', '2021-12-30 00:36:38', '2021-12-30 00:36:38'),
(3, 'Moh Ainun Najib', 'puger', '087156789100', 'najib@gmail.com', '123', '2021-12-31 20:31:26', '2021-12-31 20:31:26'),
(4, 'Annisa Nur Isfani', 'Bangsalsari Jember', '086517826345', 'annisa@gmail.com', 'pegawai 2', '2021-12-31 20:31:55', '2021-12-31 20:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalans`
--

CREATE TABLE `penjadwalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rangkaian` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjadwalans`
--

INSERT INTO `penjadwalans` (`id`, `kegiatan`, `tanggal`, `jam`, `keterangan`, `id_rangkaian`, `status`, `created_at`, `updated_at`) VALUES
(5, 'pemeraman', '2022-01-01', '09:00:00', 'pemeraman tanaman', 2, 'selesai', '2021-12-31 06:46:00', '2021-12-31 07:40:21'),
(6, 'persemaian', '2022-01-02', '09:00:00', 'persemian tanaman', 2, 'selesai', '2022-01-01 08:20:23', '2022-01-01 08:20:23'),
(7, 'penanaman', '2022-01-02', '10:00:00', 'penanaman bos', 2, 'selesai', '2022-01-01 08:23:08', '2022-01-01 08:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rangkaians`
--

CREATE TABLE `rangkaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rangkaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rangkaians`
--

INSERT INTO `rangkaians` (`id`, `rangkaian`, `created_at`, `updated_at`) VALUES
(2, 'penanaman 1', '2021-12-31 06:09:06', '2021-12-31 06:09:06'),
(3, 'penanaman 2', '2021-12-31 06:09:18', '2021-12-31 06:09:18'),
(4, 'prosen tanam 3', '2022-01-01 08:32:46', '2022-01-01 08:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$0It39oyTXDHBlSMHiJWD7.FE/a6AMptbRc9v1pMNKrNF1XzN/c3oi', 'CjcABOkbRkocDjlujHGVz4CvS2iWMYBjnG8fVkBz11ztu1OCdgvZcxpUHu1t', '2021-12-27 04:41:44', '2021-12-27 04:41:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasiltanams`
--
ALTER TABLE `hasiltanams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjadwalans`
--
ALTER TABLE `penjadwalans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rangkaians`
--
ALTER TABLE `rangkaians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasiltanams`
--
ALTER TABLE `hasiltanams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjadwalans`
--
ALTER TABLE `penjadwalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rangkaians`
--
ALTER TABLE `rangkaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
