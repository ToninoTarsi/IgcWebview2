<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/timezone/json?location='.$_POST['lat'].','.$_POST['lon'].'&timestamp='.$_POST['recstart'].'&key=AIzaSyA0gwXXqbJnT90qkme9-F3Sb3z-h7RYdYI');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($ch);
 curl_close($ch);
echo $json;
?>