<?php
//000000000000s:234:"SELECT u.name,u.card_no,l.id,l.loan_num,l.uid,l.loan_money,l.time_limit,l.check_name,l.check_time FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( `plan` = 8 ) AND ( l.loan_status = 1 ) ORDER BY l.check_time LIMIT 0,20  ";
?>