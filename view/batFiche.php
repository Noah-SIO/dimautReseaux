<?php
// require_once('../class/batiments.php');
// require_once('../class/image.php');
$test2 = new ManagerImage();
$test = new ManagerBatiments();
if(isset($_GET['id'])){
$donneestableau = $test->getBatimentInfo($_GET['id']);
$donneesimage = $test2->getBatimentImage($_GET['id']);
}else{
    $donneestableau = $test->getBatimentInfo($_SESSION['bat']);
    $donneesimage = $test2->getBatimentImage($_SESSION['bat']);
}
echo"<h1> Batiment " . $donneestableau[0]->getNom() . "</h1></br></br>";

$nom = $donneestableau[0]->getNom();

if(isset($_POST['change'])){

    //affichage map du batiments

    echo"<form action='' method='post'>";
    echo"<button name='changeSchema' value=".$donneestableau[0]->getId().">Schéma</button>";   
    echo"</form></br>";
    for ($i = 0; $i < count($donneesimage); $i++) {
        //multi photo
        if($nom == "Admin"){
            echo"<img src='" . $donneesimage[$i]->getLiens() . "' usemap='#image-map$i'>";
            if($i ==0){

            }
        }
        elseif($nom == "Saint Andoche"){
            echo"<img src='" . $donneesimage[$i]->getLiens() . "' usemap='#image-map".$i."'>";
                
                //map stAndoche1
                echo "<map name='image-map0'>";
                    echo "<area target='' alt='STA-AC-B1' title='STA-AC-B1' href='baiefiche.php?id=' coords='593,755,661,837' shape='rect'>";
                    echo "<area target='' alt='STA-AC-B3' title='STA-AC-B3' href='baiefiche.php?id=' coords='812,281,882,337' shape='rect'>";
                    echo"<area target='' alt='STA-AC-B9' title='STA-AC-B9' href='baiefiche.php?id=' coords='284,503,373,561' shape='rect'>";                
                    echo "</map>";
                //map stAndoche2
                echo "<map name='image-map1'>";
                    echo "<area target='' alt='STA-AC-B4' title='STA-AC-B4' href='baiefiche.php?id=' coords='785,504,839,556' shape='rect'>";
                    echo "<area target='' alt='STA-AC-B2' title='STA-AC-B2' href='baiefiche.php?id=' coords='164,446,219,502' shape='rect'>";
                echo "</map>";
        }




        //une seule photo
        else{
            echo"<img src='" . $donneesimage[$i]->getLiens() . "' usemap='#image-map'>";
        }
        if($nom == "C3D"){
            echo "<map name='image-map'>";
                echo"<area target='' alt='C3D-AC/SR-I1' title='C3D-AC/SR-I1' href='baiefiche.php?id=' coords='26,468,100,513' shape='rect'>";
                echo "<area target='' alt='C3D-AC-I2' title='C3D-AC-I2' href='baiefiche.php?id=22' coords='336,70,685,114' shape='rect'>";
                echo "<area target='' alt='C3D-AC-I3' title='C3D-AC-I3' href='baiefiche.php?id=23' coords='1080,144,1327,77' shape='rect'>";
                echo "<area target='' alt='C3D-AC-I4' title='C3D-AC-I4' href='baiefiche.php?id=25' coords='963,633,1040,668' shape='rect'>";
                echo "<area target='' alt='C3D-AC-I5' title='C3D-AC-I5' href='baiefiche.php?id=26' coords='349,616,433,670' shape='rect'>";
                echo"<area target='' alt='C3D-AC-I6' title='C3D-AC-I6' href='baiefiche.php?id=' coords='23,516,101,539' shape='rect'>";
            echo "</map>";
        }
        if($nom=="CROM"){
            echo "<map name='image-map'>";
                echo "<area target='' alt='CROM-AC-B1' title='CROM-AC-B1' href='baiefiche.php?id=' coords='334,170,453,221' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B2' title='CROM-AC-B2' href='baiefiche.php?id=' coords='1030,192,1098,261' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B3' title='CROM-AC-B3' href='baiefiche.php?id=' coords='1233,556,1306,615' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B5' title='CROM-AC-B5' href='baiefiche.php?id=' coords='856,557,937,617' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B6' title='CROM-AC-B6' href='baiefiche.php?id=' coords='1117,426,1183,483' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B7' title='CROM-AC-B7' href='baiefiche.php?id=' coords='4,566,89,625' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B8' title='CROM-AC-B8' href='baiefiche.php?id=' coords='4,320,81,379' shape='rect'>";
                echo "<area target='' alt='CROM-AC-B9' title='CROM-AC-B9' href='baiefiche.php?id=' coords='842,352,886,428' shape='rect'>";
                echo "<area target='' alt='CROM-AC-Bserv' title='CROM-AC-Bserv' href='baiefiche.php?id=' coords='801,350,839,426' shape='rect'>";
            echo "</map>";
        }
        if($nom=="CDF"){
            echo "<map name='image-map'>";
                echo "<area target='' alt='ADM-AC-B1' title='ADM-AC-B1' href='baiefiche.php?id=' coords='200,419,274,476' shape='rect'>";
                echo "<area target='' alt='ADM-AC-B2' title='ADM-AC-B2' href='baiefiche.php?id=' coords='546,443,608,505' shape='rect'>";
                echo "<area target='' alt='ADM-AC-B3' title='ADM-AC-B3' href='baiefiche.php?id=' coords='888,406,952,465' shape='rect'>";
                echo "<area target='' alt='ADM-AC-B4' title='ADM-AC-B4' href='baiefiche.php?id=' coords='885,670,959,731' shape='rect'>";
            echo "</map>";
        }
        if($nom == "Sarrade et Galtier"){
            echo "<map name='image-map'>";
                echo "<area target='' alt='STA-AC-B6' title='STA-AC-B6' href='baiefiche.php?id=' coords='688,462,764,525' shape='rect'>";
                echo "<area target='' alt='STA-AC-B7' title='STA-AC-B7' href='baiefiche.php?id=' coords='308,245,382,306' shape='rect'>";
            echo "</map>";
        }
        if($nom=="Haas"){
            echo "<map name='image-map'>";
                echo "<area target='' alt='STA-AC-B8' title='STA-AC-B8' href='baiefiche.php?id=' coords='149,597,231,661' shape='rect'>";
            echo "</map>";
        }
    }
}



else{
    //affichage schéma

    echo"<form action='' method='post'>";
    echo"<button name='change' value=".$donneestableau[0]->getId().">Plan Batiments</button>";   
    echo"</form></br>";

    echo "<img src='" . $donneestableau[0]->getSchemaImg() . "' usemap='#image-map'>";
    
    
    
    #maps image des différents liens
    #https://www.image-map.net/
    if($nom == "Saint Andoche"){
    
        echo "<map name='image-map'>"; 
            echo "<area target='' alt='STA-AC-B1' title='STA-AC-B1' href='baiefiche.php?id=1' coords='275,87,440,186' shape='rect'>";
            echo "<area target='' alt='STA-AC-B2' title='STA-AC-B2' href='baiefiche.php?id=2' coords='610,175,453,88' shape='rect'>";
            echo "<area target='' alt='STA-AC-B3' title='STA-AC-B3' href='baiefiche.php?id=3' coords='621,175,774,85' shape='rect'>";
            echo "<area target='' alt='STA-AC-B4' title='STA-AC-B4' href='baiefiche.php?id=4' coords='746,182,898,211' shape='rect'>";
            echo "<area target='' alt='STA-AC-B9' title='STA-AC-B9' href='baiefiche.php?id=8' coords='248,388,403,447' shape='rect'>";
        echo "</map>";
    }
    if($nom == "Admin"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='ADM-AC-SS' title='ADM-AC-SS' href='baiefiche.php?id=10' coords='89,128,299,214' shape='rect'>";
            echo "<area target='' alt='ADM-AC-R0coul' title='ADM-AC-R0coul' href='baiefiche.php?id=11' coords='260,51,462,122' shape='rect'>";
            echo "<area target='' alt='ADM-AC-R0inf' title='ADM-AC-R0inf' href='baiefiche.php?id=12' coords='487,49,684,116' shape='rect'>";
            echo "<area target='' alt='ADM-AC-R0vdi' title='ADM-AC-R0vdi' href='baiefiche.php?id=13' coords='729,60,926,114' shape='rect'>";
            echo "<area target='' alt='ADM-SR-R0' title='ADM-SR-R0' href='baiefiche.php?id=14' coords='876,125,1066,173' shape='rect'>";
            echo "<area target='' alt='ADM-AC-R1' title='ADM-AC-R1' href='baiefiche.php?id=15' coords='868,330,1064,394' shape='rect'>";
        echo "</map>";
    }
    if($nom == "C3D"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='C3D-AC-I1' title='C3D-AC-I1' href='baiefiche.php?id=20' coords='182,223,350,162' shape='rect'>";
            echo "<area target='' alt='C3D-SR-I1' title='C3D-SR-I1' href='baiefiche.php?id=20' coords='380,150,535,211' shape='rect'>";
            echo "<area target='' alt='C3D-AC-I2' title='C3D-AC-I2' href='baiefiche.php?id=22' coords='551,174,721,217' shape='rect'>";
            echo "<area target='' alt='C3D-AC-I3' title='C3D-AC-I3' href='baiefiche.php?id=23' coords='758,203,921,257' shape='rect'>";
            echo "<area target='' alt='C3D-SR-I3bis' title='C3D-SR-I3bis' href='baiefiche.php?id=23' coords='701,387,867,444' shape='rect'>";
            echo "<area target='' alt='C3D-AC-I4' title='C3D-AC-I4' href='baiefiche.php?id=25' coords='541,452,703,496' shape='rect'>";
            echo "<area target='' alt='C3D-AC-I5' title='C3D-AC-I5' href='baiefiche.php?id=26' coords='372,404,533,455' shape='rect'>";
            echo "<area target='' alt='C3D-AC-I6' title='C3D-AC-I6' href='baiefiche.php?id=27' coords='152,397,311,456' shape='rect'>";
        echo "</map>";
    }
    if($nom == "CROM"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='CROM-AC-B1' title='CROM-AC-B1' href='baiefiche.php?id=28' coords='72,177,266,234' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B2' title='CROM-AC-B2' href='baiefiche.php?id=29' coords='250,75,439,132' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B3' title='CROM-AC-B3' href='baiefiche.php?id=30' coords='480,75,665,128' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B5' title='CROM-AC-B5' href='baiefiche.php?id=31' coords='701,75,880,132' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B6' title='CROM-AC-B6' href='baiefiche.php?id=32' coords='860,136,1039,183' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B7' title='CROM-AC-B7' href='baiefiche.php?id=33' coords='747,411,932,466' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B8' title='CROM-AC-B8' href='baiefiche.php?id=34' coords='480,408,659,459' shape='rect'>";
            echo "<area target='' alt='CROM-AC-B9' title='CROM-AC-B9' href='baiefiche.php?id=35' coords='244,400,432,460' shape='rect'>";
            echo "<area target='' alt='CROM-AC-Bserv' title='CROM-AC-Bserv' href='baiefiche.php?id=36' coords='83,296,268,355' shape='rect'>";
        echo "</map>";
    }
    if($nom == "CDF"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='ADM-AC-B1' title='ADM-AC-B1' href='baiefiche.php?id=16' coords='750,409,937,480' shape='rect'>";
            echo "<area target='' alt='ADM-AC-B2' title='ADM-AC-B2' href='baiefiche.php?id=17' coords='505,410,691,481' shape='rect'>";
            echo "<area target='' alt='ADM-AC-B3' title='ADM-AC-B3' href='baiefiche.php?id=18' coords='262,410,444,498' shape='rect'>";
            echo "<area target='' alt='ADM-AC-B4' title='ADM-AC-B4' href='baiefiche.php?id=19' coords='99,305,293,387' shape='rect'>";
        echo "</map>";
    }
    if($nom == "Sarrade et Galtier"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='STA-AC-B6' title='STA-AC-B6' href='baiefiche.php?id=5' coords='774,326,926,445' shape='rect'>";
            echo "<area target='' alt='STA-AC-B7' title='STA-AC-B7' href='baiefiche.php?id=6' coords='617,407,762,450' shape='rect'>";
        echo "</map>";
    }
    if($nom == "Haas"){
        echo "<map name='image-map'>";
            echo "<area target='' alt='STA-AC-B8' title='STA-AC-B8' href='baiefiche.php?id=7' coords='432,400,587,445' shape='rect'>";
        echo "</map>";    
    }
}


if(isset($_POST['changeSchema'])){
    //refresh juste la page
}