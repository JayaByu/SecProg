-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2021 pada 08.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `date`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'Reyhan Akhmad Aulia Mochram', 'reyhanahmad002@gmail.com', '082197253411', '0000-00-00 00:00:00', 'cod', 'Huawei 10 Pro(1), LG v30(1)', '140000'),
(13, 'Joni', 'muhammadreyhan720@yahoo.com', '082198120398', '0000-00-00 00:00:00', 'cards', 'One Plus 6(2), LG v30(2), MI Note 5 Pro(2)', '230000'),
(14, 'Ara•Mocca', 'reyhan.mochram@binus.ac.id', '012830917230', '2021-06-15 15:15:00', 'cards', 'Petik Jeruk(2), Petik Jambu(2), Petik Apel(1)', '180000'),
(15, 'Reyhan Akhmad Aulia Mochram', 'reyhanahmad002@gmail.com', '+6282197253411', '2021-07-01 19:31:00', 'cod', 'Petik Jeruk(1), Petik Apel(1)', '95000'),
(16, 'REyhan', 'reyhanahmad002@gmail.com', '012830917230', '2021-06-16 16:42:00', 'cod', 'Petik Jambu(3), Paket Hore(3)', '390000'),
(17, 'saya', 'saya@mail.com', '2304i0234123', '2021-06-21 18:29:00', 'cod', 'Petik Jeruk(1), Petik Apel(1)', '95000'),
(18, 'Reyhan Akhmad Aulia Mochram', 'reyhanahmad002@gmail.com', '012830917230', '2021-06-30 17:01:00', 'cod', 'Petik Jambu(1), Petik Jeruk(1), Petik Apel(1), Petik Buah Naga(1), Paket Boom(1)', '295000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Petik Buah Naga', '60000', 1, 'gambar/naga.png', 'p1000'),
(2, 'Petik Apel', '60000', 1, 'gambar/apple.png', 'p1001'),
(3, 'Petik Jeruk', '35000', 1, 'gambar/orange.png', 'p1002'),
(4, 'Petik Jambu', '25000', 1, 'gambar/jambu.png', 'p1003'),
(5, 'Petik Strawberry', '75000', 1, 'gambar/strawberry.png', 'p1004'),
(6, 'Paket Hore', '105000', 1, 'gambar/hore.png', 'p1005'),
(7, 'Paket Boom', '115000', 1, 'gambar/boom.png', 'p1006');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
