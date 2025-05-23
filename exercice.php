<?php
//  les instructions suivante :
// milo est un guerrier avec une attaque de 10 et 100 points de vie des forces du bien. 

// tya est une archere avec une attaque de 5 a 50 points de vies des forces du bien 

// lili est une archere avec une attaque de 5 et 55 points d evie des forces du mal

// gael est un voleur avec une attaque de 2 et 10 points de vies des forces du mal 

declare(strict_types=1);

// Classe Personnage
class Personnage 
{
    private string $nom;
    private string $sexe;
    private string $classe;
    private int $attaque;
    private int $pointDeVie;
    private bool $forceDuBien; // true = bien, false = mal

    public function __construct(string $nom, string $sexe, string $classe, int $attaque, int $pointDeVie, bool $forceDuBien) 
    {
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pointDeVie = $pointDeVie;
        $this->forceDuBien = $forceDuBien;
    }

    public function afficherInfos(): void
    {
        $camp = $this->forceDuBien ? "forces du Bien" : "forces du Mal";
        echo "{$this->nom}, {$this->sexe}, est un(e) {$this->classe} avec {$this->attaque} points d'attaque, {$this->pointDeVie} points de vie, appartenant aux {$camp}.\n";
    }
}

// Création des personnages
$milo = new Personnage("Milo", "m", "guerrier", 10, 100, true);
$tya = new Personnage("Tya", "f", "archère", 5, 50, true);
$lili = new Personnage("Lili", "f", "archère", 5, 55, false);
$gael = new Personnage("Gael", "h", "voleur", 2, 10, false);

$monJeu->ajouterPersonnage($milo);
$monJeu->ajouterPersonnage($tya);
$monJeu->ajouterPersonnage($lili);
$monJeu->ajouterPersonnage($Gael);

// Affichage des informations
echo $milo->getNom() . 'est un' . ($milo->getSexe()=='f' ? 'e' : '') 
. $milo->getClasse() . 'avec une attaque de ' . $milo->getAttaque() . 'et' 
. $milo->getPointDeVie() . 'point de vie des forces du '
. ($milo->getForce() ? 'bien' : 'mal');   // affichage conditionnel

echo $tya->getNom() . 'est un' . ($tya->getSexe()=='f' ? 'e' : '') 
. $tya->getClasse() . 'avec une attaque de ' . $tya->getAttaque() . 'et' 
. $tya->getPointDeVie() . 'point de vie des forces du '
. ($tya->getForce() ? 'bien' : 'mal');   // affichage conditionnel

echo $lili->getNom() . 'est un' . ($lili->getSexe()=='f' ? 'e' : '') 
. $lili->getClasse() . 'avec une attaque de ' . $lili->getAttaque() . 'et' 
. $lili->getPointDeVie() . 'point de vie des forces du '
. ($lili->getForce() ? 'bien' : 'mal');   // affichage conditionnel

echo $gael->getNom() . 'est un' . ($gael->getSexe()=='f' ? 'e' : '') 
. $gael->getClasse() . 'avec une attaque de ' . $gael->getAttaque() . 'et' 
. $gael->getPointDeVie() . 'point de vie des forces du '
. ($gael->getForce() ? 'bien' : 'mal');   // affichage conditionnel



