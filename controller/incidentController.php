<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\incidentClass.php";

class IncidentController {

    private $queryManager;

    public function __construct() {
        $this->queryManager = new QueryManager;
    }

    public function selectAllIncidents() {
        $colomnNames = array("Id");
        $tableName = "incident";

        $result = $this->queryManager->select($colomnNames, $tableName);

        foreach ($result as $row) {
            $incident = new Incident($row["Id"]);
            $incidentList[] = $incident;
        }
        return $incidentList;
    }
    
    public function createNewIncident($properties){
        $tableName = "incident";
        $incidentId = $this->queryManager->createEmptyRow($tableName);
        
        $this->updateIncident($properties, $incidentId);
    }
    
    public function updateIncident($properties, $incidentId){
        $incident = new Incident($incidentId);
        $incident->setProperties($properties);
    }

}
