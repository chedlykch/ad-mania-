<?php  include_once "../Model/Event.php";

include "../config.php";
require_once '../Model/Event.php';
class EventC{
  function ajouterEvent($Event) {
    $sql="INSERT INTO event (nom,organisateur,theme,da,description,datefin,prix,nb_participant,image) 
    VALUES (:nom, :organisateur, :theme, :da, :description, :datefin, :prix, :nb_participant, :image)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'nom' => $Event->getnom(),
            'organisateur' => $Event->getorganisateur(),
            'theme' => $Event->gettheme(),
            'da' => $Event->getda(),
            'description' => $Event->getdescription(),
            'datefin' => $Event->getdatefin(),
            'prix' => $Event->getprix(),
            'nb_participant' => $Event->getnbP(),
            'image' => $Event->getimage()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		

}
public function afficherEvent()
{
    $sql="select * from event";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function afficherEventTri()
{
    $sql="select * from event order by da";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function trierEvent(string $rech)
{
    $sql="select * from event order by $rech";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


 public function afficherEventDetail(int $rech1)
 {
     $sql="select * from event where reference=".$rech1."";
     
     $db = config::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch(Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }
 public function afficherEventDetailNom(string $rech1)
 {
     $sql="select * from event where organisateur='".$rech1."'";
     
     $db = config::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch(Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }
 public function afficherEventRech(string $rech1)
 {
     $sql="select * from event where reference like '".$rech1."%'";
     
     $db = config::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch(Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }

 public function supprimerEvent($reference)
 {
     $sql = "DELETE FROM event WHERE reference=".$reference."";
     $db = config::getConnexion();
     $query =$db->prepare($sql);
     /*$query->bindValue(':reference',$reference);*/
     try {
         $query->execute();
     }
     catch(Exception $e){
         die('Erreur: '.$e->getMessage());

     }
 }

 function modifierEvent($reference,$Event) {
     $sql="UPDATE  event set nom=:nom,organisateur=:organisateur,theme=:theme,da=:da,description=:description,datefin=:datefin,prix=:prix,nb_participant=:nb_participant,image=:image  where reference=".$reference."";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
     
         $query->execute([
             'nom' => $Event->getnom(),
             'organisateur' => $Event->getorganisateur(),
             'theme' => $Event->gettheme(),
             'da' => $Event->getda(),
             'description' => $Event->getdescription(),
             'datefin' => $Event->getdatefin(),
             'prix' => $Event->getprix(),
             'nb_participant' => $Event->getnbP(),
             'image' => $Event->getimage()
         ]);			
     }
     catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
     }		

 }
 function reste(string $dat): string {

  
   return "55";

}



public function afficherjoint()
{
    $sql="SELECT * FROM event INNER JOIN organisateur ON event.organisateur = organisateur.nom";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function statistiques()
{
    $sql="SELECT organisateur,count(*) from event group by organisateur ";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function statistiqueswh(string $rech)
{
    $sql="SELECT organisateur,count(*) from event where organisateur='".$rech."'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function compterev()
{
    $sql="SELECT count(*) from event";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function afficherEventAujourd()
{   
    $date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');
echo $result . "<br>";

    $sql="select * from event where da='".$result."'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function afficherEventProchain()
{   
    $date   = new DateTime(); //this returns the current date time
    $result = $date->format('Y-m-d');

    $sql="select * from event where da >'".$result."'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

public function tag($ref)
{

}

public function incrE()
{
    $sql="UPDATE  event set nb_participant=nb_participant-1,tag=0  where tag=1";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
     
         $query->execute();			
     }
     catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
     }	 
}
public function ajouterEV()
{
    $sql="insert into participation (id_event,dated) select reference,da from event where tag=1";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
     
         $query->execute();			
     }
     catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
     }	 
}
public function ajouterCO()
{
    $sql="update participation set id_compte=(select id from compte where connected=1),numtel_compte=(select numtel from compte where connected=1) where id_compte=0";
     $db = config::getConnexion();
     try{
         $query = $db->prepare($sql);
     
         $query->execute();			
     }
     catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
     }	 
}
 function setTag(string $ref) {
        $sql="UPDATE  event set tag=1 where reference=".$ref."";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute();			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
      }
 

      public function smsrappel()
      {   
          
      
          $sql="select * from participation where DATEDIFF(dated,NOW())=3";
          
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch(Exception $e){
              die('Erreur: '.$e->getMessage());
          }
      }

      public function afficherPart()
      {
          $sql="SELECT * from participation";
          
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch(Exception $e){
              die('Erreur: '.$e->getMessage());
          }
      }




    
}




?>