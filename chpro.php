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
					<h3> MERCI RENSEIGNER L'ANNEE DE VOTRE  PROMO</h3>		
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Merci De Saisir L'année De Votre Promo:</label>
					<input class="form-control" type="année" name="Année" id="username" value="" size="23" />
					</div>
					<div>
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
