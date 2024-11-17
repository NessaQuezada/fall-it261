<?php 
// concatenation
// operators - assignment operators
// some preset functions
//arrays

$name = 'Vanessa';
$first_name = 'Vanessa';
$last_name = 'Quezada';
echo '<br>';
$name = 'Vanessa';
$name .= ' Quezada';
echo $name;

echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'vanessa\'s favorite color is '.$color.' '; 

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';
$x = 20;
$x += 5;
echo $x;
echo '<br>';
$x = 100;
$x /= 10;
echo $x;

echo '<br>';
echo '<h3>Our product, quantity, and tax exersize </h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3>We would like our amount to reflect 2 decimal places -- we are thinking about floats and a new function -- number_format ( ) </h3>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format ($total, 2);
echo 'we have a total of <b>$'.$total_friendly.'</b> dollars';
echo '<br>';

$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'we have a total of <b> $'.number_format ($total, 2).'</b> dollars';
echo '<br>';
echo '<h3>Our second function is date </h3>';
echo date ('y');
echo '<br>';
echo date ('l');
echo '<br>';

echo date ("l jS \of F Y h:i:s A");
echo '<br>';
echo date ("l jS \of F Y h:i: A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date ("l jS \of F Y h:i: A");
echo '<br>';
echo '<h3>Time for an Array!</h3>';
echo'<h4>Below is an indexed array </h4>';
//can we echo an array? no
$fruit[] = 'bananas'; //0
$fruit[] = 'cherries'; //1
$fruit[] = 'melons'; //2
$fruit[] = 'kiwis';
$fruit[] = 'oranges';
$fruit[] = 'apples';

echo $fruit;
echo '<br>';
echo $fruit [2];
echo '<br>';

$fruit = array(
   'bananas',
   'cherries',
   'melons',
   'kiwis',
   'oranges',
   'apples'
);

echo '<br>';
$fruit = [
    'bananas',
    'cherries',
    'melons',
    'kiwis',
    'oranges',
    'apples'
];

echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associate array</h3> ';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'Home',
    'daily.php' => 'Home',
    'project.php' => 'Home',
    'contact.php' => 'Home',
    'gallery.php' => 'Home'

);

echo '<pre>';
var_dump($nav);
echo '<pre>';