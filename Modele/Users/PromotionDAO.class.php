<?php

/**
 * Description of PromotionDAO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Users;

use PDO;

include_once("Connection/myconnection.inc.php");
require_once("PromotionDTO.class.php");

class PromotionDAO {
    
    function select ($condition){
        
        $pdo = connection("myimieskills", "myparam");
        $tab = array();
        
        $result = $pdo->query("SELECT promotion_id, promotion_name, promotion_start_date, promotion_end_date FROM promotion " . $condition . ";");



        while ($row = $result->fetchObject()) {
            $id = $row->promotion_id;
            $name = $row->promotion_name;
            $startDate = $row->promotion_start_date;
            $endDate = $row->promotion_end_date;
            $promotion = new PromotionDTO($id, $name, $startDate, $endDate);
            $tab[] = $promotion;
        }

        $result->closeCursor();
        $pdo = disconnect();
        return $tab;
    }
    
    //*************************************************************************************************************
    
    function insert(PromotionDTO $promotion){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("INSERT INTO promotion (promotion_name, promotion_start_date, promotion_end_date) VALUES (?,?,?)");
        
        $name = $promotion->getName();
        $start = $promotion->getStartDate();
        $end = $promotion->getEndDate();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $start, PDO::PARAM_STR);
        $result->bindParam(3, $end, PDO::PARAM_STR);
        
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect();  
    }
    
    //*************************************************************************************************************
    
    function update(PromotionDTO $promotion){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("UPDATE promotion SET promotion_name = ?, promotion_start_date = ?, promotion_end_date = ? WHERE promotion_id = ? ");
        
        $id = $promotion->getId();
        $name = $promotion->getName();
        $start = $promotion->getStartDate();
        $end = $promotion->getEndDate();
        
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->bindParam(2, $start, PDO::PARAM_STR);
        $result->bindParam(3, $end, PDO::PARAM_STR);
        $result->bindParam(4, $id, PDO::PARAM_INT);
        
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect(); 
    }
    
    //*************************************************************************************************************
    
    function delete(PromotionDTO $promotion){
        $pdo = connection("myimieskills", "myparam");
        
        $result = $pdo->prepare("SET foreign_key_checks = 0 ; DELETE FROM promotion WHERE promotion_id = ? ; SET foreign_key_checks = 1 ;");
        
        $id = $promotion->getId();
        
        $result->bindParam(1, $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $result->closeCursor();
        $pdo = disconnect(); 
    }
}
