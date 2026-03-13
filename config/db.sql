-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: asefimex_web
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `alianzas`
--

-- SE DEBE CREAR DATABSE nombre asefimex_web, codificacion utf8mb4_spanish_ci


DROP TABLE IF EXISTS `alianzas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alianzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `contenido` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `fecha_inicio` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alianzas`
--

LOCK TABLES `alianzas` WRITE;
/*!40000 ALTER TABLE `alianzas` DISABLE KEYS */;
INSERT INTO `alianzas` VALUES (1,'Asofom','Pertenecemos a ASOFOM, como agremiados','Pertenecemos a ASOFOM, como agremiados con el principal objetivo  de cumplir ciertos estándares para ofrecer calidad, confianza y seguridad a nuestros clientes. \n\nOtorgando los siguientes beneficios: \n\nREPRESENTATIVIDAD DEL SECTOR\nGOBERNABILIDAD\nEVENTOS NETWORKING\nCAPACITACIÓN ESPECIALIZADA\nHERRAMIENTAS\nVINCULACIÓN DE FONDEADORES','74.jpg',1,'2024-06-28'),(2,'Prodesarrollo','Pertenecemos a Prodesarollo, como agremiados','Esta responsabilidad va más allá de cumplir con la legislación vigente; implica adoptar una postura proactiva en la protección y promoción de los derechos fundamentales de todas las personas afectadas por las operaciones y actividades de la empresa .\n\nEsta responsabilidad va más allá de cumplir con la legislación vigente; implica adoptar una postura proactiva en la protección y promoción de los derechos fundamentales de todas las personas afectadas por las operaciones y actividades de la empresa.\n\nAdemás, el respeto de los derechos humanos en Asefimex es crucial para mantener relaciones comerciales éticas y sostenibles con clientes, proveedores y otras partes interesadas.\n\nLa transparencia, la integridad y el respeto mutuo son pilares fundamentales de cualquier relación comercial exitosa y duradera. Al asegurarse de que sus operaciones no contribuyan a violaciones de derechos humanos en ninguna etapa de la cadena de suministro, la empresa protege su reputación y su posición en el mercado, al tiempo que promueve un desarrollo económico y social más justo y equitativo.','77.jpg',1,'2024-06-28'),(3,'Alianza test','Alianza test prueba','Alianza test pruebaAlianza test prueba\r\nAlianza test prueba','Imagen de WhatsApp 2025-08-27 a las 16.45.26_27ee0d6c.jpg',1,'2025-09-26'),(4,'Círculo de Crédito','Alianza con CC para consulta','Alianza con circulo de crédito para consultas.......','WhatsApp Image 2025-07-26 at 11.39.32 AM.jpeg',1,'2025-09-26'),(5,'Condusef 234','Alianza condusef 234','Alianza condusef II\r\nAlianza condusef II\r\nAlianza condusef IIAlianza condusef II\r\nAlianza condusef II\r\n34','514091980_1130620982433061_290342823451405174_n.jpg',1,'2025-09-28');
/*!40000 ALTER TABLE `alianzas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargos` (
  `id_cargo` int NOT NULL AUTO_INCREMENT,
  `cargo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cargo`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Presidente del Consejo de Administración',1),(2,'Secretario del Consejo de Administración',1),(3,'Vocal del Consejo de Administración',1),(4,'Director de Administración y Finanzas',1),(5,'Director Comercial Nacional',1),(6,'Director Comercial Regional',1),(7,'Director Comercial',1),(8,'Sub Director Comercial',1),(9,'Gerente de Sucursal',1),(10,'Ejecutivo de Crédito',1),(11,'Responsable de T.I.',1),(12,'Auxiliar de T.I.',1);
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificaciones`
--

DROP TABLE IF EXISTS `certificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certificaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `contenido` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `fecha_inicio` date NOT NULL,
  `fecha_update` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificaciones`
--

LOCK TABLES `certificaciones` WRITE;
/*!40000 ALTER TABLE `certificaciones` DISABLE KEYS */;
INSERT INTO `certificaciones` VALUES (1,'Empresa Socialmente Responsable 2025','ESR Empresa Socialmente Responsable 2025','Asefimex Financiera asume el compromiso hacia la sociedad en beneficio del desarrollo sostenible, es decir, el equilibrio entre el crecimiento económico y el bienestar social extendiéndose más allá de sus obligaciones con los accionistas o los inversionistas. Asefimex se enfocada en el desarrollo sostenible de diferentes comunidades y grupos vulnerables, capaz de incluir en su gestión principios de Responsabilidad Social.\n\nNuestro compromiso con la comunidad se basa en:\n\n• Promover buenas prácticas de gobierno corporativo fomentando con base en la transparencia, la equidad y la rendición de cuentas.\n\n• Asegurar el cumplimiento de Valores y Políticas, el cual protege los derechos humanos de las y los trabajadores.\n\n• Establecer y difundir un código de ética y conducta.\n\n• Respetar y apoyar la protección de los derechos humanos para sus integrantes. • Difundir en Asfimex la Responsabilidad Social Empresarial mediante Cadena de valor.\n\n• Crear empleos y desarrollo de habilidades en la Entidad.\n\n• Generar Investigación, desarrollo tecnológico e innovación para un crecimiento optimo en Asefimex.\n\n• Realizar acciones de Inversión social a través de programas y actividades, con resultados sólidos y de mejora.','75.jpg',1,'2024-06-28','2024-06-28'),(2,'Empresa Respetuosa de los Derechos Humanos','Empresa Respetuosa de los Derechos Humanos','Esta responsabilidad va más allá de cumplir con la legislación vigente; implica adoptar una postura proactiva en la protección y promoción de los derechos fundamentales de todas las personas afectadas por las operaciones y actividades de la empresa .\n\nEsta responsabilidad va más allá de cumplir con la legislación vigente; implica adoptar una postura proactiva en la protección y promoción de los derechos fundamentales de todas las personas afectadas por las operaciones y actividades de la empresa.\n\nAdemás, el respeto de los derechos humanos en Asefimex es crucial para mantener relaciones comerciales éticas y sostenibles con clientes, proveedores y otras partes interesadas.\n\nLa transparencia, la integridad y el respeto mutuo son pilares fundamentales de cualquier relación comercial exitosa y duradera. Al asegurarse de que sus operaciones no contribuyan a violaciones de derechos humanos en ninguna etapa de la cadena de suministro, la empresa protege su reputación y su posición en el mercado, al tiempo que promueve un desarrollo económico y social más justo y equitativo.','92.jpg',1,'2024-06-28','2024-06-28'),(3,'Compromiso Carta de la Tierra - Asefimex','Compromiso Carta de la Tierra - Asefimex','Asefimex Financiera se compromete a llevar acabo la ejecución de principios y valores de “La Carta de la Tierra”, para incorporar un marco ético de la sustentabilidad en su quehacer cotidiano, como un instrumento educativo y en la toma de decisiones y de esta manera, coadyuvar en la construcción de una ciudadanía cada vez más justa, sostenible y pacífica.\n\nIncorporamos 8 Principios en nuestros valores a través de la Carta de la Tierra, en la declaración de la misión comercial y sus operaciones centrales, con el objetivo de desarrollar un negocio más social y ecológicamente responsable.\n\nEl día de hoy 25 de abril se llevó a cabo la entrega del Distinto  ELSSA, a 55 empresas.\n\nEsto fue llevado a cabo en las instalaciones de la Cámara Mexicana de la Industria de la Construcción (CMIC).\n\nComo empresa es afirmar el compromiso que tenemos con nuestros colaboradores, porque cada vez tengan herramientas para una mejor calidad de vida. ¡Seguiremos promoviendo entornos laborales, seguros y saludables!','66.jpg',1,'2024-06-28','2024-06-28'),(4,'Distintivo ELSSA','Distintivo ELSSA - Entornos Laborales Seguros Y Saludables','El objetivo de mantener un entorno laboral seguro y saludable en Asefimex es esencial en el marco de nuestra responsabilidad social corporativa.\n\nEstamos comprometidos a seguir mejorando nuestras políticas y prácticas en esta área, demostrando así nuestro compromiso con el bienestar de nuestros colaboradores y con el desarrollo sostenible en general.\n\n\n\nLa importancia de este objetivo en el marco de nuestra responsabilidad social corporativa es innegable por diversas razones:\n\n- Cuidado del capital humano.\n\n- Promoción del bienestar integral.\n\n- Contribución al desarrollo sostenible.\n\n- Liderazgo en el sector financiero.','95.jpg',1,'2024-04-24','2024-04-24'),(5,'Factor Wellbeing 2025','Empresa Promotora Del Bienestar 2025 - Factor Wellbeing 360','El bienestar de los empleados es la piedra angular de cualquier organización exitosa.\r\nEn Asefimex, reconocemos que nuestros colaboradores son nuestro activo más valioso.\r\nPor lo tanto, promover su bienestar no solo es una elección estratégica, sino una prioridad fundamental. Un ambiente laboral donde se fomenta el bienestar físico, emocional y mental de los empleados no solo mejora su calidad de vida, sino que también aumenta su satisfacción laboral, su compromiso con la empresa y su productividad.\r\n\r\nAsefimex como empresa promotora del bienestar no se limita simplemente a ofrecer beneficios tradicionales como seguro médico y vacaciones remuneradas. \r\nVa más allá, implementando programas integrales de bienestar que abordan todas las dimensiones del bienestar humano.\r\n\r\nEsto puede incluir actividades de ejercicio físico, programas de salud mental, asesoramiento financiero, opciones de trabajo flexible, y más.\r\n\r\nAl proporcionar a los empleados las herramientas y el apoyo necesario para mantener un equilibrio entre su vida profesional y personal, la empresa contribuye no solo al bienestar individual, sino también a la creación de un equipo más comprometido y cohesionado.','90.jpg',1,'2024-03-01','2025-11-18'),(6,'Certificación Gif','Certificación Gobernanza e Inclusión Financiera GIF','Asefimex Financiera genero un equipo de valor para la implementación del Proyecto GIF, denominado “Comité de Gobernanza” desarrollando los siguientes aspectos:\r\n\r\n• Actitud positiva.\r\n\r\n• Colaboración antes, durante y después de las reuniones.\r\n\r\n• Reconocimiento de las actividades a realizar.\r\n\r\n• Compromiso de mejora con enfoque de calidad.\r\n\r\n• Confianza y responsabilidad ante los encargos recibidos.\r\n\r\nEl trabajo realizado por el Comité de Gobernanza, durante el desarrollo del acompañamiento, fue el de identificar las áreas de oportunidad que tiene la institución en materia de gobernanza e inclusión financiera y, como reto principal, crear y desarrollar condiciones para el cumplimiento de las mejores prácticas.\r\n\r\nAsefimex trabajo los 6 Pilares sugeridos en la Caja de herramientas:\r\n\r\n1. Pilar: Derechos de Propiedad.\r\n\r\n2. Pilar: Órgano de Dirección.\r\n\r\n3. Pilar: Gestión.\r\n\r\n4. Pilar: Cumplimiento y Gestión de Riesgos.\r\n\r\n5. Pilar: Ética y Conflicto de Interés.\r\n\r\n6. Pilar: Comunicación y Transparencia de Información.','76.jpg',1,'2024-06-30','2025-09-26'),(7,'Certificación Universal II','Certificación Universal II Prueba Asefimex Financiera Finan','Certificacion Universal II, Certificacion Universal II, Certificacion Universal II\r\nCertificacion Universal II...\r\nCertificacion Universal II, Certificacion Universal II, Certificacion Universal II\r\nCertificacion Universal II...\r\nCertificacion Universal II, Certificacion Universal II, Certificacion Universal II\r\nCertificacion Universal II...','515513775_122137553006766470_5174064263203081744_n.jpg',1,'2025-09-25','2025-09-26');
/*!40000 ALTER TABLE `certificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consejo`
--

DROP TABLE IF EXISTS `consejo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consejo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_cargo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `tw` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `lk` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consejo`
--

LOCK TABLES `consejo` WRITE;
/*!40000 ALTER TABLE `consejo` DISABLE KEYS */;
INSERT INTO `consejo` VALUES (1,'Nicolás C. Albores','1','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(2,'Víctor M. C. Albores','2','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(3,'Roberto C. Albores','3','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(4,'Julieta C. Albores','3','assets/img/team/female_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(5,'Frida D. R. Martínez','3','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1);
/*!40000 ALTER TABLE `consejo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directivos`
--

DROP TABLE IF EXISTS `directivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_cargo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fa` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `tw` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `lk` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directivos`
--

LOCK TABLES `directivos` WRITE;
/*!40000 ALTER TABLE `directivos` DISABLE KEYS */;
INSERT INTO `directivos` VALUES (1,'Oneyda E. R. Hernández','4','assets/img/team/female_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(2,'Andrés C. Valencia','5','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(3,'Esteban M López','6','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(4,'Guillermo A. Aguilar','6','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(5,'Adan E. de la C. Franco','7','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(6,'Miguel A. B. Mollinedo','7','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(10,'Calixto G. Arcos','8','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(7,'José A. S. Aban','7','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(8,'Abraham V. Campos','7','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(9,'Francisco R. M de la Cruz','8','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1),(11,'David A. C. Cervera','8','assets/img/team/male_1.jpg','https://www.facebook.com/','https://twitter.com/','https://www.linkedin.com/',1);
/*!40000 ALTER TABLE `directivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `idEmpresa` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `logotipo` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `mision` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `vision` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `social_fb` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `social_ig` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `social_tt` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'Asesoría Financiera de México S.A. de C.V. SOFOM E.N.R','Av. Central Ote. 1487-A, Tuxtla Gutiérrez, Chiapas, 29000','9616147676',NULL,'Otorgar soluciones financieras inclusivas, con impacto social y especializadas en movilidad, impulsando el autoempleo y el bienestar económico de las familias mexicanas que no tienen acceso a la banca tradicional. Nos regimos por principios de transparencia, integridad y calidad, con el propósito de transformar vidas y fortalecer comunidades','Ser la institución financiera líder en México y Latinoamérica, reconocida por la inclusión, innovación y compromiso en mejorar la calidad de vida de las familias a través de soluciones financieras de vanguardia.”','servicioalcliente@asefimex.com',NULL,NULL,NULL,'Asesoría Financiera de México S.A. de C.V. SOFOM E.N.R, es una Sociedad Financiera de Objeto Múltiple, Entidad No Regulada, por lo que de conformidad con el Artículo 87-J de la Ley General de Organizaciones y Actividades Auxiliares de Crédito, no requiere autorización de la Secretaría de Hacienda y Crédito Público para su constitución y operación, y está sujeta a la supervisión y vigilancia de la Comisión Nacional Bancaria y de Valores',1);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_hero`
--

DROP TABLE IF EXISTS `home_hero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_hero` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `fecha_update` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_hero`
--

LOCK TABLES `home_hero` WRITE;
/*!40000 ALTER TABLE `home_hero` DISABLE KEYS */;
INSERT INTO `home_hero` VALUES (1,'Adquiere tu Crédito Ahora','Llévate tu Mototaxi Fácil y Rápido con pagos Quincenales y hasta 2 años de financiamiento.','moto6.webp',1,'2024-06-10'),(2,'Adquiere tu Crédito Ahora','Llévate tu Mototaxi Fácil y Rápido con pagos Quincenales y hasta 2 años de financiamiento.','moto1.webp',1,'2024-06-10'),(3,'Adquiere tu Crédito Ahora','Llévate tu Mototaxi Fácil y Rápido con pagos Quincenales y hasta 2 años de financiamiento.','moto2.webp',1,'2024-06-10'),(5,'Adquiere tu Crédito Ahora','Llévate tu Mototaxi Fácil y Rápido con pagos Quincenales y hasta 2 años de financiamiento.','moto3.webp',1,'2024-06-10'),(8,'Quieres un crédito? 3479034709345','Quieres un Crédito para tu Mototaxi ahora mismo sin planes forzosos y hasta 2 años de financiamiento.','moto89.jpg',1,'2025-09-30');
/*!40000 ALTER TABLE `home_hero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'C-MOVIL','Crédito c-movil','29 - copia.jpg',1,NULL),(2,'C-FACIL','Crédito C-Facil','30 - copia.jpg',1,NULL),(3,'C-ESPECIAL','Crédito C-Especial','44 - copia.jpg',1,NULL),(4,'CREDICONTADO','Crédito Credicontado','78 - copia.jpg',1,NULL),(5,'C-AUTO','Crédito de autos locos','Imagen de WhatsApp 2025-10-25 a las 09.57.06_95756b6b.jpg',1,NULL),(6,'C-MUJER','Credito para mujeres','WhatsApp Image 2025-10-18 at 1.50.42 PM.jpeg',1,'2025-11-01 19:33:20');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `contenido` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `fecha_inicio` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` VALUES (1,'Entrega De Tinacos','Colaboración entre Congregación Mariana Trinitaria y Asefimex Financiera','Te compartimos que gracias a la colaboración entre Congregación Mariana Trinitaria y Asefimex Financiera, este lunes 15 de abril se llevó a cabo la entrega de 28 tinacos capacidad de 1100 Litros, derivado del programa Asefimex está contigo. El objetivo de esta cadena de responsabilidad ciudadana es poder brindarte más beneficios.\n\n¡Seguiremos trabajando en conjunto para mejorar la calidad de vida , de muchas personas más!\n\n#vinculacionconlacomunidad\n\n#Empresasocialmenteresponsable','96.jpg',1,'2024-06-28','0000-00-00 00:00:00'),(2,'Mototaxis Eléctricos','Entérate, ya se realizó la primera exhibición de Mototaxis Eléctricos','Entérate, ya se realizó la primera exhibición de Mototaxis Eléctricos, esto es un gran avance para Asefimex Financiera y Moto Galería.','93.jpg',1,'2024-06-28','0000-00-00 00:00:00'),(3,'Webinar: Transformación De Las Ventas','Webinar: Transformación De Las Ventas De Los Motocarros','Hola como estas? ????\n\nMañana nos conectamos a las 10:00 a.m. para saber más sobre como adquirir un motocarro Piaggio de tres ruedas para tener tu comercio ambulante.','94.jpg',1,'2024-04-24','0000-00-00 00:00:00'),(4,'Primer Año del Distintivo ESR','Primer Año que Asefimex Financiera recibe el Distintivo ESR ','Primer Año del Distintivo ESR','81.jpg',1,'2024-03-01','0000-00-00 00:00:00'),(7,'Aprendiendo con Asefimex','Capacitdando en Educacion Financiera con Asefimex curso gratuito','Educacion Financiera de Asefimex','81.jpg',1,'2024-12-18','0000-00-00 00:00:00'),(8,'Nueva Publicación Asefimex Financiera','Nueva Publicación Asefimex Financiera','Nueva Publicación Asefimex Financiera','images.png',1,'2025-08-17','0000-00-00 00:00:00'),(19,'Publicación de prueba 2 Asefimex','Publicación de prueba 2 Asefimex','Publicación de prueba 2 Asefimex','images.png',1,'2025-08-18','0000-00-00 00:00:00'),(33,'Publicación de prueba Asefimex 56','Publicación de prueba Asefimex  56','Publicación de prueba Asefimex 50\r\nPublicación de prueba Asefimex 51 Publicación de prueba Asefimex 51 Publicación de prueba Asefimex 51\r\n\r\nPublicación de prueba Asefimex 51Publicación de prueba Asefimex 51\r\nPublicación de prueba Asefimex 51\r\n','Imagen de WhatsApp 2025-08-01 a las 18.02.37_5291ce39.jpg',0,'2025-09-12','0000-00-00 00:00:00'),(35,'Publicación de prueba Asefimex 71','Publicación de prueba Asefimex 71','Publicación de prueba Asefimex 72Publicación de prueba Asefimex 72Publicación de prueba Asefimex 72Publicación de prueba Asefimex 72Publicación de prueba Asefimex 72\r\nrueba Asefimex 76\r\nrueba Asefimex 7\r\nrueba Asefimex 7\r\nrueba Asefimex 7\r\nrueba Asefimex 7\r\n\r\n\r\nrueba Asefimex 7','image (27).png',0,'2025-09-15','2025-09-15 23:05:57'),(32,'Publicación de prueba  Asefimex 4590','Publicación de prueba  Asefimex 4590','Publicación de prueba  Asefimex 45\r\nPublicación de prueba  Asefimex 45\r\nPublicación de prueba  Asefimex 45\r\nPublicación de prueba  Asefimex 45\r\nPublicación de prueba  Asefimex 45\r\n\r\n4590\r\n4590\r\n4590\r\n','30327994.jpg',0,'2025-09-05','0000-00-00 00:00:00'),(31,'Publicación de prueba Asefimex 40','Publicación de prueba Asefimex 40','Publicación de prueba Asefimex 40\r\nPublicación de prueba Asefimex 40\r\nPublicación de prueba Asefimex 40\r\nPublicación de prueba Asefimex 40\r\nPublicación de prueba Asefimex 40','images (1).jpg',0,'2025-09-05','0000-00-00 00:00:00'),(34,'Publicación de prueba Asefimex 90','Publicación de prueba Asefimex 90','Publicación de prueba Asefimex 52\r\nPublicación de prueba Asefimex 52\r\n\r\n\r\nPublicación de prueba Asefimex 52\r\nPublicación de prueba Asefimex 52','Asefi-Plus_Logo.jpg',0,'2025-09-12','2025-09-12 23:37:12'),(36,'Publicación de prueba Asefimex 552','Publicación de prueba Asefimex 552','Publicación de prueba Asefimex 552\r\nPublicación de prueba Asefimex 552\r\nPublicación de prueba Asefimex 552\r\nPublicación de prueba Asefimex 552\r\nPublicación de prueba Asefimex 552\r\nPublicación de prueba Asefimex 552\r\n','WhatsApp Image 2025-06-25 at 5.03.39 PM.jpeg',1,'2025-09-29','2025-09-28 13:12:04'),(37,'Publicación de prueba Asefimex 622','Publicación de prueba Asefimex 622','Publicación de prueba Asefimex 622\r\nPublicación de prueba Asefimex 622\r\nPublicación de prueba Asefimex 622\r\nPublicación de prueba Asefimex 622\r\nPublicación de prueba Asefimex 622\r\nPublicación de prueba Asefimex 622\r\n..\r\nPublicación de prueba Asefimex 622\r\n','Captura de pantalla 2025-07-23 115256.png',1,'2025-09-29','2025-09-30 06:00:00');
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonios`
--

DROP TABLE IF EXISTS `testimonios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `ocupacion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `contenido` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonios`
--

LOCK TABLES `testimonios` WRITE;
/*!40000 ALTER TABLE `testimonios` DISABLE KEYS */;
INSERT INTO `testimonios` VALUES (1,'Marco Antonio Perez','Agricultor-Mototaxista','Proiniaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.','assets/img/testimonials/male_client.jpg','2024-06-30',1),(2,'Saul Gomez Morales','Mototaxista','Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.','assets/img/testimonials/male_client.jpg','2024-06-17',1),(5,'JAUN JOSE PEREZ TORRES','MOTOTAXISTA','TESTTIMONIO TESTIMONIO TESTIMONIO TESTIMONIO','assets/img/testimonials/male_client.jpg','2025-09-18',1),(3,'Sara Hernandez Perez','Ama de Casa Emprendedora','Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum era','assets/img/testimonials/female_client.jpg','2024-06-13',1),(6,'Daniel Trejo Dominguez','Tortillero','Crédito con Asefimex todo en ok','assets/img/testimonials/male_client.jpg','2025-09-19',1),(4,'Jenaris Danubio perez','Emprendedora','Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam','assets/img/testimonials/female_client.jpg','2024-06-02',1),(7,'Edgar Antonio Ramirez Ramirez','Vendedor','testimonio testimonio testimonio testimonio testimonio','assets/img/testimonials/male_client.jpg','2025-09-18',1),(8,'Veronica torres perez',' Mototaxista / Ama de casa',' Mototaxista / Ama de casa  Mototaxista / Ama de casa  Mototaxista / Ama de casa','assets/img/testimonials/female_client.jpg','2025-09-18',0),(9,'Maria Antonieta de las Nieves','MOTOTAXISTA','Comentario chido pa´ Asefimex, Comentario chido pa´ Asefimex','assets/img/testimonials/female_client.jpg','2025-09-18',0);
/*!40000 ALTER TABLE `testimonios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_unidad`
--

DROP TABLE IF EXISTS `tipo_unidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_unidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `filtro` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_unidad`
--

LOCK TABLES `tipo_unidad` WRITE;
/*!40000 ALTER TABLE `tipo_unidad` DISABLE KEYS */;
INSERT INTO `tipo_unidad` VALUES (1,'Unidad de Pasajeros','filter-card',1),(2,'Unidad de Carga','filter-app',1);
/*!40000 ALTER TABLE `tipo_unidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_suario` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `usuario` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'email del usuario',
  `pass` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_suario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'EVER','LOPEZ MARTINEZ','elmartinez@asefimex.com','asefimex1',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'asefimex_web'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-12 18:08:07
