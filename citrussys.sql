-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2021 at 07:11 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrussys`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
                            `id` int UNSIGNED NOT NULL,
                            `creator` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                            `product_id` int DEFAULT NULL,
                            `comment` text COLLATE utf8_unicode_ci NOT NULL,
                            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                            `approved` int NOT NULL DEFAULT '0',
                            `approved_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `creator`, `product_id`, `comment`, `created_at`, `approved`, `approved_by`) VALUES
(1, 'SpaceBoy', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-04-20 23:36:37', 0, 0),
(2, 'Anon', 1, 'Vivamus facilisis lobortis interdum. Phasellus hendrerit pretium ipsum ac sodales. Nullam molestie ipsum lorem, ut aliquet ex euismod interdum. Aenean posuere mi non ullamcorper tempus. Fusce nec convallis ligula. Maecenas finibus ex tortor, non sodales ante vestibulum quis. Suspendisse ac porta justo. Aliquam non maximus neque. Quisque faucibus lacus non metus blandit rutrum. Vivamus nec tincidunt dui, at vehicula leo. Suspendisse tristique fringilla purus sit amet finibus.', '2021-04-21 01:07:24', 0, 0),
(3, 'Anon', 0, 'Vivamus facilisis lobortis interdum. Phasellus hendrerit pretium ipsum ac sodales. Nullam molestie ipsum lorem, ut aliquet ex euismod interdum. Aenean posuere mi non ullamcorper tempus. Fusce nec convallis ligula. Maecenas finibus ex tortor, non sodales ante vestibulum quis. Suspendisse ac porta justo. Aliquam non maximus neque. Quisque faucibus lacus non metus blandit rutrum. Vivamus nec tincidunt dui, at vehicula leo. Suspendisse tristique fringilla purus sit amet finibus.', '2021-04-21 07:07:24', 0, 0),
(4, 'Ana', 0, 'Nullam lobortis posuere lacus, sed sodales metus volutpat vitae. Phasellus elementum urna ex, id tempor lacus ullamcorper non. Quisque ornare sem nec lobortis suscipit. Nunc fermentum ligula lectus, vel porttitor ligula placerat vitae. Cras ac massa a orci porta hendrerit. Sed scelerisque consequat odio, sed rutrum nisl. Nunc mattis augue eget viverra lobortis. Morbi dui felis, tincidunt vitae quam vitae, mattis pretium nisl. In a ex ante. Sed consectetur vel nisi in elementum. Proin sed elit faucibus mauris faucibus vestibulum. Integer id eros blandit, suscipit enim a, tincidunt nisl. Nam mauris ligula, porta eget nibh dignissim, vehicula vehicula eros.', '2021-04-21 16:12:08', 0, 0),
(5, 'Ana', 0, 'Nullam lobortis posuere lacus, sed sodales metus volutpat vitae. Phasellus elementum urna ex, id tempor lacus ullamcorper non. Quisque ornare sem nec lobortis suscipit. Nunc fermentum ligula lectus, vel porttitor ligula placerat vitae. Cras ac massa a orci porta hendrerit. Sed scelerisque consequat odio, sed rutrum nisl. Nunc mattis augue eget viverra lobortis. Morbi dui felis, tincidunt vitae quam vitae, mattis pretium nisl. In a ex ante. Sed consectetur vel nisi in elementum. Proin sed elit faucibus mauris faucibus vestibulum. Integer id eros blandit, suscipit enim a, tincidunt nisl. Nam mauris ligula, porta eget nibh dignissim, vehicula vehicula eros.', '2021-04-21 16:12:52', 0, 0),
(6, 'Ana', 0, 'Etiam molestie quam convallis velit pulvinar, et elementum leo tincidunt. Cras consectetur pulvinar sem fermentum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vitae tincidunt justo. Nam dictum hendrerit aliquam. Suspendisse potenti. Mauris feugiat blandit sem. Phasellus in est in nibh laoreet tincidunt ut non lorem. Quisque porttitor pharetra metus, sed tincidunt neque ornare a. Mauris maximus est sed nunc dapibus, vel ultricies elit consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. In a lacinia nibh. Mauris arcu diam, suscipit vitae posuere eu, iaculis et eros. Duis sodales mauris nec ligula elementum, tincidunt posuere metus ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempor justo quis accumsan mattis.', '2021-04-21 16:21:53', 0, 0),
(7, 'Ana', 0, 'Etiam molestie quam convallis velit pulvinar, et elementum leo tincidunt. Cras consectetur pulvinar sem fermentum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vitae tincidunt justo. Nam dictum hendrerit aliquam. Suspendisse potenti. Mauris feugiat blandit sem. Phasellus in est in nibh laoreet tincidunt ut non lorem. Quisque porttitor pharetra metus, sed tincidunt neque ornare a. Mauris maximus est sed nunc dapibus, vel ultricies elit consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. In a lacinia nibh. Mauris arcu diam, suscipit vitae posuere eu, iaculis et eros. Duis sodales mauris nec ligula elementum, tincidunt posuere metus ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempor justo quis accumsan mattis.', '2021-04-21 16:22:18', 0, 0),
(8, 'Ana', 0, 'Etiam molestie quam convallis velit pulvinar, et elementum leo tincidunt. Cras consectetur pulvinar sem fermentum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam vitae tincidunt justo. Nam dictum hendrerit aliquam. Suspendisse potenti. Mauris feugiat blandit sem. Phasellus in est in nibh laoreet tincidunt ut non lorem. Quisque porttitor pharetra metus, sed tincidunt neque ornare a. Mauris maximus est sed nunc dapibus, vel ultricies elit consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. In a lacinia nibh. Mauris arcu diam, suscipit vitae posuere eu, iaculis et eros. Duis sodales mauris nec ligula elementum, tincidunt posuere metus ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tempor justo quis accumsan mattis.', '2021-04-21 16:22:30', 0, 0),
(9, 'SpaceBoy123', 0, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna.', '2021-04-21 16:29:49', 1, 1),
(10, 'SpaceBoy321', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum nec nisl in sagittis. Donec nec luctus nisl, ut venenatis mauris. Sed quis enim quis ex ultrices molestie a nec dolor. Aenean auctor justo eu odio mattis scelerisque. Duis ac metus felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed venenatis a sapien id efficitur. In eu nisi et metus mattis eleifend et et lectus. Phasellus finibus enim non facilisis rutrum. In a enim dapibus, tincidunt elit nec, efficitur ligula.', '2021-04-21 16:31:09', 0, 0),
(11, 'Marko', 0, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna. Quisque id felis nec diam rhoncus suscipit vel a libero. Mauris ornare condimentum nunc eget elementum. Duis nec turpis in magna vestibulum posuere. In vulputate ultricies malesuada. Duis aliquet imperdiet est id placerat.', '2021-04-21 18:41:52', 0, 0),
(12, 'Nemanja', 3, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna. Quisque id felis nec diam rhoncus suscipit vel a libero. Mauris ornare condimentum nunc eget elementum. Duis nec turpis in magna vestibulum posuere. In vulputate ultricies malesuada. Duis aliquet imperdiet est id placerat.', '2021-04-21 18:50:45', 1, 1),
(13, 'Nemanja', 3, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna. Quisque id felis nec diam rhoncus suscipit vel a libero. Mauris ornare condimentum nunc eget elementum. Duis nec turpis in magna vestibulum posuere. In vulputate ultricies malesuada. Duis aliquet imperdiet est id placerat.', '2021-04-21 18:50:45', 0, 0),
(14, 'Nemanja', 3, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna. Quisque id felis nec diam rhoncus suscipit vel a libero. Mauris ornare condimentum nunc eget elementum. Duis nec turpis in magna vestibulum posuere. In vulputate ultricies malesuada. Duis aliquet imperdiet est id placerat.', '2021-04-21 18:50:45', 0, 0),
(15, 'Nemanja', 3, 'Suspendisse ultrices massa sed cursus tincidunt. Nam rhoncus aliquet neque sed placerat. Quisque suscipit libero a nisl dictum viverra. Praesent lacinia ante nec lacinia elementum. Quisque et turpis urna. Quisque id felis nec diam rhoncus suscipit vel a libero. Mauris ornare condimentum nunc eget elementum. Duis nec turpis in magna vestibulum posuere. In vulputate ultricies malesuada. Duis aliquet imperdiet est id placerat.', '2021-04-21 18:50:45', 1, 1),
(16, 'Vladislav', 2, 'Sed fringilla ipsum id luctus mollis. Sed pharetra dolor vitae egestas faucibus. Sed fringilla eu erat vel luctus. Ut quis ante vitae felis faucibus tincidunt. Integer gravida diam lorem, a varius urna faucibus id. Sed blandit rutrum diam, non malesuada leo blandit euismod. Nunc pharetra augue non auctor ultrices. Sed urna risus, interdum nec enim eu, molestie ullamcorper ex. Aenean lacus odio, ultricies non nulla id, volutpat ultricies dolor. Vivamus mollis consectetur tincidunt. Pellentesque quis odio ac dolor tincidunt sollicitudin at maximus magna. Curabitur interdum, lorem id porttitor tincidunt, nunc nulla dictum libero, vel pellentesque libero est ut diam.', '2021-04-21 19:09:30', 1, 1),
(17, 'Mirko', 3, 'Vivamus mollis consectetur tincidunt. Pellentesque quis odio ac dolor tincidunt sollicitudin at maximus magna. Curabitur interdum, lorem id porttitor tincidunt, nunc nulla dictum libero, vel pellentesque libero est ut diam.', '2021-04-21 19:09:45', 1, 1),
(18, 'Zare', 4, 'Aenean sollicitudin ante non egestas ultricies. Nulla condimentum leo a maximus euismod. Vivamus pretium pretium scelerisque. Quisque aliquet blandit lorem, a scelerisque orci cursus sit amet. Quisque tempus, tortor a maximus sollicitudin, lorem quam aliquet metus, vel egestas augue nulla interdum sapien.', '2021-04-21 19:09:58', 1, 1),
(19, 'Igor', 6, 'Donec ornare placerat eros, eget malesuada turpis egestas ut. Nulla felis eros, cursus in felis sit amet, molestie sollicitudin tortor. Pellentesque arcu augue, sagittis sit amet ultricies nec, condimentum nec justo.', '2021-04-21 19:10:16', 1, 1),
(20, 'Annonimus', 8, 'Donec ornare placerat eros, eget malesuada turpis egestas ut. Nulla felis eros, cursus in felis sit amet, molestie sollicitudin tortor. Pellentesque arcu augue, sagittis sit amet ultricies nec, condimentum nec justo.', '2021-04-21 19:10:35', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
                            `id` int UNSIGNED NOT NULL,
                            `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                            `description` text COLLATE utf8_unicode_ci NOT NULL,
                            `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
                            `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `slug`) VALUES
(1, 'Product 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-1.jpg', 'product-1'),
(2, 'Product 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-2.jpg', 'product-2'),
(3, 'Product 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-3.jpg', 'product-3'),
(4, 'Product 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-4.jpg', 'product-4'),
(5, 'Product 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-5.jpg', 'product-5'),
(6, 'Product 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-6.jpg', 'product-6'),
(7, 'Product 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-7.jpg', 'product-7'),
(8, 'Product 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-8.jpg', 'product-8'),
(9, 'Product 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus nisi nec orci lobortis, vel bibendum metus condimentum. Suspendisse fermentum luctus ante, ut laoreet orci.', '/images/product-9.jpg', 'product-9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` int UNSIGNED NOT NULL,
                         `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                         `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$12$egVXkoHndtpVFeTjGHYqduEkvxM.96jeUrAmksYmLsusxe1UNwIHy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;