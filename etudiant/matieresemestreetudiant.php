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
$id=$_SESSION['id'] ;
$profil= $_SESSION['profil'];
$annee=$_GET["annee"];
$semestre=$_GET["semestre"];
if (strcmp($profil,'etudiant')!=0) header("Location:../connexin.php");
$requete="select  * from niveau  WHERE id_NIV='".$_GET["idniv"]."'";
$resultat=$connexion->query($requete);

 ?>
  <h3> ANNEE SCOLAIRE <?php	echo $annee ?></h3>
  <?php
     foreach($resultat as $row) {
		 echo "<h4>".$row["NOM"]." /".$row["FILIERE"]."</h4>";
}
  
   ?>
   <h2>  <?php	echo "Semestre ".$_GET["semestre"]?></h2>
<section class="content1">
<?php
 


$requete="select  m.*, matieres.* from niveau n
INNER JOIN promo ON promo.id_NIV = n.id_NIV
INNER JOIN matierepromo m ON promo.id_PROMO = m.id_PROMO
INNER JOIN etudiantpromo ep ON ep.IDPROMO = promo.id_PROMO
INNER JOIN matieres  ON matieres.id_MAT = m.id_MAT
WHERE promo.id_PROMO = '".$_GET["ID_PROMO"]."' AND ep.ID = '".$id."' AND m.ID_SEMESTRE='".$semestre."'";
//echo $requete;
$resultat=$connexion->query($requete);
//var_dump($resultat);
foreach($resultat as $row) {
?>
 <a href="matiereetudiant.php?idmatierepromo=<?php echo $row["id_MPRO"] ?>&NOM=<?php	echo $row["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"]  ?></a>
 <?php	} ?>

  </section>
 <section class="g">
 <ul>
 <li><a href="acceuiletu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
