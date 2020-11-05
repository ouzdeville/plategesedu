<link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<?php
try
{
	?>
	<link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
	
<form action="traiterreclam.php" method="post">	
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez La Note :</label>
					<input class="form-control" type="text" name="Id" id="username" value="" size="23" />
					</div>
					<br>
					<div class="col"> 
						<div><label class="grey" for="username">Renseigner Le Motif De Votre Réclamation:</label></div>
                      <TEXTAREA name="nom" rows=4 cols=40>Motif</TEXTAREA>
					</div>
					<br>
					<div>
					<div class="col">
					<button type="submit" class="btn btn-warning">VALIDER</button>
					</div>
					</div>
				</form>			
<?php
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
