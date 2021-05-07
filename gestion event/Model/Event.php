<?php
class Event {
    private ?int $reference = null;
    private ?string $nom = null;
    private ?string $theme = null;
    private ?string $da = null;
    private ?string $organisateur = null;
    private ?string $description = null;
    private ?string $datefin = null;
    private ?float $prix = null;
    private ?int $nbP = null;
    private ?string $image = null;

function __construct(string $nom, string $theme, string $organisateur, string $da, string $description, string $datefin, float $prix, int $nbP, string $image){
			
    $this->nom=$nom;
    $this->theme=$theme;
    $this->organisateur=$organisateur;
    $this->da=$da;
    $this->description=$description;
    $this->datefin=$datefin;
    $this->prix=$prix;
    $this->nbP=$nbP;
    $this->image=$image;
}
function getref(): int{
    return $this->reference;
}
function getnom(): string{
    return $this->nom;
}
function getdescription(): string{
    return $this->description;
}
function getdatefin(): string{
    return $this->datefin;
}
function getorganisateur(): string{
    return $this->organisateur;
}
function gettheme(): string{
    return $this->theme;
}
function getda(): string{
    return $this->da;
}
function getprix(): float{
    return $this->prix;
}
function getnbP(): int{
    return $this->nbP;
}
function getimage(): string{
    return $this->image;
}
function setNom(string $nom): void{
    $this->nom=$nom;
}
function setDescription(string $description): void{
    $this->description=$description;
}
function setDatefin(string $datefin): void{
    $this->datefin=$datefin;
}
function settheme(string $theme): void{
    $this->theme=$theme;
}
function setorganisateur(string $organisateur): void{
    $this->organisateur=$organisateur;
}
function setref(int $reference): void{
    $this->reference=$reference;
}
function setdate(string $da): void{
    $this->da=$da;
}
function setprix(float $prix): void{
    $this->prix=$prix;
}
function setnbP(int $nbP): void{
    $this->nbP=$nbP;
}
function setimage(string $image): void{
    $this->image=$image;
}




}
?>