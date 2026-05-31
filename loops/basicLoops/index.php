<?php
/*  1. for:
        for (initialization; condition; increment) {code to be executed} */

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br />'; // writes 0 to 9
}

/* 2. while:
        while (condition)  {code to be execute   update(increment);}*/

$i = 0;
while ($i < 10) {
    echo $i . '<br />';
    $i++;
} // 0 to 9


//will always run the code first and afterwards it will check the code to loop
/*3. do:
    do {code to execute  update;} while(condition)*/

$i = 0;  //if I place 12 it would show just 12 but not the loop because the condition is $i<10
do {
    echo $i;
    $i++;
} while ($i < 10);

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

            <!-- for: -->
            <ul>
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?> //list of number from 0 to 9
            </ul>

            <!-- while: -->
            <ul>
                <?php $i = 0;
                while ($i < 10): ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                endwhile; ?> //list of number from 0 to 9
            </ul>

            <!-- do: -->
            <ul>
                <?php $i = 0;
                do { ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                } while ($i < 10) ?> //list of number from 0 to 9
            </ul>
        </div>
    </div>
</body>

</html>