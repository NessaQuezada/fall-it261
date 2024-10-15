<?php
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
     'gallery.php' => 'Gallery'
);

// php case for big switch 3 hw
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
}else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$show = '<h2>Friday Now Showing Blue lock</h2>';
$im = 'block.jpg';
$alt = 'picture of anime character kicking a socker ball with chains';   
$syn = '<p><b>Blue Lock</b> an anime about soccer but to the death <br>High school soccer players from across Japan gather for a controversial project designed to create the best and most egoistic striker in the world.</br> </p>';
$bkg = 'darkblue';
break;

case 'Saturday' :
$show = '<h2>Saturday Now Showing Jujutsu Kaisen</h2>';
$im = 'jjk.png';
$alt = 'a very scary picture';   
$syn = '<p><b>Jujutsu Kaisen </b> is where a boy must fight curses or he dies <br>The story follows high school student Yuji Itadori as he joins a secret organization of Jujutsu Sorcerers in order to kill a powerful Curse named Ryomen Sukuna, to whom Yuji becomes the host.</br></p>';
$bkg = 'darkred';
break;

case 'Sunday' :
$show = '<h2>Sunday Now showing Delicos nursery</h2>';
$im = 'dn.jpg';
$alt = 'anime charchters posed with their children';   
$syn = '<p><b>Delicos Nursery</b> Vampires who now have to raise their own children to solve a crime.<br>A story of noblesse oblige childcare struggles by vampire aristocrats. Will they be able to balance their mission and the chaos of taking care of children in the magnificent Gothic world?</br> </p>';
$bkg = 'darkred';
break;

case 'Monday' :
$show = '<h2>Monday Now Showing Link Click</h2>';
$im = 'link.jpg';
$alt = ' two beautiful boys painted in a museum';   
$syn = '<p><b> Link Click</b> is a show where three highschoolers jumpthrough time to make some money.<br>Using superpowers to enter their clientele\'s photos one by one, Cheng Xiaoshi and Lu Guang take their work seriously at Time Photo Studio, a small photography shop set in the backdrop of a modern metropolis.</br></p>';
$bkg = 'white';
break;
            
case 'Tuesday' :
$show = '<h2>Tuesday Now Showing Spy Family day</h2>';
$im = 'spy.jpg';
$alt = 'multiple manga covers from spy family';   
$syn = '<p><b>Spy Family</b> A show where the hinges of society rest on the shoulders of a child<br>A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together. A spy on an undercover mission gets married and adopts a child as part of his cover.</br></p>';
$bkg = 'pink';
break;

case 'Wednesday' :
$show = '<h2>Wednesday Now Showing My Hero Acadamia</h2>';
$im = 'my.jpg';
$alt = 'too many anime characters in one photo';   
$syn = '<p><b>My Hero Acadamia</b> is a show where a child sets out to change the hero world and learns he cant.<br>Set in a world where superpowers (called "Quirks") have become commonplace, the story follows Izuku Midoriya, a boy who was born without a Quirk but still dreams of becoming a superhero himself.</br></p>';
$bkg = 'navy';
break;

case 'Thursday' :
$show = '<h2>Thursday Now Showing Hanoko Kun</h2>';
$im = 'hano.jpg';
$alt = 'a cute japanese boy in school uniform in a toilet';   
$syn = '<p><b>Toilet bound Hanako-kun </b> is a show where the previously deceased hanako turns into a toilet bound ghost. <br>Nene Yashiro, a high schooler who loves the occult, accidentally becomes bonded to the ghost of Hanako-kun. The two try to keep the peace between the students and the supernatural beings, but they often find themselves in trouble. </br>  </p>';
$bkg = 'red';
break;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" >
</head>
<body class ="<?php echo $body ;?>">


    <header>
<div class="inner-header">
<a href="index.php">

    <img id="logo" src="images/logo.png" alt="logo" >
</a>

<!-- <nav> 
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Daily</a></li>
    <li><a href="">Project</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Gallery</a></li>

</ul>    
</nav> -->


<nav>
<ul>
<?php
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {   
    echo '<li><a style ="color:red;" href=" '.$key.' "> '.$value.'</a><li>';
    } else {
      echo '<li><a style = "color:blue;" href=" '.$key.' "> '.$value.'</a><li>';
    }  
} //end for each   

?>
</ul>
</nav>

</div>
<!--end inner header-->
    </header>

