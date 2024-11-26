<?php

include('config.php');
include('./includes/credentials.php');
include('./includes/header.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: characters.php');
}

$sql = 'SELECT * FROM characters WHERE character_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) >0) {

    while($row =mysqli_fetch_assoc($result)) {
$character_name = stripcslashes($row['character_name']);
$show = stripcslashes($row['show']);
$age = stripcslashes($row['age']);
$role = stripcslashes($row['role']);
$quote= stripcslashes($row['quote']);
$description = stripcslashes($row['description']);
$premise= stripcslashes($row['premise']);



$feedback = '';

    } // close while

} else {
    $feedback = 'Houston, we have a problem';
}

?>



<main>
<h1>Welcome to our character view page</h1>
<h2>Presenting: <?php echo $character_name;?></h2>
<ul>
<?php
echo '
<li><b>Character:</b>'.$character_name.'</li>
<li><b>Age:</b>'.$age.'</li>
<li><b>Description:</b>'.$description.'</li>
';
?>
</ul>
<p><?php echo $premise;?></p>
<p>Return to our <a href ="characters.php">characters page!</a></p>

</main>


<aside>
    <h3>said character</h3>
<figure>
<img src="./images/scbp<?php echo $id;?>.jpg" alt="<?php echo $character_name   ;?>">
<figurecaption>
   <?php echo $quote  ;?>
</figurecaption>
</figure>
</aside>

</div>
<!--end wrapper-->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');