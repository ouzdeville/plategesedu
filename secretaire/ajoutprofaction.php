<?php

 include ("../connexionpod.php");

  //$id_promo=$_POST["id_promo"];
  $requete="insert into profs (NOM,PRENOM,LOGIN,PASSWORD,TEL,code) 
  values ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['login']."', '123' ,'".$_POST['tel']."','".$_POST['code']."')";
$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:acceuilsec.php");



?>