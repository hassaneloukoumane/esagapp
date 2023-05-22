<?php 
$idp=$_GET['idp'];
include('../esagapp/connexion.php');

//POUR SUPPRIMER DES ELEMENTS DANS LA BASE
$supprimer="DELETE FROM paiement WHERE idpaiement = $idp ";
if (mysqli_query($connect, $supprimer)) {
    mysqli_close($connect);
    header('Location:enregistrement.php');
    exit;
} else {
    echo "Error deleting record";
}
// 
?>