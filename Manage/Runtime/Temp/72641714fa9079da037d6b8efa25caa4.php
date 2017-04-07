<?php
//000000000000s:224:"SELECT COUNT(*) AS tp_count FROM dd_userdetail as d LEFT JOIN dd_loan as l on f.uid=l.uid WHERE (  (l.create_time BETWEEN 1450022400 AND 1450108800 ) ) AND ( l.is_over = 2 ) AND ( (l.status = 0) OR (l.status = 1) ) LIMIT 1  ";
?>