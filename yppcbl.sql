-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2019 pada 04.42
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yppcbl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_donasi`
--

CREATE TABLE `detail_donasi` (
  `ID_DDONASI` int(11) NOT NULL,
  `ID_DONASI` int(11) DEFAULT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `regency_id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `districts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `ID_DONASI` int(11) NOT NULL,
  `ID_DONATUR` char(10) DEFAULT NULL,
  `NAMA_DONATUR` varchar(250) DEFAULT NULL,
  `TANGGAL_DONASI` datetime DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `BUKTI_PEMBAYARAN` longblob,
  `STATUS` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE `donatur` (
  `ID_DONATUR` char(10) NOT NULL,
  `NAMA_DONATUR` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(150) DEFAULT NULL,
  `NO_NP` varchar(20) DEFAULT NULL,
  `ALAMAT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `ID_PASIEN` int(11) NOT NULL,
  `ID_DESA` int(11) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `NAMA_AYAH` varchar(200) DEFAULT NULL,
  `NAMA_IBU` varchar(200) DEFAULT NULL,
  `ALAMAT` text,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `NO_ALT` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `regencies`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `villages`
--

CREATE TABLE `villages` (
  `id` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `villages`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  ADD PRIMARY KEY (`ID_DDONASI`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_PASIEN`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_DONASI`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_id_index` (`regency_id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`ID_DONASI`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_DONATUR`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`ID_DONATUR`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_PASIEN`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_DESA`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villages_district_id_index` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_donasi`
--
ALTER TABLE `detail_donasi`
  MODIFY `ID_DDONASI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `ID_DONASI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `ID_PASIEN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_donasi`
--
ALTER TABLE `detail_donasi`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_PASIEN`) REFERENCES `pasien` (`ID_PASIEN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_DONASI`) REFERENCES `donasi` (`ID_DONASI`);

--
-- Ketidakleluasaan untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_regency_id_foreign` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`);

--
-- Ketidakleluasaan untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_DONATUR`) REFERENCES `donatur` (`ID_DONATUR`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_DESA`) REFERENCES `desa` (`ID_DESA`);

--
-- Ketidakleluasaan untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

--
-- Ketidakleluasaan untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
