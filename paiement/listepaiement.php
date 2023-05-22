<link href="../esagapp/css/csstable.css" rel="stylesheet"/>
<link rel="stylesheet" href="../esagapp/css/bootstrap.css">
<div id="scrolltable">
<table width="70%" border="2" class="table table-success table-hover">
	<thead>
  <tr>
    <th> <div class="cdf">Type paiement </div></th>
    <th> <div class="lbf">Montant verse</div></th>
    <th> <div class="lbf">Matricule</div></th>
	<th> <div class="action">ACTION</div></th>
  </tr>
</thead>
<tbody>
  <?php 
	  include('../esagapp/connexion.php');
	  $requete= "SELECT * FROM paiement";
	  $resultat = mysqli_query($connect,$requete);
	  
	  while($row=mysqli_fetch_array($resultat)) //resultat
	  {
	  	echo " <tr>
					<td>".$row["typepaiement"]."</td>
					<td>".$row["montantverse"]."</td>
                    <td>".$row["matricule"]."</td>
					<td><a href='supprimer.php?idp=".$row['idpaiement']."'>SUPPRIMER</button></td>
			   </tr>";
	  }
	  mysqli_close($connect);
  ?>
  <tbody>
</table>
	</div>