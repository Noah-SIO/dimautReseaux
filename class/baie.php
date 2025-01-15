<?php

class Baie {
    private $id;
    private $id_batiments;
    private $nom;
    private $pourcentage_utilisation;
    private $type_liaison;
    private $nb_switch;
    private $img;

    public function __construct($id,$id_batiments,$nom,$pourcentage_utilisation,$type_liaison,$nb_switch,$img) {
        $this->id = $id;
        $this->id_batiments =$id_batiments;
        $this->nom =$nom;
        $this->pourcentage_utilisation =$pourcentage_utilisation;
        $this->type_liaison =$type_liaison;
        $this->nb_switch =$nb_switch;
        $this->img =$img;
    }


    public function getId() {
        return $this->id;
    }

    public function getIdBatiments() {
        return $this->id_batiments;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPourcentageUtilisation() {
        return $this->pourcentage_utilisation;
    }

    public function getTypeLiaison() {
        return $this->type_liaison;
    }

    public function getNbSwitch() {
        return $this->nb_switch;
    }

    public function getImg() {
        return $this->img;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdBatiments($id_batiments) {
        $this->id_batiments = $id_batiments;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPourcentageUtilisation($pourcentage_utilisation) {
        $this->pourcentage_utilisation = $pourcentage_utilisation;
    }

    public function setTypeLiaison($type_liaison) {
        $this->type_liaison = $type_liaison;
    }

    public function setNbSwitch($nb_switch) {
        $this->nb_switch = $nb_switch;
    }

    public function setImg($img) {
        $this->img = $img;
    }
}

class ManagerBaie{
    private $bd;

    public function __construct() {
        $this -> bd = new PDO("mysql:host=localhost;dbname=dimreseaux", 'root', '');
    }

    public function getBaieByBatId($id){
        $sql = "SELECT * FROM baie WHERE id_batiments = $id";
        $sql = $this->bd->prepare($sql);
        $sql->execute();
        $donneesBaie = $sql->fetch(PDO::FETCH_ASSOC);
        $tableauBaie= array();
        if($donneesBaie != NULL){
            for ($i=0 ; $i<count($donneesBaie) ;$i++){
                $tableauBaie[]= new Baie($donneesBaie['id'],$donneesBaie['id_batiments'],
                $donneesBaie['nom'],$donneesBaie['pourcentage_utilisation'],$donneesBaie['type liaison'],$donneesBaie['nb_switch'],$donneesBaie['img']);                    
            }                                   
        return $tableauBaie;
    }
    }

    public function getBaieInfo($id){
        $sql = "SELECT * FROM baie WHERE id=$id";
        $sql = $this->bd->prepare($sql);
        $sql->execute();
        $donneesBaie = $sql->fetch(PDO::FETCH_ASSOC);
        $tableauBaie= array();
        if($donneesBaie != NULL){      
            $tableauBaie[]= new Baie($donneesBaie['id'],$donneesBaie['id_batiments'],
            $donneesBaie['nom'],$donneesBaie['pourcentage_utilisation'],$donneesBaie['type liaison'],$donneesBaie['nb_switch'],$donneesBaie['img']);                             
        //var_dump($tableauSearchByID);
        return $tableauBaie;
    }
    }



}

