<?php
class Animal
{
    public $name;
    public $type;
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
    public function introduce()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Type: " . $this->type . "<br>";
    }
}
class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says: Woof Woof<br>";
    }
}
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says: Meow Meow<br>";
    }
}
$dog = new Dog("Tommy", "Dog");
$dog->introduce();
$dog->bark();

$cat = new Cat("Kitty", "Cat");
$cat->introduce();
$cat->meow();