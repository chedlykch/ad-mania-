<?php
class Publicite {
  // Properties
  public $id;
  public $nom;
  public $type;
  public $id_article;
  public $prix;
  public $mail;
  public $id_sponsor;
  public $payee;
  function __construct($id,$id_article,$prix,$type,$nom,$mail,$id_sponsor) {
    $this->id = $id;
    $this->nom = $nom;
    $this->id_article = $id_article;
    $this->id_sponsor = $id_sponsor;
    $this->prix = $prix;
    $this->type = $type;
    $this->mail = $mail;
  }

  // Methods
  function setNom($nom) {
    $this->nom = $nom;
  }
  function getNom() {
    return $this->nom;
  }
  function setMail($mail) {
    $this->mail = $mail;
  }
  function getMail() {
    return $this->mail;
  }
  function setId($id) {
    $this->id = $id;
  }
  function getId() {
    return $this->id;
  }
  function setPayee($b) {
    $this->payee = $b;
  }
  function getPayee() {
    return $this->payee;
  }
  function setType($type) {
    $this->type = $type;
  }
  function getType() {
    return $this->type;
  }
  function setIdArticle($id_article) {
    $this->id_article = $id_article;
  }
  function getIdSponsor() {
    return $this->id_sponsor;
  }
  function setIdSponsor($id_sponsor) {
    $this->id_sponsor = $id_sponsor;
  }
  function getIdArticle() {
    return $this->id_article;
  }
  function setPrix($prix) {
    $this->prix = $prix;
  }
  function getPrix() {
    return $this->prix;
  }
}
?>
