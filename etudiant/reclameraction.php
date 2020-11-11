<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
  $requete="insert into reclamation (id_REC,ID_NOT,MOTIF) values ('".$_POST['id_REC']."','".$_POST['ID_NOT']."','".$_POST['MOTIF']."')";
$resultat=$connexion->query($requete);
//echo $requete;

header("Location:acceuiletu.php");



?>