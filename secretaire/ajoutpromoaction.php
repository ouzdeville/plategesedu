<?php

 include ("../connexionpod.php");
 $annee=$_POST["annee"];
  $id_niveau=$_POST["niveau"];
  echo $annee;
  $requete="INSERT INTO `promo`(`ID_PROMO`, 
  `ID_EMP`,`ANNEE`, 
  `ID_niveau`) 
  VALUES (1,null,".$annee.",$id_niv)";
$resultat=$connexion->query($requete);
echo $requete;
 // header("Location:acceuilsec.php");






?>