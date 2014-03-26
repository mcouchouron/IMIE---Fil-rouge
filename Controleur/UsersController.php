<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Users/UsersDAO.class.php';

class UserController {

    private $dao;

    function __construct() {
        $this->dao = new \FilRouge\Modele\Users\UsersDAO();
    }
    
    //affichage de tous les utilisateurs
    function userDisplay() {
        //$userlist est réutilisé dans l'include de la vue (en dessous) il contient un tableau d'objet usersDTO
        $userList = $this->dao->select("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

    function userSchoolFilter() {
        //fonction affichant les utilisateurs par école
    }

    function userPromotion() {
        //fonction affichant les utilisateurs par promotion
    }

    function userSkill() {
        //fonction affichant les compétences des utilisateurs
        
    }

}
