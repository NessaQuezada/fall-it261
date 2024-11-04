<?php
$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$phone = '';
$regions = '';
$wines = '';
$comments = '';
$privacy = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$regions_err = '';
$wines_err = '';
$comments_err = '';
$privacy_err = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our second form week 6</title>
    <link href = "css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
      <h1>second form in week 6</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
    <fieldset>
        <legend>
            contact nessa
        </legend>
        <lable>First Name</lable>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">
        <span><?php echo $first_name_err  ;?></span>

        <lable>Last Name</lable>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">
        <span><?php echo  $last_name_err  ;?></span>

        <lable>Email</lable>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">
        <span><?php echo  $email_err  ;?></span>

        <lable>Gender</lable>

        <ul>
            <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female' ) echo 'checked="checked"' ;?>>Female</li>
            <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male' ) echo 'checked="checked"' ;?>>Male</li>
            <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither' ) echo 'checked="checked"' ;?>>Neither</li>
        </ul>

        <span><?php echo $gender_err ;?></span>

        <label>Phone</lable>
        <input type ="tel" name ="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
        <span><?php echo $phone_err ;?></span>

        <lable>Favorite Wines</lable>

        <ul>
            <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"' ;?>>Cabernet</li>

            <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"' ;?>>Merlot</li>

            <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"' ;?>>Syrah</li>

            <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"' ;?>>Malbec</li>

            <li><input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"' ;?>>Red</li>
        </ul>

        <span><?php echo $wines_err ;?></span>

        <lable>Regions</lable>
        <select name="regions">
            <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"'    ;?>>Select one</option>

            <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"'    ;?>>Northwest</option>

            <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"'    ;?>>Southwest</option>

            <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"'    ;?>>Midwest</option>

            <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"'    ;?>>Northeast</option>

            <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"'    ;?>>Southeast</option>
        </select>
        <span><?php echo $regions_err ;?></span>

        <lable>Comments</lable>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])   ;?></textarea>
        <span><?php echo $comments_err ;?></span>

        <lable>Privacy</lable>
        <ul>
        <li><input type="radio" name="privacy" value="yes"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'      ;?>   ></li>
        </ul>
        <span><?php echo $privacy_err ;?></span>

        <input type="submit" value="send it">

        <p><a href="">Reset</a></p>


    </fieldsey>
    <form>
</body>
</html>