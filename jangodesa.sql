-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2020 at 02:33 AM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jangodesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `debug` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `hal`, `activity`, `debug`, `created_at`, `updated_at`) VALUES
(1, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-09-23 15:52:14', 'Berhasil Login', '2020-09-23 07:52:14', '2020-09-23 07:52:14'),
(2, 'logout', 'User kuronekosan532@qmail.id telah logout, pada 2020-09-23 16:02:22', 'Berhasil Logout', '2020-09-23 08:02:22', '2020-09-23 08:02:22'),
(3, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-09-23 16:02:34', 'Berhasil Login', '2020-09-23 08:02:34', '2020-09-23 08:02:34'),
(4, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-09-23 22:51:31', 'Berhasil Login', '2020-09-23 14:51:31', '2020-09-23 14:51:31'),
(5, 'logout', 'User kuronekosan532@qmail.id telah logout, pada 2020-09-24 02:37:19', 'Berhasil Logout', '2020-09-23 18:37:19', '2020-09-23 18:37:19'),
(6, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-09-24 12:14:42', 'Berhasil Login', '2020-09-24 04:14:43', '2020-09-24 04:14:43'),
(7, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-09-25 17:07:59', 'Berhasil Login', '2020-09-25 09:07:59', '2020-09-25 09:07:59'),
(8, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 20:10:00', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 12:10:00', '2020-09-25 12:10:00'),
(9, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 20:10:13', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"aaaaJango Desa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 12:10:13', '2020-09-25 12:10:13'),
(10, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 20:10:35', '{\"before\":{\"h1\":\"aaaaJango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsummm\"}}', '2020-09-25 12:10:35', '2020-09-25 12:10:35'),
(11, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 20:10:48', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsummm\"},\"after\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 12:10:48', '2020-09-25 12:10:48'),
(12, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 21:46:14', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 13:46:14', '2020-09-25 13:46:14'),
(13, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 22:00:49', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desaa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 14:00:49', '2020-09-25 14:00:49'),
(14, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada2020-09-25 22:00:53', '{\"before\":{\"h1\":\"Jango Desaa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"}}', '2020-09-25 14:00:53', '2020-09-25 14:00:53'),
(15, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupload file sebanyak 7 pada2020-09-26 01:25:02', '[{\"original_name\":\"57063.jpg\",\"modified_name\":\"1601054700_5f6e27ec38200.jpg\",\"size\":\"1518.71Kb\"},{\"original_name\":\"403029.jpg\",\"modified_name\":\"1601054701_5f6e27ed23824.jpg\",\"size\":\"167.99Kb\"},{\"original_name\":\"403041.jpg\",\"modified_name\":\"1601054701_5f6e27ed6fb43.jpg\",\"size\":\"133.55Kb\"},{\"original_name\":\"403043.jpg\",\"modified_name\":\"1601054701_5f6e27edb63f0.jpg\",\"size\":\"137.74Kb\"},{\"original_name\":\"403204.jpg\",\"modified_name\":\"1601054701_5f6e27ede47c7.jpg\",\"size\":\"240.91Kb\"},{\"original_name\":\"Kuroneko_s2_profile.jpg\",\"modified_name\":\"1601054702_5f6e27ee4465f.jpg\",\"size\":\"168.75Kb\"}]', '2020-09-25 17:25:02', '2020-09-25 17:25:02'),
(16, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupload file sebanyak 2 pada 2020-09-26 01:34:21', '[{\"original_name\":\"anime-girl-barefoot-blonde-sky-stars-sunset-4k-cg-3840x2400.jpg\",\"modified_name\":\"1601055260_5f6e2a1c1245b.jpg\",\"size\":\"598.68Kb\"}]', '2020-09-25 17:34:21', '2020-09-25 17:34:21'),
(17, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-09-26 02:27:47', '1601055260_5f6e2a1c1245b.jpg', '2020-09-25 18:27:47', '2020-09-25 18:27:47'),
(18, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-09-26 02:29:24', '1601054702_5f6e27ee4465f.jpg', '2020-09-25 18:29:24', '2020-09-25 18:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videos_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `videos_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_images` text COLLATE utf8_unicode_ci,
  `sejarah` text COLLATE utf8_unicode_ci NOT NULL,
  `visi_misi` text COLLATE utf8_unicode_ci NOT NULL,
  `donasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tim` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `judul_images`, `sejarah`, `visi_misi`, `donasi`, `tim`, `created_at`, `updated_at`) VALUES
(1, '{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"}', '{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama “Jango Desa” dengan makna “kembali pulang membawa buah tangan” merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"1\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"2\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"3\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"4\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"5\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"6\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"7\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global. \"},\"lingkup\":{\"1\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"2\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"3\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}', '{\"visi\":\"wadah pemberdayaan literasi digital sebagai bentuk kreatifitas  komunitas dalam menyelaraskan budaya dan teknologi.\",\"misi\":{\"1\":\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"2\":\"menegakna kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"3\":\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"4\":\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"5\":\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"}}', 'Lorem Ipsum', '{\"desainer\":\"Lorem Ipsum\",\"programmer\":\"lOrem iPsum\",\"Ketua\":\"loRem ipSum\",\"Wakil\":\"lorEm ipsUm\",\"Anak Buah\":\"loreM ipsuM\"}', '2020-09-20 07:10:09', '2020-09-25 14:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `url`, `class`, `home_id`, `created_at`, `updated_at`) VALUES
(3, 'alamat', 'Lorem Ipsum', 'fa fa-map-marker', 1, NULL, NULL),
(4, 'email', 'lOrem iPsum', 'fa fa-envelope', 1, NULL, NULL),
(5, 'phone', 'loRem ipSum', 'fa fa-phone', 1, NULL, NULL),
(6, 'ig', 'lorEm ipsUm', 'fab fa-instagram', 1, NULL, NULL),
(7, 'fb', 'loreM ipsuM', 'fab fa-facebook', 1, NULL, NULL),
(8, 'gmaps', 'LOREM IPSUM', 'fab fa-google', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_20_060313_create_homes_table', 1),
(5, '2020_09_20_060315_create_videos_table', 1),
(7, '2020_09_20_061655_create_beritas_table', 1),
(8, '2020_09_20_061703_create_artikels_table', 1),
(9, '2020_09_20_061723_create_programs_table', 1),
(10, '2020_09_20_065525_create_slides_table', 1),
(11, '2020_09_20_060845_create_struktur__organisasis_table', 2),
(12, '2020_09_23_054106_create_tampilans_table', 3),
(15, '2014_10_12_000000_create_users_table', 4),
(17, '2020_09_23_151954_create_activities_table', 5),
(18, '2020_09_24_011952_create_kontaks_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Penelitian','Pemberdayaan Masyarakat') COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `home_id` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `home_id`, `keterangan`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 'Example of Slide(1)', 'slide-1.jpg', '2020-09-20 07:12:30', '2020-09-20 07:12:30'),
(2, 1, 'Example of Slide(2)', 'slide-2.jpg', '2020-09-20 07:12:30', '2020-09-20 07:12:30'),
(4, 1, 'Gambar ke-1 yang diupload pada 2020-09-26 01:25:01', '1601054700_5f6e27ec38200.jpg', '2020-09-25 17:25:01', '2020-09-25 17:25:01'),
(5, 1, 'Gambar ke-2 yang diupload pada 2020-09-26 01:25:01', '1601054701_5f6e27ed23824.jpg', '2020-09-25 17:25:01', '2020-09-25 17:25:01'),
(6, 1, 'Gambar ke-3 yang diupload pada 2020-09-26 01:25:01', '1601054701_5f6e27ed6fb43.jpg', '2020-09-25 17:25:01', '2020-09-25 17:25:01'),
(7, 1, 'Gambar ke-4 yang diupload pada 2020-09-26 01:25:01', '1601054701_5f6e27edb63f0.jpg', '2020-09-25 17:25:01', '2020-09-25 17:25:01'),
(8, 1, 'Gambar ke-5 yang diupload pada 2020-09-26 01:25:02', '1601054701_5f6e27ede47c7.jpg', '2020-09-25 17:25:02', '2020-09-25 17:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `struktur__organisasis`
--

CREATE TABLE `struktur__organisasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `struktur__organisasis`
--

INSERT INTO `struktur__organisasis` (`id`, `nama`, `jabatan`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Farida Indifitriani,M.Sc', 'Direktur', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(2, 'Nabil Taqiuddin Majid', 'Koordinator', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(3, 'Khairunnisa Salsabila P.', 'Penelitian', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(4, 'Nurlinda', 'Wakil Koordinator 1', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(5, 'Mita Putri Yanti', 'Content Creator', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(6, 'Mia Murni Mahligai P.', 'Web Developer', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(7, 'Mega Tazayyun', 'Wakil Koordinator 2', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(8, 'Rini Putri Adekayanti', 'Pemberdayaan', 'img/bagan/dummy-pengurus.png', NULL, NULL),
(9, 'Nurul Badriya', 'Keorganisasian', 'img/bagan/dummy-pengurus.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tampilans`
--

CREATE TABLE `tampilans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tampilan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tampilans`
--

INSERT INTO `tampilans` (`id`, `tampilan`, `created_at`, `updated_at`) VALUES
(1, 'Beranda', '2020-09-22 21:44:32', '2020-09-22 21:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sandy Maulana', 'kuronekosan532@qmail.id', NULL, '$2y$10$0j19KxC6tELbxVEgB0emQeQ6ZLWf2jQVHfyklIj/thWhemgCwjEj6', NULL, '2020-09-23 07:36:23', '2020-09-23 07:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bagian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `bagian`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Video Tentang Jango Desa', 'Home_Sejarah_01', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/LTlNKbePnDM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_videos_id_foreign` (`videos_id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_videos_id_foreign` (`videos_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontaks_home_id_foreign` (`home_id`);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_home_id_foreign` (`home_id`);

--
-- Indexes for table `struktur__organisasis`
--
ALTER TABLE `struktur__organisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tampilans`
--
ALTER TABLE `tampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `struktur__organisasis`
--
ALTER TABLE `struktur__organisasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tampilans`
--
ALTER TABLE `tampilans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_videos_id_foreign` FOREIGN KEY (`videos_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_videos_id_foreign` FOREIGN KEY (`videos_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD CONSTRAINT `kontaks_home_id_foreign` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_home_id_foreign` FOREIGN KEY (`home_id`) REFERENCES `homes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
