<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class User extends databaseObject {

    protected $columnNames = array("Id", "Firstname", "Prefix", "Surname", "Email", "Password");
    protected $tableName = "User";

}
