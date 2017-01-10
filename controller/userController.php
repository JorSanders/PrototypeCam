<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\userClass.php";

class UserController {

    private $queryManager;
    
    public function __construct() {        
        $this->queryManager = new QueryManager;

    }
    
    public function selectAllUsers(){
        $colomnNames = array ("Firstname", "Surname");
        $tableName = "user";
                
        return ( $this->queryManager->select($colomnNames, $tableName));
    }

}
