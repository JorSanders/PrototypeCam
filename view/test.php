<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();

$incidentController->createNewIncident();

$incidentList = $incidentController->selectAllIncidents();

foreach ($incidentList as $incident){
    $incidentValues = $incident->getValues();
    echo "<pre>";
    print_r($incidentValues);
    echo "</pre>";
}

