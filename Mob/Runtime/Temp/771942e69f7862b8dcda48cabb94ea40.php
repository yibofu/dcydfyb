<?php
//000000000000s:190:"SELECT l.id,l.deal_num,r.should_money,r.installments,r.repay_time FROM dd_repay as r LEFT JOIN dd_loan as l on r.lid=l.id WHERE ( r.uid = 35 ) AND ( r.status = 1 ) ORDER BY r.repay_time asc ";
?>