/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.8-MariaDB : Database - littlepet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`littlepet` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `littlepet`;

/*Table structure for table `formularioadopciones` */

DROP TABLE IF EXISTS `formularioadopciones`;

CREATE TABLE `formularioadopciones` (
  `IdForA` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Completo` varchar(100) DEFAULT NULL,
  `IdMas` int(11) NOT NULL,
  `Edad_Familiares` varchar(50) DEFAULT NULL,
  `Calle` varchar(100) DEFAULT NULL,
  `NumInt` int(5) DEFAULT NULL,
  `NumExt` int(5) DEFAULT NULL,
  `Colonia` varchar(100) DEFAULT NULL,
  `Delegacion` varchar(100) DEFAULT NULL,
  `CP` int(10) DEFAULT NULL,
  `Entre_Calle` varchar(100) DEFAULT NULL,
  `Y_Calle` varchar(100) DEFAULT NULL,
  `Referencias` varchar(100) DEFAULT NULL,
  `Tel_Casa` int(12) DEFAULT NULL,
  `Celular` int(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Vivienda_Mascota` varchar(100) DEFAULT NULL,
  `Animales_Vivienda` varchar(100) DEFAULT NULL,
  `Cuantos_Tiene` int(2) DEFAULT NULL,
  `Que_Animales` varchar(50) DEFAULT NULL,
  `Porque_Adopta` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdForA`,`IdMas`),
  KEY `IdMas` (`IdMas`),
  CONSTRAINT `IdMas` FOREIGN KEY (`IdMas`) REFERENCES `mascotas` (`IdMas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `formularioadopciones` */

insert  into `formularioadopciones`(`IdForA`,`Nombre_Completo`,`IdMas`,`Edad_Familiares`,`Calle`,`NumInt`,`NumExt`,`Colonia`,`Delegacion`,`CP`,`Entre_Calle`,`Y_Calle`,`Referencias`,`Tel_Casa`,`Celular`,`Email`,`Vivienda_Mascota`,`Animales_Vivienda`,`Cuantos_Tiene`,`Que_Animales`,`Porque_Adopta`,`created_at`,`updated_at`,`deleted_at`) values (1,'Carla Jimenez ',1,'18,21','Mimbres',222,222,'Mimbres','Temoaya',52021,'C.temoaya','C.Oyamel','Los Columpios',NULL,2147483647,'al221610899@gmail.com','Casa','No',NULL,NULL,'Me gustan los perritos',NULL,NULL,NULL),(2,'Brayan Hernández Huerta',3,'21,23,27','Cda.del tronquito',222,222,'Santa María Atarasquillo','Lerma',52044,'3 de Mayo','Reforma','Enfrente de abarrotes Gutiérrez',2147483647,2147483647,'al221610899@gmail.com','Casa','Si',0,'Ninguno','Quiero un gato ','2019-11-20 10:08:56','2019-11-20 10:08:56',NULL);

/*Table structure for table `localizadores` */

DROP TABLE IF EXISTS `localizadores`;

CREATE TABLE `localizadores` (
  `IdLoc` int(11) NOT NULL AUTO_INCREMENT,
  `IdProceso` int(11) NOT NULL,
  `Num_Localizador` int(20) DEFAULT NULL,
  PRIMARY KEY (`IdLoc`),
  KEY `IdProceso` (`IdProceso`),
  CONSTRAINT `localizadores_ibfk_1` FOREIGN KEY (`IdProceso`) REFERENCES `procesos` (`IdProceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `localizadores` */

/*Table structure for table `mascotas` */

DROP TABLE IF EXISTS `mascotas`;

CREATE TABLE `mascotas` (
  `IdMas` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Edad` int(2) DEFAULT NULL,
  `Especie` varchar(40) DEFAULT NULL,
  `Raza` varchar(40) DEFAULT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Fecha_Ad` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdMas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mascotas` */

insert  into `mascotas`(`IdMas`,`Nombre`,`Edad`,`Especie`,`Raza`,`Imagen`,`Fecha_Ad`,`created_at`,`updated_at`,`deleted_at`) values (1,'Nala',2,'Perro','Pastor Belga','',NULL,NULL,NULL,NULL),(2,'Nino',6,'Gato','Brithish','',NULL,NULL,NULL,NULL),(3,'El Flaco',1,'Gato','Siames','',NULL,NULL,NULL,NULL);

/*Table structure for table `procesos` */

DROP TABLE IF EXISTS `procesos`;

CREATE TABLE `procesos` (
  `IdProceso` int(11) NOT NULL AUTO_INCREMENT,
  `IdMas` int(11) NOT NULL,
  `IdForA` int(11) NOT NULL,
  `Estatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdProceso`),
  KEY `IdMas` (`IdMas`),
  KEY `IdForA` (`IdForA`),
  CONSTRAINT `procesos_ibfk_1` FOREIGN KEY (`IdMas`) REFERENCES `mascotas` (`IdMas`),
  CONSTRAINT `procesos_ibfk_2` FOREIGN KEY (`IdForA`) REFERENCES `formularioadopciones` (`IdForA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `procesos` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `idu` (`idu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idu`,`nombre`,`contraseña`,`tipo`,`usuario`,`created_at`,`updated_at`,`deleted_at`) values (1,'Brayan','1234','GPS','Brayan01',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
