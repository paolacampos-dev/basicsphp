<?php
//JS = object literals; python = libraries
$output = null;

$user = [
    'name' => 'John',
    'email' => 'john@email.com',
    'password' => '1234', //if it will be a DB will have a # in front of it
    'hobbies' => ['Tennis', 'Video Games']
];

var_dump($user); // array(4) { ["name"]=> string(4) "John" ["email"]=> string(14) "john@email.com" ["password"]=> string(4) "1234" ["hobbies"]=> array(2) { [0]=> string(6) "Tennis" [1]=> string(11) "Video Games" } }

$output = $user['name']; //John
$output = $user['hobbies'][0]; //Tennis

$user['address'] = '123 Main St'; // address will be added automatically to the arrray

//unset() // It will remove the choosen value from the array
unset($user['address']); // will remove address from the array


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
            <p class-"text-xl"><?= $output ?> </p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
                <!-- The array will be printed -->
            <pre>
                <?php print_r($user); ?>
                </pre>
            </p>

            <!-- User Array: 
                        Array
                            (       
                                [name] => John
                                [email] => john@email.com
                                [password] => 1234
                                [hobbies] => Array
                                    (
                                        [0] => Tennis
                                        [1] => Video Games
                                    )
                            )
                -->

        </div>
    </div>
</body>

</html>