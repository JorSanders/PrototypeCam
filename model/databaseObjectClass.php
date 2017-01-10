<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\database\queryManager.php";

abstract class databaseObject {

    public $id;
    protected $queryManager;
    protected $tableName;
    protected $columnNames;
    protected $properties;

    public function __construct($id = NULL) {
        $this->queryManager = new QueryManager;
        if (isset($id)) {
            $this->id = $id;
        } else {
            $this->id = $this->queryManager->createEmptyRow($this->tableName);
        }
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
        $this->properties = $result[0];

        return ($this->properties);
    }

    public function setProperties($properties) {
        $whereConditions = array("id = " . $this->id);
        /* if the columnname is set in the properties update it */
        foreach ($this->columnNames as $columnName) {
            if (isset($properties[$columnName])) {
                if (is_string($properties[$columnName])){
                    $properties[$columnName] = "'" . $properties[$columnName] . "'";
                }
                $sqlProperties[$columnName] = "$columnName = $properties[$columnName]";
            }
        }

        if (isset($sqlProperties)) {
            $this->queryManager->update($sqlProperties, $this->tableName, $whereConditions);
        }
    }

}
