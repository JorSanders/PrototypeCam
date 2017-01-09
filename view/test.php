<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();

$properties = array("Archived = 1 ");
//$incidentController->createNewIncident($properties);

$incidentList = $incidentController->selectAllIncidents();

foreach ($incidentList as $incident) {
    echo "<pre>";
    print_r($incident);
    echo "</pre>";
}

