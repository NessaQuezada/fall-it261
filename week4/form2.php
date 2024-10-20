<?php
//more on our form -- additional fields, And>>>
// the logic -- if i do not enter anthing inside the input field, there will be a message!!
// if a field is empty, we need to do something -- sounds like an if statement
// first_name, last_name, email, comments
// be careful of our braces

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// create another is statement -- if fields are empty, echo please fill out the fields

if(empty($_POST['first_name']    &&
$_POST['last_name']  &&
$_POST['email'] &&
$_POST['comments'])) {


echo'please fill out all the fields';

} else {

    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
    echo '<br>';

} 

} else {
    echo'
    
    <form action ="" method= "post">
    <label>FIRST NAME</label>
    <input type="text" name="first_name">

     <form action ="" method= "post">
    <label>LAST NAME</label>
    <input type="text" name="last_name">

     <form action ="" method= "post">
    <label>EMAIL</label>
    <input type="email" name="email">

     <form action ="" method= "post">
    <label>COMMENTS</label>
    <textarea name="comments"></textarea>


    <input type="submit" value="Send it!">



    </form>
    <p><a href="">RESET</a></p>
    ';

} // end else