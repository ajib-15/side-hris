-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: hris
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_advance_salaries`
--

LOCK TABLES `xin_advance_salaries` WRITE;
/*!40000 ALTER TABLE `xin_advance_salaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_advance_salaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_announcements`
--

LOCK TABLES `xin_announcements` WRITE;
/*!40000 ALTER TABLE `xin_announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_assets`
--

LOCK TABLES `xin_assets` WRITE;
/*!40000 ALTER TABLE `xin_assets` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_assets_categories`
--

LOCK TABLES `xin_assets_categories` WRITE;
/*!40000 ALTER TABLE `xin_assets_categories` DISABLE KEYS */;
INSERT INTO `xin_assets_categories` VALUES (1,1,'Laptop','05-04-2018 03:03:31');
/*!40000 ALTER TABLE `xin_assets_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_attendance_time`
--

LOCK TABLES `xin_attendance_time` WRITE;
/*!40000 ALTER TABLE `xin_attendance_time` DISABLE KEYS */;
INSERT INTO `xin_attendance_time` VALUES (1,5,'2019-04-17','2019-04-17 10:36:38','::1','2019-04-17 10:37:36','::1','0','31.450726399999997','74.2940672','31.450726399999997','74.2940672','2019-04-17 10:36:38','2019-04-17 10:37:36','2019-04-17 10:37:36','0:0','','Present');
/*!40000 ALTER TABLE `xin_attendance_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_attendance_time_request`
--

LOCK TABLES `xin_attendance_time_request` WRITE;
/*!40000 ALTER TABLE `xin_attendance_time_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_attendance_time_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_award_type`
--

LOCK TABLES `xin_award_type` WRITE;
/*!40000 ALTER TABLE `xin_award_type` DISABLE KEYS */;
INSERT INTO `xin_award_type` VALUES (1,1,'Performer of the Year','22-03-2018 01:33:57');
/*!40000 ALTER TABLE `xin_award_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_awards`
--

LOCK TABLES `xin_awards` WRITE;
/*!40000 ALTER TABLE `xin_awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_awards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_chat_messages`
--

LOCK TABLES `xin_chat_messages` WRITE;
/*!40000 ALTER TABLE `xin_chat_messages` DISABLE KEYS */;
INSERT INTO `xin_chat_messages` VALUES (1,'1','5','5',0,'hi','2020-07-08 13:38:30',0,'',0,0),(2,'1','6','6',1,'Test','2020-07-08 13:41:43',0,'',0,0),(3,'1','6','6',1,'Kenapa','2020-07-08 13:41:51',0,'',0,0),(4,'6','1','1',1,'Hmm','2020-07-08 13:41:58',0,'',0,0),(5,'6','1','1',1,'Apa aja','2020-07-08 13:42:05',0,'',0,0),(6,'6','1','1',1,'Hmmmm','2020-07-08 13:42:11',0,'',0,0),(7,'1','6','6',1,'Test aja','2020-07-08 13:42:16',0,'',0,0);
/*!40000 ALTER TABLE `xin_chat_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_clients`
--

LOCK TABLES `xin_clients` WRITE;
/*!40000 ALTER TABLE `xin_clients` DISABLE KEYS */;
INSERT INTO `xin_clients` VALUES (1,'','Shaleena','client1@hrsale.com','','$2y$12$wGATpsG6S/IAIwobUZMeDeYyxpirjXVaVLo79ta2PLlRJjBNIsfFa','','123456789','Shale Inc.',0,'','','Address Line 1','Address Line 2','City','State','11461',190,1,'','20-03-2019 22:05:05','::1',1,'2019-03-20 22:05:02');
/*!40000 ALTER TABLE `xin_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_companies`
--

LOCK TABLES `xin_companies` WRITE;
/*!40000 ALTER TABLE `xin_companies` DISABLE KEYS */;
INSERT INTO `xin_companies` VALUES (1,1,'HRSALE','Test','test123','','','','mainoffice@hrsale.com','logo_1526958729.png','0123456789','hrsale.com','Test','Test2','Riyadh','Riyadh','11461',190,0,'USD - $','Asia/Riyadh',1,'22-05-2018');
/*!40000 ALTER TABLE `xin_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_company_documents`
--

LOCK TABLES `xin_company_documents` WRITE;
/*!40000 ALTER TABLE `xin_company_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_company_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_company_info`
--

LOCK TABLES `xin_company_info` WRITE;
/*!40000 ALTER TABLE `xin_company_info` DISABLE KEYS */;
INSERT INTO `xin_company_info` VALUES (1,'logo_1594349111.png','logo2_1520609223.png','signin_logo_1520612279.png','favicon_1594349112.png','','','NAMA PT','','','Jhon Due','demo@google.com','123456789','Address Line 1','Address Line 2','City','State','11461',190,'2017-05-20 12:05:53');
/*!40000 ALTER TABLE `xin_company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_company_policy`
--

LOCK TABLES `xin_company_policy` WRITE;
/*!40000 ALTER TABLE `xin_company_policy` DISABLE KEYS */;
INSERT INTO `xin_company_policy` VALUES (1,1,'Smoke-Free Work','&lt;p&gt;Smoke-Free Work Environment Policy Close&lt;/p&gt;',NULL,1,'28-02-2018');
/*!40000 ALTER TABLE `xin_company_policy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_company_type`
--

LOCK TABLES `xin_company_type` WRITE;
/*!40000 ALTER TABLE `xin_company_type` DISABLE KEYS */;
INSERT INTO `xin_company_type` VALUES (1,'Corporation',''),(2,'Exempt Organization',''),(3,'Partnership',''),(4,'Private Foundation',''),(5,'Limited Liability Company','');
/*!40000 ALTER TABLE `xin_company_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_contract_type`
--

LOCK TABLES `xin_contract_type` WRITE;
/*!40000 ALTER TABLE `xin_contract_type` DISABLE KEYS */;
INSERT INTO `xin_contract_type` VALUES (1,1,'Permanent','05-04-2018 06:10:32');
/*!40000 ALTER TABLE `xin_contract_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_countries`
--

LOCK TABLES `xin_countries` WRITE;
/*!40000 ALTER TABLE `xin_countries` DISABLE KEYS */;
INSERT INTO `xin_countries` VALUES (1,'+93','Afghanistan','flag_1500831780.gif'),(2,'+355','Albania','flag_1500831815.gif'),(3,'DZ','Algeria',''),(4,'DS','American Samoa',''),(5,'AD','Andorra',''),(6,'AO','Angola',''),(7,'AI','Anguilla',''),(8,'AQ','Antarctica',''),(9,'AG','Antigua and Barbuda',''),(10,'AR','Argentina',''),(11,'AM','Armenia',''),(12,'AW','Aruba',''),(13,'AU','Australia',''),(14,'AT','Austria',''),(15,'AZ','Azerbaijan',''),(16,'BS','Bahamas',''),(17,'BH','Bahrain',''),(18,'BD','Bangladesh',''),(19,'BB','Barbados',''),(20,'BY','Belarus',''),(21,'BE','Belgium',''),(22,'BZ','Belize',''),(23,'BJ','Benin',''),(24,'BM','Bermuda',''),(25,'BT','Bhutan',''),(26,'BO','Bolivia',''),(27,'BA','Bosnia and Herzegovina',''),(28,'BW','Botswana',''),(29,'BV','Bouvet Island',''),(30,'BR','Brazil',''),(31,'IO','British Indian Ocean Territory',''),(32,'BN','Brunei Darussalam',''),(33,'BG','Bulgaria',''),(34,'BF','Burkina Faso',''),(35,'BI','Burundi',''),(36,'KH','Cambodia',''),(37,'CM','Cameroon',''),(38,'CA','Canada',''),(39,'CV','Cape Verde',''),(40,'KY','Cayman Islands',''),(41,'CF','Central African Republic',''),(42,'TD','Chad',''),(43,'CL','Chile',''),(44,'CN','China',''),(45,'CX','Christmas Island',''),(46,'CC','Cocos (Keeling) Islands',''),(47,'CO','Colombia',''),(48,'KM','Comoros',''),(49,'CG','Congo',''),(50,'CK','Cook Islands',''),(51,'CR','Costa Rica',''),(52,'HR','Croatia (Hrvatska)',''),(53,'CU','Cuba',''),(54,'CY','Cyprus',''),(55,'CZ','Czech Republic',''),(56,'DK','Denmark',''),(57,'DJ','Djibouti',''),(58,'DM','Dominica',''),(59,'DO','Dominican Republic',''),(60,'TP','East Timor',''),(61,'EC','Ecuador',''),(62,'EG','Egypt',''),(63,'SV','El Salvador',''),(64,'GQ','Equatorial Guinea',''),(65,'ER','Eritrea',''),(66,'EE','Estonia',''),(67,'ET','Ethiopia',''),(68,'FK','Falkland Islands (Malvinas)',''),(69,'FO','Faroe Islands',''),(70,'FJ','Fiji',''),(71,'FI','Finland',''),(72,'FR','France',''),(73,'FX','France, Metropolitan',''),(74,'GF','French Guiana',''),(75,'PF','French Polynesia',''),(76,'TF','French Southern Territories',''),(77,'GA','Gabon',''),(78,'GM','Gambia',''),(79,'GE','Georgia',''),(80,'DE','Germany',''),(81,'GH','Ghana',''),(82,'GI','Gibraltar',''),(83,'GK','Guernsey',''),(84,'GR','Greece',''),(85,'GL','Greenland',''),(86,'GD','Grenada',''),(87,'GP','Guadeloupe',''),(88,'GU','Guam',''),(89,'GT','Guatemala',''),(90,'GN','Guinea',''),(91,'GW','Guinea-Bissau',''),(92,'GY','Guyana',''),(93,'HT','Haiti',''),(94,'HM','Heard and Mc Donald Islands',''),(95,'HN','Honduras',''),(96,'HK','Hong Kong',''),(97,'HU','Hungary',''),(98,'IS','Iceland',''),(99,'IN','India',''),(100,'IM','Isle of Man',''),(101,'ID','Indonesia',''),(102,'IR','Iran (Islamic Republic of)',''),(103,'IQ','Iraq',''),(104,'IE','Ireland',''),(105,'IL','Israel',''),(106,'IT','Italy',''),(107,'CI','Ivory Coast',''),(108,'JE','Jersey',''),(109,'JM','Jamaica',''),(110,'JP','Japan',''),(111,'JO','Jordan',''),(112,'KZ','Kazakhstan',''),(113,'KE','Kenya',''),(114,'KI','Kiribati',''),(115,'KP','Korea, Democratic People\'s Republic of',''),(116,'KR','Korea, Republic of',''),(117,'XK','Kosovo',''),(118,'KW','Kuwait',''),(119,'KG','Kyrgyzstan',''),(120,'LA','Lao People\'s Democratic Republic',''),(121,'LV','Latvia',''),(122,'LB','Lebanon',''),(123,'LS','Lesotho',''),(124,'LR','Liberia',''),(125,'LY','Libyan Arab Jamahiriya',''),(126,'LI','Liechtenstein',''),(127,'LT','Lithuania',''),(128,'LU','Luxembourg',''),(129,'MO','Macau',''),(130,'MK','Macedonia',''),(131,'MG','Madagascar',''),(132,'MW','Malawi',''),(133,'MY','Malaysia',''),(134,'MV','Maldives',''),(135,'ML','Mali',''),(136,'MT','Malta',''),(137,'MH','Marshall Islands',''),(138,'MQ','Martinique',''),(139,'MR','Mauritania',''),(140,'MU','Mauritius',''),(141,'TY','Mayotte',''),(142,'MX','Mexico',''),(143,'FM','Micronesia, Federated States of',''),(144,'MD','Moldova, Republic of',''),(145,'MC','Monaco',''),(146,'MN','Mongolia',''),(147,'ME','Montenegro',''),(148,'MS','Montserrat',''),(149,'MA','Morocco',''),(150,'MZ','Mozambique',''),(151,'MM','Myanmar',''),(152,'NA','Namibia',''),(153,'NR','Nauru',''),(154,'NP','Nepal',''),(155,'NL','Netherlands',''),(156,'AN','Netherlands Antilles',''),(157,'NC','New Caledonia',''),(158,'NZ','New Zealand',''),(159,'NI','Nicaragua',''),(160,'NE','Niger',''),(161,'NG','Nigeria',''),(162,'NU','Niue',''),(163,'NF','Norfolk Island',''),(164,'MP','Northern Mariana Islands',''),(165,'NO','Norway',''),(166,'OM','Oman',''),(167,'PK','Pakistan',''),(168,'PW','Palau',''),(169,'PS','Palestine',''),(170,'PA','Panama',''),(171,'PG','Papua New Guinea',''),(172,'PY','Paraguay',''),(173,'PE','Peru',''),(174,'PH','Philippines',''),(175,'PN','Pitcairn',''),(176,'PL','Poland',''),(177,'PT','Portugal',''),(178,'PR','Puerto Rico',''),(179,'QA','Qatar',''),(180,'RE','Reunion',''),(181,'RO','Romania',''),(182,'RU','Russian Federation',''),(183,'RW','Rwanda',''),(184,'KN','Saint Kitts and Nevis',''),(185,'LC','Saint Lucia',''),(186,'VC','Saint Vincent and the Grenadines',''),(187,'WS','Samoa',''),(188,'SM','San Marino',''),(189,'ST','Sao Tome and Principe',''),(190,'SA','Saudi Arabia',''),(191,'SN','Senegal',''),(192,'RS','Serbia',''),(193,'SC','Seychelles',''),(194,'SL','Sierra Leone',''),(195,'SG','Singapore',''),(196,'SK','Slovakia',''),(197,'SI','Slovenia',''),(198,'SB','Solomon Islands',''),(199,'SO','Somalia',''),(200,'ZA','South Africa',''),(201,'GS','South Georgia South Sandwich Islands',''),(202,'ES','Spain',''),(203,'LK','Sri Lanka',''),(204,'SH','St. Helena',''),(205,'PM','St. Pierre and Miquelon',''),(206,'SD','Sudan',''),(207,'SR','Suriname',''),(208,'SJ','Svalbard and Jan Mayen Islands',''),(209,'SZ','Swaziland',''),(210,'SE','Sweden',''),(211,'CH','Switzerland',''),(212,'SY','Syrian Arab Republic',''),(213,'TW','Taiwan',''),(214,'TJ','Tajikistan',''),(215,'TZ','Tanzania, United Republic of',''),(216,'TH','Thailand',''),(217,'TG','Togo',''),(218,'TK','Tokelau',''),(219,'TO','Tonga',''),(220,'TT','Trinidad and Tobago',''),(221,'TN','Tunisia',''),(222,'TR','Turkey',''),(223,'TM','Turkmenistan',''),(224,'TC','Turks and Caicos Islands',''),(225,'TV','Tuvalu',''),(226,'UG','Uganda',''),(227,'UA','Ukraine',''),(228,'AE','United Arab Emirates',''),(229,'GB','United Kingdom',''),(230,'US','United States',''),(231,'UM','United States minor outlying islands',''),(232,'UY','Uruguay',''),(233,'UZ','Uzbekistan',''),(234,'VU','Vanuatu',''),(235,'VA','Vatican City State',''),(236,'VE','Venezuela',''),(237,'VN','Vietnam',''),(238,'VG','Virgin Islands (British)',''),(239,'VI','Virgin Islands (U.S.)',''),(240,'WF','Wallis and Futuna Islands',''),(241,'EH','Western Sahara',''),(242,'YE','Yemen',''),(243,'ZR','Zaire',''),(244,'ZM','Zambia',''),(245,'ZW','Zimbabwe','');
/*!40000 ALTER TABLE `xin_countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_currencies`
--

LOCK TABLES `xin_currencies` WRITE;
/*!40000 ALTER TABLE `xin_currencies` DISABLE KEYS */;
INSERT INTO `xin_currencies` VALUES (1,1,'Dollars','USD','$'),(2,1,'Indonesian Rupiah','IDR','Rp');
/*!40000 ALTER TABLE `xin_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_currency_converter`
--

LOCK TABLES `xin_currency_converter` WRITE;
/*!40000 ALTER TABLE `xin_currency_converter` DISABLE KEYS */;
INSERT INTO `xin_currency_converter` VALUES (1,'1','MYR','4.11','17-08-2018 03:29:58');
/*!40000 ALTER TABLE `xin_currency_converter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_database_backup`
--

LOCK TABLES `xin_database_backup` WRITE;
/*!40000 ALTER TABLE `xin_database_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_database_backup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_departments`
--

LOCK TABLES `xin_departments` WRITE;
/*!40000 ALTER TABLE `xin_departments` DISABLE KEYS */;
INSERT INTO `xin_departments` VALUES (1,'MD Office',1,1,5,0,'06-03-2018',1),(2,'Accounts and  Finances',1,1,5,1,'17-03-2018',1);
/*!40000 ALTER TABLE `xin_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_designations`
--

LOCK TABLES `xin_designations` WRITE;
/*!40000 ALTER TABLE `xin_designations` DISABLE KEYS */;
INSERT INTO `xin_designations` VALUES (9,0,1,8,1,'Software Developer','',1,'06-03-2018',1),(10,0,2,10,1,'Finance','',1,'18-03-2018',1);
/*!40000 ALTER TABLE `xin_designations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_document_type`
--

LOCK TABLES `xin_document_type` WRITE;
/*!40000 ALTER TABLE `xin_document_type` DISABLE KEYS */;
INSERT INTO `xin_document_type` VALUES (1,1,'Driving License','09-05-2018 12:34:55');
/*!40000 ALTER TABLE `xin_document_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_email_configuration`
--

LOCK TABLES `xin_email_configuration` WRITE;
/*!40000 ALTER TABLE `xin_email_configuration` DISABLE KEYS */;
INSERT INTO `xin_email_configuration` VALUES (1,'phpmail','smtp.gmail.com','demo@gmail.com','123456',587,'tls');
/*!40000 ALTER TABLE `xin_email_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_email_template`
--

LOCK TABLES `xin_email_template` WRITE;
/*!40000 ALTER TABLE `xin_email_template` DISABLE KEYS */;
INSERT INTO `xin_email_template` VALUES (2,'code1','Forgot Password','Forgot Password','                            <p><span xss=\"removed\">Hello,</span></p><p><span xss=\"removed\">There was recently a request for password for your {var site_name} account.</span></p><p><span xss=\"removed\">If this was a mistake, just ignore this email and nothing will happen.</span></p><p><span xss=\"removed\">To reset your password, visit the following link <a href=\"{var reset_url}admin/reset_password?change=true&email={var email}\">Reset Password</a></span></p><p><span xss=\"removed\">Regards,</span></p><p><span xss=\"removed\">The {var site_name} Team</span></p>',1),(3,'code2','New Project','New Project','                                <p>Hi {var employee_name},</p><p>New project has been assigned to you.</p><p>Project Name: {var project_name}</p><p>Project Start Date: <span>{var project_start_date}</span></p><p><br><span>You can view the project by logging in to the portal using the link below.</span></p><p><span>{var site_url}admin/</span></p><p><span>Regards</span><br></p><p>The {var site_name} Team</p>',1),(5,'code3','Leave Request ','A Leave Request from you','            <p>Dear Admin,</p><p>{var employee_name} wants a leave from you.</p><p>You can view this leave request by logging in to the portal using the link below.</p><p>{var site_url}admin/<br><br>Regards,</p><p>The {var site_name} Team</p>',1),(6,'code4','Leave Approve','Your leave request has been approved','                <p>Hello,</p><p>Your leave request has been approved</p><p><span xss=\"removed\">Congratulations! </span>Your leave request from<font face=\"sans-serif, Arial, Verdana, Trebuchet MS\" color=\"#333333\"> </font>{var leave_start_date} to {var leave_end_date} has been approved by your company management.</p><p><span>You can view the leave by logging in to the portal using the link below.</span></p><p>{var site_url}admin/<br></p><p>Regards,<br>The {var site_name} Team</p>',1),(7,'code5','Leave Reject','Your leave request has been Rejected','                <p>Hello,</p><p>Your leave request has been Rejected</p><p>Unfortunately! Your leave request from {var leave_start_date} to {var leave_end_date} has been Rejected by your company management.</p><p><span>You can view the leave by logging in to the portal using the link below.</span></p><p>{var site_url}admin/</p><p>Regards,</p><p>The {var site_name} Team</p>',1),(8,'code6','Welcome Email ','Welcome Email ','            <p>Hello {var employee_name},</p><p>Welcome to {var site_name} .Thanks for joining {var site_name}. We listed your sign in details below, make sure you keep them safe.</p><p>Your Username: {var username}</p><p>Your Employee ID: {var employee_id}</p><p>Your Email Address: {var email}<br></p><p>Your Password: {var password}</p><p>Your Password: {var pincode}</p><p><span>You can logging in to the portal using the link below</span></p><p>{var site_url}admin/</p><br><p>Thank you,</p><p>The {var site_name} Team</p>',1),(9,'code7','Transfer','New Transfer','        <p>Hello {var employee_name},</p><p>You have been transfered to another department and location.</p><p>You can view the transfer details by logging in to the portal using the link below.</p><p>{var site_url}admin/</p><p>Regards,</p><p>The {var site_name} Team</p>',1),(10,'code8','Award','New Award Received','    <p>Hello {var employee_name},</p><p>You have been awarded {var award_name}.</p><p>You can view this award by logging in to the portal using the link below.</p><p><span xss=\"removed\">{var site_url}admin</span><span xss=\"removed\">/awards/</span><br></p><p>Regards,</p><p>The {var site_name} Team</p>',1),(14,'code9','New Task','Task assigned','    <p>Hi {employee_name},</p><p>A new task <span>{var task_name}</span> has been assigned to [{project_name}]</p><p>You can view this task by logging in to the portal using the link below.</p><p>{var site_url}</p><p>Regards,</p><p>The {var site_name} Team</p>',1),(15,'code10','New Inquiry','New Inquiry [#{var ticket_code}]','    <p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\"><span xss=\"\\\\\\\\\">Hi,</span><br></p><p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\"><span xss=\"\\\\\\\\\">Your received a new inquiry.</span></p><p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\"><span xss=\"\\\\\\\\\">Inquiry Code: #{var ticket_code}</span></p><p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\">Status : Open<br><br>Click on the below link to see the inquiry details and post additional comments.</p><p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\">{var site_url}admin/<br><br>Regards,</p><p xss=\"\\\\\\\\\" rgb(51,=\"\\\" font-family:=\"\\\" sans-serif,=\"\\\" arial,=\"\\\" verdana,=\"\\\\\" trebuchet=\"\\\\\\\\\">The {var site_name} Team</p>',1),(16,'code11','Client Welcome Email','Welcome Email','        <p>Hello {var client_name},</p><p>Welcome to {var site_name}. Thanks for joining {var site_name}. We listed your sign in details below, make sure you keep them safe. You can login to your panel using email and password.</p><p>Your Username: {var username}</p><p><span xss=\"\\\\\\\\\">Your Email Address: {var email}</span></p><p>Your Password: {var password}<br></p><p>{var site_url}client/</p><p>Have fun!</p><p>The {var site_name} Team</p>',1),(17,'code12','Password Changed Successfully','Password Changed Successfully','    <p>Hello,</p><p>Congratulations! Your password has been updated successfully.</p><p>Your new password is: {var password}</p><p>Your new pincode: {var pincode}<br></p><p>Thank you,<br>The {var site_name} Team<br></p>',1);
/*!40000 ALTER TABLE `xin_email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_bankaccount`
--

LOCK TABLES `xin_employee_bankaccount` WRITE;
/*!40000 ALTER TABLE `xin_employee_bankaccount` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_bankaccount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_complaints`
--

LOCK TABLES `xin_employee_complaints` WRITE;
/*!40000 ALTER TABLE `xin_employee_complaints` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_contacts`
--

LOCK TABLES `xin_employee_contacts` WRITE;
/*!40000 ALTER TABLE `xin_employee_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_contract`
--

LOCK TABLES `xin_employee_contract` WRITE;
/*!40000 ALTER TABLE `xin_employee_contract` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_documents`
--

LOCK TABLES `xin_employee_documents` WRITE;
/*!40000 ALTER TABLE `xin_employee_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_exit`
--

LOCK TABLES `xin_employee_exit` WRITE;
/*!40000 ALTER TABLE `xin_employee_exit` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_exit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_exit_type`
--

LOCK TABLES `xin_employee_exit_type` WRITE;
/*!40000 ALTER TABLE `xin_employee_exit_type` DISABLE KEYS */;
INSERT INTO `xin_employee_exit_type` VALUES (1,1,'Test','');
/*!40000 ALTER TABLE `xin_employee_exit_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_immigration`
--

LOCK TABLES `xin_employee_immigration` WRITE;
/*!40000 ALTER TABLE `xin_employee_immigration` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_immigration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_leave`
--

LOCK TABLES `xin_employee_leave` WRITE;
/*!40000 ALTER TABLE `xin_employee_leave` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_location`
--

LOCK TABLES `xin_employee_location` WRITE;
/*!40000 ALTER TABLE `xin_employee_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_promotions`
--

LOCK TABLES `xin_employee_promotions` WRITE;
/*!40000 ALTER TABLE `xin_employee_promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_qualification`
--

LOCK TABLES `xin_employee_qualification` WRITE;
/*!40000 ALTER TABLE `xin_employee_qualification` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_qualification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_resignations`
--

LOCK TABLES `xin_employee_resignations` WRITE;
/*!40000 ALTER TABLE `xin_employee_resignations` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_resignations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_security_level`
--

LOCK TABLES `xin_employee_security_level` WRITE;
/*!40000 ALTER TABLE `xin_employee_security_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_security_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_shift`
--

LOCK TABLES `xin_employee_shift` WRITE;
/*!40000 ALTER TABLE `xin_employee_shift` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_shift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_terminations`
--

LOCK TABLES `xin_employee_terminations` WRITE;
/*!40000 ALTER TABLE `xin_employee_terminations` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_terminations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_transfer`
--

LOCK TABLES `xin_employee_transfer` WRITE;
/*!40000 ALTER TABLE `xin_employee_transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_travels`
--

LOCK TABLES `xin_employee_travels` WRITE;
/*!40000 ALTER TABLE `xin_employee_travels` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_travels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_warnings`
--

LOCK TABLES `xin_employee_warnings` WRITE;
/*!40000 ALTER TABLE `xin_employee_warnings` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_warnings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employee_work_experience`
--

LOCK TABLES `xin_employee_work_experience` WRITE;
/*!40000 ALTER TABLE `xin_employee_work_experience` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_employee_work_experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_employees`
--

LOCK TABLES `xin_employees` WRITE;
/*!40000 ALTER TABLE `xin_employees` DISABLE KEYS */;
INSERT INTO `xin_employees` VALUES (1,'fionagrace',1,0,'Jhon','Due','superuser','demo@gmail.com',0,'$2y$12$Nc76mfT1BNiFeUJbYgEJyuSghodXTSOviYiIMXHr/qnZtU.Q/xs/i','2018-03-28','Male',0,1,2,0,10,1,1,'0','monthly',0,0,'2018-02-01','','Single','',1,'1000','0','8','17','10','0','1','2','3','0','0','0','Test Address','','','','profile_1546421723.png','profile_background_1519924152.jpg','','','12345678900','','','','','','','','',1,'31-01-2024 15:26:42','30-01-2024 20:22:41','::1',1,1,'fixed_layout_hrsale','','','0,1,2',0,NULL,0,0,'2018-02-28 05:30:44'),(5,'jsmith12',1,0,'Jhon','Smith','jhonsmith','jsmt12@hrsale.com',0,'$2y$12$zjBiQwIQG7vmgGeq935iqOCDiQVREZgA3VsN44YderDI5YoXKkWdi','2018-03-31','Male',0,2,2,10,10,1,0,'','monthly',0,0,'2018-03-02','','Single','',1,'1000','0','0','0','0','0','0','0','0','0','0','0','jsmt12','','','','','','','','1232','','','','','','','','',1,'17-04-2019 08:42:32','26-03-2019 07:31:01','::1',1,1,'','','','0,1,2',0,NULL,0,0,'2018-03-18 01:10:04'),(6,'955153',1,5,'Nur','Amelia','nur','husni.ghci@gmail.com',980838,'$2y$12$/ChXuKpERm41tmtbb6Wyx.Wnw90gnLaTEZJh19buliPkbt2HnEySW','2012-07-03','Male',0,1,1,0,9,1,1,'','',0,0,'2020-07-08','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','test','','','','','','','','0992992','','','','','','','','',1,'08-07-2020 17:41:22','','::1',1,0,'','','','0,1',0,NULL,0,0,'2020-07-08 10:40:49'),(7,'162657',1,5,'Daenerys','Targaryen','daenerys','daenerys@gmail.com',457509,'$2y$12$ecuBDVapiT9IYUKOgAbXIePB003cedO7k9omE/xlx.46UspvsFi7S','1998-12-30','Female',0,3,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Targaryen','','','','','','','','089012736281','','','','','','','','',1,'30-01-2024 20:23:37','30-01-2024 20:26:35','::1',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:11:40'),(8,'162659',1,5,'Sansa','Stark','sansa','sansa@gmail.com',457510,'$2y$12$dLvw7to1olVu0gSRzNhcx.6BXGjKrVmuUdPYlfOD7xMmhnoSzD5xe','1999-01-05','Female',0,4,2,0,10,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Stark','','','','','','','','087198263191','','','','','','','','',1,'','','',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:13:11'),(9,'162664',1,5,'Arya','Stark','arya','arya@gmail.com',457999,'$2y$12$qH54kvRk1axyTnmkOsmYu./Clzb2njhQjDLuQRHZVcZ8x0Z1qL.La','2003-11-11','Female',0,4,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Stark','','','','','','','','0851623781931','','','','','','','','',1,'','','',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:15:10'),(10,'162677',1,5,'Jon','Snow','jon','jon@gmail.com',457586,'$2y$12$UXXJpkVVvBU34V.GoFW04eltavZLsv8fjHyKrWeFKUvHxVzd6SU7a','1992-08-12','Male',0,4,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Snow','','','','','','','','08901237813121','','','','','','','','',1,'','','',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:16:49'),(11,'162654',1,5,'Cersei','Lannister','cersei','cersei@gmail.com',457545,'$2y$12$cmafGcbTR3jtLFNn26D0M.bydoLMHU4OY0hhZ.QGzUUQp0GhhSBci','1994-01-11','Female',0,5,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Lannister','','','','','','','','0871892371123','','','','','','','','',1,'','','',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:19:19'),(12,'162644',1,5,'Tyrion','Lannister','tyrion','tyrion@gmail.com',457532,'$2y$12$mtLHVxHzhEpOmslgV78lqu5kHTR7PkzVto8aYfqDUFd9tK55O2ehq','2024-01-16','Male',0,5,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Lannister','','','','','','','','085187231381','','','','','','','','',1,'','','',0,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:20:41'),(13,'162660',1,5,'Khal','Drogo','khal','khal@gmail.com',457542,'$2y$12$DdJt.ZVSEXCN0hsAxrESr.KCP1VrpTlFNRhayfsZktAumcL1YIGtG','2024-01-26','Male',0,6,1,0,9,1,1,'','',0,0,'2024-01-30','','','',0,'0','0','0','0','0','0','0','0','0','0','0','0','Drogo','','','','','','','','085123718932','','','','','','','','',1,'30-01-2024 20:26:42','30-01-2024 20:23:29','::1',1,0,'','','','0,1',0,NULL,0,0,'2024-01-30 01:22:03');
/*!40000 ALTER TABLE `xin_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_ethnicity_type`
--

LOCK TABLES `xin_ethnicity_type` WRITE;
/*!40000 ALTER TABLE `xin_ethnicity_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_ethnicity_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_events`
--

LOCK TABLES `xin_events` WRITE;
/*!40000 ALTER TABLE `xin_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_expense_type`
--

LOCK TABLES `xin_expense_type` WRITE;
/*!40000 ALTER TABLE `xin_expense_type` DISABLE KEYS */;
INSERT INTO `xin_expense_type` VALUES (1,1,'Supplies',1,'22-03-2018 01:17:42'),(2,1,'Utility',1,'22-03-2018 01:17:48');
/*!40000 ALTER TABLE `xin_expense_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_expenses`
--

LOCK TABLES `xin_expenses` WRITE;
/*!40000 ALTER TABLE `xin_expenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_file_manager`
--

LOCK TABLES `xin_file_manager` WRITE;
/*!40000 ALTER TABLE `xin_file_manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_file_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_file_manager_settings`
--

LOCK TABLES `xin_file_manager_settings` WRITE;
/*!40000 ALTER TABLE `xin_file_manager_settings` DISABLE KEYS */;
INSERT INTO `xin_file_manager_settings` VALUES (1,'gif,png,pdf,txt,doc,docx','10','','2019-09-30 03:13:58');
/*!40000 ALTER TABLE `xin_file_manager_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_bankcash`
--

LOCK TABLES `xin_finance_bankcash` WRITE;
/*!40000 ALTER TABLE `xin_finance_bankcash` DISABLE KEYS */;
INSERT INTO `xin_finance_bankcash` VALUES (1,'AlRajhi Bank','9999000','10000000','123456789','00966','Riyadh Branch','23-06-2020 01:23:16');
/*!40000 ALTER TABLE `xin_finance_bankcash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_deposit`
--

LOCK TABLES `xin_finance_deposit` WRITE;
/*!40000 ALTER TABLE `xin_finance_deposit` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_deposit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_expense`
--

LOCK TABLES `xin_finance_expense` WRITE;
/*!40000 ALTER TABLE `xin_finance_expense` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_payees`
--

LOCK TABLES `xin_finance_payees` WRITE;
/*!40000 ALTER TABLE `xin_finance_payees` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_payees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_payers`
--

LOCK TABLES `xin_finance_payers` WRITE;
/*!40000 ALTER TABLE `xin_finance_payers` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_payers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_transaction`
--

LOCK TABLES `xin_finance_transaction` WRITE;
/*!40000 ALTER TABLE `xin_finance_transaction` DISABLE KEYS */;
INSERT INTO `xin_finance_transaction` VALUES (1,1,0,'2020-07-10','Payroll Payments',1000,'expense','cr',0,5,NULL,3,'Payroll Payments',1,5,NULL,NULL,'2020-07-10 06:04:31');
/*!40000 ALTER TABLE `xin_finance_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_transactions`
--

LOCK TABLES `xin_finance_transactions` WRITE;
/*!40000 ALTER TABLE `xin_finance_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_finance_transfer`
--

LOCK TABLES `xin_finance_transfer` WRITE;
/*!40000 ALTER TABLE `xin_finance_transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_finance_transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_goal_tracking`
--

LOCK TABLES `xin_goal_tracking` WRITE;
/*!40000 ALTER TABLE `xin_goal_tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_goal_tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_goal_tracking_type`
--

LOCK TABLES `xin_goal_tracking_type` WRITE;
/*!40000 ALTER TABLE `xin_goal_tracking_type` DISABLE KEYS */;
INSERT INTO `xin_goal_tracking_type` VALUES (1,1,'Invoice Goal','31-08-2018 01:29:44'),(4,1,'Event Goal','31-08-2018 01:29:47');
/*!40000 ALTER TABLE `xin_goal_tracking_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_holidays`
--

LOCK TABLES `xin_holidays` WRITE;
/*!40000 ALTER TABLE `xin_holidays` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_holidays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hourly_templates`
--

LOCK TABLES `xin_hourly_templates` WRITE;
/*!40000 ALTER TABLE `xin_hourly_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hourly_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_invoices`
--

LOCK TABLES `xin_hrsale_invoices` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_invoices_items`
--

LOCK TABLES `xin_hrsale_invoices_items` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_invoices_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_invoices_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_module_attributes`
--

LOCK TABLES `xin_hrsale_module_attributes` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_module_attributes_select_value`
--

LOCK TABLES `xin_hrsale_module_attributes_select_value` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes_select_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes_select_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_module_attributes_values`
--

LOCK TABLES `xin_hrsale_module_attributes_values` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_module_attributes_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_notificaions`
--

LOCK TABLES `xin_hrsale_notificaions` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_notificaions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_notificaions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_quotes`
--

LOCK TABLES `xin_hrsale_quotes` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_hrsale_quotes_items`
--

LOCK TABLES `xin_hrsale_quotes_items` WRITE;
/*!40000 ALTER TABLE `xin_hrsale_quotes_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_hrsale_quotes_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_income_categories`
--

LOCK TABLES `xin_income_categories` WRITE;
/*!40000 ALTER TABLE `xin_income_categories` DISABLE KEYS */;
INSERT INTO `xin_income_categories` VALUES (1,'Envato',1,'25-03-2018 09:36:20'),(2,'Salary',1,'25-03-2018 09:36:28'),(3,'Other Income',1,'25-03-2018 09:36:32'),(4,'Interest Income',1,'25-03-2018 09:36:53'),(5,'Part Time Work',1,'25-03-2018 09:37:13'),(6,'Regular Income',1,'25-03-2018 09:37:17');
/*!40000 ALTER TABLE `xin_income_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_job_applications`
--

LOCK TABLES `xin_job_applications` WRITE;
/*!40000 ALTER TABLE `xin_job_applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_job_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_job_categories`
--

LOCK TABLES `xin_job_categories` WRITE;
/*!40000 ALTER TABLE `xin_job_categories` DISABLE KEYS */;
INSERT INTO `xin_job_categories` VALUES (1,'PHP','q7VJh5xWwr56ycN0mAou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(2,'Android','q7VJh5xWwr56ycN0m34Aou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(3,'WordPress','q2327VJh5xWwr56ycN0mAou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(4,'Design','0oplfq7VJh5xWwr56ycN0mAou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(5,'Developer','34e6zyr56ycN0mAou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(6,'iOS','l1BbMd6H2D3rkFnjU9LgCq7VJh5xWwr56ycN0mAou4266iOY8','2018-04-15'),(7,'Mobile','l1BbMd6H2D3rkFnjU9LgCH2D3rkFnjU9BbMd6H2D3r','2018-04-15'),(8,'MySQL','2D3rkFnjU9LgCq7VJh5xWwl1BbMd6H2D3rkFnjU9LgCq7VJh5xWwr56ycN0mAou4266iOY8','2018-04-15'),(9,'JavaScript','gCq7VJh5xWwl1BbMd6H2D3rkFnjU9LgCq7VJh5xWwl1BbMd6H2D3rkFnjU9LgCq7VJh5xWwr56ycN0mAou4266iOY8','2018-04-15'),(10,'Software','zyr56ycN0mAou42634e6zyr56ycN0mAou4266iOY8l1BbMd6H2D3rkFnjU9LgC','2018-04-15'),(11,'Website Design','6iOY8l1BbMd6H2D3rkFnjU9LgCzyr56ycN0mAou42634e6zyr56ycN0mAou426','2018-04-15'),(12,'Programming','jU9LgCzyr56ycN0mAou4266iOY8l1BbMd6H2D3rkFn34e6zyr56ycN0mAou426','2018-04-15'),(13,'SEO','cN0mAou4266iOY8l1Bq2327VJh5xWwr56ybMd6H2D3rkFnjU9LgC','2018-04-15'),(14,'Java','VJh5xWwr56ybMd6H2DcN0mAou4266iOY8l1Bq23273rkFnjU9LgC','2018-04-15'),(15,'CSS','VJh5xWwr56ybMd6H2Dsdfkkj58234ksklEr6ybMd6H2D','2018-04-15'),(16,'HTML5','0349324k0434r23ksodfkpsodkfposakfkpww3MsH2Dei30ks','2018-04-15'),(17,'Web Development','sdfj0rkskfskdfj329FLE34LFMsH2Dei30ks0349324k0434','2018-04-15'),(18,'Web Design','MsH2Deiee30ks0349324k0434klEr6ybMd6234b5ksddif0k33','2018-04-15'),(19,'eCommerce','klEr6ybMd6234bMsH2Dei30ks0349324k04345ksddif0k33','2018-04-15'),(20,'Design','234bMsklEr6ybMd6H2Dssdk5yy98ooVJh5xWwr56y435gghhole93lfkkj58','2018-04-15'),(21,'Logo Design','k5yy98ooVJh5xWw45456y435gghhole93lfkkj58234bMsklEr6ybMd6H2D','2018-04-15'),(22,'Graphic Design','k5yy98ooVJh5xWwr56y435gghhole93lfkkj58234bMsklEr6ybMd6H2D','2018-04-15'),(23,'Video','k98ooVJh5xWwr56y435gghhole93lfkkj58234bMsklEr6ybMd6H2D','2018-04-15'),(24,'Animation','ole93lfkkj58234k98ooVJh5xWwr56ybMsklEr6ybMd6H2D','2018-04-15'),(25,'Adobe Photoshop','d6H2Dsdfkkj58234k98ooVJh5xWwr56ybMsklEr6ybMd6H2D','2018-04-15'),(26,'Illustration','xWwr56ybMd6H2DcN0mA3405kfVJh5ou4266iOY8l1Bq23273rkFnjU9LgC','2018-04-15'),(27,'Art','3405kfVJh5ou4266iOY8l1Bq23273rk3ok3xWwr56ybMd6H2DcN0mAFnjU9LgC','2018-04-15'),(28,'3D','Md6H2DcN0mAFnjU9LfVJh5ou4266iOY8l1Bq23273rk3ok3xWwr56ybgC','2018-04-15'),(29,'Adobe Illustrator','5ou4266iOY8l1Bq23273rkMd6H2DcN0mAFnjU9LfVJh3ok3xWwr56ybgCww','2018-04-15'),(30,'Drawing','6iOY8l1Bq23273rk0234KILR23492034ksfpd456yslfdsf5ou426','2018-04-15'),(31,'Web Design','3l34l432fo232l3223DhssdfRKLl5434lsdfl3l3sfs3lllblp23D','2018-04-15'),(32,'Cartoon','sdfowerewl567lflsdfl3l3sf3l34l432fo232l3223Dhs3lllblp23D','2018-04-15'),(33,'Graphics','3232l32hsfo23lllblp23D9LfVJkfo394s5ou42at5sd20cNsolof3llsblp23DcN','2018-04-15'),(34,'Fashion Design','9LfVJkfo394s5ou42at5sd203232l32hsfo23lllblp23DcNsolof3llsblp23DcN','2018-04-15'),(35,'WordPress','hsfo23lllblp23DcNsolof3llsblp23DcN9LfVJkfo394s5ou42','2018-04-15'),(36,'Editing','lof3llsblp23DcN9LfVJhsfo23lllblp23DcNsokfo394s5ou42','2018-04-15'),(37,'Writing','blp23DcNsokfo394slof3llsblp23DcN9LfVJh5ou42','2018-04-15'),(38,'T-Shirt Design','9LfVJh5ou42blp23DcNsdf329LfVJh5ou42bsokjfwpoek0mAFnjU','2018-04-15'),(39,'Display Advertising','9LfVJh5ou42bsokjfwpoek9LfVJh5ou42blp23DcN0mAFnjU','2018-04-15'),(40,'Email Marketing','DcN0mAFnjU9LfVJh5ou42bs66iOY8l1Bq23273rk3ok3xWwr56yMd6H2gC','2018-04-15'),(41,'Lead Generation','66iOY8l1Bq23273rk3ok3xWwr56yMd6H2DcN0mAFnjU9LfVJh5ou42bgC','2018-04-15'),(42,'Market & Customer Research','Aou42Eou42iOY800Ke3klAou42066iOY800fklAou42','2018-04-15'),(43,'Marketing Strategy','EKe3000fklAou4266iOY8l1kkadwlsdfk20323rlsKh4KadlLL','2018-04-15'),(44,'Public Relations','l1kkadwlsdfk20323rlsKh4KadlLLEKe3000fklAou4266iOY8','2018-04-15'),(45,'Telemarketing & Telesales','fklAou4266iOY8l1kkadwlsfBf329k3249owe923ksd324odLL2DcN0m','2018-04-15'),(46,'Other - Sales & Marketing','Bf329k3249owe923ksd324odfklAou4266iOY8l1kkadwlLL2DcN0m','2018-04-15'),(47,'SEM - Search Engine Marketing','Aou4266iOY8l1Bf329k3249owe923ksdkkadwlLL2DcN0m','2018-04-15'),(48,'SEO - Search Engine Optimization','rk0234KILR23492034ksfpd456y6iOY8l1Bq23273slfdsf5ou426','2018-04-15'),(49,'SMM - Social Media Marketing','2DcN0mAou4266iOY8l1BVJh5xWwr56ybMd6Hq23273rkFnjU9LgC','2018-04-15');
/*!40000 ALTER TABLE `xin_job_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_job_interviews`
--

LOCK TABLES `xin_job_interviews` WRITE;
/*!40000 ALTER TABLE `xin_job_interviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_job_interviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_job_pages`
--

LOCK TABLES `xin_job_pages` WRITE;
/*!40000 ALTER TABLE `xin_job_pages` DISABLE KEYS */;
INSERT INTO `xin_job_pages` VALUES (1,'About Us','xl9wkRy7tqOehBo6YCDjFG2JTucpKI4gMNsn8Zdf','About Ussss','2018-04-15'),(2,'Communications','5uk4EUc3V9FYTbBQz7PWgKM6qCajfAipvhOJnZHl','Communications','2018-04-15'),(3,'Lending Licenses','5r6OCsUoHQFiRwI17W0eT38jbvpxEGuLhzgmt9lZ','Lending Licenses','2018-04-15'),(4,'Terms of Service','QrfbMOUWpdYNxjLFz8G1m6t3wi0X2RKEZVC9ySka','Terms of Service','2018-04-15'),(5,'Privacy Policy','rjHKhmsNezT2OJBAoQq0yU1tL5F34MCwgIiZEc7x','Privacy Policy','2018-04-15'),(6,'Support','gZbBVMxnfzYLlC2AOk609Q7yWpaSjmJHuRXosr58','Support','2018-04-15'),(7,'How It Works','l1BbMd6H2D3rkFnjU9LgCH2D3rkFnjU9BbMd6H2D3r','How It Works','2018-04-15'),(8,'Disclaimers','CTbzS9IrWkNU7VM3HGZYjp6iwmfyXDOQgtsP8FEc','Disclaimers','2018-04-15');
/*!40000 ALTER TABLE `xin_job_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_job_type`
--

LOCK TABLES `xin_job_type` WRITE;
/*!40000 ALTER TABLE `xin_job_type` DISABLE KEYS */;
INSERT INTO `xin_job_type` VALUES (1,1,'Full Time','full-time','22-03-2018 02:18:48'),(2,1,'Part Time','part-time','16-04-2018 06:29:45'),(3,1,'Internship','internship','16-04-2018 06:30:06'),(4,1,'Freelance','freelance','16-04-2018 06:30:21');
/*!40000 ALTER TABLE `xin_job_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_jobs`
--

LOCK TABLES `xin_jobs` WRITE;
/*!40000 ALTER TABLE `xin_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_kpi_incidental`
--

LOCK TABLES `xin_kpi_incidental` WRITE;
/*!40000 ALTER TABLE `xin_kpi_incidental` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_kpi_incidental` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_kpi_maingoals`
--

LOCK TABLES `xin_kpi_maingoals` WRITE;
/*!40000 ALTER TABLE `xin_kpi_maingoals` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_kpi_maingoals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_kpi_variable`
--

LOCK TABLES `xin_kpi_variable` WRITE;
/*!40000 ALTER TABLE `xin_kpi_variable` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_kpi_variable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_languages`
--

LOCK TABLES `xin_languages` WRITE;
/*!40000 ALTER TABLE `xin_languages` DISABLE KEYS */;
INSERT INTO `xin_languages` VALUES (1,'English','english','language_flag_1520564355.gif',1,''),(4,'Portuguese','portuguese','language_flag_1526420518.gif',1,'16-05-2018 12:41:57'),(5,'Vietnamese','vietnamese','language_flag_1526728529.gif',1,'19-05-2018 02:15:28'),(6,'Spanish','spanish','language_flag_1563906920.gif',1,'23-07-2019 11:35:20'),(7,'Svenska','swedish','language_flag_1564007195.gif',1,'25-07-2019 03:26:35'),(8,'Thailand','thailand','language_flag_1564007402.gif',1,'25-07-2019 03:30:02'),(9,'Indonesian','indonesian','language_flag_1564054894.gif',1,'25-07-2019 04:41:33'),(10,'Italiano','italian','language_flag_1564058198.gif',1,'25-07-2019 05:36:37'),(11,'Deutsch','dutch','language_flag_1564058280.gif',1,'25-07-2019 05:37:59'),(12,'Turkish','turkish','language_flag_1564058565.gif',1,'25-07-2019 05:42:44'),(13,'French','french','language_flag_1564058638.gif',1,'25-07-2019 05:43:58'),(14,'Russian','russian','language_flag_1564058661.gif',1,'25-07-2019 05:44:20'),(15,'Romanian','romanian','language_flag_1564058689.gif',1,'25-07-2019 05:44:49'),(16,'Irish','irish','language_flag_1564171301.gif',1,'27-07-2019 01:01:41'),(17,'Chinese','chinese','language_flag_1592785239.gif',1,'22-06-2020 03:20:38'),(18,'Japanese','japanese','language_flag_1592785267.gif',1,'22-06-2020 03:21:06'),(19,'Arabic','arabic','language_flag_1592785279.gif',1,'22-06-2020 03:21:19');
/*!40000 ALTER TABLE `xin_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_leads`
--

LOCK TABLES `xin_leads` WRITE;
/*!40000 ALTER TABLE `xin_leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_leads_followup`
--

LOCK TABLES `xin_leads_followup` WRITE;
/*!40000 ALTER TABLE `xin_leads_followup` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_leads_followup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_leave_applications`
--

LOCK TABLES `xin_leave_applications` WRITE;
/*!40000 ALTER TABLE `xin_leave_applications` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_leave_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_leave_type`
--

LOCK TABLES `xin_leave_type` WRITE;
/*!40000 ALTER TABLE `xin_leave_type` DISABLE KEYS */;
INSERT INTO `xin_leave_type` VALUES (1,1,'Casual Leave','3',1,'19-03-2018 07:52:20'),(2,1,'Medical','2',1,'19-03-2018 07:52:30');
/*!40000 ALTER TABLE `xin_leave_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_make_payment`
--

LOCK TABLES `xin_make_payment` WRITE;
/*!40000 ALTER TABLE `xin_make_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_make_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_meetings`
--

LOCK TABLES `xin_meetings` WRITE;
/*!40000 ALTER TABLE `xin_meetings` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_meetings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_office_location`
--

LOCK TABLES `xin_office_location` WRITE;
/*!40000 ALTER TABLE `xin_office_location` DISABLE KEYS */;
INSERT INTO `xin_office_location` VALUES (1,1,5,0,'Riyadh Branch','mainoffice@hrsale.com','1234567890','1234567890','Address Line 1','Address Line 2','City','State','12345',190,1,'28-02-2018',1);
/*!40000 ALTER TABLE `xin_office_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_office_shift`
--

LOCK TABLES `xin_office_shift` WRITE;
/*!40000 ALTER TABLE `xin_office_shift` DISABLE KEYS */;
INSERT INTO `xin_office_shift` VALUES (1,1,'Morning Shift',1,'08:00','18:00','03:00','18:00','08:00','18:00','08:00','18:00','08:00','18:00','','','','','2018-02-28');
/*!40000 ALTER TABLE `xin_office_shift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_payment_method`
--

LOCK TABLES `xin_payment_method` WRITE;
/*!40000 ALTER TABLE `xin_payment_method` DISABLE KEYS */;
INSERT INTO `xin_payment_method` VALUES (1,1,'Cash','30','','23-04-2018 05:13:52'),(2,1,'Paypal','40','1','12-08-2018 02:18:50'),(3,1,'Bank','30','1231232','12-08-2018 02:18:57');
/*!40000 ALTER TABLE `xin_payment_method` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_payroll_custom_fields`
--

LOCK TABLES `xin_payroll_custom_fields` WRITE;
/*!40000 ALTER TABLE `xin_payroll_custom_fields` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_payroll_custom_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_performance_appraisal`
--

LOCK TABLES `xin_performance_appraisal` WRITE;
/*!40000 ALTER TABLE `xin_performance_appraisal` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_performance_appraisal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_performance_appraisal_options`
--

LOCK TABLES `xin_performance_appraisal_options` WRITE;
/*!40000 ALTER TABLE `xin_performance_appraisal_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_performance_appraisal_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_performance_indicator`
--

LOCK TABLES `xin_performance_indicator` WRITE;
/*!40000 ALTER TABLE `xin_performance_indicator` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_performance_indicator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_performance_indicator_options`
--

LOCK TABLES `xin_performance_indicator_options` WRITE;
/*!40000 ALTER TABLE `xin_performance_indicator_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_performance_indicator_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_project_variations`
--

LOCK TABLES `xin_project_variations` WRITE;
/*!40000 ALTER TABLE `xin_project_variations` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_project_variations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_projects`
--

LOCK TABLES `xin_projects` WRITE;
/*!40000 ALTER TABLE `xin_projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_projects_attachment`
--

LOCK TABLES `xin_projects_attachment` WRITE;
/*!40000 ALTER TABLE `xin_projects_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_projects_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_projects_bugs`
--

LOCK TABLES `xin_projects_bugs` WRITE;
/*!40000 ALTER TABLE `xin_projects_bugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_projects_bugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_projects_discussion`
--

LOCK TABLES `xin_projects_discussion` WRITE;
/*!40000 ALTER TABLE `xin_projects_discussion` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_projects_discussion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_projects_timelogs`
--

LOCK TABLES `xin_projects_timelogs` WRITE;
/*!40000 ALTER TABLE `xin_projects_timelogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_projects_timelogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_qualification_education_level`
--

LOCK TABLES `xin_qualification_education_level` WRITE;
/*!40000 ALTER TABLE `xin_qualification_education_level` DISABLE KEYS */;
INSERT INTO `xin_qualification_education_level` VALUES (1,1,'High School Diploma / GED','09-05-2018 03:11:59');
/*!40000 ALTER TABLE `xin_qualification_education_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_qualification_language`
--

LOCK TABLES `xin_qualification_language` WRITE;
/*!40000 ALTER TABLE `xin_qualification_language` DISABLE KEYS */;
INSERT INTO `xin_qualification_language` VALUES (1,1,'English','09-05-2018 03:12:03');
/*!40000 ALTER TABLE `xin_qualification_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_qualification_skill`
--

LOCK TABLES `xin_qualification_skill` WRITE;
/*!40000 ALTER TABLE `xin_qualification_skill` DISABLE KEYS */;
INSERT INTO `xin_qualification_skill` VALUES (1,1,'jQuery','09-05-2018 03:12:08');
/*!40000 ALTER TABLE `xin_qualification_skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_quoted_projects`
--

LOCK TABLES `xin_quoted_projects` WRITE;
/*!40000 ALTER TABLE `xin_quoted_projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_quoted_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_quoted_projects_attachment`
--

LOCK TABLES `xin_quoted_projects_attachment` WRITE;
/*!40000 ALTER TABLE `xin_quoted_projects_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_quoted_projects_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_quoted_projects_discussion`
--

LOCK TABLES `xin_quoted_projects_discussion` WRITE;
/*!40000 ALTER TABLE `xin_quoted_projects_discussion` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_quoted_projects_discussion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_quoted_projects_timelogs`
--

LOCK TABLES `xin_quoted_projects_timelogs` WRITE;
/*!40000 ALTER TABLE `xin_quoted_projects_timelogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_quoted_projects_timelogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_recruitment_pages`
--

LOCK TABLES `xin_recruitment_pages` WRITE;
/*!40000 ALTER TABLE `xin_recruitment_pages` DISABLE KEYS */;
INSERT INTO `xin_recruitment_pages` VALUES (1,'Pages','Nulla dignissim gravida\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \n\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(2,'About Us','Nulla dignissim gravida\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \n\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(3,'Career Services','Career Services',1,''),(4,'Success Stories','Success Stories',1,'');
/*!40000 ALTER TABLE `xin_recruitment_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_recruitment_subpages`
--

LOCK TABLES `xin_recruitment_subpages` WRITE;
/*!40000 ALTER TABLE `xin_recruitment_subpages` DISABLE KEYS */;
INSERT INTO `xin_recruitment_subpages` VALUES (1,1,'Sub Menu 1','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(2,1,'Sub Menu 2','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(3,1,'Sub Menu 3','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(4,1,'Sub Menu 4','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(5,1,'Sub Menu 5','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,''),(6,1,'Sub Menu 6','Nulla dignissim gravida\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa. Etiam non fermentum augue, vel posuere sapien. \r\n\r\nVivamus aliquet eros bibendum ipsum euismod, non interdum dui elementum. Morbi facilisis hendrerit nisi, a volutpat velit. Donec sed malesuada felis. Nulla facilisi. Vivamus a velit vel orci euismod maximus. Praesent ut blandit orci, eget suscipit lorem. Aenean dignissim, augue at porta suscipit, est enim euismod mi, a rhoncus mi lacus ac nibh. Ut pharetra ligula sed tortor congue, pellentesque ultricies augue tincidunt.',1,'');
/*!40000 ALTER TABLE `xin_recruitment_subpages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_allowances`
--

LOCK TABLES `xin_salary_allowances` WRITE;
/*!40000 ALTER TABLE `xin_salary_allowances` DISABLE KEYS */;
INSERT INTO `xin_salary_allowances` VALUES (1,1,0,'Cost of Living Allowance','100',NULL),(2,1,0,'Housing Allowance','200',NULL),(3,1,0,'Market Adjustment','200',NULL),(4,1,0,'Meal Allowance','100',NULL),(5,1,0,'Transportation Allowance','200',NULL);
/*!40000 ALTER TABLE `xin_salary_allowances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_bank_allocation`
--

LOCK TABLES `xin_salary_bank_allocation` WRITE;
/*!40000 ALTER TABLE `xin_salary_bank_allocation` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_bank_allocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_commissions`
--

LOCK TABLES `xin_salary_commissions` WRITE;
/*!40000 ALTER TABLE `xin_salary_commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_loan_deductions`
--

LOCK TABLES `xin_salary_loan_deductions` WRITE;
/*!40000 ALTER TABLE `xin_salary_loan_deductions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_loan_deductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_other_payments`
--

LOCK TABLES `xin_salary_other_payments` WRITE;
/*!40000 ALTER TABLE `xin_salary_other_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_other_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_overtime`
--

LOCK TABLES `xin_salary_overtime` WRITE;
/*!40000 ALTER TABLE `xin_salary_overtime` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_allowances`
--

LOCK TABLES `xin_salary_payslip_allowances` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_allowances` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_allowances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_commissions`
--

LOCK TABLES `xin_salary_payslip_commissions` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_commissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_commissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_loan`
--

LOCK TABLES `xin_salary_payslip_loan` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_loan` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_loan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_other_payments`
--

LOCK TABLES `xin_salary_payslip_other_payments` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_other_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_other_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_overtime`
--

LOCK TABLES `xin_salary_payslip_overtime` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_overtime` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslip_statutory_deductions`
--

LOCK TABLES `xin_salary_payslip_statutory_deductions` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslip_statutory_deductions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_payslip_statutory_deductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_payslips`
--

LOCK TABLES `xin_salary_payslips` WRITE;
/*!40000 ALTER TABLE `xin_salary_payslips` DISABLE KEYS */;
INSERT INTO `xin_salary_payslips` VALUES (1,'47dNXfhSQstnamVYxelI6zbM2Oc0JBGTZRwFApPW',5,2,1,0,10,'2020-07',1,'full_monthly','1000','',0,'0','0','0','0','0','0','0','0','0','','1000.00','','',0,'',1,'10-07-2020',2,'10-07-2020 06:04:31');
/*!40000 ALTER TABLE `xin_salary_payslips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_statutory_deductions`
--

LOCK TABLES `xin_salary_statutory_deductions` WRITE;
/*!40000 ALTER TABLE `xin_salary_statutory_deductions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_salary_statutory_deductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_salary_templates`
--

LOCK TABLES `xin_salary_templates` WRITE;
/*!40000 ALTER TABLE `xin_salary_templates` DISABLE KEYS */;
INSERT INTO `xin_salary_templates` VALUES (1,1,'Monthly','2500','','50','60','70','80','40','20','30','2760','260','90','2670',1,'22-03-2018 01:40:06');
/*!40000 ALTER TABLE `xin_salary_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_security_level`
--

LOCK TABLES `xin_security_level` WRITE;
/*!40000 ALTER TABLE `xin_security_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_security_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_sub_departments`
--

LOCK TABLES `xin_sub_departments` WRITE;
/*!40000 ALTER TABLE `xin_sub_departments` DISABLE KEYS */;
INSERT INTO `xin_sub_departments` VALUES (8,1,'Manager','2019-02-15 00:22:13'),(9,1,'Lead Manager','2019-02-15 00:22:21'),(10,2,'Accountant','2019-02-15 00:22:26');
/*!40000 ALTER TABLE `xin_sub_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_support_ticket_files`
--

LOCK TABLES `xin_support_ticket_files` WRITE;
/*!40000 ALTER TABLE `xin_support_ticket_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_support_ticket_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_support_tickets`
--

LOCK TABLES `xin_support_tickets` WRITE;
/*!40000 ALTER TABLE `xin_support_tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_support_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_support_tickets_employees`
--

LOCK TABLES `xin_support_tickets_employees` WRITE;
/*!40000 ALTER TABLE `xin_support_tickets_employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_support_tickets_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_system_setting`
--

LOCK TABLES `xin_system_setting` WRITE;
/*!40000 ALTER TABLE `xin_system_setting` DISABLE KEYS */;
INSERT INTO `xin_system_setting` VALUES (1,'NAMA PT','IDR - Rp',1,'IDR - Rp','symbol','Prefix','toast-top-center','true','true','no','username','M-d-Y','yes','yes','yes','yes','yes','yes','yes','yes','yes','','yes','yes','yes','yes','1','job_logo_1520612591.png','payroll_logo_1534786335.jpg',0,'employee_id','yes','yes','yes','doc,docx,pdf','Customer Experience,Marketing,Administration','Professionalism,Integrity,Attendance','both','yes','yes','yes','yes','yes','yes','yes','yes','yes','sidebar_layout_hrsale','','fixed-sidebar','boxed_layout_hrsale','','skin-default','fadeInDown','tada','tada','company','','','indonesian','','Asia/Jakarta','::1','','AIzaSyB3gP8H3eypotNeoEtezbRiF_f8Zh_p4ck','true','true','yes','yes','true','true','true','true','true','true','true','true','true','true','true','true','','yes','username','demo@gmail.com','yes','yes','sk_test_2XEyr1hQFGByITfQjSwFqNtm','pk_test_zVFISCqeQPnniD0ywHBHikMd','yes',1,0,1,'','',0,0,0,NULL,NULL,'yes','1.0.3','2018-03-28','2018-03-28 04:27:32');
/*!40000 ALTER TABLE `xin_system_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_task_categories`
--

LOCK TABLES `xin_task_categories` WRITE;
/*!40000 ALTER TABLE `xin_task_categories` DISABLE KEYS */;
INSERT INTO `xin_task_categories` VALUES (5,'Modelling','17-12-2019 10:44:48'),(6,'Fabrication drawings','17-12-2019 10:44:55'),(7,'Erection drawings','17-12-2019 10:45:01'),(8,'As built drawings','17-12-2019 10:45:06'),(9,'R & D and RFI Related','17-12-2019 10:45:12'),(10,'Checking','17-12-2019 10:45:22');
/*!40000 ALTER TABLE `xin_task_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tasks`
--

LOCK TABLES `xin_tasks` WRITE;
/*!40000 ALTER TABLE `xin_tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tasks_attachment`
--

LOCK TABLES `xin_tasks_attachment` WRITE;
/*!40000 ALTER TABLE `xin_tasks_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_tasks_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tasks_comments`
--

LOCK TABLES `xin_tasks_comments` WRITE;
/*!40000 ALTER TABLE `xin_tasks_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_tasks_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tax_types`
--

LOCK TABLES `xin_tax_types` WRITE;
/*!40000 ALTER TABLE `xin_tax_types` DISABLE KEYS */;
INSERT INTO `xin_tax_types` VALUES (1,'No Tax','0','fixed','test','25-05-2018'),(2,'IVU','2','fixed','test','25-05-2018'),(3,'VAT','5','percentage','testttt','25-05-2018');
/*!40000 ALTER TABLE `xin_tax_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_termination_type`
--

LOCK TABLES `xin_termination_type` WRITE;
/*!40000 ALTER TABLE `xin_termination_type` DISABLE KEYS */;
INSERT INTO `xin_termination_type` VALUES (1,1,'Voluntary Termination','22-03-2018 01:38:41');
/*!40000 ALTER TABLE `xin_termination_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_theme_settings`
--

LOCK TABLES `xin_theme_settings` WRITE;
/*!40000 ALTER TABLE `xin_theme_settings` DISABLE KEYS */;
INSERT INTO `xin_theme_settings` VALUES (1,'false','true','false','breadcrumb-transparent','footer-light','4','fadeInDown','template_1','dashboard_1','true','login_page_2','fa-check-circle-o','','','','true','false','false','false','basic_form',1,'bg-primary','bg-blue-grey','menu-dark','true','PERUSAHAN','t2b','true','true','');
/*!40000 ALTER TABLE `xin_theme_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tickets_attachment`
--

LOCK TABLES `xin_tickets_attachment` WRITE;
/*!40000 ALTER TABLE `xin_tickets_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_tickets_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_tickets_comments`
--

LOCK TABLES `xin_tickets_comments` WRITE;
/*!40000 ALTER TABLE `xin_tickets_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_tickets_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_trainers`
--

LOCK TABLES `xin_trainers` WRITE;
/*!40000 ALTER TABLE `xin_trainers` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_trainers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_training`
--

LOCK TABLES `xin_training` WRITE;
/*!40000 ALTER TABLE `xin_training` DISABLE KEYS */;
/*!40000 ALTER TABLE `xin_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_training_types`
--

LOCK TABLES `xin_training_types` WRITE;
/*!40000 ALTER TABLE `xin_training_types` DISABLE KEYS */;
INSERT INTO `xin_training_types` VALUES (1,1,'Job Training','19-03-2018 06:45:47',1),(2,1,'Workshop','19-03-2018 06:45:51',1);
/*!40000 ALTER TABLE `xin_training_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_travel_arrangement_type`
--

LOCK TABLES `xin_travel_arrangement_type` WRITE;
/*!40000 ALTER TABLE `xin_travel_arrangement_type` DISABLE KEYS */;
INSERT INTO `xin_travel_arrangement_type` VALUES (1,1,'Corporation',1,'19-03-2018 08:45:17'),(2,1,'Guest House',1,'19-03-2018 08:45:27');
/*!40000 ALTER TABLE `xin_travel_arrangement_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_user_roles`
--

LOCK TABLES `xin_user_roles` WRITE;
/*!40000 ALTER TABLE `xin_user_roles` DISABLE KEYS */;
INSERT INTO `xin_user_roles` VALUES (1,1,'Super Admin','1','0,103,13,13,201,202,203,372,373,393,393,394,395,396,422,351,421,88,23,23,204,205,206,231,400,22,445,465,12,14,14,207,208,209,232,15,15,210,211,212,233,16,16,213,214,215,234,406,407,408,17,17,216,217,218,235,18,18,219,220,221,236,19,19,222,223,224,237,20,20,225,226,227,238,21,21,228,229,230,239,2,3,3,240,241,242,4,4,243,244,245,249,5,5,246,247,248,6,6,250,251,252,11,11,254,255,256,257,9,9,258,259,260,96,442,24,25,25,262,263,264,265,26,26,266,267,268,97,98,98,269,270,271,272,99,99,273,274,275,276,27,28,28,397,423,10,10,253,261,29,29,381,30,30,277,278,279,310,401,401,402,403,31,7,7,280,281,282,2822,311,8,8,283,284,285,46,46,287,288,289,290,48,49,49,291,292,293,50,51,51,294,295,387,52,296,32,36,36,313,314,404,405,40,41,41,298,299,300,301,42,42,302,303,304,305,43,43,306,307,308,309,104,44,44,315,316,317,318,312,90,91,94,424,425,45,45,319,320,321,322,122,122,331,332,333,106,107,107,334,335,336,108,108,338,339,340,47,53,54,54,341,342,343,344,55,55,345,346,347,56,56,348,349,350,57,60,61,62,63,93,118,297,431,432,433,434,435,436,437,438,439,440,441,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,71,286,72,72,352,353,354,73,74,75,75,355,356,357,76,76,358,359,360,77,77,361,362,363,78,37,37,391,79,80,80,364,365,366,81,81,367,368,369,82,83,84,85,86,87,119,119,323,324,325,326,410,411,412,413,414,420,415,416,417,418,419,121,121,120,328,329,330,426,427,428,429,430,89,89,370,371,95,92,443,444,446,110,111,112,113,114,115,116,117,409','28-02-2018'),(2,1,'Employee','2','0,445,465,14,207,208,15,210,211,16,213,214,17,216,217,19,222,223,224,20,225,226,227,11,254,255,9,258,259,25,262,263,97,98,98,269,270,271,272,99,99,273,274,275,276,28,10,261,29,401,402,8,283,46,46,287,288,289,290,50,43,306,307,44,315,316,317,312,90,91,94,424,425,45,319,320,321,106,107,107,334,335,336,108,108,338,339,340,47,54,341,342,343,55,55,345,346,347,75,355,356,76,358,359,37,95,92,446','21-03-2018'),(3,1,'Pengelola','1','0,103,13,13,201,202,203,372,373,393,393,394,395,396,422,351,421,88,23,23,204,205,206,231,400,22,445,465,12,14,14,207,208,209,232,15,15,210,211,212,233,16,16,213,214,215,234,406,407,408,17,17,216,217,218,235,18,18,219,220,221,236,19,19,222,223,224,237,20,20,225,226,227,238,21,21,228,229,230,239,2,3,3,240,241,242,4,4,243,244,245,249,5,5,246,247,248,6,6,250,251,252,11,11,254,255,256,257,9,9,258,259,260,96,442,24,25,25,262,263,264,265,26,26,266,267,268,97,98,98,269,270,271,272,99,99,273,274,275,276,27,28,28,397,423,10,10,253,261,29,29,381,30,30,277,278,279,310,401,401,402,403,31,7,7,280,281,282,2822,311,8,8,283,284,285,46,46,287,288,289,290,48,49,49,291,292,293,50,51,51,294,295,52,296,32,36,36,313,314,404,405,40,41,41,298,299,300,301,42,42,302,303,304,305,43,43,306,307,308,309,104,44,44,315,316,317,318,312,45,45,319,320,321,322,90,91,94,424,425,122,122,331,332,333,106,107,107,334,335,336,108,108,338,339,340,47,53,54,54,341,342,343,344,55,55,345,346,347,56,56,348,349,350,57,60,61,62,63,93,118,297,431,432,433,434,435,436,437,438,439,440,441,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,71,286,72,72,352,353,354,73,74,75,75,355,356,357,76,76,358,359,360,77,77,361,362,363,78,37,37,391,79,80,80,364,365,366,81,81,367,368,369,82,83,84,85,86,87,119,119,323,324,325,326,410,411,412,413,414,420,415,416,417,418,419,121,121,120,328,329,330,426,427,428,429,430,89,89,370,371,95,92,443,444,446,110,111,112,113,114,115,116,117,409','27-01-2024'),(4,1,'Administrasi Umum','1','0,103,13,13,201,202,203,372,373,393,393,394,395,396,422,351,421,88,23,23,204,205,206,231,400,22,445,465,12,14,14,207,208,209,232,15,15,210,211,212,233,16,16,213,214,215,234,406,407,408,17,17,216,217,218,235,18,18,219,220,221,236,19,19,222,223,224,237,20,20,225,226,227,238,21,21,228,229,230,239,2,3,3,240,241,242,4,4,243,244,245,249,5,5,246,247,248,6,6,250,251,252,11,11,254,255,256,257,9,9,258,259,260,96,442,24,25,25,262,263,264,265,26,26,266,267,268,97,98,98,269,270,271,272,99,99,273,274,275,276,27,28,28,397,423,10,10,253,261,29,29,381,30,30,277,278,279,310,401,401,402,403,31,7,7,280,281,282,2822,311,8,8,283,284,285,46,46,287,288,289,290,48,49,49,291,292,293,50,51,51,294,295,52,296,32,36,36,313,314,404,405,40,41,41,298,299,300,301,42,42,302,303,304,305,43,43,306,307,308,309,104,44,44,315,316,317,318,312,45,45,319,320,321,322,90,91,94,424,425,122,122,331,332,333,106,107,107,334,335,336,108,108,338,339,340,47,53,54,54,341,342,343,344,55,55,345,346,347,56,56,348,349,350,57,60,61,62,63,93,118,297,431,432,433,434,435,436,437,438,439,440,441,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,71,286,72,72,352,353,354,73,74,75,75,355,356,357,76,76,358,359,360,77,77,361,362,363,78,37,37,391,79,80,80,364,365,366,81,81,367,368,369,82,83,84,85,86,87,119,119,323,324,325,326,410,411,412,413,414,420,415,416,417,418,419,121,121,120,328,329,330,426,427,428,429,430,89,89,370,371,95,92,443,444,446,110,111,112,113,114,115,116,117,409','29-01-2024'),(5,1,'Kerelawanan','1','0,103,13,13,201,202,203,372,373,393,393,394,395,396,422,351,421,88,23,23,204,205,206,231,400,22,445,465,12,14,14,207,208,209,232,15,15,210,211,212,233,16,16,213,214,215,234,406,407,408,17,17,216,217,218,235,18,18,219,220,221,236,19,19,222,223,224,237,20,20,225,226,227,238,21,21,228,229,230,239,2,3,3,240,241,242,4,4,243,244,245,249,5,5,246,247,248,6,6,250,251,252,11,11,254,255,256,257,9,9,258,259,260,96,442,24,25,25,262,263,264,265,26,26,266,267,268,97,98,98,269,270,271,272,99,99,273,274,275,276,27,28,28,397,423,10,10,253,261,29,29,381,30,30,277,278,279,310,401,401,402,403,31,7,7,280,281,282,2822,311,8,8,283,284,285,46,46,287,288,289,290,48,49,49,291,292,293,50,51,51,294,295,52,296,32,36,36,313,314,404,405,40,41,41,298,299,300,301,42,42,302,303,304,305,43,43,306,307,308,309,104,44,44,315,316,317,318,312,45,45,319,320,321,322,90,91,94,424,425,122,122,331,332,333,106,107,107,334,335,336,108,108,338,339,340,47,53,54,54,341,342,343,344,55,55,345,346,347,56,56,348,349,350,57,60,61,62,63,93,118,297,431,432,433,434,435,436,437,438,439,440,441,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,71,286,72,72,352,353,354,73,74,75,75,355,356,357,76,76,358,359,360,77,77,361,362,363,78,37,37,391,79,80,80,364,365,366,81,81,367,368,369,82,83,84,85,86,87,119,119,323,324,325,326,410,411,412,413,414,420,415,416,417,418,419,121,121,120,328,329,330,426,427,428,429,430,89,89,370,371,95,92,443,444,446,110,111,112,113,114,115,116,117,409','29-01-2024'),(6,1,'Pelaksana','1','0,103,13,13,201,202,203,372,373,393,393,394,395,396,422,351,421,88,23,23,204,205,206,231,400,22,445,465,12,14,14,207,208,209,232,15,15,210,211,212,233,16,16,213,214,215,234,406,407,408,17,17,216,217,218,235,18,18,219,220,221,236,19,19,222,223,224,237,20,20,225,226,227,238,21,21,228,229,230,239,2,3,3,240,241,242,4,4,243,244,245,249,5,5,246,247,248,6,6,250,251,252,11,11,254,255,256,257,9,9,258,259,260,96,442,24,25,25,262,263,264,265,26,26,266,267,268,97,98,98,269,270,271,272,99,99,273,274,275,276,27,28,28,397,423,10,10,253,261,29,29,381,30,30,277,278,279,310,401,401,402,403,31,7,7,280,281,282,2822,311,8,8,283,284,285,46,46,287,288,289,290,48,49,49,291,292,293,50,51,51,294,295,52,296,32,36,36,313,314,404,405,40,41,41,298,299,300,301,42,42,302,303,304,305,43,43,306,307,308,309,104,44,44,315,316,317,318,312,45,45,319,320,321,322,90,91,94,424,425,122,122,331,332,333,106,107,107,334,335,336,108,108,338,339,340,47,53,54,54,341,342,343,344,55,55,345,346,347,56,56,348,349,350,57,60,61,62,63,93,118,297,431,432,433,434,435,436,437,438,439,440,441,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,71,286,72,72,352,353,354,73,74,75,75,355,356,357,76,76,358,359,360,77,77,361,362,363,78,37,37,391,79,80,80,364,365,366,81,81,367,368,369,82,83,84,85,86,87,119,119,323,324,325,326,410,411,412,413,414,420,415,416,417,418,419,121,121,120,328,329,330,426,427,428,429,430,89,89,370,371,95,92,443,444,446,110,111,112,113,114,115,116,117,409','29-01-2024');
/*!40000 ALTER TABLE `xin_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_users`
--

LOCK TABLES `xin_users` WRITE;
/*!40000 ALTER TABLE `xin_users` DISABLE KEYS */;
INSERT INTO `xin_users` VALUES (1,'administrator','Thomas','Fleming','','',2,'test1@test.com','admin','test123','user_1520720863.jpg','profile_background_1505458640.jpg','12333332','Male','Address Line 1','Address Line 2','City','State','12345',230,'15-04-2018 07:36:12','::1',0,1,'14-09-2017 10:02:54'),(2,'administrator','Main','Office','','',2,'test@test.com','test','test123','user_1523821315.jpg','','1234567890','Male','Address Line 1','Address Line 2','City','State','11461',190,'23-04-2018 05:34:47','::1',0,1,'15-04-2018 06:13:08'),(4,'administrator','Fiona','Grace','HRSALE','employer_1524025572.jpg',1,'employer@test.com','','test123','','','1234567890','Male','Address Line 1','Address Line 2','City','State','11461',190,'23-04-2018 05:34:54','::1',0,1,'18-04-2018 07:26:12');
/*!40000 ALTER TABLE `xin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `xin_warning_type`
--

LOCK TABLES `xin_warning_type` WRITE;
/*!40000 ALTER TABLE `xin_warning_type` DISABLE KEYS */;
INSERT INTO `xin_warning_type` VALUES (1,1,'First Written Warning','22-03-2018 01:38:02');
/*!40000 ALTER TABLE `xin_warning_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-31 19:57:23
