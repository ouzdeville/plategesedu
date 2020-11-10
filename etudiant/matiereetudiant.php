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
if (strcmp($profil,'etudiant')!=0) header("Location:../connexin.php");
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
   <h4>  <?php	echo $_GET["NOM"] ."/"."Semestre ".$_GET["semestre"]?></h4>
   
<section class="content1">
<?php
$requete="SELECT * FROM `evaluation` e
WHERE e.ID_MPRO = '".$_GET["idmatierepromo"]."'";
$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="note.php?eval=<?php echo $row["TYPE"]."-".$row["ID_EVE"] ?>&ideve=<?php echo $row["ID_EVE"] ?>&NOM=<?php	echo $_GET["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&classe=<?php	echo $classe  ?>&idmatierepromo=<?php echo $_GET["idmatierepromo"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["TYPE"]."/".$row["ID_EVE"]  ?></a>
 <?php	} ?>
  </section>
 <section class="g">
 <ul>
 <li><a href="acceuiletu.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
