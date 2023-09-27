<?php
$grades = [85, 92, 78, 88, 95];

function sortedGrades($grades) {
    rsort($grades);
    return $grades;
}

$sortedGrades = sortedGrades($grades);

print_r($sortedGrades);