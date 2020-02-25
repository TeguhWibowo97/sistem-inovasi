-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2020 pada 07.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsisteminov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_05_081629_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `id_wr`, `pertanyaan`, `keterangan`, `dokumen`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'wr3', 'Apakah PT mewajibkan mahasiswa mengikuti paling tidak satu MK Kewirausahaan ?.\r', 'ya pasti to', 'documents/o03Cp5ptCjRRqhzQMMWXggoGWiXVJ0G1Gs2AOupC.pdf', 'avatars/Ie4PGjWvHgjXdLq8WdyFHnRNApWI1R8gI1supYP1.jpeg', NULL, '2020-02-24 22:11:56'),
(2, 'wr4', 'Seperti apa bentuk instrumen kebijakan insentif kepada dosen yang berinovasi di PT ?.\r\n', 'seperti itulah', 'documents/PVcnBPIT2i7B4Ua9RubGGpIUgHga3prdPOa366Bw.pdf', 'avatars/NcWomsgeMxzWSJL9guwYYlItYnhRTm9jYlSg9xSN.jpeg', NULL, '2020-02-24 22:10:20'),
(3, 'wr4', 'Adakah instrumen kebijakan (selain insentif kepada dosesn) untuk mendorong pengembangan inovasi ?\r', NULL, NULL, NULL, NULL, '2020-02-24 22:05:03'),
(4, 'wr4', 'Adakah dokumen perencanaan intitusi yang berkaitan program/kegiatan pembinaan litbang iptek dan penguatan inovasi ? \r', NULL, NULL, NULL, NULL, NULL),
(5, 'wr5', 'Sejauh mana implementasi rencana induk institusi yang berkaitan program/kegiatan pembinaan litbang iptek dan penguatan inovasi tersebut ?\r', NULL, NULL, NULL, NULL, NULL),
(6, 'wr1', 'Adakah peserta non akademisi yang berpartisipasi dalam pengembangan kurikulum ?\r', 'ada dong', 'documents/qOmVHV1JdmrRkL0ycFHYhpKPai9L3cBzMScBsbBb.jpeg', NULL, NULL, '2020-02-24 22:29:17'),
(7, 'wr1', 'Berapa jumlah orang peserta non akademisi yang berpartisipasi dalam pengembangan kurikulum di setiap prodi (tuliskan keterangan prodi dan jumlah peserta non akademisi) ?\r', NULL, NULL, NULL, NULL, NULL),
(8, 'wr4', 'Berapa jumlah orang pekerja penuh waktu yang bekerja di lembaga inovasi di pendidikan tinggi ?\r', NULL, NULL, NULL, NULL, NULL),
(9, 'wr4', 'Adakah lembaga atau unit di PT yang bertugas melakukan pembinaan pendampingan dan pengembangan terhadap wirausaha baru berbasis inovasi teknologi ?\r', NULL, NULL, NULL, NULL, NULL),
(10, 'wr4', 'Berapakah jumlah perusahaan pemula berbasis teknologi di lingkungan PT tiga tahun terakhir (2016-2018) ?\r', NULL, NULL, NULL, NULL, NULL),
(11, 'wr4', 'Adakah lembaga atau unit di PT yang bertugas untuk mendorong dan menciptakan iklim kondusif untuk inovasi ?\r', NULL, NULL, NULL, NULL, NULL),
(12, 'wr4', 'Adakah lembaga atau unit di PT yang bertugas khusus menangani HKI ?\r', NULL, NULL, NULL, NULL, NULL),
(13, 'wr3', 'Berapakah jumlah unit usaha/kegiatan di PT yang memiliki kegiatan berwirausaha berbasis penelitian pengembangan dan inovasi ?\r', NULL, NULL, NULL, NULL, NULL),
(14, 'wr1', 'Berapakah jumlah mitra bisnis industri/supplier yang berkolaborasi tahun 2016-2018 ?\r', NULL, NULL, NULL, NULL, NULL),
(15, 'wr1', 'Berapakah jumlah mitra perguruan tinggi yang berkolaborasi pada tahun 2016-2018 ?\r', NULL, NULL, NULL, NULL, NULL),
(16, 'wr1', 'Berapakah jumlah mitra kementrian/lembaga pemerintahan dan pemda yang berkolaborasi tahun 2016-2018 ?\r', NULL, NULL, NULL, NULL, NULL),
(17, 'wr4', 'Berapakah jumlah mitra kelompok masyarakat yang berkolaborasi tahun 2016-2018 ?\r', NULL, NULL, NULL, NULL, NULL),
(18, 'wr4', 'Berapakah jumlah lembaga internasional yang berkolaborasi pada tahun 2016-2018 ?\r', NULL, NULL, NULL, NULL, NULL),
(19, 'wr2', 'Berapakah jumlah dosen tetap ?\r', 'ada banyak sekitar 255', 'documents/9Eb44VFuhbRW4LIsZxHJva9ZniZvyRE7hFJYVkxh.pdf', 'avatars/xHR0BzajrsA9pJFMaZ86petTZnT8p4FcgQX4dKR6.jpeg', NULL, '2020-02-24 22:16:36'),
(20, 'wr4', 'Berapakah jumlah dosen tetap yang telahmenghasilkan inovasi dalam 5 tahun terakhir ?\r', NULL, NULL, NULL, NULL, NULL),
(21, 'wr1', 'Berapakah jumlah total laboratorium yang mendukung inovasi ?\r', NULL, NULL, NULL, NULL, NULL),
(22, 'wr1', 'Berapakah jumlah laboratorium yang mendukung inovasi yang sudah mendapatkan akreditasi/sertifikasi ?\r', NULL, NULL, NULL, NULL, NULL),
(23, 'wr1', 'Berapakah jumlah laboratorium yang mendukung inovasi yang belum mendapatkan akreditasi/sertifikasi ?\r', NULL, NULL, NULL, NULL, NULL),
(24, 'wr1', 'Berapakah jumlah tendik laboran yang terdaftar ?\r', NULL, NULL, NULL, NULL, NULL),
(25, 'wr2', 'Berapakah jumlah tendik laboran yang memiliki jabatan fungsional ?\r', 'ada 5', 'documents/KnZORbbFWsWDdb1deRtF8yWV3ar6ay721lFKrKYG.pdf', 'avatars/4ek7oiUhaFQli1M2E6HtFqjlM0dZFY7tO0X2D5Zt.jpeg', NULL, '2020-02-24 22:24:51'),
(26, 'wr2', 'Berapakah standar minimum tendik laboran yang harus dimiliki sesuai dengan jumlah laboratorium ?\r', NULL, NULL, NULL, NULL, NULL),
(27, 'wr4', 'Berapakah jumlah anggaran dari PT asal yang digunakan institusi untuk mendukung kegiatan penelitian pengembangan dan inovasi per tahun (dalam tiga tahun terakhir) ?\r', NULL, NULL, NULL, NULL, NULL),
(28, 'wr4', 'Berapakah jumlah anggaran dari Kmeneristekdikti yang digunakan institusi untuk mendukung kegiatan penelitian pengembangan dan inovasi per tahun (dalam tiga tahun terakhir) ?\r', NULL, NULL, NULL, NULL, NULL),
(29, 'wr4', 'Berapakah jumlah anggaran dari kementerian lain (selain dari kemenristekdikti) yang digunakan institusi  untuk mendukung kegiatan penelitian pengembangan dan inovasi per tahun (dalam tiga tahun terakhir) ?\r', NULL, NULL, NULL, NULL, NULL),
(30, 'wr4', 'Berapakah jumlah anggaran dari Pemda yang digunakan institusi  untuk mendukung kegiatan penelitian pengembangan dan inovasi per tahun (dalam tiga tahun terakhir) ?\r', NULL, NULL, NULL, NULL, NULL),
(31, 'wr3', 'Berapakah jumlah mahasiswa yang terlibat dalam penelitian dosen ?\r', NULL, NULL, NULL, NULL, NULL),
(32, 'wr3', 'Berapakah mahasiswa yang sedang dalam tahapan tugas akhir ?\r', NULL, NULL, NULL, NULL, NULL),
(33, 'wr1', 'Berapakah jumlah total mahasiswa aktif ?\r', NULL, NULL, NULL, NULL, NULL),
(34, 'wr4', 'Berapakah jumlah anggaran dari swasta yang digunakan institusi  untuk mendukung kegiatan penelitian pengembangan dan inovasi per tahun (swasta dari dalam dan luar negeri) ?\r', NULL, NULL, NULL, NULL, NULL),
(35, 'wr1', 'Berapakah jumlah peralatan laboratorium berteknologi tinggi yang dimiliki imstitusi saat ini ?\r', NULL, NULL, NULL, NULL, NULL),
(36, 'wr1', 'Berapakah standar minimum jumlah peralatan laboratorium berteknologi tinggi yang harus dimiliki institusi saat ini ?\r', NULL, NULL, NULL, NULL, NULL),
(37, 'wr4', 'Adakah instrumen kebijakan yang memberikan dana fasilitas pinjaman bagi civitas pendidikan tinggi untuk mendukung pengembangan start up ?\r', NULL, NULL, NULL, NULL, NULL),
(38, 'wr4', 'Berapakah dana fasilitas pinjaman yang disediakan bagi civitas pendidikan tinggi untuk mendukung pengembangan start up ?\r', NULL, NULL, NULL, NULL, NULL),
(39, 'wr4', 'Berapakah paten yang dihasilkan dalam 3 tahun terakhir ?\r', NULL, NULL, NULL, NULL, NULL),
(40, 'wr4', 'Dari paten yang sudah dihasilkan di institusi berapakah paten yang sudah diaplikasikan ?\r', NULL, NULL, NULL, NULL, NULL),
(41, 'wr4', 'Berapakah lisensi yang dihasilkan PT dalam 3 tahun terakhir ?\r', NULL, NULL, NULL, NULL, NULL),
(42, 'wr4', 'Berapakah jumlah pendapatan yang diperoleh dari komersialisasi hasil inovasi dalam 3 tahun terakhir ?\r', NULL, NULL, NULL, NULL, NULL),
(43, 'wr4', 'Adakan inovasi yang sudah diterapkan dan memberikan dampak yang luas pada masyarakat ?\r', NULL, NULL, NULL, NULL, NULL),
(44, 'wr4', 'Berapakah jumlah produk inovasi yang dihasilkan dalam 3 tahun terakhir (2016-1018) ?\r', NULL, NULL, NULL, NULL, NULL),
(45, 'wr4', 'Berapakah jumlah proyek aktif yang berada pada tahap penelitian dan pengembangan ?\r', NULL, NULL, NULL, NULL, NULL),
(46, 'wr4', 'Berapakah presentase jumlah keuntungan yang diperoleh dari suatu produk inovasi sejak produk tersebut dikomersialkan sampai saat ini ?\r', NULL, NULL, NULL, NULL, NULL),
(47, 'wr4', 'Adakah penghargaan yang diberikan kepada akademisi untuk menstimulasi penerbitan paten ?\r', NULL, NULL, NULL, NULL, NULL),
(48, 'wr4', 'Berapakah jumlah paten yang diajukan oleh suatu pendidikan tinggi per tahunnya dalam tiga tahun terakhir ?\r', NULL, NULL, NULL, NULL, NULL),
(49, 'wr4', 'Berapakah jumlah paten yang berada dibawah naungan perguruan tinggi yang dikutip oleh paten lain ?\r', NULL, NULL, NULL, NULL, NULL),
(50, 'wr3', 'Berapakah jumlah proyek kewirausahaan mahasiswa yang berpotensi untuk dikomersialkan ?\r', NULL, NULL, NULL, NULL, NULL),
(51, 'wr1', 'Adakah instrumen kebijakan (selain insentif kepada dosesn) untuk mendorong pengembangan inovasi ?\r', NULL, NULL, NULL, NULL, NULL),
(52, 'wr4', 'Berapakah jumlah unit usaha/kegiatan di PT yang memiliki kegiatan berwirausaha berbasis penelitian pengembangan dan inovasi ?\r', NULL, NULL, NULL, NULL, NULL),
(53, 'wr3', 'Adakah instrumen kebijakan yang memberikan dana fasilitas pinjaman bagi civitas pendidikan tinggi untuk mendukung pengembangan start up ?\r', NULL, NULL, NULL, NULL, NULL),
(54, 'wr3', 'Berapakah jumlah produk inovasi yang dihasilkan dalam 3 tahun terakhir (2016-1018) ?\r', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'teguh', 'teguh@gmail.com', NULL, '$2y$10$bZthMk8hzWDn7o9kDWMQMuiHiwlbsLL2.IE/9.p5T51cFzxKv4ld.', 'HsZNX4hNxUFqp35hMlSB3jhTf9KrSNSv5ruGCyl72gVN372ybcmCp9ojs8hq', '2020-02-24 18:39:31', '2020-02-24 18:39:31'),
(2, 'Administrator', 'Admin@gmail.com', NULL, '$2y$10$cvP.dEs7sI80hQVkseOtLuvAg.NqBjNN4TwVxeuWs0Gfpnu2tOCAq', NULL, '2020-02-24 20:49:36', '2020-02-24 20:49:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
