<?php
$output = null;

$ids = [10, 22, 15, 45, 67];
$users = ['user2', 'user1', 'user3'];

//count() --> to get the length
$output = count($ids); //5

//Sort()  --> manipulates the array(in order = ASC or in alphabetic order)
$output = sort($ids);
$output = sort($users);

//rsort()  --> reverse the order DESC
rsort($ids);
rsort($users);

//arrray_push()
array_push($ids, 100); // 100 added to the end of the array

//array_unshift($array, item); // it will add the item at the begining of the array
//array_pop(); // it will take the last item off the array
//array_shift(); // it will remove the first item off the array

//array_slice(arrayName, indexWhereToStart(offset), theLengthToMoveTrough)
$ids2 = array_slice($ids, 2, 3);
//var_dump($ids2); // array(3) { [0]=> int(22) [1]=> int(15) [2]=> int(10) }

//array_splice() --> return a portion of the array and returns something else
array_splice($ids, 1, 1, 'New Id'); // the item 1 has been replaced for the string

//array_sum() --> adds all the items from the array
$output = 'Sum of IDs: ' . array_sum($ids); // Sum of Ids is: 214

//array_search(nameOfTheItemtoSearch, arrayName)
$output = 'User 2 is at index: ' . array_search('user2', $users); // user 2 is at index: 1

//in_array() --> it will check if a vakule exists on an array
$output = 'Users 3 exists: ' . in_array('user3', $users); // Uses 3 exists: 1 (1 means true)
$output = 'Users 4 exists: ' . in_array('user4', $users); // Uses 4 exists: (nothing appears because is false)

//explode(delimiterByWhichToSplitTheItems, stringName) --> to turn a string into an array
//implode() --> to turn an array into a string
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
//var_dump($tagsArr); // array(3) { [0]=> string(4) "tech" [1]=> string(4) "code" [2]=> string(11) "programming" }
$output = implode(', ', $users); //user3, user2, user1

//https://www.php.net/manual/en/ref.array.php
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
                    <?php print_r($ids); ?>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>