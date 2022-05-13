<?php
require_once("./employe.php");
require_once("./idirecteur.php");

class Manager extends Employe implements Directeur
{
    public $client;

    public function __construct($nom, $prenom, $age)
    {
        $this->client = null;
        parent::__construct($nom, $prenom, $age);
    }

    public function enregistrerRDV($client)
    {
        $this->client = $client;
    }

    public function afficherRDV()
    {
        echo "$this->prenom  $this->nom: j'ai rendez vous avec $this->client";
    }

}