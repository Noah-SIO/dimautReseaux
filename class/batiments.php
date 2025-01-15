<?php

class Batiments {
    private $id;
    private $nom;
    private $schema_img;
    private $img;

    public function __construct($id, $nom, $schema_img, $img) {
        $this->id = $id;
        $this->nom = $nom;
        $this->schema_img = $schema_img;
        $this->img = $img;
    }


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getSchemaImg() {
        return $this->schema_img;
    }

    public function setSchemaImg($schema_img) {
        $this->schema_img = $schema_img;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

}

class ManagerBatiments{
    private $bd;

    public function __construct() {
        $this -> bd = new PDO("mysql:host=localhost;dbname=dimreseaux", 'root', '');
    }


    public function getBatimentListe() { 
        $sql = "SELECT * FROM batiments";
        $sql =  $this->bd->prepare($sql); 
        $sql->execute(); 
        $donneesBatiments= $sql->fetchall(PDO::FETCH_ASSOC); 
            $tableauBatiments= array();      
            if($donneesBatiments != NULL){
                for ($i=0 ; $i<count($donneesBatiments) ;$i++){
                    $tableauBatiments[]= new Batiments($donneesBatiments[$i]['id'],$donneesBatiments[$i]['nom'],
                    $donneesreBatiments[$i]['schema_img'],$donneesBatiments[$i]['img']);                
                }
                return $tableauBatiments;
            }
    }

    public function getBatimentInfo($id){
        $sql = "SELECT * FROM batiments WHERE id=$id";
        $sql = $this->bd->prepare($sql);
        $sql->execute();
        $donneesBatiments = $sql->fetch(PDO::FETCH_ASSOC);
        $tableauSearchByID= array();
        if($donneesBatiments != NULL){      
            $tableauBatiments[]= new Batiments($donneesBatiments['id'],$donneesBatiments['nom'],
            $donneesreBatiments['schema_img'],$donneesBatiments['img']);                                
        //var_dump($tableauSearchByID);
        return $tableauSearchByID;
    }
    }
}
