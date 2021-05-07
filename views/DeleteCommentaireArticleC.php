<?php
include_once(__DIR__ . "/../services/CommentaireArService.php");
include_once(__DIR__ . "/../entities/CommentaireArticle.php");



if (isset($_POST["id"])){
    $Serv=new CommentaireArticleService();
    $Serv->supprimerCommentaireArticle($_POST["id"]);

    header('Location: AfficherCommentaireArticleView.php');
}

?>