<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../esagapp/css/bootstrap.css">
    <link href="../esagapp/css/style.css" rel = "stylesheet" />
    <title>Inscription</title>
  </head>
  <body>
  <h3 align="center">INSCRIPTION</h3>
  
  <?php  
//--------ACTION DE LISTE DEROULANTE
  include ('connexion.php');
  	$reqeteetudiant = "SELECT *FROM etudiant";
	$requetecours = "SELECT *FROM cours";
	
   $donnee_etudiant = mysqli_query($connect, $reqeteetudiant);
   $donne_cours = mysqli_query($connect, $requetecours);

  ?>
    <div  align="center">
    <form action="" method="POST">
      <table>
        <tr><div class="form-group">
          <td><label>Date Inscription</label></td>
          <td colspan="2"><input type="date" name="dateinscription"></td>
              </div>
        </tr>

        <tr> <div class="form-group">
          <td>Montant</td>
          <td colspan="2"><input type="text" name="montant" ></td>
              </div>
        </tr>

        <tr> <div class="form-group">
          <td>Matricule</td>
          <td colspan="2">
            <select name="smatricule" >
            <?php //LA selection du matricule de l'etudiant
			while( $resultat = mysqli_fetch_array($donnee_etudiant)){?>
		 <option value=" <?php echo ($resultat['matricule']) ;?>"> <?php echo ($resultat['matricule']." - ". $resultat['nom']); ?></option>     <?php			 }
			 ?>
      </select> <!-- Fin de la selection -->
            <!-- </select> -->
          </td>
      </div>
        </tr>

        <tr> <div class="form-group">
          <td>Code cours</td>
          <td colspan="2">
            <select name="scodecours" >
            <?php //LA selection du matricule de l'etudiant
			while( $resultat = mysqli_fetch_array($donne_cours)){?>
		 <option value=" <?php echo ($resultat['codecours']) ;?>"> <?php echo ($resultat['codecours']." - ". $resultat['libcours']); ?></option>     <?php			 }
			 ?>
      </select> <!-- Fin de la selection -->
            <!-- </select> -->
          </td>
      </div>
        </tr>
      </table>
      <p></p>
        <input type="submit" value="ENREGISTRER" class="btn btn-success">
    </form>
    </div>
    <p></p>
  </body>

  <?php 

//_------ACTION DU FORMULAIRE-------
 if (!empty($_POST["dateinscription"]) && !empty($_POST["montant"]))
	{
   // Debut de l'action proprement dite
      $dateinscription = $_POST["dateinscription"];
      $montant = $_POST["montant"];
      $matricule = $_POST["smatricule"];
      $selcodecours= $_POST["scodecours"];

      //requete 
      $sql = "INSERT INTO inscription VALUES ('','$dateinscription', '$montant', '$matricule', '$selcodecours')";
      include ("../esagapp/connexion.php"); // se connecter
        //execution de la requete
        mysqli_query($connect,$sql);
      
        echo "<div class='alert alert-success' role='alert' ><center> <font color='green'>Votre enregistrement effectue avec success !</font> </center> </div> ";
    
      //header('location: index.php?page=filiere');
     }
     
else{
    echo "<div class='alert alert-danger' role='alert' ><center> <font color='red'>Veuillez renseigner tous les champs</font> </center> </div> ";
	}
  mysqli_close($connect); 
?>
</html>