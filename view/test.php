<?php
Require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";
$incidentController = new IncidentController();
$incidentList = $incidentController->selectAllIncidents();

echo "<pre>";
print_r($incidentList);
echo "</pre>";
?>