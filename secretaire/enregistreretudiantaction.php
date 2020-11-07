<?php

 include ("../connexionpod.php");
  $id_etudiant=$_POST["id_etudiant"];
  $requete="INSERT INTO `etudiant`(`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `ADRESSE`, `TEL`, `code`) VALUES (0,$NOM,$PRENOM,LOGIN,$TEL,$code)";
$resultat=$connexion->query($requete);
echo $requete;
 header("Location:acceuilsec.php");






?>