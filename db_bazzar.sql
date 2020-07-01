-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2020 at 11:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bazzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ads`
--

CREATE TABLE `tbl_ads` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `category` int(10) NOT NULL,
  `sub_category` int(10) NOT NULL,
  `created_at` varchar(256) NOT NULL,
  `expiry` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `additional_info` longtext NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `position` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `slug`, `icon`, `position`) VALUES
(16, 'Apparels & Accessories', 'apparels-accessories', 'ion ion-bag', 1),
(17, 'Automobiles', 'automobiles', 'la la-car', 2),
(18, 'Beauty & Health', 'beauty-health', 'ti ti-heart', 3),
(19, 'Books & Learning', 'books-learning', 'ti ti-book', 4),
(20, 'Business & Industrial', 'business-industrial', 'ti ti-help-alt', 4),
(21, 'Computer & Peripherals', 'computer-peripherals', 'la la-desktop', 4),
(22, 'Electronics', 'electronics', 'ti ti-bolt-alt', 4),
(23, 'Home, Furnishing & Appliances', 'home-furnishing-appliances', 'la la-bed', 4),
(24, 'Jobs', 'jobs', 'la la-graduation-cap', 4),
(25, 'Mobile & Accessories', 'mobile-accessories', 'la la-mobile-phone', 4),
(26, 'Music Instrument', 'music-instrument', 'la la-music', 4),
(27, 'Pets & Pet Care', 'pets-pet-care', 'la la-optin-monster', 4),
(28, 'Real Estate', 'real-estate', 'ti ti-map-alt', 4),
(29, 'Services', 'services', 'la la-wrench', 4),
(30, 'Sports & Fitness', 'sports-fitness', 'ti ti-basketball', 4),
(31, 'Toys & Video Games', 'toys-video-games', 'ion ion-xbox', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custom_fields`
--

CREATE TABLE `tbl_custom_fields` (
  `id` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `fields` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_custom_fields`
--

INSERT INTO `tbl_custom_fields` (`id`, `title`, `slug`, `fields`) VALUES
(1, 'Custom Field', 'custom-field', 'a:3:{s:5:\"title\";a:3:{i:0;s:5:\"title\";i:1;s:4:\"slug\";i:2;s:5:\"field\";}s:5:\"field\";a:3:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:8:\"multiple\";}s:7:\"choices\";a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}'),
(2, 'Category', 'category', 'a:3:{s:5:\"title\";a:4:{i:0;s:5:\"title\";i:1;s:4:\"slug\";i:2;s:4:\"icon\";i:3;s:8:\"position\";}s:5:\"field\";a:4:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:4:\"text\";i:3;s:4:\"text\";}s:7:\"choices\";a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}}'),
(3, 'Sub Category', 'sub-category', 'a:3:{s:5:\"title\";a:5:{i:0;s:5:\"title\";i:1;s:4:\"slug\";i:2;s:8:\"category\";i:3;s:4:\"icon\";i:4;s:5:\"field\";}s:5:\"field\";a:5:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:6:\"select\";i:3;s:4:\"text\";i:4;s:8:\"multiple\";}s:7:\"choices\";a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}}'),
(6, 'Ad Basic Fields', 'ads-information-form', 'a:3:{s:5:\"title\";a:3:{i:0;s:5:\"title\";i:1;s:11:\"description\";i:2;s:6:\"expiry\";}s:5:\"field\";a:3:{i:0;s:4:\"text\";i:1;s:8:\"textarea\";i:2;s:5:\"radio\";}s:7:\"choices\";a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:38:\"1 week|2 weeks|1 month|3 month|6 month\";}}'),
(7, 'Ads General Fields', 'ads-general-information-form', 'a:3:{s:5:\"title\";a:6:{i:0;s:13:\"home delivery\";i:1;s:13:\"delivery area\";i:2;s:16:\"delivery charges\";i:3;s:13:\"warranty type\";i:4;s:15:\"warranty period\";i:5;s:17:\"warranty includes\";}s:5:\"field\";a:6:{i:0;s:5:\"radio\";i:1;s:5:\"check\";i:2;s:4:\"text\";i:3;s:5:\"radio\";i:4;s:4:\"text\";i:5;s:4:\"text\";}s:7:\"choices\";a:6:{i:0;s:6:\"Yes|No\";i:1;s:54:\"Within my Area|Within my City|Almost anywhere in Nepal\";i:2;s:0:\"\";i:3;s:45:\"Dealer/Shop|Manufacturer/Importer|No Warranty\";i:4;s:0:\"\";i:5;s:0:\"\";}}'),
(8, 'Ads Global fields', 'ads-global', 'a:3:{s:5:\"title\";a:4:{i:0;s:5:\"price\";i:1;s:16:\"price negotiable\";i:2;s:9:\"condition\";i:3;s:13:\"used duration\";}s:5:\"field\";a:4:{i:0;s:4:\"text\";i:1;s:5:\"radio\";i:2;s:5:\"radio\";i:3;s:4:\"text\";}s:7:\"choices\";a:4:{i:0;s:0:\"\";i:1;s:15:\"Yes|Fixed Price\";i:2;s:50:\"Brand New|Like New|Excellent|Good/Fair|Not Working\";i:3;s:0:\"\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `id` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `position` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meta`
--

CREATE TABLE `tbl_meta` (
  `id` int(10) NOT NULL,
  `meta_key` varchar(256) NOT NULL,
  `meta_value` longtext NOT NULL,
  `for_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nepal_location`
--

CREATE TABLE `tbl_nepal_location` (
  `id` int(10) NOT NULL,
  `zone` varchar(256) NOT NULL,
  `district` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nepal_location`
--

INSERT INTO `tbl_nepal_location` (`id`, `zone`, `district`) VALUES
(1, 'Mechi ', 'Taplejung, Panchthar, Ilam, Jhapa '),
(2, 'Koshi', 'Morang, Sunsari, Dhankuta, Terhathum, Bhojpur, Sankhuwasabha'),
(3, 'Sagarmatha', 'Saptari, Siraha, Udaypur, Khotang, Okhaldhunga, Solukhumbu'),
(4, 'Janakpur ', 'Mahottari, Dhanusha, Sarlahi, Sindhuli, Ramechhap, Dolakha '),
(5, 'Bagmati', 'Kavre Palanchok, Kathmandu, Lalitpur, Bhaktapur, Sindhupalchok, Rasuwa, Dhading, Nuwakot'),
(6, 'Narayani', 'Rautahat, Bara, Parsa, Chitwan, Makwanpur'),
(7, 'Gandaki ', 'Kaski, Tanahun, Lamjung, Gorkha, Syanjhya, Manang '),
(8, 'Dhaulagiri', 'Parbat, Myagdi, Baglung, Mustang'),
(9, 'Lumbini', 'Rupandehi, Nawalparasi, Kapilbastu, Arghakhanchi, Gulmi, Palpa'),
(10, 'Karnali ', 'Dolpa, Jumla, Mugu, Humla, Kalikot '),
(11, 'Rapti', 'Dang, Salyan, Pyuthan, Rolpa, Rukum'),
(12, 'Bheri', 'Banke, Bardiya, Surkhet, Dailekh, Jajarkot'),
(13, 'Seti ', 'Kailali, Doti, Accham, Bajura, Bajhang '),
(14, 'Mahakali', 'Kanchanpur, Dadeldhura, Baitadi, Darchula');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `category` int(10) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `fields` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`id`, `title`, `slug`, `category`, `icon`, `fields`) VALUES
(3, 'Cars', 'cars', 17, 'im', 'a:3:{s:5:\"title\";a:9:{i:0;s:4:\"type\";i:1;s:9:\"make year\";i:2;s:10:\"kilometers\";i:3;s:6:\"colour\";i:4;s:9:\"engine CC\";i:5;s:4:\"fuel\";i:6;s:12:\"transmission\";i:7;s:5:\"brand\";i:8;s:8:\"features\";}s:5:\"field\";a:9:{i:0;s:6:\"select\";i:1;s:4:\"text\";i:2;s:4:\"text\";i:3;s:4:\"text\";i:4;s:4:\"text\";i:5;s:5:\"radio\";i:6;s:6:\"select\";i:7;s:4:\"text\";i:8;s:5:\"check\";}s:7:\"choices\";a:9:{i:0;s:97:\"Small Hatchback|Mid Size Hatchback|Sedan|CUV / Compact SUV|Jeep / SUV|Van|Bus|Truck|Pickup|Others\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:29:\"Petrol|Diesel|Electric|Hybrid\";i:6;s:81:\"Manual Gear - 2 WD|Manual Gear - 4 WD|Automatic Gear - 2 WD|Automatic Gear - 4 WD\";i:7;s:0:\"\";i:8;s:330:\"Power Window|Power Steering|Central Lock|Alloy Wheels| Keyless Remote Entry|Tubeless Tyres|Air Bags|Anti-lock Braking (ABS)|Air Conditioner - Manual|Air Conditioner - Automatic|Rear AC Vent|Steering Mounted Controls|Projected Headlight|Fog Lights|Electric Side Mirror (ORVM)|Push Engine Start Button|LCD Touchscreen Entertainment \";}}'),
(4, 'Motorcycle', 'motorcycle', 17, 'im', 'a:3:{s:5:\"title\";a:8:{i:0;s:4:\"type\";i:1;s:15:\"Registered Zone\";i:2;s:6:\"lot no\";i:3;s:9:\"Engine CC\";i:4;s:9:\"Make Year\";i:5;s:16:\"Mileage (km / l)\";i:6;s:10:\"Kilometers\";i:7;s:8:\"Features\";}s:5:\"field\";a:8:{i:0;s:6:\"select\";i:1;s:4:\"text\";i:2;s:4:\"text\";i:3;s:4:\"text\";i:4;s:4:\"text\";i:5;s:4:\"text\";i:6;s:8:\"textarea\";i:7;s:5:\"check\";}s:7:\"choices\";a:8:{i:0;s:35:\"Standard|Cruiser|Sports|Dirt|Scooty\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:212:\"Electric Start|Alloy Wheels|Tubeless Tyres|Digital Display Panel|Projected Headlight|LED Tail Light|Front Disc Brake|Rear Disc Brake|Anti-lock Braking (ABS)|Mono Suspension|Split Seat|Low Fuel Indicator|Tripmeter\";}}'),
(5, 'Parts & Accessories', 'automoblie-parts-accessories', 17, 'im', 'a:3:{s:5:\"title\";a:1:{i:0;s:4:\"type\";}s:5:\"field\";a:1:{i:0;s:6:\"select\";}s:7:\"choices\";a:1:{i:0;s:55:\"Cars Parts & Accessories|Motorcycle Parts & Accessories\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$D3XAjLOMWYmNhlgUgZzMw.e0uK6KfMCP6u.A6OP6XvkOEXLjvn7s2', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1590422918, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'sanjay@pcsoftnepal.com', '$2y$10$2RTUVuKZXO5ixipXYJFTMukKwaQNVpFjzHotyPxcsXApUolfIbkva', 'sanjay@pcsoftnepal.com', 'bc930eeeec55a40719ed', '$2y$10$yXZV80rJHU5Gn14k2k5uF.goPAf.D5/EnHJ0XBqVmpeID/VVCVyI.', NULL, NULL, NULL, NULL, NULL, 1590163957, NULL, 0, 'Sanjay', 'Chaudhary', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_custom_fields`
--
ALTER TABLE `tbl_custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_meta`
--
ALTER TABLE `tbl_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nepal_location`
--
ALTER TABLE `tbl_nepal_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ads`
--
ALTER TABLE `tbl_ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_custom_fields`
--
ALTER TABLE `tbl_custom_fields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meta`
--
ALTER TABLE `tbl_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nepal_location`
--
ALTER TABLE `tbl_nepal_location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
