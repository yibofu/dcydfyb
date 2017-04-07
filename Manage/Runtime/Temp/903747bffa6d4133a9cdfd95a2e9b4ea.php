<?php
//000000000000s:240:"SELECT u.name,u.card_no,l.id,l.loan_num,l.uid,l.loan_money,l.len_money,l.check_time,l.len_time,l.len_status,l.check_name,l.deal_num FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( `next_plan` = 12 ) AND ( `loan_status` = 1 ) ";
?>