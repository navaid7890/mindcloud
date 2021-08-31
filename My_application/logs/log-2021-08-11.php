<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-11 11:37:50 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '1'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
ERROR - 2021-08-11 11:38:33 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '7'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
ERROR - 2021-08-11 11:38:36 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '12'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
ERROR - 2021-08-11 11:38:39 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '16'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
ERROR - 2021-08-11 11:38:42 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '15'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
ERROR - 2021-08-11 11:38:45 --> Query error: Not unique table/alias: 'md_tutorial' - Invalid query: SELECT `md_expert`.*, `md_course_category`.*, `md_category`.`category_name`
FROM `md_tutorial`
JOIN `md_tutorial` ON `md_tutorial`.`tutorial_id` = `md_course_category`.`cp_course_id`
JOIN `md_category` ON `md_category`.`category_id` = `md_course_category`.`cp_category_id`
JOIN `md_expert` ON `md_tutorial`.`tutorial_expert_id` = `md_expert`.`expert_id`
WHERE `md_course_category`.`cp_category_id` = '16'
AND `md_expert`.`expert_status` = '1'
GROUP BY `md_expert`.`expert_id`
