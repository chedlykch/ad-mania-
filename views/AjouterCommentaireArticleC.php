<?php

include_once(__DIR__ . "/../services/CommentaireArService.php");
include_once(__DIR__ . "/../entities/CommentaireArticle.php");



if(
    isset($_POST["id_article"]) &&
    isset($_POST["id_user"]) &&
    isset($_POST["contenu"]) )
{
    $Cm = new CommentaireArticle( Null ,$_POST["id_article"] , $_POST["id_user"] , date("Y-m-d"),NULL,$_POST["contenu"],0);
    $CmService=new CommentaireArticleService();
    $CmService->ajouterCommentaireArticle($Cm);
    header('Location: AfficherCommentaireArticleView.php');
}
else{
    echo "verifier les champs";
}

?>