
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 36000.00, './assets/products/1.png', '2018-02-10 11:08:57'), -- NOW()
(2, 'Redmi', 'Redmi Note 7', 28000.00, './assets/products/2.png', '2018-02-10 11:08:57'),
(3, 'Redmi', 'Redmi Note 6', 25000.00, './assets/products/3.png', '2018-02-10 11:08:57'),
(4, 'Redmi', 'Redmi Note 5', 24000.00, './assets/products/4.png', '2018-02-10 11:08:57'),
(5, 'Redmi', 'Redmi Note 4', 21000.00, './assets/products/5.png', '2018-02-10 11:08:57'),
(6, 'Redmi', 'Redmi Note 8', 19000.00, './assets/products/6.png', '2018-02-10 11:08:57'),
(7, 'Redmi', 'Redmi Note 9', 15000.00, './assets/products/8.png', '2018-02-10 11:08:57'),
(8, 'Redmi', 'Redmi Note', 10000.00, './assets/products/10.png', '2018-02-10 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 25000.00, './assets/products/11.png', '2018-02-10 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 40200.00, './assets/products/12.png', '2018-02-10 11:08:57'),
(11, 'Apple', 'Apple iPhone X', 95000.00, './assets/products/13.png', '2018-02-10 11:08:57'),
(12, 'Apple', 'Apple iPhone 4s', 15000.00, './assets/products/14.png', '2018-02-10 11:08:57'),
(13, 'Apple', 'Apple iPhone 6s Plus', 60000.00, './assets/products/15.png', '2018-02-10 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'amit', 'nevarekar', '2018-02-10 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
