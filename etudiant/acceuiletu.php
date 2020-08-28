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
$annee=date("Y");
$mois=date('m');

if($mois >=10 && $mois<=12){
	$annee.="-".(date("Y")+1);
} else {
	$annee=(date("Y")-1)."-".$annee;
}


if ($profil=! 'etudiant') header("Location:../connexin.php");
 ?>
  <h2> ANNEE SCOLAIRE <?php	echo $annee ?></h2>
<section class="t">
<?php
$requete="select DISTINCT   n.*,promo.* from niveau n
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV
INNER JOIN etudiantpromo ep ON ep.IDPROMO = promo.ID_PROMO
WHERE promo.ANNEE = '".$annee."' AND ep.ID = '".$id."'";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="promo.php?ID_PROMO=<?php echo $row["ID_PROMO"] ?>&idniv=<?php echo $row["ID_NIV"] ?>&annee=<?php	echo $annee ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"] ."/".$row["FILIERE"] ?></a>
 <?php	} ?>
  </section>


  <section class="content1">
   <a href="inscriptionetu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">INSCRIPTION</a>
   <a href="chpro.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">CHOIX PROMO</a>
   <a href="choixform.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">CHOIX FORMATION</a>
   <a href="notifs.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">VOIR NOTIFS</a>
   <a href="listetu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">CONSULTER NOTES</a>
   <a href="idrec.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RECLAMATION</a>
 </section>
<?php 
//include("menuetu.php");
 ?>
</body>
</html>
