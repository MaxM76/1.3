<?php
$x = rand(0,100);
echo 'Пользователь задумал: ' . $x . PHP_EOL;
//$x = $_GET['x'];

$var1 = 1;
$var2 = 1;
$result_str = 'Задуманное число НЕ входит в числовой ряд';

while ($var1 <= $x) {
    if ($var1 == $x) {
        $result_str = 'Задуманное число входит в числовой ряд';
        break;
    }

    $var3 = $var1;
    $var1 = $var1 + $var2;
    $var2 = $var3;
}

echo $result_str . PHP_EOL;
?>

