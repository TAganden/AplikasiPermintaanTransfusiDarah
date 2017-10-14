-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Okt 2017 pada 13.00
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
  `GOLONGAN_DARAH` varchar(2) DEFAULT NULL,
  `JENIS_DARAH` varchar(30) DEFAULT NULL,
  `STOK_DARAH` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gol_darah`
--

INSERT INTO `gol_darah` (`ID_GOLONGAN_DARAH`, `GOLONGAN_DARAH`, `JENIS_DARAH`, `STOK_DARAH`) VALUES
(1, 'A+', 'Whole Blood', 2),
(2, 'A+', 'Packed Red Cells', 50),
(3, 'A+', 'Thrombocyt Concentrate', 0),
(4, 'A+', 'Liquid Plasma', 0),
(5, 'A+', 'Fresh Frozen Plasma', 50),
(6, 'A+', 'Cryoprecipitate', 0),
(7, 'A+', 'Whased Red Cells', 0),
(8, 'A+', 'Buffy Coat', 0),
(9, 'A-', 'Whole Blood', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantong_darah`
--

CREATE TABLE `kantong_darah` (
  `KODE_BARCODE` smallint(6) NOT NULL,
  `PENDONOR_ID` smallint(6) DEFAULT NULL,
  `ID_GOLONGAN_DARAH` smallint(6) DEFAULT NULL,
  `VOLUME_DARAH` smallint(6) DEFAULT NULL,
  `TGL_PENGAMBILAN` date DEFAULT NULL,
  `WAKTU_PENGAMBILAN` time DEFAULT NULL,
  `TGL_KADALUARSA` date DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantong_darah`
--

INSERT INTO `kantong_darah` (`KODE_BARCODE`, `PENDONOR_ID`, `ID_GOLONGAN_DARAH`, `VOLUME_DARAH`, `TGL_PENGAMBILAN`, `WAKTU_PENGAMBILAN`, `TGL_KADALUARSA`, `STATUS`) VALUES
(111, NULL, 1, 50, '2017-10-12', '07:21:26', '2017-10-19', '');

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
  `PENDONOR_ID` smallint(6) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `NO_TELEPON` varchar(15) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(1) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `PASSWORD` varchar(9) DEFAULT NULL,
  `GOLONGAN_DARAH` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 1, 'Onkologi', 'Maria', 'hugo', 'Ca Cx', 'Anemia', '3', 11395670, 'eca', 22, 'pria', 'Jalan Suryalaya I no.239 Buah Batu Bandung', 'AB+', 'Thrombocyt Concentrate', 'manual', 5, '2017-10-05', '01:09:00', 'segera', '2017-11-18', 3, '-', '-', '-');

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
(1, 'reyhan', 'reyhanadp@yahoo.co.id', 'lalilulelo', 'reyhanadp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_donor`
--

CREATE TABLE `riwayat_donor` (
  `ID_RIWAYAT_DONOR` smallint(6) NOT NULL,
  `PENDONOR_ID` smallint(6) DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `KODE_BARCODE` smallint(6) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `WAKTU` time DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_permintaan`
--

INSERT INTO `status_permintaan` (`ID_STATUS_PERMINTAAN`, `PETUGAS_PMI_ID`, `PERMINTAAN_ID`, `KODE_BARCODE`, `NAMA`, `WAKTU`, `TANGGAL`) VALUES
(1, NULL, 1, NULL, 'menunggu diproses', '20:15:59', '2017-10-13'),
(2, NULL, 1, NULL, 'selesai', '20:24:45', '2017-10-13'),
(3, NULL, 2, NULL, 'menunggu diproses', '21:14:57', '2017-10-13'),
(14, 1, 2, NULL, 'diproses', '15:35:44', '2017-10-14'),
(15, NULL, 3, NULL, 'menunggu diproses', '17:14:37', '2017-10-14'),
(25, 1, 3, NULL, 'diproses', '17:50:52', '2017-10-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir_bdrs`
--
ALTER TABLE `formulir_bdrs`
  ADD PRIMARY KEY (`ID_FORMULIR_BDRS`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_GOLONGAN_DARAH`);

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
  ADD KEY `FK_RELATIONSHIP_12` (`PENDONOR_ID`),
  ADD KEY `FK_RELATIONSHIP_15` (`ID_GOLONGAN_DARAH`);

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
  ADD KEY `FK_RELATIONSHIP_7` (`PENDONOR_ID`);

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
  ADD KEY `FK_RELATIONSHIP_11` (`KODE_BARCODE`),
  ADD KEY `FK_RELATIONSHIP_13` (`PETUGAS_PMI_ID`),
  ADD KEY `FK_permintaan_status` (`PERMINTAAN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permintaan_transfusi`
--
ALTER TABLE `permintaan_transfusi`
  MODIFY `PERMINTAAN_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  MODIFY `ID_STATUS_PERMINTAAN` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `formulir_bdrs`
--
ALTER TABLE `formulir_bdrs`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_GOLONGAN_DARAH`) REFERENCES `gol_darah` (`ID_GOLONGAN_DARAH`);

--
-- Ketidakleluasaan untuk tabel `kantong_darah`
--
ALTER TABLE `kantong_darah`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`PENDONOR_ID`) REFERENCES `pendonor` (`PENDONOR_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_GOLONGAN_DARAH`) REFERENCES `gol_darah` (`ID_GOLONGAN_DARAH`);

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
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`PENDONOR_ID`) REFERENCES `pendonor` (`PENDONOR_ID`);

--
-- Ketidakleluasaan untuk tabel `status_permintaan`
--
ALTER TABLE `status_permintaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`KODE_BARCODE`) REFERENCES `kantong_darah` (`KODE_BARCODE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`PETUGAS_PMI_ID`) REFERENCES `petugas_pmi` (`PETUGAS_PMI_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_permintaan_status` FOREIGN KEY (`PERMINTAAN_ID`) REFERENCES `permintaan_transfusi` (`PERMINTAAN_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
