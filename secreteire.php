<?php
require_once("./employe.php");

class Secretaire extends Employe
{
    public function __construct($nom, $prenom, $age)
    {
        parent::__construct($nom, $prenom, $age);
    }

    public function prendRDV(Directeur $directeur, $client ) {
        $directeur->enregistrerRDV($client);
    }
}
