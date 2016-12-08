<?php

class User {

    private $firstname;
    private $prefix;
    private $surname;
    private $email;
    private $password;

    public function __construct() {
        
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirsname($firstname) {
        $this->firstname = $firstname;
    }

    public function getPrefix() {
        return $this->prefix;
    }

    public function setPrefix($prefix) {
        $this->prefix = $prefix;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPasswrod($password) {
        $this->password = $password;
    }

}
