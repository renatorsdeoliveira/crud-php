/*
SQLyog Community- MySQL GUI v8.22 
MySQL - 5.5.5-10.4.6-MariaDB : Database - crud
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `crud`;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `profissao` varchar(150) DEFAULT NULL,
  `telefone` varchar(150) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`profissao`,`telefone`,`data`) values (1,'Luiz','luiz@gmail.com','estudante','(62) 99652-5252','2019-11-15 19:27:35'),(2,'Thais','thais@gmail.com','secretaria','(61) 93233-2323','2019-11-15 19:31:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
