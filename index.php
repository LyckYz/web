<?php

print("PHP is working!");
$user = 'u82371';
$pass = '5135832'; 
$db = new PDO('mysql:host=localhost;dbname=u82371', $user, $pass,
  [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

?>
