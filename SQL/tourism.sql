-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2022 at 02:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `added_by_user_id` int(50) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `added_by_user_id`, `time_added`) VALUES
(23, 'Nature', 1, '2022-03-29 05:26:52'),
(24, 'Mountain ', 1, '2022-03-29 05:27:02'),
(25, 'Culture', 1, '2022-03-29 05:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(50) NOT NULL,
  `story_id` int(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `comment` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `story_id`, `firstname`, `lastname`, `comment`, `time`) VALUES
(15, 26, 'Ephraim', 'Ephraim', 'm,m', '2022-03-28 14:54:22'),
(16, 26, 'Ephraim', 'Ephraim', 'www', '2022-03-28 14:54:43'),
(17, 29, 'Ephraim', 'Ephraim', 'dfghjkjxfghjk\r\n\r\nf\r\ngfghghjg\r\nhjghgh', '2022-03-29 00:39:54'),
(18, 29, 'Ephraim', 'Ephraim', 'dfgfdfghgfdfgh', '2022-03-29 00:40:03'),
(19, 31, 'Ephraim', 'Ephraim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur eget nisi vel lobortis. Phasellus in ultrices arcu. Proin scelerisque tincidunt quam, vitae finibus ipsum imperdiet sed. In efficitur cursus nisi id rutrum. Vivamus pulvinar neque eget efficitur ornare. Donec porta egestas neque, fringilla ullamcorper magna blandit id. Nunc finibus metus eu felis congue lacinia. Nulla dapibus bibendum ex id efficitur. Aliquam erat volutpat. Morbi posuere, felis vel hendrerit ultrices, eros lectus rhoncus metus, vitae aliquet enim elit eget felis. Donec varius finibus tellus id molestie. Nam ac diam erat. Praesent euismod, urna eu varius tincidunt, nisi est rhoncus lectus, eget tempus nibh turpis et mi. Donec turpis massa, elementum eget tellus eu, tempus pellentesque turpis. Praesent efficitur imperdiet leo, in rhoncus massa viverra lobortis. Duis sed turpis non tellus bibendum finibus ut ut massa.\r\n\r\nVivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.\r\n\r\nFusce convallis tincidunt nisi, pharetra ornare felis dictum id. Phasellus in nisi dignissim urna ultricies ornare sed sit amet nisi. Curabitur finibus venenatis tellus sed euismod. Proin eros ex, iaculis sit amet tincidunt sed, convallis ut sem. Quisque id sapien at ex aliquet fermentum non ut ante. Fusce fermentum ante urna, non sagittis quam rhoncus aliquet. Vestibulum sit amet metus non elit blandit luctus.', '2022-03-29 05:42:40'),
(20, 34, 'Ephraim', 'Ephraim', 'Vivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.', '2022-03-29 08:03:30'),
(21, 34, 'Ephraim', 'Chesa', 'Vivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.', '2022-03-29 08:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(50) NOT NULL,
  `story_id` int(50) NOT NULL,
  `gallery_media` longtext NOT NULL,
  `publisher_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `story_id`, `gallery_media`, `publisher_id`) VALUES
(55, 27, '66711682_banner2.jpg', 1),
(56, 27, '66711682_banner2.jpg', 1),
(57, 29, '61953254_aboutus.jpg', 1),
(58, 30, '25038346_aboutus.jpg', 1),
(59, 30, '24327658_banner3.jpg', 1),
(60, 30, '13605469_banner2.jpg', 1),
(61, 30, '35013452_avatar.jpg', 1),
(62, 31, '74220268_aboutus.jpg', 1),
(63, 32, '83365028_banner3.jpg', 1),
(64, 34, '91881784_g1.jpg', 9),
(65, 35, '66587527_banner3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `approval` int(100) NOT NULL DEFAULT 0,
  `publisher_user_id` varchar(255) NOT NULL,
  `story_title` text NOT NULL,
  `story_category` varchar(200) NOT NULL,
  `event_country` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `story_message` longtext NOT NULL,
  `time_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `approval`, `publisher_user_id`, `story_title`, `story_category`, `event_country`, `city`, `story_message`, `time_posted`) VALUES
(30, 1, '1', 'Sit Amet Metus Non Elit Blandit Luctus.', 'Nature', 'United Kingdom ', 'Aberdeen ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur eget nisi vel lobortis. Phasellus in ultrices arcu. Proin scelerisque tincidunt quam, vitae finibus ipsum imperdiet sed. In efficitur cursus nisi id rutrum. Vivamus pulvinar neque eget efficitur ornare. Donec porta egestas neque, fringilla ullamcorper magna blandit id. Nunc finibus metus eu felis congue lacinia. Nulla dapibus bibendum ex id efficitur. Aliquam erat volutpat. Morbi posuere, felis vel hendrerit ultrices, eros lectus rhoncus metus, vitae aliquet enim elit eget felis. Donec varius finibus tellus id molestie. Nam ac diam erat. Praesent euismod, urna eu varius tincidunt, nisi est rhoncus lectus, eget tempus nibh turpis et mi. Donec turpis massa, elementum eget tellus eu, tempus pellentesque turpis. Praesent efficitur imperdiet leo, in rhoncus massa viverra lobortis. Duis sed turpis non tellus bibendum finibus ut ut massa.\r\n\r\nVivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.\r\n\r\nFusce convallis tincidunt nisi, pharetra ornare felis dictum id. Phasellus in nisi dignissim urna ultricies ornare sed sit amet nisi. Curabitur finibus venenatis tellus sed euismod. Proin eros ex, iaculis sit amet tincidunt sed, convallis ut sem. Quisque id sapien at ex aliquet fermentum non ut ante. Fusce fermentum ante urna, non sagittis quam rhoncus aliquet. Vestibulum sit amet metus non elit blandit luctus.', '2022-03-29 07:52:08'),
(31, 1, '1', 'London Bridge Dsss Sssss', 'Mountain ', 'United Kingdom', 'Aberdeen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur eget nisi vel lobortis. Phasellus in ultrices arcu. Proin scelerisque tincidunt quam, vitae finibus ipsum imperdiet sed. In efficitur cursus nisi id rutrum. Vivamus pulvinar neque eget efficitur ornare. Donec porta egestas neque, fringilla ullamcorper magna blandit id. Nunc finibus metus eu felis congue lacinia. Nulla dapibus bibendum ex id efficitur. Aliquam erat volutpat. Morbi posuere, felis vel hendrerit ultrices, eros lectus rhoncus metus, vitae aliquet enim elit eget felis. Donec varius finibus tellus id molestie. Nam ac diam erat. Praesent euismod, urna eu varius tincidunt, nisi est rhoncus lectus, eget tempus nibh turpis et mi. Donec turpis massa, elementum eget tellus eu, tempus pellentesque turpis. Praesent efficitur imperdiet leo, in rhoncus massa viverra lobortis. Duis sed turpis non tellus bibendum finibus ut ut massa.\r\n\r\nVivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.\r\n\r\nFusce convallis tincidunt nisi, pharetra ornare felis dictum id. Phasellus in nisi dignissim urna ultricies ornare sed sit amet nisi. Curabitur finibus venenatis tellus sed euismod. Proin eros ex, iaculis sit amet tincidunt sed, convallis ut sem. Quisque id sapien at ex aliquet fermentum non ut ante. Fusce fermentum ante urna, non sagittis quam rhoncus aliquet. Vestibulum sit amet metus non elit blandit luctus.', '2022-03-29 05:38:42'),
(32, 1, '1', 'I Just Added Video Conetent', 'Nature', 'Nigeria', 'Igueben', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur eget nisi vel lobortis. Phasellus in ultrices arcu. Proin scelerisque tincidunt quam, vitae finibus ipsum imperdiet sed. In efficitur cursus nisi id rutrum. Vivamus pulvinar neque eget efficitur ornare. Donec porta egestas neque, fringilla ullamcorper magna blandit id. Nunc finibus metus eu felis congue lacinia. Nulla dapibus bibendum ex id efficitur. Aliquam erat volutpat. Morbi posuere, felis vel hendrerit ultrices, eros lectus rhoncus metus, vitae aliquet enim elit eget felis. Donec varius finibus tellus id molestie. Nam ac diam erat. Praesent euismod, urna eu varius tincidunt, nisi est rhoncus lectus, eget tempus nibh turpis et mi. Donec turpis massa, elementum eget tellus eu, tempus pellentesque turpis. Praesent efficitur imperdiet leo, in rhoncus massa viverra lobortis. Duis sed turpis non tellus bibendum finibus ut ut massa.\r\n\r\nVivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.\r\n\r\nFusce convallis tincidunt nisi, pharetra ornare felis dictum id. Phasellus in nisi dignissim urna ultricies ornare sed sit amet nisi. Curabitur finibus venenatis tellus sed euismod. Proin eros ex, iaculis sit amet tincidunt sed, convallis ut sem. Quisque id sapien at ex aliquet fermentum non ut ante. Fusce fermentum ante urna, non sagittis quam rhoncus aliquet. Vestibulum sit amet metus non elit blandit luctus.', '2022-03-29 06:51:36'),
(33, 1, '9', 'Tempus Quam Metus Eu Nunc. In Eu Bibendum Dolor. Vivamus Molestie', 'Culture', 'Benin', 'Edo', 'Vivamus auctor vitae enim eget vehicula. Proin mattis gravida aliquet. Fusce malesuada commodo tellus. In hac habitasse platea dictumst. Donec sollicitudin, elit sed volutpat ornare, orci arcu efficitur libero, congue tempus quam metus eu nunc. In eu bibendum dolor. Vivamus molestie dolor sit amet diam venenatis, ut fringilla arcu congue. Duis faucibus facilisis urna vel maximus. In quis nulla sed velit suscipit aliquam ac a nunc. Fusce ultricies dui ac arcu euismod, in elementum elit pellentesque. Quisque in tincidunt magna. Integer tincidunt mi a malesuada porta.', '2022-03-29 07:48:03'),
(34, 1, '9', 'Ekekhen Town Story', 'Culture', 'United States', 'Florida', 'Fusce convallis tincidunt nisi, pharetra ornare felis dictum id. Phasellus in nisi dignissim urna ultricies ornare sed sit amet nisi. Curabitur finibus venenatis tellus sed euismod. Proin eros ex, iaculis sit amet tincidunt sed, convallis ut sem. Quisque id sapien at ex aliquet fermentum non ut ante. Fusce fermentum ante urna, non sagittis quam rhoncus aliquet. Vestibulum sit amet metus non elit blandit luctus.\r\n\r\nEtiam euismod id elit vitae tempor. Fusce vel nisi cursus, scelerisque tellus at, pretium mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In eu tortor eget nulla condimentum cursus ac nec odio. Integer tempor sapien eros, et efficitur ligula mattis non. Pellentesque efficitur id nulla a imperdiet. Praesent blandit sit amet orci sit amet semper. Nunc iaculis, est vel efficitur tristique, tellus tortor lobortis sem, ut molestie purus nibh in augue. Mauris ullamcorper nibh in congue vehicula.\r\n\r\nPhasellus mollis justo sed ultrices maximus. Etiam ultrices feugiat libero, vitae tincidunt lacus aliquet nec. Maecenas a tellus velit. Nulla sapien ipsum, venenatis eget magna at, congue dapibus dolor. Vestibulum vestibulum augue in elit consectetur blandit. Praesent vel suscipit leo. Curabitur vestibulum lectus ac vehicula malesuada. Quisque quis hendrerit leo, maximus rhoncus augue. Vestibulum aliquet non magna vitae ornare. Morbi ante tellus, volutpat vitae eros a, mollis dignissim augue. Donec vel sapien sollicitudin, maximus metus eget, placerat nunc.', '2022-03-29 07:48:00'),
(35, 0, '1', 'Just A Title Test', 'Mountain ', 'United Kingdom', 'Aberdeen', 'I accept the story or delete me if you want...', '2022-03-29 08:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `user_role` varchar(12) NOT NULL DEFAULT 'story_teller',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `status`, `user_role`, `firstname`, `lastname`, `username`, `password`, `email`, `country`, `gender`, `occupation`, `reg_time`) VALUES
(1, 'Active', 'admin', 'Ephraim', 'Okonofuah', 'ephraimmode', '12345', 'ephraimmode@gmail.com', 'United Kingdom', 'Male', 'IT Expert', '2022-03-28 10:17:21'),
(9, 'Active', 'story_teller', 'Charles', 'Igbeta', 'charley', '12345', 'mymail@gmail.com', 'Nigeria', 'Male', 'Student', '2022-03-29 07:45:45'),
(10, 'Active', 'admin', 'test', 'user', 'admin', 'admin', 'test@gmail.com', 'United Kingdom', 'Male', 'IT Expert', '2022-03-29 12:31:40'),
(11, 'Active', 'story_teller', 'User', 'User', 'user', 'user', 'user@gmail.com', 'Nigeria', 'Female', 'Entrepreneur', '2022-03-29 12:33:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
