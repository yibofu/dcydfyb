<?php
//000000000000s:304:"SELECT a.id,a.kid,a.zid,b.kind,c.zname,a.name,a.url,a.title,a.money,a.introduce,a.chapternum,a.isrecommend,a.kctitle,a.collnum,a.img FROM dcyd_view as a LEFT JOIN dcyd_viewkinds as b on b.id = a.kid LEFT JOIN dcyd_viewclass as c on c.id = a.zid WHERE ( b.kind = '系列专题' and a.img != '' ) LIMIT 3  ";
?>