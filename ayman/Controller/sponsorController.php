<?php
    require_once '../config.php';
    class SponC {
        public function allSponsors() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM sponsor'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    

        public function getSponsorById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM sponsor WHERE id = :id'
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

        public function addSponsor($sponsor) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO sponsor (id,nom, societe, duree) 
                VALUES (null,:nom, :societe, :duree)'
                );
                $query->execute([
                    'nom' => $sponsor->getNom(),
                    'societe' => $sponsor->getSociete(),
                    'duree' => $sponsor->getDuree()

                ]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function deleteSponsor($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM sponsor WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherAlbum($title) {            
            $sql = "SELECT * from album where titre=:title"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'titre' => $album->getTitre(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function rechercherSponsor($q) {
            if (is_numeric($q)){
                $sql = "SELECT * from sponsor where id = :q";
            }else{
                $q="%$q%";
                //echo $q;
                $sql = "SELECT * from sponsor where nom LIKE :q OR 'societe' LIKE :q";
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

        public function updateSponsor($sponsor, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE sponsor SET nom = :nom, duree = :duree, societe= :societe WHERE id = :id'
                );
                $query->execute([
                    'nom' => $sponsor->getNom(),
                    'societe' => $sponsor->getSociete(),
                    'duree' => $sponsor->getDuree(),
                    'id' => $id
                ]);
                echo "record UPDATED successfully";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        
    }