<?php

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        echo "Average grade for $student: $average<br>";
    }
}

// Create a multidimensional array to store student grades
$studentGrades = [
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student 3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
];

// Call the function with the provided multidimensional array
calculateAverageGrades($studentGrades);

?>
