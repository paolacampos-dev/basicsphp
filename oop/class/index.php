<?php

//The convention is to name the file the same as the class name
class User
{

    //Properties:
    public $name;  // public means that the property can be used from outside of the class
    public $email; // are situation where we want to add the proper color or brand but in this case being public is not recommend it

    public function __construct() // this will run every time and object is instantiate it
    {
        echo 'Constructor run... <br>';
    }

    //Methods:
    public function login()
    {
        echo 'The user logged in <br>';
    }
}

//Instantiate a new object: (new)
$user1 = new User();
$user1->name = 'John Doe';
$user1->email = 'john@gmail.com';
$user1->login(); // The user logged in

$user2 = new User();
$user2->name = 'Jane Doe';

var_dump($user1);


//because normally the properties are not going to be public we are not going to be able to instatiate new objects as above.
//We will need to use public function _construct() and code as:

class Car
{

    public $brand;
    public $color;
    private $status = 'active';

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function login()
    {
        echo $this->brand . ' logged in <br>';
    }

    // Getter:
    public function getStatus()
    {
        return $this->status;
    }

    // Setter:
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

$car1 = new Car('Toyota', 'red');
$car1->login();

$car2 = new Car('BMW');

$car2->setStatus('inactive'); // inactive
//echo $car2->status; // can't access private property
echo $car2->getStatus(); // active even status is private we can do through the methos which is public to access private properties

/*
Access Modifiers:
- public
    The property or method can be accessed from anywhere.
    This is the default if you leave off the modifier.

- protected
    The property or method can be accessed from within the class
    OR any class that inherits from it.

- private
    The property or method can only be accessed from within the class itself.
*/


// STATIC properties--------------------------------------------------------------------------------------

class MathUtility
{
    public $pi = 3.14;
}

$mathUtil1 = new MathUtility();
$mathUtil2 = new MathUtility();
echo $mathUtil1->pi . '<br>'; // 3.14
echo $mathUtil2->pi . '<br>'; //3.14



//Refactor it to static properties/methods:

class TrigonometryUtility
{
    public static $sen = 1;

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}
echo TrigonometryUtility::$sen . '<br>'; // 1
echo TrigonometryUtility::add(1, 2, 3, 3) . '<br>'; // 9
