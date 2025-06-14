<?php
function calculateAverage($grades) {
    if (count($grades) == 0) {
        echo "Ошибка: нет оценок для расчета";
        return 0; // Возвращаем 0 если массив пустой
    }

    $sum = array_sum($grades);
    $count = count($grades);
    return $sum / $count;
}

$grades1 = [4, 5, 3];
$grades2 = [];

echo "Средний балл 1: ".calculateAverage($grades1)."\n";
echo "Средний балл 2: ".calculateAverage($grades2);
?>