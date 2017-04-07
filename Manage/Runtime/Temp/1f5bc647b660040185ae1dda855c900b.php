<?php
//000000000000s:212:"SELECT l.id,l.loan_num,l.uid,l.creatime,u.name,u.card_no,l.loan_money,l.time_limit,l.check_name FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.next_plan = null ) ORDER BY l.creatime LIMIT 0,20  ";
?>