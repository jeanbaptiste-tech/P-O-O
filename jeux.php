<?php
declare (strict_types=1)

class Jeu 
{   private String $nom;
    private array $personnages;

    public function __construct(String $nom)
    {
        $this->personnages=$
    }
    public function ajouterPersonnage(object $personnage) 
    {
        $this->personnages[] = $personnage
    }
    public function getAllPersonnages() 
    {
        foreach ($this->personnages as $personnage ) 
        {
            echo $personnage;
        }
    }
}