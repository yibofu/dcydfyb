<?php
//000000000000s:252:"SELECT u.name,u.card_no,l.id,l.uid,l.loan_num,l.creatime,l.loan_money,l.time_limit,l.check_id,l.check_name,l.plan,l.loan_status,l.deal_num FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.plan = '6' ) AND ( l.check_id = '-请选择-' ) ";
?>