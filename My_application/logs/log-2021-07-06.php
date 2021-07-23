<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-06 15:09:19 --> Query error: Unknown column 'user_paid' in 'where clause' - Invalid query: SELECT *
FROM `md_user`
JOIN `md_user_info` ON `ui_user_id` = `user_id`
WHERE `user_id` = '41'
AND `user_paid` = 1
AND `md_user`.`user_status` = 1
ERROR - 2021-07-06 15:09:49 --> Query error: Unknown column 'user_paid' in 'where clause' - Invalid query: SELECT *
FROM `md_user`
JOIN `md_user_info` ON `ui_user_id` = `user_id`
WHERE `user_id` = '41'
AND `user_paid` = 1
AND `md_user`.`user_status` = 1
ERROR - 2021-07-06 15:12:37 --> Query error: Table 'ebdb.md_mytutorial' doesn't exist - Invalid query: SELECT *
FROM `md_mytutorial`
WHERE `mytutorial_user_id` = '41'
AND `mytutorial_certificate` = 1
AND `md_mytutorial`.`mytutorial_status` = 1
ERROR - 2021-07-06 15:12:40 --> Query error: Table 'ebdb.md_mytutorial' doesn't exist - Invalid query: SELECT *
FROM `md_mytutorial`
WHERE `mytutorial_user_id` = '41'
AND `mytutorial_certificate` = 1
AND `md_mytutorial`.`mytutorial_status` = 1
ERROR - 2021-07-06 15:12:41 --> Query error: Table 'ebdb.md_mytutorial' doesn't exist - Invalid query: SELECT *
FROM `md_mytutorial`
WHERE `mytutorial_user_id` = '41'
AND `mytutorial_certificate` = 1
AND `md_mytutorial`.`mytutorial_status` = 1
