<?php
//000000000000s:308:"SELECT a.id,a.question,a.addtime,b.Phone,b.nickname,c.answer,d.name,e.name typename FROM dcyd_question as a LEFT JOIN dcyd_user as b on b.id = a.userid LEFT JOIN dcyd_answer as c on c.qid = a.id LEFT JOIN dcyd_teacher as d on d.id = c.teacherid LEFT JOIN dcyd_question_type as e on e.id = a.type LIMIT 0,20  ";
?>