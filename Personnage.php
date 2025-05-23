<!-- 

// signature
class Personnage {
    public $nom;
    public $sexe;
    public $classe;
    public $attaque;
    public $pointDeVie;
    public $force;
    // ecrase le constructeur par defaut
    public function __construct($nom, $sexe, $classe, $attaque, $pointDeVie, $force)
    {
        // quand on appelle toto, il contient les attributs de toto et non tata. il fait en sorte que le nim appartient a l'objet uniquement
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pointDeVie = $pointDeVie;
        $this->force = $force;

    }

    // par defaut, dans les attributs, on va tout mettre en rpiver. si qlqn veujt modifeir le nom de l'instance,
//  il faudra lui donner les autorisation ( seteur et guetteur)

    //setter elle sera charger de modifier notre attribue ( on modifie la valeur en lui attribuant un nouveau nom)
    public function setNom($nouveauNom) {
        this->nom= $nouveauNom
    }


    //getter
    public function getNom() {
        return
    }

    public function setNom(){
        return
    }
        
    } -->


<?php
// Signature
declare(strict_types=1);

// Classe Personnage
class Personnage 
{
    private string $nom;
    private string $sexe;
    private string $classe;
    private int $attaque;
    private int $pointDeVie;
    private bool $force;

    // Constructeur
    public function __construct(string $nom, string $sexe, string $classe, int $attaque, int $pointDeVie, bool $force) 
    {
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pointDeVie = $pointDeVie;
        $this->force = $force;
    }
}




