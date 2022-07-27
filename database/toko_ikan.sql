-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 17.57
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_ikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'riggi@gmail.com', '1234'),
(2, 'false@gmail.com', '4321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `nama_ads` varchar(255) NOT NULL,
  `foto_ads` varchar(255) NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ads`
--

INSERT INTO `ads` (`ads_id`, `nama_ads`, `foto_ads`, `isActive`) VALUES
(1, 'Up to 50%', 'ads51.png', 1),
(2, 'Beli 5 Ikan, gratis Serokan', 'ins3.png', 1),
(3, 'Beli Ikan sepasang bonus obat akuarium', 'ins4.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Ikan Guppy'),
(2, 'Ikan Morris'),
(3, 'Pakan'),
(4, 'Aksesoris - Pipa'),
(5, 'Aksesoris - Obat'),
(7, 'Aksesoris - serokan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `keranjang_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(13) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`keranjang_id`, `produk_id`, `user_id`, `total`, `jumlah`) VALUES
(1, 1, 1, 1600000, 3),
(2, 3, 1, 80000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menu_id`, `menu`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `keranjang_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`order_id`, `keranjang_id`, `user_id`, `status`) VALUES
(4, 2, 1, 'proses'),
(3, 1, 1, 'shipping');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(13) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `kategori`, `harga`, `deskripsi`, `stok`, `image`) VALUES
(1, 'Guppy Sky-Blue', 'ikan guppy', 80000, 'Ikab Guppy dengan corak biru langit dengan gradasi putih yang memanjakan mata.', 10, 'prodIkan3.png'),
(2, 'Ikan Guppy White', 'ikan guppy', 65000, 'Ikan Guppy dengan corak putih yang anggun.', 30, 'prodIkan1.png'),
(3, 'Pipa pompa', 'Aksesoris - pompa', 120000, 'Pipa untuk memudahkan sirkulasi air pada akuarium anda.', 7, 'prodPipa.png'),
(4, 'Artemia EGG', 'pakan - pelet', 21000, 'Pakan sehat untuk Ikan guppy anda.', 50, 'prodArtemia.png'),
(5, 'Ikan Guppy Blue ', 'Ikan Guppy', 45000, 'Ikan dengan corak biru laut.', 11, 'prodIkan4.png'),
(6, 'Ikan Morris Half-Black ', 'Ikan Morris', 70000, 'Ikan dengan corak yang sangat kontras dengan warna monoton.', 9, 'prodIkan2.png'),
(7, 'Serokan Jaring - sobex', 'Aksesoris - serokan', 30000, 'Serokan jaring ikan, tanpa takut merusak ikan tercinta.', 12, 'ins3.png'),
(10, 'Acriflavine - Obat akuarium', 'Aksesoris - Obat', 12500, 'Untuk mensterilkan air di akuarium anda agar selalu bersih.', 50, 'ins4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`submenu_id`, `menu_id`, `judul`, `url`) VALUES
(10, 1, 'PRODUK', 'admin/produk'),
(11, 1, 'KATEGORI', 'admin/kategori'),
(12, 1, 'ADS', 'admin/ads'),
(13, 1, 'ORDER', 'admin/order'),
(14, 2, 'HOME', ''),
(15, 2, 'PRODUK', 'produk'),
(16, 2, 'IKAN', 'produk/kategori/ikan'),
(17, 2, 'PAKAN', 'produk/kategori/pakan'),
(18, 2, 'AKSESORIS', 'produk/kategori/aksesoris'),
(19, 3, 'GUPPY', 'produk/kategori/Guppy'),
(20, 3, 'MORRIS', 'produk/kategori/Morris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_user`, `no_telepon`, `alamat`, `email`) VALUES
(1, 'riggi', '089678244014', 'tambun selatan', 'riggi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`keranjang_id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`,`email`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `keranjang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
