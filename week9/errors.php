<?php 
// our errors file that we will be using a for each loop
// ararry_push - different messages for different errors

if(count($errors) > 0) : ?>

<div class="errors">
<?php foreach($errors as $error) : ?>
<p>
    <?php echo $error;  ?>
</p>
<?php endforeach; ?>


</div>

<?php endif ;?>