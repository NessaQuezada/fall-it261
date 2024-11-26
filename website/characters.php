<?php
include('config.php');
include('./includes/credentials.php');
include('./includes/header.php');
?>


<main>
<h1>Welcome to our character view page!</h1>
<h2>Characters that deserved better</h2>

<?php

$sql = 'SELECT * FROM characters';

//connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) >0) {


while($row =mysqli_fetch_assoc($result)) {
 
    echo '
    <h3><b>About:</b> '.$row['character_name'].' from '.$row['show'].'</h3>
<ul>
   <li><b>Age:</b> '.$row['age'].'</li>
   <li><b>Role:</b> '.$row['role'].'</li> 
</ul>

<p>For more character info about '.$row['character_name'].', click <a href="characters-view.php?id='.$row['character_id'].'">here</a></p>
   
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