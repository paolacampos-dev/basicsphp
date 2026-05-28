<?php

/*
Challenge 1: Sum of an array

1. Create an array of numbers
2. Get the sum of all of the numbers combined and put into a variable.
3. Get the amount of numbers in the array and put into a variable.
4. Print out 'The sum of the amount numbers is: {sum}'. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'.
*/

echo '<h3>Sum of array</h3>';

$numb = [1, 3, 4, 6];
$sumArr = array_sum($numb);
$sumArr = $numb[0] + $numb[1] + $numb[2] + $numb[3];
$amount = count($numb); //4

echo $sumArr; // 14
echo $amount; // 4
echo ' The sum of the  ' . $amount . ' numbers is ' . $sumArr; // The sum of the 4 numbers is 14


/*
Challenge 2: Colors array

1. Reverse the $colors array.
2. Add a new color to the beginning of the array.
3. Remove the last color from the array.
4. Print the resulting array.
*/

echo '<h3>Colors Array</h3>';



/*
Challenge 3: Job listings

1. Create an array of job listings.
2. Each job listing should have:
    - job title
    - company
    - location
    - salary
3. Loop through the array and display each job listing.
*/

echo '<h3>Job Listings</h3>';
