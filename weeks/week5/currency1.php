<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 php form</title>
    <link href ="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>


   <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post"> 
   <fieldset>
   <label>NAME</label>
   <input type="text" name="name">

   <label>EMAIL</label>
   <input type="email" name="email">

   <label>How much money do you have</label>
   <input type="number" name="amount">
<!--time for our radio button that has an additional attribute of value-->
   <label>Choose your currenct</label>
   <ul>
   <li><input type="radio" name="currency" value="0.017">Rubles</li>
   <li><input type="radio" name="currency" value="0.76">Canadian Dollars</li>
   <li><input type="radio" name="currency" value="1.15">Pounds</li>
   <li><input type="radio" name="currency" value="1.00">Euros</li>
   <li><input type="radio" name="currency" value="0.0074">Yens</li>

   </ul>

   <input type="submit" value="Convert it">

   <p><a href="">Reset it!</p>

   </fieldset>
</form>

<?php 
// we will start with the server request method
//then we will ask our selves if any fields are empty
//if the fields are not empty, we will else if they are set

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'] &&
$_POST['email'] &&
$_POST['amount'] &&
$_POST['currency'])) {

echo '<p class="error">Please fill out all the fields</p>';

} elseif (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'] )) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$dollars = $amount * $currency;

echo '
<div class ="box">
<h2>Hello '.$name.'</h2>
<p>you now have<b> $ '.floor($dollars).' American dollars</b> and we will be emailing you at '.$email.' with your information</p>
';

} // end elseif


} // end server request


?>

</body>
</html>