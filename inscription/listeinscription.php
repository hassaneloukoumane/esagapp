<link href="../esagapp/css/csstable.css" rel="stylesheet"/>
<link rel="stylesheet" href="../esagapp/css/bootstrap.css">
<div id="scrolltable">
<table width="70%" border="3" class="table table-success table-hover">
	<thead>
  <tr>
    <th> <div >Code Inscription</div></th>
    <th> <div >Date Inscription</div></th>
    <th> <div >Montant</div></th>
    <th> <div >Matricules</div></th>
    <th> <div >Cours</div></th>
  </tr>
</thead>
<tbody>
  <?php 
	  include('../esagapp/connexion.php');
	  $requete= "SELECT * FROM inscription";
	  $resultat = mysqli_query($connect,$requete);
	  
	  while($row=mysqli_fetch_array($resultat)) //resultat
	  {
	  	echo " <tr>
					<td>".$row["codeins"]."</td>
					<td>".$row["dateinscription"]."</td>
                    <td>".$row["Montant"]."</td>
					<td>".$row["matricule"]."</td>
                    <td>".$row["codecours"]."</td>
			   </tr>";
	  }
	  mysqli_close($connect);
  ?>
  <tbody>
</table>
	</div>
