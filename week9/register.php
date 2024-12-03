<?php
include('server.php');
// conevtinh header include
include('./includes/header.php');

?>
<div id="wrapper">

<h1 class="center">register today!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<!-- first_name, last_name, email, username, passwor1, password2,  -->

<lable>First name</lable>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">

<lable>Last name</lable>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">

<lable>Email</lable>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">

<lable>username</lable>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])   ;?>">

<lable>Password</lable>
<input type="password" name="password1" value="<?php if(isset($_POST['password1'])) echo htmlspecialchars($_POST['password1'])   ;?>">

<lable>Confirm your password</lable>
<input type="password" name="password2" value="<?php if(isset($_POST['password2'])) echo htmlspecialchars($_POST['password2'])   ;?>">

<button type="submit" name="reg_user" class="btn">Register! </button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>' ">Reset</button>

</fieldset>
</form>


<p class="center">Already a member? <a href="login.php">please login here</a></p>
<?php
include('errors.php'); ?>
</div>
<!-- end wrapper -->
<?php
include('./includes/footer.php');  ?>