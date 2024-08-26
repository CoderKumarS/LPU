<?php
$courses = array("INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"Node Js");
echo "Course code: INT220, Course name: ".$courses['INT220']."<br>";
echo "Course code: INT221, Course name: ".$courses['INT221']."<br>";
echo "Course code: INT222, Course name: ".$courses['INT222']."<br>";
?>

<?php
$courses['INT220'] = "PHP";
$courses['INT221'] = "Laravel"; 
$courses['INT222'] = "Node Js";

print_r($courses);
?>