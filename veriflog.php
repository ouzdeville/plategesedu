<?php
session_start();
if(isset($_POST['Login']) && isset($_POST['Password']))
{
	 // connexion à la base de données
	 $db_username = 'root';
	 $db_password = '';
	 $db_name = 'plategesedu';
	 $db_host = 'localhost';
	 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
	 or die('could not connect to database');
	 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
	 // pour éliminer toute attaque de type injection SQL et XSS
	 $Login = mysqli_real_escape_string($db,htmlspecialchars($_POST['Login']));
	 $Password = mysqli_real_escape_string($db,htmlspecialchars($_POST['Password']));
	 $profil=$_POST['profil'];
	 if($Login != "" && $Password != "" & $profil=="etudiant")
	 {
		 $requete = "SELECT *, count(*) FROM etudiant where
		  Login = '".$Login."' and Password = '".$Password."' ";
		 $exec_requete = mysqli_query($db,$requete);
		 $reponse = mysqli_fetch_array($exec_requete);
		 $count = $reponse['count(*)'];
		 if($count!=0) // nom d'utilisateur et mot de passe correctes
		 {
			 $_SESSION['Login'] = $Login;
			  $_SESSION['id'] =  $reponse['ID'];
			    $_SESSION['profil'] =  "etudiant";
		 header('Location: ./etudiant/acceuiletu.php');

		 }
		 else
		 {
			header('Location: connexin.php?info=LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS'); // utilisateur ou mot de passe incorrect
		 //echo ('LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS');
		 }
	 }
	 else  if($Login != "" && $Password != "" & $profil=="prof")
	 {
		 $requete = "SELECT *, count(*) FROM profs where
		  Login = '".$Login."' and Password = '".$Password."' ";
		 $exec_requete = mysqli_query($db,$requete);
		 $reponse = mysqli_fetch_array($exec_requete);
		 $count = $reponse['count(*)'];
		 if($count!=0) // nom d'utilisateur et mot de passe correctes
		 {
			 $_SESSION['Login'] = $Login;
			 $_SESSION['id'] =  $reponse['id_PROF'];
			    $_SESSION['profil'] =  "prof";
		 header('Location: ./prof/acceuilprof.php');

		 }
		 else
		 {
			header('Location: connexion.php?info=LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS'); // utilisateur ou mot de passe incorrect
		 //echo ('LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS');
		 }
		 
		 
		 
	 } else  if($Login != "" && $Password != "" & $profil=="secretaire")
	 {
		 $requete = "SELECT count(*) FROM admin where
		  Login = '".$Login."' and Password = '".$Password."' ";
		 $exec_requete = mysqli_query($db,$requete);
		 $reponse = mysqli_fetch_array($exec_requete);
		 $count = $reponse['count(*)'];
		 if($count!=0) // nom d'utilisateur et mot de passe correctes
		 {
			 $_SESSION['Login'] = $Login;
			  $_SESSION['id'] =  $reponse['id_admin'];
			    $_SESSION['profil'] =  "secretaire";
			 header('Location: ./secretaire/acceuilsec.php');
		 }
		 else
		 {
			header('Location: connexin.php?info=LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS'); // utilisateur ou mot de passe incorrect
		 //echo ('LOGIN   ET   OU   MOT   DE   PASSE   INCORRECTS');
		 }
		 
		 
		 
		 
	 }
	 else
	 {
		 //header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
		  header('Location: connexion.php?info=LOGIN   ET   OU   MOT    DE   PASSE   VIDES'); // utilisateur ou mot de passe incorrect
		  //echo ('LOGIN   ET   OU   MOT    DE   PASSE   VIDES');
	 }
}

else
{
	 //header('Location: acceuil.php');
	// echo ('FELICITATION  VOUS  AVEZ  SAISI LE  BON  LOGIN  ET  LE   BON   MOT  DE  PASSE  ');
	 // header('Location: acceuil.php');
}
mysqli_close($db); // fermer la connexion
?>