<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\incidentClass.php";

class IncidentController {

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
