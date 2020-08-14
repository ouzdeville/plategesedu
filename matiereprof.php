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
  <h2> ANNEE SCOLAIRE <?php	echo $annee ?></h2>
  <?php
     foreach($resultat as $row) {
		 echo "<h2>".$row["NOM"]." /".$row["FILIERE"]."</h2>";
}
  
   ?>
   <h2>  <?php	echo $_GET["NOM"] ."/"."Semestre ".$_GET["semestre"]?></h2>
<section class="t">
<?php
$requete="SELECT * FROM `evaluation` e
WHERE e.ID_MPRO = '".$_GET["idmatierepromo"]."'";
$resultat=$connexion->query($requete);
foreach($resultat as $row) {
?>
 <a href="saisienote.php?ideve=" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><?php	echo $row["TYPE"]."/".$row["ID_EVE"]  ?></a>
 <?php	} ?>
  </section>
 <section class="g">
 <ul>
 <li><a href="notifs.php" class="#" role="button" aria-pressed="true">VOIR NOTIFS</a></li>
 <li><a href="creerev.php" class="#" role="button" aria-pressed="true">CREER UNE EVALUATION</a></li>
 <li><a href="acceuilsec.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
</body>
</html>    
