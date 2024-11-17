<?php

// if statement
// if else statemet
// if elseif statement

$temp = 61;
if($temp <= 60) {
echo 'it is a semi-warm day!';
} else {
echo   'it may be getting warmer';
}

echo '<br>';
$new_temp = 81;
if($new_temp<=60){
    echo 'not a very warm day';
} elseif ($new_temp <=70) {
    echo 'it\s getting warmer';
} elseif ($new_temp<=80){
    echo 'we might be going to the beach';
} else {
    echo 'we will <b>definitly</b> be going to the beach';
}

echo '<h2>This exersize will be about a salary, a bonus, and sales!</h2>';
// a salary of 95000 - annual
// sales needs to be above 100000, you will start making bonus!!
// 100,000 = 5%
// 120,000 = 10%
// 140,00 = 15%
// 150,00 = 20%

$salary = 95000;
$sales = 150000;
// if sales is equal or less then 99999, then you do not recive any bonus 

// if sales is equal or less then 119999, then you will recive a 5% bonus
// if sales is equal or less then 139999, then you will recive a 10% bonus
// if sales is equal or less then 149999, then you will recive a 15% bonus

if ($sales <=99999) {
    echo 'sorry you did not make a bonus';
} elseif ($sales <= 119999) {
    $salary *= 1.05;
    echo ' $'.number_format($salary, 2).' dollars ';
} elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo ' $'.number_format($salary, 2).' dollars ';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo ' $'.number_format($salary, 2).' dollars ';
} else {
    $salary *= 1.20;
    echo 'Awesome! you made a 20% bonus!!! your annual salary including bonus totals $'.number_format($salary, 2).' dollars';
}