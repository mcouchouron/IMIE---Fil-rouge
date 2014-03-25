<?php

/**
 * Description of SchoolCityDAO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Users;

use PDO;

include_once("Connection/myconnection.inc.php");
require_once("SchoolCityDTO.class.php");

class SchoolCityDAO {

    function select($condition) {
        $pdo = connection("myimieskills", "myparam");
        $tab = array();

        $result = $pdo->query("SELECT school_city_id, school_city_name FROM school_city ".$condition.";");

        


        while ($row = $result->fetchObject()) {
            echo $id = $row->school_city_id;
            echo $name = $row->school_city_name;
            $school = new SchoolCityDTO($id, $name);
            $tab[] = $school;
        }
        $result->closeCursor();
        $pdo = disconnect();
        return $tab;
    }

    function insert(SchoolCityDTO $school) {
        $pdo = connection("myimieskills", "myparam");

        $result = $pdo->prepare("INSERT INTO school_city (school_city_name) VALUES (?);");

        $name = $school->getName();
        $result->bindParam(1, $name, PDO::PARAM_STR);

        $result->execute();

        $result->closeCursor();
        $pdo = disconnect();
    }

    function update(SchoolCityDTO $school) {
        $pdo = connection("myimieskills", "myparam");

        $result = $pdo->prepare("UPDATE school_city SET school_city_name = ? WHERE school_city_id = ? ;");

        $name = $school->getName();
        $id = $school->getId();
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $id, PDO::PARAM_INT);

        $result->execute();

        $result->closeCursor();
        $pdo = disconnect();
    }
    
    function delete(SchoolCityDTO $school){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("SET foreign_key_checks = 0 ; DELETE FROM school_city WHERE school_city_id = ? ;"
                . ". SET foreign_key_checks = 1 ;");
        
        $id = $school->getId();
        
        $result->bindParam(1, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect();
    }
    
}
