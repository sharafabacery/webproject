-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 02:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dientes`
--

-- --------------------------------------------------------

--
-- Table structure for table `appotiment`
--

CREATE TABLE `appotiment` (
  `id` int(11) NOT NULL,
  `day` text NOT NULL,
  `from_app` text NOT NULL,
  `to_app` text NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appotiment`
--

INSERT INTO `appotiment` (`id`, `day`, `from_app`, `to_app`, `doc_id`) VALUES
(1, 'Tuesday', '12:00', '5:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `nameofclinic` text NOT NULL,
  `image` text NOT NULL,
  `workingtime` text NOT NULL,
  `offer` float NOT NULL,
  `location` text NOT NULL,
  `waitingtime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `bio` text NOT NULL,
  `speciallist` text NOT NULL,
  `image_card` text NOT NULL,
  `num_of_user_rated` int(11) NOT NULL,
  `sum_of_rating` int(11) NOT NULL,
  `price` float NOT NULL,
  `area` text NOT NULL,
  `docname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phonenumber` text NOT NULL,
  `gender` text NOT NULL,
  `name_of_clinic` text NOT NULL,
  `img_clinic` text NOT NULL,
  `offer` float NOT NULL,
  `location_clinic` text NOT NULL,
  `waiting_time` int(11) NOT NULL,
  `token` text NOT NULL,
  `shortdescription` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `image`, `bio`, `speciallist`, `image_card`, `num_of_user_rated`, `sum_of_rating`, `price`, `area`, `docname`, `email`, `password`, `phonenumber`, `gender`, `name_of_clinic`, `img_clinic`, `offer`, `location_clinic`, `waiting_time`, `token`, `shortdescription`, `city`) VALUES
(1, 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis metus aliquam, iaculis lectus eu, rhoncus mi. Mauris a arcu vel sem iaculis gravida. Aliquam sollicitudin suscipit fringilla. Vestibulum eget nulla velit.', 'Maxillofacial surgery', 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 0, 0, 250, 'Smouha', 'ahmedM', 'ahmedM@gmail.com', '123456789', '01018184170', 'male', 'ElHammd', 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 0.25, 'Alexandria , street 25', 30, '', 'shortdescription', 'Alexandria'),
(2, 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis metus aliquam, iaculis lectus eu, rhoncus mi. Mauris a arcu vel sem iaculis gravida. Aliquam sollicitudin suscipit fringilla. Vestibulum eget nulla velit.', 'Oral surgery', 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 0, 0, 300, 'Sporting', 'ahmedMN', 'ahmedMN@gmail.com', '123456789', '01018184171', 'male', 'ElHammd2', 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 0.25, 'Alexandria , street 25', 30, '', 'shortdescription', 'Alexandria'),
(3, 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 'Oral surgery', 'https://thumbs.dreamstime.com/b/young-doctor-16088825.jpg', 0, 0, 500, 'Sporting', 'sharaf', 'sharaf@gmail.com', '1234567', '01018184170', 'male', 'a7ehhhhh', 'https://www.google.com/url?sa=i&amp;url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fclinic&amp;psig=AOvVaw1c7R2H7OcwHBG9_Km9dq8h&amp;ust=1615898366958000&amp;source=images&amp;cd=vfe&amp;ved=0CAIQjRxqFwoTCPDugdOosu8CFQAAAAAdAAAAABAD', 0.5, 'Alexdsklfsdkfskldfjklsdfjslkdf', 15, '', 'jnlkjnjknkjn', 'Alexandria');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE `medicalhistory` (
  `user_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link_model` text NOT NULL,
  `med_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `user_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `appotiment_id` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `type` text NOT NULL,
  `token` text NOT NULL,
  `phonenumber` text NOT NULL,
  `Country_city` text NOT NULL,
  `Blood_Group` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `gender`, `dateofbirth`, `type`, `token`, `phonenumber`, `Country_city`, `Blood_Group`) VALUES
(1, 'sharaf1235', 'abacerysharaf@gmail.com', '123456789', 'male', '2000-9-10', 'patient', '', '01018184170', 'Alexandria', 'A+'),
(2, 'aya ehab', 'ayaEhab@gmail.com', '123456789', 'on', '2000-03-07', 'patient', '', '01018184170', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appotiment`
--
ALTER TABLE `appotiment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_app_id` (`doc_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  ADD PRIMARY KEY (`med_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doc_history_id` (`doc_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `user_reservation_id` (`user_id`),
  ADD KEY `doc_reservation_id` (`doc_id`),
  ADD KEY `appotiment_id` (`appotiment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appotiment`
--
ALTER TABLE `appotiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appotiment`
--
ALTER TABLE `appotiment`
  ADD CONSTRAINT `doc_app_id` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  ADD CONSTRAINT `doc_history_id` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `appotiment_id` FOREIGN KEY (`appotiment_id`) REFERENCES `appotiment` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_reservation_id` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reservation_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
