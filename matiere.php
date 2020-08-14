<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1 class="v">VOUS ÊTES DANS LA PAGE D'INSCRIPTION DES ETUDIANTS</h1>
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
	<section class="#">
<form action="traiter.php" method="post">
					<h3>RENSEIGNER LES COORDONNEES DE L'ETUDIANT</h3>		
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez son Id:</label>
					<input class="form-control" type="text" name="id" id="username" value="" size="100" />
					</div>
					<div>
					<div class="col">
					<button type="submit" class="btn btn-warning">Rechercher</button>
					</div>
					</div>
					
				</form>
				</section>			
<?php
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
