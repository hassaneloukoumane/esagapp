<link href="../esagapp/css/csstable.css" rel="stylesheet"/>
<link rel="stylesheet" href="../esagapp/css/bootstrap.css">
<div id="scrolltable">
<table width="70%" border="3" class="table table-success table-hover">
	<thead>
  <tr>
    <th> <div >Code Filiere</div></th>
    <th> <div >Libelle Filiere</div></th>
  </tr>
</thead>
<tbody>
  <?php 
	  include('../esagapp/connexion.php');
	  $requete= "SELECT * FROM filiere";
	  $resultat = mysqli_query($connect,$requete);
	  
	  while($row=mysqli_fetch_array($resultat)) //resultat
	  {
	  	echo " <tr>
					<td>".$row["codefiliere"]."</td>
					<td>".$row["libfiliere"]."</td>
			   </tr>";
	  }

	  mysqli_close($connect);
  ?>
  <tbody>
</table>
	</div>
