<!-- develop a PHP program to calculate various statistics from an array numbers,demonstrating call-by-value bahavior. -->

<!-- //calculate Average
//create function to calculate the average of the number;
//find maximim :
//FInd niminum:
//Sum of elementshp -->
<?php


$numbers = [10, 20, 30, 40, 50];


function calculateAverage($arr) {
    $sum = array_sum($arr);
    $count = count($arr);
    return $count > 0 ? $sum / $count : 0;
}


function findMaximum($arr) {
    return count($arr) > 0 ? max($arr) : null;
}


function findMinimum($arr) {
    return count($arr) > 0 ? min($arr) : null;
}


function sumOfAllElements($arr) {
    return array_sum($arr);
}
echo "Original Array: ";
print_r($numbers);
echo "<br>";


$average = calculateAverage($numbers);
echo "Average: $average\n";
echo "<br>";

$maximum = findMaximum($numbers);
echo "Maximum: $maximum\n";
echo "<br>";

$minimum = findMinimum($numbers);
echo "Minimum: $minimum\n";
echo "<br>";

$sum = sumOfAllElements($numbers);
echo "Sum of All Elements: $sum\n";
echo "<br>"; 


?>