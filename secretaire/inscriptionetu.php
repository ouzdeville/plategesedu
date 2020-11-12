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
    
	<div style="width:400px; margin:auto">
<?php
try
{
	?>
<form action="inscriptionetudiantaction.php" method="post">
					<h3>INSCRIRE UN ETUDIANT</h3>		
                   <div class="col"> 
					<label class="grey" for="etudiant">ETUDIANT:</label>
					<select name="id_etudiant" id="etudiant" >
					
					<?php
$requete="select * from etudiant  ORDER BY NOM";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
<option value="<?php echo $row["ID"] ?>" > <?php	echo $row["NOM"] ." ".$row["PRENOM"] ." /".$row["code"] ?></option>
 
 <?php	} ?>
					</select>
					</div>
					                   <div class="col"> 
					<label class="grey" for="promo">PROMO:</label>
					<select name="id_promo" id="promo" >
					
					<?php
$requete="select DISTINCT   n.*,promo.* from niveau n
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV ORDER BY ANNEE desc";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
<option value="<?php echo $row["id_PROMO"] ?>" > <?php	echo $row["ANNEE"] ."/".$row["NOM"] ."/".$row["FILIERE"] ?></option>
 
 <?php	} ?>
					</select>
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
