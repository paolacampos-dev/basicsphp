<?php

$number = 1;

while ($number <= 10) {
    if ($number % 2 == 0) {
        echo $number . ' is even <br>';
    } else {
        echo $number . ' is odd <br>';
    }

    $number++;
}
/* output:
    1 is odd
    2 is even
    3 is odd
    4 is even
    5 is odd
    6 is even
    7 is odd
    8 is even
    9 is odd
    10 is even
*/

//break out of a loop (to stop the loop before finishes)
for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) { //when 5 break the loop
        break;
    }

    echo $i . '<br>';
}
/* output:
    0
    1
    2
    3
    4
*/

//skip and continue:
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }

    echo $i . '<br>';
} // output from 1 to 


$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade <br>';
    }
}
/*  Jack has an excellent grade
    Jill has an excellent grade*/