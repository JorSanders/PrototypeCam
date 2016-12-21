<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Priority extends databaseObject {

    protected $columnNames = array("Id", "Description");
    protected $tableName = "Priority";

}
