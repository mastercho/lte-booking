
CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  primary key (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
