-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 10:46 AM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) UNSIGNED NOT NULL,
  `ma_hh` int(10) UNSIGNED NOT NULL,
  `id_kh` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_bl` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_hh`, `id_kh`, `noi_dung`, `ngay_bl`, `created_at`, `updated_at`) VALUES
(3, 49, 2, 'Áo đẹp quá bạn ơi, ship cho mình x cái đến Đà Nẵng nha. x là nghiệm của phương trình  2x²+4x+6 = 0', '2020-06-18 13:55:00', '2020-06-17 23:55:33', '2020-06-17 23:55:33'),
(5, 46, 2, 'Đoepj quá', '2020-06-24 11:06:00', '2020-06-23 21:06:26', '2020-06-23 21:06:26');

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
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `ma_dh` int(10) UNSIGNED NOT NULL,
  `ma_kh` bigint(20) UNSIGNED NOT NULL,
  `thong_tin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL,
  `tong_gia` double(16,2) NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `van_chuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`ma_dh`, `ma_kh`, `thong_tin`, `tinh_trang`, `tong_gia`, `ten_kh`, `dia_chi`, `sdt`, `van_chuyen`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kakashi x White x Bape x Streetstyle Sweater x 2 x 333,333VND<br/>Saigon Panorama Sweater x 1 x 320,000VND<br/>Harry Potter X The Banhmi Factory Sweater x 5 x 325,000VND', 0, 2611666.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-24 18:34:15', '2020-06-24 18:34:15'),
(2, 2, 'Harry Potter X The Banhmi Factory Sweater x 4 x 325,000VND', 0, 1300000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-25 09:56:08', '2020-06-25 09:56:08'),
(3, 2, 'Dui Idol Logo T-shirt x 2 x 225,000VND<br/>\r\nDui Idol Logo T-shirt x 2 x 225,000VND', 0, 450000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-25 20:24:25', '2020-06-25 20:24:25'),
(4, 2, 'Kakashi x White x Bape x Streetstyle Sweater x 3 x 333,333VND', 0, 999999.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 04:30:42', '2020-06-27 04:30:42'),
(5, 2, 'Vege x Supreme Street Style Sweater x 1 x 325,000VND', 0, 325000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:35:56', '2020-06-27 07:35:56'),
(6, 2, 'Kakashi x White x Bape x Streetstyle Sweater x 1 x 333,333VND', 0, 333333.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:36:45', '2020-06-27 07:36:45'),
(7, 2, 'Kakashi x White x Bape x Streetstyle Sweater x 1 x 333,333VND', 0, 333333.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:38:08', '2020-06-27 07:38:08'),
(8, 2, 'Vege x Supreme Street Style Sweater x 1 x 325,000VND', 0, 325000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:40:08', '2020-06-27 07:40:08'),
(9, 2, 'Harry Potter X The Banhmi Factory Sweater x 3 x 325,000VND', 0, 975000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:51:02', '2020-06-27 07:51:02'),
(10, 2, '- Harry Potter X The Banhmi Factory Sweater x 1 x 325,000VND <br/> - Saigon Panorama Sweater x 1 x 320,000VND <br/>', 0, 645000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 07:59:46', '2020-06-27 07:59:46'),
(11, 2, '- TW Sandals Ver.02 x 1 x 275,000VND <br/> - Vege x Supreme Street Style Sweater x 1 x 325,000VND <br/>', 0, 600000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:12:59', '2020-06-27 08:12:59'),
(12, 2, '- Vege x Supreme Street Style Sweater x 1 x 325,000VND <br/> - TW x Renaissance (Phục Hưng) - Apollo Belvedere x 1 x 295,000VND <br/>', 0, 620000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:17:24', '2020-06-27 08:17:24'),
(13, 2, '- Vege x Supreme Street Style Sweater x 1 x 325,000VND <br/> - Damnnn - Ice Cube and Chris Tucker Meme x 1 x 200,000VND <br/>', 0, 525000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:22:35', '2020-06-27 08:22:35'),
(14, 2, '- Harry Potter X The Banhmi Factory Sweater x 1 x 325,000VND <br/> - Money Heist Sweater x 1 x 350,000VND <br/>', 0, 675000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:25:16', '2020-06-27 08:25:16'),
(15, 2, '- TW Sandals Ver.02 x 1 x 275,000VND <br/>', 1, 275000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:27:08', '2020-06-27 08:27:11'),
(16, 2, '- Kakashi x White x Bape x Streetstyle Sweater x 1 x 333,333VND <br/>', 1, 333333.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:29:47', '2020-06-27 08:29:50'),
(17, 2, '- Saigon Panorama Sweater x 1 x 320,000VND <br/>', 1, 320000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 08:31:05', '2020-06-27 08:31:14'),
(18, 1, '- Vege x Supreme Street Style Sweater x 1 x 325,000VND <br/>', 1, 325000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-27 19:12:50', '2020-06-27 19:13:21'),
(19, 1, '- Vege x Supreme Street Style Sweater x 3 x 325,000VND <br/>', 1, 975000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Đã nhận được hàng (Miễn phí)', '2020-06-27 19:18:20', '2020-06-29 01:39:09'),
(20, 1, '- Vege x Supreme Street Style Sweater HOT x 10 x 325,000VND <br/>', 1, 3250000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Đã nhận được hàng', '2020-06-28 21:24:54', '2020-06-29 01:38:44'),
(21, 2, '- Kakashi x White x Bape x Streetstyle Sweater x 2 x 333,333VND <br/>', 1, 666666.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Miễn phí', '2020-06-29 00:56:23', '2020-06-29 00:57:38'),
(22, 2, '- Harry Potter X The Banhmi Factory Sweater x 16 x 325,000VND <br/>', 1, 5200000.00, 'Lê Xuân Lộc', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 'Đã nhận được hàng (Miễn phí)', '2020-06-29 01:05:22', '2020-06-29 01:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_hh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(580) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double(8,2) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL,
  `ma_loai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `ten_hh`, `hinh`, `gia`, `so_luong`, `tinh_trang`, `ma_loai`, `created_at`, `updated_at`, `mo_ta`, `thumbnail`) VALUES
(46, 'TW x Renaissance (Phục Hưng) - Slice', '[\"tw108d-t_n1_b93615e7a38942b7920268e0399c45c7_master.jpg\",\"tw108t-t_n2_fa6c8ea74cfd4ef4935a0d94cdcc54a7_grande.jpg\"]', 325000.00, 99, 1, 10, '2020-06-16 06:09:08', '2020-06-23 01:42:04', 'TW x Renaissance (Phục Hưng) - Slice có hai màu trắng và đen, có đầy đủ các size cho bạn có thể lựa chọn như S, M, L và XL. Với chất liệu cotton 100%, hy vọng sẽ giúp bạn có cảm giác mát mẻ và thoải mái nhất khi mang, đặc biệt trong mùa hè này.', 'tw108t-t_n2_fa6c8ea74cfd4ef4935a0d94cdcc54a7_grande.jpg'),
(47, 'TW x Renaissance (Phục Hưng) - Apollo Belvedere', '[\"tw106d-t_n1_a36abe8509d64fe9ae58465f5ab3b7e1_master.jpg\",\"tw106t-t_n2_402cb12e7567481b9bb2c0e02754172a_grande.jpg\"]', 295000.00, 99, 1, 10, '2020-06-16 07:00:25', '2020-06-23 01:42:13', 'Áo thun T-shirt TW x Renaissance (Phục Hưng) - Apollo Belvedere chất liệu 100% với hai màu trắng đen được ra mắt vào đầu mùa hè 2020.', 'tw106t-t_n2_402cb12e7567481b9bb2c0e02754172a_grande.jpg'),
(48, 'Fast & Delivery Money Heist Edition', '[\"tw103d-t_n1_151ee017561b453dbb04baa4b0636331_master.jpg\",\"tw103t-t_n2_62046cefb6d64e63a80594537c100ebf_grande.jpg\"]', 280000.00, 99, 1, 10, '2020-06-16 07:03:09', '2020-06-23 01:42:32', 'Áo thun Fast & Delivery Money Heist Edition phiên bản giới hạn. Lấy chủ đề quen thuộc là các tài xế công nghệ, với chất liệu 100% cotton mát mẻ mang lại cảm giác thoải mái khi mặc.', 'tw103t-t_n2_62046cefb6d64e63a80594537c100ebf_grande.jpg'),
(49, 'La Casa De Papel - Money Heist T-shirt', '[\"tw099d-t_n1_dc70e4fb574041d69d9beddb1ca14f90_master.jpg\",\"tw099t-t_n2_11b6abfeedd04325aa953e3c3969ee95_grande.jpg\"]', 255000.00, 99, 1, 10, '2020-06-16 07:06:14', '2020-06-23 01:42:48', 'Áo thun La Casa De Papel - Money Heist T-shirt được thiết kế đẹp mắt và sử dụng chất liệu hoàn toàn bằng cotton nhằm tạo cảm giác mát mẻ cho người sử dụng, và mức giá phải chăng phù hợp với nhiều người.', 'tw099t-t_n2_11b6abfeedd04325aa953e3c3969ee95_grande.jpg'),
(50, 'Sneaker Club - Yeezy x The Simpsons', '[\"tw122d-t_n1_926dda45e4664998a618f2027f4e90f0_ece2d267991b4845aff04f24f3396d57_master.jpg\",\"tw122t-t_n2_eaff19801dc3450ca0308f99933dbb60_7bc550938cb54b0c89d4d2c4c80a6a6e_grande.jpg\"]', 275000.00, 99, 1, 10, '2020-06-16 07:08:38', '2020-06-23 01:40:08', 'Áo thun Sneaker Club - Yeezy x The Simpsons chất liệu 100% cotton với thiết kế đơn giản nhưng không kém phần thẩm mĩ. Mẫu áo này được ra mắt vào đầu tháng 6 năm nay, hy vọng đây sẽ là một sản phẩm tạo ra xu hướng sắp tới.', 'tw122t-t_n2_eaff19801dc3450ca0308f99933dbb60_7bc550938cb54b0c89d4d2c4c80a6a6e_grande.jpg'),
(72, 'Áo Naruto phiên bản premium 2020', '[\"tw014d-t_n1_e3b1ff246f4642bdb191dde22f05494d_master.jpg\",\"tw014t-t_n2_89fa9f76b2b1426fbb1baba87d7bd959_grande.jpg\"]', 250000.00, 99, 1, 10, '2020-06-23 00:59:35', '2020-06-23 01:39:00', 'Áo Naruto phiên bản premium 2020 được làm dựa trên chất liệu 100% cotton nên khi người dùng mang vào có cảm giác êm ái và mát mẻ, rất thích hợp với mùa hè.', 'tw014t-t_n2_89fa9f76b2b1426fbb1baba87d7bd959_grande.jpg'),
(73, 'Dui Idol Logo T-shirt', '[\"tw116d-t_g1_6d465c8f9c3749378c5736a2602a0f37_master.jpg\",\"tw116t-t_g2_17c32f6ea96b49ad9b288e2e39b6c896_grande.jpg\"]', 225000.00, 99, 1, 10, '2020-06-23 01:48:42', '2020-06-23 01:48:42', 'Dui Idol Logo T-shirt được thiết kế theo chú chó với tạo hình dễ thương đang rất hot trên mạng xã hội. Với chất liệu cotton 100% đem lại cảm giác thoải mái khi mang, và thoáng máng.', 'tw116t-t_g2_17c32f6ea96b49ad9b288e2e39b6c896_grande.jpg'),
(74, 'We Work For You - Stay Home For Us T-shirt', '[\"tw083d-t_n1_ffba2736568a41cc98851a264aaa1043_master.jpg\",\"tw083t-t_n2_89ee7caad3dd4aa98785a6b15417eb24_master.jpg\"]', 200000.00, 99, 1, 10, '2020-06-23 01:54:24', '2020-06-23 01:54:24', 'We Work For You - Stay Home For Us T-shirt với khẩu hiệu hết sức nhân văn. Chúng tôi làm việc vì bạn, vì vậy hãy ở nhà vì chúng ta. Với mẫu áo thiết kế cổ động dưới chất liệu cotton 100% sẽ mang lại cho bạn cảm giác thoáng mát, và thoải mái khi mang.', 'tw083t-t_n2_89ee7caad3dd4aa98785a6b15417eb24_master.jpg'),
(75, 'Damnnn - Ice Cube and Chris Tucker Meme', '[\"tw055d-t_c765e03994d54c02b08769b9ca32b7b8_21357ba3bd0a44cf89c4540f283bb68c_master.jpg\",\"tw055t-t_719237ac3b7f42e691ae324ac2045916_43174ac0c43c45358187a7333e28598e_master.jpg\"]', 200000.00, 99, 1, 10, '2020-06-23 01:56:56', '2020-06-23 01:56:56', 'Áo thun Damnnn - Ice Cube and Chris Tucker Meme với chủ đề châm biếm được thiết kế đẹp mắt với chất liệu cotton 100% cao cấp, nhằm đem lại trải nghiệm tốt nhất khi sử dụng cho người dùng.', 'tw055t-t_719237ac3b7f42e691ae324ac2045916_43174ac0c43c45358187a7333e28598e_master.jpg'),
(76, 'Kakashi x White x Bape x Streetstyle Sweater', '[\"_5551024f44fe4c2097f7997af3c0d2d6_master.jpg\",\"tw013t-s_4d9d414db1624491a50cde15de9d3284_master.jpg\"]', 333333.00, 97, 1, 11, '2020-06-23 02:08:09', '2020-06-29 00:56:18', 'Kakashi x White x Bape x Streetstyle Sweater với chất vải tốt, mang lại cảm giác thoải mang khi sử dụng. Hình dán trên áo được in khá cầu kì nên việc bị bung tấm dán ra là điều không thể, hãy tin tưởng và ủng hộ chúng tôi <3.', 'tw013t-s_4d9d414db1624491a50cde15de9d3284_master.jpg'),
(77, 'Harry Potter X The Banhmi Factory Sweater', '[\"harry_3_bfbf9e3b625d4dc3b180cc5e9da28456_master.jpg\",\"harry_4_b9ac4475168c4abdaacc37f2d6e5600a_master.jpg\"]', 325000.00, 74, 1, 11, '2020-06-23 02:13:41', '2020-06-29 01:05:15', 'Harry Potter X The Banhmi Factory Sweater kết hợp giữa hai thứ tưởng chừng như không thể kết hợp được. Với chất vải cao cấp kèm theo đó là cảm giác thoải mái khi sử dụng, hãy thử nó', 'harry_3_bfbf9e3b625d4dc3b180cc5e9da28456_master.jpg'),
(78, 'Money Heist Sweater', '[\"tw090d-s_l1_6d435b52154a457eb2172016fd17b266_master.jpg\",\"tw090d-s_n1_1c67fa7fa2eb46c48d9808dc1063e035_master.jpg\",\"tw090t-s_l2_93b8729ebe20423dafc1bf6b16dd3fc8_master.jpg\",\"tw090t-s_n2_e65f083f69cc40c4a7582d1a73556360_master.jpg\"]', 350000.00, 0, 1, 10, '2020-06-23 02:15:20', '2020-06-28 06:29:46', 'Money Heist Sweater là mẫu áo Hoodie cao cấp được thiết kế trên chất liệu hàng đầu nhằm đem lại cảm giác thoải mái nhất cho người sử dụng.', 'tw090t-s_l2_93b8729ebe20423dafc1bf6b16dd3fc8_master.jpg'),
(79, 'Saigon Panorama Sweater', '[\"tw033d-s_ff54690a970744f8ae969bca0cc54f24_master.jpg\",\"tw033t-s_1030eebb223f446ba97eafa3765dcc9d_master.jpg\"]', 320000.00, 99, 1, 11, '2020-06-23 02:16:30', '2020-06-23 02:16:30', 'Saigon Panorama Sweater là mẫu áo hoodie mới nhất được ra mắt vào giữa tháng 6 năm 2020 tại GnouhP', 'tw033t-s_1030eebb223f446ba97eafa3765dcc9d_master.jpg'),
(80, 'Vege x Supreme Street Style Sweater HOT', '[\"_5551024f44fe4c2097f7997af3c0d2d6_master.jpg\",\"tw013t-s_4d9d414db1624491a50cde15de9d3284_master.jpg\"]', 325000.00, 89, 1, 10, '2020-06-23 02:19:47', '2020-06-28 21:24:14', 'Vege x Supreme Street Style Sweater là mẫu áo với chủ đề Manga Dragon Balls. Chất liệu vải cao cấp, cảm giác thoải mái khi sử dụng.', 'tw031t-s_018fa01e2a3349cd9911cd83e817e7f1_master.jpg'),
(81, 'TW Sandals Ver.02', '[\"bs016_f2509593e8d04869bdb18637f8fa1c60_1024x1024.jpg\"]', 275000.00, 99, 1, 12, '2020-06-23 02:24:37', '2020-06-23 02:24:37', 'TW Sandals Ver.02 mẫu Sandal mới ra mắt với chất liệu da cao cấp. Có nhiều kích cỡ khác nhau, người dùng có thể thoải mái chọn lựa', 'bs016_f2509593e8d04869bdb18637f8fa1c60_1024x1024.jpg'),
(82, 'TW Sandals Ver.01', '[\"bs015_bb37b8b6c21f4ae6b9aad18996099993_1024x1024.jpg\"]', 275000.00, 99, 1, 12, '2020-06-23 02:25:04', '2020-06-23 02:28:40', 'TW Sandals Ver.01 mẫu Sandal mới ra mắt với chất liệu da cao cấp. Có nhiều kích cỡ khác nhau, người dùng có thể thoải mái chọn lựa', 'bs015_bb37b8b6c21f4ae6b9aad18996099993_1024x1024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vai_tro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `mat_khau`, `email`, `hinh`, `dia_chi`, `dien_thoai`, `remember_token`, `created_at`, `updated_at`, `vai_tro`) VALUES
(1, 'toilaloc', '$2y$10$0mr.Ze3GLaBNvZb8OPk5O.g76LXcMS10V0BrwDGTdy6cAmvI3h6yO', 'lexuanlocc@gmail.com', '6q1m0sfl9t051.jpg', 'Đà Nẵng - Việt Nam', '0705286563', NULL, '2020-06-10 02:56:27', '2020-06-10 03:34:37', 1),
(6, 'toilaxuanloc', '$2y$10$m2FkvListU0UdwxaiCaVD.VZCfLub4pLQ2JBJS1v/OZmwXuJ4ctP.', 'toilaxuanlocc@gmail.com', '9ll7583ixq051.jpg', 'Đà Nẵng - Việt Nam', '0705286563', NULL, '2020-06-10 08:05:45', '2020-06-10 08:05:45', 0),
(7, 'Lê Xuân Lộc', '$2y$10$eJB7kn3Vg6WAQeAR9.81Quw5OEwcmY2BHFMcQTFz1ygC2Psmhl4Te', 'denvanvau@gmail.com', '40275505_2421041641246829_8409134917481520687_n.png', 'Đà Nẵng - Việt Nam', '0705286563', NULL, '2020-06-11 00:59:43', '2020-06-11 00:59:43', 1),
(8, 'Lê Xuân Lộc', '123456', 'denvau@gmail.com', '100063719_288865132514197_469734714828128256_o.jpg', 'Đà Nẵng - Việt Nam', '0705286563', NULL, '2020-06-11 06:29:49', '2020-06-11 06:29:49', 1),
(9, 'Lê Xuân Lộc', '$2y$10$Dx9z6.tvqXN08VFnc2wKgO8Gn49Zmy0ZcLsInU9n3CJy/3E2HQa4W', 'lexuanloc@gmail.com', '101185360_731141784299565_61876455667138560_o.jpg', 'Đà Nẵng - Việt Nam', '0705286563', NULL, '2020-06-13 06:54:36', '2020-06-14 01:45:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Lê Xuân Lộc', 'denvau@gmail.com', '0705286563', 'dffggfgfdgfd', 'dfdsggggggg', '2020-06-25 20:15:17', '2020-06-25 20:15:17'),
(2, 'Lê Xuân Lộc', 'lexuanloc@gmail.com', '0705286563', 'Đơn hàng của tôi bị sai thông tin #12', 'Đơn hàng của tôi bị nhầm lần về số lượng, tôi đặt 2 áo nhưng trong đơn hàng chỉ nhận 1.', '2020-06-28 21:32:30', '2020-06-28 21:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(10) UNSIGNED NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unknown Category',
  `mo_ta` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`, `mo_ta`, `created_at`, `updated_at`) VALUES
(10, 'T-shirt', 'Danh sách áo thun t-shirt được ra mắt vào đầu năm 2020. Áo thun T-shirt có hai màu chính là đen và trắng. T-shirt sẽ được cập nhật theo các chủ đề được thịnh hành trong năm.', '2020-06-16 06:06:31', '2020-06-23 01:37:13'),
(11, 'Hoodie', 'Hoodie (Áo khoác)  chất liệu vải tốt, chất lượng và có đầy đủ kích cỡ, màu sắc cho người dùng thoải mái lựa chọn.', '2020-06-23 01:44:33', '2020-06-23 01:44:33'),
(12, 'Accessories', 'Accessories (Phụ kiện) chất lượng và bắt kịp xu hướng thời trang năm 2020', '2020-06-23 01:45:36', '2020-06-23 01:45:36');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2020_06_05_202427_create_loaihang_table', 1),
(20, '2020_06_05_204806_create_hanghoa_table', 1),
(21, '2020_06_06_070454_create_loai_hang_table', 2),
(22, '2020_06_06_070730_create_hang_hoa_table', 3),
(23, '2020_06_06_073615_create_khach_hang_table', 4),
(24, '2020_06_06_074648_create_binh_luan_table', 5),
(25, '2020_06_06_075454_create_gio_hang_table', 6),
(26, '2020_06_06_161136_add_mo_ta_to_hanghoa_table', 7),
(27, '2020_06_10_090409_add_vai_tro_to_khach_hang', 8),
(28, '2020_06_17_091711_create_users_table', 9),
(29, '2020_06_18_050528_create_binh_luan_table', 10),
(30, '2020_06_23_074607_add_thumbnail_to_hang_hoa', 11),
(31, '2020_06_24_080339_add_column_to_gio_hang', 12),
(32, '2020_06_25_012900_create_gio_hang_table', 13),
(33, '2020_06_26_030206_create_lien_he_table', 14);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `images`, `address`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Xuân Lộc', 'denvau@gmail.com', 'son-rice-cat2.jpg', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 0, NULL, '$2y$10$LYBfwnZRCLFhYVAE6dCd2uixKDQ72c0Ui27dGlVMTDG6iIeB2XbiK', 'IFKRBvibpkvI7BkCm4eygeefvieNqPABEO0BAAkV7QezBB3s9ey8z7OFkJS1', '2020-06-17 03:10:02', '2020-06-21 06:12:20'),
(2, 'Lê Xuân Lộc', 'denvanvau@gmail.com', '104243826_958677194582451_2165436408715537038_o.jpg', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 1, NULL, '$2y$10$2dg5npNl/mIgeWjfUIlnKOotKDvs2uXnbrpj3rLLBP4dtlCVf/Eq2', 'Hzc2SK39invI6Ik73xGnD7MS60Ygv0NasMZAhjrlW2tMWijdH2ULaRi3pvmM', '2020-06-17 03:27:17', '2020-06-28 05:20:14'),
(3, 'Vũ', 'xuanloclee@gmail.com', '29094821_609706402710865_7346354200449646592_n.jpg', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 0, NULL, '$2y$10$MMpcQb9JFrHTf2KBOnhDkeMkQPjEcMuUYnXFUPlLFmf5DSstuXYkW', 'OfudPfnBs3ISsmOAwRGTZbYsfgs9R5owWv72bzrWu1eHmLybR7d6GcG3szkT', '2020-06-17 06:07:45', '2020-06-28 21:30:40'),
(4, 'Den Vau', 'denvauu@gmail.com', '1593137406476image_profile.1935377_1536245503352508_9174124752276497595_n.jpg', '260 Dũng Sĩ Thanh Khê, phường Hoà Minh', '0705286563', 0, NULL, '$2y$10$c0/cIKKZddSD8WJfqB5sjO4cVKvRhoCl.HqvE3kNouC7kxCyKq4Pq', NULL, '2020-06-25 19:10:06', '2020-06-25 19:10:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `binh_luan_ma_hh_foreign` (`ma_hh`),
  ADD KEY `binh_luan_id_kh_foreign` (`id_kh`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `gio_hang_ma_kh_foreign` (`ma_kh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hang_hoa_ma_loai_foreign` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `khach_hang_email_unique` (`email`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `ma_dh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_id_kh_foreign` FOREIGN KEY (`id_kh`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `binh_luan_ma_hh_foreign` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`id`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ma_kh_foreign` FOREIGN KEY (`ma_kh`) REFERENCES `users` (`id`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ma_loai_foreign` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
