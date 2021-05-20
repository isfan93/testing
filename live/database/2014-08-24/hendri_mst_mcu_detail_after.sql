/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.6.16 : Database - db_simrsih_new
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `mst_mcu_detail` */

DROP TABLE IF EXISTS `mst_mcu_detail`;

CREATE TABLE `mst_mcu_detail` (
  `dmcu_id` int(11) NOT NULL AUTO_INCREMENT,
  `mcu_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dmcu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

/*Data for the table `mst_mcu_detail` */

insert  into `mst_mcu_detail`(`dmcu_id`,`mcu_id`,`description`) values (1,3128,' Foto thorax : PA '),(2,3128,' Pemeriksaan Laboratorium :  Darah Lengkap,  Urine Lengkap '),(3,3128,' Sarapan '),(4,3129,' Anamnesa & Pemeriksaan Fisik '),(5,3129,' Tes tajam penglihatan/visus & buta warna '),(6,3129,' Foto thorax : PA '),(7,3129,' Rekam jantung - Elektrokardiografi '),(8,3129,' Pemeriksaan Laboratorium :  Darah Lengkap,  Urine Lengkap,  Feses Lengkap, Gula darah puasa'),(9,3129,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(10,3129,' Fungsi hati   : SGPT, SGOT '),(11,3129,' Kolesterol total '),(12,3129,' Sarapan '),(13,3130,' Anamnesa & Pemeriksaan Fisik '),(14,3130,' Tes tajam penglihatan/visus & buta warna '),(15,3130,' Foto thorax : PA '),(16,3130,' Rekam jantung - Elektrokardiografi '),(17,3130,' Pemeriksaan Laboratorium :  Golongan darah ABO & rhesus, Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa'),(18,3130,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(19,3130,' Fungsi hati   : SGPT, SGOT '),(20,3130,' Kolesterol total '),(21,3130,' HBs Ag '),(22,3130,' Serologi VDRL '),(23,3130,' Sarapan '),(24,3131,' Anamnesa & Pemeriksaan Fisik '),(25,3131,' Pemeriksaan Dokter Spesialis Mata '),(26,3131,' Pemeriksaan Dokter Spesialis THT '),(27,3131,' Pemeriksaan Dokter Spesialis Jantung '),(28,3131,' Tes pembebanan jantung - Treadmill test '),(29,3131,' Pemeriksaan Dokter Gigi '),(30,3131,' Foto thorax : PA & Lateral '),(31,3131,' Tes fungsi paru    : Spirometry '),(32,3131,' USG Abdoman '),(33,3131,' Pemeriksaan Laboratorium : Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(34,3131,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(35,3131,'Fungsi hati   : Bilirubin total, Bilirubin direk, Bilirubin indirek,  Alkali fosfatase, SGPT, SGOT, Kolinesterase, Protein total, Albumin'),(36,3131,'Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol'),(37,3131,' HBs Ag '),(38,3131,' Anti HBs '),(39,3131,' Anti HCV '),(40,3131,' Petanda tumor : CEA '),(41,3131,' Sarapan '),(42,3132,' Anamnesa & Pemeriksaan Fisik '),(43,3132,' Pemeriksaan Dokter Spesialis Mata '),(44,3132,' Pemeriksaan Dokter Spesialis THT '),(45,3132,' Tes pendengaran - Audiometri '),(46,3132,' Pemeriksaan Dokter Spesialis Jantung '),(47,3132,' Rekam Jantung - Elektrokardiografi '),(48,3132,' Pemeriksaan Dokter Gigi '),(49,3132,' Foto thorax : PA & Lateral '),(50,3132,' USG Abdoman '),(51,3132,' USG Prostat / USG Ginekologi '),(52,3132,'Pemeriksaan Laboratorium : Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(53,3132,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(54,3132,' Fungsi hati   : Bilirubin total, Bilirubin direk, Bilirubin indirek,  Alkali fosfatase, SGPT, SGOT, Kolinesterase, Protein total, Albumin '),(55,3132,' Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol '),(56,3132,' HBs Ag '),(57,3132,' Anti HCV '),(58,3132,' Petanda tumor : CEA '),(59,3132,' Sarapan '),(60,3133,' Anamnesa & Pemeriksaan Fisik '),(61,3133,' Pemeriksaan Dokter Spesialis Jantung '),(62,3133,' Tes pembebanan jantung - Treadmill test '),(63,3133,' Foto thorax : PA '),(64,3133,'Pemeriksaan Laboratorium : Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(65,3133,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(66,3133,' Fungsi hati   : Bilirubin total, Alkali fosfatase, SGPT, SGOT, Kolinesterase '),(67,3133,' Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol '),(68,3133,' HBs Ag '),(69,3133,' Sarapan '),(70,3134,' Anamnesa & Pemeriksaan Fisik '),(71,3134,' Pemeriksaan Dokter Spesialis Mata '),(72,3134,' Pemeriksaan Dokter Spesialis THT '),(73,3134,' Pemeriksaan Dokter Gigi '),(74,3134,' Foto thorax : PA '),(75,3134,' Rekam jantung - Elektrokardiografi '),(76,3134,' Test pendengaran - Audiometri '),(77,3134,'Pemeriksaan Laboratorium : Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(78,3134,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(79,3134,' Fungsi hati   : Bilirubin total, SGPT, SGOT '),(80,3134,' Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol '),(81,3134,' HBs Ag '),(82,3134,' Serologi VDRL '),(83,3134,' Sarapan '),(84,3135,' Anamnesa & Pemeriksaan Fisik oleh dokter umum MCU '),(85,3135,' Pemeriksaan Dokter Spesialis Mata '),(86,3135,' Pemeriksaan Dokter Spesialis THT '),(87,3135,' Tes pendengaran - Audiometri '),(88,3135,' Pemeriksaan Dokter Gigi '),(89,3135,' Foto torak / dada : AP  '),(90,3135,' Tes fungsi paru - Spirometry '),(91,3135,' Rekam jantung - Elektrokardiografi '),(92,3135,' Pemeriksaan Laboratorium :  Golongan darah ABO & rhesus '),(93,3135,' Darah rutin : Hb, Ht, Lekosit, Hitung jenis, LED, Trombosit '),(94,3135,' Urine rutin  : Protein, Glukosa, Bilirubin, Urobilin, Sedimen '),(95,3135,' Feses rutin : makro & mikroskopis, parasit, amuba '),(96,3135,' Gula darah puasa dan 2 jam post prandial '),(97,3135,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(98,3135,' Fungsi hati  : Bilirubin total, Alkali fosfatase, SGPT, SGOT, Kolinesterase '),(99,3135,' Kolesterol total '),(100,3135,' HBs Ag '),(101,3135,' Serologi VDRL '),(102,3135,' Anti HIV '),(103,3135,' Sarapan '),(104,3135,' Tes Kehamilan - untuk calon pekerja perempuan ( + Rp 50.000,- ) '),(105,3136,' Anamnesa & Pemeriksaan Fisik oleh dokter umum MCU '),(106,3136,' Pemeriksaan Dokter Spesialis Mata '),(107,3136,' Pemeriksaan Dokter Spesialis THT '),(108,3136,' Tes pendengaran - Audiometri '),(109,3136,' Pemeriksaan Dokter Gigi '),(110,3136,' Foto torak / dada : AP  '),(111,3136,' Tes fungsi paru - Spirometry '),(112,3136,' Rekam jantung - Elektrokardiografi '),(113,3136,' Pemeriksaan Laboratorium :  Golongan darah ABO & rhesus '),(114,3136,' Darah rutin : Hb, Ht, Lekosit, Hitung jenis, LED, Trombosit '),(115,3136,' Urine rutin  : Protein, Glukosa, Bilirubin, Urobilin, Sedimen '),(116,3136,' Feses rutin : makro & mikroskopis, parasit, amuba '),(117,3136,' Gula darah puasa dan 2 jam post prandial '),(118,3136,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(119,3136,' Fungsi hati  : Bilirubin total, Alkali fosfatase, SGPT, SGOT, Kolinesterase '),(120,3136,' Kolesterol total '),(121,3136,' HBs Ag '),(122,3136,' Serologi VDRL '),(123,3136,' Anti HIV '),(124,3136,' Sarapan '),(125,3136,' Tes Kehamilan-untuk calon pekerja perempuan (+ Rp 50.000,-) '),(126,3137,' Anamnesa & Pemeriksaan Fisik '),(127,3137,' Pemeriksaan Dokter Spesialis Mata '),(128,3137,' Pemeriksaan Dokter Spesialis THT '),(129,3137,' Tes pendengaran - Audiometri '),(130,3137,' Pemeriksaan Dokter Gigi '),(131,3137,' Foto thorak : PA  '),(132,3137,' Tes fungsi paru - Spirometry '),(133,3137,' Rekam jantung - Elektrokardiografi '),(134,3137,'Pemeriksaan Laboratorium : Golongan darah ABO & rheseus, Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(135,3137,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(136,3137,' Fungsi hati  : Bilirubin Total, Alkali fosfatase, SGPT, SGOT, Kolinesterase '),(137,3137,' Kolesterol total '),(138,3137,' HBs Ag '),(139,3137,' Serologi VDRL '),(140,3137,' Anti HCV '),(141,3137,' Sarapan '),(142,3138,' Anamnesa & Pemeriksaan Fisik '),(143,3138,' Pemeriksaan Dokter Spesialis Mata '),(144,3138,' Pemeriksaan Dokter Spesialis THT '),(145,3138,' Tes pendengaran - Audiometri '),(146,3138,' Pemeriksaan Dokter Spesialis Jantung '),(147,3138,' Tes pembebanan jantung - Treadmill test '),(148,3138,' Pemeriksaan Dokter Gigi '),(149,3138,' Foto thorak : PA '),(150,3138,' Tes fungsi paru - Spirometry '),(151,3138,'Pemeriksaan Laboratorium : Golongan darah ABO & rheseus, Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(152,3138,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(153,3138,' Fungsi hati  : Bilirubin Total, Alkali fosfatase, SGPT, SGOT, Kolinesterase '),(154,3138,' Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol '),(155,3138,' HBs Ag '),(156,3138,' Serologi VDRL '),(157,3138,' Anti HCV '),(158,3138,' Sarapan '),(159,3138,' Tambahan '),(160,3138,' Tes Kehamilan - untuk perempuan '),(161,3138,' Gall Kultur - untuk calon pekerja jasa boga '),(162,3139,' Anamnesa & Pemeriksaan Fisik '),(163,3139,' Pemeriksaan Dokter Spesialis Mata '),(164,3139,' Pemeriksaan Dokter Spesialis THT '),(165,3139,' Pemeriksaan Dokter Spesialis Jantung '),(166,3139,' Tes pembebanan jantung - Treadmill test '),(167,3139,' Pemeriksaan Dokter Gigi '),(168,3139,' Foto thorax : PA dan Lateral '),(169,3139,' Tes fungsi paru - Spirometry '),(170,3139,' USG Abdomen '),(171,3139,'Pemeriksaan Laboratorium : Darah Lengkap, Urine Lengkap, Feses Lengkap, Gula darah puasa dan 2 jam post prandial'),(172,3139,' Fungsi ginjal : Ureum, Kreatinin, Asam urat '),(173,3139,' Fungsi hati   : Bilirubin total, Bilirubin direk, Bilirubin indirek,  Alkali fosfatase, SGPT, SGOT, Kolinesterase, Protein total, Albumin '),(174,3139,' Analisa lipid : Trigliserida, Kolesterol total, HDL kolesterol, LDL kolesterol '),(175,3139,' HBs Ag '),(176,3139,' Anti HBs '),(177,3139,' Serologi VDRL '),(178,3139,' Sarapan ');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;