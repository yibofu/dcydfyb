<?php
//000000000000s:250:"SELECT COUNT(*) AS tp_count FROM dd_loan as l LEFT JOIN dd_user as u on l.uid=u.id WHERE ( l.loan_status = '-请选择-' ) AND ( l.len_status = '-请选择-' ) AND ( l.check_id = '$vo.id' ) AND ( `next_plan` = 12 ) AND ( `loan_status` = 1 ) LIMIT 1  ";
?>