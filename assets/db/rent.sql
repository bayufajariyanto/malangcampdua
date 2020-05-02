-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 02.42
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `kategori` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `harga`, `stok`) VALUES
(2, 'Tenda Double Layer Kap 3-4 org', 'Tenda', 19000, 3),
(3, 'Tenda Bestway Kap 4-5', 'Tenda', 22000, 1),
(4, 'Tenda Consina Kap 4 org', 'Tenda', 25000, 1),
(5, 'Tenda Great Outdoor Kap 4-5 org', 'Tenda', 25000, 1),
(6, 'Tenda Dhaulagiri 4 org Ultralight', 'Tenda', 30000, 3),
(7, 'Tenda Great Outdoor Kap 5-6 org', 'Tenda', 35000, 3),
(8, 'Tenda Great Outdoor Kap 6-8 org', 'Tenda', 35000, 3),
(9, 'Tas Carrier 70-80 L', 'Carrier', 12500, 3),
(10, 'Tas Carrier 60 L', 'Carrier', 10000, 3),
(12, 'Cover Bag', 'Other', 2500, 2),
(13, 'Sepatu Trekking', 'Sepatu', 15000, 1),
(14, 'Sandal Trekking', 'Sandal', 5000, 3),
(15, 'Hammock', 'Other', 5000, 3),
(16, 'Jacket', 'Jacket', 10000, 3),
(17, 'Flysheet', 'Other', 7500, 2),
(18, 'Sarung Tangan Polar', 'Other', 4000, 3),
(19, 'Kompor Lapang', 'Cooking Set', 5000, 1),
(20, 'Nesting / Panci', 'Cooking Set', 5000, 3),
(21, 'Sleeping Bag', 'Other', 5000, 3),
(22, 'Trekking Pole', 'Other', 6000, 3),
(23, 'Matras', 'Other', 2500, 3),
(24, 'Gaiter', 'Other', 4000, 3),
(25, 'Headlamp / Senter', 'Lighting', 4000, 3),
(26, 'Lampu Tenda', 'Lighting', 4000, 3),
(27, 'Jerigen Lipat 5L', 'Other', 3000, 2),
(28, 'Kompas', 'Other', 2500, 2),
(29, 'Pisau Lipat', 'Other', 2500, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Carrier'),
(2, 'Cooking Set'),
(3, 'Jacket'),
(4, 'Lighting'),
(5, 'Other'),
(6, 'Sandal'),
(7, 'Sepatu'),
(8, 'Tenda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_transaksi`
--

CREATE TABLE `kode_transaksi` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_transaksi`
--

INSERT INTO `kode_transaksi` (`id`, `kode`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 1588080800),
(6, 1588080843),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_order` bigint(20) NOT NULL,
  `tanggal_sewa` bigint(20) NOT NULL,
  `tanggal_kembali` bigint(20) NOT NULL,
  `tanggal_bayar` bigint(20) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `konfirmasi` int(11) NOT NULL,
  `selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `kode_transaksi`, `username`, `id_barang`, `tanggal_order`, `tanggal_sewa`, `tanggal_kembali`, `tanggal_bayar`, `jumlah_barang`, `total`, `status`, `konfirmasi`, `selesai`) VALUES
(19, 'OTH-202004270001', 'bayufajariyanto', 17, 1587987936, 1587987936, 1588247136, 1587987936, 1, 7500, 1, 1, 0),
(23, 'TEN-202005010001', 'dellyagus', 5, 1588316173, 1588316173, 1588402573, 1588316173, 1, 25000, 1, 1, 0),
(24, 'TEN-202005010001', 'dellyagus', 3, 1588316729, 1588316729, 1588403129, 1588316762, 2, 44000, 1, 1, 0),
(25, 'COO-202005010001', 'bayufajariyanto', 19, 1588316911, 1588320511, 1588406911, 1588316927, 1, 5000, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_kitas` varchar(128) NOT NULL,
  `jenis_kitas` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `date_created` bigint(20) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `no_kitas`, `jenis_kitas`, `alamat`, `telp`, `date_created`, `role_id`) VALUES
(1, 'admin', '1234', 'Admin', '', '', '', '', 1585144105, 1),
(4, 'bayufajariyanto', '$2y$10$UrJvWuSHG.ZhRWNvOLw4jOh/Y08Wt5/mEl.OEwvpFi2ZByWjpLC0G', 'Bayu Fajariyanto', '1731710033', 'KTM', 'Pasuruan Jawa Timur', '083851350939', 1585816190, 2),
(5, 'anandanurj', '$2y$10$NJC78efYLrEq5Y.tTASfFO3gMZq1o38lIiHis6qhsBw6d8uSkqh2m', 'Ananda Nur Juliansyah', '1731710100', 'KTM', 'Surabaya Jawa Timur', '085257256782', 1585830779, 2),
(6, 'dellyagus', '$2y$10$Wc0wJYhiGm9fJ0gPa5qbpeP7XEnjMKMmjdl2oSYzBU1IKnY/q9gWa', 'Delly Agus Prasetyo', '1731710174', 'KTP', 'Pujon, Jawa Timur', '085964112370', 1586486110, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kode_transaksi`
--
ALTER TABLE `kode_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
