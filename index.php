<?php 
session_start(); 
if(@$_SESSION["autoriser"] != "oui"){
    header('Location: Accueil_Connexion/authentification.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../esagapp/css/bootstrap.css">
    <title>acceuil</title>
    <style>
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../esagapp/images/esagnde.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
            height: 450px;
            margin:0;
            padding:0;
        }
        .span1{
            color:yellow;
            font-size: 40px;
            font-family: 'Cambria';
        }
        .span2{
            color: #457099;
            font-size: 25px;
        }
        
        p a{
            text-decoration: none;
            font-size: 20px;
            border: 1px solid lime;
            padding: 5px 7px;
            width:300px;
            color: lime;
            
        }
        p a:hover{
            background: lime;
            transition: 0.6s ease;
            color: black;
        }

        h2{
            color: #fff;
            text-align: center;
            margin:  auto;
            padding-top: 150px;
            padding-bottom: 50px;
            font-size: 40px;
            font-family:"ALGERIAN";
        } 
        a input{
            position: absolute;
            top: 10px;
            right: 10px;   
        }
        

    </style>
</head>
<body>
<a href="Accueil_Connexion/deconnexion.php"><input type="button" value="DECONNECTER" class="btn btn-warning" align="right"></a>
    <h2><?php echo "BIENVENUE "." <span class='span1'>".$_SESSION['nom']."</span> ---- <span class='span2'> ".$_SESSION['profil']."</span>";?></h2>
    
    <p align="center"><?php 
        switch($_SESSION["profil"])
        {
            case 'administration': echo ("<a href='ADMINISTRATION.php'> COMMENCER>>> </a>"); break;
            case 'secretariat': echo ("<a href='SECRETARIAT.php'> COMMENCER>>> </a>"); break;
            case 'economat': echo ("<a href='ECONOMAT.php'> COMMENCER>>> </a>"); break;
        }
    ?></p>
</body>
</html>
