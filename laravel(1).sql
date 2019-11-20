-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 03:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_03_072012_create_products_table', 1),
(5, '2019_11_03_103136_create_tbl_admin_table', 2),
(6, '2019_11_07_043619_create_tbl_category_product', 3),
(7, '2019_11_15_094520_create_tbl_brand_product', 4),
(8, '2019_11_15_094954_create_tbl_brand_product', 5),
(9, '2019_11_15_114625_create_tbl_product', 6),
(10, '2019_11_15_115034_create_tbl_product', 7),
(12, '2019_11_19_063710_tbl_orders', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `created_at`, `updated_at`) VALUES
(1, 'nhqtdv@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'huuquan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(4, 'Vinamilk', 'Công ty sữa Việt Nam', 0, NULL, NULL),
(5, 'TH TrueMilk', 'Sữa TH Việt Nam', 0, NULL, NULL),
(6, 'ORGANICA', 'ORGANICA', 0, NULL, NULL),
(7, 'RABENHORST', 'RABENHORST', 0, NULL, NULL),
(9, 'HEALTH PARADISE', 'HEALTH PARADISE', 0, NULL, NULL),
(10, 'PRIMEAL', 'PRIMEAL', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Rau củ quả', 'Các loại rau', 0, NULL, NULL),
(2, 'Thịt & Thuỷ hải sản', 'Các loại thịt và thủy hải sản', 0, NULL, NULL),
(3, 'Sữa & Chế phẩm từ sữa', 'Các loại sữa', 0, NULL, NULL),
(4, 'Thức uống', 'Các loại thức uống', 0, NULL, NULL),
(5, 'Ngũ cốc, Đậu & Hạt', 'Ngũ cốc, Đậu & Hạt', 0, NULL, NULL),
(7, 'Sản phẩm chế biến', 'Sản phẩm chế biến', 0, NULL, NULL),
(8, 'Trái cây', 'Trái cây', 0, NULL, NULL),
(9, 'Phi thực phẩm', 'Phi thực phẩm', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `orders_id` int(10) UNSIGNED NOT NULL,
  `orders_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`orders_id`, `orders_name`, `orders_address`, `orders_note`, `orders_phone`, `orders_email`, `created_at`, `updated_at`) VALUES
(1, 'quan', 'nghệ an', 'á', '01234', 'abc@gmail.com', NULL, NULL),
(2, 'quan', 'nghệ an', 'âsas', '01234', 'abc@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(8, 1, 'Cần tây', 6, 'Cần tây của Organica được canh tác hữu cơ tại trang trại của Organica tại Xuân Thành, Lâm Đồng. Cần tây được canh tác hoàn toàn không sử dụng phân bón hóa học, thuốc diệt cỏ, thuốc bảo vệ thực vật và chất kích thích tăng trưởng.', 'Cần tây của Organica được canh tác hữu cơ tại trang trại của Organica tại Xuân Thành, Lâm Đồng. Cần tây được canh tác hoàn toàn không sử dụng phân bón hóa học, thuốc diệt cỏ, thuốc bảo vệ thực vật và chất kích thích tăng trưởng.', '39000', 'can tay14.jpg', 0, NULL, NULL),
(9, 1, 'Cải Xoăn (Kale) hữu cơ', 9, 'Cải Kale của Organica được chứng nhận hữu cơ USDA và EU. Cải Kale hữu cơ được trồng tại trang của Organica tại Lạc Xuân, Lâm Đồng.', 'Cải Kale của Organica được chứng nhận hữu cơ USDA và EU. Cải Kale hữu cơ được trồng tại trang của Organica tại Lạc Xuân, Lâm Đồng.', '44000', 'cải kale92.png', 0, NULL, NULL),
(10, 1, 'Xà lách Rocket (Arugula)', 7, 'Xà lách rocket của Organica được canh tác hữu cơ tại trang trại của Organica tại Xuân Thành, Lâm Đồng. Quá trình canh tác hoàn toàn không sử dụng phân bón hóa học, thuốc diệt cỏ, thuốc bảo vệ thực vật và chất kích thích tăng trưởng.', 'Xà lách rocket của Organica được canh tác hữu cơ tại trang trại của Organica tại Xuân Thành, Lâm Đồng. Quá trình canh tác hoàn toàn không sử dụng phân bón hóa học, thuốc diệt cỏ, thuốc bảo vệ thực vật và chất kích thích tăng trưởng.', '33000', 'xà lách18.png', 0, NULL, NULL),
(11, 1, 'Bắp cải', 5, 'Bắp cải của Organica được canh tác hữu cơ tại trang trại của Organica tại Đơn Dương, Lâm Đồng. Bắp cải được trồng hoàn toàn không sử dụng phân bón hóa học, thuốc diệt cỏ, thuốc bảo vệ thực vật và chất kích thích tăng trưởng.', 'Bắp cải', '42500', 'bap cai87.jpg', 0, NULL, NULL),
(12, 1, 'Rau ngót hữu cơ', 6, 'Rau ngót của Organica đạt tiêu chuẩn hữu cơ của Mỹ và châu Âu. Rau ngót được trồng tại trang trại của Organica tại Ba Vì, Hà Nội.', 'Rau ngót hữu cơ', '21000', 'rau ngot82.png', 0, NULL, NULL),
(13, 8, 'Bơ Hass', 10, 'Bơ Hass là sản phẩm được chọn lọc bởi Organica. Đây là giống bơ trái nhỏ, có vỏ màu xanh đậm, xù xì, từ Daklak, đạt chứng nhận Fairtrade- Thương mại công bằng do châu Âu cấp và là sản phẩm được canh tác theo hướng bền vững.', 'Bơ Hass', '94000', 'bo58.png', 0, NULL, NULL),
(14, 8, 'Thanh long ruột đỏ', 6, 'Thanh long ruột đỏ, là sản phẩm trái cây nhiệt đới được chọn lọc bởi Organica.', 'Thanh long ruột đỏ', '58500', 'thanh long7.png', 0, NULL, NULL),
(15, 8, 'Cam sành', 10, 'Cam sành được chọn lọc bởi Organica. Cam có vị chua nhẹ, nhiều nước, rất thích hợp để ép nước.', 'Cam sành', '65000', 'cam54.png', 0, NULL, NULL),
(16, 8, 'Dưa hấu canh tác hữu cơ', 9, 'Dưa hấu canh tác hữu cơ', 'Dưa hấu canh tác hữu cơ', '65000', 'dua hau47.png', 0, NULL, NULL),
(17, 2, 'Xương ống thịt Karst', 4, 'Trang trại chăn nuôi của Karst nằm tại một vùng cao của tỉnh Bình Phước, nơi có môi trường thiên nhiên trong lành và những đồng cỏ rộng lớn. Heo, bò, dê, gà được chăn thả tự do với nguồn thức ăn khép kín.', 'Xương ống thịt Karst', '97000', 'xuong8.png', 0, NULL, NULL),
(18, 2, 'Đầu rồng Karst', 6, 'Đầu rồng Karst', 'Đầu rồng Karst', '80000', '4031-623321568608968-1568608968--400x40044.png', 0, NULL, NULL),
(19, 2, 'Móng giò Karst', 7, 'Móng giò Karst', 'Móng giò Karst', '75000', '4030-150511568608585-1568608585--400x4003.png', 0, NULL, NULL),
(20, 2, 'Thịt bò xay Karst', 7, 'Thịt bò xay Karst', 'Thịt bò xay Karst', '120000', '3878-333401568185803-1568185803--400x4004.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `orders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
