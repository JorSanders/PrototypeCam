<?php

class Comment {

    private $message;

    public function __construct() {
        
    }

    public function getMessage() {
        return ($this->message);
    }

    public function setMessage($message) {
        $this->message = $message;
    }

}
