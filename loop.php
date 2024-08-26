<?php
// for loop
echo "<h1>For loop</h1>";
for ($i=1; $i <= 3; $i++) { 
    echo "The number is $i <br>";
}
?>

<?php
// foreach loop
echo "<br>";
echo "<h1>Foreach loop</h1>";
$season = array("summer", "winter", "spring", "autumn");
foreach ($season as $value) {
    echo "$value <br>";
}
?>

<?php
// while loop
echo "<br>";
echo "<h1>While loop</h1>";
$i = 1;
while ($i <= 5) {
    echo "The number is $i <br>";
    $i++;
}
?>

<?php
// do while loop
echo "<br>";
echo "<h1>Do while loop</h1>";
$i = 1;
do {
    $i++;
    echo "The number is $i <br>";
} while ($i <= 5);
?>
