<?php
class CommentaireArticle {
    private  $identifiant;
    private $id_article ;
    private  $id_user   ;
    private  $date_pub ;
    private $date_mod ;
    private $contenu;
    private  $etat;
    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     */
    public function setIdentifiant($identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getIdArticle()
    {
        return $this->id_article;
    }

    /**
     * @param mixed $id_article
     */
    public function setIdArticle($id_article): void
    {
        $this->id_article = $id_article;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getDatePub()
    {
        return $this->date_pub;
    }

    /**
     * @param mixed $date_pub
     */
    public function setDatePub($date_pub): void
    {
        $this->date_pub = $date_pub;
    }

    /**
     * @return mixed
     */
    public function getDateMod()
    {
        return $this->date_mod;
    }

    /**
     * @param mixed $date_mod
     */
    public function setDateMod($date_mod): void
    {
        $this->date_mod = $date_mod;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu): void
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }


    /**
     * CommentaireArticle constructor.
     * @param $identifiant
     * @param $id_article
     * @param $id_user
     * @param $date_pub
     * @param $date_mod
     * @param $contenu
     * @param $etat
     */
    public function __construct($identifiant, $id_article, $id_user, $date_pub, $date_mod, $contenu, $etat)
    {
        $this->identifiant = $identifiant;
        $this->id_article = $id_article;
        $this->id_user = $id_user;
        $this->date_pub = $date_pub; 
        $this->date_mod = $date_mod;
        $this->contenu = $contenu;
        $this->etat = $etat;
    }

}

?>