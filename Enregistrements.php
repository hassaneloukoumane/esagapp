<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../esagapp/css/bootstrap.css" rel="stylesheet" />
		<link href="../esagapp/css/style.css" rel = "stylesheet" />
        <title>Enregistrement</title>
    </head>
    <body>
      <marquee><h1 class="liste_titre">Liste de tous les enregistrements <br/>    
        </h1></marquee>

       <hr>
        
        <div align="center">
            <h2> LISTE DES FILIERES</h2>
            <?php 
                include ('../esagapp/filiere/listefiliere.php');
            ?>
        </div>
        <hr>
        <div align="center">
            <h2> LISTE DES INSCRIPTIONS</h2>
            <?php 
                include ('../esagapp/inscription/listeinscription.php');
            ?>
        </div>
        <hr>
        <div align="center">
            <h2> LISTE DES ETUDIANTS</h2>
            <?php 
                include ('../esagapp/etudiant/listeetudiant.php');
            ?>
        </div>
        <hr>
        <div align="center">
            <h2> LISTE DES COURS</h2>
            <?php 
                include ('../esagapp/cours/listecours.php');
            ?>
        </div>
        <hr>
        <div align="center">
            <h2> LISTE DES PAIEMENTS</h2>
            <?php 
                include ('../esagapp/paiement/listepaiement.php');
            ?>
        </div>
        <hr>
    </body>
</html>