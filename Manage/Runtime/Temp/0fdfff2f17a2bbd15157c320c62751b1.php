<?php
//000000000000s:234:"SELECT l.id,l.loan_num,l.uid,u.card_no,u.name,l.loan_money,l.time_limit,l.check_time,l.check_name FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( `plan` = '6' ) AND ( `loan_status` = 1 ) ORDER BY l.creatime LIMIT 0,20  ";
?>