<?php
<?php

class Port {
    private $id;
    private $id_switch;
    private $nom;
    private $utiliser;

    public function __construct($id, $id_switch, $nom, $utiliser) {
        $this->id = $id;
        $this->id_switch = $id_switch;
        $this->nom = $nom;
        $this->utiliser = $utiliser;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdSwitch() {
        return $this->id_switch;
    }

    public function setIdSwitch($id_switch) {
        $this->id_switch = $id_switch;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getUtiliser() {
        return $this->utiliser;
    }

    public function setUtiliser($utiliser) {
        $this->utiliser = $utiliser;
    }

}

class ManagerPort{
    private $bd;

    public function __construct() {
        $this -> bd = new PDO("mysql:host=localhost;dbname=dimreseaux", 'root', '');
    }



}
