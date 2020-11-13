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
<input class="form-control" type="int" name="ID_NOT" id="ID_NOT"  value="<?php echo $row1['ID_NOTE'] ?>" size="23" />
                    <div class="row">
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
