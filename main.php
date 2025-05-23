<?php
declare(strict_types=1);

// Chargement des classes
require(__DIR__ . '/Personnage.php');
require(__DIR__ . '/voiture.php');
require(__DIR__ . '/exercice.php');

// Création de personnages
$toto = new Personnage('Milo', true, "Guerrier", 100, 50, false);
$tata = new Personnage('Toto', false, "Archer", 10, 50, true);

// Modification avec setter
$toto->setNom('Zoro');

// Affichage
echo $toto->getNom() . "\n";

// Debug
var_dump($toto);
var_dump($tata);

// Création de voitures
$voiture1 = new Voiture('Yotota', 'Ryas', 5, true, 'noire');
$voiture2 = new Voiture('Yotota', 'Risau', 5, true, 'rouge');
$voiture3 = new Voiture('Yotota', '5C', 5, true, 'rouge');

// Debug
var_dump($voiture1);
var_dump($voiture2);
var_dump($voiture3);



// methode de classe
// function sePresenter()
function __tostring() {

    return $this->getNom() . 'est un' . ($this->getSexe()=='f' ? 'e' : '') 
. $this->getClasse() . 'avec une attaque de ' . $this->getAttaque() . 'et' 
. $this->getPointDeVie() . 'point de vie des forces du '
. ($this->getForce() ? 'bien' : 'mal'); 
}