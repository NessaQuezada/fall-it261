<?php
include('config.php');
include('./includes/credentials.php');
include('./includes/header.php');
?>


<main>
<h1>Welcome to our character view page!</h1>
<h2>Characters that deserved better</h2>

<?php

$sql = 'SELECT * FROM game_characters';

//connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) >0) {


while($row =mysqli_fetch_assoc($result)) {
 
    echo '
    <h3> '.$row['name'].'</h3>
    <h3>From '.$row['game'].'</h3>


<p>For more character info about '.$row['name'].', click <a href="characters-view.php?id='.$row['game_id'].'">here</a></p>
   
    ';

} // end while loop



} else {
    echo 'Nobody Home!!';
}

// we are going to release the server

@mysqli_free_result($result);

@mysqli_close($iConn);

?>

</main>

 <?php 
 include('./includes/footer.php');