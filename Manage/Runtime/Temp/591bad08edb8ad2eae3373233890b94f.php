<?php
//000000000000s:206:"SELECT m.realname,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time,l.id FROM dd_loan as l LEFT JOIN dd_admin as m on m.id=l.check_id WHERE ( l.status = 0 ) AND ( l.is_over = 2 ) LIMIT 0,20  ";
?>