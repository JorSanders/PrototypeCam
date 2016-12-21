<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Category extends databaseObject {

    protected $columnNames = array("Id", "Name", "Description");
    protected $tableName = "Category";

}
