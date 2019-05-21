-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2019 pada 11.36
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fomulir`
--

CREATE TABLE `tb_fomulir` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_ttl` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tinggi_bdn` int(15) NOT NULL,
  `ukuran_baju` char(10) NOT NULL,
  `jns_pelatihan` varchar(40) NOT NULL,
  `nama_keg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id` int(11) NOT NULL,
  `nama_ortu` varchar(35) DEFAULT NULL,
  `ttl_ortu` date DEFAULT NULL,
  `hub_ortu` varchar(20) DEFAULT NULL,
  `profesi_ortu` varchar(35) DEFAULT NULL,
  `almt_ortu` text NOT NULL,
  `organisasi_ortu` varchar(25) NOT NULL,
  `nohp_ortu` varchar(30) NOT NULL,
  `email_ortu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_izin`
--

INSERT INTO `tb_izin` (`id`, `nama_ortu`, `ttl_ortu`, `hub_ortu`, `profesi_ortu`, `almt_ortu`, `organisasi_ortu`, `nohp_ortu`, `email_ortu`) VALUES
(2, 'Isak Nurdin', '1966-04-04', '1', 'Buruh', 'kp.ciwalengke', 'PT.Sipatex', '081398196019', 'isaknurdin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1:admin, 2:member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `email`, `level`) VALUES
(1, 'Admin Pabajjasti', 'admin', '0192023a7bbd73250516f069df18b500', 'muhamadrifkiramdhani27@gmail.com', 1),
(2, 'Member', 'member', 'member', 'admin@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_fomulir`
--
ALTER TABLE `tb_fomulir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_fomulir`
--
ALTER TABLE `tb_fomulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
