<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Incident extends databaseObject {
    protected $columnNames = array ("Id", "Description", "Categoryid", "DateMentioned", 
        "DateFinished", "PriorityId", "Archived", "Deleted");
}