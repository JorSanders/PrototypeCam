<?php

class Incident {

    private $title;
    private $description;
    private $catagoryId;
    private $dateMentioned;
    private $dateFinished;
    private $priority;
    private $archived;
    private $deleted;
    private $locationList;
    private $responsiblityList;
    private $commentList;
    private $catagoryList;
    private $fileList;
    private $statusList;

    public function __construct() {
        
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCatagoryId() {
        return $this->catagoryId;
    }

    public function setCatagoryId($catagoryId) {
        $this->catagory = $catagoryId;
    }

    public function getDateMentioned() {
        return $this->dateMentioned;
    }

    public function setDateMentioned($dateMentioned) {
        $this->dateMentioned = $dateMentioned;
    }

    public function getDateFinished() {
        return $this->dateFinished;
    }

    public function setDateFinished($dateFinished) {
        $this->dateFinished = $dateFinished;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }

    public function getArchived() {
        return $this->archived;
    }

    public function setArchived($archived) {
        $this->archived = $archived;
    }

    public function getDeleted() {
        return $this->deleted;
    }

    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }

    public function getLocationList() {
        return $this->locationList;
    }

    public function setLocationList($locationList) {
        $this->locationList = $locationList;
    }

    public function getResonibilityList() {
        return $this->responsiblityList;
    }

    public function setResonibilityList($responsibilityList) {
        $this->responsiblityList = $responsibilityList;
    }

    public function getCommentList() {
        return $this->commentList;
    }

    public function setCommentList($commentList) {
        $this->commentList = $commentList;
    }

    public function getCatagoryList() {
        return $this->catagoryList;
    }

    public function setCatagoryList($catagoryList) {
        $this->catagoryList = $catagoryList;
    }

    public function getFileList() {
        return $this->fileList;
    }

    public function setFileList($fileList) {
        $this->fileList = $fileList;
    }

    public function getStatusList() {
        return $this->statusList;
    }

    public function setStatusList($statusList) {
        $this->statusList = $statusList;
    }

}
