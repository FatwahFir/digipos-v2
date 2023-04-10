-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 06:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digi_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'super Admin', 1, '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(2, 'Admin', 5, '2023-01-04 19:39:51', '2023-01-04 19:39:51'),
(3, 'Admin  kedua', 6, '2023-01-05 21:18:47', '2023-01-05 21:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `admin_puskesmas`
--

CREATE TABLE `admin_puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puskesmas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_puskesmas`
--

INSERT INTO `admin_puskesmas` (`id`, `nama`, `phone`, `user_id`, `puskesmas_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin Puskesmas', '+62234351629', 2, 1, '2023-01-04 19:37:33', '2023-01-04 19:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `bidan`
--

CREATE TABLE `bidan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puskesmas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidan`
--

INSERT INTO `bidan` (`id`, `nama`, `phone`, `user_id`, `puskesmas_id`, `created_at`, `updated_at`) VALUES
(1, 'Bidan', '+62', 4, 1, '2023-01-04 19:37:33', '2023-01-04 19:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `nama_desa`, `id_kecamatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Leuwigede', 1, NULL, NULL, NULL);

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
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `no_pemeriksaan_gizi` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pb_tb` double(8,2) NOT NULL,
  `bb` double(8,2) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `cara_ukur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asi_eks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vit_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status_gizi` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`no_pemeriksaan_gizi`, `usia`, `pb_tb`, `bb`, `tgl_periksa`, `cara_ukur`, `asi_eks`, `vit_a`, `validasi`, `id_status_gizi`, `id_pasien`, `created_at`, `updated_at`) VALUES
('G2023010200001', '3', 59.00, 7.50, '2023-01-02', '1', '1', '1', '1', 1, 1, NULL, NULL),
('G2023010500001', '20', 61.00, 7.00, '2023-01-05', '1', '1', '1', '1', 2, 2, '2023-01-04 22:11:01', '2023-01-05 20:39:33'),
('G2023010600001', '20', 61.00, 8.00, '2023-01-06', '1', '1', '1', '1', 4, 2, '2023-01-05 19:31:50', '2023-01-05 19:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id`, `tgl_imunisasi`, `id_jenis`, `id_pasien`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '2023-01-05', 2, 1, '2023-01-04 22:01:52', '2023-01-04 22:01:52', NULL),
(5, '2023-01-06', 2, 2, '2023-01-05 20:00:25', '2023-01-05 20:00:25', NULL),
(6, '2023-01-06', 1, 2, '2023-01-05 20:01:07', '2023-01-05 20:01:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_imunisasi`
--

CREATE TABLE `jenis_imunisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_imunisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_imunisasi`
--

INSERT INTO `jenis_imunisasi` (`id`, `nama_imunisasi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Polio', NULL, '2023-01-05 20:00:49', NULL),
(2, 'Antraks', '2023-01-04 22:01:35', '2023-01-04 22:01:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `posyandu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`id`, `nama`, `phone`, `user_id`, `posyandu_id`, `created_at`, `updated_at`) VALUES
(1, 'Kader', '+62', 3, 1, '2023-01-04 19:37:33', '2023-01-04 19:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `nama_kecamatan`, `kodepos`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Widasari', '45271', NULL, NULL, NULL),
(2, 'Jatibarang', '45282', '2023-01-05 19:52:09', '2023-01-05 19:52:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keluargas`
--

CREATE TABLE `keluargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_kk` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ayah` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ekonomi` enum('1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluargas`
--

INSERT INTO `keluargas` (`id`, `no_kk`, `nik_ayah`, `nik_ibu`, `nama_ayah`, `nama_ibu`, `no_telp`, `status_ekonomi`, `alamat`, `id_desa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '21030873671', '2130048123', '2134048123', 'Atmaedi', 'Kuneri', '083821177545', '1', 'Bojong Jati', 1, NULL, NULL, NULL),
(2, '2103030910340', '2108939489231', '203080932323', 'Atmaedi', 'Kuneri', '083821177545', '2', 'Leuwigede', 1, '2023-01-04 22:05:12', '2023-01-04 22:05:12', NULL);

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
(5, '2022_10_01_094820_create_permission_tables', 1),
(6, '2022_10_27_022830_create_kecamatans_table', 1),
(7, '2022_10_27_105028_create_desas_table', 1),
(8, '2022_10_28_054522_create_keluargas_table', 1),
(9, '2022_10_29_093247_create_posyandus_table', 1),
(10, '2022_10_30_022125_pasien', 1),
(11, '2022_10_31_075421_puskesmas', 1),
(12, '2022_11_01_121754_jenis_imunisasi', 1),
(13, '2022_11_02_045630_gizi', 1),
(14, '2022_11_02_045938_status_gizi', 1),
(15, '2022_11_02_050103_imunisasi', 1),
(16, '2022_11_02_050458_standar_who', 1),
(17, '2022_11_02_060905_jadwal', 1),
(18, '2022_11_28_064403_kader_table', 1),
(19, '2022_11_28_091014_bidan_table', 1),
(20, '2022_11_28_091436_admin_table', 1),
(21, '2022_11_30_135310_admin_puskesmas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_anak` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_lahir` double NOT NULL,
  `pb_lahir` double NOT NULL,
  `kia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` bigint(20) UNSIGNED NOT NULL,
  `id_posyandu` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama_anak`, `tgl_lahir`, `jk`, `anak_ke`, `bb_lahir`, `pb_lahir`, `kia`, `imd`, `no_kk`, `id_posyandu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '21030873679', 'Khoirul', '2022-10-01', 'Laki-Laki', '1', 7, 55, '1', '1', 21030873671, 1, NULL, NULL, NULL),
(2, '210230084023', 'Fatwah', '2021-05-05', 'Laki-Laki', '2', 3, 50, '1', '1', 2103030910340, 1, '2023-01-04 22:05:12', '2023-01-04 22:05:12', NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read dashboard', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(2, 'read wilayah', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(3, 'create wilayah', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(4, 'update wilayah', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(5, 'delete wilayah', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(6, 'read puskesmas', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(7, 'create puskesmas', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(8, 'update puskesmas', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(9, 'delete puskesmas', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(10, 'read gizi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(11, 'create gizi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(12, 'update gizi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(13, 'delete gizi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(14, 'read posyandu', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(15, 'create posyandu', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(16, 'update posyandu', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(17, 'delete posyandu', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(18, 'read bidan', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(19, 'create bidan', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(20, 'update bidan', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(21, 'delete bidan', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(22, 'read kader', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(23, 'create kader', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(24, 'update kader', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(25, 'delete kader', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(26, 'read anak', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(27, 'create anak', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(28, 'update anak', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(29, 'delete anak', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(30, 'read imunisasi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(31, 'create imunisasi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(32, 'update imunisasi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(33, 'delete imunisasi', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posyandus`
--

CREATE TABLE `posyandus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_posyandu` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` bigint(20) UNSIGNED NOT NULL,
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posyandus`
--

INSERT INTO `posyandus` (`id`, `nama_posyandu`, `rw`, `id_desa`, `id_puskesmas`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kiki Posyandu', '5', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama_puskesmas`, `alamat`, `id_kecamatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Puskesmas Widasari', 'Jalan By Pass Widasari 45271 Indramayu Jawa Barat', 1, NULL, NULL, NULL),
(2, 'Puskesmas Jatibarang', 'Jatibarang', 2, '2023-01-05 19:52:34', '2023-01-05 19:52:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(2, 'admin puskesmas', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(3, 'kader', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(4, 'bidan', 'web', '2023-01-04 19:37:33', '2023-01-04 19:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 3),
(12, 3),
(13, 3),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3);

-- --------------------------------------------------------

--
-- Table structure for table `standar_who`
--

CREATE TABLE `standar_who` (
  `id_standar_who` int(10) UNSIGNED NOT NULL,
  `parameter` double(8,2) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sd_min_tiga` double(8,2) NOT NULL,
  `sd_min_dua` double(8,2) NOT NULL,
  `sd_min_satu` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `sd_plus_tiga` double(8,2) NOT NULL,
  `sd_plus_dua` double(8,2) NOT NULL,
  `sd_plus_satu` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standar_who`
--

INSERT INTO `standar_who` (`id_standar_who`, `parameter`, `jk`, `kategori`, `sd_min_tiga`, `sd_min_dua`, `sd_min_satu`, `median`, `sd_plus_tiga`, `sd_plus_dua`, `sd_plus_satu`, `created_at`, `updated_at`) VALUES
(1, 45.00, 'Laki-Laki', 'BB/PB', 1.90, 2.00, 2.20, 2.40, 3.30, 3.00, 2.70, NULL, NULL),
(2, 45.50, 'Laki-Laki', 'BB/PB', 1.90, 2.10, 2.30, 2.50, 3.40, 3.10, 2.80, NULL, NULL),
(3, 46.00, 'Laki-Laki', 'BB/PB', 2.00, 2.20, 2.40, 2.60, 3.50, 3.10, 2.90, NULL, NULL),
(4, 46.50, 'Laki-Laki', 'BB/PB', 2.10, 2.30, 2.50, 2.70, 3.60, 3.20, 3.00, NULL, NULL),
(5, 47.00, 'Laki-Laki', 'BB/PB', 2.10, 2.30, 2.50, 2.80, 3.70, 3.30, 3.00, NULL, NULL),
(6, 47.50, 'Laki-Laki', 'BB/PB', 2.20, 2.40, 2.60, 2.90, 3.80, 3.40, 3.10, NULL, NULL),
(7, 48.00, 'Laki-Laki', 'BB/PB', 2.30, 2.50, 2.70, 2.90, 3.90, 3.60, 3.20, NULL, NULL),
(8, 48.50, 'Laki-Laki', 'BB/PB', 2.30, 2.60, 2.80, 3.00, 4.00, 3.70, 3.30, NULL, NULL),
(9, 49.00, 'Laki-Laki', 'BB/PB', 2.40, 2.60, 2.90, 3.10, 4.20, 3.80, 3.40, NULL, NULL),
(10, 49.50, 'Laki-Laki', 'BB/PB', 2.50, 2.70, 3.00, 3.20, 4.30, 3.90, 3.50, NULL, NULL),
(11, 50.00, 'Laki-Laki', 'BB/PB', 2.60, 2.80, 3.00, 3.30, 4.40, 4.00, 3.60, NULL, NULL),
(12, 50.50, 'Laki-Laki', 'BB/PB', 2.70, 2.90, 3.10, 3.40, 4.50, 4.10, 3.80, NULL, NULL),
(13, 51.00, 'Laki-Laki', 'BB/PB', 2.70, 3.00, 3.20, 3.50, 4.70, 4.20, 3.90, NULL, NULL),
(14, 51.50, 'Laki-Laki', 'BB/PB', 2.80, 3.10, 3.30, 3.60, 4.80, 4.40, 4.00, NULL, NULL),
(15, 52.00, 'Laki-Laki', 'BB/PB', 2.90, 3.20, 3.40, 3.80, 5.00, 4.50, 4.10, NULL, NULL),
(16, 52.50, 'Laki-Laki', 'BB/PB', 3.00, 3.30, 3.50, 3.90, 5.10, 4.60, 4.20, NULL, NULL),
(17, 53.00, 'Laki-Laki', 'BB/PB', 3.10, 3.40, 3.60, 4.00, 5.30, 4.80, 4.40, NULL, NULL),
(18, 53.50, 'Laki-Laki', 'BB/PB', 3.20, 3.50, 3.70, 4.10, 5.40, 4.90, 4.50, NULL, NULL),
(19, 54.00, 'Laki-Laki', 'BB/PB', 3.30, 3.60, 3.80, 4.30, 5.60, 5.10, 4.70, NULL, NULL),
(20, 54.50, 'Laki-Laki', 'BB/PB', 3.40, 3.70, 4.00, 4.40, 5.80, 5.30, 4.80, NULL, NULL),
(21, 55.00, 'Laki-Laki', 'BB/PB', 3.60, 3.80, 4.20, 4.50, 6.00, 5.40, 5.00, NULL, NULL),
(22, 55.50, 'Laki-Laki', 'BB/PB', 3.70, 4.00, 4.30, 4.70, 6.10, 5.60, 5.10, NULL, NULL),
(23, 56.00, 'Laki-Laki', 'BB/PB', 3.80, 4.10, 4.40, 4.80, 6.30, 5.80, 5.30, NULL, NULL),
(24, 56.50, 'Laki-Laki', 'BB/PB', 3.90, 4.20, 4.60, 5.00, 6.50, 5.90, 5.40, NULL, NULL),
(25, 57.00, 'Laki-Laki', 'BB/PB', 4.00, 4.30, 4.70, 5.10, 6.70, 6.10, 5.60, NULL, NULL),
(26, 57.50, 'Laki-Laki', 'BB/PB', 4.10, 4.50, 4.90, 5.30, 6.90, 6.30, 5.70, NULL, NULL),
(27, 58.00, 'Laki-Laki', 'BB/PB', 4.30, 4.60, 5.00, 5.40, 7.10, 6.40, 5.90, NULL, NULL),
(28, 58.50, 'Laki-Laki', 'BB/PB', 4.40, 4.70, 5.10, 5.60, 7.20, 6.60, 6.10, NULL, NULL),
(29, 59.00, 'Laki-Laki', 'BB/PB', 4.50, 4.80, 5.30, 5.70, 7.40, 6.80, 6.20, NULL, NULL),
(30, 59.50, 'Laki-Laki', 'BB/PB', 4.60, 5.00, 5.40, 5.90, 7.60, 7.00, 6.40, NULL, NULL),
(31, 60.00, 'Laki-Laki', 'BB/PB', 4.70, 5.10, 5.50, 6.00, 7.80, 7.10, 6.50, NULL, NULL),
(32, 60.50, 'Laki-Laki', 'BB/PB', 4.80, 5.20, 5.60, 6.10, 8.00, 7.30, 6.70, NULL, NULL),
(33, 61.00, 'Laki-Laki', 'BB/PB', 4.90, 5.30, 5.80, 6.30, 8.10, 7.40, 6.80, NULL, NULL),
(34, 61.50, 'Laki-Laki', 'BB/PB', 5.00, 5.40, 5.90, 6.40, 8.30, 7.60, 7.00, NULL, NULL),
(35, 62.00, 'Laki-Laki', 'BB/PB', 5.10, 5.60, 6.00, 6.50, 8.50, 7.70, 7.10, NULL, NULL),
(36, 62.50, 'Laki-Laki', 'BB/PB', 5.20, 5.70, 6.10, 6.70, 8.60, 7.90, 7.20, NULL, NULL),
(37, 63.00, 'Laki-Laki', 'BB/PB', 5.30, 5.80, 6.20, 6.80, 8.80, 8.00, 7.40, NULL, NULL),
(38, 63.50, 'Laki-Laki', 'BB/PB', 5.40, 5.90, 6.40, 6.90, 8.90, 8.20, 7.50, NULL, NULL),
(39, 64.00, 'Laki-Laki', 'BB/PB', 5.50, 6.00, 6.50, 7.00, 9.10, 8.30, 7.60, NULL, NULL),
(40, 64.50, 'Laki-Laki', 'BB/PB', 5.60, 6.10, 6.60, 7.10, 9.30, 8.50, 7.80, NULL, NULL),
(41, 65.00, 'Laki-Laki', 'BB/PB', 5.70, 6.20, 6.70, 7.30, 9.40, 8.60, 7.90, NULL, NULL),
(42, 65.50, 'Laki-Laki', 'BB/PB', 5.80, 6.30, 6.80, 7.40, 9.60, 8.70, 8.00, NULL, NULL),
(43, 66.00, 'Laki-Laki', 'BB/PB', 5.90, 6.40, 6.90, 7.50, 9.70, 8.90, 8.20, NULL, NULL),
(44, 66.50, 'Laki-Laki', 'BB/PB', 6.00, 6.50, 7.00, 7.60, 9.90, 9.00, 8.30, NULL, NULL),
(45, 67.00, 'Laki-Laki', 'BB/PB', 6.10, 6.60, 7.10, 7.70, 10.00, 9.20, 8.40, NULL, NULL),
(46, 67.50, 'Laki-Laki', 'BB/PB', 6.20, 6.70, 7.20, 7.90, 10.20, 9.30, 8.50, NULL, NULL),
(47, 68.00, 'Laki-Laki', 'BB/PB', 6.30, 6.80, 7.30, 8.00, 10.30, 9.40, 8.70, NULL, NULL),
(48, 68.50, 'Laki-Laki', 'BB/PB', 6.40, 6.90, 7.50, 8.10, 10.50, 9.60, 8.80, NULL, NULL),
(49, 69.00, 'Laki-Laki', 'BB/PB', 6.50, 7.00, 7.60, 8.20, 10.60, 9.70, 8.90, NULL, NULL),
(50, 69.50, 'Laki-Laki', 'BB/PB', 6.60, 7.10, 7.70, 8.30, 10.80, 9.80, 9.00, NULL, NULL),
(51, 70.00, 'Laki-Laki', 'BB/PB', 6.60, 7.20, 7.80, 8.40, 10.90, 10.00, 9.20, NULL, NULL),
(52, 70.50, 'Laki-Laki', 'BB/PB', 6.70, 7.30, 7.90, 8.50, 11.10, 10.10, 9.30, NULL, NULL),
(53, 71.00, 'Laki-Laki', 'BB/PB', 6.80, 7.40, 8.00, 8.60, 11.20, 10.20, 9.40, NULL, NULL),
(54, 71.50, 'Laki-Laki', 'BB/PB', 6.90, 7.50, 8.10, 8.80, 11.30, 10.40, 9.50, NULL, NULL),
(55, 72.00, 'Laki-Laki', 'BB/PB', 7.00, 7.60, 8.20, 8.90, 11.50, 10.50, 9.60, NULL, NULL),
(56, 72.50, 'Laki-Laki', 'BB/PB', 7.10, 7.60, 8.30, 9.00, 11.60, 10.60, 9.80, NULL, NULL),
(57, 73.00, 'Laki-Laki', 'BB/PB', 7.20, 7.70, 8.40, 9.10, 11.80, 10.80, 9.90, NULL, NULL),
(58, 73.50, 'Laki-Laki', 'BB/PB', 7.20, 7.80, 8.50, 9.20, 11.90, 10.90, 10.00, NULL, NULL),
(59, 74.00, 'Laki-Laki', 'BB/PB', 7.30, 7.90, 8.60, 9.30, 12.10, 11.00, 10.10, NULL, NULL),
(60, 74.50, 'Laki-Laki', 'BB/PB', 7.40, 8.00, 8.70, 9.40, 12.20, 11.20, 10.20, NULL, NULL),
(61, 75.00, 'Laki-Laki', 'BB/PB', 7.50, 8.10, 8.80, 9.50, 12.30, 11.30, 10.30, NULL, NULL),
(62, 75.50, 'Laki-Laki', 'BB/PB', 7.60, 8.20, 8.80, 9.60, 12.50, 11.40, 10.40, NULL, NULL),
(63, 76.00, 'Laki-Laki', 'BB/PB', 7.60, 8.30, 8.90, 9.70, 12.60, 11.50, 10.60, NULL, NULL),
(64, 76.50, 'Laki-Laki', 'BB/PB', 7.70, 8.30, 9.00, 9.80, 12.70, 11.60, 10.70, NULL, NULL),
(65, 77.00, 'Laki-Laki', 'BB/PB', 7.80, 8.40, 9.10, 9.90, 12.80, 11.70, 10.80, NULL, NULL),
(66, 77.50, 'Laki-Laki', 'BB/PB', 7.90, 8.50, 9.20, 10.00, 13.00, 11.90, 10.90, NULL, NULL),
(67, 78.00, 'Laki-Laki', 'BB/PB', 7.90, 8.60, 9.30, 10.10, 13.10, 12.00, 11.00, NULL, NULL),
(68, 78.50, 'Laki-Laki', 'BB/PB', 8.00, 8.70, 9.40, 10.20, 13.20, 12.10, 11.10, NULL, NULL),
(69, 79.00, 'Laki-Laki', 'BB/PB', 8.10, 8.70, 9.50, 10.30, 13.30, 12.20, 11.20, NULL, NULL),
(70, 79.50, 'Laki-Laki', 'BB/PB', 8.20, 8.80, 9.50, 10.40, 13.40, 12.30, 11.30, NULL, NULL),
(71, 80.00, 'Laki-Laki', 'BB/PB', 8.20, 8.90, 9.60, 10.40, 13.60, 12.40, 11.40, NULL, NULL),
(72, 80.50, 'Laki-Laki', 'BB/PB', 8.30, 9.00, 9.70, 10.50, 13.70, 12.50, 11.50, NULL, NULL),
(73, 81.00, 'Laki-Laki', 'BB/PB', 8.40, 9.10, 9.80, 10.60, 13.80, 12.60, 11.60, NULL, NULL),
(74, 81.50, 'Laki-Laki', 'BB/PB', 8.50, 9.10, 9.90, 10.70, 13.90, 12.70, 11.70, NULL, NULL),
(75, 82.00, 'Laki-Laki', 'BB/PB', 8.50, 9.20, 10.00, 10.80, 14.00, 12.80, 11.80, NULL, NULL),
(76, 82.50, 'Laki-Laki', 'BB/PB', 8.60, 9.30, 10.10, 10.90, 14.20, 13.00, 11.90, NULL, NULL),
(77, 83.00, 'Laki-Laki', 'BB/PB', 8.70, 9.40, 10.20, 11.00, 14.30, 13.10, 12.00, NULL, NULL),
(78, 83.50, 'Laki-Laki', 'BB/PB', 8.80, 9.50, 10.30, 11.20, 14.40, 13.20, 12.10, NULL, NULL),
(79, 84.00, 'Laki-Laki', 'BB/PB', 8.90, 9.60, 10.40, 11.30, 14.60, 13.30, 12.20, NULL, NULL),
(80, 84.50, 'Laki-Laki', 'BB/PB', 9.00, 9.70, 10.50, 11.40, 14.70, 13.50, 12.40, NULL, NULL),
(81, 85.00, 'Laki-Laki', 'BB/PB', 9.10, 9.80, 10.60, 11.50, 14.90, 13.60, 12.50, NULL, NULL),
(82, 85.50, 'Laki-Laki', 'BB/PB', 9.20, 9.90, 10.70, 11.60, 15.00, 13.70, 12.60, NULL, NULL),
(83, 86.00, 'Laki-Laki', 'BB/PB', 9.30, 10.00, 10.80, 11.70, 15.20, 13.90, 12.80, NULL, NULL),
(84, 86.50, 'Laki-Laki', 'BB/PB', 9.40, 10.10, 11.00, 11.90, 15.30, 14.00, 12.90, NULL, NULL),
(85, 87.00, 'Laki-Laki', 'BB/PB', 9.50, 10.20, 11.10, 12.00, 15.50, 14.20, 13.00, NULL, NULL),
(86, 87.50, 'Laki-Laki', 'BB/PB', 9.60, 10.40, 11.20, 12.10, 15.60, 14.30, 13.20, NULL, NULL),
(87, 88.00, 'Laki-Laki', 'BB/PB', 9.70, 10.50, 11.30, 12.20, 15.80, 14.50, 13.30, NULL, NULL),
(88, 88.50, 'Laki-Laki', 'BB/PB', 9.80, 10.60, 11.40, 12.40, 15.90, 14.60, 13.40, NULL, NULL),
(89, 89.00, 'Laki-Laki', 'BB/PB', 9.90, 10.70, 11.50, 12.50, 16.10, 14.70, 13.50, NULL, NULL),
(90, 89.50, 'Laki-Laki', 'BB/PB', 10.00, 10.80, 11.60, 12.60, 16.20, 14.90, 13.70, NULL, NULL),
(91, 90.00, 'Laki-Laki', 'BB/PB', 10.10, 10.90, 11.70, 12.70, 16.40, 15.00, 13.80, NULL, NULL),
(92, 90.50, 'Laki-Laki', 'BB/PB', 10.20, 11.00, 11.80, 12.80, 16.50, 15.10, 13.90, NULL, NULL),
(93, 91.00, 'Laki-Laki', 'BB/PB', 10.30, 11.10, 12.00, 13.00, 16.70, 15.30, 14.10, NULL, NULL),
(94, 91.50, 'Laki-Laki', 'BB/PB', 10.40, 11.20, 12.10, 13.10, 16.80, 15.40, 14.20, NULL, NULL),
(95, 92.00, 'Laki-Laki', 'BB/PB', 10.50, 11.30, 12.20, 13.20, 17.00, 15.60, 14.30, NULL, NULL),
(96, 92.50, 'Laki-Laki', 'BB/PB', 10.60, 11.40, 12.30, 13.30, 17.10, 15.70, 14.40, NULL, NULL),
(97, 93.00, 'Laki-Laki', 'BB/PB', 10.70, 11.50, 12.40, 13.40, 17.30, 15.80, 14.60, NULL, NULL),
(98, 93.50, 'Laki-Laki', 'BB/PB', 10.70, 11.60, 12.50, 13.50, 17.40, 16.00, 14.70, NULL, NULL),
(99, 94.00, 'Laki-Laki', 'BB/PB', 10.80, 11.70, 12.60, 13.70, 17.60, 16.10, 14.80, NULL, NULL),
(100, 94.50, 'Laki-Laki', 'BB/PB', 10.90, 11.80, 12.70, 13.80, 17.70, 16.30, 14.90, NULL, NULL),
(101, 95.00, 'Laki-Laki', 'BB/PB', 11.00, 11.90, 12.80, 13.90, 17.90, 16.40, 15.10, NULL, NULL),
(102, 95.50, 'Laki-Laki', 'BB/PB', 11.10, 12.00, 12.90, 14.00, 18.00, 16.50, 15.20, NULL, NULL),
(103, 96.00, 'Laki-Laki', 'BB/PB', 11.20, 12.10, 13.10, 14.10, 18.20, 16.70, 15.30, NULL, NULL),
(104, 96.50, 'Laki-Laki', 'BB/PB', 11.30, 12.20, 13.20, 14.30, 18.40, 16.80, 15.50, NULL, NULL),
(105, 97.00, 'Laki-Laki', 'BB/PB', 11.40, 12.30, 13.30, 14.40, 18.50, 17.00, 15.60, NULL, NULL),
(106, 97.50, 'Laki-Laki', 'BB/PB', 11.50, 12.40, 13.40, 14.50, 18.70, 17.10, 15.70, NULL, NULL),
(107, 98.00, 'Laki-Laki', 'BB/PB', 11.60, 12.50, 13.50, 14.60, 18.90, 17.30, 15.90, NULL, NULL),
(108, 98.50, 'Laki-Laki', 'BB/PB', 11.70, 12.60, 13.60, 14.80, 19.10, 17.50, 16.00, NULL, NULL),
(109, 99.00, 'Laki-Laki', 'BB/PB', 11.80, 12.70, 13.70, 14.90, 19.20, 17.60, 16.20, NULL, NULL),
(110, 99.50, 'Laki-Laki', 'BB/PB', 11.90, 12.80, 13.90, 15.00, 19.40, 17.80, 16.30, NULL, NULL),
(111, 100.00, 'Laki-Laki', 'BB/PB', 12.00, 12.90, 14.00, 15.20, 19.60, 18.00, 16.50, NULL, NULL),
(112, 100.50, 'Laki-Laki', 'BB/PB', 12.10, 13.00, 14.10, 15.30, 19.80, 18.10, 16.60, NULL, NULL),
(113, 101.00, 'Laki-Laki', 'BB/PB', 12.20, 13.20, 14.20, 15.40, 20.00, 18.30, 16.80, NULL, NULL),
(114, 101.50, 'Laki-Laki', 'BB/PB', 12.30, 13.30, 14.40, 15.60, 20.20, 18.50, 16.90, NULL, NULL),
(115, 102.00, 'Laki-Laki', 'BB/PB', 12.40, 13.40, 14.50, 15.70, 20.40, 18.70, 17.10, NULL, NULL),
(116, 102.50, 'Laki-Laki', 'BB/PB', 12.50, 13.50, 14.60, 15.90, 20.60, 18.80, 17.30, NULL, NULL),
(117, 103.00, 'Laki-Laki', 'BB/PB', 12.60, 13.60, 14.80, 16.00, 20.80, 19.00, 17.40, NULL, NULL),
(118, 103.50, 'Laki-Laki', 'BB/PB', 12.70, 13.70, 14.90, 16.20, 21.00, 19.20, 17.60, NULL, NULL),
(119, 104.00, 'Laki-Laki', 'BB/PB', 12.80, 13.90, 15.00, 16.30, 21.20, 19.40, 17.80, NULL, NULL),
(120, 104.50, 'Laki-Laki', 'BB/PB', 12.90, 14.00, 15.20, 16.50, 21.50, 19.60, 17.90, NULL, NULL),
(121, 105.00, 'Laki-Laki', 'BB/PB', 13.00, 14.10, 15.30, 16.60, 21.70, 19.80, 18.10, NULL, NULL),
(122, 105.50, 'Laki-Laki', 'BB/PB', 13.20, 14.20, 15.40, 16.80, 21.90, 20.00, 18.30, NULL, NULL),
(123, 106.00, 'Laki-Laki', 'BB/PB', 13.30, 14.40, 15.60, 16.90, 22.10, 20.20, 18.50, NULL, NULL),
(124, 106.50, 'Laki-Laki', 'BB/PB', 13.40, 14.50, 15.70, 17.10, 22.40, 20.40, 18.60, NULL, NULL),
(125, 107.00, 'Laki-Laki', 'BB/PB', 13.50, 14.60, 15.90, 17.30, 22.60, 20.60, 18.80, NULL, NULL),
(126, 107.50, 'Laki-Laki', 'BB/PB', 13.60, 14.70, 16.00, 17.40, 22.80, 20.80, 19.00, NULL, NULL),
(127, 108.00, 'Laki-Laki', 'BB/PB', 13.70, 14.90, 16.20, 17.60, 23.10, 21.00, 19.20, NULL, NULL),
(128, 108.50, 'Laki-Laki', 'BB/PB', 13.80, 15.00, 16.30, 17.80, 23.30, 21.20, 19.40, NULL, NULL),
(129, 109.00, 'Laki-Laki', 'BB/PB', 14.00, 15.10, 16.50, 17.90, 23.60, 21.40, 19.60, NULL, NULL),
(130, 109.50, 'Laki-Laki', 'BB/PB', 14.10, 15.30, 16.60, 18.10, 23.80, 21.70, 19.80, NULL, NULL),
(131, 110.00, 'Laki-Laki', 'BB/PB', 14.20, 15.40, 16.80, 18.30, 24.10, 21.90, 20.00, NULL, NULL),
(132, 45.00, 'Perempuan', 'BB/PB', 1.90, 2.10, 2.30, 2.50, 3.30, 3.00, 2.70, NULL, NULL),
(133, 45.50, 'Perempuan', 'BB/PB', 2.00, 2.10, 2.30, 2.50, 3.40, 3.10, 2.80, NULL, NULL),
(134, 46.00, 'Perempuan', 'BB/PB', 2.00, 2.20, 2.40, 2.60, 3.50, 3.20, 2.90, NULL, NULL),
(135, 46.50, 'Perempuan', 'BB/PB', 2.10, 2.30, 2.50, 2.70, 3.60, 3.30, 3.00, NULL, NULL),
(136, 47.00, 'Perempuan', 'BB/PB', 2.20, 2.40, 2.60, 2.80, 3.70, 3.40, 3.10, NULL, NULL),
(137, 47.50, 'Perempuan', 'BB/PB', 2.20, 2.40, 2.60, 2.90, 3.80, 3.50, 3.20, NULL, NULL),
(138, 48.00, 'Perempuan', 'BB/PB', 2.30, 2.50, 2.70, 3.00, 4.00, 3.60, 3.30, NULL, NULL),
(139, 48.50, 'Perempuan', 'BB/PB', 2.40, 2.60, 2.80, 3.10, 4.10, 3.70, 3.40, NULL, NULL),
(140, 49.00, 'Perempuan', 'BB/PB', 2.40, 2.60, 2.90, 3.20, 4.20, 3.80, 3.50, NULL, NULL),
(141, 49.50, 'Perempuan', 'BB/PB', 2.50, 2.70, 3.00, 3.30, 4.30, 3.90, 3.60, NULL, NULL),
(142, 50.00, 'Perempuan', 'BB/PB', 2.60, 2.80, 3.10, 3.40, 4.50, 4.00, 3.70, NULL, NULL),
(143, 50.50, 'Perempuan', 'BB/PB', 2.70, 2.90, 3.20, 3.50, 4.60, 4.20, 3.80, NULL, NULL),
(144, 51.00, 'Perempuan', 'BB/PB', 2.80, 3.00, 3.30, 3.60, 4.80, 4.30, 3.90, NULL, NULL),
(145, 51.50, 'Perempuan', 'BB/PB', 2.80, 3.10, 3.40, 3.70, 4.90, 4.40, 4.00, NULL, NULL),
(146, 52.00, 'Perempuan', 'BB/PB', 2.90, 3.20, 3.50, 3.80, 5.10, 4.60, 4.20, NULL, NULL),
(147, 52.50, 'Perempuan', 'BB/PB', 3.00, 3.30, 3.60, 3.90, 5.20, 4.70, 4.30, NULL, NULL),
(148, 53.00, 'Perempuan', 'BB/PB', 3.10, 3.40, 3.70, 4.00, 5.40, 4.90, 4.40, NULL, NULL),
(149, 53.50, 'Perempuan', 'BB/PB', 3.20, 3.50, 3.80, 4.20, 5.50, 5.00, 4.60, NULL, NULL),
(150, 54.00, 'Perempuan', 'BB/PB', 3.30, 3.60, 3.90, 4.30, 5.70, 5.20, 4.70, NULL, NULL),
(151, 54.50, 'Perempuan', 'BB/PB', 3.40, 3.70, 4.00, 4.40, 5.90, 5.30, 4.80, NULL, NULL),
(152, 55.00, 'Perempuan', 'BB/PB', 3.50, 3.80, 4.20, 4.50, 6.10, 5.50, 5.00, NULL, NULL),
(153, 55.50, 'Perempuan', 'BB/PB', 3.60, 3.90, 4.30, 4.70, 6.30, 5.70, 5.10, NULL, NULL),
(154, 56.00, 'Perempuan', 'BB/PB', 3.70, 4.00, 4.40, 4.80, 6.40, 5.80, 5.30, NULL, NULL),
(155, 56.50, 'Perempuan', 'BB/PB', 3.80, 4.10, 4.50, 5.00, 6.60, 6.00, 5.40, NULL, NULL),
(156, 57.00, 'Perempuan', 'BB/PB', 3.90, 4.30, 4.60, 5.10, 6.80, 6.10, 5.60, NULL, NULL),
(157, 57.50, 'Perempuan', 'BB/PB', 4.00, 4.40, 4.80, 5.20, 7.00, 6.30, 5.70, NULL, NULL),
(158, 58.00, 'Perempuan', 'BB/PB', 4.10, 4.50, 4.90, 5.40, 7.10, 6.50, 5.90, NULL, NULL),
(159, 58.50, 'Perempuan', 'BB/PB', 4.20, 4.60, 4.00, 5.50, 7.30, 6.60, 6.00, NULL, NULL),
(160, 59.00, 'Perempuan', 'BB/PB', 4.30, 4.70, 5.10, 5.60, 7.50, 6.80, 6.20, NULL, NULL),
(161, 59.50, 'Perempuan', 'BB/PB', 4.40, 4.80, 5.30, 5.70, 7.70, 6.90, 6.30, NULL, NULL),
(162, 60.00, 'Perempuan', 'BB/PB', 4.50, 4.90, 5.40, 5.90, 7.80, 7.10, 6.40, NULL, NULL),
(163, 60.50, 'Perempuan', 'BB/PB', 4.60, 5.00, 5.50, 6.00, 8.00, 7.30, 6.60, NULL, NULL),
(164, 61.00, 'Perempuan', 'BB/PB', 4.70, 5.10, 5.60, 6.10, 8.20, 7.30, 6.70, NULL, NULL),
(165, 61.50, 'Perempuan', 'BB/PB', 4.80, 5.20, 5.70, 6.30, 8.40, 7.60, 6.90, NULL, NULL),
(166, 62.00, 'Perempuan', 'BB/PB', 4.90, 5.30, 5.80, 6.40, 8.50, 7.70, 7.00, NULL, NULL),
(167, 62.50, 'Perempuan', 'BB/PB', 5.00, 5.40, 5.90, 6.50, 8.70, 7.80, 7.10, NULL, NULL),
(168, 63.00, 'Perempuan', 'BB/PB', 5.10, 5.50, 6.00, 6.60, 8.80, 8.00, 7.30, NULL, NULL),
(169, 63.50, 'Perempuan', 'BB/PB', 5.20, 5.60, 6.20, 6.70, 9.00, 8.10, 7.40, NULL, NULL),
(170, 64.00, 'Perempuan', 'BB/PB', 5.30, 5.70, 6.30, 6.90, 9.10, 8.30, 7.50, NULL, NULL),
(171, 64.50, 'Perempuan', 'BB/PB', 5.40, 5.80, 6.40, 7.00, 9.30, 8.40, 7.60, NULL, NULL),
(172, 65.00, 'Perempuan', 'BB/PB', 5.50, 5.90, 6.50, 7.10, 9.50, 8.60, 7.80, NULL, NULL),
(173, 65.50, 'Perempuan', 'BB/PB', 5.50, 6.00, 6.60, 7.20, 9.60, 8.70, 7.90, NULL, NULL),
(174, 66.00, 'Perempuan', 'BB/PB', 5.60, 6.10, 6.70, 7.30, 9.80, 8.80, 8.00, NULL, NULL),
(175, 66.50, 'Perempuan', 'BB/PB', 5.70, 6.20, 6.80, 7.40, 9.90, 9.00, 8.10, NULL, NULL),
(176, 67.00, 'Perempuan', 'BB/PB', 5.80, 6.30, 6.90, 7.50, 10.00, 9.10, 8.30, NULL, NULL),
(177, 67.50, 'Perempuan', 'BB/PB', 5.90, 6.40, 7.00, 7.60, 10.20, 9.20, 8.40, NULL, NULL),
(178, 68.00, 'Perempuan', 'BB/PB', 6.00, 6.50, 7.10, 7.70, 10.30, 9.40, 8.50, NULL, NULL),
(179, 68.50, 'Perempuan', 'BB/PB', 6.10, 6.60, 7.20, 7.90, 10.50, 9.50, 8.60, NULL, NULL),
(180, 69.00, 'Perempuan', 'BB/PB', 6.10, 6.70, 7.30, 8.00, 10.60, 9.60, 8.70, NULL, NULL),
(181, 69.50, 'Perempuan', 'BB/PB', 6.20, 6.80, 7.40, 8.10, 10.70, 9.70, 8.80, NULL, NULL),
(182, 70.00, 'Perempuan', 'BB/PB', 6.30, 6.90, 7.50, 8.20, 10.90, 9.90, 9.00, NULL, NULL),
(183, 70.50, 'Perempuan', 'BB/PB', 6.40, 6.90, 7.60, 8.30, 11.00, 10.00, 9.10, NULL, NULL),
(184, 71.00, 'Perempuan', 'BB/PB', 6.50, 7.00, 7.70, 8.40, 11.10, 10.10, 9.20, NULL, NULL),
(185, 71.50, 'Perempuan', 'BB/PB', 6.50, 7.10, 7.70, 8.50, 11.30, 10.20, 9.30, NULL, NULL),
(186, 72.00, 'Perempuan', 'BB/PB', 6.60, 7.20, 7.80, 8.60, 11.40, 10.30, 9.40, NULL, NULL),
(187, 72.50, 'Perempuan', 'BB/PB', 6.70, 7.30, 7.90, 8.70, 11.50, 10.50, 9.50, NULL, NULL),
(188, 73.00, 'Perempuan', 'BB/PB', 6.80, 7.40, 8.00, 8.80, 11.70, 10.60, 9.60, NULL, NULL),
(189, 73.50, 'Perempuan', 'BB/PB', 6.90, 7.40, 8.10, 8.90, 11.80, 10.70, 9.70, NULL, NULL),
(190, 74.00, 'Perempuan', 'BB/PB', 6.90, 7.50, 8.20, 9.00, 11.90, 10.80, 9.80, NULL, NULL),
(191, 74.50, 'Perempuan', 'BB/PB', 7.00, 7.60, 8.30, 9.10, 12.00, 10.90, 9.90, NULL, NULL),
(192, 75.00, 'Perempuan', 'BB/PB', 7.10, 7.70, 8.40, 9.10, 12.20, 11.00, 10.00, NULL, NULL),
(193, 75.50, 'Perempuan', 'BB/PB', 7.10, 7.80, 8.50, 9.20, 12.30, 11.10, 10.10, NULL, NULL),
(194, 76.00, 'Perempuan', 'BB/PB', 7.20, 7.80, 8.50, 9.30, 12.40, 11.20, 10.20, NULL, NULL),
(195, 76.50, 'Perempuan', 'BB/PB', 7.30, 7.90, 8.60, 9.40, 12.50, 11.40, 10.30, NULL, NULL),
(196, 77.00, 'Perempuan', 'BB/PB', 7.40, 8.00, 8.70, 9.50, 12.60, 11.50, 10.40, NULL, NULL),
(197, 77.50, 'Perempuan', 'BB/PB', 7.40, 8.10, 8.80, 9.60, 12.80, 11.60, 10.50, NULL, NULL),
(198, 78.00, 'Perempuan', 'BB/PB', 7.50, 8.20, 8.90, 9.70, 12.90, 11.70, 10.60, NULL, NULL),
(199, 78.50, 'Perempuan', 'BB/PB', 7.60, 8.20, 9.00, 9.80, 13.00, 11.80, 10.70, NULL, NULL),
(200, 79.00, 'Perempuan', 'BB/PB', 7.70, 8.30, 9.10, 9.90, 13.10, 11.90, 10.80, NULL, NULL),
(201, 79.50, 'Perempuan', 'BB/PB', 7.70, 8.40, 9.10, 10.00, 13.30, 12.00, 10.90, NULL, NULL),
(202, 80.00, 'Perempuan', 'BB/PB', 7.80, 8.50, 9.20, 10.10, 13.40, 12.10, 11.00, NULL, NULL),
(203, 80.50, 'Perempuan', 'BB/PB', 7.90, 8.60, 9.30, 10.20, 13.50, 12.30, 11.20, NULL, NULL),
(204, 81.00, 'Perempuan', 'BB/PB', 8.00, 8.70, 9.40, 10.30, 13.70, 12.40, 11.30, NULL, NULL),
(205, 81.50, 'Perempuan', 'BB/PB', 8.10, 8.80, 9.50, 10.40, 13.80, 12.50, 11.40, NULL, NULL),
(206, 82.00, 'Perempuan', 'BB/PB', 8.10, 8.80, 9.60, 10.50, 13.90, 12.60, 11.50, NULL, NULL),
(207, 82.50, 'Perempuan', 'BB/PB', 8.20, 8.90, 9.70, 10.60, 14.10, 12.80, 11.60, NULL, NULL),
(208, 83.00, 'Perempuan', 'BB/PB', 8.30, 9.00, 9.80, 10.70, 14.20, 12.90, 11.80, NULL, NULL),
(209, 83.50, 'Perempuan', 'BB/PB', 8.40, 9.10, 9.90, 10.90, 14.40, 13.10, 11.90, NULL, NULL),
(210, 84.00, 'Perempuan', 'BB/PB', 8.50, 9.20, 10.10, 11.00, 14.50, 13.20, 12.00, NULL, NULL),
(211, 84.50, 'Perempuan', 'BB/PB', 8.60, 9.30, 10.20, 11.10, 14.70, 13.30, 12.10, NULL, NULL),
(212, 85.00, 'Perempuan', 'BB/PB', 8.70, 9.40, 10.30, 11.20, 14.90, 13.50, 12.30, NULL, NULL),
(213, 85.50, 'Perempuan', 'BB/PB', 8.80, 9.50, 10.40, 11.30, 15.00, 13.60, 12.40, NULL, NULL),
(214, 86.00, 'Perempuan', 'BB/PB', 8.90, 9.70, 10.50, 11.50, 15.20, 13.80, 12.60, NULL, NULL),
(215, 86.50, 'Perempuan', 'BB/PB', 9.00, 9.80, 10.60, 11.60, 15.40, 13.90, 12.70, NULL, NULL),
(216, 87.00, 'Perempuan', 'BB/PB', 9.10, 9.90, 10.70, 11.70, 15.50, 14.10, 12.80, NULL, NULL),
(217, 87.50, 'Perempuan', 'BB/PB', 9.20, 10.00, 10.90, 11.80, 15.70, 14.20, 13.00, NULL, NULL),
(218, 88.00, 'Perempuan', 'BB/PB', 9.30, 10.10, 11.00, 12.00, 15.90, 14.40, 13.10, NULL, NULL),
(219, 88.50, 'Perempuan', 'BB/PB', 9.40, 10.20, 11.10, 12.10, 16.00, 14.50, 13.20, NULL, NULL),
(220, 89.00, 'Perempuan', 'BB/PB', 9.50, 10.30, 11.20, 12.20, 16.20, 14.70, 13.40, NULL, NULL),
(221, 89.50, 'Perempuan', 'BB/PB', 9.60, 10.40, 11.30, 12.30, 16.40, 14.80, 13.50, NULL, NULL),
(222, 90.00, 'Perempuan', 'BB/PB', 9.70, 10.50, 11.40, 12.50, 16.50, 15.00, 13.70, NULL, NULL),
(223, 90.50, 'Perempuan', 'BB/PB', 9.80, 10.60, 11.50, 12.60, 16.70, 15.10, 13.80, NULL, NULL),
(224, 91.00, 'Perempuan', 'BB/PB', 9.90, 10.70, 11.70, 12.70, 16.90, 15.30, 13.90, NULL, NULL),
(225, 91.50, 'Perempuan', 'BB/PB', 10.00, 10.80, 11.80, 12.80, 17.00, 15.50, 14.10, NULL, NULL),
(226, 92.00, 'Perempuan', 'BB/PB', 10.10, 10.90, 11.90, 13.00, 17.20, 15.60, 14.20, NULL, NULL),
(227, 92.50, 'Perempuan', 'BB/PB', 10.10, 11.00, 12.00, 13.10, 17.40, 15.80, 14.30, NULL, NULL),
(228, 93.00, 'Perempuan', 'BB/PB', 10.20, 11.10, 12.10, 13.20, 17.50, 15.90, 14.50, NULL, NULL),
(229, 93.50, 'Perempuan', 'BB/PB', 10.30, 11.20, 12.20, 13.30, 17.70, 16.10, 14.60, NULL, NULL),
(230, 94.00, 'Perempuan', 'BB/PB', 10.40, 11.30, 12.30, 13.50, 17.90, 16.20, 14.70, NULL, NULL),
(231, 94.50, 'Perempuan', 'BB/PB', 10.50, 11.40, 12.40, 13.60, 18.00, 16.40, 14.90, NULL, NULL),
(232, 95.00, 'Perempuan', 'BB/PB', 10.60, 11.50, 12.60, 13.70, 18.20, 16.50, 15.00, NULL, NULL),
(233, 95.50, 'Perempuan', 'BB/PB', 10.70, 11.60, 12.70, 13.80, 18.40, 16.70, 15.20, NULL, NULL),
(234, 96.00, 'Perempuan', 'BB/PB', 10.80, 11.70, 12.80, 14.00, 18.60, 16.80, 15.30, NULL, NULL),
(235, 96.50, 'Perempuan', 'BB/PB', 10.90, 11.80, 12.90, 14.10, 18.70, 17.00, 15.40, NULL, NULL),
(236, 97.00, 'Perempuan', 'BB/PB', 11.00, 12.00, 13.00, 14.20, 18.90, 17.10, 15.60, NULL, NULL),
(237, 97.50, 'Perempuan', 'BB/PB', 11.10, 12.10, 13.10, 14.40, 19.10, 17.30, 15.70, NULL, NULL),
(238, 98.00, 'Perempuan', 'BB/PB', 11.20, 12.20, 13.30, 14.50, 19.30, 17.50, 15.90, NULL, NULL),
(239, 98.50, 'Perempuan', 'BB/PB', 11.30, 12.30, 13.40, 14.60, 19.50, 17.60, 16.00, NULL, NULL),
(240, 99.00, 'Perempuan', 'BB/PB', 11.40, 12.40, 13.50, 14.80, 19.60, 17.80, 16.20, NULL, NULL),
(241, 99.50, 'Perempuan', 'BB/PB', 11.50, 12.50, 13.60, 14.90, 19.80, 18.00, 16.30, NULL, NULL),
(242, 100.00, 'Perempuan', 'BB/PB', 11.60, 12.60, 13.70, 15.00, 20.00, 18.10, 16.50, NULL, NULL),
(243, 100.50, 'Perempuan', 'BB/PB', 11.70, 12.70, 13.90, 15.20, 20.20, 18.30, 16.60, NULL, NULL),
(244, 101.00, 'Perempuan', 'BB/PB', 11.80, 12.80, 14.00, 15.30, 20.40, 18.50, 16.80, NULL, NULL),
(245, 101.50, 'Perempuan', 'BB/PB', 11.90, 13.00, 14.10, 15.50, 20.60, 18.70, 17.00, NULL, NULL),
(246, 102.00, 'Perempuan', 'BB/PB', 12.00, 13.10, 14.30, 15.60, 20.80, 18.90, 17.10, NULL, NULL),
(247, 102.50, 'Perempuan', 'BB/PB', 12.10, 13.20, 14.40, 15.80, 21.00, 19.00, 17.30, NULL, NULL),
(248, 103.00, 'Perempuan', 'BB/PB', 12.30, 13.30, 14.50, 15.90, 21.30, 19.20, 17.50, NULL, NULL),
(249, 103.50, 'Perempuan', 'BB/PB', 12.40, 13.50, 14.70, 16.10, 21.50, 19.50, 17.60, NULL, NULL),
(250, 104.00, 'Perempuan', 'BB/PB', 12.50, 13.60, 14.80, 16.20, 21.70, 19.60, 17.80, NULL, NULL),
(251, 104.50, 'Perempuan', 'BB/PB', 12.60, 13.70, 15.00, 16.40, 21.90, 19.80, 18.00, NULL, NULL),
(252, 105.00, 'Perempuan', 'BB/PB', 12.70, 13.80, 15.10, 16.50, 22.20, 20.00, 18.20, NULL, NULL),
(253, 105.50, 'Perempuan', 'BB/PB', 12.80, 14.00, 15.30, 16.70, 22.40, 20.20, 18.40, NULL, NULL),
(254, 106.00, 'Perempuan', 'BB/PB', 13.00, 14.10, 15.40, 16.90, 22.60, 20.50, 18.50, NULL, NULL),
(255, 106.50, 'Perempuan', 'BB/PB', 13.10, 14.30, 15.60, 17.10, 22.90, 20.70, 18.70, NULL, NULL),
(256, 107.00, 'Perempuan', 'BB/PB', 13.20, 14.40, 15.70, 17.20, 23.10, 20.90, 18.90, NULL, NULL),
(257, 107.50, 'Perempuan', 'BB/PB', 13.30, 14.50, 15.90, 17.40, 23.40, 21.10, 19.10, NULL, NULL),
(258, 108.00, 'Perempuan', 'BB/PB', 13.50, 14.70, 16.00, 17.60, 23.60, 21.30, 19.30, NULL, NULL),
(259, 108.50, 'Perempuan', 'BB/PB', 13.60, 14.80, 16.20, 17.80, 23.90, 21.60, 19.50, NULL, NULL),
(260, 109.00, 'Perempuan', 'BB/PB', 13.70, 15.00, 16.40, 18.00, 24.20, 21.80, 19.70, NULL, NULL),
(261, 109.50, 'Perempuan', 'BB/PB', 13.90, 15.10, 16.50, 18.10, 24.40, 22.00, 20.00, NULL, NULL),
(262, 110.00, 'Perempuan', 'BB/PB', 14.00, 15.30, 16.70, 18.30, 24.70, 22.30, 20.20, NULL, NULL),
(263, 0.00, 'Laki-Laki', 'BB/U', 2.10, 2.50, 2.90, 3.30, 5.00, 4.40, 3.90, NULL, NULL),
(264, 1.00, 'Laki-Laki', 'BB/U', 2.90, 3.40, 3.90, 3.50, 6.60, 5.80, 5.10, NULL, NULL),
(265, 2.00, 'Laki-Laki', 'BB/U', 3.80, 4.30, 4.90, 5.60, 8.00, 7.10, 6.30, NULL, NULL),
(266, 3.00, 'Laki-Laki', 'BB/U', 4.40, 5.00, 5.70, 6.40, 9.00, 8.00, 7.20, NULL, NULL),
(267, 4.00, 'Laki-Laki', 'BB/U', 4.90, 5.60, 6.20, 7.00, 9.70, 8.70, 7.80, NULL, NULL),
(268, 5.00, 'Laki-Laki', 'BB/U', 5.30, 6.00, 6.70, 7.50, 10.40, 9.30, 8.40, NULL, NULL),
(269, 6.00, 'Laki-Laki', 'BB/U', 5.70, 6.40, 7.10, 7.90, 10.90, 9.80, 8.80, NULL, NULL),
(270, 7.00, 'Laki-Laki', 'BB/U', 5.90, 6.70, 7.40, 8.30, 11.40, 10.30, 9.20, NULL, NULL),
(271, 8.00, 'Laki-Laki', 'BB/U', 6.20, 6.90, 7.70, 8.60, 11.90, 10.70, 9.60, NULL, NULL),
(272, 9.00, 'Laki-Laki', 'BB/U', 6.40, 7.10, 8.00, 8.90, 12.30, 11.00, 9.90, NULL, NULL),
(273, 10.00, 'Laki-Laki', 'BB/U', 6.60, 7.40, 8.20, 9.20, 12.70, 11.40, 10.20, NULL, NULL),
(274, 11.00, 'Laki-Laki', 'BB/U', 6.80, 7.60, 8.40, 9.40, 13.00, 11.70, 10.50, NULL, NULL),
(275, 12.00, 'Laki-Laki', 'BB/U', 6.90, 7.70, 8.60, 9.60, 13.30, 12.00, 10.80, NULL, NULL),
(276, 13.00, 'Laki-Laki', 'BB/U', 7.10, 7.90, 8.80, 9.90, 13.70, 12.30, 11.00, NULL, NULL),
(277, 14.00, 'Laki-Laki', 'BB/U', 7.20, 8.10, 9.00, 10.10, 14.00, 12.60, 11.30, NULL, NULL),
(278, 15.00, 'Laki-Laki', 'BB/U', 7.40, 8.30, 9.20, 10.30, 14.30, 12.80, 11.50, NULL, NULL),
(279, 16.00, 'Laki-Laki', 'BB/U', 7.50, 8.40, 9.40, 10.50, 14.60, 13.10, 11.70, NULL, NULL),
(280, 17.00, 'Laki-Laki', 'BB/U', 7.70, 8.60, 9.60, 10.70, 14.90, 13.40, 12.00, NULL, NULL),
(281, 18.00, 'Laki-Laki', 'BB/U', 7.80, 8.80, 9.80, 10.90, 15.30, 13.70, 12.20, NULL, NULL),
(282, 19.00, 'Laki-Laki', 'BB/U', 8.00, 8.90, 10.00, 11.10, 15.60, 13.90, 12.50, NULL, NULL),
(283, 20.00, 'Laki-Laki', 'BB/U', 8.10, 9.10, 10.10, 11.30, 15.90, 14.20, 12.70, NULL, NULL),
(284, 21.00, 'Laki-Laki', 'BB/U', 8.20, 9.20, 10.30, 11.50, 16.20, 14.50, 12.90, NULL, NULL),
(285, 22.00, 'Laki-Laki', 'BB/U', 8.40, 9.40, 10.50, 11.80, 16.50, 14.70, 13.20, NULL, NULL),
(286, 23.00, 'Laki-Laki', 'BB/U', 8.50, 9.50, 10.70, 12.00, 16.80, 15.00, 13.40, NULL, NULL),
(287, 24.00, 'Laki-Laki', 'BB/U', 8.60, 9.70, 10.80, 12.20, 17.10, 15.30, 13.60, NULL, NULL),
(288, 25.00, 'Laki-Laki', 'BB/U', 8.80, 9.80, 11.00, 12.40, 17.50, 15.50, 13.90, NULL, NULL),
(289, 26.00, 'Laki-Laki', 'BB/U', 8.90, 10.00, 11.20, 12.50, 17.80, 15.80, 14.10, NULL, NULL),
(290, 27.00, 'Laki-Laki', 'BB/U', 9.00, 10.10, 11.30, 12.70, 18.10, 16.10, 14.30, NULL, NULL),
(291, 28.00, 'Laki-Laki', 'BB/U', 9.10, 10.20, 11.50, 12.90, 18.40, 16.30, 14.50, NULL, NULL),
(292, 29.00, 'Laki-Laki', 'BB/U', 9.20, 10.40, 11.70, 13.10, 18.70, 16.60, 14.80, NULL, NULL),
(293, 30.00, 'Laki-Laki', 'BB/U', 9.40, 10.50, 11.80, 13.30, 19.00, 16.90, 15.00, NULL, NULL),
(294, 31.00, 'Laki-Laki', 'BB/U', 9.50, 10.70, 12.00, 13.50, 19.30, 17.10, 15.20, NULL, NULL),
(295, 32.00, 'Laki-Laki', 'BB/U', 9.60, 10.80, 12.10, 13.70, 19.60, 17.40, 15.40, NULL, NULL),
(296, 33.00, 'Laki-Laki', 'BB/U', 9.70, 10.90, 12.30, 13.80, 19.90, 17.60, 15.60, NULL, NULL),
(297, 34.00, 'Laki-Laki', 'BB/U', 9.80, 11.00, 12.40, 14.00, 20.20, 17.80, 15.80, NULL, NULL),
(298, 35.00, 'Laki-Laki', 'BB/U', 9.90, 11.20, 12.60, 14.20, 20.40, 18.10, 16.00, NULL, NULL),
(299, 36.00, 'Laki-Laki', 'BB/U', 10.00, 11.30, 12.70, 14.30, 20.70, 18.30, 16.20, NULL, NULL),
(300, 37.00, 'Laki-Laki', 'BB/U', 10.10, 11.40, 12.90, 14.50, 21.00, 18.60, 16.40, NULL, NULL),
(301, 38.00, 'Laki-Laki', 'BB/U', 10.20, 11.50, 13.00, 14.70, 21.30, 18.80, 16.60, NULL, NULL),
(302, 39.00, 'Laki-Laki', 'BB/U', 10.30, 11.60, 13.10, 14.80, 21.60, 19.00, 16.80, NULL, NULL),
(303, 40.00, 'Laki-Laki', 'BB/U', 10.40, 11.80, 13.30, 15.00, 21.90, 19.30, 17.00, NULL, NULL),
(304, 41.00, 'Laki-Laki', 'BB/U', 10.50, 11.90, 13.40, 15.20, 22.10, 19.50, 17.20, NULL, NULL),
(305, 42.00, 'Laki-Laki', 'BB/U', 10.60, 12.00, 13.60, 15.30, 22.40, 19.70, 17.40, NULL, NULL),
(306, 43.00, 'Laki-Laki', 'BB/U', 10.70, 12.10, 13.70, 15.50, 22.70, 20.00, 17.60, NULL, NULL),
(307, 44.00, 'Laki-Laki', 'BB/U', 10.80, 12.20, 13.80, 15.70, 23.00, 20.20, 17.80, NULL, NULL),
(308, 45.00, 'Laki-Laki', 'BB/U', 10.90, 12.40, 14.00, 15.80, 23.30, 20.50, 18.00, NULL, NULL),
(309, 46.00, 'Laki-Laki', 'BB/U', 11.00, 12.50, 14.10, 16.00, 23.60, 20.70, 18.20, NULL, NULL),
(310, 47.00, 'Laki-Laki', 'BB/U', 11.10, 12.60, 14.30, 16.20, 23.90, 20.90, 18.40, NULL, NULL),
(311, 48.00, 'Laki-Laki', 'BB/U', 11.20, 12.70, 14.40, 16.30, 24.20, 21.20, 18.60, NULL, NULL),
(312, 49.00, 'Laki-Laki', 'BB/U', 11.30, 12.80, 14.50, 16.50, 24.50, 21.40, 18.80, NULL, NULL),
(313, 50.00, 'Laki-Laki', 'BB/U', 11.40, 12.90, 14.70, 16.70, 24.80, 21.70, 19.00, NULL, NULL),
(314, 51.00, 'Laki-Laki', 'BB/U', 11.50, 13.10, 14.80, 16.80, 25.10, 21.90, 19.20, NULL, NULL),
(315, 52.00, 'Laki-Laki', 'BB/U', 11.60, 13.20, 15.00, 17.00, 25.40, 22.20, 19.40, NULL, NULL),
(316, 53.00, 'Laki-Laki', 'BB/U', 11.70, 13.30, 15.10, 17.20, 25.70, 22.40, 19.60, NULL, NULL),
(317, 54.00, 'Laki-Laki', 'BB/U', 11.80, 13.40, 15.20, 17.30, 26.00, 22.70, 19.80, NULL, NULL),
(318, 55.00, 'Laki-Laki', 'BB/U', 11.90, 13.50, 15.40, 17.50, 26.30, 22.90, 20.00, NULL, NULL),
(319, 56.00, 'Laki-Laki', 'BB/U', 12.00, 13.60, 15.50, 17.70, 26.60, 23.20, 20.20, NULL, NULL),
(320, 57.00, 'Laki-Laki', 'BB/U', 12.10, 13.70, 15.60, 17.80, 26.90, 23.40, 20.40, NULL, NULL),
(321, 58.00, 'Laki-Laki', 'BB/U', 12.20, 13.80, 15.80, 18.00, 27.20, 23.70, 20.60, NULL, NULL),
(322, 59.00, 'Laki-Laki', 'BB/U', 12.30, 14.00, 15.90, 18.20, 27.60, 23.90, 20.80, NULL, NULL),
(323, 60.00, 'Laki-Laki', 'BB/U', 12.40, 14.10, 16.00, 18.30, 27.90, 24.20, 21.00, NULL, NULL),
(324, 0.00, 'Perempuan', 'BB/U', 2.00, 2.40, 2.80, 3.20, 4.80, 4.20, 3.70, NULL, NULL),
(325, 1.00, 'Perempuan', 'BB/U', 2.70, 3.20, 3.60, 4.20, 6.20, 5.50, 4.80, NULL, NULL),
(326, 2.00, 'Perempuan', 'BB/U', 3.40, 3.90, 4.50, 5.10, 7.50, 0.50, 5.80, NULL, NULL),
(327, 3.00, 'Perempuan', 'BB/U', 4.00, 4.50, 5.20, 5.80, 8.50, 7.50, 6.60, NULL, NULL),
(328, 4.00, 'Perempuan', 'BB/U', 4.40, 5.00, 5.70, 6.40, 9.30, 8.20, 7.30, NULL, NULL),
(329, 5.00, 'Perempuan', 'BB/U', 4.80, 5.40, 6.10, 6.90, 10.00, 8.80, 7.80, NULL, NULL),
(330, 6.00, 'Perempuan', 'BB/U', 5.10, 5.70, 6.50, 7.30, 10.60, 9.30, 8.20, NULL, NULL),
(331, 7.00, 'Perempuan', 'BB/U', 5.30, 6.00, 6.80, 7.60, 11.10, 9.80, 8.60, NULL, NULL),
(332, 8.00, 'Perempuan', 'BB/U', 5.60, 6.30, 7.00, 7.90, 11.60, 10.20, 9.00, NULL, NULL),
(333, 9.00, 'Perempuan', 'BB/U', 5.80, 6.50, 7.30, 8.20, 12.00, 10.50, 9.30, NULL, NULL),
(334, 10.00, 'Perempuan', 'BB/U', 5.90, 6.70, 7.50, 8.50, 12.40, 10.90, 9.60, NULL, NULL),
(335, 11.00, 'Perempuan', 'BB/U', 6.10, 6.90, 7.70, 8.70, 12.80, 11.20, 9.90, NULL, NULL),
(336, 12.00, 'Perempuan', 'BB/U', 6.30, 7.00, 7.90, 8.90, 13.10, 11.50, 10.10, NULL, NULL),
(337, 13.00, 'Perempuan', 'BB/U', 6.40, 7.20, 8.10, 9.20, 13.50, 11.80, 10.40, NULL, NULL),
(338, 14.00, 'Perempuan', 'BB/U', 6.60, 7.40, 8.30, 9.40, 13.80, 12.10, 10.60, NULL, NULL),
(339, 15.00, 'Perempuan', 'BB/U', 6.70, 7.60, 8.50, 9.60, 14.10, 12.30, 10.90, NULL, NULL),
(340, 16.00, 'Perempuan', 'BB/U', 6.90, 7.70, 8.70, 9.80, 14.50, 12.50, 11.10, NULL, NULL),
(341, 17.00, 'Perempuan', 'BB/U', 7.00, 7.90, 8.90, 10.00, 14.80, 12.80, 11.40, NULL, NULL),
(342, 18.00, 'Perempuan', 'BB/U', 7.20, 8.10, 9.10, 10.20, 15.10, 13.20, 11.60, NULL, NULL),
(343, 19.00, 'Perempuan', 'BB/U', 7.30, 8.20, 9.20, 10.40, 15.40, 13.50, 11.80, NULL, NULL),
(344, 20.00, 'Perempuan', 'BB/U', 7.50, 8.40, 9.40, 10.60, 15.70, 13.70, 12.10, NULL, NULL),
(345, 21.00, 'Perempuan', 'BB/U', 7.60, 8.60, 9.60, 10.90, 16.00, 14.00, 12.30, NULL, NULL),
(346, 22.00, 'Perempuan', 'BB/U', 7.80, 8.70, 9.80, 11.10, 16.40, 14.30, 12.50, NULL, NULL),
(347, 23.00, 'Perempuan', 'BB/U', 7.90, 8.90, 10.00, 11.30, 16.70, 14.60, 12.80, NULL, NULL),
(348, 24.00, 'Perempuan', 'BB/U', 8.10, 9.00, 10.20, 11.50, 17.00, 14.80, 13.00, NULL, NULL),
(349, 25.00, 'Perempuan', 'BB/U', 8.20, 9.20, 10.30, 11.70, 17.30, 15.10, 13.30, NULL, NULL),
(350, 26.00, 'Perempuan', 'BB/U', 8.40, 9.40, 10.50, 11.90, 17.70, 15.40, 13.50, NULL, NULL),
(351, 27.00, 'Perempuan', 'BB/U', 8.50, 9.50, 10.70, 12.10, 18.00, 15.60, 13.70, NULL, NULL),
(352, 28.00, 'Perempuan', 'BB/U', 8.60, 9.70, 10.90, 12.30, 18.30, 16.00, 14.00, NULL, NULL),
(353, 29.00, 'Perempuan', 'BB/U', 8.80, 9.80, 11.10, 12.50, 18.70, 16.20, 14.20, NULL, NULL),
(354, 30.00, 'Perempuan', 'BB/U', 8.90, 10.00, 11.20, 12.70, 19.00, 16.50, 14.40, NULL, NULL),
(355, 31.00, 'Perempuan', 'BB/U', 9.00, 10.10, 11.40, 12.90, 19.30, 16.80, 14.70, NULL, NULL),
(356, 32.00, 'Perempuan', 'BB/U', 9.10, 10.30, 11.60, 13.10, 19.60, 17.10, 14.90, NULL, NULL),
(357, 33.00, 'Perempuan', 'BB/U', 9.30, 10.40, 11.70, 13.30, 20.00, 17.30, 15.10, NULL, NULL),
(358, 34.00, 'Perempuan', 'BB/U', 9.40, 10.50, 11.90, 13.50, 20.30, 17.60, 15.40, NULL, NULL),
(359, 35.00, 'Perempuan', 'BB/U', 9.50, 10.70, 12.00, 13.70, 20.60, 17.90, 15.60, NULL, NULL),
(360, 36.00, 'Perempuan', 'BB/U', 9.60, 10.80, 12.20, 13.90, 20.90, 18.10, 15.80, NULL, NULL),
(361, 37.00, 'Perempuan', 'BB/U', 9.70, 10.90, 12.40, 14.00, 21.30, 18.40, 16.00, NULL, NULL),
(362, 38.00, 'Perempuan', 'BB/U', 9.80, 11.10, 12.50, 14.20, 21.60, 18.70, 16.30, NULL, NULL),
(363, 39.00, 'Perempuan', 'BB/U', 9.90, 11.20, 12.70, 14.40, 22.00, 19.00, 16.50, NULL, NULL),
(364, 40.00, 'Perempuan', 'BB/U', 10.10, 11.30, 12.80, 14.60, 22.30, 19.20, 16.70, NULL, NULL),
(365, 41.00, 'Perempuan', 'BB/U', 10.20, 11.50, 13.00, 14.80, 22.70, 19.50, 16.90, NULL, NULL),
(366, 42.00, 'Perempuan', 'BB/U', 10.30, 11.60, 13.10, 15.00, 23.00, 19.80, 17.20, NULL, NULL),
(367, 43.00, 'Perempuan', 'BB/U', 10.40, 11.70, 13.30, 15.20, 23.40, 20.10, 17.40, NULL, NULL),
(368, 44.00, 'Perempuan', 'BB/U', 10.50, 11.80, 13.40, 15.30, 23.70, 20.40, 17.60, NULL, NULL),
(369, 45.00, 'Perempuan', 'BB/U', 10.60, 12.00, 13.60, 15.50, 24.10, 20.70, 17.80, NULL, NULL),
(370, 46.00, 'Perempuan', 'BB/U', 10.70, 12.10, 13.70, 15.70, 24.50, 20.90, 18.10, NULL, NULL),
(371, 47.00, 'Perempuan', 'BB/U', 10.80, 12.20, 13.90, 15.90, 24.80, 21.20, 18.30, NULL, NULL),
(372, 48.00, 'Perempuan', 'BB/U', 10.90, 12.30, 14.00, 16.10, 25.20, 21.50, 18.50, NULL, NULL),
(373, 49.00, 'Perempuan', 'BB/U', 11.00, 12.40, 14.20, 16.30, 25.50, 21.80, 18.80, NULL, NULL),
(374, 50.00, 'Perempuan', 'BB/U', 11.10, 12.60, 14.30, 16.40, 25.90, 22.10, 19.00, NULL, NULL),
(375, 51.00, 'Perempuan', 'BB/U', 11.20, 12.70, 14.50, 16.60, 26.30, 22.40, 19.20, NULL, NULL),
(376, 52.00, 'Perempuan', 'BB/U', 11.30, 12.80, 14.60, 16.80, 26.60, 22.60, 19.40, NULL, NULL),
(377, 53.00, 'Perempuan', 'BB/U', 11.40, 12.90, 14.80, 17.00, 27.00, 22.90, 19.70, NULL, NULL),
(378, 54.00, 'Perempuan', 'BB/U', 11.50, 13.00, 14.90, 17.20, 27.40, 23.20, 19.90, NULL, NULL),
(379, 55.00, 'Perempuan', 'BB/U', 11.60, 13.20, 15.10, 17.30, 27.70, 23.50, 20.10, NULL, NULL),
(380, 56.00, 'Perempuan', 'BB/U', 11.70, 13.30, 15.20, 17.50, 28.10, 23.80, 20.30, NULL, NULL),
(381, 57.00, 'Perempuan', 'BB/U', 11.80, 13.40, 15.30, 17.70, 28.50, 24.10, 20.60, NULL, NULL),
(382, 58.00, 'Perempuan', 'BB/U', 11.90, 13.50, 15.50, 17.90, 28.80, 24.40, 20.80, NULL, NULL),
(383, 59.00, 'Perempuan', 'BB/U', 12.00, 13.60, 15.60, 18.00, 29.20, 24.60, 21.00, NULL, NULL),
(384, 60.00, 'Perempuan', 'BB/U', 12.10, 13.70, 15.80, 18.20, 29.50, 24.90, 21.20, NULL, NULL),
(385, 0.00, 'Laki-Laki', 'PB/U', 44.20, 46.10, 48.00, 49.90, 55.60, 53.70, 51.80, NULL, NULL),
(386, 1.00, 'Laki-Laki', 'PB/U', 48.90, 50.80, 52.80, 54.70, 60.60, 58.60, 56.70, NULL, NULL),
(387, 2.00, 'Laki-Laki', 'PB/U', 52.40, 54.40, 56.40, 58.40, 64.40, 62.40, 60.40, NULL, NULL),
(388, 3.00, 'Laki-Laki', 'PB/U', 55.30, 57.30, 59.40, 61.40, 67.60, 65.50, 63.50, NULL, NULL),
(389, 4.00, 'Laki-Laki', 'PB/U', 57.60, 59.70, 61.80, 63.90, 70.10, 68.00, 66.00, NULL, NULL),
(390, 5.00, 'Laki-Laki', 'PB/U', 59.60, 61.70, 63.80, 65.90, 72.20, 70.10, 68.00, NULL, NULL),
(391, 6.00, 'Laki-Laki', 'PB/U', 61.20, 63.30, 65.50, 67.60, 74.00, 71.90, 69.80, NULL, NULL),
(392, 7.00, 'Laki-Laki', 'PB/U', 62.70, 64.80, 67.00, 69.20, 75.70, 73.50, 71.30, NULL, NULL),
(393, 8.00, 'Laki-Laki', 'PB/U', 64.00, 66.20, 68.40, 70.60, 77.20, 75.00, 72.80, NULL, NULL),
(394, 9.00, 'Laki-Laki', 'PB/U', 65.20, 67.50, 69.70, 72.00, 78.70, 76.50, 74.20, NULL, NULL),
(395, 10.00, 'Laki-Laki', 'PB/U', 66.40, 68.70, 71.00, 74.40, 80.10, 77.90, 75.60, NULL, NULL),
(396, 11.00, 'Laki-Laki', 'PB/U', 67.60, 69.90, 72.20, 74.50, 81.50, 79.20, 76.90, NULL, NULL),
(397, 12.00, 'Laki-Laki', 'PB/U', 68.60, 71.00, 73.40, 75.70, 82.90, 80.50, 78.10, NULL, NULL),
(398, 13.00, 'Laki-Laki', 'PB/U', 69.60, 72.10, 74.50, 76.90, 84.20, 81.80, 79.30, NULL, NULL),
(399, 14.00, 'Laki-Laki', 'PB/U', 70.60, 73.10, 75.60, 78.00, 85.50, 83.00, 80.50, NULL, NULL),
(400, 15.00, 'Laki-Laki', 'PB/U', 71.60, 74.10, 76.60, 79.10, 86.70, 84.20, 81.70, NULL, NULL),
(401, 16.00, 'Laki-Laki', 'PB/U', 72.50, 75.00, 77.60, 80.20, 88.00, 85.40, 82.80, NULL, NULL),
(402, 17.00, 'Laki-Laki', 'PB/U', 73.30, 76.00, 78.60, 81.20, 89.20, 86.50, 83.90, NULL, NULL),
(403, 18.00, 'Laki-Laki', 'PB/U', 74.20, 76.90, 79.60, 82.30, 90.40, 87.70, 85.00, NULL, NULL),
(404, 19.00, 'Laki-Laki', 'PB/U', 75.00, 77.70, 80.50, 83.20, 91.50, 88.80, 86.00, NULL, NULL),
(405, 20.00, 'Laki-Laki', 'PB/U', 75.80, 78.60, 81.40, 84.20, 92.60, 89.80, 87.00, NULL, NULL),
(406, 21.00, 'Laki-Laki', 'PB/U', 76.50, 79.40, 82.30, 85.10, 93.80, 90.90, 88.00, NULL, NULL),
(407, 22.00, 'Laki-Laki', 'PB/U', 77.20, 80.20, 83.10, 86.00, 94.90, 91.90, 89.00, NULL, NULL),
(408, 23.00, 'Laki-Laki', 'PB/U', 78.00, 81.00, 83.90, 86.90, 95.90, 92.90, 89.90, NULL, NULL),
(409, 24.00, 'Laki-Laki', 'PB/U', 78.70, 81.70, 84.80, 87.80, 97.00, 93.90, 90.90, NULL, NULL),
(410, 0.00, 'Perempuan', 'PB/U', 43.60, 45.40, 47.30, 49.10, 54.70, 52.90, 51.00, NULL, NULL),
(411, 1.00, 'Perempuan', 'PB/U', 47.80, 49.80, 51.70, 53.70, 59.50, 57.60, 55.60, NULL, NULL),
(412, 2.00, 'Perempuan', 'PB/U', 51.00, 53.00, 55.00, 57.10, 63.20, 61.10, 59.10, NULL, NULL),
(413, 3.00, 'Perempuan', 'PB/U', 53.50, 55.60, 57.70, 59.80, 66.10, 64.00, 61.90, NULL, NULL),
(414, 4.00, 'Perempuan', 'PB/U', 55.60, 57.80, 59.90, 62.10, 68.60, 66.40, 64.30, NULL, NULL),
(415, 5.00, 'Perempuan', 'PB/U', 57.40, 59.60, 61.80, 64.00, 70.70, 68.50, 66.20, NULL, NULL),
(416, 6.00, 'Perempuan', 'PB/U', 58.90, 61.20, 63.50, 65.70, 72.50, 70.30, 68.00, NULL, NULL),
(417, 7.00, 'Perempuan', 'PB/U', 60.30, 62.70, 65.00, 67.30, 74.20, 71.90, 69.60, NULL, NULL),
(418, 8.00, 'Perempuan', 'PB/U', 61.70, 64.00, 66.40, 68.70, 75.80, 73.50, 71.10, NULL, NULL),
(419, 9.00, 'Perempuan', 'PB/U', 62.90, 65.30, 67.70, 70.10, 77.40, 75.00, 72.60, NULL, NULL),
(420, 10.00, 'Perempuan', 'PB/U', 64.10, 66.50, 69.00, 71.50, 78.90, 76.40, 73.90, NULL, NULL),
(421, 11.00, 'Perempuan', 'PB/U', 65.20, 67.70, 70.30, 72.80, 80.30, 77.80, 75.30, NULL, NULL),
(422, 12.00, 'Perempuan', 'PB/U', 66.30, 68.90, 71.40, 74.00, 81.70, 79.20, 76.60, NULL, NULL),
(423, 13.00, 'Perempuan', 'PB/U', 67.30, 70.00, 72.60, 75.20, 83.10, 80.50, 77.80, NULL, NULL),
(424, 14.00, 'Perempuan', 'PB/U', 68.30, 71.00, 73.70, 76.40, 84.40, 81.70, 79.10, NULL, NULL),
(425, 15.00, 'Perempuan', 'PB/U', 69.30, 72.00, 74.80, 77.50, 85.70, 83.00, 80.20, NULL, NULL),
(426, 16.00, 'Perempuan', 'PB/U', 70.20, 73.00, 75.80, 78.60, 87.00, 84.20, 81.40, NULL, NULL),
(427, 17.00, 'Perempuan', 'PB/U', 71.10, 74.00, 76.80, 79.70, 88.20, 85.40, 82.50, NULL, NULL),
(428, 18.00, 'Perempuan', 'PB/U', 72.00, 74.90, 77.80, 80.70, 89.40, 86.50, 83.60, NULL, NULL),
(429, 19.00, 'Perempuan', 'PB/U', 72.80, 75.80, 78.80, 81.70, 90.60, 87.60, 84.70, NULL, NULL),
(430, 20.00, 'Perempuan', 'PB/U', 73.70, 76.70, 79.70, 82.70, 91.70, 88.70, 85.70, NULL, NULL),
(431, 21.00, 'Perempuan', 'PB/U', 74.50, 77.50, 80.60, 83.70, 92.90, 89.80, 86.70, NULL, NULL),
(432, 22.00, 'Perempuan', 'PB/U', 75.20, 78.40, 81.50, 84.60, 94.00, 90.80, 87.70, NULL, NULL),
(433, 23.00, 'Perempuan', 'PB/U', 76.00, 79.20, 82.30, 85.50, 95.00, 91.90, 88.70, NULL, NULL),
(434, 24.00, 'Perempuan', 'PB/U', 76.70, 80.00, 83.20, 86.40, 96.10, 92.90, 89.60, NULL, NULL),
(435, 65.00, 'Laki-Laki', 'BB/TB', 5.90, 6.30, 6.90, 7.40, 9.60, 8.80, 8.10, NULL, NULL),
(436, 65.50, 'Laki-Laki', 'BB/TB', 6.00, 6.40, 7.00, 7.60, 9.80, 8.90, 8.20, NULL, NULL),
(437, 66.00, 'Laki-Laki', 'BB/TB', 6.10, 6.50, 7.10, 7.70, 9.90, 9.10, 8.30, NULL, NULL),
(438, 66.50, 'Laki-Laki', 'BB/TB', 6.10, 6.60, 7.20, 7.80, 10.10, 9.20, 8.50, NULL, NULL),
(439, 67.00, 'Laki-Laki', 'BB/TB', 6.20, 6.70, 7.30, 7.90, 10.20, 9.40, 8.60, NULL, NULL),
(440, 67.50, 'Laki-Laki', 'BB/TB', 6.30, 6.80, 7.40, 8.00, 10.40, 9.50, 8.70, NULL, NULL),
(441, 68.00, 'Laki-Laki', 'BB/TB', 6.40, 6.90, 7.50, 8.10, 10.50, 9.60, 8.80, NULL, NULL),
(442, 68.50, 'Laki-Laki', 'BB/TB', 6.50, 7.00, 7.60, 8.20, 10.70, 9.80, 9.00, NULL, NULL),
(443, 69.00, 'Laki-Laki', 'BB/TB', 6.60, 7.10, 7.70, 8.40, 10.80, 9.90, 9.10, NULL, NULL),
(444, 69.50, 'Laki-Laki', 'BB/TB', 6.70, 7.20, 7.80, 8.50, 11.00, 10.00, 9.20, NULL, NULL),
(445, 70.00, 'Laki-Laki', 'BB/TB', 6.70, 7.30, 7.90, 8.60, 11.10, 10.20, 9.30, NULL, NULL),
(446, 70.50, 'Laki-Laki', 'BB/TB', 6.90, 7.40, 8.00, 8.70, 11.30, 10.30, 9.50, NULL, NULL),
(447, 71.00, 'Laki-Laki', 'BB/TB', 6.90, 7.50, 8.10, 8.80, 11.40, 10.40, 9.60, NULL, NULL),
(448, 71.50, 'Laki-Laki', 'BB/TB', 7.00, 7.60, 8.20, 8.90, 11.60, 10.60, 9.70, NULL, NULL),
(449, 72.00, 'Laki-Laki', 'BB/TB', 7.10, 7.70, 8.30, 9.00, 11.70, 10.70, 9.80, NULL, NULL),
(450, 72.50, 'Laki-Laki', 'BB/TB', 7.20, 7.80, 8.40, 9.10, 11.80, 10.80, 9.90, NULL, NULL),
(451, 73.00, 'Laki-Laki', 'BB/TB', 7.30, 7.90, 8.50, 9.20, 12.00, 11.00, 10.00, NULL, NULL),
(452, 73.50, 'Laki-Laki', 'BB/TB', 7.40, 7.90, 8.60, 9.30, 12.10, 11.10, 10.20, NULL, NULL),
(453, 74.00, 'Laki-Laki', 'BB/TB', 7.40, 8.00, 8.70, 9.40, 12.20, 11.20, 10.30, NULL, NULL),
(454, 74.50, 'Laki-Laki', 'BB/TB', 7.50, 8.10, 8.80, 9.50, 12.40, 11.30, 10.40, NULL, NULL),
(455, 75.00, 'Laki-Laki', 'BB/TB', 7.60, 8.20, 8.90, 9.60, 12.50, 11.40, 10.50, NULL, NULL),
(456, 75.50, 'Laki-Laki', 'BB/TB', 7.70, 8.30, 9.00, 9.70, 12.60, 11.60, 10.60, NULL, NULL),
(457, 76.00, 'Laki-Laki', 'BB/TB', 7.70, 8.40, 9.10, 9.80, 12.80, 11.70, 10.70, NULL, NULL),
(458, 76.50, 'Laki-Laki', 'BB/TB', 7.80, 8.50, 9.20, 9.90, 12.90, 11.80, 10.80, NULL, NULL),
(459, 77.00, 'Laki-Laki', 'BB/TB', 7.90, 8.50, 9.20, 10.00, 13.00, 11.90, 10.90, NULL, NULL),
(460, 77.50, 'Laki-Laki', 'BB/TB', 8.00, 8.60, 9.30, 10.10, 13.10, 12.00, 11.00, NULL, NULL),
(461, 78.00, 'Laki-Laki', 'BB/TB', 8.00, 8.70, 9.40, 10.20, 13.30, 12.10, 11.10, NULL, NULL),
(462, 78.50, 'Laki-Laki', 'BB/TB', 8.10, 8.80, 9.50, 10.30, 13.40, 12.20, 11.20, NULL, NULL),
(463, 79.00, 'Laki-Laki', 'BB/TB', 8.20, 8.80, 9.60, 10.40, 13.50, 12.30, 11.30, NULL, NULL),
(464, 79.50, 'Laki-Laki', 'BB/TB', 8.30, 8.90, 9.70, 10.50, 13.60, 12.40, 11.40, NULL, NULL),
(465, 80.00, 'Laki-Laki', 'BB/TB', 8.30, 9.00, 9.70, 10.60, 13.70, 12.60, 11.50, NULL, NULL),
(466, 80.50, 'Laki-Laki', 'BB/TB', 8.40, 9.10, 9.80, 10.70, 13.80, 12.70, 11.60, NULL, NULL),
(467, 81.00, 'Laki-Laki', 'BB/TB', 8.50, 9.20, 9.90, 10.80, 14.00, 12.80, 11.70, NULL, NULL),
(468, 81.50, 'Laki-Laki', 'BB/TB', 8.60, 9.30, 10.00, 10.90, 14.10, 12.90, 11.80, NULL, NULL),
(469, 82.00, 'Laki-Laki', 'BB/TB', 8.70, 9.30, 10.10, 11.00, 14.20, 1.30, 11.90, NULL, NULL),
(470, 82.50, 'Laki-Laki', 'BB/TB', 8.70, 9.40, 10.20, 11.10, 14.40, 13.10, 12.10, NULL, NULL),
(471, 83.00, 'Laki-Laki', 'BB/TB', 8.80, 9.50, 10.30, 11.20, 14.50, 13.30, 12.20, NULL, NULL),
(472, 83.50, 'Laki-Laki', 'BB/TB', 8.90, 9.60, 10.40, 11.30, 14.60, 13.40, 12.30, NULL, NULL),
(473, 84.00, 'Laki-Laki', 'BB/TB', 9.00, 9.70, 10.50, 11.40, 14.80, 13.50, 12.40, NULL, NULL),
(474, 84.50, 'Laki-Laki', 'BB/TB', 9.10, 9.90, 10.70, 11.50, 14.90, 13.70, 12.50, NULL, NULL),
(475, 85.00, 'Laki-Laki', 'BB/TB', 9.20, 10.00, 10.80, 11.70, 15.10, 13.80, 12.70, NULL, NULL),
(476, 85.50, 'Laki-Laki', 'BB/TB', 9.30, 10.10, 10.90, 11.80, 15.20, 13.90, 12.80, NULL, NULL),
(477, 86.00, 'Laki-Laki', 'BB/TB', 9.40, 10.20, 11.00, 11.90, 15.40, 14.10, 12.90, NULL, NULL),
(478, 86.50, 'Laki-Laki', 'BB/TB', 9.50, 10.30, 11.10, 12.00, 15.50, 14.20, 13.10, NULL, NULL),
(479, 87.00, 'Laki-Laki', 'BB/TB', 9.60, 10.40, 11.20, 12.20, 15.70, 14.40, 13.20, NULL, NULL),
(480, 87.50, 'Laki-Laki', 'BB/TB', 9.70, 10.50, 11.30, 12.30, 15.80, 14.50, 13.30, NULL, NULL),
(481, 88.00, 'Laki-Laki', 'BB/TB', 9.80, 10.60, 11.50, 12.40, 16.00, 14.70, 13.50, NULL, NULL),
(482, 88.50, 'Laki-Laki', 'BB/TB', 9.00, 10.70, 11.60, 12.50, 16.10, 14.80, 13.60, NULL, NULL),
(483, 89.00, 'Laki-Laki', 'BB/TB', 10.00, 10.80, 11.70, 12.60, 16.30, 14.90, 13.70, NULL, NULL),
(484, 89.50, 'Laki-Laki', 'BB/TB', 10.10, 10.90, 11.80, 12.80, 16.40, 15.10, 13.90, NULL, NULL),
(485, 90.00, 'Laki-Laki', 'BB/TB', 10.20, 11.00, 11.90, 12.90, 16.60, 15.20, 14.00, NULL, NULL),
(486, 90.50, 'Laki-Laki', 'BB/TB', 10.30, 11.10, 12.00, 13.00, 16.70, 15.30, 14.10, NULL, NULL),
(487, 91.00, 'Laki-Laki', 'BB/TB', 10.40, 11.20, 12.10, 13.10, 16.90, 15.50, 14.20, NULL, NULL),
(488, 91.50, 'Laki-Laki', 'BB/TB', 10.50, 11.30, 12.20, 13.20, 17.00, 15.60, 14.40, NULL, NULL),
(489, 92.00, 'Laki-Laki', 'BB/TB', 10.60, 11.40, 12.30, 13.40, 17.20, 15.80, 14.50, NULL, NULL),
(490, 92.50, 'Laki-Laki', 'BB/TB', 10.70, 11.50, 12.40, 13.50, 17.30, 15.90, 14.60, NULL, NULL),
(491, 93.00, 'Laki-Laki', 'BB/TB', 10.80, 11.60, 12.60, 13.60, 17.50, 16.00, 14.70, NULL, NULL),
(492, 93.50, 'Laki-Laki', 'BB/TB', 10.90, 11.70, 12.70, 13.70, 17.60, 16.20, 14.90, NULL, NULL),
(493, 94.00, 'Laki-Laki', 'BB/TB', 11.00, 11.80, 12.80, 13.80, 17.80, 16.30, 15.00, NULL, NULL),
(494, 94.50, 'Laki-Laki', 'BB/TB', 11.10, 11.90, 12.90, 13.90, 17.90, 16.50, 15.10, NULL, NULL),
(495, 95.00, 'Laki-Laki', 'BB/TB', 11.10, 12.00, 13.00, 14.10, 18.10, 16.60, 15.30, NULL, NULL),
(496, 95.50, 'Laki-Laki', 'BB/TB', 11.20, 12.10, 13.10, 14.20, 18.30, 16.70, 15.40, NULL, NULL),
(497, 96.00, 'Laki-Laki', 'BB/TB', 11.30, 12.20, 13.20, 14.30, 18.40, 16.90, 15.50, NULL, NULL),
(498, 96.50, 'Laki-Laki', 'BB/TB', 11.40, 12.30, 13.30, 14.40, 18.60, 17.00, 15.70, NULL, NULL),
(499, 97.00, 'Laki-Laki', 'BB/TB', 11.50, 12.40, 13.40, 14.60, 18.80, 17.20, 15.80, NULL, NULL),
(500, 97.50, 'Laki-Laki', 'BB/TB', 11.60, 12.50, 13.60, 14.70, 18.90, 17.40, 15.90, NULL, NULL),
(501, 98.00, 'Laki-Laki', 'BB/TB', 11.70, 12.60, 13.70, 14.80, 19.10, 17.50, 16.10, NULL, NULL),
(502, 98.50, 'Laki-Laki', 'BB/TB', 11.80, 12.80, 13.80, 14.90, 19.30, 17.70, 16.20, NULL, NULL),
(503, 99.00, 'Laki-Laki', 'BB/TB', 11.90, 12.90, 13.90, 15.10, 19.50, 17.90, 16.40, NULL, NULL),
(504, 99.50, 'Laki-Laki', 'BB/TB', 12.00, 13.00, 14.00, 15.20, 19.70, 18.00, 16.50, NULL, NULL),
(505, 100.00, 'Laki-Laki', 'BB/TB', 12.10, 13.10, 14.20, 15.40, 19.90, 18.20, 16.70, NULL, NULL),
(506, 100.50, 'Laki-Laki', 'BB/TB', 12.20, 13.20, 14.30, 15.50, 20.10, 18.40, 16.90, NULL, NULL),
(507, 101.00, 'Laki-Laki', 'BB/TB', 12.30, 13.30, 14.40, 15.60, 20.30, 18.50, 17.00, NULL, NULL),
(508, 101.50, 'Laki-Laki', 'BB/TB', 12.40, 13.40, 14.50, 15.80, 20.50, 18.70, 17.20, NULL, NULL),
(509, 102.00, 'Laki-Laki', 'BB/TB', 12.50, 13.60, 14.70, 15.90, 20.70, 18.90, 17.30, NULL, NULL),
(510, 102.50, 'Laki-Laki', 'BB/TB', 12.60, 13.70, 14.80, 16.10, 20.90, 19.10, 17.50, NULL, NULL),
(511, 103.00, 'Laki-Laki', 'BB/TB', 12.80, 13.80, 14.90, 16.20, 21.10, 19.30, 17.70, NULL, NULL),
(512, 103.50, 'Laki-Laki', 'BB/TB', 12.90, 13.90, 15.10, 16.40, 21.30, 19.50, 17.80, NULL, NULL),
(513, 104.00, 'Laki-Laki', 'BB/TB', 13.00, 14.00, 15.20, 16.50, 21.60, 19.70, 18.00, NULL, NULL),
(514, 104.50, 'Laki-Laki', 'BB/TB', 13.10, 14.20, 15.40, 16.70, 21.80, 19.90, 18.20, NULL, NULL),
(515, 105.00, 'Laki-Laki', 'BB/TB', 13.20, 14.30, 15.50, 16.80, 22.00, 20.10, 18.40, NULL, NULL),
(516, 105.50, 'Laki-Laki', 'BB/TB', 13.30, 14.40, 15.60, 17.00, 22.20, 20.30, 18.50, NULL, NULL),
(517, 106.00, 'Laki-Laki', 'BB/TB', 13.40, 14.50, 15.80, 17.20, 22.50, 20.50, 18.70, NULL, NULL),
(518, 106.50, 'Laki-Laki', 'BB/TB', 13.50, 14.70, 15.90, 17.30, 22.70, 20.70, 18.90, NULL, NULL),
(519, 107.00, 'Laki-Laki', 'BB/TB', 13.70, 14.80, 16.10, 17.50, 22.90, 20.90, 19.10, NULL, NULL),
(520, 107.50, 'Laki-Laki', 'BB/TB', 13.80, 14.90, 16.20, 17.70, 23.20, 21.10, 19.30, NULL, NULL),
(521, 108.00, 'Laki-Laki', 'BB/TB', 13.90, 15.10, 16.40, 17.80, 23.40, 21.30, 19.50, NULL, NULL),
(522, 108.50, 'Laki-Laki', 'BB/TB', 14.00, 15.20, 16.50, 18.00, 23.70, 21.50, 19.70, NULL, NULL),
(523, 109.00, 'Laki-Laki', 'BB/TB', 14.10, 15.30, 16.70, 18.20, 23.90, 21.80, 19.80, NULL, NULL),
(524, 109.50, 'Laki-Laki', 'BB/TB', 14.30, 15.50, 16.80, 18.30, 24.20, 22.00, 20.00, NULL, NULL),
(525, 110.00, 'Laki-Laki', 'BB/TB', 14.40, 15.60, 17.00, 18.50, 24.40, 22.20, 20.20, NULL, NULL),
(526, 110.50, 'Laki-Laki', 'BB/TB', 14.50, 15.80, 17.10, 18.70, 24.70, 22.40, 20.40, NULL, NULL),
(527, 111.00, 'Laki-Laki', 'BB/TB', 14.60, 15.90, 17.30, 18.90, 25.00, 22.70, 20.70, NULL, NULL),
(528, 111.50, 'Laki-Laki', 'BB/TB', 14.80, 16.00, 17.50, 19.10, 25.20, 22.90, 20.90, NULL, NULL),
(529, 112.00, 'Laki-Laki', 'BB/TB', 14.90, 16.20, 17.60, 19.20, 25.50, 23.10, 21.10, NULL, NULL),
(530, 112.50, 'Laki-Laki', 'BB/TB', 15.00, 16.30, 17.80, 19.40, 25.80, 23.40, 21.30, NULL, NULL),
(531, 113.00, 'Laki-Laki', 'BB/TB', 15.20, 16.50, 18.00, 19.60, 26.00, 23.60, 21.50, NULL, NULL),
(532, 113.50, 'Laki-Laki', 'BB/TB', 15.30, 16.60, 18.10, 19.80, 26.30, 23.90, 21.70, NULL, NULL),
(533, 114.00, 'Laki-Laki', 'BB/TB', 15.40, 16.80, 18.30, 20.00, 26.60, 24.10, 21.90, NULL, NULL),
(534, 114.50, 'Laki-Laki', 'BB/TB', 15.60, 16.90, 18.50, 20.20, 26.90, 24.40, 22.10, NULL, NULL),
(535, 115.00, 'Laki-Laki', 'BB/TB', 15.70, 17.10, 18.60, 20.40, 27.20, 24.60, 22.40, NULL, NULL),
(536, 115.50, 'Laki-Laki', 'BB/TB', 15.80, 17.20, 18.80, 20.60, 27.50, 24.90, 22.60, NULL, NULL),
(537, 116.00, 'Laki-Laki', 'BB/TB', 16.00, 17.40, 19.00, 20.80, 27.80, 25.10, 22.80, NULL, NULL),
(538, 116.50, 'Laki-Laki', 'BB/TB', 16.10, 17.50, 19.20, 21.00, 28.00, 25.40, 23.00, NULL, NULL),
(539, 117.00, 'Laki-Laki', 'BB/TB', 16.20, 17.70, 19.30, 21.20, 28.30, 25.60, 23.30, NULL, NULL),
(540, 117.50, 'Laki-Laki', 'BB/TB', 16.40, 17.90, 19.50, 21.40, 28.60, 25.90, 23.50, NULL, NULL),
(541, 118.00, 'Laki-Laki', 'BB/TB', 16.50, 18.00, 19.70, 21.60, 28.90, 26.10, 23.70, NULL, NULL);
INSERT INTO `standar_who` (`id_standar_who`, `parameter`, `jk`, `kategori`, `sd_min_tiga`, `sd_min_dua`, `sd_min_satu`, `median`, `sd_plus_tiga`, `sd_plus_dua`, `sd_plus_satu`, `created_at`, `updated_at`) VALUES
(542, 118.50, 'Laki-Laki', 'BB/TB', 16.70, 18.20, 19.90, 21.80, 29.20, 26.40, 23.90, NULL, NULL),
(543, 119.00, 'Laki-Laki', 'BB/TB', 16.80, 18.30, 20.00, 22.00, 29.50, 26.60, 24.10, NULL, NULL),
(544, 119.50, 'Laki-Laki', 'BB/TB', 16.90, 18.50, 20.20, 22.20, 29.80, 26.90, 24.40, NULL, NULL),
(545, 120.00, 'Laki-Laki', 'BB/TB', 17.10, 18.60, 20.40, 22.40, 30.10, 27.20, 24.60, NULL, NULL),
(546, 65.00, 'Perempuan', 'BB/TB', 5.60, 6.10, 6.60, 7.20, 9.70, 8.70, 7.90, NULL, NULL),
(547, 65.50, 'Perempuan', 'BB/TB', 5.70, 6.20, 6.70, 7.40, 9.80, 8.90, 8.10, NULL, NULL),
(548, 66.00, 'Perempuan', 'BB/TB', 5.80, 6.30, 6.80, 7.50, 10.00, 9.00, 8.20, NULL, NULL),
(549, 66.50, 'Perempuan', 'BB/TB', 5.80, 6.40, 6.90, 7.60, 10.10, 9.10, 8.30, NULL, NULL),
(550, 67.00, 'Perempuan', 'BB/TB', 5.90, 6.40, 7.00, 7.70, 10.20, 9.30, 8.40, NULL, NULL),
(551, 67.50, 'Perempuan', 'BB/TB', 6.00, 6.50, 7.10, 7.80, 10.40, 9.40, 8.50, NULL, NULL),
(552, 68.00, 'Perempuan', 'BB/TB', 6.10, 6.60, 7.20, 7.90, 10.50, 9.50, 8.70, NULL, NULL),
(553, 68.50, 'Perempuan', 'BB/TB', 6.20, 6.70, 7.30, 8.00, 10.70, 9.70, 8.80, NULL, NULL),
(554, 69.00, 'Perempuan', 'BB/TB', 6.30, 6.80, 7.40, 8.10, 10.80, 9.80, 8.90, NULL, NULL),
(555, 69.50, 'Perempuan', 'BB/TB', 6.40, 6.90, 7.50, 8.20, 10.90, 9.90, 9.00, NULL, NULL),
(556, 70.00, 'Perempuan', 'BB/TB', 6.40, 7.00, 7.60, 8.30, 11.10, 10.00, 9.10, NULL, NULL),
(557, 70.50, 'Perempuan', 'BB/TB', 6.50, 7.10, 7.70, 8.40, 11.20, 10.10, 9.20, NULL, NULL),
(558, 71.00, 'Perempuan', 'BB/TB', 6.60, 7.10, 7.80, 8.50, 11.30, 10.30, 9.30, NULL, NULL),
(559, 71.50, 'Perempuan', 'BB/TB', 6.70, 7.20, 7.90, 8.60, 11.50, 10.40, 9.40, NULL, NULL),
(560, 72.00, 'Perempuan', 'BB/TB', 6.70, 7.30, 8.00, 8.70, 11.60, 10.50, 9.50, NULL, NULL),
(561, 72.50, 'Perempuan', 'BB/TB', 6.80, 7.40, 8.10, 8.80, 11.70, 10.60, 9.70, NULL, NULL),
(562, 73.00, 'Perempuan', 'BB/TB', 6.90, 7.50, 8.10, 8.90, 11.80, 10.70, 9.80, NULL, NULL),
(563, 73.50, 'Perempuan', 'BB/TB', 7.00, 7.60, 8.20, 9.00, 12.00, 10.80, 9.90, NULL, NULL),
(564, 74.00, 'Perempuan', 'BB/TB', 7.00, 7.60, 8.30, 9.10, 12.10, 11.00, 10.00, NULL, NULL),
(565, 74.50, 'Perempuan', 'BB/TB', 7.10, 7.70, 8.40, 9.20, 12.20, 11.10, 10.10, NULL, NULL),
(566, 75.00, 'Perempuan', 'BB/TB', 7.20, 7.80, 8.50, 9.30, 12.30, 11.20, 10.20, NULL, NULL),
(567, 75.50, 'Perempuan', 'BB/TB', 7.20, 7.90, 8.60, 9.40, 12.50, 11.30, 10.30, NULL, NULL),
(568, 76.00, 'Perempuan', 'BB/TB', 7.30, 8.00, 8.70, 9.50, 12.60, 11.40, 10.40, NULL, NULL),
(569, 76.50, 'Perempuan', 'BB/TB', 7.40, 8.00, 8.70, 9.60, 12.70, 11.50, 10.50, NULL, NULL),
(570, 77.00, 'Perempuan', 'BB/TB', 7.50, 8.10, 8.80, 9.60, 12.80, 11.60, 10.60, NULL, NULL),
(571, 77.50, 'Perempuan', 'BB/TB', 7.50, 8.20, 8.90, 9.70, 12.90, 11.70, 10.70, NULL, NULL),
(572, 78.00, 'Perempuan', 'BB/TB', 7.60, 8.30, 9.00, 9.80, 13.10, 11.80, 10.80, NULL, NULL),
(573, 78.50, 'Perempuan', 'BB/TB', 7.70, 8.40, 9.10, 9.90, 13.20, 12.00, 10.90, NULL, NULL),
(574, 79.00, 'Perempuan', 'BB/TB', 7.80, 8.40, 9.20, 10.00, 13.30, 12.10, 11.00, NULL, NULL),
(575, 79.50, 'Perempuan', 'BB/TB', 7.80, 8.50, 9.30, 10.10, 13.40, 12.20, 11.10, NULL, NULL),
(576, 80.00, 'Perempuan', 'BB/TB', 7.90, 8.60, 9.40, 10.20, 13.60, 12.30, 11.20, NULL, NULL),
(577, 80.50, 'Perempuan', 'BB/TB', 8.00, 8.70, 9.50, 10.30, 13.70, 12.40, 11.30, NULL, NULL),
(578, 81.00, 'Perempuan', 'BB/TB', 8.10, 8.80, 9.60, 10.40, 13.90, 12.60, 11.40, NULL, NULL),
(579, 81.50, 'Perempuan', 'BB/TB', 8.20, 8.90, 9.70, 10.60, 14.00, 12.70, 11.60, NULL, NULL),
(580, 82.00, 'Perempuan', 'BB/TB', 8.30, 9.00, 9.80, 10.70, 14.10, 12.80, 11.70, NULL, NULL),
(581, 82.50, 'Perempuan', 'BB/TB', 8.40, 9.10, 9.90, 10.80, 14.30, 13.00, 11.80, NULL, NULL),
(582, 83.00, 'Perempuan', 'BB/TB', 8.50, 9.20, 10.00, 10.90, 14.50, 13.10, 11.90, NULL, NULL),
(583, 83.50, 'Perempuan', 'BB/TB', 8.50, 9.30, 10.10, 11.00, 14.60, 13.30, 12.10, NULL, NULL),
(584, 84.00, 'Perempuan', 'BB/TB', 8.60, 9.40, 10.20, 11.10, 14.80, 13.40, 12.20, NULL, NULL),
(585, 84.50, 'Perempuan', 'BB/TB', 8.70, 9.50, 10.30, 11.30, 14.90, 13.50, 12.30, NULL, NULL),
(586, 85.00, 'Perempuan', 'BB/TB', 8.80, 9.60, 10.40, 11.40, 15.10, 13.70, 12.50, NULL, NULL),
(587, 85.50, 'Perempuan', 'BB/TB', 8.90, 9.70, 10.60, 11.50, 15.30, 13.80, 12.60, NULL, NULL),
(588, 86.00, 'Perempuan', 'BB/TB', 9.00, 9.80, 10.70, 11.60, 15.40, 14.00, 12.70, NULL, NULL),
(589, 86.50, 'Perempuan', 'BB/TB', 9.10, 9.90, 10.80, 11.80, 15.60, 14.20, 12.90, NULL, NULL),
(590, 87.00, 'Perempuan', 'BB/TB', 9.20, 10.00, 10.90, 11.90, 15.80, 14.30, 13.00, NULL, NULL),
(591, 87.50, 'Perempuan', 'BB/TB', 9.30, 10.10, 11.00, 12.00, 15.90, 14.50, 13.20, NULL, NULL),
(592, 88.00, 'Perempuan', 'BB/TB', 9.40, 10.20, 11.10, 12.10, 16.10, 14.60, 13.30, NULL, NULL),
(593, 88.50, 'Perempuan', 'BB/TB', 9.50, 10.30, 11.20, 12.30, 16.30, 14.80, 13.40, NULL, NULL),
(594, 89.00, 'Perempuan', 'BB/TB', 9.60, 10.40, 11.40, 12.40, 16.40, 14.90, 13.60, NULL, NULL),
(595, 89.50, 'Perempuan', 'BB/TB', 9.70, 10.50, 11.50, 12.50, 16.60, 15.10, 13.70, NULL, NULL),
(596, 90.00, 'Perempuan', 'BB/TB', 9.80, 10.60, 11.60, 12.60, 16.80, 15.20, 13.80, NULL, NULL),
(597, 90.50, 'Perempuan', 'BB/TB', 9.90, 10.70, 11.70, 12.80, 16.90, 15.40, 14.00, NULL, NULL),
(598, 91.00, 'Perempuan', 'BB/TB', 10.00, 10.90, 11.80, 12.90, 17.10, 15.50, 14.10, NULL, NULL),
(599, 91.50, 'Perempuan', 'BB/TB', 10.10, 11.00, 11.90, 13.00, 17.30, 15.70, 14.30, NULL, NULL),
(600, 92.00, 'Perempuan', 'BB/TB', 10.20, 11.10, 12.00, 13.10, 17.40, 15.80, 14.40, NULL, NULL),
(601, 92.50, 'Perempuan', 'BB/TB', 10.30, 11.20, 12.10, 13.30, 17.60, 16.00, 14.50, NULL, NULL),
(602, 93.00, 'Perempuan', 'BB/TB', 10.40, 11.30, 12.30, 13.40, 17.80, 16.10, 14.70, NULL, NULL),
(603, 93.50, 'Perempuan', 'BB/TB', 10.50, 11.40, 12.40, 13.50, 17.90, 16.30, 14.80, NULL, NULL),
(604, 94.00, 'Perempuan', 'BB/TB', 10.60, 11.50, 12.50, 13.60, 18.10, 16.40, 14.90, NULL, NULL),
(605, 94.50, 'Perempuan', 'BB/TB', 10.70, 11.60, 12.60, 13.80, 18.30, 16.60, 15.10, NULL, NULL),
(606, 95.00, 'Perempuan', 'BB/TB', 10.80, 11.70, 12.70, 13.90, 18.50, 16.70, 15.20, NULL, NULL),
(607, 95.50, 'Perempuan', 'BB/TB', 10.80, 11.80, 12.80, 14.00, 18.60, 16.90, 15.40, NULL, NULL),
(608, 96.00, 'Perempuan', 'BB/TB', 10.90, 11.90, 12.90, 14.10, 18.80, 17.00, 15.50, NULL, NULL),
(609, 96.50, 'Perempuan', 'BB/TB', 11.00, 12.00, 13.10, 14.30, 19.00, 17.20, 15.60, NULL, NULL),
(610, 97.00, 'Perempuan', 'BB/TB', 11.10, 12.10, 13.20, 14.40, 19.20, 17.40, 15.80, NULL, NULL),
(611, 97.50, 'Perempuan', 'BB/TB', 11.20, 12.20, 13.30, 14.50, 19.30, 17.50, 15.90, NULL, NULL),
(612, 98.00, 'Perempuan', 'BB/TB', 11.30, 12.30, 13.40, 14.70, 19.50, 17.70, 16.10, NULL, NULL),
(613, 98.50, 'Perempuan', 'BB/TB', 11.40, 12.40, 13.50, 14.80, 19.70, 17.90, 16.20, NULL, NULL),
(614, 99.00, 'Perempuan', 'BB/TB', 11.50, 12.50, 13.70, 14.90, 19.90, 18.00, 16.40, NULL, NULL),
(615, 99.50, 'Perempuan', 'BB/TB', 11.60, 12.70, 13.80, 15.10, 20.10, 18.20, 16.50, NULL, NULL),
(616, 100.00, 'Perempuan', 'BB/TB', 11.70, 12.80, 13.90, 15.20, 20.30, 18.40, 16.70, NULL, NULL),
(617, 100.50, 'Perempuan', 'BB/TB', 11.90, 12.90, 14.10, 15.40, 20.50, 18.60, 16.90, NULL, NULL),
(618, 101.00, 'Perempuan', 'BB/TB', 12.00, 13.00, 14.20, 15.50, 20.70, 18.70, 17.00, NULL, NULL),
(619, 101.50, 'Perempuan', 'BB/TB', 12.10, 13.10, 14.30, 15.70, 20.90, 18.90, 17.20, NULL, NULL),
(620, 102.00, 'Perempuan', 'BB/TB', 12.20, 13.30, 14.50, 15.80, 21.10, 19.10, 17.40, NULL, NULL),
(621, 102.50, 'Perempuan', 'BB/TB', 12.30, 13.40, 14.60, 16.00, 21.40, 19.30, 17.50, NULL, NULL),
(622, 103.00, 'Perempuan', 'BB/TB', 12.40, 13.50, 14.70, 16.10, 21.60, 19.50, 17.70, NULL, NULL),
(623, 103.50, 'Perempuan', 'BB/TB', 12.50, 13.60, 14.90, 16.30, 21.80, 19.70, 17.90, NULL, NULL),
(624, 104.00, 'Perempuan', 'BB/TB', 12.60, 13.80, 15.00, 16.40, 22.00, 19.90, 18.10, NULL, NULL),
(625, 104.50, 'Perempuan', 'BB/TB', 12.80, 13.90, 15.20, 16.60, 22.30, 20.10, 18.20, NULL, NULL),
(626, 105.00, 'Perempuan', 'BB/TB', 12.90, 14.00, 15.30, 16.80, 22.50, 20.30, 18.40, NULL, NULL),
(627, 105.50, 'Perempuan', 'BB/TB', 13.00, 14.20, 15.50, 16.90, 22.70, 20.50, 18.60, NULL, NULL),
(628, 106.00, 'Perempuan', 'BB/TB', 13.10, 14.30, 15.60, 17.10, 23.00, 20.80, 18.80, NULL, NULL),
(629, 106.50, 'Perempuan', 'BB/TB', 13.30, 14.50, 15.80, 17.30, 23.20, 21.00, 19.00, NULL, NULL),
(630, 107.00, 'Perempuan', 'BB/TB', 13.40, 14.60, 15.90, 17.50, 23.50, 21.20, 19.20, NULL, NULL),
(631, 107.50, 'Perempuan', 'BB/TB', 13.50, 14.70, 16.10, 17.70, 23.70, 21.40, 19.40, NULL, NULL),
(632, 108.00, 'Perempuan', 'BB/TB', 13.70, 14.90, 16.30, 17.80, 24.00, 21.70, 19.60, NULL, NULL),
(633, 108.50, 'Perempuan', 'BB/TB', 13.80, 15.00, 16.40, 18.00, 24.30, 21.90, 19.80, NULL, NULL),
(634, 109.00, 'Perempuan', 'BB/TB', 13.90, 15.20, 16.60, 18.20, 24.50, 22.10, 20.00, NULL, NULL),
(635, 109.50, 'Perempuan', 'BB/TB', 14.10, 15.40, 16.80, 18.40, 24.80, 22.40, 20.30, NULL, NULL),
(636, 110.00, 'Perempuan', 'BB/TB', 14.20, 15.50, 17.00, 18.60, 25.10, 22.60, 20.50, NULL, NULL),
(637, 110.50, 'Perempuan', 'BB/TB', 14.40, 15.70, 17.10, 18.80, 25.40, 22.90, 20.70, NULL, NULL),
(638, 111.00, 'Perempuan', 'BB/TB', 14.50, 15.80, 17.30, 19.00, 25.70, 23.10, 20.90, NULL, NULL),
(639, 111.50, 'Perempuan', 'BB/TB', 14.70, 16.00, 17.50, 19.20, 26.00, 23.40, 21.20, NULL, NULL),
(640, 112.00, 'Perempuan', 'BB/TB', 14.80, 16.20, 17.70, 19.40, 26.20, 23.60, 21.40, NULL, NULL),
(641, 112.50, 'Perempuan', 'BB/TB', 15.00, 16.30, 17.90, 19.60, 26.50, 23.90, 21.60, NULL, NULL),
(642, 113.00, 'Perempuan', 'BB/TB', 15.10, 16.50, 18.00, 19.80, 26.80, 24.20, 21.80, NULL, NULL),
(643, 113.50, 'Perempuan', 'BB/TB', 15.30, 16.70, 18.20, 20.00, 27.10, 24.40, 22.10, NULL, NULL),
(644, 114.00, 'Perempuan', 'BB/TB', 15.40, 16.80, 18.40, 20.20, 27.40, 24.70, 22.30, NULL, NULL),
(645, 114.50, 'Perempuan', 'BB/TB', 15.60, 17.00, 18.60, 20.50, 27.80, 25.00, 22.60, NULL, NULL),
(646, 115.00, 'Perempuan', 'BB/TB', 15.70, 17.20, 18.80, 20.70, 28.10, 25.20, 22.80, NULL, NULL),
(647, 115.50, 'Perempuan', 'BB/TB', 15.90, 17.30, 19.00, 20.90, 28.40, 25.50, 23.00, NULL, NULL),
(648, 116.00, 'Perempuan', 'BB/TB', 16.00, 17.50, 19.20, 21.10, 28.70, 25.80, 23.30, NULL, NULL),
(649, 116.50, 'Perempuan', 'BB/TB', 16.20, 17.70, 19.40, 21.30, 29.00, 26.10, 23.50, NULL, NULL),
(650, 117.00, 'Perempuan', 'BB/TB', 16.30, 17.80, 19.60, 21.50, 29.30, 26.30, 23.80, NULL, NULL),
(651, 117.50, 'Perempuan', 'BB/TB', 16.50, 18.00, 19.80, 12.70, 29.60, 26.60, 24.00, NULL, NULL),
(652, 118.00, 'Perempuan', 'BB/TB', 16.60, 18.20, 19.90, 22.00, 29.90, 26.90, 24.20, NULL, NULL),
(653, 118.50, 'Perempuan', 'BB/TB', 16.80, 18.40, 20.10, 22.20, 30.30, 27.20, 24.50, NULL, NULL),
(654, 119.00, 'Perempuan', 'BB/TB', 16.90, 18.50, 20.30, 22.40, 30.60, 27.40, 24.70, NULL, NULL),
(655, 119.50, 'Perempuan', 'BB/TB', 17.10, 18.70, 20.50, 22.60, 30.90, 27.70, 25.00, NULL, NULL),
(656, 120.00, 'Perempuan', 'BB/TB', 17.30, 18.90, 20.70, 22.80, 31.20, 28.00, 25.20, NULL, NULL),
(657, 24.00, 'Laki-Laki', 'TB/U', 78.00, 81.00, 84.10, 87.10, 96.30, 93.20, 90.20, NULL, NULL),
(658, 25.00, 'Laki-Laki', 'TB/U', 78.60, 81.70, 84.90, 88.00, 97.30, 94.20, 91.10, NULL, NULL),
(659, 26.00, 'Laki-Laki', 'TB/U', 79.30, 82.50, 85.60, 88.80, 98.30, 95.20, 92.00, NULL, NULL),
(660, 27.00, 'Laki-Laki', 'TB/U', 79.90, 83.10, 86.40, 89.60, 99.30, 96.10, 92.90, NULL, NULL),
(661, 28.00, 'Laki-Laki', 'TB/U', 80.50, 83.80, 87.10, 90.40, 100.30, 97.00, 93.70, NULL, NULL),
(662, 29.00, 'Laki-Laki', 'TB/U', 81.10, 84.50, 87.80, 91.20, 101.20, 97.90, 94.50, NULL, NULL),
(663, 30.00, 'Laki-Laki', 'TB/U', 81.70, 85.10, 88.50, 91.90, 102.10, 98.70, 95.30, NULL, NULL),
(664, 31.00, 'Laki-Laki', 'TB/U', 82.30, 85.70, 89.20, 92.70, 103.00, 99.60, 96.10, NULL, NULL),
(665, 32.00, 'Laki-Laki', 'TB/U', 82.80, 86.40, 89.90, 93.40, 103.90, 100.40, 96.90, NULL, NULL),
(666, 33.00, 'Laki-Laki', 'TB/U', 83.40, 86.90, 90.50, 94.10, 104.80, 101.20, 97.60, NULL, NULL),
(667, 34.00, 'Laki-Laki', 'TB/U', 83.90, 87.50, 91.10, 94.80, 105.60, 102.00, 98.40, NULL, NULL),
(668, 35.00, 'Laki-Laki', 'TB/U', 84.40, 88.10, 91.80, 95.40, 106.40, 102.70, 99.10, NULL, NULL),
(669, 36.00, 'Laki-Laki', 'TB/U', 85.00, 88.70, 92.40, 96.10, 107.20, 103.50, 99.80, NULL, NULL),
(670, 37.00, 'Laki-Laki', 'TB/U', 85.50, 89.20, 93.00, 96.70, 108.00, 104.20, 100.50, NULL, NULL),
(671, 38.00, 'Laki-Laki', 'TB/U', 86.00, 89.80, 93.60, 97.40, 108.80, 105.00, 101.20, NULL, NULL),
(672, 39.00, 'Laki-Laki', 'TB/U', 86.50, 90.30, 94.20, 98.00, 109.50, 105.70, 101.80, NULL, NULL),
(673, 40.00, 'Laki-Laki', 'TB/U', 87.00, 90.90, 94.70, 98.60, 110.30, 106.40, 102.50, NULL, NULL),
(674, 41.00, 'Laki-Laki', 'TB/U', 87.50, 91.40, 95.30, 99.20, 111.00, 107.10, 103.20, NULL, NULL),
(675, 42.00, 'Laki-Laki', 'TB/U', 88.00, 91.90, 95.90, 99.90, 111.70, 107.80, 103.80, NULL, NULL),
(676, 43.00, 'Laki-Laki', 'TB/U', 88.40, 92.40, 96.40, 100.40, 112.50, 108.50, 104.50, NULL, NULL),
(677, 44.00, 'Laki-Laki', 'TB/U', 88.90, 93.00, 97.00, 101.00, 113.20, 109.10, 105.10, NULL, NULL),
(678, 45.00, 'Laki-Laki', 'TB/U', 89.40, 93.50, 97.50, 101.60, 113.90, 109.80, 105.70, NULL, NULL),
(679, 46.00, 'Laki-Laki', 'TB/U', 89.80, 94.00, 98.10, 102.20, 114.60, 110.40, 106.30, NULL, NULL),
(680, 47.00, 'Laki-Laki', 'TB/U', 90.30, 94.40, 98.60, 102.80, 115.20, 111.10, 106.90, NULL, NULL),
(681, 48.00, 'Laki-Laki', 'TB/U', 90.70, 94.90, 99.10, 103.30, 115.90, 111.70, 107.50, NULL, NULL),
(682, 49.00, 'Laki-Laki', 'TB/U', 91.20, 95.40, 99.70, 103.90, 116.60, 112.40, 108.10, NULL, NULL),
(683, 50.00, 'Laki-Laki', 'TB/U', 91.60, 95.90, 100.20, 104.40, 117.30, 113.00, 108.70, NULL, NULL),
(684, 51.00, 'Laki-Laki', 'TB/U', 92.10, 96.40, 100.70, 105.00, 117.90, 113.60, 109.30, NULL, NULL),
(685, 52.00, 'Laki-Laki', 'TB/U', 92.50, 96.90, 101.20, 105.60, 118.60, 114.20, 109.90, NULL, NULL),
(686, 53.00, 'Laki-Laki', 'TB/U', 93.00, 97.40, 101.70, 106.10, 119.20, 114.90, 110.50, NULL, NULL),
(687, 54.00, 'Laki-Laki', 'TB/U', 93.40, 97.80, 102.30, 106.70, 119.90, 115.50, 111.10, NULL, NULL),
(688, 55.00, 'Laki-Laki', 'TB/U', 93.90, 98.30, 102.80, 107.20, 120.60, 116.10, 111.70, NULL, NULL),
(689, 56.00, 'Laki-Laki', 'TB/U', 94.30, 98.80, 103.30, 107.80, 121.20, 116.70, 112.30, NULL, NULL),
(690, 57.00, 'Laki-Laki', 'TB/U', 94.70, 99.30, 103.80, 108.30, 121.90, 117.40, 112.80, NULL, NULL),
(691, 58.00, 'Laki-Laki', 'TB/U', 95.20, 99.70, 104.30, 108.90, 122.60, 118.00, 113.40, NULL, NULL),
(692, 59.00, 'Laki-Laki', 'TB/U', 95.60, 100.20, 104.80, 109.40, 123.20, 118.60, 114.00, NULL, NULL),
(693, 60.00, 'Laki-Laki', 'TB/U', 96.10, 100.70, 105.30, 110.00, 123.90, 119.20, 114.60, NULL, NULL),
(694, 24.00, 'Perempuan', 'TB/U', 76.00, 79.30, 82.50, 85.70, 95.40, 92.20, 88.90, NULL, NULL),
(695, 25.00, 'Perempuan', 'TB/U', 76.80, 80.00, 83.30, 86.60, 96.40, 93.10, 89.90, NULL, NULL),
(696, 26.00, 'Perempuan', 'TB/U', 77.50, 80.80, 84.10, 87.40, 97.40, 94.10, 90.80, NULL, NULL),
(697, 27.00, 'Perempuan', 'TB/U', 78.10, 81.50, 84.90, 88.30, 98.40, 95.00, 91.70, NULL, NULL),
(698, 28.00, 'Perempuan', 'TB/U', 78.80, 82.20, 85.70, 89.10, 99.40, 96.00, 92.50, NULL, NULL),
(699, 29.00, 'Perempuan', 'TB/U', 79.50, 82.90, 86.40, 89.90, 100.30, 96.90, 93.40, NULL, NULL),
(700, 30.00, 'Perempuan', 'TB/U', 80.10, 83.60, 87.10, 90.70, 101.30, 97.70, 94.20, NULL, NULL),
(701, 31.00, 'Perempuan', 'TB/U', 80.70, 84.30, 87.90, 91.40, 102.20, 98.60, 95.00, NULL, NULL),
(702, 32.00, 'Perempuan', 'TB/U', 81.30, 84.90, 88.60, 92.20, 103.10, 99.40, 95.80, NULL, NULL),
(703, 33.00, 'Perempuan', 'TB/U', 81.90, 85.60, 89.30, 92.90, 103.90, 100.30, 96.60, NULL, NULL),
(704, 34.00, 'Perempuan', 'TB/U', 82.50, 86.20, 89.90, 93.60, 104.80, 101.10, 97.40, NULL, NULL),
(705, 35.00, 'Perempuan', 'TB/U', 83.10, 86.80, 90.60, 94.40, 105.60, 101.90, 98.10, NULL, NULL),
(706, 36.00, 'Perempuan', 'TB/U', 83.60, 87.40, 91.20, 95.10, 106.50, 102.70, 98.90, NULL, NULL),
(707, 37.00, 'Perempuan', 'TB/U', 84.20, 88.00, 91.90, 95.70, 107.30, 103.40, 99.60, NULL, NULL),
(708, 38.00, 'Perempuan', 'TB/U', 84.70, 88.60, 92.50, 96.40, 108.10, 104.20, 100.30, NULL, NULL),
(709, 39.00, 'Perempuan', 'TB/U', 85.30, 89.20, 93.10, 97.10, 108.90, 105.00, 101.00, NULL, NULL),
(710, 40.00, 'Perempuan', 'TB/U', 85.80, 89.80, 93.80, 97.70, 109.70, 105.70, 101.70, NULL, NULL),
(711, 41.00, 'Perempuan', 'TB/U', 86.30, 90.40, 94.40, 98.40, 110.50, 106.40, 102.40, NULL, NULL),
(712, 42.00, 'Perempuan', 'TB/U', 86.80, 90.90, 95.00, 99.00, 111.30, 107.20, 103.10, NULL, NULL),
(713, 43.00, 'Perempuan', 'TB/U', 87.40, 91.50, 95.60, 99.70, 112.00, 107.90, 103.80, NULL, NULL),
(714, 44.00, 'Perempuan', 'TB/U', 87.90, 92.00, 96.20, 100.30, 112.70, 108.60, 104.50, NULL, NULL),
(715, 45.00, 'Perempuan', 'TB/U', 88.40, 92.50, 96.70, 100.90, 113.50, 109.30, 105.10, NULL, NULL),
(716, 46.00, 'Perempuan', 'TB/U', 88.90, 93.10, 97.30, 101.50, 114.20, 110.00, 105.80, NULL, NULL),
(717, 47.00, 'Perempuan', 'TB/U', 89.30, 93.60, 97.90, 102.10, 114.90, 110.70, 106.40, NULL, NULL),
(718, 48.00, 'Perempuan', 'TB/U', 89.80, 94.10, 98.40, 102.70, 115.70, 111.30, 107.00, NULL, NULL),
(719, 49.00, 'Perempuan', 'TB/U', 90.30, 94.60, 99.00, 103.30, 116.40, 112.00, 107.70, NULL, NULL),
(720, 50.00, 'Perempuan', 'TB/U', 90.70, 95.10, 99.50, 103.90, 117.10, 112.70, 108.30, NULL, NULL),
(721, 51.00, 'Perempuan', 'TB/U', 91.20, 95.60, 100.10, 104.50, 117.70, 113.30, 108.90, NULL, NULL),
(722, 52.00, 'Perempuan', 'TB/U', 91.70, 96.10, 100.60, 105.00, 118.40, 114.00, 109.50, NULL, NULL),
(723, 53.00, 'Perempuan', 'TB/U', 92.10, 96.60, 101.10, 105.60, 119.10, 114.60, 110.10, NULL, NULL),
(724, 54.00, 'Perempuan', 'TB/U', 92.60, 97.10, 101.60, 106.20, 119.80, 115.20, 110.70, NULL, NULL),
(725, 55.00, 'Perempuan', 'TB/U', 93.00, 97.60, 102.20, 106.70, 120.40, 115.90, 111.30, NULL, NULL),
(726, 56.00, 'Perempuan', 'TB/U', 93.40, 98.10, 102.70, 107.30, 121.10, 116.50, 111.90, NULL, NULL),
(727, 57.00, 'Perempuan', 'TB/U', 93.90, 98.50, 103.20, 107.80, 121.80, 117.10, 112.50, NULL, NULL),
(728, 58.00, 'Perempuan', 'TB/U', 94.30, 99.00, 103.70, 108.40, 122.40, 117.70, 113.00, NULL, NULL),
(729, 59.00, 'Perempuan', 'TB/U', 94.70, 99.50, 104.20, 108.90, 123.10, 118.30, 113.60, NULL, NULL),
(730, 60.00, 'Perempuan', 'TB/U', 95.20, 99.90, 104.70, 109.40, 123.70, 118.90, 114.20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_gizi`
--

CREATE TABLE `status_gizi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bb_u` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pb_tb_u` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bb_pb_tb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_gizi`
--

INSERT INTO `status_gizi` (`id`, `bb_u`, `pb_tb_u`, `bb_pb_tb`, `created_at`, `updated_at`) VALUES
(1, 'BG', 'BP', 'O', NULL, NULL),
(2, 'SK', 'SP', 'BG', '2023-01-04 22:11:01', '2023-01-04 22:11:01'),
(3, 'SK', 'SP', 'O', '2023-01-05 19:31:50', '2023-01-05 19:31:50'),
(4, 'SK', 'SP', 'G', '2023-01-05 19:33:50', '2023-01-05 19:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superAdmin', 'superAdmin', '$2y$10$Um0XYoWm0EwFxF2yXmVAsOFoWaMWw9fUhWhap.gH8XxfAtMlVPBFC', 'ln6MAbQHNzgyPIdDERrnwRkNmhBn2KDv7Z1P8jXzqdI4DBCRv98m63jY0OP1', '2023-01-04 19:37:33', '2023-01-05 19:42:58'),
(2, 'adminPuskesmas', 'adminPuskesmas@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FaLNoGkbUSwEhJ5XJQ7TYH8BcjSurFwZQFDcrcojYHzPEXw89fJnNyUCmYiv', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(3, 'kader', 'kader@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i1Rl2qCLMtg5k1YpQv0g2U6tWQAvGRnc1jwz7ADgV5ofs0FepvxAEbkYUqfp', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(4, 'bidan', 'bidan@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FmfU1dYWnqTty2KPOXcNtmul3vopMKqlPMPgx8z3XBpfWYmzSse0fJRW2iHL', '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(5, NULL, 'admin123', '$2y$10$2yoTs7CQieA.HAFaLdZPROK/z..5dyDmYpOrXxURhUcyh3Lp4VHwC', NULL, '2023-01-04 19:39:51', '2023-01-04 19:41:16'),
(6, NULL, 'admin kedua', '$2y$10$nJU8t8ri4aZfVl9O6H/bC.Jp4Ri.rEoordNaO3I5hZVvh2GE2oDXe', NULL, '2023-01-05 21:18:47', '2023-01-05 21:18:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_user_id_foreign` (`user_id`);

--
-- Indexes for table `admin_puskesmas`
--
ALTER TABLE `admin_puskesmas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_puskesmas_user_id_foreign` (`user_id`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidan_user_id_foreign` (`user_id`);

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`no_pemeriksaan_gizi`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jenis_imunisasi`
--
ALTER TABLE `jenis_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kader_user_id_foreign` (`user_id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluargas`
--
ALTER TABLE `keluargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posyandus`
--
ALTER TABLE `posyandus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `standar_who`
--
ALTER TABLE `standar_who`
  ADD PRIMARY KEY (`id_standar_who`);

--
-- Indexes for table `status_gizi`
--
ALTER TABLE `status_gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_puskesmas`
--
ALTER TABLE `admin_puskesmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_imunisasi`
--
ALTER TABLE `jenis_imunisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keluargas`
--
ALTER TABLE `keluargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posyandus`
--
ALTER TABLE `posyandus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `standar_who`
--
ALTER TABLE `standar_who`
  MODIFY `id_standar_who` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT for table `status_gizi`
--
ALTER TABLE `status_gizi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `admin_puskesmas`
--
ALTER TABLE `admin_puskesmas`
  ADD CONSTRAINT `admin_puskesmas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bidan`
--
ALTER TABLE `bidan`
  ADD CONSTRAINT `bidan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kader`
--
ALTER TABLE `kader`
  ADD CONSTRAINT `kader_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
