<?php
/*
2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
 С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */

$arr = [1, 20, 15, 17, 24, 35];

$result = 0;
foreach ($arr as $res) {
    $result += $res;
}
echo $result;

//$result = array_sum($arr);
//
//}
//echo $result;