-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roosh`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `1para` mediumtext NOT NULL,
  `2para` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `img`, `1para`, `2para`) VALUES
(2, 'Voluptatem dignissimos providentdss', 'upload/about/about.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident');

-- --------------------------------------------------------

--
-- Table structure for table `aboutpoint`
--

CREATE TABLE `aboutpoint` (
  `id` int(255) NOT NULL,
  `point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutpoint`
--

INSERT INTO `aboutpoint` (`id`, `point`) VALUES
(7, 'gksdfgjksdfbgksdfhgjklsdfhgklsdfhjgjkl'),
(8, 'dfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `about_team`
--

CREATE TABLE `about_team` (
  `id` int(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `twiter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkdin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_team`
--

INSERT INTO `about_team` (`id`, `img`, `name`, `role`, `twiter`, `facebook`, `instagram`, `linkdin`) VALUES
(3, 'upload/our-team/team-3.jpg', 'William Anderson', 'CTO', 'yeryesdtyhdfh', 'rgydrfghdfhdfgh', 'srhrsdhhehethdfh', 'ggsfgerwyhwertyhdfgh'),
(4, 'upload/our-team/team-2.jpg', 'Sarah Jhonson', 'Product Manager', 'yeryesdtyhdfh', 'rgydrfghdfhdfgh', 'srhrsdhhehethdfh', 'ggsfgerwyhwertyhdfgh'),
(5, 'upload/our-team/team-1.jpg', 'Walter White', 'ceo', 'dfhdghdghtrh', 'rgydrfghdfhdfgh', 'srhrsdhhehethdfh', 'ggsfgerwyhwertyhdfgh'),
(6, 'upload/our-team/team-4.jpg', 'sakshi', 'CTO', 'dfhdghdghtrh', 'rgydrfghdfhdfgh', 'srhrsdhhehethdfh', 'ggsfgerwyhwertyhdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'akilbadi194@gmail.com', 'aki123@!@!');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_img`) VALUES
(1, 'upload/banner/services.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `callto`
--

CREATE TABLE `callto` (
  `id` int(255) NOT NULL,
  `call_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `callto`
--

INSERT INTO `callto` (`id`, `call_img`) VALUES
(1, 'upload/calltoaction/cta-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `clients_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clients_img`) VALUES
(18, 'upload/clients/client-1.png'),
(20, 'upload/clients/client-3.png'),
(21, 'upload/clients/client-4.png'),
(22, 'upload/clients/client-5.png'),
(23, 'upload/clients/client-6.png'),
(24, 'upload/clients/client-7.png'),
(25, 'upload/clients/client-8.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `location` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `address`, `phone`, `email`, `password`) VALUES
(2, '   <iframe style=\"border:0; width: 100%; height: 270px;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\" frameborder=\"0\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n  ', 'Kankot, wankaner, morbi, gujarat', 8141910114, 'akilbadi194@gmail.com', 'tztk ycty bejm vgtc');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone`) VALUES
(2, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114),
(3, 'najir badi', 'kankot', 'najir123@gamail.com', 821989233);

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `token` mediumint(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`id`, `name`, `address`, `email`, `mobile`, `token`, `date`) VALUES
(14, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 4863974, '2024-11-10'),
(15, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 8388607, '2024-11-10'),
(16, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 3247484, '2024-11-10'),
(17, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 3753720, '2024-11-10'),
(18, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 2078381, '2024-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `estimate_item`
--

CREATE TABLE `estimate_item` (
  `id` int(255) NOT NULL,
  `esti_id` int(255) NOT NULL,
  `Product_img` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_qty` mediumint(255) NOT NULL,
  `product_price` bigint(255) NOT NULL,
  `total` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estimate_item`
--

INSERT INTO `estimate_item` (`id`, `esti_id`, `Product_img`, `product_name`, `product_size`, `product_qty`, `product_price`, `total`) VALUES
(2, 14, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 5, 4564, 22820),
(3, 0, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 43, 4564, 196252),
(4, 16, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 2, 4564, 9128),
(5, 17, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 2, 4564, 9128),
(7, 18, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 34, 4564, 155176);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `twiter`, `instagram`, `facebook`, `linkdin`) VALUES
(1, 'dyetsdyhsdty34525245245', 'sdtysdfghdfgh2121', 'stysdfghsdfghdfasfdsf', 'sedrtyhdgthdasfsas');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(255) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `brand_name`) VALUES
(1, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `gst` int(255) NOT NULL,
  `transport` int(255) NOT NULL,
  `nots` varchar(255) NOT NULL,
  `token` int(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `address`, `email`, `mobile`, `gst`, `transport`, `nots`, `token`, `date`) VALUES
(98, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 5, 200, 'fasdfsdfsdf', 2102742, '2024-11-08'),
(99, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 34, 343, '', 5499922, '2024-12-19'),
(100, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 3, 344, '', 4600674, '2024-12-20'),
(101, 'wewea', 'dadadawd', 'wdwd@dddddd21', 343434344, 3, 343, '', 8443634, '2024-12-20'),
(102, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 4, 44, '', 9712421, '2024-12-20'),
(103, 'Akil Badi', 'Kankot, wankaner, morbi, gujarat', 'akilbadi194@gmail.com', 8141910114, 5, 567, '', 8271994, '2024-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` int(255) NOT NULL,
  `invoice_id` int(255) NOT NULL,
  `Product_img` varchar(150) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_qty` mediumint(255) NOT NULL,
  `product_price` bigint(200) NOT NULL,
  `total` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`id`, `invoice_id`, `Product_img`, `product_name`, `product_size`, `product_qty`, `product_price`, `total`) VALUES
(102, 91, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 23, 4564, 104972),
(103, 92, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 53, 4564, 241892),
(106, 95, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 34, 4564, 155176),
(107, 96, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 34, 4564, 155176),
(108, 97, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 5, 4564, 22820),
(109, 98, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 2, 4564, 9128),
(110, 14, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 2, 4564, 9128),
(111, 14, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 23, 4564, 104972),
(112, 99, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 23, 4564, 104972),
(113, 100, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 33, 4564, 150612),
(114, 101, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 33, 4564, 150612),
(115, 102, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 2, 4564, 9128),
(116, 103, 'upload/products/masonry-portfolio-6.jpg', 'table', '20X20', 44, 4564, 200816);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(255) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `p_category`, `p_img`, `p_name`, `p_des`) VALUES
(6, 'web', 'upload/portfolio/masonry-portfolio-7.jpg', 'card1', 'dfsdffsdf'),
(7, 'app', 'upload/portfolio/masonry-portfolio-4.jpg', 'app', 'dfsdffsdf'),
(8, 'web', 'upload/portfolio/masonry-portfolio-3.jpg', 'web', 'dfsdffsdf'),
(9, 'card', 'upload/portfolio/masonry-portfolio-5.jpg', 'app', 'dfsdffsdf'),
(10, 'app', 'upload/portfolio/masonry-portfolio-3.jpg', 'app', 'dfsdffsdf');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_cat`
--

CREATE TABLE `portfolio_cat` (
  `id` int(255) NOT NULL,
  `port_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_cat`
--

INSERT INTO `portfolio_cat` (`id`, `port_cat`) VALUES
(6, 'card'),
(7, 'app'),
(9, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` bigint(255) NOT NULL,
  `product_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_image`, `product_name`, `product_price`, `product_size`) VALUES
(21, 'upload/products/masonry-portfolio-6.jpg', 'table', 4564, '20X20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `icon`, `name`, `des`) VALUES
(15, 'upload/services/broadcast.svg', 'Eosle Commodi', 'Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `post`, `des`) VALUES
(2, 'upload/testimonials/person/testimonials-5.jpg', 'akil', 'ceo', 'fhgsdfhjdfgjdfghjdhjhdfgjfghjdfghjdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_bg`
--

CREATE TABLE `testimonials_bg` (
  `id` int(255) NOT NULL,
  `testimonials_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials_bg`
--

INSERT INTO `testimonials_bg` (`id`, `testimonials_img`) VALUES
(1, 'upload/testimonials/bg/testimonials-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'Liam Moore', 'admin', 'admin@codeastro.com', '7896541250', 'd00f5d5217896fb7fd601412cb890830');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutpoint`
--
ALTER TABLE `aboutpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_team`
--
ALTER TABLE `about_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callto`
--
ALTER TABLE `callto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimate_item`
--
ALTER TABLE `estimate_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_bg`
--
ALTER TABLE `testimonials_bg`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aboutpoint`
--
ALTER TABLE `aboutpoint`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `about_team`
--
ALTER TABLE `about_team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `callto`
--
ALTER TABLE `callto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `estimate_item`
--
ALTER TABLE `estimate_item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio_cat`
--
ALTER TABLE `portfolio_cat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials_bg`
--
ALTER TABLE `testimonials_bg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
