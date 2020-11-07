<?php

 include ("../connexionpod.php");
 $id_etudiant=$_POST["id_etudiant"];
  $id_promo=$_POST["id_promo"];

  $requete="INSERT INTO `etudiantpromo`(`ID_ETUPRO`, `ID`, `IDPROMO`) VALUES (0,$id_etudiant,$id_promo)";
$resultat=$connexion->query($requete);
echo $requete;
 header("Location:acceuilsec.php");






?>