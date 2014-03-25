<?php
/**
 * Description of SkillsDAO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Skills;

use PDO;

include_once "Connection/myconnection.inc.php";
require_once 'SkillsDTO.php';

class SkillsDAO {
    
    function select ($conditions){
        $pdo = connection("myimieskills", "myparam");
        $tab = array();
        
        $result = $pdo->query("SELECT skill_id, skill_name, skill_description, skill_is_validated, skill_id_1, "
                . "user_id FROM skill ".$conditions.";");
        
        
        while ($row = $result->fetchObject()) {
            $id = $row->skill_id;
            $name = $row->skill_name;
            $description = $row->skill_description;
            $validated = $row->skill_is_validated;
            $motherSkill = $row->skill_id_1;
            $creator = $row->user_id;
            $obj = new SkillDTO($id, $name, $description, $validated, $creator, $motherSkill);
            $tab[]=$obj;
        }
        $result->closeCursor();
        $pdo = disconnect();
        return $tab;
    }
    
    //*************************************************************************************************************
    
    function insert(SkillDTO $skills){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("INSERT INTO skill (skill_name, skill_description, skill_is_validated, "
                . "skill_id_1, user_id) VALUES (?,?,?,?,?)");
        
        $name = $skills->getName();
        $description = $skills->getDescription();
        $validated = $skills->getValidated();
        $motherSkill = $skills->getMotherSkill();
        $creator = $skills->getCreator();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $description, PDO::PARAM_STR);
        $result->bindParam(3, $validated, PDO::PARAM_INT);
        $result->bindParam(4, $motherSkill, PDO::PARAM_INT);
        $result->bindParam(5, $creator, PDO::PARAM_INT);
        
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect();
    }
    
    //*************************************************************************************************************
    
    function update(SkillDTO $skills){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("UPDATE skill SET skill_name = ?, skill_description = ?, skill_is_validated = ?, "
                . "skill_id_1 = ? , user_id = ? WHERE skill_id = ? ");
        
        $name = $skills->getName();
        $description = $skills->getDescription();
        $validated = $skills->getValidated();
        $motherSkill = $skills->getMotherSkill();
        $creator = $skills->getCreator();
        $id = $skills->getId();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $description, PDO::PARAM_STR);
        $result->bindParam(3, $validated, PDO::PARAM_INT);
        $result->bindParam(4, $motherSkill, PDO::PARAM_INT);
        $result->bindParam(5, $creator, PDO::PARAM_INT);
        $result->bindParam(6, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect();
    }
    
    //*************************************************************************************************************
    
    function delete(SkillDTO $skills){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("SET foreign_key_checks = 0 ; DELETE FROM skill WHERE skill_id = ? ; "
                . "SET foreign_key_checks = 1 ;");
        
        $id = $skills->getId();
        
        $result->bindParam(1, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect();
    }
    
}
