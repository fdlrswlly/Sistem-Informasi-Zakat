-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2020 pada 02.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adam', 'adam001'),
(2, 'joni', 'joni002'),
(3, 'ganjar', 'ganjar003'),
(4, 'tiyasy', 'tiyasy004'),
(5, 'shelvia', 'shelvia005'),
(6, 'tessa', 'tessa006'),
(7, 'refida', 'refida007'),
(8, 'ines', 'ines008'),
(9, 'riki', 'riki009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mustahik`
--

CREATE TABLE `data_mustahik` (
  `id_mustahik` int(11) NOT NULL,
  `nama_mustahik` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `status_mustahik` varchar(500) NOT NULL,
  `nama_kk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mustahik`
--

INSERT INTO `data_mustahik` (`id_mustahik`, `nama_mustahik`, `alamat`, `jenis_kelamin`, `status_mustahik`, `nama_kk`) VALUES
(1, 'Jakaria', 'Purwakarta', 'Laki laki', 'Yatim', 'Ibu Vini'),
(2, 'Juki', 'Jatiluhur', 'Laki Laki', 'Miskin', 'Bpk Jojo'),
(3, 'Sukijan', 'Cipaisan', 'Laki laki', 'Miskin', 'Bpk Sukirman'),
(4, 'Ahmad', 'Plered', 'Laki laki', 'Sabilillah', 'Bpk Darman'),
(5, 'Joko', 'Tegalwaru', 'Laki Laki', 'Miskin', 'Bpk Joki'),
(6, 'Jeni', 'Purwakarta', 'Perempuan', 'Yatim Piatu', 'Ibu Sarinem'),
(7, 'Yoona', 'Ciseureuh', 'Perempuan', 'Yatim Piatu', 'Bpk Sutyoso'),
(8, 'Faira', 'Lembang', 'Perempuan', 'Miskin', 'Bpk Reygan Sky Aston'),
(9, 'Adel', 'Darangdan', 'Perempuan', 'Yatim Piatu', 'Bpk Sugiono'),
(10, 'Geulis', 'Tarogong', 'Perempuan', 'Miskin', 'Bpk Iman'),
(11, 'Arga', 'Bungursari', 'Laki Laki', 'Yatim', 'Ibu Reyslla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_muzzaki`
--

CREATE TABLE `data_muzzaki` (
  `id_muzzaki` int(11) NOT NULL,
  `nama_muzzaki` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `jenis_zakat` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_muzzaki`
--

INSERT INTO `data_muzzaki` (`id_muzzaki`, `nama_muzzaki`, `alamat`, `jenis_kelamin`, `jenis_zakat`, `jumlah`) VALUES
(1, 'Yudha Simanjuntak', 'Purwakarta', 'Laki laki', 'Zakat Fitrah', 'Rp.25.000'),
(2, 'Zola Mediola', 'Cijolang', 'Perempuan', 'Zakat Mal', 'Rp.500.000'),
(3, 'Zulfa Rengganis', 'Darangdan', 'Perempuan', 'Zakat Fitrah', 'Rp.30.000'),
(4, 'Nabila Safitri', 'Dayeuhkolot', 'Perempuan', 'Zakat Fitrah', 'Rp.30.000'),
(5, 'Fadhlan Pardiawan', 'Cigadung', 'Laki laki', 'Zakat Fitrah', 'Rp.30.000'),
(6, 'Muhammad Waqi Beladina', 'Cibatu', 'Laki laki', 'Zakat Fitrah', 'Rp.30.000'),
(7, 'Farid Eka Saputra', 'Purwakarta', 'Laki laki', 'Zakat Mal', 'Rp.500.000'),
(8, 'H.Kemed', 'Plered', 'Laki laki', 'Zakat Mal', 'Rp.500.000'),
(9, 'Ridwan Abdul S', 'Purwakarta', 'Laki Laki', 'Zakat Fitrah', 'Rp.30.000'),
(10, 'M.Rizal Al Rasyid', 'Babakancikao', 'Laki Laki', 'Zakat Fitrah', 'Rp.30.000'),
(11, 'Yulia Winarti', 'Sukatani', 'Perempuan', 'Zakat Mal', 'Rp.500.000'),
(12, 'Satrya Lintang P', 'Purwakarta', 'Laki Laki', 'Zakat Mal', 'Rp.300.000'),
(13, 'Audi Alfan Hana', 'Purwakarta', 'Laki Laki', 'Zakat Fitrah', 'Rp.30.000'),
(14, 'M.Rizky Fauzi', 'Koncara', 'Laki Laki', 'Zakat Mal', 'Rp.400.000'),
(15, 'Safidinsyah Sasmaya Ikhsal Abdul', 'Purwakarta', 'Laki Laki', 'Zakat Mal', 'Rp.500.000'),
(16, 'Albian Haikal Fajar', 'Purwakarta', 'Laki Laki', 'Zakat Fitrah', 'Rp.25.000'),
(17, 'Ade Suryana', 'Sukatani', 'Laki Laki', 'Zakat Mal', 'Rp.500.000'),
(18, 'Wahyu', 'Semarang', 'Laki laki', 'Zakat Fitrah', 'Rp.25.000'),
(19, 'Mia Rosmeida', 'Ciasem', 'Perempuan', 'Zakat Fitrah', 'Rp.30.000'),
(20, 'Siti Sarah', 'Sagaranten', 'Perempuan', 'Zakat Fitrah', 'Rp.30.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `jabatan`) VALUES
(1, 'Ganjar Gumilar Raya', 'Gg.Mushola', 'Ketua'),
(2, 'Rahmania Shintesa', 'Gg.Anyelir', 'Wakil Ketua'),
(3, 'Tiyas Yuningsih', 'Gg.Anyelir', 'Sekretaris I'),
(4, 'Shelvia Zayyana', 'Gg.Mushola', 'Sekretaris II'),
(5, 'Fadhly Aulia R', 'Jl.Flamboyan III', 'Bendahara I'),
(6, 'Adam Nur Ramadhan', 'Jl.Flamboyan III', 'Bendahara II'),
(7, 'Nazwa Agustia', 'Gg.Mushola', 'Anggota'),
(8, 'Riki Hermansyah', 'Gg.Anyelir', 'Anggota'),
(9, 'Iqfa Febria', 'Gg.Mushola', 'Anggota'),
(10, 'Muhammad Umar Said', 'Jl.Flamboyan I', 'Anggota'),
(11, 'Ivelyne Nurul Febrian', 'Gg.Mushola ', 'Anggota'),
(12, 'Refida Oktavia', 'Gg.Anyelir', 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_mustahik`
--
ALTER TABLE `data_mustahik`
  ADD PRIMARY KEY (`id_mustahik`);

--
-- Indeks untuk tabel `data_muzzaki`
--
ALTER TABLE `data_muzzaki`
  ADD PRIMARY KEY (`id_muzzaki`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
