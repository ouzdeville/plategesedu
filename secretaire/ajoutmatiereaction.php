<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
  $requete="insert into matieres (NOM) 
  values ('".$_POST['nom']."')";
$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:acceuilsec.php");



?>