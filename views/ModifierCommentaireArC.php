<?php
include_once(__DIR__ . "/../services/CommentaireArService.php");
include_once(__DIR__ . "/../entities/CommentaireArticle.php");


if(isset($_POST["id"]) && isset($_POST["id_article"]) && isset($_POST["id_user"]) && isset($_POST["contenu"]) )
{
    $id = $_POST["id"];
    $Cm = new CommentaireArticle(null,$_POST["id_article"],$_POST["id_user"],date("Y-m-d"),date("Y-m-d"),$_POST["contenu"],0);
    $CmService=new CommentaireArticleService();
    $CmService->modifierCommentaireArticle($Cm,$id);
    header('Location: AfficherCommentaireArticleView.php');
}
else{
    echo "verifier les champs";
}


?>