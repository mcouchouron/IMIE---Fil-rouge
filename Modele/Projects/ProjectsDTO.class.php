<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjectsDTO
 *
 * @author melanie.dlcdi09
 */
namespace FilRouge\Modele\Projects;

class ProjectsDTO {
    private $id;
    private $name;
    private $description;
    private $progression;
    private $startDate;
    private $endDate;
    private $projectManager;
    private $creator;
    private $users = array();
    private $notification;


    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($id, $name, $description, $progression, $startDate, $endDate, $creator, $notification) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->progression = $progression;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->creator = $creator;
        $this->notification = $notification;
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

    public function getProgression() {
        return $this->progression;
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

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setProgression($progression) {
        $this->progression = $progression;
    }

    public function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    public function setEndDate($endDate) {
        $this->endDate = $endDate;
    }
    
    public function getProjectManager() {
        return $this->projectManager;
    }

    public function getCreator() {
        return $this->creator;
    }

    public function getUsers() {
        return $this->users;
    }

    public function setProjectManager($projectManager) {
        $this->projectManager = $projectManager;
    }

    public function setCreator($creator) {
        $this->creator = $creator;
    }

    public function setUsers($users) {
        $this->users = $users;
    }

    public function getNotification() {
        return $this->notification;
    }

    public function setNotification($notification) {
        $this->notification = $notification;
    }




}
