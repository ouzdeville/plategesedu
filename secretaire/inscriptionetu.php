
 <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
	<div style="width:400px; margin:auto">
<?php
try
{
	?>
<form action="traiter.php" method="post">
					<h3>INSCRIRE UN ETUDIANT</h3>		
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez son Nom:</label>
					<input class="form-control" type="text" name="nom" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Prenom:</label>
					<input class="form-control" type="text" name="prenom" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Numero telephone:</label>
					<input class="form-control" type="text" name="numero" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Niveau:</label>
					<input class="form-control" type="text" name="niveau" id="username" value="" size="100" />
					</div>
					<div>
					<br>
					</br>
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
