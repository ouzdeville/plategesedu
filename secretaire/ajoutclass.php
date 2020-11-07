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
<form action="ajoutclassaction.php" method="post">	
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez Le Nom De La Classe:</label>
					<input class="form-control" type="text" name="classe" id="classe" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez Le Nom De La Filière:</label>
					<input class="form-control" type="text" name="nom" id="filiere" value="" size="100" />
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
