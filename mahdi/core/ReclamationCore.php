<?php

include_once(__DIR__ . "/../../config.php");

class ReclamationCore
{
    public function AjouterReclamation($reclamation)
    {
        $sql = "INSERT INTO reclamation (id_reclamation, id_user, contenu, date_publication) 
            VALUES (:id_reclamation, :id_user, :contenu, :date_publication)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'id_reclamation' => $reclamation->getIdReclamation(),
                'id_user' => $reclamation->getIdUser(),
                'contenu' => $reclamation->getContneu(),
                'date_publication' => $reclamation->getDatePublication(),


            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function AfficherReclamation($id)
    {
        $sql = "Select * from reclamation r inner join compte c on r.id_user=:id group by r.id_reclamation";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
            $liste = $req->fetchALL();
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherrec()
    {
        $sql="select * from reclamation ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }  
    public function supprimerrec($id_reclamation)
    {
        $sql = "DELETE FROM reclamation WHERE id_reclamation = :id_reclamation";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_reclamation', $id_reclamation);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

        function SupprimerReclamation($id){
            $sql="DELETE  from reclamation where  id_reclamation=:id ";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':id',$id);
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
    public function pdfReclamation($id)
    {
        $sql = "Select * from reclamation r inner join compte c on r.id_reclamation=:id group by r.id_reclamation";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
            $liste = $req->fetchALL();
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

}