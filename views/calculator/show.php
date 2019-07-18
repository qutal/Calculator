<?php
echo '<br>';
foreach ($res as $re){
    echo '<h2>-------------</h2>';
    for(reset($re);$k=key($re);next($re)){
        switch ($k){
            case 'id':echo 'id:'.$re[$k].', ';break;
            case 'first_count':echo 'Первое число:'.$re[$k].', ';break;
            case 'second_count':echo 'Второе число:'.$re[$k].', ';break;
            case 'sign':echo 'Знак:'.$re[$k].', ';break;
            case 'res':echo 'Результат:'.$re[$k];break;
        }
    }


}


