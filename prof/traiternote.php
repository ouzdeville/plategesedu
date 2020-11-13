<?php

 include ("../connexionpod.php");
  //$id_promo=$_POST["id_promo"];
 
  foreach($_POST as $key=>$value){
	  if ($key!="ID_EVE" && $key!="ID_MPRO"){
		  
		   $requete="insert into notes (id_NOT,ID_ETUPRO,ID_EVE,ID_MPRO,VALEUR) 
  values (0,$key,'".$_POST['ID_EVE']."','".$_POST['ID_MPRO']."',$value)
  ON DUPLICATE KEY UPDATE
VALEUR='$value'";
  $resultat=$connexion->query($requete);
 // echo $requete."<br/>";
	  }

  }
//$resultat=$connexion->query($requete);
//echo $requete;

 header("Location:saisienote.php?eval=".$_GET["eval"]."&ideve=".$_GET["ideve"]."&NOM=".$_GET["NOM"]."&semestre=".$_GET["semestre"]."&classe=".$_GET["classe"]."&idmatierepromo=".$_GET["idmatierepromo"]);



?>