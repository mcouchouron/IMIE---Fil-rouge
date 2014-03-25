<?php

/**
 * Description of SkillLevelDAO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Skills;

use PDO;

include_once "Connection/myconnection.inc.php";
require_once 'SkillLevelDTO.class.php';

class SkillLevelDAO {
     
    function select($condition){
        $pdo = connection("myimieskills", "myparam");
        $tab = array();
        
        $result = $pdo->query("SELECT skill_level_id, skill_level_name FROM skill_level ".$condition.";");
        
        while ($row = $result->fetchObject()) {
            echo $id = $row->skill_level_id;
            echo $name = $row->skill_level_name;
            $obj = new SkillLevelDTO($id, $name);
            $tab[] = $obj;
        }
        
        
        $result->closeCursor();
        $pdo = disconnect(); 
        return $tab;
    }
    
    //*************************************************************************************************************
    
    function insert(SkillLevelDTO $level){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("INSERT INTO skill_level (skill_level_name) VALUES (?);");
        
        $name = $level->getName();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect(); 
    }
    
    //*************************************************************************************************************
    
    function update(SkillLevelDTO $level){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("UPDATE skill_level SET skill_level_name = ? WHERE skill_level_id = ? ;");
        
        $name = $level->getName();
        $id = $level->getId();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect(); 
    }
    
    //*************************************************************************************************************
    
    function delete(SkillLevelDTO $level){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("SET foreign_key_checks = 0 ; DELETE FROM skill_level WHERE skill_level_id = ? ; SET foreign_key_checks = 1 ");
        
        $id = $level->getId();
        
        $result->bindParam(1, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect(); 
    }
    
}
