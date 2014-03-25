<?php

/**
 * Description of SkillLevelDTO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Skills;

class SkillLevelDTO {
    
    private $id;
    private $name;

    
    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }



}
