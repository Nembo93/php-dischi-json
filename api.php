<?php 
$albums = file_get_contents("dischi.json");
// $albums = json_decode($album, true);

header ("content-type: application/json");

// var_dump($albums);
echo $albums;
?>