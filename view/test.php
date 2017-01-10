<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();



$incidentList = $incidentController->selectAllIncidents();

echo "<pre>";
print_r($incidentList);
echo "</pre>";



$properties["StatusId"] = 2;
$properties["LocationId"] = 1;
$properties["LocationDescription"] = "beneden";

$incidentController->updateIncident($properties, 1);


$incidentList = $incidentController->selectAllIncidents();


