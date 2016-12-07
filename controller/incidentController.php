<?php

class IncidentController {

    public function __construct() {

        require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\incidentClass.php";
        $this->createIncident();
    }

    public function createIncident() {
        $incident = new Incident();
    }

}

