<?php

// do not call out the header include yet
// the following information is above the docktype

include('config.php');
// is Get set

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) >0) {

    while($row =mysqli_fetch_assoc($result)) {
$first_name = stripcslashes($row['first_name']);
$last_name = stripcslashes($row['last_name']);
$email = stripcslashes($row['email']);
$birthdate = stripcslashes($row['birthdate']);
$occupation = stripcslashes($row['occupation']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
// will I add a column


$ffedback = '';

    } // close while

} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

<main>
<h1>Welcome to our peole view page</h1>
<h2>introducing: <?php echo $first_name;?></h2>
<ul>
<?php
echo '
<li><b>First Name:</b>'.$first_name.'</li>
<li><b>Last Name:</b>'.$last_name.'</li>
<li><b>Email:</b>'.$email.'</li>
<li><b>Birthdate:</b>'.$birthdate.'</li>
<li><b>Occupation:</b>'.$occupation.'</li>
';
?>
</ul>
<p><?php echo $details;?></p>
<p>Return to our <a href ="people.php">people page!</a></p>

</main>


<aside>
    <h3>Aside info that will display our person img</h3>
<figure>
<img src="./images/people<?php echo $id;?>.jpg" alt="<?php echo $first_name   ;?>">
<figurecaption>
   <?php echo $blurb  ;?>
</figurecaption>
</figure>
</aside>

</div>
<!--end wrapper-->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');