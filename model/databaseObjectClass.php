<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";

abstract class databaseObject {

    protected $id;
    protected $queryManager;
    protected $tableName;
    protected $columnNames;

    public function __construct($id) {
        $this->id = $id;
        $this->queryManager = new QueryManager;
    }

    public function getProperties($columnNames = NULL) {
        if (!isset($columnNames)) {
            $columnNames = $this->columnNames;
        }

        $whereConditions = array("id = " . $this->id);

        /* get the result from the query
         * there can only be one with matching ids
         * so the values are the first values from the frist index from the result aray
         */
        $result = $this->queryManager->select($columnNames, $this->tableName, $whereConditions);
        $properties = $result[0];

        return ($properties);
    }

    public function setProperties($properties) {
        $whereConditions = array("id = " . $this->id);

        $this->queryManager->update($properties, $this->tableName, $whereConditions);
    }

}
