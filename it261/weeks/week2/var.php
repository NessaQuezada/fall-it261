<?php
// my variable 

// dont forget that a variable is mearly a container for data

$name = "Vanessa"; // Vanessa is a string
$name = 'Isa';
echo $name;

$body_temp = 98; // is an integer
$body_temp_new = 98.6; // is a float
echo '<br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name";
echo "<br>";
echo 'my name is $name'; // I like single quotes

echo "<br>";
echo 'my name is '.$name.''; // I like single quotes
echo "<br>";
echo "The normal body temerature for a human being is .'$body_temp_new'";
echo "<br>";
$name = 'Sharon';
echo $name;
echo "<br>";
$x = 20;
$y = 5;

$z = $x + $y; //I am using the term "assigned" vs equals
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";

$first_name = 'Vanessa';
$last_name = 'Quezada';
echo $first_name." ".$last_name;
echo $first_name.' '.$last_name;

echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.' ';