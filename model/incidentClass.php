<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\categoryClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\priorityClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\photoIncidentClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\statusClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\locationClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\userClass.php";

class Incident extends databaseObject {

    protected $columnNames = array("Id", "Description", "CategoryId", "DateMentioned",
        "DateFinished", "PriorityId", "Archived", "Deleted");
    protected $tableName = "incident";

    public function getProperties($columnNames = NULL) {
        $properties = parent::getProperties($columnNames);

        /* get the priority */
        if (isset($properties["PriorityId"])) {
            $priority = $this->getPriority($properties["PriorityId"]);
            $properties["Priority"] = $priority->getProperties();
        }

        /* get the category */
        if (isset($properties["CategoryId"])) {
            $category = $this->getCategory($properties["CategoryId"]);
            $properties["Category"] = $category->getProperties();
        }

        /* get the photos */
        $photosProperties = $this->getPhotos();
        $properties["photosProperties"] = $photosProperties;

        /* get the status */
        $statusProperties = $this->getStatus();
        $properties["statusProperties"] = $statusProperties;

        /* get the location */
        $locationProperties = $this->getLocation();
        $properties["locationProperties"] = $locationProperties;

        /* get the users */
        $userProperties = $this->getUsers();
        $properties["userProperties"] = $userProperties;
        
        /* get the comments */
        

        return $properties;
    }

    private function getCategory($id) {
        $category = new Category($id);
        $category->getProperties();
        return $category;
    }

    private function getPriority($id) {
        $priority = new Priority($id);
        $priority->getProperties();
        return $priority;
    }

    private function getPhotos() {
        $colomnNames = array("Id");
        $tableName = "photo_incident";
        $whereConditions = array("IncidentId = " . $this->id);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);


        if ($result) {
            foreach ($result as $row) {
                $photoIdList[] = ($row["Id"]);
            }

            foreach ($photoIdList as $photoId) {
                $photo = new Photo_incident($photoId);
                $photosProperties[] = $photo->getProperties();
            }
            return $photosProperties;
        }
    }

    private function getStatus() {
        $colomnNames = array("Id");
        $tableName = "status";
        $whereConditions = array("IncidentId = " . $this->id);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $statusIdList[] = ($row["Id"]);
            }

            foreach ($statusIdList as $statusId) {
                $status = new Status($statusId);
                $statusProperties[] = $status->getProperties();
            }
            return $statusProperties;
        }
    }

    private function getLocation() {
        $colomnNames = array("Id");
        $tableName = "location";
        $whereConditions = array("IncidentId = " . $this->id);
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $locationIdList[] = ($row["Id"]);
            }

            foreach ($locationIdList as $locationId) {
                $location = new Location($locationId);
                $locationProperties[] = $location->getProperties();
            }
            return $locationProperties;
        }
    }

    private function getUsers() {
        $colomnNames = array("UserId");
        $tableName = "incident_user";
        $whereConditions = array("IncidentId = $this->id");
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $userIdList[] = ($row["UserId"]);
            }

            foreach ($userIdList as $userId) {
                $user = new User($userId);
                echo $userId;
                $userProperties[] = $user->getProperties();
            }
            return $userProperties;
        }
    }

}
