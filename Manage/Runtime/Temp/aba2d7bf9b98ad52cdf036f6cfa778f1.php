<?php
//000000000000s:192:"SELECT l.id,l.loan_num,l.uid,u.card_no,u.name,l.loan_money,l.time_limit,l.creatime,l.check_name FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.plan = 2 ) ORDER BY l.creatime ";
?>