

<?php

class Car
{

    public $brand;
    public $color;
    protected $status = 'active';

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function login()
    {
        echo $this->brand . ' logged in <br>';
    }
}

// inheritance from the Car class:
class Motorcycle extends Car
{
    public $type;

    public function __construct($brand = null, $color = null, $type = null)
    {
        $this->type = $type;
        parent::__construct($brand, $color); // just calling the parent construct
    }

    public function getStatus() // because status is protected if it will be private will not be able to access it
    {
        echo $this->status;
    }

    //ex of polymorhims:
    public function login()
    {
        echo 'Motorcycle ' . $this->brand . ' logged in <br>';
    }
}

$motorcycle1 = new Motorcycle('Ford', 'Blue', '500cc');
//var_dump($motorcycle1); // object(Motorcycle)#1 (4) { ["brand"]=> string(4) "Ford" ["color"]=> string(4) "Blue" ["type"]=> string(5) "500cc" }

//$motorcycle1->getStatus(); // active

// It is possible to override methods: ex:
$motorcycle1->login(); // Motorcycle Ford logged in
