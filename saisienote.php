<?php
 include ("connexionpod.php");
 ?>
 <?php
 include ("index.php");
 ?> 
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="essa.css"/>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
		 <th>Nom</th>
		 <th>Prénom</th>
		 <th>Login</th>
		 <th>Password</th>
        <th>Adresse</th>
        <th>Tel</th>
        <th>CODE</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
try
{
	
$connexion = new PDO('mysql:host=localhost;dbname=plategesedu', 'root', '');
$requete="select * from etudiant";
$resultat=$connexion->query($requete);
foreach ($resultat as $row)
{

?>
<tr>
        <td><?php echo  $row['ID'] ; ?></td>
        <td><?php echo $row['NOM'] ; ?></td>
        <td><?php echo $row['PRENOM'] ; ?></td>
		 <td><?php echo $row['LOGIN'] ; ?></td>
		  <td><?php echo $row['PASSWORD'] ; ?></td>
		    <td><?php echo $row['ADRESSE'] ; ?></td>
		   <td><?php echo $row['TEL'] ; ?></td>
		   <td><?php echo $row['code'] ; ?></td>
		<td>
		<a href="http://localhost:80/plategesedu/modifier.php?id=<?php echo $row['Nom'] ; ?>">
          <span class="glyphicon glyphicon-pencil"></span> Modifier
        </a></td>
</tr> 
<?php
}
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>   
    </tbody>
  </table>

</div>