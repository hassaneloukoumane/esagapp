<?php 
//connexion au serveur.
$connect = mysqli_connect('127.0.0.1:4000', 'root','')
or die ("Erreur de connexion au serveur ") ;

//connexion a la base de donnees.
mysqli_select_db($connect,'appesagdb')
or die ("Erreur de connexion a la base de donnees");
?>
