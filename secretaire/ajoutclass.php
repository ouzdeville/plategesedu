
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
 
<div style="width:400px; margin:auto">

<?php
try
{
	?>
	<section class="#">
<form action="ajoutclassaction.php" method="post">	
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="username">ENTREZ LE NOM DE LA CLASSE:</label>
					<input class="form-control" type="text" name="classe" id="classe" value="" size="100" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">ENTREZ LE NOM DE LA FILIERE:</label>
					<input class="form-control" type="text" name="nom" id="filiere" value="" size="100" />
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
