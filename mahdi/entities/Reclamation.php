<?php


class Reclamation
{
    /**
     * Reclamation constructor.
     * @param $id_reclamation
     * @param $id_user
     * @param $contneu
     * @param $date_publication
     */
    public function __construct($id_reclamation, $id_user, $contneu, $date_publication)
    {
        $this->id_reclamation = $id_reclamation;
        $this->id_user = $id_user;
        $this->contneu = $contneu;
        $this->date_publication = $date_publication;
    }

    /**
     * @return mixed
     */
    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }

    /**
     * @param mixed $id_reclamation
     */
    public function setIdReclamation($id_reclamation)
    {
        $this->id_reclamation = $id_reclamation;
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

    /**
     * @return mixed
     */
    public function getContneu()
    {
        return $this->contneu;
    }

    /**
     * @param mixed $contneu
     */
    public function setContneu($contneu)
    {
        $this->contneu = $contneu;
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
    private $id_reclamation;
    private $id_user;
    private $contneu;
    private $date_publication;
}