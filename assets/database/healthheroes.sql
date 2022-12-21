-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `isiberita` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `thumb`, `kategori`, `isiberita`, `author`, `date`, `tag`) VALUES
(1, 'tembikers', 'Skipper 2.jpg', 'donor', 'dasjkfhajkhfasjfjahajkhasfhk', 'mamakkau', '2022-12-21 23:39:00', 'djakldjakdk');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `kotakelahiran` varchar(128) NOT NULL,
  `alamatrumah` text NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nokk` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `id_rs` int(11) NOT NULL,
  `namaRS` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `website` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kodepos` varchar(14) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`id_rs`, `namaRS`, `deskripsi`, `website`, `email`, `notelp`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodepos`, `dateCreated`) VALUES
(1, 'mamang', 'asd', 'https://docs.google.com/spreadsheets/d/1pQfbV2AnHHlte4BU7LSR3E6R6D3R0nP-75MlmIaI7o8/edit#gid=121364292', 'aaaaaa@gmail.com', '12345', 'ssssssss', 'Jawa Barat', 'Bandung', 'Bandung', 'Bandung', '1', '2022-12-21'),
(2, 'scscsc', 'asdfg', 'https://docs.google.com/spreadsheets/d/1pQfbV2AnHHlte4BU7LSR3E6R6D3R0nP-75MlmIaI7o8/edit#gid=121364292', 'aaaaaa@gmail.com', '12345', 'ssssssss', 'Jawa Barat', 'Bandung', 'Bandung', 'Bandung', '1', '2022-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `fullname`, `username`, `password`, `role`, `dateCreated`) VALUES
(1, 'asdfghjk@m.com', 'asdfghj', 'asdfghjk', '$2y$10$yGYUu.kO84m9QlHZ1F9qEuVWH65gpryjG/pflMe6ahxmLD2/Tk2H.', 'pengguna', '2022-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
