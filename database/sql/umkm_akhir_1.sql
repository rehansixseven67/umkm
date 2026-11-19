-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2026 at 01:56 PM
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
-- Database: `umkm_akhir_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:8:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:15:\"create-products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"edit-products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"delete-products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:13:\"view-products\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:15:\"create-category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"edit-category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"delete-category\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:7;a:3:{s:1:\"a\";i:8;s:1:\"b\";s:13:\"view-category\";s:1:\"c\";s:3:\"web\";}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:4:\"User\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"Product Manager\";s:1:\"c\";s:3:\"web\";}}}', 1795176071);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_11_04_152236_create_categories_table', 1),
(5, '2026_11_04_153001_create_products_table', 1),
(6, '2026_11_10_132322_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tokopedia_url` text DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `produk`, `status`, `tokopedia_url`, `deskripsi`, `harga`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 'images/iWRDP5Wtgtpnd78fZ39HdVnx5f2SjWRtNonKhxXq.webp', 'Degra Simba', 'ada', 'https://tk.tokopedia.com/ZSp3ufGSS/', 'Temukan Solusi Terbaik Mengatasi WC mampet dan Septic Tank BEBAS MASALAH Dengan Produk DEGRA SIMBADegra Simba berbasis mikroba yang bekerja menguraikan tinja dalam waktu 6 jam dan terus bekerja hingga kotoran dan sampah-sampah organik terurai sampai 80% dalam waktu 8 hari.TENTANG DEGRA SIMBA Degra Simba merupakan bio-processor untuk pengolahan limbah organik dari sektor perumahan, hotel, apartemen, rumah sakit, pabrik makanan olahan, restauran dan gedung perkantoran.Bagi perumahan DEGRA SIMBA digunakan untuk menguras WC tanpa sedot.Degra Simba mengandung mikroba probiotik yang aman bagi manusia dan lingkungan, ampuh untuk mengatasi pipa atau saluran wc yang tersumbat bahan organik dan menghilangkan bau busuk pada kloset. Teknologi ini sudah lama diterapkan oleh negara-negara maju seperti Eropa, Amerika, Jepang, Australia dan lainnya.Beberapa tahun yang lalu, KPP Hayati ITB Bandung dipimpin oleh DR. Ir. I Nyoman Pugeg Aryantha bekerja sama dengan PT. RSDH melakukan penelitian dan menghasilkan produk dengan nama DEGRA SIMBA yang diambil dari kataDEGRAdable SIMbiosis BActeria.Sesuai dengan namanya, bakteri ini adalah yang bersifat Menguntungkan karena:Membunuh bakteri pathogenMengurai limbah di dalam septic tank / WC', 24.00, 1, '2026-11-19 05:02:05', '2026-11-19 05:02:05'),
(2, 'images/72wBL3BJpn7X7ioAtUr64lBz5LjFny6fvOUFRzQL.webp', 'vitamin d3 1000iu nutrimax', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3uQ4N1/', 'NUTRIMAX VITAMIN D3 1000 IU Essential vitamin for many body functions Nutrimax Vitamin D3 1000 IU dengan bentuk tablet kecil daripada softgel sehingga mudah ditelan. Coating terbaik dari Colorcon, tahan terhadap iklim tropis serta stabilitas lebih baik dibanding softgel yang mudah rusak/ menempel karena kelembapan dan panas.  Manfaat : Memenuhi kebutuhan vitamin D dengan cepat pada kondisi tertentu seperti lanjut usia, ibu hamil & menyusui, risiko tinggi – penderita penyakit infeksi atau penyakit autoimun  Perhatian/Peringatan : - Periksa kadar vitamin D darah sesudah penggunaan 6 (enam) bulan - Konsultasikan dengan dokter untuk penggunaan pada ibu hamil & menyusui - Hentikan penggunaan bila terjadi reaksi alergi - Konsumsi kalsium sesuai Angka Kecukupan Gizi (AKG) untuk menghindari hiperkalsemia  Anjuran Pemakaian : -1 kali sehari 1 tablet salut selaput setelah makan atau sesuai anjuran dokter', 144.00, 2, '2026-11-19 05:07:27', '2026-11-19 05:07:27'),
(3, 'images/qFmDpHz469jsW1RIiP5OthkhTrZlaRETnwXmTbwV.webp', 'IMBOOST KIDS', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3HHAbR/', 'IMBOOST KIDS 21 TABLET HISAP   Indikasi Umum Untuk meningkatkan daya tahan tubuh.  Dosage Anak umur 2-6 tahun: 2 tablet hisap, 1-2 kali per hari. Anak umur diatas 6 tahun: 2 tablet hisap, 3 kali per hari.  Komposisi Echinacea purpurea herb dry extract 125mg, Zn Piccolinate 2.5mg  Aturan pakai Tablet dihisap hingga larut seluruhnya.  Exp 2022 Dapat diberikan sebelum atau sesudah makan.', 27.00, 2, '2026-11-19 05:11:38', '2026-11-19 05:11:38'),
(4, 'images/tuUJjPxkIGAIIBItogBgZmcIFuMrXDmgQ7CgNPvA.webp', 'wellness excell c 300mg', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3H7MSc/', 'Wellness Excell-C 300mg membantu memenuhi kebutuhan Vitamin C, membantu meningkatkan daya tahan tubuh dan menjaga kesehatan organ-organ tubuh, serta membantu proses penyembuhan.  Calcium Ascorbate: Bentuk buffer dari vitamin C (82 %Ascorbic Acid & 18 % Calcium Ascorbat). Bentuk ini meminimalkan gangguan pencernaan (iritasi), penyerapan lebih baik.  Benefit: Meningkatkan daya tahan tubuh Mencegah timbulnya penyakit Membantu proses penyembuhan Menjaga kesehatan organ-organ tubuh Sebagai antioksidan Pembentukan kolagen Membantu mengatasi aterosklerosis Mencegah serangan jantung Mengatasi infeksi akut & kronis Sebagai antikanker.  Suggested use: 1 tablet per hari atau sesuai kebutuhan (diminum sesudah makan', 175.00, 2, '2026-11-19 05:13:30', '2026-11-19 05:26:26'),
(5, 'images/4QEP058fGLy1RHh5o498tnNSjeKwRC2KqscE77GV.webp', 'masker sensi duckbill isi 50', 'ada', 'https://tk.tokopedia.com/ZSp39S2L8/', 'Masker Sensi Duckbill 3 Ply isi 50 pcs Original Asli Murah Ada tulisan sensi nya di masker   Masker Sensi Duckbill 3 Ply ORIGINAL ASLI MURAh  Sensi Duckbill merupakan masker PREMIUM 3ply (3 Lapis) yaitu lapisan luar kedap air, lapisan tengah yang merupakan lapisan filter densitas tinggi dan lapisan dalam yang menempel langsung dengan kulit yang berfungsi sebagai penyerap cairan berukuran besar yang keluar dari pemakai ketika batuk maupun bersin.  Nyaman untuk dipakai sehari-hari karena bentuknya yang mengikuti lengkung di hidung. Pengaitnya di telinga seperti Sensi Earloop.  Lebih lembut dan hypoallergenic, cocok untuk kulit sensitif.  -Latex Free -Fiberglass Free -Mampu melindungi saluran pernapasan dan mulut dari debu, asap, kuman, bakteri, cairan dan partikel mikro lainnya.  Diproduksi oleh: PT Arista Latindo Ada ISO dan Kemenkes  Ready Stok. Asli dari pabrik. Kualitas terjamin.  Warna: Putih', 184.00, 3, '2026-11-19 05:15:35', '2026-11-19 05:15:35'),
(6, 'images/wtdzJQYkj9qOQ5Lu4eid1heZbTXBJU7dbXEeFRff.webp', 'betadine kumur antiseptic mulut', 'hampir_habis', 'https://tk.tokopedia.com/ZSp39BfuK/', 'Betadine kumur Betadine Mouthwash & Gargle Povidone Iodine 1% Obat Kumur Antiseptik 190ml  Betadine Obat Kumur 190ml - Obat kumur yang berfungsi untuk mengatasi infeksi jamur pada mulut, sariawan, peradangan pada mulut yang di akibatkan oleh bakteri, selain itu obat kumur ini juga berguna untuk mengurangi bau mulut.  Berikan kesegaran pada nafas anda dengan Betadine Obat Kumur dan juga untuk menjaga dan merawat mulut anda akan tetap segar dan sehat.', 25.00, 1, '2026-11-19 05:17:58', '2026-11-19 05:17:58'),
(7, 'images/yYG7yS9HbwYjuCnB7XVvB4hb6F8yQj2yqzeisqsh.webp', 'wellness squamega isi 100 omega 3, 6, 9', 'ada', 'https://tk.tokopedia.com/ZSp399qGc/', 'squalene+ omega 369 Suatu inovasi terbaru karena dalam 1 kapsul mengandung 3 bentuk Omega ditambah Squalene dan vitamin E, menjadikan formula terlengkap.  Benefit: *Omega-3 (ALA,EPA,DHA) *Omega6 (LA,GLA) *Omega9 (OA): -Mensuplai oksigen ke sel-sel tubuh dan menjaga kelancaran aliran darah -Membantu mencegah penyakit jantung, stroke, asteosklerosis ,arthritis, -Membantu mencegah kemerosotan daya kerja otak dan penyakit Alzheimer -Penting untuk kesehatan otak, mata, sendi, hati, ginjal, kulit dan sel-sel tubuh -Membantu menurunkan kadar kolesterol LDL,Trigliserida dan hipertensi, serta meningkatkan HDL -Bagi wanita membantu mengatasi PMS, *Squalene: -Sebagai tonikum menjaga kesehatan badan -Meningkatkan ketahanan tubuh terhadap berbagai serangan penyakit seperti kanker, hepatitis, diabetes dan jantung koroner -Mensuplai oksigen ke jaringan tubuh -Membantu dalam pengobatan pasien tuberculosis, penyakit kulit, lambung, usus, radang hati, diabetes, jantung koroner -Membantu penyembuhan luka serta menghaluskan & menyegarkan kulit *Vitamin E: -Sebagai antioksidan -Mencegah penyakit jantung & pembuluh darah -Memperbaiki jaringan sel -Untuk kesehatan kulit dan rambut.', 910.00, 2, '2026-11-19 05:20:09', '2026-11-19 05:20:09'),
(8, 'images/PO5DLkSlRxN3VgFGP7t84AsC9QXPBdmhZo6Vg5dC.webp', 'enervon c isi 30', 'ada', 'https://tk.tokopedia.com/ZSp39fE8N/', 'Enervon C Multivitamin Kombinasi Vitamin C dan B Komplek yang diperlukan untuk tubuh yang Kekurangan Vitamin, Supaya Daya Tahan Tubuh Tetap Terjaga Serta Membantu Memulihkan Kondisi Setelah Sakit.  Isi 30 tablet', 34.00, 2, '2026-11-19 05:21:33', '2026-11-19 05:21:33'),
(9, 'images/Zmufb3m9fQ3yTrfIDuAih6G3easwVR9m67yQqOe3.webp', 'blackmores vitamin E isi 50', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3xNoHS/', 'Blackmores vitamin E Kandungan Vitamin E 250IU Isi 50 tablet Untuk memelihara kesehatan kulit dan memelihara sel epitel dan dapat berperan sebagai antioksidan.  Saran konsumsi 1 tablet / hari    Expired bervariasi ya starts from 2022  Khusus untuk produk ini, layanan instant gosend/grabsend untuk wilayah Jakarta available dikirim dari Jakarta Barat. Silahkan kontak CS kami untuk request instant courier. Terimakasih', 224.00, 2, '2026-11-19 05:23:46', '2026-11-19 05:23:46'),
(10, 'images/PK1yHvs9IRIJZ7JVuXZ7wEckRWAbAD3I73ZOwjfs.webp', 'Enervon C active vit c isi 30', 'hampir_habis', 'https://tk.tokopedia.com/ZSp397RgB/', 'Enervon C active mengandung: Vitamin C 500 mg Vitamin B1 50 mg Vitamin B2 25 mg Vitamin B6 10 mg Vitamin B12 5 mg Kalsium 20 mg Niasiamida 50 mg Zinc 10 mg Dosis sekali sehari 1 tablet Isi 30 tablet POM SD 161 548 681', 55.00, 2, '2026-11-19 05:25:08', '2026-11-19 05:25:08'),
(11, 'images/cL59unVxybCo3z3TRNY4OG3sl1psnfNFpgaIcD0b.webp', 'vitacimin vitamin c kunyah 500mg isi 10 lembar', 'ada', 'https://tk.tokopedia.com/ZSp3xBFSs/', 'Vitacimin adalah suplemen untuk membantu memenuhi kebutuhan vitamin C harian. Suplemen ini merupakan produk konsumen yang dijual secara bebas. Vitacimin mengandung vitamin C, natrii ascorbas dan kandungan lainnya.  Membantu memenuhi kebutuhan vitamin C harian, seperti pada kondisi sariawan dan membantu menjaga daya tahan tubuh.  Dosis Obat  1 tablet sebanyak 1-2 kali/hari.  Dihisap perlahan-lahan.', 14.00, 2, '2026-11-19 05:27:12', '2026-11-19 05:27:12'),
(12, 'images/lIsFeVsEpAuFeEh9qT3bF94FIA3cb8Fv2L7YOhf7.webp', 'Expert Boost  vitamin D3 gummy', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3xDR6d/', 'Semua Anak hingga Dewasa, Termasuk Ibu Hamil, Dianjurkan Mendapat Suplementasi Vitamin D 600 IU* Setiap Hari!** Kini Hadir Cara Seru Konsumsi Vit D!  Expert Boost Gummy Vitamin D - 600 IU  Membantu meningkatkan imunitas, mengoptimalkan pertumbuhan, serta menurunkan risiko alergi, preeklampsia dan kelahiran prematur. Berisi 30 Gummies dengan rasa buah Setiap Gummy berisi 600 IU Vitamin D sesuai anjuran IDAI (Ikatan Dokter Anak Indonesia) & Angka Kecukupan Gizi Tanpa pengawet dan pewarna sintetis Rasa enak sehingga disukai oleh anak dan nyaman dikonsumsi ibu hamil Aman dikonsumsi setiap hari Kemasan higienis per gummy dan mudah untuk dibawa kemana-mana.', 85.00, 2, '2026-11-19 05:29:01', '2026-11-19 05:29:01'),
(13, 'images/wkuM2qYIXmk8ScITcaxyGMTezOslAehnQXH6ozQW.webp', 'imboost effervescent vitamin c', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3xwWGR/', 'Imboost Effervescent With Vitamin C READY STOCK Imboost Effervescent With Vitamin C - 1 Tube Isi 8 Tablet  Imboost adalah produk suplemen kesehatan untuk meningkatkan daya tahan tubuh. Imboost bukan multivitamin melainkan Immunity Booster (peningkat daya tahan tubuh - immunomodulator) yang berfungsi untuk menjaga kesehatan tubuh agar tidak mudah jatuh sakit dan mempercepat penyembuhan penyakit. Imboost mengandung bahan alam sehingga aman untuk dikonsumsi.  Cuaca yang tidak menentu membuat tubuh mudah terserang penyakit akibat sistem kekebalan tubuh yang kian menyusut. Berbagai macam penyakit, mulai dari batuk, pilek, flu, hingga wabah virus Corona mengintai saat daya tubuh melemah.  Karena itu jangan lupa untuk konsumsi Imboost yang mampu perkuat daya tahan tubuh kita. Imboost terbukti #CepatMelindungi karena bekerja langsung di sistem pertahanan tubuh kita dengan memperbanyak antibodi sehingga daya tahan tubuh lebih kuat melawan serangan virus.', 32.00, 2, '2026-11-19 05:31:33', '2026-11-19 05:31:33'),
(14, 'images/qR6H5lzdN7Gf044pBSnqcL5dX2rZceOORnaGFPxa.webp', 'vitamin D3 1000iu blackmores isi 60', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3xGuXY/', 'Blackmores Vitamin D3 1000IU (60 kapsul)  Expiry: 2027  100% Produk Asli Blackmores Australia  Informasi Umum: Blackmores Vitamin D3 membantu dalam menjaga tulang yang sehat density dengan memberikan mineral untuk tulang. Tingkat yang memadai Vitamin D penting untuk penyerapan kalsium normal dan kesehatan tulang. Vitamin D juga meningkatkan kekuatan otot di yang tua dapat mengurangi insiden jatuh. Orang-orang perlu secara rutin mendapat sinar matahari pada kulit mereka untuk membuat vitamin D tetapi harus menghindari paparan UV selama periode puncak. Kekurangan vitamin D dapat disebabkan oleh gaya hidup dan pola makan. Penuaan menurunkan kemampuan kulit untuk memproduksi vitamin D. Blackmores Vitamin D3 mengandung Vitamin D3, bentuk yang dihasilkan secara alami dalam tubuh. Formulir ini lebih tahan lama dan lebih efektif untuk meningkatkan kadar vitamin D dari D2.  Kandungan: Bahan aktif per kapsul: Vitamin D3 (cholecalciferol 25mcg) 1000IU  Tidak ada tambahan gula, ragi, gluten, tepung, gandum, jagung, turunan susu, pengawet, rasa buatan dan pemanis. Berisi natrium sulfit.', 205.00, 2, '2026-11-19 05:33:22', '2026-11-19 05:33:22'),
(15, 'images/H90aVRpEAxFwpUeV6Y9RJk0fRXSpRBELJhYgSIeu.webp', 'Dettol wet wipes tisu basah 10 lembar', 'ada', 'https://tk.tokopedia.com/ZSp3QQAa3/', 'Membunuh kuman kapanpun dan dimanapun. Dettol Anti Bakteri Wet Wipes Original dibuat dari bahan dan tekstur yang lembut, serta tanpa alkohol. Membantu membersihkan kulit Anda tanpa air dan memberikan rasa segar. Bawalah selalu di dalam tas dan gunakan kapan saja dan dimana saja untuk menjaga keluarga Anda tetap sehat: di mobil, di kantor, saat bepergian, piknik, mengganti popok, berkemah, berolahraga dan aktivitas lainnya   Fitur Produk  1. Perlindungan dimana saja, kapan saja  2. Membunuh kuman  3. Teruji secara dermatologis  4. Bebas alkohol', 2.00, 3, '2026-11-19 05:36:11', '2026-11-19 05:36:11'),
(16, 'images/kyqWYUfzPn5YRYOgiUYE9RLZFQIUvEdohhFloaJE.webp', 'Swisse ultiboost collagen complex 30 tablet', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3QXxG8/', 'Collagen Complex adalah suplemement yang mengandung Collahgen Hydrolysate, ekstrak biji anggur, co-enzyme Q10, vitamin C, vitamin E untuk membantu membuat kulit tampak berkilau   Manfaat :  Membantu produksi kolagen dan antioksidant untuk membuat kulit lebih kencang dan berkilau.  Bahan Aktif :  Hidrolisat Kolagen Peptides (type 1 dan 3) untuk mengencangkan kulit dan mengurangi kerutan wajah Vitamin C : Berperan sebagai antioksidant dan dapat berperan membantu produksi kolagen Vitamin E : Berperan sebagai antioksidant untuk meredam radikal bebas  Cara Penggunaan : 3 kali sehari 1 tablet bersamaan atau segera setelah makan  Peringatan : Hindari penggunaan untuk Ibu Hamil dan menyusui. hati-hati bagi pasien yang menggunakan warfarin. Konsultasikan dengan dokter jika digunakan dengan obat lain. simpan ditempat sejuk < 30 derajat  BPOM : POM SI214587081', 375.00, 2, '2026-11-19 05:37:56', '2026-11-19 05:37:56'),
(17, 'images/uh61dbH9iVa2yMA2XTWjHIdsmOlSPQXE2ABxBtW5.webp', 'Ester C holisticare kids vitamin C anak isi 30', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3QVx7a/', 'Vitamin C bermanfaat untuk memelihara kesehatan. Vitamin C tidak dapat diproduksi sendiri oleh tubuh sehingga diperlukan asupan dari luar. Holisticare Super Ester C Kids adalah vitamin C inovasi baru yang diformulasikan khusus untuk anak - anak:  Manfaat Holisticare EsterC Kids - Bantu memelihara daya tahan tubuh anak. Khususnya jika anak sering terpapar radikal bebas seperti polusi, dan asap rokok. - Bantu memenuhi kebutuhan vitamin C, terutama untuk anak yang tidak suka sayur dan buah. - Mengatasi gejala kekurangan vitamin C, seperti gusi berdarah, sariawan, mudah terserang flu, dan luka yang tak kunjung sembuh. - Vitamin C membantu penyerapan mineral oleh tubuh seperti zat besi, kalsium dan magnesium yang baik untuk pertumbuhan si kecil. - Jika daya tahan tubuh terjaga, proses belajar, perkembangan dan pertumbuhan anak tentu akan lebih optimal.  Kelebihan Holisticare EsterC Kids dibandingkan dengan vitamin C anak lainnya Holisticare EsterC Kids berbeda dari vitamin C pada umumnya karena terbuat dari Ester-C, atau bentuk ester dari vitamin C, yang memiliki formula dan proses pembuatan yang unik dan dipatenkan.  - Rasa jeruk yang disukai anak-anak. - Menggunakan pemanis alami xylitol, yang baik untuk kesehatan gigi anak. - Metabolit yang terjadi secara alami dalam formula kami membantu optimalkan penyerapan vitamin C. Metabolit adalah molekul kecil mungil yang menjalankan metabolisme Anda. - Dilengkapi Hesperidin yang bantu penyerapannya. - Sisa oksalat dalam urin yang rendah memperkecil risiko terbentuknya kalsium oksalat. - Tidak mengandung gula dan bahan pengawet.  Komposisi: * Ester-C 100 mg * Kalsium 2,5 mg * Hesperidin 5 mg  Aturan Pakai : 1-3 tablet per hari dengan cara dikunyah atau dihisap  Isi : 30 Tablet Hisap.', 50.00, 2, '2026-11-19 05:39:41', '2026-11-19 05:39:41'),
(18, 'images/iZrjvk6bSWgzh6VIDXtM61qsishkBKpIRzCHwD8B.jpg', 'vitamin C Ester C isi 90', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3CUKT4/', 'Vitamin C', 295.00, 2, '2026-11-19 05:42:03', '2026-11-19 05:42:03'),
(19, 'images/SzNS6lYibCL5CzfbUHH9FbNbvyYybVh5quCY6c3f.jpg', 'wellness zinc 30ml isi 60', 'ada', 'https://tk.tokopedia.com/ZSp3CYjVP/', 'Mengandung 3 jenis Zinc yg terbaik, sehingga penyerapan lebih optimal Zinc bisglycinate chelate Bentuk Zinc terbaik. Dr. Mercola menyarankan bahwa bentuk Zinc terbaik adalah yang dichelate, untuk memastikan daya serap yg lebih baik. Zinc citrate Sebuah penelitian yang diterbitkan dalam Journal of Nutrition pada tahun 2014, Zinc citrate yang diberikan sebagai suplemen, dapat diserap dengan baik seperti Zinc gluconate  Zinc picolinate bentuk lain dari garam zinc yang dichelate. Zinc picolinate adalah suplemen yang populer dan diserap secara efektif  Mengandung B6 untuk mendukung fungsi Zinc meningkatkan imunitas dan mencerna  protein    BENEFIT  Manfaat:  - Mendukung Fungsi Kekebalan Tubuh dan Membantu Melawan Infeksi / Pilek - Sebagai Anti-inflamasi dan Antioksidan yang Efektif, - Diperlukan untuk kerja  enzim-enzim di dalam tubuh - Menurunkan kadar gula darah & Kolesterol Jahat (Pada DM tpe 2)  - Membantu Menjaga Kesehatan Jantung dan Pembuluh Darah - Dapat Membantu Mencegah Diare - Mendukung Kesuburan - Membantu Penyerapan dan Pencernaan Nutrisi - Mendukung Kesehatan Hati & Mata - Membantu Pertumbuhan & Perbaikan Otot - Menjaga Fungsi Otak Untuk Daya Ingat & Berpikir - Dapat Membantu Mengurangi Jerawat & Mempromosikan Penyembuhan Luka - Defisiensi Zinc dapat mengakibatkan bintik-bintik di kuku, kekurangan energy, Insomnia, Infertilitas, kehilangan rasa atau bau, ruam kulit/ eksim, daya tahan tubuh rendah, berkurangnya daya ingat, proses berpikir lambat, kanker payudara & prostat, berkurangnya libido, sering masuk angin atau flu, kerontokan rambut abnormal', 374.00, 2, '2026-11-19 05:43:34', '2026-11-19 05:43:34'),
(20, 'images/RO7xnnWzyIo0LK5SW5hxxfcI730yFUBzKQXarg9R.jpg', 'nutriwell magnesium glicynate', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3CYrn2/', 'Nutriwell Magnesium merupakan suplemen makanan yang mengandung Magnesium Amino Acid Chelate yang memiliki peran penting dalam pertumbuhan dan pemeliharaan tulang, menigkatkan kinerja saraf dan otot serta membantu mengurangi stress dan meningkatkan kualitas tidur.  Cara Kerja Kandungan : Magnesium Amino Acid Chelate merupakan mineral penting yang mendukung kerja enzim pada proses pembentukan energi, protein dan lemak. Manfaat dari Magnesium Amino Acid Chelate adalah untuk membantu meningkatkan penyerapan kalsium.  Manfaat Nutriwell Magnesium :  - Membantu mengurangi kram dan tegang pada otot - Membantu memelihara kesehatan tulang dan gigi - Membantu menjaga kesehatan jantung - Memelihara kesehatan saraf - Membantu meningkatkan kualitas tidur  Komposisi : Tiap kapsul mengandung : Magnesium Amino Chelate.............400 mg  ATturan Pakai : Dewasa : 1 kapsul sehari sekali', 295.00, 2, '2026-11-19 05:45:12', '2026-11-19 05:45:12'),
(21, 'images/QgFPwEBGiqqOb7vcffmz69L0fOOqLVI1QwtnZfJO.jpg', 'wellness excell c plus beta glucan isi 30 tablet', 'hampir_habis', 'https://tk.tokopedia.com/ZSp3Cn3mc/', 'vitamin c aman di lambung', 185.00, 2, '2026-11-19 05:46:36', '2026-11-19 05:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LCjcTZe1JPZQnybaT2sOZab910t5hnYKIpgV2yF2', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/157.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWndreTRnM3JPc2V4SXVwYzZDaDh3Mk9uRlF6bFNGQVhpRUNtRnB3WSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGVsYW5nZ2FuP3BhZ2U9MyI7czo1OiJyb3V0ZSI7czoxNToicGVsYW5nZ2FuLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiOTU3OWVkOTg0YjM0NGFmZTFiMTRlNjdkNDhiYWQ0OTkzYTk0NGJkODkwNDhjNGQ5MTZhZGE0NGRlOWMzYmNmZSI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzk1MDg5NjcwO319', 1795092411);

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
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$12$wUzpdbE6UtUIRJTmZkcfSuL30ajbdg5Iuwm5VBOqYmjou3X9.xtJq', NULL, '2026-11-19 05:00:55', '2026-11-19 05:00:55'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$12$.md4sJN7BWxEZ87sngE3oO56Nm/wAasyfoHy5sPSHJ6D6VMsaqzLC', NULL, '2026-11-19 05:00:56', '2026-11-19 05:00:56'),
(3, 'User', 'user@gmail.com', NULL, '$2y$12$zmQTsW3Uiyj1Rt.obKpr4eKtJ8CVLU8sHB.IfyfqOjERcg1aKm3BG', NULL, '2026-11-19 05:00:56', '2026-11-19 05:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `categories` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
