-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2022 at 07:58 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropboxd_Skoleomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesstfour`
--

CREATE TABLE `asesstfour` (
  `id` int(11) NOT NULL,
  `icon_image` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asesstfour`
--

INSERT INTO `asesstfour` (`id`, `icon_image`, `image`, `text`, `link`, `admin_id`) VALUES
(1, 'TV.png', 'f8967cf5f6302780804010b64552614b.jpg', 'TEST TWO', 'TEST TWO', '1');

-- --------------------------------------------------------

--
-- Table structure for table `asesstone`
--

CREATE TABLE `asesstone` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(500) NOT NULL,
  `author` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `song_name` varchar(500) NOT NULL,
  `feat` varchar(500) NOT NULL,
  `videofile` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asesstone`
--

INSERT INTO `asesstone` (`id`, `admin_id`, `author`, `file`, `song_name`, `feat`, `videofile`) VALUES
(14, '1', 'test image', 'B.png', 'test song', 'test rap.', 'Fiber-fever-teaser.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `icon_image` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `icon_image`, `image`, `text`, `link`, `admin_id`) VALUES
(1, 'TV.png', 'baby-sitter.png', 'You tube Video', 'https://www.youtube.com/embed/t_xPLeoimfQ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `assetsix`
--

CREATE TABLE `assetsix` (
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `img5` varchar(500) NOT NULL,
  `img6` varchar(500) NOT NULL,
  `img7` varchar(500) NOT NULL,
  `img8` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assetsthree`
--

CREATE TABLE `assetsthree` (
  `id` int(11) NOT NULL,
  `icon_image` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assetsthree`
--

INSERT INTO `assetsthree` (`id`, `icon_image`, `image`, `text`, `link`, `admin_id`) VALUES
(1, 'TV.png', 'Screenshot 2022-10-25 at 21.09.23 (1).png', 'hubapot blog', 'https://skoleomplatform.com/skoleom-page/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `capsuleimage`
--

CREATE TABLE `capsuleimage` (
  `id` int(11) NOT NULL,
  `first_image` varchar(500) NOT NULL,
  `first_image_link` varchar(500) NOT NULL,
  `second_image` varchar(500) NOT NULL,
  `second_image_link` varchar(500) NOT NULL,
  `third_image` varchar(500) NOT NULL,
  `third_image_link` varchar(500) NOT NULL,
  `fourth_image` varchar(500) NOT NULL,
  `fourth_image_link` varchar(500) NOT NULL,
  `five_image` varchar(500) NOT NULL,
  `five_image_link` varchar(500) NOT NULL,
  `six_image` varchar(500) NOT NULL,
  `six_image_link` varchar(500) NOT NULL,
  `admin_id` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capsuleimage`
--

INSERT INTO `capsuleimage` (`id`, `first_image`, `first_image_link`, `second_image`, `second_image_link`, `third_image`, `third_image_link`, `fourth_image`, `fourth_image_link`, `five_image`, `five_image_link`, `six_image`, `six_image_link`, `admin_id`) VALUES
(2, 'doctor.png', '', 'WhatsApp Image 2022-09-26 at 5.50.16 PM.jpeg', 'https://www.youtube.com/embed/t_xPLeoimfQ', 'wp2748300-kratos-wallpaper-full-hd.jpg', 'https://www.youtube.com/embed/t_xPLeoimfQ', 'wp2748300-kratos-wallpaper-full-hd.jpg', 'https://www.youtube.com/embed/t_xPLeoimfQ', 'wp2748300-kratos-wallpaper-full-hd.jpg', 'https://www.youtube.com/embed/t_xPLeoimfQ', 'wp2748300-kratos-wallpaper-full-hd.jpg', 'https://www.youtube.com/embed/t_xPLeoimfQ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `first_image` varchar(500) NOT NULL,
  `first_link` varchar(500) NOT NULL,
  `second_image` varchar(500) NOT NULL,
  `second_image_link` varchar(500) NOT NULL,
  `third_image` varchar(500) NOT NULL,
  `third_image_link` varchar(500) NOT NULL,
  `fourth_image` varchar(500) NOT NULL,
  `forth_image_link` varchar(500) NOT NULL,
  `five_image` varchar(500) NOT NULL,
  `fith_image_link` varchar(500) NOT NULL,
  `six_image` varchar(500) NOT NULL,
  `six_image_link` varchar(500) NOT NULL,
  `admin_id` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `first_image`, `first_link`, `second_image`, `second_image_link`, `third_image`, `third_image_link`, `fourth_image`, `forth_image_link`, `five_image`, `fith_image_link`, `six_image`, `six_image_link`, `admin_id`) VALUES
(2, 'leftsmall-image.jpg', 'facebook.com', 'wp2748300-kratos-wallpaper-full-hd.jpg', '1', 'wp2748300-kratos-wallpaper-full-hd.jpg', '1', 'wp2748300-kratos-wallpaper-full-hd.jpg', '1', 'wp2748300-kratos-wallpaper-full-hd.jpg', '1', 'leftsmall-image.jpg', 'google.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `usermail` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `usermail`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesstfour`
--
ALTER TABLE `asesstfour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asesstone`
--
ALTER TABLE `asesstone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assetsthree`
--
ALTER TABLE `assetsthree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesstfour`
--
ALTER TABLE `asesstfour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asesstone`
--
ALTER TABLE `asesstone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assetsthree`
--
ALTER TABLE `assetsthree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
