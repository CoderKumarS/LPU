<?php
class ClassRoom
{
    public $name;
    public $roll;

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_roll($roll)
    {
        $this->roll = $roll;
    }
    function get_roll()
    {
        return $this->roll;
    }
}
$apple = new ClassRoom();
$apple->set_name('Apple');
$apple->set_roll('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_roll();
