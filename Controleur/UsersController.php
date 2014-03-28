<?php

namespace FilRouge\Controleur;

require_once '/../Modele/Users/UsersDAO.class.php';
require_once '/../Modele/Users/SchoolCityDAO.class.php';
require_once '/../Modele/Skills/SkillsDAO.class.php';

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

        //nous affichons (grâce aux variables de même nom) la liste des école présentes dans la BDD
        $school = $this->schoolDao->select("");

        /*
         * Ce qui suit n'est pas très MVC mais nous n'avions pas le temps de mettre cette 
         * fonction QUE dans le skillController et y faire appel ici (ou au niveau du front controller).
         * Il aurait fallut découper le HTML en module (module arborescence, module menu liste 
         * des écoles).
         * Nous retrouvons donc cette fonction ici et dans skillController ...
         */

        $skills = $this->skillsDAO->select("");

        //on doit entrer les paramètres (0,0,$skills) pour l'utiliser
        function treeView($parent, $niveau, $skills) {
            $html = "";
            $niveau_precedent = 0;

            //si $niveau et $niveau_precedent renvoie false alors le caractère html optgroup sera renvoyé
            //"\n signifie retour à la ligne
            if (!$niveau && !$niveau_precedent) {
                $html .= "\n<optgroup>\n";
            }

            //$noeud est la variable qui contient l'id parent, elle est null si c'est une catégorie
            foreach ($skills as $noeud) {
                //si $parent est égale à l'id parent, cela veut dire qu'il fait partie d'une catégorie ...
                //sinon cela veut dire que c'est une catégorie et on sort de la boucle
                if ($parent == $noeud['skill_id_1']) {
                    //... et donc subir le traitement suivant
                    //si $niveau_precedent est inférieur au niveau actuel
                    if ($niveau_precedent < $niveau) {
                        $html .= "\n<optgroup id=\"champliste1\">\n";
                    }
                    $html .= "<option id=\"champliste2\" label=\"" . $noeud['skill_name'] . "\">";

                    $niveau_precedent = $niveau;
                    $html .= treeView($noeud['skill_id'], ($niveau + 1), $skills);
                }
            }

            if (($niveau_precedent == $niveau) && ($niveau_precedent != 0)) {
                $html .= "</ul>\n</li>\n";
            } else if ($niveau_precedent == $niveau) {
                $html .= "</ul>\n";
            } else {
                $html .= "</li>\n";
            }

            return $html;
        }

//        function treeView($skills){
//            foreach ($skills as $key => $value){
//                //si motherskill est null, cela veut dire que c'est que c'est une catégorie 
//                if($value->getMotherSkill() == null){
//                    //je fais donc appel à cette même fonction pour continuer à créer des <optgroup>
//                    //j'insère les données en tant qu'<optgroup> en mettant optgroup et option en variable
//                    
//                    //je continue à parcourir mon tableau
//                    treeView($skills);
//                    
//                }
//                //si motherskill contient une valeur, cela veut dire que c'est une compétence
//                if($value->getMotherSkill() == !null){
//                    //j'insère les données en tant <option> de la même façon que précédemment en relation avec l'id contenu
//                    
//                    //je continue à parcourir mon tableau
//                    treeView($skills);
//                }
//                
//                
//            }
//        }

        include_once '/../Vue/pageUtilisateurs.php';
    }

    //affichage de tous les utilisateurs et leur école
    function searchUserSchool() {
        //$userlist est réutilisé dans l'include de la vue (en dessous) il contient un tableau d'objet usersDTO
        $userList = $this->UserDao->selectUserSchool("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

}
