<?php
include('config.php');
include('./includes/header.php');
?>


<main>
<h1>my favorite characters from video games</h1>

<table>
<?php foreach($char as $name => $image)    :?>    
<tr>
    <td><img src ="images/<?php echo substr($image, 0, 3)   ;?>.jpg" alt="<?php echo str_replace('_', ' ', $name)   ;?>"></td>
    <td><?php echo str_replace('_', ' ' , $name);  ?></td>
    <td><?php echo substr($image, 4)     ;?></td>
</tr>


<?php endforeach ;?>
</table>


</main>

 <?php 
 include('./includes/footer.php');
