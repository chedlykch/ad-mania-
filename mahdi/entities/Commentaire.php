<?php


class Commentaire
{
    /**
     * Commentaire constructor.
     *
     * @param $commentaire
     * @param $id_user
     * @param $nom_article
     * @param $date_publication
     */
    public function __construct($id ,$commentaire, $id_user, $nom_article, $date_publication)
    {
        $this->commentaire = $commentaire;
        $this->id = $id;
        $this->id_user = $id_user;
        $this->nom_article = $nom_article;
        $this->date_publication = $date_publication;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getNomArticle()
    {
        return $this->nom_article;
    }

    /**
     * @param mixed $nom_article
     */
    public function setNomArticle($nom_article)
    {
        $this->nom_article = $nom_article;
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->date_publication;
    }

    /**
     * @param mixed $date_publication
     */
    public function setDatePublication($date_publication)
    {
        $this->date_publication = $date_publication;
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
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = C;
    }
    private $commentaire;
    private $id_user;
    private $nom_article;
    private $date_publication;
}