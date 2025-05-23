<?php

class Voiture {
    public $modele;
    public $marque;
    public $nbrePortes;
    public $estElectrique;
    public $couleur;

    public function __construct($marque, $estElectrique, $couleur, $modele, $nbrePortes) {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->nbrePortes = $nbrePortes;
        $this->estElectrique = $estElectrique;
        $this->couleur = $couleur;
    }
}
