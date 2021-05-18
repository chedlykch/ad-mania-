<?php
    require_once '../config.php';
    class PubC {
        public function allPublicite() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM publicite'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function allPubliciteNonPaye() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM publicite where paye= false'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getPubliciteById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM publicite WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getMailPubliciteById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT mail FROM publicite WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getPubliciteByNom($nom) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM publicite WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addPublicite($publicite) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO publicite (nom, prix, type, id_article,mail,id_sponsor) 
                VALUES (:nom, :prix, :type, :id_article, :mail,:id_sponsor)'
                );
                $query->execute([
                    'nom' => $publicite->getNom(),
                    'prix' => $publicite->getPrix(),
                    'type' => $publicite->gettype(),
                    'id_article' => $publicite->getIdArticle(),
                    'id_sponsor' => $publicite->getIdSponsor(),
                    'mail' => $publicite->getMail()

                ]);
            } catch (PDOException $e) {
                echo "<script>console.log(".$e->getMessage().")</script>;";
                while(true){
                    echo "<script>console.log(".$e->getMessage().")</script>;";
                }
            }
        }

        public function rechercherPublicite($q) {
            if (is_numeric($q)){
                $sql = "SELECT * from publicite where id = :q or id_article = :q or id_sponsor = :q";
            }else{
                $q="%$q%";
                //echo $q;
                $sql = "SELECT * from publicite where nom LIKE :q OR type LIKE :q OR mail LIKE :q";
            }          
             
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'q' => $q,
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function deletePublicite($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM publicite WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function updatePublicite($publicite, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE publicite SET nom = :nom, prix = :prix, type= :type, mail= :mail WHERE id = :id'
                );
                $query->execute([
                    'nom' => $publicite->getNom(),
                    'prix' => $publicite->getPrix(),
                    'type' => $publicite->getType(),
                    'mail' => $publicite->getMail(),
                    'id' => $id
                ]);
                echo "record UPDATED successfully";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function paiementPublicite($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE publicite SET paye = :p WHERE id = :id'
                );
                $query->execute([
                    'id' => $id,
                    'p' => true
                ]);
                echo "record UPDATED successfully";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        
    }