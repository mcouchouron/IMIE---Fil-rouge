<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['login'] = 'Matthieu';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<div id="page">
    <header>
        <img id="p1" src="Vue/vueimages/imieLogo.jpg" alt="logoImie" title="logoImie"/>
        <p id="My">My</p><p id="Imie">imie</p></br>
        <p id="skill">skills</p>
    </header>

    <span id="bandeautitre">
        <p id="titre1">"De l'idée nait</p>
        <p id="titre2">le projet..."</p>
        <div id="zonerecherche">
            <input id="boutonrecherche" type="image" src="Vue/images/loupe.png" />
            <input id="texterecherche" type="text" placeholder="Rechercher" />								
        </div>
    </span>

    <div id="identification">

        <img id ="pictoUser" src="Vue/images/pictoUtilisateur.png"/>

        <!--ici affichage du nom connecté-->
        <p id="nomUser">Bienvenue <?php echo $_SESSION['login']; ?> !</p>
        <!--p id="nomUser">Bienvenue Matthieu</p-->

        <fieldset>	
            <img id ="imageUser" src="Vue/images/portrait.png" alt="photo" title="photofictive"/>
            <input id="notification" name="Notifications" type="submit" value="Notifications"/>
            <input id="deconnexion" name="Deconnexion" type="submit" value="Déconnexion"/>
        </fieldset>	
        <input id="boutonmodifier" type="submit" value="MODIFIER PROFIL"/>
    </div>					

    <nav>
        <div id="boutonhome">
            <a id="boutonhome" href="Vue/pageAccueil.php">| Home |</a>
        </div>
        <div id="boutonprojet">
            <a id="boutonprojet" href="Vue/pageProjets.php">| Projets |</a>
        </div>
        <a id="boutoncompetences" href="Vue/pageCompetences.php">| Compétences |</a>
        <a id="boutonutilisateurs" href="Vue/pageUtilisateurs.php">| Utilisateurs |</a>
    </nav>
</div>