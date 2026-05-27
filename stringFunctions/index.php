<?php
$output = null;
$string = 'hello world';

// strlen --> string length
$output = strlen($string);

//str_word_count()
//strpos --> gives the position dep on its index starting with 0
$output  = strpos($string, 'world'); //6

//get specific char by index
$output = $string[0]; //h

//substr()
$output = substr($string, 6, 5); //stars in the position 6 and runs 5 positions => world

//str_replace()
$output  = str_replace('world', 'Universe', $string); // hello Universe

//strtolower() --> all in lower cases
//strtoupper() --> all in upper cases
//ucewords() --> just the first capital letter the rest lower case
//trim() --> to clear free spaces in a string

//https://www/php.net/manual/en/ref.strings.php


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
        </div>
    </div>
</body>

</html>