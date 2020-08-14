<?php
 include ("connexionpod.php");
 ?>
 <?php
 include ("index.php");
 ?> 
<?php 
$id=$_SESSION['id'] ;
$profil= $_SESSION['profil'];
$annee=$_GET["annee"];
$semestre=$_GET["semestre"];
if ($profil=! 'prof') header("Location:connexin.php");
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
<section class="t">
<?php
 


$requete="select  m.*, matieres.* from niveau n
INNER JOIN promo ON promo.ID_NIV = n.ID_NIV
INNER JOIN matierepromo m ON promo.ID_PROMO = m.ID_PROMO
INNER JOIN profs ON profs.ID_PROF = m.ID_PROF
INNER JOIN matieres  ON matieres.ID_MAT = m.ID_MAT
WHERE promo.ANNEE = '".$annee."' AND m.ID_PROF = '".$id."' AND m.ID_SEMESTRE='".$semestre."'";
//echo $requete;
$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="matiereprof.php?idmatierepromo=<?php echo $row["ID_MPRO"] ?>&NOM=<?php	echo $row["NOM"]  ?>&semestre=<?php	echo $semestre  ?>&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["NOM"]  ?></a>
 <?php	} ?>
  </section>
 <section class="g">
 <ul>
 <li><a href="creerev.php" class="#" role="button" aria-pressed="true">CREER UNE EVALUATION</a></li>
 <li><a href="acceuilsec.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
