-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2019 pada 05.40
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ipk`
--

CREATE TABLE `ipk` (
  `id` int(11) NOT NULL,
  `rentang` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ipk`
--

INSERT INTO `ipk` (`id`, `rentang`, `nilai`) VALUES
(1, '< 2,8', 1),
(2, '2,8 - 3,00', 2),
(3, '3,01 - 3,50', 3),
(4, '> 3,50', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jarak`
--

CREATE TABLE `jarak` (
  `id` int(11) NOT NULL,
  `rentang` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jarak`
--

INSERT INTO `jarak` (`id`, `rentang`, `nilai`) VALUES
(1, '10 km', 1),
(2, '9 km - 5 km', 2),
(3, '4 km - 1 km', 3),
(4, '< 900 m', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` varchar(225) NOT NULL,
  `id_umur` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_ipk` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_jarak` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ktp` varchar(225) NOT NULL,
  `cv` varchar(225) NOT NULL,
  `ijazah` varchar(225) NOT NULL,
  `transkrip_nilai` varchar(225) NOT NULL,
  `skck` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id`, `nama`, `tanggal_lahir`, `email`, `alamat`, `telepon`, `jk`, `agama`, `id_umur`, `id_pendidikan`, `id_ipk`, `id_status`, `id_jarak`, `foto`, `ktp`, `cv`, `ijazah`, `transkrip_nilai`, `skck`) VALUES
(1, 'Mutiara Puspayanti S.Kom', '2000-10-10', 'mutiara@gmail.com', 'Bogor', '08583289090', 'P', 'islam', 1, 3, 4, 2, 3, '2525040420192019__045100irish.jpg', '2525040420192019__045100ktp.jpg', '2525040420192019__045100cv.png', '2525040420192019__045100ijazah.jpg', '2525040420192019__045100nilai.jpg', '2525040420192019__045100skck.jpg'),
(2, 'Erkina Sukma S.Kom', '2010-06-08', 'erkina@gmail.com', 'Bogor', '083811509033', 'P', 'islam', 2, 3, 3, 2, 3, '2525040420192019__045358irish.jpg', '2525040420192019__045358ktp.jpg', '2525040420192019__045358cv.png', '2525040420192019__045358ijazah.jpg', '2525040420192019__045358nilai.jpg', '2525040420192019__045358skck.jpg'),
(3, 'Yani Fadillah S.H', '2008-09-08', 'yani@gmail.com', 'Jakarta', '085778500762', 'P', 'islam', 3, 3, 2, 1, 4, '2525040420192019__045526irish.jpg', '2525040420192019__045526ktp.jpg', '2525040420192019__045526cv.png', '2525040420192019__045526ijazah.jpg', '2525040420192019__045526nilai.jpg', '2525040420192019__045526skck.jpg'),
(4, 'Gerdian Putra A.md', '1986-01-06', 'gerdian@gmail.com', 'Palu', '085129000800', 'L', 'islam', 2, 2, 3, 1, 3, '2525040420192019__045648irish.jpg', '2525040420192019__045648ktp.jpg', '2525040420192019__045648cv.png', '2525040420192019__045648ijazah.jpg', '2525040420192019__045648nilai.jpg', '2525040420192019__045648skck.jpg'),
(5, 'Irfan Budiman S.E', '2001-10-01', 'irfan@gmail.com', 'Bogor', '08123880038', 'L', 'islam', 1, 3, 4, 2, 4, '2525040420192019__045757irish.jpg', '2525040420192019__045757ktp.jpg', '2525040420192019__045757cv.png', '2525040420192019__045757ijazah.jpg', '2525040420192019__045757nilai.jpg', '2525040420192019__045757skck.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `rentang` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `rentang`, `nilai`) VALUES
(1, 'SMA', 1),
(2, 'D3', 2),
(3, 'S1', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `rentang` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `rentang`, `nilai`) VALUES
(1, 'Menikah', 1),
(2, 'Lajang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `umur`
--

CREATE TABLE `umur` (
  `id` int(11) NOT NULL,
  `rentang` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umur`
--

INSERT INTO `umur` (`id`, `rentang`, `nilai`) VALUES
(1, '23', 4),
(2, '24', 3),
(3, '25', 2),
(4, '26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umur`
--
ALTER TABLE `umur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `umur`
--
ALTER TABLE `umur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
