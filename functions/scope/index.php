<?php

//  global scope
$name = 'Alice';

//as different from JS (better keep the functions encapsulated)
function sayHello($name)   // if we want to use a global scope variable in this function we need to pass it as a parameter or we need to declare the gloabal variable inside the function as (global $name)
{
    //global $name (if we dont passed as a parameter then we defined here)
    //  local scope
    //$name = 'Bob'; (we can redeclare the function here and it will use this one instead of the global one if no parameter has passed)
    echo 'Hello' . $name;
}
sayHello($name); // Hello Alice (uses the local variable intead the global one)


function goodBye()
{
    $names = ['Jack', 'James'];
    echo 'Goodbye' . $names[0];
}
echo goodBye(); // Goodbye Jack
