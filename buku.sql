-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2023 pada 08.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_pengarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `id_kategori`, `id_pengarang`) VALUES
(1, 'Bumi Manusia', 2012, 1, 3),
(2, 'Cantik Itu Luka', 2010, 1, 3),
(5, 'Rindu', 2009, 2, 2),
(6, 'Ramai Yang Dulu Kita Bawa Pergi', 2011, 1, 2),
(7, 'I Think I Love You', 2021, 1, 2),
(8, 'Where Stories Begin', 2019, 1, 2),
(9, 'Dilan', 2017, 1, 3),
(10, 'Funiculi Funicula (Before the Coffee Gets Cold)', 2028, 4, 2),
(11, '11:11', 2019, 1, 3),
(12, 'Terpikat', 2011, 1, 1),
(13, 'Lelaki Harimau', 2017, 7, 5),
(14, 'Ayat-ayat Cinta', 2011, 1, 3),
(15, 'Gus Dur KH Abdurrahman Wahid: Biografi 1940-2009', 2022, 5, 1),
(19, 'Soekarno: Biografi Singkat 1901-1970', 2020, 2, 1),
(20, 'Biografi Politik Habibie', 2012, 1, 1),
(23, 'Biografi Umar Ibn Abdul Aziz', 2022, 1, 1),
(24, 'Biografi Ali Bin Abi Thalib', 2012, 6, 1),
(26, 'Tujuh Kelana', 2013, 3, 4),
(27, 'Ubur-Ubur Lembur', 2018, 1, 4),
(28, 'Ngenest', 2019, 4, 5),
(29, 'Bajak Laut & Purnama Terakhir', 2011, 2, 3),
(30, 'Negeri 5 Menara', 2001, 5, 5),
(31, 'Gadis Minimarket', 2018, 3, 3),
(32, 'YoungAdult: Ten Years Challenge', 2011, 1, 2),
(33, 'Puya ke Puya', 2020, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Novel'),
(2, 'Majalah'),
(3, 'Kamus'),
(4, 'Manga'),
(5, 'Ensiklopedia'),
(6, 'Biografi'),
(7, 'Naskah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Yuda'),
(2, 'Yesi'),
(3, 'Agus'),
(4, 'Budi'),
(5, 'Taufan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_pengarang` (`id_pengarang`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
