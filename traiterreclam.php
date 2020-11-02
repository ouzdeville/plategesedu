<?php

try
{
	
$connexion = new PDO('mysql:host=localhost;dbname=plategesedu', 'root', '');

//suppression d'un etudiant
//if(isset($_GET['id'])){
//$supprimer="delete from ordinateur where id=".$_GET['id'];
//$resultat=$connexion->query($supprimer);
//if($resultat==TRUE){
//	header('Location: http://localhost:80/plategesedu/lisetu.php');
//}else{
//}
//}
///creation d'un etudiant
if(isset($_POST['Nom'])){
$requete="insert into etudiant (Nom,Prenom,Login,Password,Niveau,Adresse,Tel) 
values ('".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Login']."','".$_POST['Password']."','".$_POST['Niveau']."','".$_POST['Adresse']."','".$_POST['Tel']."')";
header('Location: http://127.0.0.1:80/plategesedu/inscription.php');
$connexion->exec($requete);
}
echo"Bonjour votre requête a été bien prise en compte. 
Merci et bonne chance";
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>