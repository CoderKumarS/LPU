<?php
class Car
{
    public $make;
    public $model;
    public $year;
    public function __construct ($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function display()
    {
        echo "This is a " . $this->year . " " . $this->make . " " . $this->model . ".";
    }
}
$myCar1 = new Car("Ford", "Mustang", 1969);
$myCar2 = new Car("Chevy", "Camaro", 1968);
$myCar1->display();
$myCar2->display();
