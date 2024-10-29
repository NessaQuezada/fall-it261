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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method="post"> 
<fieldset>
    <lable>NAME</lable>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

    <lable>Total Mile driving?</lable>
    <input type="number" name="miles"  value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>" >

    <lable>How fast will you be driving?</lable>
    <input type="number" name="speed"  value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>" >

    <lable>How many hours per day will you be driving?</lable>
    <input type="number" name="hours"  value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>" >

    <label>price of gas</label>
   <ul>
   <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price'])&& $_POST['price'] == 3.00) echo 'checked="cheked"' ;?>>$3.00</li>
   <li><input type="radio" name="price" value="3.50"  <?php if(isset($_POST['price'])&& $_POST['price'] == 3.50) echo 'checked="cheked"' ;?>>$3.50</li>
   <li><input type="radio" name="price" value="4.00"  <?php if(isset($_POST['price'])&& $_POST['price'] == 4.00) echo 'checked="cheked"' ;?>>$4.00</li>
   <li><input type="radio" name="price" value="5.00"  <?php if(isset($_POST['price'])&& $_POST['price'] == 5.00) echo 'checked="cheked"' ;?>>$5.00</li>
   
   <lable>Choose your fuel efficency</lable>
   <select name="fuel">
    <option value="" <?php if(isset($_POST['fuel']) && is_null($_POST['fuel'])) echo 'selected="unselected"' ;?>>Select one</option>
    <option value="20"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected"' ;?>>20mpg</option>
    <option value="30"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] ==  '30') echo 'selected="selected"' ;?>>30mpg</option>
    <option value="40"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected"' ;?>>40mpg</option>
    <option value="50"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '50') echo 'selected="selected"' ;?>>50mpg</option>

</select> 
  


    <input type="submit" value="calculate">

    <p><a href="">Reset it!</a></p>
    
</fieldset>

</form>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<p class ="error">please fill out your name</p>';
    }

    if(empty($_POST['miles'])) {
        echo '<p class ="error">please fill out how many miles</p>';
    }

    if(empty($_POST['speed'])) {
        echo '<p class ="error">please fill out how fast you drive</p>';
    }

    if(empty($_POST['price'])) {
        echo '<p class ="error">please fill out your gas price</p>';
    }

    if(empty($_POST['hours'])) {
        echo '<p class ="error">please fill out how many hours</p>';
    }

    if($_POST['fuel'] == NULL ) {
        echo '<p class ="error">please choose your fuel efficiency</p>';
    }

    
   
    
    if(isset($_POST['name'],
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

    if(!empty($name && $miles && $speed && $price && $hours) && ($fuel != NULL)){
    
    echo '
    <div class ="box">
    <h2>Hello '.$name.'</h2>
    <p>you will be travelling a total of <b>  '.floor($totalhours).' hours </b> and taking a total of '.floor($totaldays).' days and you will be using '.floor($totalgas).' gallons of gas costing you $'.number_format($totalcost, 2).' dollars</p>
    ';
    
    }
    
    }
    
    } // end server request

//(From example)
//total hours = total miles / how fast (20 = 1000 / 50)
// total days = total hours / hours per day (4 = 20 / 5)
// gallons of gas = total miles / efficiency (100 = 1000 / 10)
// cost = gallons of gas * price (400 = 100 * 4)




?>



</body>
</html>