<?php

/*  
Challenge 1: Fahrenheit to Celsius:
Write a function called fahrenheitToCelsius that takes a temperature
in Fahrenheit as an argument and returns the temperature in Celsius.

There is an easy version and a version that is slightly harder.
Try them both.

Easy:
•   Create a named function called fahrenheitToCelsius that takes a fahrenheit temperature as an argument.
• Return the temperature converted to Celsius.
• Print to the screen like "68°F = 20°C". You can use the ° entity for the degree symbol.
• Use the following formula to convert Fahrenheit to Celsius:
      Celsius = (Fahrenheit - 32) * 5 / 9

Example Output:
    32°F = 0°C
    68°F = 20°C
    100°F = 37.78°C    
*/


function fahrenheitToCelsius($f)
{
    $c = ($f - 32) * 5 / 9;
    return $c;
}
$degreeToConvert = 68;
echo $degreeToConvert . '&deg;F = ' . fahrenheitToCelsius($degreeToConvert) . '&deg;C'; // 68*C = 20*C
echo '<br>';

/* or:
function fahrenheitToCelsius($f)
{
    $c = ($f - 32) * 5 / 9;
    return $f . "&deg;F = " . $c . "&deg;C";
}
echo fahrenheitToCelsius(68);
*/

// Refactor the function to an arrow function:
$fahrenheitToCelsius = fn($f) => ($f - 32) * 5 / 9;

$degreeToConvert = 50;
echo $degreeToConvert . '&deg;F = ' . fahrenheitToCelsius($degreeToConvert) . '&deg;C'; // 68*C = 20*C
echo '<br>'; // 50*C = 10*F



//Refactor to a closure function:
$baseTemp = 32;

$fahrenheitToCelsius = function ($f) use (&$baseTemp) {
    return ($f - $baseTemp) * 5 / 9;
};
$degreeToConvert = 75;
echo $degreeToConvert . '&deg;F = ' . fahrenheitToCelsius($degreeToConvert) . '&deg;C'; // 75*C = 24*C
echo '<br>';


/* 
Challenge 2: Print Names In Uppercase:
Create a function called printNamesToUpperCase that takes an array of names as an argument.
The function should loop through the array and print each name to the screen in uppercase letters.
Hint:
- You can use the strtoupper() function to convert a string to uppercase.
*/

function printNamesToUpperCase($names)
{
    foreach ($names as $name) {
        $uppercaseName = strtoupper($name);
        echo $uppercaseName . '<br>';
    }
}
$names = ['John', 'Jane', 'Bob', 'Alice'];
printNamesToUpperCase($names);


/*  
Challenge 3: Find the longest word
1. Create a function called findLongestWord that takes a sentence as an argument.
2. The function should return the longest word in the sentence.
3. The output should look like this: Longest Word: programming 
*/

function findLongestWord($sentence)
{
    $words = explode(' ', $sentence);

    $longestWord = '';

    foreach ($words as $word) {
        $word = trim($word, '.,!?:');

        if (strlen($word) > strlen($longestWord) || $longestWord === '') {
            $longestWord = $word;
        }
    }
    return $longestWord;
}
echo findLongestWord('Today is wonderful, as tonight!'); // wonderful
