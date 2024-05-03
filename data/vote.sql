--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `vote_voterName` varchar(255) NOT NULL COMMENT 'vote voterEmail',
  `vote_voterEmail` double NOT NULL COMMENT 'vote voterEmail',
  `vote_selectedCandidate` int(11) NOT NULL COMMENT 'vote selectedCandidate',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=64 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `vote` (`id`, `vote_voterName`, `vote_voterEmail`, `vote_selectedCandidate`) VALUES
