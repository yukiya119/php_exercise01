<?php
$name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
}

if ($name) {
    echo htmlspecialchars('私の名前は、' . $name . 'です。', ENT_QUOTES, 'UTF-8');
}
