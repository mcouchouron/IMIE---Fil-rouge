<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjectsDAO
 *
 * @author melanie.dlcdi09
 */
namespace FilRouge\Modele\Projects;

use PDO;

include_once("/../Connection/myconnection.inc.php");
require_once("ProjectsDTO.class.php");

class ProjectsDAO {
    
    function select($condition){
        $pdo = connection("myimieskills", "myparam");
        $tab = array();
        
        $result = $pdo->query("SELECT project_id, project_name, project_description, "
                . "project_start_date, project_end_date, user_id, project_state_id, id FROM project  ".$condition.";");
        
        while ($row = $result->fetchObject()) {
            echo $id = $row->project_id;
            echo$name = $row->project_name;
            echo $description = $row->project_description;
            $startDate = $row->project_start_date;
            $endDate = $row->project_end_date;
            $creator = $row->user_id;
            $progression = $row->project_state_id;
            $notification = $row->id;
            $obj = new ProjectsDTO($id, $name, $description, $progression, $startDate, $endDate, $creator, $notification);
            $tab[] = $obj;
            
        }
        
        $result->closeCursor();
        $pdo = disconnect();
        return $tab;
    }
    
    function insert(ProjectsDTO $project){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("");
        
        $result->closeCursor();
        $pdo = disconnect();
    }
    
    function update(){
        
    }
    
    function delete(){
        
    }
}
