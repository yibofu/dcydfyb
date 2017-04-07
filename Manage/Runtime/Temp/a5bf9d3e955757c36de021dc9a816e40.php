<?php
//000000000000s:229:"SELECT a.id,a.address,a.startday,a.endday,a.type,a.teacherid,b.tname,b.cost,b.days,t.name FROM dcyd_open_course as a LEFT JOIN dcyd_open_course_type as b on a.type=b.id LEFT JOIN dcyd_teacher as t on a.teacherid=t.id LIMIT 0,20  ";
?>