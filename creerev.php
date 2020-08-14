<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1 class="v">VOUS ÊTES DANS LA PAGE DE LA CREATION DES EVALUATIONS</h1>
			 <meta charset="UTF-8"/>
			 <meta charset="UTF-8"/>
			  <link rel="stylesheet" href="bootstrap.min.css">
			 </head>
        <body>
		<img class="a" src="ESSA.PNG" height="110" width="180"/>
		<img class="b" src="CAMES.PNG" height="110" width="180"/>
  <link rel="stylesheet" href="essa.css"/>
<?php
try
{
	?>
	 <section class="no">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="#">A PROPOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">ACTUALITES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="notifs.php">NOTIFICATIONS</a>
  </li
  <li class="nav-item">
    <a class="nav-link" href="#">FORMATIONS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">CONTACTS</a>
  </li
  <li class="nav-item">
    <a class="nav-link disabled" href="connexin.php" tabindex="-1" aria-disabled="true">CONNEXION</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="connexin.php">DECONNEXION</a>
  </li
</ul>
</section>
 <section class = "pic"> <marquee bgcolor="blue">
<img src="ESSA.PNG" height="150" width="250"/>
<img src="CAMES.PNG" height="150" width="250"/>
<img src="ANAQ.JPG" height="150" width="250"/>
<img src="ESSA1.JPG" height="150" width="250"/>
<img src="ESSA2.JPG" height="150" width="250"/>
<img src="ESSA4.JPG" height="150" width="250"/>
<img src="ESSA5.JPG" height="150" width="250"/>
<img src="ESSA6.JPG" height="150" width="250"/>
<img src="ESSA7.JPG" height="150" width="250"/>
<img src="ESSA8.JPG" height="150" width="250"/>
<img src="ESSA9.JPG" height="150" width="250"/>
<img src="ESSA10.JPG" height="150" width="250"/>
<img src="ESSA11.JPG" height="150" width="250"/>
<img src="ESSA12.JPG" height="150" width="250"/>
<img src="ESSA13.JPG" height="150" width="250"/>
<img src="ESSA14.PNG" height="150" width="250"/>
<img src="ESSA15.PNG" height="150" width="250"/>
<img src="ESSA16.PNG" height="150" width="250"/>
<img src="ESSA17.JPG" height="150" width="250"/>
<img src="ESSA18.JPG" height="150" width="250"/>
<img src="ESSA19.JPG" height="150" width="250"/>
</marquee></section>
<section class="ff">
  <marquee direction="up" > <a href="notifs.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">REGARDER LES NOTIFICATIONS</a></marquee>
 </section>
<link rel="stylesheet" href="bootstrap.min.css">
<div style="width:400px; margin:auto">
<section class="lol">
<form action="traiter.php" method="post">
                    <div class="row">
                 	</div>  
					<div class="col"> 
					<label class="grey" for="username">Entrez La Date D'Evaluation:</label>
					<input class="form-control" type="date" name="date" id="username" value="" size="23" />
					</div>
					<div>  
                  <div class="col"> 
						<div><label class="grey" for="username">Renseigner Le Type D'Evaluation:</label></div>
                      <TEXTAREA name="nom" rows=4 cols=40>C'est-à-dire Un Devoir Ou Un Examen</TEXTAREA>
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
				</div>
<?php
}catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}?>
</div>
