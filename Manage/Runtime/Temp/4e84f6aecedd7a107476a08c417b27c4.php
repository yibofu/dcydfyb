<?php
//000000000000s:309:"SELECT u.name,u.card_no,l.id,l.loan_num,l.uid,l.loan_money,l.len_money,l.check_time,l.loan_status,l.len_time,l.len_status,l.check_name,l.deal_num FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( `next_plan` = 12 ) AND ( `loan_status` = 1 ) ORDER BY l.len_status desc,l.creatime desc LIMIT 0,20  ";
?>