<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1 class="v">VOUS ÊTES DANS LA PAGE D'AJOUT DES MATIERES</h1>
			 <meta charset="UTF-8"/>
			 <meta charset="UTF-8"/>
			  <link rel="stylesheet" href="bootstrap.min.css">
			 </head>
        <body>
		<img class="a" src="ESSA.PNG" height="110" width="180"/>
		<img class="b" src="CAMES.PNG" height="110" width="180"/>
 <link rel="stylesheet" href="dessignnn.css"/>
<?php
try
{
	?>
<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<form action="traiter.php" method="post">
					<h3>Renseigner LE Nom De La Matiere</h3>		
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez Le Nom De La Matiere:</label>
					<input class="form-control" type="text" name="Adresse" id="username" value="" size="23" />
					</div>
					<br>
					<div>
					<div class="col">
					<button type="submit" class="btn btn-warning">ENREGISTRER</button>
					</div>
					</div>
					
				</form>
				
				
<?php
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
