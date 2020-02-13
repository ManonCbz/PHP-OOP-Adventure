<?php

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

echo dragon::TYPE;              // Affiche une constante


include "Views/main.php";

?>