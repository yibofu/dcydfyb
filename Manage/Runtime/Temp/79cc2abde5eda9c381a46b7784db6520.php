<?php
//000000000000s:245:"SELECT u.name,u.card_no,l.id,l.loan_num,l.uid,l.loan_money,l.time_limit,l.check_name,l.check_time,l.deal_num FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.plan = 8 ) AND ( l.loan_status = 1 ) ORDER BY l.check_time LIMIT 0,20  ";
?>