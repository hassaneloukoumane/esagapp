<?php 
    session_start(); 
 //--------Debut de la session-------------//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/sessionstyle.css">
    <title>Authentification</title>
</head>
<body class="logbody">
<marquee><font color="#fff"> ECOLE SUPERIEURE D’ADMINISTRATION ET DE GESTION NOTRE DAME DE L’EGLISE BP : 8019 *  Tél : 22-21-68-58 * Lomé-TOGO / SITE WEB :www.esag-itnde.org / E-mail: esagnde@esag-itnde.org</font></marquee>
    <div class="login-box" align="center">
        <img src="../images/avatar.png" class="avatar">
        <h2 align="center">LOGIN PAGE </h2>
        <form action="" method="POST">
            <table align="center" >
                <tr>
                    <td align="right"><label for="mail">E-mail :</label></td>
                    <td><input type="email" name="mail" id="mail" placeholder="exempledemail@example.com"></td>
                </tr>
                <tr>
                    <td align="right"><label for="mdp">Mots de passe :</label></td>
                    <td><input type="password" name="mdp" id="mdp" placeholder="Taper votre mots de passe"></td>
                </tr>
            </table>
            <br/>
            <center>
                <input type="submit" value="Connecter" class="btn" name="button1"><br/>
            </center>
        </form> 
        <p class="errormdp">
        <?php
            include("../connexion.php");
            $erreur="";
            // ACTION DU LOGIN
            if((isset($_POST['mail'])) && (isset($_POST['mdp'])) )
            {
                $mail = $_POST['mail'];
                $mdp=$_POST['mdp'];
                $mp= sha1($mdp);
                //recuperation du profils dans la base
                $requete ="SELECT * FROM utilisateurs WHERE email='$mail' ";
                $resultat= mysqli_query($connect,$requete);
                $row=mysqli_fetch_array($resultat);

                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    if($row['password']== $mp)
                    {
                        $_SESSION["autoriser"]="oui"; //creation des variables de sessions
                        $_SESSION["nom"]=$row['pseudo'];
                        $_SESSION["profil"]=$row['profils'];
                        header('Location:../index.php');
                    
                    }else{$erreur="Votre mots de passe incorrect !!<br/> Veuillez saisir des donnees correct.";
                        echo $erreur;}
                }else{echo"Saisissez d'abord un mail";}
            }else{ echo "Veuilez renseigner les champs" ;}
            mysqli_close($connect);
        ?>
        </p>
    </div>
</body>
</html>
