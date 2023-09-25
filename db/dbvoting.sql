/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.8-log : Database - dbvoting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbvoting` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbvoting`;

/*Table structure for table `dept` */

DROP TABLE IF EXISTS `dept`;

CREATE TABLE `dept` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(44) NOT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dept` */

insert  into `dept`(`deptid`,`dept`) values (4,'BSC CS'),(5,'BCA'),(6,'BSC ELETRONICS'),(7,'B COM');

/*Table structure for table `tbl_candidate` */

DROP TABLE IF EXISTS `tbl_candidate`;

CREATE TABLE `tbl_candidate` (
  `candid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`candid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_candidate` */

insert  into `tbl_candidate`(`candid`,`name`,`age`,`dept`,`ename`,`contact`,`password`,`email`,`position`) values (10,'VISHNU',22,'BSC','3','9876543210','v@gmail.com','123','chairman'),(11,'juno',26,'BSC','4','9856321470','juno@gmail.com','123','Chairman'),(12,'akash',27,'BSC','4','9856321470','akash@gmail.com','123','Chairman'),(16,'akbar',23,'BSC','5','9856321470','akbar@gmail.com','Aa12','Vice -Chairman');

/*Table structure for table `tbl_election` */

DROP TABLE IF EXISTS `tbl_election`;

CREATE TABLE `tbl_election` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `pdate` date NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_election` */

insert  into `tbl_election`(`id`,`ename`,`pdate`,`status`) values (1,'muncipality election','2021-10-15',0),(2,'Member Election','2021-11-23',0),(3,'university election','2021-12-05',0),(4,'Calicut election','2021-12-07',0),(5,'st pauls election','2021-12-07',1);

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT 'PENDING',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`id`,`reg_id`,`username`,`password`,`usertype`,`status`) values (1,'1','admin@gmail.com','admin','admin','APPROVED'),(31,'10','v@gmail.com','123','Candidate','APPROVED'),(32,'15','aji@gmail.com','IijxIgUl','Voter','APPROVED'),(33,'16','abhi@gmail.com','g95IuCf5','Voter','APPROVED'),(34,'11','juno@gmail.com','123','Candidate','APPROVED'),(35,'12','akash@gmail.com','123','Candidate','APPROVED'),(36,'17','alfin@gmail.com','2iphD7T0','Voter','VOTED'),(37,'18','sanu@gmail.com','rkrFNvMp','Voter','VOTED'),(41,'19','aswin@gmail.com','bBXkGZ1Z','Voter','VOTED'),(42,'16','akbar@gmail.com','Aa12','Candidate','APPROVED');

/*Table structure for table `tbl_panchayath` */

DROP TABLE IF EXISTS `tbl_panchayath`;

CREATE TABLE `tbl_panchayath` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dist` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_panchayath` */

insert  into `tbl_panchayath`(`id`,`name`,`location`,`address`,`dist`) values (1,'abc','bnm',' bnm','thrissur'),(2,'abc','bnm',' bnm','thrissur');

/*Table structure for table `tbl_voter` */

DROP TABLE IF EXISTS `tbl_voter`;

CREATE TABLE `tbl_voter` (
  `voterid` bigint(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `idproof` varchar(100) NOT NULL,
  `status` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`voterid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_voter` */

insert  into `tbl_voter`(`voterid`,`name`,`age`,`dept`,`contact`,`idproof`,`status`,`email`) values (15,'ajin',25,'BCA','9876543210','images/425f77d2aa6bf3f1fe63e0b2e94cbc88.jpg',1,'aji@gmail.com'),(16,'abhijith',26,'B','9876543210','images/blind-man-walking-stick-vector-cartoon-illustration-146798570.jpg',1,'abhi@gmail.com'),(17,'alfin',18,'BCA','9856321470','images/bgimg.jpg',1,'alfin@gmail.com'),(18,'sanu',22,'BSC','9856321470','images/chart1.jpg',1,'sanu@gmail.com'),(19,'aswin',17,'BSC','9856321470','images/cow1.jpg',1,'aswin@gmail.com');

/*Table structure for table `tbl_winner` */

DROP TABLE IF EXISTS `tbl_winner`;

CREATE TABLE `tbl_winner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candid` int(11) NOT NULL,
  `count` int(50) NOT NULL,
  `constituency` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_winner` */

insert  into `tbl_winner`(`id`,`candid`,`count`,`constituency`) values (11,1,3,'chavakkad '),(12,2,1,'chavakkad '),(13,4,1,'kunnamkulam '),(14,5,1,'cherukole '),(15,5,1,NULL),(16,10,2,NULL),(17,10,4,NULL),(18,11,2,NULL),(19,12,1,NULL),(20,11,3,NULL),(21,12,1,NULL),(22,16,1,NULL);

/*Table structure for table `tblpollcount` */

DROP TABLE IF EXISTS `tblpollcount`;

CREATE TABLE `tblpollcount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candid` int(50) NOT NULL,
  `count` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblpollcount` */

/*Table structure for table `tblpolling` */

DROP TABLE IF EXISTS `tblpolling`;

CREATE TABLE `tblpolling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(50) NOT NULL DEFAULT '0',
  `voterid` int(50) NOT NULL,
  `candid` int(50) NOT NULL,
  `status` varchar(50) DEFAULT 'notpulished',
  `vote_count` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `tblpolling` */

insert  into `tblpolling`(`id`,`eid`,`voterid`,`candid`,`status`,`vote_count`) values (2,1,10,1,'Published','1'),(3,1,9,1,'Published','0'),(4,1,11,2,'Published','0'),(5,1,12,1,'Published','1'),(7,1,13,4,'Published','0'),(8,2,14,5,'Published','0'),(26,3,16,10,'Published','1'),(27,3,16,10,'Published','1'),(29,3,15,10,'Published','1'),(31,4,17,11,'Published','1'),(32,4,17,12,'Published','1'),(33,4,18,11,'Published','1'),(34,4,15,11,'Published','1'),(36,5,19,16,'Published','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
