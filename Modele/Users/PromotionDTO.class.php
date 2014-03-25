<?php
/**
 * Description of PromotionDTO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Users;

class PromotionDTO {
    private $id;
    private $name;
    private $startDate;
    private $endDate;
    
    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($id, $name, $startDate, $endDate) {
        $this->id = $id;
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    //**************************************************************
    //Getter & Setter
    //**************************************************************
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }


    
}
