<?php // index.php page which in the big picture it represents the homepage of a website

session_start();
include('config.php'); ?>
<header>
<!-- if the username has not been set, you will not see the index file but will be directed back to the login page -->
<?php
if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');

// if our session for the username is successful, we will display a message

if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>


</div>
<!-- end success -->

<?php endif; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3> Hello
    <?php echo $_SESSION['username'] ;?>
</h3>
<a href="index.php?logout='1'"> Log out </a>

</div>
<!-- end welcome logout -->

<?php endif  ;?>
</header>
<div id="wrapper">
<!-- my wrapper starts here-->
<h1>Welcome to the home page of our website</h1>

</div>
<!-- end wrapper -->

<?php include('./includes/footer.php');?>