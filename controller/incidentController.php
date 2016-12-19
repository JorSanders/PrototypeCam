<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\incidentClass.php";

class IncidentController {

    private $queryManager;
    
    public function __construct() {        
        $this->queryManager = new QueryManager;

    }
    
    public function selectAllIncidents(){
        $colomnNames = array ("Id", "Title", "Description", "CategoryId", 
            "DateMentioned", "DateFinished", "PriorityId", "Archived", "Deleted");
        $tableName = "incident";
                
        return ( $this->queryManager->select($colomnNames, $tableName));
    }

}
