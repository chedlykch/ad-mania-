<?php
include "C:/xampp/htdocs/web/projetf/config.php";
include_once '../../entities/art.php';

class artc {
    function ajouterart($art) {
        $sql="INSERT INTO art (categorie,nom) 
        VALUES ( :categorie, :nom)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                //'id' => $art->getid(),
                'categorie' => $art->getcategorie(),
                'nom' => $art->getnom(),
                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		

    }
    public function afficherart()
    {
        $sql="select * from art";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function supprimerart($id)
    {
        $sql = "DELETE FROM art WHERE id=:id ";
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
    function recupererart($id){
		$sql="SELECT * FROM art WHERE  id=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':nom',$nom);
 	    $req->execute();
 		$event= $req->fetchALL(PDO::FETCH_OBJ);
		return $event;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierart($art,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `art` SET `id`=:id,`categorie`=:categorie,`nom`=:nom  WHERE `id`=:id";
 		try{

        $req=$db->prepare($sql);		
     
        
		$categorie=$art->getcategorie();
		$nom=$art->getnom();
		
		$req->bindValue(':id',$id);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nom',$nom);
		
		
			

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

    function rechercherart($id){
		$sql="SELECT * FROM art WHERE id like '%".$id."%'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function rechercherart1($nom){
		$sql="SELECT * FROM art WHERE nom like '%".$nom."%'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function filtrerart($categorie){
		$sql="SELECT * FROM art WHERE categorie like '%".$categorie."%'" ;
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