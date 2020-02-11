<?php

require "Classes/personnage.php";

session_start();

if(isset($_SESSION['personnage']))
{
    $personnage = $_SESSION['personnage'];
}
else {
    $personnage = new personnage();
    $_SESSION['personnage'] = $personnage;
}

$move = $_POST['move'];
echo $move;

switch ($move)
{
    case "top" :
        $personnage->moveTop();
        break;
    case "left" :
        $personnage->moveLeft();
        break;
    case "right" :
        $personnage->moveRight();
        break;
    case "bottom" :
        $personnage->moveBottom();
        break;
}

$position = $personnage->getPosition();
echo $position['x']." / ".$position['y'];

$action = $_POST['action'];
echo $action;

?>


<div id="container">

    <div id="display">

    </div>

    <div id="controls">
        <form method="post" class="form">
            <div>
                <button name="move" value="top">^</button>
                <button name="move" value="left"><</button>
                <button name="move" value="right">></button>
                <button name="move" value="bottom">v</button>
            </div>
            <div>
                <select name="action">
                    <option value="" selected></option>
                    <option value="attack">Attack</option>
                </select>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>

</div>