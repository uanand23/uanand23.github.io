-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2017 at 06:52 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tradeelecs`
--

-- --------------------------------------------------------

--
-- Table structure for table `air_conditioner`
--

CREATE TABLE IF NOT EXISTS `air_conditioner` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(40) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `capacity` varchar(15) DEFAULT NULL,
  `cooling_capacity` varchar(30) DEFAULT NULL,
  `pannel_display` varchar(15) DEFAULT NULL,
  `turbo_mode` varchar(5) DEFAULT NULL,
  `auto_restart` varchar(5) DEFAULT NULL,
  `timer` varchar(5) DEFAULT NULL,
  `power_requirement` varchar(15) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `air_conditioner`
--

INSERT INTO `air_conditioner` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `capacity`, `cooling_capacity`, `pannel_display`, `turbo_mode`, `auto_restart`, `timer`, `power_requirement`, `price`, `other_details`, `warranty`, `quantity_available`, `image`) VALUES
(3, 'AC3001', '2017-06-05', 'Samsung', 'ACS18ED3CS02WHI', 'WHITE', '1.5 TON', '4000 W', 'LED', 'NO', 'YES', 'YES', '110 W', 'Rs 27,990', 'ANTI BACTERIA FILTER,DUST FILTER', '1 YEAR ,5 YEAR ON COMPRESSOR', 12, 'Pictures/images (17).jpg'),
(3, 'AC3002', '2017-06-05', 'Micromax', 'AR18MV3HLWK', 'WHITE', '1.2 TON', '3450 W', 'NON LED', 'NO', 'NO', 'YES', '110 W', 'Rs 21,990', 'ANTI BACTERIA FILTER,ALUMINIUM CONDENSER', '1 YEAR ,10 YEAR OON COMPRESSOR', 10, 'Pictures/unnamed (1).jpg'),
(3, 'AC3003', '2017-06-04', 'Voltas', 'LS19A5CX', 'WHITE', '1.2 TON', '4000 W', 'LED', 'YES', 'YES', 'YES', '110 W', 'Rs 25,990', 'ANTI BACTERIA FILTER,DUST FILTER', '1 YEAR ,5 YEAR ON COMPRESSOR', 12, 'Pictures/images (17).jpg'),
(3, 'AC3004', '0000-00-00', 'Lg', 'LS19A5CX', 'MAROON', '1.2 TON', '3450 W', 'LED', 'NO', 'YES', 'YES', '85 W', 'Rs 27,990', 'ANTI BACTERIA FILTER,ALUMINIUM CONDENSER', '1 YEAR ,5 YEAR ON COMPRESSOR', 13, 'Pictures/images (18).jpg'),
(3, 'AC3005', '2017-06-12', 'Lloyd', 'LGH9A5CX', 'WHITE', '1 TON', '3000 W', 'NON LED', 'YES', 'YES', 'YES', '110 W', 'Rs 20,990', 'ANTI BACTERIA FILTER', '1 YEAR, 5 YEAR ON COMPRESSOR', 10, 'Pictures/images (19).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `email` varchar(35) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `c_type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `p_id`, `c_type`) VALUES
('sumit@gmail.com', 'LP6003', 'LAPTOP'),
('sumit@gmail.com', 'LP6003', 'LAPTOP'),
('sumit@gmail.com', 'LP6002', 'LAPTOP'),
('sumit@gmail.com', 'LP6002', 'LAPTOP'),
('sumit@gmail.com', 'LP6002', 'LAPTOP');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) DEFAULT NULL,
  `c_type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_type`) VALUES
(1, 'MOBILE'),
(2, 'TELEVISION'),
(3, 'AIR_CONDITIONER'),
(4, 'WATCH'),
(5, 'REFRIGERATOR'),
(6, 'LAPTOP');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(35) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `graphic` varchar(20) DEFAULT NULL,
  `processor_name` varchar(30) DEFAULT NULL,
  `processor_generation` varchar(30) DEFAULT NULL,
  `hard_disk` varchar(35) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `os` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `graphic`, `processor_name`, `processor_generation`, `hard_disk`, `ram`, `os`, `price`, `other_details`, `warranty`, `image`) VALUES
(6, 'LP6001', '2017-06-13', 'Acer', 'ASPIRE', 'SILVER', 'INTEL HD', 'INTEL CORE i5', '5th GEN', '1 TB', '16 GB', 'WINDOW 10', 'Rs 40,990', '64 BIT,13 INCH', '1 YEAR', 'Pictures/download (2).jpg'),
(6, 'LP6002', '2017-06-05', 'Hp', 'PAVILION', 'BLACK', '4 GB', 'INTEL CORE i5', '6th GEN', '1 TB', '16 GB', 'WINDOW 10', 'Rs 42,900', '64 BIT,15.6 INCH', '1 YEAR', 'Pictures/download (1).jpg'),
(6, 'LP6003', '2017-06-13', 'Dell', 'ASPIRON', 'SILVER', '4 GB', 'INTEL CORE i7', '6th GEN', '1 TB', '4 GB', 'WINDOW 10', 'Rs 95,900', '64 BIT,15.6 INCH', '1 YEAR', 'Pictures/download.jpg'),
(6, 'LP6004', '2017-06-06', 'Lenovo', 'QPOH762', 'BLACK', '2 GB', 'INTEL CORE i3', '5th GEN', '1 TB', '4 GB', 'WINDOW 10', 'Rs 32,900', '64 BIT,13 INCH', '1 YEAR', 'Pictures/download (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Name` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `password` varchar(34) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Mobile`, `Email`, `password`) VALUES
('ADMIN', '9999999999', 'admin@gmail.com', 'a41acc7effe601de1dc2099a4e2fdd7c'),
('sumit', '8976543212', 'sumit@gmail.com', '7225ff71e8821b24fd72b4c8fda95b9a');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(40) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `resolution` varchar(15) DEFAULT NULL,
  `os` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `internal_storage` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `primary_camera` varchar(10) DEFAULT NULL,
  `secondary_camere` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `quantity_available` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `resolution`, `os`, `processor`, `internal_storage`, `ram`, `primary_camera`, `secondary_camere`, `price`, `other_details`, `warranty`, `quantity_available`, `image`) VALUES
(1, 'MB1001', '2017-06-05', 'Samsung', 'GALAXY S8', 'BLACK', '2960*1440', 'NOUGAT 7', 'SNAPDRAGON 650', '64 GB', '4 GB', '16 MP', '8 MP', 'Rs 57,900', 'FINGERPRINT,GORILLA GLASS 3,WATER RESISTANT', '1 YEAR ON HANDSET', 20, 'Pictures/IMG-20170607-WA0028.jpg'),
(1, 'MB1002', '2017-06-05', 'Oppo', 'F3 PLUS', 'BLACK', '1920*1080', 'ANDROID MARSHMALLOW 6', 'MEDIATEK MT6750', '64 GB', '4 GB', '16 MP', '13 MP', 'Rs 20,990', 'FINGERPRINT SENSOR', '1 YEAR ON HANDSET', 12, 'Pictures/images (10).jpg'),
(1, 'MB1003', '2017-06-04', 'Motorola', 'G5 PLUS', 'GOLD', '1920*1080', 'ANDROID NOUGAT 7', 'SNAPDRAGON 625', '64 GB', '3 GB', '13 MP', '8 MP', 'Rs 16,999', 'FINGERPRINT, GORILLA GLASS', '1 YEAR ON HANDSET', 12, 'Pictures/images (7).jpg'),
(1, 'MB1004', '2017-06-06', 'Vivo', 'V5s Perfect Selfie', 'GREY', '1280*720', 'ANDROID MARSHMALLOW 6', 'MEDIATEK MT6750', '64 GB', '4 GB', '13 MP', '16 MP+8MP', 'Rs 19,899', 'FINGERPRINT, AMOLED CAMERA', '1 YEAR ON HANDSET', 10, 'Pictures/images (6).jpg'),
(1, 'MB1005', '2017-06-12', 'Gionee', 'A1', 'GOLD', '1920*1080', 'ANDROID NOUGAT 7', 'MEDIATEK HELIO P10', '64 GB', '4 GB', '16 MP', '13 MP', 'Rs 19,999', 'FINGERPRINT,GORILLA GLASS', '2 YEAR ON HANDSET', 12, 'Pictures/images (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderplace`
--

CREATE TABLE IF NOT EXISTS `orderplace` (
  `email` varchar(35) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `cancel` varchar(20) DEFAULT NULL,
  `c_type` varchar(20) DEFAULT NULL,
  `delivery_option` varchar(50) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderplace`
--

INSERT INTO `orderplace` (`email`, `mobile`, `p_id`, `name`, `local`, `city`, `district`, `state`, `pin`, `cancel`, `c_type`, `delivery_option`, `quantity`) VALUES
('sumit@gmail.com', '9876543210', 'LP6002', 'aman', 'ntc', 'jharia', 'dhanbad', 'jharkhand', '832451', '', 'LAPTOP', 'CASH ON DELIVERY', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refrigerator`
--

CREATE TABLE IF NOT EXISTS `refrigerator` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(35) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `water_dispenser` varchar(10) DEFAULT NULL,
  `design` varchar(30) DEFAULT NULL,
  `capacity` varchar(15) DEFAULT NULL,
  `star_rating` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refrigerator`
--

INSERT INTO `refrigerator` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `type`, `water_dispenser`, `design`, `capacity`, `star_rating`, `price`, `other_details`, `warranty`, `image`) VALUES
(5, 'RF5001', '2017-06-05', 'Samsung', 'INSPIRON 7000', 'BLUE', 'DOUBLE DOOR', 'NO', 'FLORAL DESIGN', '192 L', '3', 'Rs 16,999', 'BUILT IN STABLIZER', '1 YEAR,10 YEAR ON COMPRESSOR', 'Pictures/download (5).jpg'),
(5, 'RF5002', '2017-06-12', 'Lg', 'QPOH762', 'RED', 'DOUBLE DOOR', 'NO', 'FLORAL DESIGN', '185 L', '3', 'Rs 15,999', 'BUILT IN STABLIZER', '1 YEAR,4 YEAR ON COMPRESSOR', 'Pictures/download (6).jpg'),
(5, 'RF5003', '2017-06-12', 'Haier', 'TH-50C300DX', 'SILVER', 'SINGLE DOOR', 'NO', 'NORMAL', '181 L', '2', 'Rs 14,899', 'BUILT IN STABLIZER', '1 YEAR,4 YEAR ON COMPRESSOR', 'Pictures/download (7).jpg'),
(5, 'RF5004', '2017-06-05', 'Lloyd', 'WDDD', 'soil', 'SINGLE DOOR', 'NO', 'NORMAL', '181 L', '2', 'Rs 11,899', 'BUILT IN STABLIZER', '1 YEAR,4 YEAR ON COMPRESSOR', 'Pictures/download (8).jpg'),
(5, 'RF5005', '2017-06-23', 'Whirlpool', 'FROST FREE', 'GREY', 'DOUBLE DOOR', 'NO', 'FLORAL DESIGN', '185 L', '3', 'Rs 12,899', 'BUILT IN STABLIZER', '1 YEAR,4 YEAR ON COMPRESSOR', 'Pictures/images (25).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `television`
--

CREATE TABLE IF NOT EXISTS `television` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(35) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `display_size` varchar(10) DEFAULT NULL,
  `usb` varchar(10) DEFAULT NULL,
  `power_consumption` varchar(10) DEFAULT NULL,
  `sonud_technology` varchar(35) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `television`
--

INSERT INTO `television` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `display_size`, `usb`, `power_consumption`, `sonud_technology`, `price`, `other_details`, `warranty`, `image`) VALUES
(2, 'TV2001', '2017-06-06', 'Samsung', 'TH-50C300', 'BLACK', '40 INCH', '2', '120 W', 'DOLBY DIGITAL PLUS', 'Rs 36,999', '20 speaker output,LED', '1 YEAR', 'Pictures/images (21).jpg'),
(2, 'TV2002', '2017-06-04', 'Micromax', 'MacbOOK Air', 'GREY', '43 INCH', '3', '110 W', 'DOLBY DIGITAL PLUS+PULSE', 'Rs 37,999', 'LED ', '1 YEAR', 'Pictures/images (22).jpg'),
(2, 'TV2003', '2017-06-12', 'Lg', 'TH-50C300HYU', 'BLACK', '43 INCH', '2', '110 W', 'DOLBY DIGITAL,DTS DEORDER', 'Rs 40,999', 'LED', '1 YEAR', 'Pictures/images (23).jpg'),
(2, 'TV2004', '2017-06-04', 'Sony', 'BRAVIA KDL-40W700C', 'BLACK', '50 INCH', '4', '110 W', 'DOLBY DIGITAL PLUS+PULSE', 'Rs 55,999', 'LED, 2 x10 W SPEAKER OUTPUT', '1 YEAR & 2 YEAR EXTENDED', 'Pictures/images (20).jpg'),
(2, 'TV2005', '2017-06-06', 'Panasonic', 'PAVI323D', 'BLACK', '40 INCH', '1 REAR,1 S', '85 W', 'DOLBY DIGITAL PLUS', 'Rs 36,999', 'LED', '1 YEAR', 'Pictures/images (24).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE IF NOT EXISTS `watch` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` varchar(10) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(35) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `for_gender` varchar(10) DEFAULT NULL,
  `strap` varchar(30) DEFAULT NULL,
  `water_resistance` varchar(15) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `other_details` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`c_id`, `p_id`, `add_date`, `brand`, `model`, `color`, `type`, `for_gender`, `strap`, `water_resistance`, `price`, `other_details`, `warranty`, `image`) VALUES
(4, 'WT4001', '2017-06-04', 'Samsung', 'S02WHI', 'BROWN', 'WRIST WATCH', 'MALE', 'LEATHER', 'YES', 'Rs 1,395', 'DATE DUSPLAY', '1 YEAR', 'Pictures/download (9).jpg'),
(4, 'WT4002', '2017-06-12', 'Titan', 'KLOA5CX', 'GREY', 'WRIST WATCH', 'MALE', 'LEATHER', 'YES', 'Rs 4,290', 'DATE DISPLAY', '1 YEAR', 'Pictures/download (10).jpg');
