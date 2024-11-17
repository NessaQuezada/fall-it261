<?php
// date function and if statement
echo date('y');
echo '<br>';
echo date('l, F j, Y h:i: A');


echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';

$name = 'vanessa';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// the logic behind this is if the time is less or equal to 11, then it is morning.
// if the time is less or equal to 17, which equal 5, then it is afternoon
// now we will have an else, that will mean it is evening!

if ($our_time <= 11) {
    echo '<h2 style ="color:yellow;">good morning '.$name.' </h2>
    <img src = "../../images/sunrise.jpg" alt = "Sunrise">
    <p> it\'s time to get up </p>';

} elseif ($our_time <= 17) {
    echo '<h2 style = "color:green;">good afternoon '.$name.' </h2>
    <img src = "../../images/midsun.jpg" alt = "sun mid way">
    <p>it\'s time to play</p>';
} else {
    echo '<h2 style = "color:blue;">good evening! '.$name.' </h2>
    <img src = "../../images/sunset.jpg" alt = "sunset">
    <p>it\'s time to go</p>';
}

