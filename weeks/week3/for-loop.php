<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML
// the for loops - loops through a block of code a specified number of times
// for (init counter; test counter; increment counter) { code to be executed for each iteration;}

// celicius and fahrenheit

// far = ($cel * 9/5) + 32;

//$far =()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My celcius table</title>
    <style>

* {
    padding:0;
    margin:0;
    box-sizing: border-box;
}

table {
    width:500px;
    margin:20px;
    border-collapse:collapse;
    border:1px solid lightblue;
}

td {
    border:1px solid lightblue;
    border-collapse: collapse;
    padding: 5px;
}

    </style>   
</head>
<body>
    <h1>My celcius / fahrenheit table</h1>
<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 3){
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.$far.' degrees </td>';
    echo '</tr>';
}
?>

<table>    

<h2>My miles/kilometer table</h2>
<table>
<tr></th>
<th></th>
<th>
</tr>
<?php
for($mil = 1; $mil <= 100; $mil += 9 ) {
$dis = ($mil * 0.62);
echo '<tr>';
echo '<td> '.$mil.' miles </td>';
echo '<td> '.$dis.' kilometers </td>';
echo '<tr>';
}
?>
</table>


</body>
</html>
