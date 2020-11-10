<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
  $requete="insert into notes (id_NOT,ID_ETUPRO,ID_EVE,ID_MPRO,VALEUR) 
  values ('".$_POST['id_NOT']."','".$_POST['ID_ETUPRO']."','".$_POST['ID_EVE']."','".$_POST['ID_MPRO']."','".$_POST['VALEUR']."')";
$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:saisienote.php");



?>