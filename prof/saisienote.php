<?php
 include ("../connexionpod.php");
 ?><html>

<head>
    <title>Plateforme ESSA</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/essa.css" />
</head>

<body>
    <?php
  include ("./header.php");
  $id=$_SESSION['id'] ;
  ?>
    <h2> <?php	echo $_GET["classe"]?></h2>
    <h3> <?php	echo $_GET["eval"]."/".$_GET["NOM"] ."/"."Semestre ".$_GET["semestre"]?></h3>
    <form action="traiternote.php?eval=<?php echo $_GET["eval"]?>&ideve=<?php echo $_GET["ID_EVE"] ?>&NOM=<?php	echo $_GET["NOM"]  ?>&semestre=<?php	echo $_GET["semestre"]  ?>&classe=<?php	echo $_GET["classe"]?>&idmatierepromo=<?php echo $_GET["idmatierepromo"] ?>" method="post">
        <input type="hidden" name="ID_EVE" value="<?php echo $_GET["ideve"] ?>" />
        <input type="hidden" name="ID_MPRO" value="<?php echo $_GET["idmatierepromo"] ?>" />
        <table class="table">
            <thead>
                <tr>
                    <th>CODE</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Tel</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    try
                    {
                      
                      $requete="select  e.*,ep.* from etudiant e
                      INNER JOIN etudiantpromo ep ON ep.ID = e.ID
                      INNER JOIN matierepromo mp ON mp.ID_PROMO = ep.IDPROMO
                      INNER JOIN evaluation ev  ON ev.ID_MPRO = mp.ID_MPRO
                      WHERE ev.ID_EVE = '".$_GET["ideve"]."' AND mp.ID_PROF = '".$id."'";
                      $resultat=$connexion->query($requete);

                      foreach ($resultat as $row)
                      {

                    ?>
                <tr>
                    <td><?php echo $row['code'] ; ?></td>
                    <td><?php echo $row['NOM'] ; ?></td>
                    <td><?php echo $row['PRENOM'] ; ?></td>
                    <td><?php echo $row['TEL'] ; ?></td>
                    <td>
                        <?php
                                  //recupérer la note si ça existe
                            $request="SELECT n.* FROM notes n 
                            WHERE n.ID_ETUPRO= '".$row["ID_ETUPRO"]."'
                            AND n.ID_EVE = '".$_GET["ideve"]."'";
                            $resultat1=$connexion->query($request);
                            $row1  = $resultat1 -> fetch();
                        ?>
                        <input class="form-control" type="text" name="<?php echo $row['ID_ETUPRO'] ; ?>" id="note"
                            value="
                                <?php if ($row1) echo $row1['VALEUR'];
                                else echo "00.00" ?>
                                " size="5" />
                    </td>
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
        <div>
            <div class="col">
                <button type="submit" class="btn btn-warning">ENREGISTRER</button>
            </div>
        </div>
    </form>

    </div>