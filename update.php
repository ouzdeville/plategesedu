<html>
             <head>
			 <title>NDPRO</title>
			   <h1> BIENVENUE SUR LE MENU DE  MODIFICATION  DE NOUVEL  ORDINATEUR</h1>
			 <meta charset="UTF-8"/>
			 <link rel="stylesheet" href="crud.css"/>
			 </head>
        <body>
		 <nav>
	<img src="login.PNG" height="260" width="2000"/>
	</nav>



<link rel="stylesheet" href="bootstrap.min.css">

<div style="width:400px; margin:auto">
<?php
try
{
	
$connexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');
$requete="select * from ordinateur where id=".$_GET['id'];
$resultat=$connexion->query($requete);
foreach($resultat as $row){
?>
<form action="traitemodif.php" method="post">
					<h3>Modifier Les Informations d'un Nouvel Ordinateur</h3>		
                    <div class="row">
					<div>
                 	<div class="col">                    		
					<label class="grey" for="username">Entrez  la marque de la voiture:</label>
					<input class="form-control" type="text" name="Marque" id="username" value="<?php echo $row['Marque'] ; ?>" size="23" />
					<input class="form-control" type="hidden" name="id" id="username" value="<?php echo $row['id'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez le pods de la voiture:</label>
					<input class="form-control" type="text" name="Poids" id="username" value="<?php echo $row['Poids'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez le prix de la voiture :</label>
					<input class="form-control" type="text" name="Prix" id="username" value="<?php echo $row['Prix'] ; ?>" size="23" />
					</div>
					<div>
					<div class="col">                    		
					<label class="grey" for="username">Entrez la quantite de voiture disponible:</label>
					<input class="form-control" type="text" name="Quantite" id="username" value="<?php echo $row['Quantite'] ; ?>" size="23" />
					</div>
					<br>
					<div>
					<div class="col">
					<button type="submit" class="btn btn-warning">Enregister</button>
					</div>
					</div>
					
				</form>
				
<?php
}
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
