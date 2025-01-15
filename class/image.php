<?php

class Image {
    private $id;
    private $id_batiments;
    private $liens;

    // Constructeur
    public function __construct($id, $id_batiments, $liens) {
        $this->id = $id;
        $this->id_batiments = $id_batiments;
        $this->liens = $liens;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdBatiments() {
        return $this->id_batiments;
    }

    public function setIdBatiments($id_batiments) {
        $this->id_batiments = $id_batiments;
    }

    public function getLiens() {
        return $this->liens;
    }

    public function setLiens($liens) {
        $this->liens = $liens;
    }
}

class ManagerImage{
    private $bd;

    public function __construct() {
        $this -> bd = new PDO("mysql:host=localhost;dbname=dimreseaux", 'root', '');
    }

    public function getBatimentImage($id) { 
        $sql = "SELECT * FROM image WHERE id_batiments = $id";
        $sql =  $this->bd->prepare($sql); 
        $sql->execute(); 
        $donneesImage= $sql->fetchall(PDO::FETCH_ASSOC); 
            $tableauImage= array();      
            if($donneesImage != NULL){
                for ($i=0 ; $i<count($donneesImage) ;$i++){
                    $tableauImage[]= new Image($donneesImage[$i]['id'],$donneesImage[$i]['id_batiments'],
                    $donneesreImage[$i]['liens']);                
                }
                return $tableauImage;
            }
    }



}