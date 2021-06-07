-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Jan 2021 pada 03.36
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15880960_siaklik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_pasien`
--

CREATE TABLE `akun_pasien` (
  `email_pasien` varchar(22) NOT NULL,
  `password_pasien` varchar(100) NOT NULL,
  `nama_pasien` varchar(22) NOT NULL,
  `username` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_pasien`
--

INSERT INTO `akun_pasien` (`email_pasien`, `password_pasien`, `nama_pasien`, `username`) VALUES
('111@gmail.com', '$2y$10$IzmV6Xuf7xue3HATC8Zwg.uJ4ekhiOo4EDUHUNoPvGQiODVdEjRRO', 'rifky q', 'haha'),
('abc@gmail.com', '$2y$10$.nAdoJ5EhbPtf8Bx/sJ9COOHwXGYoP9yfg02/8OCvguVcnaAzp04S', 'ab c', 'abc'),
('pasien@gmail.com', '$2y$10$0dU979jRkMHobLcUgaKgrel3UZPnEALgV.6IjnAnM9U43HPQJVowe', 'as as', 'as'),
('pasien@ye.com', '$2y$10$CJheA/7xM9NmfIdF.FuAQeIVblwVUyqKtyhItQSiYnVuvtwW7kD.u', 'pasien klinik', 'pasien'),
('qq@gmail.com', '$2y$10$DqOLzgbpxl7AmzVwZkedmOYrciryOgr6G5rZ4zAqJmWjfG2XiDaJW', 'aa aa', 'aaaw'),
('tes123@gmail.com', '$2y$10$/FaJGM3ZBxcffU/OqlV0RucbbEw4Wb9inpoLMpjdbFx5PERB.GXx.', 'testing 123', 'test123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_bpjs`
--

CREATE TABLE `antrian_bpjs` (
  `id_antrian` int(50) NOT NULL,
  `kode_antrian` varchar(100) DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_bpjs`
--

INSERT INTO `antrian_bpjs` (`id_antrian`, `kode_antrian`, `nama_pasien`, `tanggal`, `status`) VALUES
(5, 'A001', 'Haidar', '30-12-2020', 'sedang antri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_internal`
--

CREATE TABLE `antrian_internal` (
  `id_antrian` int(20) NOT NULL,
  `kode_antrian` varchar(100) DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_internal`
--

INSERT INTO `antrian_internal` (`id_antrian`, `kode_antrian`, `nama_pasien`, `tanggal`, `status`) VALUES
(6, 'C001', 'pc', '30-12-2020', 'sedang antri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_umum`
--

CREATE TABLE `antrian_umum` (
  `id_antrian` int(20) NOT NULL,
  `kode_antrian` varchar(100) DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian_umum`
--

INSERT INTO `antrian_umum` (`id_antrian`, `kode_antrian`, `nama_pasien`, `tanggal`, `status`) VALUES
(6, 'B001', 'Hore Kere', '30-12-2020', 'sedang antri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja_klinik`
--

CREATE TABLE `pekerja_klinik` (
  `email_klinik` varchar(35) NOT NULL,
  `nama_klinik` varchar(30) NOT NULL,
  `password_klinik` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerja_klinik`
--

INSERT INTO `pekerja_klinik` (`email_klinik`, `nama_klinik`, `password_klinik`, `username`) VALUES
('admin2@upnvjatim.ac.id', 'admin 2', '$2y$10$aZ3necNvzm7fXERobzETXeE8colPWli4FUrEQd9Z63IWxdagIF6u2', 'admin2'),
('admin3@upnvjatim.ac.id', 'admin 3', '$2y$10$CpoxOrvE82M0S7GpxmsNBu2NQg2KcHMxQBnsusP6Xr0L4QTGUlvYK', 'admin3'),
('poliklinik@upnvjatim.ac.id', 'admin 1', '$2y$10$ctFUaScMIe3C4FAEt3gtPOLEu4kzILzxg0wfNjM/f/ezPr1TkSkTO', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'pasien', 'pasien123', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(31) NOT NULL,
  `umur_pasien` int(3) NOT NULL,
  `alamat_pasien` varchar(80) NOT NULL,
  `pekerjaan_pasien` varchar(20) NOT NULL,
  `status_pasien` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nip_pasien` varchar(20) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `keterangan` enum('internal','eksternal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`id_pasien`, `nama_pasien`, `umur_pasien`, `alamat_pasien`, `pekerjaan_pasien`, `status_pasien`, `jenis_kelamin`, `nip_pasien`, `no_bpjs`, `keterangan`) VALUES
(1, 'Heri Khariono', 20, 'Lamongan', 'Mahasiswa', 'Sakit', 'L', '18081010002', '0', 'internal'),
(2, 'Joko Purboyo', 21, 'Perumnas KBD Gresik', 'Staf IT BUMN', 'Berobat', 'L', '99920301295', '20202120', 'eksternal'),
(3, 'Daniel', 20, 'Sby', '-', '-', 'L', '-', '-', 'eksternal'),
(4, 'Bianka Atagina', 33, 'Ds mengkudu barat, kec. bangon, kab. siwesi', 'Mahasiswa', 'Mahasiswa', 'P', '', '', 'internal'),
(5, 'Selamet Riyadi', 40, 'Ds. Deru Kec.Wilangon Kab. Suramadu', 'Wiraswasta', 'Wiraswasta', 'L', '', '', 'eksternal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_pasien`
--
ALTER TABLE `akun_pasien`
  ADD PRIMARY KEY (`email_pasien`);

--
-- Indeks untuk tabel `antrian_bpjs`
--
ALTER TABLE `antrian_bpjs`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `antrian_internal`
--
ALTER TABLE `antrian_internal`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `antrian_umum`
--
ALTER TABLE `antrian_umum`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `pekerja_klinik`
--
ALTER TABLE `pekerja_klinik`
  ADD PRIMARY KEY (`email_klinik`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `nama_pasien` (`nama_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian_bpjs`
--
ALTER TABLE `antrian_bpjs`
  MODIFY `id_antrian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `antrian_internal`
--
ALTER TABLE `antrian_internal`
  MODIFY `id_antrian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `antrian_umum`
--
ALTER TABLE `antrian_umum`
  MODIFY `id_antrian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
