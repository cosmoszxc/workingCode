<?php

$number = random_int(1000, 9999);
#$one_thousand = intval($number / 1000); #тысяча приведенная к int
$one_thousand = (int)($number / 1000); #тысяча приведенная к int
$hundred = ($number / 100) % 10; #сотня
$ten = ($number / 10) % 10;#десяток
$one = $number % 10; #единица
echo $number, PHP_EOL;

echo $one_thousand, PHP_EOL ,$hundred, PHP_EOL,  $ten, PHP_EOL, $one, PHP_EOL ;
