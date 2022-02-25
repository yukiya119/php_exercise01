<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case $subjects[0]:
            $day =  "明日";
            break;
        case $subjects[1]:
            $day = "明後日";
            break;
        case $subjects[2]:
            $day = "明々後日";
            break;
        case $subjects[3]:
            $day = "昨日";
            break;
        case $subjects[4]:
            $day = "中止";
            break;
        default:
            break;
    }
    echo "{$subject}の試験は{$day}です。<br>";
}
// 結構難儀したorz