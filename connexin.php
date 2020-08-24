<html>

<head>
    <title>Plateforme ESSA</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="./resources/css/essa.css" />
</head>

<body>
<div class="header">
    <img class="logo" src="./resources/images/ESSA.PNG" height="110" width="180" />
    BIENVENUE A L'ECOLE SUPERIEURE DES SCIENCES APPLIQUEES E.S.S.A
    
    <img class="logo" src="./resources/images/CAMES.PNG" height="110" width="180" />
</div>
<form class="auth" action="veriflog.php" method="post">
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
	</body>
	</html>
				