<?php

namespace FilRouge\Controleur;


class ProjectsController{
    
    private $dao;
    
    function __construct() {
        $this->dao = new \FilRouge\Modele\Users\UsersDAO();
    }
    
    function projectDisplay(){
        include_once '/../Vue/pageProjets.php';
    }
    
}

