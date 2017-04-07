<?php
//000000000000s:208:"SELECT m.realname,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time,l.id FROM dd_admin as m LEFT JOIN dd_loan as l on l.check_id = m.id WHERE ( l.status = 0 ) AND ( l.is_over = 2 ) LIMIT 0,20  ";
?>