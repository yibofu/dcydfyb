<?php
//000000000000s:234:"SELECT d.card_status,l.id,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time FROM dd_userdetail as d LEFT JOIN dd_loan as l on d.uid=l.uid WHERE (  (d.card_status BETWEEN 2 AND 12 ) ) AND ( l.is_over = '2' ) LIMIT 0,20  ";
?>