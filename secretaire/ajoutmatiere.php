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

<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
	<section class="#">
<form action="ajoutmatiereaction.php" method="post">
					<h2>AJOUTER UNE MATIERE</h2>		
                    <div class="row">
                 	<div>  
					<div class="col"> 
					<label class="grey" for="matière">Entrez le nom de la matière :</label>
					<input class="form-control" type="text" name="nom" id="nom" value="" size="100" />
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
