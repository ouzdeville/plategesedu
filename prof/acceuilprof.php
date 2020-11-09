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
//echo $id;
$profil= $_SESSION['profil'];
$annee=date("Y");
$mois=date('m');

if($mois >=10 && $mois<=12){
	$annee.="-".(date("Y")+1);
} else {
	$annee=(date("Y")-1)."-".$annee;
}


if ($profil=! 'prof') header("Location:../connexin.php");
 ?>
  <h2> ANNEE SCOLAIRE <?php	echo $annee ?></h2>
<section class="t">
<?php
$requete="select DISTINCT   n.*,promo.* from niveau n
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV
INNER JOIN matierepromo m ON promo.ID_PROMO = m.ID_PROMO
INNER JOIN profs ON profs.ID_PROF = m.ID_PROF
WHERE promo.ANNEE = '".$annee."' AND m.ID_PROF = '".$id."'";

$resultat=$connexion->query($requete);

foreach($resultat as $row) {
?>
 <a href="promo.php?ID_PROMO=<?php echo $row["id_PROMO"] ?>&idniv=<?php echo $row["ID_NIV"] ?>&annee=<?php	echo $annee ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"] ."/".$row["FILIERE"] ?></a>
 <?php	} ?>
  </section>
 <section class="g">
 <ul>
 <li><a href="../notifs.php" class="#" role="button" aria-pressed="true">VOIR NOTIFS</a></li>
  <li><a href="connexin.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
