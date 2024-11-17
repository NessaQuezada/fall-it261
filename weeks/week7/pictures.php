<?php


$people['Bret_Baier'] = 'baie_bree_One of the "normal" ones.';
$people['Wolf_Blitzer'] = 'blit_wolf_Been around for many years.';
$people['Erin_Burnett'] = 'burn_errr_Has her own show on CNN.';
$people['Jericka_Duncan'] = 'dunc_erik_White House Correspondent.';
$people['Van_Jones'] = 'jone_vann_Always at the big table.';
$people['Rachel_Maddow'] = 'madd_rach_Is interesting.';
$people['Norah O\'Donell'] = 'odon_norr_Sorry that she has left the building.';


// $name = $key   image = $value

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pictures exercise</title>
</head>
<body>

<table>
<?php foreach($people as $name => $image)    :?>    
<tr>
    <td><img src ="images/<?php echo substr($image, 0, 4)   ;?>.jpg" alt="<?php echo str_replace('_', ' ', $name)   ;?>"></td>
    <td><?php echo str_replace('_', ' ' , $name);  ?></td>
    <td><?php echo substr($image, 10)     ;?></td>
    <td><img src ="images/<?php echo substr($image, 5, 4)   ;?>.jpg" alt="<?php echo str_replace('_', ' ', $name)   ;?>"></td>
</tr>


<?php endforeach ;?>
</table>


    
</body>
</html>