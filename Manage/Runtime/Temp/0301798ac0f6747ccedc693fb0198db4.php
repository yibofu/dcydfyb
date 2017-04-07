<?php
//000000000000s:169:"SELECT l.id,l.loan_num,l.uid,l.creatime,u.name,l.loan_money,l.time_limit FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.plan = 1 ) ORDER BY l.creatime ";
?>