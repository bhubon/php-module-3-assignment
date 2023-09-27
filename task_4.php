<?php
$studentGrades = [
    "Student1" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Student2" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Student3" => ["Math" => 75, "English" => 80, "Science" => 8]
];

function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects); // Sum the grades for each subject
        $count = count($subjects); // Count the number of subjects
        $average = $total / $count; // Calculate the average
        echo "Average grade for $student: " . number_format($average, 2) . "</br>";
    }
}

calculateAverageGrades($studentGrades);