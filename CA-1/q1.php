<?php
function multiplication($num)
{
    for ($i = 1; $i <= 10; $i++) {
        echo $num . " * " . $i . " = " . $num * $i;
        echo "<br>";
    }
}
echo "Enter an integer: " . $x = 9;
echo "<br>";
multiplication($x);