<?php
include('config.php');
include('./includes/header.php');
?>


<main>
<h1>Join our game night!</h1>
<p>We focus on a different game everyday. Join us in playing our many titles or enjoy someone's stream!</p>
<h2 class="<?php echo $bkg ;?>"><?php
echo $show; ?> </h2>
<?php
echo $syn;
?>

<h3>check out our daily games</h3>
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
<h3>Over 20 different characters to meet!</h3>

     
     <img src="./images/<?php echo $im;?>" alt="<?php echo $alt;?>">
    


</aside>



 <?php 
 include('./includes/footer.php');
