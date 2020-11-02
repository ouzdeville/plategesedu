<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1 class="v">VOUS ÊTES DANS LA PAGE DE RECLAMATION DES ETUDIANTS DE E.S.S.A</h1>
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
