<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../esagapp/css/bootstrap.css">
		<link href="css/style.css" rel = "stylesheet" />
		<title>paiement</title>
	</head>
	<body>
	<?php
	//--------ACTION DE LISTE DEROULANTE
  include ('../esagapp/connexion.php');
  	$reqeteetudiant = "SELECT * FROM etudiant";
	
   $donnee_etudiant = mysqli_query($connect, $reqeteetudiant);

  ?>
    <div class="m-3" align="center">
		<h3 align="center">PAIEMENT</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td><label> Type paiement :</label></td>
					<td><input type="text" name="typepaiement"></td>
				</tr>
				<tr>
					<td>Montant verse :</td>
					<td><input type="text" name="montantverse"></td>
				</tr>
				<tr>
					<td>Matricule</td>
					<td>
						<select name="matricule">
							<option value="">-------</option>
						<?php //LA selection du matricule de l'etudiant
			while( $resultat = mysqli_fetch_array($donnee_etudiant)){?>
		    <option value=" <?php echo ($resultat['matricule']) ;?>"> <?php echo ($resultat['matricule']." - ". $resultat['nom']); ?></option>  <?php	 }
			 ?>
						</select>
					</td>
				</tr>
			</table>
			<p></p>
			<input type="submit" value="VALIDER" class="btn btn-success">
		</form>
		</div>


		<?php
		///----------ACTION DU FORMULAIRE PAIEMENT---------

 if (empty($_POST['typepaiement']) || empty($_POST['montantverse']))
	{
		echo "<div class='alert alert-danger' role='alert' ><center>Veuillez renseigner tous les champs </center></div> ";
    }
	else { 
		$typepaiement = $_POST['typepaiement'];
		$montantverse = $_POST['montantverse'];
		$matricule= $_POST['matricule'];
		
		include ("../esagapp/connexion.php");
		
		$req = "INSERT INTO paiement (`idpaiement`, `typepaiement`, `montantverse`, `matricule`)
		VALUES ('',$typepaiement,$montantverse,$matricule)";
		mysqli_query($connect,$req);
		
		echo "<div class='alert alert-success' role='alert' ><center>Votre paiement effectue avec success </center></div> ";

		
		//header('location:index.php?page=paiement');
	}
	mysqli_close($connect);
?>
	</body>
</html>
