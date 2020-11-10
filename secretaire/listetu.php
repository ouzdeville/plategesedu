<?php
 include ("../connexionpod.php");
 ?>
 <html>

<head>
    <title>Plateforme ESSA</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/essa.css" />
</head>

<body>
    <?php
  include ("./header.php");

  ?>
  <?php 
$requete="select  * from niveau  WHERE ID_NIV='".$_GET["idniv"]."'";
$resultat=$connexion->query($requete);

 ?>
    <h2> ANNEE SCOLAIRE <?php	echo $_GET["annee"] ?></h2>
  <?php
     foreach($resultat as $row) {
		 echo "<h2>".$row["NOM"]." /".$row["FILIERE"]."</h2>";
}
  
   ?>
   
    <form action="traiternote.php" method="post">
        
        <table class="table">
            <thead>
                <tr>
                    <th>CODE</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Tel</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                    try
                    {
                      
                      $requete="select  e.*,ep.* from etudiant e
                      INNER JOIN etudiantpromo ep ON ep.ID = e.ID
                      WHERE ep.IDPROMO = '".$_GET["ID_PROMO"]."'";
                      $resultat=$connexion->query($requete);

                      foreach ($resultat as $row)
                      {

                    ?>
                <tr>
                    <td><?php echo $row['code'] ; ?></td>
                    <td><?php echo $row['NOM'] ; ?></td>
                    <td><?php echo $row['PRENOM'] ; ?></td>
                    <td><?php echo $row['TEL'] ; ?></td>
                                    </tr>
                <?php
                        }
                        }catch (Exception $e){
                          die('Erreur : ' . $e->getMessage());
                        }
                    ?>
            </tbody>
        </table>
        <br>
      
    </form>

    </div>