<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\databaseObjectClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\categoryClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\priorityClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\photoIncidentClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\statusClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\locationClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\userClass.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\model\commentClass.php";

class Incident extends databaseObject {

    protected $columnNames = array("Id", "Title", "Description", "CategoryId", "DateMentioned",
        "DateFinished", "PriorityId", "Archived", "Deleted");
    protected $tableName = "incident";

    public function getProperties($columnNames = NULL) {
        $this->properties = parent::getProperties($columnNames);

        /* get the priority */
        if (isset($this->properties["PriorityId"])) {
            $priority = $this->getPriority($this->properties["PriorityId"]);
            $this->properties["Priority"] = $priority->getProperties();
        }

        /* get the category */
        if (isset($this->properties["CategoryId"])) {
            $category = $this->getCategory($this->properties["CategoryId"]);
            $this->properties["Category"] = $category->getProperties();
        }

        /* get the photos */
        $photos = $this->getPhotos();
        $this->properties["Photos"] = $photos;

        /* get the status */
        $status = $this->getStatus();
        $this->properties["Status"] = $status;

        /* get the location */
        $location = $this->getLocation();
        $this->properties["Location"] = $location;

        /* get the users */
        $users = $this->getUsers();
        $this->properties["Users"] = $users;

        /* get the comments */
        $comments = $this->getComments();
        $this->properties["Comments"] = $comments;

        return $this->properties;
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
                $userProperties[] = $user->getProperties();
            }
            return $userProperties;
        }
    }

    private function getComments() {
        $colomnNames = array("Id");
        $tableName = "comment";
        $whereConditions = array("IncidentId = $this->id");
        $result = $this->queryManager->select($colomnNames, $tableName, $whereConditions);

        if ($result) {
            foreach ($result as $row) {
                $commentIdList[] = ($row["Id"]);
            }

            foreach ($commentIdList as $commentId) {
                $comment = new Comment($commentId);
                $commentProperties[] = $comment->getProperties();
            }


            return $commentProperties;
        }
    }

    public function setProperties($properties) {
        foreach ($this->columnNames as $columnName) {
            /* update the incident table */
            if (isset($properties[$columnName])) {
                $incidentProperties[$columnName] = $properties[$columnName];
                parent::setProperties($incidentProperties);
            }
        }

        /* update the status */
        if (isset($properties["StatusId"])) {
            $this->updateStatus($properties);
        }

        /* update the location */
        if (isset($properties["LocationId"]) &&
                isset($properties["LocationDescription"])) {
            $this->updateLocation($properties);
        }
    }

    private function updateStatus($properties) {
        /* checks if the proerties are set */
        if (!isset($this->properties)) {
            $this->properties = $this->getProperties();
        }
        
        /* get the latest status */
        $exists = false;
        if (isset($this->properties["Status"])) {
            $latest = array_search(max($this->properties["Status"]), $this->properties["Status"]);
            if (isset($this->properties["Status"][$latest]["NameId"])) {
                /* checks if the status has changed */
                if ($this->properties["Status"][$latest]["NameId"] == $properties["StatusId"]) {
                    $exists = true;
                }
            }
        }
        /* create new status and set the values */
        if (!$exists) {
            $status = new Status();
            $statusProperties["IncidentId"] = $this->id;
            $statusProperties["NameId"] = $properties["StatusId"];
            $status->setProperties($statusProperties);
        }
    }

    private function updateLocation($properties) {
        /* checks if the proerties are set */
        if (!isset($this->properties)) {
            $this->properties = $this->getProperties();
        }

        /* check if location already exists */
        $exists = false;
        if (isset($this->properties["Location"])) {
            if (is_array($this->properties["Location"])) {
                foreach ($this->properties["Location"] as $location) {
                    if ($location["Description"] === $properties["LocationDescription"]) {
                        $exists = true;
                    }
                }
            }
        }
        /* if it doesnt exist update the location */
        if (!$exists) {
            $location = new Location();
            $location->id;
            $locationProperties["IncidentId"] = $this->id;
            $locationProperties["TypeId"] = $properties["LocationId"];
            $locationProperties["Description"] = $properties["LocationDescription"];
            $location->setProperties($locationProperties);
        }
    }

}
