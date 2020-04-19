<?php
error_reporting(E_ALL ^ E_NOTICE);
$key = "api_key=RGAPI-d4083a36-672d-4887-ae44-f7aa80c3a48d";
$url = "https://br1.api.riotgames.com/lol/platform/v3/champion-rotations?$key";
$data = file_get_contents($url);
$json = json_decode($data);
$fw = $json->freeChampionIds;

$champions = require_once ("champions.php");
$newchampion = new Champions();
echo "<h1 style='font-family: 'Oswald', sans-serif;'>Free Week<h1>";
foreach ($fw as $champFw){
   $freeWeek = $newchampion->ChampIdtoName($champFw);
   $Splash = $freeWeek.".jpg";
   echo "<img style='max-height: 250px'src=\"icons/$Splash\">";
}
?>
<html>
<head>
 <title>FreeWeek</title>
</head>
 <body>
    
 </body>
</html>
