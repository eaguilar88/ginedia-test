-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: ginedia
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Accesorios para puertas','accesorios-para-puertas',' '),(2,'Accesorios para baños','accesorios-para-banos',' '),(3,'Accesorios para fachadas','accesorios-para-fachadas',' '),(4,'Accesorios de ventanería y herramientas','accesorios-de-ventaneria-y-herramientas',' '),(5,'Sistemas de puertas','sistemas-de-puertas',' '),(6,'Accesorios para Barandas','accesorios-para-barandas',' ');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subcategory_id` int NOT NULL,
  `code` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `finishing` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `product_subcategory_id_fk` (`subcategory_id`),
  CONSTRAINT `product_subcategory_id_fk` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'GDH010','Pivote inferior para puerta Todo Visión','',3),(2,1,'GDH020','Pivote superior para puerta Todo Visión','',3),(3,1,'GDH030','Herraje superior vidrio vidrio puerta Todo Visión','',3),(4,1,'GDH040','Herraje superior vidrio vidrio tipo L puerta Todo Visión','',3),(5,1,'GDH055A','Cerradura central para puerta Todo Visión','Taca cuadrada',3),(6,2,'GDH-D660','Kit de Pivotes superior para puerta tipo Europivot','',2),(7,2,'GDH-D663','Herraje superior para puerta tipo Europivot','',1),(8,9,'GDH260','Tirador circular embutido','',1),(9,1,'GDH411S','Clip de fijación doble fachada Todo Visión','',2),(10,1,'GDH416S','Clip de fijación sencillo fachada Todo Visión','',2),(11,1,'GDH440S','Clip de fijación cuádruple fachada Todo Visión','',2),(12,2,'GDH-H600','Herramienta doble pin para Europivot','',0),(13,2,'GDH-D665','Pivote fijo invisible','',0),(14,2,'GDH-D680','Tope de puerta superior vidrio-vidrio tipo Europivot','Protector de goma',0),(15,2,'GDH-D686','Soporte doble vidrio-vidrio fachada Europivot','',2),(16,9,'GDH260A','Tirador circular embutido','Acero inoxidable',2),(17,9,'GDH261A','Tirador circular embutido','Grande',2),(18,9,'GDH262A','Tirador circular embutido','Hueco',2),(19,3,'GDH332-25','Tirador de puerta tipo C','30,5 cm de eje',1),(20,3,'GDH333-25','Tirador de puerta tipo S','',3),(21,3,'GDH334-25','Tirador de puerta tipo O','30,5 cm de eje',3),(22,3,'GDH341-50','Tirador de puerta tipo H','30,5 cm de eje y 50 cm de largo',2),(23,3,'GDH341-75','Tirador de puerta tipo H','42,5 cm de eje y 75 cm de largo',2),(24,3,'GDH341-90','Tirador de puerta tipo H','50 cm de eje y 90 cm de largo',2),(25,3,'GDH341A-75','Tirador de puerta tipo H','42,5 cm de eje y 75 cm de largo',4),(26,3,'GDH341-CS150','Tirador de puerta tipo H con cerradura','150 cm de largo',2),(27,3,'GDH342-50D','Tirador de puerta tipo H','30,5 cm de eje y 50 cm de largo',5),(28,3,'GDH342-75D','Tirador de puerta tipo H','42,5 cm de eje y 75 cm de largo',5),(29,3,'GDH342-90D','Tirador de puerta tipo H','50 cm de eje y 90 cm de largo',5),(30,3,'GDH345-32','Tirador de puerta tipo H cónico','30,5 cm de eje',3),(31,3,'GDH345-D','Tirador de puerta tipo H cónico','30,5 cm de eje',5),(32,3,'GDH348','Tirador de puerta tipo H barra plana','30,5 cm de eje',5),(33,7,'GDH731B','Conector grande pared-vidrio','Medidas 5x5 cm',3),(34,7,'GDH732A','Conector grande vidrio-vidrio 90˚','',3),(35,7,'GDH734A','Conector grande vidrio-vidrio 180˚','',3),(36,7,'GDH736A','Conector grande vidrio-vidrio 135˚','',3),(37,4,'GDH580','Cerradura vidrio-vidrio sobrepuesta redonda','',3),(38,4,'GDH580A','Cerradura pared vidrio sobrepuesta redonda','',3),(39,4,'GDH592A','Cerradura Oasis con manilla vidrio-pared','Llave por ambos lados',3),(40,4,'GDH592AC','Cerradura Oasis con manilla vidrio-vidrio','Doble manilla. Llave por ambos lados',3),(41,4,'GDH592AB','Cerradura Oasis con manilla vidrio-vidrio','Llave por ambos lados',3),(42,4,'GDH594A','Cerradura Isa pared-vidrio con manilla','Llave por un lado y pasador por el otro',3),(43,4,'GDH594AB','Cerradura Isa vidrio-vidrio','Doble manilla. Llave por un lado y pasador por el otro',3),(44,4,'GDH592V-Z','Cerradura Venus con manilla vidrio-vidrio','Llave por un lado y pasador por el otro',3),(45,4,'GDH8120','Cerradura rectagular grande con haladera vidrio-pared para embutir','',2),(46,4,'GDH8120-1','Cerradura rectagular grande con haladera vidrio-vidrio para embutir','',2),(47,4,'GDH824S','Cerradura circular embutida para solape de puerta corredera','',2),(48,4,'GDH590A','Cerradura redonda para Europivot','',3),(49,4,'GDH590Z','Cerradura cuadrada para Europivot','8,5 x 9,7 cm',3),(50,4,'GDH597S','Cerradura pared-vidrio cuadrada sobrepuesta con llave por un solo lado','',2),(51,5,'7125','Freno hidráulico de piso MAB','Capacidad máxima 100 Kg',0),(52,5,'M25','Freno hidráulico de piso Speedy','Capacidad máxima 120 Kg',0),(53,6,'GDH112A','Pivote loco','',0),(54,6,'GDH050-5','Recibidor al piso','',0),(55,6,'GDH112B','Pivote superior fijo','Pin 15mm',0),(56,6,'GDH771','Tope de piso','Fabricado en acero inoxidable. Protector de goma.',0),(57,7,'GDH741','Conector pared-vidrio 90° tipo boton','',3),(58,7,'GDH742','Conector vidrio-vidrio 90° tipo boton','',3),(59,7,'GDH744','Conector vidrio-vidrio 180° tipo boton','',3),(60,7,'GDH745','Conector pared-vidrio 180° tipo boton','',3),(61,8,'GDH512','Bisagra grande pared-vidrio','Medidas 9x5,5 cm',3),(62,8,'GDH513','Bisagra grande desplazada pared-vidrio','Medidas 9x5,5 cm',3),(63,8,'GDH514','Bisagra grande vidrio-vidrio 90˚','Medidas 9x5,5 cm',3),(64,8,'GDH516','Bisagra grande vidrio-vidrio 135˚','Medidas 9x5,5 cm',1),(65,8,'GDH518','Bisagra grande vidrio-vidrio 180˚','Medidas 9x5,5 cm',3),(66,9,'GDH336-45','Toallero para puerta de baño','45 cm de eje',3),(67,9,'GDH336-55','Toallero para puerta de baño','55 cm de eje',3),(68,9,'GDH337-19','Tirador para puerta de baño tipo L','15 x 45 cm de eje',3),(69,9,'GDH338-19','Tirador para puerta de baño tipo L','20 x 55 cm de eje',3),(70,9,'GDH334-15','Tirador para puerta de baño tipo C','15 cm de eje',3),(71,9,'GDH341-22','Tirador de puerta tipo H','15 cm de eje y 22 de largo',3),(72,9,'GDH341-22D','Tirador de puerta tipo H','15 cm de eje y 22 de largo',5),(73,9,'GDH342-22','Tirador de puerta tipo H','Punteado en el centro. 15 cm de eje y 22 de largo.',5),(74,10,'GDH221','Pomo de puerta esférico','',1),(75,10,'GDH222','Pomo de puerta cónico','',1),(76,10,'GDH222A','Pomo de puerta cónico acanalado','',1),(77,10,'GDH223','Pomo de puerta cilíndrico estriado','',1),(79,10,'GDH225','Pomo de puerta tipo huella cilíndrico doble','',3),(80,10,'GDH225 Half','Pomo de puerta cilíndrico tipo huella sencillo grande','',3),(81,10,'GDH225-1','Pomo de puerta cilindrico sencillo pequeño','',1),(84,10,'GDH227','Pomo de puerta cilindrico acanalado','',1),(86,11,'GDH791','Brazo tensor extendible','70 a 90 cm. Terminación 90˚.',1),(87,11,'GDH791A','Brazo tensor extendible','30 a 50 cm. Terminación 45˚.',3),(88,12,'GDH202-8','Policarbonato hongo para vidrio','Para vidrio de 8mm. Barra de 2,20 mts.',0),(89,12,'GDH202-10','Policarbonato hongo para vidrio','Para vidrio de 10mm. Barra de 2,20 mts.',0),(90,12,'GDH206','Policarbonato ala lateral','Para vidrio de 8mm. Barra de 2,20 mts.',0),(91,12,'GDH206-10','Policarbonato ala lateral para vidrio','Para vidrio de 10mm. Barra de 2,20 mts.',0),(92,12,'GDH206-8R','Policarbonato ala lateral rígida','Para vidrio de 8mm. Barra de 2,20 mts.',0),(93,12,'GDH207-8','Policarbonato ala central','Para vidrio de 8mm. Barra de 2,20 mts.',0),(94,12,'GDH208','Policarbonato doble ala central','Para vidrio de 8mm. Barra de 2,20 mts.',0),(95,12,'GDH211','Policarbonato con imán','Para vidrio de 8mm. Barra de 2,20 mts.',0),(96,13,'GDH205-25M','Distanciador','Macizo. Acero Inoxidable. Medidas 2,5 cm x 25 mm.',2),(97,13,'GDH205-40M','Distanciador','Macizo. Acero Inoxidable. Medidas 4 cm x 25 mm.',2),(98,13,'GDH205-32-60M','Distanciador','Macizo. Acero Inoxidable. Medidas 6 cm x 32 mm.',2),(99,13,'GDH205-40-40M','Distanciador','Macizo. Acero Inoxidable. Medidas 4 cm x 40 mm.',2),(100,13,'GDH205-40-70M','Distanciador','Macizo. Acero Inoxidable. Medidas 7 cm x 40 mm.',2),(101,13,'GDH671C','Soporte pared-vidrio cabeza plana','Fabricado en acero inoxidable ',2),(102,25,'GDH763','Soporte baranda cuadrado base curva','',3),(103,25,'GDH763A','Soporte baranda cuadrado base plana','',3),(104,14,'GDH672','Araña doble pequeña','',3),(105,14,'GDH672B','Araña sencilla pequeña','',3),(106,14,'GDH-A100','Rótula articulada plana','',0),(107,14,'GDH-A101','Araña estructural de 1 vía','200mm de distancia entre ejes',0),(108,14,'GDH-A102','Araña estructural de 2 vías','200mm de distancia entre ejes',0),(109,14,'GDH-A103','Araña estructural de 3 vías','200mm de distancia entre ejes',0),(110,14,'GDH-A104','Araña estructural de 4 vías','200mm de distancia entre ejes',0),(111,15,'GDH751','Repisero semicircular para vidrio de 8mm (par)','',3),(112,15,'GDH752','Repisero semicircular para vidrio de 10mm (par)','',2),(113,15,'GDH753','Repisero semicircular para vidrio de 12mm (par)','',2),(114,15,'GDH902','Repisero tipo Tucán (par)','',2),(115,15,'GDH903','Repisero tipo Tucán cuadrado (par)','',2),(116,15,'GDH312','Bisagra empotrable pequeña para vitrina','',3),(117,16,'Felpa 48N','Felpa Negra 4.8 mm','Rollo de 400 m. Ecobell. Project.',0),(118,16,'Felpa 57N','Felpa Negra 5.7 mm','Rollo de 400 m. Panorámica.',0),(119,16,'Felpa 69N','Felpa Negra 6.9 mm','Rollo de 400 m. Caroní.',0),(120,17,'GDH206A3','Policarbonato ala lateral panorámico transparente (guardapolvo)','Para vidrio de 8mm. Barra de 3mts.',0),(121,17,'GDH206A3N','Policarbonato ala lateral panorámico negro (guardapolvo)','Para vidrio de 8mm. Barra de 3mts.',0),(122,19,'GDH H602','Ventosa doble','',0),(123,19,'GDH H603','Ventosa triple','',0),(124,18,'GDH-V101','Rodamiento sencillo ventana Caroní','',0),(125,18,'GDH-V102','Rodamiento doble ventana Caroní','',0),(126,18,'GDH-V103','Kit plástico ventana Caroní','',0),(127,18,'GDH-V104','Escuadra ventana Caroní','',0),(128,18,'GDH-V201','Rueda para Ventana Panorámica','Incluye sus respectivas tapas',0),(129,18,'GDH-V202','Trancador de pin para Ventana Panorámica','',0),(130,18,'GDH-V203','Trancador con llave para Ventana','Color negro',0),(131,18,'GDH-V302','Trancador de tic tac para Ventana','Color negro',0),(132,18,'GDH-V536A','Manilla para ventana proyectante','Color negro',0),(133,20,'GDH-S7500','Kit de Puerta Euroslider','Sistema de puerta colgante con tubo redondo de acero\ninoxidable de 25mm y rodamiento tipo Eurocolgante.<br><span>Se vende el kit de acuerdo a la configuración requerida</span>',0),(134,22,'GDH-S7600','Kit de Puerta Corrediza de 19mm','Sistema de puerta corredera de acero inoxidable con tubo redondo de 19mm y rueda tipo botón.<br>\n80kg de peso máximo por puerta.<br><span>Se vende el kit de acuerdo a la configuración requerida</span>',0),(135,22,'GDH-S7800','Kit para Puerta Corrediza de tubo rectangular','Sistema de puerta corredera de acero inoxidable con tubo rectangular y rodamiento tipo botón.<br>\n80kg de peso máximo por puerta.<br>\nIncluye: 2 soportes tubo-pared, 2 rodamientos, 2 antidescarrilantes, 2 topes, 2 conectores tubo-vidrio, 1 guía de piso, 1 tirador embutido y 1\ntubo rectangular (2 metros).',0),(136,21,'GDH-S5100','Kit para Puerta Colgante modelo Araña','Sistema de puerta colgante todo visión con rueda modelo araña y riel de aluminio de 2 metros.\n100kg de peso máximo por puerta.<br>\nIncluye: 2 rodamientos, 2 topes, 1 guía de piso y 1 riel de aluminio (2 metros).',0),(137,21,'GDH-S6100','Kit para Puerta Colgante modelo\nAlfa','Sistema de puerta colgante todo visión con rueda modelo alfa y riel de aluminio de 2mts. 100kg de peso máximo por puerta.<br>\nIncluye: 2 rodamientos, 2 topes, 1 guía de piso, 1 llave y 1 riel de aluminio (2 metros).',0),(138,21,'GDH-S7100-2','Kit para Puerta Colgante con Cenefa','Sistema de puerta colgante todo visión con riel fijo y tapas de aluminio. 120kg de peso máximo por puerta.<br>Incluye: 2 rodamientos, 2 topes, 1 guía de piso, 1 llave, 1 riel, 1 fijo y dos tapas de aluminio (2 metros).',0),(139,23,'GDH-S800','Sistema Puerta Plegable','Sistema de puerta plegable para vidrio de 10mm. Carga máxima por hoja de 60kg.<br><span>Se vende el kit de acuerdo a la configuración requerida</span>',2),(140,25,'GDH762','Soporte baranda base curva','',3),(141,24,'GDH-D6108','Sistema Puerta Automática','Automatismo para puerta caracterizado por su robustez y confiabilidad. Riel de aluminio de alta resistencia. Microordenador de control inteligente. Longitud de 4,20mts. Tapa de acero inoxidable quita y pon. Mecanismo para 1 o 2 hojas. De fácil instalación. Para uso en lugares de alto tráfico.<br>\r\nCarga máxima por hoja de 120kg.',0),(142,1,'GDH055B','Recibidor para cerradura central de puerta Todo Visión vidrio-vidrio','',3),(143,14,'GDH675A','Conector sencillo articulado\r\nvidrio-pared','',2),(144,14,'GDH675C','Conector triple articulado\r\nvidrio-vidrio','',2),(145,14,'GDH675B','Conector doble articulado\r\nvidrio-vidrio','',2),(146,14,'GDH-A201','Araña estructural con cartela de 1 vía','200mm de distancia entre ejes',0),(147,14,'GDH-A202','Araña estructural con cartela de 2 vías','200mm de distancia entre ejes',0),(148,26,'GDH-B010','Conector pasamano-vidrio','',2),(149,26,'GDH-B011','Conector pasamano-pared','',2),(150,26,'GDH-B012','Pie de baranda rígido','',2),(151,26,'GDH-B013','Conector pasamano articulado para tubo de 1 ½”','',2),(152,25,'GDH-B018','Soporte de baranda base curva','Material: Acero inoxidable',2),(153,26,'GDH-B201','Tapa plana para tubo de 2”','',2),(154,26,'GDH-B220','Codo de 90 grados para tubo de 2”','',2),(155,26,'GDH-B221','Codo de 135 grados para tubo de 2”','',2),(156,26,'GDH-B225','Unión para tubo de 2”','',2),(157,5,'P502','Brazo hidráulico para puerta enmarcada','Capacidad máxima 60 Kg',0),(158,5,'P503','Brazo hidráulico para puerta enmarcada','Capacidad máxima 45 Kg',0),(159,8,'GDH712','Bisagra pivotante pared-vidrio','',1),(160,25,'GDH762A','Soporte baranda base plana','',3),(161,1,'GDH055','Cerradura para puerta Todo Vision','Con Pin',3),(162,27,'GDH B001','Tubo de acero inoxidable 304 de 2”','Diámetro 50,8mm',2),(163,19,'GDH H600 ','Herramienta doble pin para Europivot','Protector de goma',0),(164,21,'GDH-S7100-4','Kit para Puerta Colgante con Cenefa','Sistema de puerta colgante todo visión con riel fijo y tapas de aluminio. 120kg de peso máximo por puerta.<br>Incluye: 4 rodamientos, 4 topes, 2 guía de piso, 1 llave, 1 riel, 1 fijo y dos tapas de\r\naluminio (4 metros).',0),(165,22,'GDH-S7400','Kit para Puerta Corrediza de tubo cuadrado','Sistema de puerta corredera de acero inoxidable con tubo cuadrado y rodamiento rectangular.<br>\n80kg de peso máximo por puerta.<br>\nIncluye: 2 soportes tubo-pared, 2 rodamientos, 2 topes, 2 conectores tubo-vidrio, 1 guía de piso, 1 tirador embutido\ny 1 tubo cuadrado (2 metros).',0),(166,4,'GDH503A','Cerradura pequeña con pin pared-vidrio','',3),(167,4,'GDH503AB','Cerradura pequeña con pin vidrio-vidrio','',3),(168,4,'GDH504A','Cerradura pequeña sobrepuesta ovalada con pin pared-vidrio','',3),(169,4,'GDH504AB','Cerradura pequeña sobrepuesta ovalada con pin vidrio-vidrio','',3),(170,4,'GDH505A','Cerradura pequeña sobrepuesta ovalada con llave pared-vidrio','',3),(171,4,'GDH505AB','Cerradura pequeña sobrepuesta ovalada con llave vidrio-vidrio','',3),(172,27,'GDH B002','Tubo de acero inoxidable 304 de 1 1/2”','Diámetro 38mm',2),(173,28,'GDH-B300','Pie de baranda en acero inoxidable','Cuerpo de tubo redondo 1 ½”',2),(174,28,'GDH-B320','Pie de baranda en acero inoxidable','Cuerpo de doble paltina',2),(175,28,'GDH-B310','Pie de baranda en acero inoxidable','Cuerpo de platina lateral y apoyo vertical',2),(176,28,'GDH-B340','Pie de baranda en acero inoxidable','Cuerpo de doble platina decorativa',2),(177,21,'GDH-S4100','Kit para Puerta Colgante Modelo Tubular','Sistema de puerta colgante todo visión con rueda tubular.<br>\nRiel de aluminio de 2 metros.<br>\n100kg de peso máximo por puerta.<br>\nIncluye: 2 rodamientos, 2 topes, 1 guía de piso y 1 riel de aluminio (2 metros).',0),(178,2,'GDH-D681','Tope de puerta superior pared-vidrio\ntipo Europivots','Protector de goma',0),(179,18,'GDH-V303','Trancador tic tac con manilla para ventana\r\n','Color blanco o negro',0),(180,3,'GDH341-120','Tirador de puerta tipo H','90 cm de eje y 120 cm de largo',3),(181,6,'GDH112B-1','Pivote superior fijo','Pin 12mm',0),(183,12,'GDH207-10','Policarbonato ala central','Para vidrio de 10mm. Barra de 2,20 mts.',0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategory_category_id_fk` (`category_id`),
  CONSTRAINT `subcategory_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (1,1,'Todovisión','',NULL),(2,1,'Europivot','',NULL),(3,1,'Tiradores','',NULL),(4,1,'Cerraduras','',NULL),(5,1,'Frenos','',NULL),(6,1,'Accesorios','',NULL),(7,2,'Conectores','',NULL),(8,2,'Bisagras','',NULL),(9,2,'Tiradores Puerta','',NULL),(10,2,'Pomos','',NULL),(11,2,'Brazos Tensores','',NULL),(12,2,'Policarbonatos','',NULL),(13,3,'Soportes','',NULL),(14,3,'Arañas','',NULL),(15,3,'Repisas y Vitrinas','',NULL),(16,4,'Felpa','',NULL),(17,4,'Gomas y Guardapolvos','',NULL),(18,4,'Rodamientos y otros','',NULL),(19,4,'Herramientas','',NULL),(20,5,'Eurocolgantes','',NULL),(21,5,'Deslizantes','',NULL),(22,5,'Euroshower','',NULL),(23,5,'Plegables','',NULL),(24,5,'Automática','',NULL),(25,6,'Soportes para Vidrio','',NULL),(26,6,'Conectores','',NULL),(27,6,'Tubos','',NULL),(28,6,'Parales Base','',NULL);
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-23 20:07:46
