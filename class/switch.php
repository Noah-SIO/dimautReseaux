<?php

class Switch {
    private $id;
    private $id_baie;
    private $marque;
    private $modele;
    private $nb_port;
    private $type_liaison;
    private $img;

    public function __construct($id, $id_baie, $marque, $modele, $nb_port, $type_liaison, $img) {
        $this->id = $id;
        $this->id_baie = $id_baie;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nb_port = $nb_port;
        $this->type_liaison = $type_liaison;
        $this->img = $img;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdBaie() {
        return $this->id_baie;
    }

    public function setIdBaie($id_baie) {
        $this->id_baie = $id_baie;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getNbPort() {
        return $this->nb_port;
    }

    public function setNbPort($nb_port) {
        $this->nb_port = $nb_port;
    }

    public function getTypeLiaison() {
        return $this->type_liaison;
    }

    public function setTypeLiaison($type_liaison) {
        $this->type_liaison = $type_liaison;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

}

class ManagerSwitch{
    private $bd;

    public function __construct() {
        $this -> bd = new PDO("mysql:host=localhost;dbname=dimreseaux", 'root', '');
    }

    public function getSwitchByBaieId($id){
        $sql = "SELECT * FROM switch WHERE id_baie = $id";
        $sql = $this->bd->prepare($sql);
        $sql->execute();
        $donneesSwitch = $sql->fetch(PDO::FETCH_ASSOC);
        $tableauSwitch= array();
        if($donneesSwitch != NULL){
            for ($i=0 ; $i<count($donneesSwitch) ;$i++){
                $tableauSwitch[]= new Switch($donneesSwitch['id'],$donneesSwitch['id_baie'],
                $donneesSwitch['marque'],$donneesSwitch['modele'],$donneesSwitch['nb_port'],$donneesSwitch['type liaison'],$donneesSwitch['img']);                    
            }                                   
        return $tableauSwitch;
    }
    }

    public function getSwitchInfo($id){
        $sql = "SELECT * FROM switch WHERE id=$id";
        $sql = $this->bd->prepare($sql);
        $sql->execute();
        $donneesSwitch = $sql->fetch(PDO::FETCH_ASSOC);
        $tableauSwitch= array();
        if($donneesSwitch != NULL){      
            $tableauSwitch[]= new Switch($donneesSwitch['id'],$donneesSwitch['id_baie'],
            $donneesSwitch['marque'],$donneesSwitch['modele'],$donneesSwitch['nb_port'],$donneesSwitch['type liaison'],$donneesSwitch['img']);                                
        //var_dump($tableauSearchByID);
        return $tableauSwitch;
    }
    }

    



}

