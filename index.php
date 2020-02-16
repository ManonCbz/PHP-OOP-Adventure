<?php

include "traits/personnageUtils.php";
require "Classes/personnage.php";
require "Classes/dragon.php";

session_start();

if(isset($_SESSION['personnage']))
{
    $personnage = $_SESSION['personnage'];
}
else {
    $personnage = new personnage();
    $_SESSION['personnage'] = $personnage;
}

include "Controllers/main.php";

$position = $personnage->getPosition();


//test

$dragon = new dragon();
$dragon->testAction();

define('TEST', 1);
echo TEST;

$dragon->placeRandom();  //trait
print_r($dragon->getPosition());

echo dragon::TYPE;              // Affiche une constance

//echo personnage::$numInstances;
echo personnage::getNumInstances();

include "Views/main.php";
