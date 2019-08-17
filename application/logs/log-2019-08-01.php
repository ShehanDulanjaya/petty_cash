<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-08-01 19:18:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:31 --> before validation
DEBUG - 2019-08-01 19:18:31 --> form validation failed.
DEBUG - 2019-08-01 19:18:31 --> Total execution time: 0.4115
DEBUG - 2019-08-01 19:18:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:18:31 --> 404 Page Not Found: Faviconico/index
DEBUG - 2019-08-01 19:18:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:33 --> before validation
DEBUG - 2019-08-01 19:18:33 --> login>validate_auth entry 123
DEBUG - 2019-08-01 19:18:33 --> validating auth
DEBUG - 2019-08-01 19:18:33 --> User_model>login_user(): SELECT *
FROM `user`
WHERE `email` = 'shehanpraneeth5@gmail.com'
AND `password` = '202cb962ac59075b964b07152d234b70'
DEBUG - 2019-08-01 19:18:33 --> Permission>get_user_roles(): SELECT `role`.`id`, `role`.`name`
FROM `role`
JOIN `user_has_role` ON `user_has_role`.`role_id` = `role`.`id`
WHERE `user_has_role`.`user_id` = '6'
DEBUG - 2019-08-01 19:18:33 --> Permission>get_roles_permissions(): SELECT `name`
FROM `permission`
JOIN `role_has_permission` ON `role_has_permission`.`permission_id` = `permission`.`id`
WHERE `role_has_permission`.`role_id` IN('4')
DEBUG - 2019-08-01 19:18:33 --> form validation success.
DEBUG - 2019-08-01 19:18:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:33 --> Total execution time: 0.0834
DEBUG - 2019-08-01 19:18:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:37 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:18:37 --> Total execution time: 0.1565
DEBUG - 2019-08-01 19:18:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:18:38 --> Total execution time: 0.0971
DEBUG - 2019-08-01 19:18:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:43 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:18:43 --> Total execution time: 0.0676
DEBUG - 2019-08-01 19:18:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:18:43 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:18:43 --> Total execution time: 0.0530
DEBUG - 2019-08-01 19:18:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:18:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:18:46 --> 404 Page Not Found: Request/delete
DEBUG - 2019-08-01 19:24:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:39 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:24:39 --> Total execution time: 0.0834
DEBUG - 2019-08-01 19:24:40 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:40 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:24:40 --> Total execution time: 0.0528
DEBUG - 2019-08-01 19:24:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:43 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:24:43 --> Total execution time: 0.0607
DEBUG - 2019-08-01 19:24:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:24:44 --> Total execution time: 0.0559
DEBUG - 2019-08-01 19:24:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:46 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:24:46 --> Total execution time: 0.0847
DEBUG - 2019-08-01 19:24:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:46 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:24:46 --> Total execution time: 0.0669
DEBUG - 2019-08-01 19:24:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:24:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:24:46 --> Total execution time: 0.0531
DEBUG - 2019-08-01 19:24:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:24:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:24:53 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:24:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:24:53 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:25:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:15 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:25:15 --> Total execution time: 0.0580
DEBUG - 2019-08-01 19:25:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:15 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:25:15 --> Total execution time: 0.0703
DEBUG - 2019-08-01 19:25:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:25:16 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:25:16 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:25:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:16 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:25:16 --> Total execution time: 0.0650
DEBUG - 2019-08-01 19:25:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:25:22 --> 404 Page Not Found: Request/delete
DEBUG - 2019-08-01 19:25:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:26 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:25:26 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 19:25:26 --> Total execution time: 0.0983
DEBUG - 2019-08-01 19:25:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:43 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:25:43 --> Total execution time: 0.0692
DEBUG - 2019-08-01 19:25:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:43 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:25:43 --> Total execution time: 0.0641
DEBUG - 2019-08-01 19:25:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:25:44 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 19:25:44 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:25:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:25:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:25:44 --> Total execution time: 0.0590
DEBUG - 2019-08-01 19:35:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:45 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:35:45 --> Total execution time: 0.0795
DEBUG - 2019-08-01 19:35:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:45 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:35:45 --> Total execution time: 0.0657
DEBUG - 2019-08-01 19:35:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:35:46 --> Total execution time: 0.2839
DEBUG - 2019-08-01 19:35:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:49 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:35:49 --> Total execution time: 0.0581
DEBUG - 2019-08-01 19:35:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:49 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:35:49 --> Total execution time: 0.0695
DEBUG - 2019-08-01 19:35:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:35:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:35:49 --> Total execution time: 0.0566
DEBUG - 2019-08-01 19:37:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:37:31 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:37:31 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 19:37:31 --> Total execution time: 0.0640
DEBUG - 2019-08-01 19:37:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:37:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:37:47 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:37:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:37:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:37:47 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:22 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:22 --> Total execution time: 0.0464
DEBUG - 2019-08-01 19:52:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:22 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:52:22 --> Total execution time: 0.0675
DEBUG - 2019-08-01 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:23 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:23 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:23 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:52:23 --> Total execution time: 0.0685
DEBUG - 2019-08-01 19:52:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:35 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:35 --> Total execution time: 0.0456
DEBUG - 2019-08-01 19:52:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:35 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:52:35 --> Total execution time: 0.0707
DEBUG - 2019-08-01 19:52:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:36 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:36 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:36 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:52:36 --> Total execution time: 0.0584
DEBUG - 2019-08-01 19:52:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:38 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:38 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 19:52:38 --> Total execution time: 0.0421
DEBUG - 2019-08-01 19:52:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:47 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:47 --> Total execution time: 0.0497
DEBUG - 2019-08-01 19:52:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:47 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:52:47 --> Total execution time: 0.0666
DEBUG - 2019-08-01 19:52:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:48 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 19:52:48 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:52:48 --> Total execution time: 0.0510
DEBUG - 2019-08-01 19:52:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:49 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:49 --> Total execution time: 0.0516
DEBUG - 2019-08-01 19:52:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:49 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:52:49 --> Total execution time: 0.0635
DEBUG - 2019-08-01 19:52:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:50 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:50 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:52:50 --> Total execution time: 0.0735
DEBUG - 2019-08-01 19:52:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:51 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:52:51 --> Total execution time: 0.0438
DEBUG - 2019-08-01 19:52:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:51 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:52:51 --> Total execution time: 0.0751
DEBUG - 2019-08-01 19:52:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:52 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:52:52 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:52:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:52:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:52:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:52:52 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:52:52 --> Total execution time: 0.0559
DEBUG - 2019-08-01 19:53:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:08 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:08 --> Total execution time: 0.0481
DEBUG - 2019-08-01 19:53:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:08 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:08 --> Total execution time: 0.0552
DEBUG - 2019-08-01 19:53:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:09 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:09 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:09 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:09 --> Total execution time: 0.0530
DEBUG - 2019-08-01 19:53:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:16 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:16 --> Total execution time: 0.0504
DEBUG - 2019-08-01 19:53:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:16 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:16 --> Total execution time: 0.0510
DEBUG - 2019-08-01 19:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:17 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:17 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:17 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:17 --> Total execution time: 0.0465
DEBUG - 2019-08-01 19:53:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:24 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:24 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 19:53:24 --> Total execution time: 0.0443
DEBUG - 2019-08-01 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:28 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:28 --> Total execution time: 0.0460
DEBUG - 2019-08-01 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:28 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:28 --> Total execution time: 0.0526
DEBUG - 2019-08-01 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:28 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:28 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:29 --> Total execution time: 0.0615
DEBUG - 2019-08-01 19:53:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:34 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:34 --> Total execution time: 0.0436
DEBUG - 2019-08-01 19:53:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:35 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:35 --> Total execution time: 0.0666
DEBUG - 2019-08-01 19:53:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:35 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:35 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:35 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:35 --> Total execution time: 0.0593
DEBUG - 2019-08-01 19:53:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:36 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:36 --> Total execution time: 0.0463
DEBUG - 2019-08-01 19:53:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:36 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:36 --> Total execution time: 0.0567
DEBUG - 2019-08-01 19:53:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:37 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:37 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:37 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:37 --> Total execution time: 0.0595
DEBUG - 2019-08-01 19:53:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:38 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:38 --> Total execution time: 0.1268
DEBUG - 2019-08-01 19:53:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:38 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:38 --> Total execution time: 0.0644
DEBUG - 2019-08-01 19:53:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:39 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:39 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:39 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:39 --> Total execution time: 0.0587
DEBUG - 2019-08-01 19:53:40 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:40 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:40 --> Total execution time: 0.0422
DEBUG - 2019-08-01 19:53:40 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:40 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:40 --> Total execution time: 0.0626
DEBUG - 2019-08-01 19:53:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:41 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 19:53:41 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:41 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:41 --> Total execution time: 0.0596
DEBUG - 2019-08-01 19:53:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:42 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:42 --> Total execution time: 0.0440
DEBUG - 2019-08-01 19:53:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:42 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:42 --> Total execution time: 0.0576
DEBUG - 2019-08-01 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:43 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 19:53:43 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:43 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:43 --> Total execution time: 0.0600
DEBUG - 2019-08-01 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:44 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:44 --> Total execution time: 0.0555
DEBUG - 2019-08-01 19:53:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:44 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:44 --> Total execution time: 0.0637
DEBUG - 2019-08-01 19:53:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:44 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:44 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:45 --> Total execution time: 0.0810
DEBUG - 2019-08-01 19:53:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:45 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:53:45 --> Total execution time: 0.0581
DEBUG - 2019-08-01 19:53:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:45 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:53:45 --> Total execution time: 0.0642
DEBUG - 2019-08-01 19:53:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:46 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:53:46 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:53:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:53:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:53:46 --> Total execution time: 0.0647
DEBUG - 2019-08-01 19:55:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:55:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:55:20 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:55:20 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 19:55:20 --> Total execution time: 0.0616
DEBUG - 2019-08-01 19:57:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:09 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:57:09 --> Total execution time: 0.0480
DEBUG - 2019-08-01 19:57:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:09 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:57:09 --> Total execution time: 0.0609
DEBUG - 2019-08-01 19:57:10 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:10 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:57:10 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:57:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:57:10 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:57:10 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:10 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:57:10 --> Total execution time: 0.0629
DEBUG - 2019-08-01 19:57:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:11 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:57:11 --> Total execution time: 0.0412
DEBUG - 2019-08-01 19:57:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:11 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:57:11 --> Total execution time: 0.0507
DEBUG - 2019-08-01 19:57:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:57:12 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 19:57:12 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:57:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:12 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:57:12 --> Total execution time: 0.0520
DEBUG - 2019-08-01 19:57:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:13 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 19:57:13 --> Total execution time: 0.0439
DEBUG - 2019-08-01 19:57:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:13 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 19:57:13 --> Total execution time: 0.0526
DEBUG - 2019-08-01 19:57:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:14 --> UTF-8 Support Enabled
ERROR - 2019-08-01 19:57:14 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:57:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 19:57:14 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 19:57:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 19:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 19:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 19:57:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 19:57:14 --> Total execution time: 0.0724
DEBUG - 2019-08-01 20:02:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:44 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:02:44 --> Total execution time: 0.0532
DEBUG - 2019-08-01 20:02:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:02:45 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:02:45 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:02:45 --> Total execution time: 0.0778
DEBUG - 2019-08-01 20:02:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:46 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:02:46 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:02:46 --> Total execution time: 0.0611
DEBUG - 2019-08-01 20:02:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:49 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:02:49 --> Total execution time: 0.0612
DEBUG - 2019-08-01 20:02:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:49 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:02:49 --> Total execution time: 0.0793
DEBUG - 2019-08-01 20:02:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:50 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:02:50 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:02:50 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:02:51 --> Total execution time: 0.0638
DEBUG - 2019-08-01 20:02:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:52 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:02:52 --> Total execution time: 0.0689
DEBUG - 2019-08-01 20:02:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:52 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:02:52 --> Total execution time: 0.0707
DEBUG - 2019-08-01 20:02:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:02:53 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:02:53 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:53 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:02:53 --> Total execution time: 0.0729
DEBUG - 2019-08-01 20:02:54 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:54 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:02:54 --> Total execution time: 0.0596
DEBUG - 2019-08-01 20:02:54 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:54 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:02:54 --> Total execution time: 0.0698
DEBUG - 2019-08-01 20:02:55 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:55 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:02:55 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:02:55 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:02:55 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:55 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:02:55 --> Total execution time: 0.0761
DEBUG - 2019-08-01 20:02:57 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:02:57 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:02:57 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:02:57 --> Total execution time: 0.0629
DEBUG - 2019-08-01 20:06:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:15 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:06:15 --> Total execution time: 0.0677
DEBUG - 2019-08-01 20:06:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:06:16 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:06:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:06:16 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:06:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:17 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:06:17 --> Total execution time: 0.0716
DEBUG - 2019-08-01 20:06:18 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:18 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:06:18 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:06:18 --> Total execution time: 0.0830
DEBUG - 2019-08-01 20:06:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:22 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:06:22 --> Total execution time: 0.0649
DEBUG - 2019-08-01 20:06:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:22 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:06:22 --> Total execution time: 0.0700
DEBUG - 2019-08-01 20:06:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:06:23 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:06:23 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:06:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:06:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:06:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:06:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:06:24 --> Total execution time: 0.0803
DEBUG - 2019-08-01 20:08:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:28 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:08:28 --> Total execution time: 0.0659
DEBUG - 2019-08-01 20:08:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:29 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:08:29 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:08:29 --> Total execution time: 0.0763
DEBUG - 2019-08-01 20:08:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:31 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:08:31 --> Total execution time: 0.0675
DEBUG - 2019-08-01 20:08:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:31 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:08:31 --> Total execution time: 0.0864
DEBUG - 2019-08-01 20:08:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:32 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:32 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:08:32 --> Total execution time: 0.0647
DEBUG - 2019-08-01 20:08:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:34 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:08:34 --> Total execution time: 0.0580
DEBUG - 2019-08-01 20:08:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:35 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:08:35 --> Total execution time: 0.0749
DEBUG - 2019-08-01 20:08:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:35 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:08:35 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:36 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:08:36 --> Total execution time: 0.0610
DEBUG - 2019-08-01 20:08:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:39 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:08:39 --> Total execution time: 0.0576
DEBUG - 2019-08-01 20:08:40 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:40 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:08:40 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:40 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:41 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:08:41 --> Total execution time: 0.0716
DEBUG - 2019-08-01 20:08:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:42 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:08:42 --> Total execution time: 0.0665
DEBUG - 2019-08-01 20:08:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:42 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:08:42 --> Total execution time: 0.0689
DEBUG - 2019-08-01 20:08:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:08:43 --> 404 Page Not Found: Assets/js
ERROR - 2019-08-01 20:08:43 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:08:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:08:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:08:43 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:08:43 --> Total execution time: 0.0691
DEBUG - 2019-08-01 20:09:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:04 --> before validation
DEBUG - 2019-08-01 20:09:04 --> form validation failed.
DEBUG - 2019-08-01 20:09:04 --> Total execution time: 0.0483
DEBUG - 2019-08-01 20:09:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:06 --> before validation
DEBUG - 2019-08-01 20:09:06 --> login>validate_auth entry 123
DEBUG - 2019-08-01 20:09:06 --> validating auth
DEBUG - 2019-08-01 20:09:06 --> User_model>login_user(): SELECT *
FROM `user`
WHERE `email` = 'shehanpraneeth5@gmail.com'
AND `password` = '202cb962ac59075b964b07152d234b70'
DEBUG - 2019-08-01 20:09:06 --> Permission>get_user_roles(): SELECT `role`.`id`, `role`.`name`
FROM `role`
JOIN `user_has_role` ON `user_has_role`.`role_id` = `role`.`id`
WHERE `user_has_role`.`user_id` = '6'
DEBUG - 2019-08-01 20:09:06 --> Permission>get_roles_permissions(): SELECT `name`
FROM `permission`
JOIN `role_has_permission` ON `role_has_permission`.`permission_id` = `permission`.`id`
WHERE `role_has_permission`.`role_id` IN('4')
DEBUG - 2019-08-01 20:09:06 --> form validation success.
DEBUG - 2019-08-01 20:09:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:06 --> Total execution time: 0.0507
DEBUG - 2019-08-01 20:09:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:09 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:09:09 --> Total execution time: 0.0626
DEBUG - 2019-08-01 20:09:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:09 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:09:09 --> Total execution time: 0.0640
DEBUG - 2019-08-01 20:09:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:11 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:09:11 --> Total execution time: 0.0663
DEBUG - 2019-08-01 20:09:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:12 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:09:12 --> Total execution time: 0.0580
DEBUG - 2019-08-01 20:09:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:13 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:09:13 --> Total execution time: 0.0574
DEBUG - 2019-08-01 20:09:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:14 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:09:14 --> Total execution time: 0.0664
DEBUG - 2019-08-01 20:09:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:09:14 --> Total execution time: 0.0550
DEBUG - 2019-08-01 20:09:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:16 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:09:16 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:09:16 --> Total execution time: 0.0559
DEBUG - 2019-08-01 20:09:18 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:18 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:09:18 --> Total execution time: 0.0598
DEBUG - 2019-08-01 20:09:18 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:18 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:09:18 --> Total execution time: 0.0867
DEBUG - 2019-08-01 20:09:19 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:09:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:09:19 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:09:19 --> Total execution time: 0.0588
DEBUG - 2019-08-01 20:17:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:29 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:17:29 --> Total execution time: 0.0575
DEBUG - 2019-08-01 20:17:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:30 --> Total execution time: 0.0578
DEBUG - 2019-08-01 20:17:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:33 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:17:33 --> Total execution time: 0.0685
DEBUG - 2019-08-01 20:17:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:33 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:33 --> Total execution time: 0.0602
DEBUG - 2019-08-01 20:17:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:35 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:17:35 --> Total execution time: 0.0690
DEBUG - 2019-08-01 20:17:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:35 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:17:35 --> Total execution time: 0.0723
DEBUG - 2019-08-01 20:17:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:36 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:36 --> Total execution time: 0.0776
DEBUG - 2019-08-01 20:17:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:38 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:17:38 --> Total execution time: 0.0697
DEBUG - 2019-08-01 20:17:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:38 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:17:38 --> Total execution time: 0.0669
DEBUG - 2019-08-01 20:17:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:39 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:39 --> Total execution time: 0.0605
DEBUG - 2019-08-01 20:17:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:47 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:17:47 --> Total execution time: 0.1052
DEBUG - 2019-08-01 20:17:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:48 --> Total execution time: 0.0721
DEBUG - 2019-08-01 20:17:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:50 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 20:17:50 --> Total execution time: 0.0621
DEBUG - 2019-08-01 20:17:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:50 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:17:50 --> Total execution time: 0.0865
DEBUG - 2019-08-01 20:17:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:50 --> Total execution time: 0.0578
DEBUG - 2019-08-01 20:17:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:52 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:17:52 --> Total execution time: 0.0655
DEBUG - 2019-08-01 20:17:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:52 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:17:52 --> Total execution time: 0.0608
DEBUG - 2019-08-01 20:17:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:17:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:17:52 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:17:52 --> Total execution time: 0.0569
DEBUG - 2019-08-01 20:17:56 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:17:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:17:56 --> Severity: Compile Error --> Cannot redeclare User::index() D:\xampp\htdocs\petty_cash\application\controllers\User.php 109
DEBUG - 2019-08-01 20:18:05 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:05 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:18:05 --> Total execution time: 0.0668
DEBUG - 2019-08-01 20:18:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:06 --> Total execution time: 0.0652
DEBUG - 2019-08-01 20:18:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:11 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:11 --> Total execution time: 0.0565
DEBUG - 2019-08-01 20:18:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:12 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:12 --> Total execution time: 0.0458
DEBUG - 2019-08-01 20:18:16 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:16 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:16 --> Total execution time: 0.0695
DEBUG - 2019-08-01 20:18:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:17 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:17 --> Total execution time: 0.0722
DEBUG - 2019-08-01 20:18:19 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:19 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:19 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:18:19 --> Total execution time: 0.0614
DEBUG - 2019-08-01 20:18:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:26 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:26 --> Total execution time: 0.0752
DEBUG - 2019-08-01 20:18:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:26 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:26 --> Total execution time: 0.0788
DEBUG - 2019-08-01 20:18:27 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:27 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:27 --> Total execution time: 0.0540
DEBUG - 2019-08-01 20:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:29 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:29 --> Total execution time: 0.0698
DEBUG - 2019-08-01 20:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:29 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:29 --> Total execution time: 0.0622
DEBUG - 2019-08-01 20:18:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:29 --> Total execution time: 0.0545
DEBUG - 2019-08-01 20:18:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:32 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:32 --> Total execution time: 0.0705
DEBUG - 2019-08-01 20:18:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:32 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:32 --> Total execution time: 0.0614
DEBUG - 2019-08-01 20:18:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:32 --> Total execution time: 0.0725
DEBUG - 2019-08-01 20:18:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:34 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:34 --> Total execution time: 0.0557
DEBUG - 2019-08-01 20:18:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:34 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:34 --> Total execution time: 0.0692
DEBUG - 2019-08-01 20:18:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:34 --> Total execution time: 0.0597
DEBUG - 2019-08-01 20:18:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:35 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:35 --> Total execution time: 0.0553
DEBUG - 2019-08-01 20:18:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:35 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:35 --> Total execution time: 0.0747
DEBUG - 2019-08-01 20:18:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:36 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:36 --> Total execution time: 0.0640
DEBUG - 2019-08-01 20:18:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:36 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:18:36 --> Total execution time: 0.0576
DEBUG - 2019-08-01 20:18:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:37 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:18:37 --> Total execution time: 0.0684
DEBUG - 2019-08-01 20:18:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:18:37 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:18:37 --> Total execution time: 0.0763
DEBUG - 2019-08-01 20:20:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:48 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:20:48 --> Total execution time: 0.0626
DEBUG - 2019-08-01 20:20:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:48 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:20:48 --> Total execution time: 0.0704
DEBUG - 2019-08-01 20:20:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:20:49 --> Total execution time: 0.0724
DEBUG - 2019-08-01 20:20:54 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:54 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:20:54 --> Total execution time: 0.0614
DEBUG - 2019-08-01 20:20:55 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:55 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:20:55 --> Total execution time: 0.0616
DEBUG - 2019-08-01 20:20:57 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:57 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:20:57 --> Total execution time: 0.0770
DEBUG - 2019-08-01 20:20:57 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:57 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:20:57 --> Total execution time: 0.0781
DEBUG - 2019-08-01 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:20:58 --> Total execution time: 0.0765
DEBUG - 2019-08-01 20:20:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:20:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:20:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:20:59 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:20:59 --> Total execution time: 0.0844
DEBUG - 2019-08-01 20:21:00 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:21:00 --> 404 Page Not Found: Request/favicon.ico
DEBUG - 2019-08-01 20:21:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:12 --> Drafted_request_model>add(): INSERT INTO `drafted_request` (`request_date`, `title`, `details`, `quantity`, `cost_per_unit`, `total_cost`, `user_id`) VALUES ('2019-08-01', 'ertg', 'rtr', '1', '12', 12, '6')
DEBUG - 2019-08-01 20:21:12 --> Total execution time: 0.2461
DEBUG - 2019-08-01 20:21:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:12 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:21:12 --> Total execution time: 0.0643
DEBUG - 2019-08-01 20:21:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:15 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:21:15 --> Total execution time: 0.0605
DEBUG - 2019-08-01 20:21:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:21:26 --> Severity: Compile Error --> Cannot redeclare User::index() D:\xampp\htdocs\petty_cash\application\controllers\User.php 109
DEBUG - 2019-08-01 20:21:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:21:45 --> Severity: Compile Error --> Cannot redeclare User::index() D:\xampp\htdocs\petty_cash\application\controllers\User.php 109
DEBUG - 2019-08-01 20:21:53 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:53 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:21:53 --> Total execution time: 0.0581
DEBUG - 2019-08-01 20:21:54 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:54 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:21:54 --> Total execution time: 0.0589
DEBUG - 2019-08-01 20:21:55 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:56 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:21:56 --> Total execution time: 0.0581
DEBUG - 2019-08-01 20:21:56 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:56 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:21:56 --> Total execution time: 0.0651
DEBUG - 2019-08-01 20:21:56 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:56 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:21:56 --> Total execution time: 0.0700
DEBUG - 2019-08-01 20:21:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:58 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:21:58 --> Total execution time: 0.0569
DEBUG - 2019-08-01 20:21:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:58 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:21:58 --> Total execution time: 0.0639
DEBUG - 2019-08-01 20:21:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:21:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:21:59 --> Total execution time: 0.0626
DEBUG - 2019-08-01 20:22:03 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:03 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:22:03 --> Total execution time: 0.0656
DEBUG - 2019-08-01 20:22:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:22:04 --> Total execution time: 0.0637
DEBUG - 2019-08-01 20:22:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:07 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:22:07 --> Total execution time: 0.0696
DEBUG - 2019-08-01 20:22:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:07 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:22:07 --> Total execution time: 0.0615
DEBUG - 2019-08-01 20:22:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:22:07 --> Total execution time: 0.0587
DEBUG - 2019-08-01 20:22:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:09 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:22:09 --> Total execution time: 0.0563
DEBUG - 2019-08-01 20:22:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:17 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:22:17 --> Total execution time: 0.0581
DEBUG - 2019-08-01 20:22:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:22:25 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:22:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:22:25 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:22:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:22:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:22:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:22:32 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:22:32 --> Total execution time: 0.0658
DEBUG - 2019-08-01 20:29:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:12 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:12 --> Total execution time: 0.0561
DEBUG - 2019-08-01 20:29:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:17 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:17 --> Total execution time: 0.0763
DEBUG - 2019-08-01 20:29:17 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:17 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:17 --> Total execution time: 0.0667
DEBUG - 2019-08-01 20:29:19 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:19 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:29:19 --> Total execution time: 0.0741
DEBUG - 2019-08-01 20:29:19 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:19 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:19 --> Total execution time: 0.0774
DEBUG - 2019-08-01 20:29:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:20 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:20 --> Total execution time: 0.0620
DEBUG - 2019-08-01 20:29:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:22 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:29:22 --> Total execution time: 0.0614
DEBUG - 2019-08-01 20:29:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:23 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:23 --> Total execution time: 0.0695
DEBUG - 2019-08-01 20:29:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:23 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:23 --> Total execution time: 0.0607
DEBUG - 2019-08-01 20:29:27 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:27 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:29:27 --> Total execution time: 0.0609
DEBUG - 2019-08-01 20:29:27 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:27 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:27 --> Total execution time: 0.0594
DEBUG - 2019-08-01 20:29:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:28 --> Total execution time: 0.0627
DEBUG - 2019-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:36 --> before validation
DEBUG - 2019-08-01 20:29:36 --> form validation failed.
DEBUG - 2019-08-01 20:29:36 --> Total execution time: 0.0641
DEBUG - 2019-08-01 20:29:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:39 --> before validation
DEBUG - 2019-08-01 20:29:39 --> form validation failed.
DEBUG - 2019-08-01 20:29:39 --> Total execution time: 0.0515
DEBUG - 2019-08-01 20:29:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:43 --> before validation
DEBUG - 2019-08-01 20:29:43 --> form validation failed.
DEBUG - 2019-08-01 20:29:43 --> Total execution time: 0.0573
DEBUG - 2019-08-01 20:29:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:44 --> before validation
DEBUG - 2019-08-01 20:29:44 --> login>validate_auth entry 123
DEBUG - 2019-08-01 20:29:44 --> validating auth
DEBUG - 2019-08-01 20:29:44 --> User_model>login_user(): SELECT *
FROM `user`
WHERE `email` = 'shehanpraneeth5@gmail.com'
AND `password` = '202cb962ac59075b964b07152d234b70'
DEBUG - 2019-08-01 20:29:44 --> Permission>get_user_roles(): SELECT `role`.`id`, `role`.`name`
FROM `role`
JOIN `user_has_role` ON `user_has_role`.`role_id` = `role`.`id`
WHERE `user_has_role`.`user_id` = '6'
DEBUG - 2019-08-01 20:29:44 --> Permission>get_roles_permissions(): SELECT `name`
FROM `permission`
JOIN `role_has_permission` ON `role_has_permission`.`permission_id` = `permission`.`id`
WHERE `role_has_permission`.`role_id` IN('4')
DEBUG - 2019-08-01 20:29:44 --> form validation success.
DEBUG - 2019-08-01 20:29:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:44 --> Total execution time: 0.0549
DEBUG - 2019-08-01 20:29:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:47 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:47 --> Total execution time: 0.0634
DEBUG - 2019-08-01 20:29:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:48 --> Total execution time: 0.0752
DEBUG - 2019-08-01 20:29:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:49 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:29:49 --> Total execution time: 0.0750
DEBUG - 2019-08-01 20:29:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:49 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:49 --> Total execution time: 0.0767
DEBUG - 2019-08-01 20:29:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:29:50 --> Total execution time: 0.0623
DEBUG - 2019-08-01 20:29:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:52 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:29:52 --> Total execution time: 0.0635
DEBUG - 2019-08-01 20:29:56 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:29:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:29:56 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:29:56 --> Total execution time: 0.0605
DEBUG - 2019-08-01 20:30:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:30:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:30:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:30:29 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:30:29 --> Total execution time: 0.0579
DEBUG - 2019-08-01 20:30:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:30:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:30:32 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:30:32 --> Total execution time: 0.0585
DEBUG - 2019-08-01 20:30:57 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:30:57 --> No URI present. Default controller set.
DEBUG - 2019-08-01 20:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:30:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:30:57 --> Total execution time: 0.0702
DEBUG - 2019-08-01 20:31:01 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:01 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:31:01 --> Total execution time: 0.0689
DEBUG - 2019-08-01 20:31:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:04 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:31:04 --> Total execution time: 0.0669
DEBUG - 2019-08-01 20:31:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:34 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:31:34 --> Total execution time: 0.0638
DEBUG - 2019-08-01 20:31:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:37 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:31:37 --> Total execution time: 0.0656
DEBUG - 2019-08-01 20:31:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:43 --> before validation
DEBUG - 2019-08-01 20:31:43 --> form validation failed.
DEBUG - 2019-08-01 20:31:43 --> Total execution time: 0.0445
DEBUG - 2019-08-01 20:31:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:44 --> before validation
DEBUG - 2019-08-01 20:31:44 --> login>validate_auth entry 123
DEBUG - 2019-08-01 20:31:44 --> validating auth
DEBUG - 2019-08-01 20:31:44 --> User_model>login_user(): SELECT *
FROM `user`
WHERE `email` = 'shehanpraneeth5@gmail.com'
AND `password` = '202cb962ac59075b964b07152d234b70'
DEBUG - 2019-08-01 20:31:44 --> Permission>get_user_roles(): SELECT `role`.`id`, `role`.`name`
FROM `role`
JOIN `user_has_role` ON `user_has_role`.`role_id` = `role`.`id`
WHERE `user_has_role`.`user_id` = '6'
DEBUG - 2019-08-01 20:31:44 --> Permission>get_roles_permissions(): SELECT `name`
FROM `permission`
JOIN `role_has_permission` ON `role_has_permission`.`permission_id` = `permission`.`id`
WHERE `role_has_permission`.`role_id` IN('4')
DEBUG - 2019-08-01 20:31:44 --> form validation success.
DEBUG - 2019-08-01 20:31:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:45 --> Total execution time: 0.0513
DEBUG - 2019-08-01 20:31:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:46 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:31:46 --> Total execution time: 0.0589
DEBUG - 2019-08-01 20:31:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:31:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:31:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:31:48 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:31:48 --> Total execution time: 0.0847
DEBUG - 2019-08-01 20:32:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:02 --> No URI present. Default controller set.
DEBUG - 2019-08-01 20:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:02 --> before validation
DEBUG - 2019-08-01 20:32:02 --> form validation failed.
DEBUG - 2019-08-01 20:32:02 --> Total execution time: 0.0619
DEBUG - 2019-08-01 20:32:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:06 --> before validation
DEBUG - 2019-08-01 20:32:06 --> login>validate_auth entry 123
DEBUG - 2019-08-01 20:32:06 --> validating auth
DEBUG - 2019-08-01 20:32:06 --> User_model>login_user(): SELECT *
FROM `user`
WHERE `email` = 'shehanpraneeth5@gmail.com'
AND `password` = '202cb962ac59075b964b07152d234b70'
DEBUG - 2019-08-01 20:32:06 --> Permission>get_user_roles(): SELECT `role`.`id`, `role`.`name`
FROM `role`
JOIN `user_has_role` ON `user_has_role`.`role_id` = `role`.`id`
WHERE `user_has_role`.`user_id` = '6'
DEBUG - 2019-08-01 20:32:06 --> Permission>get_roles_permissions(): SELECT `name`
FROM `permission`
JOIN `role_has_permission` ON `role_has_permission`.`permission_id` = `permission`.`id`
WHERE `role_has_permission`.`role_id` IN('4')
DEBUG - 2019-08-01 20:32:06 --> form validation success.
DEBUG - 2019-08-01 20:32:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:06 --> Total execution time: 0.0564
DEBUG - 2019-08-01 20:32:09 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:09 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:32:09 --> Total execution time: 0.0672
DEBUG - 2019-08-01 20:32:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:32:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:32:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:32:11 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:32:11 --> Total execution time: 0.0683
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:07 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:36:07 --> Total execution time: 0.0829
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:12 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:36:12 --> Total execution time: 0.0790
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.1283
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.1716
DEBUG - 2019-08-01 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.1835
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.2437
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.2811
DEBUG - 2019-08-01 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.2865
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.2115
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.2094
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.1770
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.1506
DEBUG - 2019-08-01 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:13 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:13 --> Total execution time: 0.0603
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:14 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:36:14 --> Total execution time: 0.0614
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:14 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:36:14 --> Total execution time: 0.0732
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1344
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1144
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1752
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.2123
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.2398
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1771
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1367
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1167
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1511
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.1349
DEBUG - 2019-08-01 20:36:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:15 --> Total execution time: 0.0584
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.0660
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.0646
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.0744
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.0981
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1158
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1955
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.2589
DEBUG - 2019-08-01 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1356
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.2844
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1961
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1334
DEBUG - 2019-08-01 20:36:21 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:21 --> Total execution time: 0.1639
DEBUG - 2019-08-01 20:36:22 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:22 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:36:22 --> Total execution time: 0.0521
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:23 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:36:23 --> Total execution time: 0.0565
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:23 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:36:24 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:36:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:36:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:36:25 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:36:25 --> Total execution time: 0.0690
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:20 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:20 --> Total execution time: 0.0633
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:20 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:37:20 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:37:21 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:23 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:23 --> Total execution time: 0.0701
DEBUG - 2019-08-01 20:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1664
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1571
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.2417
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.2053
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.2485
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.2531
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1511
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1680
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1051
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.1487
DEBUG - 2019-08-01 20:37:24 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:24 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:24 --> Total execution time: 0.0570
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:25 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:25 --> Total execution time: 0.0679
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:25 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:25 --> Total execution time: 0.0667
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1169
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1720
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1687
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1860
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.2652
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.2838
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1092
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1690
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1156
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.1012
DEBUG - 2019-08-01 20:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:26 --> Total execution time: 0.0585
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:29 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:29 --> Total execution time: 0.0603
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:29 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:29 --> Total execution time: 0.0554
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1454
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1490
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1622
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.2020
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1519
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.2095
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1560
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1397
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1411
DEBUG - 2019-08-01 20:37:30 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:30 --> Total execution time: 0.1952
DEBUG - 2019-08-01 20:37:36 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:39 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:39 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:37:39 --> Total execution time: 0.0824
DEBUG - 2019-08-01 20:37:39 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:39 --> Total execution time: 0.1009
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.0623
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.0680
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.1178
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.0866
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.1937
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.1642
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:45 --> Total execution time: 0.2181
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.2136
DEBUG - 2019-08-01 20:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.1091
DEBUG - 2019-08-01 20:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.1847
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.1307
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.1927
DEBUG - 2019-08-01 20:37:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:46 --> Total execution time: 0.0718
DEBUG - 2019-08-01 20:37:47 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:47 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:47 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:37:47 --> Total execution time: 0.0653
DEBUG - 2019-08-01 20:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:50 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:37:50 --> Total execution time: 0.0585
DEBUG - 2019-08-01 20:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:50 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:37:50 --> Total execution time: 0.0644
DEBUG - 2019-08-01 20:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1585
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1664
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1703
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.2400
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.2293
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1752
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1300
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1122
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1007
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.1373
DEBUG - 2019-08-01 20:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:37:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:37:51 --> Total execution time: 0.0739
DEBUG - 2019-08-01 20:39:10 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:10 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:39:10 --> Total execution time: 0.0523
DEBUG - 2019-08-01 20:39:11 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:11 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:39:11 --> Total execution time: 0.0408
DEBUG - 2019-08-01 20:39:12 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:12 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:39:12 --> Total execution time: 0.0470
DEBUG - 2019-08-01 20:39:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:14 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:39:14 --> Total execution time: 0.0687
DEBUG - 2019-08-01 20:39:25 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:25 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:39:25 --> Total execution time: 0.0724
DEBUG - 2019-08-01 20:39:26 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:26 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:39:26 --> Total execution time: 0.0544
DEBUG - 2019-08-01 20:39:27 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:27 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:39:27 --> Total execution time: 0.0660
DEBUG - 2019-08-01 20:39:27 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:27 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:39:27 --> Total execution time: 0.0675
DEBUG - 2019-08-01 20:39:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:39:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:39:28 --> Total execution time: 0.0563
DEBUG - 2019-08-01 20:39:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:39:37 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:39:37 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:39:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:39:37 --> 404 Page Not Found: Assets/js
DEBUG - 2019-08-01 20:43:40 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:40 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:43:40 --> Total execution time: 0.0714
DEBUG - 2019-08-01 20:43:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:41 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:43:41 --> Total execution time: 0.0771
DEBUG - 2019-08-01 20:43:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:42 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:43:42 --> Total execution time: 0.0725
DEBUG - 2019-08-01 20:43:42 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:42 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:43:42 --> Total execution time: 0.0764
DEBUG - 2019-08-01 20:43:43 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:43 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:43:43 --> Total execution time: 0.0633
DEBUG - 2019-08-01 20:43:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:45 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:43:45 --> Total execution time: 0.0709
DEBUG - 2019-08-01 20:43:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:45 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:43:45 --> Total execution time: 0.0738
DEBUG - 2019-08-01 20:43:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:43:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:43:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:43:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:43:46 --> Total execution time: 0.0533
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.0882
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.0815
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.0927
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1323
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1553
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.0823
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1792
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.2609
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1150
DEBUG - 2019-08-01 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1869
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.2357
DEBUG - 2019-08-01 20:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:38 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:38 --> Total execution time: 0.1088
DEBUG - 2019-08-01 20:46:39 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:39 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:39 --> Total execution time: 0.0677
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.0624
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.0782
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.0981
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1426
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1280
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1491
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1451
DEBUG - 2019-08-01 20:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.0812
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1116
DEBUG - 2019-08-01 20:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.2856
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1094
DEBUG - 2019-08-01 20:46:44 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:44 --> Total execution time: 0.1433
DEBUG - 2019-08-01 20:46:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:45 --> Total execution time: 0.0612
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.0589
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.0664
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.0803
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.1277
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.1828
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:48 --> Total execution time: 0.2267
DEBUG - 2019-08-01 20:46:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.3048
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.2474
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.2228
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.1668
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.1579
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.1308
DEBUG - 2019-08-01 20:46:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:49 --> Total execution time: 0.0639
DEBUG - 2019-08-01 20:46:52 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:52 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:46:52 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '2'
DEBUG - 2019-08-01 20:46:52 --> Total execution time: 0.0593
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:46:58 --> Total execution time: 0.0571
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:46:58 --> Total execution time: 0.0622
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> Total execution time: 0.1782
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:58 --> Total execution time: 0.1635
DEBUG - 2019-08-01 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.2284
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.2417
DEBUG - 2019-08-01 20:46:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.1514
DEBUG - 2019-08-01 20:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.1267
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.2699
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.1578
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.1300
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.1073
DEBUG - 2019-08-01 20:46:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:46:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:46:59 --> Total execution time: 0.0618
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.0722
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.0735
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1307
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1221
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1446
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1317
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.2021
DEBUG - 2019-08-01 20:47:02 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1758
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1314
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1302
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1262
DEBUG - 2019-08-01 20:47:02 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:02 --> Total execution time: 0.1226
DEBUG - 2019-08-01 20:47:03 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:03 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:03 --> Total execution time: 0.0597
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.0612
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.0704
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.0974
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1287
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1451
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1478
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1166
DEBUG - 2019-08-01 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.0937
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1258
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1099
DEBUG - 2019-08-01 20:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.1807
DEBUG - 2019-08-01 20:47:04 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:04 --> Total execution time: 0.2541
DEBUG - 2019-08-01 20:47:05 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:05 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:05 --> Total execution time: 0.0584
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.0732
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.0796
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.0926
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1223
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1280
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1622
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1636
DEBUG - 2019-08-01 20:47:06 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1234
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1379
DEBUG - 2019-08-01 20:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1280
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.1398
DEBUG - 2019-08-01 20:47:06 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:06 --> Total execution time: 0.2151
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:07 --> Total execution time: 0.0641
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:07 --> Drafted_request_model>get_all(): SELECT *
FROM `drafted_request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 20:47:07 --> Total execution time: 0.0715
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
ERROR - 2019-08-01 20:47:07 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 20:47:08 --> 404 Page Not Found: Request/assets
DEBUG - 2019-08-01 20:47:10 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:10 --> Drafted_request_model>get_by_id(): SELECT *
FROM `drafted_request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:47:10 --> Total execution time: 0.0691
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.0926
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.1106
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.1567
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.1511
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.1696
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:28 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:28 --> Total execution time: 0.1171
DEBUG - 2019-08-01 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.2026
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.0886
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.2049
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.1408
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.1169
DEBUG - 2019-08-01 20:47:29 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:29 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:29 --> Total execution time: 0.0738
DEBUG - 2019-08-01 20:47:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:31 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 20:47:31 --> Total execution time: 0.0765
DEBUG - 2019-08-01 20:47:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:31 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:47:31 --> Total execution time: 0.0674
DEBUG - 2019-08-01 20:47:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.0872
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.0973
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1160
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1531
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1520
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.0953
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.2383
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1016
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1395
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.1087
DEBUG - 2019-08-01 20:47:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:32 --> Total execution time: 0.0742
DEBUG - 2019-08-01 20:47:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:33 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '2'
DEBUG - 2019-08-01 20:47:33 --> Total execution time: 0.0745
DEBUG - 2019-08-01 20:47:33 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:33 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:47:33 --> Total execution time: 0.0820
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.0861
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1037
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1128
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1195
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1810
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1258
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1405
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1214
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.3110
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.1835
DEBUG - 2019-08-01 20:47:34 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:47:34 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:47:34 --> Total execution time: 0.0650
DEBUG - 2019-08-01 20:54:44 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.0660
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.0902
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.1039
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.0940
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.0726
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.0655
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.1710
DEBUG - 2019-08-01 20:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.1665
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.1638
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.2657
DEBUG - 2019-08-01 20:54:45 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:45 --> Total execution time: 0.1491
DEBUG - 2019-08-01 20:54:46 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:46 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:46 --> Total execution time: 0.0580
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.0600
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.0653
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.0885
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1129
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1099
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1354
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.2052
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1302
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1058
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.1593
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.3135
DEBUG - 2019-08-01 20:54:48 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:48 --> Total execution time: 0.2310
DEBUG - 2019-08-01 20:54:49 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:49 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:49 --> Total execution time: 0.0550
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.0636
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.0653
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.1442
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.1126
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.1347
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.1339
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:50 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:50 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:50 --> Total execution time: 0.1782
DEBUG - 2019-08-01 20:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.2436
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.0860
DEBUG - 2019-08-01 20:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.1221
DEBUG - 2019-08-01 20:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.1064
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.1059
DEBUG - 2019-08-01 20:54:51 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 20:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 20:54:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 20:54:51 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 20:54:51 --> Total execution time: 0.0623
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:31 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 21:00:31 --> Total execution time: 0.0662
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:31 --> Total execution time: 0.1621
DEBUG - 2019-08-01 21:00:31 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:31 --> Total execution time: 0.1668
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:31 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:31 --> Total execution time: 0.1444
DEBUG - 2019-08-01 21:00:31 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.0686
DEBUG - 2019-08-01 21:00:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.1868
DEBUG - 2019-08-01 21:00:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.0860
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.2037
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.0942
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.1376
DEBUG - 2019-08-01 21:00:32 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:32 --> Total execution time: 0.1122
DEBUG - 2019-08-01 21:00:32 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:33 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:00:33 --> Total execution time: 0.0620
DEBUG - 2019-08-01 21:00:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:00:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:00:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:00:35 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 21:00:35 --> Total execution time: 0.0605
DEBUG - 2019-08-01 21:01:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:13 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'submitted'
DEBUG - 2019-08-01 21:01:13 --> Total execution time: 0.0709
DEBUG - 2019-08-01 21:01:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:13 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.0966
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1455
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1567
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1732
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.2137
DEBUG - 2019-08-01 21:01:14 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1665
DEBUG - 2019-08-01 21:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1232
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1327
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.2443
DEBUG - 2019-08-01 21:01:14 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:14 --> Total execution time: 0.1062
DEBUG - 2019-08-01 21:01:15 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:15 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:15 --> Total execution time: 0.0773
DEBUG - 2019-08-01 21:01:18 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:21 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:21 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 21:01:21 --> Total execution time: 0.0615
DEBUG - 2019-08-01 21:01:28 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 21:01:28 --> Severity: Compile Error --> Cannot redeclare User::index() D:\xampp\htdocs\petty_cash\application\controllers\User.php 109
DEBUG - 2019-08-01 21:01:35 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-08-01 21:01:35 --> 404 Page Not Found: Request/delete
DEBUG - 2019-08-01 21:01:41 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:41 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE `id` = '1'
DEBUG - 2019-08-01 21:01:41 --> Request_transition_model>get_by_request(): SELECT *
FROM `request_transition`
WHERE `request_id` = '1'
DEBUG - 2019-08-01 21:01:41 --> Total execution time: 0.0801
DEBUG - 2019-08-01 21:01:45 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:45 --> No URI present. Default controller set.
DEBUG - 2019-08-01 21:01:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:45 --> Total execution time: 0.0611
DEBUG - 2019-08-01 21:01:57 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_by_id(): SELECT *
FROM `request`
WHERE lower(workflow_status) = 'rejected'
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.0786
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.0929
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.0880
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.1342
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.0705
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.0688
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.2105
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.2341
DEBUG - 2019-08-01 21:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.1531
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.1842
DEBUG - 2019-08-01 21:01:58 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:58 --> Total execution time: 0.1707
DEBUG - 2019-08-01 21:01:59 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:01:59 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:01:59 --> Total execution time: 0.0578
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
WHERE `user_id` = '6'
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.0778
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1371
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1576
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.2048
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1901
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1624
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.2508
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1446
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.2002
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1829
DEBUG - 2019-08-01 21:02:07 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:07 --> Total execution time: 0.1813
DEBUG - 2019-08-01 21:02:08 --> UTF-8 Support Enabled
DEBUG - 2019-08-01 21:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-08-01 21:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-08-01 21:02:08 --> Request_model>get_all(): SELECT *
FROM `request`
DEBUG - 2019-08-01 21:02:08 --> Total execution time: 0.0623
