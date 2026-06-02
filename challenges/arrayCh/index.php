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

$colors = ['white', 'red', 'blue'];
echo $output = rsort($colors); // 1 as true
echo "<pre>"; // needs to be inside quotes bevause they are strings as HTML
print_r($colors); //Array ( [0] => white [1] => red [2] => blue )
$output = array_pop($colors);
echo $output; //Array ( [0] => white [1] => red [2] => blue ) blue
echo "<br>";
var_dump($colors);
echo "</pre>";

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

$jobListings = [
    [
        'jobTitle' => 'PHP Developer',
        'company' => 'Tech Solutions',
        'location' => 'Manchester',
        'salary' => '£35,000'
    ],
    [
        'jobTitle' => 'WordPress Developer',
        'company' => 'Creative Agency',
        'location' => 'London',
        'salary' => '£40,000'
    ],
    [
        'jobTitle' => 'Frontend Developer',
        'company' => 'Web Works',
        'location' => 'Liverpool',
        'salary' => '£32,000'
    ]
];

foreach ($jobListings as $job) {
    echo "<pre>";
    echo "Job Title: " . $job['jobTitle'] . "<br>";
    echo "Company: " . $job['company'] . "<br>";
    echo "Location: " . $job['location'] . "<br>";
    echo "Salary: " . $job['salary'] . "<br><br>";
    echo "</pre>";
}
