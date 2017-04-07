<?php
//000000000000s:171:"SELECT COUNT(*) AS tp_count FROM dd_loan as l LEFT JOIN dd_admin as a on a.id=l.check_id LEFT JOIN dd_repay as r on r.load_id=l.id and r.installments=l.repay_num LIMIT 1  ";
?>