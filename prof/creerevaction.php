<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
  $requete="insert into evaluation (ID_MPRO,TYPE,DATE,DESCRIPTION) 
  values ('".$_POST['idmatierepromo']."','".$_POST['TYPE']."','".$_POST['DATE']."','".$_POST['DESCRIPTION']."')";
$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:acceuilprof.php");



?>