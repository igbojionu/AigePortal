<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-16 10:49:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/aigelcyv/portal.aige.info/application/models/Quiz_model.php 878
ERROR - 2022-06-16 10:51:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://aige.info:465 (Connection timed out) /home/aigelcyv/portal.aige.info/system/libraries/Email.php 2069
ERROR - 2022-06-16 10:52:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/aigelcyv/portal.aige.info/application/models/Quiz_model.php 878
ERROR - 2022-06-16 10:53:59 --> Severity: Warning --> fsockopen(): unable to connect to ssl://aige.info:465 (Connection timed out) /home/aigelcyv/portal.aige.info/system/libraries/Email.php 2069
ERROR - 2022-06-16 10:53:59 --> Severity: Warning --> Division by zero /home/aigelcyv/portal.aige.info/application/models/Quiz_model.php 746
ERROR - 2022-06-16 10:53:59 --> Query error: Unknown column 'NAN' in 'field list' - Invalid query: UPDATE `savsoft_result` SET `total_time` = 0, `end_time` = 1655373239, `score_obtained` = 0, `percentage_obtained` = NAN, `manual_valuation` = 0, `result_status` = 'Pass'
WHERE `rid` IS NULL
ERROR - 2022-06-16 15:41:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') ORDER BY FIELD(qid,)' at line 1 - Invalid query: select * from savsoft_qbank join savsoft_category on savsoft_category.cid=savsoft_qbank.cid where qid in () ORDER BY FIELD(qid,)  
