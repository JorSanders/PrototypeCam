<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();

$properties = array("Archived = 1 ");
$incidentController->createNewIncident($properties);

$incidentList = $incidentController->selectAllIncidents();

foreach ($incidentList as $incident){
    $incidentProperties = $incident->getProperties();
    echo "<pre>";
    print_r($incidentProperties);
    echo "</pre>";
}

