<?php
 include ("../connexionpod.php");
 ?>
 <html>

<head>
    <title>Plateforme ESSA</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/essa.css" />
</head>

<body>
    <?php
 include ("./header.php");
 ?>



 <link rel="stylesheet" href="style.css"/>
    
<?php
try
{
	?>


<div style="width:400px; margin:auto">
	<section class="#">
<form action="ajoutprofaction.php" method="post">
					<h2>AJOUTER UN PROFESSEUR</h2>		
                  <h2>  <div class="row"></h2>
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez son Nom :</label>
					<input class="form-control" type="text" name="nom" id="nom" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Prenom:</label>
					<input class="form-control" type="text" name="prenom" id="prenom" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Login:</label>
					<input class="form-control" type="text" name="login" id="username" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son numero Tel:</label>
					<input class="form-control" type="text" name="tel" id="tel" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez son Code:</label>
					<input class="form-control" type="entier" name="code" id="code" value="" size="100" />
					</div>
					<div>
					<br>
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
