<?php
//000000000000s:289:"SELECT l.id,l.uid,l.loan_num,l.loan_money,l.loan_installments,l.remit_status,l.name,l.phone,a.realname,l.repay_num,r.should_money,r.repay_time FROM dd_loan as l LEFT JOIN dd_admin as a on a.id=l.check_id LEFT JOIN dd_repay as r on r.loan_id=l.id and r.installments=l.repay_num LIMIT 0,20  ";
?>