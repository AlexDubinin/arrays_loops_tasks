<?php
/**
13. Вывести таблицу умножения
 */



for ($i=1; $i <= 9; $i++) {
    echo '<br> <hr>';

    for ($j=1; $j <=9; $j++) {
        $c = $i * $j;
        echo "$i * $j = $c <br>";
    }
}
