 <?php
 include ("connexionpod.php");
 ?>
 <?php
 include ("index.php");
 ?>
<?php 

 ?>
</body>
<?php 
$requete="select  * from niveau  WHERE ID_NIV='".$_GET["idniv"]."'";
$resultat=$connexion->query($requete);

 ?>
 <h2> ANNEE SCOLAIRE <?php	echo $_GET["annee"] ?></h2>
  <?php
     foreach($resultat as $row) {
		 echo "<h2>".$row["NOM"]." /".$row["FILIERE"]."</h2>";
}
  
   ?>
 
<section class="x">
 <a href="matieresemestreprof.php?semestre=1&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">SEMESTRE 1 </a>
  <a href="matieresemestreprof.php?semestre=2&idniv=<?php echo $_GET["idniv"] ?>&annee=<?php	echo $_GET["annee"] ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">SEMESTRE 2</a>
  </section>
 <section class="r">
 <ul>
 <li><a href="acceuilsec.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">RETOUR</a></li>
 </ul>
 </section>
<?php 

 ?>
</body>
