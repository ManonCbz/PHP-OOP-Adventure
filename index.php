<?php

require "Classes/personnage.php";
require "Classes/dragon.php";

require "Classes/Classe1.php";
require "Classes/Classe2.php";

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


use classes\maClasse as Classe1;
use classes\maClasse as Classe2;

$classe1 = new Classe1();
$classe2 = new Classe2();

$classe1->test();
$classe2->test();

$position = $personnage->getPosition();


//test

$dragon = new dragon();
$dragon->testAction();

define('TEST', 1);
echo TEST;

echo dragon::TYPE;              // Affiche une constance

//echo personnage::$numInstances;
echo personnage::getNumInstances();

include "Views/main.php";

