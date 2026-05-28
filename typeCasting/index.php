<!-- convert one variable to another -->
<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

//implicit conversion (PHP changes on its own)
$result = $number1 + $number2; // int(15)
$result = $number1 + $number3; // int (string to int) => output int(25)
$result = $number3 + $number3; // int (string to int) => output int(40)
$result = $number1 . $number2; // string (int to string) => output int(3) "510"
//$result = $fruit . $number2; // Error
$result = $number1 + $bool1; // true is converted into a 1 ==> int(6)
$result = $number1 + $bool2; // false is converted into a 0 ==> int(5)
$result = $number1 + $null; // null is converted into a 0 ==> int(5)

//Explicit conversion
$result = (string) $number1; //string(1) "5"
$result = (int) $number3; //int(20)
$result = (bool) $number1; //bool(true)
$result = (bool) $number1; //bool(true) but if the number is 0 will be converted to false


var_dump($result);

?>