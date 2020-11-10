<link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<?php
try
{
	?>
<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<form action="reclameraction.php" method="post">	
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez La Note :</label>
					<input class="form-control" type="int" name="ID_NOT" id="ID_NOT" required value="" size="23" />
					</div>
					<br>
					<div class="col"> 
						<div><label class="grey" for="motif">Renseigner Le Motif De Votre Réclamation:</label></div>
                      <TEXTAREA name="motif" rows=4 cols=40>Motif</TEXTAREA>
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
