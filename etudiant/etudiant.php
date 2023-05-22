<?php //session_start(); ?>

<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../esagapp/css/bootstrap.css" rel="stylesheet" />
<link href="../esagapp/css/style.css" rel = "stylesheet" />
<title>page paiement</title>
</head>

<body>

<h3 align="center"> ETUDIANT</h3>
<div> 
   <form method="POST" action ="">
   <table width="370" height="154" align="center">
     <!--DWLayoutTable-->
	<tr><div class="form-group">
		<td height="38" nowrap > Numero Matricule</td>
  		<td width="227" colspan="2"> 
	    <input name="matricule" type="text" id="matricule" size="30" /></td>
      </div> 
    </tr>
  
  	<tr><div class="form-group">
  		<td height="35" nowrap="nowrap"><label> Nom</label></td>	      
	       <td colspan="2"> <input name="nom" type="text" id="nom" size="30" />	 </td>
      </div></tr>
	<tr><div class="form-group">
  		<td height="39" nowrap="nowrap"><label> Prenom</label></td> 
		<td colspan="2">
	        <input name="prenom" type="text" id="prenom" size="30" />   </td>
      </div></tr>
	<tr><div class="form-group" >
	  <td width="138" height="30" nowrap="nowrap"><label> Date de naissance</label></td>	
	  <td colspan="2">      
      <input name="datenaissance" type="date" id="datenaissance" /></td>
	  </div>
    </table>
   <center><input type="submit" name="Submit" value="Enregistrer" class="btn btn-success" /></center>
   </form>
</div>

<p>
  <?php  //verification si les champs sont renseignes
	if(empty($_POST['matricule']) || 
    empty($_POST['nom']) || 
    empty($_POST['prenom']) ||
    empty($_POST['datenaissance']))
    {
      echo "<div class='alert alert-danger' role='alert' ><center> <font color='red'>Veuillez renseigner tous les champs</font> </center> </div> ";
    }
  else{
 //Debut du controle de l'existence d'un meme numero matricule.
 $matricule = ($_POST["matricule"]);
 $query_select= " SELECT * FROM etudiant WHERE matricule='$matricule'";	
include('../esagapp/connexion.php');
$resultat_select = mysqli_query($connect,$query_select);
$nombre_ligne = mysqli_num_rows($resultat_select);

      if($nombre_ligne == 1){
        echo "<div class='alert alert-warning' role='alert' ><center> L'etudiant de matricule $matricule existe deja </center></div> "; 	
        mysqli_close($connect);
        }// Fin du controle
      else{ 
     $matricule = $_POST['matricule'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $datenaissance = $_POST['datenaissance'];
	
	 include("../esagapp/connexion.php");
	 
 $query = "INSERT INTO etudiant  
 VALUES ('$matricule','$nom','$prenom','$datenaissance')"; 
   mysqli_query($connect,$query);
   
   echo "<div class='alert alert-success' role='alert' ><center> <font color='green'>Votre Inscription reussi !</font> </center> </div> ";

//header('location: index.php?page=etudiant');
 mysqli_close($connect);
  } // Fin si du controle
} // fin des actions
?>
</p>
<p></p>
</body>
</html>
