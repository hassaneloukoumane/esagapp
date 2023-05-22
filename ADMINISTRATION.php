<?php session_start();
if(@$_SESSION["autoriser"] != "oui"){
  $_SESSION["flash"]="Vous etes deconnecter";
  header('Location: Accueil_Connexion/authentification.php');
  exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page administration</title>
</head>
<body>
<table width="1000" height="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="200" colspan="2" valign="top" class="entete">
      <?php include('entete.php');?>
      <marquee><font color="#fff" size="4"> ECOLE SUPERIEURE D’ADMINISTRATION ET DE GESTION NOTRE DAME DE L’EGLISE BP : 8019 *  Tél : 22-21-68-58 * Lomé-TOGO / SITE WEB :www.esag-itnde.org / E-mail: esagnde@esag-itnde.org</font></marquee>
      <h1>ESAG-NDE, ADMINISTRATION</h1>
    </td>
  </tr>
  <tr>
    <td width="300" height="800" align="center" valign="top"  class="menu">
<div>
  <p align="center" ><strong><a href="ADMINISTRATION.php?page=filiere" >CREER UNE FILIERE</a></strong></p>
  <p align="center" ><strong><a href="ADMINISTRATION.php?page=etudiant" >AJOUTER UN ETUDIANT</a></strong></p>
  <!-- <p align="center" ><strong><a href="ADMINISTRATION.php?page=paiement">EFFECTUER UN PAIEMENT</a></strong></p> -->
  <p align="center" ><strong><a href="ADMINISTRATION.php?page=inscription">INSCRIPTION AU COURS</a></strong></p>
  <p align="center" ><strong><a href="ADMINISTRATION.php?page=cours">NOUVEAU COURS</a></strong></p>
  <p align="center" ><strong><a href="ADMINISTRATION.php?page=enregistrement">ENREGISTREMENTS</a></strong></p>
  <h6>Pas encore de compte, alors <br/></h6>
  <a href="Accueil_Connexion/compte.php"> Creer un compte </a><br/>
  <a href="Accueil_Connexion/deconnexion.php" ><input type="button" value="DECONNECTER" class="btn btn-warning"></a>
</div>   </td>
    <td width="700" valign="top" background="images/images.jfif" bgcolor="#F0F0F0" class="principale">    
	 <?php

   //-----LE CORPS DE CHAQUE MENU-----
			switch(@$_GET['page'])
			{
			case 'filiere' : include('filiere/filiere.php'); break;
			case 'etudiant' : include('etudiant/etudiant.php'); break;
			// case 'paiement' : include('paiement/paiement.php'); break;
			case 'inscription' : include('inscription/inscription.php'); break;
			case 'cours' : include('cours/cours.php'); break;
      case 'enregistrement' : include('../esagapp/Enregistrements.php'); break;
			
			default: include('filiere/filiere.php');
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