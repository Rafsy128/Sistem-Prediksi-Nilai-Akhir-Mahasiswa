-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 09:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prediksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuel_rate`
--

CREATE TABLE `fuel_rate` (
  `id_fuel_rate` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `km_awal` int(11) NOT NULL,
  `km_akhir` int(11) NOT NULL,
  `total_km` int(11) NOT NULL,
  `rupiah` int(11) NOT NULL,
  `liter` int(11) NOT NULL,
  `average_fuel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_rate`
--

INSERT INTO `fuel_rate` (`id_fuel_rate`, `tanggal`, `km_awal`, `km_akhir`, `total_km`, `rupiah`, `liter`, `average_fuel`) VALUES
(1, '2023-07-01', 4232, 423, 42354, 4543, 4543, 64645);

-- --------------------------------------------------------

--
-- Table structure for table `genstore_expense`
--

CREATE TABLE `genstore_expense` (
  `id_genstore_expense` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `toll` int(11) NOT NULL,
  `jumlah_tiket_e_toll` int(11) NOT NULL,
  `parkir` int(11) NOT NULL,
  `solar` int(11) NOT NULL,
  `jumlah_liter` int(11) NOT NULL,
  `uj_driver` int(11) NOT NULL,
  `uj_helper` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `lain_lain` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genstore_expense`
--

INSERT INTO `genstore_expense` (`id_genstore_expense`, `tanggal`, `toll`, `jumlah_tiket_e_toll`, `parkir`, `solar`, `jumlah_liter`, `uj_driver`, `uj_helper`, `uang_makan`, `lain_lain`, `total`, `nama_outlet`) VALUES
(1, '0000-00-00', 423, 423, 547, 34, 746, 653, 24, 654, 0, 3504, ''),
(2, '0000-00-00', 423, 23, 312, 321, 123, 312, 123, 312, 312, 2261, ''),
(3, '2023-07-07', 1, 1, 1, 1, 1, 1, 1, 1, 1, 9, 'aa'),
(4, '2023-06-30', 14, 123, 312, 123, 132, 123, 123, 123, 123, 1196, '132');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `semester` smallint(6) DEFAULT NULL,
  `ips` float DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `mk_mengulang` int(11) DEFAULT NULL,
  `mk_terlambat` int(11) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `penghasilan` varchar(100) DEFAULT NULL,
  `beasiswa` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama`, `semester`, `ips`, `ipk`, `mk_mengulang`, `mk_terlambat`, `jk`, `penghasilan`, `beasiswa`) VALUES
(2, '34132', 'Rika', 3, 3.3, 3.4, 2, 1, 'P', NULL, '0'),
(3, '21312312', 'AndiMay', 4, 3.5, 3.5, 3, 3, 'L', NULL, '1'),
(6, '277777', 'Andri Malarangan', 4, 3.5, 3.5, 3, 3, 'L', '5.000.000 - 10.000.000', '1'),
(8, '231723', 'Coba', 4, 2, 3, 3, 1, 'L', '2.000.000 - 3.000.000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `on_time_delivery`
--

CREATE TABLE `on_time_delivery` (
  `id_on_time_delivery` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_polisi_truck` varchar(11) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_tiba` time NOT NULL,
  `nama_outlet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `on_time_delivery`
--

INSERT INTO `on_time_delivery` (`id_on_time_delivery`, `tanggal`, `no_polisi_truck`, `driver`, `waktu_berangkat`, `waktu_tiba`, `nama_outlet`) VALUES
(1, '2023-07-06', 'B 9304 SCB', 'joko', '07:58:00', '19:58:00', 'sfda'),
(2, '2023-07-08', 'B 9217 SCN', '123', '08:45:00', '00:45:00', '312');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_barang`
--

CREATE TABLE `pengiriman_barang` (
  `id_pengiriman` int(11) NOT NULL,
  `nama` varchar(110) NOT NULL,
  `waktu_terkirim` time NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_persetujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman_barang`
--

INSERT INTO `pengiriman_barang` (`id_pengiriman`, `nama`, `waktu_terkirim`, `status`, `id_persetujuan`) VALUES
(1, 'Fardi', '12:20:00', 'Selesai', 1),
(2, 'Fardi', '12:20:00', 'Selesai', 1),
(3, 'Fardi', '12:20:00', 'Selesai', 1),
(4, 'Fardi', '12:20:00', 'Selesai', 1),
(5, 'Fardi', '12:20:00', 'Selesai', 1),
(6, 'Arif', '12:20:00', 'Selesai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perfect_order`
--

CREATE TABLE `perfect_order` (
  `id_perfect_order` int(11) NOT NULL,
  `qty_order` int(11) NOT NULL,
  `qty_kirim` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_outlet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perfect_order`
--

INSERT INTO `perfect_order` (`id_perfect_order`, `qty_order`, `qty_kirim`, `tanggal`, `nama_outlet`) VALUES
(1, 4354, 3543543, '2023-07-08', 'fsda'),
(2, 312, 423, '2023-07-07', 'fsda');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `tujuan_kirim` text NOT NULL,
  `id_stock_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_permintaan` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `nama_outlet`, `tujuan_kirim`, `id_stock_barang`, `jumlah`, `tanggal_permintaan`, `status`) VALUES
(1, 'fadsf', 'sdafdsa', 0, 23, NULL, ''),
(2, 'fadsf', 'sdafdsa', 0, 23, NULL, ''),
(3, 'dsfgg', 'dfsgsdfafsda', 0, 433, NULL, ''),
(4, 'safd', 'fsda', 0, 222, NULL, ''),
(5, 'ddd', 'ddd', 1, 33, '2023-06-09', 'Reject'),
(6, 'fsda', 'fsad', 1, 43, '2023-07-01', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan_permintaan`
--

CREATE TABLE `persetujuan_permintaan` (
  `id_persetujuan_permintaan` int(11) NOT NULL,
  `tanggal_persetujuan` date NOT NULL,
  `id_permintaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persetujuan_permintaan`
--

INSERT INTO `persetujuan_permintaan` (`id_persetujuan_permintaan`, `tanggal_persetujuan`, `id_permintaan`) VALUES
(1, '2023-06-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_stock_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_unit` int(11) NOT NULL,
  `jumlah_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_barang`
--

INSERT INTO `stock_barang` (`id_stock_barang`, `nama_barang`, `deskripsi`, `id_unit`, `jumlah_stock`) VALUES
(1, 'sffsapppppp', 'aaaaaa', 1, 321);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'test'),
(2, 'test'),
(3, 'testlagis');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `email`) VALUES
(1, 'joko', '$2y$10$q8.PmMeeiZbs.X6ECIDp2OcMTOBzacfm1mVpBBw3/NFzcs1Rtnu1a', 'driver', ''),
(4, 'admin', '$2y$10$iCzcntepYL12mlFuSv6djupkt6cqEUFpgscn.N.RP9hCs5ED92BQe', 'admin', ''),
(5, 'masagabisa', '$2y$10$zgdL8zdtEmu.W7VwkeOHTunuRqkYpG2ePMrc2XiSEoQecMJ1V2svG', 'admin', ''),
(6, 'pppppppp', '$2y$10$Zt2uym3cgn8fUtgpm1FnA.PUkF0dUXMwOg4Hp.fArk9.85GKhxjaq', 'admin', ''),
(7, 'test', '$2y$10$pJcsU9GzTePzN00KN/c3d.Ddb.APgk4a12REirgGyQWQxKyuW0nBy', 'admin', ''),
(8, 'joko', '$2y$10$ZsnYnCeJ7Xx6XIGQgwRhi.TnHFzJ6rpJgLnq2Zrlmm64MMuECt6Ia', 'admin', ''),
(9, 'joko@gmail.com', '$2y$10$uYh6cRUWxSMYtji1nnNy6eVfrrUXOmNckRSeGeVKTlOQrhtgIpNnO', 'admin', ''),
(10, 'jokos', '$2y$10$nUbPpoB5pxKXGgzHwmv2GOAks2UD1BAMxafwAnYphUktoYRyIBKli', 'admin', 'jokos@gmail.com'),
(11, 'aaaaaa', '$2y$10$cHbwb89dK9PKJkIQUFa3AOzcW0IOTsJ.hljLsde4/S2c6sHmVZ9LO', '1', 'aaaaaa@gmail.com'),
(12, 'mahasiswa', '$2y$10$5Iozq2ZgXrcFNp87w6A9tOkBQKvm1UwnYrb1164PYCnM/Xkz.8cD6', '2', 'mahasiswa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fuel_rate`
--
ALTER TABLE `fuel_rate`
  ADD PRIMARY KEY (`id_fuel_rate`);

--
-- Indexes for table `genstore_expense`
--
ALTER TABLE `genstore_expense`
  ADD PRIMARY KEY (`id_genstore_expense`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `on_time_delivery`
--
ALTER TABLE `on_time_delivery`
  ADD PRIMARY KEY (`id_on_time_delivery`);

--
-- Indexes for table `pengiriman_barang`
--
ALTER TABLE `pengiriman_barang`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `perfect_order`
--
ALTER TABLE `perfect_order`
  ADD PRIMARY KEY (`id_perfect_order`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `persetujuan_permintaan`
--
ALTER TABLE `persetujuan_permintaan`
  ADD PRIMARY KEY (`id_persetujuan_permintaan`);

--
-- Indexes for table `stock_barang`
--
ALTER TABLE `stock_barang`
  ADD PRIMARY KEY (`id_stock_barang`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fuel_rate`
--
ALTER TABLE `fuel_rate`
  MODIFY `id_fuel_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genstore_expense`
--
ALTER TABLE `genstore_expense`
  MODIFY `id_genstore_expense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `on_time_delivery`
--
ALTER TABLE `on_time_delivery`
  MODIFY `id_on_time_delivery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengiriman_barang`
--
ALTER TABLE `pengiriman_barang`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perfect_order`
--
ALTER TABLE `perfect_order`
  MODIFY `id_perfect_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persetujuan_permintaan`
--
ALTER TABLE `persetujuan_permintaan`
  MODIFY `id_persetujuan_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock_barang`
--
ALTER TABLE `stock_barang`
  MODIFY `id_stock_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
