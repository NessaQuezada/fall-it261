<?php

// our str_replace and substr functions
// substr(string,start,length)

$statment = 'Presently I am reading the looming tower';
echo $statment;
echo '<br>';
echo substr($statment, 0);
echo '<br>';
echo substr($statment, 1);
echo '<br>';
echo substr($statment, 10);
echo '<h2>Now I would like to display just the words -- I am reading</h2>';
echo '<br>';
echo substr($statment, 10, 13);
echo '<h2>What if I would like to display looming</h2>';
echo substr($statment, -13, 7);
echo '<br>';
echo substr($statment, 4, 11);
echo '<br>';
echo substr($statment, -20, 2);
echo '<br>';
echo '<h2>NOw for the str_replace function</h2>';

$statement2 = 'Huly\'s rendition of the looming tower is based on the book named looming tower! ';

echo str_replace('the', 'The', $statement2);