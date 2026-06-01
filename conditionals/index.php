<?php

$age = 22;

//  If statement
/*if (condition)  {
    //condition to be execute if the condition is true
}*/

if ($age >= 21) {
    echo 'You are old enough to drink in the US';
}

//  If-Else
if ($age >= 21) {
    echo 'You are old enough to drink in the US';
} else {
    echo 'you are not enough to drink in the US';
}

//  Nested if statement
if ($age >= 21) {
    echo 'You are old enough to drink and vote in the US';
} else {
    if ($age >= 18) {
        echo 'you are old enough to vote in the US';
    } else {
        echo 'you are not old enough to vote or drink in the US';
    }
}


// If-Else-If (the same than above but cleaner)
if ($age >= 21) {
    echo 'You are old enough to drink and vote in the US';
} else if ($age >= 18) {
    echo 'you are old enough to vote in the US';
} else {
    echo 'you are not old enough to vote or drink in the US';
}

// ----------------------------------------------------------------------
$isLoggedIn = false;
$name = 'Mary';

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
            <!-- output -->
            <?php if ($isLoggedIn) : ?>
                <?php if (isset($name)) : ?>
                    <h1 class="text-3xl">Welcome <?= $name ?></h1>
                <?php else : ?>
                    <h1 class="text-3xl">Welcome to the App!</h1>
                <?php endif; ?>
            <?php else : ?>
                <h1 class="text-3xl">Please log in </h1>
            <?php endif; ?>

            <!-- CLEANER  -->
            <?php if ($isLoggedIn && $name) : ?>
                <h1 class="text-3xl">Welcome <?= $name ?></h1>
            <?php else : ?>
                <?php if ($isLoggedIn) : ?>
                    <h1 class="text-3xl">Welcome to the App!</h1>
                <?php else : ?>
                    <h1 class="text-3xl">Please log in </h1>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>
</body>

</html>