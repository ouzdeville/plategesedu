
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	



<table class="table">
    <thead>
       <tr>
        <th>Id</th>
		 <th>NOM</th>
		 <th>PRENOM</th>
		 <th>LOGIN</th>
		 <th>PASSWORD</th>
        <th>ADRESSE</th>
        <th>TEL</th>
        <th>code</th>
		<th>ACTION</th>
      </tr>
    </thead>
    <tbody>
<?php
try
{
	
$connexion = new PDO('mysql:host=localhost;dbname=plategesedu', 'root', '');
$requete="select * from etudiant";
$resultat=$connexion->query($requete);
foreach ($resultat as $row){
?>
<tr>
        <td><?php echo $row['ID'] ; ?></td>
        <td><?php echo $row['NOM'] ; ?></td>
        <td><?php echo $row['PRENOM'] ; ?></td>
        <td><?php echo $row['LOGIN'] ; ?></td>
        <td><?php echo $row['PASSWORD'] ; ?></td>
        <td><?php echo $row['ADRESSE'] ; ?></td>
        <td><?php echo $row['TEL'] ; ?></td>
        <td><?php echo $row['code'] ; ?></td>
		<td>
		<a href="http://localhost:80/plategesedu/modifier.php?id=<?php echo $row['id'] ; ?>">
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
