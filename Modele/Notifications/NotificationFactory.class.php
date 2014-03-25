<?php

namespace FilRouge\Modele\Notifications;

abstract class NotificationFactory {
    protected $id;
    protected $date;
    protected $creator;
    protected $recipient;


    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($date, $id, $creator, $recipient){
        $this->id = $id;
        $this->date = $date;
        $this->creator = $creator;
        $this->recipient = $recipient;
    }
    
    //**************************************************************
    //Getter $ Setter
    //**************************************************************
    
    public function getId() {
        return $this->id;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getCreator() {
        return $this->creator;
    }

    public function getRecipient() {
        return $this->recipient;
    }

    public function setCreator($creator) {
        $this->creator = $creator;
    }

    public function setRecipient($recipient) {
        $this->recipient = $recipient;
    }



}
