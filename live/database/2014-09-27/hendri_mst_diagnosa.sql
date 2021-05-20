/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.6.16 : Database - db_simrsih_25sept
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `mst_diagnosa` */

DROP TABLE IF EXISTS `mst_diagnosa`;

CREATE TABLE `mst_diagnosa` (
  `diag_id` int(11) NOT NULL AUTO_INCREMENT,
  `diag_kode` varchar(8) DEFAULT NULL,
  `diag_name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `indonesian` varchar(255) NOT NULL,
  PRIMARY KEY (`diag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13108 DEFAULT CHARSET=latin1;

/*Data for the table `mst_diagnosa` */


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;