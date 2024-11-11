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
    
case 'gallery.php' :
$title = 'Galleryv page of our website project';
$body = 'gallery inner';
break;          
        
}
// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
     'daily.php' => 'Daily',
     'contact.php' => 'Contact',
     'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
         $my_return .= '<li><a style ="color:red;" href=" '.$key.' "> '.$value.'</a></li>';    
        } else {
        $my_return .= '<li><a style = "color:blue;" href=" '.$key.' "> '.$value.'</a></li>';
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
$show = 'Friday Now Showing Blue lock';
$im = 'block.jpg';
$alt = 'picture of anime character kicking a socker ball with chains';   
$syn = '<p><b>Blue Lock</b> an anime about soccer but to the death. High school soccer players from across Japan gather for a controversial project designed to create the best and most egoistic striker in the world.</p>';
$bkg = 'darkblue';
break;

case 'Saturday' :
$show = 'Saturday Now Showing Jujutsu Kaisen';
$im = 'jjk.png';
$alt = 'a very scary picture';   
$syn = '<p><b>Jujutsu Kaisen</b> is where a boy must fight curses or he dies. The story follows high school student Yuji Itadori as he joins a secret organization of Jujutsu Sorcerers in order to kill a powerful Curse named Ryomen Sukuna, to whom Yuji becomes the host.</p>';
$bkg = 'darkred';
break;

case 'Sunday' :
$show = 'Sunday Now showing Delicos nursery';
$im = 'dn.jpg';
$alt = 'anime charchters posed with their children';   
$syn = '<p><b>Delicos Nursery</b> Vampires who now have to raise their own children to solve a crime. A story of noblesse oblige childcare struggles by vampire aristocrats. Will they be able to balance their mission and the chaos of taking care of children in the magnificent Gothic world?</p>';
$bkg = 'darkred';
break;

case 'Monday' :
$show = 'Monday Now Showing Link Click';
$im = 'link.jpg';
$alt = ' two beautiful boys painted in a museum';   
$syn = '<p><b> Link Click</b> is a show where three highschoolers jumpthrough time to make some money.Using superpowers to enter their clientele\'s photos one by one, Cheng Xiaoshi and Lu Guang take their work seriously at Time Photo Studio, a small photography shop set in the backdrop of a modern metropolis.</p>';
$bkg = 'white';
break;
            
case 'Tuesday' :
$show = 'Tuesday Now Showing Spy Family day';
$im = 'spy.jpg';
$alt = 'multiple manga covers from spy family';   
$syn = '<p><b>Spy Family</b> A show where the hinges of society rest on the shoulders of a child. A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together. A spy on an undercover mission gets married and adopts a child as part of his cover. </p>';
$bkg = 'pink';
break;

case 'Wednesday' :
$show = 'Wednesday Now Showing My Hero Acadamia';
$im = 'my.jpg';
$alt = 'too many anime characters in one photo';   
$syn = '<p><b>My Hero Acadamia</b> is a show where a child sets out to change the hero world and learns he cant. Set in a world where superpowers (called "Quirks") have become commonplace, the story follows Izuku Midoriya, a boy who was born without a Quirk but still dreams of becoming a superhero himself.</p>';
$bkg = 'navy';
break;

case 'Thursday' :
$show = 'Thursday Now Showing Hanoko Kun';
$im = 'hano.jpg';
$alt = 'a cute japanese boy in school uniform in a toilet';   
$syn = '<p><b>Toilet bound Hanako-kun </b> is a show where the previously deceased hanako turns into a toilet bound ghost. Nene Yashiro, a high schooler who loves the occult, accidentally becomes bonded to the ghost of Hanako-kun. The two try to keep the peace between the students and the supernatural beings, but they often find themselves in trouble.</p>';
$bkg = 'red';
break;
}

// my forms php 


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

if($_SERVER['REQUEST_METHOD'] == "POST" ) {

    // if inputs are empty we will declare a statment else we will assign the $_POST to a variable
    // $_POST['wines']

    if(empty($_POST['wines'])) {
        // say something or do something 
      $wines_err = 'what.. no wines?';
        
    }else {
        $wines = $_POST['wines'];
    }

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

   if(empty($_POST['gender'])){
    $gender_err = 'please choose your gender';
   } else {
    $gender = $_POST['gender'];
   }

   if(empty($_POST['phone'])){
    $phone_err = 'please fill out your phone number';
   } else {
    $phone = $_POST['phone'];
   }

   if(empty($_POST['regions'])){
    $regions_err = 'please choose your region';
   } else {
    $regions = $_POST['regions'];
   }

   if(empty($_POST['comments'])){
    $comments_err = 'we value your words';
   } else {
    $comments = $_POST['comments'];
   }

   if(empty($_POST['privacy'])){
    $privacy_err = 'you must agree to receive spam emails';
   } else {
    $privacy = $_POST['privacy'];
   }


function my_wines($wines){
$my_return='';
if(!empty($_POST['wines'])) {
    $my_return = implode(',' ,$_POST['wines']);
}    
return $my_return;

}   // end wines function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'vanessa1234@hotmail.com';
$subject = 'test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Wines: '.$my_wines($wine).' '.PHP_EOL.'
Regions: '.$regions.' '.PHP_EOL.' 
Phone: '.$phone.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.' 
';

$headers = array(
  'From' => 'noreply@hotmail.com'
);

// we will be adding an if statement - that this email form will only work if all feilds are filled out

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $gender &&
    $wines &&
    $regions &&
    $phone &&
    $comments)) {
        mail($to, $subject, $body, $headers);
        header('location:thx.php');
    }

    // dont forget you must upload this from onto your server to recieve an email


} // end isset


} // closing request