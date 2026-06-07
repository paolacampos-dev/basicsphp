<?php

/*
Names Challenge:
1.  Take the array of names below and loop through them.    
2.  Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3.  If the first letter is 'A', skip that name and continue to the next iteration.
4.  If the first letter is not 'A', reverse the string.
5.  Make all names lowercase before printing them.

Hints
- You can use indexes to access the first character of a string. (String[0]) or you can use the substr() function.
- You can reverse a string using the strrev() function.
- You can make a string lowercase using the strtolower() function.
- You can skip an iteration of a loop using the continue keyword.
*/

$names = ['Louisa', 'Alex', 'Beth', 'Caroline', 'Adam', 'Freddie'];

/*
Solution 1:
foreach ($names as $name) {
    if ($name[0] === 'A') {
        continue;
    }

    echo strtolower(strrev($name)) . '<br>';
}
*/

/*
Solution 2:
for ($i = 0; $i < count($names); $i++) {
    $name = $names[$i];
    //echo $name . '<br>';

    if (substr($name, 0, 1) === 'A') {
        continue;
    }

    $reversedName = strtolower(strrev($name));
    echo $reversedName . '<br>';
}
*/

//Reverse the array:
for ($i = count($names) - 1; $i >= 0; $i--) {
    $name = $names[$i];
    //echo $name . '<br>';

    if (substr($name, 0, 1) === 'A') {
        continue;
    }

    $reversedName = strtolower(strrev($name));
    echo $reversedName . '<br>';
}
