-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2014 at 01:40 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firewall`
--
CREATE DATABASE IF NOT EXISTS `firewall` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `firewall`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `filename`, `sort`, `created_at`) VALUES
(1, 'b1.jpg', 10, '2014-02-28 11:40:11'),
(2, 'b2.jpg', 9, '2014-02-28 11:40:11'),
(3, 'b3.jpg', 8, '2014-02-28 11:40:22'),
(4, 'b4.jpg', 7, '2014-02-28 11:40:22'),
(5, 'b5.jpg', 6, '2014-04-11 03:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `object_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `object_type`, `object_id`, `created_at`, `user_id`, `ip_address`, `name`, `text`) VALUES
(1, 'news', 7, '2012-05-08 16:20:08', 0, '127.0.0.1', '????', '???'),
(2, 'news', 8, '2012-05-08 16:24:02', 0, '127.0.0.1', 'sdgasd', 'adgasd'),
(3, 'news', 8, '2012-05-08 16:24:36', 0, '127.0.0.1', 'sadga', 'C????????? ??????? ?sasdgasdg?.'),
(4, 'news', 8, '2012-05-08 16:24:41', 0, '127.0.0.1', 'wetq3ertyqery', 'reywerywerywer'),
(5, 'news', 8, '2012-05-08 16:29:19', 0, '127.0.0.1', 'ayhaeryahdf', 'sjsdfjsfjg'),
(6, 'news', 8, '2012-05-08 16:29:31', 0, '127.0.0.1', 'adghah', 'adfhadfhadf'),
(7, 'news', 8, '2012-05-08 16:29:59', 0, '127.0.0.1', 'aghsd', 'asdhadfh'),
(8, 'news', 8, '2012-05-08 16:30:27', 0, '127.0.0.1', 'asdg', 'asdgasd'),
(9, 'news', 8, '2012-05-08 16:30:56', 0, '127.0.0.1', 'ag', 'adfghadfh'),
(10, 'news', 8, '2012-05-08 16:34:41', 0, '127.0.0.1', 'trtuierti', 'rylyul;ui'),
(11, 'news', 8, '2012-05-08 16:34:46', 0, '127.0.0.1', 'fyoltyuop', 'yiupyiopi'),
(12, 'news', 2, '2012-05-08 16:45:20', 0, '127.0.0.1', 'dadsg', 'asdgasdgsd'),
(13, 'news', 2, '2012-05-08 16:46:36', 0, '127.0.0.1', 'dfhsd', 'sdfhjsdf'),
(14, 'news', 2, '2012-05-08 16:46:39', 0, '127.0.0.1', 'sj', 'sfgj'),
(15, 'news', 2, '2012-05-08 16:46:46', 0, '127.0.0.1', 'sfgjsfg', 'sfgjsfg'),
(16, 'news', 2, '2012-05-08 16:47:35', 0, '127.0.0.1', 'aasdh', 'afhadf'),
(17, 'news', 2, '2012-05-08 16:47:38', 0, '127.0.0.1', 'sfujsj', 'sfhsadf'),
(18, 'news', 2, '2012-05-08 16:47:40', 0, '127.0.0.1', 'adf', 'sahf'),
(19, 'news', 2, '2012-05-08 16:47:45', 0, '127.0.0.1', 'adfhadfafh', 'afdhadfh'),
(20, 'news', 9, '2012-05-10 22:48:21', 0, '127.0.0.1', 'asd', 'adg'),
(21, 'news', 7, '2012-06-28 04:25:08', 0, '127.0.0.1', 'saf', 'asas');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `body_en` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_featuired` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `title_en`, `image`, `body`, `body_en`, `is_active`, `is_featuired`, `created_at`, `updated_at`) VALUES
(1, 'Шаварын ажил маш хялбар боллоо.', 'Шаварын ажил маш хялбар боллоо.', '3.jpg', 'Хайрга, элс, цементийг дээш давхарлуу зөөж хүн хүч болон цаг үрэхгүйгээр эдгээр бүхий л ажлыг маш энгийн, түргэн шуурхай материалыг барилгын давхруудад шахаж, хана шавардлагын ажлыг хийх арга зам, боломж ', 'Хайрга, элс, цементийг дээш давхарлуу зөөж хүн хүч болон цаг үрэхгүйгээр эдгээр бүхий л ажлыг маш энгийн, түргэн шуурхай материалыг барилгын давхруудад шахаж, хана шавардлагын ажлыг хийх арга зам, боломж ', 0, 0, '2011-12-20 03:16:35', '0000-00-00 00:00:00'),
(2, 'Дотор хамар хананы гипсэн блок', 'Дотор хамар хананы гипсэн блок', '1.jpg', ' Дотор тусгаарлах ханын гипсэн блок-ыг бид Монголд үйлдвэрлэн нийлүүлж байна.\r\nХэмжээ: Урт 60см х Өргөн 51см х Зузаан 10см\r\n\r\nГалд тэсвэртэй, дуу болон дулаан тусгаарлах үзүүлэлт өндөртэй. Цэвэр байгалийн гипсээр хийсэн, эрүүл мэндэд хоргүй.\r\nУгсархад амархан, шууд замаскдаж будах эсвэл ханын цаас наах боломжтой. Барилгын даац хөнгөн болгоно.\r\n\r\nҮНЭ ХЯМД, БАРИЛГЫН ӨРТӨГ БАГАСГАНА.', ' Дотор тусгаарлах ханын гипсэн блок-ыг бид Монголд үйлдвэрлэн нийлүүлж байна.\r\nХэмжээ: Урт 60см х Өргөн 51см х Зузаан 10см\r\n\r\nГалд тэсвэртэй, дуу болон дулаан тусгаарлах үзүүлэлт өндөртэй. Цэвэр байгалийн гипсээр хийсэн, эрүүл мэндэд хоргүй.\r\nУгсархад амархан, шууд замаскдаж будах эсвэл ханын цаас наах боломжтой. Барилгын даац хөнгөн болгоно.\r\n\r\nҮНЭ ХЯМД, БАРИЛГЫН ӨРТӨГ БАГАСГАНА.', 0, 0, '2012-01-26 08:43:40', '0000-00-00 00:00:00'),
(3, 'КРАН АШИГЛАХГҮЙГЭЭР БАРИЛГА УГСРАЛТЫН АЖЛУУДЫГ ГҮЙЦЭТГЭХ', 'КРАН АШИГЛАХГҮЙГЭЭР БАРИЛГА УГСРАЛТЫН АЖЛУУДЫГ ГҮЙЦЭТГЭХ', '2.jpg', 'Аюулгүй байдлыг хангасан, Богино хугацаанд хүн болон ачаа тээвэрлэнэ, Фасадны ажлыг хийх бүрэн боломжтой, 3тонн хүртэл даацтай, 0-150метрийн өндөр угсарч ашиглах боломжтой. 2-30метрийн урт тавцантай, Угсрах, буулгахад амар хялбар, хурдан. ', 'Аюулгүй байдлыг хангасан, Богино хугацаанд хүн болон ачаа тээвэрлэнэ, Фасадны ажлыг хийх бүрэн боломжтой, 3тонн хүртэл даацтай, 0-150метрийн өндөр угсарч ашиглах боломжтой. 2-30метрийн урт тавцантай, Угсрах, буулгахад амар хялбар, хурдан. ', 0, 0, '2012-01-26 08:48:15', '0000-00-00 00:00:00'),
(4, 'Хөдөлмөр хамгааллын Евро-норм нормативыг танилцуулах сургалт семинар болно ', 'Хөдөлмөр хамгааллын Евро-норм нормативыг танилцуулах сургалт семинар болно ', '4.jpg', '', '', 0, 0, '2012-01-27 06:19:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='notusedyet' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`, `organization`, `created_at`) VALUES
(2, 'test', 'test@test.com', 'test', 'test', '', '2012-04-21 02:52:43'),
(3, 'test', 'test@test.com', 'test', 'test', '', '2012-04-21 02:53:01'),
(4, 'handaatest1', 'test@test.com', 'test', 'testa', '', '2012-04-21 02:53:16'),
(5, 'dulamkhand test', 'handaa.1224@gmail.com', 'tdulamkhand testtest', 'About product', 'test', '2012-05-08 13:11:26'),
(6, 'Your name', 'handaa.1224@gmail.com', 'Phone', 'About product', 'Organization', '2012-05-08 13:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `title`, `title_en`, `title_ru`, `description`, `description_en`, `description_ru`, `filename`, `created_at`) VALUES
(1, 'Tilda Swinton', '', '', 'Haider Ackermann and Fred Leighton jewelry', '', '', 'c3698a054a9539dcd9c9168b685aa8b3af89a5a5.jpg', '2012-01-27 09:24:06'),
(2, 'Michelle Williams', '', '', 'Jason Wu, Judith Leiber clutch, and vintage Fred Leighton headband', '', '', '7a3a5580eaf7002d08754aeb34bba8eb712c81bd.jpg', '2012-01-27 09:24:42'),
(3, 'Emma Stone', '', '', 'Lanvin and Cartier clutch', '', '', '258b4912d0b3557b1bb5b8507c3536ba40d5b127.jpg', '2012-01-27 09:25:22'),
(4, 'Rooney Mara', '', '', 'Nina Ricci', '', '', '791f8bb31b8dcac1fd3651e4551044b2b2a2e88a.jpg', '2012-01-27 09:26:08'),
(5, 'Charlize Theron', '', '', 'Christian Dior and Cartier jewelry', '', '', '5ee06581c5d5f1a6079801e90e26cf21f004fd23.jpg', '2012-01-27 09:26:28'),
(6, 'Macy’s INC Collection Celebrates Kate Young', '', '', 'Last evening, Macy’s celebrated their collaboration with stylist to the stars Kate Young, who acted as editor-at-large for the department store’s spring 2012 INC catalogue...', '', '', '25799087f810b2199d87ad42bfc7c7a2278fc542.jpg', '2012-01-28 08:17:07'),
(7, 'America’s Most Sizzling Chefs ', '', '', 'From in-demand meatball slingers to a Vietnamese salad innovator, these guys have us drooling—and it’s not just because of their food', '', '', '6c22dabf2f793736063bc57da6654edfb8486fc1.jpg', '2012-01-28 08:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `on_home` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `type`, `title_en`, `title`, `image`, `content`, `content_en`, `on_home`, `created_at`, `updated_at`) VALUES
(1, 'aboutus', '"SIMPEDIL MONGOLIA" LLC', '"СИМПЕДИЛ МОНГОЛИА" ХХК', '614c01c171164a6b99c424d4d2dc8caeb15535c6.jpg', '<p>&quot;Симпедил ХХК&quot; нь барилгын арматур төмрийн Тасдагч, Матагч, Нэгтгэгч, Дөрвөлжлөгч тоног төхөөрөмжүүдийн нийлүүлэлтийг хангах төв цэг болж чадсан бөгөөд нийт бэлтгэсэн бүтээгдэхүүнийхээ 95 хувийг дэлхийн маш олон оронд экспортлодог. 2011 онд &quot; Симпедил Монголиа&quot; ХХК байгуулагдсан нь дан ганц шинэ зорилгод хүрэх хүсэл тэмүүлэл, ажлын сонирхол байсангүй, харин ч Монгол улсын тоног төхөөрөмжийн зах зээлийн эрэлт хэрэгцээ хангагдахгүй байгааг олж мэдсэн явдал байсан юм. &quot;Симпедил Монголиа&quot; ХХК нь тоног төхөөрөмж ашиглагч дотоодын барилгын компаниудад бэлэн бүтээгдэхүүнийг өргөн сонголттойгоор хүргэх, ингэхдээ боломжийн үнэ, техник технологийн дагалдсан туслалцаа, сургалтыг хослуулах санал тавин ажиллаж байна.</p>', '<p>&quot;Симпедил ХХК&quot; нь барилгын арматур төмрийн Тасдагч, Матагч, Нэгтгэгч,  Дөрвөлжлөгч тоног төхөөрөмжүүдийн нийлүүлэлтийг хангах төв цэг болж  чадсан бөгөөд нийт бэлтгэсэн бүтээгдэхүүнийхээ 95 хувийг дэлхийн маш  олон оронд экспортлодог. 2011 онд &quot; Симпедил Монголиа&quot; ХХК байгуулагдсан нь дан ганц шинэ  зорилгод хүрэх хүсэл тэмүүлэл, ажлын сонирхол байсангүй, харин ч Монгол  улсын тоног төхөөрөмжийн зах зээлийн эрэлт хэрэгцээ хангагдахгүй байгааг  олж мэдсэн явдал байсан юм. &quot;Симпедил Монголиа&quot; ХХК нь тоног төхөөрөмж ашиглагч дотоодын барилгын  компаниудад бэлэн бүтээгдэхүүнийг өргөн сонголттойгоор хүргэх, ингэхдээ  боломжийн үнэ, техник технологийн дагалдсан туслалцаа, сургалтыг  хослуулах санал тавин ажиллаж байна.</p>', 0, '2012-04-11 03:10:30', '0000-00-00 00:00:00'),
(2, 'gypsum', 'GYPSUM BLOCK', 'ГИПСЭН БЛОК', '', '<p>Дотор тусгаарлах ханын гипсэн блок-ыг бид Монголд үйлдвэрлэн нийлүүлж байна.<br />\r\nХэмжээ: <strong>Урт 60см х Өргөн 51см х Зузаан 10см</strong><br />\r\nГалд тэсвэртэй, дуу болон дулаан тусгаарлах үзүүлэлт өндөртэй. Цэвэр байгалийн гипсээр хийсэн, эрүүл мэндэд хоргүй.<br />\r\nУгсархад амархан, шууд замаскдаж будах эсвэл ханын цаас наах боломжтой. Барилгын даац хөнгөн болгоно.<br />\r\nҮНЭ ХЯМД, БАРИЛГЫН ӨРТӨГ БАГАСГАНА.</p>', '<p>Дотор тусгаарлах ханын гипсэн блок-ыг бид Монголд үйлдвэрлэн нийлүүлж байна.<br />\r\nХэмжээ: <strong>Урт 60см х Өргөн 51см х Зузаан 10см</strong><br />\r\nГалд тэсвэртэй, дуу болон дулаан тусгаарлах үзүүлэлт өндөртэй. Цэвэр байгалийн гипсээр хийсэн, эрүүл мэндэд хоргүй.<br />\r\nУгсархад амархан, шууд замаскдаж будах эсвэл ханын цаас наах боломжтой. Барилгын даац хөнгөн болгоно.<br />\r\nҮНЭ ХЯМД, БАРИЛГЫН ӨРТӨГ БАГАСГАНА.</p>', 0, '2014-03-12 03:59:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question_en` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `question`, `question_en`, `sort`, `created_at`, `updated_at`) VALUES
(1, '?? ???? ???????????? ???????????? ?????? ???????? ?????? ????? ???', '', 1, '2012-04-03 11:53:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `poll_option`
--

CREATE TABLE IF NOT EXISTS `poll_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll_id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `text_en` text COLLATE utf8_unicode_ci NOT NULL,
  `text_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `poll_option`
--

INSERT INTO `poll_option` (`id`, `poll_id`, `text`, `text_en`, `text_ru`, `number`, `sort`) VALUES
(5, 1, '??????? ????????', '', '', 3, 1),
(6, 1, '??? ??????? ????????? ???????', '', '', 0, 1),
(7, 1, '???? ??????? ???????? ???????', '', '', 2, 1),
(8, 1, '????? ?????? ???????? ?????????', '', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `summary_en` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `image8` varchar(255) NOT NULL,
  `body` text,
  `body_en` text NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `color` varchar(10) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `has_leasing` tinyint(1) NOT NULL,
  `rental_cost` double NOT NULL,
  `sort` int(11) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `title_en`, `code`, `category_id`, `summary`, `summary_en`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `body`, `body_en`, `pdf`, `video`, `color`, `keywords`, `has_leasing`, `rental_cost`, `sort`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Арматур тасдагч C36', 'Iron rod cutting machine C36', 'C36', 26, 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers. ', 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers. ', '632674472e4a8a0009a0d4b5ef4a9bd70e1498dc.jpg', '', '', '', '', '', '', '', '', '<p>Strong and efficient <span class="mpjtm7" id="mpjtm7_4">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', '<p>Strong and efficient <span class="mpjtm7" id="mpjtm7_4">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', 'f28ba612d92d8cb7e62039039d2a9342190f61b2.pdf', 'https://www.youtube.com/watch?v=KZoxmr42C8E', '3377ff', '', 0, 1750000, 0, 0, '2014-02-28 22:46:04', '2014-04-15 00:00:00'),
(11, 'Арматур тасдагч C42', 'Iron rod cutting machine C42', 'C42', 26, 'The C42 is certainly the top of the Simpedil Cutting machines range!', 'The C42 is certainly the top of the Simpedil Cutting machines range!', 'a5162ef80a79edf6abb8444059ba0350bba223a4.jpg', 'a01c622adb7c0f33e5a86552aa83ab1e90b081e1.jpg', '9cd9aa4db51fd39c59fc899dee46c0a3a30053f0.jpg', '300-7ca7317b774a5262bdf37d132b56baea704272e1d.jpg', '', '', '', '', '', '<p>The most sold in <span id="ti3n0z609_2" class="ti3n0z609">foreign markets</span> for itsstrongness, efficiency and above all good value for price-quality.</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', '<p>The most sold in <span id="ti3n0z609_2" class="ti3n0z609">foreign markets</span> for itsstrongness, efficiency and above all good value for price-quality.</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', 'e6a97e6ef9aa1a8d59cbaf6f107f1dcd6c07ab7c.pdf', 'https://www.youtube.com/watch?v=KZoxmr42C8E', '3377ff', 'simpedil, simpedil mongolia, cesoia, cutting machine, iron rod cutting machine, симпедил, симпедил монголиа, арматур тасдагч, арматур таслагч, C42,C 42,', 0, 1750000, 0, 1, '2014-02-28 17:41:55', '2014-04-15 00:00:00'),
(16, 'Арматур тасдагч C52', 'Iron rod cutting machine C52', 'C52', 26, 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers. ', 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers. ', '8c0893f54f4d4842b892f6cfc19dc2ab2a18098b.jpg', '91e22ba3ea4bced2bc8bfd49e1928badb1a84ac5.jpg', '26cdbf7d165ad129de19c766cd996a2a6b01756c.jpg', 'PFc.jpg', '', '', '', '', '', '<p>Strong and efficient <span class="b9h8o" id="b9h8o_4">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', '<p>Strong and efficient <span class="b9h8o" id="b9h8o_4">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>', '8ee2f759249830fd0eeb1c7516d7dbc9e11b1b56.pdf', 'https://www.youtube.com/watch?v=KZoxmr42C8E', 'cc0066', 'simpedil, simpedil mongolia, cesoia, cutting machine, iron rod cutting machine, симпедил, симпедил монголиа, арматур тасдагч, арматур таслагч, C52,C 52, cutting machine C52, iron rod cutting machine C52', 0, 1750000, 0, 0, '2014-02-28 17:59:23', '2014-04-15 00:00:00'),
(17, 'Гидр арматур тасдагч', 'Hydraulic cutting machine', 'HC45', 26, 'The new SIMPEDIL hydraulic cutting machine is the machine you were waiting for! Totally in cast iron!', 'The new SIMPEDIL hydraulic cutting machine is the machine you were waiting for! Totally in cast iron!', '61824dfd61b5c014c263b92849fca60aa1dc8565.jpg', '55739664a708f135b8738b42181a21e41577a9d9.jpg', '', '', '', '', '', '', '', '<p style="text-align: justify;"><span class="long_text" id="result_box"><span title="Rispetto alle cesoie meccaniche presenta diversi vantaggi:" style="background-color: rgb(255, 255, 255);">Compared to mechanical <span class="i8u9y9ywz" id="i8u9y9ywz_3">cutting machine</span> has several advantages:<br />\r\n</span><span title="- Totale assenza di manutenzione;" style="background-color: rgb(255, 255, 255);">- Total lack of maintenance;<br />\r\n</span><span title="- Maggior sicurezza in caso di emergenza (con il coprilama aperto la macchina non taglia);" style="background-color: rgb(255, 255, 255);">- Increased security in case of emergency (with the cap opened the machine does not cut);<br />\r\n</span><span title="- Notevole versatilit&agrave; nei diversi ambienti di lavoro (dal pi&ugrave; caldo al pi&ugrave; freddo) adattando semplicemente il tipo di olio idraulico." style="background-color: rgb(255, 255, 255);">-  Considerable versatility in different working environments (from  hottest to coldest) simply by adapting the type of hydraulic oil.</span></span></p>\r\n<h3><big><span style="color: rgb(0, 153, 0);"><strong><em>Standard Equipment</em></strong></span></big><span style="color: rgb(0, 153, 0);"><strong><em>  </em></strong></span></h3>\r\n<ul>\r\n    <li>2 blades in hardned steel, already fit on the machine</li>\r\n    <li>Pedal for remote control</li>\r\n    <li><span class="i8u9y9ywz" id="i8u9y9ywz_5">Electric panel</span> in metallic box with IP55 protection</li>\r\n</ul>\r\n<h3><span style="color: rgb(0, 153, 0);"><em><strong><big>Main Features</big></strong></em></span><em><strong><big><br />\r\n</big></strong></em></h3>\r\n<ul>\r\n    <li>Operation with lever or with eletric pedal</li>\r\n    <li>&quot;<span class="i8u9y9ywz" id="i8u9y9ywz_2">Made in Germany</span>&quot; components (BOSCH-REXROT hydraulic system and MOELLER electric panel)</li>\r\n    <li>Direct action piston, with double speed and <span class="i8u9y9ywz" id="i8u9y9ywz_4">double effect</span>, endowed with special gaskets</li>\r\n    <li>Machone produced in conformity with EC normes currently in force</li>\r\n    <li>\r\n    <h5><strong><span style="background-color: Lime;"><big>TWO YEARS WARRANTY, INCLUDING ALL THE MACHINE COMPONENTS</big></span></strong></h5>\r\n    </li>\r\n</ul>', '<p style="text-align: justify;"><span class="long_text" id="result_box"><span title="Rispetto alle cesoie meccaniche presenta diversi vantaggi:" style="background-color: rgb(255, 255, 255);">Compared to mechanical <span class="i8u9y9ywz" id="i8u9y9ywz_3">cutting machine</span> has several advantages:<br />\r\n</span><span title="- Totale assenza di manutenzione;" style="background-color: rgb(255, 255, 255);">- Total lack of maintenance;<br />\r\n</span><span title="- Maggior sicurezza in caso di emergenza (con il coprilama aperto la macchina non taglia);" style="background-color: rgb(255, 255, 255);">- Increased security in case of emergency (with the cap opened the machine does not cut);<br />\r\n</span><span title="- Notevole versatilit&agrave; nei diversi ambienti di lavoro (dal pi&ugrave; caldo al pi&ugrave; freddo) adattando semplicemente il tipo di olio idraulico." style="background-color: rgb(255, 255, 255);">-  Considerable versatility in different working environments (from  hottest to coldest) simply by adapting the type of hydraulic oil.</span></span></p>\r\n<h3><big><span style="color: rgb(0, 153, 0);"><strong><em>Standard Equipment</em></strong></span></big><span style="color: rgb(0, 153, 0);"><strong><em>  </em></strong></span></h3>\r\n<ul>\r\n    <li>2 blades in hardned steel, already fit on the machine</li>\r\n    <li>Pedal for remote control</li>\r\n    <li><span class="i8u9y9ywz" id="i8u9y9ywz_5">Electric panel</span> in metallic box with IP55 protection</li>\r\n</ul>\r\n<h3><span style="color: rgb(0, 153, 0);"><em><strong><big>Main Features</big></strong></em></span><em><strong><big><br />\r\n</big></strong></em></h3>\r\n<ul>\r\n    <li>Operation with lever or with eletric pedal</li>\r\n    <li>&quot;<span class="i8u9y9ywz" id="i8u9y9ywz_2">Made in Germany</span>&quot; components (BOSCH-REXROT hydraulic system and MOELLER electric panel)</li>\r\n    <li>Direct action piston, with double speed and <span class="i8u9y9ywz" id="i8u9y9ywz_4">double effect</span>, endowed with special gaskets</li>\r\n    <li>Machone produced in conformity with EC normes currently in force</li>\r\n    <li>\r\n    <h5><strong><span style="background-color: Lime;"><big>TWO YEARS WARRANTY, INCLUDING ALL THE MACHINE COMPONENTS</big></span></strong></h5>\r\n    </li>\r\n</ul>', 'f58acd171b02138b7bedc74b8da3b83ae0461725.pdf', 'http://youtu.be/eC_DMj-QCxY', '3377ff', 'simpedil, simpedil mongolia, cesoia idraulica, hydraulic cutting machine, iron rod cutting machine, симпедил, симпедил монголиа, гидр арматур тасдагч, гидр арматур таслагч, HC45, HC 45', 0, 1750000, 0, 0, '2014-03-11 16:40:51', '2014-04-14 00:00:00'),
(18, 'Арматур тасдагч', 'Iron rod cutting machine', 'C32', 26, 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers.\r\nStrong and efficient machines for small, medium and large diameters... impossible not to find one suited to y', 'The range of Simpedil cutting machines offers a wide range of accommodations and services as varied and different as the needs of our customers.\r\nStrong and efficient machines for small, medium and large diameters... impossible not to find one suited to y', '986c99f400cd622c43f6d427b0fa23618a3ec344.jpg', '54ff4a396f6c881e46dcfbeb92ca911a3de65485.jpg', '', '', '', '', '', '', '', '<p>Strong and efficient <span id="n27me51_4" class="n27me51">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>', '<p>Strong and efficient <span id="n27me51_4" class="n27me51">machines</span> for small, medium and large diameters... impossible not to find one suited to your needs!</p>', '54d17ddd52c518a257e71fdb242ab2526947765d.pdf', 'http://youtu.be/4qhXEh6o7sg', '3377ff', 'simpedil, simpedil mongolia, cesoia, cutting machine, iron rod cutting machine, симпедил, симпедил монголиа, арматур тасдагч, арматур таслагч, C32, C 32, C32 Euro, C 32 Euro', 0, 1750000, 0, 0, '2014-03-11 18:07:13', '2014-04-15 00:00:00'),
(19, 'Арматур матагч P30', 'Iron rod bending machine P30', 'P30', 27, 'Among the Bending machines of SIMPEDIL the P30 is the only one to be equipped with single phase motor, but with the addition of the special inverter.', 'Among the Bending machines of SIMPEDIL the P30 is the only one to be equipped with single phase motor, but with the addition of the special inverter.', '2a132ae4e4f81454d6e9e1f5bc86163137dbb9ae.jpg', '4209d70ee22de45dd3e13aaf9fd0e945a03c151c.jpg', '70e082deaff5d392e5dbb23eb89ce0598f7b8276.jpg', '9d7d8943ee6e2927d7187c4145298ee485b77781.jpg', '', '', '', '', '', '<p>This device converts the current from 220 single phase to 220  three-phase, this allows the engine to get up to speed gradually and  reduce energy consumption.</p>\r\n<p>The P30, with short saddles, like all other Bending machines SIMPEDIL  is compact and durable and allows the operator to work from both sides.</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>\r\n<p><strong><span class="b9h8o" id="b9h8o_3">Standard equipment</span></strong></p>\r\n<p><img align="left" alt="" src="http://simpedil.it/newSite/images/dotazione.jpg" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush  holding pins; 1 checking block;&nbsp; 1 pedal for remote control; 1 bush &Oslash;  50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', '<p>This device converts the current from 220 single phase to 220  three-phase, this allows the engine to get up to speed gradually and  reduce energy consumption.</p>\r\n<p>The P30, with short saddles, like all other Bending machines SIMPEDIL  is compact and durable and allows the operator to work from both sides.</p>\r\n<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>\r\n<p><strong><span class="b9h8o" id="b9h8o_3">Standard equipment</span></strong></p>\r\n<p><img align="left" alt="" src="http://simpedil.it/newSite/images/dotazione.jpg" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 checking block;&nbsp; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', 'f5b6a5099745d93f2edeb8a22c2048badd73bfa0.pdf', 'https://www.youtube.com/watch?v=6aaQeMtxKME', '3377ff', 'simpedil, simpedil mongolia, piegaferro, bending machine, iron rod bending machine, симпедил,симпедил монголиа, арматур матагч, P30,P 30', 0, 175000, 0, 0, '2014-04-15 05:07:10', '2014-04-15 00:00:00'),
(20, 'Арматур матагч P32', 'Iron rod bending machine P32', 'P32', 27, 'The P32, with short saddles, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', 'The P32, with short saddles, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', '544f7344a466d393902343e19ccbd67ae5b57cf3.jpg', '16d2a9aacb8ca95b16b5acbbe8eb371d1ee62a52.jpg', '37e75d15e48d31b5f2bf8f64d90bd353229eba05.jpg', '4ee69d9d7bb2892ab6bf06c4910f73653793221d.jpg', '', 'ac946012934f965ef3ec4f573285df01007d7749.jpg', '', '', '', '<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>\r\n<p><br />\r\n<strong><span class="cv4ohx010s9e" id="cv4ohx010s9e_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="cv4ohx010s9e" id="cv4ohx010s9e_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', '<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.</p>\r\n<p><br />\r\n<strong><span class="cv4ohx010s9e" id="cv4ohx010s9e_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="cv4ohx010s9e" id="cv4ohx010s9e_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', '1db5fdd9740d649154ff77e8a55edb6684c7e7fa.pdf', 'https://www.youtube.com/watch?v=6aaQeMtxKME', '3377ff', 'simpedil, simpedil mongolia, piegaferro, bending machine, iron rod bending machine, симпедил, симпедил монголиа, арматур матагч, P32,P 32', 0, 175000, 0, 0, '2014-04-15 05:32:18', '2014-04-15 00:00:00'),
(23, 'Арматур матагч P36', 'Iron rod bending machine P36', 'P36', 27, 'The P36, with short saddles, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', 'The P36, with short saddles, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', '4884885ab3d61eab07523f12189265a9d00aef8e.jpg', 'f27c2568dc43719ad3f0bc52d17539c115ef6aef.jpg', '9e802fc38969946b01368c8e92aef4f1b7510933.jpg', 'aa3636480830a7c4a2068d7803944747ec581eda.jpg', '', 'd6303a208d1e34942799c594225670bf2a9ce250.jpg', '8a5c12134a142dca7769e592310531ea010311d1.jpg', '', '', '<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong><span class="cv4ohx010s9e" id="cv4ohx010s9e_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="cv4ohx010s9e" id="cv4ohx010s9e_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', '<p>The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong><span class="cv4ohx010s9e" id="cv4ohx010s9e_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="cv4ohx010s9e" id="cv4ohx010s9e_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80.</p>', 'b51cbc1a46c3ea7d364e09963691ecbd769fda23.pdf', '<iframe width="400" height="300" src="//www.youtube.com/embed/6aaQeMtxKME" frameborder="0" allowfullscreen></iframe>', '3377ff', 'simpedil, simpedil mongolia, piegaferro, bending machine, iron rod bending machine, симпедил, симпедил монголиа, арматур матагч, P36,P 36, piegaferro P36, bending machine P36, iron rod bending machine P36', 0, 175000, 0, 0, '2014-04-15 05:50:18', '2014-04-15 00:00:00'),
(24, 'Арматур матагч P42', 'Iron rod bending machine P42', 'P42', 27, 'The P42, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', 'The P42, like all other SIMPEDIL bending machines is compact and durable and allows the operator to work from both sides. ', '55bdaf50713a317fa44efa78e8efdd69a5797680.jpg', 'cab19c32b258b97ac4acbd4db10c83ac0bf4f47e.jpg', 'bf5e47979fd1cc75cca7da36b7beb9303d87ec23.jpg', '09649635b2d11299ac3d3c4492f5557e91903b96.jpg', 'ac43aa968400f9b7aac33c543e5358886aa5764d.jpg', '6d1a07d213c356df5d31aa533225a9d6cf7309e2.jpg', '', '', '', '<p>From P42 all subsequent bending machine have as <span id="cv4ohx010s9e_2" class="cv4ohx010s9e">standard equipment</span> long sadles.</p>\r\n<p style="text-align: justify;">The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong>Standard equipment</strong></p>\r\n<p><img align="left" alt="" src="http://simpedil.it/newSite/images/dotazione.jpg" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span id="cv4ohx010s9e_5" class="cv4ohx010s9e">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80;1 bush &Oslash; 95;1 bush &Oslash; 120. long sadles.</p>', '<p>From P42 all subsequent bending machine have as <span id="cv4ohx010s9e_2" class="cv4ohx010s9e">standard equipment</span> long sadles.</p>\r\n<p style="text-align: justify;">The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong>Standard equipment</strong></p>\r\n<p><img align="left" alt="" src="http://simpedil.it/newSite/images/dotazione.jpg" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span id="cv4ohx010s9e_5" class="cv4ohx010s9e">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 50; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80;1 bush &Oslash; 95;1 bush &Oslash; 120. long sadles.</p>', 'b91f092b7ee5bb445c7c73b873d2ba6c4875a9f9.pdf', '<iframe width="400" height="300" src="//www.youtube.com/embed/6aaQeMtxKME" frameborder="0" allowfullscreen></iframe>', '3377ff', 'simpedil, simpedil mongolia, piegaferro, bending machine, iron rod bending machine, симпедил, симпедил монголиа, арматур матагч, P42, P 42, piegaferro P36, bending machine P42, iron rod bending machine P42', 0, 175000, 0, 1, '2014-04-15 06:10:08', '2014-04-15 00:00:00'),
(25, 'Арматур матагч P52', 'Iron rod bending machine P52', 'P52', 27, 'The P52, like all other SIMPEDIL bending machine is compact and durable and allows the operator to work from both sides.', 'The P52, like all other SIMPEDIL bending machine is compact and durable and allows the operator to work from both sides.', '4c981d3e6869e6f5910ba2229a411ec91be57c05.jpg', '2253f2e212fae6c9fa21cf4da1358cb2bf8b4432.jpg', '0fada1feebc8cbbab9986e36119303b9ca9f2aac.jpg', 'b60729ba6c3c3b7edc3cd7a8e0cb46ae0dcb20db.jpg', '806d114d3db47743a3dba1cb3cdf7ec0d24e4aef.jpg', '575e8a0b82581496d1d20cec989e5399e78134de.jpg', '', '', '', '<p style="text-align: justify;">The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong><span class="s86h847y" id="s86h847y_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="s86h847y" id="s86h847y_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80; 1 bush &Oslash; 95;1 bush &Oslash; 120;1 bush &Oslash; 130. long sadles.</p>', '<p style="text-align: justify;">The machine is equipped with all the devices that meet the current EEC regulations on safety of Machine Directive 98/37.<br />\r\n<strong><span class="s86h847y" id="s86h847y_2">Standard equipment</span></strong></p>\r\n<p><img align="left" src="http://simpedil.it/newSite/images/dotazione.jpg" alt="" />1 hardened square pin; 1 hardened stirrup bending pin; 3 hardened bush holding pins; 1 <span class="s86h847y" id="s86h847y_5">checking</span> block; 1 pedal for remote control; 1 bush &Oslash; 60; 1 bush &Oslash; 70; 1 bush &Oslash; 80; 1 bush &Oslash; 95;1 bush &Oslash; 120;1 bush &Oslash; 130. long sadles.</p>', '47c26202ca4d001a752071161676d977216b71f0.pdf', 'https://www.youtube.com/watch?v=6aaQeMtxKME', '3377ff', 'simpedil, simpedil mongolia, piegaferro, bending machine, iron rod bending machine, симпедил, симпедил монголиа, арматур матагч, P52,P 52, piegaferro P52, bending machine P52, iron rod bending machine P52', 0, 175000, 0, 0, '2014-04-15 06:46:17', '2014-04-15 00:00:00'),
(26, 'Цахилгаан хөрөө', 'Transportable band saw', '784XL', 37, 'Electronic speed adjustment, performances, easy to carry', 'Electronic speed adjustment, performances, easy to carry', '1b154552c7798f27070a8e893bea86814e3e0041.jpg', '', '', '', '', '', '', '', '', '<p>-max cutting capacity D.120 mm - 120x115 mm<br />\r\n-weight 17 Kg<br />\r\n-bandsaw blade 1440x13x0.65<br />\r\n-powerul 1200 Watt motor</p>', '<p>-max cutting capacity D.120 mm - 120x115 mm<br />\r\n-weight 17 Kg<br />\r\n-bandsaw blade 1440x13x0.65<br />\r\n-powerul 1200 Watt motor</p>', 'eb1696c60a596d16bda4cf6bf79ca9b8e3724702.pdf', 'https://www.youtube.com/watch?v=fQ1-Mw7yepU', '3377ff', 'simpedil, simpedil mongolia, симпедил, симпедил монголиа, Цахилгаан хөрөө, Цахилгаан төмрийн хөрөө, Transportable band saw, portable band saw, Цахилгаан хөрөө 784XL, Цахилгаан төмрийн хөрөө 784XL, Transportable band saw 784XL, portable band saw 784XL', 0, 175000, 0, 0, '2014-04-15 07:10:18', '2014-04-15 00:00:00'),
(27, 'Цахилгаан хөрөө NG120XL', 'Transportable band saw NG120XL', 'NG120XL', 37, 'Great versatility, technology and performances, NG System up to 60% faster', 'Great versatility, technology and performances, NG System up to 60% faster', '3ab82de6010191b20a98d8628c3ac2bf3c59ac96.jpg', '', '', '', '', '', '', '', '', '<p>-max cutting capacity &Oslash; 120 mm - 120x102 mm<br />\r\n-weight Kg 18<br />\r\n-bandsaw blade mm. 1440 x13 x0,65<br />\r\n-NG System: reduction of cutting time up to 60% !!</p>', '<p>-max cutting capacity &Oslash; 120 mm - 120x102 mm<br />\r\n-weight Kg 18<br />\r\n-bandsaw blade mm. 1440 x13 x0,65<br />\r\n-NG System: reduction of cutting time up to 60% !!</p>', '41218c8d461af8a06b27a3e2f4b052f71eb7a771.pdf', 'https://www.youtube.com/watch?v=W4K3Ys3_KA4', '3377ff', 'simpedil, simpedil mongolia, симпедил, симпедил монголиа, Цахилгаан хөрөө, Цахилгаан төмрийн хөрөө, Transportable band saw, portable band saw, Цахилгаан хөрөө NG120XL, Цахилгаан төмрийн хөрөө NG120XL, Transportable band saw NG120XL, portable band saw NG12', 0, 175000, 0, 0, '2014-04-15 07:22:20', '2014-04-15 00:00:00'),
(28, 'Цахилгаан хөрөө NG160', 'Transportable band saw NG160', 'NG160', 37, 'Extraordinary cutting capacity, NG System up to 40% faster', 'Extraordinary cutting capacity, NG System up to 40% faster', 'c5ddcfd2b4d8be4c20175d104effe3124b8b3463.jpg', '', '', '', '', '', '', '', '', '<p>-max cutting capacity &Oslash; 150 mm - 160x140 mm<br />\r\n-weight Kg 35<br />\r\n-bandsaw blade mm. 1735 x 13 x 0,9<br />\r\n-blade tensioning device with clutch</p>', '<p>-max cutting capacity &Oslash; 150 mm - 160x140 mm<br />\r\n-weight Kg 35<br />\r\n-bandsaw blade mm. 1735 x 13 x 0,9<br />\r\n-blade tensioning device with clutch</p>', '8ef93979a2c90de1913b8854d3ac012066482ad3.pdf', 'https://www.youtube.com/watch?v=k5xLm65Rai8', '3377ff', 'simpedil, simpedil mongolia, симпедил, симпедил монголиа, Цахилгаан хөрөө, Цахилгаан төмрийн хөрөө, Transportable band saw, portable band saw, Цахилгаан хөрөө NG160, Цахилгаан төмрийн хөрөө NG160, Transportable band saw NG160, portable band saw NG160', 0, 175000, 0, 0, '2014-04-15 07:30:09', '2014-04-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `has_leasing` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `parent_id`, `name`, `name_en`, `has_leasing`, `sort`, `created_at`, `updated_at`) VALUES
(5, 0, 'Бетон зуурмагын тоног төхөөрөмж', 'Concrete equipments', 0, 19, '2014-02-28 22:31:39', '0000-00-00 00:00:00'),
(6, 0, 'Зам гүүрийн тоног төхөөрөмж', 'Road equipments', 0, 18, '2014-02-28 22:31:52', '0000-00-00 00:00:00'),
(7, 0, 'Цахилгаан багаж, тоног төхөөрөмж', 'Power tools & equipments', 0, 16, '2014-02-28 22:31:52', '0000-00-00 00:00:00'),
(8, 0, 'Гар багаж', 'Hand Tools', 0, 14, '2014-02-28 22:32:18', '0000-00-00 00:00:00'),
(9, 0, 'Лифт, Өргөх буулгах механизм', 'Lifting & lower mechanism', 0, 17, '2014-02-28 22:32:18', '0000-00-00 00:00:00'),
(10, 0, 'Хөдөлмөр хамгааллын хэрэгсэл', 'Safety supplies', 0, 13, '2014-02-28 22:32:47', '0000-00-00 00:00:00'),
(17, 7, 'Гагнуурын аппарат', 'Welding machine', 0, 20, '2014-02-28 17:14:13', '0000-00-00 00:00:00'),
(18, 8, 'Өнгөлгөөний багаж', 'Finishing tools', 0, 18, '2014-02-28 17:17:25', '0000-00-00 00:00:00'),
(20, 8, 'Алх', 'Hammer', 0, 20, '2014-02-28 17:18:13', '0000-00-00 00:00:00'),
(22, 0, 'Арматур төмрийн тоног төхөөрөмж', 'Iron rod & Metal cutting/bending equipment', 0, 20, '2014-02-28 17:41:42', '0000-00-00 00:00:00'),
(24, 5, 'Шалны дүүргэлтийн машин ', 'Mixing & Pumping machine', 0, 18, '2014-03-19 14:31:03', '0000-00-00 00:00:00'),
(25, 5, 'Бетон зуурагч', 'Concrete Mixer', 0, 16, '2014-03-19 14:31:48', '0000-00-00 00:00:00'),
(26, 22, 'Арматур тасдагч', 'Cutting Machine', 0, 20, '2014-03-19 14:32:23', '0000-00-00 00:00:00'),
(27, 22, 'Арматур матагч', 'Bending Machine', 0, 18, '2014-03-19 14:32:44', '0000-00-00 00:00:00'),
(28, 6, 'Авто замын индүү', 'Double drum vibrating roller', 0, 20, '2014-03-19 14:33:46', '0000-00-00 00:00:00'),
(29, 6, 'Хөрс нягтаршуулагч', 'Rammer & Plate compactor', 0, 18, '2014-03-19 14:34:47', '0000-00-00 00:00:00'),
(30, 9, 'Тавцан шат', 'Scaffold', 0, 20, '2014-03-19 14:35:55', '0000-00-00 00:00:00'),
(31, 9, 'Шат', 'Ladder', 0, 18, '2014-03-19 14:36:24', '0000-00-00 00:00:00'),
(32, 10, 'Гутал', 'Safety boots', 0, 20, '2014-03-20 08:40:32', '0000-00-00 00:00:00'),
(33, 5, 'Хана шавардагч машин', 'Concrete spraying machine', 0, 20, '2014-04-11 02:57:23', '0000-00-00 00:00:00'),
(37, 22, 'Цахилгаан төмрийн хөрөө', 'Metal cutting equipment', 0, 16, '2014-04-11 07:17:20', '0000-00-00 00:00:00'),
(38, 22, 'Плазма тасдагч', 'Plasma cutting machine', 0, 14, '2014-04-11 07:23:20', '0000-00-00 00:00:00'),
(39, 5, 'Вибратор', 'Vibrator & Converter', 0, 14, '2014-04-11 07:35:11', '0000-00-00 00:00:00'),
(40, 5, 'Бетон тэгшлэгч', 'Power screed', 0, 12, '2014-04-11 07:37:20', '0000-00-00 00:00:00'),
(41, 5, 'Бетон өнгөлөгч', 'Power float', 0, 10, '2014-04-11 07:38:21', '0000-00-00 00:00:00'),
(42, 5, 'Бетоны тэвш', 'Concrete bucket', 0, 8, '2014-04-11 07:41:24', '0000-00-00 00:00:00'),
(43, 6, 'Асфальт зүсэгч', 'Floor cutter', 0, 16, '2014-04-11 08:06:10', '0000-00-00 00:00:00'),
(44, 9, 'Гар тэрэг', 'Handtruck', 0, 16, '2014-04-11 08:39:26', '0000-00-00 00:00:00'),
(45, 9, 'Гинжин өргөгч', 'Lever & Handchain hoist', 0, 14, '2014-04-11 08:47:50', '0000-00-00 00:00:00'),
(46, 9, 'Троссон өргөгч', 'Elevator', 0, 12, '2014-04-11 08:52:56', '0000-00-00 00:00:00'),
(47, 9, 'Хүн, Ачаа тээврийн гадна лифт', 'Rack & Pinion hoist', 0, 10, '2014-04-11 08:56:02', '0000-00-00 00:00:00'),
(48, 7, 'Усны насос', 'Water pump', 0, 18, '2014-04-11 09:01:46', '0000-00-00 00:00:00'),
(49, 7, 'Хийн компрессор', 'Air compressor', 0, 16, '2014-04-11 09:03:27', '0000-00-00 00:00:00'),
(50, 7, 'Цахилгаан багаж', 'Power tools', 0, 14, '2014-04-11 09:05:48', '0000-00-00 00:00:00'),
(51, 7, 'Гэрэл, прожектор', 'Site lighting', 0, 12, '2014-04-11 09:09:07', '0000-00-00 00:00:00'),
(52, 7, 'Уртасгагч дамар', 'Cable reel', 0, 10, '2014-04-11 09:10:54', '0000-00-00 00:00:00'),
(53, 0, 'Хэмжилтийн багаж', 'Measuring Instruments', 0, 15, '2014-04-11 09:12:28', '0000-00-00 00:00:00'),
(54, 53, 'Тэгш ус', 'Level', 0, 18, '2014-04-14 03:32:49', '0000-00-00 00:00:00'),
(55, 53, 'Метр', 'Measuring tape', 0, 20, '2014-04-14 03:35:34', '0000-00-00 00:00:00'),
(56, 53, 'Босоо чиг татагч', 'Cylindrical plumb', 0, 16, '2014-04-14 03:38:52', '0000-00-00 00:00:00'),
(57, 53, 'Мөр татагч', 'Line tracer', 0, 14, '2014-04-14 03:42:04', '0000-00-00 00:00:00'),
(58, 53, 'Нивлер', 'Optical level', 0, 12, '2014-04-14 03:53:21', '0000-00-00 00:00:00'),
(59, 53, 'Штангенциркуль', 'Digital caliper', 0, 10, '2014-04-14 04:00:20', '0000-00-00 00:00:00'),
(60, 53, 'Лазер метр', 'Laser distance meter', 0, 8, '2014-04-14 04:04:41', '0000-00-00 00:00:00'),
(61, 8, 'Хүрз', 'Shovels', 0, 14, '2014-04-14 04:20:23', '0000-00-00 00:00:00'),
(62, 8, 'Хөрөө', 'Saw', 0, 16, '2014-04-14 04:21:31', '0000-00-00 00:00:00'),
(63, 8, 'Хувин', 'Bucket', 0, 12, '2014-04-14 04:22:09', '0000-00-00 00:00:00'),
(64, 8, 'Түлхүүр', 'Wrench', 0, 10, '2014-04-14 04:25:12', '0000-00-00 00:00:00'),
(65, 8, 'Бусад', 'Others', 0, 6, '2014-04-14 04:26:28', '0000-00-00 00:00:00'),
(66, 8, 'Плита зүсэгч, багаж', 'Tile cutter & tiling tools', 0, 8, '2014-04-14 04:31:37', '0000-00-00 00:00:00'),
(67, 10, 'Ажлын хувцас', 'Safety clothes', 0, 18, '2014-04-14 04:51:38', '0000-00-00 00:00:00'),
(68, 10, 'Хамгаалалтын хэрэгсэл', 'Safety equipments', 0, 16, '2014-04-14 05:11:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_model`
--

CREATE TABLE IF NOT EXISTS `product_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `product_model`
--

INSERT INTO `product_model` (`id`, `product_id`, `name`, `name_en`, `sort`, `created_at`, `updated_at`) VALUES
(2, 17, 'HC45', 'HC45', 0, '2014-03-23 18:42:06', '2014-04-15 00:00:00'),
(6, 18, 'C32TF', 'C32TF', 3, '2014-03-23 18:42:33', '2014-04-15 00:00:00'),
(7, 18, '32MF', '32MF', 4, '2014-03-23 18:42:38', '2014-04-15 00:00:00'),
(10, 1, 'C36', 'C36', 0, '2014-03-23 18:42:54', '2014-04-15 00:00:00'),
(11, 11, 'C42', 'C42', 0, '2014-04-15 04:23:28', '2014-04-15 00:00:00'),
(12, 16, 'C52', 'C52', 0, '2014-04-15 04:32:29', '2014-04-15 00:00:00'),
(13, 19, 'P30', 'P30', 0, '2014-04-15 05:08:36', '2014-04-15 00:00:00'),
(14, 20, 'P32', 'P32', 0, '2014-04-15 05:34:02', '2014-04-15 00:00:00'),
(15, 23, 'P36', 'P36', 0, '2014-04-15 05:52:32', '2014-04-15 00:00:00'),
(16, 24, 'P42', 'P42', 0, '2014-04-15 06:15:54', '2014-04-15 00:00:00'),
(17, 25, 'P52', 'P52', 0, '2014-04-15 06:48:03', '2014-04-15 00:00:00'),
(18, 26, '784XL', '784XL', 0, '2014-04-15 07:12:01', '2014-04-15 00:00:00'),
(19, 27, 'NG120XL', 'NG120XL', 0, '2014-04-15 07:23:24', '2014-04-15 00:00:00'),
(20, 28, 'NG160', 'NG160', 0, '2014-04-15 07:31:04', '2014-04-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `product_id`, `name`, `email`, `phone`, `message`, `organization`, `position`, `created_at`) VALUES
(7, 11, 'Ikhbayar', 'martino_ikhee@yahoo.com', '99052507', 'bla bla', 'Simpedil Mongolia', 'manager', '2014-04-14 03:26:42'),
(8, 16, 'Dulamkhand', 'handaa.1224@gmail.com', '99071053', 'test msg', 'Mobicom', 'Programmer', '2014-04-15 03:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_spec`
--

CREATE TABLE IF NOT EXISTS `product_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `body` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `body_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `spec_id` (`spec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=253 ;

--
-- Dumping data for table `product_spec`
--

INSERT INTO `product_spec` (`id`, `product_id`, `model_id`, `spec_id`, `sort`, `body`, `body_en`, `created_at`, `updated_at`) VALUES
(22, 16, 0, 9, 0, '300 кг', '300 kg', '2014-03-17 14:40:47', '0000-00-00 00:00:00'),
(144, 18, 7, 9, 0, 'monophase', 'monophase', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(145, 18, 6, 9, 0, 'threephase', 'threephase', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(146, 18, 7, 8, 0, '107', '107', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(147, 18, 6, 8, 0, '107', '107', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(148, 18, 7, 15, 0, '2,5HP / 1,8kW', '2,5HP / 1,8kW', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(149, 18, 6, 15, 0, '3HP / 2,2kW', '3HP / 2,2kW', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(150, 18, 7, 16, 0, 'Ø 26', 'Ø 26', '2014-04-15 04:03:01', '0000-00-00 00:00:00'),
(151, 18, 6, 16, 0, 'Ø 26', 'Ø 26', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(152, 18, 7, 29, 0, '1,5kg', '1,5kg', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(153, 18, 6, 29, 0, '1,5kg', '1,5kg', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(154, 18, 7, 31, 0, '80x57xH75', '80x57xH75', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(155, 18, 6, 31, 0, '80x57xH75', '80x57xH75', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(156, 18, 7, 32, 0, '250', '250', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(157, 18, 6, 32, 0, '250', '250', '2014-04-15 04:03:02', '0000-00-00 00:00:00'),
(158, 1, 10, 9, 0, 'threephase', 'threephase', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(159, 1, 10, 8, 0, '90', '90', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(160, 1, 10, 15, 0, '4HP / 3kW', '4HP / 3kW', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(161, 1, 10, 16, 0, 'Ø 30', 'Ø 30', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(162, 1, 10, 29, 0, '3kg', '3kg', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(163, 1, 10, 31, 0, '105x61xH82', '105x61xH82', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(164, 1, 10, 32, 0, '450', '450', '2014-04-15 04:03:44', '0000-00-00 00:00:00'),
(172, 11, 11, 9, 0, 'threephase', 'threephase', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(173, 11, 11, 8, 0, '90', '90', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(174, 11, 11, 15, 0, '4HP / 3kW', '4HP / 3kW', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(175, 11, 11, 16, 0, 'Ø 34', 'Ø 34', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(176, 11, 11, 29, 0, '4kg', '4kg', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(177, 11, 11, 31, 0, '118x71xH87', '118x71xH87', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(178, 11, 11, 32, 0, '660', '660', '2014-04-15 04:25:42', '0000-00-00 00:00:00'),
(182, 17, 2, 9, 0, 'threephase', 'threephase', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(183, 17, 2, 15, 0, '5.5HP / 4kW', '5.5HP / 4kW', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(184, 17, 2, 16, 0, 'Ø 35', 'Ø 35', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(185, 17, 2, 29, 0, '20kg', '20kg', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(186, 17, 2, 31, 0, '97x60xH80', '97x60xH80', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(187, 17, 2, 32, 0, '380', '380', '2014-04-15 04:31:32', '0000-00-00 00:00:00'),
(195, 19, 13, 9, 0, 'monophase', 'monophase', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(196, 19, 13, 8, 0, '10', '10', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(197, 19, 13, 15, 0, '2HP / 1.5kW', '2HP / 1.5kW', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(198, 19, 13, 16, 0, 'Ø 26', 'Ø 26', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(199, 19, 13, 29, 0, '5kg', '5kg', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(200, 19, 13, 31, 0, '82x90xH85', '82x90xH85', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(201, 19, 13, 32, 0, '308', '308', '2014-04-15 05:20:21', '0000-00-00 00:00:00'),
(202, 20, 14, 9, 0, 'threephase', 'threephase', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(203, 20, 14, 8, 0, '9', '9', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(204, 20, 14, 15, 0, '3HP / 2kW', '3HP / 2kW', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(205, 20, 14, 16, 0, 'Ø 28', 'Ø 28', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(206, 20, 14, 29, 0, '8kg', '8kg', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(207, 20, 14, 31, 0, '85x90xH85', '85x90xH85', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(208, 20, 14, 32, 0, '350', '350', '2014-04-15 05:35:58', '0000-00-00 00:00:00'),
(209, 23, 15, 9, 0, 'threephase', 'threephase', '2014-04-15 05:54:58', '0000-00-00 00:00:00'),
(210, 23, 15, 8, 0, '9', '9', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(211, 23, 15, 15, 0, '4HP / 3kW', '4HP / 3kW', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(212, 23, 15, 16, 0, 'Ø 32', 'Ø 32', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(213, 23, 15, 29, 0, '8', '8', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(214, 23, 15, 31, 0, '86x90xH85', '86x90xH85', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(215, 23, 15, 32, 0, '362', '362', '2014-04-15 05:54:59', '0000-00-00 00:00:00'),
(216, 24, 16, 9, 0, 'threephase', 'threephase', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(217, 24, 16, 8, 0, '6', '6', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(218, 24, 16, 15, 0, '4HP / 3kW', '4HP / 3kW', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(219, 24, 16, 16, 0, 'Ø 36', 'Ø 36', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(220, 24, 16, 29, 0, '13', '13', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(221, 24, 16, 31, 0, '105x95xH89', '105x95xH89', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(222, 24, 16, 32, 0, '600', '600', '2014-04-15 06:18:01', '0000-00-00 00:00:00'),
(230, 25, 17, 9, 0, 'threephase', 'threephase', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(231, 25, 17, 8, 0, '6', '6', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(232, 25, 17, 15, 0, '5.5HP / 4kW', '5.5HP / 4kW', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(233, 25, 17, 16, 0, 'Ø 42', 'Ø 42', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(234, 25, 17, 29, 0, '13', '13', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(235, 25, 17, 31, 0, '105x95xH89', '105x95xH89', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(236, 25, 17, 32, 0, '630', '630', '2014-04-15 06:50:13', '0000-00-00 00:00:00'),
(237, 26, 18, 15, 0, '1200W', '1200W', '2014-04-15 07:16:03', '0000-00-00 00:00:00'),
(238, 26, 18, 16, 0, 'Ø 120mm', 'Ø 120mm', '2014-04-15 07:16:04', '0000-00-00 00:00:00'),
(239, 26, 18, 31, 0, '900x400xH520', '900x400xH520', '2014-04-15 07:16:04', '0000-00-00 00:00:00'),
(240, 26, 18, 32, 0, '17', '17', '2014-04-15 07:16:05', '0000-00-00 00:00:00'),
(245, 28, 20, 15, 0, '2000W', '2000W', '2014-04-15 07:33:41', '0000-00-00 00:00:00'),
(246, 28, 20, 16, 0, 'Ø 150mm', 'Ø 150mm', '2014-04-15 07:33:41', '0000-00-00 00:00:00'),
(247, 28, 20, 31, 0, '1000x390x570', '1000x390x570', '2014-04-15 07:33:41', '0000-00-00 00:00:00'),
(248, 28, 20, 32, 0, '35', '35', '2014-04-15 07:33:41', '0000-00-00 00:00:00'),
(249, 27, 19, 15, 0, '1300W', '1300W', '2014-04-15 07:34:00', '0000-00-00 00:00:00'),
(250, 27, 19, 16, 0, 'Ø 120mm', 'Ø 120mm', '2014-04-15 07:34:00', '0000-00-00 00:00:00'),
(251, 27, 19, 31, 0, '900x400xH520', '900x400xH520', '2014-04-15 07:34:00', '0000-00-00 00:00:00'),
(252, 27, 19, 32, 0, '18', '18', '2014-04-15 07:34:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `body_en` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`id`, `name`, `name_en`, `sort`, `created_at`, `updated_at`) VALUES
(3, 'Хүчдэл', 'Voltage ', 26, '2014-04-15 03:16:36', '0000-00-00 00:00:00'),
(7, 'Загвар', 'Model', 29, '2014-04-15 03:16:04', '0000-00-00 00:00:00'),
(8, 'Моторын эргэлт', 'No-load speed ', 27, '2014-04-15 03:16:27', '0000-00-00 00:00:00'),
(9, 'Моторын Төрөл', 'Motor type', 28, '2014-04-15 03:16:15', '0000-00-00 00:00:00'),
(14, 'Давтамж', 'Frequency', 25, '2014-04-15 03:17:02', '0000-00-00 00:00:00'),
(15, 'Моторын хүч', 'Engine power ', 24, '2014-04-15 03:17:13', '0000-00-00 00:00:00'),
(16, 'Хүчин чадал ', 'Capacity ', 23, '2014-04-15 03:17:24', '0000-00-00 00:00:00'),
(17, 'Даралт', 'Pressure', 22, '2014-04-15 03:26:10', '0000-00-00 00:00:00'),
(18, 'Хүрэх өндөр', 'Delivery height', 21, '2014-04-15 03:17:42', '0000-00-00 00:00:00'),
(19, 'Хүрэх хол', 'Delivery distance', 20, '2014-04-15 03:17:50', '0000-00-00 00:00:00'),
(20, 'Хайрганы хэмжээ', 'Granulometry', 19, '2014-04-15 03:18:00', '0000-00-00 00:00:00'),
(21, 'Шахах хайрганы хэмжээ', 'Pumpable granulometry', 18, '2014-04-15 03:18:11', '0000-00-00 00:00:00'),
(22, 'Шүрших хайрганы хэмжээ', 'Sprayable granulometry', 17, '2014-04-15 03:18:20', '0000-00-00 00:00:00'),
(23, 'Тэвшний багтаамж', 'Hopper capacity', 16, '2014-04-15 03:18:29', '0000-00-00 00:00:00'),
(24, 'Зуурагчын багтаамж', 'Mixer capacity', 15, '2014-04-14 08:56:03', '0000-00-00 00:00:00'),
(25, 'Усны банк', 'Water tank capacity', 14, '2014-04-15 03:20:15', '0000-00-00 00:00:00'),
(26, 'Түлшний банк', 'Diesel tank capacity', 13, '2014-04-15 03:20:33', '0000-00-00 00:00:00'),
(27, 'Бензиний банк', 'Petrol tank capacity', 12, '2014-04-15 03:20:46', '0000-00-00 00:00:00'),
(28, 'Зарцуулалт', 'Consumption  ', 11, '2014-04-15 03:21:00', '0000-00-00 00:00:00'),
(29, 'Тосны банк', 'Oil quantity', 10, '2014-04-15 03:21:10', '0000-00-00 00:00:00'),
(30, 'Тосны төрөл', 'Oil type ', 9, '2014-04-15 03:21:24', '0000-00-00 00:00:00'),
(31, 'Хэмжээ', 'Dimensions', 8, '2014-04-15 03:25:57', '0000-00-00 00:00:00'),
(32, 'Жин', 'Weight ', 7, '2014-04-15 03:21:59', '0000-00-00 00:00:00'),
(33, 'Сунах хэмжээ', 'Cable length', 6, '2014-04-15 03:25:11', '0000-00-00 00:00:00'),
(34, 'Хурд', 'Speed', 5, '2014-04-15 03:25:00', '0000-00-00 00:00:00'),
(35, 'Диаметр', 'Diameter', 4, '2014-04-15 03:24:46', '0000-00-00 00:00:00'),
(36, 'Урт ', 'Length', 3, '2014-04-15 03:24:33', '0000-00-00 00:00:00'),
(37, 'Өргөн ', 'Width', 2, '2014-04-15 03:24:10', '0000-00-00 00:00:00'),
(38, 'Өндөр', 'Height', 1, '2014-04-15 03:23:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `logged_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_active`, `created_at`, `updated_at`, `logged_at`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'firewallsolution.llc@gmail.com', 1, '2011-02-01 20:04:13', '0000-00-00 00:00:00', '2011-02-01 20:04:13'),
(2, 'handaa', '202cb962ac59075b964b07152d234b70', 'handaa.1224@gmail.com', 1, '2012-08-21 16:33:13', '2014-04-15 03:47:33', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `poll_option`
--
ALTER TABLE `poll_option`
  ADD CONSTRAINT `poll_option_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `poll` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_model`
--
ALTER TABLE `product_model`
  ADD CONSTRAINT `product_model_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD CONSTRAINT `product_spec_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_spec_ibfk_4` FOREIGN KEY (`spec_id`) REFERENCES `spec` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
