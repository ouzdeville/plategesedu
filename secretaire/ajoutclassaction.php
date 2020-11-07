<?php

 include ("../connexionpod.php");
 $id_NIV=$_POST["id_NIV"];
 

  $requete="INSERT INTO `niveau`(`id_NIV`, `NOM`, `FILIERE`) VALUES (0,$NOM,$FILIERE)";
$resultat=$connexion->query($requete);
echo $requete;
 header("Location:acceuilsec.php");






?>