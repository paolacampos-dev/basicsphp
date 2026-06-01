/* variable is prefixed with a dollar sign ==> $
must start with a letter or an underscore
can not start with a number
can only contain letters, numbers and underscores
are case sensitive
*/

$name='Paola'


<?php echo 'hello there ,', 'plus another value';
// we can use print to add two values
echo '<br />';
echo 'wau';
echo "<br />";
// that ending needs to be placed here because we have some HTML afterwards, if it will not be any not need for this closing tag
// comments like this are not going to be seen because they run in the server not in the browser if want to be seen in the browser needs to be <!-- comment -->
/* to write
    Multiple lines */
?>
<!--------------------------------------------------------->

<?php
$title = 'Learn PHP From Scratch';
$heading = "Welcome To The Course";
$body = 'In this course, you will learnt the fundamentals of the PHP language';

// tell us the type and the length or value if int
var_dump($title);
echo "<br />";
// tell us just the type
echo getType($heading);
?>


<?php
//Data types:
//interger
$age = 35;

//float
$rating = 4.5;

//Boolean
$isLoaded = true;

//Array
$friends = ["John", "Jack", "Jane"];

//Objects
$person = new stdClass();

//null
$middleName = null;

//Resource: will open this file and 'r' read it
//$file = fopen("fileName.txt", 'r');
?>


<?php
//Concatenation:
$firstName = 'Lara';
$lastName = 'Doe';
$fullName = $firstName . ' ' . $lastName;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title><?= $title; ?> ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch' ?></h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $heading; ?>

            </h2>
            <p><?= 'My name is ' .  $fullName . '<br />' ?>
                <!-- if we use double quotes variable interpolation: -->
                <?= "My name is  {$fullName}"  ?>
            </p>
        </div>
    </div>

</body>

</html>