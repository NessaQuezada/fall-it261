<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator Document</title>
    <link href ="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!--mile price efficency speed -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post"> 
<fieldset>
    <lable>NAME</lable>
    <input type="text" name="name">

    <lable>Total Mile driving?</lable>
    <input type="number" name="miles" >

    <lable>How fast will you be driving?</lable>
    <input type="number" name="speed" >

    <lable>How many hours per day will you be driving?</lable>
    <input type="number" name="hours" >

    <label>price of gas</label>
   <ul>
   <li><input type="radio" name="price" value="3.00">$3.00</li>
   <li><input type="radio" name="price" value="3.50">$3.50</li>
   <li><input type="radio" name="price" value="4.00">$4.00</li>
   <li><input type="radio" name="price" value="5.00">$5.00</li>
   
   <lable>Choose your fuel efficency</lable>
   <select name="fuel">
    <option value="" NULL>Select one</option>
    <option value="50">50mpg</option>
    <option value="70">70mpg</option>
    <option value="80">80mpg</option>
    <option value="90">90mpg</option>

</select> 
  


    <input type="submit" value="calculate">

    <p><a href="">Reset it!</a></p>
    
</fieldset>

</form>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'] &&
    $_POST['miles'] &&
    $_POST['speed'] &&
    $_POST['price'] &&
    $_POST['hours'] &&
    $_POST['fuel'])) {
    
    echo '<p class="error">Please fill out all the fields</p>';
    
    } elseif (isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['price'],
    $_POST['hours'],
    $_POST['fuel'] )) {
    $name = $_POST['name'];
    $miles = floatval($_POST['miles']);
    $speed = floatval($_POST['speed']);
    $price = floatval($_POST['price']);
    $hours = floatval($_POST['hours']);
    $fuel = floatval($_POST['fuel']);
    $totalhours = $miles / $speed;
    $totaldays = $totalhours / $hours;
    $totalgas = $miles / $fuel;
    $totalcost = $totalgas * $price;

    
    
    echo '
    <div class ="box">
    <h2>Hello '.$name.'</h2>
    <p>you will be travelling a total of <b>  '.($totalhours).' hours </b> and taking a total of '.$totaldays.' days and you will be using '.$totalgas.' gallons of gas costing you $'.number_format($totalcost, 2).' dollars</p>
    ';
    
    } // end elseif
    
    
    } // end server request

//(From example)
//total hours = total miles / how fast (20 = 1000 / 50)
// total days = total hours / hours per day (4 = 20 / 5)
// gallons of gas = total miles / efficiency (100 = 1000 / 10)
// cost = gallons of gas * price (400 = 100 * 4)




?>



</body>
</html>