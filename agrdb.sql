-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 08:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `roll` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `conf_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `roll`, `username`, `password`, `conf_password`) VALUES
(1, 'Admin', 'adminadmin@gmail.com', '090999099889', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_requests`
--

CREATE TABLE `consultancy_requests` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `service_name` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_of_request` text NOT NULL,
  `location_address` text NOT NULL,
  `service_date` text NOT NULL,
  `service_time` text NOT NULL,
  `contact_phone` text NOT NULL,
  `status` int(11) NOT NULL,
  `rejected_comment` text NOT NULL,
  `consultant_assigned` text NOT NULL,
  `debit_card_no` text NOT NULL,
  `security_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy_requests`
--

INSERT INTO `consultancy_requests` (`id`, `service_id`, `requester_id`, `service_name`, `price`, `date_of_request`, `location_address`, `service_date`, `service_time`, `contact_phone`, `status`, `rejected_comment`, `consultant_assigned`, `debit_card_no`, `security_no`) VALUES
(139, 4, 13, 'Structural engineer', '19', '2019-05-21', 'kansanga', '2019-05-09', '10:00', '+2348038684071', 4, 'just', '', '', ''),
(145, 2, 12, 'Horticulturist', '18', '2019-05-22', 'Kantagora', '2019-05-23', '03:00', '0988987777', 3, '', 'mose01', '655555555555555', '766666'),
(155, 4, 12, 'Structural engineer', '19', '2019-05-23', 'Taura', '2019-05-25', '12:00', '080998764', 4, 'dyuywequiguwegydyuwd', '', '655555555555555', '766666'),
(162, 1, 9, 'Veterinarian', '20', '2019-05-28', 'Along Kansanga', '2019-05-29', '11:01', '090909809', 1, 'ihdjiuwwww', '', '', ''),
(175, 4, 12, 'Structural engineer', '19', '2019-05-30', 'ASFASFAF', '2019-05-29', '12:02', '22111111112132', 4, '89374598793845uewiqajhdaks', '', '655555555555555', '766666'),
(176, 2, 12, 'Horticulturist', '18', '2019-05-30', '6567ggh', '2019-05-15', '04:08', '76576877987689', 4, '<label id=', '', '655555555555555', '766666'),
(177, 2, 16, 'Horticulturist', '18', '2019-05-30', 'ssaaa', '2019-05-21', '05:55', '09898978978979', 4, '', '', '566666666666666', '453566'),
(211, 2, 9, 'Horticulturist', '18', '2019-06-06', '8374872gs', '0348-07-08', '07:34', '3487875387', 20, '', '', '', ''),
(218, 1, 9, 'Veterinarian', '20', '2019-06-06', '73eyhhu', '4643-03-07', '03:07', '73624878', 1, '', '', '', ''),
(230, 4, 17, 'Structural engineer', '19', '2019-06-06', 'kansanga', '0003-03-12', '23:03', '34252554', 4, '', '', '657646546546546', '544545'),
(231, 1, 9, 'Veterinarian', '20', '2019-06-06', 'Jinja', '2019-06-06', '13:03', '0777049471', 1, '', '', '', ''),
(232, 1, 18, 'Veterinarian', '20', '2019-06-07', 'Iuea', '2019-06-14', '12:00', '0998876777', 20, '', '', '323434566676777', '434345'),
(233, 1, 13, 'Veterinarian', '20', '2019-06-13', 'Here', '2019-06-19', '11:11', '09888737388', 4, 'we cant reach you there', '', '', ''),
(234, 1, 15, 'Veterinarian', '20', '2019-06-17', 'IUEA', '2019-06-18', '03:03', '09898787665445', 4, 'dfghcgf', '', '', ''),
(235, 2, 9, 'Horticulturist', '18', '2019-10-28', 'dxcftry', '2019-10-28', '03:00', '0987654356789', 4, 'haruna ya ce', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_services`
--

CREATE TABLE `consultancy_services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy_services`
--

INSERT INTO `consultancy_services` (`id`, `name`, `description`, `price`) VALUES
(1, 'Veterinarian', 'A veterinary physician, usually called a vet, which is shortened from veterinarian or veterinary, is a professional who practices veterinary medicine by treating diseases, disorders, and injuries in animals.', '20'),
(2, 'Horticulturist', 'A horticulturist is someone who uses scientific knowledge to cultivate and propagate plants, and then uses this knowledge to provide technical information to fruit, vegetable and flower growers as well as farmers.', '18'),
(4, 'Structural engineer', 'Structural engineers analyze, design, plan, and research structural components and structural systems to achieve design goals and ensure the safety and comfort of users or occupants. Their work takes account mainly of safety, technical, economic and environmental concerns, but they may also consider aesthetic and social factors. ', '19'),
(5, 'Irrigation engineer', 'An irrigation engineer is a person who design a irrigation system and oversees their construction or implimentation. He or she must have a solid understanding of irrigation process as well as moderate engineering skills for designing effective systems. ', '19'),
(6, 'Crop specialist', 'Crop Specialists grow the future. They use their detailed knowledge of different agricultural techniques, products, and technological advancements to help Farmers get the most out of the earth.', '16'),
(7, 'Soil scientist', 'A soil scientist is a person who is qualified to evaluate and interpret soils and soil-related data for the purpose of understanding soil resources as they contribute to not only agricultural production, but as they affect environmental quality and as they are managed for protection of human health and the environment.', '19'),
(8, 'Geneticist', ' Geneticists perform general research on genetic processes as well as development of genetic technologies to aid in the medicine and agriculture industries', '18'),
(9, 'Quality assuarance', 'Quality assurance (QA) is a way of preventing mistakes and defects in manufactured products and avoiding problems when delivering products or services to customers;', '15'),
(10, 'Sanitary', 'Sanitation refers to public health conditions related to clean drinking water and adequate treatment and disposal of human and animals excreta and sewage.', '14'),
(11, 'Hydrologist', 'is the scientific study of the movement, distribution, and quality of water on Earth and other planets, including the water cycle, water resources and environmental watershed sustainability.', '16'),
(12, 'Purchasing consultant', 'Our expert purchasing management consultants offer you all their knowledge and experience acquired across multiple sectors, to help you become more competitive and highightened about products.', '13'),
(13, 'Whether analyst', 'Whether analyst are such persons whose profession is to analyse environmental whether of current and future times.', '14'),
(14, 'Bee specialist', 'Bee specialist sometimes remove bees, hives, and honeycomb from property and structures, both residential and commercial. Bee Specialist removes wasps, too!', '13'),
(15, 'Wildlife specialist', 'Environmental wildlife specialists represent agencies that want to alter wildlife, usually by constructing a new building, dam or other man-made structure.', '15'),
(16, 'Forester', 'A forester is a person who practices forestry, the science, art, and profession of managing forests. Foresters engage in a broad range of activities including ecological restoration and management of protected areas.', '16'),
(17, 'Fishery specialist', 'Fisheries specialists study fish populations to improve disease control, maintain habitat quality, and develop conservation methods and safe industry practices.', '18'),
(18, 'Botanist', 'Botany, also called plant science(s), plant biology or phytology, is the science of plant life and a branch of biology. A botanist, plant scientist or phytologist is a scientist who specialises in this field.', '16'),
(19, 'Aquatic ecologist', 'Aquatic Ecologists examine fresh water areas such as marsh wetlands (salt flats and fresh water flood plains), lakes and rivers.', '15');

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `id` int(11) NOT NULL,
  `consultant_name` text NOT NULL,
  `identifier` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `e_mail` text NOT NULL,
  `address` text NOT NULL,
  `profession` text NOT NULL,
  `task_assigned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`id`, `consultant_name`, `identifier`, `password`, `phone`, `e_mail`, `address`, `profession`, `task_assigned`) VALUES
(2, 'Haruna inuwa', 'Haruna inuwa01', '12', '0877666557', 'haruna@gmail.com', 'kabalagala', 'Veterinarian', 0),
(3, 'Anwar ', 'Anwar01', '12', '0988890890', 'a@gmail.com', 'kansanga', 'Irrigation engineer', 0),
(4, 'Khalipha', 'Khalipha01', '12', '890989980', 'k@gmail.com', 'kicilanga', 'Veterinarian', 0),
(5, 'Aliyu', 'Aliyu01', '12', '08098899889', 'al@gmail.com', 'kabalagala', 'Crop specialist', 0),
(7, 'Muhd', 'Muhd01', '12', '0780098987', 'm@gmail.com', 'Kampala', 'Horticulturist', 0),
(8, 'Sharif', 'Sharif01', '12', '0608909980', 's@gmail.com', 'Kansanga', 'Hydrologist', 0),
(9, 'Sadiq', 'Sadiq01', '12', '0898000000', 'ss@gmail.com', 'Kansanga', 'Aquatic ecologist', 0),
(11, 'Abdussamad', 'Abdussamad01', '12', '0890000897', 'aa@yahoo.com', 'Soya', 'Fishery specialist', 0),
(12, 'Ibrahim', 'Ibrahim01', '12', '080988987892', 'i@gmail.com', 'Bunga', 'Forester', 0),
(13, 'Aminu', 'Aminu01', '12', '070987668532', 'am@yahoo.com', 'Kansanga', 'Wildlife specialist', 0),
(14, 'Abdul', 'Abdul01', '12', '06878465347', 'ab@gmail.com', 'Intunde', 'Bee specialist', 0),
(15, 'Abubakar', 'Abubakar01', '12', '0909876765', 'ab@yahoo.com', 'Kabalagala', 'Whether analyst', 0),
(16, 'Miko', 'Miko01', '12', '09753452626', 'mi@gmail.com', 'Bunga', 'Purchasing consultant', 0),
(17, 'Abdullahi', 'Abdullahi01', '12', '090909098988', 'abd@gmail.com', 'Bunga', 'Hydrologist', 0),
(18, 'Karim', 'Karim01', '12', '08097864562', 'ka@yahoo.com', 'Entebbe', 'Sanitary', 0),
(21, 'Fatima', 'Fatima01', '12', '0909876665', 'f@gmail.com', 'Kansanga', 'Quality assuarance', 0),
(22, 'Umar', 'Umar01', '12', '0890986646', 'u@gmail.com', 'Kano', 'Geneticist', 0),
(23, 'Musa', 'Musa01', '12', '0909987865', 'mu@yahoo.com', 'Muyenga', 'Soil scientist', 0),
(24, 'Usman', 'Usman01', '12', '089097675568', 'us@gmail.com', 'Kabalagala', 'Crop specialist', 0),
(25, 'Suleiman', 'Suleiman01', '12', '0989877867', 'su@gmail.com', 'Dutse', 'Irrigation engineer', 0),
(26, 'Jamilu', 'Jamilu01', '12', '0676444426', 'ja@gmail.com', 'Kazaure', 'Structural engineer', 0),
(27, 'Kabiru', 'Kabiru01', '12', '0709876878', 'kb@yahoo.com', 'k/wambai', 'Horticulturist', 0),
(30, 'Akon', 'Akon01', '12', '0909998999', 'ak@gmail.com', 'Intunde', 'Fishery', 0),
(31, 'Pete', 'Pete01', '12', '08076456376', 'p@yahoo.com', 'Kansanga', 'Wildlife', 0),
(32, 'Yakubu', 'Yakubu01', '12', '0709876587', 'y@gmail.com', 'Kabalagala', 'Aquatic', 0),
(33, 'Babangida', 'Babangida01', '12', '0898676775', 'b@yahoo.com', 'Munyoyo', 'Purchasing consultant', 0),
(36, 'TutTut', 'Tut01', '12', '09098776676', 'tut@gmail.com', 'Intundee kn', 'Botanist', 0),
(37, 'Pablo', 'pablo01', '12', '0980980987', 'p@gmail.com', 'Ggaba', 'Veterinarian', 0),
(38, 'Mose', 'mose01', '12', '090809798878', 'm@gmail.com', 'Kampala', 'Horticulturist', 1),
(39, 'Adriano', 'adriano01', '123', '089987889', 'ad@gmail.com', 'Kano', 'Structural engineer', 0),
(40, 'AliyuKCL', 'alikcl', '1234', '0909809898', 'al@gmail.com', 'Kisugu', 'Irrigation engineer', 0),
(41, 'Solomon', 'solo01', '12', '098098987878', 'sol@gmail.com', 'Kansanga', 'Crop specialist', 0),
(42, 'Dahiru', 'dahiru01', '123', '0998987876', 'da@mail.com', 'Kaduna', 'Soil scientist', 0),
(43, 'Bole', 'bole01', '123', '098097987876', 'bo@gmail.com', 'Pliare', 'Geneticist', 0),
(44, 'Suarez', 'suarez01', '123', '099879887766', 'suz@gmail.com', 'Spaniya', 'Quality assuarance', 0),
(45, 'Mira', 'mira01', '1234', '0979887687776', 'mir@gmail.com', 'Adamawa', 'Sanitary', 0),
(46, 'Tyan', 'tyan01', '123', '0898765511', 'ty@gmail.com', 'Kmala', 'Hydrologist', 0),
(47, 'Denver', 'denver01', '23', '0978889876578', 'dv@gmail.com', 'Madrid', 'Purchasing consultant', 0),
(48, 'Sabir', 'sabir01', '001', '07877788882', 'sab@gmail.com', 'Jigawa', 'Whether analyst', 0),
(49, 'Quiver', 'quiver01', '12', '09898777877', 'qu@yahoo.com', 'Ondo', 'Bee specialist', 0),
(50, 'Selena', 'selena01', '1234', '078663556', 'se@gmail.com', 'Benue', 'Wildlife specialist', 0),
(51, 'Tukur', 'tukur01', '123', '076545543345', 'tu@yahoo.com', 'Roni', 'Forester', 0),
(52, 'Khamis', 'khamis01', '198', '099999939393', 'kha@gmail.com', 'Kansanga', 'Fishery specialist', 0),
(53, 'Jerry', 'jerry01', '111', '090888888828', 'je@yahoo.com', 'Abia', 'Botanist', 0),
(54, 'Khalid', 'khalid01', '121', '0790987778', 'Khal@gmail.com', 'Kazaure', 'Aquatic ecologist', 0),
(55, 'Salis', 'salis01', '12', '09809988767', 'sal@gmail.com', 'Zamfara', 'Soil scientist', 0),
(56, 'Shariff', 'sharif01', '123', '08979887676', 'sh@gmail.com', 'Kampala', 'Wildlife specialist', 0),
(57, 'Haruna I', 'harun01', '123', '098998787667', 'hr@gmail.com', 'Kansanga', 'Aquatic ecologist', 0),
(58, 'Tom', 'tom01', '123', '0989878787', 'tom@yahoo.com', 'Kabalagala', 'Whether analyst', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `order_id`, `product_id`, `quantity`, `status`) VALUES
(12, 2, 60, 4, 0),
(13, 2, 59, 2, 0),
(18, 2, 43, 2, 0),
(20, 3, 56, 2, 0),
(21, 3, 35, 1, 0),
(22, 3, 38, 2, 0),
(23, 3, 36, 2, 0),
(25, 2, 28, 22, 0),
(26, 2, 77, 23, 0),
(27, 2, 86, 2, 0),
(28, 2, 86, 2, 0),
(30, 3, 107, 12, 0),
(31, 3, 21, 1, 0),
(32, 3, 21, 3, 0),
(33, 3, 59, 4, 0),
(34, 3, 104, 3, 0),
(36, 3, 39, 3, 0),
(37, 3, 78, 3, 0),
(38, 3, 77, 3, 0),
(39, 3, 34, 1, 0),
(40, 3, 100, 2, 0),
(41, 3, 34, 4, 0),
(42, 3, 105, 2, 0),
(48, 5, 30, 4, 0),
(64, 6, 36, 2, 1),
(65, 6, 36, 1, 1),
(66, 6, 34, 1, 1),
(67, 6, 33, 1, 1),
(68, 7, 36, 1, 0),
(69, 7, 38, 1, 0),
(70, 8, 105, 2, 0),
(72, 6, 86, 3, 1),
(90, 4, 176, 1, 1),
(91, 4, 101, 2, 1),
(94, 4, 176, 1, 1),
(96, 9, 33, 1, 2),
(97, 9, 87, 1, 2),
(102, 4, 100, 4, 1),
(103, 4, 24, 1, 1),
(106, 10, 105, 2, 1),
(108, 4, 100, 1, 1),
(109, 4, 183, 2, 1),
(110, 4, 100, 2, 1),
(111, 4, 113, 2, 1),
(113, 4, 169, 2, 1),
(114, 6, 121, 9, 1),
(115, 6, 93, 2, 1),
(116, 6, 100, 1, 1),
(117, 6, 100, 1, 1),
(118, 6, 100, 2, 1),
(119, 6, 176, 3, 1),
(120, 6, 183, 4, 1),
(121, 6, 184, 2, 1),
(126, 6, 176, 5, 0),
(127, 11, 176, 4, 1),
(128, 10, 132, 1, 1),
(129, 10, 30, 4, 1),
(131, 12, 169, 2, 1),
(132, 12, 177, 2, 2),
(133, 13, 55, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `total` text NOT NULL,
  `card_number` text NOT NULL,
  `security_number` text NOT NULL,
  `del_state` text NOT NULL,
  `del_town` text NOT NULL,
  `del_district` text NOT NULL,
  `del_road_and_building` text NOT NULL,
  `del_contact_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total`, `card_number`, `security_number`, `del_state`, `del_town`, `del_district`, `del_road_and_building`, `del_contact_phone`) VALUES
(1, 1, 0, '0', '', '', '', '', '', '', ''),
(2, 3, 1, '16476', '', '', '', 'Kampala', '', '', '0999999999'),
(3, 4, 1, '17244', '', '', '', 'Kampala', '', '', '0987474647'),
(4, 9, 3, '2334', '', '', '', '', '', '', ''),
(5, 11, 0, '2624', '', '', '', '', '', '', ''),
(6, 12, 1, '6035', '444444444444444', '232332', 'fgdfgdfdfd', 'trdrdres', 'ddfgdgf', 'f344dr', '233333334'),
(7, 12, 3, '1618', '876328752487635', '4344', 'Kampala', 'Kansanga', 'Shell', 'WQ 5353', '09098764553'),
(8, 12, 2, '60', '', '', '', '', '', '', ''),
(9, 13, 1, '1312', '', '', '', '', '', '', ''),
(10, 15, 3, '2794', '777777777777777', '999999', 'UPPERNILE', 'JUBA', 'MALAKAL', 'JONH ', '099999999999999'),
(11, 16, 3, '28', '675656866666666', '654654', 'asddsa', 'gfdgff', 'dgfdfd', 'trdtrd', '098888888888888'),
(12, 17, 1, '94', '765676787878787', '54564', 'ytrtyrt', 'yuyy', 'ygyh', 'yygyy', '54656567'),
(13, 18, 1, '1304', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` text NOT NULL,
  `manufacturer` text NOT NULL,
  `item` text NOT NULL,
  `price` double NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `manufacturer`, `item`, `price`, `description`, `image`) VALUES
(21, 'Tr2003', 'crop farming', '', 'tractors', 781, 'Hard working and durable machine', 'tractor1.jpg'),
(22, 'tr6444t', 'crop farming', '', 'tractors', 645, 'Many wants simplification', 'tractor3.PNG'),
(23, '13trF tractor', 'crop farming', '', 'tractors', 756, 'Lion in the field machine', 'tractor2.PNG'),
(24, 'VST12 Herv', 'crop farming', '', 'hervesters', 395, 'No more hand dirt ', 'hervester6.jpg'),
(25, 'VS67534', 'crop farming', '', 'hervesters', 954, 'Always finish on time', 'hervester8.jpg'),
(26, '09RTX', 'crop farming', '', 'hervesters', 987, 'Time is always valuable', 'hervester4.jpg'),
(27, 'TEa12', 'crop farming', '', 'hervesters', 479, 'Do it yourself and be happy', 'hervester7.jpg'),
(28, 'VQ1265', 'crop farming', '', 'plows', 432, 'Turn the earth up and down', 'plow3.jpg'),
(29, 'PLW12', 'crop farming', '', 'plows', 911, 'Discover whats under', 'plow4.jpg'),
(30, 'PPL14X', 'crop farming', '', 'plows', 656, 'You can do it also', 'plow6.jpg'),
(31, 'LPWS-Plows', 'crop farming', '', 'plows', 412, 'No more earth hardness', 'plow1.png'),
(32, 'Plow-CSL', 'crop farming', '', 'plows', 843, 'Thats facilitates crop growth', 'plow2.jpg'),
(33, 'CA-Harrow', 'crop farming', '', 'harrows', 987, 'Scratch the earth thoroughly', 'harrow1.jpg'),
(34, 'TL-HRW', 'crop farming', '', 'harrows', 435, 'Many really needs simplification', 'harrow2.jpg'),
(35, 'XZ-BB-Harrow', 'crop farming', '', 'harrows', 453, 'Makes the sand absorb', 'harrow3.jpg'),
(36, 'Marrow-I', 'crop farming', 'cat', 'harrows', 854, 'Selected items satisfies', 'harrow4.jpg'),
(38, 'YYU-p0', 'crop farming', '', 'harrows', 764, 'Try and use it yoursself', 'harrow5.jpg'),
(39, 'Harrow-Bim', 'crop farming', '', 'harrows', 756, 'The world needs food', 'harrow6.jpg'),
(40, 'HVST', 'crop farming', '', 'hervesters', 875, 'Dust dont matters', 'hervester12.PNG'),
(41, '$2345', 'crop farming', '', 'hervesters', 912, 'Use before it is too late', 'hervester10.PNG'),
(42, 'PP-HVts', 'crop farming', '', 'hervesters', 499, 'Use it it on time......', 'hervester1.jpg'),
(43, 'TR-PLNT', 'crop farming', '', 'transplanters', 544, 'Planting takes another shape', 'transplanter0.JPG'),
(44, 'Planter-132', 'crop farming', '', 'transplanters', 398, 'The crop need to be huge', 'transplanter2.jpg'),
(45, 'ML-PLNT', 'crop farming', '', 'transplanters', 657, 'Any body can plant', 'transplanter3.jpg'),
(46, 'AQUR-AX', 'crop farming', '', 'transplanters', 645, 'You do it and shows up', 'transplanter1.JPG'),
(47, 'TRP-N', 'crop farming', '', 'transplanters', 641, 'The secret behind planting', 'transplanter4.JPG'),
(48, 'ER-PLT', 'crop farming', '', 'transplanters', 871, 'You will like the outcome', 'transplanter5.jpg'),
(49, 'MNR-SPRD', 'crop farming', '', 'transplanters', 863, 'Satisfaction in farmers mind', 'transplanter7.jpg'),
(50, 'Spreader-TN', 'crop farming', '', 'manure_spreaders', 544, 'Spreads with pleasure', 'Manure_Spreader1.jpg'),
(51, 'TY-SPR', 'crop farming', '', 'manure_spreaders', 746, 'Hand dirt is more when spreading ', 'manure-spreader1.jpg'),
(52, 'VCX-OU', 'crop farming', '', 'manure_spreader', 545, 'Farming becomes fun', 'manure-spreader2.jpg'),
(53, 'ZS-CP', 'crop farming', '', 'manure_spreader', 986, 'It users always dont waste time', 'manure-spreader3.jpg'),
(54, 'QWE', 'crop farming', '', 'manure_spreader', 397, 'They dont mind even alone', 'manure-spreader4.jpg'),
(55, 'CLTV-O', 'crop farming', '', 'cultivators', 652, 'Cultivating is no more a hard working ', 'cultivator0.jpg'),
(56, 'VCF-5632', 'crop farming', '', 'cultivators', 927, 'Dont panic just turn the earth', 'cultivator1.jpg'),
(57, 'POO-1021', 'crop farming', '', 'cultivators', 641, 'But not for lazy', 'cultivator2.jpg'),
(58, 'CX-ZX3244', 'crop farming', '', 'cultivators', 564, 'Plain fields needs to be turn', 'cultivator3.jpg'),
(59, 'TRCT-1276', 'crop farming', '', 'tractors', 622, 'Leadership is always in need', 'tractor4.jpg'),
(60, 'Rw', 'crop farming', '', 'cultivators', 719, 'Do it yourself and be happy', 'cultivator9.jpg'),
(61, 'SPR ', 'crop farming', '', 'sprayers', 546, 'Insects go away.', 'sprayer.jpg'),
(62, 'Sp-r2', 'crop farming', '', 'sprayers', 456, 'Food needs protection.', 'sprayers (1).jpg'),
(63, 'PR Mind', 'crop farming', '', 'sprayers', 765, 'Do it yourself and be happy', 'sprayers (2).jpg'),
(64, 'Sprayer QW', 'crop farming', '', 'sprayers', 455, 'Dont panic just chase them from your green land.', 'sprayers (3).jpg'),
(65, 'SHa Spray', 'crop farming', '', 'sprayers', 345, 'No need to let pests.', 'sprayers (4).jpg'),
(66, 'DD spray', 'crop farming', '', 'sprayers', 511, 'Your crops would look fresh.', 'sprayers (5).jpg'),
(67, 'AP Spare', 'crop farming', '', 'sprayers', 711, 'Discover the nature.', 'sprayers (7).jpg'),
(68, 'PPA Admire', 'crop farming', '', 'sprayers', 911, 'Expand the spray to all.', 'sprayers (8).jpg'),
(69, 'MWer', 'crop farming', '', 'mowers', 0, 'Level the entire grass.', 'mower (2).jpg'),
(70, 'QWER', 'crop farming', '', 'mowers', 235, 'Dont let them scatter.', 'mower (1).jpg'),
(71, 'LBS Mower', 'crop farming', '', 'mowers', 345, 'Make them look the same.', 'mower (4).jpg'),
(72, 'Mow 32P', 'crop farming', '', 'mowers', 521, 'Every angle deserve to have a cut.', 'mower (5).jpg'),
(73, 'TIN-M', 'crop farming', '', 'mowers', 411, 'Freshness is always with cleanliness.', 'mower (6).jpg'),
(74, 'Manual MW', 'crop farming', '', 'mowers', 197, 'Your natural energy is also enough.', 'mower (7).jpg'),
(75, 'ERT Mower', 'crop farming', '', 'mowers', 341, 'Cover the ground with grass.', 'mower (9).jpg'),
(76, 'Mobile MW', 'crop farming', '', 'mowers', 522, 'Technology is always with nature.', 'mower (11).jpg'),
(77, 'OD Sickle', 'crop farming', '', 'sickles', 40, 'Cut them with bare hand.', 'sickle (1).jpg'),
(78, 'JPN sickle', 'crop farming', '', 'sickles', 29, 'Small field can be handle with hand.', 'sickle (2).png'),
(79, 'China Sickle', 'crop farming', '', 'sickles', 43, 'Some like it this way.', 'sickle (1.0).png'),
(80, 'TIN-M', 'crop farming', '', 'sickles', 41, 'The blade is awesome.', 'sickle (2.0).jpg'),
(81, 'Nig Blade', 'crop farming', '', 'sickles', 32, 'Sometimes is better to cut at close range.', 'sickle (3).jpg'),
(82, 'QWX sickle', 'crop farming', '', 'sickles', 29, '', 'sickle (4).jpg'),
(83, 'KL cutter', 'crop farming', '', 'sickles', 20, 'Hand dirt is more when spreading', 'sickle (5).jpg'),
(84, 'AZ-sickle', 'crop farming', '', 'sickles', 32, 'They like the way they are cutting.', 'sickle (6).jpg'),
(85, 'Sickle Hiew', 'crop farming', '', 'sickles', 19, 'The sharper the faster.', 'sickle (7).jpg'),
(86, 'Egg Handler 12q', 'poultry', '', 'egg_handling', 211, 'Egg needs care.', 'egg handlers (1).jpg'),
(87, 'HND qwX', 'poultry', '', 'egg_handling', 325, 'We like eggs so does chickens.', 'egg handlers (2).jpg'),
(88, '4RE', 'poultry', '', 'egg_handling', 513, 'Chickens starts from egg.', 'egg handlers (3).jpg'),
(89, 'RT', 'poultry', '', 'egg_handling', 431, 'Handle with pleasure.', 'egg handlers (4).jpg'),
(90, 'Ys-9875', 'poultry', '', 'egg_handling', 523, 'But handling needs care.', 'egg handlers (6).jpg'),
(91, 'AZP09 handler', 'poultry', '', 'egg_handling', 345, 'Every chicken wants their egg ', 'egg handlers (5).jpg'),
(92, 'DQ handle', 'poultry', '', 'egg_handling', 324, 'Who dont', 'egg handlers (7).jpg'),
(93, 'Tasky', 'poultry', '', 'poultry_netting', 100, 'Fencing in needs.', 'poultry netting (1).jpeg'),
(94, 'Juman', 'poultry', '', 'poultry_netting', 93, 'Prevention better than care.', 'poultry netting (9).jpg'),
(95, 'ADORE', 'poultry', '', 'poultry_netting', 110, 'Only installation you do.', 'poultry netting (3).jpg'),
(96, 'POX', 'poultry', '', 'poultry_netting', 91, 'predators go away.', 'poultry netting (6).jpg'),
(97, 'Chick Net', 'poultry', '', 'poultry_netting', 80, 'Your decision matters', 'poultry netting (8).jpg'),
(98, 'KLO021', 'poultry', '', 'poultry_netting', 112, 'Netting is a good decision.', 'poultry netting (7).jpg'),
(99, 'AHA', 'poultry', '', 'poultry_netting', 68, 'Indeed protects.', 'poultry netting (4).jpg'),
(100, 'TikMio', 'poultry', '', 'poultry_brooders', 211, 'Who doesnt like new chickens.', 'poultry brooders (4).jpg'),
(101, 'BRD', 'poultry', '', 'poultry_brooders', 156, 'Young shall grow.', 'poultry brooders (5).jpg'),
(102, 'Brood WQ', 'poultry', '', 'poultry_brooders', 311, 'Dont have to suffer.', 'poultry brooders (6).jpg'),
(103, 'ADLAQ', 'poultry', '', 'poultry_brooders', 190, 'To do the right hatching.', 'poultry brooders (9).jpg'),
(104, 'KLO', 'poultry', '', 'poultry_brooders', 195, 'Right thing have to do with... ', 'poultry brooders (11).jpg'),
(105, 'FeedA', 'poultry', '', 'poultry_feeders', 30, 'No hardship, chickens.', 'poultry feeders (3).jpg'),
(106, 'BroilFeed', 'poultry', '', 'poultry_feeders', 28, 'Grow as you eat.', 'poultry feeders (2).jpeg'),
(107, 'NC', 'poultry', '', 'poultry_feeders', 31, 'They like to eat as we do.', 'poultry feeders (2).jpg'),
(108, 'Rect feed', 'poultry', '', 'poultry_feeders', 18, 'They must enjoy picking.', 'poultry feeders (1).jpg'),
(109, 'WideFed', 'poultry', '', 'poultry_feeders', 20, 'Eat and live together.', 'poultry feeders (4).jpg'),
(110, 'EXW', 'poultry', '', 'poultry_feeders', 17, 'No more anxiety while picking.', 'poultry feeders (7).jpg'),
(111, 'YUM', 'poultry', '', 'poultry_feeders', 15, 'Feed them while roaming.', 'poultry feeders (5).jpg'),
(112, 'WTR', 'poultry', '', 'poultry_waterers', 14, 'Wet the inner and feel it', 'poultry waterer (1).gif'),
(113, '12WQ', 'poultry', '', 'poultry_waterers', 21, 'Any creature needs water.', 'poultry waterer (1).jpg'),
(114, 'SAV WET', 'poultry', '', 'poultry_waterers', 20, 'Poultry with water is most.', 'poultry waterer (3).jpg'),
(115, 'URD-XZ', 'poultry', '', 'poultry_waterers', 19, 'XZ waterer is amazing.', 'poultry waterer (6).jpg'),
(116, 'MQ-1', 'poultry', '', 'poultry_waterers', 100, 'Every chicken able to drink.', 'poultry waterer (4).jpg'),
(117, 'TKL waters', 'poultry', '', 'poultry_waterers', 22, 'There is benefits in watering.', 'poultry waterer (9).jpg'),
(118, 'TR', 'poultry', '', 'poultry_waterers', 18, 'But handling needs care.', 'poultry waterer (8).jpg'),
(119, 'Ax dehorner', 'animal_care', '', 'dehorner', 25, 'Yeah it is', 'dehorner (2).jpg'),
(120, 'QW dehrn', 'animal_care', '', 'dehorner', 20, 'They dont need it', 'dehorner (1).jpg'),
(121, 'E HornD', 'animal_care', '', 'dehorner', 30, 'No more hardship when doing', 'dehorner (6).JPG'),
(122, 'Mecha', 'animal_care', '', 'dehorner', 32, 'Mechanically remove it.', 'dehorner (5).jpg'),
(123, 'Dehorner', 'animal_care', '', 'dehorner', 19, 'I like to work with machine', 'dehorner (4).jpg'),
(124, 'Power Dhrn', 'animal_care', '', 'dehorner', 28, 'Who doesnt dehorn', 'dehorner (3).jpg'),
(125, 'Trivial', 'animal_care', '', 'dehorner', 17, 'As simple as you wish.', 'dehorner (8).jpg'),
(126, 'Qua', 'animal_care', '', 'dehorner', 19, 'May grow later.', 'dehorner (7).jpg'),
(127, 'Idlere', 'animal_care', '', 'dehorner', 25, 'Do it yourself and be happy', 'dehorner (9).jpg'),
(128, 'PO', 'animal_care', '', 'dehorner', 23, 'I like the way it works.', 'dehorner (10).jpg'),
(129, 'Jimbo', 'animal_care', '', 'fencing_wire', 100, 'Indeed protects.', 'fencing wire (1).jpg'),
(130, 'Aql', 'animal_care', '', 'fencing_wire', 90, 'Why not fence while there...', 'fencing wire (1).png'),
(131, 'Reubid', 'animal_care', '', 'fencing_wire', 89, 'They like the way they are cutting.', 'fencing wire (3).jpg'),
(132, 'Quali', 'animal_care', '', 'fencing_wire', 110, 'Environment friendly.', 'fencing wire (6).jpg'),
(133, 'OUTSKI', 'animal_care', '', 'fencing_wire', 102, 'Many really needs simplification', 'fencing wire (4).jpg'),
(134, 'FenceB', 'animal_care', '', 'fencing_wire', 88, 'Any one wants their upspring to be taken care of', 'fencing wire (5).jpg'),
(135, 'OP', 'animal_care', '', 'fencing_wire', 100, 'Level the entire grass.', 'fencing wire (7).jpg'),
(136, 'Apond', 'fisheries', '', 'fish_pond', 50, 'Rear your fish in ur back yard', 'fish pond (1).jpg'),
(137, 'Sko', 'fisheries', '', 'fish_pond', 34, 'Why not try the same.', 'fish pond (7).jpg'),
(138, 'AR pond', 'fisheries', '', 'fish_pond', 39, 'Is the same as all.', 'fish pond (4).jpg'),
(139, 'Tarma', 'fisheries', '', 'fish_pond', 61, 'Indoor then outdoor', 'fish pond (6).jpg'),
(140, 'CamV', 'fisheries', '', 'fish_pond', 36, 'No more hardship when doing', 'fish pond (12).jpg'),
(141, 'CariBX', 'fisheries', '', 'fish_pond', 22, 'Portable as all', 'fish pond (11).jpg'),
(142, 'Rainbow212', 'fisheries', '', 'fish_pond', 41, 'Dont hesitate', 'fish pond (3).jpg'),
(143, 'DQ handle', 'fisheries', '', 'fish_grader', 200, 'Organizing is something', 'fish grader (5).jpg'),
(144, 'Ruby', 'fisheries', '', 'fish_grader', 189, 'No more hardship when doing', 'fish grader (7).jpg'),
(145, 'AWSome', 'fisheries', '', 'fish_grader', 190, 'I entirely accept it.', 'fish grader (6).jpg'),
(146, 'Anthor', 'fisheries', '', 'fish_grader', 158, 'Indeed protects.', 'fish grader (8).jpg'),
(147, 'DE', 'fisheries', '', 'fish_grader', 203, 'Know the best tool.', 'fish grader (4).jpg'),
(148, 'Angular', 'fisheries', '', 'fish_grader', 178, 'Thanks to some', 'fish grader (2).jpg'),
(149, 'HIew', 'fisheries', '', 'fish_grader', 199, 'fish needs arrangement.', 'fish grader (10).jpg'),
(150, 'TNQ', 'fisheries', '', 'fish_grader', 211, 'They like the way they are cutting.', 'fish grader (7).jpg'),
(151, 'Aera', 'fisheries', '', 'aerator', 100, 'Oxygen is life.', 'aerator (1).jpg'),
(152, 'OXYaero', 'fisheries', '', 'aerator', 59, 'Drown it and exhale.', 'aerator (6).jpg'),
(153, 'Aerator Stone', 'fisheries', '', 'aerator', 30, 'Just dip it and provides.', 'aerator (2).jpg'),
(154, 'Audable', 'fisheries', '', 'aerator', 67, 'Fish life depends.', 'aerator (12).jpg'),
(155, 'Taqui', 'fisheries', '', 'aerator', 52, 'As we inhale ', 'aerator (8).jpg'),
(156, 'UYer', 'fisheries', '', 'aerator', 100, 'Dont let them feel bad.', 'aerator (7).jpg'),
(157, 'PQ127', 'fisheries', '', 'aerator', 92, 'We do the right things.', 'aerator (3).jpg'),
(158, 'AERA1212', 'fisheries', '', 'aerator', 75, 'All that matters', 'aerator (11).jpg'),
(159, 'PRO aerator', 'fisheries', '', 'aerator', 200, 'Time is always valuable', 'aerator (10).jpg'),
(160, 'WOX', 'fisheries', '', 'aerator', 64, 'But handling needs care.', 'aerator (9).jpg'),
(161, 'FED2-XZ', 'fisheries', '', 'auto_fish_feeder', 110, 'Satisfaction in farmers mind', 'auto fish feeder (1).jpeg'),
(162, 'OXE2', 'fisheries', '', 'aerator', 56, 'The is benefits in feeding.', 'auto fish feeder (1).jpg'),
(163, 'Auto FED', 'fisheries', '', 'auto_fish_feeder', 95, 'The easier the better', 'auto fish feeder (10).jpg'),
(164, 'FDX12', 'fisheries', '', 'auto_fish_feeder', 80, 'No deppression while away.', 'auto fish feeder (1).jpg'),
(165, 'POB-Feed', 'fisheries', '', 'auto_fish_feeder', 79, 'Just time that matters.', 'auto fish feeder (9).jpg'),
(166, 'QA-R12', 'fisheries', '', 'auto_fish_feeder', 116, 'Fishes dont have to worry.', 'auto fish feeder (6).jpg'),
(167, 'Xylon-A', 'fisheries', '', 'auto_fish_feeder', 100, 'Angular delivery satisfies.', 'auto fish feeder (2).jpg'),
(168, 'Trooper', 'fisheries', '', 'auto_fish_feeder', 65, 'Plain fields needs to be turn.', 'auto fish feeder (7).jpg'),
(169, 'Notcher', 'animal_care', '', 'ear_notcher', 37, 'Notch them easily.', 'ear notcher (2).jpg'),
(170, 'Sci-notch', 'animal_care', '', 'ear_notcher', 12, 'Simplification matters alot.', 'ear notcher (1).jpg'),
(171, 'PLARE-QX', 'animal_care', '', 'ear_notcher', 19, 'That whats to be done.', 'ear notcher (4).jpg'),
(172, 'QWEX', 'animal_care', '', 'ear_notcher', 15, 'To those that use as should.', 'ear notcher (7).jpg'),
(173, 'SThing', 'animal_care', '', 'ear_notcher', 11, 'Painless notching does.', 'ear notcher (3).jpg'),
(174, 'CLAPX', 'animal_care', '', 'ear_notcher', 9, 'Just time that matters.', 'ear notcher (5).jpg'),
(175, 'ROX', 'animal_care', '', 'ear_notcher', 10, 'But handling needs care.', 'ear notcher (9).jpg'),
(176, 'Strip_cup', 'animal_care', '', 'strip_cup', 7, 'Put it there as it should.', 'strip cup (7).jpg'),
(177, 'Silver Strip', 'animal_care', '', 'strip_cup', 10, 'Hyeginically trap the fluid.', 'strip cup (1).jpg'),
(178, 'SM', 'animal_care', '', 'strip_cup', 3, 'The easier the better.', 'strip cup (2).jpg'),
(179, 'ERK-21', 'animal_care', '', 'strip_cup', 6, 'Forward ever backward ...', 'strip cup (4).jpg'),
(180, 'Doubler', 'animal_care', '', 'strip_cup', 5, 'Double handling in advance.', 'strip cup (3).jpg'),
(181, 'TORZ', 'animal_care', '', 'strip_cup', 3, 'Just the way it is.', 'strip cup (5).jpg'),
(182, 'SKOC', 'animal_care', '', 'strip_cup', 5, 'Single handle trap.', 'strip cup (6).jpg'),
(183, 'WoolSheerX', 'animal_care', '', 'wool_sheer', 10, 'Heavy needs to ....', 'wool sheer (5).jpg'),
(184, 'SheerTop', 'animal_care', '', 'wool_sheer', 4, 'Cutting the wool off.', 'wool sheer (6).jpg'),
(185, 'E-Sheer', 'animal_care', '', 'wool_sheer', 11, 'Why leave them with the wool', 'wool sheer (8).jpg'),
(186, 'CabO', 'animal_care', '', 'wool_sheer', 7, 'Sometimes is better to cut at close.', 'wool sheer (10).jpg'),
(187, 'Triump', 'animal_care', '', 'wool_sheer', 5, 'Safety together with care. ', 'wool sheer (7).jpg'),
(188, 'SH-Yer', 'animal_care', '', 'wool_sheer', 6, 'We some times remove ours.', 'wool sheer (1).jpg'),
(189, 'TRA32', 'animal_care', '', 'wool_sheer', 15, 'Hard working and durable machine', 'wool sheer (9).jpg'),
(190, 'Scissors sheer', 'animal_care', '', 'wool_sheer', 5, 'Simplification matters alot.', 'wool sheer (3).jpg'),
(191, 'PEXil', 'animal_care', '', 'wool_sheer', 5, 'Is not a mechanical with fuel.', 'wool sheer (2).jpg'),
(192, 'DrenchGun', 'animal_care', '', 'drenching_gun', 15, 'Administer with expertise.', 'drenching gun (2).jpeg'),
(193, 'T-Drench', 'animal_care', '', 'drenching_gun', 10, 'Simplification matters alot.', 'drenching gun (2).jpg'),
(194, 'PireX', 'animal_care', '', 'drenching_gun', 8, 'With care to avoid shattering.', 'drenching gun (5).jpg'),
(195, 'JSDrencher', 'animal_care', '', 'drenching_gun', 12, 'Simply as always.', 'drenching gun (6).jpg'),
(196, 'QwaoZ', 'animal_care', '', 'drenching_gun', 7, 'They like the way they are.', 'drenching gun (8).jpg'),
(197, 'caXe', 'animal_care', '', 'drenching_gun', 8, 'Why not try the same.', 'drenching gun (1).jpg'),
(198, 'BoldZ12', 'animal_care', '', 'drenching_gun', 7, 'Always finish on time', 'drenching gun (1).jpeg'),
(199, 'BBoiler', 'diary', '', 'boiler', 55, 'Boil it hyeginically', 'boiler (3).jpg'),
(200, 'EXE-Boiler', 'diary', '', 'boiler', 38, 'No more hand dirt.', 'boiler (5).jpg'),
(201, 'BoilXZ-43', 'diary', '', 'boiler', 31, 'Hot boil does.', 'boiler (10).jpg'),
(202, 'T-Drench', 'diary', '', 'boiler', 40, 'Like the way they hot.', 'boiler (6).jpg'),
(203, 'AB-12', 'diary', '', 'boiler', 40, 'Angular delivery satisfies.', 'boiler (9).jpg'),
(204, 'Tank-Diary', 'diary', '', 'diary_tank', 100, 'Storage really matters.', 'diary tank (8).jpg'),
(205, 'TX-Tank', 'diary', '', 'diary_tank', 156, 'There is benefits in safe storage.', 'diary tank (1).png'),
(206, 'Reubid Tank', 'diary', '', 'diary_tank', 120, 'As long as its boiled.', 'diary tank (5).jpg'),
(207, 'PL-X0', 'diary', '', 'diary_tank', 589, 'Mass milk storage.', 'diary tank (9).jpg'),
(208, 'XZ Seperator', 'diary', '', 'cream_seperator', 150, 'Seperate btw milk & cream', 'cream seperator (9).jpg'),
(209, '', '', '', '', 0, '', ''),
(211, '', '', '', '', 0, '', ''),
(212, '', '', '', '', 0, '', ''),
(213, '', '', '', '', 0, '', ''),
(214, '', '', '', '', 0, '', ''),
(215, '', '', '', '', 0, '', ''),
(216, '', '', '', '', 0, '', ''),
(217, '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests_orders`
--

CREATE TABLE `requests_orders` (
  `id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests_orders`
--

INSERT INTO `requests_orders` (`id`, `requester_id`, `total_price`) VALUES
(1, 9, '4'),
(5, 17, '-14'),
(6, 18, '-14'),
(7, 13, '-14'),
(8, 15, '20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `roll` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `conf_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `roll`, `username`, `password`, `conf_password`) VALUES
(9, 'Aliyu Khalifa', 'aliyoshk@gmail.com', '0797292396', 'sfs', 'user', 'ahk', 'ahk', 'ahk'),
(11, 'Watiti', 'watiti@gmail.com', '090977778', 'kampala', 'user', 'watiti', '123', 'watiti'),
(13, 'saif', 'ysaifullah62@gmail.com', '+2348038684071', 'kansanga ggaba road', 'user', 'saif01', '328199', '328199'),
(15, 'Tuttut', 'tuttut@gmail.com', '09988677656', 'Kampalaaaaa', 'user', 'tut', '123', '123'),
(16, 'Anwar Rabiu', 'anwarrabiu81@gmail.com', '0755923076', 'Kampala', 'user', 'f', '123', '123'),
(17, 'yqeyywqy', 'a@gmail.com', '8764837687356', 'uydeyuyer', 'user', 'test', 'test', 'test'),
(18, 'Madam Esther', 'madam@gmail.com', '090987786777', 'Kampala', 'user', 'madam', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultancy_requests`
--
ALTER TABLE `consultancy_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultancy_services`
--
ALTER TABLE `consultancy_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests_orders`
--
ALTER TABLE `requests_orders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultancy_requests`
--
ALTER TABLE `consultancy_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `consultancy_services`
--
ALTER TABLE `consultancy_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `requests_orders`
--
ALTER TABLE `requests_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
