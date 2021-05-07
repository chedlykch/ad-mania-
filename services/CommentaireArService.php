<?php

include (__DIR__ . "/../util/config.php");



class CommentaireArticleService {
    function ajouterCommentaireArticle($CommentaireArticle) {


        $sql="INSERT INTO commentaire_article (identifiant,id_article,id_user,date_pub,date_mod,contenu,etat) 
        VALUES (:identifiant, :id_article, :id_user, :date_pub,:date_mod,:contenu,:etat)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $identifiant=$CommentaireArticle->getIdentifiant();
            $id_article=$CommentaireArticle->getIdArticle();
            $id_user=$CommentaireArticle->getIdUser();
            $date_pub=$CommentaireArticle->getDatePub();
            $date_mod=$CommentaireArticle->getDateMod();
            $contenu=$CommentaireArticle->getContenu();
            $etat=$CommentaireArticle->getEtat();

            $query->bindValue(':identifiant',$identifiant);
            $query->bindValue(':id_article',$id_article);
            $query->bindValue(':id_user',$id_user);
            $query->bindValue(':date_pub',$date_pub);
            $query->bindValue(':date_mod',$date_mod);
            $query->bindValue(':contenu',$contenu);
            $query->bindValue(':etat',$etat);

            $query->execute();


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }
    public function afficherCommentaireArticle()
    {
        $sql="select * from commentaire_article";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function supprimerCommentaireArticle($identifiant)
    {
        $sql = "DELETE FROM commentaire_article WHERE identifiant=:identifiant	 ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':identifiant',$identifiant);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function searchArticle($identifiant	){
        $sql="SELECT * FROM commentaire_article WHERE  identifiant=:identifiant ";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':identifiant',$identifiant);
            $req->execute();
            $event= $req->fetchALL(PDO::FETCH_OBJ);
            return $event;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierCommentaireArticle($CommentaireArticle,$id)
    {
        $db = config::getConnexion();
        $sql="UPDATE commentaire_article SET  id_article=:id_article,id_user=:id_user,date_mod=:date_mod,contenu=:contenu,etat=:etat  WHERE identifiant=:id";
        try{
            $req  = $db->prepare($sql);


            $id_article=$CommentaireArticle->getIdArticle();
            $id_user=$CommentaireArticle->getIdUser();
            $date_mod=$CommentaireArticle->getDateMod();
            $contenu=$CommentaireArticle->getContenu();
            $etat=$CommentaireArticle->getEtat();

            $req->bindValue(':id_article',$id_article);
            $req->bindValue(':id_user',$id_user);
            $req->bindValue(':date_mod',$date_mod);
            $req->bindValue(':contenu',$contenu);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':id',$id);

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }
}


?>