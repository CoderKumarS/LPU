<?php
function fibonacci($num)
{
    $a = 0;
    $b = 1;
    $next = 0;
    for ($i = 0; $i < $num; $i++) {
        echo $a . ", ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}
echo "Enter the number of terms: " . $x = 10;
echo "<br>";
echo "Fibonacci Series: ";
fibonacci($x);
