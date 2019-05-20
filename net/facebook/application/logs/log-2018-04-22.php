<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `options`
ERROR - 2018-04-22 02:17:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 02:17:41 --> Unable to connect to the database
ERROR - 2018-04-22 02:17:41 --> Query error: No such file or directory - Invalid query: DELETE FROM `processed_fb_accounts`
WHERE `created_at` < DATE_FORMAT('2018-04-22 02:17','%Y-%m-%d %H:%i')
ERROR - 2018-04-22 02:17:41 --> Severity: Error --> Call to a member function real_escape_string() on boolean /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2018-04-22 14:14:48 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2018-04-22 14:14:48 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2018-04-22 14:14:48 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `options`
ERROR - 2018-04-22 14:14:53 --> Query error: MySQL server has gone away - Invalid query: DELETE FROM `processed_fb_accounts`
WHERE `created_at` < DATE_FORMAT('2018-04-22 14:14','%Y-%m-%d %H:%i')
ERROR - 2018-04-22 14:14:53 --> Query error: MySQL server has gone away - Invalid query: SELECT DISTINCT `s`.`id`, `s`.`userid`, `s`.`next_post_time`, `s`.`next_target`, `s`.`total_targets`, `s`.`post_interval`, `s`.`post_app`, `s`.`pause`, `s`.`status`, `s`.`fb_account`, `s`.`auto_pause`, `s`.`repeat_every`, `s`.`repeated_at`, `u`.`timezone`
FROM `scheduledposts` `s`
JOIN `users` `u` ON `u`.`id` = `s`.`userid`
WHERE `u`.`active` = 1
AND `u`.`expired` =0
AND `s`.`pause` =0
AND `s`.`status` =0
AND `s`.`next_post_time` <= '2018-04-24'
ORDER BY `s`.`next_post_time` ASC
 LIMIT 50
ERROR - 2018-04-22 14:14:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/gvitalcom/public_html/facebook/application/controllers/schedules/Schedule_run.php 35
ERROR - 2018-04-22 14:14:53 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `options`
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Query error: No such file or directory - Invalid query: SELECT *
FROM `options`
ERROR - 2018-04-22 14:16:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-22 14:16:06 --> Unable to connect to the database
ERROR - 2018-04-22 14:16:06 --> Query error: No such file or directory - Invalid query: DELETE FROM `processed_fb_accounts`
WHERE `created_at` < DATE_FORMAT('2018-04-22 14:16','%Y-%m-%d %H:%i')
ERROR - 2018-04-22 14:16:06 --> Severity: Error --> Call to a member function real_escape_string() on boolean /home/gvitalcom/public_html/facebook/system/database/drivers/mysqli/mysqli_driver.php 391
