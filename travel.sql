-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 24, 2017 at 11:32 PM
-- Server version: 10.1.26-MariaDB-1~jessie
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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
(1, 'admin', '6e6fba1ecf298599dc4f9701373d28472822bb27', 'Admin', '2017-09-24 21:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
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

CREATE TABLE `banner` (
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

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
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
  `pay_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` longtext COLLATE utf8_unicode_ci,
  `category_detail` longtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_detail`) VALUES
(1, 'a:2:{s:2:\"th\";s:18:\"โรงแรม\";s:2:\"en\";s:6:\"Hotels\";}', 'a:2:{s:2:\"th\";s:18:\"โรงแรม\";s:2:\"en\";s:6:\"Hotels\";}'),
(2, 'a:2:{s:2:\"th\";s:15:\"ทัวร์\";s:2:\"en\";s:5:\"Tours\";}', 'a:2:{s:2:\"th\";s:15:\"ทัวร์\";s:2:\"en\";s:5:\"Tours\";}'),
(3, 'a:2:{s:2:\"th\";s:21:\"แพ็คเกจ\";s:2:\"en\";s:8:\"Packages\";}', 'a:2:{s:2:\"th\";s:21:\"แพ็คเกจ\";s:2:\"en\";s:8:\"Packages\";}'),
(5, 'a:2:{s:2:\"th\";s:27:\"สายการบิน\";s:2:\"en\";s:7:\"Flights\";}', 'a:2:{s:2:\"th\";s:27:\"สายการบิน\";s:2:\"en\";s:7:\"Flights\";}');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
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
('a:2:{s:2:\"th\";s:18:\"Royal Inter Travel\";s:2:\"en\";s:18:\"Royal Inter Travel\";}', 'a:2:{s:2:\"th\";s:6:\"Travel\";s:2:\"en\";s:6:\"Travel\";}', 'a:2:{s:2:\"th\";s:6:\"Travel\";s:2:\"en\";s:6:\"Travel\";}', 'a:2:{s:2:\"th\";s:25:\"©2017 Royal Inter Travel\";s:2:\"en\";s:25:\"©2017 Royal Inter Travel\";}', 'logo1.png', 'sankhumpha84@gmail.com', '090-9740465', 'https://www.facebook.com/', 'https://plus.google.com/', 'https://www.instagram.com/', 'https://twitter.com/?lang=en', 0, 'https://line.me/R/ti/p/%40fma8166c', 12.864549, 99.693375, 'a:2:{s:2:\"th\";s:107:\"299/36 หมู่1 ต.แคราย อ.กระทุ่มแบน จ.สมุทรสาคร\";s:2:\"en\";s:51:\"299 / 36 M.1 Kaerai Kathumban Samutsakhon  Thailand\";}', 'a:2:{s:2:\"th\";s:112:\"เราย่อโลกอยู่ไว้ในมือคุณ ทุกการเดินทาง\";s:2:\"en\";s:117:\"ENG. เราย่อโลกอยู่ไว้ในมือคุณ ทุกการเดินทาง\";}', 'sankhumpha84-facilitator@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
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

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `content_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_short` longtext COLLATE utf8_unicode_ci,
  `content_description` longtext COLLATE utf8_unicode_ci,
  `create_date` datetime NOT NULL,
  `content_path` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_type` enum('content','promotion') COLLATE utf8_unicode_ci NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `num_code` int(3) NOT NULL DEFAULT '0',
  `alpha_2_code` varchar(2) DEFAULT NULL,
  `alpha_3_code` varchar(3) DEFAULT NULL,
  `en_short_name` varchar(52) DEFAULT NULL,
  `nationality` varchar(39) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`num_code`, `alpha_2_code`, `alpha_3_code`, `en_short_name`, `nationality`) VALUES
(4, 'AF', 'AFG', 'Afghanistan', 'Afghan'),
(8, 'AL', 'ALB', 'Albania', 'Albanian'),
(10, 'AQ', 'ATA', 'Antarctica', 'Antarctic'),
(12, 'DZ', 'DZA', 'Algeria', 'Algerian'),
(16, 'AS', 'ASM', 'American Samoa', 'American Samoan'),
(20, 'AD', 'AND', 'Andorra', 'Andorran'),
(24, 'AO', 'AGO', 'Angola', 'Angolan'),
(28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antiguan or Barbudan'),
(31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaijani, Azeri'),
(32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(36, 'AU', 'AUS', 'Australia', 'Australian'),
(40, 'AT', 'AUT', 'Austria', 'Austrian'),
(44, 'BS', 'BHS', 'Bahamas', 'Bahamian'),
(48, 'BH', 'BHR', 'Bahrain', 'Bahraini'),
(50, 'BD', 'BGD', 'Bangladesh', 'Bangladeshi'),
(51, 'AM', 'ARM', 'Armenia', 'Armenian'),
(52, 'BB', 'BRB', 'Barbados', 'Barbadian'),
(56, 'BE', 'BEL', 'Belgium', 'Belgian'),
(60, 'BM', 'BMU', 'Bermuda', 'Bermudian, Bermudan'),
(64, 'BT', 'BTN', 'Bhutan', 'Bhutanese'),
(68, 'BO', 'BOL', 'Bolivia (Plurinational State of)', 'Bolivian'),
(70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian'),
(72, 'BW', 'BWA', 'Botswana', 'Motswana, Botswanan'),
(74, 'BV', 'BVT', 'Bouvet Island', 'Bouvet Island'),
(76, 'BR', 'BRA', 'Brazil', 'Brazilian'),
(84, 'BZ', 'BLZ', 'Belize', 'Belizean'),
(86, 'IO', 'IOT', 'British Indian Ocean Territory', 'BIOT'),
(90, 'SB', 'SLB', 'Solomon Islands', 'Solomon Island'),
(92, 'VG', 'VGB', 'Virgin Islands (British)', 'British Virgin Island'),
(96, 'BN', 'BRN', 'Brunei Darussalam', 'Bruneian'),
(100, 'BG', 'BGR', 'Bulgaria', 'Bulgarian'),
(104, 'MM', 'MMR', 'Myanmar', 'Burmese'),
(108, 'BI', 'BDI', 'Burundi', 'Burundian'),
(112, 'BY', 'BLR', 'Belarus', 'Belarusian'),
(116, 'KH', 'KHM', 'Cambodia', 'Cambodian'),
(120, 'CM', 'CMR', 'Cameroon', 'Cameroonian'),
(124, 'CA', 'CAN', 'Canada', 'Canadian'),
(132, 'CV', 'CPV', 'Cabo Verde', 'Cabo Verdean'),
(136, 'KY', 'CYM', 'Cayman Islands', 'Caymanian'),
(140, 'CF', 'CAF', 'Central African Republic', 'Central African'),
(144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lankan'),
(148, 'TD', 'TCD', 'Chad', 'Chadian'),
(152, 'CL', 'CHL', 'Chile', 'Chilean'),
(156, 'CN', 'CHN', 'China', 'Chinese'),
(158, 'TW', 'TWN', 'Taiwan, Province of China', 'Chinese, Taiwanese'),
(162, 'CX', 'CXR', 'Christmas Island', 'Christmas Island'),
(166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Cocos Island'),
(170, 'CO', 'COL', 'Colombia', 'Colombian'),
(174, 'KM', 'COM', 'Comoros', 'Comoran, Comorian'),
(175, 'YT', 'MYT', 'Mayotte', 'Mahoran'),
(178, 'CG', 'COG', 'Congo (Republic of the)', 'Congolese'),
(180, 'CD', 'COD', 'Congo (Democratic Republic of the)', 'Congolese'),
(184, 'CK', 'COK', 'Cook Islands', 'Cook Island'),
(188, 'CR', 'CRI', 'Costa Rica', 'Costa Rican'),
(191, 'HR', 'HRV', 'Croatia', 'Croatian'),
(192, 'CU', 'CUB', 'Cuba', 'Cuban'),
(196, 'CY', 'CYP', 'Cyprus', 'Cypriot'),
(203, 'CZ', 'CZE', 'Czech Republic', 'Czech'),
(204, 'BJ', 'BEN', 'Benin', 'Beninese, Beninois'),
(208, 'DK', 'DNK', 'Denmark', 'Danish'),
(212, 'DM', 'DMA', 'Dominica', 'Dominican'),
(214, 'DO', 'DOM', 'Dominican Republic', 'Dominican'),
(218, 'EC', 'ECU', 'Ecuador', 'Ecuadorian'),
(222, 'SV', 'SLV', 'El Salvador', 'Salvadoran'),
(226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Equatorial Guinean, Equatoguinean'),
(231, 'ET', 'ETH', 'Ethiopia', 'Ethiopian'),
(232, 'ER', 'ERI', 'Eritrea', 'Eritrean'),
(233, 'EE', 'EST', 'Estonia', 'Estonian'),
(234, 'FO', 'FRO', 'Faroe Islands', 'Faroese'),
(238, 'FK', 'FLK', 'Falkland Islands (Malvinas)', 'Falkland Island'),
(239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'South Georgia or South Sandwich Islands'),
(242, 'FJ', 'FJI', 'Fiji', 'Fijian'),
(246, 'FI', 'FIN', 'Finland', 'Finnish'),
(248, 'AX', 'ALA', 'Åland Islands', 'Åland Island'),
(250, 'FR', 'FRA', 'France', 'French'),
(254, 'GF', 'GUF', 'French Guiana', 'French Guianese'),
(258, 'PF', 'PYF', 'French Polynesia', 'French Polynesian'),
(260, 'TF', 'ATF', 'French Southern Territories', 'French Southern Territories'),
(262, 'DJ', 'DJI', 'Djibouti', 'Djiboutian'),
(266, 'GA', 'GAB', 'Gabon', 'Gabonese'),
(268, 'GE', 'GEO', 'Georgia', 'Georgian'),
(270, 'GM', 'GMB', 'Gambia', 'Gambian'),
(275, 'PS', 'PSE', 'Palestine, State of', 'Palestinian'),
(276, 'DE', 'DEU', 'Germany', 'German'),
(288, 'GH', 'GHA', 'Ghana', 'Ghanaian'),
(292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(296, 'KI', 'KIR', 'Kiribati', 'I-Kiribati'),
(300, 'GR', 'GRC', 'Greece', 'Greek, Hellenic'),
(304, 'GL', 'GRL', 'Greenland', 'Greenlandic'),
(308, 'GD', 'GRD', 'Grenada', 'Grenadian'),
(312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(316, 'GU', 'GUM', 'Guam', 'Guamanian, Guambat'),
(320, 'GT', 'GTM', 'Guatemala', 'Guatemalan'),
(324, 'GN', 'GIN', 'Guinea', 'Guinean'),
(328, 'GY', 'GUY', 'Guyana', 'Guyanese'),
(332, 'HT', 'HTI', 'Haiti', 'Haitian'),
(334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Heard Island or McDonald Islands'),
(336, 'VA', 'VAT', 'Vatican City State', 'Vatican'),
(340, 'HN', 'HND', 'Honduras', 'Honduran'),
(344, 'HK', 'HKG', 'Hong Kong', 'Hong Kong, Hong Kongese'),
(348, 'HU', 'HUN', 'Hungary', 'Hungarian, Magyar'),
(352, 'IS', 'ISL', 'Iceland', 'Icelandic'),
(356, 'IN', 'IND', 'India', 'Indian'),
(360, 'ID', 'IDN', 'Indonesia', 'Indonesian'),
(364, 'IR', 'IRN', 'Iran', 'Iranian, Persian'),
(368, 'IQ', 'IRQ', 'Iraq', 'Iraqi'),
(372, 'IE', 'IRL', 'Ireland', 'Irish'),
(376, 'IL', 'ISR', 'Israel', 'Israeli'),
(380, 'IT', 'ITA', 'Italy', 'Italian'),
(384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Ivorian'),
(388, 'JM', 'JAM', 'Jamaica', 'Jamaican'),
(392, 'JP', 'JPN', 'Japan', 'Japanese'),
(398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstani, Kazakh'),
(400, 'JO', 'JOR', 'Jordan', 'Jordanian'),
(404, 'KE', 'KEN', 'Kenya', 'Kenyan'),
(408, 'KP', 'PRK', 'Korea (Democratic People\'s Republic of)', 'North Korean'),
(410, 'KR', 'KOR', 'Korea (Republic of)', 'South Korean'),
(414, 'KW', 'KWT', 'Kuwait', 'Kuwaiti'),
(417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz'),
(418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'Lao, Laotian'),
(422, 'LB', 'LBN', 'Lebanon', 'Lebanese'),
(426, 'LS', 'LSO', 'Lesotho', 'Basotho'),
(428, 'LV', 'LVA', 'Latvia', 'Latvian'),
(430, 'LR', 'LBR', 'Liberia', 'Liberian'),
(434, 'LY', 'LBY', 'Libya', 'Libyan'),
(438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(440, 'LT', 'LTU', 'Lithuania', 'Lithuanian'),
(442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg, Luxembourgish'),
(446, 'MO', 'MAC', 'Macao', 'Macanese, Chinese'),
(450, 'MG', 'MDG', 'Madagascar', 'Malagasy'),
(454, 'MW', 'MWI', 'Malawi', 'Malawian'),
(458, 'MY', 'MYS', 'Malaysia', 'Malaysian'),
(462, 'MV', 'MDV', 'Maldives', 'Maldivian'),
(466, 'ML', 'MLI', 'Mali', 'Malian, Malinese'),
(470, 'MT', 'MLT', 'Malta', 'Maltese'),
(474, 'MQ', 'MTQ', 'Martinique', 'Martiniquais, Martinican'),
(478, 'MR', 'MRT', 'Mauritania', 'Mauritanian'),
(480, 'MU', 'MUS', 'Mauritius', 'Mauritian'),
(484, 'MX', 'MEX', 'Mexico', 'Mexican'),
(492, 'MC', 'MCO', 'Monaco', 'Monégasque, Monacan'),
(496, 'MN', 'MNG', 'Mongolia', 'Mongolian'),
(498, 'MD', 'MDA', 'Moldova (Republic of)', 'Moldovan'),
(499, 'ME', 'MNE', 'Montenegro', 'Montenegrin'),
(500, 'MS', 'MSR', 'Montserrat', 'Montserratian'),
(504, 'MA', 'MAR', 'Morocco', 'Moroccan'),
(508, 'MZ', 'MOZ', 'Mozambique', 'Mozambican'),
(512, 'OM', 'OMN', 'Oman', 'Omani'),
(516, 'NA', 'NAM', 'Namibia', 'Namibian'),
(520, 'NR', 'NRU', 'Nauru', 'Nauruan'),
(524, 'NP', 'NPL', 'Nepal', 'Nepali, Nepalese'),
(528, 'NL', 'NLD', 'Netherlands', 'Dutch, Netherlandic'),
(531, 'CW', 'CUW', 'Curaçao', 'Curaçaoan'),
(533, 'AW', 'ABW', 'Aruba', 'Aruban'),
(534, 'SX', 'SXM', 'Sint Maarten (Dutch part)', 'Sint Maarten'),
(535, 'BQ', 'BES', 'Bonaire, Sint Eustatius and Saba', 'Bonaire'),
(540, 'NC', 'NCL', 'New Caledonia', 'New Caledonian'),
(548, 'VU', 'VUT', 'Vanuatu', 'Ni-Vanuatu, Vanuatuan'),
(554, 'NZ', 'NZL', 'New Zealand', 'New Zealand, NZ'),
(558, 'NI', 'NIC', 'Nicaragua', 'Nicaraguan'),
(562, 'NE', 'NER', 'Niger', 'Nigerien'),
(566, 'NG', 'NGA', 'Nigeria', 'Nigerian'),
(570, 'NU', 'NIU', 'Niue', 'Niuean'),
(574, 'NF', 'NFK', 'Norfolk Island', 'Norfolk Island'),
(578, 'NO', 'NOR', 'Norway', 'Norwegian'),
(580, 'MP', 'MNP', 'Northern Mariana Islands', 'Northern Marianan'),
(581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'American'),
(583, 'FM', 'FSM', 'Micronesia (Federated States of)', 'Micronesian'),
(584, 'MH', 'MHL', 'Marshall Islands', 'Marshallese'),
(585, 'PW', 'PLW', 'Palau', 'Palauan'),
(586, 'PK', 'PAK', 'Pakistan', 'Pakistani'),
(591, 'PA', 'PAN', 'Panama', 'Panamanian'),
(598, 'PG', 'PNG', 'Papua New Guinea', 'Papua New Guinean, Papuan'),
(600, 'PY', 'PRY', 'Paraguay', 'Paraguayan'),
(604, 'PE', 'PER', 'Peru', 'Peruvian'),
(608, 'PH', 'PHL', 'Philippines', 'Philippine, Filipino'),
(612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn Island'),
(616, 'PL', 'POL', 'Poland', 'Polish'),
(620, 'PT', 'PRT', 'Portugal', 'Portuguese'),
(624, 'GW', 'GNB', 'Guinea-Bissau', 'Bissau-Guinean'),
(626, 'TL', 'TLS', 'Timor-Leste', 'Timorese'),
(630, 'PR', 'PRI', 'Puerto Rico', 'Puerto Rican'),
(634, 'QA', 'QAT', 'Qatar', 'Qatari'),
(638, 'RE', 'REU', 'Réunion', 'Réunionese, Réunionnais'),
(642, 'RO', 'ROU', 'Romania', 'Romanian'),
(643, 'RU', 'RUS', 'Russian Federation', 'Russian'),
(646, 'RW', 'RWA', 'Rwanda', 'Rwandan'),
(652, 'BL', 'BLM', 'Saint Barthélemy', 'Barthélemois'),
(654, 'SH', 'SHN', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helenian'),
(659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Kittitian or Nevisian'),
(660, 'AI', 'AIA', 'Anguilla', 'Anguillan'),
(662, 'LC', 'LCA', 'Saint Lucia', 'Saint Lucian'),
(663, 'MF', 'MAF', 'Saint Martin (French part)', 'Saint-Martinoise'),
(666, 'PM', 'SPM', 'Saint Pierre and Miquelon', 'Saint-Pierrais or Miquelonnais'),
(670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint Vincentian, Vincentian'),
(674, 'SM', 'SMR', 'San Marino', 'Sammarinese'),
(678, 'ST', 'STP', 'Sao Tome and Principe', 'São Toméan'),
(682, 'SA', 'SAU', 'Saudi Arabia', 'Saudi, Saudi Arabian'),
(686, 'SN', 'SEN', 'Senegal', 'Senegalese'),
(688, 'RS', 'SRB', 'Serbia', 'Serbian'),
(690, 'SC', 'SYC', 'Seychelles', 'Seychellois'),
(694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leonean'),
(702, 'SG', 'SGP', 'Singapore', 'Singaporean'),
(703, 'SK', 'SVK', 'Slovakia', 'Slovak'),
(704, 'VN', 'VNM', 'Vietnam', 'Vietnamese'),
(705, 'SI', 'SVN', 'Slovenia', 'Slovenian, Slovene'),
(706, 'SO', 'SOM', 'Somalia', 'Somali, Somalian'),
(710, 'ZA', 'ZAF', 'South Africa', 'South African'),
(716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwean'),
(724, 'ES', 'ESP', 'Spain', 'Spanish'),
(728, 'SS', 'SSD', 'South Sudan', 'South Sudanese'),
(729, 'SD', 'SDN', 'Sudan', 'Sudanese'),
(732, 'EH', 'ESH', 'Western Sahara', 'Sahrawi, Sahrawian, Sahraouian'),
(740, 'SR', 'SUR', 'Suriname', 'Surinamese'),
(744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard'),
(748, 'SZ', 'SWZ', 'Swaziland', 'Swazi'),
(752, 'SE', 'SWE', 'Sweden', 'Swedish'),
(756, 'CH', 'CHE', 'Switzerland', 'Swiss'),
(760, 'SY', 'SYR', 'Syrian Arab Republic', 'Syrian'),
(762, 'TJ', 'TJK', 'Tajikistan', 'Tajikistani'),
(764, 'TH', 'THA', 'Thailand', 'Thai'),
(768, 'TG', 'TGO', 'Togo', 'Togolese'),
(772, 'TK', 'TKL', 'Tokelau', 'Tokelauan'),
(776, 'TO', 'TON', 'Tonga', 'Tongan'),
(780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinidadian or Tobagonian'),
(784, 'AE', 'ARE', 'United Arab Emirates', 'Emirati, Emirian, Emiri'),
(788, 'TN', 'TUN', 'Tunisia', 'Tunisian'),
(792, 'TR', 'TUR', 'Turkey', 'Turkish'),
(795, 'TM', 'TKM', 'Turkmenistan', 'Turkmen'),
(796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Turks and Caicos Island'),
(798, 'TV', 'TUV', 'Tuvalu', 'Tuvaluan'),
(800, 'UG', 'UGA', 'Uganda', 'Ugandan'),
(804, 'UA', 'UKR', 'Ukraine', 'Ukrainian'),
(807, 'MK', 'MKD', 'Macedonia (the former Yugoslav Republic of)', 'Macedonian'),
(818, 'EG', 'EGY', 'Egypt', 'Egyptian'),
(826, 'GB', 'GBR', 'United Kingdom of Great Britain and Northern Ireland', 'British, UK'),
(831, 'GG', 'GGY', 'Guernsey', 'Channel Island'),
(832, 'JE', 'JEY', 'Jersey', 'Channel Island'),
(833, 'IM', 'IMN', 'Isle of Man', 'Manx'),
(834, 'TZ', 'TZA', 'Tanzania, United Republic of', 'Tanzanian'),
(840, 'US', 'USA', 'United States of America', 'American'),
(850, 'VI', 'VIR', 'Virgin Islands (U.S.)', 'U.S. Virgin Island'),
(854, 'BF', 'BFA', 'Burkina Faso', 'Burkinabé'),
(858, 'UY', 'URY', 'Uruguay', 'Uruguayan'),
(860, 'UZ', 'UZB', 'Uzbekistan', 'Uzbekistani, Uzbek'),
(862, 'VE', 'VEN', 'Venezuela (Bolivarian Republic of)', 'Venezuelan'),
(876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis and Futuna, Wallisian or Futunan'),
(882, 'WS', 'WSM', 'Samoa', 'Samoan'),
(887, 'YE', 'YEM', 'Yemen', 'Yemeni'),
(894, 'ZM', 'ZMB', 'Zambia', 'Zambian');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `gallery_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `ipn_listen` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `posted_info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ipn_listen`
--

INSERT INTO `ipn_listen` (`id`, `date_create`, `posted_info`) VALUES
(12, '2017-05-20 13:50:40', 'a:39:{s:10:\"mc_gross_1\";s:4:\"1.00\";s:14:\"num_cart_items\";s:1:\"1\";s:8:\"payer_id\";s:13:\"SLHVYXPR638XE\";s:20:\"address_country_code\";s:2:\"TH\";s:12:\"ipn_track_id\";s:13:\"bbcf47709cdfd\";s:11:\"address_zip\";s:5:\"10150\";s:7:\"invoice\";s:9:\"INV-00012\";s:7:\"charset\";s:12:\"windows-1252\";s:13:\"payment_gross\";s:0:\"\";s:14:\"address_status\";s:9:\"confirmed\";s:14:\"address_street\";s:61:\"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401\";s:11:\"verify_sign\";s:56:\"AFcWxV21C7fd0v3bYYYRCpSSRl31ALMB04nIL0RhKPD3l8BtoCQws3vI\";s:14:\"pending_reason\";s:10:\"unilateral\";s:8:\"txn_type\";s:4:\"cart\";s:12:\"item_number1\";s:0:\"\";s:11:\"mc_currency\";s:3:\"THB\";s:19:\"transaction_subject\";s:0:\"\";s:6:\"custom\";s:0:\"\";s:22:\"protection_eligibility\";s:10:\"Ineligible\";s:9:\"quantity1\";s:1:\"1\";s:15:\"address_country\";s:8:\"Thailand\";s:12:\"payer_status\";s:10:\"unverified\";s:10:\"first_name\";s:0:\"\";s:10:\"item_name1\";s:47:\"Booking ID #00012 Room  (1 per night ) * 1 Days\";s:12:\"address_name\";s:16:\"Treehouse Resort\";s:8:\"mc_gross\";s:4:\"1.00\";s:12:\"payment_date\";s:25:\"23:44:19 May 19, 2017 PDT\";s:14:\"payment_status\";s:7:\"Pending\";s:9:\"last_name\";s:0:\"\";s:13:\"address_state\";s:7:\"Bangkok\";s:19:\"payer_business_name\";s:16:\"Treehouse Resort\";s:6:\"txn_id\";s:17:\"4D886475A8752670E\";s:6:\"resend\";s:4:\"true\";s:12:\"payment_type\";s:7:\"instant\";s:14:\"notify_version\";s:3:\"3.8\";s:11:\"payer_email\";s:22:\"sankhumpha84@gmail.com\";s:14:\"receiver_email\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:12:\"address_city\";s:7:\"Bangbon\";s:17:\"residence_country\";s:2:\"TH\";}'),
(11, '2017-05-20 13:44:24', 'a:38:{s:8:\"mc_gross\";s:4:\"1.00\";s:7:\"invoice\";s:9:\"INV-00012\";s:22:\"protection_eligibility\";s:10:\"Ineligible\";s:14:\"address_status\";s:9:\"confirmed\";s:12:\"item_number1\";s:0:\"\";s:8:\"payer_id\";s:13:\"SLHVYXPR638XE\";s:14:\"address_street\";s:61:\"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401\";s:12:\"payment_date\";s:25:\"23:44:19 May 19, 2017 PDT\";s:14:\"payment_status\";s:7:\"Pending\";s:7:\"charset\";s:12:\"windows-1252\";s:11:\"address_zip\";s:5:\"10150\";s:10:\"first_name\";s:0:\"\";s:20:\"address_country_code\";s:2:\"TH\";s:12:\"address_name\";s:16:\"Treehouse Resort\";s:14:\"notify_version\";s:3:\"3.8\";s:6:\"custom\";s:0:\"\";s:12:\"payer_status\";s:10:\"unverified\";s:15:\"address_country\";s:8:\"Thailand\";s:14:\"num_cart_items\";s:1:\"1\";s:12:\"address_city\";s:7:\"Bangbon\";s:11:\"verify_sign\";s:56:\"A1oGOA3gzVMcdXmtIgfbakbg7h5YAdIXscNTc5bQOdQSV-KlpQiyoIQ9\";s:11:\"payer_email\";s:22:\"sankhumpha84@gmail.com\";s:6:\"txn_id\";s:17:\"4D886475A8752670E\";s:12:\"payment_type\";s:7:\"instant\";s:19:\"payer_business_name\";s:16:\"Treehouse Resort\";s:9:\"last_name\";s:0:\"\";s:10:\"item_name1\";s:47:\"Booking ID #00012 Room  (1 per night ) * 1 Days\";s:13:\"address_state\";s:7:\"Bangkok\";s:14:\"receiver_email\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:9:\"quantity1\";s:1:\"1\";s:14:\"pending_reason\";s:10:\"unilateral\";s:8:\"txn_type\";s:4:\"cart\";s:10:\"mc_gross_1\";s:4:\"1.00\";s:11:\"mc_currency\";s:3:\"THB\";s:17:\"residence_country\";s:2:\"TH\";s:19:\"transaction_subject\";s:0:\"\";s:13:\"payment_gross\";s:0:\"\";s:12:\"ipn_track_id\";s:13:\"bbcf47709cdfd\";}'),
(10, '2017-05-20 13:37:27', 'a:39:{s:10:\"mc_gross_1\";s:4:\"1.00\";s:14:\"num_cart_items\";s:1:\"1\";s:8:\"payer_id\";s:13:\"SLHVYXPR638XE\";s:20:\"address_country_code\";s:2:\"TH\";s:12:\"ipn_track_id\";s:13:\"c62f864acc871\";s:11:\"address_zip\";s:5:\"10150\";s:7:\"invoice\";s:9:\"INV-00011\";s:7:\"charset\";s:12:\"windows-1252\";s:13:\"payment_gross\";s:0:\"\";s:14:\"address_status\";s:9:\"confirmed\";s:14:\"address_street\";s:61:\"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401\";s:11:\"verify_sign\";s:56:\"AFcWxV21C7fd0v3bYYYRCpSSRl31APLXSO.yQw0eBMVHvpPCdgPEn3hb\";s:14:\"pending_reason\";s:10:\"unilateral\";s:8:\"txn_type\";s:4:\"cart\";s:12:\"item_number1\";s:0:\"\";s:11:\"mc_currency\";s:3:\"THB\";s:19:\"transaction_subject\";s:0:\"\";s:6:\"custom\";s:0:\"\";s:22:\"protection_eligibility\";s:10:\"Ineligible\";s:9:\"quantity1\";s:1:\"1\";s:15:\"address_country\";s:8:\"Thailand\";s:12:\"payer_status\";s:10:\"unverified\";s:10:\"first_name\";s:0:\"\";s:10:\"item_name1\";s:47:\"Booking ID #00011 Room  (1 per night ) * 1 Days\";s:12:\"address_name\";s:16:\"Treehouse Resort\";s:8:\"mc_gross\";s:4:\"1.00\";s:12:\"payment_date\";s:25:\"23:31:20 May 19, 2017 PDT\";s:14:\"payment_status\";s:7:\"Pending\";s:9:\"last_name\";s:0:\"\";s:13:\"address_state\";s:7:\"Bangkok\";s:19:\"payer_business_name\";s:16:\"Treehouse Resort\";s:6:\"txn_id\";s:17:\"8M2466659W024633V\";s:6:\"resend\";s:4:\"true\";s:12:\"payment_type\";s:7:\"instant\";s:14:\"notify_version\";s:3:\"3.8\";s:11:\"payer_email\";s:22:\"sankhumpha84@gmail.com\";s:14:\"receiver_email\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:12:\"address_city\";s:7:\"Bangbon\";s:17:\"residence_country\";s:2:\"TH\";}'),
(9, '2017-05-20 13:31:25', 'a:38:{s:8:\"mc_gross\";s:4:\"1.00\";s:7:\"invoice\";s:9:\"INV-00011\";s:22:\"protection_eligibility\";s:10:\"Ineligible\";s:14:\"address_status\";s:9:\"confirmed\";s:12:\"item_number1\";s:0:\"\";s:8:\"payer_id\";s:13:\"SLHVYXPR638XE\";s:14:\"address_street\";s:61:\"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401\";s:12:\"payment_date\";s:25:\"23:31:20 May 19, 2017 PDT\";s:14:\"payment_status\";s:7:\"Pending\";s:7:\"charset\";s:12:\"windows-1252\";s:11:\"address_zip\";s:5:\"10150\";s:10:\"first_name\";s:0:\"\";s:20:\"address_country_code\";s:2:\"TH\";s:12:\"address_name\";s:16:\"Treehouse Resort\";s:14:\"notify_version\";s:3:\"3.8\";s:6:\"custom\";s:0:\"\";s:12:\"payer_status\";s:10:\"unverified\";s:15:\"address_country\";s:8:\"Thailand\";s:14:\"num_cart_items\";s:1:\"1\";s:12:\"address_city\";s:7:\"Bangbon\";s:11:\"verify_sign\";s:56:\"A4aO6CjVMiW0LvjQlznv5ivFZj56AjXMHW11.rX4qOUc2YSYyplI.Lt2\";s:11:\"payer_email\";s:22:\"sankhumpha84@gmail.com\";s:6:\"txn_id\";s:17:\"8M2466659W024633V\";s:12:\"payment_type\";s:7:\"instant\";s:19:\"payer_business_name\";s:16:\"Treehouse Resort\";s:9:\"last_name\";s:0:\"\";s:10:\"item_name1\";s:47:\"Booking ID #00011 Room  (1 per night ) * 1 Days\";s:13:\"address_state\";s:7:\"Bangkok\";s:14:\"receiver_email\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:9:\"quantity1\";s:1:\"1\";s:14:\"pending_reason\";s:10:\"unilateral\";s:8:\"txn_type\";s:4:\"cart\";s:10:\"mc_gross_1\";s:4:\"1.00\";s:11:\"mc_currency\";s:3:\"THB\";s:17:\"residence_country\";s:2:\"TH\";s:19:\"transaction_subject\";s:0:\"\";s:13:\"payment_gross\";s:0:\"\";s:12:\"ipn_track_id\";s:13:\"c62f864acc871\";}'),
(8, '2017-05-20 13:03:24', 'a:40:{s:8:\"mc_gross\";s:7:\"1980.00\";s:7:\"invoice\";s:9:\"INV-00008\";s:22:\"protection_eligibility\";s:10:\"Ineligible\";s:14:\"address_status\";s:9:\"confirmed\";s:12:\"item_number1\";s:0:\"\";s:8:\"payer_id\";s:13:\"BN5DEJF3R222E\";s:14:\"address_street\";s:61:\"1465 SK Apartment R.3106 Bangbon\r\n1465 SK Apartment room 1401\";s:12:\"payment_date\";s:25:\"23:02:57 May 19, 2017 PDT\";s:14:\"payment_status\";s:7:\"Pending\";s:7:\"charset\";s:12:\"windows-1252\";s:11:\"address_zip\";s:5:\"10150\";s:10:\"first_name\";s:0:\"\";s:20:\"address_country_code\";s:2:\"TH\";s:12:\"address_name\";s:1:\" \";s:14:\"notify_version\";s:3:\"3.8\";s:6:\"custom\";s:0:\"\";s:12:\"payer_status\";s:10:\"unverified\";s:8:\"business\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:15:\"address_country\";s:8:\"Thailand\";s:14:\"num_cart_items\";s:1:\"1\";s:12:\"address_city\";s:7:\"Bangbon\";s:11:\"verify_sign\";s:56:\"AfAkavmC3xOd-bBA3ryNkIOB-nAFAXZ4phFDg.09HKoqA5BuMCD6zx-U\";s:11:\"payer_email\";s:22:\"sankhumpha84@gmail.com\";s:6:\"txn_id\";s:17:\"06U89927R4491670P\";s:12:\"payment_type\";s:7:\"instant\";s:9:\"last_name\";s:0:\"\";s:10:\"item_name1\";s:49:\"Booking ID #00008 Room  (990 per night ) * 2 Days\";s:13:\"address_state\";s:7:\"Bangkok\";s:14:\"receiver_email\";s:34:\"sankhumpha84-facilitator@gmail.com\";s:9:\"quantity1\";s:1:\"2\";s:11:\"receiver_id\";s:13:\"A2M2C8UP95V5N\";s:14:\"pending_reason\";s:14:\"multi_currency\";s:8:\"txn_type\";s:4:\"cart\";s:10:\"mc_gross_1\";s:7:\"1980.00\";s:11:\"mc_currency\";s:3:\"THB\";s:17:\"residence_country\";s:2:\"TH\";s:8:\"test_ipn\";s:1:\"1\";s:19:\"transaction_subject\";s:0:\"\";s:13:\"payment_gross\";s:0:\"\";s:12:\"ipn_track_id\";s:13:\"2ef2cfd41cb6f\";}');

-- --------------------------------------------------------

--
-- Table structure for table `lang_static`
--

CREATE TABLE `lang_static` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lang_static`
--

INSERT INTO `lang_static` (`id`, `name`, `data`) VALUES
(4, 'home', 'a:2:{s:2:\"th\";s:24:\"หน้าหลัก\";s:2:\"en\";s:4:\"home\";}'),
(5, 'room', 'a:2:{s:2:\"th\";s:21:\"ห้องพัก\";s:2:\"en\";s:4:\"Room\";}'),
(6, 'gallery', 'a:2:{s:2:\"th\";s:21:\"แกลอรี่\";s:2:\"en\";s:7:\"gallery\";}'),
(7, 'promotion', 'a:2:{s:2:\"th\";s:27:\"โปรโมชั่น\";s:2:\"en\";s:9:\"Promotion\";}'),
(8, 'contact', 'a:2:{s:2:\"th\";s:27:\"ติดต่อเรา\";s:2:\"en\";s:7:\"contact\";}'),
(9, 'booking', 'a:2:{s:2:\"th\";s:9:\"จอง\";s:2:\"en\";s:7:\"booking\";}'),
(10, 'detail', 'a:2:{s:2:\"th\";s:30:\"รายละเอียด\";s:2:\"en\";s:6:\"detail\";}'),
(11, 'checkin', 'a:2:{s:2:\"th\";s:30:\"วันเข้าพัก\";s:2:\"en\";s:7:\"checkin\";}'),
(12, 'checkout', 'a:2:{s:2:\"th\";s:18:\"วันออก\";s:2:\"en\";s:8:\"checkout\";}'),
(13, 'parent', 'a:2:{s:2:\"th\";s:36:\"จำนวนผู้ใหญ่\";s:2:\"en\";s:6:\"parent\";}'),
(14, 'child', 'a:2:{s:2:\"th\";s:27:\"จำนวนเด็ก\";s:2:\"en\";s:5:\"child\";}'),
(15, 'check', 'a:2:{s:2:\"th\";s:21:\"ตรวจสอบ\";s:2:\"en\";s:5:\"Check\";}'),
(16, 'my room', 'a:2:{s:2:\"th\";s:39:\"ห้องพักของเรา\";s:2:\"en\";s:8:\"My Rooms\";}'),
(17, 'choose room', 'a:2:{s:2:\"th\";s:210:\"เชิญเลือกห้องพักที่ท่านสนใจที่เราพร้อมให้บริการเพื่อวันพิเศษสำหรับท่าน\";s:2:\"en\";s:16:\"Choose Our rooms\";}'),
(18, 'per night', 'a:2:{s:2:\"th\";s:18:\"ต่อคืน\";s:2:\"en\";s:9:\"per night\";}'),
(19, 'see gallery\'', 'a:2:{s:2:\"th\";s:204:\"ขอเชิญชมภาพแกลอรี่จาก Tree House Resort บ้านต้นไม้รีสอร์ท by อลงกรณ์ฟาร์ม แก่งกระจาน\";s:2:\"en\";s:16:\"Sell Our Gallery\";}'),
(20, 'sound', 'a:2:{s:2:\"th\";s:72:\"เสียงตอบรับจากผู้เข้าพัก\";s:2:\"en\";s:9:\"Feed back\";}'),
(21, 'content', 'a:2:{s:2:\"th\";s:36:\"บทความของเรา\";s:2:\"en\";s:7:\"Content\";}'),
(22, 'suggestions', 'a:2:{s:2:\"th\";s:45:\"เสนอ / แนะนำ / ติชม\";s:2:\"en\";s:30:\"Offer / suggestions / feedback\";}'),
(23, 'your name', 'a:2:{s:2:\"th\";s:33:\"ชื่อของท่าน\";s:2:\"en\";s:9:\"Your name\";}'),
(24, 'message', 'a:2:{s:2:\"th\";s:21:\"ข้อความ\";s:2:\"en\";s:7:\"Message\";}'),
(25, 'description', 'a:2:{s:2:\"th\";s:30:\"รายละเอียด\";s:2:\"en\";s:11:\"description\";}'),
(26, 'send', 'a:2:{s:2:\"th\";s:27:\"ส่งข้อมูล\";s:2:\"en\";s:4:\"send\";}'),
(27, 'Exclusively for you !!', 'a:2:{s:2:\"th\";s:56:\"สิทธิพิเศษเพื่อคุณ!!\";s:2:\"en\";s:22:\"Exclusively for you !!\";}'),
(28, 'Promotions, special or exclusive privileges', 'a:2:{s:2:\"th\";s:146:\"ติดตามโปรโมชั่น ส่วนลดพิเศษ หรือสิทธิพิเศษเฉพาะคุณ\";s:2:\"en\";s:43:\"Promotions, special or exclusive privileges\";}'),
(29, 'Touchpoints', 'a:2:{s:2:\"th\";s:48:\"ช่องทางการติดต่อ\";s:2:\"en\";s:11:\"Touchpoints\";}'),
(30, 'no data', 'a:2:{s:2:\"th\";s:33:\"ไม่มีข้อมูล\";s:2:\"en\";s:7:\"no data\";}'),
(31, 'view', 'a:2:{s:2:\"th\";s:18:\"ดูห้อง\";s:2:\"en\";s:4:\"View\";}'),
(32, 'search', 'a:2:{s:2:\"th\";s:15:\"ค้นหา\";s:2:\"en\";s:6:\"Search\";}'),
(33, 'bath', 'a:2:{s:2:\"th\";s:9:\"บาท\";s:2:\"en\";s:4:\"bath\";}'),
(34, 'night', 'a:2:{s:2:\"th\";s:9:\"คืน\";s:2:\"en\";s:5:\"night\";}'),
(35, 'inquiry', 'a:2:{s:2:\"th\";s:45:\"สอบถามเพิ่มเติม\";s:2:\"en\";s:7:\"Inquiry\";}'),
(36, 'booking success', 'a:2:{s:2:\"th\";s:158:\"ทำการจองเรียบร้อย รอเจ้าหน้าที่ติดต่อกลับค่ะ ขอบคุณค่ะ\";s:2:\"en\";s:38:\"Booking Success!!! Thank you very much\";}'),
(37, 'our rooms', 'a:2:{s:2:\"th\";s:39:\"ห้องพักของเรา\";s:2:\"en\";s:9:\"Our Rooms\";}'),
(38, 'choose room interest', 'a:2:{s:2:\"th\";s:60:\"เลือกห้องที่ท่านสนใจ\";s:2:\"en\";s:20:\"Choose Room Interest\";}'),
(39, 'all', 'a:2:{s:2:\"th\";s:21:\"ทั้งหมด\";s:2:\"en\";s:3:\"All\";}'),
(40, 'sorry', 'a:2:{s:2:\"th\";s:136:\"ขออภัย ช่วงเวลาดั่งกล่าวมีข้อมูลการจองห้องแล้ว\";s:2:\"en\";s:19:\"Sorry, Booking fail\";}'),
(41, 'login', 'a:2:{s:2:\"th\";s:24:\"เข้าระบบ\";s:2:\"en\";s:5:\"Login\";}'),
(68, 'about', 'a:2:{s:2:\"th\";s:36:\"เกี่ยวกับเรา\";s:2:\"en\";s:5:\"About\";}'),
(43, 'register', 'a:2:{s:2:\"th\";s:33:\"สมัครสมาชิก\";s:2:\"en\";s:8:\"Register\";}'),
(44, 'mobile', 'a:2:{s:2:\"th\";s:39:\"เบอร์โทรศัพท์\";s:2:\"en\";s:6:\"Mobile\";}'),
(45, 'thankyou register', 'a:2:{s:2:\"th\";s:136:\"ขอขอบพระคุณ ระบบได้ทำการลงทะเบียนเรียบร้อยแล้ว\";s:2:\"en\";s:22:\"Thank you, Pleas login\";}'),
(46, 'sorry login', 'a:2:{s:2:\"th\";s:60:\"กรุณาตรวจสอบอีกครั้ง\";s:2:\"en\";s:37:\"Sorry, Pleash check email or password\";}'),
(47, 'hello', 'a:2:{s:2:\"th\";s:18:\"สวัสดี\";s:2:\"en\";s:4:\"Hi, \";}'),
(48, 'logout', 'a:2:{s:2:\"th\";s:30:\"ออกจากระบบ\";s:2:\"en\";s:6:\"Logout\";}'),
(49, 'profile', 'a:2:{s:2:\"th\";s:36:\"ข้อมูลสมาชิก\";s:2:\"en\";s:7:\"Profile\";}'),
(50, 'history', 'a:2:{s:2:\"th\";s:51:\"ประวัติการจองห้อง\";s:2:\"en\";s:7:\"History\";}'),
(51, 'save', 'a:2:{s:2:\"th\";s:18:\"บันทึก\";s:2:\"en\";s:4:\"Save\";}'),
(52, 'save success', 'a:2:{s:2:\"th\";s:63:\"บันทึกข้อมูลเรียบร้อย\";s:2:\"en\";s:13:\"Save Complete\";}'),
(53, 'address', 'a:2:{s:2:\"th\";s:21:\"ที่อยู่\";s:2:\"en\";s:7:\"Address\";}'),
(54, 'map', 'a:2:{s:2:\"th\";s:18:\"แผนที่\";s:2:\"en\";s:3:\"Map\";}'),
(55, 'date', 'a:2:{s:2:\"th\";s:18:\"วันที่\";s:2:\"en\";s:4:\"Date\";}'),
(56, 'status', 'a:2:{s:2:\"th\";s:15:\"สถานะ\";s:2:\"en\";s:6:\"Status\";}'),
(57, 'total', 'a:2:{s:2:\"th\";s:9:\"รวม\";s:2:\"en\";s:5:\"Total\";}'),
(58, 'days', 'a:2:{s:2:\"th\";s:9:\"วัน\";s:2:\"en\";s:4:\"Days\";}'),
(59, 'Thankyou', 'a:2:{s:2:\"th\";s:81:\"ขอขอบพระคุณท่านเป็นอย่างสูง\";s:2:\"en\";s:19:\"Thank you very much\";}'),
(60, 'content other', 'a:2:{s:2:\"th\";s:33:\"บทความอื่นๆ\";s:2:\"en\";s:13:\"content other\";}'),
(61, 'send message to me', 'a:2:{s:2:\"th\";s:48:\"ส่งข้อความถึงเรา\";s:2:\"en\";s:18:\"Send message to me\";}'),
(62, 'please send message to me', 'a:2:{s:2:\"th\";s:63:\"กรุณาส่งข้อความถึงเรา\";s:2:\"en\";s:25:\"please send message to me\";}'),
(63, 'subject', 'a:2:{s:2:\"th\";s:18:\"หัวข้อ\";s:2:\"en\";s:7:\"Subject\";}'),
(64, 'all gallery', 'a:2:{s:2:\"th\";s:30:\"ภาพทั้งหมด\";s:2:\"en\";s:11:\"All Gallery\";}'),
(65, 'choose gallery', 'a:2:{s:2:\"th\";s:45:\"เลือกภาพที่สนใจ\";s:2:\"en\";s:14:\"Choose Gallery\";}'),
(66, 'promotion other', 'a:2:{s:2:\"th\";s:43:\"โปรโมชั่น อื่นๆ\";s:2:\"en\";s:15:\"Other Promotion\";}'),
(67, 'welcome to', 'a:2:{s:2:\"th\";s:58:\"ยินดีต้อนรับเข้าสู่ \";s:2:\"en\";s:11:\"Welcome to \";}'),
(69, 'subscribe', 'a:2:{s:2:\"th\";s:72:\"ติดตามเราเพื่อรับข่าวสาร\";s:2:\"en\";s:27:\"SUBSCRIBE TO OUR NEWSLETTER\";}'),
(70, 'Subscribe Now', 'a:2:{s:2:\"th\";s:18:\"ยืนยัน\";s:2:\"en\";s:13:\"Subscribe Now\";}'),
(71, 'book now by categories', 'a:2:{s:2:\"th\";s:81:\"เลือกหมวดหมู่ที่ท่านต้องการ\";s:2:\"en\";s:22:\"book now by categories\";}'),
(72, 'choose book now by categories', 'a:2:{s:2:\"th\";s:159:\"ท่านสามารถเลือกทัวร์ที่เหมาะสมกับการท่องเที่ยงของท่าน\";s:2:\"en\";s:37:\"you can choose book now by categories\";}');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `email`, `password`, `mobile`, `fbid`, `create_date`, `ip`) VALUES
(1, 'บัณฑิต แสนคำภา', 'sankhumpha84@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0993331111', NULL, '2017-02-26 15:41:25', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `room_id`, `start_date`, `end_date`, `price`) VALUES
(1, 9, '2017-09-23', '2017-09-25', 900),
(2, 10, '2017-09-25', '2017-10-31', 29000);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
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
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `star` double DEFAULT NULL,
  `country_id` int(3) NOT NULL,
  `deal` enum('hot','hotel') COLLATE utf8_unicode_ci NOT NULL,
  `use_view` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `category_id`, `room_no`, `room_name`, `room_short`, `room_description`, `room_price`, `room_total`, `room_status`, `room_image`, `seo_title`, `seo_keywords`, `seo_description`, `link`, `star`, `country_id`, `deal`, `use_view`) VALUES
(10, 2, '0001-60', 'a:2:{s:2:\"th\";s:33:\"ทิปสิงคโปร์\";s:2:\"en\";s:14:\"Singapore Trip\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:1080:\"เซลส์ไฮเทคแซวซิตี้เซ็กส์ เฟอร์นิเจอร์เซ็กซ์ ควีนวัคค์เอ็นจีโอจิตเภท รีโมตรองรับแคมป์ ดีพาร์ตเมนต์มอยส์เจอไรเซอร์แจ๊กพ็อตบัส ไวกิ้งโฟล์คสปาย เวิลด์ซีดานเซาท์มาม่าห่วย มั้งแคมป์ เสือโคร่งเอเซียอันตรกิริยาเลดี้อิมพีเรียล แคชเชียร์แจ๊กพ็อตเซ่นไหว้บอร์ด สไลด์มอลล์อุปทาน ยะเยือกแฟล็ต บลูเบอร์รีฮาราคีรีจุ๊ยดยุก โปรเจ็กเตอร์พาสตาเอสเปรสโซแบด เซ่นไหว้ศิรินทร์บอดี้ กลาสเลคเชอร์\";s:2:\"en\";s:245:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\";}', 35000, NULL, 'Y', 'room-main-101.jpg', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', '', 4, 702, 'hot', 0),
(11, 1, '0002-60', 'a:2:{s:2:\"th\";s:39:\"นิวยอร์คซิตี้\";s:2:\"en\";s:13:\"New York City\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 69000, NULL, 'Y', 'room-main-11.jpg', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', 'a:2:{s:2:\"th\";s:0:\"\";s:2:\"en\";s:0:\"\";}', NULL, 4, 840, 'hotel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`num_code`),
  ADD UNIQUE KEY `alpha_2_code` (`alpha_2_code`),
  ADD UNIQUE KEY `alpha_3_code` (`alpha_3_code`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `ipn_listen`
--
ALTER TABLE `ipn_listen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang_static`
--
ALTER TABLE `lang_static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ipn_listen`
--
ALTER TABLE `ipn_listen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lang_static`
--
ALTER TABLE `lang_static`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
