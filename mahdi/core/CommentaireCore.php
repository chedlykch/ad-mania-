<?php
include_once(__DIR__ . "/../../config.php");

class CommentaireCore{

    public function ajoutercommentaire($commantaire)
    {
        $sql = "INSERT INTO commentaire_article (id_comment, id_user, commentaire, date_publication,nom_article) 
            VALUES (:id, :id_user, :commentaire, :date_publication ,:nom_article)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'id' => $commantaire->getId(),
                'id_user' => $commantaire->getIdUser(),
                'commentaire' => $commantaire->getCommentaire(),
                'date_publication' => $commantaire->getDatePublication(),
                'nom_article' => $commantaire->getNomArticle(),

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherCommentaire($nom){
        $sql ="Select * from commentaire_article c inner join article a on c.nom_article=:nom group by c.id_comment" ;
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':nom',$nom);
            $req->execute();
            $liste=$req->fetchALL();
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function affichercomm1()
    {
        $sql="select * from commentaire_article ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }  

    public function supprimercategorie($id)
    {
        $sql = "DELETE FROM categorie WHERE id = :id";
        $db = DataSource2::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function supprimercomm($id_comment)
    {
        $sql = "DELETE FROM commentaire_article WHERE id_comment = :id_comment";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_comment', $id_comment);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function modifiercategorie($categorie,$id)
    {
        $sql="UPDATE categorie SET nom=:nom , description=:description ,nombre_produit=:nombre_produit where id=:id ";
        $db = DataSource2::getConnexion();

        try
        {
            $nom = $categorie->getNom();
            $description = $categorie->getDescription();
            $nombre_produit = $categorie ->getNombreProduit();
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':description',$description);
            $req->bindValue(':nombre_produit',$nombre_produit);

            $s=$req->execute();

        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            // print_r($datas);
        }
    }

    function idToname($id){
        $servername = "localhost";
        $username = "root";
        $password = "";/* Put your password */
        $dbname = "projetweb";/* Put your database name */

        /* Create connection */
        $conn = new mysqli($servername, $username, $password, $dbname);
        /* Check connection*/
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql ="SELECT nom from categorie where id='$id' ";
        $query_run = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array(($query_run));
        $nom = $row[0];
        return $nom;


    }
    function numberofProducts($id){
        $servername = "localhost";
        $username = "root";
        $password = "";/* Put your password */
        $dbname = "projetweb";/* Put your database name */

        /* Create connection */
        $conn = new mysqli($servername, $username, $password, $dbname);
        /* Check connection*/
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $name = $this->idToname($id);
        $sql ="select count(*) from produit p inner join categorie s on p.nom_categorie = '$name' ";

        $result1 = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result1,MYSQLI_NUM);
        return $row[0];

    }
    function recuperercategorie($id){
        $sql="SELECT * FROM `categorie` WHERE  id=:id ";
        $db = DataSource2::getConnexion();
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
    function recuperercategorienom($nom){
        $sql="SELECT * FROM `categorie` WHERE  nom=:nom";
        $db = DataSource2::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':nom',$nom);
            $req->execute();
            $cat= $req->fetchALL(PDO::FETCH_OBJ);
            return $cat;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }






    public function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM categorie";
        $db = DataSource2::getConnexion();
        try {

            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }







}
?>
