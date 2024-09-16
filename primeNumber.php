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
        echo "{$i} is a prime number<br>";
    }
}

function isArmstrong($num)
{
    $sum = 0;
    $temp = $num;
    $digits = strlen($num);
    
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = floor($temp / 10);
    }
    
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

$armstrongNumbers = 1000;
for ($i = 0; $i <= $armstrongNumbers; $i++) {
    if (isArmstrong($i)) {
        echo "{$i} is an Armstrong number<br>";
    }
}