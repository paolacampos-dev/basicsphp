<?php

/*
Challenge 1: Create a multiplication table using a nested `for` loop.
The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
...
10 x 10 = 100
*/

echo '<h3>Multiplication Table</h3>';

for ($i = 1; $i < 11; $i++) { // this is the outer loop
    for ($j = 1; $j < 11; $j++) { //this is the inner loop; reason why we need another variable instead of i we use j
        echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
    }
}



/*
Challenge 2: Get the sum of the numbers in an array by using a
foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbs = [1, 3, 5, 6, 7];

$sum = 0;

foreach ($numbs as $numb) {
    $sum += $numb;
}

echo $sum;

echo '<br>';


//For loop:
$sum2 = 0;

for ($i = 0; $i < count($numbs); $i++) {
    $sum2 += $numbs[$i];
}

echo $sum2;


/*
Challenge 3: Calculate the average grade from an associative array
containing student names and grades.
*/

echo '<h3>Average Grade</h3>';

$students = [
    [
        'name' => 'Charles',
        'grades' => [76, 87, 90, 65]
    ],
    [
        'name' => 'Jane',
        'grades' => [72, 57, 92, 55]
    ],
    [
        'name' => 'John',
        'grades' => [45, 67, 70, 65]
    ]
];

foreach ($students as $student) {
    $name = $student['name'];
    $grades = $student['grades'];
    //calculate average
    $average = array_sum($grades) / count($grades);
    echo "{$name}: Average Grade = {$average} <br>";
}
