<?php
//000000000000s:252:"SELECT u.name,u.card_no,l.id,l.uid,l.loan_num,l.deal_num,l.loan_money,l.time_limit,l.check_name,l.check_time FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.next_plan = '9' ) AND ( l.loan_status = 1 ) ORDER BY l.check_time LIMIT 0,20  ";
?>