
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/sessionstyle.css">
    <title>log in</title>
</head>
<body class="logbodyr">
<marquee><font color="#fff"> ECOLE SUPERIEURE D’ADMINISTRATION ET DE GESTION NOTRE DAME DE L’EGLISE BP : 8019 *  Tél : 22-21-68-58 * Lomé-TOGO / SITE WEB :www.esag-itnde.org / E-mail: esagnde@esag-itnde.org</font></marquee>
<div class="login-boxr">
<h2 align="center">REGISTER PAGE</h2>
    <form action="" method="POST">
        <table align="center" >
            <tr>
                    <td align="right"><label for="psuedo">Pseudo :</label></td>
                    <td><input type="text" name="pseudo" id="pseudo"></td>
            </tr>

            <tr>
                    <td align="right"><label for="mail">E-mail :</label></td>
                    <td><input type="email" name="mail" id="mail" placeholder="exempledemail@example.com"></td>
                </tr>

            <tr>
                    <td align="right"><label for="mail2"> Confirmer votre e-mail :</label></td>
                    <td><input type="email" name="mail2" id="mail2" placeolder="Confirmer votre e-mail"></td>
            </tr>

            <tr>
                    <td align="right"><label for="mdp">Mots de passe :</label></td>
                    <td><input type="password" name="mdp" id="mdp" placeholder="Taper votre mots de passe"></td>
            </tr>

            <tr>
                    <td align="right"><label for="mdp2">Confirmez votre mots de passe :</label></td>
                    <td><input type="password" name="mdp2" id="mdp2" placeholder="Taper a nouveau le mots de passe"></td>
            </tr>

            <tr>
                <td align="right"><label for="profil">Profil :</label></td>
                <td>
                    <select name="profil" id="profil">
                        <option>-------</option>
                        <option value="administration">ADMINISTRATION</option>
                        <option value="secretariat">SECRETARIAT</option>
                        <option value="economat">ECONOMAT</option>
                    </select>
                </td>
            </tr>

        </table>
        <br/>
        <center><input type="submit" value="Je m'inscris" class="btn"></center>
    </form>
    <p></p>
    <?php

        if( (!empty($_POST['pseudo'])) &&
            (!empty($_POST['mail'])) &&
            (isset($_POST['mail2'])) &&
            (isset($_POST['mdp'])) &&
            (isset($_POST['mdp2'])) &&
            (isset($_POST['profil'])) )
        {
            if($_POST['mail'] == $_POST['mail2'])
            {
                if($_POST['mdp'] == $_POST['mdp2'])
                {
                    $nom= $_POST['pseudo'];
                    $email= $_POST['mail'];
                    $pwd = sha1($_POST['mdp']);
                    $statut = $_POST['profil'];

                    
                    include ("../connexion.php");

                    $qrlogin= "INSERT INTO utilisateurs VALUES ('','$nom','$email', '$pwd', '$statut')";
                    mysqli_query($connect,$qrlogin);

                    echo "<div class='alert alert-success' role='alert'><center>Votre Compte est cree avec Succes ! </center></div> ";
                    mysqli_close($connect);
                }
                else
                {
                    echo "<div class='alert alert-warning' role='alert' ><center>Votre mots de passe ne correspond pas ! </center></div> ";
                }
            }
            else
            {
                echo "<div class='alert alert-warning' role='alert' ><center>Votre mail ne correspond pas ! </center></div> ";
            }
        }
        else
        {
            echo "<div class='alert alert-danger' role='alert' ><center>Veuillez renseigner tous les champs ! </center></div> ";
        }
    ?>

        <center><a href="authentification.php"> Connexion au Compte </a></center>
        <a href="../ADMINISTRATION.php"> <--RETOUR--< </a>
    </div> 
      
</body>
</html>