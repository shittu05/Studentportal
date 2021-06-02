-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 11:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_image` blob DEFAULT NULL,
  `userprofile_image` varchar(200) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_middle` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_date` date NOT NULL,
  `user_phone` varchar(256) NOT NULL,
  `user_address` varchar(256) NOT NULL,
  `user_kin` varchar(256) NOT NULL,
  `user_score` int(10) NOT NULL,
  `user_gender` enum('male','female') DEFAULT NULL,
  `user_status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_image`, `userprofile_image`, `user_first`, `user_middle`, `user_last`, `user_email`, `user_date`, `user_phone`, `user_address`, `user_kin`, `user_score`, `user_gender`, `user_status`) VALUES
(27, NULL, 'images/5050 delo.jpg', 'Senma ', 'pasi ', 'pascal', 'Asp@gmail.com', '2021-03-30', '7684932', 'West ', 'jina ', 234, 'female', 'Undecided'),
(28, NULL, 'images/Annotation 2020-08-13 214852.jpg', 'jamil ', 'sawin', 'Usman', 'saw@gmail.com', '2021-04-10', '09089087634', 'kaduna', 'sheu', 235, 'male', 'Undecided'),
(29, NULL, 'images/BCAcArpnn7N.jpg', 'Azima', 'juin', 'Lawal', 'ju@gmail.com', '2021-04-01', '08076325674', 'Lagos', 'reema', 225, 'female', 'Admitted'),
(30, NULL, 'images/LL PBIC delo.jpg', 'James', 'jan', 'Brown', 'ji@gmail.com', '2021-04-01', '090873039283', 'oshogbo, osun', 'paul', 276, 'male', 'Admitted'),
(31, NULL, 'images/5050 delo.jpg', 'Leema', 'asi', 'Adekunle', 'as@gmai.com', '2021-04-02', '0809065774', 'Ibadan, Oyo', 'kunle', 219, 'female', 'Admitted'),
(32, NULL, 'images/placeholderimage.png', 'azeem', 'wale', 'adekola', 'wal@gmail.com', '2021-04-03', '09087367537', 'Challenge, ibadan', 'tunde', 211, 'male', 'Admitted'),
(33, NULL, 'images/placeholderimage.png', 'Shade', 'adeola', 'Akintunde', 'deola@gmail.com', '2021-04-02', '08074633892', 'elewe, abeokuta', 'sile', 190, 'female', 'Undecided'),
(34, NULL, 'images/placeholderimage.png', 'Zakhir', 'Zami', 'Rashed', 'za@gmail.com', '2021-04-10', '070982345986', 'akinrinde, ondo', 'amin', 207, 'male', 'Undecided'),
(35, NULL, 'images/placeholderimage.png', 'Amin', 'baba', 'alkali', 'bab@gmail.com', '2021-04-24', '09083728123', 'kaduna', 'sima', 239, '', 'Undecided'),
(36, NULL, 'images/placeholderimage.png', 'Shamsu', 'suman', 'Ali', 'ali@gmail.com', '2021-03-28', '081345768', 'Nupawa, kano', 'kamil', 235, 'male', 'admitted'),
(37, NULL, 'images/placeholderimage.png', 'Mariam', 'azan', 'Ahmad', 'alza@gmail.com', '2021-03-04', '081345768', 'Tundun wada, Nassara', 'shehu', 199, 'female', 'admitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
