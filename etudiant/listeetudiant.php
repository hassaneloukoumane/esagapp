<link href="../esagapp/css/csstable.css" rel="stylesheet"/>
<link rel="stylesheet" href="../esagapp/css/bootstrap.css">
<div id="scrolltable">
<table width="70%" border="3" class="table table-success table-hover">
		<thead >
			<tr>
				<th><div class="matri">MATRICULES</div></th>
				<th><div class="nom">NOMS</div></th>
				<th ><div class="prenom">PRENOM</div></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include('../esagapp/connexion.php');
				$requete= "SELECT * FROM etudiant";
				$resultat = mysqli_query($connect,$requete);
				
				while($row=mysqli_fetch_array($resultat)) //resultat
				{
					echo " <tr>
								<td>".$row["matricule"]."</td>
								<td>".$row["nom"]."</td>
								<td>".$row["prenom"]."</td>
						</tr>";
				}
				mysqli_close($connect);
			?>
		</tbody>
	</table>
</div>
