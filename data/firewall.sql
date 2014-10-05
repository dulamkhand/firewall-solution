-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2014 at 05:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `firewall`
--

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
(1, 'b1.png', 10, '2014-02-28 11:40:11'),
(2, 'b2.png', 9, '2014-02-28 11:40:11'),
(3, 'b3.png', 8, '2014-02-28 11:40:22'),
(4, 'b4.png', 7, '2014-02-28 11:40:22'),
(5, 'b5.png', 6, '2014-04-11 03:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `client`
--


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
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `poll_option`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product`
--


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

--
-- Dumping data for table `service`
--


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
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);
