<?php
//000000000000s:267:"SELECT l.id,l.loan_num,l.uid,u.card_no,u.name,l.loan_money,l.time_limit,l.check_time,l.check_name FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.next_plan = '6' ) AND ( l.loan_status = 1 ) AND ( u.dark_status = 2 ) ORDER BY l.check_time LIMIT 0,20  ";
?>