 <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<?php
try
{
	?>

<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
	<section class="#">
<form action="traiter.php" method="post">
					<h3>AJOUTER UN PROFESSEUR</h3>		
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez son Nom :</label>
					<input class="form-control" type="entier" name="id" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Prenom:</label>
					<input class="form-control" type="entier" name="id" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez sa Specialité:</label>
					<input class="form-control" type="entier" name="id" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Numeron de telephone:</label>
					<input class="form-control" type="entier" name="id" id="username" value="" size="100" />
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
