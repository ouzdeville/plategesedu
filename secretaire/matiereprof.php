<?php
 include ("../connexionpod.php");
 ?><html>

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
if ($profil=! 'prof') header("Location:../connexin.php");
$requete="select  * from niveau  WHERE ID_NIV='".$_GET["idniv"]."'";
$resultat=$connexion->query($requete);

 ?>
    <h2> ANNEE SCOLAIRE <?php	echo $annee ?></h2>
    <?php
     $classe="";
     foreach($resultat as $row) {
      $classe=$row["NOM"]." /".$row["FILIERE"];
		 echo "<h3>".$row["NOM"]." /".$row["FILIERE"]."</h3>";
      }
  
   ?>
    <h4> <?php	echo $_GET["NOM"] ."/"."Semestre ".$_GET["semestre"]?></h4>

    <section class="content1">
        <?php
$requete="select  e.*,p.* from evaluation e
INNER JOIN matierepromo mp ON e.ID_MPRO = mp.ID_PROMO
INNER JOIN profs p  ON p.ID_PROF = mp.ID_PROF
WHERE e.ID_MPRO = '".$_GET["idmatierepromo"]."'";

$resultat=$connexion->query($requete);
foreach($resultat as $row) {
   $prof=$row["NOM"]." - ".$row["PRONOM"];
?>
        <a href="saisienote.php?eval=<?php echo $row["TYPE"]."-".$row["ID_EVE"] ?>&ideve=<?php echo $row["ID_EVE"] ?>&NOM=<?php	echo $_GET["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&classe=<?php	echo $classe  ?>&idmatierepromo=<?php echo $_GET["idmatierepromo"] ?>"
            class="btn btn-primary btn-lg active" role="button"
            aria-pressed="true"><?php	echo $row["TYPE"]."/".$row["ID_EVE"]  ?></a>
        <?php	} ?>


    </section>
    <h5>Professeur:<?php echo $prof  ?></h5>
    <a  class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Emarger pour lui</a>
    <section class="g">
        <ul>
            <li><a href="creerev.php?idmatierepromo=<?php echo $_GET["idmatierepromo"] ?>&NOM=<?php	echo $_GET["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>"
                    class="#" role="button" aria-pressed="true">CREER UNE EVALUATION</a></li>
            <li><a href="../notifs.php" class="#" role="button" aria-pressed="true">VOIR NOTIFS</a></li>
            <li><a href="acceuilprof.php" class="btn btn-primary btn-lg active" role="button"
                    aria-pressed="true">RETOUR</a></li>
        </ul>
    </section>
</body>

</html>