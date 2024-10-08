<?php
//understanding the logic 
//1rubles - 0.017
//1 pound sterling - 1.15
//1canadian dollars - .76
//1euro - 1.00
//1yen - .0074

//1rubles = 10007 = 117.11
//1 pound sterling = 500 = 575
//1canadian dollars = 5000 = 3800
//1euro = 1200 = 1200
//1yen = 2000 = 14.80


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
    max-width: 500px;
}

/* #wrapper {
    width:500px;
    margin: auto;

} */


table {
    border:1px solid orange;
    border-collapse: collapse;
    width: 500px;

}

th, td {
    border:1px solid orange;
    padding: 20px
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
<li>Rubles</li>
<li>Pound Sterling</li>
<li>Canadian Dollars</li>
<li>Eruos</li>
<li>Yens</li>
</ul>

<h2>What ever shall we do</h2>

<table>
    <tr>
        <th colspan="2">Currency </th>
        <th>Dollars</th>
    </tr>
    <tr>
    <th>Rubles</th>
    <td>10007</td>
    <td>117.11</td>
    </tr>
    </tr>
    <tr>
    <th>Pounds steriling</th>
    <td>500</td>
    <td>575</td>
    </tr>
    </tr>
    <tr>
    <th>Candaian dollar</th>
    <td>5000</td>
    <td>3800</td>
    </tr>
    <tr>
    <th>Euro</th>
    <td>1200</td>
    <td>1291</td>
    </tr>
    </tr>
    <tr>
    <th>Yen</th>
    <td>1200</td>
    <td>14.80</td>
    </tr>





</table>

</div>





</body>
</html>