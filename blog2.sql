CREATE DATABASE  IF NOT EXISTS `blog2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci */;
USE `blog2`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blog2
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (1,'Home','This is our home page','2022-10-17 23:08:51'),(3,'About','About our lovely CMS','2022-10-17 23:08:51'),(28,'Introduction','Introduction\r\nLaravel is built with testing in mind. In fact, support for testing with PHPUnit is included out of the box and a phpunit.xml\r\n file is\r\n already set up for your application. The framework also ships with convenient helper methods that allow you to \r\nexpressively\r\n test your applications.\r\n\r\nBy default, your application\'s tests directory contains two directories: Feature and Unit. Unit tests are tests that focus on a \r\nvery small, isolated portion of your code. In fact, most unit tests probably focus on a single method. Tests within your \"Unit\" \r\ntest directory do not boot your Laravel application and therefore are unable to access your application\'s database or other \r\nframework services.\r\n\r\nFeature tests may test a larger portion of your code, including how several objects interact with each other or even a full\r\n HTTP\r\n request to a JSON endpoint. Generally, most of your tests should be feature tests. These types of tests provide the most \r\nconfidence that your system as a whole is functioning as intended.\r\n\r\nAn ExampleTest.php file is provided in both the Feature and Unit test directories. After installing a new Laravel application,\r\n execute the vendor/bin/phpunit or php artisan test commands to run your tests.','2022-10-18 19:26:02'),(34,'The Units and Their Meaning','Viewport Height (vh). This unit is based on the height of the viewport. A value of 1vh is equal to 1% of the viewport height.\r\nViewport Width (vw). This unit is based on the width of the viewport. A value of 1vw is equal to 1% of the viewport width.\r\nViewport Minimum (vmin). This unit is based on the smaller dimension of the viewport. If the viewport height is smaller than the width, the value of 1vmin will be equal to 1% of the viewport height. Similarly, if the viewport width is smaller than the height, the value of 1vmin will be equal to 1% of the viewport width.\r\nViewport Maximum (vmax). This unit is based on the larger dimension of the viewport. If the viewport height is larger than the width, the value of 1vmax will be equal to 1% of viewport height. Similarly, if the viewport width is larger than the height, the value of 1vmax will be equal to 1% of hte viewport width.\r\nLet’s see what the value of these units will be in different situations:\r\n\r\nIf the viewport is 1200px wide and 1000px high, the value of 10vw will be 120px and the value of 10vh will be 100px. Since the width of the viewport is greater than its height, the value of 10vmax will be 120px and the value of 10vmin will be 100px.\r\nIf the device is now rotated so that the viewport becomes 1000px wide and 1200px high, the value of 10vh will be 120px and the value of 10vw will be 100px. Interestingly, the value of 10vmax will still be 120px because it will now be determined based on the height of the viewport. Similarly, the value of 10vmin will still be 100px.\r\nIf you resize the browser window so that the viewport becomes 1000px wide and 800px high, the value of 10vh will become 80px and the value of 10vw will become 100px. Similarly, the value of 10vmax will become 100px and the value of 10vmin will become 80px.\r\nAt this point, viewport units may sound similar to percentages. However, they’re very different. In the case of percentages, the width or height of the child element is determined with respect to its parent.','2022-10-18 21:16:22'),(35,'GYm',' Sporto sale \"duok i snuki\" kviecia pasportuot arba duot i snuki. \r\nMes vykdome veikla daugiau kaip penkis metus, daznai darome reidus po kaimyninius rajonus ir \r\npasinaudojame ismoktais koviniais veiksmai saleje duot i snuki. Mes labai didziuojames savo \"Klubieciu\'\' \r\npasiekimais, musu MOTO \'duok pirmas kol - neprasileidai pirmas\' ir sia nata baiksim.','2022-10-18 21:25:16'),(37,'Visa tiesa apie ??','Apie ka ?','2022-10-19 12:07:54'),(38,'Gymas','testas prasitestuoja','2022-10-19 12:12:11'),(41,'Javascript','BITas','2022-10-19 14:34:21'),(46,'Laravel','VeryNiceFramework\r\nLaravel is a free and open-source PHP web framework,[3] created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.[4][5]: 2, 5–9 [6][7]\r\n\r\nThe source code of Laravel is hosted on GitHub and licensed under the terms of MIT License.[8]','2022-10-24 08:29:35'),(50,'Laserdance','Shotgun (Into The Night) (Space Mix) HQ','2022-10-24 21:52:52');
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-25 14:47:01
