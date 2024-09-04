<?php
function myFunction($a, $b)
{
    echo $a + $b;
}
myFunction(2, 3);
?>

<?php
function cse($a, $b)
{
    echo "The $a and $b";
}

cse("xyz", "xy");
?>

<?php
function add(int $a, int $b)
{
    echo $a + $b;
}

add(2, "3 Semesters"); // gives error
?>
