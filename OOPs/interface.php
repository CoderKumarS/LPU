<?php
interface Animal{
    public function makeSound();
}
class Dog implements Animal {
    public function makeSound(){
        echo "Woof Woof<br>";
    }
}
class Cat implements Animal {
    public function makeSound(){
        echo "Meow Meow<br>";
    }
}
$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();