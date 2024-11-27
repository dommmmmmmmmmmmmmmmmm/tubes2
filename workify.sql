-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2024 pada 08.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategorikerjaan`
--

CREATE TABLE `kategorikerjaan` (
  `idkategori` int(6) NOT NULL,
  `parttime` enum('parttime') NOT NULL,
  `tetap` enum('tetap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE `lamaran` (
  `idloker` int(6) NOT NULL,
  `idpelamar` int(6) DEFAULT NULL,
  `idperusahaan` int(6) DEFAULT NULL,
  `tglbuka` date NOT NULL,
  `tglttp` date NOT NULL,
  `almtperusahaan` varchar(50) NOT NULL,
  `gaji` decimal(10,0) NOT NULL,
  `status` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `idpelamar` int(6) NOT NULL,
  `idloker` int(6) NOT NULL,
  `idpengalaman` int(6) NOT NULL,
  `idwilayah` int(6) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nmpelamar` varchar(25) NOT NULL,
  `notlp` int(13) NOT NULL,
  `tgllahir` date NOT NULL,
  `jkelamin` enum('pria','wanita') NOT NULL,
  `status` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `idpendidikan` int(6) NOT NULL,
  `idpelamar` int(11) NOT NULL,
  `nmpelamar` varchar(20) NOT NULL,
  `thnlulus` date NOT NULL,
  `sd` varchar(20) NOT NULL,
  `smp` varchar(20) NOT NULL,
  `sma` varchar(20) NOT NULL,
  `universitas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalamankrj`
--

CREATE TABLE `pengalamankrj` (
  `idpengalaman` int(6) NOT NULL,
  `idpelamar` int(6) NOT NULL,
  `nmperusahaan` varchar(20) NOT NULL,
  `tglmulai` date NOT NULL,
  `tglselesai` date NOT NULL,
  `posisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idperusahaan` int(6) NOT NULL,
  `idkategori` int(6) NOT NULL,
  `idloker` int(6) NOT NULL,
  `nmperusahan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nofax` int(12) NOT NULL,
  `gaji` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `idwilayah` int(6) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `kec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategorikerjaan`
--
ALTER TABLE `kategorikerjaan`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`idloker`),
  ADD UNIQUE KEY `idpelamar` (`idpelamar`),
  ADD UNIQUE KEY `idperusahaan` (`idperusahaan`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`idpelamar`),
  ADD UNIQUE KEY `idwilayah` (`idwilayah`),
  ADD UNIQUE KEY `idpengalaman` (`idpengalaman`),
  ADD UNIQUE KEY `idloker` (`idloker`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`idpendidikan`),
  ADD UNIQUE KEY `idpelamar` (`idpelamar`);

--
-- Indeks untuk tabel `pengalamankrj`
--
ALTER TABLE `pengalamankrj`
  ADD PRIMARY KEY (`idpengalaman`),
  ADD UNIQUE KEY `idpelamar` (`idpelamar`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idperusahaan`),
  ADD UNIQUE KEY `idkategori` (`idkategori`),
  ADD UNIQUE KEY `idloker` (`idloker`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kodepos`),
  ADD UNIQUE KEY `idwilayah` (`idwilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `idpendidikan` int(6) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`idpelamar`) REFERENCES `pelamar` (`idpelamar`),
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`idperusahaan`) REFERENCES `perusahaan` (`idperusahaan`);

--
-- Ketidakleluasaan untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD CONSTRAINT `pelamar_ibfk_1` FOREIGN KEY (`idpelamar`) REFERENCES `pendidikan` (`idpelamar`),
  ADD CONSTRAINT `pelamar_ibfk_2` FOREIGN KEY (`idpengalaman`) REFERENCES `pengalamankrj` (`idpengalaman`);

--
-- Ketidakleluasaan untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategorikerjaan` (`idkategori`);

--
-- Ketidakleluasaan untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD CONSTRAINT `wilayah_ibfk_1` FOREIGN KEY (`idwilayah`) REFERENCES `pelamar` (`idwilayah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
