<?php

class Employe
{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = (int) $age;
    }

    public function direBonjour() {
        echo " - Bonjour, je m'appelle  $this->prenom  $this->nom";
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        if(!is_string($nom)){
            die();
        }
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        if(!is_string($prenom)){
            die();
        }
        $this->prenom = $prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if(!is_int($age)){
            die();
        }
        $this->age = $age;
    }
}