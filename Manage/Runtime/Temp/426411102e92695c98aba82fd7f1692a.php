<?php
//000000000000s:206:"SELECT l.loan_money,l.loan_installments,l.create_time,l.status,l.recode,a.realname FROM dd_loan as l LEFT JOIN dd_admin as a on a.id=l.check_id WHERE ( l.uid = '2' ) ORDER BY l.create_time desc LIMIT 0,10  ";
?>