<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Location extends databaseObject {

    protected $columnNames = array("Id", "IncidentId", "TypeId", "Description");
    protected $tableName = "location";

    public function getProperties($columnNames = NULL) {
        $properties = parent::getProperties($columnNames);
        $properties["Type"] = $this->getLocationType($properties["TypeId"]);
        return $properties;
    }

    private function getLocationType($typeId) {
        $colomnNames = array("Type");
        $tableName = "location_type";
        $whereConditions = array("Id = " . $typeId);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $locationType = ($row["Type"]);
            }
            return $locationType;
        }
    }

}
