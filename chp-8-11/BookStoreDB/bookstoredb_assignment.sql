-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 05:52 AM
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
-- Database: `bookstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `firstName`, `lastName`) VALUES
(1, ' Jaideva', 'Goswami'),
(2, ' John', 'Foreman'),
(3, ' Stephen', 'Hawking'),
(4, ' Stephen', 'Dubner'),
(5, ' Edward', 'Said'),
(6, ' Vladimir', 'Vapnik'),
(7, ' V P', 'Menon'),
(8, ' Leonard', 'Mlodinow'),
(9, ' Frank', 'Shih'),
(10, ' Maria', 'Konnikova'),
(11, 'Sebastian Gutierrez', 'Gutierrez'),
(12, ' Kurt', 'Vonnegut'),
(13, ' Cedric', 'Villani'),
(14, ' Gerald', 'Sussman'),
(15, ' Abraham', 'Eraly'),
(16, ' Frank', 'Kafka'),
(17, ' John', 'Pratt'),
(18, ' Robert', 'Nisbet'),
(19, ' H. G.', 'Wells'),
(20, ' Werner', 'Heisenberg'),
(21, ' Andy', 'Oram'),
(22, ' Terence', 'Tao'),
(23, ' Drew', 'Conway'),
(24, ' Nate', 'Silver'),
(25, ' Wes', 'McKinney'),
(26, ' Thomas', 'Cormen'),
(27, ' Siddhartha', 'Deb'),
(28, ' Albert', 'Camus'),
(29, ' Arthur Conan', 'Doyle'),
(30, ' Arthur Conan', 'Doyle'),
(31, ' Adam', 'Smith'),
(32, ' Ken', 'Follett'),
(33, ' Adolf', 'Hitler'),
(34, ' Fritjof', 'Capra'),
(35, ' Richard', 'Feynman'),
(36, ' Ernest', 'Hemingway'),
(37, ' Frederick', 'Forsyth'),
(38, ' Jeffery', 'Archer'),
(39, ' Randy', 'Pausch'),
(40, ' Ayn', 'Rand'),
(41, ' Michael', 'Crichton'),
(42, ' John', 'Steinbeck'),
(43, ' Edgar Allen', 'Poe'),
(44, ' Stephen', 'Dubner'),
(45, ' Fritjof', 'Capra'),
(46, ' Will', 'Durant'),
(47, ' P L', 'Deshpande'),
(48, ' John', 'Steinbeck'),
(49, ' John', 'Steinbeck'),
(50, ' John', 'Steinbeck'),
(51, ' John', 'Grisham'),
(52, ' V. S.', 'Naipaul'),
(53, ' Joseph', 'Heller'),
(54, '', 'BBC'),
(55, ' Bob', 'Dylan'),
(56, ' Madan', 'Gupta'),
(57, ' Alfred', 'Stonier'),
(58, ' W. H.', 'Greene'),
(59, ' Gary', 'Bradsky'),
(60, ' Andrew', 'Tanenbaum'),
(61, ' David', 'Forsyth'),
(62, ' Schilling', 'Taub'),
(63, ' Yashwant', 'Kanetkar'),
(64, ' Jonathan', 'Stroud'),
(65, ' Fyodor', 'Dostoevsky'),
(66, ' Dan', 'Brown'),
(67, ' Amartya', 'Sen'),
(68, ' Amitav', 'Ghosh'),
(69, ' Amartya', 'Sen'),
(70, ' Lorraine', 'Hansberry'),
(71, ' Bob', 'Woodward'),
(72, ' Jeffery', 'Archer'),
(73, ' Kuldip', 'Nayar'),
(74, ' Sunita', 'Deshpande'),
(75, ' William', 'Dalrymple'),
(76, '', 'Various'),
(77, ' P L', 'Deshpande'),
(78, ' P L', 'Deshpande'),
(79, ' P L', 'Deshpande'),
(80, ' Sanjay', 'Garg'),
(81, ' Dominique', 'Lapierre'),
(82, ' V P', 'Kale'),
(83, ' Shashi', 'Tharoor'),
(84, ' Shashi', 'Tharoor'),
(85, ' Shashi', 'Tharoor'),
(86, ' Dominique', 'Lapierre'),
(87, ' Dominique', 'Lapierre'),
(88, ' Dominique', 'Lapierre'),
(89, ' John', 'Steinbeck'),
(90, ' Bertrand', 'Russell'),
(91, ' Sam', 'Harris'),
(92, ' Shashi', 'Tharoor'),
(93, ' Earle Stanley', 'Gardner'),
(94, ' Stephen', 'Hawking'),
(95, ' Peter', 'Drucker'),
(96, ' David', 'Bodanis'),
(97, ' Victor', 'Hugo'),
(98, ' John', 'Steinbeck'),
(99, ' Peter', 'Drucker'),
(100, ' Richard', 'Gordon'),
(101, ' George', 'Orwell'),
(102, ' Amartya', 'Sen'),
(103, ' William', 'Dalrymple'),
(104, ' Dominique', 'Lapierre'),
(105, ' Lee', 'Iacoca'),
(106, ' William S', 'Maugham'),
(107, ' Frederick', 'Forsyth'),
(108, ' William S', 'Maugham'),
(109, ' Robert', 'Pirsig'),
(110, ' Robert', 'Fisk'),
(111, ' Ayn', 'Rand'),
(112, ' Amir', 'Aczel'),
(113, ' Bertrand', 'Russell'),
(114, ' Fritjof', 'Capra'),
(115, ' Amartya', 'Sen'),
(116, ' Samuel', 'Huntington'),
(117, ' Fritjof', 'Capra'),
(118, '', ''),
(119, '', ''),
(120, '', ''),
(121, '', ''),
(122, '', ''),
(123, '', ''),
(124, 'Megan', 'Yu'),
(125, '', ''),
(126, '', ''),
(127, '', ''),
(128, 'Shianne', 'Wick');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `publicationDate` date NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `ISBN`, `title`, `publicationDate`, `publisher_id`, `price`) VALUES
(1, '6335004976', 'Fundamentals of Wavelets', '2008-12-25', 33, 43.25),
(2, '4919582627', 'Data Smart', '2012-01-07', 33, 19.70),
(3, '3476459985', 'God Created the Integers', '2017-03-28', 20, 63.54),
(4, '5253353398', 'Superfreakonomics', '2013-05-16', 9, 39.58),
(5, '8456164923', 'Orientalism', '2001-08-31', 20, 32.08),
(6, '6425867822', 'Nature of Statistical Learning Theory', '0000-00-00', 28, 60.98),
(7, '9026950654', 'Integration of the Indian States', '2006-11-08', 17, 39.81),
(8, '2074700149', 'Drunkard\'s Walk', '0000-00-00', 20, 65.91),
(9, '1348386217', 'Image Processing & Mathematical Morpholo', '2002-01-15', 4, 68.05),
(10, '6448799134', 'How to Think Like Sherlock Holmes', '2002-05-13', 20, 35.78),
(11, '4083970035', 'Data Scientists at Work', '2021-08-18', 1, 68.72),
(12, '8919718701', 'Slaughterhouse Five', '2001-03-06', 24, 26.95),
(13, '8579846382', 'Birth of a Theorem', '2004-11-06', 3, 58.93),
(14, '5447770751', 'Structure & Interpretation of Computer P', '2002-07-03', 15, 58.99),
(15, '5578176464', 'Age of Wrath', '0000-00-00', 20, 53.05),
(16, '2811599813', 'Trial', '0000-00-00', 24, 48.15),
(17, '7720084434', 'Statistical Decision Theory\'', '2005-01-23', 15, 19.79),
(18, '7911458601', 'Data Mining Handbook', '2012-12-15', 1, 51.86),
(19, '7204166109', 'New Machiavelli', '0000-00-00', 20, 20.24),
(20, '5716943362', 'Physics & Philosophy', '2016-05-10', 20, 64.02),
(21, '2562971917', 'Making Software', '2014-05-28', 16, 27.28),
(22, '6259455683', 'Analysis', '0000-00-00', 10, 12.04),
(23, '4947089005', 'Machine Learning for Hackers', '2021-01-14', 16, 51.37),
(24, '8663387837', 'Signal and the Noise', '0000-00-00', 20, 41.74),
(25, '9816477730', 'Python for Data Analysis', '2006-06-02', 16, 43.78),
(26, '5450393649', 'Introduction to Algorithms', '2018-03-04', 15, 46.39),
(27, '8534634699', 'Beautiful and the Damned', '0000-00-00', 20, 66.39),
(28, '4063807167', 'Outsider', '0000-00-00', 20, 50.45),
(29, '7755415387', 'Complete Sherlock Holmes', '0000-00-00', 24, 13.30),
(30, '4965209281', 'Complete Sherlock Holmes', '0000-00-00', 24, 65.15),
(31, '6997076124', 'Wealth of Nations', '0000-00-00', 24, 42.18),
(32, '1873173686', 'Pillars of the Earth', '0000-00-00', 24, 40.13),
(33, '5000276321', 'Mein Kampf', '2015-04-22', 26, 40.13),
(34, '7040150951', 'Tao of Physics', '0000-00-00', 20, 29.85),
(35, '5526029074', 'Surely You\'re Joking Mr Feynman', '2018-11-05', 24, 16.05),
(36, '9300213781', 'Farewell to Arms', '0000-00-00', 26, 41.63),
(37, '6620675301', 'Veteran', '0000-00-00', 30, 11.45),
(38, '1891052571', 'False Impressions', '2013-03-08', 18, 65.16),
(39, '4405288486', 'Last Lecture', '0000-00-00', 12, 52.64),
(40, '1841552408', 'Return of the Primitive', '2006-09-30', 20, 39.97),
(41, '4746784660', 'Jurassic Park', '2016-06-13', 24, 21.40),
(42, '6629214497', 'Russian Journal', '0000-00-00', 20, 26.24),
(43, '8276766745', 'Tales of Mystery and Imagination', '2019-02-18', 9, 46.21),
(44, '3707876723', 'Freakonomics', '2009-05-18', 20, 60.03),
(45, '8484319503', 'Hidden Connections', '0000-00-00', 9, 30.54),
(46, '3666319014', 'Story of Philosophy', '0000-00-00', 22, 16.00),
(47, '4269509944', 'Asami Asami', '2012-05-15', 14, 30.83),
(48, '3572508904', 'Journal of a Novel', '2012-01-05', 20, 54.44),
(49, '6085323726', 'Once There Was a War', '2009-09-17', 20, 54.39),
(50, '6321516220', 'Moon is Down', '0000-00-00', 20, 10.10),
(51, '4265094261', 'Brethren', '0000-00-00', 24, 20.54),
(52, '5066334649', 'In a Free State', '2008-04-26', 26, 49.96),
(53, '8363579318', 'Catch 22', '2005-07-05', 24, 68.94),
(54, '8212172218', 'Complete Mastermind', '0000-00-00', 2, 17.16),
(55, '1783546250', 'Dylan on Dylan', '2015-03-28', 24, 50.67),
(56, '9212572198', 'Soft Computing & Intelligent Systems', '2005-05-09', 6, 46.80),
(57, '8913864995', 'Textbook of Economic Theory', '2000-01-11', 19, 11.51),
(58, '7861232342', 'Econometric Analysis', '2018-02-23', 19, 37.75),
(59, '7937301884', 'Learning OpenCV', '2018-01-19', 16, 46.93),
(60, '9596899626', 'Data Structures Using C & C++', '2021-02-13', 23, 36.68),
(61, '5236491177', 'Computer Vision', '0000-00-00', 19, 69.34),
(62, '5844486078', 'Principles of Communication Systems', '2001-02-08', 29, 45.71),
(63, '8373434297', 'Let Us C', '2001-07-12', 23, 22.85),
(64, '7016940857', 'Amulet of Samarkand', '0000-00-00', 24, 41.96),
(65, '9754264799', 'Crime and Punishment', '2019-11-13', 20, 10.50),
(66, '4353845453', 'Angels & Demons', '2017-07-02', 24, 65.18),
(67, '7982122084', 'Argumentative Indian', '0000-00-00', 21, 47.17),
(68, '1078284951', 'Sea of Poppies', '2001-12-28', 20, 12.08),
(69, '3464233703', 'Idea of Justice', '0000-00-00', 20, 29.67),
(70, '7004758598', 'Raisin in the Sun', '0000-00-00', 20, 33.82),
(71, '9515029974', 'All the President\'s Men', '2018-07-05', 24, 23.75),
(72, '4470700843', 'Prisoner of Birth', '0000-00-00', 18, 11.93),
(73, '5706641351', 'Scoop!', '2018-05-02', 9, 14.96),
(74, '5061389048', 'Ahe Manohar Tari', '2012-05-31', 14, 19.30),
(75, '5775128443', 'Last Mughal', '0000-00-00', 20, 25.37),
(76, '6852443998', 'Social Choice & Welfare', '0000-00-00', 28, 67.03),
(77, '6316409991', 'Radiowaril Bhashane & Shrutika', '2000-11-03', 14, 42.89),
(78, '2591425121', 'Gun Gayin Awadi', '2001-02-06', 14, 58.97),
(79, '9681773499', 'Aghal Paghal', '2010-06-25', 14, 27.38),
(80, '4084499902', 'Maqta-e-Ghalib', '2017-07-23', 14, 45.01),
(81, '7777353577', 'Beyond Degrees', '2003-03-06', 9, 57.05),
(82, '4146259664', 'Manasa', '2001-07-22', 14, 11.14),
(83, '6895957760', 'India from Midnight to Milennium', '2004-01-10', 20, 44.91),
(84, '2913503753', 'World\'s Greatest Trials', '0000-00-00', 28, 23.83),
(85, '4567357810', 'Great Indian Novel', '0000-00-00', 20, 65.35),
(86, '2995962884', 'O Jerusalem!', '2012-11-10', 31, 62.29),
(87, '5709934348', 'City of Joy', '0000-00-00', 31, 25.31),
(88, '3207394557', 'Freedom at Midnight', '2008-06-30', 31, 20.87),
(89, '4363862309', 'Winter of Our Discontent', '0000-00-00', 20, 54.07),
(90, '4200835753', 'On Education', '2010-08-18', 25, 57.45),
(91, '4263284219', 'Free Will', '2005-10-29', 8, 11.23),
(92, '8619505852', 'Bookless in Baghdad', '2013-04-02', 20, 40.31),
(93, '2447241744', 'Case of the Lame Canary', '0000-00-00', 8, 59.40),
(94, '5631973235', 'Theory of Everything', '0000-00-00', 13, 20.66),
(95, '1205780287', 'New Markets & Other Essays', '2020-12-02', 20, 65.18),
(96, '3857108279', 'Electric Universe', '2006-12-14', 20, 55.49),
(97, '9724799432', 'Hunchback of Notre Dame', '0000-00-00', 24, 21.64),
(98, '7286903059', 'Burning Bright', '2012-09-24', 20, 13.64),
(99, '3258223446', 'Age of Discontuinity', '0000-00-00', 24, 39.94),
(100, '7696546644', 'Doctor in the Nude', '2002-09-29', 20, 45.27),
(101, '1854165679', 'Down and Out in Paris & London', '2004-05-02', 20, 56.90),
(102, '9026370993', 'Identity & Violence', '2007-11-16', 20, 13.02),
(103, '2511811828', 'Beyond the Three Seas', '2003-09-16', 24, 58.84),
(104, '9767744134', 'World\'s Greatest Short Stories', '0000-00-00', 13, 12.79),
(105, '5183586898', 'Talking Straight', '2016-11-06', 24, 59.76),
(106, '2697656659', 'Maugham\'s Collected Short Stories', '0000-00-00', 32, 32.65),
(107, '4075709352', 'Phantom of Manhattan', '0000-00-00', 20, 35.96),
(108, '2868233814', 'Ashenden of The British Agent', '2011-08-09', 32, 20.82),
(109, '1297957909', 'Zen & The Art of Motorcycle Maintenance', '2002-10-11', 32, 33.03),
(110, '7985285098', 'Great War for Civilization', '0000-00-00', 9, 50.88),
(111, '6522463835', 'We the Living', '2015-11-18', 20, 17.59),
(112, '5176448195', 'Artist and the Mathematician', '0000-00-00', 11, 35.04),
(113, '2399405603', 'History of Western Philosophy', '2012-02-12', 25, 27.30),
(114, '9386106396', 'Selected Short Stories', '2012-02-22', 13, 29.90),
(115, '9553876168', 'Rationality & Freedom', '2015-11-14', 28, 50.50),
(116, '4424577052', 'Clash of Civilizations and Remaking of t', '2022-02-21', 27, 65.41),
(117, '5219233134', 'Uncommon Wisdom', '2015-09-06', 7, 40.04);

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `bookAuthor_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`bookAuthor_id`, `book_id`, `author_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24),
(25, 25, 25),
(26, 26, 26),
(27, 27, 27),
(28, 28, 28),
(29, 29, 29),
(30, 30, 29),
(31, 31, 31),
(32, 32, 32),
(33, 33, 33),
(34, 34, 34),
(35, 35, 35),
(36, 36, 36),
(37, 37, 37),
(38, 38, 38),
(39, 39, 39),
(40, 40, 40),
(41, 41, 41),
(42, 42, 42),
(43, 43, 43),
(44, 44, 4),
(45, 45, 34),
(46, 46, 46),
(47, 47, 47),
(48, 48, 42),
(49, 49, 42),
(50, 50, 42),
(51, 51, 51),
(52, 52, 52),
(53, 53, 53),
(54, 54, 54),
(55, 55, 55),
(56, 56, 56),
(57, 57, 57),
(58, 58, 58),
(59, 59, 59),
(60, 60, 60),
(61, 61, 61),
(62, 62, 62),
(63, 63, 63),
(64, 64, 64),
(65, 65, 65),
(66, 66, 66),
(67, 67, 67),
(68, 68, 68),
(69, 69, 67),
(70, 70, 70),
(71, 71, 71),
(72, 72, 38),
(73, 73, 73),
(74, 74, 74),
(75, 75, 75),
(76, 76, 76),
(77, 77, 47),
(78, 78, 47),
(79, 79, 47),
(80, 80, 80),
(81, 81, 81),
(82, 82, 82),
(83, 83, 83),
(84, 84, 83),
(85, 85, 83),
(86, 86, 81),
(87, 87, 81),
(88, 88, 81),
(89, 89, 42),
(90, 90, 90),
(91, 91, 91),
(92, 92, 83),
(93, 93, 93),
(94, 94, 3),
(95, 95, 95),
(96, 96, 96),
(97, 97, 97),
(98, 98, 42),
(99, 99, 95),
(100, 100, 100),
(101, 101, 101),
(102, 102, 67),
(103, 103, 75),
(104, 104, 81),
(105, 105, 105),
(106, 106, 106),
(107, 107, 37),
(108, 108, 106),
(109, 109, 109),
(110, 110, 110),
(111, 111, 40),
(112, 112, 112),
(113, 113, 90),
(114, 114, 34),
(115, 115, 67),
(116, 116, 116),
(117, 117, 34);

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `bookOrder_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `paidEach` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`bookOrder_id`, `order_id`, `book_id`, `quantity`, `paidEach`) VALUES
(1, 1, 11, 1, 68.72),
(2, 1, 18, 1, 51.86),
(3, 2, 23, 1, 51.37),
(4, 3, 41, 2, 21.40),
(5, 3, 43, 1, 46.21),
(6, 4, 61, 1, 69.34),
(7, 4, 57, 1, 11.51),
(8, 8, 16, 2, 48.15),
(9, 9, 15, 4, 53.05);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstName`, `lastName`, `email`, `phoneNumber`, `address`, `city`, `state`, `zip`) VALUES
(2, 'Karen', 'Johnson', 'KJohnson169@gmail.com', '965-408-7562', '6865 Pine Arbor Ct S', 'Cottage Grove', 'MN', '55016'),
(3, 'Maranda', 'Andrews', 'MAndrews195@gmail.com', '559-369-9392', '504 E Watauga Ave', 'Johnson City', 'TN', '37601'),
(4, 'Monica', 'Sanchez', 'MSanchez112@gmail.com', '444-963-1442', 'Huntington Station', 'New York', 'NY', '11746'),
(5, 'Bob', 'Matts', 'BMatts158@gmail.com', '896-424-1422', '10811 Catharpin Rd', 'Spotsylvania', 'VA', '22553'),
(6, 'Margarita', 'Lopez', 'MLopez104@gmail.com', '647-627-4420', '1142 Laurel Wood Pl', 'La Grange', 'KY', '40031'),
(7, 'Ken', 'Lee', 'KLee130@gmail.com', '996-670-1287', '56 B Fairmount St', 'Nashua', 'NH', '3064'),
(8, 'Kumiko', 'Yamamoto', 'KYamamoto167@gmail.com', '950-169-8875', '206 2nd Ave NE', 'Aberdeen', 'SD', '57401'),
(9, 'Mario', 'Andretti', 'MAndretti114@gmail.com', '666-215-4671', '165 W Circle Dr', 'Osceola', 'AR', '72370'),
(10, 'Tatiana', 'Milanova', 'TMilanova111@gmail.com', '137-135-3337', '204 Old Bradley Rd', 'Saint Johnsbury', 'VT', '5819'),
(11, 'Xiao', 'Lee', 'XLee152@gmail.com', '746-850-6831', '301 S Park St', 'Seymour', 'IN', '47274'),
(12, 'Michael', 'Montgomery', 'MMontgomery135@gmail.com', '495-477-7289', '78 Hoh Pl', 'La Conner', 'WA', '98257'),
(13, 'Nicole', 'Wilson', 'NWilson153@gmail.com', '243-843-4269', '2453 G71 Hwy', 'Bussey', 'IA', '50044'),
(14, 'Noriko', 'Ishiyama', 'NIshiyama165@gmail.com', '464-489-8993', '3 Woodridge St', 'White Oak', 'TX', '75693'),
(25, 'Shianne', 'Lesure', 'slesure1@ggc.edu', '6785679832', '123 brown ave.', 'dacula', 'ga', '30019'),
(26, '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `shipDate` date NOT NULL,
  `shipStreet` varchar(200) NOT NULL,
  `shipCity` varchar(40) NOT NULL,
  `shipState` varchar(2) NOT NULL,
  `shipZip` varchar(20) NOT NULL,
  `shipCost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `orderDate`, `shipDate`, `shipStreet`, `shipCity`, `shipState`, `shipZip`, `shipCost`) VALUES
(1, 2, '2022-03-04', '2022-03-07', '6865 Pine Arbor Ct S', 'Cottage Grove', 'MN', '55016', 4.54),
(2, 8, '2022-02-04', '2022-02-06', '206 2nd Ave NE', 'Aberdeen', 'SD', '57401', 6.00),
(3, 13, '2021-01-06', '2021-01-09', '2453 G71 Hwy', 'Bussey', 'IA', '50044', 7.31),
(4, 9, '2021-09-01', '2021-09-03', '165 W Circle Dr', 'Osceola', 'AR', '72370', 8.42),
(5, 25, '2024-11-09', '2024-11-17', '123 brown ave.', 'dacula', 'ga', '30019', 110.00),
(6, 25, '2024-11-16', '2024-11-23', '123 brown ave.', 'dacula', 'ga', '30019', 110.00),
(7, 25, '2024-11-14', '2024-11-15', '123 brown ave.', 'dacula', 'ga', '30019', 110.00),
(8, 25, '2024-11-14', '2024-11-15', '123 brown ave.', 'dacula', 'ga', '30019', 110.00),
(9, 25, '2024-11-20', '2024-11-23', '123 brown ave.', 'dacula', 'ga', '30019', 110.00);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneNumber` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `email`, `phoneNumber`) VALUES
(1, 'Apress', 'support@Apress.com', '944-381-4211'),
(2, 'BBC', 'support@BBC.com', '142-958-7351'),
(3, 'Bodley Head', 'support@Bodley Head.com', '548-366-5822'),
(4, 'CRC', 'support@CRC.com', '917-388-8897'),
(5, 'Dell', 'support@Dell.com', '623-248-5319'),
(6, 'Elsevier', 'support@Elsevier.com', '787-996-1807'),
(7, 'Fontana', 'support@Fontana.com', '420-597-3203'),
(8, 'FreePress', 'support@FreePress.com', '604-393-3278'),
(9, 'HarperCollins', 'support@HarperCollins.com', '615-394-8386'),
(10, 'HBA', 'support@HBA.com', '652-271-6056'),
(11, 'HighStakes', 'support@HighStakes.com', '643-600-5444'),
(12, 'Hyperion', 'support@Hyperion.com', '131-919-6219'),
(13, 'Jaico', 'support@Jaico.com', '999-345-8193'),
(14, 'Mauj', 'support@Mauj.com', '782-125-8409'),
(15, 'MIT Press', 'support@MIT Press.com', '685-696-8510'),
(16, 'O\'Reilly', 'support@O\'Reilly.com', '688-528-9389'),
(17, 'Orient Blackswan', 'support@Orient Blackswan.com', '441-614-6874'),
(18, 'Pan', 'support@Pan.com', '529-749-2764'),
(19, 'Pearson', 'support@Pearson.com', '140-183-9043'),
(20, 'Penguin', 'support@Penguin.com', '233-473-4469'),
(21, 'Picador', 'support@Picador.com', '227-619-5001'),
(22, 'Pocket', 'support@Pocket.com', '473-433-8320'),
(23, 'Prentice Hall', 'support@Prentice Hall.com', '895-215-5043'),
(24, 'Random House', 'support@Random House.com', '179-690-5507'),
(25, 'Routledge', 'support@Routledge.com', '745-345-3094'),
(26, 'Rupa', 'support@Rupa.com', '867-204-8222'),
(27, 'Simon&Schuster', 'support@Simon&Schuster.com', '249-422-1872'),
(28, 'Springer', 'support@Springer.com', '786-140-5208'),
(29, 'TMH', 'support@TMH.com', '150-166-7783'),
(30, 'Transworld', 'support@Transworld.com', '218-990-6072'),
(31, 'vikas', 'support@vikas.com', '239-894-6940'),
(32, 'Vintage', 'support@Vintage.com', '632-352-2872'),
(33, 'Wiley', 'support@Wiley.com', '217-997-9785'),
(34, '', '', ''),
(35, 'Shianne Lesure', 'slesure1@ggc.edu', '6785679832');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`bookAuthor_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`bookOrder_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `book_author`
--
ALTER TABLE `book_author`
  MODIFY `bookAuthor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `bookOrder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`);

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `book_order`
--
ALTER TABLE `book_order`
  ADD CONSTRAINT `book_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `book_order_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
