<?php
//understanding the logic 
$ruble_rate = 0.017;
$pound_rate = 1.;
$canadian_rate = .76;
$euro_rate = 1.00;
$yen_rate = .0074;

$ruble = 10007;
$pound = 500;
$canadian = 5321;
$euro = 1291;
$yen = 4000;

$ruble_converted = $ruble * $ruble_rate;
$pound_converted = $pound * $pound_rate;
$canadian_converted = $canadian * $canadian_rate;
$euro_converted = $euro * $euro_rate;
$yen_converted = $yen * $yen_rate;

$total = $ruble_converted + $pound_converted + $canadian_converted + $euro_converted + $yen_converted;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My currency Exersize</title>


 <style>

* {
    margin: auto;
    box-sizing: border-box; 
    max-width:500px;
}

/* #wrapper {
    width:500px;
    margin:30px, auto;

} */


table {
    border:1px solid orange;
    border-collapse:collapse;
    width: 500px;

}

th, td {
    border:1px solid orange;
    padding: 20px;
}

h1, h2, h3 {
    text-align: center;
}

 </style>
</head>

<body>
<div id = "wrappper">

<h1>After our travels we have returned home with the following currencies</h1>
<ul>
<li>Ruble</li>
<li>Pound Sterling</li>
<li>Canadian Dollar</li>
<li>Eruo</li>
<li>Yen</li>
</ul>

<h2>What ever shall we do</h2>

<table>
    <tr>
        <th colspan="2">Currency </th>
        <th>Dollars</th>
    </tr>
    <tr>
    <th>Ruble</th>
    <td><?php echo $ruble;   ?></td>
    <td>$<?php echo ''.number_format($ruble_converted, 2).'';   ?></td>
    </tr>
    <tr>
    <th>Pounds</th>
    <td><?php echo $pound;   ?></td>
    <td>$<?php echo ''.number_format($pound_converted, 2).'';   ?></td>
    </tr>
    <tr>
    <th>Candaian</th>
    <td><?php echo $canadian;   ?></td>
    <td>$<?php echo ''.number_format($canadian_converted, 2).'';   ?></td>
    </tr>
    <tr>
    <th>Euro</th>
    <td><?php echo $euro;   ?></td>
    <td>$<?php echo ''.number_format($euro_converted, 2).'';   ?></td>
    </tr>
    </tr>
    <tr>
    <th>Yen</th>
    <td><?php echo $yen;   ?></td>
    <td>$<?php echo ''.number_format($yen_converted, 2) .'';  ?></td>
    </tr>
    <tr>
    <th>American Dollars</th>
    <td><?php echo ''.floor($total).'';   ?></td>
    </tr>





</table>

</div>





</body>
</html>