<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";

class status extends databaseObject {

    protected $columnNames = array("Id", "IncidentId", "NameId", "Date");
    protected $tableName = "status";

    public function getProperties($columnNames = NULL) {
        $properties = parent::getProperties($columnNames);
        $properties["statusName"] = $this->getStatusName();
        return $properties;
    }

    private function getStatusName() {
        $colomnNames = array("Name");
        $tableName = "status_name";
        $whereConditions = array("Id = " . $this->id);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $statusName = ($row["Name"]);
            }
            return $statusName;
        }
    }

}
