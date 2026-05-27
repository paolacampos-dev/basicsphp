<?php

/* Arrays:
versatil container
ordered collection (index, starting from 0)
mixed data types
dynamic sizing
created using the array function = array('','') or just as a variable with [''.'']
to access any value trough the index [0]
*/


$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

echo '<pre>'; // will formated the output to be clear
var_dump($names); // array(3) { [0]=> string(4) "John" [1]=> string(4) "Jack" [2]=> string(4) "Jill" }
/*  formated:
        array(3) {
            [0]=>
            string(4) "John"
            [1]=>
            string(4) "Jack"
            [2]=>
            string(4) "Jill"
        } */

//die(); will kill anyhting that comes afterwards. It will finish here (in this case not h1) 

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
inspect($names);
/*array(3) {
    [0]=>
    string(4) "John"
    [1]=>
    string(4) "Jack"
    [2]=>
    string(4) "Jill"
}*/

inspect($numbers);
/*array(6) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
    [3]=>
    int(4)
    [4]=>
    int(5)
    [5]=>
    int(6)
}*/

print_r($names)
/*  Array
(
    [0] => John
    [1] => Jack
    [2] => Jill
)*/


die();

//https://www.php.net/manual/en/function.date.php

?>

<h1> Hello! </h1>