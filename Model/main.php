<?php

require('Model/Personnage.php');

// constructeur 
$toto = new Personnage('Milo', true, "Guerrier", 100, 50, false );
$tata = new Personnage('toto',false, "Archer", 10, 50, true);
$toto->nom ='zoro'; // a eviter car tout le monde peut y acceder
$toto->setNom('zoro'); // setter
// echo $toto->nom; // besoin d'un getter
echo $toto->getNom() . "\n"; //getter
// var_dump($toto);


//construteur 
var_dump($toto); // objet personnage 
var_dump($tata); // objet personnage 

$voiture1= new Voiture('Yotota','Ryas', 5, true , 'noire');
$voiture2= new Voiture('Yotota','Risau', 5, true , 'rouge');
$voiture3= new Voiture('Yotota','5C', 5, true , 'rouge');

var_dump($voiture1); // objet personnage 
var_dump($voiture2); // objet personnage 
var_dump($voiture3); // objet personnage 