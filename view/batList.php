<?php
//require_once('../class/batiments.php');
$test = new ManagerBatiments();
$donneestableau = $test->getBatimentListe();

if($donneestableau != NULL){
    echo "<div>";
        echo "<table>";
            echo "<tr>";
                for ($i = 0; $i < count($donneestableau); $i++) {
                echo "<td style='padding: 10px;'>";
                    echo "<h2 style='text-align:center;'>" . $donneestableau[$i]->getNom() . "</h2>";
                    echo "<a href='?act=batFiche&id=" . $donneestableau[$i]->getId() . "'>";
                    echo "<img src='" . $donneestableau[$i]->getImg() . "' alt='batiments " . $donneestableau[$i]->getNom() . "' width='240' height='120'><br>";
                    echo "</a>";
                echo "</td>";
    }
        echo "</tr>";
    echo "</table>";
    echo "</div>";
}      