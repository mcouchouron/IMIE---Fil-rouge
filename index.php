<?php

if (!isset($_GET['ctrl']) || !isset($_GET['action'])) {
    include './Vue/pageAccueil.php';
} else {
    if (isset($_GET['ctrl'])) {
        if($_GET['ctrl'] == "pageProjets"){
            include_once './Controleur/ProjectsController.php';
            $project = new \FilRouge\Controleur\ProjectsController();
            $project->projectDisplay();
        }
        if($_GET['ctrl']== "pageUtilisateurs"){
            include_once './Vue/pageUtilisateurs.php';
        }
    }
    
}