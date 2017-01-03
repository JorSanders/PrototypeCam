<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\userClass.php";


class Comment extends databaseObject {

    protected $columnNames = array("Id", "UserId", "IncidentId", "Message");
    protected $tableName = "Comment";

    public function getProperties($columnNames = NULL) {
        $properties = parent::getProperties($columnNames);
        
        $properties["User"] = $this->getUser($properties["UserId"]);
        
        return $properties;
    }
    
    private function getUser($userId){
        $user = new User($userId);
        return $user->getProperties();
    }

}
