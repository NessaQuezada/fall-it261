<?php
// our wine list would it not be an array of wine

echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Melbec',
    'Red blend'
);

// since we can't echo an array, we will be using a foreach loop!
echo '<ul>';
foreach($wines as $key) {
    echo '<li> '.$key.' </li>';
}
echo '</ul>';

echo '<h2>Movies and shows list that will have both a key and a value </h2>';

$shows = [
'Apple Tv' => 'Severance',
'Apple Tv' => 'For All Mankind',
'Show Time' => 'City On A Hill',
'Show Time' => 'Homeland',
'Movie' => 'Top Gun Maverick',
'HBO Max' => 'Hacks'
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li><b>'.$key.'</b>'.$value.' </li>';
}
echo '</ul>';

echo '<h2>Time for our navigation that will again have both a key and a value </h2>';
$nav = array(
    'index.php' => 'Home',
      'about.php' => 'About',
        'daily.php' => 'Daily',
         'contact.php' => 'Contact',
          'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href = " '.$key.' "> '.$value.'</a> </li>';
}
echo '</ul>';