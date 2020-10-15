-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.epizy.com
-- Waktu pembuatan: 15 Okt 2020 pada 02.14
-- Versi server: 5.6.48-88.0
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26614398_w866`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id`, `content`) VALUES
(1, 'Halo, perkenal kan saya Hermanto, saya adalah seorang mahasiswa dan web programmer. saya sudah menjadikan koding sebagai hobi semenjak duduk di bangku kelas 9 SMP, mungkin cukup begitu dulu perkenalan singkat saya untuk lebih lengkap bisa dilihat dibawah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'hermandev');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_counter`
--

CREATE TABLE `tb_counter` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_education`
--

CREATE TABLE `tb_education` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `enddate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_education`
--

INSERT INTO `tb_education` (`id`, `title`, `education`, `enddate`) VALUES
(2, 'Sekolah Dasar', 'SD Negeri 2 Batubulan Kangin', '2014-04-30 16:00:00'),
(3, 'Sekolah Menengah Pertama', 'SMP Negeri 3 Sukawari', '2017-04-30 16:00:00'),
(4, 'Sekolah Menengah Kejuruan', 'SMK Negeri 1 Mas Ubud', '2020-04-30 16:00:00'),
(5, 'Perguruan Tinggi', 'ITB Stikom Bali', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_experience`
--

CREATE TABLE `tb_experience` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enddate` timestamp NULL DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_experience`
--

INSERT INTO `tb_experience` (`id`, `title`, `link`, `startdate`, `enddate`, `description`) VALUES
(5, 'Juara Server', 'https://juaraserver.com/', '2020-05-09 16:00:00', '0000-00-00 00:00:00', 'Ini adalah usaha rintisan saya bersama teman saya dan disini saya dipercaya untuk menjadi CEO atau pemimpin perusahaanya'),
(6, 'IT Support Uinvited', 'https://uinvited.com/', '2019-10-31 04:00:00', '0000-00-00 00:00:00', 'Uinvited adalah perusahaan yang bergerak di bidang undangan online, disini saya berada di posisi IT Support');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_meessage`
--

CREATE TABLE `tb_meessage` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data untuk tabel `tb_meessage`
--

INSERT INTO `tb_meessage` (`id`, `name`, `email`, `content`) VALUES
(3, 'I Made Hermanto', 'hermantoimade@gmail.com', 'dqwdwqdsad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_metaweb`
--

CREATE TABLE `tb_metaweb` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `profile` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_metaweb`
--

INSERT INTO `tb_metaweb` (`id`, `title`, `icon`, `domain`, `description`, `profile`, `name`, `tagline`, `birthday`, `email`, `whatsapp`, `phone`, `address`, `facebook`, `instagram`, `cover`) VALUES
(1, 'Hermandev - portofolio', '', 'http://hermandev.42web.io/', 'hai perkenalkan saya I Made Hermanto, Saya seorang Web Programmer', 'her.jpg', 'I Made Hermanto', 'Web Programmer', '2002-03-05 05:00:00', 'hermantoimade45@gmail.com', '62895630687322', '0895630687322', 'Jalan Pasekan, Banjar Batuaji, Batubulan Kangin, Sukawati', 'https://www.facebook.com/dto.gent/', 'https://www.instagram.com/hermanto_imade/', 'background.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id`, `title`, `description`, `image`, `link`) VALUES
(5, 'Front end web xoxotees.com', '', 'Screenshot (111).png', 'https://xoxotees.com/'),
(6, 'Full stack developer blupenida.com', '', 'Screenshot (107).png', 'https://bluepenida.com/'),
(7, 'Front End', '', 'Screenshot (108).png', 'https://uinvited.com/'),
(8, 'ubudbike.com', '', 'Screenshot (109).png', 'https://ubudbike.com/'),
(9, 'juaraserver.com', '', 'Screenshot (112).png', 'https://juaraserver.com/'),
(10, 'ismayahospitality.com', '', 'Screenshot (110).png', 'https://ismayahospitality.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skill`
--

CREATE TABLE `tb_skill` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `persen` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_skill`
--

INSERT INTO `tb_skill` (`id`, `title`, `persen`, `color`) VALUES
(4, 'HTML', '90', '#ff0000'),
(5, 'CSS', '79', '#ffee00'),
(6, 'JAVASCRIPT', '50', '#0008ff'),
(7, 'PHP', '63', '#621fff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_counter`
--
ALTER TABLE `tb_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_education`
--
ALTER TABLE `tb_education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_experience`
--
ALTER TABLE `tb_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_meessage`
--
ALTER TABLE `tb_meessage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_metaweb`
--
ALTER TABLE `tb_metaweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_skill`
--
ALTER TABLE `tb_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_counter`
--
ALTER TABLE `tb_counter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_education`
--
ALTER TABLE `tb_education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_experience`
--
ALTER TABLE `tb_experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_meessage`
--
ALTER TABLE `tb_meessage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_skill`
--
ALTER TABLE `tb_skill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
