<?php
//000000000000s:252:"SELECT u.id as uid,m.username,u.job,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time,l.id,l.status FROM dd_loan as l LEFT JOIN dd_admin as m on m.id=l.check_id LEFT JOIN dd_user as u on u.id=l.uid WHERE ( l.check_id <> '' ) LIMIT 0,20  ";
?>