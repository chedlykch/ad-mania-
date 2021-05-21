<?php
class map
 {
   // private ?int $id = null ;
    private ?string $type=null;
    private ?string $nom=null;
    private ?string $photo=null;


function __construct(string $type,string $nom,string $photo)
{
  // $this->id=$id;
   $this->type=$type;
   $this->nom=$nom;
   $this->photo=$photo;

}
/*function getid():int {
    return $this->id ;
}*/
function gettype():string {
    return $this->type ;
}
function getnom():string {
    return $this->nom ;
}
function getphoto():string {
    return $this->photo ;
}
/*function setid(int $id): void{
    $this->id=$id;
}*/
function settype(string $type): void{
    $this->type=$type;
}
function setnom(string $nom): void{
    $this->nom=$nom;
}
function setphoto(string $photo): void{
    $this->photo=$photo;
}

}

