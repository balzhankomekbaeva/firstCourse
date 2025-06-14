<?php
$words = ["apple", "orange", "lemon", "blueberry", "banana"];

$longWords = array_filter($words, function($word) {
    return strlen($word) > 5;
});

echo "Слова длиннее 5 букв: ";
foreach ($longWords as $word) {
    echo $word . " ";
}
?>