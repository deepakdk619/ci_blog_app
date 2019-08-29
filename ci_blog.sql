-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2019 at 12:07 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `created_at`, `title`, `body`, `image`) VALUES
(2, 1, '2019-08-27 15:47:27', 'Introduction to IoT (Internet of Things)', '<p>During the last few years, Internet of Things (IoT) devices have started becoming a more and more important component in our daily life. Some common applications for IoT devices are:</p>\r\n\r\n<ul>\r\n	<li>Smart Home (eg. smart lamps)</li>\r\n	<li>Wearables (eg. smart-watches)</li>\r\n	<li>Autonomous vehicles</li>\r\n	<li>Smart cities</li>\r\n	<li>Smart Retail</li>\r\n</ul>\r\n\r\n<p>According to Wikipedia, IoT devices are defined as:</p>\r\n\r\n<blockquote>&quot;The <strong>Internet of things</strong> (<strong>IoT</strong>) is the extension of Internet connectivity into physical devices and everyday objects. Embedded with electronics, Internet connectivity, and other forms of hardware (such as sensors), these devices can communicate and interact with others over the Internet, and they can be remotely monitored and controlled &quot; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&ndash; &nbsp; Wikipedia [1]</blockquote>\r\n\r\n<p>One of the most interesting characteristics of IoT devices is that they are able to produce large amounts of data. This can be particularly used in applications such as Artificial Intelligence and Machine Learning.</p>\r\n\r\n<p>Most of IoT devices can produce in fact a great variety of Time Series data which are of huge interest in Artificial Intelligence.</p>\r\n\r\n<p>According to a study carried out by <a href=\"https://www.globaldata.com/\">Global Data</a>, the IoT market is projected to reach $318bn new worth by 2023 (in constantly rise compared to the previous years).</p>\r\n', 'internet_of_things_iot.jpg'),
(3, 2, '2019-08-27 15:49:53', 'An Overview of Android Storage', '<p>Storage is this thing we are all aware of, but always take for granted. Not long ago, every leap in storage capacity was incremental and appeared to be impossible. Nowadays, we don&rsquo;t give a second thought when contemplating how much of it our devices have (and couldn&#39;t care less about the differences).</p>\r\n\r\n<p>A bigger point would be to look at the evolution of what is stored in memory. Before smartphones, we saved the occasional photo or two, some games and a ton of text messages. But now, any standard phone will have a concoction of applications, documents, photos, videos, music files, and more. Let&rsquo;s find out how we can utilize a devices&#39;s storage space for our applications.</p>\r\n\r\n<p>What we&rsquo;re going to cover in this article is:</p>\r\n\r\n<ol>\r\n	<li>The different types of storage on Android phones</li>\r\n	<li>Differences between the types of storage</li>\r\n	<li>How to use storage in your application</li>\r\n</ol>\r\n\r\n<p>Each application has access to two different types of storage: <strong><strong><em><em>internal</em></em></strong></strong> and <strong><strong><em><em>external</em></em></strong></strong>. There are major differences between these two types of storage, and knowing them will help you when designing your next application.</p>\r\n\r\n<p>Before we begin, one thing must be said about storage and cache. Storage is meant for things you want to save persistently, while cache is there to save things temporarily.</p>\r\n', 'photo-1533279443086-d1c19a186416.jpeg'),
(5, 1, '2019-08-27 18:03:39', 'Beginner\'s roadmap to web development', '<p>If you want to learn web development, where do you even start?</p>\r\n\r\n<p>There are tons of resources out there, but it&rsquo;s hard to find the right advice without suffering from information overload.</p>\r\n\r\n<p>This beginner&rsquo;s roadmap lays out all the basics you need to learn web development. We&rsquo;re going to go through each step&ndash;from figuring out what code editor to use, to what JavaScript framework or back-end language you can pick up. And we&rsquo;ll also include links to resources where you can learn these skills.</p>\r\n\r\n<p>The fact is, if you&rsquo;re a beginner, all you need to know right now are the basics to learn web development. You really don&rsquo;t need to know every single technology, tool, or language in existence right from the get-go. (You&rsquo;ll cross that bridge when you come to it, believe me!)</p>\r\n\r\n<p><strong>By the end of this guide, you&rsquo;ll have an understanding of the basics of web development, what skills you need to learn, and where to learn them!</strong></p>\r\n\r\n<p><strong>One note:</strong> this guide is <em>not</em> meant to be an exhaustive reference to everything in web development. There are <a href=\"https://roadmap.sh/frontend\">many great ones</a> out there already. This resource is simply meant to be a starting point for beginners that is easy to digest and follow.</p>\r\n\r\n<h2><strong>The beginner&rsquo;s roadmap:</strong></h2>\r\n\r\n<p><img alt=\"Beginner\'s roadmap to web development\" src=\"https://lh4.googleusercontent.com/FxKs3XsF-P_md3S3ozxN4TJp0BiTT2I3oJR3ZE24dxxV3YFvoJlyUR0zKUiEmF0r7713gjjC-CjJWGadyIbb4epO5d8m33NvEZn980T2mHZ0ncfyI9V6dx8DuynYG2pDyp8aK0iv\" /></p>\r\n\r\n<p><br />\r\nLet&rsquo;s take a look at the roadmap steps in a bit more detail:</p>\r\n\r\n<p><strong>1: What is web development</strong>: How websites work, front-end vs back-end, code editor<br />\r\n<strong>2: Basic front-end: </strong>HTML, CSS, and JavaScript<br />\r\n<strong>3: Tools</strong>: Package managers, build tools, version control<br />\r\n<strong>4a: Additional front-end: </strong>Sass, responsive design, JavaScript frameworks<br />\r\n<strong>4b: Basic back-end: </strong>Server and database management, programming language</p>\r\n\r\n<p>In this roadmap, I recommend doing Steps 1, 2, and 3 in order. Then, depending on whether you want to focus on more front-end or back-end, you can do steps 4a or 4b in any order.</p>\r\n\r\n<p>I personally think it&rsquo;s good idea for front-end web developers to know at least a bit of back-end, and vice versa. At the very least, learning the basics of both will help you figure out if you like front-end or back-end web development better ????</p>\r\n', 'roadmap-web-development.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'john doe', 'john@doe.com', '$2y$10$HfPMRdkpPRGyxva1oCLRBu76.1TAo84dVVV1hpN.U9Y2JGWQYn.t6'),
(2, 'Harry Potter', 'harry@potter.com', '$2y$10$QO9s3e.ZNm62kVrpnQfrR.YiSEiPuBBNhknHq1bPJW76O47WxBIju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
