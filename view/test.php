<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\incidentController.php";

$incidentController = new IncidentController();

$allIncidents = $incidentController->selectAllIncidents();

print_r ($allIncidents);