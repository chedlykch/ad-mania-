<?PHP

include_once(__DIR__ . "/../core/ReclamationCore.php");
include_once(__DIR__ . "/../entities/Reclamation.php");



if (isset($_POST["id_reclamation"])){

        $RC=new ReclamationCore();
        $RC->SupprimerReclamation($_POST["id_reclamation"]);


    echo "<script>
                alert('Vous avez supprimer votre Reclamation ');
                window.location.href='../Views/front/AfficherReclamation.php';
                </script>";
}
    else{
        echo "<script>
                alert('Vous pouvez pas supprimer ta Reclamation ');
                window.location.href='../Views/front/AfficherReclamation.php';
                </script>";

}

?>