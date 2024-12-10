<?php

include('config.php');
include('./includes/credentials.php');
include('./includes/header.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: characters.php');
}

$sql = 'SELECT * FROM game_characters WHERE game_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) >0) {

    while($row =mysqli_fetch_assoc($result)) {
$name = stripcslashes($row['name']);
$game = stripcslashes($row['game']);
$stats = stripcslashes($row['stats']);
$details = stripcslashes($row['details']);




$feedback = '';

    } // close while

} else {
    $feedback = 'Houston, we have a problem';
}

?>



<main>
<h1>Welcome to our character view page</h1>
<h2>Presenting: <?php echo $name;?></h2>
<ul>
<?php
echo '
<li><b>Character:</b>'.$name.'</li>
<li><b>Stats:</b>'.$stats.'</li>
<li><b>Description:</b>'.$details.'</li>
';
?>
</ul>

<p>Return to our <a href ="characters.php">characters page!</a></p>

</main>


<aside>
    <h3>said character</h3>
<figure>
<img src="./images/player<?php echo $id;?>.jpg" alt="<?php echo $name   ;?>">
</figure>
</aside>


<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');