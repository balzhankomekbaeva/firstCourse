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

$numbers[] = 6;
$subjects[] = 'Psychology';

$studentNames['sixth'] = 'balzhikha';
$hobbies['dance'] = 'hip-hop';

unset($numbers[3]);
unset($studentNames['first']);

print_r($hobbies);