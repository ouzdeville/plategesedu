<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1 class="v">VOUS ÊTES DANS LA PAGE D'INSCRIPTION DES ETUDIANTS DE E.S.S.A</h1>
			 <meta charset="UTF-8"/>
			 <meta charset="UTF-8"/>
			  <link rel="stylesheet" href="bootstrap.min.css">
			 </head>
        <body>
		<img class="a" src="ESSA.PNG" height="110" width="180"/>
		<img class="b" src="CAMES.PNG" height="110" width="180"/>
 <link rel="stylesheet" href="essa.css"/>
<?php
try
{
	?>
<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<form action="traiter.php" method="post">
					<h3>RENSEIGNER LES COORDONNEES DE L'ETUDIANT</h3>		
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez votre Nom:</label>
					<input class="form-control" type="text" name="Nom" id="username" value="" size="23" />
					</div>
					<div>  
                    <div class="col"> 
					<label class="grey" for="username">Entrez son Prénom:</label>
					<input class="form-control" type="text" name="Prenom" id="username" value="" size="23" />
					</div>
					</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez votre Login:</label>
					<input class="form-control" type="text" name="Login" id="username" value="" size="23" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez votre Password:</label>
					<input class="form-control" type="text" name="Password" id="username" value="" size="23" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez votre Niveau:</label>
					<input class="form-control" type="text" name="Niveau" id="username" value="" size="23" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez votre Adresse:</label>
					<input class="form-control" type="text" name="Adresse" id="username" value="" size="23" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Numéro de Tel :</label>
					<input class="form-control" type="text" name="Tel" id="username" value="" size="23" />
					</div>
					<div>
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
