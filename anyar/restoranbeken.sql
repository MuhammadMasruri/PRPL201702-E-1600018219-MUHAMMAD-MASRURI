-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2018 pada 11.31
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoranbeken`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(15) NOT NULL,
  `namacustomer` varchar(30) DEFAULT NULL,
  `emailcustomer` varchar(50) DEFAULT NULL,
  `alamatcustomer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `namacustomer`, `emailcustomer`, `alamatcustomer`) VALUES
(1, 'rita', 'rita@gmail.com', 'jawa'),
(2, 'kikiy', 'kiki@gmail.com', 'jawa'),
(3, 'herri kurnia', 'he@gmail.com', 'Jauh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idmenu` varchar(15) NOT NULL,
  `namamenu` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`, `harga`) VALUES
('m1', 'SALMON SEEDED MUSTARD', 75000),
('m10', 'Ball Soup', 25000),
('m11', 'Spaghetti Meat Balls', 50000),
('m12', 'Suishi Aimana', 50000),
('m13', 'Doruta Shimasi', 50000),
('m14', 'Cumi Saus Asam Manis', 50000),
('m15', 'Ikan Gurami', 60000),
('m16', 'Kepiting Saus Asam Manis', 75000),
('m17', 'Paket Komplit', 220000),
('m18', 'KUE RAINBOW CAKE', 20000),
('m19', 'Pisang Nugget', 25000),
('m2', 'CHICKEN HOT PLATE', 20000),
('m20', 'Martabak Pelangi dan Mozarella', 50000),
('m3', 'NASGOR SOMETHING HOT PLATE', 20000),
('m4', 'Soto Tauco Khas Tegal', 15000),
('m5', 'Sate Blengong Khas Brebes', 20000),
('m6', 'SalmonKecap Teriyaki', 75000),
('m7', 'Udang Asam Manis Sayur', 50000),
('m8', 'Pizza roll baked mini', 78000),
('m9', 'Mie Japanese', 78000),
('mi1', 'KING MANGO THAI', 25000),
('mi2', 'Thai Tea', 20000),
('mi3', 'Coca Cola', 10000),
('mi4', 'ES BUAH ', 10000),
('mi5', 'ORANGE IN RED', 10000),
('mi6', 'Air Mineral', 5000),
('mi7', 'Es Teh', 3000),
('mi8', 'ES JERUK KELAPA', 10000),
('mi9', 'JUS BUAH', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pes`
--

CREATE TABLE `pes` (
  `Id_Pesanan` int(11) NOT NULL,
  `Nama_Customer` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `order1` int(11) NOT NULL,
  `order2` int(11) NOT NULL,
  `order3` int(11) NOT NULL,
  `order4` int(11) NOT NULL,
  `order5` int(11) NOT NULL,
  `order6` int(11) NOT NULL,
  `order7` int(11) NOT NULL,
  `order8` int(11) NOT NULL,
  `order9` int(11) NOT NULL,
  `order10` int(11) NOT NULL,
  `order11` int(11) NOT NULL,
  `order12` int(11) NOT NULL,
  `order13` int(11) NOT NULL,
  `order14` int(11) NOT NULL,
  `order15` int(11) NOT NULL,
  `order16` int(11) NOT NULL,
  `order17` int(11) NOT NULL,
  `order18` int(11) NOT NULL,
  `Jumlah_Total` int(11) NOT NULL,
  `Jumlah_Barang` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `Jumlah_Bayar` int(11) NOT NULL,
  `Uang_Anda` int(11) NOT NULL,
  `Kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pes`
--

INSERT INTO `pes` (`Id_Pesanan`, `Nama_Customer`, `Alamat`, `Tanggal`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `order7`, `order8`, `order9`, `order10`, `order11`, `order12`, `order13`, `order14`, `order15`, `order16`, `order17`, `order18`, `Jumlah_Total`, `Jumlah_Barang`, `Diskon`, `Jumlah_Bayar`, `Uang_Anda`, `Kembalian`) VALUES
(4, 'Masruri', 'Brebes', '2018-05-11', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 155000, 5, 20000, 135000, 150000, 15000),
(5, 'Herri', 'Riou', '2018-05-12', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 220000, 5, 20000, 200000, 300000, 100000),
(6, 'fauzan', 'Kalimantan', '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 178000, 4, 20000, 158000, 200000, 42000),
(7, 'mahendra', 'purworejo', '2018-05-14', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90000, 2, 20000, 70000, 100000, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pes`
--
ALTER TABLE `pes`
  ADD PRIMARY KEY (`Id_Pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pes`
--
ALTER TABLE `pes`
  MODIFY `Id_Pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
