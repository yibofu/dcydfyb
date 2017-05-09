<?php
//000000000000s:233:"SELECT a.id,b.kind,a.name,a.url,a.title,a.money,a.introduce,a.chapternum,a.kctitle,a.img FROM dcyd_view as a LEFT JOIN dcyd_viewkinds as b on b.id = a.kid WHERE ( b.kind = '系列专题' and a.img != '' ) GROUP BY a.kctitle LIMIT 3  ";
?>