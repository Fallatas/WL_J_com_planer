DROP TABLE IF EXISTS `#__planer`;
 
CREATE TABLE `#__planer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(25) NOT NULL,
  `handy` varchar(25) NOT NULL,
  `telefon` varchar(25) NOT NULL,
  `fax` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nametitle` varchar(25) NOT NULL,
  `anrede` varchar(25) NOT NULL,
  `firma` varchar(25) NOT NULL,
  `vorname` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `street` varchar(25) NOT NULL,
  `zusatz` varchar(25) NOT NULL,
  `kontonummer` varchar(25) NOT NULL,
  `blz` varchar(25) NOT NULL,
  `kontoinhaber` varchar(25) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `iban` varchar(25) NOT NULL,
  `bic` varchar(25) NOT NULL,
  `datei` varchar(25) NOT NULL,
  `description` mediumtext NOT NULL,
  
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
