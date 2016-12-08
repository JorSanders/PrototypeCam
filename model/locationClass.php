<?php

class Location {

    private $value;
    private $type;

    public function __construct() {
        
    }

    public function getValue() {
        return ($this->value);
    }

    public function setValue($value) {
        $this->value = $value;
    }

}
