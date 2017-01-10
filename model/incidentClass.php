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
        $photos = $this->getPhotos();
        $properties["Photos"] = $photos;

        /* get the status */
        $status = $this->getStatus();
        $properties["Status"] = $status;

        /* get the location */
        $location = $this->getLocation();
        $properties["Location"] = $location;

        /* get the users */
        $users = $this->getUsers();
        $properties["Users"] = $users;

        /* get the comments */
        $comments = $this->getComments();
        $properties["Comments"]  = $comments;

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
        /*
         * id
         * title
         * description
         * categoryid
         * datementioned
         * datefinished
         * priorityid
         * archived
         * deleted
         * 
         * statusid
         * status name 
         * loaction id 
         * location description
         * photo location[]
         * 
         */
        
        foreach($this->columnNames as $columnName){
            if ($isset($properties[$columnName])){
                //aply logic here
            }
        }
        parent::setProperties($properties);
    }
}
