<!-- 
Anonymous Functions can be Closure functions or Call Back functions:

-->

<?php

$square = function ($number) {
    return $number * $number;
}; // we need to place a semicolon with an anonyous functions, not with the name function is not needed
// 4calling it we can place it inside a variable or inside another function

$result = $square(5);
echo 'The square of 5 is ' . $result . '<br>'; // The square of 5 is 25


//Closures:
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) //use let us have access to the $count variable is out in scope 
    {
        return ++$count;
    };
    return $counter;
}
$counter = createCounter(); // we can use again $counter because is out of the scope of the function

echo $counter() . '<br>'; // 1
echo $counter() . '<br>'; // 2
echo $counter() . '<br>'; // 3
echo $counter() . '<br>'; // 4



//  Call Back function (passed as an argument as another function):

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

/* refactored as a callback:
        $squaredNumbers = array_map(fn($number) => $number * $number, $numbers);

    or by creating a variable on the anonymous function as:
        $square = function ($number)    { return $number * $number}
        $squaredNumbers = array_map ($square, $numbers);
*/

print_r($squaredNumbers); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


function applyCallback($callback, $value)
{
    return $callback($value);
}
$double = function ($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);
echo $result; // 10



//Arrow functions:
function add($a, $b)
{
    return $a + $b;
}
echo add(2, 3); // 5

/* transform it to an arrow function (4 just one line (4 the return) a difference with JS where we could do {add more lines of code + return})
    $add = fn ($a, $b) => $a + $b;
    echo $add(2, 3)
*/


?>