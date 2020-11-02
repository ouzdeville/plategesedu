
 <link rel="stylesheet" href="style.css"/>
 <link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<?php
try
{
	?>
	<section class="#">
<form action="traiter.php" method="post">	
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez Le Nom Du Promo:</label>
					<input class="form-control" type="nom" name="nom" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez L'Année Du Promo:</label>
					<input class="form-control" type="nom" name="nom" id="username" value="" size="100" />
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
