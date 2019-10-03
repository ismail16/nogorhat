-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: nogorhat_db
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Electronics','electronics','default.jpg',1,'2019-09-29 22:50:59','2019-10-02 21:36:59'),(2,'Fashions','fashions','default.jpg',1,'2019-09-29 22:56:24','2019-10-02 21:37:33'),(3,'Daily Life','daily-life','default.jpg',1,'2019-09-29 22:57:34','2019-10-02 21:38:33');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_07_22_100132_create_jobs_table',1),(4,'2019_09_27_135820_create_roles_table',1),(5,'2019_09_28_042357_create_categories_table',2),(8,'2019_09_29_144356_create_subcategories_table',3),(9,'2019_09_29_144718_create_suppliers_table',4),(10,'2019_09_30_080725_create_products_table',5),(11,'2019_09_30_155416_create_product_images_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'huawei-nova-5t-8gb-ram-128gb-rom-image-0.jpg','2019-10-02 21:50:14','2019-10-02 21:50:14'),(2,1,'huawei-nova-5t-8gb-ram-128gb-rom-image-1.jpg','2019-10-02 21:50:14','2019-10-02 21:50:14'),(3,1,'huawei-nova-5t-8gb-ram-128gb-rom-image-2.jpg','2019-10-02 21:50:14','2019-10-02 21:50:14'),(4,2,'vivo-s1-4gb-ram-128gb-rom-image-0.png','2019-10-02 21:53:59','2019-10-02 21:53:59'),(5,2,'vivo-s1-4gb-ram-128gb-rom-image-1.png','2019-10-02 21:54:00','2019-10-02 21:54:00'),(6,2,'vivo-s1-4gb-ram-128gb-rom-image-2.png','2019-10-02 21:54:00','2019-10-02 21:54:00'),(7,2,'vivo-s1-4gb-ram-128gb-rom-image-3.png','2019-10-02 21:54:00','2019-10-02 21:54:00'),(8,3,'asus-zenbook-13-ux333fa-8th-gen-intel-core-i7-8565u-18ghz-46ghz-8gb-ddr4-512gb-pcie-ssd-133-inch-image-0.jpg','2019-10-02 22:03:03','2019-10-02 22:03:03'),(9,3,'asus-zenbook-13-ux333fa-8th-gen-intel-core-i7-8565u-18ghz-46ghz-8gb-ddr4-512gb-pcie-ssd-133-inch-image-1.jpg','2019-10-02 22:03:03','2019-10-02 22:03:03'),(10,3,'asus-zenbook-13-ux333fa-8th-gen-intel-core-i7-8565u-18ghz-46ghz-8gb-ddr4-512gb-pcie-ssd-133-inch-image-2.jpg','2019-10-02 22:03:03','2019-10-02 22:03:03'),(11,4,'lenovo-ideapad-ip-s145-15iwl-intel-pentium-5405u-23ghz-4gb-ddr4-1tb-hdd-156-inch-hd-1366x768-display-win-10-grey-notebook-image-0.jpg','2019-10-02 22:07:32','2019-10-02 22:07:32'),(12,4,'lenovo-ideapad-ip-s145-15iwl-intel-pentium-5405u-23ghz-4gb-ddr4-1tb-hdd-156-inch-hd-1366x768-display-win-10-grey-notebook-image-1.jpg','2019-10-02 22:07:32','2019-10-02 22:07:32'),(13,4,'lenovo-ideapad-ip-s145-15iwl-intel-pentium-5405u-23ghz-4gb-ddr4-1tb-hdd-156-inch-hd-1366x768-display-win-10-grey-notebook-image-2.jpg','2019-10-02 22:07:32','2019-10-02 22:07:32'),(14,5,'men-short-sleeve-polo-shirt-ari-004p19-buy-1-get-2-free-image-0.jpg','2019-10-02 22:10:08','2019-10-02 22:10:08'),(15,6,'bond-n09-for-fathers-day-edp-100ml-spray-image-0.jpg','2019-10-02 22:12:20','2019-10-02 22:12:20'),(16,7,'bvlgari-man-wood-essence-edp-100ml-783320461002-image-0.jpg','2019-10-02 22:14:31','2019-10-02 22:14:31'),(17,7,'bvlgari-man-wood-essence-edp-100ml-783320461002-image-1.jpg','2019-10-02 22:14:32','2019-10-02 22:14:32'),(18,7,'bvlgari-man-wood-essence-edp-100ml-783320461002-image-2.jpg','2019-10-02 22:14:32','2019-10-02 22:14:32'),(19,8,'panasonic-super-mixer-grinder-mx-ac555-image-0.jpg','2019-10-02 22:18:20','2019-10-02 22:18:20'),(20,8,'panasonic-super-mixer-grinder-mx-ac555-image-1.jpg','2019-10-02 22:18:21','2019-10-02 22:18:21'),(21,8,'panasonic-super-mixer-grinder-mx-ac555-image-2.jpg','2019-10-02 22:18:21','2019-10-02 22:18:21');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Huawei Nova 5T 8GB RAM 128GB ROM','huawei-nova-5t-8gb-ram-128gb-rom',52000,49999,20,'1','2','1','<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Huawei nova 5T 8GB/128GB</strong></p><ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Operating System: EMUI 9.1 (Based on Android 9)</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Display Size: 6.26 inches</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Chipset: HiSilicon Kirin 980</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">CPU: Octa-core</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">RAM: 8GB</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">ROM: 128GB</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Rear Camera: 48MP+16MP+2MP+2MP</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Front Camera: 32MP</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Sensors: Ambient Light Sensor; Gyroscope; Compass; Proximity Sensor; Gravity Sensor; Hall Sensor; Fingerprint Sensor</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Battery: 3750mAh</span></li></ul>','admin','admin',1,'2019-10-02 21:50:13','2019-10-02 21:50:13'),(2,'Vivo S1 4GB RAM 128GB ROM','vivo-s1-4gb-ram-128gb-rom',25000,23000,20,'1','2','1','<ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px;\">Operating System: Funtouch OS 9 (Based on Android 9.0)</li><li style=\"margin: 0px; padding: 0px;\">Processor:&nbsp;Octa-core 2.0 GHz,&nbsp;MT6768</li><li style=\"margin: 0px; padding: 0px;\">RAM: 4GB</li><li style=\"margin: 0px; padding: 0px;\">ROM: 128GB</li><li style=\"margin: 0px; padding: 0px;\">Display Screen: 6.38 inch (1080×2340) (FHD+)</li><li style=\"margin: 0px; padding: 0px;\">Display Type: Super AMOLED</li><li style=\"margin: 0px; padding: 0px;\">Touch Screen: Capacitive multi-touch</li><li style=\"margin: 0px; padding: 0px;\">Front Camera: 32MP</li><li style=\"margin: 0px; padding: 0px;\">Rear Camera: 16MP+8MP+2MP</li><li style=\"margin: 0px; padding: 0px;\">Battery: 4500mAh</li><li style=\"margin: 0px; padding: 0px;\">Connectivity: Wi-Fi: 2.4G+5G; Bluetooth 5.0</li><li style=\"margin: 0px; padding: 0px;\">Fingerprint Sensor: In-Display Fingerprint Scanning</li></ul>','admin','admin',1,'2019-10-02 21:53:59','2019-10-02 21:53:59'),(3,'Asus ZenBook 13 UX333FA 8th Gen Intel Core i7 8565U (1.8GHz-4.6GHz, 8GB DDR4, 512GB PCIe SSD) 13.3 Inch','asus-zenbook-13-ux333fa-8th-gen-intel-core-i7-8565u-18ghz-46ghz-8gb-ddr4-512gb-pcie-ssd-133-inch',94000,90000,5,'3','6','1','<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Processor - Intel Core i7 8565U</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Generation - 8th Gen</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Processor Clock Speed - 1.8-4.6GHz</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Display Size - 13.3\"</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">RAM - 8GB</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">RAM Type - DDR4</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Storage - 512GB PCIe SSD</span><br></p>','admin','admin',1,'2019-10-02 22:03:03','2019-10-02 22:03:03'),(4,'Lenovo IdeaPad IP S145-15IWL Intel Pentium 5405U (2.3GHz, 4GB DDR4, 1TB HDD) 15.6 Inch HD (1366x768) Display, Win 10, Grey Notebook','lenovo-ideapad-ip-s145-15iwl-intel-pentium-5405u-23ghz-4gb-ddr4-1tb-hdd-156-inch-hd-1366x768-display-win-10-grey-notebook',35000,30000,10,'1','1','1','<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Processor - Intel Pentium 5405U</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Processor Clock Speed - 2.3GHz</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Display Size - 15.6\"</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">RAM - 4GB</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">RAM Type - DDR4</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Storage - 1TB HDD</span><br style=\"margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\"><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px;\">Graphics Chipset - Intel UHD Graphics 610</span></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 1.1; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-weight: 700; font-size: 12.9996px; outline: 0px !important;\">Built to last&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h2><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;; font-size: 12px; outline: 0px !important;\">Engineered for long-lasting performance, the IdeaPad S145 delivers, powerful, smooth processing in a stylish, light design. Perfect for everyday computing, this durable 15.6\" laptop boasts exceptional audio and has fast, secure storage options.&nbsp; &nbsp;&nbsp;</p><p><br></p>','admin','admin',1,'2019-10-02 22:07:32','2019-10-02 22:07:32'),(5,'Men Short Sleeve Polo-Shirt ARI-004P19 (Buy 1 Get 2 Free)','men-short-sleeve-polo-shirt-ari-004p19-buy-1-get-2-free',120,100,10,'2','4','1','<ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Product Name: Men\'s Polo</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Brand: Aristo</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Style Name: Solid Polo</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Color: Same As Picture&nbsp;</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Material: 100% Cotton</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">GSM: 160</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Size Chart:&nbsp;</strong></span></p><table class=\"data-table\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0px; padding: 0px; border: 1px solid rgb(217, 221, 227); border-spacing: 0px; empty-cells: show; font-size: 14px; width: 1138px; color: rgb(120, 120, 120); font-family: robotoregular; text-align: justify;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Size</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Medium</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Large</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">XL</strong></span></p></td></tr><tr style=\"margin: 0px; padding: 0px;\"><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Length</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">28</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">29</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">30</span></p></td></tr><tr style=\"margin: 0px; padding: 0px;\"><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">½ Chest</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">18.5</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">20</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">21.5</span></p></td></tr><tr style=\"margin: 0px; padding: 0px;\"><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Shoulder Width</strong></span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">15.5</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: 1px solid rgb(217, 221, 227);\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">16.5</span></p></td><td valign=\"top\" width=\"98\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: none;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">17.5</span></p><div style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><br style=\"margin: 0px; padding: 0px;\"></span></div></td></tr></tbody></table><div class=\"tabs-content\" style=\"margin: 0px; padding: 0px; width: 1140.75px; font-size: 14px; color: rgb(120, 120, 120); font-family: robotoregular; text-align: justify;\"><div class=\"border-left\" style=\"margin: 0px; padding: 0px; background: transparent;\"><div class=\"border-right\" style=\"margin: 0px; padding: 0px; background: transparent;\"><div class=\"block-width\" style=\"margin: 0px; padding: 0px; width: 1140.75px; overflow: hidden; position: relative;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Men\'s Short Sleeve T-Shirt</strong></p><ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Brand: Aristo</li><li style=\"margin: 0px; padding: 0px;\">Style Name: T-Shirt</li><li style=\"margin: 0px; padding: 0px;\">Material: 100% Cotton</li><li style=\"margin: 0px; padding: 0px;\">GSM: 160</li><li style=\"margin: 0px; padding: 0px;\">Nice looking</li><li style=\"margin: 0px; padding: 0px;\">Color: Same as Picture</li></ul></div></div></div></div>','admin','admin',1,'2019-10-02 22:10:08','2019-10-02 22:10:08'),(6,'BOND N0.9 For Father\'s Day EDP 100ml Spray','bond-n09-for-fathers-day-edp-100ml-spray',16500,16000,5,'2','6','1','<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Item Specifics:</strong></span></p><div style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><table class=\"data-table product-table\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0px; padding: 0px; border: 1px solid rgb(217, 221, 227); border-spacing: 0px; empty-cells: show; width: 1138px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Fragrance Name:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">I Love New York</span></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Fragrance Type:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Eau De Parfum</span></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Brand:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Bond No. 9</span></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Gender:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Men</span></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Size:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">3.4 oz / 100 ml</span></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Condition:</span></th><td style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: none; width: 776px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Brand New In Box</span></td></tr></tbody></table></div><div style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">&nbsp;</span></div><div style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><div class=\"x-tins x-ffac\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Description:</strong></span></div><div class=\"x-tins\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Launched in 2011 this fragrance is the first of 3 editions (notably, I love New York for Her and I love New York for All) created to mark the 10th anniversary of the September 11th tragedy. It has top notes of energy accord, grapefruit zest, ginger and juniper berry. The middle notes are geranium, lavender, leather, and patchouli.</span></p></div></div>','admin','admin',1,'2019-10-02 22:12:20','2019-10-02 22:12:20'),(7,'Bvlgari Man Wood Essence EDP 100ML-783320461002','bvlgari-man-wood-essence-edp-100ml-783320461002',6500,6000,5,'2','6','1','<p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Features</strong></p><ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px;\">100% Original.</li><li style=\"margin: 0px; padding: 0px;\">fragrance Bvlgari Man Wood Essence</li><li style=\"margin: 0px; padding: 0px;\">For Men</li><li data-spm-anchor-id=\"a2a0e.pdp.product_detail.i1.10091843lW1JAA\" style=\"margin: 0px; padding: 0px;\">3.3 us&nbsp;fl.oz. 100 ml</li><li style=\"margin: 0px; padding: 0px;\">Eau de Perfume</li></ul><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Description</strong></p><ul style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px 0px 0px 1.5em; list-style-position: outside; list-style-image: initial; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">The house of Bvlgari launches their new fragrance Bvlgari Man Wood Essence in July 2018, as a part of the Bvlgari Man collection.&nbsp;</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">The philosophy of the new fragrance is based on the balance between the urban life of a modern man and the call of nature.Bvlgari Man Wood Essence combines an accord of woods – wood barks, resins and essences – mixed with spicy notes.&nbsp;</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">Italian citrus zest along with coriander leaf gives a fresh, green character in the opening, leading to an intense woody cypress, vetiver and cedar accord based on benzoin resins.&nbsp;</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">The face of the advertising campaign is Canadian model and actor Nick Bateman.&nbsp;</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">The fragrance is available as a 60 and 100 ml Eau de Parfum.</span></li><li style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(105, 110, 121) !important;\">The nose behind this fragrance is Alberto Morillas.</span></li></ul><div style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Additional Information</strong></p><div class=\"woocommerce-tabs wc-tabs-wrapper container tabbed-content\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 1170px;\"><div class=\"tab-panels\" style=\"margin: 0px; padding: 0px;\"><div id=\"tab-additional_information\" class=\"woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content active\" style=\"margin: 0px; padding: 0px;\"><div class=\"woocommerce-tabs wc-tabs-wrapper container tabbed-content\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 1170px;\"><div class=\"tab-panels\" style=\"margin: 0px; padding: 0px;\"><div id=\"tab-additional_information\" class=\"woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content active\" style=\"margin: 0px; padding: 0px;\"><table class=\"data-table product-table\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0px; padding: 0px; border: 1px solid rgb(217, 221, 227); border-spacing: 0px; empty-cells: show; width: 1168px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--weight\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">WEIGHT</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 797px;\">500 g</td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_brand\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">BRAND</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 797px;\"><p style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\">Bvlgari</p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_fragrance-type\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">FRAGRANCE TYPE</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 797px;\"><p style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\">Eau de Perfume</p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_gender\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">GENDER</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 797px;\"><p style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\">Men</p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">SIZE</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: none; width: 797px;\"><p style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\">100ml</p></td></tr><tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_made-in\" style=\"margin: 0px; padding: 0px;\"><th class=\"woocommerce-product-attributes-item__label\" style=\"margin: 0px; padding: 10px; vertical-align: top; text-align: left; border-bottom: 1px solid rgb(217, 221, 227); border-right: 1px solid rgb(217, 221, 227);\">MADE IN</th><td class=\"woocommerce-product-attributes-item__value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: none; width: 797px;\"><p style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\">ITALY</p></td></tr></tbody></table></div><div id=\"tab-reviews\" class=\"woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content\" style=\"margin: 0px; padding: 0px;\">&nbsp;</div></div></div><div class=\"related related-products-wrapper product-section\" style=\"margin: 0px; padding: 0px;\">&nbsp;</div></div><div id=\"tab-reviews\" class=\"woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content\" style=\"margin: 0px; padding: 0px;\">&nbsp;</div></div></div></div>','admin','admin',1,'2019-10-02 22:14:31','2019-10-02 22:14:31'),(8,'Panasonic Super Mixer Grinder MX-AC555','panasonic-super-mixer-grinder-mx-ac555',12000,11500,10,'3','7','1','<div class=\"title\" style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Products specifications</strong></div><div class=\"table-wrapper\" style=\"margin: 0px; padding: 0px; color: rgb(120, 120, 120); font-family: robotoregular; font-size: 14px; text-align: justify;\"><table class=\"data-table product-table\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0px; padding: 0px; border: 1px solid rgb(217, 221, 227); border-spacing: 0px; empty-cells: show; width: 1138px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr class=\"odd\" style=\"margin: 0px; padding: 0px;\"><td class=\"spec-name\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: 1px solid rgb(217, 221, 227); width: 231px;\">Specifications</td><td class=\"spec-value\" style=\"margin: 0px; padding: 5px 10px; vertical-align: middle; text-align: left; border-bottom: none; border-right: none; width: 866px;\"><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Comes with True 5 Jars</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Extremely Durable Polycarbonate Juicer Jar</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Stainless Steel Jars</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• New Multi Jar which can be used for Dry and Wet Grinding</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• 550 Watts Powerful Motor</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Unique Interlocking System</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Hardened Stainless steel blade</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Original Oil Seal Protection System</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Flow Breakers Jars</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Juice Extractor</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Circuit Breaker System</span></p><p class=\"bodycopy1\" style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><span style=\"margin: 0px; padding: 0px;\">• Convenient Piano Type Button Switches</span></p></td></tr></tbody></table></div>','admin','admin',1,'2019-10-02 22:18:20','2019-10-02 22:18:20');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','admin',NULL,NULL),(2,'Author','author',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (1,'1','Computers','computers',1,'2019-09-29 23:02:33','2019-10-02 21:38:53'),(2,'1','Mobiles','mobiles',1,'2019-10-02 21:39:04','2019-10-02 21:39:04'),(3,'1','Gaming  Console','gaming-console',1,'2019-10-02 21:41:04','2019-10-02 21:41:04'),(4,'2','T-shhirt','t-shhirt',1,'2019-10-02 21:41:48','2019-10-02 21:41:48'),(5,'2','Watches','watches',1,'2019-10-02 21:42:15','2019-10-02 21:42:15'),(6,'2','Perfumes & Fragrances','perfumes-fragrances',1,'2019-10-02 21:42:50','2019-10-02 21:42:50'),(7,'3','Home And Living','home-and-living',1,'2019-10-02 22:15:55','2019-10-02 22:15:55');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'ismail','456897245','ismail@email.com','dhaka',1,'2019-09-30 00:33:20','2019-09-30 00:33:20');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` tinyint(4) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@email.com','123456789',NULL,NULL,'Dhaka',NULL,'$2y$10$XzzVG5Zs60uuiDT.SCD2n.NIYZpT6FNQ4cmyTutbOd/TP7QJ4bHtG','1','hoFg8ioY5gePtBO852ayZ3F3JegIB5H9yJwzCLh7gWoCszJRXZ70VCd3OHU4',NULL,NULL),(2,2,'Author','author@email.com','987654321',NULL,NULL,'Dhaka',NULL,'$2y$10$tSYIk2o3uHLMJVQjpblehuarpKqJM69QiYk.uWWTPSdRRwrCHj4PW','1','DazzVqY1ahMBW6VOo6vDtUfp42yqRDn9LwUV9nUxENjoFxaDXa626hpomnBu',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-03 11:35:31
