<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-24 04:28:34 --> Severity: Error --> Call to a member function insert_record() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 251
ERROR - 2020-07-24 04:29:31 --> Query error: Unknown column 'order_item_id' in 'field list' - Invalid query: INSERT INTO `ah_shop_order` (`order_user_id`, `order_status`, `order_amount`, `order_type`, `order_item_id`, `order_product_id`, `order_product_name`, `order_product_img`) VALUES ('14', 0, NULL, 'package', '1', NULL, 'Florida - Certified Nursing Assistant', 'http://localhost/advance_health_care/assets/uploads/package/img32159549069778.jpg')
ERROR - 2020-07-24 04:31:34 --> Query error: Column 'order_amount' cannot be null - Invalid query: INSERT INTO `ah_shop_order` (`order_user_id`, `order_status`, `order_amount`, `order_type`, `order_product_id`, `order_product_name`, `order_product_img`) VALUES ('14', 0, NULL, 'package', NULL, 'Florida - Certified Nursing Assistant', 'http://localhost/advance_health_care/assets/uploads/package/img32159549069778.jpg')
ERROR - 2020-07-24 04:33:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 04:35:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 04:35:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 04:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 04:38:28 --> Query error: Column 'item_price' cannot be null - Invalid query: INSERT INTO `ah_shop_item` (`item_order_id`, `item_product_id`, `item_product_name`, `item_product_img`, `item_qty`, `item_type`, `item_price`) VALUES (6, '1', 'Domestic Violence', 'http://localhost/advance_health_care/assets/uploads/course/img5159422230631.jpg', 1, 2, NULL)
ERROR - 2020-07-24 04:43:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 04:45:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 3 - Invalid query: SELECT *
FROM `ah_package_course`
JOIN `ah_course` ON `ah_course`.`course_id` = `ah_package_course`.`pc_course_id` and `pc_package_id` = 
ERROR - 2020-07-24 12:54:21 --> Severity: Error --> Call to a member function insert_record() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\payment\Paypal.php 175
ERROR - 2020-07-24 12:54:30 --> Query error: Unknown column 'ah_shop_order.order_item_id' in 'on clause' - Invalid query: SELECT order_id, order_payment_type, order_ondate as order_date, order_payment_status, order_status, order_amount, order_discount_amount, course_name, course_identity, course_image, course_image_path
FROM `ah_shop_order`
LEFT JOIN `ah_course` ON `ah_course`.`course_id` = `ah_shop_order`.`order_item_id`
WHERE `order_user_id` = '14'
AND `ah_shop_order`.`order_status` = 1
GROUP BY `order_id`
ERROR - 2020-07-24 13:36:31 --> Severity: Error --> Function name must be a string E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\_order.php 46
ERROR - 2020-07-24 13:36:35 --> Severity: Error --> Function name must be a string E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\_order.php 46
ERROR - 2020-07-24 10:38:36 --> 404 Page Not Found: Profile/profile.png
ERROR - 2020-07-24 10:38:45 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 10:38:58 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 13:39:19 --> Severity: 4096 --> Object of class Model_course could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 13:39:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 13:39:19 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 11:03:13 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:05:32 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:05:35 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:05:38 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:05:59 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:06:06 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:06:23 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:09:13 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:09:45 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 14:10:02 --> Query error: Unknown column 'lecture_sub_title' in 'field list' - Invalid query: INSERT INTO `ah_lecture` (`lecture_course_id`, `lecture_name`, `lecture_sub_title`, `lecture_desc`, `lecture_feature`, `lecture_status`) VALUES ('1', 'PHARMACOLOGY: INSULIN', 'DURATION: 4 HOURS', '&lt;h5&gt;Lecture 1.0 Introduction&lt;/h5&gt;\r\n\r\n&lt;p&gt;Insulin is a pancreatic hormone that is secreted by beta-cells of the islets of Langerhans and is essential for the metabolism of glucose. Insulin regulates carbohydrate, fat and protein metabolism by several mechanisms:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin promotes the storage and inhibits the breakdown of glucose, fat and amino acids&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin lowers glucose concentrations by facilitating the uptake of glucose in muscle and adipose tissue&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin inhibits hepatic glucose production (glycogenolysis and gluconeogenesis)&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin regulates fat metabolism by enhancing the storage of fat and inhibiting the mobilization of fat for energy in adipose tissues&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin is involved in the regulation of protein metabolism by increasing protein synthesis and inhibiting proteolysis in muscle tissue&lt;/p&gt;\r\n &lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Diabetes mellitus type 1 is caused by insulin deficiency while diabetes type 2 is caused by a combination of insulin deficiency and resistance. Biosynthetic insulin can be used in patients with diabetes to temporarily restore their ability to use carbohydrates, fats and proteins and to convert glycogen to fat.&lt;/p&gt;', 0, 1)
ERROR - 2020-07-24 14:10:17 --> Query error: Unknown column 'lecture_feature' in 'field list' - Invalid query: INSERT INTO `ah_lecture` (`lecture_course_id`, `lecture_name`, `lecture_sub_title`, `lecture_desc`, `lecture_feature`, `lecture_status`) VALUES ('1', 'PHARMACOLOGY: INSULIN', 'DURATION: 4 HOURS', '&lt;h5&gt;Lecture 1.0 Introduction&lt;/h5&gt;\r\n\r\n&lt;p&gt;Insulin is a pancreatic hormone that is secreted by beta-cells of the islets of Langerhans and is essential for the metabolism of glucose. Insulin regulates carbohydrate, fat and protein metabolism by several mechanisms:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin promotes the storage and inhibits the breakdown of glucose, fat and amino acids&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin lowers glucose concentrations by facilitating the uptake of glucose in muscle and adipose tissue&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin inhibits hepatic glucose production (glycogenolysis and gluconeogenesis)&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin regulates fat metabolism by enhancing the storage of fat and inhibiting the mobilization of fat for energy in adipose tissues&lt;/p&gt;\r\n &lt;/li&gt;\r\n &lt;li&gt;\r\n &lt;p&gt;Insulin is involved in the regulation of protein metabolism by increasing protein synthesis and inhibiting proteolysis in muscle tissue&lt;/p&gt;\r\n &lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Diabetes mellitus type 1 is caused by insulin deficiency while diabetes type 2 is caused by a combination of insulin deficiency and resistance. Biosynthetic insulin can be used in patients with diabetes to temporarily restore their ability to use carbohydrates, fats and proteins and to convert glycogen to fat.&lt;/p&gt;', 0, 1)
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:10:26 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:10:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:10:26 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:10:33 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:10:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:10:33 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:11:50 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:11:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:11:50 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:12:26 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:12:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:12:26 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:12:39 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:12:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:12:39 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 11:13:45 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:13:47 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:14:39 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:43 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:14:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:14:43 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:48 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:14:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:14:48 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:50 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:14:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:14:50 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 11:15:37 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 11:15:56 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:16:02 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:16:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:16:02 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 11:16:07 --> 404 Page Not Found: admin/Lecture/profile
ERROR - 2020-07-24 11:16:24 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:16:28 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:16:29 --> Severity: 4096 --> Object of class Model_course could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:16:29 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:16:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:16:29 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 11:17:03 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:17:19 --> Severity: 4096 --> Object of class Model_course could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:17:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:17:19 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:17:28 --> Severity: 4096 --> Object of class Model_course could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:17:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:17:28 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:18:09 --> Severity: 4096 --> Object of class Model_course could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:18:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:18:09 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:18:20 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:18:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 14:18:20 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 12:52:20 --> 404 Page Not Found: account/Course/index
ERROR - 2020-07-24 12:53:10 --> 404 Page Not Found: account/Course/index
ERROR - 2020-07-24 12:53:33 --> 404 Page Not Found: account/Course/index
ERROR - 2020-07-24 15:55:10 --> Severity: Error --> Call to a member function user_enrollcourses() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\account\Courses.php 56
ERROR - 2020-07-24 15:55:10 --> Severity: Error --> Call to a member function user_enrollcourses() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\account\Courses.php 56
ERROR - 2020-07-24 15:56:05 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 15:56:51 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 15:58:13 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 15:59:29 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 15:59:59 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:04:44 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 16:08:08 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 16:08:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 16:08:08 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 16:08:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12' at line 1 - Invalid query: SELECT *, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:08:24 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:08:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12' at line 1 - Invalid query: SELECT ah_.*, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '1' at line 1 - Invalid query: SELECT ah_*., DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:08:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'shop_item, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` I' at line 1 - Invalid query: SELECT *shop_item, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12' at line 1 - Invalid query: SELECT ah_shop_item.*, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:10:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12' at line 1 - Invalid query: SELECT ah_shop_item.*, DISTINCT(item_product_id)
FROM `ah_shop_item`
WHERE `item_order_id` IN('10', '12')
ERROR - 2020-07-24 16:10:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:11:25 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:12:49 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:15:33 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:16:22 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:16:37 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:18:37 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:19:45 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 24
ERROR - 2020-07-24 16:26:54 --> Severity: Error --> Call to a member function get_lectures() on null E:\xampp\htdocs\advance_health_care\My_application\views\account\account_area_theme\courses\index.php 26
ERROR - 2020-07-24 13:54:40 --> 404 Page Not Found: account/Course/ajax_getlectures
ERROR - 2020-07-24 13:55:16 --> 404 Page Not Found: account/Course/ajax_getlectures
ERROR - 2020-07-24 14:01:00 --> 404 Page Not Found: Lecture/index
ERROR - 2020-07-24 14:01:35 --> 404 Page Not Found: Courses/lectures
ERROR - 2020-07-24 14:37:40 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 17:37:41 --> Severity: 4096 --> Object of class Model_lecture could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:37:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 17:37:41 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 14:38:24 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 325
ERROR - 2020-07-24 17:40:07 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:40:07 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:40:07 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:40:14 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:40:14 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:40:14 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:41:53 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:41:53 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 17:41:53 --> Severity: Warning --> next() expects parameter 1 to be array, string given E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 329
ERROR - 2020-07-24 15:51:07 --> 404 Page Not Found: Profile/profile.png
ERROR - 2020-07-24 15:51:12 --> 404 Page Not Found: Profile/profile.png
ERROR - 2020-07-24 15:51:33 --> 404 Page Not Found: Quiz_instruction/index
ERROR - 2020-07-24 16:22:12 --> 404 Page Not Found: Quiz/0f28b5d49b3020afeecd95b4009adf4c
ERROR - 2020-07-24 17:08:36 --> 404 Page Not Found: Quiz/1
ERROR - 2020-07-24 20:35:40 --> Severity: Error --> Call to a member function questions_with_options() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\Course.php 381
ERROR - 2020-07-24 17:36:27 --> 404 Page Not Found: Profile/profile.png
ERROR - 2020-07-24 17:36:32 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:36:38 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:36:41 --> 404 Page Not Found: admin/Video_article/add
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:37:01 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:37:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:37:01 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:37:39 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:37:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:37:39 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:37:43 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:37:45 --> 404 Page Not Found: admin/Questions/profile
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:09 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:09 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:20 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:20 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:27 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:27 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:35 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:35 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:38:48 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:53 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:53 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:57 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:38:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:38:57 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:39:03 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:39:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:39:03 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:39:08 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:39:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:39:08 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:39:12 --> 404 Page Not Found: admin/Options/profile
ERROR - 2020-07-24 17:39:23 --> 404 Page Not Found: admin/Options/profile
ERROR - 2020-07-24 17:39:25 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:39:26 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:39:41 --> 404 Page Not Found: admin/Questions/profile
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:05 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:40:05 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:10 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:40:10 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:41 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:40:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:40:41 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:40:46 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 17:40:59 --> 404 Page Not Found: admin/Options/profile
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:03 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:41:03 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:05 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:41:05 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:16 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:41:16 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:22 --> Severity: 4096 --> Object of class Model_options could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:41:22 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:33 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:41:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:41:33 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:41:39 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:42:07 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:42:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:42:07 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:42:14 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'form_data' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 390
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'user_input' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 392
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'page_title_min' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 438
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'page_title' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 439
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'class_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 440
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'model_name' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 441
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'model_obj' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:42:15 --> Severity: 4096 --> Object of class Model_questions could not be converted to string E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 442
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Illegal string offset 'form_fields' E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 20:42:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at E:\xampp\htdocs\advance_health_care\My_system\core\Exceptions.php:271) E:\xampp\htdocs\advance_health_care\My_system\core\Common.php 570
ERROR - 2020-07-24 20:42:15 --> Severity: Error --> Cannot use string offset as an array E:\xampp\htdocs\advance_health_care\My_application\core\MY_Controller_Admin.php 443
ERROR - 2020-07-24 17:42:27 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 21:40:41 --> Severity: Error --> Call to a member function find_by_pk() on null E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 76
ERROR - 2020-07-24 21:40:55 --> Severity: Error --> Call to undefined function deubg() E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 77
ERROR - 2020-07-24 18:48:08 --> Severity: Parsing Error --> syntax error, unexpected 'if' (T_IF) E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 74
ERROR - 2020-07-24 19:18:46 --> Severity: Parsing Error --> syntax error, unexpected 'if' (T_IF) E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 75
ERROR - 2020-07-24 19:21:40 --> 404 Page Not Found: Quiz/02f5df8adf0db026d38425594e68a007
ERROR - 2020-07-24 19:40:44 --> 404 Page Not Found: Quiz/0f28b5d49b3020afeecd95b4009adf4c
ERROR - 2020-07-24 22:42:51 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `ah_questions_options`
WHERE `qo_id` = Array
 LIMIT 1
ERROR - 2020-07-24 20:07:08 --> 404 Page Not Found: Profile/profile.png
ERROR - 2020-07-24 20:45:08 --> Severity: Parsing Error --> syntax error, unexpected '}' E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 107
ERROR - 2020-07-24 23:52:05 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 111
ERROR - 2020-07-24 20:55:18 --> Severity: Parsing Error --> syntax error, unexpected ')', expecting variable (T_VARIABLE) E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 115
ERROR - 2020-07-24 20:55:18 --> Severity: Parsing Error --> syntax error, unexpected ')', expecting variable (T_VARIABLE) E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 115
ERROR - 2020-07-24 23:57:10 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given E:\xampp\htdocs\advance_health_care\My_application\controllers\Quiz.php 113
ERROR - 2020-07-24 21:41:59 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 21:42:15 --> 404 Page Not Found: admin/Questions/profile
ERROR - 2020-07-24 21:44:42 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 21:47:27 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 21:53:05 --> 404 Page Not Found: admin/Profile/profile.png
ERROR - 2020-07-24 23:20:10 --> 404 Page Not Found: Profile/profile.png
