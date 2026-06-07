<!-- 
function functionName (parameter1, parameter2, ...) {
// code to be executed
}
functionName(); // call the function as many times as needed
-->
<?php

function sayHello()
{
    echo 'Hello World';
}
sayHello(); // Hello World


function sayGoodbye()
{
    return 'Goodbye';
}
sayGoodbye(); //nothing prints out just it is saved in this function
echo sayGoodbye(); // then it prints Goodbye, however better to do:
$goodbye = sayGoodbye();
echo $goodbye; //Goodbye
?>


<!-- Parameters (in the function) and arguments(passed when calling the function): -->
<?php

function add($a, $b) // parameters. If equal = to a value then we dont need to pass later an argument either (ex -->  $a = 1, $b = 6)
{
    return $a + $b;
}
echo add(3, 4); //arguments //7
echo '<br>';
echo add(7, 2); // 9
echo '<br>';

function sayMe($name)
{
    return 'Hello ' . $name;
}
echo sayMe('John'); // Hello John
echo '<br>';



//The SPREAD Operator (in JS is called the SPLAT Operator)which is just three dots ...  (place as many as want whithout knowing in advance how many)

function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo addAll(3, 4, 5, 7); //19

?>