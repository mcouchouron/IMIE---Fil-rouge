<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Users/UsersDAO.class.php';
require_once '/../Modele/Users/SchoolCityDAO.class.php';

class UserController {

    private $userDao;
    private $schoolDao;

    function __construct() {
        $this->UserDao = new \FilRouge\Modele\Users\UsersDAO();
        $this->schoolDao = new \FilRouge\Modele\Users\SchoolCityDAO();
    }

    function emptyDisplay() {
        $userList = array();
        $school = $this->schoolDao->select("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

    //affichage de tous les utilisateurs et leur école
    function searchUserSchool() {
        //$userlist est réutilisé dans l'include de la vue (en dessous) il contient un tableau d'objet usersDTO
        $userList = $this->UserDao->selectUserSchool("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

}
