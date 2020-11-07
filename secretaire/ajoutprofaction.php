<?php

 include ("../connexionpod.php");
 $profs=$_POST["NOM"];
  //$id_promo=$_POST["id_promo"];
  $requete="insert into profs (NOM,PRENOM,LOGIN,TEL,code) 
  values ('".$_POST['NOM']."','".$_POST['PRENOM']."','".$_POST['LOGIN']."','".$_POST['TEL']."','".$_POST['code']."')";
$resultat=$connexion->query($requete);
echo $requete;
die('Erreur : ' . $e->getMessage());
 header("Location:acceuilsec.php");



?>