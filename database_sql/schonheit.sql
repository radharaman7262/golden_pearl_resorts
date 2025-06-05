-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2023 at 11:25 AM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schonheit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` bigint(20) NOT NULL,
  `master_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `employee_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `is_admin`, `master_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'CEID#4', 'Gyanendu Krishna', '9939205574', 'admin@gmail.com', NULL, '$2y$10$giJGn/9DCDtOPRq7brVTqe9Tz8V6qftjqsNoS0kUP5MM83dMjAVV2', 2, '4', 1, NULL, '2023-02-21 06:09:39', '2023-03-01 07:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `staff_id`, `title`, `image`, `banner`, `date`, `short_description`, `long_description`, `status`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(7, 1, 4, 'Digital Market Helping Business To Grow', 'public/images/blog/4TTBUJHL2aDyR4wkrVmvZm6UR9pVxbdaF4F8B2c1.jpg', 'public/images/blog/Yu6lSSGcheYrPpJf7vMamTNDN2Z5sZ6p9O4BNFM3.jpg', '2023-02-27', '<p>In today&#39;s digital age, every new brand needs a strong digital marketing strategy to succeed. This is especially true for brands in the electrical appliances industry, where competition is fierce and customers have a plethora of options to choose from.</p>', '<p>In today&#39;s digital age, every new brand needs a strong digital marketing strategy to succeed. This is especially true for brands in the electrical appliances industry, where competition is fierce and customers have a plethora of options to choose from. At our new brand, our mission is to provide high-quality electrical appliances that are not only functional but also aesthetically pleasing.</p>\r\n\r\n<p>To achieve our mission and stand out from the crowd, we are utilizing the latest digital marketing techniques, including FMCG (Fast Moving Consumer Goods) strategies. This means we are focusing on rapid product development, efficient supply chain management, and innovative advertising to quickly capture market share.</p>\r\n\r\n<p>One key aspect of our digital marketing strategy is to create an online presence that reflects our brand&#39;s unique personality and values. This includes creating engaging social media content, building a visually appealing website, and utilizing targeted advertising to reach our ideal audience.</p>\r\n\r\n<p>We are also leveraging the power of search engine optimization (SEO) to ensure that our brand and products are easily discoverable by potential customers. By optimizing our website and content for relevant keywords, such as &quot;electrical appliances,&quot; &quot;quality,&quot; and &quot;innovative,&quot; we are increasing our chances of ranking highly in search engine results and attracting more organic traffic to our website.</p>\r\n\r\n<p>Overall, our digital marketing strategy is centered around our mission to provide high-quality, innovative electrical appliances to our customers. By utilizing FMCG strategies, building a strong online presence, and optimizing our content for relevant keywords, we are confident that our brand will stand out and succeed in the competitive world of electrical appliances.</p>', 1, 'digital-market-helping-business-to-grow', 'Blog Details', 'Blog description', 'Blog keyword', '2023-02-27 02:24:53', '2023-07-31 04:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 1, 'digital-marketing', '2022-12-17 05:07:51', '2023-07-31 03:46:23'),
(2, 'E-Commerce', 1, 'e-commerce', '2022-12-17 05:08:07', '2023-07-31 03:46:23'),
(3, 'Application Development', 1, 'application-development', '2022-12-17 05:08:17', '2023-07-31 03:46:23'),
(5, 'FMEG', 1, 'fmeg', '2023-02-27 02:10:30', '2023-07-31 03:46:23'),
(6, 'New Brand', 1, 'new-brand', '2023-02-27 02:11:14', '2023-07-31 03:46:23'),
(7, 'dfdf', 1, 'dfdf', '2023-03-01 05:01:56', '2023-07-31 03:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'SCHONHEIT', 'public/images/brand/x3L3gNqHvm8bhkSIZF4YMjhpUAUCMhOVNuAhPUki.jpg', 1, '2022-12-06 05:50:00', '2023-02-23 07:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `fav_icon` varchar(255) NOT NULL,
  `header_logo` varchar(255) NOT NULL,
  `footer_logo` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no1` varchar(255) NOT NULL,
  `phone_no2` varchar(255) NOT NULL,
  `email_id2` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `footer_description` varchar(255) NOT NULL,
  `copyright` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `image_baner` varchar(255) NOT NULL,
  `term_condition` text NOT NULL,
  `privacy` text NOT NULL,
  `map` text NOT NULL,
  `mission` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `vission` text NOT NULL,
  `image2` varchar(255) NOT NULL,
  `banner1` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `banner2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `catlog` varchar(255) NOT NULL,
  `appointment` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `site_name`, `fav_icon`, `header_logo`, `footer_logo`, `email_id`, `phone_no1`, `phone_no2`, `email_id2`, `address`, `footer_description`, `copyright`, `facebook`, `instagram`, `linkedin`, `twitter`, `about_image`, `short_description`, `long_description`, `image_baner`, `term_condition`, `privacy`, `map`, `mission`, `image1`, `vission`, `image2`, `banner1`, `link1`, `banner2`, `link2`, `youtube_link`, `catlog`, `appointment`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Schonheit', 'public/images/business_setting/pdt5Bjhb367nRAlf7QOdyBgHTaAXs9DfpNQX3u61.png', 'public/images/business_setting/52CMCX4Ca0lD6yzPortG8qRUz1Djf5DP0fo9UV4R.png', 'public/images/business_setting/uikRCkhe0d6VQizTkUwVnnSfUthR83D5YMXVa9fc.png', 'gyanendu@schonheit.in', '+91 8451984507', '+91 8451984510', 'gyanendu@schonheit.in', '<p>Corporate Office - 301A, Kaveri Building, Behind Holiday Inn Hotel, Sakinaka, Mumbai -400072, India.</p>', '<p>Schonheit India Limited is a Fast Moving Electrical Goods (FMEG) Company with an extremely strong global presence, thanks to our philosophy of Make in India, extensive distribution network , and world class quality.</p>', 'Copyright © 2023 Schonheit. All Rights Reserved.', 'https://www.facebook.com/Schonheit-102637379409571', 'https://instagram.com/schonheit_ghar_ki_shobha?igshid=YmMyMTA2M2Y=', 'https://www.linkedin.com/in/gyanendu-krishna-8b3185263/', 'https://twitter.com', 'public/images/business_setting/WNhXtAYD8MmhX0e3xAUr5Mbw9PRhds35k7MGfryp.jpg', '<p><strong>Making It In India,Taking It To The World</strong></p>\r\n\r\n<p>Welcome to Schonheit, your ultimate online destination for all your electrical appliance needs! At Schonheit, we take pride in our state-of-the-art infrastructure that enables us to deliver top-quality products to our customers.Our commitment to quality is evident in our products, which makes us the most reliable among the renowned brands in the industry.</p>\r\n\r\n<p>We are more than just an online portal for electrical appliances. We are your trusted partner in providing you with top-quality products, timely delivery, and excellent customer service. <strong>Thank you</strong> for choosing Schonheit! <a href=\"https://schonheit.in/about\">Read more...</a></p>', '<h3>&nbsp;</h3>\r\n\r\n<p><big>W</big>elcome to Schonheit, your ultimate online destination for all your electrical appliance needs! At Schonheit, we take pride in our state-of-the-art infrastructure that enables us to deliver top-quality products to our customers. Our commitment to quality is evident in our products, which makes us the most reliable among the renowned brands in the industry.</p>\r\n\r\n<p>We understand the importance of timely delivery, which is why we strive to ensure that your orders are delivered to you as quickly as possible. Our logistics team works round the clock to ensure that your orders are dispatched on time and delivered to you promptly.</p>\r\n\r\n<p>At Schonheit, we are committed to providing our customers with the best possible customer service experience. Our 24x7 customer support team is always available to answer your queries and help you in any way possible. We take pride in our team of professionals who are well-equipped to handle any customer service issue that may arise.</p>\r\n\r\n<p>Currently, we are operating in Bihar, Jharkhand, Odisha, and West Bengal. However, we have plans to expand our operations to other regions soon, including Delhi. Our goal is to make Schonheit a household name across the country, and we are committed to achieving this by providing our customers with the best possible service and products.</p>\r\n\r\n<p>We are more than just an online portal for electrical appliances. We are your trusted partner in providing you with top-quality products, timely delivery, and excellent customer service. <strong>Thank you</strong> for choosing Schonheit!</p>', 'public/images/business_setting/TSIcEx213PjEWQjfdVfXnmFNrpYlyARLRMqKWIAr.jpg', '<p><strong>Our Terms &amp; Conditions</strong></p>\r\n\r\n<p>At <a href=\"https://schonheit.in\">Schonheit</a>, we understand the importance of protecting the privacy of our customers and visitors to our website. This Privacy Policy explains how we collect, use, and protect your personal information.</p>\r\n\r\n<p><strong>Information We Collect</strong></p>\r\n\r\n<p>We may collect the following types of personal information when you visit our website or make a purchase:</p>\r\n\r\n<ul>\r\n	<li>Contact information, such as your name, email address, phone number, and shipping address.</li>\r\n	<li>Payment information, such as your credit card number, expiration date, and billing address.</li>\r\n	<li>Information about your purchases and product preferences.</li>\r\n	<li>Information you provide when you participate in surveys, contests, or promotions.</li>\r\n</ul>\r\n\r\n<p><strong>How We Use Your Information</strong></p>\r\n\r\n<p>We may use your personal information for the following purposes:</p>\r\n\r\n<ul>\r\n	<li>To process and fulfill your orders.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>To communicate with you about your orders, including sending order confirmations, tracking information, and updates.</li>\r\n	<li>To personalize your experience on our website and to recommend products that may interest you.</li>\r\n	<li>To improve our website and services, including analyzing customer behavior and preferences.</li>\r\n	<li>To send you marketing communications about our products and services, unless you opt out of receiving such communications.</li>\r\n</ul>\r\n\r\n<p><strong>How We Protect Your Informations</strong></p>\r\n\r\n<p>We use industry-standard security measures to protect your personal information, including encryption, firewalls, and secure socket layer (SSL) technology. We also limit access to your personal information to only those employees and contractors who need to know the information in order to fulfill your orders or provide services to you.</p>\r\n\r\n<p><strong>Disclosure Of Your Informations</strong></p>\r\n\r\n<p>We may share your personal information with third-party service providers who help us operate our business, such as payment processors and shipping companies. We may also share your information with law enforcement or other government agencies in response to a subpoena, court order, or other legal request.</p>\r\n\r\n<p><strong>Your Choices</strong></p>\r\n\r\n<p>You can opt out of receiving marketing communications from us by following the unsubscribe instructions in our emails. You can also update your contact information or request that we delete your personal information by contacting us at <a href=\"mailto:gyanendu@schonheit.in\">click here</a>.</p>\r\n\r\n<p><strong>Changes To This Policy</strong></p>\r\n\r\n<p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will post the updated Privacy Policy on our website and indicate the date of the most recent update.</p>\r\n\r\n<p><strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions or concerns about our Privacy Policy or our practices, please contact us at:</p>\r\n\r\n<p><a href=\"mailto:gyanendu@schonheit.in\">gyanendu@schonheit.in</a></p>\r\n\r\n<p>Corporate Office - 301A, Kaveri Building,</p>\r\n\r\n<p>Behind Holiday Inn Hotel,</p>\r\n\r\n<p>Sakinaka, Mumbai -400072, India.</p>\r\n\r\n<p>&nbsp;</p>', '<p><strong>Privacy Principles For Schonheit</strong></p>\r\n\r\n<p>At Schonheit, we understand the importance of protecting the privacy of our customers and visitors to our website. This Privacy Policy explains how we collect, use, and protect your personal information.</p>\r\n\r\n<p><strong>Information We Collect</strong></p>\r\n\r\n<p>We may collect the following types of personal information when you visit our website or make a purchase:</p>\r\n\r\n<ul>\r\n	<li>Contact information, such as your name, email address, phone number, and shipping address.</li>\r\n	<li>Payment information, such as your credit card number, expiration date, and billing address.</li>\r\n	<li>Information about your purchases and product preferences.</li>\r\n	<li>Information you provide when you participate in surveys, contests, or promotions.</li>\r\n</ul>\r\n\r\n<p><strong>How We Use Your Information</strong></p>\r\n\r\n<p>We may use your personal information for the following purposes:</p>\r\n\r\n<ul>\r\n	<li>To process and fulfill your orders.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n	<li>To communicate with you about your orders, including sending order confirmations, tracking information, and updates.</li>\r\n	<li>To personalize your experience on our website and to recommend products that may interest you.</li>\r\n	<li>To improve our website and services, including analyzing customer behavior and preferences.</li>\r\n	<li>To send you marketing communications about our products and services, unless you opt out of receiving such communications.</li>\r\n</ul>\r\n\r\n<p><strong>How We Protect Your Information</strong></p>\r\n\r\n<p>We use industry-standard security measures to protect your personal information, including encryption, firewalls, and secure socket layer (SSL) technology. We also limit access to your personal information to only those employees and contractors who need to know the information in order to fulfill your orders or provide services to you.</p>\r\n\r\n<p><strong>Disclosure Of Your Information</strong></p>\r\n\r\n<p>We may share your personal information with third-party service providers who help us operate our business, such as payment processors and shipping companies. We may also share your information with law enforcement or other government agencies in response to a subpoena, court order, or other legal request.</p>\r\n\r\n<p><strong>Your Choices</strong></p>\r\n\r\n<p>You can opt out of receiving marketing communications from us by following the unsubscribe instructions in our emails. You can also update your contact information or request that we delete your personal information by contacting us at <a href=\"mailto:gyanendu@schonheit.in\">click here</a>.</p>\r\n\r\n<p><strong>Changes To This Policy</strong></p>\r\n\r\n<p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will post the updated Privacy Policy on our website and indicate the date of the most recent update.</p>\r\n\r\n<p><strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions or concerns about our Privacy Policy or our practices, please contact us at:</p>\r\n\r\n<p><a href=\"mailto:gyanendu@schonheit.in\">gyanendu@schonheit.in</a></p>\r\n\r\n<p>Corporate Office - 301A, Kaveri Building,</p>\r\n\r\n<p>Behind Holiday Inn Hotel,</p>\r\n\r\n<p>Sakinaka, Mumbai -400072, India.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.1193715218046!2d72.88280952318132!3d19.10241844572482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c871e3693929%3A0x6586cd17cb55e9dd!2sKaveri%20Building%2C%20Kajupada%20Pipeline%20Rd%2C%20near%20Holiday%20Inn%20Mumbai%20International%20Airport%2C%20an%20IHG%20Hotel%2C%20Safed%20Pul%2C%20Saki%20Naka%2C%20Mumbai%2C%20Maharashtra%20400072!5e0!3m2!1sen!2sin!4v1677499221619!5m2!1sen!2sin\" width=\"100%\" height=\"300px\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<p>Our mission is to build a household brand of smart, advanced, and innovative technologies. We are committed to striving for the best customer experience with our products, solutions, and exceptional marketing expertise.</p>', 'public/images/business_setting/0aEzJ7ofSr4TVn3pxWM62D3hhxF2ClVTlV3XR65L.jpg', '<p>Quality and excellent customer service are core to our business ethics. We do not leave any stone unturned when it comes to providing our customers with ultimate customer satisfaction.</p>', 'public/images/business_setting/haljzZOS7P0nGhL2UoNxk7K88cjG2tHcMGTDAbyw.jpg', 'public/images/business_setting/qDZSZYM3OlxmzINZjzAYm1RwpNiaAgoMCx3QdVw6.jpg', 'https://schonheit.in/', 'public/images/business_setting/lG7I6PzIpOopfTQDHkZWFQQOnHONb4i4rVSxNWkg.jpg', 'https://schonheit.in/', 'https://www.youtube.com/embed/tgbNymZ7vqY', 'public/images/business_setting/Schonheit_Brochure.pdf', 'public/images/business_setting/Schonheit_Distributorship_Form.pdf', 'Schonheit', 'Schonheit, Ghar ki shobha, fmeg,Fmeg', 'Schonheit', '2022-09-01 06:17:49', '2023-03-09 07:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `popular` tinyint(1) DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `popular`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(4, 'BLDC Fan', 'public/images/category/JRbD098D70ilv8vDYqJlsdKX6C4ovIYW5KrKSkrm.jpg', 1, 1, 'bldc-fan', 'Category', 'Category description', 'Category keyword', '2022-10-06 07:28:40', '2023-07-31 04:58:26'),
(8, 'Fan', 'public/images/category/GL8ZbFFpDhqJlkoxZwAgtazG6fZJQgOOZQDvDv7i.jpg', 1, 1, 'fan', 'Category', 'Category description', 'Category keyword', '2022-10-07 01:14:39', '2023-07-31 04:28:14'),
(13, 'Television', 'public/images/category/swietH21pRf9aF5ysWVPtLXUNjfLzT8uw1PLN5oh.jpg', 1, 0, 'television', 'Category', 'Category description', 'Category keyword', '2022-12-05 02:05:26', '2023-07-31 04:28:14'),
(14, 'Infrared Cooktop', 'public/images/category/wOLpJxUxEfMiYmisyCmkeW0aDDZjJrCXAKKKpQw9.jpg', 1, 0, 'infrared-cooktop', 'Category', 'Category description', 'Category keyword', '2022-12-05 02:05:33', '2023-07-31 04:28:14'),
(15, 'Mixer Grinder', 'public/images/category/hT05l9EzEJ4jDSi52VeaPaU71WKMCSZRh4ctb204.jpg', 1, 1, 'mixer-grinder', 'Category', 'Category description', 'Category keyword', '2023-02-21 05:57:05', '2023-07-31 04:28:14'),
(16, 'Iron', 'public/images/category/uGEcbgPyBjo0oiRdlgYLtM5tnmKnPr8cPYxaAYhy.jpg', 1, 1, 'iron', 'Category', 'Category description', 'Category keyword', '2023-02-21 06:38:25', '2023-07-31 04:28:14'),
(17, 'Street Light', 'public/images/category/SrbGk2LCU8NzSUSJgCs1gT44MW7U3LvARZIS4PaQ.jpg', 1, 1, 'street-light', 'Category', 'Category description', 'Category keyword', '2023-02-21 06:39:29', '2023-07-31 04:28:14'),
(18, 'Geyser', 'public/images/category/lGTYwaDlKrXwYkUyFx4rIJR6mDQnDH0JtMRxZQuV.jpg', 1, 0, 'geyser', 'Category', 'Category description', 'Category keyword', '2023-02-23 10:24:32', '2023-07-31 04:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `product_id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, NULL, 'Kishan Kumar', 'kishanraaz87@gmail.com', '07024291385', 'sdf', 'g', '2023-02-04 00:18:17', '2023-02-04 00:18:17'),
(6, NULL, 'Abhishek Kumar', 'abhisheksoni42041@gmail.com', '06207486864', 'ffds', 'sdfsd', '2023-02-07 06:04:44', '2023-02-07 06:04:44'),
(7, 31, 'jkguy yugyuu', 'ranjan@gmail.com', '08416545984', 'lkjhgf', 'fghj', '2023-02-15 04:04:28', '2023-02-15 04:04:28'),
(8, 13, 'Sandeep Patel', 'sandeeppatel245570@gmail.com', '9516161756', '200', 'i want this product', '2023-02-21 05:52:23', '2023-02-21 05:52:23'),
(9, NULL, 'Sandeep Patel', 'sandeeppatel245570@gmail.com', '9516161756', 'testing', 'hello', '2023-02-21 05:54:51', '2023-02-21 05:54:51'),
(10, NULL, 'RichardTap', 'no.reply.MichaelPeeters@gmail.com', '86934367188', 'Do you want an economical and innovative advertising solution?', 'Hey there! schonheit.in \r\n \r\nDid you know that it is possible to send business offer lawfully? We propose a secure and legal way of sending commercial offers through feedback forms. You can find these feedback forms on a lot of sites. \r\nWhen such proposals are sent, no personal data is used, and messages are sent to specially designed forms to receive messages and appeals. Contact Forms messages are usually considered to be important, so they don\'t tend to be sent to spam. \r\nWe want you to trу our service without anу cost! \r\nWe will provide up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis letter is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-04-01 06:48:05', '2023-04-01 06:48:05'),
(11, NULL, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', '88889318714', 'Business Funding', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', '2023-04-13 07:16:47', '2023-04-13 07:16:47'),
(12, NULL, 'Trista Gerow', 'gerow.trista@googlemail.com', '0374 3730400', 'Boost Your SEO with Powerful Backlinks for just $35!', 'Dear,\r\n\r\nI recently visited your website and noticed that it could benefit from some SEO backlinks to improve visibility and increase traffic. As an expert in SEO link building, I would like to offer my services to help you achieve this goal.\r\n\r\nMy SEO link building services use free sources such as articles, social networks, forum profiles, wikis, and more. When executed correctly, these backlinks can be incredibly effective and can save you a significant amount of money in link building costs.\r\n\r\nIf you\'re interested in learning more about how my services can help you, please click on this link: https://cutt.ly/seo-backlinks.\r\n\r\nBest regards,\r\nAlim Al Razi', '2023-04-16 04:37:05', '2023-04-16 04:37:05'),
(13, NULL, 'Mike WifKinson', 'no-replyannoub@gmail.com', '82471984318', 'Improve local visibility for schonheit.in', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike WifKinson\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2023-04-21 01:45:34', '2023-04-21 01:45:34'),
(14, NULL, 'Mike Thomas', 'no-replyannoub@gmail.com', '82512615156', 'AI Monthly SEO plans', 'Howdy \r\n \r\nI have just took a look on your SEO for  schonheit.in for its SEO metrics and saw that your website could use a boost. \r\n \r\nWe will improve your ranks organically and safely, using state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Thomas', '2023-04-29 21:37:11', '2023-04-29 21:37:11'),
(15, NULL, 'Jane Gillette', 'gillette.jane59@gmail.com', '88 133 83 14', 'Get DR 40 Backlinks From High-Traffic Websites For Only $1', 'Dear Webmaster,\r\n\r\nI hope this email finds you well. I am reaching out to offer you a unique opportunity to get DR 40 backlinks from high-traffic websites for only $1.\r\n\r\nBacklinks are crucial to the success of any website, and a DR 40 backlink from high-traffic websites can give your site a significant boost in search engine rankings. With our offer, you can get high-quality backlink from DR 40+ websites for only $1, making it an affordable way to improve your SEO.\r\n\r\nWe have a massive inventory of websites (140k+) from where you can choose your desired websites to get links from by using different filters such as Monthly traffic (Ahref), Domain Rating (Ahrem/MOz) and 40 other quality metrics.\r\n\r\nIf you\'re interested in taking advantage of this offer, Sign Up FREE here: https://cutt.ly/guest-post-backlinks\r\n\r\nBest regards\r\nJane', '2023-05-01 01:09:05', '2023-05-01 01:09:05'),
(16, NULL, 'Kevin Johnso', 'helloprofectmedia@gmail.com', '86124736685', 'Reminder. Be careful.', 'Be careful, it\'s dangerous to work with them. These are scammers, neither one, they do not fulfill their obligations. \r\n \r\nGeorge - helloprofectmedia@gmail.com - http://www.profectmedia.uk/ \r\nKevin Johnson -  tbformleads@gmail.com  - myaafva@gmail.com \r\nSusan Gilroy - susangilroy.haftoo@gmail.com -  https://globalbrands.clickfunnels.com/optin1hnqzip6g \r\nhttp://www.tungstenbody.com/ \r\nMichael - hivemailers@gmail.com - https://calendly.com/msinclair-myaa/myaa-overview \r\nJeremy - teammyaa2022@gmail.com - https://calendly.com/jeremymyaa/30min?month=2023-05 \r\nMichael - teammyaa2022@gmail.com - https://calendly.com/msinclair-myaa/myaa-overview?month=2023-05 \r\nTiara - tiara.promo2022@gmail.com - https://calendly.com/tiara-82/30min?month=2023-05 \r\nJeffery Brown - jefferybrown.betatester1@gmail.com - https://funding.thenationalsmallbusinessdirectory.com/dac-funding \r\nMichael - tbformleads@gmail.com -  http://www.erpgoldgroup.com/appointments/ \r\nApril Yaseen - aarilyaseen@gmail.com', '2023-05-01 21:15:55', '2023-05-01 21:15:55'),
(17, NULL, 'Mike Neal', 'no-replyannoub@gmail.com', '83599196176', 'Semrush Audit and fixes for schonheit.in', 'Howdy \r\n \r\nI have just checked  schonheit.in for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you are offering or selling, having a poor optimized site, full of bugs and errors, will never help your ranks. \r\n \r\nLet us fix your wordpress site errors today and get your ranks reach their full potential \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/wordpress-seo-audit-and-fix-service/ \r\n \r\n \r\nRegards \r\nMike Neal', '2023-05-02 08:33:34', '2023-05-02 08:33:34'),
(18, NULL, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', '85727512378', 'Capital Business Funding', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', '2023-05-02 17:52:09', '2023-05-02 17:52:09'),
(19, NULL, 'Mike Green', 'no-replyannoub@gmail.com', '88896975153', 'Domain Authority of your schonheit.in', 'Hi there \r\n \r\nJust checked your schonheit.in in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Semrush DA is now possible \r\nhttps://www.monkeydigital.co/semrush-da/ \r\n \r\nThanks and regards \r\nMike Green', '2023-05-09 18:50:51', '2023-05-09 18:50:51'),
(20, NULL, 'Mike Holiday', 'no-replyannoub@gmail.com', '83386553642', 'NEW: Semrush Backlinks', 'Hi there \r\n \r\nThis is Mike Holiday\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your schonheit.in SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Holiday\r\n \r\nmike@strictlydigital.net', '2023-05-13 01:39:08', '2023-05-13 01:39:08'),
(21, NULL, 'JosephPeamp', 'no.reply.MikaelMartinez@gmail.com', '85179617174', 'Are you wanting to acquire more customers for your business?', 'Good day! schonheit.in \r\n \r\nDid you know that it is possible to send proposal completely lawfully? We are making available a novel method of submitting proposals via feedback forms. There is no shortage of websites that feature such forms. \r\nWhen such business offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals safely and securely. Messages that are sent by using Feedback Forms are not considered to be spam, as they are viewed as important. \r\nWe offer you the chance to try out our service for free. \r\nWe will provide up to 50,000 messages to you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-05-15 23:00:17', '2023-05-15 23:00:17'),
(22, NULL, 'Mike Addington', 'no-replyannoub@gmail.com', '89827381947', 'Improve local visibility for schonheit.in', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Addington\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2023-05-18 17:04:49', '2023-05-18 17:04:49'),
(23, NULL, 'Mike Sheldon', 'no-replyannoub@gmail.com', '84924267682', 'AI Monthly SEO plans', 'Good Day \r\n \r\nI have just analyzed  schonheit.in for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will increase your ranks organically and safely, using state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Sheldon', '2023-05-28 08:23:26', '2023-05-28 08:23:26'),
(24, NULL, 'Mike Arthurs', 'no-replyannoub@gmail.com', '81631962945', 'Semrush Audit and fixes for schonheit.in', 'Good Day \r\n \r\nI have just checked  schonheit.in for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you are offering or selling, having a poor optimized site, full of bugs and errors, will never help your ranks. \r\n \r\nLet us fix your wordpress site errors today and get your ranks reach their full potential \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/wordpress-seo-audit-and-fix-service/ \r\n \r\n \r\nRegards \r\nMike Arthurs', '2023-06-02 01:03:47', '2023-06-02 01:03:47'),
(25, NULL, 'Mike Oliver', 'no-replyannoub@gmail.com', '82181257876', 'Domain Authority of your schonheit.in', 'Hi there \r\n \r\nJust checked your schonheit.in in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Semrush DA is now possible \r\nhttps://www.monkeydigital.co/semrush-da/ \r\n \r\nThanks and regards \r\nMike Oliver', '2023-06-06 13:50:58', '2023-06-06 13:50:58'),
(26, NULL, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', '85534782425', 'Capital Business Funding', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', '2023-06-06 14:18:57', '2023-06-06 14:18:57'),
(27, NULL, 'Mike Brown', 'no-replyannoub@gmail.com', '82564257328', 'NEW: Semrush Backlinks', 'Greetings \r\n \r\nThis is Mike Brown\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your schonheit.in SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Brown\r\n \r\nmike@strictlydigital.net', '2023-06-09 21:08:27', '2023-06-09 21:08:27'),
(28, NULL, 'Susan Karsh', 'susankarsh.myaa@gmail.com', '84453121256', 'Quick question', 'Hello, \r\n \r\nI was on your site today and I wanted to see if you would be open to getting a FREE 14-Day trial of our AI Agents, like ChatGPT, but much better. Plus, our plans start at just $1 per month if you decide to continue. \r\n \r\nOur AI Agents Can: \r\n \r\n•	Assist your team with tasks, projects and research, which will increase productivity. \r\n•	Crush to-do list by writing - ads, code, emails, content, sales copy, contracts & more. \r\n•	Give you time to focus on important things instead of handling mundane tasks. \r\n•	Save you time, save you money and make your team much more effective. \r\n \r\n... and much, MUCH more! \r\n \r\nWatch our video here and see how we can help: https://promo.myaa.com/ \r\n \r\nOur clients are saving 20%- 30% on operational costs each month by using our AI Agents to handle hundreds of tasks. \r\n \r\nClaim your FREE AI Agents Now, before this offer ends. Get started here: https://promo.myaa.com/ \r\n \r\nBest, \r\n \r\nSusan Karsh', '2023-06-11 14:42:46', '2023-06-11 14:42:46'),
(29, NULL, 'JosephJeach', 'support1@sparkweb.vip', '84788763511', 'Customized software services for you', 'We are a software outsourcing company from China, if you have any software customization or it technical service needs can contact us, if you need a long-term technical team to develop and maintain different projects for you, we will be your best choice, we will cooperate with your time zone, 7 * 24 hours to provide technical support, you only need to provide the overall requirements of the project, we are currently working on the basis of We are currently working on the customization and maintenance of CRM for large clients based on MT4&5 forex trading platform, meanwhile we have developed order following platform and trading operation scripts, we can solve your forex trading platform script needs and technical support, we have a complete set of development system and excellent technical talents. If you are interested in this project, we will provide you with a test account for your reference.our email is :  contact@sparktechnologys.com', '2023-06-13 18:35:14', '2023-06-13 18:35:14'),
(30, NULL, 'Mike Black', 'no-replyannoub@gmail.com', '81618492325', 'Improve local visibility for schonheit.in', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Black\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2023-06-18 02:09:41', '2023-06-18 02:09:41'),
(31, 69, 'Ibrahim Sayed', 'marketplace.geeks@gmail.com', '8879688166', 'Smart LED TV enquiry', 'Looking for Smart LED tv, Refurbished or new', '2023-06-18 21:47:49', '2023-06-18 21:47:49'),
(32, NULL, 'Susan', 'susankarsh.myaa@gmail.com', '85864371556', 'Quick question', 'Hello, \r\n \r\nA little over a week ago, I sent a message that I was on your site, and wanted to see if you would be open to getting a FREE 14-Day trial of our AI Agents, like ChatGPT, but with loads of enhancements and hundreds of skillful AI agents that can be hand-picked to cater to your specific requirements. \r\n \r\nPlus, if you decide to continue after the trial, we offer a wide range of cost-effective plans, to meet any budget. \r\n \r\nBut the best news is, our last survey shows our clients saving 20%- 30% on operational costs by using our AI agents. \r\n \r\nCheck us out: https://bit.ly/myaa_promo \r\n \r\nOur AI Agents Can: \r\n \r\n•	Assist you with tasks, projects and research, which will save you time and money. \r\n•	Crush to-do list by writing - ads, code, emails, content, sales copy, contracts & more. \r\n•	Give you time to focus on important things instead of mundane tasks. \r\n \r\n... and much more! \r\n \r\nWatch our video: https://bit.ly/myaa_promo \r\n \r\nClaim your FREE AI Agents before this offer ends: https://bit.ly/myaa_promo \r\n \r\nBest, \r\n \r\nSusan', '2023-06-22 14:39:45', '2023-06-22 14:39:45'),
(33, NULL, 'Mike Gilmore', 'no-replyannoub@gmail.com', '85992989547', 'Whitehat SEO for schonheit.in', 'Hello, \r\n \r\nI have recently reviewed the schonheit.in for the ranking keywords and have discovered that your website could benefit from an enhancement. \r\n \r\nWe\'ll boost your standings naturally and securely, employing only the most up-to-date, white-hat techniques, while also providing regular updates and exceptional assistance. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/seo-expert-services/ \r\n \r\n \r\nRegards \r\nMike Gilmore\r\n \r\nHilkom Digital SEO Experts', '2023-06-24 10:32:20', '2023-06-24 10:32:20'),
(34, NULL, 'Mike Scott', 'no-replyannoub@gmail.com', '83249526746', 'Semrush Audit and fixes for schonheit.in', 'Hi there, \r\n \r\nI have recently conducted an analysis of schonheit.in for onsite errors and discovered that your website presents several issues that require attention. \r\n \r\nRegardless of the product or service you are offering or selling, possessing a site that is inadequately optimized and rife with errors and bugs will not aid in boosting your rankings. \r\n \r\nLet us fix your WordPress website problems today and improve your search engine rankings. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/wordpress-seo-audit-and-fix-service/ \r\n \r\n \r\nRegards \r\nMike Scott', '2023-06-27 22:08:42', '2023-06-27 22:08:42'),
(35, NULL, 'Hamud Zayed Ali', 'projectdept@kanzalshamsprojectmgt.com', '82934412583', 'Project Loan Funding – LOAN', 'Greetings, \r\n \r\nIt\'s a pleasure to connect with you, My name is Hamud Zayed Ali, am an investment consultant with RSL-Project Management Service C0, I have been mandated by the company to source for investment opportunities and companies seeking for funding, business loans, for its project(s). Do you have any investment or project that is seeking for capital to fund it? \r\n \r\nOur Investments financing focus is on: \r\n \r\nSeed Capital, Early-Stage, Start-Up Ventures, , Brokerage, Private Finance, Renewable Energy Project, Commercial Real Estate, Blockchain, Technology, Telecommunication, Infrastructure, Agriculture, Animal Breeding, Hospitality, Healthcare, Oil/Gas/Refinery. Application reserved for business executives and companies with proven business records in search of funding for expansion or forcapital investments.. \r\n \r\nKindly contact me for further details. \r\n \r\nawait your return e.mail soonest. \r\n \r\nRegards \r\n \r\nDr. Hamud Zayed Ali \r\n \r\nMIDDLE EAST DEBT LOAN FINANCE CONSULTING \r\nAddress: 72469 Jahra Road Shuwaikh Industrial, Kuwait \r\nTel: +96550422388 \r\nEmail: rsl.fudiciary@debtloanfinanceconsultant.com', '2023-06-27 23:27:46', '2023-06-27 23:27:46'),
(36, NULL, 'Robertcoate', 'alfredegov@gmail.com', '83974848973', 'Hallo  i am wrote about   the prices', 'Hej, jeg ønskede at kende din pris.', '2023-07-02 13:19:04', '2023-07-02 13:19:04'),
(37, NULL, 'Mike Carter', 'mikeannoub@gmail.com', '85158394353', 'NEW: Semrush Backlinks', 'Hi there \r\n \r\nThis is Mike Carter\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your schonheit.in SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Carter\r\n \r\nmike@strictlydigital.net', '2023-07-04 15:14:36', '2023-07-04 15:14:36'),
(38, NULL, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', '85571491386', 'Capital Business Funding', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', '2023-07-05 20:30:48', '2023-07-05 20:30:48'),
(39, NULL, 'WilsonPeday', 'mailbox@lheo.net', '85369421389', 'Earn Recurring Income', 'Earn recurring income by sharing your advice, content or service offers and get a coffee (get paid) from your readers, supporters. \r\nJoin us here: https://offeracoffee/user/register \r\nsome tips or content from our members: \r\nhttps://offeracoffee.com/tips/details/japan/83 \r\nhttps://offeracoffee.com/tips/details/travel-tips/84 \r\nhttps://offeracoffee.com/tips/details/how-to-fix-a-green-pool/70', '2023-07-06 09:51:46', '2023-07-06 09:51:46'),
(40, NULL, 'Mike Peacock', 'mikeUnpalipant@gmail.com', '81325763943', 'Domain Authority of your schonheit.in', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Peacock', '2023-07-08 07:54:48', '2023-07-08 07:54:48'),
(41, NULL, 'Dilal Ahmed', 'ahmedilal1965@gmail.com', '87364147345', 'Get back to me soon.', 'Dear Friend, \r\n \r\nI have a matter that requires your urgent attention , kindly write me on below email for further discuss. \r\ndilalahmed1965@gmail.com', '2023-07-11 10:35:33', '2023-07-11 10:35:33'),
(42, NULL, 'Nam Hendon', 'nam.hendon@outlook.com', '46', 'Boost Your SEO with Powerful Backlinks for just $5!', 'Dear,\r\n\r\nI recently visited your website and noticed that it could benefit from some SEO backlinks to improve visibility and increase traffic. As an expert in SEO link building, I would like to offer my services to help you achieve this goal.\r\n\r\nMy SEO link building services use free sources such as articles, social networks, forum profiles, wikis, and more. These backlinks can be incredibly effective and can save you a significant amount of money in link building costs.\r\n\r\nIf you\'re interested in learning more, please click on this link: https://cutt.ly/basic-seo-backlinks.\r\n\r\nBest regards,\r\nNam', '2023-07-16 11:41:09', '2023-07-16 11:41:09'),
(43, NULL, 'Mike Parkinson', 'mikepeendToundAnnoub@gmail.com', '89348351837', 'Improve local visibility for schonheit.in', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Parkinson\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/', '2023-07-16 12:17:02', '2023-07-16 12:17:02'),
(44, NULL, 'Mike Ford', 'mikeHeileAmivove@gmail.com', '81992264121', 'FREE fast ranks for schonheit.in', 'Hi there \r\n \r\nJust checked your schonheit.in backlink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Ford\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', '2023-07-18 12:49:47', '2023-07-18 12:49:47'),
(45, NULL, 'Elif A.', 'walter.creason@hotmail.com', '40-89-38-56', 'Hire A Social Media Manager', 'Do you know that 87% of customers visit a business\'s social media profiles before visiting a store or contacting them? \r\n\r\nManaging social media is time-consuming and a drain. Not only do you need to create posts, publish them, track the stats, and respond to comments, but you also need to ensure that your social media feed looks good across all channels.\r\n\r\nDon\'t fret - just put us in charge! We\'ll take care of all your social media needs. We\'ll get you more likes, boost engagement and keep customers coming back for more.\r\n\r\nWe manage the following platforms:\r\n\r\n-Instagram\r\n-Facebook\r\n-Pinterest \r\n-Twitter \r\n-LinkedIn \r\n\r\nIf you are interested in taking your social media presence to the next level, please feel free to reach me directly at https://cutt.ly/social-media-managr\r\n\r\nBest Regards,\r\nElif A', '2023-07-19 12:17:00', '2023-07-19 12:17:00'),
(46, NULL, 'Martin Jose Barreiro', 'barreiromartin36@gmail.com', '86714386189', 'Business Understanding', 'Hello \r\nMy name is Br.Martin Jose Barreiro, I am a Lawyer and I pratices here in Madrid Spain.  I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death. \r\nHowever I am reaching out to you once again because after going through your profile, I strongly believe that you will be in a better position to execute this business transaction with me. \r\nI suggest after the transaction, we donate 5% of the money to charity organizations while the remaining 95% is shared equally between us. \r\nIf you are interested to proceed with me, kindly respond to me via this email  legalmj@barieroabogados.com for more detail. \r\nThis transaction is 100% risk free and I look forward to your response. \r\nYours sincerely \r\nMartin Jose Barreiro,, \r\nLawyer \r\nPhone: +34 661 220 756 \r\nE-mail:  legalmj@barieroabogados.com \r\nWeb:  http://www.barreiroabogado.com/', '2023-07-21 17:37:28', '2023-07-21 17:37:28'),
(47, NULL, 'Robertcoate', 'alfredegov@gmail.com', '82595717726', 'Aloha,   write about   the price', 'Xin chào, tôi muốn biết giá của bạn.', '2023-07-25 23:29:01', '2023-07-25 23:29:01'),
(48, NULL, 'Peter Green', 'peterWetPiode@gmail.com', '88945282767', 'Google Autocomplete Marketing Breakthrough', 'Hello schonheit.in Owner. \r\n \r\nAre you looking to boost your business’ visibility on the internet as well as reach even more prospective clients? Being included in Google Autocomplete can enhance your company\'s branding, reputation, as well as targeting, causing boosted website web traffic as well as revenue. \r\n \r\nPlease go here https://www.digital-x-press.com/autosuggest/ to find how your business can take advantage of Google Autocomplete and enhance your sales potential. \r\n \r\n \r\nThank you \r\n \r\nPeter Green\r\nDigital X Press SEO Agency', '2023-07-28 09:28:01', '2023-07-28 09:28:01'),
(49, NULL, 'Mike Morrison', 'mikeWetPiode@gmail.com', '81776257319', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Morrison\r\n \r\nMonkey Digital', '2023-08-01 11:49:52', '2023-08-01 11:49:52'),
(50, NULL, 'Mike Murphy', 'mikeUnpalipant@gmail.com', '84887213862', 'Domain Authority of your schonheit.in', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Murphy', '2023-08-01 12:09:49', '2023-08-01 12:09:49'),
(51, NULL, 'Mike Osborne', 'mikeannoub@gmail.com', '85194223471', 'NEW: Semrush Backlinks', 'Good Day \r\n \r\nThis is Mike Osborne\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your schonheit.in SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Osborne\r\n \r\nmike@strictlydigital.net', '2023-08-06 08:51:10', '2023-08-06 08:51:10'),
(52, NULL, 'JosephPeamp', 'no.reply.JosephBrown@gmail.com', '85456493272', 'We guarantee that your emails will be sent.', 'Good morning! schonheit.in \r\n \r\nDid you know that it is possible to send commercial offer entirely legal? We provide a new legal way of sending letters through feedback forms. Such feedback forms can be seen on a plethora of webpages. \r\nWhen such proposals are sent, no personal data is used and messages are directed to specially designed forms in order to receive messages and appeals. Messages sent via Feedback Forms are unlikely to get into spam, as they are viewed as important. \r\nWe are giving you the chance to experience our service without any cost. \r\nOn your behalf, we can deliver up to 50,000 messages. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-08-06 14:14:37', '2023-08-06 14:14:37'),
(53, NULL, 'Mike Hawkins', 'mikepeendToundAnnoub@gmail.com', '83229756457', 'Improve local visibility for schonheit.in', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Hawkins\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/', '2023-08-07 16:23:31', '2023-08-07 16:23:31'),
(54, NULL, 'Willis Dellit', 'dellit.willis@gmail.com', '95', 'Hello schonheit.in Admin!', 'Submit your website to our free business directory and start getting more traffic. Check out: http://freewebsitesubmission.12com.xyz/', '2023-08-08 21:21:35', '2023-08-08 21:21:35'),
(55, NULL, 'Van Gurt', 'info@financial-group.org', '85258117489', 'Quick Question On Partnerships', 'Hello, \r\nWe hope this letter finds you in good shape. \r\n \r\nAre you available for an important conversation regarding your business investment and partnership? Send us an email to vangurt@financial-group.org for more details. \r\n \r\nRegards, \r\nMr. Van Gurt \r\nvangurt@financial-group.org', '2023-08-13 20:29:45', '2023-08-13 20:29:45'),
(56, NULL, 'Robertcoate', 'alfredegov@gmail.com', '83922413422', 'Hello, i am wrote about your the price', 'Hola, volia saber el seu preu.', '2023-08-14 11:31:10', '2023-08-14 11:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is Schonheit?', 'Schonheit is an online portal in India that offers a wide range of electrical appliances such as Fans, , washing machines, televisions, IR-Cook-top and more.', 1, '2022-12-17 02:36:14', '2023-03-19 07:02:41'),
(2, 'How can I purchase products on Schonheit?', 'You can purchase products on Schonheit by visiting their website, selecting the product you want to purchase, and adding it to your cart. You can then proceed to checkout and make payment using one of the available payment options.', 1, '2022-12-17 02:37:31', '2023-03-19 07:03:34'),
(3, 'What payment options are available on Schonheit?', 'Schonheit offers various payment options including credit/debit card, net banking, and UPI.', 1, '2023-02-14 03:39:17', '2023-03-19 07:04:16'),
(4, 'Is it safe to make online payments on Schonheit?', 'Yes, Schonheit uses secure payment gateways to ensure that all transactions are safe and secure.', 1, '2023-03-19 07:04:54', '2023-03-19 07:04:54'),
(5, 'Does Schonheit offer free delivery?', 'Yes, Schonheit offers free delivery on all orders above a certain amount. The minimum order amount may vary from time to time.', 1, '2023-03-19 07:05:28', '2023-03-19 07:05:28'),
(6, 'What is the return policy of Schonheit?', 'Schonheit offers a hassle-free return policy. If you receive a damaged or defective product, you can initiate a return within a certain period of time and get a replacement or a refund.', 1, '2023-03-19 07:05:54', '2023-03-19 07:05:54'),
(7, 'Can I track my order on Schonheit?', 'Yes, you can track your order on Schonheit by logging in to your account and checking the order status.', 1, '2023-03-19 07:06:21', '2023-03-19 07:06:21'),
(8, 'Does Schonheit offer installation services?', 'Yes, Schonheit offers installation services for certain products such as air conditioners and washing machines. You can check the product page for more information on installation services.', 1, '2023-03-19 07:06:50', '2023-03-19 07:06:50'),
(9, 'How can I contact Schonheit customer support?', 'You can contact Schonheit customer support by emailing them at gyanendu@schonheit.in or by calling their customer care number. The customer care number may vary from time to time.', 1, '2023-03-19 07:07:57', '2023-03-19 07:07:57'),
(10, 'Is there a warranty on Schonheit products?', 'Yes, Schonheit offers a warranty on all products sold through their portal. The warranty period may vary depending on the product and the manufacturer. You can check the product page for more information on warranty.', 1, '2023-03-19 07:08:24', '2023-03-19 07:08:24'),
(11, 'What is the Schonheit dealership form for?', 'The dealership form is for individuals or businesses who are interested in becoming an authorized dealer of Schonheit\'s products. By filling out the form, you can apply to become an official reseller of Schonheit\'s electrical appliances and other products.', 1, '2023-03-21 01:56:14', '2023-03-21 01:56:14'),
(12, 'Who can apply to become a Schonheit dealer?', 'Anyone can apply to become a Schonheit dealer, whether you\'re an individual or a business. However, we do have some criteria that applicants must meet, including a certain level of experience in sales and marketing, as well as a solid financial background.', 1, '2023-03-21 01:57:18', '2023-03-21 01:57:18'),
(13, 'Is there a fee to become a Schonheit dealer?', 'No, there is no fee to become a Schonheit dealer. However, we do have certain requirements that must be met, such as a minimum order quantity and a commitment to promoting our brand and products.', 1, '2023-03-21 01:58:01', '2023-03-21 01:58:01'),
(14, 'How long does it take to become a Schonheit dealer?', 'The time it takes to become a Schonheit dealer can vary depending on a number of factors, such as the completeness of your application and the availability of products in your area. We strive to process all applications as quickly as possible, and we will be in touch with you within a few business days of receiving your completed form.', 1, '2023-03-21 01:58:39', '2023-03-21 01:58:39'),
(15, 'What are the benefits of becoming a Schonheit dealer?', 'As an authorized dealer of Schonheit\'s products, you\'ll have access to a wide range of high-quality electrical appliances and other items, all at competitive prices. You\'ll also have the support of our experienced sales team, as well as marketing materials and other resources to help you promote our brand and products in your local area.', 1, '2023-03-21 01:59:15', '2023-03-21 01:59:15'),
(16, 'How do I fill out the dealership form?', 'The dealership form is available for download on our website. Simply click on the link to download the form, fill it out completely, and then email it to us at the address listed on the form. Be sure to provide all the requested information, including your contact details, business information (if applicable), and any relevant experience you may have in sales or marketing.', 1, '2023-03-21 01:59:51', '2023-03-21 01:59:51'),
(17, 'What happens after I submit the dealership form?', 'Once we receive your completed dealership form, our team will review it and get in touch with you within a few business days. If we have any additional questions or require further information, we\'ll reach out to you by phone or email. If your application is approved, we\'ll provide you with all the information you need to get started as a Schonheit dealer.', 1, '2023-03-21 02:00:56', '2023-03-21 02:00:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(20, 'bharatkumawat8099@gmail.com', '2023-02-07 06:04:24', '2023-02-07 06:04:24'),
(22, 'sandeeptirole1998@gmail.com', '2023-02-21 05:55:32', '2023-02-21 05:55:32');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', NULL, NULL),
(2, 'role managment', NULL, NULL),
(3, 'staff', NULL, NULL),
(4, 'staff add', NULL, NULL),
(5, 'staff edit', NULL, NULL),
(6, 'staff delete', NULL, NULL),
(7, 'role', NULL, NULL),
(8, 'role add', NULL, NULL),
(9, 'role edit', NULL, NULL),
(10, 'role delete', NULL, NULL),
(11, 'permission', NULL, NULL),
(12, 'permission add', NULL, NULL),
(13, 'permission edit', NULL, NULL),
(14, 'permission delete', NULL, NULL),
(15, 'setting management', NULL, NULL),
(16, 'bussiness setting', NULL, NULL),
(17, 'bussiness setting update', NULL, NULL),
(18, 'term condition', NULL, NULL),
(19, 'term condition update', NULL, NULL),
(20, 'slider', NULL, NULL),
(21, 'slider add', NULL, NULL),
(22, 'slider edit', NULL, NULL),
(23, 'slider delete', NULL, NULL),
(24, 'product management', NULL, NULL),
(25, 'category', NULL, NULL),
(26, 'category add', NULL, NULL),
(27, 'category edit', NULL, NULL),
(28, 'category delete', NULL, NULL),
(29, 'sub category', NULL, NULL),
(30, 'sub category add', NULL, NULL),
(31, 'sub category edit', NULL, NULL),
(32, 'sub category delete', NULL, NULL),
(33, 'product', NULL, NULL),
(34, 'product add', NULL, NULL),
(35, 'product edit', NULL, NULL),
(36, 'product delete', NULL, NULL),
(37, 'brand', NULL, NULL),
(38, 'brand add', NULL, NULL),
(39, 'brand edit', NULL, NULL),
(40, 'brand delete', NULL, '0000-00-00 00:00:00'),
(41, 'enquiry', NULL, NULL),
(42, 'enquiry delete', NULL, NULL),
(43, 'faqs ', NULL, NULL),
(44, 'faqs add', NULL, NULL),
(45, 'faqs edit', NULL, NULL),
(46, 'faqs delete', NULL, NULL),
(47, 'blog management', NULL, NULL),
(48, 'blog category', NULL, NULL),
(49, 'blog category add', NULL, NULL),
(50, 'blog category edit', NULL, NULL),
(51, 'blog category delete', NULL, NULL),
(52, 'blog', NULL, NULL),
(53, 'blog add', NULL, NULL),
(54, 'blog edit', NULL, NULL),
(55, 'blog delete', NULL, NULL),
(56, 'contacts', NULL, NULL),
(57, 'contacts delete', NULL, NULL),
(58, 'news letter', NULL, NULL),
(59, 'news letter delete', NULL, NULL),
(60, 'user register', NULL, NULL),
(61, 'user register delete', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `subcategory_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `brand_info` text NOT NULL,
  `description` text NOT NULL,
  `flipkart_link` varchar(255) NOT NULL,
  `amazon_link` varchar(255) NOT NULL,
  `offer_price` varchar(255) NOT NULL,
  `mrp` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `technical_specifics` text DEFAULT NULL,
  `return_policy` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `best_seller` tinyint(1) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `title`, `image`, `brand_id`, `brand_info`, `description`, `flipkart_link`, `amazon_link`, `offer_price`, `mrp`, `warranty`, `technical_specifics`, `return_policy`, `status`, `best_seller`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(50, 4, 15, 'Ceiling Fan', '[\"public\\/images\\/product\\/1x526WoiDXBNVahZor5zMeacDmW1k5mLf0zxt9QM.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Construction : Aluminum Body</p>\r\n\r\n<p>Body Colours : White, Ivory &amp; Brown</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Winding : Copper Winding</p>\r\n\r\n<p>Sweep : 1200 mm</p>\r\n\r\n<p>Features : Smart mode,Reverse drive &amp; LED Lamp</p>\r\n\r\n<p>Protection : Surge,Overvoltage &amp; short circuit protection</p>\r\n\r\n<p>Speed : 7 speed with remote control</p>\r\n\r\n<p>&nbsp;</p>', 'BLDC Ceiling Fan', 'BLDC Ceiling Fan', '5500', '6500', '2', '<p>Input Voltage : 230 Volt</p>\r\n\r\n<p>Oprerating voltage range : 110 V - 290 V AC</p>\r\n\r\n<p>RPM : &gt;350</p>\r\n\r\n<p>Max, Input Power : 32 W</p>\r\n\r\n<p>Air throw : 210 - 230</p>\r\n\r\n<p>&nbsp;</p>', '<p>As per company norms</p>', 1, 1, 'ceiling-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 04:57:56', '2023-08-01 00:54:59'),
(53, 4, 9, 'Table Fan', '[\"public\\/images\\/product\\/78uo1t4c9GgfwEVvErNc2J4zAzMA91ejjb11rjFQ.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Sweep Size : 300 mm</p>\r\n\r\n<p>Construction : ABS/PP Body</p>\r\n\r\n<p>Body Colours : White, Grey &amp; Blue</p>\r\n\r\n<p>Speed : 3 speed regulation using piano switch</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Protection : Short curcuit, Thermal &amp; Overload Protection</p>\r\n\r\n<p>&nbsp;</p>', 'Table Fan', 'Table Fan', '1800', '2500', '2', '<p>Nominal Input Voltage : 230 Volt</p>\r\n\r\n<p>RPM : &gt;1500</p>\r\n\r\n<p>Operating Voltage Range : 110 V - 290 V AC</p>\r\n\r\n<p>Max.Input Power : 20 W</p>\r\n\r\n<p>Power Factor : 0.5</p>\r\n\r\n<p>Air throw : 30 CMM</p>\r\n\r\n<p>Winding : Copper Winding</p>', '<p>As per company norms</p>', 1, 1, 'table-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:07:30', '2023-08-01 00:54:59'),
(54, 4, 56, 'Exhaust Fan', '[\"public\\/images\\/product\\/Vias04BrEDyLad9sLgXqwIOVEMat4YEhGqgHbvv5.jpg\"]', 11, '<p>Exhaust Fan</p>', '<p>Exhaust Fan</p>', 'Exhaust Fan', 'Exhaust Fan', '2950', '3500', '2', '<p>Exhaust Fan</p>', '<p>Exhaust Fan</p>', 1, 1, 'exhaust-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:08:28', '2023-08-01 00:54:59'),
(55, 4, 68, 'Rechargeable Fan', '[\"public\\/images\\/product\\/IKbQD8VtIUROxDcCOhk5hKgRuprOdM3mVArcOiiE.jpg\"]', 11, '<p>Rechargeable Fan</p>', '<p>Rechargeable Fan</p>', 'Rechargeable Fan', 'Rechargeable Fan', '2850', '3800', '2', '<p>Rechargeable Fan</p>', '<p>Rechargeable Fan</p>', 1, 1, 'rechargeable-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:09:31', '2023-08-01 00:54:59'),
(56, 4, 55, 'Pedestal Fan', '[\"public\\/images\\/product\\/b6mWdjTuWd4s8ByIWNdSjLg5Egn0NdfG5sGP0hCr.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Sweep Size : 300 mm</p>\r\n\r\n<p>Construction : ABS/PP Body</p>\r\n\r\n<p>Body Colours : White, Grey &amp; Blue</p>\r\n\r\n<p>Speed : 3 speed regulation using piano switch</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Protection : Short curcuit, Thermal &amp; Overload Protection</p>', 'Pedestal Fan', 'Pedestal Fan', '2200', '3600', '2', '<p>Nominal Input Voltage : 230 Volt</p>\r\n\r\n<p>RPM : &gt;1500</p>\r\n\r\n<p>Operating Voltage Range : 110 V - 290 V AC</p>\r\n\r\n<p>Max.Input Power : 20 W</p>\r\n\r\n<p>Power Factor : 0.5</p>\r\n\r\n<p>Air throw : 30 CMM</p>\r\n\r\n<p>Winding : Copper Winding</p>', '<p>As per company Norms</p>', 1, 1, 'pedestal-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:14:37', '2023-08-01 00:54:59'),
(57, 8, 19, 'Ceiling Fan', '[\"public\\/images\\/product\\/wtKmdYHUoPSoqqWybR43HNztwGpPCa4pyQlAdYmg.jpg\"]', 11, '<p>Ceiling Fan</p>', '<p>Ceiling Fan</p>', 'Ceiling Fan', 'Ceiling Fan', '5500', '9500', '2', '<p>Ceiling Fan</p>', '<p>Ceiling Fan</p>', 1, 1, 'ceiling-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:17:15', '2023-08-01 00:54:59'),
(58, 8, 58, 'Exhaust Fan', '[\"public\\/images\\/product\\/zBQJAYleE0nYTSYgERWjTlMRBoOnFJNza3cO7GzL.jpg\"]', 11, '<p>Exhaust Fan</p>', '<p>Exhaust Fan</p>', 'Exhaust Fan', 'Exhaust Fan', '2450', '3650', '2', '<p>Exhaust Fan</p>', '<p>Exhaust Fan</p>', 1, 1, 'exhaust-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:18:37', '2023-08-01 00:54:59'),
(59, 8, 24, 'Pedestal Fan', '[\"public\\/images\\/product\\/AU0mfsZQfG71cG8krPyr7dTnncuiZnzpntia5etp.jpg\"]', 11, '<p>Schonheit Pvt .Ltd.</p>', '<p>Sweep Size : 300 mm</p>\r\n\r\n<p>Construction : ABS/PP Body</p>\r\n\r\n<p>Body Colours : White, Grey &amp; Blue</p>\r\n\r\n<p>Speed : 3 speed regulation using piano switch</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Protection : Short curcuit, Thermal &amp; Overload Protection</p>', 'Pedestal Fan', 'Pedestal Fan', '3500', '4500', '2', '<p>Nominal Input Voltage : 230 Volt</p>\r\n\r\n<p>RPM : &gt;1500</p>\r\n\r\n<p>Operating Voltage Range : 110 V - 290 V AC</p>\r\n\r\n<p>Max.Input Power : 20 W</p>\r\n\r\n<p>Power Factor : 0.5</p>\r\n\r\n<p>Air throw : 30 CMM</p>\r\n\r\n<p>Winding : Copper Winding</p>', '<p>As per company Norms</p>', 1, 1, 'pedestal-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:20:36', '2023-08-01 00:54:59'),
(60, 8, 23, 'Wall Fan', '[\"public\\/images\\/product\\/KATh46DSrVCxXEfenVdvNQWPSZbehNrOTJT6MPPK.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Sweep Size : 300 mm</p>\r\n\r\n<p>Construction : ABS/PP Body</p>\r\n\r\n<p>Body Colours : White, Grey &amp; Blue</p>\r\n\r\n<p>Speed : 3 speed regulation using piano switch</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Protection : Short curcuit, Thermal &amp; Overload Protection</p>', 'Table Fan', 'Wall Fan', '1800', '3500', '2', '<p>Nominal Input Voltage : 230 Volt</p>\r\n\r\n<p>RPM : &gt;1500</p>\r\n\r\n<p>Operating Voltage Range : 110 V - 290 V AC</p>\r\n\r\n<p>Max.Input Power : 20 W</p>\r\n\r\n<p>Power Factor : 0.5</p>\r\n\r\n<p>Air throw : 30 CMM</p>\r\n\r\n<p>Winding : Copper Winding</p>', '<p>As per company norms</p>', 1, 1, 'wall-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:23:46', '2023-08-01 00:54:59'),
(61, 8, 66, 'Rechargeable Fan', '[\"public\\/images\\/product\\/HbXEZbtBtHTYc91Kyt1x7l67uYeyIoGewGJxk9ob.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Sweep Size : 300 mm</p>\r\n\r\n<p>Construction : ABS/PP Body</p>\r\n\r\n<p>Body Colours : White &amp; Grey&nbsp;</p>\r\n\r\n<p>Speed : 3 speed regulation&nbsp;</p>\r\n\r\n<p>Motor : DC Brushless Motor</p>\r\n\r\n<p>Protection : Reverse Polarity &amp; Over Voltage Protection</p>\r\n\r\n<p>Battery Used : 12.8 V 6 AH LiFePo4</p>', 'Rechargeable Fan', 'Rechargeable Fan', '2400', '3500', '2', '<p>Nominal Operating Voltage : 12 V DC/230 Volt AC</p>\r\n\r\n<p>RPM : &gt;1350</p>\r\n\r\n<p>Operating Voltage Range : 10.5 V - 150V DC/110 V - 290 V AC</p>\r\n\r\n<p>Max.Input Power : 1 A / .052 A</p>\r\n\r\n<p>Power Factor : 0.5</p>\r\n\r\n<p>Air throw : 30 CMM</p>\r\n\r\n<p>Winding : Copper Winding</p>', '<p>As per company norms</p>', 1, 1, 'rechargeable-fan', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:24:53', '2023-08-01 00:54:59'),
(62, 14, 42, 'Cooktop', '[\"public\\/images\\/product\\/ZwLQwB4c2gi3rOV2q4NDwFsPcqcZmFgOy7jyhuNi.jpg\"]', 11, '<p>Cooktop</p>', '<p>Cooktop</p>', 'Cooktop', 'Cooktop', '2500', '3500', '2', '<p>Cooktop</p>', '<p>Cooktop</p>', 1, 1, 'cooktop', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:37:39', '2023-08-01 00:54:59'),
(63, 16, 59, 'Irons', '[\"public\\/images\\/product\\/3BPY8op3NoH2Iudwe6oAA4EtZFSLA8QqtqUUsa4Z.jpg\"]', 11, '<p>Irons</p>', '<p>Irons</p>', 'Irons', 'Irons', '700', '1500', '2', '<p>Irons</p>', '<p>Irons</p>', 1, 1, 'irons', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:38:50', '2023-08-01 00:54:59'),
(64, 15, 61, 'Juicer-Mixer', '[\"public\\/images\\/product\\/OehQMZBgBaPt4KibkELhFh4yQOQBQ33x7IDQ4h7l.jpg\"]', 11, '<p>Juicer-Mixer</p>', '<p>Juicer-Mixer</p>', 'Juicer-Mixer', 'Juicer-Mixer', '2600', '3850', '2', '<p>Juicer-Mixer</p>', '<p>Juicer-Mixer</p>', 1, 1, 'juicer-mixer', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:40:10', '2023-08-01 00:54:59'),
(65, 15, 60, 'Mixer', '[\"public\\/images\\/product\\/epqMQkslrlzVpqneHqit5R7OMO0rF9RoHv7erUKE.jpg\"]', 11, '<p>Mixer</p>', '<p>Mixer</p>', 'Mixer', 'Mixer', '2200', '3500', '2', '<p>Mixer</p>', '<p>Mixer</p>', 1, 1, 'mixer', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:41:27', '2023-08-01 00:54:59'),
(66, 17, 63, 'Solar Panels', '[\"public\\/images\\/product\\/GkqCaDWAlaIyaEwiIRAAECdYKhrjRIlDn6gYPQbr.jpg\"]', 11, '<p>Solar Panels</p>', '<p>Solar Panels</p>', 'Solar Panels', 'Solar Panels', '7000', '15000', '2', '<p>Solar Panels</p>', '<p>Solar Panels</p>', 1, 1, 'solar-panels', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 05:42:55', '2023-08-01 00:54:59'),
(68, 17, 64, 'Solar Inverter', '[\"public\\/images\\/product\\/iLx94bNlhqV9alIxh8vpiTEhOAAmjDxMmV78diDx.jpg\"]', 11, '<p>Solar Inverter</p>', '<p>Solar Inverter</p>', 'Solar Inverter', 'Solar Inverter', '15000', '21000', '2', '<p>Solar Inverter</p>', '<p>Solar Inverter</p>', 1, 1, 'solar-inverter', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 06:00:48', '2023-08-01 00:54:59'),
(69, 13, 37, 'Smart TV', '[\"public\\/images\\/product\\/DqExUjrAD8oYooDLbLU9tzAM4jR2A2qA3KNGYUbX.jpg\"]', 11, '<p>Smart TV</p>', '<p>Smart TV</p>', 'Smart TV', 'Smart TV', '7500', '10700', '2', '<p>Smart TV</p>', '<p>Smart TV</p>', 1, 1, 'smart-tv', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 06:28:42', '2023-08-01 00:54:59'),
(70, 13, 36, 'LED HD TV', '[\"public\\/images\\/product\\/CH9OLB6cEPkIYCe0U5KaBlN55pSERj2yNJqjCDPG.jpg\"]', 11, '<p>LED HD TV</p>', '<p>LED HD TV</p>', 'LED HD TV', 'LED HD TV', '5800', '9500', '2', '<p>LED HD TV</p>', '<p>LED HD TV</p>', 1, 1, 'led-hd-tv', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-27 07:08:31', '2023-08-01 00:54:59'),
(73, 18, 67, 'Instant Geyser', '[\"public\\/images\\/product\\/K3CU0UMf8tmxE97HQ9dLLVGfy1tl1WIiSctarwTm.jpg\"]', 11, '<p>&nbsp;Schonheit Pvt. Ltd.</p>', '<p>* Auto Touch Control</p>\r\n\r\n<p>* Easy Opration : Auto temperature setting &amp; favorite water temp record for next shower</p>\r\n\r\n<p>* Electric current leakage protection</p>\r\n\r\n<p>* Tempered glasspanel,LED digital display</p>\r\n\r\n<p>* High strength ABS housing</p>\r\n\r\n<p>* Stainless steel heating element</p>\r\n\r\n<p>* Fashion appearance &amp; unlimited supply hot water</p>\r\n\r\n<p>* Easy installation</p>\r\n\r\n<p>* Overheat &amp;dry - heating auto shut down system</p>\r\n\r\n<p>* Fault auto - detection technique,trouble code display</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'Instant Geyser', 'Instant Geyser', '8500', '12500', '2', '<p>Voltage : 220V- 240V</p>\r\n\r\n<p>Rated frequency : 50Hz</p>\r\n\r\n<p>Power: 5/6 KW</p>\r\n\r\n<p>Electric Current : 0- 40A</p>\r\n\r\n<p>Waterproof Degree : IPX4</p>\r\n\r\n<p>Capacity : Endless</p>\r\n\r\n<p>Rated water flow : 2 - 6 L/Min</p>\r\n\r\n<p>Maximum water temp :&nbsp; 55 degree Celcius</p>', '<p>As per company norms</p>', 1, 1, 'instant-geyser', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-28 01:08:34', '2023-08-01 00:54:59'),
(74, 17, 62, 'Street Light', '[\"public\\/images\\/product\\/fTXaoBS93yWeWkffCSvVQxDUjp0OP1hL0NagE31x.jpg\"]', 11, '<p>Schonheit</p>', '<p>Street Light</p>', 'Street Light', 'Street Light', '25500', '300000', '2', '<p>60 watt</p>\r\n\r\n<p>Inbuit Lithium Ion Battery</p>\r\n\r\n<p>inbuit solor panel</p>\r\n\r\n<p>With housing.</p>', '<p>Street Light</p>', 1, 1, 'street-light', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-02-28 01:17:33', '2023-08-01 00:54:59'),
(75, 17, 64, 'Solar UPS', '[\"public\\/images\\/product\\/PsuOSi5tdRNlqCL6aQ8Ig6f9kUJ7QuQ3bFe3ehOA.jpg\"]', 11, '<p>Schonheit Pvt.Ltd.</p>', '<p>Construction : CRCA Powder Coated Box</p>\r\n\r\n<p>Backup : 6 hours at battery fully charged condition on full load</p>\r\n\r\n<p>Protection : Reverse polarity , Deep discharge &amp; Over charge protections</p>\r\n\r\n<p>Ingress Protection : IP 21</p>\r\n\r\n<p>DC Loads : Inbuilt LED Light 2 W</p>\r\n\r\n<p>Battery : 12.8 V , 5Ah Li-ion</p>', 'Solar UPS', 'Solar UPS', '4500', '5500', '1 Year', '<p>Nominal Voltage : 12 V DC</p>\r\n\r\n<p>Charge Controller : 12 V , 3Amps</p>\r\n\r\n<p>Charge Controller Type : PWM</p>\r\n\r\n<p>SPV Module : 20 Wp</p>\r\n\r\n<p>Max Output Load : 12 V DC , 2 A</p>\r\n\r\n<p>Mobile Charging Unit : 5 V , 1 A USB Port Type</p>', '<p>As per company norms</p>', 1, 1, 'solar-ups', 'Product Details', 'Product Details description', 'Product Details keyword', '2023-03-01 07:37:40', '2023-08-01 00:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` text NOT NULL,
  `possition` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`, `possition`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', '[\"61\",\"60\",\"59\",\"58\",\"57\",\"56\",\"55\",\"54\",\"53\",\"52\",\"51\",\"50\",\"49\",\"48\",\"47\",\"46\",\"45\",\"44\",\"43\",\"42\",\"41\",\"40\",\"39\",\"38\",\"37\",\"36\",\"35\",\"34\",\"33\",\"32\",\"31\",\"30\",\"29\",\"28\",\"27\",\"26\",\"25\",\"24\",\"23\",\"22\",\"21\",\"20\",\"19\",\"18\",\"17\",\"16\",\"15\",\"14\",\"13\",\"12\",\"11\",\"10\",\"9\",\"8\",\"7\",\"6\",\"5\",\"4\",\"3\",\"2\",\"1\"]', 0, '2022-09-07 06:08:48', '2023-03-01 04:52:16'),
(3, 'Bloger', '[\"56\",\"54\",\"53\",\"52\",\"50\",\"49\",\"48\",\"47\",\"41\",\"33\",\"24\",\"20\",\"18\",\"16\",\"15\",\"11\",\"8\",\"7\",\"5\",\"4\",\"3\",\"2\",\"1\"]', 4, '2023-03-01 04:56:53', '2023-03-01 05:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page_name`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'home description', 'home  keyword', '2023-07-31 02:20:45', '2023-08-01 00:31:18'),
(2, 'About', 'About', 'About Description', 'About Keyword', '2023-07-31 23:44:29', '2023-07-31 23:44:29'),
(3, 'Blog', 'blog', 'Blog Discription', 'Blog Keyword', '2023-08-01 00:15:27', '2023-08-01 00:15:27'),
(4, 'Contact Us', 'Contact Us', 'Contact Us Description', 'Contact Us Keyword', '2023-08-01 00:16:35', '2023-08-01 00:16:35'),
(5, 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions Description', 'Terms & Conditions Keyword', '2023-08-01 00:19:17', '2023-08-01 00:19:17'),
(6, 'Privacy Policy', 'Privacy Policy', 'Privacy Policy Description', 'Privacy Policy Keyword', '2023-08-01 00:20:36', '2023-08-01 00:20:36'),
(7, 'FAQs', 'FAQs', 'FAQs Description', 'FAQs Keyword', '2023-08-01 00:21:13', '2023-08-01 00:21:13'),
(8, 'Product', 'Product', 'Product Description', 'Product Keyword', '2023-08-01 00:50:12', '2023-08-01 00:50:12'),
(9, 'Enquiry', 'Enquiry', 'Enquiry Description', 'Enquiry Keyword', '2023-08-01 00:53:00', '2023-08-01 00:53:00'),
(10, 'Product Category', 'Product Category', 'Product Category Description', 'Product Category Keyword', '2023-08-01 01:07:07', '2023-08-01 01:07:07'),
(11, 'Product Sub Category', 'Product Sub Category', 'Product Sub Category Description', 'Product Sub Category Keyword', '2023-08-01 01:08:16', '2023-08-01 01:08:16'),
(12, 'Seo', 'Seo', 'Seo Description', 'Seo Keyword', '2023-08-01 01:11:47', '2023-08-01 01:11:47'),
(13, 'Brand', 'Brand', 'Brands Description', 'Brands Keyword', '2023-08-01 01:13:42', '2023-08-01 01:13:42'),
(14, 'Business Settings', 'Business Settings', 'Business Setting Description', 'Business Setting Keyword', '2023-08-01 01:15:47', '2023-08-01 01:15:47'),
(15, 'Slider', 'Slider', 'Slider Description', 'Slider Keyword', '2023-08-01 01:16:31', '2023-08-01 01:16:31'),
(16, 'NewsLatter', 'NewsLatter', 'NewsLatter Description', 'NewsLatter Keyword', '2023-08-01 01:18:26', '2023-08-01 01:18:26'),
(17, 'Dashboard', 'Dashboard', 'Dashboard Description', 'Dashboard Keyword', '2023-08-01 01:19:48', '2023-08-01 01:19:48'),
(18, 'Role', 'Role', 'Role Description', 'Role Keyword', '2023-08-01 01:20:16', '2023-08-01 01:20:16'),
(19, 'User Registration', 'User Registration', 'User Registration Description', 'User Registration Keyword', '2023-08-01 01:26:36', '2023-08-01 01:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `bg_image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Banner', 'public/images/slider/KN70JDxap4nOVqGfMC1og2zYb10r4XqRPYVzcY0F.jpg', 'https://schonheit.in/', 1, '2023-02-17 00:46:46', '2023-02-27 06:47:07'),
(6, 'Banner', 'public/images/slider/VCNmIoLYiH4H6w37pTOs9XOdFM8V28Wvp55BR2Zb.jpg', 'https://schonheit.in/', 1, '2023-02-17 00:47:04', '2023-02-27 07:11:15'),
(7, 'Banner', 'public/images/slider/Cym78BkqksSOd2eafmKXwx21avBUFuZnobd1YPvT.jpg', 'https://schonheit.in/', 1, '2023-02-17 00:47:23', '2023-02-27 06:47:57'),
(8, 'Banner', 'public/images/slider/HbqCDbgKvkdndo5yBZxEqOx4pDiYrsXH4fjwDvLY.jpg', 'https://schonheit.in/', 1, '2023-02-17 00:47:46', '2023-02-27 06:57:07'),
(9, 'testing', 'public/images/slider/UQoGzZIP2qOmpbjerXV2TmL90B1Zv8T65IsqQkni.jpg', '#', 0, '2023-02-21 05:50:05', '2023-02-21 05:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `image`, `status`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(9, 4, 'Table Fan', 'public/images/sub_category/s2YTvXSsxw4UdeKdFOPibCPcEGRzFX0of6WiSOVW.jpg', 1, 'table-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-10-07 01:15:51', '2023-07-31 04:28:47'),
(15, 4, 'Ceiling Fan', 'public/images/sub_category/KhBgQcAIJcphFS6Q0zGNoMHUopgMj78f3OzPC63z.jpg', 1, 'ceiling-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-10-08 00:23:10', '2023-07-31 04:28:47'),
(19, 8, 'Ceiling Fan', 'public/images/sub_category/khxPBNN9qxHtVcr8ur0VIApilx0byiFlWVj6zj8x.png', 1, 'ceiling-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-10-08 00:25:08', '2023-07-31 04:28:47'),
(23, 8, 'Table Fan', 'public/images/sub_category/S9N7Oy96RiCscEXojbbK4IcqXR9DIsbYNWbYbfuL.jpg', 1, 'table-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-12-05 02:11:09', '2023-07-31 04:28:47'),
(24, 8, 'Pedestal Fan', 'public/images/sub_category/EdxuygCb7lnsEEkLcjBehBMd016QpOluLIAYyVs9.jpg', 1, 'pedestal-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-12-05 02:11:31', '2023-07-31 04:28:47'),
(36, 13, 'LED HD TV', 'public/images/sub_category/dF0TYC5FwOX8Wnu6agM6fyCIpC7f48XUFphNgfMb.jpg', 1, 'led-hd-tv', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-12-05 02:16:48', '2023-07-31 04:28:47'),
(37, 13, 'LED Smart TV', 'public/images/sub_category/RgG1Vna02o1R93ofJMCoqtG5DfhGuuRb1mZTEgn6.jpg', 1, 'led-smart-tv', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-12-05 02:17:02', '2023-07-31 04:28:47'),
(42, 14, 'IR -Stove', 'public/images/sub_category/vieah5WTvMGLqmSpRVu9tTOV1QDbv1e8zdt17Src.jpg', 1, 'ir-stove', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2022-12-05 02:24:38', '2023-07-31 04:28:47'),
(55, 4, 'Pedestal Fan', 'public/images/sub_category/pdYj4dr7tBpNB1xmre8tj0gZkiKo3BVxCzLbOfwy.jpg', 1, 'pedestal-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 04:56:05', '2023-07-31 04:28:47'),
(56, 4, 'Exhaust Fan', 'public/images/sub_category/NNdl6dfCBiAbNk0vdesYpbwdlDgSmKQy7eKnfsUV.jpg', 1, 'exhaust-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 05:46:40', '2023-07-31 04:28:47'),
(58, 8, 'Exhaust Fan', NULL, 1, 'exhaust-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 05:53:53', '2023-07-31 04:28:47'),
(59, 16, 'Irons', 'public/images/sub_category/4XOTEn0PpLd8uN3AZWZYn8Tx841Y03WQ4dgSSAke.jpg', 1, 'irons', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:04:00', '2023-07-31 04:28:47'),
(60, 15, 'Mixer-Grinder', NULL, 1, 'mixer-grinder', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:04:29', '2023-07-31 04:28:47'),
(61, 15, 'Juicer-Mixer-Grinder', NULL, 1, 'juicer-mixer-grinder', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:04:48', '2023-07-31 04:28:47'),
(62, 17, 'Solar Semi Integrated Street Light', NULL, 1, 'solar-semi-integrated-street-light', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:05:56', '2023-07-31 04:28:47'),
(63, 17, 'Solar Panel', NULL, 1, 'solar-panel', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:06:07', '2023-07-31 04:28:47'),
(64, 17, 'Solar Inverter', NULL, 1, 'solar-inverter', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 06:06:19', '2023-07-31 04:28:47'),
(66, 8, 'Rechargeable AC DC Fan', NULL, 1, 'rechargeable-ac-dc-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-23 10:30:17', '2023-07-31 04:28:47'),
(67, 18, 'Instant Geyser', NULL, 1, 'instant-geyser', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-24 00:32:45', '2023-07-31 04:28:47'),
(68, 4, 'AC DC Rechargeable Fan', 'public/images/sub_category/foi1AY1p5a2DMFs7iNnV11N1qM5muep3QJ1LTzqY.jpg', 1, 'ac-dc-rechargeable-fan', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-24 11:15:49', '2023-07-31 04:28:47'),
(69, 18, 'Storage Geyser', NULL, 1, 'storage-geyser', 'Sub Category', 'Sub Category description', 'Sub Category keyword', '2023-02-28 00:56:01', '2023-07-31 04:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
