<?php 
//connexion au serveur.
$connect = mysqli_connect('localhost','root','')
or die ("Erreur de connexion au serveur ") ;

//connexion a la base de donnees.
mysqli_select_db($connect,'appesagdb')
or die ("Erreur de connexion a la base de donnees");
?>
