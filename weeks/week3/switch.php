<?php

// class coffee exersise
//if today is friday, it will be pumpkin latte day
// Intraducing the isset() function
// then we will intraduce our first GLOBAL variable
// our switch

// starting the switch
//if $GET['today'] is set, $today, then all is well, but if it not set therefore the else is the day
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?

// $variable = 'this is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else
// echo 'Variable has not been set';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'today has been set';
// } else {
//     echo 'Not!!';
//

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
}else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$coffee = '<h2>Friday is our pumpkin latte day</h2>';
$pic = 'psl.jpg';
$alt = 'pumpkin spiced latte';   
$content = '<p><b>The Pumpkin Spice Latte (PSL)</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>';
break;

case 'Saturday' :
$coffee = '<h2>Saturday is our green tea latte day</h2>';
$pic = 'green.jpg';
$alt = 'green tea latte';   
$content = '<p><b>The Green Tea Latte </b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. </p>';
break;

case 'Sunday' :
$coffee = '<h2>Sunday is our regular joe day</h2>';
$pic = 'cup.jpg';
$alt = 'cup of coffee';   
$content = '<p><b>The Regular joe</b>The difference between black coffee and regular coffee is that black coffee is prepared without any additives or modifications. It\'s typically made by brewing coffee in hot water and enjoyed plain. Regular coffee may have additives to enhance taste and sweetness such as milk, cream, or sugar. </p>';
break;

case 'Monday' :
$coffee = '<h2>Monday is our latte day</h2>';
$pic = 'latte.jpg';
$alt = ' A latte';   
$content = '<p><b>A Latte</b> is a coffee drink of Italian origin made with espresso and steamed milk, traditionally served in a glass.</p>';
break;
            
case 'Tuesday' :
$coffee = '<h2>Tuesday is blended latte day</h2>';
$pic = 'blend.jpg';
$alt = 'coffee blended with ice';   
$content = '<p><b>A blended iced coffee</b> is also known as a frappe, is a coffee drink made by blending coffee with ice, milk, and other ingredients </p>';
break;

case 'Wednesday' :
$coffee = '<h2>Wednesday is our chai latte day</h2>';
$pic = 'chai.jpg';
$alt = 'hot tea';   
$content = '<p><b>chai</b> is a type of Indian tea, made especially by boiling the tea leaves with milk, sugar, and cardamom.</p>';
break;

case 'Thursday' :
$coffee = '<h2>Thursday is our cappuccino day</h2>';
$pic = 'ccc.jpg';
$alt = 'coffee cup';   
$content = '<p><b>The cappuccino </b> is a coffee drink that is creamy, smooth, and balanced, with a mildly sweet flavor from the milk. The espresso flavor is stronger because the milk isn\'t mixed in. </p>';
break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch classwork exercise</title>
    <style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

#wrapper {
    width: 950px;
    margin: 20px auto;
}

h1, h2, img {
    margin-bottom:10px;
}

    </style>
</head>
<body>
    <div id= "wrapper">
        <h1>My wonderful switch classwork</h1>
        <?php
        echo $coffee;
        ?>
     
     <img src="../../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
     <?php echo $content; ?>
     <h2>check out our daily specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>


    </div>



</body>
</html>