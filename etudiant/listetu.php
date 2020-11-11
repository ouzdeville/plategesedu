
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
<table class="table">
    <thead>
       <tr>
        <th>ID</th>
		 <th>NOM</th>
		 <th>PRENOM</th>
		 <th>LOGIN</th>
		 <th>PASSWORD</th>
        <th>ADRESSE</th>
        <th>TEL</th>
        <th>code</th>

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
		
</tr> 
<?php
}
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
           
      
    </tbody>
  </table>

</div>
