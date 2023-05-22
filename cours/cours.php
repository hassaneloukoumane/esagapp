<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../esagapp/css/bootstrap.css" rel="stylesheet" />
		<link href="../esagapp/css/style.css" rel = "stylesheet" />
		<title>cours</title>
</head>
	<body>

	<?php 
//--------ACTION DE LISTE DEROULANTE---------//
  include ('../esagapp/connexion.php');
  	$reqetefiliere = "SELECT * FROM filiere";
	
   $donnee_filiere = mysqli_query($connect, $reqetefiliere);

  ?>
		<div>
		<h3 align="center">COURS </h3>
			<form action="" method="POST">
		    <table width="28%" height="29%" align ="center" cellspacing="2">
<tr>
						<td width="44%" height="33%" nowrap ><div align="center" class="Style3">Code Cours :</div></td>
<td width="56%"><div align="center">
						  <input type="text" name="codeco">
					    </div></td>
				</tr>

					<tr>
						<td height="33%" nowrap ><div align="center" class="Style3">Libelle Cours :</div></td>
						<td><div align="center">
						  <input type="text" name="libco">
					    </div></td>
				</tr>
				<tr><div class="form-group" >
					<td width="138" valign="top"><label> Code Filiere</label> </td>
					<td> <select name="codef">
						<?php 
							while( $resultat = mysqli_fetch_array($donnee_filiere)){?>
						<option value=" <?php echo ($resultat['codefiliere']) ;?>"> <?php echo ($resultat['codefiliere']." - ". $resultat['libfiliere']); ?></option> <?php		 }
							?>
					</select></td>
					</div></tr>
                    </div></td>
					</tr>
				</table>
				<center>
		        <input type="submit" value="Valider" class="btn btn-success"> </center>
				<p></p>
		  </form>
		</div>

			<?php 
				if  ( (empty($_POST['codeco'])) ||  (empty($_POST['libco'])) )
				{
					echo "<div class='alert alert-danger' role='alert' ><center> <font color='red'>Veuillez renseigner tous les champs!</font> </center> </div> ";
				}	
				else {
					$code=$_POST['codeco'];
					$lib=$_POST['libco'];
					$codefi=$_POST['codef'];

					$query="INSERT INTO cours VALUES ('$code' , '$lib', '$codefi')";

					include ('../esagapp/connexion.php');

					mysqli_query ($connect,$query);
					echo "<div class='alert alert-success' role='alert' ><center> <font color='green'>Votre enregistrement effectue avec success !</font> </center> </div> ";
					
				}	
				mysqli_close($connect);	
			?>
	</body>
</html>