-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-cjh1.alwaysdata.net
-- Generation Time: Nov 27, 2022 at 11:59 PM
-- Server version: 10.6.7-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cjh1_biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `nbPages` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `nbPages`, `image`) VALUES
(4, 'Le virus', 100, '32008_78496_53280_58532_virus.png'),
(5, 'kjkuh', 261, '17550_france.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(3, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1@g.fr'),
(2, 'admin0', '62f04a011fbb80030bb0a13701c20b41', 'admin0@g.fr'),
(6, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin3@gmail.com'),
(7, 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', 'admin4@gmail.com'),
(8, 'admin5', '26a91342190d515231d7238b0c5438e1', 'admin5@gmail.com'),
(9, 'admin6', 'c6b853d6a7cc7ec49172937f68f446c8', 'admin6@gmail.com'),
(10, 'admin7', '788073cefde4b240873e1f52f5371d7d', 'admin7@gmail.com'),
(11, 'admin8', '8762eb814817cc8dcbb3fb5c5fcd52e0', 'admin8@gmail.com'),
(12, 'admin9', 'eed57216df3731106517ccaf5da2122d', 'admin9@gmail.com'),
(13, 'admin10', '4fbd41a36dac3cd79aa1041c9648ab89', 'admin10@gmail.com'),
(14, 'admin12', '1844156d4166d94387f1a4ad031ca5fa', 'admin12@gmail.com'),
(15, 'admin13', '588e57b852a16b297af73ae818065474', 'admin13@gmail.com'),
(16, 'admin14', 'bdc8341bb7c06ca3a3e9ab7d39ecb789', 'admin14@gmail.com'),
(17, 'admin15', 'b26c077af60ba02d12c8436110256029', 'admin15@gmail.com'),
(18, 'admin16', '9071e0ca7e4964a5cc69201ba2743650', 'admin16@gmail.com'),
(19, 'anas21', '2df2546a252f1f54def314d8f1d2503e', 'anas21@gmail.com'),
(20, 'anas22', '60609f4b7230ada60f21bc021397d1ad', 'anas22@gmail.com'),
(21, 'lolm', '300b8d667cd0deb27c55e4b60b3c3a80', 'lolm@g.fr'),
(22, 'mlkop', 'ea77dfb7a36bf7046b452f49a59ec5d2', 'mlkop@g.fr'),
(23, 'lezkf', 'f8e0088b0af30f572ba6f2e344c4e52c', 'lezkf@g.fr'),
(24, 'azfghjl', '9c8d7187edab318bb9894f24c90961a7', 'azfghjl@g.fr'),
(25, 'ddfghj', 'a4658fe7d24cc7c1232171ac7d136b09', 'ddfghj@g.fr'),
(26, 'erftghf', '703ae18c7ef66e5b7aec6f6b5e9f7b7a', 'erftghf@gmail.com'),
(27, 'erftghfds', '950ebe1ef0abcda5b0eee0599a2e5bc1', 'erftghfds@gmail.com'),
(28, 'erftghfdsfez', '8b71202e9c8deb13d85de1277933533c', 'erftghfdsfez@gmail.com'),
(29, 'erftgha', '8da10b5e5605bc70a185a3c28c211cf9', 'erftgha@gmail.com'),
(30, 'erftghd', '63aa921ebd2b9ffc6f63f1557077c5a1', 'erftghd@gmail.com'),
(31, 'afjdhf', 'f092fcd5148ff4a7db3a02882db44e05', 'afjdhf@gmail.com'),
(32, 'afjdhff', '1e5a08fa27b24959cc48dba86830c6a1', 'afjdhff@gmail.com'),
(33, 'ezafbg', '7105abcde2158d924977550d7fb8fd94', 'ezafbg@gmail.com'),
(34, 'fvdsqvf', '58e3cfb339e02fb252232c0d650ac0b2', 'fvdsqvf@gmail.com'),
(35, 'fvdsflz', 'a1a4fbeb5afe7b8b9bfe688903108ce1', 'fvdsflz@gmail.com'),
(36, 'azefdsqf', '27061319d9eca9924cae55a294766de2', 'azefdsqf@g.fr'),
(37, 'azefdss', 'b396c515b70ccf142263180af2e14b02', 'azefdss@g.fr'),
(38, 'azefqd', '9566aff93ba7598d3e3c2a1ba2cefcbd', 'azefqd@g.fr'),
(39, 'azefqdsq', '4b0baedb224cce4eed011378d94e4f77', 'azefqds@g.fr'),
(40, 'azfdezf', '123e3df9c1199d72e1c805524199181a', 'azfdezf@g.fr'),
(41, 'uighiu', '1aa0b80df3132124bd7501ffab752597', 'uighiu@gmail.fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
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
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
