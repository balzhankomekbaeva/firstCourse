<?php
$number1 = 15;
$number2 = 10;

if ($number1 > $number2) {
    echo "Первое число ($number1) больше второго ($number2)";
} elseif ($number1 < $number2) {
    echo "Второе число ($number2) больше первого ($number1)";
} else {
    echo "Оба числа равны ($number1)";
}
?>