<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Photo_incident extends databaseObject {

    protected $columnNames = array("Id", "IncidentId", "FileLocation");
    protected $tableName = "photo_incident";

}
