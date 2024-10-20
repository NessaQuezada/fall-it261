<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my html</title>
<link href ="css/styles.css" type ="text/css" rel ="stylesheet">
</head>
<body>
<h1>My form3.php</h1>

<form action="" method="post">
<fieldset> 
<label>First Name</label>    
<input type="text" name="first_name">

<label>Last Name</label>    
<input type="text" name="last_name">

<label>Email</label>    
<input type="email" name="email">

<label>Comments</label>    
<textarea name="comments"></textarea>

<input type="submit" value="Send it!">

<p><a href="">Reset!</a></p>

</fieldset>  
</form>

<?php
// logic -- if isset first_name, last_name.. that is a good thing

// our second if statement -- if i have empty fields, that is not a good thing, i will echo "please fill out all of the fields!!", now if the fields are not empty, thrn my else will display an echo of the information
if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {

$first_name = $_POST['first_name'];   
$last_name = $_POST['last_name'];   
$email = $_POST['email'];   
$comments = $_POST['comments'];   

// nest another if statemnet in reference to the fields being empty

if(empty($_POST['first_name'] && 
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'] )) {

echo '<p class="error">please fill out the fields!</p>';

} else {

    echo '
    <div class="box"
    <h2>Hello  '.$first_name.'  '.$last_name.'!</h2>
    <p>we have received your email as '.$email.' will be reviewing your '.$comments.'</p>
    </div>
    
    ';

} // end else

} // end isset

?>



</body>
</html>
