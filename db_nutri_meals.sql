-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nutri_meals`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Manfaat Makanan Sehat', 'Makan sehat sangat penting untuk menjaga kesehatan tubuh...Makan sehat bukan sekadar tren, tetapi kebutuhan penting untuk menjaga keseimbangan tubuh dan meningkatkan kualitas hidup. Pola makan yang sehat membantu menyediakan nutrisi yang diperlukan oleh tubuh, meningkatkan energi, serta memperkuat sistem imun agar lebih tahan terhadap penyakit.\n\nMakanan sehat kaya akan vitamin, mineral, protein, serat, dan lemak sehat yang diperlukan untuk mendukung berbagai fungsi tubuh. Konsumsi makanan seperti sayuran hijau, buah-buahan segar, biji-bijian utuh, serta protein tanpa lemak dapat membantu menjaga kesehatan jantung, meningkatkan metabolisme, dan menjaga berat badan ideal.\n\nSelain itu, pola makan sehat juga berperan dalam meningkatkan kesehatan mental. Nutrisi yang tepat dapat mengurangi stres, meningkatkan fokus, serta membantu menjaga suasana hati agar lebih stabil. Dengan menerapkan kebiasaan makan sehat, tubuh akan terasa lebih bugar, pikiran lebih jernih, dan produktivitas meningkat.\n\nMulailah dengan perubahan kecil, seperti mengurangi konsumsi makanan olahan, memperbanyak asupan air putih, dan mengganti camilan tidak sehat dengan pilihan yang lebih bernutrisi. Dengan konsistensi, pola makan sehat akan menjadi bagian dari gaya hidup yang memberikan manfaat jangka panjang.', 'images/blog1.jpg', '2025-02-12 07:33:44', '2025-02-12 07:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `meal_plans`
--

CREATE TABLE `meal_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) NOT NULL,
  `menu_1` varchar(255) NOT NULL,
  `image_1` varchar(200) DEFAULT NULL,
  `membuat_menu_1` text NOT NULL,
  `bahan_menu_1` text NOT NULL,
  `menu_2` varchar(50) NOT NULL,
  `image_2` varchar(200) DEFAULT NULL,
  `membuat_menu_2` text NOT NULL,
  `bahan_menu_2` text NOT NULL,
  `menu_3` varchar(50) NOT NULL,
  `image_3` varchar(200) DEFAULT NULL,
  `membuat_menu_3` text NOT NULL,
  `bahan_menu_3` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diet_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_plans`
--

INSERT INTO `meal_plans` (`id`, `day`, `menu_1`, `image_1`, `membuat_menu_1`, `bahan_menu_1`, `menu_2`, `image_2`, `membuat_menu_2`, `bahan_menu_2`, `menu_3`, `image_3`, `membuat_menu_3`, `bahan_menu_3`, `created_at`, `updated_at`, `diet_type`) VALUES
(1, 'Senin', 'Nasi Goreng', 'images/nasi_goreng.jpeg', 'Siapkan nasi putih yang sudah didinginkan|Panaskan minyak di wajan|Tumis bawang putih dan bawang merah hingga harum|Masukkan cabai merah dan tumis sebentar|Tambahkan telur, orak-arik hingga matang|Masukkan nasi putih, lalu aduk rata dengan bumbu|Tambahkan kecap manis, garam, dan merica secukupnya|Aduk hingga nasi berwarna kecoklatan dan bumbu merata|Masak hingga nasi goreng matang dan sajikan dengan acar serta kerupuk\n', 'Nasi putih 2 piring|Bawang putih 2 siung (cincang halus)|Bawang merah 3 siung (iris tipis)|Cabai merah 2 buah (iris halus)|Telur 1 butir|Kecap manis 2 sdm|Garam secukupnya|Merica secukupnya|Minyak untuk menumis|Acar dan kerupuk sebagai pelengkap\n', 'Nasi Liwet', 'images/liwet.jpg', 'Cuci bersih beras hingga airnya jernih|Siapkan panci atau rice cooker untuk memasak nasi|Tambahkan air sesuai takaran memasak nasi biasa|Masukkan santan ke dalam air nasi untuk rasa lebih gurih|Tambahkan daun salam, serai yang sudah dimemarkan, dan garam secukupnya|Aduk perlahan agar bumbu merata dengan nasi|Masak nasi hingga matang seperti biasa|Saat nasi hampir matang, aduk perlahan agar bumbu tercampur rata|Sajikan nasi liwet dengan lauk seperti ayam goreng, ikan asin, atau sambal', 'Beras 2 cup|Santan 200 ml|Air secukupnya|Daun salam 2 lembar|Serai 1 batang (memarkan)|Garam secukupnya|Ikan asin untuk pelengkap|Sambal untuk pelengkap', 'Nasi Lemak', 'images/nasi_lemak.jpg', 'Cuci beras hingga bersih|Masukkan beras ke dalam rice cooker|Tambahkan santan, air, daun pandan, dan garam|Aduk rata agar santan tercampur dengan baik|Masak nasi hingga matang dalam rice cooker|Sambil menunggu, goreng ikan teri hingga renyah|Rebus telur hingga matang, lalu kupas|Goreng kacang tanah hingga kecoklatan|Siapkan sambal dengan menggoreng cabai, bawang, dan terasi lalu haluskan|Sajikan nasi lemak dengan ikan teri, telur, kacang, mentimun, dan sambal', 'Beras 2 cangkir|Santan 1 cangkir|Air 1 cangkir|Daun pandan 2 lembar|Garam 1 sdt|Ikan teri 50 gram|Telur 2 butir|Kacang tanah 50 gram|Cabai merah 5 buah|Bawang merah 3 siung|Bawang putih 2 siung|Terasi 1 sdt|Gula secukupnya|Garam secukupnya|Mentimun secukupnya (iris tipis)', '2025-02-11 20:37:32', '2025-02-11 20:37:32', 'vegan'),
(2, 'Selasa', 'Soto Ayam', 'images/soto_ayam.jpg', 'Rebus ayam dalam air hingga mendidih|Buang busa yang mengapung dan kecilkan api|Haluskan bawang putih, bawang merah, kunyit, jahe, dan kemiri|Tumis bumbu halus hingga harum|Masukkan bumbu tumis ke dalam rebusan ayam|Tambahkan serai, daun salam, dan daun jeruk|Masak hingga ayam empuk, lalu angkat dan suwir-suwir|Saring kaldu agar lebih bersih|Siapkan soun, kol, dan tauge dalam mangkuk saji|Tuang kuah soto ke dalam mangkuk dan tambahkan suwiran ayam|Sajikan dengan sambal, jeruk nipis, dan kerupuk', 'Ayam 500 gram|Air 1,5 liter|Bawang putih 4 siung|Bawang merah 6 siung|Kunyit 2 cm|Jahe 2 cm|Kemiri 3 butir|Serai 2 batang (geprek)|Daun salam 2 lembar|Daun jeruk 3 lembar|Garam secukupnya|Gula secukupnya|Soun secukupnya (rendam air hangat)|Kol secukupnya (iris tipis)|Tauge secukupnya|Jeruk nipis 1 buah|Sambal secukupnya|Kerupuk secukupnya', 'Soto ikan', 'images/soto_ikan.jpg', 'Bersihkan ikan dan potong sesuai selera|Lumuri ikan dengan air jeruk nipis dan garam, diamkan 15 menit|Goreng ikan hingga matang, lalu tiriskan|Haluskan bawang putih, bawang merah, kunyit, jahe, dan kemiri|Tumis bumbu halus hingga harum|Tambahkan serai, daun salam, dan daun jeruk|Tuang air dan masak hingga mendidih|Masukkan ikan goreng ke dalam kuah soto|Tambahkan garam, gula, dan kaldu bubuk secukupnya|Siapkan soun, tauge, dan irisan tomat dalam mangkuk saji|Tuang kuah soto ke dalam mangkuk dan tambahkan ikan|Sajikan dengan sambal, jeruk nipis, dan bawang goreng', 'Ikan tenggiri 500 gram (atau ikan sesuai selera)|Air 1,5 liter|Bawang putih 4 siung|Bawang merah 6 siung|Kunyit 2 cm|Jahe 2 cm|Kemiri 3 butir|Serai 2 batang (geprek)|Daun salam 2 lembar|Daun jeruk 3 lembar|Garam secukupnya|Gula secukupnya|Kaldu bubuk secukupnya|Soun secukupnya (rendam air hangat)|Tauge secukupnya|Tomat 1 buah (iris)|Jeruk nipis 1 buah|Sambal secukupnya|Bawang goreng secukupnya', 'Soto Sapi', 'images/soto_sapi.jpeg', 'Rebus daging sapi hingga setengah empuk, lalu tiriskan dan potong-potong|Tumis bawang merah, bawang putih, jahe, kunyit, dan kemiri yang telah dihaluskan hingga harum|Masukkan serai, daun salam, dan daun jeruk ke dalam tumisan|Tuang bumbu tumis ke dalam air rebusan daging|Masak kembali hingga daging benar-benar empuk|Tambahkan garam, gula, dan kaldu bubuk secukupnya|Siapkan soun, kol, dan irisan tomat dalam mangkuk saji|Tuang kuah soto dan daging sapi ke dalam mangkuk|Taburkan bawang goreng dan daun seledri|Sajikan dengan sambal, jeruk nipis, dan kerupuk', 'Daging sapi 500 gram|Air 2 liter|Bawang putih 5 siung|Bawang merah 7 siung|Jahe 2 cm|Kunyit 3 cm|Kemiri 3 butir|Serai 2 batang (geprek)|Daun salam 2 lembar|Daun jeruk 3 lembar|Garam secukupnya|Gula secukupnya|Kaldu bubuk secukupnya|Soun secukupnya (rendam air hangat)|Kol secukupnya (iris tipis)|Tomat 1 buah (iris)|Jeruk nipis 1 buah|Sambal secukupnya|Bawang goreng secukupnya|Daun seledri secukupnya (cincang)|Kerupuk secukupnya', '2025-02-11 20:37:32', '2025-02-11 20:37:32', 'gluten-free'),
(3, 'Rabu', 'Rendang', 'images/rendang.jpg', 'Potong daging sapi sesuai selera|Haluskan bawang merah, bawang putih, cabai merah, jahe, kunyit, lengkuas, dan kemiri|Tumis bumbu halus hingga harum|Masukkan serai, daun jeruk, dan daun salam|Tuang santan ke dalam wajan dan aduk rata dengan bumbu|Masukkan potongan daging sapi ke dalam santan berbumbu|Masak dengan api kecil sambil sesekali diaduk agar santan tidak pecah|Tambahkan garam, gula, dan penyedap rasa sesuai selera|Masak hingga kuah menyusut dan mengental|Aduk terus hingga rendang berwarna coklat kehitaman dan mengeluarkan minyak|Angkat dan sajikan', 'Daging sapi 1 kg|Santan dari 2 butir kelapa|Bawang merah 10 siung|Bawang putih 5 siung|Cabai merah besar 10 buah|Jahe 2 cm|Kunyit 3 cm|Lengkuas 3 cm (geprek)|Kemiri 5 butir|Serai 2 batang (geprek)|Daun jeruk 3 lembar|Daun salam 2 lembar|Garam secukupnya|Gula merah secukupnya|Penyedap rasa secukupnya|Minyak goreng secukupnya', 'Randang Ayam', 'images/rendang_ayam.jpg', 'Potong ayam sesuai selera dan cuci bersih|Haluskan bawang merah, bawang putih, cabai merah, jahe, kunyit, lengkuas, dan kemiri|Tumis bumbu halus hingga harum|Masukkan serai, daun jeruk, dan daun salam|Tuang santan ke dalam wajan dan aduk rata dengan bumbu|Masukkan potongan ayam ke dalam santan berbumbu|Masak dengan api kecil sambil sesekali diaduk agar santan tidak pecah|Tambahkan garam, gula, dan penyedap rasa sesuai selera|Masak hingga kuah menyusut dan mengental|Aduk terus hingga rendang berwarna coklat kehitaman dan mengeluarkan minyak|Angkat dan sajikan', 'Ayam 1 ekor (potong sesuai selera)|Santan dari 2 butir kelapa|Bawang merah 8 siung|Bawang putih 4 siung|Cabai merah besar 8 buah|Jahe 2 cm|Kunyit 3 cm|Lengkuas 3 cm (geprek)|Kemiri 4 butir|Serai 2 batang (geprek)|Daun jeruk 3 lembar|Daun salam 2 lembar|Garam secukupnya|Gula merah secukupnya|Penyedap rasa secukupnya|Minyak goreng secukupnya', 'Rendang Ikan', 'images/rendang_ikan.jpg', 'Bersihkan ikan dan lumuri dengan sedikit garam dan air jeruk nipis, diamkan 10 menit lalu bilas|Haluskan bawang merah, bawang putih, cabai merah, jahe, kunyit, lengkuas, dan kemiri|Tumis bumbu halus hingga harum|Masukkan serai, daun jeruk, dan daun salam|Tuang santan ke dalam wajan dan aduk rata dengan bumbu|Masukkan ikan ke dalam santan berbumbu|Masak dengan api kecil agar bumbu meresap|Tambahkan garam, gula, dan penyedap rasa sesuai selera|Masak hingga kuah menyusut dan mengental|Aduk perlahan agar ikan tidak hancur hingga rendang berwarna coklat kehitaman dan mengeluarkan minyak|Angkat dan sajikan', 'Ikan (tongkol/kembung/tenggiri) 500 gram|Santan dari 2 butir kelapa|Bawang merah 8 siung|Bawang putih 4 siung|Cabai merah besar 8 buah|Jahe 2 cm|Kunyit 3 cm|Lengkuas 3 cm (geprek)|Kemiri 4 butir|Serai 2 batang (geprek)|Daun jeruk 3 lembar|Daun salam 2 lembar|Garam secukupnya|Gula merah secukupnya|Penyedap rasa secukupnya|Minyak goreng secukupnya|Air jeruk nipis 1 sdm', '2025-02-11 20:37:32', '2025-02-11 20:37:32', 'vegan'),
(4, 'Kamis', 'Ayam Bakar', 'images/ayam_bakar.jpg', 'Bersihkan ayam dan potong sesuai selera|Haluskan bawang merah, bawang putih, ketumbar, kunyit, jahe, dan kemiri|Tumis bumbu halus hingga harum|Masukkan daun salam, serai, dan lengkuas|Tuang air dan santan ke dalam wajan|Masukkan ayam dan masak hingga bumbu meresap|Tambahkan garam, gula, dan kecap manis sesuai selera|Masak hingga ayam matang dan air menyusut|Siapkan panggangan atau bakaran|Olesi ayam dengan sisa bumbu dan kecap|Bakar ayam sambil dibolak-balik hingga kecoklatan dan harum|Angkat dan sajikan dengan sambal dan lalapan', 'Ayam 1 ekor (potong sesuai selera)|Bawang merah 6 siung|Bawang putih 4 siung|Ketumbar 1 sdt|Kunyit 3 cm|Jahe 2 cm|Kemiri 3 butir|Lengkuas 3 cm (geprek)|Serai 1 batang (geprek)|Daun salam 2 lembar|Santan 200 ml|Kecap manis 3 sdm|Gula merah 1 sdt|Garam secukupnya|Minyak goreng secukupnya|Air secukupnya', 'Ikan Bakar', 'images/ikan_bakar.jpg', 'Bersihkan ikan dan belah perutnya untuk membuang isi perut|Lumuri ikan dengan air jeruk nipis dan garam, diamkan 15 menit|Haluskan bawang merah, bawang putih, ketumbar, kunyit, jahe, kemiri, dan cabai|Tumis bumbu halus hingga harum|Tambahkan kecap manis, garam, dan gula merah, aduk rata|Oleskan bumbu ke seluruh bagian ikan, diamkan 30 menit agar meresap|Panaskan panggangan atau bakaran|Bakar ikan sambil diolesi bumbu dan dibolak-balik hingga matang|Angkat dan sajikan dengan sambal dan lalapan', 'Ikan segar (gurame, nila, atau kakap) 1 ekor|Jeruk nipis 2 buah|Garam secukupnya|Bawang merah 5 siung|Bawang putih 3 siung|Ketumbar 1 sdt|Kunyit 3 cm|Jahe 2 cm|Kemiri 3 butir|Cabai merah besar 3 buah|Gula merah 1 sdt|Kecap manis 3 sdm|Minyak goreng secukupnya', 'Kambing Bakar', 'images/kambing_bakar.jpg', 'Potong daging kambing sesuai selera|Lumuri daging dengan air jeruk nipis dan garam, diamkan 15 menit lalu bilas|Haluskan bawang merah, bawang putih, ketumbar, jahe, kunyit, dan kemiri|Tumis bumbu halus hingga harum|Tambahkan kecap manis, saus tiram, garam, dan gula merah, aduk rata|Masukkan daging kambing ke dalam bumbu, aduk hingga merata|Diamkan selama 1 jam agar bumbu meresap|Panaskan panggangan atau bara api|Bakar daging kambing sambil diolesi sisa bumbu hingga matang|Angkat dan sajikan dengan sambal dan lalapan', 'Daging kambing 500 gram|Jeruk nipis 2 buah|Garam secukupnya|Bawang merah 5 siung|Bawang putih 3 siung|Ketumbar 1 sdt|Jahe 3 cm|Kunyit 2 cm|Kemiri 3 butir|Gula merah 1 sdt|Kecap manis 4 sdm|Saus tiram 2 sdm|Minyak goreng secukupnya', '2025-02-11 20:37:32', '2025-02-11 20:37:32', 'vegetarian'),
(5, 'Jumat', 'Ikan Bakar', 'images/ikan_bakar.jpg', 'Bersihkan ikan dan belah perutnya untuk membuang isi perut|Lumuri ikan dengan air jeruk nipis dan garam, diamkan 15 menit|Haluskan bawang merah, bawang putih, ketumbar, kunyit, jahe, kemiri, dan cabai|Tumis bumbu halus hingga harum|Tambahkan kecap manis, garam, dan gula merah, aduk rata|Oleskan bumbu ke seluruh bagian ikan, diamkan 30 menit agar meresap|Panaskan panggangan atau bakaran|Bakar ikan sambil diolesi bumbu dan dibolak-balik hingga matang|Angkat dan sajikan dengan sambal dan lalapan', 'Ikan segar (gurame, nila, atau kakap) 1 ekor|Jeruk nipis 2 buah|Garam secukupnya|Bawang merah 5 siung|Bawang putih 3 siung|Ketumbar 1 sdt|Kunyit 3 cm|Jahe 2 cm|Kemiri 3 butir|Cabai merah besar 3 buah|Gula merah 1 sdt|Kecap manis 3 sdm|Minyak goreng secukupnya', 'Ikan Goreng', 'images/ikan_goreng.jpg', 'Bersihkan ikan dan buang isi perutnya|Cuci ikan hingga bersih dan lumuri dengan air jeruk nipis serta garam, diamkan 15 menit|Haluskan bawang putih, kunyit, ketumbar, dan garam|Lumuri ikan dengan bumbu halus hingga merata|Diamkan selama 30 menit agar bumbu meresap|Panaskan minyak dalam wajan|Goreng ikan dalam minyak panas hingga kecokelatan dan matang|Angkat dan tiriskan|Sajikan dengan sambal dan lalapan', 'Ikan segar (nila, gurame, atau lele) 500 gram|Jeruk nipis 1 buah|Garam secukupnya|Bawang putih 3 siung|Kunyit 2 cm|Ketumbar 1 sdt|Minyak goreng secukupnya', 'Ikan Pepes', 'images/ikan_pepes.jpg', 'Bersihkan ikan dan buang isi perutnya|Cuci ikan hingga bersih dan lumuri dengan air jeruk nipis serta garam, diamkan 15 menit|Haluskan bawang merah, bawang putih, kunyit, kemiri, cabai, dan jahe|Tumis bumbu halus hingga harum|Lumuri ikan dengan bumbu yang telah ditumis|Siapkan daun pisang, letakkan ikan di atasnya dan tambahkan daun kemangi, tomat, serta serai|Bungkus ikan dengan daun pisang dan sematkan dengan tusuk gigi atau lidi|Kukus ikan selama 30-40 menit hingga matang|Bakar sebentar di atas bara api atau teflon untuk aroma lebih sedap|Sajikan dengan nasi hangat', 'Ikan segar (nila, patin, atau kembung) 500 gram|Jeruk nipis 1 buah|Garam secukupnya|Bawang merah 5 siung|Bawang putih 3 siung|Cabai merah 3 buah|Cabai rawit 5 buah|Kemiri 3 butir|Kunyit 2 cm|Jahe 1 cm|Serai 1 batang (geprek)|Daun kemangi secukupnya|Tomat 1 buah (iris)|Daun pisang secukupnya untuk membungkus', '2025-02-11 20:37:32', '2025-02-11 20:37:32', 'vegetarian'),
(6, 'Sabtu', 'Mie Ayam', 'images/mie_ayam.jpg', 'Rebus mie hingga matang, tiriskan dan beri sedikit minyak agar tidak lengket|Tumis bawang putih dan bawang merah hingga harum|Masukkan ayam cincang, aduk hingga berubah warna|Tambahkan kecap manis, saus tiram, garam, dan merica, masak hingga ayam matang dan bumbu meresap|Siapkan mangkuk, beri minyak bawang dan sedikit kecap asin|Masukkan mie yang sudah matang ke dalam mangkuk|Tambahkan ayam berbumbu di atas mie|Sajikan dengan kuah kaldu ayam dan taburan daun bawang serta pangsit goreng', 'Mie kuning 200 gram|Dada ayam fillet 150 gram (cincang kecil)|Bawang putih 3 siung (cincang halus)|Bawang merah 2 siung (cincang halus)|Kecap manis 2 sdm|Saus tiram 1 sdm|Garam secukupnya|Merica secukupnya|Minyak bawang secukupnya|Kecap asin 1 sdt|Kuah kaldu ayam secukupnya|Daun bawang secukupnya (iris)|Pangsit goreng untuk pelengkap', 'Mie Goreng', 'images/mie_goreng.jpg', 'Rebus mie hingga matang, tiriskan dan beri sedikit minyak agar tidak lengket|Panaskan minyak di wajan, tumis bawang putih dan bawang merah hingga harum|Masukkan ayam atau udang, tumis hingga matang|Tambahkan sayuran seperti kol dan wortel, aduk hingga layu|Masukkan mie yang sudah direbus, aduk rata|Tambahkan kecap manis, saus tiram, garam, dan merica, aduk hingga bumbu merata|Masak hingga mie berubah warna dan bumbu meresap|Sajikan mie goreng dengan taburan bawang goreng dan irisan mentimun', 'Mie kuning 200 gram|Ayam atau udang 100 gram (potong kecil)|Bawang putih 3 siung (cincang halus)|Bawang merah 2 siung (cincang halus)|Kol secukupnya (iris)|Wortel secukupnya (iris tipis)|Kecap manis 2 sdm|Saus tiram 1 sdm|Garam secukupnya|Merica secukupnya|Minyak goreng secukupnya|Bawang goreng untuk taburan|Mentimun untuk pelengkap', 'Mie Kuah', 'images/mie_kuah.jpg', 'Rebus mie hingga setengah matang, tiriskan dan sisihkan|Panaskan sedikit minyak di wajan, tumis bawang putih dan bawang merah hingga harum|Masukkan ayam atau udang, tumis hingga matang|Tuangkan air atau kaldu ayam, lalu didihkan|Masukkan wortel dan sawi, masak hingga sayuran layu|Tambahkan garam, merica, kecap asin, dan saus tiram, aduk rata|Masukkan mie ke dalam kuah, aduk hingga mie matang|Tuangkan telur kocok sambil diaduk perlahan agar membentuk serat|Masak hingga semua bahan matang dan kuah meresap|Sajikan mie kuah panas dengan taburan bawang goreng dan daun bawang', 'Mie kuning 200 gram|Ayam atau udang 100 gram (potong kecil)|Bawang putih 3 siung (cincang halus)|Bawang merah 2 siung (cincang halus)|Wortel secukupnya (iris tipis)|Sawi hijau secukupnya (potong-potong)|Air atau kaldu ayam 500 ml|Garam secukupnya|Merica secukupnya|Kecap asin 1 sdm|Saus tiram 1 sdm|Telur 1 butir (kocok lepas)|Minyak goreng secukupnya|Bawang goreng untuk taburan|Daun bawang untuk pelengkap', '2025-02-11 20:37:33', '2025-02-11 20:37:33', 'gluten-free'),
(7, 'Minggu', 'Bakso Telur', 'images/bakso_telur.jpeg', 'Rebus telur hingga matang, kupas kulitnya dan sisihkan|Haluskan daging sapi atau ayam menggunakan food processor|Campurkan daging dengan tepung tapioka, bawang putih, garam, merica, dan es batu, aduk hingga kalis|Ambil adonan bakso, pipihkan di tangan, lalu letakkan telur rebus di tengahnya|Bungkus telur dengan adonan bakso hingga tertutup rapat|Panaskan air hingga mendidih, lalu masukkan bakso dan masak hingga mengapung|Angkat dan tiriskan, bakso telur siap disajikan dengan kuah kaldu atau digoreng', 'Daging sapi atau ayam 500 gram (haluskan)|Telur ayam 5 butir (rebus, kupas)|Tepung tapioka 100 gram|Bawang putih 4 siung (haluskan)|Garam secukupnya|Merica secukupnya|Es batu 50 gram (untuk membuat adonan lebih kenyal)|Air secukupnya (untuk merebus)|Kaldu sapi atau ayam secukupnya (jika ingin disajikan dengan kuah)', 'Bakso Urat', 'images/bakso_urat.jpg', 'Siapkan daging sapi segar, potong kecil-kecil agar mudah dihaluskan|Giling daging sapi bersama dengan urat menggunakan food processor hingga halus|Campurkan daging giling dengan tepung tapioka, bawang putih halus, garam, merica, dan es batu, aduk hingga kalis|Ambil sedikit adonan, bentuk bulatan bakso menggunakan tangan atau sendok|Panaskan air hingga mendidih, lalu masukkan bakso dan masak hingga mengapung|Angkat dan tiriskan, bakso urat siap disajikan dengan kuah kaldu atau digoreng', 'Daging sapi 500 gram (dengan urat, giling kasar)|Tepung tapioka 100 gram|Bawang putih 4 siung (haluskan)|Garam secukupnya|Merica bubuk secukupnya|Es batu 50 gram (agar bakso lebih kenyal)|Air secukupnya (untuk merebus)|Kaldu sapi secukupnya (jika ingin disajikan dengan kuah)', 'Bakso Gaji', 'images/bakso_gaji.jpg', 'Siapkan daging sapi dan gaji sapi, potong kecil agar mudah dihaluskan|Giling daging sapi dan gaji hingga halus menggunakan food processor|Campurkan adonan dengan tepung tapioka, bawang putih halus, garam, merica, dan es batu, aduk hingga kalis|Bentuk adonan menjadi bulatan bakso menggunakan tangan atau sendok|Didihkan air dalam panci, lalu masukkan bakso dan masak hingga mengapung|Angkat dan tiriskan, bakso gaji siap disajikan dengan kuah kaldu atau digoreng', 'Daging sapi 300 gram (giling)|Gaji sapi 200 gram (cincang halus)|Tepung tapioka 100 gram|Bawang putih 4 siung (haluskan)|Garam secukupnya|Merica bubuk secukupnya|Es batu 50 gram (agar bakso lebih kenyal)|Air secukupnya (untuk merebus)|Kaldu sapi secukupnya (untuk penyajian)', '2025-02-11 20:37:33', '2025-02-11 20:37:33', 'vegetarian'),
(8, 'Menu Spesial', 'pizza', 'images/pizza.jpg', 'Campurkan tepung terigu, ragi, gula, garam, dan air hangat, aduk hingga merata|Tambahkan minyak zaitun, lalu uleni adonan hingga kalis dan elastis|Diamkan adonan selama 1 jam hingga mengembang dua kali lipat|Gilas adonan hingga berbentuk lingkaran dengan ketebalan sesuai selera|Oleskan saus tomat di permukaan adonan|Taburkan keju mozzarella, daging, paprika, dan topping lainnya|Panggang dalam oven bersuhu 200°C selama 15-20 menit hingga matang|Angkat dan potong sesuai selera, pizza siap disajikan', 'Tepung terigu 250 gram|Ragi instan 1 sendok teh|Gula pasir 1 sendok makan|Garam 1/2 sendok teh|Minyak zaitun 2 sendok makan|Air hangat 150 ml|Saus tomat secukupnya|Keju mozzarella secukupnya|Daging asap atau pepperoni secukupnya|Paprika secukupnya|Oregano secukupnya', 'burger', 'images/burger.jpg', 'Campurkan daging cincang, garam, merica, bawang putih bubuk, dan saus Worcestershire, aduk rata|Bentuk adonan daging menjadi patty dengan ketebalan sesuai selera|Panaskan wajan dengan sedikit minyak, lalu panggang patty hingga matang di kedua sisi|Belah roti burger menjadi dua, lalu panggang sebentar hingga agak renyah|Oleskan mayones atau saus di bagian bawah roti|Letakkan daun selada, patty daging, irisan tomat, dan keju di atasnya|Tutup dengan bagian atas roti burger|Burger siap disajikan dengan kentang goreng atau saus favorit', 'Daging sapi cincang 200 gram|Garam secukupnya|Merica secukupnya|Bawang putih bubuk 1/2 sendok teh|Saus Worcestershire 1 sendok teh|Minyak untuk memanggang secukupnya|Roti burger 1 buah|Mayones secukupnya|Saus tomat secukupnya|Daun selada secukupnya|Tomat 1 buah (iris)|Keju cheddar secukupnya', 'steak', 'images/steak.jpg', 'Siapkan daging sapi, bumbui dengan garam, merica, dan bawang putih bubuk|Diamkan selama 15-30 menit agar bumbu meresap|Panaskan wajan atau grill pan dengan sedikit minyak atau mentega|Panggang daging selama 3-5 menit di setiap sisi sesuai tingkat kematangan yang diinginkan|Angkat daging dan diamkan selama 5 menit sebelum disajikan agar jus daging tetap terjaga|Siapkan saus steak dengan mencampurkan mentega, bawang bombay cincang, saus Worcestershire, dan kaldu sapi|Masak saus hingga mengental, lalu tuangkan di atas steak|Sajikan steak dengan kentang goreng, sayuran rebus, dan saus sesuai selera', 'Daging sapi (sirloin/ribeye) 200 gram|Garam secukupnya|Merica hitam secukupnya|Bawang putih bubuk 1/2 sendok teh|Minyak atau mentega secukupnya|Bawang bombay 1/2 buah (cincang)|Saus Worcestershire 1 sendok makan|Kaldu sapi 50 ml|Kentang goreng secukupnya|Sayuran rebus (wortel, buncis, jagung) secukupnya', '2025-02-12 05:55:55', '2025-02-12 05:55:55', 'vegetarian');

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
(4, '2025_02_11_142100_add_role_to_users_table', 2),
(5, '2025_02_12_033258_create_meal_plans_table', 3),
(6, '2025_02_12_142213_create_blogs_table', 4),
(7, '2025_05_30_124231_create_reminders_table', 5),
(8, '2025_05_30_125622_create_notifications_table', 6),
(9, '2025_05_30_142821_add_diet_type_to_meal_plans_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2076be63-b000-4b61-8950-00c95535ac54', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 1, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:08\"}', NULL, '2025-05-30 06:08:49', '2025-05-30 06:08:49'),
('396cb1ce-6919-4eaf-a09d-f7c9e50ad1b5', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 1, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:05\"}', NULL, '2025-05-30 06:05:18', '2025-05-30 06:05:18'),
('5d5582da-bb01-4078-8922-6b34acabd1c3', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 2, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:05\"}', NULL, '2025-05-30 06:05:18', '2025-05-30 06:05:18'),
('b438d96c-87d9-4717-9f91-81b153beabfa', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 2, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:08\"}', NULL, '2025-05-30 06:08:49', '2025-05-30 06:08:49'),
('b9b24e34-4502-4f01-a1b5-d7cba4efc742', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 3, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:08\"}', NULL, '2025-05-30 06:08:49', '2025-05-30 06:08:49'),
('c24e49e4-5068-471f-a201-7a0a4d08a8c5', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 4, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:05\"}', NULL, '2025-05-30 06:05:18', '2025-05-30 06:05:18'),
('cab0c10a-1210-43cd-8281-4362b3872192', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 3, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:05\"}', NULL, '2025-05-30 06:05:18', '2025-05-30 06:05:18'),
('e4226e84-eee1-4900-b0fe-c3c20e9b8ed5', 'App\\Notifications\\ReminderNotification', 'App\\Models\\User', 4, '{\"message\":\"Waktunya makan siang sekarang!\",\"time\":\"13:08\"}', NULL, '2025-05-30 06:08:49', '2025-05-30 06:08:49');

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
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meal_type` varchar(255) NOT NULL,
  `reminder_time` time NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `meal_type`, `reminder_time`, `active`, `created_at`, `updated_at`) VALUES
(1, 2, 'makan siang', '20:49:00', 1, '2025-05-30 05:49:56', '2025-05-30 05:49:56');

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
('EVFKiGDczfcysiiOOX9uxGe438OPYdNA50ZvtdTJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRW5nbjlOeXQzeVFFSE9aWjM4SzhQcWFUQzY4UkFjNzdJcVJXNExsOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZWFsX3BsYW5zLzgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc0ODYxNjQ0Mjt9fQ==', 1748617136);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@example.com', '2025-04-20 05:41:05', '$2y$12$j/Iymg1pRBrOGL5OOxjKVuoFcFAlRtr.jCXgMi4kZPMmoGekRQQ4a', NULL, '2025-02-11 07:24:18', '2025-02-11 07:24:18', 'admin'),
(2, 'User\n1', 'user@example.com', '2025-04-20 05:43:13', '$2y$12$/4FzcB.KYNu4DLamgnDHUeffODjXXS8BV1nvI7IrcawLeGRHgop56', NULL, NULL, NULL, 'user'),
(3, 'asdasd', 'asd@gmail.com', NULL, '$2y$12$4S2ZtleO32XZXzGCXjZ/se01m0io8jgr1j4F8KTZF/8JYJjd/6YRy', NULL, '2025-02-13 00:46:56', '2025-02-13 00:46:56', 'user'),
(4, 'tes', 'tes@gmail.com', NULL, '$2y$12$/4FzcB.KYNu4DLamgnDHUeffODjXXS8BV1nvI7IrcawLeGRHgop56', NULL, '2025-04-19 22:44:11', '2025-04-19 22:44:11', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

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
-- Indexes for table `meal_plans`
--
ALTER TABLE `meal_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reminders_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `meal_plans`
--
ALTER TABLE `meal_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
