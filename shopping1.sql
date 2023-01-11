-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 09.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adadmins`
--

CREATE TABLE `adadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adadmins`
--

INSERT INTO `adadmins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'selgi', 'selgi1234', '2022-12-31 23:22:45', '2022-12-31 23:23:00'),
(3, 'gigi hadid', 'gigi123', '2023-01-10 09:47:09', '2023-01-10 09:47:09'),
(4, 'mark zuckerberg', 'markzzz', '2023-01-10 22:33:29', '2023-01-10 22:33:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adcategorys`
--

CREATE TABLE `adcategorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adcategorys`
--

INSERT INTO `adcategorys` (`id`, `category_id`, `category_name`, `category_desc`, `created_at`, `updated_at`) VALUES
(1, 1, 'Male', 'Cool & Trendy', NULL, '2023-01-10 00:08:12'),
(2, 2, 'Female', 'Trendy & Fashionable', NULL, '2022-12-28 06:50:08'),
(3, 3, 'Kids', 'Cute And Comfortable For Children', NULL, '2023-01-11 01:05:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adorders`
--

CREATE TABLE `adorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adorders`
--

INSERT INTO `adorders` (`id`, `user_id`, `product_id`, `quantity`, `order_date`, `payment_method`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1344, '23-08-1999', 'COD', 'in process', '2022-12-28 06:51:31', '2022-12-28 06:52:01'),
(4, 4, 3, 123, '23-08-2022', 'transfer', 'delivered', '2023-01-11 01:06:46', '2023-01-11 01:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adordertrackhistorys`
--

CREATE TABLE `adordertrackhistorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `posting_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adordertrackhistorys`
--

INSERT INTO `adordertrackhistorys` (`id`, `order_id`, `status`, `remark`, `posting_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'Delivered', 'Product delivered successfully', '22-2-2022', NULL, '2022-12-28 08:22:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adproductreviews`
--

CREATE TABLE `adproductreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `review_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adproductreviews`
--

INSERT INTO `adproductreviews` (`id`, `product_id`, `quality`, `price`, `value`, `name`, `summary`, `review`, `review_date`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 2500000, 3, 'Selgii', 'Best Product', 'Nice Product', '22-02-2022', '2022-12-30 02:15:57', '2022-12-30 05:31:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adproducts`
--

CREATE TABLE `adproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCompany` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productPriceBeforeDiscount` int(11) NOT NULL,
  `productDescription` longtext NOT NULL,
  `productImage1` varchar(255) NOT NULL,
  `productImage2` varchar(255) NOT NULL,
  `productImage3` varchar(255) NOT NULL,
  `shippingCharge` int(11) NOT NULL,
  `productAvailability` varchar(255) NOT NULL,
  `postingDate` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adproducts`
--

INSERT INTO `adproducts` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Sleeveless Dress', 'Louise Vuitton', 200000, 530000, 'Best Seller !', '1.jpg', '1.jpg', '1.jpg', 1, '224', 20221114, '20221114', NULL, '2023-01-04 07:12:21'),
(2, 1, 1, 'Jacket', 'Balenciaga', 375000, 400000, 'Make you comfortable while gym', '12.png', '12.png', '12.png', 3, '12', 4012023, '04012023', '2023-01-04 07:17:31', '2023-01-04 07:18:14'),
(3, 3, 1, 'Kids Brown Double G Hat', 'Gucci', 120000, 210500, 'Cutie and Lovely', '11.png', '11.png', '11.png', 66, '675', 29072021, '29072021', '2023-01-04 07:20:43', '2023-01-04 07:21:14'),
(4, 1, 1, 'Adidas Ultraboost Shoes', 'Adidas', 1020000, 2600000, 'make you feel like a kpop idol', 'shoes.jpg', 'shoes.jpg', 'shoes.jpg', 234, '543', 2012023, '02012023', '2023-01-04 07:24:57', '2023-01-04 07:27:26'),
(6, 3, 1, 'Beanie Hat', 'Celine', 115000, 178000, 'Make your children warm in winter', '09.png', '09.png', '09.png', 4, '76', 29072023, '29072023', '2023-01-07 09:25:53', '2023-01-07 09:27:10'),
(7, 2, 1, 'LV Escale Pyjama Shirt', 'LV', 143000, 156000, 'Comfortable while sleeping', 'lv.png', 'lv.png', 'lv.png', 1, '422', 29072022, '29072022', '2023-01-11 01:12:32', '2023-01-11 01:12:32'),
(8, 3, 1, 'Kids\' Triple S Sneaker (Toddler & Little Kid)', 'Balenciaga', 721000, 899000, 'Premium footwear for kids', 'sh.jpg', 'sh.jpg', 'sh.jpg', 1, '655', 12022021, '12022021', '2023-01-11 01:18:17', '2023-01-11 01:18:17'),
(9, 1, 1, 'Campaign Logo Baseball Cap', 'Balenciaga', 213500, 339999, 'Amazing Cap', 'cap.jpg', 'cap.jpg', 'cap.jpg', 1, '757', 9112020, '09112020', '2023-01-11 01:21:30', '2023-01-11 01:21:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adsubcategorys`
--

CREATE TABLE `adsubcategorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adsubcategorys`
--

INSERT INTO `adsubcategorys` (`id`, `category_id`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fresh Stock', '2022-12-29 07:06:43', '2022-12-29 07:06:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduserlogs`
--

CREATE TABLE `aduserlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aduserlogs`
--

INSERT INTO `aduserlogs` (`id`, `user_email`, `user_ip`, `login_time`, `logout`, `status`, `created_at`, `updated_at`) VALUES
(1, 'selgi123@email.com', '20.01.53.0035', '22-09-2022', '22-09-2022', 0, '2022-12-31 04:16:16', '2022-12-31 04:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adusers`
--

CREATE TABLE `adusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `shippingAddress` varchar(255) NOT NULL,
  `shippingState` varchar(255) NOT NULL,
  `shippingCity` varchar(255) NOT NULL,
  `shippingPincode` int(11) NOT NULL,
  `billingAddress` varchar(255) NOT NULL,
  `billingState` varchar(255) NOT NULL,
  `billingCity` varchar(255) NOT NULL,
  `billingPincode` int(11) NOT NULL,
  `regDate` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adusers`
--

INSERT INTO `adusers` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`, `created_at`, `updated_at`) VALUES
(1, 'Selgii', 'selgi123@email.com', 812345678, 'abc123', 'jl.mawar', 'indonesia', 'Bali', 123456, 'jl.mawar', 'indonesia', 'Bali', 123456, '22-05-2021', '22-05-2021', '2023-01-01 06:17:19', '2023-01-01 06:17:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `adwishlists`
--

CREATE TABLE `adwishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `posting_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `adwishlists`
--

INSERT INTO `adwishlists` (`id`, `user_id`, `product_id`, `posting_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '30-07-2022', '2022-12-31 05:12:57', '2022-12-31 05:13:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_15_063755_create_users_table', 1),
(5, '2022_12_27_090427_create_adproducts_table', 1),
(6, '2022_12_27_094134_create_adcategorys_table', 1),
(7, '2022_12_28_030856_create_adorders_table', 2),
(8, '2022_12_28_031728_create_adorders_table', 3),
(9, '2022_12_28_032242_create_adorders_table', 4),
(10, '2022_12_28_032525_create_adorders_table', 5),
(11, '2022_12_28_032955_create_adorders_table', 6),
(12, '2022_12_28_033240_create_adorders_table', 7),
(13, '2022_12_28_035107_create_adorders_table', 8),
(14, '2022_12_28_035646_create_adorders_table', 9),
(15, '2022_12_28_035942_create_adorders_table', 10),
(16, '2022_12_28_040441_create_adorders_table', 11),
(17, '2022_12_28_054800_create_adorders_table', 12),
(18, '2022_12_28_142723_create_adordertrackhistorys_table', 13),
(19, '2022_12_29_081829_create_adsubcategorys_table', 14),
(20, '2022_12_30_062119_create_adproductreviews_table', 15),
(21, '2022_12_30_124634_create_aduserlogs_table', 16),
(22, '2022_12_30_125530_create_aduserlogs_table', 17),
(23, '2022_12_31_112425_create_adwishlists_table', 18),
(24, '2023_01_01_052823_create_adadmins_table', 19),
(25, '2023_01_01_114156_create_adusers_table', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adadmins`
--
ALTER TABLE `adadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adcategorys`
--
ALTER TABLE `adcategorys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adorders`
--
ALTER TABLE `adorders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adordertrackhistorys`
--
ALTER TABLE `adordertrackhistorys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adproductreviews`
--
ALTER TABLE `adproductreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adproducts`
--
ALTER TABLE `adproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adsubcategorys`
--
ALTER TABLE `adsubcategorys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aduserlogs`
--
ALTER TABLE `aduserlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adusers`
--
ALTER TABLE `adusers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `adwishlists`
--
ALTER TABLE `adwishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adadmins`
--
ALTER TABLE `adadmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `adcategorys`
--
ALTER TABLE `adcategorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `adorders`
--
ALTER TABLE `adorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `adordertrackhistorys`
--
ALTER TABLE `adordertrackhistorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adproductreviews`
--
ALTER TABLE `adproductreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `adproducts`
--
ALTER TABLE `adproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `adsubcategorys`
--
ALTER TABLE `adsubcategorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `aduserlogs`
--
ALTER TABLE `aduserlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adusers`
--
ALTER TABLE `adusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `adwishlists`
--
ALTER TABLE `adwishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
