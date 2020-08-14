<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1>VOUS ÊTES DANS LA PAGE DE MODIFICATION DES INFORMATIONS</h1>
			  <h2></h2>
			 <meta charset="UTF-8"/>
			 <meta charset="UTF-8"/>
			  <link rel="stylesheet" href="bootstrap.min.css">
			 </head>
        <body>
		<img class="a" src="ESSA.PNG" height="110" width="180"/>
		<img class="b" src="CAMES.PNG" height="110" width="180"/>
<link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="essa.css"/>
<?php
try
{
	
$connexion = new PDO('mysql:host=localhost;dbname=plategesedu', 'root', '');
$requete="select * from etudiant where Id=".$_GET['id'];
$resultat=$connexion->query($requete);
foreach($resultat as $row);
{
?>
<form action="traitemodif.php" method="post">	
                    <div class="row">
					<div>
                 	<div class="col">                    		
					<label class="grey" for="username">Entrer l'id de l'édiant:</label>
					<input class="form-control" type="hidden" name="id" id="username" value="<?php echo $row['id'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez le nom de l'étudiant:</label>
					<input class="form-control" type="text" name="Nom" id="username" value="<?php echo $row['Nom'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez le Prenom de l'étudiant:</label>
					<input class="form-control" type="text" name="Prenom" id="username" value="<?php echo $row['Prenom'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez son Login:</label>
					<input class="form-control" type="text" name="Login" id="username" value="<?php echo $row['Login'] ; ?>" size="23" />
					</div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez son Password:</label>
					<input class="form-control" type="text" name="Password" id="username" value="<?php echo $row['Password'] ; ?>" size="23" />
					</div>
					<div class="col">                    		
					<label class="grey" for="username">Renseigner son Niveau:</label>
					<input class="form-control" type="text" name="Niveau" id="username" value="<?php echo $row['Niveau'] ; ?>" size="23" />
					</div>
					<div class="col">                    		
					<label class="grey" for="username">Son Adresse:</label>
					<input class="form-control" type="text" name="Adresse" id="username" value="<?php echo $row['Adresse'] ; ?>" size="23" />
					</div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez son Numéro de téléphone:</label>
					<input class="form-control" type="text" name="Tel" id="username" value="<?php echo $row['Tel'] ; ?>" size="23" />
					</div>
					<br>
					<div>
					<div class="col">
					<button type="submit" class="btn btn-warning">ENREGISTRER</button>
					</div>
					</div>
					
				</form>
				
<?php
}
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
