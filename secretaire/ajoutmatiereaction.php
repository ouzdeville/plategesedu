<?php

 include ("../connexionpod.php");
 $id_MAT=$_POST["id_MAT"];

  $requete="INSERT INTO `matieres`(`id_MAT`, `NOM`) VALUES ($id_MAT,$NOM)";
$resultat=$connexion->query($requete);
echo $requete;
die('Erreur : ' . $e->getMessage());
 header("Location:acceuilsec.php");






?>