<?php
interface Movable
{
    public function move();
}
interface Swimmable
{
    public function swim();
}
class Bird implements Movable, Swimmable
{
    public function move()
    {
        echo "Bird is flying<br>";
    }
}

class Fish implements Movable, Swimmable
{
    public function move()
    {
        echo "Fish is swimming<br>";
    }
    public function swim()
    {
        echo "Fish is swimming<br>";
    }
}
class Duck implements Movable, Swimmable
{
    public function move()
    {
        echo "Duck is flying<br>";
    }
    public function swim()
    {
        echo "Duck is swimming<br>";
    }
}

$bird = new Bird();
$bird->move();
$bird->swim();

$fish = new Fish();
$fish->move();
$fish->swim();

$duck = new Duck();
$duck->move();
$duck->swim();