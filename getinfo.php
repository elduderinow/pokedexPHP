<?php
$pokeName = "1";

$contents = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$pokeName}");
$contents = utf8_encode($contents);
$results = json_decode($contents, true);



var_dump($results);
//$base =  $results -> base_experience;
//$base =  $results["abilities"][0]["ability"]["name"];
//$base2 =  $results["abilities"];

//var_dump($base2);
echo $results["forms"][0]["name"];



