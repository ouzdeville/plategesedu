<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
  $requete="insert into reclamation (id_NOT,MOTIF) values ('".$_POST['id_NOT']."','".$_POST['motif']."')";
$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:acceuiletu.php");



?>