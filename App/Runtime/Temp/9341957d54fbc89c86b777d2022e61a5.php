<?php
//000000000000s:423:"SELECT dcyd_question.id id,dcyd_question.number number,dcyd_question.addtime addtime,dcyd_question.question question,dcyd_question.status status,dcyd_question_type.name type,dcyd_answer.teacherid teacher FROM `dcyd_question` inner join dcyd_question_type on dcyd_question.type=dcyd_question_type.id left join dcyd_answer on dcyd_question.id=dcyd_answer.qid WHERE ( userid=3 ) ORDER BY dcyd_question.addtime desc LIMIT 0,6  ";
?>