<?php
if(!empty($_POST['pseudo']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "");
mysql_select_db("gestion");

// Je mets aussi certaines sécurités ici…
$Login = mysql_real_escape_string(htmlspecialchars($_POST['Login']));
$Password = mysql_real_escape_string(htmlspecialchars($_POST['Password']));
if($Login == $Password)
{
$Login = mysql_real_escape_string(htmlspecialchars($_POST['Login']));
$Password = mysql_real_escape_string(htmlspecialchars($_POST['Password']));
// Je vais crypter le mot de passe.
$Password = sha1($Password);

mysql_query("select * from user ('', '$Login', 'Password')");
}
 
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}
 header('Location: http://localhost:80/gestion_stock/acceuil.php');
}
?>
