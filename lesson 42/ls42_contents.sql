-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 12:12 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northwind`
--

-- --------------------------------------------------------

--
-- Table structure for table `ls42_contents`
--

CREATE TABLE `ls42_contents` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `header` varchar(200) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ls42_contents`
--

INSERT INTO `ls42_contents` (`id`, `type`, `header`, `article`) VALUES
(1, 1, 'Article 1', 'Simple Article is a minimal Wordpress Theme designed for blogger. It provides many features that blogger will love it. Sticky post, Social share in each post, many post formats such as Video, Audio, Soundcloud(audio), Gallery as grid or slider or column, Quote, Aside? We also provide 4 blog layouts for maximize your design including, Full thumbnail, Medium thumbnail with content on the side, Column and Masonry? We also provide category filter in this theme for blog posts as well. Enjoy! :)\r\n\r\n'),
(2, 1, 'Article 2', 'The header is made of line starting with # (hash) symbol. Note that also we need to add a magical ?title comment which defines the title of the resulting HTML page for browser and search engines (see the source of this page - it is in the top).\r\n\r\nText is written in paragraphs, separated with empty lines. Line breaks in paragraphs are regarded as ordinary spaces. If you add a couple of extra spaces in the line end, they will create \"hard line-break\" in that place.\r\n\r\nThe code snippets are created of blocks indented with 4 spaces:\r\n\r\n'),
(3, 0, 'article 3', 'XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.\r\n\r\nStart the XAMPP Control Panel to check the server status.\r\n\r\n'),
(4, 0, 'article 4', 'Contribute to XAMPP translation at translate.apachefriends.org.\r\nCan you help translate XAMPP for other community members? We need your help to translate XAMPP into different languages. We have set up a site, translate.apachefriends.org, where users can contribute translations.\r\n\r\nInstall applications on XAMPP using Bitnami\r\nApache Friends and Bitnami are cooperating to make dozens of open source applications available on XAMPP, for free. Bitnami-packaged applications include Wordpress, Drupal, Joomla! and dozens of others and can be deployed with one-click installers. Visit the Bitnami XAMPP page for details on the currently available apps.\r\n\r\n'),
(5, 0, 'article bla bla', 'UPDATE `ls42_contents` SET `header` = \'article 3\', `article` = \'XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the FAQs to learn how to protect your site. Alternatively you can use WAMP, MAMP or LAMP which are similar packages which are more suitable for production.\\r\\n\\r\\nStart the XAMPP Control Panel to check the server status.\\r\\n\\r\\n\' WHERE `ls42_contents`.`id` = 3; UPDATE `ls42_contents` SET `header` = \'article 4\', `article` = \'Contribute to XAMPP translation at translate.apachefriends.org.\\r\\nCan you help translate XAMPP for other community members? We need your help to translate XAMPP into different languages. We have set up a site, translate.apachefriends.org, where users can contribute translations.\\r\\n\\r\\nIns[...]\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ls42_contents`
--
ALTER TABLE `ls42_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ls42_contents`
--
ALTER TABLE `ls42_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
