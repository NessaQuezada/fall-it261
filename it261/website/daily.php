<?php
include('./includes/header.php');
?>


<main>
<h1>Welcome to our daily page!</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2 class="<?php echo $bkg ;?>"><?php
echo $show; ?> </h2>
<?php
echo $syn;
?>

<h3>check out our daily showings</h3>
        <ul>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>

</main>

<aside>
<h3>Anime you think is cute, but is actually scary</h3>

     
     <img src="./images/<?php echo $im;?>" alt="<?php echo $alt;?>">
    


</aside>



 <?php 
 include('./includes/footer.php');
