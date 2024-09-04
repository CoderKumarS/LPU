<!-- array-combine -->
<?php
$name = array("Peter", "Ben", "Joe");
$marks = array("75", "80", "85");
$c = array_combine($name, $marks);
print_r($c);
echo "<br>";
?>

<!-- array-chunk -->
<?php
$courses = array("c", "c++", "java", "php", "android");
print_r(array_chunk($courses, 2));
echo "<br>";
?>

<!-- array-count-values -->
<?php
$courses = array("c", "c++", "java", "php ", "android is java");
print_r(array_count_values($courses));
echo "<br>";
?>
<!-- array-diff -->
<?php
$a1 = array("r" => "red", "b" => "blue", "g " => "green");
$a2 = array("p" => "purple", "s" => "salmon ", "b" => "green");
$result = array_diff($a1, $a2);
print_r($result);
echo "<br>";
?>
<!-- array-flip -->
<?php
$a1 = array("r" => "red", "b" => "blue", "g " => "green", "p" => "purple", "s" => "salmon ");
$result = array_flip($a1);
print_r($result);
echo "<br>";
?>
<!-- array-intersect -->
<?php
$a1 = array("r" => "red", "b" => "blue", "g " => "green");
$a2 = array("p" => "purple", "s" => "salmon ", "b" => "green");
$a3 = array("salmon ","green");
$result = array_intersect($a1, $a2,$a3);
print_r($result);
echo "<br>";
?>
<!-- array-pop -->
<?php
$a = array("salmon ","green", "red", "blue");
array_pop($a);
print_r($a);
echo "<br>";
?>
<!-- array-push -->
<?php
$a = array("salmon ","green", "red", "blue");
array_push($a, "purple", "yellow");
print_r($a);
echo "<br>";
?>
<!-- array-reverse -->
<?php
$a = array("p" => "purple", "s" => "salmon ", "b" => "green");
print_r(array_reverse($a));
echo "<br>";
?>
<!-- array-search -->
<?php
$a = array("p" => "purple", "s" => "salmon ", "b" => "green");
echo array_search("green",$a);
echo "<br>";
?>
<!-- array-slice -->
<?php
$a = array("p" => "purple", "s" => "salmon ", "b" => "green");
print_r(array_slice($a,1,2,true));
echo "<br>";
?>


<?php

$result = array(
    array("A", 78, "pass"),
    array("B", 78, "pass"),
    array("C", 78, "pass")
);
echo $result[0][0]." Scored ".$result[0][1]." and he ".$result[0][2];
echo "<br>";
echo $result[1][0]." Scored ".$result[1][1]." and he ".$result[1][2];
echo "<br>";
echo $result[2][0]." Scored ".$result[2][1]." and he ".$result[2][2];
echo "<br>";
?>

<?php
$x = "test";
$y = "this";
$z = "also";
$x.=$y.=$z;
echo $x;
echo $y;
echo "<br>";