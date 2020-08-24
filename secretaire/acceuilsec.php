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
 include ("header.php");
 ?>
 <?php 
$id=$_SESSION['id'] ;
$profil= $_SESSION['profil'];
$annee=date("Y");
$mois=date('m');

if($mois >=10 && $mois<=12){
	$annee.="-".(date("Y")+1);
} else {
	$annee=(date("Y")-1)."-".$annee;
}


if ($profil=! 'secretaire') header("Location:connexin.php");
 ?>
  <h2> ANNEE SCOLAIRE <?php	echo $annee ?></h2>
  <section class="content1">
<?php
$requete="select DISTINCT   n.*,promo.* from niveau n
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV
WHERE promo.ANNEE = '".$annee."' ORDER BY n.NOM";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="promo.php?ID_PROMO=<?php echo $row["ID_PROMO"] ?>&idniv=<?php echo $row["ID_NIV"] ?>&annee=<?php	echo $annee ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"] ."/".$row["FILIERE"] ?></a>
 <?php	} ?>
  </section>
<?php 
include("menu.php");
 ?>
</body>
