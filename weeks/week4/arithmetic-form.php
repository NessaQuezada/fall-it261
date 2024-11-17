<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href ="css/styles.css" type ="text/css" rel ="stylesheet">
</head>
<body>
    <h1>arithmetic form</h1>
    <form action="" method="post">
        <fieldset>
<label>Name</label>
<input type="text" name= "name">

<label>Phone</label>
<input type="tel" name= "phone">

<label> How Many Lattes?</label>
<input type="number" name= "lattes">

<label>How Many Cappuccinos?</label>
<input type="number" name= "cappuccinos">

<label>How Many Americanos?</label>
<input type="number" name= "americanos">

<label>Special Requests?</label>
<textarea name="comments"></textarea>
<input type="submit" value="Send My Order">

    </fieldset>
    </form>
<p><a href="">Reset</p>
<?php
// name, phone, lattes, cappuccinos, americanos, comments

date_default_timezone_set('America/Los_Angeles');
$our_time = date('H:i');

if(isset($_POST['name'],
$_POST['phone'],
$_POST['lattes'],
$_POST['cappuccinos'],
$_POST['americanos'],
$_POST['comments'])) {

if(empty($_POST['name'] &&
$_POST['phone'] &&
$_POST['lattes'] &&
$_POST['cappuccinos'] &&
$_POST['americanos'] &&
$_POST['comments'])) {

    echo '<p class="error"> Please fill out all of the fields</p>';

} else {

$name =$_POST['name'];  
$phone =$_POST['phone'];
$lattes =$_POST['lattes'];
$cappuccinos =$_POST['cappuccinos'];
$americanos =$_POST['americanos'];
$comments =$_POST['comments'];
$total = $lattes + $cappuccinos + $americanos;

// if and elseif statment regarding our time

if($our_time <=11) {
$our_time = "Good Morning";

} elseif ($our_time <=17) {
$our_time = "Good Afternoon";

} else {
$our_time = "Good Evening";

}

echo '
<div class = "box">
<h2>'.$our_time.' '.$name.'!</h2>
<p>we have confirmed your order to this <b>number</b> '.$phone.' totaling '.$total.' bevrages</p>
<ul>
<li> '.$lattes.' lattes</li>
<li> '.$cappuccinos.' lattes</li>
<li> '.$americanos.' lattes</li>
</ul>
<p>and this is your <b>special request</b> '.$comments.'</p>
<p>thank you for choosing our establishment</p>
</div>

';


}  // end else  


} // end isset
?>
</body>
</html>