<?php
$courses = array("PHP", "HTML", "CSS", "JavaScript", "Python", "Java", "C++", "C", "R", "TypeScript");
$course_Length = count($courses);
for ($i = 0; $i < $course_Length; $i++) {
    echo $courses[$i];
    echo "<br>";
}