<?php
require_once("class/baie.php");
require_once("class/batiments.php");
require_once("class/image.php");
require_once("class/port.php");
require_once("class/switch.php");
session_start();
if(isset($_GET['act'])){
    $act = $_GET['act'];
    require_once('view/header.php');
    if($act == "batFiche"){
        require_once("view/batFiche.php");
    }if($act == "batList"){ //boutton acceuil
        require_once("view/bvn.php");
        require_once("view/batList.php");
    }if($act == "baieFiche"){
        require_once("view/baiefiche.php");
    }
    
    
    //boutton navigation header
    if($act == "c3d"){
        $_SESSION['bat'] = "2";
        require_once("view/batFiche.php");
    }if($act == "crom"){
        $_SESSION['bat'] = "3";
        require_once("view/batFiche.php");
    }if($act == "standoche"){
        $_SESSION['bat'] = "4";
        require_once("view/batFiche.php");
    }if($act == "admin"){
        $_SESSION['bat'] = "1";
        require_once("view/batFiche.php");
    }if($act == "cdf"){
        $_SESSION['bat'] = "5";
        require_once("view/batFiche.php");
    }if($act == "sarrade"){
        $_SESSION['bat'] = "6";
        require_once("view/batFiche.php");
    }if($act == "haas"){
        $_SESSION['bat'] = "7";
        require_once("view/batFiche.php");
    }


    require_once("view/footer.php");
}else{
    require_once('view/header.php');
    require_once("view/bvn.php");
    require_once("view/batList.php");
    require_once("view/footer.php");
}
