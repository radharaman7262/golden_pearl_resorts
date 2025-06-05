-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2025 at 10:53 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpresort_goldenpearlresorts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `employee_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `is_admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'CEID#4', 'Ritesh', '9179337679', 'admin@gmail.com', NULL, '$2y$10$Llz52W0oIHH7B32hgShRN.CpNtjZ804O3Bncg7CvSuwThLldXP.Kq', 2, 1, NULL, '2023-02-21 06:09:39', '2024-03-12 01:37:47'),
(5, 'CEID#5', 'Kishan Kumar', '7024852741', 'kishan7@gmail.com', NULL, '$2y$10$7WKkwdaQCGhJJfuJ6DZCt.4XfbjQkGeib3mKkJscp891WbQSQIuZy', 2, 1, NULL, '2023-08-23 02:03:49', '2023-08-23 02:09:40'),
(6, 'CEID#6', 'ankit', '8765432345', 'ankit@gmail.com', NULL, '$2y$10$uutKxosK3E9E6geUsj9fP.rR4nsNHGfxVg4/21Ys5QovgfiN.Q/cu', 4, 1, NULL, '2024-03-20 03:57:37', '2024-03-20 03:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `staff_id`, `title`, `image`, `banner`, `date`, `short_description`, `long_description`, `status`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(7, 1, 4, 'Industry stan Women We make small', 'public/images/blog/v722Lm962ArqGscaAs4OWuTnDs6YLTn1xP47WkKN.png', 'public/images/blog/tVUaarWcLWELTLNjVcmkrouugjMW8X0Dp1jF1OTj.jpg', '2023-08-18', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet augue mattis fermentum ullamcorper viver laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', 1, 'industry-stan-women-we-make-small', 'Blog Details', 'Blog Detail Description', 'Blog Detail  keyword', '2023-02-27 02:24:53', '2024-07-09 01:53:56'),
(8, 3, 4, 'Building digital experiences that matter', 'public/images/blog/ubTY8HANnUFaOxMn2yRyyOuQ9irhc7C7QKOjUfsd.png', 'public/images/blog/Q6N7vXZtn6FYKgAx8i67PqIjxPSd4kE84Vo4wEnS.jpg', '2023-08-21', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet augue mattis fermentum ullamcorper viver laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', 1, 'building-digital-experiences-that-matter', 'Blog Detail', 'Blog Detail Description', 'Blog Detail Keyword', '2023-08-18 05:03:37', '2024-01-09 11:49:06'),
(9, 2, 4, 'Innovative solutions for a better future', 'public/images/blog/hrj6pldjWii9QLBjLtc8yvnb18AA0UJr4sAIppTo.png', 'public/images/blog/DaFcLbu2YZwv9LQjVQTJzcHZTS8nwhCmP4QJIMsz.jpg', '2023-08-31', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', '<p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet augue mattis fermentum ullamcorper viver laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis non, viverra laoreet auguerper viverra laoreet Aliquam eros justo, posuere loborti</p>', 1, 'innovative-solutions-for-a-better-future', 'Blog Detail', 'Blog Detail Description', 'Blog Detail Keyword', '2023-08-18 05:05:26', '2024-01-09 11:48:04'),
(19, 3, 4, 'Testing_Team', 'public/images/blog/gx932oZU1x6W7W7mInWbpqRy84fhWxPJmSviYq07.jpg', 'public/images/blog/4GvQ8G1wbZRT3bGKdhf61Jdc6gpnGi0uFIER3FdS.jpg', '2024-08-01', '<p>Testing_Team</p>', '<p>Testing_Team</p>', 0, 'testing-team', 'Testing_Team', 'Testing_Team', 'Testing_Team', '2024-08-01 07:48:27', '2024-08-01 10:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Agencyfe', 1, 'agencyfe', '2022-12-17 05:07:51', '2024-07-09 00:50:35'),
(2, 'Corporate', 1, 'corporate', '2022-12-17 05:08:07', '2024-01-11 05:22:10'),
(3, 'Business', 1, 'business', '2022-12-17 05:08:17', '2024-01-11 05:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `image_baner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_banner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_condition` text COLLATE utf8mb4_unicode_ci,
  `privacy` text COLLATE utf8mb4_unicode_ci,
  `map` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vission` text COLLATE utf8mb4_unicode_ci,
  `what_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenity` longtext COLLATE utf8mb4_unicode_ci,
  `patient_guide` longtext COLLATE utf8mb4_unicode_ci,
  `count1` int(11) DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count2` int(11) DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count3` int(11) DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon1` text COLLATE utf8mb4_unicode_ci,
  `icon2` text COLLATE utf8mb4_unicode_ci,
  `icon3` text COLLATE utf8mb4_unicode_ci,
  `icon4` text COLLATE utf8mb4_unicode_ci,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invest_paragraph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `site_name`, `fav_icon`, `header_logo`, `footer_logo`, `email_id`, `phone_no1`, `phone_no2`, `email_id2`, `address`, `footer_description`, `copyright`, `facebook`, `instagram`, `linkedin`, `twitter`, `youtube`, `about_us`, `about_image`, `short_description`, `long_description`, `image_baner`, `testimonial_banner`, `testimonial_banner2`, `term_condition`, `privacy`, `map`, `mission`, `vission`, `what_image`, `service_image`, `amenity`, `patient_guide`, `count1`, `title1`, `count2`, `title2`, `count3`, `title3`, `count4`, `title4`, `icon1`, `icon2`, `icon3`, `icon4`, `youtube_link`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`, `invest_paragraph`, `timing`) VALUES
(1, 'Golden Pearl Hotels & Resorts', 'public/images/business_setting/zGMnIw4vLMLRfihtOYQwWkWlbmYAZzVe0ERAZHyp.png', 'public/images/business_setting/T4LGRKDg7W6ZHlSj6Ysv8MHPKpO3vVyDUvSS6Hkg.png', 'public/images/business_setting/Q1vtvTvyL74w3dg1oEhxWcemQFBe4x2Q9jz0Uj7P.png', 'golden@gmail.com', '+91 90906 90757', NULL, NULL, '68 Gram Barkheda, Near Chapriya, Mhow, Indore, Madhya Pradesh India - 453441', NULL, '2024 Golden Pearl Hotels & Resorts , All Rights Reserved.', 'https://www.facebook.com/profile.php?id=61561294060317', 'https://www.instagram.com/anjnaresorts/', 'https://www.linkedin.com/company/103905416/admin/dashboard/', NULL, NULL, 'About Golden Pearl Hotels & Resorts', 'public/images/business_setting/QlVXAkAZhiDwIOpKTbnEB5PZmkNvZOcgNUCwwrjy.png', NULL, '<p>Golden Pearl Hotels &amp; Resorts is a distinguished name in luxury hospitality and real estate investment, offering a perfect combination of premium living, comfort, and high-value returns. We provide exclusive opportunities to own holiday homes, farm villas, and resort properties in some of the most sought-after locations.</p><p>Whether you’re looking for a luxurious retreat or a profitable investment, our properties are designed to offer an unmatched lifestyle with steady income and long-term appreciation. With hassle-free management, investors enjoy ownership without maintenance worries, making it a truly rewarding experience.</p><p><i><strong>Our Prestigious Investment Resorts</strong></i></p><p><strong>Anjna Hotels &amp; Resorts – A Touch of Bali in Every Stay</strong></p><p>Inspired by Balinese elegance, Anjna Hotels &amp; Resorts is designed for those who seek exotic charm and premium comfort. Featuring:<br>✔ Unique 7 luxury cottages reflecting authentic Balinese architecture<br>✔ Private swimming pool and jacuzzi for ultimate relaxation.<br>✔️ Bar and restaurant for ultimate craving.<br>✔ A peaceful tropical ambiance for a perfect escape<br>This exclusive resort is a lucrative investment opportunity, offering high rental yields and long-term value appreciation.</p><p><strong>The Nature Nest Hotel &amp; Resorts– A Harmony of Comfort &amp; Nature</strong></p><p>The Nature Nest Hotel &amp; Resorts is a tranquil retreat offering a perfect balance of luxurious hospitality and natural beauty. It is ideal for those who appreciate comfort, serenity, and good food. Features include:<br>✔ Premium farm villas, and hotel stays for an immersive experience<br>✔ Exquisite culinary delights, ensuring a memorable dining experience<br>✔️ Bar and restaurant for ultimate craving.<br>✔ A nature-inspired ambiance, perfect for relaxation and rejuvenation<br>With its increasing popularity, Nature Nest is an excellent choice for real estate investors seeking sustainable and profitable returns.</p><p><strong>Palm Island Hotels &amp; Resorts – A Maldives-Inspired Paradise</strong></p><p>Palm Island Hotels &amp; Resorts redefines coastal luxury, bringing a Maldives-style experience to investors and travelers. Key highlights:<br>✔ Exclusive beachfront property offering breathtaking ocean views<br>✔ Two signature cottages designed with elegance and privacy in mind<br>✔ A luxury swimming pool, Jacuzzi, and a world-class spa wellness center<br>✔ A perfect blend of leisure and investment, ensuring high demand and strong property appreciation</p><p><strong>Why Invest with Golden Pearl Hotels &amp; Resorts?</strong></p><p>Luxury &amp; Comfort – High-end amenities for an unparalleled living experience</p><p>Prime Locations – Invest in properties that offer high rental demand and appreciation</p><p>Hassle-Free Management – Enjoy ownership benefits without maintenance worries</p><p>Profitable Investment – A smart way to secure passive income and long-term wealth</p><p><br><i>With Golden Pearl Hotels &amp; Resorts, you’re not just investing in property—you’re investing in a premium lifestyle and financial success.</i></p>', 'public/images/business_setting/jVKSzASETB2QBUfbg7qlkqSlfVhKnkCC5jhZVIGl.png', 'public/images/business_setting/oSIvIFwYidMba3tFXbXXA3S3MUDb5p0iB3xaz7jz.pdf', NULL, '<p>Terms &amp; Conditions</p>', '<p>Privacy Policy</p>', 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3689.1602662921414!2d75.67641067529507!3d22.38531487962546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDIzJzA3LjEiTiA3NcKwNDAnNDQuNCJF!5e0!3m2!1sen!2sin!4v1726838879025!5m2!1sen!2sin', '<p><strong>Vision</strong><br>To be the most respected and trusted healthcare provider.</p>', '<p><strong>Mission</strong><br>To make great healthcare affordable.</p>', '<p><strong>Values</strong><br>C- Continual Improvement<br>H - Heartfelt Personal Touch<br>E - Ethical<br>E - Empathetic Care<br>R - Real Accountability<br>S - Service Excellence</p>', '<p><strong>Our Strength</strong><br>Brand<br>Compassion<br>Discipline<br>People<br>Technology<br>Trust</p>', '<p>bfdb</p>', '<p>bfb</p>', 50, 'Doctors', 8000, 'Surgeries', 220, 'Beds', '50', 'Thousands Happy Patients', 'public/images/business_setting/WjS25EPh8YWm5TZ7Pp9lVfGW6Rmq3IY439ACrtLP.png', 'public/images/business_setting/7AZilsBW7yGdCwPl50N0ihQSKYHTUZtJYZeru9n1.png', 'public/images/business_setting/RbLdHesurvi50VbfpFhmjSrGtE3MpQ1RMjUkdVd5.png', 'public/images/business_setting/2UYfhEisz1WRoVFC6EtwB75o1KBvW60XC2iJGCPB.png', NULL, 'Where Elegance Meets Unforgettable Experiences', 'Bali-themed resort, luxury resort in Indore, 5-star resort Mhow, private cottages, adventure park, spa in Indore', 'Discover the ultimate in luxury and comfort at Golden Pearl Hotels & Resorts. Enjoy world-class amenities, exceptional hospitality, and a serene ambiance for an unforgettable stay. Perfect for leisure and business travelers alike.', '2022-09-01 06:17:49', '2025-02-22 06:45:37', 'Discover luxury and comfort at Golden Pearl Hotels & Resorts. Immerse yourself in world-class hospitality, stunning accommodations, and serene surroundings — the perfect destination for relaxation, romance, or adventure.', 'Always Open');

-- --------------------------------------------------------

--
-- Table structure for table `cms_headings`
--

CREATE TABLE `cms_headings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` text,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_headings`
--

INSERT INTO `cms_headings` (`id`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Key Highlights', 'Key Highlights', 'Key Highlights', '2024-02-07 00:34:18', '2024-03-11 04:26:48'),
(2, 'Departments & Services', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-02-16 23:58:11'),
(3, 'Recent Events', 'Celebrating life with gratitude, joy, and a heart full of appreciation.', 'Celebrating life with gratitude, joy, and a heart full of appreciation.', NULL, '2024-02-16 23:58:33'),
(4, 'Media News', 'Your gateway to staying informed.', 'Your gateway to staying informed.', NULL, '2024-02-16 23:58:57'),
(5, 'Insurance Companies & TPAs', 'Our third party administrators tie-ups.\n', 'Our third party administrators tie-ups.\n', NULL, '2024-02-16 23:59:48'),
(6, 'Review From Our Patients', 'Review From Our Patients', 'Review From Our Patients', NULL, '2024-02-17 00:00:17'),
(7, 'About Capital Hospital', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-02-17 00:01:19'),
(8, 'Our Vision, Mission, Values & Strength', 'Your Health . Our Commitment', 'Saving Lives, No Matter What\nAt Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it.', NULL, '2024-02-17 00:01:44'),
(9, 'Why Palm island', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-07-15 07:55:09'),
(10, 'Our Board Members', 'Your Health . Our Commitment', 'Saving Lives, No Matter What\nAt Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it.', NULL, '2024-02-17 00:02:57'),
(11, 'Our Community', 'Your Health . Our Commitment', 'Saving Lives, No Matter What\nAt Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it. At Capital Hospital, saving lives is our top priority. We believe in giving life first, and then we assess the rest. No one is denied treatment at our emergency doors. No negotiations for advance payments. We understand that patients may not always have money at the ready, and treatment is never delayed because of it.', NULL, '2024-02-17 00:03:25'),
(12, 'Doctors', 'Your Health . Our Commitment\n', 'Your Health . Our Commitment\n', NULL, '2024-02-17 00:03:51'),
(13, 'Patients & Visitors | Event', 'Your Health . Our Commitment\n', 'Your Health . Our Commitment\n', NULL, '2024-02-17 00:04:20'),
(14, 'Patients & Visitors | Media', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-02-17 00:09:14'),
(15, 'Patients & Visitors | Amenities', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-02-17 00:10:04'),
(16, 'Patients & Visitors | Hospital', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL),
(17, 'Patients & Visitors | TPA', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL),
(18, 'Patients & Visitors | Patient', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL),
(19, 'Patients & Visitors | Visiting', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, '2024-02-17 00:09:14'),
(20, 'Career', 'Your Health . Our Commitment', 'Didn\'t find the job you were looking for?\r\nSubmit your resume and our HR team will contact you when there\'s an opening!', NULL, '2024-02-17 00:10:04'),
(21, 'Contact Us', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL),
(22, 'Term & Codition', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL),
(23, 'Privacy Policy', 'Your Health . Our Commitment', 'Your Health . Our Commitment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` text,
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Complaint', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'ghjk', 'dfghj', '2024-03-19 02:32:12', '2024-03-19 02:32:12'),
(3, 'Enquiry', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'dfghj', 'fghj', '2024-03-19 02:32:25', '2024-03-19 02:32:25'),
(4, 'Feedback', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'cghj', 'fghj', '2024-03-19 02:31:54', '2024-03-19 02:31:54'),
(5, 'Complaint', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'ghjk', 'dfghj', '2024-03-19 02:32:12', '2024-03-19 02:32:12'),
(7, 'Feedback', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'cghj', 'fghj', '2024-03-19 02:31:54', '2024-03-19 02:31:54'),
(8, 'Complaint', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'ghjk', 'dfghj', '2024-03-19 02:32:12', '2024-03-19 02:32:12'),
(9, 'Enquiry', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'dfghj', 'fghj', '2024-03-19 02:32:25', '2024-03-19 02:32:25'),
(11, 'Complaint', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'ghjk', 'dfghj', '2024-03-19 02:32:12', '2024-03-19 02:32:12'),
(12, 'Enquiry', 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'dfghj', 'fghj', '2024-03-19 02:32:25', '2024-03-19 02:32:25'),
(14, NULL, 'JohnTog', 'kayleighbpsteamship@gmail.com', '3544768386', 'Hi, i am wrote about     price', 'Salam, qiymətinizi bilmək istədim.', '2024-07-17 06:13:39', '2024-07-17 06:13:39'),
(15, NULL, 'Kishan Kumar', 'kishanraaz87@gmail.com', '7024291385', 'sdfghj', 'uytrds', '2024-07-17 10:54:11', '2024-07-17 10:54:11'),
(16, NULL, 'MasonTog', 'yjdisantoyjdissemin@gmail.com', '7666457803', 'Hello  i write about your   price for reseller', 'Hai, saya ingin tahu harga Anda.', '2024-07-18 15:21:06', '2024-07-18 15:21:06'),
(17, NULL, 'DavidTog', 'kayleighbpsteamship@gmail.com', '4341835484', 'Hallo    write about     price', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2024-07-22 11:05:22', '2024-07-22 11:05:22'),
(18, NULL, 'MasonTog', 'yjdisantoyjdissemin@gmail.com', '8281853186', 'Hi,   wrote about your   price', 'Hola, volia saber el seu preu.', '2024-07-23 23:02:41', '2024-07-23 23:02:41'),
(20, NULL, 'rrtthtr', 'thtrh@rhreh.ytjt', '6545656156', 'jtrjrjrjt', 'rjtrjtrjtrjjrj', '2024-08-01 06:44:13', '2024-08-01 06:44:13'),
(21, NULL, 'htrbtr', 'btrbtrbrgb@rtbth.ytmyt', '2838383838', 'gtrgtbrtbr', 'rhrhrbr', '2024-08-02 07:06:24', '2024-08-02 07:06:24'),
(22, NULL, 'ngfnrb', 'fdbdfbf@erhh.jtyrt', '2872873287', 'bfdbrbb', 'ram', '2024-08-02 07:08:37', '2024-08-02 07:08:37'),
(24, NULL, 'DavidTog', 'kayleighbpsteamship@gmail.com', '3645438162', 'Hi  i am write about your   price', 'Sveiki, es gribēju zināt savu cenu.', '2024-08-14 19:47:16', '2024-08-14 19:47:16'),
(25, NULL, 'MasonTog', 'yjdisantoyjdissemin@gmail.com', '4880748187', 'Hallo, i wrote about your the prices', 'Hola, volia saber el seu preu.', '2024-08-17 01:40:06', '2024-08-17 01:40:06'),
(26, NULL, 'MasonTog', 'yjdisantoyjdissemin@gmail.com', '1858501043', 'Hello,   wrote about     price for reseller', 'Hola, quería saber tu precio..', '2024-08-19 14:50:09', '2024-08-19 14:50:09'),
(27, NULL, 'JohnTog', 'kayleighbpsteamship@gmail.com', '2355768826', 'Aloha  i am wrote about your   price for reseller', 'Ola, quería saber o seu prezo.', '2024-08-29 05:40:52', '2024-08-29 05:40:52'),
(28, NULL, 'JackTog', 'yjdisantoyjdissemin@gmail.com', '0860871252', 'Aloha  i am writing about your the price for reseller', 'Hai, saya ingin tahu harga Anda.', '2024-09-09 02:47:18', '2024-09-09 02:47:18'),
(29, NULL, 'TedTog', 'kayleighbpsteamship@gmail.com', '2008722138', 'Aloha,   wrote about   the price for reseller', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2024-09-10 05:32:05', '2024-09-10 05:32:05'),
(30, NULL, 'DavidTog', 'kayleighbpsteamship@gmail.com', '2261743427', 'Aloha, i am wrote about your   prices', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2024-09-10 08:10:32', '2024-09-10 08:10:32'),
(31, NULL, 'Yash Bhuva', 'hellobhuva@gmail.com', '+1 (206)887-5387', 'Investment Inquiry and Discussion Opportunity', 'Dear Sandeep Shukla,\r\n\r\nI recently watched your podcast on the Indore Talk channel and was thoroughly impressed by your insights and the vision behind your projects. I am currently based in the USA and would like to discuss about my perspective on couple things.\r\n\r\nIf all goes well, I am highly interested in exploring investment opportunities in your project. Please feel free to contact me via WhatsApp for further conversation.\r\n\r\nLooking forward to connecting with you.', '2024-12-06 20:00:11', '2024-12-06 20:00:11'),
(32, NULL, 'Yash Bhuva', 'hellobhuva@gmail.com', '+1(206)887-5387', 'Investment Inquiry and Discussion Opportunity', 'Dear Sandeep Shukla,\r\n\r\nI recently watched your podcast on the Indore Talk channel and was thoroughly impressed by your insights and the vision behind your projects. I am currently based in the USA and would like to discuss about couple of things.\r\n\r\nIf all goes well, I am highly interested in exploring investment opportunities in your project. Please feel free to contact me via WhatsApp for further conversation.\r\n\r\nLooking forward to connecting with you.', '2024-12-06 20:04:03', '2024-12-06 20:04:03'),
(33, NULL, 'Shreyansh', 'jainshreyans30@gmail.com', '8770321686', 'Investment plan', 'What is your investment plans?', '2025-01-19 05:01:25', '2025-01-19 05:01:25'),
(34, NULL, 'varun', 'varun.arora0551@gmail.com', '9691666636', 'Investment', 'Investment  Details', '2025-03-03 06:48:27', '2025-03-03 06:48:27'),
(35, NULL, '* * * Unlock Free Spins Today: https://www.itboo.kz/uploads/git9r5.php?ee2lp * * * hs=8ac615f78d751175cd17a0b254e9747c*', 'pazapz@mailbox.in.ua', '122956391705', '1koqyd', '5hy3y3', '2025-03-07 09:42:59', '2025-03-07 09:42:59'),
(36, NULL, '* * * <a href=\"https://www.itboo.kz/uploads/git9r5.php?ee2lp\">Unlock Free Spins Today</a> * * * hs=8ac615f78d751175cd17a0b254e9747c*', 'pazapz@mailbox.in.ua', '642162540524', '32fg37', 'ux60k5', '2025-03-07 09:43:03', '2025-03-07 09:43:03'),
(37, NULL, 'Alice', 'wpghgato@testing-your-form.info', 'Alice', 'TestUser', 'tAMd yIO eIfnv', '2025-03-30 02:03:31', '2025-03-30 02:03:31'),
(38, NULL, 'Hello', 'hbhgazuw@testing-your-form.info', 'MyName', 'TestUser', 'suaFCh rqJUAqtY GGfDdlP XcV pwQo sIBugPIh', '2025-04-04 06:27:20', '2025-04-04 06:27:20'),
(39, NULL, 'MyName', 'rvwagfrc@testing-your-form.info', 'Hello', 'Alice', 'jGoTXhzh ztkFlPow EjSR moQGFqdC', '2025-04-07 10:17:45', '2025-04-07 10:17:45'),
(40, NULL, '* * * Get Free Bitcoin Now: https://izauto.com.br/index.php?0z6d0y * * * hs=8ac615f78d751175cd17a0b254e9747c* ххх*', 'pazapz@mailbox.in.ua', '047316096031', '1jdbvy', 'r0o3og', '2025-04-22 02:26:16', '2025-04-22 02:26:16'),
(41, NULL, '* * * <a href=\"https://izauto.com.br/index.php?0z6d0y\">Claim Free iPhone 16</a> * * * hs=8ac615f78d751175cd17a0b254e9747c* ххх*', 'pazapz@mailbox.in.ua', '047316096031', '1jdbvy', 'r0o3og', '2025-04-22 02:26:21', '2025-04-22 02:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(2, 'How can I purchase products on Schonheit?cghjk', 'You can purchase products on Schonheit by visiting their website, selecting the product you want to purchase, and adding it to your cart. You can then proceed to checkout and make payment using one of the available payment options.kjhgc', 1, '2022-12-17 02:37:31', '2024-03-11 04:15:48'),
(3, 'What payment options are available on Schonheit?', 'Schonheit offers various payment options including credit/debit card, net banking, and UPI.', 1, '2023-02-14 03:39:17', '2023-03-19 07:04:16'),
(4, 'Is it safe to make online payments on Schonheit?', 'Yes, Schonheit uses secure payment gateways to ensure that all transactions are safe and secure.', 1, '2023-03-19 07:04:54', '2023-03-19 07:04:54'),
(5, 'Does Schonheit offer free delivery?', 'Yes, Schonheit offers free delivery on all orders above a certain amount. The minimum order amount may vary from time to time.', 1, '2023-03-19 07:05:28', '2023-03-19 07:05:28'),
(6, 'What is the return policy of Schonheit?', 'Schonheit offers a hassle-free return policy. If you receive a damaged or defective product, you can initiate a return within a certain period of time and get a replacement or a refund.', 1, '2023-03-19 07:05:54', '2023-03-19 07:05:54'),
(7, 'Can I track my order on Schonheit?', 'Yes, you can track your order on Schonheit by logging in to your account and checking the order status.', 1, '2023-03-19 07:06:21', '2023-03-19 07:06:21'),
(8, 'Does Schonheit offer installation services?', 'Yes, Schonheit offers installation services for certain products such as air conditioners and washing machines. You can check the product page for more information on installation services.', 1, '2023-03-19 07:06:50', '2023-03-19 07:06:50'),
(9, 'How can I contact Schonheit customer support?', 'You can contact Schonheit customer support by emailing them at gyanendu@schonheit.in or by calling their customer care number. The customer care number may vary from time to time.', 1, '2023-03-19 07:07:57', '2023-03-19 07:07:57'),
(10, 'Is there a warranty on Schonheit products?', 'Yes, Schonheit offers a warranty on all products sold through their portal. The warranty period may vary depending on the product and the manufacturer. You can check the product page for more information on warranty.', 1, '2023-03-19 07:08:24', '2023-03-19 07:08:24'),
(12, 'Who can apply to become a Schonheit dealer?', 'Anyone can apply to become a Schonheit dealer, whether you\'re an individual or a business. However, we do have some criteria that applicants must meet, including a certain level of experience in sales and marketing, as well as a solid financial background.', 1, '2023-03-21 01:57:18', '2023-03-21 01:57:18'),
(13, 'Is there a fee to become a Schonheit dealer?', 'No, there is no fee to become a Schonheit dealer. However, we do have certain requirements that must be met, such as a minimum order quantity and a commitment to promoting our brand and products.', 1, '2023-03-21 01:58:01', '2023-03-21 01:58:01'),
(14, 'How long does it take to become a Schonheit dealer?', 'The time it takes to become a Schonheit dealer can vary depending on a number of factors, such as the completeness of your application and the availability of products in your area. We strive to process all applications as quickly as possible, and we will be in touch with you within a few business days of receiving your completed form.', 1, '2023-03-21 01:58:39', '2023-03-21 01:58:39'),
(15, 'What are the benefits of becoming a Schonheit dealer?', 'As an authorized dealer of Schonheit\'s products, you\'ll have access to a wide range of high-quality electrical appliances and other items, all at competitive prices. You\'ll also have the support of our experienced sales team, as well as marketing materials and other resources to help you promote our brand and products in your local area.', 1, '2023-03-21 01:59:15', '2023-03-21 01:59:15'),
(16, 'How do I fill out the dealership form?', 'The dealership form is available for download on our website. Simply click on the link to download the form, fill it out completely, and then email it to us at the address listed on the form. Be sure to provide all the requested information, including your contact details, business information (if applicable), and any relevant experience you may have in sales or marketing.', 1, '2023-03-21 01:59:51', '2023-03-21 01:59:51'),
(17, 'What happens after I submit the dealership form?', 'Once we receive your completed dealership form, our team will review it and get in touch with you within a few business days. If we have any additional questions or require further information, we\'ll reach out to you by phone or email. If your application is approved, we\'ll provide you with all the information you need to get started as a Schonheit dealer.', 1, '2023-03-21 02:00:56', '2023-03-21 02:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant', 'public/images/feature/bCIPwDOBIxkR3thUT4ISEr0gn0qPMFh3jYMYKibD.jpg', 'Delight your palate with gourmet delicacies and impeccable service', 1, '2024-01-08 01:04:09', '2024-09-20 13:06:28'),
(2, 'Swimming Pool', 'public/images/feature/dvRYiLGHhAmsD4gtkLVXFFUXDoNpVAYoP1CzYi0I.jpg', 'Refresh and rejuvenate in a crystal-clear oasis', 1, '2024-01-09 11:39:04', '2024-09-20 13:25:28'),
(3, 'Gymnasium', 'public/images/feature/fUHC92oS3Jl6fekE0zyVqZdqYNL2iwlhEnd7DShm.jpg', 'Maintain your fitness goals with state-of-the-art equipment', 1, '2024-01-09 11:39:37', '2024-09-20 13:25:40'),
(4, 'Resto Bar', 'public/images/feature/ryytG5thgKUx5LRD3Yk2cB0lnH1SjQG0YdTZEZyj.jpg', 'Savor exquisite cuisine and handcrafted cocktails in a stylish atmosphere', 1, '2024-08-03 06:48:21', '2024-09-20 13:26:03'),
(5, 'Banquet', 'public/images/feature/Vza9ONwLNb0UffAYLYkLbNNIcPEfom4KTkTfTxUV.jpg', 'Host unforgettable events in a grand and elegant setting', 1, '2024-09-13 11:51:59', '2024-09-20 13:26:19'),
(6, 'Adventure Park', 'public/images/feature/EBPqW8R4FuTwc1a2zo0Duq5f183NiUlVin6qLAO4.jpg', 'Embark on exhilarating adventures amidst lush greenery', 1, '2024-09-13 12:49:53', '2024-09-20 13:26:39'),
(7, 'Private Jacuzzi', 'public/images/feature/XSlvtjxEabEp3GY1tNyFVYzT4f3j1uJcrsMyPSsD.jpg', 'Indulge in serene bliss in your own personal sanctuary', 1, '2024-09-13 12:51:25', '2024-09-20 13:26:52'),
(8, 'Water Park', 'public/images/feature/5VTFW0UOaTgd3OefZtdPkM8kGF6qfxSQxhKhTaZA.jpg', 'Dive into a world of aquatic thrills and relaxation', 1, '2024-09-13 13:05:30', '2024-09-20 12:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `type`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Swimming Pool', 'public/images/gallery/E3PG2lCg1WwgfE1SwpT11uaSacEZjKAgkGMR7Flf.jpg', 'Gallery', NULL, 1, '2024-03-09 04:38:31', '2024-09-21 12:13:22'),
(2, 'Interior', 'public/images/gallery/sfGgp8tGdeQyWyuJh2KC9SJgaIDXiFkzwUfQjHRB.jpg', 'Gallery', NULL, 1, '2024-03-13 01:29:23', '2024-09-27 08:34:17'),
(3, 'Restro Bar', 'public/images/gallery/UpLK3TgQ2dXBq8ghf5tYqrvhiakKLFsqtUfRZyFF.jpg', 'Gallery', NULL, 1, '2024-03-13 01:32:18', '2024-09-27 08:35:02'),
(4, 'Cottage', 'public/images/gallery/ni5c56jWnlCrvJ9N5BuFYSWW72qD4oqyqxl0xlQK.jpg', 'Gallery', NULL, 1, '2024-03-13 01:32:41', '2024-09-27 08:33:25'),
(7, 'SPA', 'public/images/gallery/vPAOp3fuIOBUtsfVoKztfjWASk5WlXI5iDPqTTgj.jpg', 'Gallery', NULL, 1, '2024-08-03 06:45:10', '2024-09-27 08:35:19'),
(8, 'Gazebo', 'public/images/gallery/QW4ise5p9lRZkQJfLuj8ioAEFytYaeDR511gQj8b.jpg', 'Gallery', NULL, 1, '2024-09-13 12:12:31', '2024-09-27 08:35:35'),
(9, 'Anjna Hotels & Resorts', 'public/images/gallery/Z1imMk6sezOPtkRhF1xDX3cQelikoB6utqKgNtek.png', 'Brand', 'public/images/gallery/6WCfEjJ8bfEBobygbUMl14f6xSokZ9C0GcQvMnwI.pdf', 1, '2025-02-15 04:15:43', '2025-02-21 08:46:31'),
(15, 'Golden Pearl Hotels & Resorts', 'public/images/gallery/tOFywgwAqDbjrh43nuuSxt5XpIMcJSeOJEECgzG9.png', 'Brand', 'public/images/gallery/YHixVM38sRG2Ju5W70S49K9l9XJRrKpNbLPpiR5w.pdf', 1, '2025-02-21 08:28:47', '2025-02-21 08:45:27'),
(16, 'The Nature Nest Hotel & Resorts', 'public/images/gallery/7MvDNNkROTV1qFsw2NiAmYiRZHx3zDyqU1lNmWba.png', 'Brand', 'public/images/gallery/WpytlgC3Gt1WJWffDw2fAY8zOzyhGK0ZARIHo2Y4.pdf', 1, '2025-02-21 08:41:45', '2025-04-26 04:50:32'),
(17, 'Palm Island Hotels & Resorts', 'public/images/gallery/LA7g7gSH93iEWJYucljq8lZ1rMhQuyeevndSdfG5.png', 'Brand', 'public/images/gallery/pI8DzlAC85OJrjV3dVQzhz5DmSe4LHRp7IC5IFSI.pdf', 1, '2025-02-21 08:43:21', '2025-02-21 08:43:21');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_120553_create_admins_table', 1),
(6, '2022_10_06_120243_create_categories_table', 2),
(7, '2022_10_06_120343_create_sub_categories_table', 2),
(8, '2022_10_07_064854_create_products_table', 3),
(9, '2022_10_07_110340_create_sliders_table', 4),
(10, '2022_10_12_063040_create_contacts_table', 5),
(11, '2022_10_18_072555_create_blogs_table', 6),
(12, '2022_10_18_072646_create_blog_categories_table', 6),
(13, '2022_10_18_072555_create_services_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(20, 'bharatkumawat8099@gmail.com', '2023-02-07 06:04:24', '2023-02-07 06:04:24'),
(22, 'sandeeptirole1998@gmail.com', '2023-02-21 05:55:32', '2023-02-21 05:55:32'),
(23, 'kishanraaz87@gmail.com', '2023-08-18 06:19:31', '2023-08-18 06:19:31'),
(24, 'vfdfd@gmail.com', '2024-08-01 06:55:11', '2024-08-01 06:55:11'),
(25, 'fthryjrjyr@trhtrh.jtrjtr', '2024-08-02 07:07:05', '2024-08-02 07:07:05');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', NULL, NULL),
(2, 'Staff', NULL, NULL),
(3, 'Role', NULL, NULL),
(4, 'Permission', NULL, NULL),
(5, 'Bussiness Setting', NULL, NULL),
(6, 'CMS setting', NULL, NULL),
(7, 'CMS Heading', NULL, NULL),
(8, 'Department & Service', NULL, NULL),
(9, 'Events', NULL, NULL),
(10, 'Visitor Hours', NULL, NULL),
(11, 'Doctors', NULL, NULL),
(12, 'Appointment Slots', NULL, NULL),
(13, 'Why Us', NULL, NULL),
(14, 'Gallery', NULL, NULL),
(15, 'Member', NULL, NULL),
(16, 'Contact Us', NULL, NULL),
(17, 'Career', NULL, NULL),
(18, 'Appointment', NULL, NULL),
(19, 'Slider', NULL, NULL),
(20, 'Clients', NULL, NULL),
(21, 'Testimonials', NULL, NULL),
(22, 'Community', NULL, NULL),
(23, 'FAQ\'s', NULL, NULL),
(24, 'SEO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `possition` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`, `possition`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\"]', 4, '2022-09-07 06:08:48', '2024-04-16 11:44:01'),
(3, 'Bloger', '[\"24\",\"20\",\"18\",\"16\",\"15\",\"11\",\"8\",\"7\",\"5\",\"4\",\"3\",\"2\",\"1\"]', 4, '2023-03-01 04:56:53', '2023-03-01 05:06:21'),
(4, 'fgh', '[\"1\"]', 3, '2024-03-20 03:56:53', '2024-03-20 03:56:53'),
(5, 'Testing_Team', '[\"1\"]', 5, '2024-08-03 07:45:00', '2024-08-03 07:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` text,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page_name`, `banner`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'public/images/seo/2AcDerq0ihSATW4z60QOyY3AOs15PXD0t5ypYlzu.jpg', '', NULL, '', '2023-07-31 02:20:45', '2025-02-08 05:14:48'),
(2, 'About Us', NULL, '', NULL, '', '2023-07-31 23:44:29', '2024-03-15 03:52:04'),
(3, 'Services', NULL, '', NULL, 'Vision-Mission Keyword', '2023-08-01 00:15:27', '2023-08-01 00:15:27'),
(4, 'Blogs', NULL, '', NULL, 'Why-Us Keyword', '2023-08-01 00:16:35', '2023-08-01 00:16:35'),
(5, 'Contact Us', NULL, 'Contact Us', 'Board Memebr Description', 'Board Memebr Keyword', '2023-08-01 00:19:17', '2024-02-16 23:41:05'),
(6, 'Privacy Policy', NULL, 'Privacy Policy', 'Privacy Policy Description', 'Privacy Policy Keyword', '2023-08-01 00:20:36', '2023-08-01 00:20:36'),
(7, 'Term & Conditions', NULL, 'Terms & Conditions', 'Term & Conditions Description', 'Term & Conditions Keyword', '2023-08-01 00:21:13', '2024-02-16 23:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `banner` longtext,
  `subtitle` text,
  `icon` varchar(255) DEFAULT NULL,
  `description` text,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_desc` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `banner`, `subtitle`, `icon`, `description`, `facebook`, `instagram`, `twiter`, `linkedin`, `slug`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Palm Island Hotels & Resorts', '[\"public\\/images\\/services\\/kSxVs9BR515QzeYzbNVkKsAy1x57jLlcvNqT21E0.png\",\"public\\/images\\/services\\/g6rAbjNfY9FgjUOdPHqvK7b4uXr1PqC1h8yqkZZG.png\",\"public\\/images\\/services\\/cyRTn5SqMEhPEyJiLiYJuGXA9IVLnfO3S5KBOjrS.png\"]', 'India’s Only Maldives-Themed Resort', 'public/images/services/l4Lmrvrd3z8BVqlLbEqr6eLd1Blr5OX0YAUZPo2Z.png', '<p>Escape to a <strong>tropical paradise</strong> where luxury meets tranquility! At <strong>Palm Island Hotels &amp; Resorts</strong>, experience the <strong>authentic Maldives vibe</strong> with stunning <strong>private pool villas, serene farm stays, and a rejuvenating spa &amp; wellness center</strong>. Unwind in a <strong>Jacuzzi</strong>, take a dip in the <strong>swimming pool</strong>, and savor exquisite cuisine at our <strong>restaurant &amp; bar</strong>.</p>', 'https://www.facebook.com/profile.php?id=61561294060317', 'https://www.instagram.com/anjnaresort/', 'https://www.x-twiter.com', 'https://www.linkedin.com/', 'palm-island-hotels-resorts', 'Tropical Luxury Escape | Palm Island Hotels & Resorts', 'Palm Island Hotels, luxury resorts, private pool villas, Maldives-style stay, spa & wellness, tropical escape, farm stay, Jacuzzi, swimming pool, fine dining, resort & bar.', 'Experience the Maldives vibe at Palm Island Hotels & Resorts with private pool villas, serene farm stays, a rejuvenating spa, Jacuzzi, swimming pool, and fine dining. Book your tropical getaway today!', 1, '2024-02-09 05:12:05', '2025-02-24 02:08:51'),
(3, 'Anjna Hotels & Resorts', '[\"public\\/images\\/services\\/HVm8AYeRktdiogMlJpitBKWU7HVOPb9Vz6pTKFZX.png\",\"public\\/images\\/services\\/5OFEylC5IRGVyN8mmtpqSaESkkJaUowCnIwIazlA.png\",\"public\\/images\\/services\\/89Gvmqfu7tbBPCkpJ9W4wLyIduHnzjJuWu8cdMTR.png\",\"public\\/images\\/services\\/wVJWt0RKjdJY93FkxiWUnPUW4Wd11znizZwVoSlI.png\",\"public\\/images\\/services\\/xv0Af2VGI7l4mqjnu50bFRGRxwYFJOLsB9Ds6yk2.png\",\"public\\/images\\/services\\/eUlY30X4CKaAiZcwVkUqr0fpE7Pv7JNA9OvgXEB7.png\",\"public\\/images\\/services\\/qFrW69eCQDVBtcF8mPfbJbDdkC2rhlim2UIlCHlp.png\"]', 'India\'s 1st 5 Star Bali Themed Resort.', 'public/images/services/w0ZRzVWCuB4ufAGKjSFaIj8T4h1182QZuo0w0Fkl.webp', '<p>Welcome to <strong>Anjna Hotels &amp; Resorts</strong>, <strong>India’s first 5-star Bali-themed resort</strong>, where tropical elegance meets world-class luxury. Stay in <strong>private farm villas and cozy cottages</strong>, relax in a <strong>Jacuzzi</strong>, or take a dip in the <strong>swimming pool</strong>. Indulge in gourmet dining, unwind at our <strong>spa &amp; wellness center</strong>, and experience the serene beauty of Bali right here in India.</p>', 'https://www.facebook.com/profile.php?id=61561294060317', 'https://www.instagram.com/anjnaresort/', 'https://x.com/?lang=en&mx=2', 'https://www.linkedin.com/', 'anjna-hotels-resorts', 'Anjna Hotels & Resorts – India’s 1st 5-Star Bali-Themed Resort', 'Anjna Hotels & Resorts, India’s 1st 5-star Bali-themed resort, luxury resort in India, private farm villas, Bali-style cottages, Jacuzzi, swimming pool, spa & wellness, exotic retreats, tropical getaway, luxury vacation.', 'Escape to Anjna Hotels & Resorts, India’s first 5-star Bali-themed resort, featuring private farm villas, luxury cottages, a Jacuzzi, and a swimming pool. Your tropical paradise awaits!', 1, '2024-07-15 07:51:44', '2025-02-21 07:43:42'),
(4, 'Lotus Cottage', '[\"public\\/images\\/services\\/9YTQzUjK373NNdcBuSUh1dRkbv7UarY30feiN7Qw.jpg\"]', 'A Tranquil Retreat Inspired by Nature', 'public/images/services/zO9LmFEB5ZmL83iNLT69qWO2MRANZDqXmsbCT100.jpg', '<p>Lotus Cottage offers a harmonious blend of comfort and elegance, nestled amidst scenic beauty. Designed for relaxation, it features stylish interiors, cozy furnishings, and breathtaking views. Whether you\'re seeking a romantic escape or a peaceful retreat, Lotus Cottage provides the perfect setting for a rejuvenating stay, complete with warm hospitality and nature’s charm.</p>', 'https://www.facebook.com/profile.php?id=61561294060317', 'https://www.instagram.com/anjnaresort/', 'https://x.com/?lang=en&mx=2', 'https://www.linkedin.com/', 'lotus-cottage', 'Bamboo Breeze', 'Bamboo Breeze', 'Lotus Cottage offers a harmonious blend of comfort and elegance, nestled amidst scenic beauty. Designed for relaxation, it features stylish interiors, cozy furnishings, and breathtaking views. Whether you\'re seeking a romantic escape or a peaceful retreat, Lotus Cottage provides the perfect setting for a rejuvenating stay, complete with warm hospitality and nature’s charm.', 0, '2024-09-19 12:48:26', '2025-02-19 12:51:43'),
(5, 'The Nature Nest Hotel & Resorts', '[\"public\\/images\\/services\\/55OYab3N4zcanXZeiNRGaMvyjCgO0IzN0n4k9qnw.webp\",\"public\\/images\\/services\\/1VwSS5XOAl0059Tc0pVY2lpKm7HaftVGVkgypQ1z.webp\",\"public\\/images\\/services\\/I8zlvKhNxGpBQKy5s2fvFwBaaf6puUSM75j9IKVH.webp\",\"public\\/images\\/services\\/lW2J7IowGLQA1LdiDu8sCQ0KOrgNim9UjMLLx6VP.webp\",\"public\\/images\\/services\\/ZBbUEjnboanVMUybrdRZlI6xLHLcYcevUkJTOL0w.webp\",\"public\\/images\\/services\\/xO7m8NPrVM1P4P2TZRo649mDOa33ZgOF0u0FHxon.webp\",\"public\\/images\\/services\\/pMaG1xMokgLFtywgeJ7T0bnBEm40u5N9uwxYOY45.webp\",\"public\\/images\\/services\\/SqV38rwM1YuP1Vuem3erPmzDmSJFgjNEy9yHCe9F.webp\",\"public\\/images\\/services\\/kQK6FWtJUyBB94O9pOzZiRpRFWM4pwNCz5tF1M2s.webp\"]', 'A Luxurious Escape Amidst Nature – Private Farm Villas, Cottages & More!', 'public/images/services/6fh93RRsgaCyHesDmJH56LL50oSBDdtlIJBUR7jT.png', '<p>Welcome to <strong>The Nature Nest Hotel &amp; Resorts</strong>, a serene retreat nestled in nature’s lap. Experience luxury with <strong>private farm villas, cozy cottages, a refreshing swimming pool, and relaxing Jacuzzi</strong>. Whether you seek a peaceful getaway or an adventurous escape, our resort offers the perfect blend of comfort and tranquility. Indulge in gourmet dining, unwind in nature, and create unforgettable memories.</p>', 'https://www.facebook.com/profile.php?id=61561294060317', 'https://www.instagram.com/thenaturenestresort/', 'https://x.com/?lang=en', 'https://www.linkedin.com/', 'the-nature-nest-hotel-resorts', 'The Nature Nest Hotel & Resorts – Luxury Cottages & Private Farm Villas', 'The Nature Nest Hotel & Resorts, luxury resort in Mhow, private farm villas, cottages in Mhow, Jacuzzi, swimming pool, best nature retreat near Indore, luxury stays, eco-friendly resorts, peaceful getaway.', 'Experience luxury at The Nature Nest Hotel & Resorts with private farm villas, cozy cottages, a Jacuzzi, and a swimming pool. A perfect getaway in nature’s embrace.', 1, '2024-09-19 12:49:51', '2025-02-21 08:08:54'),
(6, 'Slice of Bali dipped in heavenly luxury(Iris Cottage)', '[\"public\\/images\\/services\\/UEgiuydgfvJ7NYTOgj7KmkBeTyBapEdBvZxzWaRz.jpg\"]', '.Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 'public/images/services/Izn9bAQpcPoTcmC2WAXIJLzrpyyGQe84c6GQjYBU.jpg', '<p>Experience the epitome of luxury in our overwater cottages, designed to evoke the spirit of a tropical island paradise. Relax on your private deck, take a dip in your plunge pool, and enjoy the serene ambiance of your Maldives-inspired retreat. Our cottages offer spacious interiors, private Jacuzzis, modern amenities, and breathtaking views of the surrounding landscape.</p>', NULL, NULL, NULL, NULL, 'slice-of-bali-dipped-in-heavenly-luxuryiris-cottage', 'Bamboo Breeze', 'Bamboo Breeze', 'Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 0, '2024-09-19 12:50:47', '2024-09-27 14:49:39'),
(7, 'Slice of Bali dipped in heavenly luxury(Orchid Cottage)', '[\"public\\/images\\/services\\/NHC7IC1Hr75886X0JnTj6i3wkptfajMT49Ly6grI.jpg\"]', '.Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 'public/images/services/q14OKMxuPgTtVnERuhBRck7m2Gv7YkZciwhIgKZx.jpg', '<p>Experience the epitome of luxury in our overwater cottages, designed to evoke the spirit of a tropical island paradise. Relax on your private deck, take a dip in your plunge pool, and enjoy the serene ambiance of your Maldives-inspired retreat. Our cottages offer spacious interiors, private Jacuzzis, modern amenities, and breathtaking views of the surrounding landscape.</p>', NULL, NULL, NULL, NULL, 'slice-of-bali-dipped-in-heavenly-luxuryorchid-cottage', 'Bamboo Breeze', 'Bamboo Breeze', 'Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 0, '2024-09-19 12:51:11', '2024-09-27 14:50:08'),
(8, 'Slice of Bali dipped in heavenly luxury(Daisy Cottage)', '[\"public\\/images\\/services\\/8eofiCngtChBqORgTRd5OZzkhiLBSOPRp7mKcPYg.jpg\"]', '.Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 'public/images/services/LotG5DTaB2r6TYqvbWKUrXj9DarDGVN43xynEiBz.jpg', '<p>Experience the epitome of luxury in our overwater cottages, designed to evoke the spirit of a tropical island paradise. Relax on your private deck, take a dip in your plunge pool, and enjoy the serene ambiance of your Maldives-inspired retreat. Our cottages offer spacious interiors, private Jacuzzis, modern amenities, and breathtaking views of the surrounding landscape.</p>', NULL, NULL, NULL, NULL, 'slice-of-bali-dipped-in-heavenly-luxurydaisy-cottage', 'Bamboo Breeze', 'Bamboo Breeze', 'Indulge in the ultimate luxury with our overwater cottages, featuring private pools and stunning views.', 0, '2024-09-19 12:54:49', '2024-09-27 14:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Golden Pearl Hotels & Resorts', 'Where Tropical Charm Meets World-Class Luxury', 'public/images/slider/lZMwPre1FmHNEGfdRLgw5RUUbSMIx37THYe43Iok.png', 'https://goldenpearlresorts.com/about-us', 1, '2024-03-07 11:45:56', '2025-02-21 04:30:39'),
(15, 'Palm Island Hotels & Resorts', 'India\'s Only Maldives Themed Resort', 'public/images/slider/DdvwE6mvKYf055V19rQg6WjPhAh84tgjzVmXoR8M.png', 'https://palmisland.in/', 1, '2025-02-08 05:06:24', '2025-02-20 06:10:34'),
(16, 'The Nature Nest Hotel & Resorts', 'Experience Tranquility Amidst Nature’s Embrace', 'public/images/slider/T4BFtTzEamJ78slmtFnHpOhyGjLPF0ScmpFERBOz.png', 'https://thenaturenestresort.com/en', 1, '2025-02-10 06:23:14', '2025-02-20 04:27:21'),
(17, 'Anjna Hotels & Resorts', 'Luxury Redefined, Hospitality Rediscovored', 'public/images/slider/ZPQ4hpsHEF3vuaMbRnd3pj8f3IEHVXGidOU3LT9u.webp', 'https://anjnahotels.com/', 1, '2025-02-10 06:23:40', '2025-02-20 04:04:49'),
(18, 'Unwind In Paradise', 'Exclusive Experiences Crafted For Ultimate Relaxation', 'public/images/slider/6IgslNnSxEmO8qF3cTBZxeMnFyp7lVzppLbWYsyN.jpg', 'https://palmisland.in/', 1, '2025-02-10 06:24:16', '2025-02-20 04:43:01'),
(19, 'Palm Island Hotels & Resorts', 'India\'s Only Maldives Themed Resort', 'public/images/slider/JIKKcaEjuZO0YSpVi8qCyrrfQluC06bERYdeQXIC.png', 'https://palmisland.in/', 0, '2025-02-10 06:26:45', '2025-02-20 04:33:51'),
(20, 'Luxury with a Bali Twist', 'The Anjna Hotels & Resorts is your oasis of relaxation, offering a tranquil escape in the lap of scenic mountains.', NULL, 'https://anjnahotels.com/', 1, '2025-02-20 01:50:29', '2025-02-20 06:15:11'),
(21, 'tets', 'Palm Island Resort', 'public/images/slider/Pc4cJxnUTahk0AhLrKJH7weaP5HoedzRNMCUN5Mw.png', 'https://www.youtube.com/embed/Inm451w2gWMdsvdvsdvkkkk', 0, '2025-02-20 03:02:06', '2025-02-20 03:21:42'),
(22, 'Slice of Bali dipped in heavenly luxury(Rose Cottage) isme', 'Slice of Bali dipped in heavenly luxury(Rose Cottage) isme', 'public/images/slider/D5r9mLIonRRIkv7ar9U2mTidriHo7urLOdvkiL26.png', 'https://www.youtube.com/embed/Inm451w2gWMdsvdvsdvkkkk', 0, '2025-02-20 03:07:54', '2025-02-20 03:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `comment` text,
  `star` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `designation`, `comment`, `star`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sandeep Patel', 'public/images/testimonial/BbeoXVLUZmCfNBaNChmPNG2cV8G9sn91Ghbtk6uO.jpg', 'Project Manager', 'I am writing this testimonial to express my profound gratitude and admiration for the exceptional experience I had at Mooxy. Enrolling in Computer Hardware has been nothing short of transformative, and I am eager to share my positive impressions.', 4, 1, '2023-08-17 07:00:30', '2024-03-13 01:23:34'),
(2, 'Ayush Kumar Pathak', 'public/images/testimonial/EwELY3PwH7JgNqZoRQoZ0vKvO9LRSK2UNJKs9Yjx.jpg', 'Full Stack Developer', 'From the outset, the faculty at Mooxy demonstrated a level of dedication and expertise that surpassed my expectations. The instructors not only possessed a deep understanding of their respective fields but also had an incredible ability to convey complex concepts in an accessible manner. Their passion for teaching was evident in every lecture, making the learning process engaging and enjoyable.', 4, 1, '2023-08-18 04:52:02', '2024-03-13 01:24:50'),
(3, 'Kishan Kumar', 'public/images/testimonial/7r8nr5MoC9fAPnvdFBAoIZu6Qwlx9Jhn86ThW0bj.jpg', 'Backend Developer (PHP Laravel)', 'The curriculum itself was meticulously designed to provide a comprehensive understanding of the subject matter, blending theoretical knowledge with practical applications. The hands-on approach, coupled with real-world case studies, allowed me to develop a well-rounded skill set that I can confidently apply in professional settings.', 3, 1, '2024-01-10 08:58:41', '2024-03-13 01:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Kishan Kumar', 'kishan@gmail.com', '7024291385', NULL, '$2y$10$ORGYlXLsU8dahZIiNdB5BuY7D9uVw.1lqjul0qrJ3ONfES1SaE55a', NULL, '2022-12-10 03:49:55', '2022-12-10 03:49:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `is_admin` (`is_admin`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_headings`
--
ALTER TABLE `cms_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_headings`
--
ALTER TABLE `cms_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`is_admin`) REFERENCES `roles` (`id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
