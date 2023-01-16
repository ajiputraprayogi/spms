-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 03:11 AM
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
-- Database: `db_spms`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `fk` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nikah` varchar(50) DEFAULT NULL,
  `anak_ke` varchar(50) DEFAULT NULL,
  `jumlah_saudara` varchar(50) DEFAULT NULL,
  `tinggi` varchar(50) DEFAULT NULL,
  `berat_badan` varchar(50) DEFAULT NULL,
  `riwayat_penyakit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `fk`, `user_id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `nikah`, `anak_ke`, `jumlah_saudara`, `tinggi`, `berat_badan`, `riwayat_penyakit`) VALUES
(20, 'FK001', '4', 'Test', 'Teluk Belengkong', '13-12-2022', 'Ngronggo', '082675625726', 'test@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'FK002', '11', 'Aji Putra Prayogi', 'Teluk Belengkong', '02-01-2002', 'Blabak', '082237666321', 'untung.muladi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'FK003', '12', 'YUNI SUGIARTI', 'Teluk Belengkong', '14-12-2022', 'Blabak', '6282237666321', 'write@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'FK004', '13', 'coba', 'Teluk Belengkong', '02-01-2002', 'Blabak', '082237666321', 'coba@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'FK005', '15', 'Abdul Bais', 'Teluk Belengkong', '03-01-2023', 'Blabak', '082237666321', 'abdulbais@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'FK006', '16', 'Irvan Bagus Fauzi', 'Teluk Belengkong', '05-01-2023', 'Blabak', '082237666321', 'irvanbagusfauzi@gmail.com', 'Belum', '1', '0', '165', '72', 'Tidak Menular'),
(34, 'FK007', '19', 'Deva Satrio', 'Gurah', '03-01-2023', 'Gurah', '081234567890', 'deifasatrio@gmail.com', 'Belum', '1', '1', '170', '83', 'Tidak Menular');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id` int(11) NOT NULL,
  `fk` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `sd` varchar(50) DEFAULT NULL,
  `sd_tahun_lulus` text DEFAULT NULL,
  `sd_nilai_akhir` text DEFAULT NULL,
  `sd_berkas` text DEFAULT NULL,
  `smp` text DEFAULT NULL,
  `smp_tahun_lulus` text DEFAULT NULL,
  `smp_nilai_akhir` varchar(50) DEFAULT NULL,
  `smp_berkas` varchar(50) DEFAULT NULL,
  `sma` varchar(50) DEFAULT NULL,
  `sma_jurusan` varchar(50) DEFAULT NULL,
  `sma_tahun_lulus` varchar(50) DEFAULT NULL,
  `sma_nilai_akhir` varchar(50) DEFAULT NULL,
  `sma_berkas` varchar(50) DEFAULT NULL,
  `dsatu` varchar(50) DEFAULT NULL,
  `dsatu_jurusan` varchar(50) DEFAULT NULL,
  `dsatu_tahun_lulus` varchar(50) DEFAULT NULL,
  `dsatu_nilai_akhir` varchar(50) DEFAULT NULL,
  `dsatu_berkas` varchar(50) DEFAULT NULL,
  `ddua` varchar(50) DEFAULT NULL,
  `ddua_jurusan` varchar(50) DEFAULT NULL,
  `ddua_tahun_lulus` varchar(50) DEFAULT NULL,
  `ddua_nilai_akhir` varchar(50) DEFAULT NULL,
  `ddua_berkas` varchar(50) DEFAULT NULL,
  `dtiga` varchar(50) DEFAULT NULL,
  `dtiga_jurusan` varchar(50) DEFAULT NULL,
  `dtiga_tahun_lulus` varchar(50) DEFAULT NULL,
  `dtiga_nilai_akhir` varchar(50) DEFAULT NULL,
  `dtiga_berkas` varchar(50) DEFAULT NULL,
  `ssatu` varchar(50) DEFAULT NULL,
  `ssatu_jurusan` varchar(50) DEFAULT NULL,
  `ssatu_tahun_lulus` varchar(50) DEFAULT NULL,
  `ssatu_nilai_akhir` varchar(50) DEFAULT NULL,
  `ssatu_berkas` varchar(50) DEFAULT NULL,
  `sdua` varchar(50) DEFAULT NULL,
  `sdua_jurusan` varchar(50) DEFAULT NULL,
  `sdua_tahun_lulus` varchar(50) DEFAULT NULL,
  `sdua_nilai_akhir` varchar(50) DEFAULT NULL,
  `sdua_berkas` varchar(50) DEFAULT NULL,
  `stiga` varchar(50) DEFAULT NULL,
  `stiga_jurusan` varchar(50) DEFAULT NULL,
  `stiga_tahun_lulus` varchar(50) DEFAULT NULL,
  `stiga_nilai_akhir` varchar(50) DEFAULT NULL,
  `stiga_berkas` varchar(50) DEFAULT NULL,
  `bahasa_asing` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`id`, `fk`, `user_id`, `sd`, `sd_tahun_lulus`, `sd_nilai_akhir`, `sd_berkas`, `smp`, `smp_tahun_lulus`, `smp_nilai_akhir`, `smp_berkas`, `sma`, `sma_jurusan`, `sma_tahun_lulus`, `sma_nilai_akhir`, `sma_berkas`, `dsatu`, `dsatu_jurusan`, `dsatu_tahun_lulus`, `dsatu_nilai_akhir`, `dsatu_berkas`, `ddua`, `ddua_jurusan`, `ddua_tahun_lulus`, `ddua_nilai_akhir`, `ddua_berkas`, `dtiga`, `dtiga_jurusan`, `dtiga_tahun_lulus`, `dtiga_nilai_akhir`, `dtiga_berkas`, `ssatu`, `ssatu_jurusan`, `ssatu_tahun_lulus`, `ssatu_nilai_akhir`, `ssatu_berkas`, `sdua`, `sdua_jurusan`, `sdua_tahun_lulus`, `sdua_nilai_akhir`, `sdua_berkas`, `stiga`, `stiga_jurusan`, `stiga_tahun_lulus`, `stiga_nilai_akhir`, `stiga_berkas`, `bahasa_asing`) VALUES
(13, 'FK001', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'FK002', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'FK003', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'FK004', '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'FK005', '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'FK006', '16', 'test', 'test', 'test', NULL, 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', 'test', NULL, 'Mandarin'),
(136, 'FK007', '19', 'SD Blabak 4', '2014', '70', '1673681415-download-(1).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '');

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
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) NOT NULL,
  `id_perusahaan` bigint(20) NOT NULL DEFAULT 0,
  `kode` varchar(100) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `minimal_pendidikan` enum('SD','SMP','SMA/SMK','D1','D2','D3','S1','S2','S3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `id_perusahaan`, `kode`, `nama`, `minimal_pendidikan`) VALUES
(11, 11, 'KODE001', 'Jabatan Satu', 'S3'),
(13, 13, 'KODE002', 'Jabatan Dua', 'SD'),
(14, 14, 'KODE003', 'Jabatan Tiga', 'SMP'),
(15, 13, 'KODE004', 'Jabatan Empat', 'SMA/SMK');

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
(4, '2022_08_22_115613_create_permission_tables', 2);

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
(1, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nonakademik`
--

CREATE TABLE `nonakademik` (
  `id` bigint(20) NOT NULL,
  `fk` varchar(50) NOT NULL DEFAULT '0',
  `user_id` varchar(50) NOT NULL DEFAULT '0',
  `nonakademik_satu` varchar(50) DEFAULT NULL,
  `nonakademik_dua` varchar(50) DEFAULT NULL,
  `nonakademik_tiga` varchar(50) DEFAULT NULL,
  `nonakademik_level` varchar(50) DEFAULT NULL,
  `nonakademik_berkas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonakademik`
--

INSERT INTO `nonakademik` (`id`, `fk`, `user_id`, `nonakademik_satu`, `nonakademik_dua`, `nonakademik_tiga`, `nonakademik_level`, `nonakademik_berkas`) VALUES
(2, 'FK006', '16', 'test', 'test', 'test', NULL, ''),
(3, 'FK006', '16', 'test', 'test', 'test', NULL, ''),
(18, 'FK007', '19', 'test', 'test', 'test', 'Basic', '1673681415-download-(1).jpg'),
(19, 'FK007', '19', 'test', 'test', 'test', 'Advance', '1673681415-download-(1).jpg');

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
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id` bigint(20) NOT NULL,
  `fk` varchar(50) NOT NULL DEFAULT '0',
  `user_id` varchar(50) NOT NULL DEFAULT '0',
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `lama_bekerja` varchar(50) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `pengalaman_berkas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id`, `fk`, `user_id`, `nama_perusahaan`, `jabatan`, `lama_bekerja`, `tahun`, `pengalaman_berkas`) VALUES
(3, 'FK006', '16', 'test', 'test', 'test', 'test', ''),
(4, 'FK006', '16', 'test', 'test', 'test', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_grub` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `permission_grub`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-users', 'users', 'web', NULL, NULL),
(2, 'create-users', 'users', 'web', NULL, NULL),
(3, 'edit-users', 'users', 'web', NULL, NULL),
(4, 'delete-users', 'users', 'web', NULL, NULL),
(5, 'view-roles', 'roles', 'web', NULL, NULL),
(6, 'create-roles', 'roles', 'web', NULL, NULL),
(7, 'edit-roles', 'roles', 'web', NULL, NULL),
(9, 'delete-roles', 'roles', 'web', NULL, NULL),
(10, 'view-permission', 'permission', 'web', NULL, NULL),
(11, 'create-permission', 'permission', 'web', NULL, NULL),
(12, 'edit-permission', 'permission', 'web', NULL, NULL),
(13, 'delete-permission', 'permission', 'web', NULL, NULL),
(17, 'setting-web', 'other', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `kode`, `nama`) VALUES
(11, 'KODE001', 'Perusahaan A'),
(13, 'KODE002', 'Perusahaan B'),
(14, 'KODE003', 'Perusahaan C');

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
(1, 'Super Admin', 'web', '2022-08-22 19:02:12', '2022-08-22 19:02:12'),
(2, 'Admin', 'web', '2022-08-22 19:02:30', '2022-08-22 19:02:30'),
(3, 'Guest', 'web', '2022-08-22 19:02:50', '2022-08-22 19:02:50');

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
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(7, 1),
(9, 1),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(12, 1),
(13, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting_web`
--

CREATE TABLE `setting_web` (
  `id` int(11) NOT NULL,
  `app_name` varchar(400) DEFAULT NULL,
  `app_alias` varchar(400) DEFAULT NULL,
  `app_logo` text DEFAULT NULL,
  `sidebar_type` varchar(200) DEFAULT NULL,
  `navbar_type` varchar(200) DEFAULT NULL,
  `navbar_color` varchar(200) DEFAULT NULL,
  `logo_bg_color` varchar(200) DEFAULT NULL,
  `brand_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_web`
--

INSERT INTO `setting_web` (`id`, `app_name`, `app_alias`, `app_logo`, `sidebar_type`, `navbar_type`, `navbar_color`, `logo_bg_color`, `brand_type`) VALUES
(1, 'SPMS', 'BL8', '1668493259-laravel.png', 'dark', 'dark', 'dark', 'dark', 'light');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` bigint(20) NOT NULL,
  `jenis_soal` varchar(100) DEFAULT NULL,
  `jumlah_soal_abc` varchar(100) DEFAULT NULL,
  `jumlah_soal_yt` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `minimal_score` varchar(100) DEFAULT NULL,
  `soal` text DEFAULT NULL,
  `tipe_soal` varchar(50) DEFAULT NULL,
  `a` varchar(50) DEFAULT NULL,
  `b` varchar(50) DEFAULT NULL,
  `c` varchar(50) DEFAULT NULL,
  `d` varchar(50) DEFAULT NULL,
  `jawaban` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `jenis_soal`, `jumlah_soal_abc`, `jumlah_soal_yt`, `status`, `minimal_score`, `soal`, `tipe_soal`, `a`, `b`, `c`, `d`, `jawaban`) VALUES
(113, 'Paket A', '3', '2', 'Aktif', '80', 'test', 'Abc', 'a', 'b', 'c', 'd', 'A'),
(114, 'Paket A', '3', '2', 'Aktif', '80', 'test2', 'Abc', 'a', 'b', 'c', 'd', 'B'),
(115, 'Paket A', '3', '2', 'Aktif', '80', 'test3', 'Abc', 'a', 'b', 'c', 'd', 'C'),
(116, 'Paket A', '3', '2', 'Aktif', '80', 'test4', 'YaTidak', '', '', '', '', 'Ya'),
(117, 'Paket A', '3', '2', 'Aktif', '80', 'test5', 'YaTidak', '', '', '', '', 'Tidak'),
(118, 'Paket B', '1', '0', 'Aktif', '10', 'test', 'Abc', 'a', 'b', 'c', 'd', 'A'),
(119, 'Paket C', '1', '0', 'Aktif', '100', 'test', 'Abc', 'a', 'b', 'c', 'd', 'A'),
(120, 'Paket D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'Paket E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'Paket F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'Paket G', '1', '0', 'Aktif', '100', 'test', 'Abc', 'a', 'b', 'c', 'd', 'C'),
(124, 'Paket H', '1', '0', 'Aktif', '100', 'test', 'Abc', 'a', 'b', 'c', 'd', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) NOT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  `jenis_soal` varchar(50) DEFAULT NULL,
  `nilai` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `id_user`, `jenis_soal`, `nilai`, `status`) VALUES
(29, '11', 'Paket A', '100', 'Lolos'),
(30, '11', 'Paket G', '0', 'Gagal'),
(31, '11', 'Paket H', '0', 'Gagal'),
(32, '11', 'Paket B', '100', 'Lolos'),
(33, '16', 'Paket A', NULL, 'Gagal'),
(34, '16', 'Paket H', NULL, 'Gagal'),
(35, '16', 'Paket C', NULL, 'Gagal'),
(36, '16', 'Paket G', NULL, 'Lolos');

-- --------------------------------------------------------

--
-- Table structure for table `upload_berkas`
--

CREATE TABLE `upload_berkas` (
  `id` int(11) NOT NULL,
  `fk` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `surat_lamaran` text DEFAULT NULL,
  `cv` text DEFAULT NULL,
  `pengalaman_kerja` text DEFAULT NULL,
  `portofolio` text DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `kk` text DEFAULT NULL,
  `ijazah_terakhir` text DEFAULT NULL,
  `transkrip_nilai` text DEFAULT NULL,
  `skck` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_berkas`
--

INSERT INTO `upload_berkas` (`id`, `fk`, `user_id`, `surat_lamaran`, `cv`, `pengalaman_kerja`, `portofolio`, `ktp`, `kk`, `ijazah_terakhir`, `transkrip_nilai`, `skck`, `foto`) VALUES
(12, 'FK001', '4', '', '', '', '', '', '', '', '', '', '1671870333-user.jpg'),
(13, 'FK002', '11', '', '', '', '1672315285-download-(1).jpg', '', '', '', '', '', ''),
(15, 'FK003', '12', '', '', '', '', '', '', '', '', '1672318631-download-(1).jpg', ''),
(16, 'FK004', '13', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg', '1672405355-download-(1).jpg'),
(18, 'FK006', '16', '1673005887-download-(1).jpg', '1673005887-download-(1).jpg', '1673005887-download-(1).jpg', '1673005887-download-(1).jpg', '1673005887-download-(1).jpg', '1673005887-download-(1).jpg', NULL, NULL, '1673005887-download-(1).jpg', '1673005887-download-(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `level`, `email`, `email_verified_at`, `password`, `id_perusahaan`, `id_jabatan`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'superadmin', 'superadmin', '1', 'superadmin@test.id', NULL, '$2y$10$nXc3.CJunLIPF/MjcTQMaOYwBeTIPzG4adY/H187mgUPDSmCmlOQa', '', '', 'Y', NULL, '2022-11-14 04:46:25', '2022-11-14 04:46:37'),
(11, 'Aji Putra Prayogi', NULL, NULL, 'ajiputraprayogi@gmail.com', NULL, '$2y$10$.fo9fVVp5ZetXP3qaAiwT.yMaDaeJkIhQe6sxlyotmdzZPGX.GS7y', '', '', 'N', NULL, '2022-12-26 20:10:41', '2022-12-26 20:10:41'),
(12, 'syahril kharim', NULL, NULL, 'syahril@gmail.com', NULL, '$2y$10$SGk7WwF5e9uR5pXdhIC4a.AOkXzdki.rS6qCVYmySktETm1XHarJW', '', '', 'N', NULL, '2022-12-29 05:02:38', '2022-12-29 05:02:38'),
(13, 'coba', NULL, NULL, 'coba@gmail.com', NULL, '$2y$10$sPc9gQcTeZukjXBPXOHIRut62SdROpiQQYJBWjUeqokWo0LKGi8kq', '', '', 'N', NULL, '2022-12-30 06:00:17', '2022-12-30 06:00:17'),
(14, 'test2', NULL, NULL, 'test2@gmail.com', NULL, '$2y$10$JIte5VUrVOSapr6zqOYW3u0aWYXBQUooePTyIdFYEgOvhlT8Df9r.', '', '', 'N', NULL, '2022-12-30 07:15:52', '2022-12-30 07:15:52'),
(15, 'Abdul Bais', NULL, NULL, 'abdulbais@gmail.com', NULL, '$2y$10$wclmywJvSTFDXbqHs8g5Fuft/lfEwi7ZwXmGcFugov.n8/3oSZP6y', '', '', 'N', NULL, '2023-01-03 06:36:18', '2023-01-03 06:36:18'),
(16, 'Irvan Bagus Fauzi', NULL, NULL, 'irvanbagusfauzi@gmail.com', NULL, '$2y$10$Ij7XvMusMKIN/18soKo7oeVRdd95CEpqTuLBI6t1rhZjLaCCGwKSm', '', '', 'N', NULL, '2023-01-04 07:23:46', '2023-01-04 07:23:46'),
(17, 'asdf', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$nw5mdGBlytTGV0VDcbJegOYUO6dxHtbrP0l6BQNYDGxLKrGyT09Nm', '', '', 'N', NULL, '2023-01-04 07:25:25', '2023-01-04 07:25:25'),
(18, 'Adilwan Astra', NULL, NULL, 'adilwanastra@gmail.com', NULL, '$2y$10$J5ufgGRGxeZoqnfETsL/rumheXnD9UMSRdzdqXOJVxbJIfnToAvqW', '13', '13', 'N', NULL, '2023-01-04 07:26:53', '2023-01-04 07:26:53'),
(19, 'Deva Satrio', NULL, NULL, 'deifasatrio@gmail.com', NULL, '$2y$10$Z1szpFcuJFcf/m1i3Y.wNeotA0mIfxG/TyQO8TMphLvzObekoQCLy', '13', '13', 'N', NULL, '2023-01-13 04:54:19', '2023-01-13 04:54:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
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
-- Indexes for table `nonakademik`
--
ALTER TABLE `nonakademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
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
-- Indexes for table `setting_web`
--
ALTER TABLE `setting_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
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
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nonakademik`
--
ALTER TABLE `nonakademik`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting_web`
--
ALTER TABLE `setting_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

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
