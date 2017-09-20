-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 02:32 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poszeeco_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `last_login`) VALUES
(1, 'admin', '6e6fba1ecf298599dc4f9701373d28472822bb27', 'Admin', '2017-09-19 11:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bank_branch` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bank_code` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_branch`, `bank_code`) VALUES
(1, 'กสิกรไทย', 'บางบอน', '660-2-06131-9');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_head` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_description` text COLLATE utf8_unicode_ci,
  `banner_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `position` enum('home') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_head`, `banner_title`, `banner_description`, `banner_image`, `active`, `link`, `room_id`, `position`) VALUES
(0, 'Banner', NULL, '', 'banner1505118749.jpg', 1, '', 0, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `total_checkin` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `booking_date` datetime DEFAULT NULL,
  `booking_ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_status` enum('pending','active','cancel') COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tx` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `pay_date` datetime NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `room_id`, `member_id`, `check_in`, `check_out`, `total_checkin`, `parent`, `child`, `remark`, `name`, `email`, `mobile`, `message`, `booking_date`, `booking_ip`, `booking_status`, `token`, `tx`, `total_price`, `pay_date`) VALUES
(12, 1, 1, '2017-05-29 12:00:00', '2017-05-30 12:00:00', 0, 1, 0, '', 'บัณฑิต แสนคำภา', 'sankhumpha84@gmail.com', '0993331111', '', '2017-05-20 13:37:45', NULL, 'active', '8c0772427357b62bdda9a86d92f70e6da8adca0a', '4D886475A8752670E', 1, '2017-05-20 13:50:40'),
(11, 1, 1, '2017-05-01 12:00:00', '2017-05-02 12:00:00', 0, 1, 0, '', 'บัณฑิต แสนคำภา', 'sankhumpha84@gmail.com', '0993331111', '', '2017-05-20 13:30:58', NULL, 'pending', '9c4bd9b21ad4497d09560289c6080585fcbe0ad9', NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` longtext COLLATE utf8_unicode_ci,
  `category_detail` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_detail`) VALUES
(1, 'a:2:{s:2:"th";s:18:"โรงแรม";s:2:"en";s:6:"Hotels";}', 'a:2:{s:2:"th";s:18:"โรงแรม";s:2:"en";s:6:"Hotels";}'),
(2, 'a:2:{s:2:"th";s:15:"ทัวร์";s:2:"en";s:5:"Tours";}', 'a:2:{s:2:"th";s:15:"ทัวร์";s:2:"en";s:5:"Tours";}'),
(3, 'a:2:{s:2:"th";s:21:"แพ็คเกจ";s:2:"en";s:8:"Packages";}', 'a:2:{s:2:"th";s:21:"แพ็คเกจ";s:2:"en";s:8:"Packages";}'),
(5, 'a:2:{s:2:"th";s:27:"สายการบิน";s:2:"en";s:7:"Flights";}', 'a:2:{s:2:"th";s:27:"สายการบิน";s:2:"en";s:7:"Flights";}');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` longtext COLLATE utf8_unicode_ci NOT NULL,
  `footer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ig` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auto_verify` int(1) NOT NULL,
  `line` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  `slogan` longtext COLLATE utf8_unicode_ci,
  `paypal_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`title`, `description`, `keywords`, `footer`, `logo`, `email`, `mobile`, `facebook`, `google`, `ig`, `twitter`, `auto_verify`, `line`, `latitude`, `longtitude`, `address`, `slogan`, `paypal_email`) VALUES
('a:2:{s:2:"th";s:18:"Royal Inter Travel";s:2:"en";s:18:"Royal Inter Travel";}', 'a:2:{s:2:"th";s:6:"Travel";s:2:"en";s:6:"Travel";}', 'a:2:{s:2:"th";s:6:"Travel";s:2:"en";s:6:"Travel";}', 'a:2:{s:2:"th";s:25:"©2017 Royal Inter Travel";s:2:"en";s:25:"©2017 Royal Inter Travel";}', 'logo1.png', 'sankhumpha84@gmail.com', '090-9740465', 'https://www.facebook.com/', 'https://plus.google.com/', 'https://www.instagram.com/', 'https://twitter.com/?lang=en', 0, 'https://line.me/R/ti/p/%40fma8166c', 12.864549, 99.693375, 'a:2:{s:2:"th";s:107:"299/36 หมู่1 ต.แคราย อ.กระทุ่มแบน จ.สมุทรสาคร";s:2:"en";s:51:"299 / 36 M.1 Kaerai Kathumban Samutsakhon  Thailand";}', 'a:2:{s:2:"th";s:112:"เราย่อโลกอยู่ไว้ในมือคุณ ทุกการเดินทาง";s:2:"en";s:117:"ENG. เราย่อโลกอยู่ไว้ในมือคุณ ทุกการเดินทาง";}', 'sankhumpha84-facilitator@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `contact_type` enum('contact','room') COLLATE utf8_unicode_ci NOT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_short` longtext COLLATE utf8_unicode_ci,
  `content_description` longtext COLLATE utf8_unicode_ci,
  `create_date` datetime NOT NULL,
  `content_path` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_type` enum('content','promotion') COLLATE utf8_unicode_ci NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `gallery_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `room_id`, `gallery_path`) VALUES
(1, 1, 'room-gallery-1483008686.jpg'),
(2, 1, 'room-gallery-1483008952.jpg'),
(3, 1, 'room-gallery-1483008957.jpg'),
(4, 2, 'room-gallery-1483009292.jpg'),
(5, 2, 'room-gallery-1483009297.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ipn_listen`
--

CREATE TABLE IF NOT EXISTS `ipn_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_create` datetime NOT NULL,
  `posted_info` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ipn_listen`
--

INSERT INTO `ipn_listen` (`id`, `date_create`, `posted_info`) VALUES
(12, '2017-05-20 13:50:40', 'a:39:{s:10:"mc_gross_1";s:4:"1.00";s:14:"num_cart_items";s:1:"1";s:8:"payer_id";s:13:"SLHVYXPR638XE";s:20:"address_country_code";s:2:"TH";s:12:"ipn_track_id";s:13:"bbcf47709cdfd";s:11:"address_zip";s:5:"10150";s:7:"invoice";s:9:"INV-00012";s:7:"charset";s:12:"windows-1252";s:13:"payment_gross";s:0:"";s:14:"address_status";s:9:"confirmed";s:14:"address_street";s:61:"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401";s:11:"verify_sign";s:56:"AFcWxV21C7fd0v3bYYYRCpSSRl31ALMB04nIL0RhKPD3l8BtoCQws3vI";s:14:"pending_reason";s:10:"unilateral";s:8:"txn_type";s:4:"cart";s:12:"item_number1";s:0:"";s:11:"mc_currency";s:3:"THB";s:19:"transaction_subject";s:0:"";s:6:"custom";s:0:"";s:22:"protection_eligibility";s:10:"Ineligible";s:9:"quantity1";s:1:"1";s:15:"address_country";s:8:"Thailand";s:12:"payer_status";s:10:"unverified";s:10:"first_name";s:0:"";s:10:"item_name1";s:47:"Booking ID #00012 Room  (1 per night ) * 1 Days";s:12:"address_name";s:16:"Treehouse Resort";s:8:"mc_gross";s:4:"1.00";s:12:"payment_date";s:25:"23:44:19 May 19, 2017 PDT";s:14:"payment_status";s:7:"Pending";s:9:"last_name";s:0:"";s:13:"address_state";s:7:"Bangkok";s:19:"payer_business_name";s:16:"Treehouse Resort";s:6:"txn_id";s:17:"4D886475A8752670E";s:6:"resend";s:4:"true";s:12:"payment_type";s:7:"instant";s:14:"notify_version";s:3:"3.8";s:11:"payer_email";s:22:"sankhumpha84@gmail.com";s:14:"receiver_email";s:34:"sankhumpha84-facilitator@gmail.com";s:12:"address_city";s:7:"Bangbon";s:17:"residence_country";s:2:"TH";}'),
(11, '2017-05-20 13:44:24', 'a:38:{s:8:"mc_gross";s:4:"1.00";s:7:"invoice";s:9:"INV-00012";s:22:"protection_eligibility";s:10:"Ineligible";s:14:"address_status";s:9:"confirmed";s:12:"item_number1";s:0:"";s:8:"payer_id";s:13:"SLHVYXPR638XE";s:14:"address_street";s:61:"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401";s:12:"payment_date";s:25:"23:44:19 May 19, 2017 PDT";s:14:"payment_status";s:7:"Pending";s:7:"charset";s:12:"windows-1252";s:11:"address_zip";s:5:"10150";s:10:"first_name";s:0:"";s:20:"address_country_code";s:2:"TH";s:12:"address_name";s:16:"Treehouse Resort";s:14:"notify_version";s:3:"3.8";s:6:"custom";s:0:"";s:12:"payer_status";s:10:"unverified";s:15:"address_country";s:8:"Thailand";s:14:"num_cart_items";s:1:"1";s:12:"address_city";s:7:"Bangbon";s:11:"verify_sign";s:56:"A1oGOA3gzVMcdXmtIgfbakbg7h5YAdIXscNTc5bQOdQSV-KlpQiyoIQ9";s:11:"payer_email";s:22:"sankhumpha84@gmail.com";s:6:"txn_id";s:17:"4D886475A8752670E";s:12:"payment_type";s:7:"instant";s:19:"payer_business_name";s:16:"Treehouse Resort";s:9:"last_name";s:0:"";s:10:"item_name1";s:47:"Booking ID #00012 Room  (1 per night ) * 1 Days";s:13:"address_state";s:7:"Bangkok";s:14:"receiver_email";s:34:"sankhumpha84-facilitator@gmail.com";s:9:"quantity1";s:1:"1";s:14:"pending_reason";s:10:"unilateral";s:8:"txn_type";s:4:"cart";s:10:"mc_gross_1";s:4:"1.00";s:11:"mc_currency";s:3:"THB";s:17:"residence_country";s:2:"TH";s:19:"transaction_subject";s:0:"";s:13:"payment_gross";s:0:"";s:12:"ipn_track_id";s:13:"bbcf47709cdfd";}'),
(10, '2017-05-20 13:37:27', 'a:39:{s:10:"mc_gross_1";s:4:"1.00";s:14:"num_cart_items";s:1:"1";s:8:"payer_id";s:13:"SLHVYXPR638XE";s:20:"address_country_code";s:2:"TH";s:12:"ipn_track_id";s:13:"c62f864acc871";s:11:"address_zip";s:5:"10150";s:7:"invoice";s:9:"INV-00011";s:7:"charset";s:12:"windows-1252";s:13:"payment_gross";s:0:"";s:14:"address_status";s:9:"confirmed";s:14:"address_street";s:61:"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401";s:11:"verify_sign";s:56:"AFcWxV21C7fd0v3bYYYRCpSSRl31APLXSO.yQw0eBMVHvpPCdgPEn3hb";s:14:"pending_reason";s:10:"unilateral";s:8:"txn_type";s:4:"cart";s:12:"item_number1";s:0:"";s:11:"mc_currency";s:3:"THB";s:19:"transaction_subject";s:0:"";s:6:"custom";s:0:"";s:22:"protection_eligibility";s:10:"Ineligible";s:9:"quantity1";s:1:"1";s:15:"address_country";s:8:"Thailand";s:12:"payer_status";s:10:"unverified";s:10:"first_name";s:0:"";s:10:"item_name1";s:47:"Booking ID #00011 Room  (1 per night ) * 1 Days";s:12:"address_name";s:16:"Treehouse Resort";s:8:"mc_gross";s:4:"1.00";s:12:"payment_date";s:25:"23:31:20 May 19, 2017 PDT";s:14:"payment_status";s:7:"Pending";s:9:"last_name";s:0:"";s:13:"address_state";s:7:"Bangkok";s:19:"payer_business_name";s:16:"Treehouse Resort";s:6:"txn_id";s:17:"8M2466659W024633V";s:6:"resend";s:4:"true";s:12:"payment_type";s:7:"instant";s:14:"notify_version";s:3:"3.8";s:11:"payer_email";s:22:"sankhumpha84@gmail.com";s:14:"receiver_email";s:34:"sankhumpha84-facilitator@gmail.com";s:12:"address_city";s:7:"Bangbon";s:17:"residence_country";s:2:"TH";}'),
(9, '2017-05-20 13:31:25', 'a:38:{s:8:"mc_gross";s:4:"1.00";s:7:"invoice";s:9:"INV-00011";s:22:"protection_eligibility";s:10:"Ineligible";s:14:"address_status";s:9:"confirmed";s:12:"item_number1";s:0:"";s:8:"payer_id";s:13:"SLHVYXPR638XE";s:14:"address_street";s:61:"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401";s:12:"payment_date";s:25:"23:31:20 May 19, 2017 PDT";s:14:"payment_status";s:7:"Pending";s:7:"charset";s:12:"windows-1252";s:11:"address_zip";s:5:"10150";s:10:"first_name";s:0:"";s:20:"address_country_code";s:2:"TH";s:12:"address_name";s:16:"Treehouse Resort";s:14:"notify_version";s:3:"3.8";s:6:"custom";s:0:"";s:12:"payer_status";s:10:"unverified";s:15:"address_country";s:8:"Thailand";s:14:"num_cart_items";s:1:"1";s:12:"address_city";s:7:"Bangbon";s:11:"verify_sign";s:56:"A4aO6CjVMiW0LvjQlznv5ivFZj56AjXMHW11.rX4qOUc2YSYyplI.Lt2";s:11:"payer_email";s:22:"sankhumpha84@gmail.com";s:6:"txn_id";s:17:"8M2466659W024633V";s:12:"payment_type";s:7:"instant";s:19:"payer_business_name";s:16:"Treehouse Resort";s:9:"last_name";s:0:"";s:10:"item_name1";s:47:"Booking ID #00011 Room  (1 per night ) * 1 Days";s:13:"address_state";s:7:"Bangkok";s:14:"receiver_email";s:34:"sankhumpha84-facilitator@gmail.com";s:9:"quantity1";s:1:"1";s:14:"pending_reason";s:10:"unilateral";s:8:"txn_type";s:4:"cart";s:10:"mc_gross_1";s:4:"1.00";s:11:"mc_currency";s:3:"THB";s:17:"residence_country";s:2:"TH";s:19:"transaction_subject";s:0:"";s:13:"payment_gross";s:0:"";s:12:"ipn_track_id";s:13:"c62f864acc871";}'),
(8, '2017-05-20 13:03:24', 'a:40:{s:8:"mc_gross";s:7:"1980.00";s:7:"invoice";s:9:"INV-00008";s:22:"protection_eligibility";s:10:"Ineligible";s:14:"address_status";s:9:"confirmed";s:12:"item_number1";s:0:"";s:8:"payer_id";s:13:"BN5DEJF3R222E";s:14:"address_street";s:61:"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401";s:12:"payment_date";s:25:"23:02:57 May 19, 2017 PDT";s:14:"payment_status";s:7:"Pending";s:7:"charset";s:12:"windows-1252";s:11:"address_zip";s:5:"10150";s:10:"first_name";s:0:"";s:20:"address_country_code";s:2:"TH";s:12:"address_name";s:1:" ";s:14:"notify_version";s:3:"3.8";s:6:"custom";s:0:"";s:12:"payer_status";s:10:"unverified";s:8:"business";s:34:"sankhumpha84-facilitator@gmail.com";s:15:"address_country";s:8:"Thailand";s:14:"num_cart_items";s:1:"1";s:12:"address_city";s:7:"Bangbon";s:11:"verify_sign";s:56:"AfAkavmC3xOd-bBA3ryNkIOB-nAFAXZ4phFDg.09HKoqA5BuMCD6zx-U";s:11:"payer_email";s:22:"sankhumpha84@gmail.com";s:6:"txn_id";s:17:"06U89927R4491670P";s:12:"payment_type";s:7:"instant";s:9:"last_name";s:0:"";s:10:"item_name1";s:49:"Booking ID #00008 Room  (990 per night ) * 2 Days";s:13:"address_state";s:7:"Bangkok";s:14:"receiver_email";s:34:"sankhumpha84-facilitator@gmail.com";s:9:"quantity1";s:1:"2";s:11:"receiver_id";s:13:"A2M2C8UP95V5N";s:14:"pending_reason";s:14:"multi_currency";s:8:"txn_type";s:4:"cart";s:10:"mc_gross_1";s:7:"1980.00";s:11:"mc_currency";s:3:"THB";s:17:"residence_country";s:2:"TH";s:8:"test_ipn";s:1:"1";s:19:"transaction_subject";s:0:"";s:13:"payment_gross";s:0:"";s:12:"ipn_track_id";s:13:"2ef2cfd41cb6f";}');

-- --------------------------------------------------------

--
-- Table structure for table `lang_static`
--

CREATE TABLE IF NOT EXISTS `lang_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `lang_static`
--

INSERT INTO `lang_static` (`id`, `name`, `data`) VALUES
(4, 'home', 'a:2:{s:2:"th";s:24:"หน้าหลัก";s:2:"en";s:4:"home";}'),
(5, 'room', 'a:2:{s:2:"th";s:21:"ห้องพัก";s:2:"en";s:4:"Room";}'),
(6, 'gallery', 'a:2:{s:2:"th";s:21:"แกลอรี่";s:2:"en";s:7:"gallery";}'),
(7, 'promotion', 'a:2:{s:2:"th";s:27:"โปรโมชั่น";s:2:"en";s:9:"Promotion";}'),
(8, 'contact', 'a:2:{s:2:"th";s:27:"ติดต่อเรา";s:2:"en";s:7:"contact";}'),
(9, 'booking', 'a:2:{s:2:"th";s:9:"จอง";s:2:"en";s:7:"booking";}'),
(10, 'detail', 'a:2:{s:2:"th";s:30:"รายละเอียด";s:2:"en";s:6:"detail";}'),
(11, 'checkin', 'a:2:{s:2:"th";s:30:"วันเข้าพัก";s:2:"en";s:7:"checkin";}'),
(12, 'checkout', 'a:2:{s:2:"th";s:18:"วันออก";s:2:"en";s:8:"checkout";}'),
(13, 'parent', 'a:2:{s:2:"th";s:36:"จำนวนผู้ใหญ่";s:2:"en";s:6:"parent";}'),
(14, 'child', 'a:2:{s:2:"th";s:27:"จำนวนเด็ก";s:2:"en";s:5:"child";}'),
(15, 'check', 'a:2:{s:2:"th";s:21:"ตรวจสอบ";s:2:"en";s:5:"Check";}'),
(16, 'my room', 'a:2:{s:2:"th";s:39:"ห้องพักของเรา";s:2:"en";s:8:"My Rooms";}'),
(17, 'choose room', 'a:2:{s:2:"th";s:210:"เชิญเลือกห้องพักที่ท่านสนใจที่เราพร้อมให้บริการเพื่อวันพิเศษสำหรับท่าน";s:2:"en";s:16:"Choose Our rooms";}'),
(18, 'per night', 'a:2:{s:2:"th";s:18:"ต่อคืน";s:2:"en";s:9:"per night";}'),
(19, 'see gallery''', 'a:2:{s:2:"th";s:204:"ขอเชิญชมภาพแกลอรี่จาก Tree House Resort บ้านต้นไม้รีสอร์ท by อลงกรณ์ฟาร์ม แก่งกระจาน";s:2:"en";s:16:"Sell Our Gallery";}'),
(20, 'sound', 'a:2:{s:2:"th";s:72:"เสียงตอบรับจากผู้เข้าพัก";s:2:"en";s:9:"Feed back";}'),
(21, 'content', 'a:2:{s:2:"th";s:36:"บทความของเรา";s:2:"en";s:7:"Content";}'),
(22, 'suggestions', 'a:2:{s:2:"th";s:45:"เสนอ / แนะนำ / ติชม";s:2:"en";s:30:"Offer / suggestions / feedback";}'),
(23, 'your name', 'a:2:{s:2:"th";s:33:"ชื่อของท่าน";s:2:"en";s:9:"Your name";}'),
(24, 'message', 'a:2:{s:2:"th";s:21:"ข้อความ";s:2:"en";s:7:"Message";}'),
(25, 'description', 'a:2:{s:2:"th";s:30:"รายละเอียด";s:2:"en";s:11:"description";}'),
(26, 'send', 'a:2:{s:2:"th";s:27:"ส่งข้อมูล";s:2:"en";s:4:"send";}'),
(27, 'Exclusively for you !!', 'a:2:{s:2:"th";s:56:"สิทธิพิเศษเพื่อคุณ!!";s:2:"en";s:22:"Exclusively for you !!";}'),
(28, 'Promotions, special or exclusive privileges', 'a:2:{s:2:"th";s:146:"ติดตามโปรโมชั่น ส่วนลดพิเศษ หรือสิทธิพิเศษเฉพาะคุณ";s:2:"en";s:43:"Promotions, special or exclusive privileges";}'),
(29, 'Touchpoints', 'a:2:{s:2:"th";s:48:"ช่องทางการติดต่อ";s:2:"en";s:11:"Touchpoints";}'),
(30, 'no data', 'a:2:{s:2:"th";s:33:"ไม่มีข้อมูล";s:2:"en";s:7:"no data";}'),
(31, 'view', 'a:2:{s:2:"th";s:18:"ดูห้อง";s:2:"en";s:4:"View";}'),
(32, 'search', 'a:2:{s:2:"th";s:15:"ค้นหา";s:2:"en";s:6:"Search";}'),
(33, 'bath', 'a:2:{s:2:"th";s:9:"บาท";s:2:"en";s:4:"bath";}'),
(34, 'night', 'a:2:{s:2:"th";s:9:"คืน";s:2:"en";s:5:"night";}'),
(35, 'inquiry', 'a:2:{s:2:"th";s:45:"สอบถามเพิ่มเติม";s:2:"en";s:7:"Inquiry";}'),
(36, 'booking success', 'a:2:{s:2:"th";s:158:"ทำการจองเรียบร้อย รอเจ้าหน้าที่ติดต่อกลับค่ะ ขอบคุณค่ะ";s:2:"en";s:38:"Booking Success!!! Thank you very much";}'),
(37, 'our rooms', 'a:2:{s:2:"th";s:39:"ห้องพักของเรา";s:2:"en";s:9:"Our Rooms";}'),
(38, 'choose room interest', 'a:2:{s:2:"th";s:60:"เลือกห้องที่ท่านสนใจ";s:2:"en";s:20:"Choose Room Interest";}'),
(39, 'all', 'a:2:{s:2:"th";s:21:"ทั้งหมด";s:2:"en";s:3:"All";}'),
(40, 'sorry', 'a:2:{s:2:"th";s:136:"ขออภัย ช่วงเวลาดั่งกล่าวมีข้อมูลการจองห้องแล้ว";s:2:"en";s:19:"Sorry, Booking fail";}'),
(41, 'login', 'a:2:{s:2:"th";s:24:"เข้าระบบ";s:2:"en";s:5:"Login";}'),
(68, 'about', 'a:2:{s:2:"th";s:36:"เกี่ยวกับเรา";s:2:"en";s:5:"About";}'),
(43, 'register', 'a:2:{s:2:"th";s:33:"สมัครสมาชิก";s:2:"en";s:8:"Register";}'),
(44, 'mobile', 'a:2:{s:2:"th";s:39:"เบอร์โทรศัพท์";s:2:"en";s:6:"Mobile";}'),
(45, 'thankyou register', 'a:2:{s:2:"th";s:136:"ขอขอบพระคุณ ระบบได้ทำการลงทะเบียนเรียบร้อยแล้ว";s:2:"en";s:22:"Thank you, Pleas login";}'),
(46, 'sorry login', 'a:2:{s:2:"th";s:60:"กรุณาตรวจสอบอีกครั้ง";s:2:"en";s:37:"Sorry, Pleash check email or password";}'),
(47, 'hello', 'a:2:{s:2:"th";s:18:"สวัสดี";s:2:"en";s:4:"Hi, ";}'),
(48, 'logout', 'a:2:{s:2:"th";s:30:"ออกจากระบบ";s:2:"en";s:6:"Logout";}'),
(49, 'profile', 'a:2:{s:2:"th";s:36:"ข้อมูลสมาชิก";s:2:"en";s:7:"Profile";}'),
(50, 'history', 'a:2:{s:2:"th";s:51:"ประวัติการจองห้อง";s:2:"en";s:7:"History";}'),
(51, 'save', 'a:2:{s:2:"th";s:18:"บันทึก";s:2:"en";s:4:"Save";}'),
(52, 'save success', 'a:2:{s:2:"th";s:63:"บันทึกข้อมูลเรียบร้อย";s:2:"en";s:13:"Save Complete";}'),
(53, 'address', 'a:2:{s:2:"th";s:21:"ที่อยู่";s:2:"en";s:7:"Address";}'),
(54, 'map', 'a:2:{s:2:"th";s:18:"แผนที่";s:2:"en";s:3:"Map";}'),
(55, 'date', 'a:2:{s:2:"th";s:18:"วันที่";s:2:"en";s:4:"Date";}'),
(56, 'status', 'a:2:{s:2:"th";s:15:"สถานะ";s:2:"en";s:6:"Status";}'),
(57, 'total', 'a:2:{s:2:"th";s:9:"รวม";s:2:"en";s:5:"Total";}'),
(58, 'days', 'a:2:{s:2:"th";s:9:"วัน";s:2:"en";s:4:"Days";}'),
(59, 'Thankyou', 'a:2:{s:2:"th";s:81:"ขอขอบพระคุณท่านเป็นอย่างสูง";s:2:"en";s:19:"Thank you very much";}'),
(60, 'content other', 'a:2:{s:2:"th";s:33:"บทความอื่นๆ";s:2:"en";s:13:"content other";}'),
(61, 'send message to me', 'a:2:{s:2:"th";s:48:"ส่งข้อความถึงเรา";s:2:"en";s:18:"Send message to me";}'),
(62, 'please send message to me', 'a:2:{s:2:"th";s:63:"กรุณาส่งข้อความถึงเรา";s:2:"en";s:25:"please send message to me";}'),
(63, 'subject', 'a:2:{s:2:"th";s:18:"หัวข้อ";s:2:"en";s:7:"Subject";}'),
(64, 'all gallery', 'a:2:{s:2:"th";s:30:"ภาพทั้งหมด";s:2:"en";s:11:"All Gallery";}'),
(65, 'choose gallery', 'a:2:{s:2:"th";s:45:"เลือกภาพที่สนใจ";s:2:"en";s:14:"Choose Gallery";}'),
(66, 'promotion other', 'a:2:{s:2:"th";s:43:"โปรโมชั่น อื่นๆ";s:2:"en";s:15:"Other Promotion";}'),
(67, 'welcome to', 'a:2:{s:2:"th";s:58:"ยินดีต้อนรับเข้าสู่ ";s:2:"en";s:11:"Welcome to ";}'),
(69, 'subscribe', 'a:2:{s:2:"th";s:72:"ติดตามเราเพื่อรับข่าวสาร";s:2:"en";s:27:"SUBSCRIBE TO OUR NEWSLETTER";}'),
(70, 'Subscribe Now', 'a:2:{s:2:"th";s:18:"ยืนยัน";s:2:"en";s:13:"Subscribe Now";}'),
(71, 'book now by categories', 'a:2:{s:2:"th";s:81:"เลือกหมวดหมู่ที่ท่านต้องการ";s:2:"en";s:22:"book now by categories";}'),
(72, 'choose book now by categories', 'a:2:{s:2:"th";s:159:"ท่านสามารถเลือกทัวร์ที่เหมาะสมกับการท่องเที่ยงของท่าน";s:2:"en";s:40:"ัyou can choose book now by categories";}');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `email`, `password`, `mobile`, `fbid`, `create_date`, `ip`) VALUES
(1, 'บัณฑิต แสนคำภา', 'sankhumpha84@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0993331111', NULL, '2017-02-26 15:41:25', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `room_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `room_short` longtext COLLATE utf8_unicode_ci,
  `room_description` longtext COLLATE utf8_unicode_ci,
  `room_price` float NOT NULL,
  `room_total` int(11) DEFAULT NULL,
  `room_status` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL,
  `room_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_title` longtext COLLATE utf8_unicode_ci,
  `seo_keywords` longtext COLLATE utf8_unicode_ci,
  `seo_description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `category_id`, `room_no`, `room_name`, `room_short`, `room_description`, `room_price`, `room_total`, `room_status`, `room_image`, `seo_title`, `seo_keywords`, `seo_description`) VALUES
(1, 3, 'A091', 'a:2:{s:2:"th";s:30:"ห้องดีเลิศ";s:2:"en";s:9:"Good Room";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 1, 3, 'Y', 'room-main-11.jpg', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}'),
(2, 3, 'A092', 'a:2:{s:2:"th";s:21:"ห้องรวย";s:2:"en";s:9:"Rich Room";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 1, 3, 'Y', 'room-main-21.jpg', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}'),
(3, 3, 'A093', 'a:2:{s:2:"th";s:30:"บ้านต้นไม้";s:2:"en";s:9:"Tree Room";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 1, 3, 'Y', 'room-main-31.jpg', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}'),
(4, 3, 'A094', 'a:2:{s:2:"th";s:30:"บ้านรวยมาก";s:2:"en";s:14:"Very Rich Room";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 1, 3, 'Y', 'room-main-4.jpg', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}'),
(5, 3, 'A095', 'a:2:{s:2:"th";s:33:"บ้านพุ่มไม้";s:2:"en";s:12:"Forrest Room";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 1, 3, 'Y', 'room-main-5.jpg', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}', 'a:2:{s:2:"th";s:0:"";s:2:"en";s:0:"";}'),
(8, 3, 'A091', 'a:2:{s:2:"th";s:24:"แดดตะวัน";s:2:"en";s:8:"Sunshine";}', 'a:2:{s:2:"th";s:24:"แดดตะวัน";s:2:"en";s:8:"Sunshine";}', 'a:2:{s:2:"th";s:35:"<p>แดดตะวัน..</p>\r\n";s:2:"en";s:19:"<p>Sunshine..</p>\r\n";}', 1, 3, 'Y', 'room-main-8.jpg', 'a:2:{s:2:"th";s:24:"แดดตะวัน";s:2:"en";s:8:"Sunshine";}', 'a:2:{s:2:"th";s:24:"แดดตะวัน";s:2:"en";s:8:"Sunshine";}', 'a:2:{s:2:"th";s:24:"แดดตะวัน";s:2:"en";s:8:"Sunshine";}');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
