<?php
 include ("../connexionpod.php");
 ?>
 <link rel="stylesheet" href="style.css"/>
 <link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<?php
try
{
	?>
	<section class="#">
<form action="ajoutpromoaction.php" method="post">	
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<h1><label class="grey" for="annee">Année Scolaire:</label></h1>
					<input class="form-control" type="text" name="annee" id="annee" placeholder="2020-2021" value="" size="100" />
					</div>
					<br></br>
					<div class="col"> 
					<label class="grey" for="niveau">Niveau:</label>
					<select name="niveau" id="niveau" >
					
					<?php
$requete="select * from niveau  ORDER BY NOM";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
<option value="<?php echo $row["id_NIV"] ?>" > <?php	echo $row["NOM"] ."/".$row["FILIERE"] ?></option>
 
 <?php	} ?>
					</select>
					</div>
					<div>
					<br>
					<div class="col">
					<button type="submit" class="btn btn-warning">ENREGISTRER</button>
					</div>
					</div>
					
				</form>
				</section>					
<?php
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
