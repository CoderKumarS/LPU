<?php
$num = 6;
$x = 1;

for ($i=1; $i <= $num-1; $i++) { 
    $x *= ($x + 1);
}
echo "The factorial of $num is $x";