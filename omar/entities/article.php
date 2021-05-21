<?php
class Article
 {
    
    private ?string $categorie=null;
    private ?string $nom=null;
    private ?string $disponibilite=null;
    private $_image;


function __construct(string $categorie,string $nom,string $disponibilite,$image)
{
  
   $this->categorie=$categorie;
   $this->nom=$nom;
   $this->disponibilite=$disponibilite;
   $this->_image=$image;

}

function getcategorie():string {
    return $this->categorie ;
}
function getnom():string {
    return $this->nom ;
}
function getdisponibilite():string {
    return $this->disponibilite ;
}

function setcategorie(string $categorie): void{
    $this->categorie=$categorie;
}
function setnom(string $nom): void{
    $this->nom=$nom;
}
function setdisponibilite(string $disponibilite): void{
    $this->disponibilite=$disponibilite;
}
public function getimage()
  {
    return $this->_image;
  }
 }