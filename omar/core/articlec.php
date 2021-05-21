<?php
include "C:/xampp/htdocs/web/projetf/config.php";
include_once '../../entities/article.php';

class articlec {
    function ajouterarticle($article) {
        $sql="INSERT INTO article (categorie,nom,disponibilite,image) 
        VALUES (:categorie, :nom, :disponibilite ,:image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                
                'categorie' => $article->getcategorie(),
                'nom' => $article->getnom(),
                'disponibilite' => $article->getdisponibilite(),
                'image' => $article->getimage()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		

    }
    public function afficherarticle()
    {
        $sql="select * from article";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function supprimerarticle($id)
    {
        $sql = "DELETE FROM article WHERE id=:id ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererarticle($id){
		$sql="SELECT FROM article WHERE  id =:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$event= $req->fetchALL(PDO::FETCH_OBJ);
		return $event;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierarticle($article,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `article` SET `id`=:id,`categorie`=:categorie,`nom`=:nom,`disponibilite`=:disponibilite  WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		
     

		$categorie=$article->getcategorie();
		$nom=$article->getnom();
		$disponibilite=$article->getdisponibilite();
        $image=$article->getimage();
		
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':disponibilite',$disponibilite);
        $req->bindValue(':image',$image);
		
				$req->bindValue(':id',$id);
			

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



    function rechercherarticle($nom){
		$sql="SELECT * FROM article WHERE nom like '%".$nom."%'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function filtrerarticle($categorie){
		$sql="SELECT * FROM article WHERE categorie like '%".$categorie."%'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






    
}


?>