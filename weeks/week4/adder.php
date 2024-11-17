<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
<link href ="css/styles.css" type = "text/css" rel = "stylesheet">
</head>
<body>
<h1>Adder.php</h1>

<form action="adder.php" method="post">
   <fieldset> 
<label>Enter the first number:</label>
<input type="number" name="num1">

<label>Enter the second number:</label>
<input type="number" name="num2">

<input type="submit" value="Add Em!!">

<p><a href="">Reset</a></p>

   </fieldset> 
</form>

<?php     //adder-wrong.php

if (isset($_POST['num1'])) {
$_POST['num2'];



$num1 = intval($_POST['num1']);
$num2 = intval($_POST['num2']);
$num = $_POST['num1'];
$num = $_POST['num2'];  
$total = $num1 + $num2;

if($num == NULL) {

    echo '<p class="error">please enter numbers</p>';
} else {

echo '<h2>You added '. $num1 .' and '.$num2.' </h2>';
echo ' <p> and the answer is</p>';
echo '<p style="color:red;"> '.$total.'</p>';
//echo '<p><a href="">Reset page</a></p>';

}


}



?>
<script>
document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
</script>
<!--no closing php tag before html-->
<!--line 3 no closing bracket and end statement-->
<!--line 7 no closing h2 tag with an additional double quote and should be single quotes-->
<!--line 9 no closing p tag or quote or end statement random br tag-->
<!--line 10 no opening echo and double quotes instead of single closing p tag no opening no single quotes around-->
<!--line 11 random p tag no closing statment-->
<!--missing post method-->
<!--line 15 type is text supposed to be number-->
<!--line 20 no closing quote after add em-->
<!--on the same line as h1 random / infront of form  closing form tag on same line as input -->
<!--line 24 and 25 random br tag opening label-->
<!-- php is outside the html doc-->
<!--no link to style sheet-->
<!-- added p tag around rest-->
 <!-- after html is closing php-->
  <!-- end )){ not in right plae-->
   <!--missing int-->
   <!--extra reset-->
</body>
</html>