
<div class="header">
    <img class="logo" src="./resources/images/ESSA.PNG" height="110" width="180" />
    BIENVENUE A L'ECOLE SUPERIEURE DES SCIENCES APPLIQUEES E.S.S.A
    
    <img class="logo" src="./resources/images/CAMES.PNG" height="110" width="180" />
</div>
    <section class="menu">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">A PROPOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">ACTUALITES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notifs.php">NOTIFICATIONS</a>
            </li class="nav-item">
            <a class="nav-link" href="contact.php">FORMATIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACTS</a>
            </li class="nav-item">
            <a class="nav-link disabled" href="connexin.php" tabindex="-1" aria-disabled="true">CONNEXION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="connexin.php">DECONNEXION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="
                        <?php 
                        if ($_SESSION['profil']== 'etudiant')
                           echo "acceuiletu.php";
                        if ($_SESSION['profil']== 'prof')
                           echo "./prof/acceuilprof.php";
                        if ($_SESSION['profil']== 'secretaire')
                           echo "./secretaire/acceuilsec.php";
                        ?>
                ">MON ESPACE</a>
            </li>
         </ul>
    </section>