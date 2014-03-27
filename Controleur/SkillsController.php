<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Skills/SkillsDAO.class.php';

class SkillsController {

    private $dao;

    function __construct() {
        $this->dao = new \FilRouge\Modele\Skills\SkillsDAO();
    }
    
    function skillDisplay(){
        include_once '/../Vue/pageCompetences.php';
    }
    
    //controller permettant d'afficher la liste complète des skills dans le menu de recherche
    function searchUserSkill(){
        //$skills est un tableau d'objet skills
        $skills = $this->dao->selectUserSchool("");
        
    }

}
