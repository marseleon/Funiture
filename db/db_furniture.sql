-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2023 pada 08.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_furniture`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_acounting`
--

CREATE TABLE `tb_acounting` (
  `id` int(7) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `nama_perusahaan` varchar(25) NOT NULL,
  `total` varchar(25) NOT NULL,
  `tanggal_transaksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_acounting`
--

INSERT INTO `tb_acounting` (`id`, `nama_barang`, `quantity`, `nama_perusahaan`, `total`, `tanggal_transaksi`) VALUES
(2, 'sofa', '12', 'pt.turuindah', '2.500.000', '2023-06-27'),
(3, 'meja', '34', 'pt.benderakuning', '3.000.000', '2023-06-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id` int(7) NOT NULL,
  `nama_bahan` varchar(25) NOT NULL,
  `satuan_bahan` varchar(10) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bahan`
--

INSERT INTO `tb_bahan` (`id`, `nama_bahan`, `satuan_bahan`, `jumlah`, `harga`) VALUES
(1, 'kayu', 'sentimeter', '100', '25.000.000'),
(3, 'kain katun', 'kodi', '55', '12.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bom`
--

CREATE TABLE `tb_bom` (
  `id` int(7) NOT NULL,
  `material` varchar(25) NOT NULL,
  `stock` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bom`
--

INSERT INTO `tb_bom` (`id`, `material`, `stock`, `harga`) VALUES
(4, 'baut', '90', '1000000'),
(7, 'Besi', '100', '10.000.000'),
(8, 'kayu', '3', '10.000.000'),
(10, 'kayu', '50', '2.500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(7) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `nama`, `alamat`, `no`, `email`) VALUES
(2, 'angga', 'jl.paling tua', '0856974512', 'angga@gmail.com'),
(3, 'misaki', 'jl.wibu', '086478954', 'wibu@gmail.com'),
(4, 'maron', 'jl.warna', '0258454568', 'maron@gmail.com'),
(5, 'migel', 'jl.anyar', '0856121354', 'mgel@gmail.com'),
(7, 'enzo', 'jl.cengger ayam no 96', '085647777931', 'enio@yahooo.com'),
(8, 'Ahmad yakin', 'Jl. sipaling yakin no 007', '089375275827', 'yakinkok100@gmail.om');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(7) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `ukuran` varchar(7) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama`, `jumlah`, `ukuran`, `harga`, `photo`) VALUES
(5, 'kursi rias', '15', '2 x 5', '600.000', '63b29f0413d49.jpg'),
(8, 'asd', 'asd', 'asd', 'asd', '63b422ac7013b.jpg'),
(9, 'asd', 'asd', 'asd', 'asd', '63b422b7288df.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produksi`
--

CREATE TABLE `tb_produksi` (
  `id` int(7) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ukuran` varchar(7) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produksi`
--

INSERT INTO `tb_produksi` (`id`, `nama`, `ukuran`, `harga`, `bahan`, `qty`) VALUES
(2, 'kursi', '2 x 5', '600.000', 'kayu', '12'),
(4, 'sofa', '3 x 7', '5.000.000', 'besi', '2'),
(6, 'meja', '13 x13', '10.000.000', 'kayu', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_purchasing`
--

CREATE TABLE `tb_purchasing` (
  `id` int(7) NOT NULL,
  `nama_vendor` varchar(25) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `subtotal` varchar(25) NOT NULL,
  `tglorder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_purchasing`
--

INSERT INTO `tb_purchasing` (`id`, `nama_vendor`, `nama_produk`, `qty`, `harga`, `subtotal`, `tglorder`) VALUES
(1, 'a', 'a', 'a', '20', '2022-12-31', '0000-00-00'),
(2, 's', 's', 's', '200', '20', '2022-12-31'),
(3, 'q', 'a', 's', '60', '20', '2022-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_roq`
--

CREATE TABLE `tb_roq` (
  `id` int(7) NOT NULL,
  `nama_vendor` varchar(25) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `subtotal` varchar(25) NOT NULL,
  `tglorder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_roq`
--

INSERT INTO `tb_roq` (`id`, `nama_vendor`, `nama_produk`, `qty`, `harga`, `subtotal`, `tglorder`) VALUES
(1, 'a', 'a', 'a', '20', '20', '2022-12-31'),
(3, 'sad', 'asd', '1', '200.000', '200.000', '2023-01-03'),
(5, 'c', 'meja', '7', '25.000.000', '25.000.000', '2023-07-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `id` int(7) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Perusahaan` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Telp` varchar(255) NOT NULL,
  `Kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_vendor`
--

INSERT INTO `tb_vendor` (`id`, `Nama`, `Perusahaan`, `Alamat`, `Telp`, `Kota`) VALUES
(3, 'asep', 'kentang jaya', 'jl. bersamamu', '0839729749', 'Solo'),
(4, 'Putri', 'Daily life corp.', 'JL.perwira', '74970372942', 'Medan'),
(7, 'runda', 'asu kayang', 'jl. bersamamu', '0896666666', 'madiun');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acounting`
--
ALTER TABLE `tb_acounting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bom`
--
ALTER TABLE `tb_bom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produksi`
--
ALTER TABLE `tb_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_purchasing`
--
ALTER TABLE `tb_purchasing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_roq`
--
ALTER TABLE `tb_roq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_acounting`
--
ALTER TABLE `tb_acounting`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_bom`
--
ALTER TABLE `tb_bom`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_produksi`
--
ALTER TABLE `tb_produksi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_purchasing`
--
ALTER TABLE `tb_purchasing`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_roq`
--
ALTER TABLE `tb_roq`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
