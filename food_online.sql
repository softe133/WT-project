-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 06:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef_image`
--

CREATE TABLE `chef_image` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef_image`
--

INSERT INTO `chef_image` (`id`, `image`, `start_date`, `end_date`) VALUES
(1, 'images/chef1.jpg', '2019-02-01', '2019-02-28'),
(2, 'images/chef2.jpg', '2019-02-01', '2019-02-28'),
(3, 'images/chef3.jpg', '2019-02-01', '2019-02-28'),
(4, 'images/chef5.jpg', '2019-02-01', '2019-02-28'),
(5, 'images/chef4.jpg', '2019-02-01', '2019-02-28'),
(6, 'images/chef1.jpg', '2019-02-01', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `image_display`
--

CREATE TABLE `image_display` (
  `id` int(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_display`
--

INSERT INTO `image_display` (`id`, `image`, `date`) VALUES
(1, 'images/lunch1d.jpeg', '2019-02-01'),
(2, 'images/lunch1.jpeg', '2019-02-01'),
(3, 'images/lunch1c.jpeg', '2019-02-01'),
(4, 'images/lunch1c.jpeg', '2019-02-01'),
(5, 'images/lunch1d.jpeg', '2019-02-01'),
(6, 'images/lunch1.jpeg', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `meun_image`
--

CREATE TABLE `meun_image` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `prize` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meun_image`
--

INSERT INTO `meun_image` (`id`, `image`, `start_date`, `end_date`, `prize`) VALUES
(1, 'images/breakfast.png', '2019-02-01', '2019-02-28', 300),
(2, 'images/lunch3.jpeg', '2019-02-01', '2019-02-28', 600),
(3, 'images/dinner.jpeg', '2019-02-01', '2019-02-28', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `newmenu`
--

CREATE TABLE `newmenu` (
  `id` int(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_price` int(200) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newmenu`
--

INSERT INTO `newmenu` (`id`, `item_name`, `item_description`, `item_price`, `item_category`, `item_img`) VALUES
(1, 'Sindhi Biryani', 'palatable chicken Biryani made in typical sindhi style', 200, 'lunch', 'images/biryani.jpg'),
(2, 'Mughlai Qourma', 'tasty chicken sooked with spicy herbs and cashew style', 300, 'lunch & dinner', 'images/qourma.jpg'),
(3, 'Hakka Noodles', 'spicy and mouth tangericing flavoured egg noodle cooked with smoked sauce & chicken.', 200, 'lunch & dinner', 'images/hakka.jpg'),
(4, 'Szechuan Chicken pasta', 'tasty speghaati cooked with chilli oil,chicken and special herbs to spiceup your tongue.', 400, 'lunch & dinner', 'images/Szechuan.jpg'),
(5, 'Chicken Corn Soup', 'boiled egg chicken stock paired with corn and black pepper to smooth your soup cravings.', 150, 'starters', 'images/Soup.jpg'),
(6, 'Russian Salad', 'fruits,vegetables and special sauce that add a refreshing flavour to your taste buds. ', 200, 'starters', 'images/Salad.jpg'),
(7, 'Cheese Omelette', 'cheese omelette paired with tomatoes and  bacon.', 100, 'breakfast', 'images/Omelette.jpg'),
(8, 'Doodh Patti Chai', 'chai made with whole cream milk.', 100, 'drinks', 'images/Chai.jpg'),
(9, 'Soft Drinks', 'pepsi, coke, 7up, sprite, marenda, fanta, sting, lemonade.', 50, 'drinks', 'images/Drinks.jpg'),
(10, 'Lacha Paratha', 'crispy layered paratha.', 40, 'breakfast', 'images/Paratha.jpg'),
(11, 'Pizza Paratha', 'fusion paratha topped with chicken, cheese, olives and veges.', 120, 'breakfast', 'images/pizzaParatha.jpg'),
(12, 'Paneer Masala Sandwich', 'chicken cheese sandwich with some spices and tasty mayo dip.', 120, 'breakfast', 'images/Sandwich.jpg'),
(13, 'Naan Channey', 'tasty chana gravy paired with sesame seed and buttery naan.', 200, 'breakfast', 'images/Channey.jpg'),
(14, 'Chana Gravy', 'tasty and spicy chicpea gravy.', 80, 'breakfast', 'images/Gravy.jpg'),
(15, 'Suji Halwa', 'tasty halwa paired with mava and dryfruits.', 100, 'breakfast', 'images/SujiHalwa.jpg'),
(16, 'Puri', 'deep fried puris.', 15, 'breakfast', 'images/Puri.jpg'),
(17, 'Chicken Karahi', 'spicy and tasty chicken karahi.', 250, 'lunch', 'images/Karahi.jpg'),
(18, 'Mutton Kunna', 'delicious mutton gravy paired with ginger and herbs.', 250, 'lunch', 'images/Kunna.jpg'),
(19, 'Daal Makhni', 'daal makhni cooked with butter and cheese.', 150, 'lunch', 'images/daalmakhni.jpg'),
(20, 'Chicken Makhni Handi', 'chicken cooked with cream and butter.', 250, 'lunch', 'images/MakhniHandi.jpg'),
(21, 'Beef Nihari', 'Spicy nihari paired with ginger and green chillis.', 250, 'dinner', 'images/Nihari.jpg'),
(22, 'Seekh Kabab', 'tasty and spicy minced beef kabas.', 120, 'dinner', 'images/Kabab.jpg'),
(23, 'Singaporean Rice', 'plain rice served with tasty chicken cream soup paired with pasta & roadted ginger and cashews.', 250, 'dinner', 'images/SingaporeanRice.jpg'),
(24, 'Dhakka Fish', 'tasty fired fish balls served with mayo-cream dip.', 250, 'dinner', 'images/Fish.jpg'),
(25, 'Prawn Curry with Rice', 'creamy prawn gravy served with plain rice.', 300, 'dinner', 'images/PrawnCurry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_online`
--

CREATE TABLE `order_online` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(200) NOT NULL,
  `zip_code` int(200) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_online`
--

INSERT INTO `order_online` (`id`, `name`, `email`, `contact`, `zip_code`, `details`) VALUES
(2, 'Hina', 'hinaUjjan@gmail.com', 2147483647, 96000, '1Biryani '),
(3, 'Hafsa', 'haffsamahnoor123@gmail.com', 2147483647, 96000, 'Food should be fresh and Good in taste.');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(200) NOT NULL,
  `time` varchar(255) NOT NULL,
  `message` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `contact`, `time`, `message`) VALUES
(1, 'Hafsa', 'haffsamahnoor123@gmail.com', 2147483647, '3:00am', 'Food should be delivered fresh and hot'),
(4, 'Faryal', 'faryal.khan1996@yahoo.com', 336859690, '10:00Am', 'Be serious for taking food at rigth place'),
(5, 'Faryal', 'faryal.khan1996@yahoo.com', 336859690, '10:00Am', 'table should be at front and clean'),
(6, 'Hafsa', 'haffsamahnoor123@gmail.com', 2147483647, '10:00Am', 'hghdjkldlshsjj'),
(7, 'Hafsa', 'haffsamahnoor123@gmail.com', 336859690, '3:00am', 'gsghssj'),
(8, 'Hafsa', 'haffsamahnoor123@gmail.com', 2147483647, '30am', 'gdhjfkfkl'),
(9, 'Hafsa', 'haffsamahnoor123@gmail.com', 2147483647, '30am', 'gdhjfkfkl'),
(10, 'saba', 'sabaarain4144@gmail.com', 336859690, '10:00Am', 'Food should be quickly delivered.');

-- --------------------------------------------------------

--
-- Table structure for table `show_image`
--

CREATE TABLE `show_image` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_image`
--

INSERT INTO `show_image` (`id`, `image`, `start_date`, `end_date`) VALUES
(1, 'images/bir.jpg\r\n', '2019-02-05', '2019-02-28'),
(2, 'images/marr.jpg', '2019-02-05', '2019-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chef_image`
--
ALTER TABLE `chef_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_display`
--
ALTER TABLE `image_display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meun_image`
--
ALTER TABLE `meun_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newmenu`
--
ALTER TABLE `newmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_online`
--
ALTER TABLE `order_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_image`
--
ALTER TABLE `show_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chef_image`
--
ALTER TABLE `chef_image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `image_display`
--
ALTER TABLE `image_display`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `meun_image`
--
ALTER TABLE `meun_image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newmenu`
--
ALTER TABLE `newmenu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `order_online`
--
ALTER TABLE `order_online`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `show_image`
--
ALTER TABLE `show_image`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
