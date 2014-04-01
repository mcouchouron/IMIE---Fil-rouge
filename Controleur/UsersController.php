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

    //******************************************************************************************************

    /*
     * La fonction qui suit n'est pas très MVC mais nous n'avions pas le temps de mettre cette 
     * fonction QUE dans le skillController et y faire appel ici (ou au niveau du front controller).
     * Il aurait fallut découper le HTML en module (module arborescence, module menu liste 
     * des écoles).
     * Nous retrouvons donc cette fonction ici et dans skillController ...
     */

    //on doit entrer les paramètres (0,0,$skills) pour l'utiliser
    function treeView($parent, $level, $skills) {
        $html = "";
        $lastLevel = 0;

        //si $level et $lastLevel renvoient false alors le caractère html optgroup sera renvoyé car cela veut dire
        //qu'il n'y a rien. cela sert la première fois
        if (!$level && !$lastLevel) {
                $html .= "\n<optgroup id=\"champliste1\" label=\" - Choisissez - \">\n";
            }
            
        
        //"\n signifie retour à la ligne
        //$noeud est la variable qui contient l'id parent, elle est null si c'est une catégorie
        foreach ($skills as $noeud) {
           if (!$level && !$lastLevel) {
                $html .= "\n<optgroup id=\"champliste1\" label=\"".$noeud->getName()."\">\n";
            } 
            
            //si $parent est égale à l'id parent, cela veut dire qu'il fait partie d'une catégorie ...
            //sinon cela veut dire que c'est une catégorie et on sort de la boucle
            if ($parent == $noeud->getMotherSkill()) {
                //... et donc subir le traitement suivant
                //si $lastLevel est inférieur au niveau actuel cela veut dire que nous avons affaire à 
                //une catégorie (vu que l'id d'une catégorie est null)
                if ($lastLevel < $level) {
                    $html .= "\n<optgroup id=\"champliste1\" label=\"" . $noeud->getName() . "\">\n";
                }
                else{
                    //sinon c'est une compétence qui appartient à cette catégorie
                    $html .= "<option  id=\"champliste2\" value=\"" . $noeud->getId() . "\">" . $noeud->getName() . "</option>";
                }

                //on égalise les niveaux, comme ça quand on continera à parcourir le tableau, si l'id est inférieur 
                //cela voudra dire que c'est une catégorie (car l'id d'une catégorie est null)
                $lastLevel = $level;

                //je continue à parcourir le tableau tant que le liveau précédent est inférieur au niveau actuel
                $html .= $this->treeView($noeud->getId(), ($level + 1), $skills);
            }
        }

        //je ferme mes balises :
        //si le niveau est égal à celui actuel et est différent de 0.
        if (($lastLevel == $level) && ($lastLevel != 0)) {
            $html .= "</optgroup>\n";
            //si le nivaeu est juste égal à 0    
        } else if ($lastLevel == $level) {
            $html .= "</optgroup>\n";
            //sinon c'est une option
        }

        return $html;
    }

    //******************************************************************************************************
    function emptyDisplay() {
        //je renvoi un tableau vide pour ne pas avoir d'affichage dans le champ des résultats
        $userList = array();

        //nous affichons (grâce aux variables de même nom) la liste des école présentes dans la BDD
        $school = $this->schoolDao->select("");

        $skills = $this->skillsDAO->select("ORDER BY skill_id");
        $html = $this->treeView(null, 0, $skills);

        include_once '/../Vue/pageUtilisateurs.php';
    }

    //******************************************************************************************************
    //affichage de tous les utilisateurs et leur école
    function searchUserSchool() {
        //$userlist est réutilisé dans l'include de la vue (en dessous) il contient un tableau d'objet usersDTO
        $userList = $this->UserDao->selectUserSchool("");
        include_once '/../Vue/pageUtilisateurs.php';
    }

}
