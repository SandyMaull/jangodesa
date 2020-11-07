-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 06:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `debug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `hal`, `activity`, `debug`, `created_at`, `updated_at`) VALUES
(103, 'login', 'User kuronekosan532@qmail.id telah login, pada 2020-11-08 01:26:41', 'Berhasil Login', '2020-11-07 18:26:41', '2020-11-07 18:26:41'),
(104, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data judul images pada 2020-11-08 01:26:51', '{\"before\":{\"h1\":\"Jango Desa\",\"h3\":\"Lorem Ipsum\"},\"after\":{\"h1\":\"Jango Desaaa\",\"h3\":\"Lorem Ipsumaa\"}}', '2020-11-07 18:26:51', '2020-11-07 18:26:51'),
(105, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupload image sliders sebanyak 2 pada 2020-11-08 01:27:34', '[{\"original_name\":\"3.png\",\"modified_name\":\"1604770054_5fa6d906bc09c.png\",\"size\":\"5.23Kb\"}]', '2020-11-07 18:27:34', '2020-11-07 18:27:34'),
(106, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupload image sliders sebanyak 1 pada 2020-11-08 01:30:04', '[{\"original_name\":\"e2303bc2a526479d83a536af40aaa39fe2303bc2a526479d83a536af40aaa39f.jpg\",\"modified_name\":\"1604770204_5fa6d99cca054.jpg\",\"size\":\"64.53Kb\"}]', '2020-11-07 18:30:04', '2020-11-07 18:30:04'),
(107, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupload image sliders sebanyak 3 pada 2020-11-08 01:30:30', '[{\"original_name\":\"5e1vtjytx4p51.jpg\",\"modified_name\":\"1604770230_5fa6d9b6715d4.jpg\",\"size\":\"114.66Kb\"},{\"original_name\":\"e2303bc2a526479d83a536af40aaa39fe2303bc2a526479d83a536af40aaa39f.jpg\",\"modified_name\":\"1604770230_5fa6d9b6899dd.jpg\",\"size\":\"64.53Kb\"},{\"original_name\":\"hiclipart.com.png\",\"modified_name\":\"1604770230_5fa6d9b69a038.png\",\"size\":\"747.64Kb\"}]', '2020-11-07 18:30:30', '2020-11-07 18:30:30'),
(108, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-11-08 01:31:19', '1604770204_5fa6d99cca054.jpg', '2020-11-07 18:31:19', '2020-11-07 18:31:19'),
(109, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-11-08 01:31:41', '1604770230_5fa6d9b6899dd.jpg', '2020-11-07 18:31:41', '2020-11-07 18:31:41'),
(110, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-11-08 01:31:44', '1604770230_5fa6d9b69a038.png', '2020-11-07 18:31:44', '2020-11-07 18:31:44'),
(111, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-11-08 01:31:46', '1604770230_5fa6d9b6715d4.jpg', '2020-11-07 18:31:46', '2020-11-07 18:31:46'),
(112, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupdate image sliders sebanyak 1 file,  pada 2020-11-08 01:31:50', '[{\"original_name\":\"e2303bc2a526479d83a536af40aaa39fe2303bc2a526479d83a536af40aaa39f.jpg\",\"modified_name\":\"1604770310_5fa6da0680f00.jpg\",\"size\":\"64.53Kb\"}]', '2020-11-07 18:31:50', '2020-11-07 18:31:50'),
(113, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengupdate image sliders,  pada 2020-11-08 01:32:43', '[{\"original_name\":\"5e1vtjytx4p51.jpg\",\"modified_name\":\"1604770363_5fa6da3b48259.jpg\",\"size\":\"114.66Kb\"}]', '2020-11-07 18:32:43', '2020-11-07 18:32:43'),
(114, 'beranda', 'kuronekosan532@qmail.id telah berhasil menghapus image slider pada 2020-11-08 01:33:02', '1604770363_5fa6da3b48259.jpg', '2020-11-07 18:33:02', '2020-11-07 18:33:02'),
(115, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:33:14', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.aa\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:33:14', '2020-11-07 18:33:14'),
(116, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:33:46', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.aa\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:33:46', '2020-11-07 18:33:46'),
(117, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:34:17', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"<script>alert(\\\"ujank gaming\\\");</script>\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:34:17', '2020-11-07 18:34:17'),
(118, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:34:48', '{\"before\":{\"kalimat\":\"<script>alert(\\\"ujank gaming\\\");</script>\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:34:48', '2020-11-07 18:34:48'),
(119, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:35:08', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"<script>alert(\\\"Ujank Gaming\\\");</script>\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:35:08', '2020-11-07 18:35:08'),
(120, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:35:21', '{\"before\":{\"kalimat\":\"<script>alert(\\\"Ujank Gaming\\\");</script>\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:35:21', '2020-11-07 18:35:21'),
(121, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:35:43', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"<script>alert(\\\"Ujank Gaming\\\");</script>\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:35:43', '2020-11-07 18:35:43'),
(122, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data sejarah pada 2020-11-08 01:35:58', '{\"before\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"<script>alert(\\\"Ujank Gaming\\\");</script>\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}},\"after\":{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}}', '2020-11-07 18:35:58', '2020-11-07 18:35:58'),
(123, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data Visi&Misi pada 2020-11-08 01:37:38', '{\"before\":{\"visi\":\"wadah pemberdayaan literasi digital sebagai bentuk kreatifitas  komunitas dalam menyelaraskan budaya dan teknologi\",\"misi\":[\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"menegakan kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"]},\"after\":{\"visi\":\"<script>alert(\\\"UJANK GAMING\\\");</script>\",\"misi\":[\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"menegakan kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"]}}', '2020-11-07 18:37:38', '2020-11-07 18:37:38'),
(124, 'beranda', 'kuronekosan532@qmail.id telah berhasil mengubah data Visi&Misi pada 2020-11-08 01:37:47', '{\"before\":{\"visi\":\"<script>alert(\\\"UJANK GAMING\\\");</script>\",\"misi\":[\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"menegakan kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"]},\"after\":{\"visi\":\"wadah pemberdayaan literasi digital sebagai bentuk kreatifitas  komunitas dalam menyelaraskan budaya dan teknologi\",\"misi\":[\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"menegakan kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"]}}', '2020-11-07 18:37:47', '2020-11-07 18:37:47');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_images` text COLLATE utf8_unicode_ci DEFAULT NULL,
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
(1, '{\"h1\":\"Jango Desaaa\",\"h3\":\"Lorem Ipsumaa\"}', '{\"kalimat\":\"Jango desa dideklarasikan di Universitas Teknologi Sumbawa pada hari Senin, 30 juni 2020 yang berkedudukan di Nusa Tenggara Barat. Komunitas yang bernama \'Jango Desa\' dengan makna \'kembali pulang membawa buah tangan\' merupakan profesi penelitian di Sumbawa yang berlandaskan teknologi dan budaya.\",\"tujuan\":{\"0\":\"Menciptakan peneliti yang berintegritas dan profesional dalam keilmuan bertaraf nasional\",\"1\":\"Memperjuangkan kesejahteraan dan hak-hak penelitiannya\",\"2\":\"Mengembangkan kapasitas dan kompetensi peneliti\",\"3\":\"Meningkatkan kualitas penelitian, pengembangan, pengkajian dan atau penerapan ilmu pengetahuan Tekhnologi Seni dan Budaya yang dapat segera dimanfaatkan oleh masyarakat setempat.\",\"4\":\"Menjalin sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat.\",\"5\":\"Meningkatkan integritas, etika dan perilaku peneliti melalui penyusunan dan penegakan\",\"6\":\"Memberikan kontribusi dalam menyejajarkan kemampuan ilmu pengetahuan tekhnologi seni dan budaya nasional dengan tingkat kemapanan ilmu pengetahuan teknologi seni dan budaya di tingkat global.\"},\"lingkup\":{\"0\":\"Menghimpun dan membina anggota komunitas sesuai dengan sifat dan tujuan jango desa serta peraturan perundang-undangan.\",\"1\":\"Melaksanakan kegiatan sesuai dengan asas dan tujuan jango desa dalam berbagai bidang\",\"2\":\"Menyelenggarakan kegiatan peningkatan kompetensi peneliti komunitas jango desa berupa penelitian,pengembangan,pengkajian dan penerapan ilmu pengetahuan tekhnologi seni dan budaya pendidikan dan pelatihan sertifikasi profesi serta penghargaan prestasi secara mandiri dan bebas dari pengaruh siapapun.\"}}', '{\"visi\":\"wadah pemberdayaan literasi digital sebagai bentuk kreatifitas  komunitas dalam menyelaraskan budaya dan teknologi\",\"misi\":[\"meningkatkan literasi digital anggota komunitas jango desa dengan orientasi keilmuan multidisipliner\",\"menegakan kode etik dan kode prilaku peneliti yang selanjutnya disigkat KEKPP terkait dengan tugas penelitian,pengembangan,pengkajian dan atau penerapan ilmu pengetahuan, teknologi, seni dan budaya.\",\"melakukan kegiatan pengabdian kepada masyarakat sesuai kebutuhan.\",\"Membangun sinergi antara peneliti, pemerintah daerah, perguruan tinggi dan masyarakat untuk menghasilkan ilmu engetahan teknologi,seni dan budaya sbagai landasan kebijakan pembagangunan penelitian.\",\"Sebagai pelopor dalam menyelaraskan teknologi dan budaya di Sumbawa.\"]}', 'Lorem Ipsum', '{\"desainer\":\"Lorem Ipsum\",\"programmer\":\"lOrem iPsum\",\"Ketua\":\"loRem ipSum\",\"Wakil\":\"lorEm ipsUm\",\"Anak Buah\":\"loreM ipsuM\"}', '2020-09-20 07:10:09', '2020-11-07 18:37:47');

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
(2, 1, 'Example of Slide(2)', 'slide-2.jpg', '2020-09-20 07:12:30', '2020-09-20 07:12:30');

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
(1, 'Farida Indifitriani,M.Sc', 'Direktur', 'img/bagan/1604769811_5fa6d81331a9a.png', NULL, '2020-11-07 18:24:30'),
(2, 'Nabil Taqiuddin Majid', 'Koordinator', 'img/bagan/2.png', NULL, NULL),
(3, 'Khairunnisa Salsabila P.', 'Penelitian', 'img/bagan/3.png', NULL, NULL),
(4, 'Nurlinda', 'Wakil Koordinator 1', 'img/bagan/4.png', NULL, NULL),
(5, 'Mita Putri Yanti', 'Content Creator', 'img/bagan/5.png', NULL, NULL),
(6, 'Mia Murni Mahligai P.', 'Web Developer', 'img/bagan/6.png', NULL, NULL),
(7, 'Mega Tazayyun', 'Wakil Koordinator 2', 'img/bagan/7.png', NULL, NULL),
(8, 'Rini Putri Adekayanti', 'Pemberdayaan', 'img/bagan/8.png', NULL, NULL),
(9, 'Nurul Badriya', 'Keorganisasian', 'img/bagan/9.png', NULL, NULL);

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
(1, 'Video Tentang Jango Desa', 'Home_Sejarah_01', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/LTlNKbePnDM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '2020-11-07 18:35:58');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
