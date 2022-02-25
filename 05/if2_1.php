<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は' . $poket_money . '円です。' . '<br>';

while ($poket_money >= $fund_raising) {
    echo $fund_raising . '円募金しました。' . '<br>';
    $barance = $poket_money - $fund_raising;
    echo '残り残高は' . $barance . '円です。' . '<br>';
    $poket_money = $barance;
}

echo 'あなたはこれ以上募金できません。';
