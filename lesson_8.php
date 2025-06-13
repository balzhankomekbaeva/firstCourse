<?php
$month = date('n');

if ($month >= 3 && $month <= 5) {
    $season = 'Весна';
} elseif ($month >= 6 && $month <= 8) {
    $season = 'Лето';
} elseif ($month >= 9 && $month <= 11) {
    $season = 'Осень';
} else {
    $season = 'Зима';
}

echo "Сейчас " . strtolower($season) . ". ";
echo "Текущий месяц: " . date('F') . " ($month-й месяц года).";
?>