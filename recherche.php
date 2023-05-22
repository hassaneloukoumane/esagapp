<!-- bouton de recherche------------->          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>recherche</title>
</head>
<body>
    <form action="" method="POST">
        <input type="search" name="s" placeholder="Rechercher une filiere">
        <input type="submit" value="RECHERCHER">
    </form>
    <?php
        // Ouvre une connexion au serveur MySQL
        include("../esagapp/connexion.php");
       //verification si les champs sont renseignes
       if(isset($_POST['s'])){
        $recherche =$_POST['s'];
        $sql="SELECT * FROM filiere";
        $query=mysqli_query($connect,$sql);
        // la requete mysql
        $sql="SELECT codefiliere FROM filiere WHERE codefiliere LIKE '%'.$recherche.'%' ";
        $query=mysqli_query($connect,$sql);
        $ligne=mysqli_num_rows($query);
       }
       ?>
    <section class="afficherecherche">
    <?php
       if($ligne==0){
        ?>
        <p>Aucun resultat !!!</p>
            <?php 
        
        }
        else{ 

            // affichage du résultat
        while($r=mysqli_fetch_array($query)){?>
            <?= "Résultat de la recherche: ".$r['codefiliere']."==>".$r['libfiliere']." <br/>"; //<?= equivaut a ecrire <?php echo ///
                }
        }
        mysqli_close($connect);
     ?>
        
    </section>
</body>
</html>