<?php
/**
21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.

1
22
333
4444
55555
 */

$arr = [
    1,
    22,
    333,
    4444,
    55555,
    666666,
    7777777,
    88888888,
    999999999
];


for ($i=0; $i<9; $i++) {
    echo $arr[$i]. '<br>';
}