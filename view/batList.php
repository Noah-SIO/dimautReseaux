<?php
require_once('../class/batiments.php');
$test = new ManagerBatiments();
$donneestableau = $test->getBatimentListe();

if($donneestableau != NULL){
    echo"<div>";
    echo"<ul>";
    for ($i = 0; $i < count($donneestableau); $i++) {
        echo"<li>". $donneestableau[$i]->getNom(). "</li>";
        echo"<a href='batfiche.php?id=". $donneestableau[$i]->getId() ."'>";
        echo"<img src='../" . $donneestableau[$i]->getImg() . "' alt='batiments " . $donneestableau[$i]->getNom() . "' width='200' height='100'></br>";
        echo"</a>";


    }
    echo"</ul>";
    echo"</div>";
}