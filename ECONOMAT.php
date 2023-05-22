<?php session_start();
   if(@$_SESSION["autoriser"] != "oui"){
    header('Location: Accueil_Connexion/authentification.php');
    exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page economat</title>
</head>
<body>
<table width="1000" height="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="200" colspan="2" valign="top" class="entete">
      <?php include('entete.php');?>
      <marquee><font color="#fff"> ECOLE SUPERIEURE D’ADMINISTRATION ET DE GESTION NOTRE DAME DE L’EGLISE BP : 8019 *  Tél : 22-21-68-58 * Lomé-TOGO / SITE WEB :www.esag-itnde.org / E-mail: esagnde@esag-itnde.org</font></marquee>
      <h1>ESAG-NDE, ECONOMAT</h1>
    </td>
  </tr>
  <tr>
    <td width="300" height="800" align="center" valign="top" class="menu">
      
<!-- le menu de l'economat -->
      <div> 
        <p align="center" ><strong><a href="ECONOMAT.php?page=paiement">EFFECTUER UN PAIEMENT</a></strong></p>
        <p align="center" ><strong><a href="ECONOMAT.php?page=inscription">INSCRIPTION AU COURS</a></strong></p>
        <p align="center" ><strong><a href="ECONOMAT.php?page=enregistrement">ENREGISTREMENTS</a></strong></p>
        <a href="Accueil_Connexion/deconnexion.php"><input type="button" value="DECONNECTER" class="btn btn-warning"></a>
      </div>
    </td>
    <td width="700" valign="top" background="images/images.jfif" class="principale">    
	 <?php
			switch(@$_GET['page'])
			{
			case 'paiement' : include('paiement/paiement.php'); break;
			case 'inscription' : include('inscription/inscription.php'); break;
			case 'enregistrement' : include('../esagapp/Enregistrements.php'); break;
			
			default: include('paiement/paiement.php');
	    }
	?>    </td>
  </tr>
  <tr>
    <td width="1150" height="150" colspan="2" valign="top" nowrap="nowrap" bgcolor="#0E3837" class="pieds">
      <?php include('footer.php');?>
   </td>
  </tr>
</table>
</body>
</html>