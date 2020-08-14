<html>
             <head>
			 <title>Plateforme ESSA</title>
			  <h1> VOUS ETES DANS LA PAGE D'AUTENTIFICATION DES ACTEURS DE E.S.S.A</h1>
			 <meta charset="UTF-8"/>
			 </head>
        <body>
	<img class="a" src="ESSA.PNG" height="110" width="180"/>
		<img class="b" src="CAMES.PNG" height="110" width="180"/>
<link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="essa.css"/>
<div style="width:400px; margin:auto">
<form action="veriflog.php" method="post">
					<?php
					 if(isset($_GET["info"])){
							echo  $_GET["info"];
						}
						?>
					<h2>AUTHENTIFIEZ  VOUS  ICI </h2>	
					  <div class="col">                    		
							<label class="grey" for="username">Profil:</label>
							<select name="profil">
									<option value="etudiant">Etudiant</option>
									<option value="prof">Professeur</option>
									<option value="secretaire">Secretaire</option>
							</select >
			
					</div>
					</br>
                 	<div class="col">                    		
					<label class="grey" for="username">Entrez votre Login:</label>
					<input class="form-control" type="text" name="Login" id="username" required value="" size="50" />
					</div>
					</br>
					<div class="col">                    		
					<label class="grey" for="username">Entrez votre Mot de passe:</label>
					<input class="form-control" type="Password" name="Password" id="username" required value="" size="50" />
					</div> 
                    </br>								
					<button  type="submit" class="btn btn-warning">VALIDER</button>	
				</form>
				</div>
			<footer class="c">www.essa.com</footer>
	</body>
	</html>
				