<?php
//000000000000s:302:"SELECT u.name,u.phone,r.id,r.lid,r.uid,r.bianhao,r.installments,r.time_limit,r.repay_time,r.real_repay_time,r.real_money,r.check_name,r.check_id,r.corpus,r.should_money,r.status,r.money_status,r.desc,r.is_repay FROM dd_repay as r LEFT JOIN dd_user as u on r.uid=u.id WHERE ( r.is_use = 1 ) LIMIT 0,20  ";
?>