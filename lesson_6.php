<?php
$numbers = [1, 2, 3, 4, 5];
$subjects = ['Math', 'Physics', 'Chemistry', 'Biology', 'Literature'];

$studentNames = [
    'first' => 'Balzhan',
    'second' => 'Bakocore',
    'third' => 'Bako',
    'fourth' => 'Bako',
    'fifth' => 'Bako',
];

$grades = [
    'midterm' => 85,
    'final' => 92,
    'homework' => 78,
    'participation' => 90,
    'extra' => 88,
];

$hobbies = [
    'music' => 'playing guitar',
    'sport' => 'volleyball',
    'art' => 'drawing',
    'reading' => 'fantasy novels',
    'language' => 'learning French',
];


echo "Numbers:\n";
foreach ($numbers as $number) {
    echo $number . "\n";
}

echo "\nSubjects:\n";
foreach ($subjects as $subject) {
    echo $subject . "\n";
}

echo "\nStudent Names:\n";
foreach ($studentNames as $key => $name) {
    echo "$key: $name\n";
}

echo "\nGrades:\n";
foreach ($grades as $type => $grade) {
    echo "$type: $grade\n";
}

echo "\nHobbies:\n";
foreach ($hobbies as $category => $hobby) {
    echo "$category: $hobby\n";
}
