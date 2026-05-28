<!-- Multidimensional Arrays: arrays within arrays  -->

<?php
$output = null;

$fruits = [
    ['apple', 'red'],
    ['orange', 'orange'],
    ['banana', 'yellow']
];

//how to access apple?
$output = $fruits[0][0]; //apple
$output = $fruits[0][1]; //red

//add a new fruit
$fruits[] = ['grape', 'purple']


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
            <p class-"text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">Arrays:</h2>
            <p>
                <!-- The ids array will be printed -->
            <pre>
                    <?php print_r($fruits); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>