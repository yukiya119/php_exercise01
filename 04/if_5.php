<?php

$num = 1;

$flg = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $flg = false;
        break;
    }
}

if ($num != 1 && $flg) {
    echo $num . "は素数です。";
} else {
    echo $num . "は素数ではありません。";
}
