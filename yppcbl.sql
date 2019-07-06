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

INSERT INTO `districts` (`id`, `regency_id`, `name`) VALUES
('1101010', '1101', 'TEUPAH SELATAN'),
('1101020', '1101', 'SIMEULUE TIMUR'),
('1101021', '1101', 'TEUPAH BARAT'),
('1101022', '1101', 'TEUPAH TENGAH'),
('1101030', '1101', 'SIMEULUE TENGAH'),
('1101031', '1101', 'TELUK DALAM'),
('1101032', '1101', 'SIMEULUE CUT'),
('1101040', '1101', 'SALANG'),
('1101050', '1101', 'SIMEULUE BARAT'),
('1101051', '1101', 'ALAFAN'),
('1102010', '1102', 'PULAU BANYAK'),
('1102011', '1102', 'PULAU BANYAK BARAT'),
('9410034', '9410', 'WEGE MUKA'),
('9410035', '9410', 'WEGEE BINO'),
('9410036', '9410', 'YAGAI'),
('9434010', '9434', 'SUKIKAI SELATAN'),
('9434020', '9434', 'PIYAIYE'),
('9434030', '9434', 'MAPIA BARAT'),
('9434040', '9434', 'MAPIA TENGAH'),
('9434050', '9434', 'MAPIA'),
('9434060', '9434', 'DOGIYAI'),
('9434070', '9434', 'KAMU SELATAN'),
('9434080', '9434', 'KAMU'),
('9434090', '9434', 'KAMU TIMUR'),
('9434100', '9434', 'KAMU UTARA'),
('9435010', '9435', 'HOMEYO'),
('9435020', '9435', 'SUGAPA'),
('9435030', '9435', 'HITADIPA'),
('9435040', '9435', 'AGISIGA'),
('9435050', '9435', 'BIANDOGA'),
('9435060', '9435', 'WANDAI'),
('9436010', '9436', 'KAPIRAYA'),
('9436020', '9436', 'TIGI BARAT'),
('9436030', '9436', 'TIGI'),
('9436040', '9436', 'TIGI TIMUR'),
('9436050', '9436', 'BOWOBADO'),
('9471010', '9471', 'MUARA TAMI'),
('9471020', '9471', 'ABEPURA'),
('9471021', '9471', 'HERAM'),
('9471030', '9471', 'JAYAPURA SELATAN'),
('9471040', '9471', 'JAYAPURA UTARA');

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

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

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

INSERT INTO `regencies` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

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

INSERT INTO `villages` (`id`, `district_id`, `name`) VALUES
('1101010001', '1101010', 'LATIUNG'),
('1101010002', '1101010', 'LABUHAN BAJAU'),
('1101010003', '1101010', 'SUAK LAMATAN'),
('1101010004', '1101010', 'ANA AO'),
('1101010005', '1101010', 'LATALING'),
('1101010006', '1101010', 'PULAU BENGKALAK'),
('1101010007', '1101010', 'BADEGONG'),
('3207270006', '3207270', 'NAGARAPAGEUH'),
('5202061003', '5202061', 'SASAKE'),
('5202061004', '5202061', 'LAJUT'),
('5202061005', '5202061', 'BATUNYALA'),
('5202061006', '5202061', 'PEJANGGIK'),
('5202061008', '5202061', 'BERAIM'),
('5202061009', '5202061', 'PENGADANG'),
('5202061010', '5202061', 'JURANG JALER'),
('5202061011', '5202061', 'DAKUNG'),
('5202061012', '5202061', 'PRAI MEKE'),
('5202070001', '5202070', 'LABULIA'),
('5202070002', '5202070', 'SUKARARA'),
('5202070005', '5202070', 'BAREJULAT'),
('5202070006', '5202070', 'BUNKATE'),
('5202070007', '5202070', 'NYEROT'),
('5202070008', '5202070', 'BATUTULIS'),
('5202070009', '5202070', 'JELANTIK'),
('5202070011', '5202070', 'BONJERUK'),
('5202070012', '5202070', 'PERINA'),
('5202080001', '5202080', 'BILEBANTE'),
('5202080002', '5202080', 'BAGU'),
('5202080003', '5202080', 'SINTUNG'),
('5202080004', '5202080', 'PRINGGARATA'),
('5202080005', '5202080', 'MURBAYA'),
('5202080006', '5202080', 'SEPAKEK'),
('5202080009', '5202080', 'ARJANGKA'),
('5202080010', '5202080', 'TAMAN INDAH'),
('5202080011', '5202080', 'SISIK'),
('5202090002', '5202090', 'PAGUTAN'),
('5202090003', '5202090', 'BARABALI'),
('5202090004', '5202090', 'BUJAK'),
('5202090005', '5202090', 'PERESAK'),
('5202090006', '5202090', 'MANTANG'),
('5202090007', '5202090', 'AIK DAREQ'),
('5202090009', '5202090', 'TAMPAK SIRING'),
('5202090010', '5202090', 'MEKAR BERSATU'),
('5202091001', '5202091', 'MAS-MAS'),
('5202091002', '5202091', 'AIK BUKAQ'),
('5202091003', '5202091', 'SETILING'),
('5202091004', '5202091', 'AIK BERIK'),
('5202091005', '5202091', 'TERATAK'),
('5202091006', '5202091', 'LANTAN'),
('5202091007', '5202091', 'TANAK BEAQ'),
('5202091008', '5202091', 'KARANG SIDEMEN'),
('5203010005', '5203010', 'TANJUNG LUAR'),
('5203010006', '5203010', 'PIJOT'),
('5203010007', '5203010', 'SELEBUNG KETANGGA'),
('5203010008', '5203010', 'SEPIT'),
('9108023002', '9108023', 'WEJIM BARAT'),
('9108023003', '9108023', 'WEJIM TIMUR'),
('9108023004', '9108023', 'SATUKURANO'),
('9108031003', '9108031', 'SAMATE'),
('9108031005', '9108031', 'KAPATLAP'),
('9108031009', '9108031', 'WAMEGA'),
('9108031010', '9108031', 'WAIDIM'),
('9108031011', '9108031', 'JEFMAN BARAT'),
('9108031012', '9108031', 'JEFMAN TIMUR'),
('9108033001', '9108033', 'KALOBO'),
('9108033002', '9108033', 'WAIJAN'),
('9108033003', '9108033', 'WAIMECI'),
('9108033004', '9108033', 'WAILABU'),
('9108033005', '9108033', 'SAKABU'),
('9108033006', '9108033', 'WAILEN'),
('9108033007', '9108033', 'WAIBU'),
('9108034001', '9108034', 'SOLOL'),
('9108034002', '9108034', 'WAIBON'),
('9108034003', '9108034', 'KALIAM'),
('9108034004', '9108034', 'KALWAL'),
('9108035001', '9108035', 'YENANAS'),
('9108035002', '9108035', 'WAIMAN'),
('9108035003', '9108035', 'WAILEBET'),
('9108035004', '9108035', 'AMDUI'),
('9108036001', '9108036', 'AREFI TIMUR'),
('9108036002', '9108036', 'AREFI SELATAN'),
('9108036003', '9108036', 'YENSAWAI TIMUR'),
('9108036004', '9108036', 'YENSAWAI BARAT'),
('9108040015', '9108040', 'SAONEK'),
('9108040016', '9108040', 'FRIWEN'),
('9108040018', '9108040', 'SAPORKREN'),
('9108040019', '9108040', 'WAWIYAI'),
('9108041001', '9108041', 'WARSAMDIN'),
('9108041003', '9108041', 'LOPINTOL'),
('9108041004', '9108041', 'KALITOKO'),
('9108042001', '9108042', 'YENBEKWAN'),
('9108042002', '9108042', 'ARBOREK'),
('9108042003', '9108042', 'KAPISAWAR'),
('9108042004', '9108042', 'SAWINGGRAI'),
('9108042005', '9108042', 'YENWAOUPNOR'),
('9108042006', '9108042', 'YENBUBA'),
('9108042007', '9108042', 'KABUY'),
('9108042008', '9108042', 'KURKAPA'),
('9108042009', '9108042', 'SAUANDAREK'),
('9108043001', '9108043', 'WAISAI'),
('9108043002', '9108043', 'SAPORDANCO'),
('9108043003', '9108043', 'BONKAWIR'),
('9108043004', '9108043', 'WARMASEN');

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
