<?php

/**
 * Description of NotificationCompetenceDTO
 *
 * @author melanie.dlcdi09
 */

namespace FilRouge\Modele\Notifications;

require_once 'NotificationFactory.class.php';

class NotificationCompetenceDTO extends NotificationFactory{
    
    private $text;
    
    //**************************************************************
    //Constructor
    //**************************************************************
    
    function __construct($text, $date, $id, $creator, $recipient) {
        $this->text = $text;
        parent::__construct($date, $id, $creator, $recipient);
    }
    
    //**************************************************************
    //Getter $ Setter
    //**************************************************************
    
    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

    
    

}
