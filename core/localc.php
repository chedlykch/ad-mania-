<?php
include "../../config.php";
include_once '../../entities/local.php';

class localc {
    function ajouterlocal($local) {
        $sql="INSERT INTO local (pays,nom_rue,codepostal)  VALUES ( :pays, :nom_rue, :codepostal)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
               // 'id' => $local->getid(),
                'pays' => $local->getpays(),
                'nom_rue' => $local->getnom_rue(),
                'codepostal' => $local->getcodepostal()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		

    }
    
    public function afficherlocal()
    {
        $sql="select * from local";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function supprimerlocal($id)
    {
        $sql = "DELETE FROM local WHERE id=:id ";
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
    function recupererlocal($id){
		$sql="SELECT * FROM local WHERE  id=:id ";
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
    function modifierlocal($local,$id)
	{
 	$db = config::getConnexion();
     

     
 	
     $sql="UPDATE `local` SET `id`=:id,`pays`=:pays,`nom_rue`=:nom_rue,`codepostal`=:codepostal WHERE `id`=:id ";
 		try{

        $req=$db->prepare($sql);		
     

		$pays=$local->getpays();
		$nom_rue=$local->getnom_rue();
		$codepostal=$local->getcodepostal();
		
		$req->bindValue(':pays',$pays);
		$req->bindValue(':nom_rue',$nom_rue);
		$req->bindValue(':codepostal',$codepostal);
		
				$req->bindValue(':id',$id);
			

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
    function rechercherlocal($nom_rue){
		$sql="SELECT * from local where nom_rue like '%".$nom_rue."%'";
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