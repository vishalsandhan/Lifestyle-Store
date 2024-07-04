-- Database: `store`

-- Table structure for table `items`
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table `items`
INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Monstera Deliciosa', 1640),
(2, 'Ficus lyrata', 2460),
(3, 'Sansevieria', 820),
(4, 'Epipremnum aureum', 820),
(5, 'Philodendron', 820),
(6, 'Dracaena', 1230),
(7, 'Zamioculcas zamiifolia', 1640),
(8, 'Spathiphyllum', 1230),
(9, 'Chlorophytum comosum', 410),
(10, 'Succulents', 410),
(11, 'Cacti', 410),
(12, 'Calathea', 1230);

-- Table structure for table `users`
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Vishwa', 'vish@gmail.com', '708175b3fdb269c4ebe8e7751bb3fccd', '9283746352', 'Bengaluru', 'JP Nagar 2nd Phase'),
(2, 'Vishal', 'vishal@gmail.com', '72eea11febe23ae3dcab2bf59794c54c', '9120394750', 'Chennai', 'T Nagar'),
(3, 'Ram', 'ram@gmail.com', '1b7b4c38f626766bbdcfc895e2c514f6', '9718273679', 'Delhi', 'PMO'),
(4, 'Raj', 'raj@gmail.com', '1537c1dea8479ff52bc68336e323385f', '9281736475', 'Bengaluru', 'Basavangudi'),
(5, 'Ravi', 'ravi@gmail.com', 'f4690de2554616f5b853d35f5a7970d4', '9182712098', 'Chennai', 'abc'),
(6, 'Vishwadutt', 'vishwadutt99@gmail.com', '8231ac09972b51e692a5f515f8349a29', '9741301718', 'Bengaluru', 'Jayanagar 3rd Block');

-- Table structure for table `user_item`
CREATE TABLE `user_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
);

-- Dumping data for table `user_item`
INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`, `date_time`) VALUES
(1, 1, 2, 'Confirmed', '2024-01-07 21:08:35'),
(2, 1, 10, 'Confirmed', '2024-01-07 21:08:38'),
(3, 3, 7, 'Confirmed', '2024-01-07 21:09:06'),
(4, 3, 12, 'Confirmed', '2024-02-04 21:09:10'),
(5, 5, 5, 'Confirmed', '2024-02-04 21:22:01'),
(6, 5, 1, 'Confirmed', '2024-03-12 21:22:03');
