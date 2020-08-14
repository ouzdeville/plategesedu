<?php
//ICI ON RECUPERE LES VALEURS QUI SONT DANS LA FORMULAIRE
$Login=$_POST['Login'];
$Password=$_POST['Password'];
//ICI ON ENTRE DANS LA BASE DE DONNEES
$Login=stripcslashes($Login);
$Password=stripcslashes($Password);
$Login=mysql_real_escape_string($Login);
$Password=mysql_real_escape_string($Password);
//ICI ON CONNECTE DANS LE SERVEUR ET ON CHOISI LA BASE DE DONNEES
mysql_connect("localhost","root", "");
mysql_select_db("gestion");
//ICI ON RELI LA BASE DE DONNEES AVEC SON UTILISATEUR
$result=msql_query("select * from user where Login='$Login' and Password='$Password'")
or die ("failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if($row ['Login']==$Login && $row ['Password']==$Password){
echo "Login Success !!!  Welcome" .$row ['Login'];
}else{
	echo "Login et ou Password incorrect";
}
?>
	
