-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2019 pada 01.43
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_sinta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `kode_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'sinta tri novira', 'admin', '$2y$10$/XOzh2MvMrIs3mWBGetLR.vzLU4Hodeq06.tPhZoGWyLGiH.blD3W');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id_bobotkriteria` int(11) NOT NULL,
  `kode_jurusan` varchar(16) DEFAULT NULL,
  `kode_kriteria` varchar(16) DEFAULT NULL,
  `kode_perbandingan` varchar(16) DEFAULT NULL,
  `nilai_bobot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id_bobotkriteria`, `kode_jurusan`, `kode_kriteria`, `kode_perbandingan`, `nilai_bobot`) VALUES
(1, 'P001', 'C01', 'C01', 1),
(2, 'P001', 'C01', 'C02', 0.333333),
(3, 'P001', 'C01', 'C03', 1),
(4, 'P001', 'C01', 'C04', 0.5),
(5, 'P001', 'C01', 'C05', 0.5),
(6, 'P001', 'C02', 'C01', 3),
(7, 'P001', 'C02', 'C02', 1),
(8, 'P001', 'C02', 'C03', 3),
(9, 'P001', 'C02', 'C04', 3),
(10, 'P001', 'C02', 'C05', 3),
(11, 'P001', 'C03', 'C01', 1),
(12, 'P001', 'C03', 'C02', 0.333),
(13, 'P001', 'C03', 'C03', 1),
(14, 'P001', 'C03', 'C04', 1),
(15, 'P001', 'C03', 'C05', 1),
(16, 'P001', 'C04', 'C01', 2),
(17, 'P001', 'C04', 'C02', 0.333333),
(18, 'P001', 'C04', 'C03', 1),
(19, 'P001', 'C04', 'C04', 1),
(20, 'P001', 'C04', 'C05', 2),
(21, 'P001', 'C05', 'C01', 2),
(22, 'P001', 'C05', 'C02', 0.333),
(23, 'P001', 'C05', 'C03', 1),
(24, 'P001', 'C05', 'C04', 0.5),
(25, 'P001', 'C05', 'C05', 1),
(26, 'P002', 'C01', 'C01', 1),
(27, 'P002', 'C01', 'C02', 0.333),
(28, 'P002', 'C01', 'C03', 1),
(29, 'P002', 'C01', 'C04', 0.5),
(30, 'P002', 'C01', 'C05', 0.5),
(31, 'P002', 'C02', 'C01', 3),
(32, 'P002', 'C02', 'C02', 1),
(33, 'P002', 'C02', 'C03', 3),
(34, 'P002', 'C02', 'C04', 3),
(35, 'P002', 'C02', 'C05', 3),
(36, 'P002', 'C03', 'C01', 1),
(37, 'P002', 'C03', 'C02', 0.333),
(38, 'P002', 'C03', 'C03', 1),
(39, 'P002', 'C03', 'C04', 1),
(40, 'P002', 'C03', 'C05', 1),
(41, 'P002', 'C04', 'C01', 2),
(42, 'P002', 'C04', 'C02', 0.333),
(43, 'P002', 'C04', 'C03', 1),
(44, 'P002', 'C04', 'C04', 1),
(45, 'P002', 'C04', 'C05', 2),
(46, 'P002', 'C05', 'C01', 2),
(47, 'P002', 'C05', 'C02', 0.333),
(48, 'P002', 'C05', 'C03', 1),
(49, 'P002', 'C05', 'C04', 0.5),
(50, 'P002', 'C05', 'C05', 1),
(51, 'P003', 'C01', 'C01', 1),
(52, 'P003', 'C01', 'C02', 0.333333),
(53, 'P003', 'C01', 'C03', 0.5),
(54, 'P003', 'C01', 'C04', 0.5),
(55, 'P003', 'C01', 'C05', 0.5),
(56, 'P003', 'C02', 'C01', 3),
(57, 'P003', 'C02', 'C02', 1),
(58, 'P003', 'C02', 'C03', 3),
(59, 'P003', 'C02', 'C04', 3),
(60, 'P003', 'C02', 'C05', 3),
(61, 'P003', 'C03', 'C01', 2),
(62, 'P003', 'C03', 'C02', 0.333),
(63, 'P003', 'C03', 'C03', 1),
(64, 'P003', 'C03', 'C04', 1),
(65, 'P003', 'C03', 'C05', 1),
(66, 'P003', 'C04', 'C01', 2),
(67, 'P003', 'C04', 'C02', 0.333),
(68, 'P003', 'C04', 'C03', 1),
(69, 'P003', 'C04', 'C04', 1),
(70, 'P003', 'C04', 'C05', 2),
(71, 'P003', 'C05', 'C01', 2),
(72, 'P003', 'C05', 'C02', 0.333),
(73, 'P003', 'C05', 'C03', 1),
(74, 'P003', 'C05', 'C04', 0.5),
(75, 'P003', 'C05', 'C05', 1),
(76, 'P004', 'C01', 'C01', 1),
(77, 'P004', 'C01', 'C02', 0.333),
(78, 'P004', 'C01', 'C03', 1),
(79, 'P004', 'C01', 'C04', 0.333),
(80, 'P004', 'C01', 'C05', 0.333),
(81, 'P004', 'C02', 'C01', 3),
(82, 'P004', 'C02', 'C02', 1),
(83, 'P004', 'C02', 'C03', 3),
(84, 'P004', 'C02', 'C04', 3),
(85, 'P004', 'C02', 'C05', 3),
(86, 'P004', 'C03', 'C01', 1),
(87, 'P004', 'C03', 'C02', 0.333),
(88, 'P004', 'C03', 'C03', 1),
(89, 'P004', 'C03', 'C04', 1),
(90, 'P004', 'C03', 'C05', 1),
(91, 'P004', 'C04', 'C01', 3),
(92, 'P004', 'C04', 'C02', 0.333),
(93, 'P004', 'C04', 'C03', 1),
(94, 'P004', 'C04', 'C04', 1),
(95, 'P004', 'C04', 'C05', 2),
(96, 'P004', 'C05', 'C01', 3),
(97, 'P004', 'C05', 'C02', 0.333),
(98, 'P004', 'C05', 'C03', 1),
(99, 'P004', 'C05', 'C04', 0.5),
(100, 'P004', 'C05', 'C05', 1),
(101, 'P005', 'C01', 'C01', 1),
(102, 'P005', 'C01', 'C02', 0.333),
(103, 'P005', 'C01', 'C03', 1),
(104, 'P005', 'C01', 'C04', 1),
(105, 'P005', 'C01', 'C05', 0.5),
(106, 'P005', 'C02', 'C01', 3),
(107, 'P005', 'C02', 'C02', 1),
(108, 'P005', 'C02', 'C03', 3),
(109, 'P005', 'C02', 'C04', 3),
(110, 'P005', 'C02', 'C05', 3),
(111, 'P005', 'C03', 'C01', 1),
(112, 'P005', 'C03', 'C02', 0.333),
(113, 'P005', 'C03', 'C03', 1),
(114, 'P005', 'C03', 'C04', 1),
(115, 'P005', 'C03', 'C05', 1),
(116, 'P005', 'C04', 'C01', 1),
(117, 'P005', 'C04', 'C02', 0.333),
(118, 'P005', 'C04', 'C03', 1),
(119, 'P005', 'C04', 'C04', 1),
(120, 'P005', 'C04', 'C05', 2),
(121, 'P005', 'C05', 'C01', 2),
(122, 'P005', 'C05', 'C02', 0.333),
(123, 'P005', 'C05', 'C03', 1),
(124, 'P005', 'C05', 'C04', 0.5),
(125, 'P005', 'C05', 'C05', 1),
(126, 'P006', 'C01', 'C01', 1),
(127, 'P006', 'C01', 'C02', 0.333),
(128, 'P006', 'C01', 'C03', 0.5),
(129, 'P006', 'C01', 'C04', 0.5),
(130, 'P006', 'C01', 'C05', 0.5),
(131, 'P006', 'C02', 'C01', 3),
(132, 'P006', 'C02', 'C02', 1),
(133, 'P006', 'C02', 'C03', 3),
(134, 'P006', 'C02', 'C04', 3),
(135, 'P006', 'C02', 'C05', 3),
(136, 'P006', 'C03', 'C01', 2),
(137, 'P006', 'C03', 'C02', 0.333),
(138, 'P006', 'C03', 'C03', 1),
(139, 'P006', 'C03', 'C04', 1),
(140, 'P006', 'C03', 'C05', 1),
(141, 'P006', 'C04', 'C01', 2),
(142, 'P006', 'C04', 'C02', 0.333),
(143, 'P006', 'C04', 'C03', 1),
(144, 'P006', 'C04', 'C04', 1),
(145, 'P006', 'C04', 'C05', 2),
(146, 'P006', 'C05', 'C01', 2),
(147, 'P006', 'C05', 'C02', 0.333),
(148, 'P006', 'C05', 'C03', 1),
(149, 'P006', 'C05', 'C04', 0.5),
(150, 'P006', 'C05', 'C05', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_datakriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(16) DEFAULT NULL,
  `kode_sub` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_datakriteria`, `kode_kriteria`, `kode_sub`) VALUES
(1, 'C01', 1),
(2, 'C01', 2),
(3, 'C01', 3),
(4, 'C01', 4),
(5, 'C02', 1),
(6, 'C02', 3),
(7, 'C02', 4),
(8, 'C02', 5),
(9, 'C02', 2),
(10, 'C02', 6),
(11, 'C03', 7),
(12, 'C04', 8),
(13, 'C05', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(16) NOT NULL,
  `nama_jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('P001', 'akuntansi dan keuangan lembaga'),
('P002', 'otomatisasi dan tata kelola perkantoran'),
('P003', 'bisnis daring dan pemasaran'),
('P004', 'teknik komputer dan jaringan'),
('P005', 'teknik dan bisnis sepeda motor'),
('P006', 'akomodasi perhotelan syariah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `kode_kriteria` varchar(16) NOT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL,
  `atribut` varchar(16) DEFAULT NULL,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`kode_kriteria`, `nama_kriteria`, `atribut`, `link`) VALUES
('C01', 'nilai un (ujian nasional)', 'benefit', ''),
('C02', 'nilai akademik', 'benefit', ''),
('C03', 'pengetahuan umum', 'benefit', 'https://www.proprofs.com/quiz-school/story.php?title=kuis-on-line'),
('C04', 'buta warna', 'benefit', 'https://colormax.org/color-blind-test/'),
('C05', 'keterampilan komputer', 'benefit', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `id_datakriteria` int(11) DEFAULT NULL,
  `nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nisn`, `id_datakriteria`, `nilai`) VALUES
(66, '0037677660', 1, 66),
(67, '0037677660', 2, 45.5),
(68, '0037677660', 3, 40),
(69, '0037677660', 4, 40.4),
(70, '0037677660', 5, 70),
(71, '0037677660', 6, 65),
(72, '0037677660', 7, 72),
(73, '0037677660', 8, 70),
(74, '0037677660', 9, 65),
(75, '0037677660', 10, 72),
(76, '0037677660', 11, 63),
(77, '0037677660', 12, 30),
(78, '0037677660', 13, 65),
(157, '0037677658', 1, 90),
(158, '0037677658', 2, 88),
(159, '0037677658', 3, 80),
(160, '0037677658', 4, 85),
(161, '0037677658', 5, 90),
(162, '0037677658', 6, 89),
(163, '0037677658', 7, 89),
(164, '0037677658', 8, 90),
(165, '0037677658', 9, 90),
(166, '0037677658', 10, 89),
(167, '0037677658', 11, 80),
(168, '0037677658', 12, 90),
(169, '0037677658', 13, 90),
(170, '0037677659', 1, 73),
(171, '0037677659', 2, 60),
(172, '0037677659', 3, 65),
(173, '0037677659', 4, 72),
(174, '0037677659', 5, 80),
(175, '0037677659', 6, 75),
(176, '0037677659', 7, 78),
(177, '0037677659', 8, 80),
(178, '0037677659', 9, 89),
(179, '0037677659', 10, 90),
(180, '0037677659', 11, 45),
(181, '0037677659', 12, 80),
(182, '0037677659', 13, 50),
(183, '0037677657', 1, 65),
(184, '0037677657', 2, 60),
(185, '0037677657', 3, 44),
(186, '0037677657', 4, 42),
(187, '0037677657', 5, 74),
(188, '0037677657', 6, 72),
(189, '0037677657', 7, 76),
(190, '0037677657', 8, 79),
(191, '0037677657', 9, 85),
(192, '0037677657', 10, 80),
(193, '0037677657', 11, 70),
(194, '0037677657', 12, 70),
(195, '0037677657', 13, 75),
(196, '0035794', 1, 82),
(197, '0035794', 2, 80),
(198, '0035794', 3, 81),
(199, '0035794', 4, 83),
(200, '0035794', 5, 82),
(201, '0035794', 6, 81),
(202, '0035794', 7, 83),
(203, '0035794', 8, 87),
(204, '0035794', 9, 80),
(205, '0035794', 10, 85),
(206, '0035794', 11, 80),
(207, '0035794', 12, 70),
(208, '0035794', 13, 94),
(209, '0035794614', 1, 82),
(210, '0035794614', 2, 80),
(211, '0035794614', 3, 81),
(212, '0035794614', 4, 83),
(213, '0035794614', 5, 82),
(214, '0035794614', 6, 81),
(215, '0035794614', 7, 83),
(216, '0035794614', 8, 87),
(217, '0035794614', 9, 80),
(218, '0035794614', 10, 85),
(219, '0035794614', 11, 80),
(220, '0035794614', 12, 70),
(221, '0035794614', 13, 94),
(222, '0047624352', 1, 73),
(223, '0047624352', 2, 50),
(224, '0047624352', 3, 65),
(225, '0047624352', 4, 72),
(226, '0047624352', 5, 80),
(227, '0047624352', 6, 75),
(228, '0047624352', 7, 78),
(229, '0047624352', 8, 80),
(230, '0047624352', 9, 89),
(231, '0047624352', 10, 90),
(232, '0047624352', 11, 50),
(233, '0047624352', 12, 80),
(234, '0047624352', 13, 50),
(235, '0047624444', 1, 56.5),
(236, '0047624444', 2, 55),
(237, '0047624444', 3, 50),
(238, '0047624444', 4, 45),
(239, '0047624444', 5, 80),
(240, '0047624444', 6, 80),
(241, '0047624444', 7, 88),
(242, '0047624444', 8, 80),
(243, '0047624444', 9, 90),
(244, '0047624444', 10, 86),
(245, '0047624444', 11, 80),
(246, '0047624444', 12, 60),
(247, '0047624444', 13, 86),
(248, '0039956257', 1, 68),
(249, '0039956257', 2, 34),
(250, '0039956257', 3, 47.5),
(251, '0039956257', 4, 57.5),
(252, '0039956257', 5, 80),
(253, '0039956257', 6, 78),
(254, '0039956257', 7, 74),
(255, '0039956257', 8, 84),
(256, '0039956257', 9, 78),
(257, '0039956257', 10, 82),
(258, '0039956257', 11, 60),
(259, '0039956257', 12, 80),
(260, '0039956257', 13, 88),
(261, '0047624455', 1, 70),
(262, '0047624455', 2, 74),
(263, '0047624455', 3, 50),
(264, '0047624455', 4, 56.5),
(265, '0047624455', 5, 80),
(266, '0047624455', 6, 78),
(267, '0047624455', 7, 79),
(268, '0047624455', 8, 80),
(269, '0047624455', 9, 87),
(270, '0047624455', 10, 82),
(271, '0047624455', 11, 33),
(272, '0047624455', 12, 70),
(273, '0047624455', 13, 89),
(274, '0043952324', 1, 76),
(275, '0043952324', 2, 40),
(276, '0043952324', 3, 37.5),
(277, '0043952324', 4, 55),
(278, '0043952324', 5, 92),
(279, '0043952324', 6, 94),
(280, '0043952324', 7, 93),
(281, '0043952324', 8, 90),
(282, '0043952324', 9, 91),
(283, '0043952324', 10, 88),
(284, '0043952324', 11, 70),
(285, '0043952324', 12, 50),
(286, '0043952324', 13, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `alamat_siswa` varchar(255) DEFAULT NULL,
  `pilihan_jurusan` varchar(255) DEFAULT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `alamat_siswa`, `pilihan_jurusan`, `tgl_input`) VALUES
('0035794', 'Dika', 'Kp. Ciaren', 'teknik dan bisnis sepeda motor', '2019-08-06 06:11:32'),
('0035794614', 'Dika', 'Kp. Ciaren', 'teknik dan bisnis sepeda motor', '2019-08-06 06:13:58'),
('0037677657', 'Asep', 'Awipari', 'bisnis daring dan pemasaran', '2019-07-31 13:38:22'),
('0037677658', 'Ikmal', 'Tasikmalaya', 'teknik komputer dan jaringan', '2019-07-31 13:36:11'),
('0037677659', 'Indri', 'Manonjaya', 'akuntansi dan keuangan lembaga', '2019-07-31 13:37:19'),
('0037677660', 'Jujun', 'Awipari', 'teknik dan bisnis sepeda motor', '2019-07-31 13:25:01'),
('0039956257', 'Siti', 'Tasikmalaya', 'teknik komputer dan jaringan', '2019-08-06 06:20:32'),
('0043952324', 'Fahmi', 'Tasikmalaya', 'akomodasi perhotelan syariah', '2019-08-06 06:23:59'),
('0047624352', 'Siti', 'Tasikmalaya', 'akuntansi dan keuangan lembaga', '2019-08-06 06:15:58'),
('0047624444', 'Erik', 'Tasikmalaya', 'akomodasi perhotelan syariah', '2019-08-06 06:18:53'),
('0047624455', 'Dede', 'Tasikmalaya', 'teknik komputer dan jaringan', '2019-08-06 06:21:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `kode_sub` int(11) NOT NULL,
  `nama_sub` varchar(100) DEFAULT NULL,
  `label` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`kode_sub`, `nama_sub`, `label`) VALUES
(1, 'b. indonesia', 'b. ind'),
(2, 'b. inggris', 'b. ing'),
(3, 'matematika', 'mtk'),
(4, 'ipa', 'ipa'),
(5, 'ips', 'ips'),
(6, 'seni budaya', 'seni buday'),
(7, 'pengetahuan umum', 'PU'),
(8, 'buta warna', 'buta warna'),
(9, 'keterampilan komputer', 'KK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indeks untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`id_bobotkriteria`),
  ADD KEY `fk_jurusan_bobot` (`kode_jurusan`),
  ADD KEY `fk_kriteria_bobotkriteria` (`kode_kriteria`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_datakriteria`),
  ADD KEY `fk_kriteria_datakriteria` (`kode_kriteria`),
  ADD KEY `fk_subkriteria_datakriteria` (`kode_sub`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_datakriteria_nilai` (`id_datakriteria`),
  ADD KEY `fk_siswa_nilai` (`nisn`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`kode_sub`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  MODIFY `id_bobotkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `id_datakriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `kode_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD CONSTRAINT `fk_jurusan_bobot` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode_jurusan`),
  ADD CONSTRAINT `fk_kriteria_bobotkriteria` FOREIGN KEY (`kode_kriteria`) REFERENCES `kriteria` (`kode_kriteria`);

--
-- Ketidakleluasaan untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD CONSTRAINT `fk_kriteria_datakriteria` FOREIGN KEY (`kode_kriteria`) REFERENCES `kriteria` (`kode_kriteria`),
  ADD CONSTRAINT `fk_subkriteria_datakriteria` FOREIGN KEY (`kode_sub`) REFERENCES `sub_kriteria` (`kode_sub`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_datakriteria_nilai` FOREIGN KEY (`id_datakriteria`) REFERENCES `data_kriteria` (`id_datakriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa_nilai` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
