<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Users/UsersDAO.class.php';
require_once '/../Modele/Users/SchoolCityDAO.class.php';

class UserController {

    private $userDao;
    private $schoolDao;
    private $skillsDAO;

    function __construct() {
        $this->userDao = new \FilRouge\Modele\Users\UsersDAO();
        $this->schoolDao = new \FilRouge\Modele\Users\SchoolCityDAO();
        $this->skillsDAO = new \FilRouge\Modele\Skills\SkillsDAO();
    }

    function emptyDisplay() {
        //je renvoi un tableau vide pour ne pas avoir d'affichage dans le champ des résultats
        $userList = array();
        $school = $this->schoolDao->select("");
        $skills = $this->skillsDAO->select("");
        include_once '/../Vue/pageUtilisateurs.php';
//   function maFonctionRecursive($parent=0) {
//   $tableau = array();
//   $sql = " SELECT ... WHERE parent_id = ". $parent;
//   ...
//   while(...) { // pour chaque page
//      $page_id = ... ; // récup de l'id de la page
//
//      $tableau[] = array( // récup des paramètres et appel récursif
//         'id' => $page_id
//         , 'name' => $page_nom
//         , 'children' => maFonctionRecursive($page_id));
//   }
//   return $tableau;
//}  
    }

    //affichage de tous les utilisateurs et leur école
    function searchUserSchool() {
        //$userlist est réutilisé dans l'include de la vue (en dessous) il contient un tableau d'objet usersDTO
        $userList = $this->UserDao->selectUserSchool("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

}
