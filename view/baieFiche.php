<?php
//require_once('../class/baie.php');
//require_once('../class/switch.php');
$test = new ManagerBaie();
$test2 = new ManagerSwitch();
$tableaubaie = $test->getBaieInfo($_GET['id']);
$tableauswitch = $test2->getSwitchByBaieId($_GET['id']);
echo"<h1>". $tableaubaie[0]->getNom() . "</h1>";

for($i=0; $i< count($tableauswitch); $i++){
    echo"<p> Switch ". $tableauswitch[$i]->getMarque() . " " . $tableauswitch[$i]->getModele() . " :". "</p>";
    echo"<p>Nombre de port : " . $tableauswitch[$i]->getNbPort() . "  et Type de Liaison : " . $tableauswitch[$i]->getTypeLiaison() ."</p>";
    echo"<img src='". $tableauswitch[$i]->getImg() . "'>";
}