<?php
//000000000000s:318:"SELECT d.card_status,l.id,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time FROM dd_userdetail as d LEFT JOIN dd_loan as l on d.uid=l.uid WHERE (  (l.create_time BETWEEN 1450022400 AND 1450108800 ) ) AND ( l.is_over = 2 ) AND ( (l.status = 0) OR (l.status = 1) ) ORDER BY d.card_status desc LIMIT 0,20  ";
?>