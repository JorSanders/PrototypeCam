<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";

class Incident {

    private $id;
    private $queryManager;

    public function __construct($id) {
        $this->id = $id;
        $this->queryManager = new QueryManager;
    }

    public function getValues() {
        /* required info to execute the query */
        $colomnNames = array("Id, Title, Description, CategoryId, DateMentioned, DateFinished, PriorityId, Archived, Deleted");
        $tableName = "incident";
        $whereConditions = array("id = " . $this->id);
        
        /* get the result from the query
         * there can only be one with matching ids
         * so the values are the first values from the frist index from the result aray
         */
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);
        $values = $result[0];
        
        return ($values);
    }

    public function setValues($values) {
        
    }

}
