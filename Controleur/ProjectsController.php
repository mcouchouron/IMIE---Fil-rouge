<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Projects/ProjectsDAO.class.php';

class ProjectsController {

    private $dao;

    function __construct() {
        $this->dao = new \FilRouge\Modele\Projects\ProjectsDAO();
    }

    function projectDisplay() {
        include_once '/../Vue/pageProjets.php';
    }

}
