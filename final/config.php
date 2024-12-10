<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE) {
case 'index.php' :
$title = 'Homepage of our website project';
$body = 'home';
break;

case 'about.php' :
$title = 'About page of our website project';
$body = 'about inner';
break;

case 'daily.php' :
$title = 'Daily page of our website project';
$body = 'daily inner';
break;    

case 'project.php' :
$title = 'Project page of our website project';
$body = 'project inner';
break;
    
case 'contact.php' :
$title = 'Contact page of our website project';
$body = 'contact inner';
break;
     

case 'characters.php' :
    $title = 'Characters page of our website project';
    $body = 'characters inner';
    break; 

case 'characters-view.php' :
    $title = 'Character view page of our website project';
    $body = 'characters-view inner';
    break; 


case 'thx.php' :
    $title = 'thanks form';
    break; 
        
}


// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'characters.php' => 'Characters',
     'daily.php' => 'Daily',
     'contact.php' => 'Contact',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
         $my_return .= '<li><a style ="color:green;" href=" '.$key.' "> '.$value.'</a></li>';    
        } else {
        $my_return .= '<li><a style = "color:white;" href=" '.$key.' "> '.$value.'</a></li>';
        }
    } // closing foreach
    
return $my_return;
    

} // end function


// php case for big switch 3 hw
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
}else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$show = 'Friday Now Playing Genshin Impact';
$im = 'venti.jpg';
$alt = 'picture of 5 characters falling';   
$syn = '<p><b>Genshin Impact</b> is an open world game where you are a traveler from outside this world looking to find your seperated twin sibling.</p>';
$bkg = 'darkblue';
break;

case 'Saturday' :
$show = 'Saturday Now Playing Honkai Impact 3rd';
$im = 'honkai.jpg';
$alt = 'the three main girls';   
$syn = '<p><b>Honkai Impact 3rd</b> takes place in an alternate version of Earth, plagued by catastrophes resulting from the Honkai, a dangerous energy akin to radiation that has consistently brought about cataclysms, monsters, pestilence, and death.</p>';
$bkg = 'darkred';
break;

case 'Sunday' :
$show = 'Sunday Now Playing Obey Me';
$im = 'obey.jpe';
$alt = 'the seven deadly sins';   
$syn = '<p><b>Obey Me</b> is a visual novel game that takes place in another dimension where you go to school with demons. The seven main boys are all representations of the seven deadly sins and you have to learn how to live in the same dorm as them.</p>';
$bkg = 'darkred';
break;

case 'Monday' :
$show = 'Monday Now Playing Fate Grand Order';
$im = 'grandorder.png';
$alt = 'a lot of the important characters';   
$syn = '<p><b>Fate Grand Order</b> is a gacha heavy game where your battle strength really replies on the characters you pull. There is a lot of guest artists to help draw the large amount of characters available to get.</p>';
$bkg = 'white';
break;
            
case 'Tuesday' :
$show = 'Tuesday Now Playing Honkai Star Rail';
$im = 'rail.jpg';
$alt = 'the nameless crew';   
$syn = '<p><b>Honkai Star Rail</b> is a semi open world game where you travel between different worlds to help the residence with stellerons, which are entities that bring about disasters in a veriaty of ways.</p>';
$bkg = 'pink';
break;

case 'Wednesday' :
$show = 'Wednesday Now Playing Wuthering Waves';
$im = 'waves.jpg';
$alt = 'three characters';   
$syn = '<p><b>Wuther Waves</b> is an open world game where you wake up in an unknown place with abilities equal to a high ranked adventurer. A group of travelers find you and help you navigate to the nearest town where you become a prophited hero.</p>';
$bkg = 'navy';
break;

case 'Thursday' :
$show = 'Thursday Now Playing Twisted Wonderland';
$im = 'twst.jpg';
$alt = 'the dorm leaders';   
$syn = '<p><b>Twisted Wonderland</b> is a visual novel game where you meet characters twisted from disney movies, particularly the disney villains. Each dorm represents a different movie and all the characters within it are also references. You, an unexpected transfer student with a magical cat, have to experience daily life while everything goes wrong around you.</p>';
$bkg = 'red';
break;
}


/* start my form php  */

$first_name = '';
$last_name = '';
$email = '';
$found = '';
$reason = '';
$reason = [];
$comments = '';
$privacy = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$found_err = '';
$reason_err = '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST" ) {

  // if inputs are empty we will declare a statment else we will assign the $_POST to a variable
  // $_POST['wines']

 if(empty($_POST['first_name'])){
  $first_name_err = 'please fill in your first name';
 } else {
  $first_name = $_POST['first_name'];
 }

 if(empty($_POST['last_name'])){
  $last_name_err = 'please fill in your last name';
 } else {
  $last_name = $_POST['last_name'];
 }

 if(empty($_POST['email'])){
  $email_err = 'please fill in your email';
 } else {
  $email = $_POST['email'];
 }

  } // end main if

 if(empty($_POST['found'])){
  $found_err = 'please choose how you heard about us';
 } else {
  $found = $_POST['found'];
 }

 if(empty($_POST['comments'])){
  $comments_err = 'leave a comment, we want to hear from you!';
 } else {
  $comments = $_POST['comments'];
 }

 if(empty($_POST['privacy'])){
  $privacy_err = 'you must agree to receive emails';
 } else {
  $privacy = $_POST['privacy'];
 }

 if(empty($_POST['reason'])){
  $reason_err = 'don\'t have a topic? choose other';
 } else {
  $reason = $_POST['reason'];
 }

 function my_reason($reason){
  $my_return='';
  if(!empty($_POST['reason'])) {
      $my_return = implode(',' ,$_POST['reason']);
  }    else {
      $reason_err = 'connot leave blank';
  }
  return $my_return;
  
  }   // end music function
  
  if(isset($_POST['first_name'],
  $_POST['last_name'],
  $_POST['email'],
  $_POST['hobby'],
  $_POST['music'],
  $_POST['comments'],
  $_POST['privacy'])) {
  
  $to = 'szemeo@mystudentswa.com';
  $subject = 'test email on '.date('m/d/y, h i A');
  $body = '
  First Name: '.$first_name.' '.PHP_EOL.'
  Last Name: '.$last_name.' '.PHP_EOL.'
  Email: '.$email.' '.PHP_EOL.'
  Music: '.my_music($music).' '.PHP_EOL.'
  Hobby: '.$hobby.' '.PHP_EOL.' 
  Comments: '.$comments.' '.PHP_EOL.' 
  ';
  
  $headers = array(
    'From' => 'noreply@mystudentswa.com'
  );
  
  // we will be adding an if statement - that this email form will only work if all feilds are filled out
  
  if(!empty(
      $first_name &&
      $last_name &&
      $email &&
      $music &&
      $hobby ))

   mail($to, $subject, $body, $headers);
   header('Location:thx.php');
      }


// start characters database

define('DEBUG', 'TRUE');  // We want to see our errors


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

