SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- Database: `eb_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(1000) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(1000) NOT NULL,
  `category_id` int(5000) NOT NULL,
  `author` varchar(50000) NOT NULL,
  `book_copies` int(1100) NOT NULL,
  `book_pub` varchar(1000) NOT NULL,
  `publisher_name` varchar(10000) NOT NULL,
  `isbn` varchar(50000) NOT NULL,
  `copyright_year` int(1100) NOT NULL,
  `date_receive` varchar(2000) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` varchar(30000) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10000;

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  `snumber` varchar(200),
  PRIMARY KEY (`borrow_id`),
  KEY `borrowerid` (`member_id`),
  KEY `borrowid` (`borrow_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=485 ;

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE IF NOT EXISTS `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  `snumber` varchar(200) NOT NULL,
  PRIMARY KEY (`borrow_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`),
  KEY `classid` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=801 ;
--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`,`classname`) VALUES
(1,'Mathematics'),
(2,'Physics'),
(3,'Biology'),
(4,'Novels'),
(5,'Entrepreneurship'),
(6,'Religion'),
(7,'Dictionary'),
(8,'Kinyarwanda'),
(9,'Kiswahili'),
(10,'Teachers Guide'),
(11,'English'),
(12,'Chemistry'),
(13,'Literature'),
(14,'History'),
(15,'ICT'),
(16,'Computer science'),
(17,'Geography'),
(18,'French');
(19,'Political');
(20,'Sport');
(21,'Music');

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `class_borrow` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` bigint(50) NOT NULL,
  `date_borrow` varchar(100) NOT NULL,
  `due_date` varchar(100) DEFAULT NULL,
  `snumber` varchar(200),
  `cleader` varchar(200),
  PRIMARY KEY (`borrow_id`),
  KEY `borrowerid` (`class_id`),
  KEY `borrowid` (`borrow_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=485 ;


--
CREATE TABLE IF NOT EXISTS `class_borrowdetails` (
  `class_borrow_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  `cleader` varchar(200) ,
  PRIMARY KEY (`class_borrow_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;
--
CREATE TABLE IF NOT EXISTS `class_container` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- Table structure for table `lost_book`
--

CREATE TABLE IF NOT EXISTS `lost_book` (
  `Book_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` int(11) NOT NULL,
  `Member_No` varchar(50) NOT NULL,
  `Date Lost` date NOT NULL,
  PRIMARY KEY (`Book_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(2, 'admin', 'admin', 'library', 'byimana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
INSERT INTO `book`(`book_id`, `author`, `category_id`, `book_title`, `book_pub`, `publisher_name`, `copyright_year`, `book_copies`, `isbn`, `date_receive`, `date_added`, `status`) VALUES('2','Byamugisha Bweembare', '17'	,'Comprehension and sytematic notes on world problems and dvpt',	'Second ed',	'Britain',	'1992',	'2',	'G-002'	,	'2021-05-19 08:09:09','2021-05-19 08:09:09',
'New')
INSERT INTO `borrow`(`borrow_id`, `member_id`, `date_borrow`, `due_date`, `snumber`) VALUES('6','2','2021-05-19 08:09:09','2021-05-19 08:09:09','/2')


CREATE TABLE IF NOT EXISTS `class_container` (
  `class_id` int(100) NOT NULL AUTO_INCREMENT,
  `class` bigint(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=485 ;

INSERT INTO `class_container` (`class_id`,`class`,`section`) VALUES
(1,'S1','A'),
(2,'S1','B'),
(3,'S2','A'),
(4,'S2','B'),
(5,'S3','A'),
(6,'S3','B'),
(7,'S4','MCB'),
(8,'S4','MPC'),
(9,'S4','PCM'),
(10,'S4','PCB'),
(11,'S5','MCB'),
(12,'S5','MPC'),
(13,'S5','PCM'),
(14,'S5','PCB'),
(15,'S6','MCB'),
(16,'S6','MPC'),
(17,'S6','PCM'),
(18,'S6','PCB');