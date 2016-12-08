<?php

class File {

    private $fileLocation;

    public function __construct() {
        
    }

    public function getFileLocation() {
        return($this->fileLocation);
    }

    public function setFileLocation($fileLocation) {
        $this->fileLocation = $fileLocation;
    }

}
