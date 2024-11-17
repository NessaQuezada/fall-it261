<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>    
  <legend>
    Contact Vanessa
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

  <lable>Phone</lable>
  <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])  ;?>">
  <span><?php echo $phone_err ;?></span>

  <lable>Playlist</lable>

  <ul>
    <li><input type="checkbox" name="music[]" value="pop" <?php if(isset($_POST['music']) && in_array('pop', $music)) echo 'checked="checked"' ;?>>Pop Music</li>

    <li><input type="checkbox" name="music[]" value="rb" <?php if(isset($_POST['music']) && in_array('rb', $music)) echo 'checked="checked"' ;?>>Rythm and Blues</li>

    <li><input type="checkbox" name="music[]" value="hip" <?php if(isset($_POST['music']) && in_array('hip', $music)) echo 'checked="checked"' ;?>>Hip Hop</li>

    <li><input type="checkbox" name="music[]" value="elo" <?php if(isset($_POST['music']) && in_array('elo', $music)) echo 'checked="checked"' ;?>>Electronic</li>

    <li><input type="checkbox" name="music[]" value="rock" <?php if(isset($_POST['music']) && in_array('rock', $music)) echo 'checked="checked"' ;?>>Rock</li>
  </ul>
  <span><?php echo $music_err ;?></span>

  <lable>Your Favorite Hobby</lable>

  <select name="hobby"> 
  <option value=""<?php if(isset($_POST['hobby']) && is_null($_POST['hobby'])) echo 'selected="unselected"' ;?>>Select one</option>
  <option value="sw" <?php if(isset($_POST['hobby']) && $_POST['hobby'] == "sw") echo 'selected="selected"'    ;?>>Swimming</option>
  <option value="rn" <?php if(isset($_POST['hobby']) && $_POST['hobby'] == "rn") echo 'selected="selected"'    ;?>>Running</option>
  <option value="cy" <?php if(isset($_POST['hobby']) && $_POST['hobby'] == "cy") echo 'selected="selected"'    ;?>>Cycling</option>
  <option value="sr" <?php if(isset($_POST['hobby']) && $_POST['hobby'] == "sr") echo 'selected="selected"'    ;?>>Surfing</option>
  <option value="sb" <?php if(isset($_POST['hobby']) && $_POST['hobby'] == "sb") echo 'selected="selected"'    ;?>>Snowboarding</option>
</select>

<span><?php echo $hobby_err ;?></span> 

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
