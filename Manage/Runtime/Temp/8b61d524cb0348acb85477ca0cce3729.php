<?php
//000000000000s:219:"SELECT d.card_status,l.id,l.loan_num,l.name,l.loan_money,l.loan_installments,l.create_time FROM dd_userdetail as d LEFT JOIN dd_loan as l on d.uid=l.uid WHERE ( l.is_over = '2' ) ORDER BY l.create_time desc LIMIT 0,20  ";
?>