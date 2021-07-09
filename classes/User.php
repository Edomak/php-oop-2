<?php

class User {
    protected $name;
    protected $lastname;
    protected $email;
    public $username;
    protected $password;

    function __construct($name, $lastname, $email, $username, $password) {

        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
}
