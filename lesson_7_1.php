<?php
$students = [
    [
        'name' => 'Emily',
        'age' => 21,
        'courses' => [
            ['title' => 'Computer Science', 'grade' => 'A'],
            ['title' => 'Statistics', 'grade' => 'B+'],
            ['title' => 'Literature', 'grade' => 'A-']
        ]
    ],
    [
        'name' => 'James',
        'age' => 22,
        'courses' => [
            ['title' => 'Mathematics', 'grade' => 'B'],
            ['title' => 'Physics', 'grade' => 'A'],
            ['title' => 'Economics', 'grade' => 'B+']
        ]
    ],
    [
        'name' => 'Sophia',
        'age' => 20,
        'courses' => [
            ['title' => 'Biology', 'grade' => 'A-'],
            ['title' => 'Chemistry', 'grade' => 'A'],
            ['title' => 'Psychology', 'grade' => 'B']
        ]
    ]
];

foreach ($students as $student) {
    echo "Student: " . $student['name'] . " (Age: " . $student['age'] . ")\n";
    echo "Courses:\n";

    foreach ($student['courses'] as $course) {
        echo "- " . $course['title'] . ": " . $course['grade'] . "\n";
    }

    echo "\n";
}
?>