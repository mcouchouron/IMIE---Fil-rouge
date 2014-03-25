<?php

/**
 * Description of SkillLevelDTO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Skills;

class SkillDTO {
    
    private $id;
    private $name;
    private $description;
    private $validated;
    private $creator;
    //this object can have a motherSkill.
    private $motherSkill;
    
    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($id, $name, $description, $validated, $creator, $motherSkill) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->validated = $validated;
        $this->creator = $creator;
        $this->motherSkill = $motherSkill;
    }
    
    //**************************************************************
    //Getter $ Setter
    //************************************************************** 
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getValidated() {
        return $this->validated;
    }

    public function getCreator() {
        return $this->creator;
    }

    public function getMotherSkill() {
        return $this->motherSkill;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setValidated($validated) {
        $this->validated = $validated;
    }

    public function setCreator($creator) {
        $this->creator = $creator;
    }

    public function setMotherSkill($motherSkill) {
        $this->motherSkill = $motherSkill;
    }



}
