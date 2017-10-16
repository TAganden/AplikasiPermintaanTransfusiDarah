-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Okt 2017 pada 00.50
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_bdrs`
--

CREATE TABLE `formulir_bdrs` (
  `ID_FORMULIR_BDRS` smallint(6) NOT NULL,
  `ID_GOLONGAN_DARAH` smallint(6) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `JUMLAH_DARAH` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gol_darah`
--

CREATE TABLE `gol_darah` (
  `ID_GOLONGAN_DARAH` smallint(6) NOT NULL,
  `GOLONGAN_DARAH` varchar(3) DEFAULT NULL,
  `JENIS_DARAH` varchar(30) DEFAULT NULL,
  `STOK_DARAH` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gol_darah`
--

INSERT INTO `gol_darah` (`ID_GOLONGAN_DARAH`, `GOLONGAN_DARAH`, `JENIS_DARAH`, `STOK_DARAH`) VALUES
(1, 'A+', 'Whole Blood', 2),
(2, 'A+', 'Packed Red Cells', 0),
(3, 'A+', 'Thrombocyt Concentrate', 1),
(4, 'A+', 'Liquid Plasma', 0),
(5, 'A+', 'Fresh Frozen Plasma', 0),
(6, 'A+', 'Cryoprecipitate', 0),
(7, 'A+', 'Whased Red Cells', 0),
(8, 'A+', 'Buffy Coat', 0),
(9, 'A-', 'Whole Blood', 0),
(13, 'AB+', 'Whole Blood', 2),
(14, 'AB-', 'Packed Red Cells', 1),
(15, 'AB+', 'Packed Red Cells', 0),
(16, 'AB+', 'Thrombocyt Concentrate', 1),
(17, 'A-', 'Packed Red Cells', 2),
(18, 'A-', 'Thrombocyt Concentrate', 3),
(19, 'A-', 'Liquid Plasma', 1),
(20, 'A-', 'Fresh Frozen Plasma', 2),
(21, 'A-', 'Cryoprecipitate', 2),
(22, 'A-', 'Whased Red Cells', 2),
(23, 'A-', 'Buffy Coat', 5),
(24, 'AB+', 'Liquid Plasma', 5),
(25, 'AB+', 'Fresh Frozen Plasma', 5),
(26, 'AB+', 'Cryoprecipitate', 5),
(27, 'AB+', 'Whased Red Cells', 5),
(28, 'AB+', 'Buffy Coat', 5),
(29, 'AB-', 'Whole Blood', 5),
(30, 'AB-', 'Thrombocyt Concentrate', 5),
(31, 'AB-', 'Liquid Plasma', 5),
(32, 'AB-', 'Fresh Frozen Plasma', 5),
(33, 'AB-', 'Cryoprecipitate', 5),
(34, 'AB-', 'Whased Red Cells', 5),
(35, 'AB-', 'Buffy Coat', 5),
(36, 'O+', 'Whole Blood', 5),
(37, 'O+', 'Packed Red Cells', 5),
(38, 'O+', 'Thrombocyt Concentrate', 2),
(39, 'O+', 'Liquid Plasma', 0),
(40, 'O+', 'Fresh Frozen Plasma', 5),
(41, 'O+', 'Whased Red Cells', 5),
(42, 'O+', 'Cryoprecipitate', 5),
(43, 'O+', 'Buffy Coat', 5),
(44, 'O-', 'Whole Blood', 5),
(45, 'O-', 'Packed Red Cells', 5),
(46, 'O-', 'Thrombocyt Concentrate', 2),
(47, 'O-', 'Liquid Plasma', 5),
(48, 'O-', 'Fresh Frozen Plasma', 5),
(49, 'O-', 'Cryoprecipitate', 5),
(50, 'O-', 'Whased Red Cells', 5),
(51, 'O-', 'Buffy Coat', 5),
(52, 'B+', 'Whole Blood', 5),
(53, 'B+', 'Packed Red Cells', 2),
(54, 'B+', 'Thrombocyt Concentrate', 2),
(55, 'B+', 'Fresh Frozen Plasma', 2),
(56, 'B+', 'Liquid Plasma', 6),
(57, 'B+', 'Cryoprecipitate', 5),
(58, 'B+', 'Whased Red Cells', 5),
(59, 'B+', 'Buffy Coat', 5),
(60, 'B-', 'Whole Blood', 5),
(61, 'B-', 'Packed Red Cells', 5),
(62, 'B-', 'Thrombocyt Concentrate', 5),
(63, 'B-', 'Fresh Frozen Plasma', 5),
(64, 'B-', 'Liquid Plasma', 5),
(65, 'B-', 'Cryoprecipitate', 5),
(66, 'B-', 'Whased Red Cells', 5),
(67, 'B-', 'Buffy Coat', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantong_darah`
--

CREATE TABLE `kantong_darah` (
  `KODE_BARCODE` varchar(15) NOT NULL,
  `PENDONOR_ID` varchar(15) DEFAULT NULL,
  `ID_GOLONGAN_DARAH` smallint(6) DEFAULT NULL,
  `JENIS_DARAH` varchar(30) NOT NULL,
  `VOLUME_DARAH` smallint(6) DEFAULT NULL,
  `TGL_PENGAMBILAN` date DEFAULT NULL,
  `WAKTU_PENGAMBILAN` time DEFAULT NULL,
  `TGL_KADALUARSA` date DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantong_darah`
--

INSERT INTO `kantong_darah` (`KODE_BARCODE`, `PENDONOR_ID`, `ID_GOLONGAN_DARAH`, `JENIS_DARAH`, `VOLUME_DARAH`, `TGL_PENGAMBILAN`, `WAKTU_PENGAMBILAN`, `TGL_KADALUARSA`, `STATUS`) VALUES
('1', '1', 13, '', 300, '2017-10-04', '00:00:00', '2017-10-05', 'tersedia'),
('1230498', '10114280', 14, 'Packed Red Cells', 300, '2017-10-12', '00:01:00', '2017-10-13', 'tersedia'),
('12312313wb', '1234567890', 56, '', 300, '2017-10-16', '00:03:00', '2017-11-02', 'tersedia'),
('12345678', '10114280', 14, '', 300, '2017-10-05', '02:04:00', '2017-11-17', 'tidak tersedia'),
('2', '1', 15, 'Packed Red Cells', 300, '2017-10-04', '00:00:00', '2017-10-05', 'tidak tersedia'),
('3', '1', 16, 'Thrombocyt Concentrate', 300, '2017-10-04', '00:00:00', '2017-10-13', 'tidak tersedia'),
('41231241', '1234567890', 54, 'Thrombocyt Concentrate', 300, '2017-10-12', '02:03:00', '2017-10-13', 'tidak tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_donor`
--

CREATE TABLE `kegiatan_donor` (
  `KEGIATAN_DONOR_ID` smallint(6) NOT NULL,
  `PETUGAS_PMI_ID` smallint(6) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `TANGGAL_WAKTU` date DEFAULT NULL,
  `WAKTU` time DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendonor`
--

CREATE TABLE `pendonor` (
  `PENDONOR_ID` varchar(15) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `NO_TELEPON` varchar(15) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(15) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(30) NOT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `GOLONGAN_DARAH` varchar(8) DEFAULT NULL,
  `KELURAHAN` varchar(50) DEFAULT NULL,
  `KECAMATAN` varchar(50) DEFAULT NULL,
  `RT_RW` varchar(7) DEFAULT NULL,
  `KODE_POS` int(11) DEFAULT NULL,
  `PEKERJAAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendonor`
--

INSERT INTO `pendonor` (`PENDONOR_ID`, `NAMA`, `ALAMAT`, `NO_TELEPON`, `JENIS_KELAMIN`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `GOLONGAN_DARAH`, `KELURAHAN`, `KECAMATAN`, `RT_RW`, `KODE_POS`, `PEKERJAAN`) VALUES
('1', 'seillla', '1', '1', 'pria', '1', '2017-10-16', 'AB+', '1', '1', '1/1', 1, 'tni'),
('10114280', 'gevin', 'riung bandung', '085737953188', 'pria', 'bandung', '2017-10-06', 'AB-', 'cipamokolan', 'cipamokolan', '03/04', 40292, 'mahasiswa/pelajar'),
('1234567890', 'Aldi', 'jalan saluyu', '089754836374', 'pria', 'bandung', '1992-06-09', 'B+', 'cipamokolan', 'rancasari', '09/02', 40292, 'mahasiswa/pelajar'),
('2', 'B+', '2', '2', 'pria', '2', '2017-10-16', 'B+', '2', '2', '2/2', 2, 'tni'),
('3', 'B-', '3', '3', 'pria', '3', '2017-10-16', 'B-', '3', '3', '3/3', 3, 'tni'),
('4', 'A-', '4', '4', 'pria', '4', '2017-10-10', 'A-', '4', '4', '4/4', 4, 'tni'),
('5', 'O+', '5', '5', 'pria', '5', '2017-10-20', 'O+', '5', '5', '5/5', 5, 'tni'),
('6', 'O-', '6', '6', 'pria', '6', '2017-10-21', 'O-', '6', '6', '6/6', 6, 'tni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_transfusi`
--

CREATE TABLE `permintaan_transfusi` (
  `PERMINTAAN_ID` smallint(6) NOT NULL,
  `RUMAH_SAKIT_ID` smallint(6) DEFAULT NULL,
  `BAGIAN` varchar(20) DEFAULT NULL,
  `RUANGAN` varchar(20) DEFAULT NULL,
  `NAMA_DOKTER` varchar(50) DEFAULT NULL,
  `DIAGNOSA_SEMENTARA` varchar(50) DEFAULT NULL,
  `INDIKASI_TRANSFUSI` varchar(50) DEFAULT NULL,
  `HB` varchar(5) DEFAULT NULL,
  `NO_REG` int(11) DEFAULT NULL,
  `NAMA_PASIEN` varchar(50) DEFAULT NULL,
  `UMUR_PASIEN` smallint(6) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `GOLONGAN_DARAH` varchar(8) DEFAULT NULL,
  `JENIS_DARAH` varchar(30) DEFAULT NULL,
  `METODA` varchar(10) DEFAULT NULL,
  `JUMLAH` smallint(6) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `WAKTU` time DEFAULT NULL,
  `KEBUTUHAN_DARAH` varchar(50) DEFAULT NULL,
  `TRANSFUSI_SEBELUMN_TGL` date DEFAULT NULL,
  `TRANSFUSI_SEBELUM_JENIS` smallint(6) DEFAULT NULL,
  `TRANSFUSI_SEBELUM_REAKSI` varchar(100) DEFAULT NULL,
  `RIWAYAT_KEHAMILAN` varchar(100) DEFAULT NULL,
  `KETERANGAN_TAMBAHAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan_transfusi`
--

INSERT INTO `permintaan_transfusi` (`PERMINTAAN_ID`, `RUMAH_SAKIT_ID`, `BAGIAN`, `RUANGAN`, `NAMA_DOKTER`, `DIAGNOSA_SEMENTARA`, `INDIKASI_TRANSFUSI`, `HB`, `NO_REG`, `NAMA_PASIEN`, `UMUR_PASIEN`, `JENIS_KELAMIN`, `ALAMAT`, `GOLONGAN_DARAH`, `JENIS_DARAH`, `METODA`, `JUMLAH`, `TANGGAL`, `WAKTU`, `KEBUTUHAN_DARAH`, `TRANSFUSI_SEBELUMN_TGL`, `TRANSFUSI_SEBELUM_JENIS`, `TRANSFUSI_SEBELUM_REAKSI`, `RIWAYAT_KEHAMILAN`, `KETERANGAN_TAMBAHAN`) VALUES
(1, 1, 'Onkologi', 'Maria', 'Dr Dede Sulaeman', 'Ca Cx', 'Anemia', '9,6', 11395687, 'reyhan audian dwi putra', 46, 'pria', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'A+', 'Liquid Plasma', 'manual', 5, '2017-10-13', '08:10:00', 'biasa', '2017-10-10', 0, '-', '-', '-'),
(2, 2, 'Oasis', 'Sutet', 'Irawan', 'Ca Cx', 'Anemia', '9,6', 11395680, 'Gevin Aldian', 46, 'pria', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'A+', 'Whole Blood', 'manual', 10, '2017-10-13', '01:10:00', 'segera', '2018-02-02', 2, '-', '-', '-'),
(3, 1, 'Onkologi', 'Maria', 'hugo', 'Ca Cx', 'Anemia', '3', 11395670, 'eca', 22, 'pria', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'A+', 'Thrombocyt Concentrate', 'manual', 3, '2017-10-05', '01:09:00', 'segera', '2017-11-18', 3, '-', '-', '-'),
(4, 1, 'Onkologi', 'Maria', 'Dr Dede Sulaeman', 'Ca Cx', 'Anemia', '9,6', 11395680, 'ecapedeh', 46, 'pria', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'A+', 'Fresh Frozen Plasma', 'manual', 2, '2017-10-15', '03:10:00', 'segera', '2017-10-15', 0, '-', '-', '-'),
(5, 1, 'onkologi', 'maria', 'seilla', 'ca paru ', 'anemia', '12,0', 112343, 'siapa aja', 23, 'pria', 'jalan saluyu 15 b', 'A+', 'Fresh Frozen Plasma', 'manual', 1, '2017-10-16', '21:22:00', 'segera', '0000-00-00', 0, '', '', ''),
(6, 1, 'SDA', 'SADA', 'SADASD', 'DASDA', 'SDAD', '2,2', 123123, 'DASDA', 0, 'pria', 'ASDASD', 'A+', 'Liquid Plasma', 'manual', 1, '2017-10-16', '23:23:00', 'segera', '0000-00-00', 0, '', '', ''),
(8, 1, 'Onkologi', 'Maria', 'Dr Dede Sulaeman', 'Ca Cx', 'Anemia', '9,6', 11395680, 'reyhan audian dwi putra', 46, 'wanita', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'AB+', 'Thrombocyt Concentrate', 'manual', 1, '2017-10-16', '09:08:00', 'segera', '0000-00-00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_pmi`
--

CREATE TABLE `petugas_pmi` (
  `PETUGAS_PMI_ID` smallint(6) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `USERNAME` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas_pmi`
--

INSERT INTO `petugas_pmi` (`PETUGAS_PMI_ID`, `NAMA`, `EMAIL`, `PASSWORD`, `USERNAME`) VALUES
(1, 'Seilla', 'reyhanadp@yahoo.co.id', 'lalilulelo', 'seilla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_donor`
--

CREATE TABLE `riwayat_donor` (
  `ID_RIWAYAT_DONOR` smallint(6) NOT NULL,
  `PENDONOR_ID` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_donor`
--

INSERT INTO `riwayat_donor` (`ID_RIWAYAT_DONOR`, `PENDONOR_ID`, `ALAMAT`, `TANGGAL`) VALUES
(6, '1234567890', 'jalan mana aja', '2017-10-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `RUMAH_SAKIT_ID` smallint(6) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(9) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `NO_TELEPON` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`RUMAH_SAKIT_ID`, `NAMA`, `USERNAME`, `PASSWORD`, `EMAIL`, `NO_TELEPON`, `ALAMAT`) VALUES
(1, 'RSHS HASAN SADIKIN', 'tes', 'tes', NULL, NULL, NULL),
(2, 'AL ISLAM', 'tes2', 'tes2', 'alislam@gmail.com', '085737953188', 'Riung Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_permintaan`
--

CREATE TABLE `status_permintaan` (
  `ID_STATUS_PERMINTAAN` smallint(6) NOT NULL,
  `PETUGAS_PMI_ID` smallint(6) DEFAULT NULL,
  `PERMINTAAN_ID` smallint(6) DEFAULT NULL,
  `KODE_BARCODE` varchar(15) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `WAKTU` time DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_permintaan`
--

INSERT INTO `status_permintaan` (`ID_STATUS_PERMINTAAN`, `PETUGAS_PMI_ID`, `PERMINTAAN_ID`, `KODE_BARCODE`, `NAMA`, `WAKTU`, `TANGGAL`) VALUES
(1, NULL, 1, NULL, 'menunggu diproses', '20:15:59', '2017-10-13'),
(3, NULL, 2, NULL, 'menunggu diproses', '12:56:43', '2017-10-15'),
(15, NULL, 3, NULL, 'menunggu diproses', '17:14:37', '2017-10-14'),
(43, NULL, 4, NULL, 'menunggu diproses', '12:13:07', '2017-10-15'),
(44, 1, 4, NULL, 'diproses', '12:13:40', '2017-10-15'),
(47, 1, 2, NULL, 'diproses', '13:17:46', '2017-10-15'),
(48, NULL, 2, NULL, 'dibatalkan', '13:28:16', '2017-10-15'),
(52, NULL, 4, NULL, 'dibatalkan', '14:00:59', '2017-10-15'),
(53, NULL, 5, NULL, 'menunggu diproses', '14:02:17', '2017-10-15'),
(55, 1, 5, NULL, 'diproses', '14:04:22', '2017-10-15'),
(59, NULL, 5, NULL, 'dibatalkan', '14:06:01', '2017-10-15'),
(60, NULL, 6, NULL, 'menunggu diproses', '14:07:29', '2017-10-15'),
(69, 1, 3, NULL, 'diproses', '17:55:11', '2017-10-16'),
(70, 1, 6, NULL, 'diproses', '17:58:34', '2017-10-16'),
(71, NULL, 8, NULL, 'menunggu diproses', '18:03:44', '2017-10-16'),
(72, 1, 8, NULL, 'diproses', '18:04:05', '2017-10-16'),
(73, 1, 1, NULL, 'diproses', '18:06:03', '2017-10-16'),
(74, 1, 8, '41231241', 'selesai', '20:40:10', '2017-10-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir_bdrs`
--
ALTER TABLE `formulir_bdrs`
  ADD PRIMARY KEY (`ID_FORMULIR_BDRS`),
  ADD KEY `fk_formulir_gol_darah` (`ID_GOLONGAN_DARAH`);

--
-- Indexes for table `gol_darah`
--
ALTER TABLE `gol_darah`
  ADD PRIMARY KEY (`ID_GOLONGAN_DARAH`);

--
-- Indexes for table `kantong_darah`
--
ALTER TABLE `kantong_darah`
  ADD PRIMARY KEY (`KODE_BARCODE`),
  ADD KEY `fk_kantong_pendonor` (`PENDONOR_ID`),
  ADD KEY `fk_kantong_gol_darah` (`ID_GOLONGAN_DARAH`);

--
-- Indexes for table `kegiatan_donor`
--
ALTER TABLE `kegiatan_donor`
  ADD PRIMARY KEY (`KEGIATAN_DONOR_ID`),
  ADD KEY `FK_RELATIONSHIP_8` (`PETUGAS_PMI_ID`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`PENDONOR_ID`);

--
-- Indexes for table `permintaan_transfusi`
--
ALTER TABLE `permintaan_transfusi`
  ADD PRIMARY KEY (`PERMINTAAN_ID`),
  ADD KEY `FK_RELATIONSHIP_9` (`RUMAH_SAKIT_ID`);

--
-- Indexes for table `petugas_pmi`
--
ALTER TABLE `petugas_pmi`
  ADD PRIMARY KEY (`PETUGAS_PMI_ID`);

--
-- Indexes for table `riwayat_donor`
--
ALTER TABLE `riwayat_donor`
  ADD PRIMARY KEY (`ID_RIWAYAT_DONOR`),
  ADD KEY `fk_pendonor_riwayat` (`PENDONOR_ID`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`RUMAH_SAKIT_ID`);

--
-- Indexes for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  ADD PRIMARY KEY (`ID_STATUS_PERMINTAAN`),
  ADD KEY `FK_RELATIONSHIP_13` (`PETUGAS_PMI_ID`),
  ADD KEY `FK_permintaan_status` (`PERMINTAAN_ID`),
  ADD KEY `FK_kantong_status` (`KODE_BARCODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gol_darah`
--
ALTER TABLE `gol_darah`
  MODIFY `ID_GOLONGAN_DARAH` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `permintaan_transfusi`
--
ALTER TABLE `permintaan_transfusi`
  MODIFY `PERMINTAAN_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `riwayat_donor`
--
ALTER TABLE `riwayat_donor`
  MODIFY `ID_RIWAYAT_DONOR` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  MODIFY `ID_STATUS_PERMINTAAN` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `formulir_bdrs`
--
ALTER TABLE `formulir_bdrs`
  ADD CONSTRAINT `fk_formulir_gol_darah` FOREIGN KEY (`ID_GOLONGAN_DARAH`) REFERENCES `gol_darah` (`ID_GOLONGAN_DARAH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kantong_darah`
--
ALTER TABLE `kantong_darah`
  ADD CONSTRAINT `fk_kantong_gol_darah` FOREIGN KEY (`ID_GOLONGAN_DARAH`) REFERENCES `gol_darah` (`ID_GOLONGAN_DARAH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kantong_pendonor` FOREIGN KEY (`PENDONOR_ID`) REFERENCES `pendonor` (`PENDONOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kegiatan_donor`
--
ALTER TABLE `kegiatan_donor`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`PETUGAS_PMI_ID`) REFERENCES `petugas_pmi` (`PETUGAS_PMI_ID`);

--
-- Ketidakleluasaan untuk tabel `permintaan_transfusi`
--
ALTER TABLE `permintaan_transfusi`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`RUMAH_SAKIT_ID`) REFERENCES `rumah_sakit` (`RUMAH_SAKIT_ID`);

--
-- Ketidakleluasaan untuk tabel `riwayat_donor`
--
ALTER TABLE `riwayat_donor`
  ADD CONSTRAINT `fk_pendonor_riwayat` FOREIGN KEY (`PENDONOR_ID`) REFERENCES `pendonor` (`PENDONOR_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `status_permintaan`
--
ALTER TABLE `status_permintaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`PETUGAS_PMI_ID`) REFERENCES `petugas_pmi` (`PETUGAS_PMI_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_kantong_status` FOREIGN KEY (`KODE_BARCODE`) REFERENCES `kantong_darah` (`KODE_BARCODE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_permintaan_status` FOREIGN KEY (`PERMINTAAN_ID`) REFERENCES `permintaan_transfusi` (`PERMINTAAN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
