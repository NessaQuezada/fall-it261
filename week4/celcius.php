<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Celcius form converter</h1>

<form action="<?php echo $_SERVER['PHP_SELF']   ; ?>" method="post">
<fieldset> 
<label>Enter your celcius value</label>    
<input type="number" name="cel">

<input type="submit" value="convert it">



  </fieldset>
<p><a href="">Reset</a></p>

  </form>

  <?php 
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['cel'])){
$cel = $_POST['cel'];
// we will use a new function to make sure that our values are integers intval()
$cel_int = intval($cel);
$far = ($cel_int * 9/5) + 32;

//if end user does not enter a value, say something

if($cel == NULL) {

    echo '<p class="error">Please fill out the celcius value!</p>';

} elseif($far <= 32) {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    and it is pretty cold out there</br> </p>';
}

elseif($far <= 45) {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    and it is getting warmer</br> </p>'; 
}

elseif($far <= 60) {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    and it is sweater weather</br> </p>'; 
}

elseif($far <= 75) {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    and we\'re going to the park</br> </p>'; 
}

elseif($far <= 90) {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    and we may be going to the beach</br> </p>'; 
}

else {
    echo '<p> '.$cel_int.' degrees celcius equals '.$far.' fahrenhiet<br>
    we are at the beach!</br> </p>'; 
}


} // end isset


 


} // end post
  
  
  
  
  
  ?>

</body>
</html>