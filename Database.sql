-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2019 at 02:31 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `key` varchar(200) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`key`, `value`) VALUES
('about_me', 'Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue\r\nPraesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue\r\n'),
('address', '123 New Yourk D Block 1100, \r\nStreet 2011 USA'),
('avatar', 'avatar.jpeg'),
('behance', 'https://www.website.com'),
('codepen', 'https://www.website.com'),
('dribbble', 'https://www.website.com'),
('dropbox', 'https://www.website.com'),
('email', 'info@domain.com\r\nname@domain.com'),
('facebook', 'https://www.website.com'),
('flickr', 'https://www.website.com'),
('google_plus', 'https://www.website.com'),
('instagram', 'https://www.website.com'),
('latitude', '51.5255069'),
('linkedin', 'https://www.website.com'),
('longitude', '-0.0836207'),
('name', 'Mulan Rafiki'),
('nationality', 'United States, America'),
('num_awards', '22'),
('num_experience', '5'),
('num_happy_clients', '1200'),
('num_meetings', '120'),
('num_projects', '300'),
('phone', '(+881) 111 222 333\r\n(+881) 111 222 333'),
('pinterest', 'https://www.website.com'),
('position_typing', 'UI/UX Designer\r\nPhotographer\r\nMobile Developer\r\nWeb Developer'),
('reddit', 'https://www.website.com'),
('resume', 'resume.txt'),
('rss', 'https://www.website.com'),
('skype', 'https://www.website.com'),
('snapchat', 'https://www.website.com'),
('soundcloud', 'https://www.website.com'),
('stackoverfolw', 'https://www.website.com'),
('tumblr', 'https://www.website.com'),
('twitter', 'https://www.website.com'),
('video_link', 'https://www.youtube.com/watch?v=uaZEeU6NzaM'),
('vimeo', 'https://www.website.com'),
('yelp', 'https://www.website.com'),
('youtube', 'https://www.website.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `short_description` varchar(300) DEFAULT NULL,
  `visits` int(11) DEFAULT '0',
  `blog_category_id` int(11) DEFAULT NULL,
  `meta_keywords` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `datetime`, `author`, `short_description`, `visits`, `blog_category_id`, `meta_keywords`) VALUES
(1, 'Recent trends in story', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '1.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 132, 1, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(2, 'Content builder posts', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '2.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 105, 4, 'tutorial, fashion, cms, script, product, fashion, template, blog, poststutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(3, 'Transitions In Design', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '3.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 71, 1, 'tutorial, fashion, cms, script, product, fashion, template, blog, poststutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(4, 'Comfort classy outfits', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '4.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 44, 2, 'tutorial, fashion, cms, script, product, fashion, template, blog, poststutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(5, 'The new clear bolg', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '5.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 39, 3, 'tutorial, fashion, cms, script, product, fashion, template, blog, posts'),
(6, 'Transitions In Design', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '6.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 56, 1, 'tutorial, fashion, cms, script, product, fashion, template, blog, posts'),
(7, 'Social media websites', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '7.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 48, 4, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(8, 'Recent trends in story', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '8.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 35, 3, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(9, 'طريقة تفعيل كود اجنيتور', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '9.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 104, 2, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(10, 'The new clear bolg', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '10.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 33, 3, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(11, 'Recent trends in story', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '11.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 31, 3, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(12, 'Transitions In Design', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '3.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 73, 1, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(13, 'Recent trends in story', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '4.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 30, 3, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(14, 'Comfort classy outfits', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '5.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 40, 2, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(15, 'Transitions In Design', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '6.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 71, 1, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(16, 'Social media websites', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '7.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 49, 4, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(17, 'Transitions In Design', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '6.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 58, 1, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts'),
(18, 'Recent trends in story', '<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>\r\n                                            <div class=\"post-quote\">\r\n                                                <span class=\"icon\"></span>\r\n                                                <blockquote>\r\n                                                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.\r\n                                                </blockquote>\r\n                                            </div>\r\n                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>\r\n                                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>\r\n                                            ', '3.jpg', '2019-03-10 04:59:52', 'Marwa El-Manawy', 'There are many variations of passages of Lorem Ipsum available, but the majority .', 39, 3, 'tutorial,fashion,cms,script,product,fashion,template,blog,posts');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `blog_category_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`blog_category_id`, `title`) VALUES
(1, 'Tutorial'),
(2, 'learning'),
(3, 'Trciks'),
(4, 'Web Applications');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `title`, `image`) VALUES
(1, 'client1', '1.png'),
(2, 'client 2', '2.png'),
(3, 'client 3', '3.png'),
(4, 'client 4', '4.png'),
(5, 'client 5', '5.png'),
(6, 'client 6', '6.png'),
(7, 'client 7', '7.png'),
(8, 'client 8', '8.png'),
(9, 'client 9', '9.png');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `school` varchar(300) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `field` varchar(250) DEFAULT NULL,
  `description` text,
  `from_date` varchar(80) DEFAULT NULL,
  `to_date` varchar(80) DEFAULT NULL,
  `current` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `school`, `image`, `field`, `description`, `from_date`, `to_date`, `current`) VALUES
(1, 'School Name', '1.png', 'Software Engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2012-03-08', '2013-07-25', NULL),
(2, 'School Name', '1.png', 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2014-10-29', '2015-11-26', NULL),
(3, 'School Name', '1.png', 'IT Sloutions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2016-10-19', '2019-03-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experience_id` int(11) NOT NULL,
  `position` varchar(200) DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text,
  `from_date` varchar(80) DEFAULT NULL,
  `to_date` varchar(80) DEFAULT NULL,
  `current` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`experience_id`, `position`, `company`, `image`, `description`, `from_date`, `to_date`, `current`) VALUES
(1, 'Frontend Developer', 'Google', '2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2015-07-16', '2016-11-24', NULL),
(2, 'Web Designer', 'Apple', '3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2016-12-30', '2017-01-05', NULL),
(3, 'Software Engineer', 'Microsoft', '4.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.', '2017-02-22', '2019-03-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(10) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `email`, `message`, `created`) VALUES
(1, 'Luis Amur', 'luisamur@gmail.com', 'Lose away off why half led have near bed. At engage simple father of period others except. My giving do summer of though narrow marked at. Spring formal no county ye waited. My whether cheered at regular it of promise blushes perhaps. Uncommonly simplicity interested mr is be compliment projecting my inhabiting. Gentleman he september in oh excellent.\r\n\r\nNew the her nor case that lady paid read. Invitation friendship travelling eat everything the out two. Shy you who scarcely expenses debating hastened resolved. Always polite moment on is warmth spirit it to hearts. Downs those still witty an balls so chief so. Moment an little remain no up lively no. Way brought may off our regular country towards adapted cheered.\r\n\r\nUse securing confined his shutters. Delightful as he it acceptance an solicitude discretion reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance acceptance my or. On consider laughter civility offended oh.\r\n\r\nOh he decisively impression attachment friendship so if everything. Whose her enjoy chief new young. Felicity if ye required likewise so doubtful. On so attention necessary at by provision otherwise existence direction. Unpleasing up announcing unpleasant themselves oh do on. Way advantage age led listening belonging supposing.\r\n\r\nSo by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse length ye needed it he having. Whatever throwing we on resolved entrance together graceful. Mrs assured add private married removed believe did she.', '2018-03-23 21:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_category_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `datetime` date DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_category_id`, `title`, `image`, `link`, `datetime`, `description`) VALUES
(1, 1, 'Company Branding', 'portfolio-img-1.jpeg', 'www.elmanawy.info', '2019-02-28', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(2, 2, 'Home Decoration', 'portfolio-img-2.jpeg', 'www.elmanawy.info', '2019-03-09', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(3, 3, 'Photography', 'portfolio-img-3.jpeg', 'www.elmanawy.info', '2019-02-26', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(4, 1, 'Furniture Hone', 'portfolio-img-4.jpeg', 'www.elmanawy.info', '2019-01-27', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(5, 2, 'Flower Power', 'portfolio-img-5.jpeg', 'www.elmanawy.info', '2019-02-25', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(6, 3, 'Home Side', 'portfolio-img-6.jpeg', 'www.elmanawy.info', '2019-03-12', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(7, 1, 'Branding Logo', 'portfolio-img-7.jpeg', 'www.elmanawy.info', '2019-03-01', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>'),
(8, 1, 'Office Decoration', 'portfolio-img-8.jpeg', 'www.elmanawy.info', '2019-01-04', '  <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-1.png\" class=\"img-responsive\" alt=\"\"> \r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"text-block pt-50\">\r\n                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. </p>\r\n                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"col-sm-6\">\r\n                                    <div class=\"block-centered pt-50\"> \r\n                                        <img class=\"img-responsive\" src=\"https://elmanawy.info/demo/mulan/ltr/images/portfolio/portfolio-single-img-2.png\" alt=\"\">\r\n                                    </div>\r\n                                </div>\r\n                            </div>');

-- --------------------------------------------------------

--
-- Table structure for table `projects_categories`
--

CREATE TABLE `projects_categories` (
  `project_category_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_categories`
--

INSERT INTO `projects_categories` (`project_category_id`, `title`) VALUES
(1, 'Websites'),
(2, 'Decoration'),
(3, 'Busniess Logo');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `description`, `image`) VALUES
(1, 'Web Development', 'Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.', '1.png'),
(2, 'Graphic Design', 'Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.', '2.png'),
(3, 'Embeded System', 'Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.', '3.png'),
(4, 'SEO Specialist', 'Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(100) NOT NULL,
  `value` varchar(250) DEFAULT NULL,
  `default_value` text,
  `required` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`, `default_value`, `required`) VALUES
('about_bg', 'about-bg.png', NULL, 0),
('alert', '1', NULL, 0),
('blog_categories_widget', '1', '1', 0),
('blog_comments_widget', '1', NULL, 0),
('blog_latest_widget', '1', NULL, 0),
('blog_popular_widget', '1', NULL, 0),
('blog_search_wedgit', '1', NULL, 0),
('color', 'default', NULL, 0),
('contact_bg', 'mailbox.png', NULL, 0),
('copyright', '© Marwa El-Manawy 2019', '© Marwa El-Manawy 2016 All rights reserved.', 1),
('favicon', 'system-favicon.png', NULL, 1),
('home_bg', 'home-bg.jpeg', NULL, 0),
('language', 'english', 'english', 1),
('meta_description', 'Welcome to the Marwa El-Manawy home page, entry point to information about innovative Marwa El-Manawy products and projects, business solutions and business consulting services', 'desc', 0),
('meta_keywords', 'Elmanawy, Marwa El-Manawy, Web Design, Web Development,IT infrastructure,business solutions,business consulting services,innovation,servers,storage solutions,software, outsourcing,web design,web development,software development,software companyyyyyyy', 'key', 1),
('portfolio_comments', '1', NULL, 0),
('portfolio_related', '1', NULL, 0),
('post_latest_widget', '1', NULL, 0),
('post_related_widget', '1', NULL, 0),
('post_search_widget', '1', NULL, 0),
('post_tags_widget', '1', NULL, 0),
('title', 'Tiana - Resume/CV CMS', NULL, 0),
('visitors', '3698', '0', 0),
('webmaster_email', 'marwa@elmanawy.info', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_category_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `rate` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_category_id`, `title`, `rate`) VALUES
(1, 2, 'PHP', 95),
(2, 2, 'Java', 85),
(3, 2, 'C#', 75),
(4, 2, 'C++', 70),
(5, 3, 'English', 95),
(6, 3, 'Italy', 90),
(7, 3, 'Turky', 85),
(8, 3, 'Arabic', 80);

-- --------------------------------------------------------

--
-- Table structure for table `skills_categories`
--

CREATE TABLE `skills_categories` (
  `skill_category_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills_categories`
--

INSERT INTO `skills_categories` (`skill_category_id`, `title`) VALUES
(2, 'Work Skills'),
(3, 'Language Skills');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `message` text,
  `image` varchar(150) DEFAULT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `name`, `position`, `message`, `image`, `rating`) VALUES
(3, 'Marwa El-Manawy', 'UI Designer', 'Wow what great experience, I love it! It\'s exactly what I\'ve been looking for. Anna\'s group was the best investment I ever made. I don\'t know if I would have ever made it without her guidance and support!', 'testimonial-avatar-1.jpeg', 5),
(5, 'Muhammad El-Manawy', 'Web Developer', 'I like this group more and more each day. It makes my life a lot easier. It\'s really wonderful to be able to get support from like minded entrepreneurs. And Anna is always available to advise us. Thank you so much!', 'testimonial-avatar-2.jpeg', 4),
(6, 'Ahmed El-Manawy', 'Mobile Developer', 'Wow what great experience, I love it! It\'s exactly what I\'ve been looking for. Anna\'s group was the best investment I ever made. I don\'t know if I would have ever made it without her guidance and support!', 'testimonial-avatar-3.jpeg', 3),
(7, 'Sara Ahmad', 'UI/UX Designer', 'Wow what great experience, I love it! It\'s exactly what I\'ve been looking for. Anna\'s group was the best investment I ever made. I don\'t know if I would have ever made it without her guidance and support!', 'testimonial-avatar-3.jpeg', 1),
(8, 'Muhammad El-Manawy', 'Web Developer', 'I like this group more and more each day. It makes my life a lot easier. It\'s really wonderful to be able to get support from like minded entrepreneurs. And Anna is always available to advise us. Thank you so much!', 'testimonial-avatar-2.jpeg', 5),
(9, 'Ahmed El-Manawy', 'Project Manager', 'Wow what great experience, I love it! It\'s exactly what I\'ve been looking for. Anna\'s group was the best investment I ever made. I don\'t know if I would have ever made it without her guidance and support!', 'testimonial-avatar-3.jpeg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Tiana Rafiki', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `projects_categories`
--
ALTER TABLE `projects_categories`
  ADD PRIMARY KEY (`project_category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `skills_categories`
--
ALTER TABLE `skills_categories`
  ADD PRIMARY KEY (`skill_category_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `blog_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects_categories`
--
ALTER TABLE `projects_categories`
  MODIFY `project_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills_categories`
--
ALTER TABLE `skills_categories`
  MODIFY `skill_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
