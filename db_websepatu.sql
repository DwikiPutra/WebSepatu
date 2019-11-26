-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2019 pada 19.18
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `stok` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `brand` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `harga`, `stok`, `size`, `deskripsi`, `brand`, `gambar`) VALUES
(2, 'Nike Zoom Fly Bright Crimson', 85, 4, '41', 'Latest Product', 'Nike', 'lp1'),
(3, 'KD 6 Meteorology', 120, 4, '41', 'Latest Product', 'Nike', 'lp2'),
(4, 'Kobe 11 Elite Low FCB Mambacurial', 250, 4, '41', 'Latest Product', 'Nike', 'lp3'),
(5, 'BRONAX Men\'s Stylish Graffiti', 25.99, 4, '41', 'Latest Product', 'BRONAX', 'lp4'),
(6, 'Adidas NMD Hu Pharrell Inspiration Pack Black', 210, 4, '41', 'Latest Product', 'Adidas', 'lp5'),
(7, 'Air Zoom Pegasus 35 Black', 100, 4, '41', 'Latest Product', 'Nike', 'lp6'),
(8, 'Adidas Ultra Boost 2.0 Gold Medal', 144, 4, '41', 'Latest Product', 'Adidas', 'lp7'),
(9, 'Kyrie 2 Low Spongebob Sandy Cheeks', 279, 4, '41', 'Latest Product', 'Nike', 'lp8'),
(10, 'Mamba Focus Black', 86.99, 4, '41', 'Latest Product', 'Nike', 'lp9'),
(11, 'Kobe 11 Elite GCR Great Career Recall', 250, 4, '41', 'Latest Product', 'Nike', 'lp10'),
(12, 'Kobe 8 What the Kobe', 435, 4, '41', 'Latest Product', 'Nike', 'lp11'),
(13, 'Kobe 7 What the Kobe', 369, 4, '41', 'Latest Product', 'Nike', 'lp12'),
(14, 'Kyrie 2 Low Spongebob Mr Krabs', 238, 4, '41', 'Coming Product', 'Nike', 'cp1'),
(15, 'Nike Adapt BB Mag', 1160, 4, '41', 'Coming Product', 'Nike', 'cp2'),
(16, 'Kobe A.D. NXT Black White', 165, 4, '41', 'Coming Product', 'Nike', 'cp3'),
(17, 'Under Armour Curry 5 Black Gold', 139.99, 4, '41', 'Coming Product', 'Under Armour', 'cp4'),
(18, 'Kobe 11 Elite Low BHM', 255, 4, '41', 'Coming Product', 'Nike', 'cp5'),
(19, 'Nike Mamba Rage Blue Nebula', 70.39, 4, '41', 'Coming Product', 'Nike', 'cp6'),
(20, 'KD 7 What the KD', 229.99, 4, '41', 'Coming Product', 'Nike', 'cp7'),
(21, 'Kobe 8 Mambacurial', 300.99, 4, '41', 'Coming Product', 'Nike', 'cp8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
