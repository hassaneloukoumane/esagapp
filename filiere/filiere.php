<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/style.css" rel = "stylesheet" />
<title> filiere </title>

</head>

<body>

<h3 align ="center"> FILIERE</h3>
<div>
  <form id="form3" name="form3" method="post" action="">
    <table width="333" height="147" align ="center" >
  <tr>
    <td width="159" height="44" nowrap="nowrap">Code de la filiere </td>
    <td width="144">
      <input type="text" name="codefiliere" /></td>
  </tr>
  <tr>
    <td width="159" height="45" nowrap="NOWRAP">Libelle de la filiere </td>
	<td width="144">
      <input type="text" name="libfiliere" /> </td>
  </tr>
  
  <tr>
    <td colspan="0" nowrap="nowrap">
          <div align ="center">
            <input class="btn btn-success" type="submit" name="Submit" value="Envoyer" />
          </div>
     </td>
    </tr>
</table>
</form>   
</div>


  <?php

//verification si les champs sont vides
if((empty($_POST['codefiliere']))|| 
    (empty($_POST['libfiliere'])))
 {  
 	echo "<div class='alert alert-danger' role='alert' ><center>Veuillez renseigner tous les champs </center></div> "; 
 }
 else{
 //Debut du controle de l'existence d'une meme filiere.
 	$code = ($_POST["codefiliere"]);
	$query_select= "SELECT * FROM filiere WHERE codefiliere='$code'";	
 include('../esagapp/connexion.php');
 $resultat_select = mysqli_query($connect,$query_select);
 $nombre_ligne = mysqli_num_rows($resultat_select);
 
 if($nombre_ligne == 1){
 echo "<div class='alert alert-warning' role='alert'><center> La filiere $code existe deja </center></div> "; 	
 mysqli_close($connect);
 }// Fin du controle

 else{ // Debut de l'action proprement dite
  $code = ($_POST["codefiliere"]);
     $lib = ($_POST["libfiliere"]);
$query = "INSERT INTO filiere 
 VALUE ('$code','$lib')";
  include("../esagapp/connexion.php"); // se connecter
    mysqli_query($connect,$query);
	
    echo "<div class='alert alert-success' role='alert' ><center>Votre enregistrement Reussi!  </center></div> "; 
	//Fermer la connexion a la base de donnee
	mysqli_close($connect); 
	//header('location: index.php?page=filiere');
 }//Fin si du controle
 
 }//fin des actions
 include('../esagapp/recherche.php');

?>

<p>&nbsp;</p>
<?php  ///include('listefiliere.php');?>
</body>
</html>
