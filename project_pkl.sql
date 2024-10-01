-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `id_kategori`, `tanggal`, `deskripsi`, `isi`, `cover`, `created_at`, `updated_at`) VALUES
(5, 'Belajar Power Point (PPT)', 5, '2024-06-21', 'Belajar Berbasis Powerpoint dengan Materi Gaya', 'Kegiatan bimbingan belajar ini dilaksanakan pada tanggal-tanggal merah karena hari yang dimana dapat memungkinkan kami dengan anak-anak SD bertemu secara langsung. Kegiatan ini dilaksanakan rumah saya dengan durasi 1 jam dan dimulai pada tanggal 27 April-1 Mei 2024.\r\n\r\nMateri yang diajarkan disesuaikan dengan materi yang diberikan oleh guru di sekolah, khususnya pada mata pelajaran IPA. Kami mengambil materi tentang bab gaya dan energi. Agar anak-anak tidak bosan kami selingi dengan cara ice breaking. Kami juga menggunakan media powerpoint untuk menjelaskan kepada mereka. Diakhir pertemuan diadakan kuis yang berisi soal dengan cara memberikan powerpoint yang sudah ada soal-soal yang terkait dengan materi di pertemuan sebelumnya. Bagi anak yang bisa menjawab dengan benar akan mendapatkan hadiah atau reward dari kami.', '3897foto4.jpg', '2024-07-10 19:11:05', '2024-07-10 19:11:05'),
(6, 'Bimbel Bermerek', 5, '2024-07-09', 'Mengapa Bimbingan Belajar (Bimbel) Bermerek Lebih Disukai Siswa daripada Bimbel Sekolah?', 'Ketika masuk semester terakhir pada setiap tahun pelajaran, siswa kelas XII, baik SMA maupun SMK selalu disibukkan dengan berbagai persiapan.. Persiapan yang dilakukan para siswa yang belajar pada kelas terakhir tersebut meliputi, persiapan diri untuk memilih perguruan tinggi yang berkualitas  dengan jurusan yang tepat. \r\n\r\nHal ini tentunya dilakukan oleh siswa yang  masuk dalam eligible. Mereka yang masuk dalam eligible mendapat kesempatan untuk melenggang ke perguruan tinggi melalui jalur Seleksi Nasional Berbasis Prestasi (SNPB). Sementara yang belum beruntung di jalur tersebut, mereka harus menggunakan jalur Seleksi Nasional Berbasis Tes ( SNBT)\r\n\r\nKedua jalur tersebut membutuhkan bimbingan belajar dan usaha  keras. Pihak sekolah selalu siap memfasilitasi peserta didik yang mau melanjutkan studinya ke perguruan tinggi. Apalagi mereka yang masuk  perguruan tinggi terbaik Indonesia dan Sekolah Kedinasan. \r\n\r\nUntuk mewujudkan tujuan peserta didik tersebut, sekolah sebagai wadah yang  dipercaya oleh orang tua siswa dan pemerintah mengambil sikap dengan memberikan bimbingan belajar tambahan di luar proses belajar yang ada di sekolah.', '8565foto5.jpg', '2024-07-10 19:21:13', '2024-07-10 19:21:13'),
(7, 'Belajar Matematika', 6, '2024-07-11', 'Semangat dan Antusias Anak-anak Yayasan dalam Bimbingan Belajar Matematika', 'Kegiatan bimbingan belajar Matematika merupakan salah satu program kerja yang dilakukan oleh Mahasiswa PMM UMM kelompok 48 gelombang 10 di Yayasan Bina Asih Tunas Unggul yang terletak di Desa Torongrejo, Kecamatan Junrejo, Kota Batu. Kegiatan ini dilaksanakan selama 2 hari pada 16 dan 19 Oktober 2022.', '9922mtk.jpg', '2024-07-11 04:55:30', '2024-07-11 04:55:30'),
(8, 'Bimbingan Konseling', 7, '2024-07-18', 'Guru BK BimbelQu Siap Jadi \"Rotan\" di Bulan Ramadhan', 'Bila rotan sudah tak ada, akar pun tetap bisa berguna. Seperti peribahasa; itulah  yang terjadi di BimbelQu saat Ramadhan tiba. Ketika guru Pendidikan Jasmani olahraga dan kesehatan (Penjasorkes) pensiun, guru BK pun siap menggantikannya. Tentu saja tidak mengajarkan olahraga semata tetapi memperkaya pribadi dan pikiran siswa dengan bimbingan dan konseling.', '7965bk.jpeg', '2024-07-11 05:02:08', '2024-07-11 05:02:08'),
(9, 'Olimpiade Sains', 8, '2024-07-07', 'Persiapan Olimpiade Sains: Belajar dari Instruktur Terspesialisasi dan Media Digital', 'Olimpiade sains merupakan ajang kompetisi bergengsi yang diikuti oleh para siswa berprestasi dari seluruh dunia. Ajang ini tidak hanya menguji pengetahuan dan keterampilan akademis, tetapi juga kemampuan berpikir kritis, pemecahan masalah, dan kreativitas. Untuk memenangkan olimpiade sains, diperlukan persiapan yang matang dan sumber belajar yang tepat.', '4839op.jpeg', '2024-07-11 05:04:42', '2024-07-11 05:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(5, 'Pendidikan', '2024-07-10 18:51:11', '2024-07-10 18:51:11'),
(6, 'Matematika', '2024-07-11 04:51:22', '2024-07-11 04:51:22'),
(7, 'Bimbingan Konseling', '2024-07-11 05:00:19', '2024-07-11 05:00:19'),
(8, 'Olimpiade', '2024-07-11 05:03:04', '2024-07-11 05:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_27_035906_create_kategoris_table', 1),
(6, '2024_06_27_040723_create_artikels_table', 1),
(7, '2024_06_27_041817_create_testimonis_table', 1),
(8, '2024_06_27_044433_create_pendaftars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftars`
--

CREATE TABLE `pendaftars` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nomor_telp_siswa` bigint(20) NOT NULL,
  `nomor_telp_ortu` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftars`
--

INSERT INTO `pendaftars` (`id`, `nama`, `jenis_kelamin`, `kelas`, `asal_sekolah`, `nomor_telp_siswa`, `nomor_telp_ortu`, `email`, `created_at`, `updated_at`) VALUES
(23, 'fabio', 'Laki-laki', '5 (SD)', 'SMK ASSALAAM BANDUNG', 81931253987, 82219572405, 'admin@gmail.com', '2024-07-12 01:18:46', '2024-07-12 01:18:46'),
(25, 'fabio gntng', 'Perempuan', '8 (SMP)', 'SMK ASSALAAM BANDUNG', 81931253987, 82219572405, 'admin@gmail.com', '2024-07-15 21:50:28', '2024-07-15 21:50:28'),
(26, 'fabio', 'Laki-laki', '9 (SMP)', 'SMK ASSALAAM BANDUNG', 81931253987, 82219572405, 'admin@gmail.com', '2024-07-15 22:02:47', '2024-07-15 22:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `jabatan`, `cover`, `pesan`, `created_at`, `updated_at`) VALUES
(2, 'Alif Bhanu Tarda Pratama', 'Direktur Eksekutif Eksekutif, Bisnis', '8755alip.jpg', 'Saya bangga bisa bersekolah di sini, semua guru mengajar dengan ramah dan sabar. Itulah yang membuat saya dapat memahami setiap materi pelajaran yang telah diberikan.\r\n\r\nSaya berharap bimbel ini dapat mempertahankan cara pembelajaran yang diberikan selama ini. Cara tersebut sangat memudahkan para murid untuk memahami setiap materi pelajaran.', '2024-07-10 20:12:47', '2024-07-10 22:10:32'),
(3, 'Ahmad Nuryana', 'Manager', '1433ftt.jpeg', 'Banyak hal tak terlupakan dan menyenangkan yang saya dapatkan ketika bimbel di sini. bimbel ini membantu saya tumbuh untuk menjadi pribadi yang lebih baik dari sebelumnya.\r\n\r\nSemoga sekolah ini terus berkembang dengan lebih baik lagi dan melakukan inovasi-inovasi baru agar dapat memajukan semua anggota yang ada di bimbel ini.', '2024-07-10 20:20:38', '2024-07-10 20:20:38'),
(4, 'Rafly R.A', 'Universitas Airlangga  Manajemen', '2069fttt.jpg', 'Alhamdulillah berkat mengikuti bimbel di BST saya bisa lolos snbt pilihan pertama. Selama bimbel, kakak admin selalu berusaha agar siswa nya mengikuti kelas dan tidak tertinggal materi, admin juga sangat baik dalam memberikan konsultasi jurusan kepada siswa nya yg masih bingung dan tidak yakin dalam memilih univ dan jurusan. Kakak tutor nya juga baik, menyenangkan, dan penjelasannya sangat mudah dipahami. Pesan saya semoga bimbel BST semakin maju dan sukses kedepannya. Saya juga berterima kasih kepada kakak admin dan tutor yang telah banyak membantu”', '2024-07-10 20:38:06', '2024-07-10 20:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabio', 'admin@gmail.com', NULL, '$2y$10$lUHCzSw3m1tqQeGhYzeuwOGRNu8V0BsHBWSF3LgBPlaWfeCnHK2AC', NULL, '2024-07-07 08:16:51', '2024-07-07 08:16:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_nama_kategori_unique` (`nama_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftars`
--
ALTER TABLE `pendaftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftars`
--
ALTER TABLE `pendaftars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
