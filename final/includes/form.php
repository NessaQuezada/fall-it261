<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>    
  <legend>
    Contact us at kuyo
  </legend>

  <lable>First Name</lable>
  <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
  <span><?php echo $first_name_err  ;?></span>

  <lable>Last Name</lable>
  <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
  <span><?php echo  $last_name_err  ;?></span>

  <lable>Email</lable>
  <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
  <span><?php echo  $email_err  ;?></span>

  <lable>How did you hear about us</lable>
  <ul>
    <li><input type="checkbox" name="found[]" value="fb" <?php if(isset($_POST['found']) && in_array('pop', $found)) echo 'checked="checked"' ;?>>Facebook</li>

    <li><input type="checkbox" name="found[]" value="tw" <?php if(isset($_POST['found']) && in_array('rb', $found)) echo 'checked="checked"' ;?>>Twitter</li>

    <li><input type="checkbox" name="found[]" value="em" <?php if(isset($_POST['found']) && in_array('hip', $found)) echo 'checked="checked"' ;?>>Email</li>

    <li><input type="checkbox" name="found[]" value="ev" <?php if(isset($_POST['found']) && in_array('elo', $found)) echo 'checked="checked"' ;?>>Event</li>

    <li><input type="checkbox" name="found[]" value="ot" <?php if(isset($_POST['found']) && in_array('rock', $found)) echo 'checked="checked"' ;?>>Other</li>
  </ul>
  <span><?php echo $found_err ;?></span>

  <lable>Reason for contact</lable>

  <select name="reason"> 
  <option value=""<?php if(isset($_POST['reason']) && is_null($_POST['reason'])) echo 'selected="unselected"' ;?>>Select one</option>
  <option value="op" <?php if(isset($_POST['reason']) && $_POST['reason'] == "op") echo 'selected="selected"'    ;?>>Offers/Promotion</option>
  <option value="as" <?php if(isset($_POST['reason']) && $_POST['reason'] == "as") echo 'selected="selected"'    ;?>>Assistance</option>
  <option value="re" <?php if(isset($_POST['reason']) && $_POST['reason'] == "re") echo 'selected="selected"'    ;?>>Refunds</option>
  <option value="is" <?php if(isset($_POST['reason']) && $_POST['reason'] == "is") echo 'selected="selected"'    ;?>>Issues</option>
  <option value="ot" <?php if(isset($_POST['reason']) && $_POST['reason'] == "ot") echo 'selected="selected"'    ;?>>Other</option>
</select>

<span><?php echo $reason_err ;?></span> 

  <lable>Comments</lable>
  <input type="text" name="comments" value="<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?>">
  <span><?php echo $comments_err ;?></span>



  <lable>Privacy</lable>
  <ul>
  <li><input type="radio" name="privacy" value="yes"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes" ) echo 'checked="checked"' ;?>  ></li>
  </ul>
  <span><?php echo $privacy_err ;?></span>


  <input type="submit" value="Send">

  <p><a href="">Reset</a></p>



</fieldset>
</form>
