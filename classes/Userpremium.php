<?php

require_once __DIR__ . "/User.php";

class Userpremium extends User {
    protected $special_card;
    
    function __construct($name, $lastname, $email, $username, $password, $special_card) {

        parent::__construct($name, $lastname, $email, $username, $password);

        $this->special_card = $special_card;

    }

    public function getUserName() {
        return $this->username;
    }

    public function getPremiumDiscount() {
        
    }
}
