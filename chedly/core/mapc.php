<?php
include "C:/xampp/htdocs/web/projetf/config.php";
include_once '../../entities/map.php';

class mapc {
    function ajoutermap($map) {
        $sql="INSERT INTO map (type,nom,photo)  VALUES ( :type, :nom, :photo)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                //'id' => $map->getid(),
                'type' => $map->gettype(),
                'nom' => $map->getnom(),
                'photo' => $map->getphoto()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		

    }
    public function affichermap()
    {
        $sql="select * from map";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function supprimermap($id)
    {
        $sql = "DELETE FROM map WHERE id=:id ";
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
    function recuperermap($id){
		$sql="SELECT * FROM map
        
         WHERE  id=:id ";
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
    function modifiermap($map,$id)
	{
 	$db = config::getConnexion();
     

     
 	
     $sql="UPDATE `map` SET `id`=:id,`type`=:type,`nom`=:nom,`photo`=:photo WHERE `id`=:id ";
 		try{

        $req=$db->prepare($sql);		
     

		$type=$map->gettype();
		$nom=$map->getnom();
		$photo=$map->getphoto();
		
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':photo',$photo);
		
				$req->bindValue(':id',$id);
			

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
function recherchermap($nom)
{
		$sql=" SELECT * FROM map WHERE nom like '%".$nom."%'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


    function filtrermap($type){
		$sql="SELECT * FROM map WHERE type like '%".$type."%'" ;
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