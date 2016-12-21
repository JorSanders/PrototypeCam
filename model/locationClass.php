<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class Location extends databaseObject {

    protected $columnNames = array("Id", "IncidentId", "TypeId");
    protected $tableName = "location";

    public function getProperties($columnNames = NULL) {
        $properties = parent::getProperties($columnNames);
        $properties["locationDetails"] = $this->getLocationDetails();
        return $properties;
    }

    private function getLocationDetails() {
        $colomnNames = array("Type", "Description");
        $tableName = "location_type";
        $whereConditions = array("Id = " . $this->id);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $locationDetails["Type"] = ($row["Type"]);
                $locationDetails["Description"] = ($row["Description"]);
            }
            return $locationDetails;
        }
    }

}
