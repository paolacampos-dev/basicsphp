<!-- ABSTRACT Classes 
    - can't be instantiated like a regular class but they can be subclass, so we can create a subclass that inherits an abstract class
    - normally has multiple classes that extend it
    -->

<?php

abstract class Shape
{
    protected $name;

    // Abstract method:
    abstract public function  calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete method:
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 5);
//var_dump($circle); // object(Circle)#1 (2) { ["name":protected]=> string(6) "Circle" ["radius":"Circle":private]=> int(5) }

$rectangle = new Rectangle('Rectangle', 6, 5);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>'; // Circle Area: 78.539816339745
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>'; // Rectangle Area: 30

?>