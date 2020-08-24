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
if ($profil=! 'secretaire') header("Location:../connexin.php");
$requete="select  * from niveau  WHERE ID_NIV='".$_GET["idniv"]."'";
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
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV
INNER JOIN matierepromo m ON promo.ID_PROMO = m.ID_PROMO
INNER JOIN matieres  ON matieres.ID_MAT = m.ID_MAT
WHERE promo.ID_PROMO = '".$_GET["ID_PROMO"]."' AND m.ID_SEMESTRE='".$semestre."'";
//echo $requete;
$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="matiereprof.php?idmatierepromo=<?php echo $row["ID_MPRO"] ?>&NOM=<?php	echo $row["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"]  ?></a>
 <?php	} ?>
  </section>
 <section class="g">
 <ul>
 <li><a href="acceuilsec.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
