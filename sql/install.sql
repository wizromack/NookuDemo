SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `j_nookudemo_friends` (
  `nookudemo_friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`nookudemo_friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `j_nookudemo_friends`
--

INSERT INTO `j_nookudemo_friends` VALUES(1, 'Natividad', 'Romack', 'romack@wizmediateam.com', '0987654321', '1982-11-19');