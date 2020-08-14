<?php
try
{	
$connexion = new PDO('mysql:host=localhost;dbname=plategesedu', 'root', '');
///modification d'un etudiant
if(isset($_POST['id']) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Login']) && isset($_POST['Password']) isset($_POST['Niveau']) isset($_POST['Adresse']) isset($_POST['Tel']) isset){
$modifier="update etudiant set Nom='".$_POST['Nom']."',"."Prenom='".$_POST['Prenom']."',"."Login='".$_POST['Login']."',"."Password'".$_POST['Password']."' where id=".$_POST['id'];
$connexion->exec($modifier);
}
//header('Location: http://localhost:80/plategesedu/update.php');
header('Location: listetu.php');
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
?>