<?php

if (!isset($_GET['ctrl'])) {
    include './Vue/pageAccueil.php';
    echo "youhou";
} else {
    //****************************************************************
    //si le lien contient un paramètre dans ctrl
    if (isset($_GET['ctrl'])) {
        //************************************************************
        //  CONTROLEUR PAGE PROJETS
        //************************************************************
        //renvoi la page des projets (prototype avec affichage en dur)
        if ($_GET['ctrl'] == "pageprojets") {
            include '/Controleur/ProjectsController.php';
            $project = new \FilRouge\Controleur\ProjectsController();
            $project->projectDisplay();
        }
        //************************************************************
        //  CONTROLEUR PAGE UTILISATEURS
        //************************************************************
        
        //renvoi la page utilisateurs avec le champ de recherche vide
        if ($_GET['ctrl'] == "pageUtilisateurs") {
            include '/Controleur/UsersController.php';
            $user = new FilRouge\Controleur\UserController();
            $user->emptyDisplay();
        }
        
        
        //************************************************************
        //  CONTROLEUR PAGE COMPETENCES
        //************************************************************
        //renvoi la page 
        if ($_GET['ctrl'] == "pageCompetences") {
            include './Controleur/SkillsController.php';
            $skill = new FilRouge\Controleur\SkillsController();
            $skill->skillDisplay();
        }
        //************************************************************
        //  CONTROLEUR PAGE ACCUEIL
        //************************************************************
        if ($_GET['ctrl'] == "pageAccueil") {
            include './Vue/pageAccueil.php';
        }
    }
}