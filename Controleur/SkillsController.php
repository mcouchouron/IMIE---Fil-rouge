<?php

namespace FilRouge\Controleur;

require_once '../Modele/Skills/SkillsDAO.class.php';

class SkillsController{
    
    private $dao;
    
    function __construct() {
        $this->dao = new \FilRouge\Modele\Users\UsersDAO();
    }
    
    
    
}
