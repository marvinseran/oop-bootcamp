<?php 
$groupA = [
    ['name' => 'Alice', 'grade' => 85],
    ['name' => 'Bob', 'grade' => 78],
    ['name' => 'Charlie', 'grade' => 93],
    ['name' => 'Diana', 'grade' => 71],
    ['name' => 'Evan', 'grade' => 82],
    ['name' => 'Fiona', 'grade' => 91],
    ['name' => 'George', 'grade' => 76],
    ['name' => 'Hannah', 'grade' => 88],
    ['name' => 'Ian', 'grade' => 95],
    ['name' => 'Jaqen', 'grade' => 67]
];

$groupB = [
    ['name' => 'Kara', 'grade' => 90],
    ['name' => 'Liam', 'grade' => 80],
    ['name' => 'Mia', 'grade' => 84],
    ['name' => 'Noah', 'grade' => 79],
    ['name' => 'Olivia', 'grade' => 92],
    ['name' => 'Peyton', 'grade' => 68],
    ['name' => 'Quinn', 'grade' => 87],
    ['name' => 'Ryan', 'grade' => 73],
    ['name' => 'Sophia', 'grade' => 94],
    ['name' => 'Tyler', 'grade' => 81]
];

function calculateAverage($group) {
    $sum = 0;
    foreach ($group as $student) {
        $sum += $student['grade'];
    }
    return $sum / count($group);
}

function moveStudent(&$fromGroup, &$toGroup, $studentName) {
    foreach ($fromGroup as $key => $student) {
        if ($student['name'] === $studentName) {
            $toGroup[] = $student; 
            unset($fromGroup[$key]); 
            break;
        }
    }
}
echo "Average score of Group A: " . calculateAverage($groupA) . "\n";
echo "Average score of Group B: " . calculateAverage($groupB) . "\n";

moveStudent($groupA, $groupB, 'Ian'); 
moveStudent($groupB, $groupA, 'Peyton');

echo "After swapping:\n";
echo "Average score of Group A: " . calculateAverage($groupA) . "\n";
echo "Average score of Group B: " . calculateAverage($groupB) . "\n";

?>