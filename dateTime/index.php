<?php

/*
| Dates & Times
|
| Format Characters
| Y - The year
| m - The month
| d - The day
| D - The day of the week short name
| l - The full day of the week name
| h - The hour
| i - The minute
| s - The second
| a - AM/PM
|
*/

//get year 
$output = date('Y');

//Timestamp --> a number that represents a specific a date and time has elapse on miliseconds that has pass from a referenced pointing time (EPOC) 1.01.1970
$output = date('Y', 936345600); // 1999 (the second parameter is just the timeStamp has elapse since EPOC)
$outout = date('Y', strtotime('1999-09-01')); //1999

//get all date
$output = date('Y-m-d');
$output = date('d-m-Y');

//get hour
$output = date('h');

//get all 
$output = date('Y-m-d h:i:s a'); // 2026-05-26 05:42:36 am

//https://www.php.net/manual/en/function.date.php
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
        <div class="bg-white rounded-lg shadow-md p-6">
            <?= $output

            /* echo date('Y');
            echo '<br>';
            echo date('m');
            echo '<br>';
            echo date('d');
            echo '<br>';
            echo date('D');
            echo '<br>';
            echo date('l');
            echo '<br>';
            echo date('h:i:s a');*/

            ?>
        </div>
    </div>
</body>

</html>