<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は、' . '<br>';
foreach ($foods as $meal_time => $food) {
    echo $meal_time . 'に' . $food . '<br>';
}
echo 'を食べます'; // 炭水化物しか食わん…
