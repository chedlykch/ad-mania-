<?php
class art
 {
    
    private ?string $categorie=null;
    private ?string $nom=null;
    

function __construct(string $categorie,string $nom)
{
   
   $this->categorie=$categorie;
   $this->nom=$nom;


}

function getcategorie():string {
    return $this->categorie ;
}
function getnom():string {
    return $this->nom ;
}

function setcategorie(string $categorie): void{
    $this->categorie=$categorie;
}
function setnom(string $nom): void{
    $this->nom=$nom;
}

}