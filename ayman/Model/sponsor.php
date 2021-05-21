<?php
class Sponsors {
  // Properties
  public $id;
  public $nom;
  public $societe;
  public $duree;
  function __construct($id,$nom,$societe,$duree) {
    $this->id = $id;
    $this->nom = $nom;
    $this->societe = $societe;
    $this->duree = $duree;
  }

  // Methods
  function setNom($nom) {
    $this->nom = $nom;
  }
  function getNom() {
    return $this->nom;
  }
  function setId($id) {
    $this->id = $id;
  }
  function getId() {
    return $this->id;
  }
  function setSociete($societe) {
    $this->societe = $societe;
  }
  function getSociete() {
    return $this->societe;
  }
  function setDuree($duree) {
    $this->duree = $duree;
  }
  function getDuree() {
    return $this->duree;
  }
}
?>
