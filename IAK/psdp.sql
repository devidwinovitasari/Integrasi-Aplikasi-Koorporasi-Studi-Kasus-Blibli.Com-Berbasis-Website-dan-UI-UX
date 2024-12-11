-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2024 pada 11.44
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
-- Database: `psdp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `customer_data`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `customer_data` (
`id_pelanggan` int(11)
,`nama` varchar(100)
,`username` varchar(50)
,`email` varchar(100)
,`no_telp` varchar(20)
,`alamat` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `total_harga` int(100) DEFAULT NULL,
  `metode_pembayaran` varchar(100) DEFAULT NULL,
  `metode_pengiriman` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_orders`, `tanggal_pembayaran`, `nama_barang`, `total_harga`, `metode_pembayaran`, `metode_pengiriman`, `alamat`, `nama`, `id_user`) VALUES
(4, '2024-12-10', 'Shoulder bag Tas Selempang Wanita Import Model Terbaru CPT 528 (x1), Marshwillow Sugar Dust Eye Shad', 77000, 'BRI', 'J&T Express', 'Penidon, Plumpang, Tuban', 'Deby', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `email`, `username`, `notlp`, `alamat`, `password`) VALUES
(2, 'devifebiyanti75@gmail.com', 'Devi Feby', '083863833932', '', '$2y$10$CWZPICNW3WaFRH22YnTMPeLkpOgz7z9hNLTDZC2zalk8D8/bgJ8IC'),
(3, 'devidwi@gmail.com', 'Devi Dwi ', '081230407351', 'Modo, Babat, Lamongan', '$2y$10$fhPngylaEBTJLnUOpPcHqubk7WPYI1xE6wYJ0cLYWqAebW1y1YXj.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(10) NOT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `jumlah_produk` int(10) DEFAULT NULL,
  `harga_produk` int(10) DEFAULT NULL,
  `total` int(100) DEFAULT NULL,
  `nama_supplier` varchar(100) DEFAULT NULL,
  `status` enum('Lunas','Hutang') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `tanggal_beli`, `nama_produk`, `jumlah_produk`, `harga_produk`, `total`, `nama_supplier`, `status`) VALUES
(4, '2024-06-23', 'Black Mamba', 40, 176000, 7040000, 'Angga Dwi', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stok` int(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `stok`, `price`, `image`) VALUES
(0, 'Men\'s Biore Acne Bacterior Facial Foam Scrub [100 g]', 30, 48800.00, 'produk1.jpg'),
(1, 'HELIDFANDA Lunch Box Kotak Makan Anak Bear Termos Sup dengan Pegangan', 45, 55000.00, 'produk2.jpg'),
(2, 'Advance BL2 Tabung Kaca - Blender 1.2 Liter', 43, 150480.00, 'produk3.jpg'),
(3, 'GoPro HERO10 - Black', 21, 4749000.00, 'produk4.jpg'),
(4, 'Shoulder bag Tas Selempang Wanita Import Model Terbaru CPT 528', 55, 50000.00, 'produk5.jpg'),
(5, 'Pond\'s Age Miracle Serum Wajah Anti Aging = Glowing  Serum With Retinol & Niacinamide 30  ML', 56, 135000.00, 'produk6.jpg'),
(6, 'Marshwillow Sugar Dust Eye Shadow, By Natasha Wilona', 43, 27000.00, 'produk7.jpg'),
(7, 'Lenovo LOQ 15IAX9 1JID || Intel Core i5-1245OHX 12GB 512GB Windows11', 20, 12021000.00, 'produk8.jpg'),
(8, 'Ona High Speed Hairdryer - Coral Pink', 10, 749000.00, 'produk9.jpg'),
(9, 'Velvet Junior Setelan Kancing Pundak Celana Panjang', 54, 143500.00, 'produk10.jpg'),
(10, 'Melissa Jackie Ad Sepatu Wanita - Burgundy/Red', 68, 960000.00, 'produk11.jpg'),
(11, 'MSi Modern 14 C12MO-1058ID Laptop - Black', 10, 5317440.00, 'produk12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `email_supplier` varchar(100) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `status` enum('Lunas','Hutang','Belum Melakukan Pembelian') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `nama_barang`, `alamat_supplier`, `email_supplier`, `kode_pos`, `no_telp`, `no_rek`, `status`) VALUES
(3, 'Marina', 'Hoops Low Putih Hitam Putih', 'Surabaya', 'marina123@gmail.com', 64524, '087125672517', '123123912783917', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur untuk view `customer_data`
--
DROP TABLE IF EXISTS `customer_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_data`  AS SELECT `p`.`id` AS `id_pelanggan`, `o`.`nama` AS `nama`, `p`.`username` AS `username`, `p`.`email` AS `email`, `p`.`notlp` AS `no_telp`, `o`.`alamat` AS `alamat` FROM (`pelanggan` `p` join `orders` `o` on(`p`.`id` = `o`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD UNIQUE KEY `username` (`nama_supplier`),
  ADD UNIQUE KEY `email` (`alamat_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
