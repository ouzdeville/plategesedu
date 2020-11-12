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


<?php
try
{
	?>
<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<section class="mb">
<form action="reclameraction.php" method="post">	
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez L'id de la reclameraction:</label>
					<input class="form-control" type="int" name="id_REC" id="id_REC" required value="" size="23" />
					</div>
					<div class="col"> 
					<label class="grey" for="username">Entrez L'id de la note:</label>
					<input class="form-control" type="int" name="ID_NOT" id="ID_NOT" required value="" size="23" />
					</div>
					<br>
					<div class="col"> 
						<div><label class="grey" for="MOTIF">Renseigner Le Motif De Votre Réclamation:</label></div>
                      <TEXTAREA name="MOTIF" rows=4 cols=40>Motif</TEXTAREA>
					</div>
					</section>
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
