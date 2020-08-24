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


    <h2> <?php	echo $_GET["NOM"] ."/"."Semestre ".$_GET["semestre"]?></h2>
    <section class="evalutation">
        <form action="traiterevaluation.php" method="post">
            <input type="hidden" name="idmatierepromo" value="<?php echo $_GET["idmatierepromo"] ?>" />
            <div class="row">
            </div>
            <div class="col">
			<label class="grey" for="type">Type:</label>
                <select name="type" required="required" id="type">
                    <option></option>
                    <option value="Devoir">Devoir</option>
                    <option value="Examen">Examen</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="col">
                <label class="grey" for="username">Entrez La Date D'Evaluation:</label>
                <input required="required" class="form-control" type="date" name="date" id="username" value="" size="23" />
            </div>
            <div>
                <div class="col">
                    <div><label class="grey" for="desc">Description:</label></div>
                    <TEXTAREA required="required" id="desc" name="nom" rows=4 cols=40>Cette évaluation portera sur ...
					</TEXTAREA>
                </div>
            </div>
            <br>
            <div>
                <div class="col">
                    <button type="submit" class="btn btn-warning">ENREGISTRER</button>
                </div>
            </div>
        </form>
    </section>

</body>

</html>