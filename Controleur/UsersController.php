<?php

namespace FilRouge\Controleur;

require_once '../Modele/Users/UsersDAO.class.php';

    class UserController{
        
        private $dao;
        
        function __construct() {
            $this->dao = new \FilRouge\Modele\Users\UsersDAO();
        }
        
        function userList(){
            //fonction listant les utilisateurs
        }
        
        function userSchoolFilter(){
            //fonction affichant les utilisateurs par école
        }
        
        function userPromotion(){
            //fonction affichant les utilisateurs par promotion
        }
        
        function userSkill(){
            //fonction affichant les compétences des utilisateurs
        }
    }
