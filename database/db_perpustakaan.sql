-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2019 pada 17.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `nim` varchar(12) NOT NULL,
  `kode_inventaris_buku` varchar(12) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_tempo` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `keterlambatan` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`nim`, `kode_inventaris_buku`, `judul_buku`, `tgl_pinjam`, `tgl_tempo`, `tgl_kembali`, `keterlambatan`, `denda`) VALUES
('1301170116', '1000', 'kalkulus', '2019-09-01', '2019-09-08', '2019-09-11', 3, 3000),
('1301171000', '2000', 'fisika dasar', '2019-09-16', NULL, NULL, NULL, NULL),
('1301174000', '3000', 'algoritma pemrograman', '2019-09-25', NULL, NULL, NULL, NULL),
('1301174052', '4000', 'kecerdasan buatan', '2019-08-23', '2019-09-03', '2019-09-24', 21, 21000),
('1301174295', '5000', 'IMPAL', '2019-09-21', '2019-09-28', '2019-09-24', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `mahasiswa` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `mahasiswa`) VALUES
('1301170116', 'gery nugroho'),
('1301171000', 'alfan'),
('1301174000', 'bayu anugrah'),
('1301174052', 'muchtarom yahya'),
('1301174295', 'iriyanto');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`kode_inventaris_buku`),
  ADD KEY `data_peminjaman_fk` (`nim`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD CONSTRAINT `data_peminjaman_fk` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
