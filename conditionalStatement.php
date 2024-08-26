<!-- if Statement -->
<?php
$age = 18;
if ($age < 18) {
    echo "You are a minor";
}
echo "<br>";
$name = "Xyz";
if ($name == "Animal") {
    echo "It is an Animal";
}
echo "<br>";
?>

<!-- if else Statement -->
<?php
$num = 12;
if ($num % 2 == 0) {
    echo "Number is even";
} else {
    echo "Number is odd";
}
echo "<br>";
?>

<!-- if else if Statement -->
<?php
$marks = 69;
if ($marks >= 90) {
    echo "Grade A";
} elseif ($marks >= 80) {
    echo "Grade B";
} elseif ($marks >= 70) {
    echo "Grade C";
} elseif ($marks >= 60) {
    echo "Grade D";
} else {
    echo "Grade F";
}
echo "<br>";
?>

<!-- Ternary Operator -->
<?php
$age = 18;
echo ($age < 18) ? "You are a minor" : "You are an adult";
echo "<br>";
?>

<!-- nested if -->
<?php
$age = 18;
$nationality = "Indian";
if ($nationality >= "Indian") {
    if ($age == 18) {
        echo "You are eligible to vote";
    } else {
        echo "You are not eligible to vote";
    }
}
echo "<br>";
?>

<!-- switch Statement -->
<?php
$ch = "k";
switch ($ch) {
    case 'a':
        echo "It is a vowel";
        break;
    case 'e':
        echo "It is a vowel";
        break;
    case 'i':
        echo "It is a vowel";
        break;
    case 'o':
        echo "It is a vowel";
        break;
    case 'u':
        echo "It is a vowel";
        break;
    default:
        echo "It is a constant";
        break;
}
echo "<br>";
?>