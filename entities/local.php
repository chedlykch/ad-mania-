<?php
class local
 {
   // private ?int $id = null ;
    private ?string $pays=null;
    private ?string $nom_rue=null;
    private ?string $codepostal=null;


function __construct(/*int $id,*/string $pays,string $nom_rue,string $codepostal)
{
  // $this->id=$id;
   $this->pays=$pays;
   $this->nom_rue=$nom_rue;
   $this->codepostal=$codepostal;

}
/*function getid():int {
    return $this->id ;
}*/
function getpays():string {
    return $this->pays ;
}
function getnom_rue():string {
    return $this->nom_rue ;
}
function getcodepostal():string {
    return $this->codepostal ;
}
/*function setid(int $id): void{
    $this->id=$id;
}*/
function setpays(string $pays): void{
    $this->categorie=$categorie;
}
function setnom_rue(string $nom_rue): void{
    $this->nom_rue=$nom_rue;
}
function setcodepostal(string $codepostal): void{
    $this->codepostal=$codepostal;
}


}