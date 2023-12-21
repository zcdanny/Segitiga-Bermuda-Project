-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 07.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL,
  `foto_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(1, 'TNI Angkatan Laut', 'al.jpg'),
(2, 'TNI Angkatan Darat', 'ad.jpg'),
(3, 'TNI Angkatan Udara', 'au.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_alusista` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_alusista`, `komentar`, `tgl_komentar`) VALUES
(1, 2, 1, 'Nama Sampari sendiri diambil dari nama senjata tajam sejenis keris dari suku Mbojo (Bima dan Dompu), Nusa Tenggara Barat.', '2023-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('ADMIN','USER','','') NOT NULL DEFAULT 'USER',
  `foto_user` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `jenis_kelamin`, `email_user`, `no_telp`, `alamat`, `role`, `foto_user`) VALUES
(1, 'admin', 'admin', 'admin', 'Pria', 'admin@gmail.com', '081510211241', 'Jakarta', 'ADMIN', 'person_1.jpg'),
(2, 'Ramanda', 'danny', '123', 'Pria', 'zdanny@gmail.com', '081213161669', 'Bumen', 'USER', 'person_2.jpg');


-- --------------------------------------------------------

--
-- Struktur dari tabel alusista
--

CREATE TABLE `alusista` (
  `id_alusista` int(11) NOT NULL,
  `nama_alusista` varchar(32) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lokasi` varchar(32) NOT NULL,
  `fasilitas` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto_1` varchar(32) NOT NULL,
  `foto_2` varchar(32) NOT NULL,
  `foto_3` varchar(32) NOT NULL,
  `foto_4` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel alusista
--

INSERT INTO `alusista` (`id_alusista`, `nama_alusista`, `id_kategori`, `lokasi`, `fasilitas`, `jumlah`, `deskripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`) VALUES
(1, 'Kapal cepat rudal (KCR) kelas Sampari', 1, 'Indonesia', 'Kapal berukuran panjang 60 meter\r\nlebar 8,10 meter, dan berat 460 ton \r\n kecepatan 28 knot.', 6, 'Kapal Cepat Rudal Kelas 60 meter adalah salah satu jenis kapal Kapal Perang Republik Indonesia bertipe Kapal Cepat Rudal yang pembuatannya dilakukan PT PAL di Surabaya.', 'Kapal cepat rudal kelas Sampari1.jpg', 'Kapal cepat rudal kelas Sampari2.jpg', 'Kapal cepat rudal kelas Sampari3.jpg', 'Kapal cepat rudal kelas Sampari4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori` ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_User` (`id_user`),
  ADD KEY `FK_Alusista` (`id_alusista`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel alusista
--
ALTER TABLE `alusista`
  ADD PRIMARY KEY (`id_alusista`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `alusista`
--
ALTER TABLE `alusista`
  MODIFY `id_alusista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_Alusista` FOREIGN KEY (`id_alusista`) REFERENCES `alusista` (`id_alusista`);

--
-- Ketidakleluasaan untuk tabel `alusista`
--
ALTER TABLE `alusista`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
