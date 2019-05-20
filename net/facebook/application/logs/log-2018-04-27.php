<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-27 14:42:09 --> Query error: Unknown column 'join_groups' in 'field list' - Invalid query: SELECT SUM(`posts`) AS `posts`, SUM(`comments`) AS `comments`, SUM(`likes`) AS `likes`, SUM(`join_groups`) AS `join_groups`, SUM(`invite_join_groups`) AS `invite_join_groups`
FROM `statistics`
WHERE `user_id` = 2
