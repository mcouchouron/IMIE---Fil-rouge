<?php

if (!isset($_GET['ctrl'])) {
    include './Vue/pageAccueil.php';
    echo "youhou";
} else {
    if (isset($_GET['ctrl'])) {
        if($_GET['ctrl'] == "pageprojets"){
            include '/Controleur/ProjectsController.php';
            $project = new \FilRouge\Controleur\ProjectsController();
            $project->projectDisplay();
        }
        if($_GET['ctrl']== "pageUtilisateurs"){
            include '/Controleur/UsersController.php';
            $user = new FilRouge\Controleur\UserController();
            $user->userDisplay();
        }
        if($_GET['ctrl']=="pageCompetences"){
            include './Controleur/SkillsController.php';
            $skill = new FilRouge\Controleur\SkillsController();
            $skill->skillDisplay();
        }
       if($_GET['ctrl']=="pageAccueil"){
           include './Vue/pageAccueil.php';
       }
    }
    
}