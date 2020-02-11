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
print_r($dragon->getActions());

include "Views/main.php";

?>