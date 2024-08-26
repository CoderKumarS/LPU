<?php
function isPrime($num)
{
    if ($num == 1 || $num == 0) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$primeNumbers = 50;
for ($i = 0; $i <= $primeNumbers; $i++) {
    if (isPrime($i)) {
        echo $i . " is a prime number<br>";
    }
}