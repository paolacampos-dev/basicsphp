<?php

/*
| Arithmetic Operators
| Operator | Description
| +        | Addition
| -        | Subtraction
| *        | Multiplication
| /        | Division
| %        | Modulus
|
*/

$output = null;

$numb1 = 20;
$numb2 = 10;
$numb3 = 7;

$output = "$numb1 + $numb2 = " . $numb1 + $numb2;
$output = "$numb1 + $numb2 = " . $numb1 / $numb2;   // 2
$output = "$numb1 + $numb2 = " . $numb1 % $numb2; // 0 remains
$output = "$numb1 + $numb2 = " . $numb1 % $numb3; // 6 that is what is left because 7 goes 2 times into 20 remaining 6

//  Assigment operator 
$numb4 = 10;
$numb4 = $numb4 + 20; // 30
$numb4 += 20; // 30
$numb4 -= 20; // -10
$numb4 /= 2; // 5


//  Built-in PHP Functions
//  rand() ==> will generate a random number
$output = rand();
$output = getrandmax(); // anywhere from 0 to this
$output = rand(1, 10); // gets a random number in between  1 to 10

//round()  --> rounding a number
$output = round(4.7); //5

//ceil() ==> will round up
$output = ceil(4.2); // 5

//floor() ==> will round down
//sqrt() ==> square root
//pi()
//abs() --> absolute number
//max() --> will gives the maximun number in the array or a parameters
//min() --> will gives the minimum number in the array or a parameters
//number_format() --> formats a number with group thousands
$output = number_format(1234567.197412, 2, '.', ',')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">
                PHP From Scratch
            </h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class-"text-xl">
                <?= $output ?>
            </p>
            <?php
            $num1 = 10;
            $num2 = 5;

            echo $num1 + $num2 . '<br>';
            echo $num1 - $num2 . '<br>';
            echo $num1 * $num2 . '<br>';
            echo $num1 / $num2 . '<br>'; // divide
            echo $num1 % $num2 . '<br>'; //leftover
            ?>
        </div>
    </div>
</body>

</html>